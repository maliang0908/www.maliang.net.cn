<?php

namespace app\controllers;

class MobileController extends \yii\web\Controller
{
    public $layout = 'mobile';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTellMe(){
        
    }
}