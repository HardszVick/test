<?php
// app/core/Controller.php

class Controller
{
    protected function view($path, $data = [])
    {
        extract($data);

        ob_start();
        require __DIR__ . '/../views/pages/' . $path . '.php';
        $content = ob_get_clean();

        require __DIR__ . '/../views/layouts/main.php';
    }
}
