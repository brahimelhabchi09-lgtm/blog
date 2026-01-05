<?php

class Like {
    private $id;
    private $created_at;

    public function __construct($id, $created_at) {
        $this->id = $id;
        $this->created_at = date("Y-m-d H:i:s");
    }
    public function getId() {
        return $this->id;
    }
    public function getCreatedAt() {
        return $this->created_at;
    }
}