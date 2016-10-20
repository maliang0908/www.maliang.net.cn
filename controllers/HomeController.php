<?php

namespace app\controllers;

class HomeController extends BaseController
{
    public function actionIndex()
    {
        $this->view->title = '';
        return $this->render('index');
    }
}
