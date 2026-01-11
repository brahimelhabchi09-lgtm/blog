<?php
namespace App\Models;
use App\Models\User;
class Admin extends User {
    private $role="Admin";
    public function getRole() {
        return $this->role;
    }
}