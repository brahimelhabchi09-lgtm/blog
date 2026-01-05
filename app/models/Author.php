<?php
class Author extends User {
    private $role="Author";
    public function getRole() {
        return $this->role;
    }
}