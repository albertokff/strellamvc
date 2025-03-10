<?php

namespace App\Core;

class Controller
{
    protected $fileJS;

    protected function autoLoadView()
    {
        $className = get_called_class();
        $view = explode('\\', $className);
        $handled = strtolower(str_replace('Controller', '', end($view)));

        require_once "../app/views/$handled.view.php";
        $cssFile = $handled;
        require_once '../app/views/main.php';
    }

    protected function setView($nmView)
    {
        require_once "../app/views/$nmView.view.php";
        $cssFile = $nmView;
        $view = $nmView;
        $js = $this->fileJS ?? '';
        require_once '../app/views/main.php';
        $this->flAutoLoadView = false;
    }

    protected function setJS()
    {
 
    }
}