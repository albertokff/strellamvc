<?php

namespace app\controllers;

use app\core\Controller;

class ManagerController extends Controller
{
    public function Main()
    {
        $this->setJS();
        $this->autoLoadView();
    }
}