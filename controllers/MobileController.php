<?php

namespace app\controllers;
use yii\helpers\Url;
use dosamigos\qrcode\QrCode;
class MobileController extends \yii\web\Controller
{
    public $layout = 'mobile';
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * 生成二维码
     */
    public function actionQrCode()
    {
        $text = \Yii::$app->request->hostInfo.Url::toRoute('index/lucky');
        $filename = './images/QR.png';
        return QrCode::png($text,false,0,10,0);
    }
}