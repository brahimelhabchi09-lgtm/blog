<?php

namespace App\Middleware;
use Core\Base\Middleware;

class IsGuest extends Middleware {
    public function handle(): void {
        if (isset($_SESSION['user_id'])) {
            if (isset($_SESSION['user_role'])) {
                if ($_SESSION['user_role'] === 'Admin') {
                    header("Location: /admin");
                } elseif ($_SESSION['user_role'] === 'Author') {
                    header("Location: /author");
                } else {
                    header("Location: /");
                }
            } else {
                header("Location: /");
            }
            exit();
        }
    }
}