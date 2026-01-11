<?php 
namespace App\Controller;

use App\Models\Article;
use App\Models\Category;
use Core\Base\Controller;
use Database\Database;

class ArticleController extends Controller {
    
    public function create(){
        $stmt = Database::getConnection()->prepare("SELECT * FROM categories");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $categories = [];
        foreach($data as $row){
            $categories[] = new Category($row['id'], $row['name'], $row['description']);
        }
        return $this->view('author.addArticle',compact('categories'),layout: 'author');
    }
       public function edit(){
        $stmt = Database::getConnection()->prepare("SELECT * FROM categories");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $categories = [];
        foreach($data as $row){
            $categories[] = new Category($row['id'], $row['name'], $row['description']);
        }   
        $id=$_GET['id'] ?? null;
      
        if(!$id){
            header("Location: /author/articles");
            exit();
        }
        $stmtArticle = Database::getConnection()->prepare("SELECT * FROM articles WHERE id = ?");
        $stmtArticle->execute([$id]);
        $articleData = $stmtArticle->fetch();
        if(!$articleData){
            header("Location: /author/articles");
            exit();
        }   
        $article= new Article($articleData['id'], $articleData['title'],$articleData['author_id'], $articleData['content'], $articleData['cover_image'], $articleData['created_at']);
        
        $stmtCat = Database::getConnection()->prepare("SELECT category_id FROM article_category WHERE article_id = ?");
        $stmtCat->execute([$id]);
        $articleCategories = $stmtCat->fetchAll();
        return $this->view('author.editArticle',compact('categories','article','articleCategories'),layout: 'author');
    }
    public function store(){
      $title = $_POST['title'] ?? '';
      $content = $_POST['content'] ?? '';
      $categories = $_POST['categories'] ?? null;
      $author_id = $_SESSION['user_id'] ?? null;
      $cover=$_FILES['cover'] ?? null;

      
        if(empty($title) || empty(trim(strip_tags($content))) || empty($author_id)){
            $_SESSION['error'] = "Veuillez remplir tous les champs obligatoires.";
            header("Location: /author/article/create");
            exit();
        }

        if ($cover && $cover['error'] === UPLOAD_ERR_OK) {
            $uploadDir = realpath(__DIR__ . '/../../public') . '/uploads/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            if (!is_uploaded_file($cover['tmp_name'])) {
                die('Not a valid uploaded file');
            }

            $fileName = uniqid() . '_' . basename($cover['name']);
            $uploadFilePath = $uploadDir . $fileName;

            if (move_uploaded_file($cover['tmp_name'], $uploadFilePath)) {
                $coverPath = '/uploads/' . $fileName;
            } else {
                $coverPath = null;
            }
        } else {
            $coverPath = null;
        }

        $query = "INSERT INTO articles (title, content, author_id, cover_image) VALUES (?, ?, ?, ?)";
        $conn = Database::getConnection();
        $stmt = $conn->prepare($query);
        if($stmt->execute([$title, $content, $author_id, $coverPath])){
            $article_id = $conn->lastInsertId();
            if($categories && is_array($categories)){
                $catQuery = "INSERT INTO article_category (article_id, category_id) VALUES (?, ?)";
                $catStmt = $conn->prepare($catQuery);
                foreach($categories as $category_id){
                    $catStmt->execute([$article_id, $category_id]);
                }
            }
            $_SESSION['success'] = "Article publié avec succès.";
            header("Location: /author/articles");
            exit();
        }else{
            $_SESSION['error'] = "Une erreur est survenue lors de la publication de l'article. Veuillez réessayer.";
            header("Location: /author/article/create");
            exit();
        }

}
   public function update(){
      $id = $_POST['id'] ?? null;
      $title = $_POST['title'] ?? '';
      $content = $_POST['content'] ?? '';
      $categories = $_POST['categories'] ?? null;
      $cover=$_FILES['cover'] ?? null;

      
        if(!$id || empty($title) || empty(trim(strip_tags($content)))){
            $_SESSION['error'] = "Veuillez remplir tous les champs obligatoires.";
            header("Location: /author/article/edit?id=$id");
            exit();
        }

        if ($cover && $cover['error'] === UPLOAD_ERR_OK) {
            $uploadDir = realpath(__DIR__ . '/../../public') . '/uploads/';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            if (!is_uploaded_file($cover['tmp_name'])) {
                die('Not a valid uploaded file');
            }

            $fileName = uniqid() . '_' . basename($cover['name']);
            $uploadFilePath = $uploadDir . $fileName;

            if (move_uploaded_file($cover['tmp_name'], $uploadFilePath)) {
                $coverPath = '/uploads/' . $fileName;
            } else {
                $coverPath = null;
            }
        } else {
            $coverPath = null;
        }

        if(!$coverPath){
            $stmtCover = Database::getConnection()->prepare("SELECT cover_image FROM articles WHERE id = ?");
            $stmtCover->execute([$id]);
            $cover_image = $stmtCover->fetchColumn();
            unlink(realpath(__DIR__ . '/../../public') . '/uploads/' . $cover_image);
        }

        $query = "UPDATE articles SET title = ?, content = ?" . ($coverPath ? ", cover_image = ?" : "") . " WHERE id = ?";
        $conn = Database::getConnection();
        $stmt = $conn->prepare($query);
        $params = [$title, $content];
        if ($coverPath) {
            $params[] = $coverPath;
        }
        $params[] = $id;

        if($stmt->execute($params)){
            $delCatQuery = "DELETE FROM article_category WHERE article_id = ?";
            $delCatStmt = $conn->prepare($delCatQuery);
            $delCatStmt->execute([$id]);

            if($categories && is_array($categories)){
                $catQuery = "INSERT INTO article_category (article_id, category_id) VALUES (?, ?)";
                $catStmt = $conn->prepare($catQuery);
                foreach($categories as $category_id){
                    $catStmt->execute([$id, $category_id]);
                }
            }
            $_SESSION['success'] = "Article mis à jour avec succès.";
            header("Location: /author/articles");
            exit();
        }else{
            $_SESSION['error'] = "Une erreur est survenue lors de la mise à jour de l'article. Veuillez réessayer.";
            header("Location: /author/article/edit?id=$id");
            exit();
        }
    }
   public function delete(){
        $id = $_GET['id'] ?? null;

        if(!$id){
            header("Location: /author/articles");
            exit();
        }

        $stmtCover = Database::getConnection()->prepare("SELECT cover_image FROM articles WHERE id = ?");
        $stmtCover->execute([$id]);
        $cover_image = $stmtCover->fetchColumn();
        if($cover_image){
            unlink(realpath(__DIR__ . '/../../public') . '/uploads/' . $cover_image);
        }

        $delCatQuery = "DELETE FROM article_category WHERE article_id = ?";
        $delCatStmt = Database::getConnection()->prepare($delCatQuery);
        $delCatStmt->execute([$id]);

        $query = "DELETE FROM articles WHERE id = ?";
        $stmt = Database::getConnection()->prepare($query);
        if($stmt->execute([$id])){
            $_SESSION['success'] = "Article supprimé avec succès.";
        }else{
            $_SESSION['error'] = "Une erreur est survenue lors de la suppression de l'article. Veuillez réessayer.";
        }
        header("Location: /author/articles");
        exit();
    }
    
}
