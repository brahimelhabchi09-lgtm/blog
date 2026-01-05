<?php

class Comment {
    private $id;
    private $body;
    private $publishedDate;

    public function __construct($id, $body) {
        $this->id = $id;
        $this->body = $body;
        $this->publishedDate = date("Y-m-d H:i:s");
    }

    public function getId() {
        return $this->id;
    }

    public function getBody() {
        return $this->body;
    }
}