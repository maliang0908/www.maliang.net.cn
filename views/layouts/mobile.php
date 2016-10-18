<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\MobileAsset;

MobileAsset::register($this);
$menu = \Yii::$app->params['menu'];
$more_menu = \Yii::$app->params['more_menu.php'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<div>
	<div class="content">	
    	<?= $content ?>
	</div>
    <div class="more-work-menu text-center none nav" role="menu">
	    <table class="table">
	        <tr height="80">
	        <?php
	            foreach ($more_menu as $key=>$val){
	        ?>
	            <td class="table-bordered">
	                <a href="<?=$val['toUrl'] ? Url::toRoute($val['toUrl']) : $val['url']?>" <?=isset($val['id']) ? 'id="'.$val['id'].'"' : ''?>>
	                    <span class="glyphicon <?=$val['icon']?>"></span>
	                    <?=$val['name']?>
	                </a>
	            </td>
	            <?php if($key % 3 == 2 && $key > 0){ ?>
	             </tr>
	            <tr height="80">
	        <?php } }?>
	         </tr>
	    </table>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom text-center" role="navigation" style="min-height: 0">
	    <ul class="nav nav-tabs" role="tablist">
	        <?php
	            foreach ($menu as $val){
	        ?>
	            <li role="presentation" class="ml-li-auto <?=isset($val['level_menu']) ? 'dropdown' : '';?> <?=isset($val['more']) ? 'more-work' : ''?> ">
	                <a <?=isset($val['level_menu']) ? 'class="dropdown-toggle" data-toggle="dropdown"' : ''?> href="<?=$val['toUrl'] ? Url::toRoute($val['toUrl']) : 'javascript:void(0)'?>">
	                     <span class="glyphicon <?=$val['icon']?>"></span>
	                     <?=$val['name']?>
	                </a>
	                <?php
	                     if(isset($val['level_menu'])){
	                ?>
	                <ul class="dropdown-menu ml-dropdown-ul" role="menu">
						<?php
							foreach ($val['level_menu'] as $k=>$v){
	                    	if($k){
	                    ?>
	                    <li class="divider"></li>
	                    <?php }?>
						<li class="text-center">
						 <a href="<?=$v['toUrl'] ? Url::toRoute($v['toUrl']) : 'javascript:void(0)'?>">
						    <span class="glyphicon <?=$v['icon']?>"></span> <?=$v['name']?></a>
						</li>
	                    <?php }?>
	                </ul>
	                <?php }?>
	            </li>
	        <?php }?>
	    </ul>
	</nav>
</div>
<!-- 二维码 -->
<div class="qr-code none">
	<img src="<?=Url::toRoute('mobile/qr-code')?>" />
</div>
<!-- 扫描二维码 -->
<div class="scan-code ">
	<div id="support"></div>
	<div id="contentHolder">
		<video id="video" width="100%" height="60%" autoplay>
		</video>
		<canvas style="display:none; background-color:#F00;" id="canvas" width="100%" height="60%">
		</canvas> <br/>
		<button id="snap" style="display:none; height:50px; width:120px;">开始扫描</button>
	</div>
</div>
<!-- 弹窗 -->
<div class="pub-bg"></div>
<div class="pub-tip-box none">
	<div class="pub-tip-con ">
		<span class="db tc pub-tip-text mt20 f14">消息提示</span>
		<div class="tc mt20">
			<a class="pub-tip-btn dib f14" href="javascript:;">确定</a>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>