<?php

namespace app\controllers;
class VideoController extends \yii\web\Controller
{
    public $layout=false;
    public function actionIndex()
    {
        return $this->render('index');
    }
}