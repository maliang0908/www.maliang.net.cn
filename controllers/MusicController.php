<?php

namespace app\controllers;
class MusicController extends \yii\web\Controller
{
    public $layout=false;
    public function actionIndex()
    {
        return $this->render('index');
    }
}