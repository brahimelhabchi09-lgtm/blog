<?php

namespace Core\Base;

class Controller
{
    protected function view(string $view, array $data = [], string $layout = 'layout')
    {
        extract($data);

        $view = str_replace('.', '/', $view);

        $viewFile = __DIR__ . '/../../views/' . $view . '.view.php';
        $layoutFile = __DIR__ . '/../../views/layouts/' . $layout . '.view.php';

        if (!file_exists($viewFile)) {
            throw new \Exception("View $view not found");
        }

        require $layoutFile;
    }
    protected function back()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}