<?php
namespace App\Models;
use App\Models\User;
class Reader extends User {
    private $role="Reader";
    public function getRole() {
        return $this->role;
    }
}