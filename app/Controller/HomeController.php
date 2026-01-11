<?php

namespace App\Controller;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Reader;
use Core\Base\Controller;
use Database\Database;

class HomeController extends Controller
{
    public function index()
    {  
         $stmt = Database::getConnection()->prepare("SELECT * FROM articles ");
        $stmt->execute();
        $rows = $stmt->fetchAll();
         
        $data = [];
        foreach($rows as $row){
            $article = new Article($row['id'], $row['title'],$row['author_id'], $row['content'], $row['cover_image'], $row['created_at']);
            $stmtCat = Database::getConnection()->prepare("SELECT name FROM categories WHERE id in (SELECT category_id FROM article_category WHERE article_id = ?)");
            $stmtCat->execute([$row['id']]);
            $catRow = $stmtCat->fetchAll();
            
            $categories = [];
            foreach($catRow as $cat){
                $categories[] = new Category($cat['id'], $cat['name'], $cat['description']);
            }
            $stmtAuthor = Database::getConnection()->prepare("SELECT * FROM users WHERE id = ?");
            $stmtAuthor->execute([$row['author_id']]);
            $authorRow = $stmtAuthor->fetch();
            $author = new Author($row['author_id'] , $authorRow['first_name'], $authorRow['last_name'],$authorRow['email'], $authorRow['password']);
            $data[] = [
                'article' => $article,
                'categories' => $categories,
                'author' => $author
            ];
        
        }
        $this->view('home', compact('data'));
    }
    public function article()
    {
        $id = $_GET['id'] ?? null;
        $stmt = Database::getConnection()->prepare("SELECT * FROM articles WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
         
        $article = new Article($row['id'], $row['title'],$row['author_id'], $row['content'], $row['cover_image'], $row['created_at']);
        $stmtCat = Database::getConnection()->prepare("SELECT name FROM categories WHERE id in (SELECT category_id FROM article_category WHERE article_id = ?)");
        $stmtCat->execute([$row['id']]);
        $catRow = $stmtCat->fetchAll();
        
        $categories = [];
        foreach($catRow as $cat){
            $categories[] = new Category($cat['id'], $cat['name'], $cat['description']);
        }
        $stmtAuthor = Database::getConnection()->prepare("SELECT * FROM users WHERE id = ?");
        $stmtAuthor->execute([$row['author_id']]);
        $authorRow = $stmtAuthor->fetch();
        $author = new Author($row['author_id'] , $authorRow['first_name'], $authorRow['last_name'],$authorRow['email'], $authorRow['password']);

        $stmtLikes = Database::getConnection()->prepare("SELECT COUNT(*) as like_count FROM likes WHERE article_id = ?");
        $stmtLikes->execute([$id]);
        $likeData = $stmtLikes->fetch();
        $likeCount = $likeData['like_count'];

        $stmtUserLike = Database::getConnection()->prepare("SELECT *  FROM likes WHERE article_id = ? AND reader_id = ?");
        $stmtUserLike->execute([$id, $_SESSION['user_id'] ?? 0]);
        $isLiked = $stmtUserLike->rowCount() > 0 ? true : false;

        $stmtComments = Database::getConnection()->prepare("SELECT * FROM comments WHERE article_id = ? ORDER BY created_at DESC");
        $stmtComments->execute([$id]);
        $commentsData = $stmtComments->fetchAll();
        $comments=[];
        foreach($commentsData as $commentRow){
            $comment = new Comment($commentRow['id'], $commentRow['article_id'], $commentRow['reader_id'], $commentRow['body'], $commentRow['created_at']);
            
            $stmtReader = Database::getConnection()->prepare("SELECT * FROM users WHERE id = ?");
            $stmtReader->execute([$commentRow['reader_id']]);
            $readerRow = $stmtReader->fetch();
            $reader = new Reader($commentRow['reader_id'], $readerRow['first_name'], $readerRow['last_name'], $readerRow['email'], $readerRow['password']);
            $comments[] = [
                'comment' => $comment,
                'reader' => $reader
            ];
        }
        $stmtCommentsCount = Database::getConnection()->prepare("SELECT COUNT(*) as comment_count FROM comments WHERE article_id = ?");
        $stmtCommentsCount->execute([$id]);
        $commentCountData = $stmtCommentsCount->fetch();
        $commentCount = $commentCountData['comment_count'];

       return $this->view('article', compact('article', 'categories', 'author', 'likeCount', 'isLiked', 'comments', 'commentCount'));
    } 

}