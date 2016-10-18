<?php

namespace app\controllers;

class MobileController extends \yii\web\Controller
{
    public $layout = 'mobile';
    public function actionIndex()
    {
        phpinfo();
        return $this->render('index');
    }

}
