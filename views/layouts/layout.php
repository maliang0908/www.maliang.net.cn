<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<?php $this->beginBody() ?>
<!-- 导航 -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0px;">
    <div class="navbar-header ml80">
        <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav ml120">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Article</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Picture</a></li>
        <li><a href="#">MessageBoard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right mr30">
        <li>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Seting
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">登录</a></li>
                <li><a href="#">音乐</a></li>
                <li><a href="#">电影</a></li>
                <li class="divider"></li>
                <li><a href="#">修改个人信息</a></li>
                <li class="divider"></li>
                <li><a href="#">退出</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?= $content ?>
<!-- 尾部 -->
<footer class="footer">
    <div class="container">
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>