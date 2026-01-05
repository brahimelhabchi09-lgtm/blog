<?php
class Admin extends User {
    private $role="Admin";
    public function getRole() {
        return $this->role;
    }
}