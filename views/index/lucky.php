<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="ml20 mt20 mr20">
    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($lucky,'username')?>
    <?=$form->field($lucky,'phone')?>
    <?= Html::submitButton('参与', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end();?>
</div>