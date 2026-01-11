<?php
namespace App\Controller;

use Core\Base\Controller;
use Database\Database ;

class LikeController extends  Controller {
    public function likeArticle() {
        $articleId = $_POST['article_id'];
        $readerId = $_SESSION['user_id'];
        $stmt = Database::getConnection()->prepare("INSERT INTO likes (article_id, reader_id) VALUES (?, ?)");
        $stmt->execute([$articleId, $readerId]);
        return $this->back();
    }
    public function unlikeArticle() {
        $articleId = $_POST['article_id'];
        $readerId = $_SESSION['user_id'];
        $stmt = Database::getConnection()->prepare("DELETE FROM likes WHERE article_id = ? AND reader_id = ?");
        $stmt->execute([$articleId, $readerId]);
        return $this->back();
    }
    
}