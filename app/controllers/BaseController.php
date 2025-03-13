<?php

namespace app\controllers;

use app\models;

class BaseController {
    protected $model;

    public function __construct()
    {
        $this->loadModel();
    }

    protected function loadModel()
    {
        $className = $this->getClassName();
        $modelClass = "app\\models\\" . str_replace('Controller', 'Model', $className);   
        
        if (class_exists($modelClass)) {
            $this->model = new $modelClass();
        } else {
            die("Model '$modelClass' não encontrado!");
        }
    }

    protected function loadView($view, $arrDados = [])
    {
        if (file_exists("../app/views/{$view}.view.php")) {
            require_once "../app/views/{$view}.view.php";
            $cssFile = $view;
            $view = $view;
            require_once '../app/views/main.php';
        } else {
            die("View '$view' não encontrada!");
        }
    }

    protected function getClassName() {
        $className = get_called_class();
        $classParts = explode('\\', $className); 
        return end($classParts);
    }   
}
