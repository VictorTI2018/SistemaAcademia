<?php

namespace App\Core\Template;

class Layout
{

    private $view;

    public function add(string $view)
    {
        $this->view = $view;
    }

    public function load()
    {
        return "public/views/{$this->view}.php";
    }

    public function master($master)
    {
        return "public/{$master}.php";
    }
}
