<?php

namespace App\Middleware;
use Core\Base\Middleware;

class IsReader extends Middleware {
    public function handle(): void {
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'Reader') {
           $this->back();
        }
    }
}