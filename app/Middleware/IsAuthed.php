<?php

namespace App\Middleware;
use Core\Base\Middleware;

class IsAuthed extends Middleware {
    public function handle(): void {
        if (!isset($_SESSION['user_id'])) {
            header("Location: /login");
            exit();
        }
    }
}