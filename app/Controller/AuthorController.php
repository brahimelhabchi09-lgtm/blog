<?php

namespace App\Controller;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Like;
use App\Models\Reader;
use Core\Base\Controller;
use Database\Database;

class AuthorController extends Controller {
    public function authorDash(){
        return $this->view('author.dashboard',layout: 'author');
    }
    public function manageArticles(){
        $stmt = Database::getConnection()->prepare("SELECT * FROM articles 
        WHERE author_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
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
      
        return $this->view('author.articles',compact('data'),layout: 'author');
    }
    public function likes(){
        $stmt = Database::getConnection()->prepare("SELECT l.* FROM likes l
        JOIN articles a ON a.id = l.article_id
        WHERE a.author_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $rows = $stmt->fetchAll(); 
        $data = [];
        
        foreach($rows  as $row){
            $like = new Like($row['id'], $row['article_id'], $row['reader_id'], $row['created_at']);
            $stmtReader = Database::getConnection()->prepare("SELECT * FROM users WHERE id = ?");
            $stmtReader->execute([$row['reader_id']]);
            $readerRow = $stmtReader->fetch();
            $reader = new Reader($readerRow['id'], $readerRow['first_name'], $readerRow['last_name'], $readerRow['email'], $readerRow['password']);
            $stmtArticle = Database::getConnection()->prepare("SELECT * FROM articles WHERE id = ?");
            $stmtArticle->execute([$row['article_id']]);
            $articleRow = $stmtArticle->fetch();
            $article = new Article($articleRow['id'], $articleRow['title'],$articleRow['author_id'], $articleRow['content'], $articleRow['cover_image'], $articleRow['created_at']);
            $data[] = [
                'like' => $like,
                'reader' => $reader,
                'article' => $article
            ];
        }
        return $this->view('author.likes',compact('data'),layout: 'author');

    }
}

