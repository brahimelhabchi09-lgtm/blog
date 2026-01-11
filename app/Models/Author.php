<?php
namespace App\Models;
use App\Models\User;
class Author extends User {
    private $role="Author";
    public function getRole() {
        return $this->role;
    }
}