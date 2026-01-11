<?php

namespace Core\Base;

abstract class Middleware {
    abstract public function handle(): void;
    protected function back()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}