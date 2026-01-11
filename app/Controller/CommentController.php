<?php
namespace App\Controller;

use Core\Base\Controller;
use Database\Database;

class CommentController extends Controller {
    public function addComment() {
        $articleId = $_POST['article_id'];
        $readerId = $_SESSION['user_id'];
        $content = $_POST['body'];
        $stmt = Database::getConnection()->prepare("INSERT INTO comments (article_id, reader_id, body) VALUES (?, ?, ?)");
        $stmt->execute([$articleId, $readerId, $content]);
        return $this->back();
    }
    public function deleteComment() {
        $commentId = $_POST['id'] ?? null;
        if ($commentId) {
            $stmt = Database::getConnection()->prepare("DELETE FROM comments WHERE id = ?");
            $stmt->execute([$commentId]);
        }
        return $this->back();
    }
    public function updateComment() {
        $commentId = $_POST['comment_id'] ?? null;
        $content = $_POST['body'] ?? '';
        if ($commentId && !empty(trim(strip_tags($content)))) {
            $stmt = Database::getConnection()->prepare("UPDATE comments SET body = ? WHERE id = ?");
            $stmt->execute([$content, $commentId]);
        }
        return $this->back();
    }
}