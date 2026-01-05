<?php

class Article {
    private $id;
    private $title;
    private $publishedDate;

    public function __construct($id, $title, ) {
        $this->id = $id;
        $this->title = $title;
        $this->publishedDate = date("Y-m-d H:i:s");
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }
}