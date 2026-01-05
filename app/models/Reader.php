<?php
class Reader extends User {
    private $role="Reader";
    public function getRole() {
        return $this->role;
    }
}