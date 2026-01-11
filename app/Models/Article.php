<?php
namespace App\Models;
class Article {
    private $id;
    private $title;
    private $publishedDate;
    private $author;
    private $content;
    private $imageUrl;

    public function __construct($id, $title, $author, $content, $imageUrl , $publishedDate) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->imageUrl = $imageUrl;
        $this->publishedDate = $publishedDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }
    public function getPublishedDate() {
        return $this->publishedDate;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getContent() {
        return $this->content;
    }
    public function getImageUrl() {
        return $this->imageUrl;
}
}