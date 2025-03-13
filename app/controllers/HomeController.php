<?php

namespace app\controllers;

use app\controllers\BaseController;

class HomeController extends BaseController
{
    public $arrDados = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function Main()
    {
        $this->arrDados = [
            'banco' => $this->model->getTitleAndSubtitleHome()
        ];

        $this->loadView('home', $this->arrDados);
    }
}
