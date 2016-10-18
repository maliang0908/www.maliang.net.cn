<?php

namespace app\controllers;
use app\models\MlLucky;
use dosamigos\qrcode\QrCode;
use yii\helpers\Url;
use app\components\helpers\JsExpression;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        $this->view->title = '';
        return $this->render('index');
    }

    public function actionLucky()
    {
        $this->view->title = '参与抽奖';
        $redis = \yii::$app->redis;
        $luckyStart = $redis->get('lucky_start');
        $luckyStart = 1;
        $error = null;
        $url= Url::toRoute('index/index');
        if(!$luckyStart){
            $error = '抽奖还未开始';
        }else if($luckyStart!=1){
            $error = '抽奖已结束';
        }
        $lucky =  new MlLucky();
        $request = \Yii::$app->request;
        if($request->isPost && $error===null){
            $data = $request->post();
            if($lucky->load($data) && $lucky->validate()){
                $error = $lucky->save(false) ? '抽奖报名成功' : '抽奖报名失败';
            }else{
                $error = current(array_values(array_map('array_pop',$lucky->errors)));
            }
        }
        if($error){
            return JsExpression::windowHref($error,$url);
        }
        return $this->render('lucky',[
            'lucky' => $lucky
        ]);
    }

    /**
     * 生成二维码
     */
    public function actionQrCode()
    {
        $text = \Yii::$app->request->hostInfo.Url::toRoute('index/lucky');
        /*$wxParams = [
            'appid'=>12,
            'redirect_uri'=>12,
            'response_type'=>12,
            'scope'=>12,
            'state'=>12
        ];
        $text = 'https://open.weixin.qq.com/connect/qrconnect?appid='.$wxParams['appid'].'&redirect_uri='.$wxParams['redirect_uri'].'&response_type='.$wxParams['response_type'].'&scope='.$wxParams['scope'].'&state='.$wxParams['state'].'#wechat_redirect';*/
        $filename = './images/QR.png';
        QrCode::png($text,$filename,0,15,0);
        //$this->logoQrcode();
    }

    /**
     * 生成logo的二维码
     * @param string $QR
     * @param string $logo
     */
    public function logoQrcode($filename='2d-barcode.png',$logo='./images/maliang.jpg')
    {
        $QR='./images/QR.png';
        $filename = './images/'.$filename;
        $QR = imagecreatefromstring ( file_get_contents ( $QR ) );
        $logo = imagecreatefromstring ( file_get_contents ( $logo ) );
        $QR_width = imagesx ( $QR );
        $logo_width = imagesx ( $logo );
        $logo_height = imagesy ( $logo );
        $logo_qr_width = $QR_width / 3;
        $scale = $logo_width / $logo_qr_width;
        $logo_qr_height = $logo_height / $scale;
        $from_width = ($QR_width - $logo_qr_width) / 2;
        imagecopyresampled ( $QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height );
        imagepng ( $QR, $filename);//带Logo二维码的文件名
    }

    public function actionTest(){
        $this->layout = false;
        return $this->render('test');
    }
}
