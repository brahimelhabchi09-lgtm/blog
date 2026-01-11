<?php
namespace App\Models;
class Comment {
    private $id;
    private $articleId;
    private $readerId;
    private $body;
    private $createdDate;

    public function __construct($id, $articleId, $readerId, $body, $createdDate) {
        $this->id = $id;
        $this->articleId = $articleId;
        $this->readerId = $readerId;
        $this->body = $body;
        $this->createdDate = $createdDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getBody() {
        return $this->body;
    }
    public function getArticleId() {
        return $this->articleId;
    }
    public function getReaderId() {
        return $this->readerId; 
    }
    public function getCreatedDate() {
        return $this->createdDate;
    }
}