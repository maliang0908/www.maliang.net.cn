<?php
/**
 * Created by PhpStorm.
 * User: houqian
 * Date: 15-12-2
 * Time: 下午5:26
 */

namespace app\components\helpers;


use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\web\View;
class JsExpression {

    const JS_TAG_CHECKBOX = "checkbox";
    const JS_TAG_SELECT = "select";
    const JS_TAG_RADIO = "radio";

    /**
     * @param $value
     * @param $tag
     * @param $single
     * @param null $parent
     * @param array $extra
     * @return string
     */
    public static function whenClient($value,$tag,$single,$parent=null,$extra=[])
    {
        $options = ['value'=>$value,'tag'=>$tag,'single'=>$single];
        if($parent){
            $options['parent'] = $parent;
        }
        $options = array_merge($options,$extra);
        $jsonOptions =json_encode($options);
        $js ='function(attribute,value){ var options='.$jsonOptions.';return xywy.validation.isRequired(attribute,options);}';
        return $js;
    }
    
    /**
     * @param Model $model
     * @param $attribute
     * @return string
     */
    public static function whenClientForCompare(Model $model,$attribute)
    {
        $js ='function(attribute,value){ return !yii.validation.isEmpty($("#'.Html::getInputId($model,$attribute).'").val())}';
        return $js;
    }

    /**
     * @param Model $model
     * @param $attributes
     * @param ActiveForm $form
     * @return string
     */
    public static function compareClient(Model $model,$attributes,ActiveForm $form)
    {
        $selector ="";
        if(is_array($attributes)){
            foreach($attributes as $attribute){
                $selector .='#'.Html::getInputId($model,$attribute);
                $selector .= ',';
            }
            $selector = rtrim($selector,',');
        }else{
            $selector = '#'.Html::getInputId($model,$attributes);
        }
        return  "
        $('{$selector}').focus(function(){
            try{
                $(this).parents('.has-error').removeClass('has-error');
                var yiiActiveForm = $('#{$form->getId()}').data('yiiActiveForm');
                for(var i=0,len=yiiActiveForm.attributes.length;i<len;i++){
                    if(yiiActiveForm['attributes'][i]['id']==$(this).attr('id'))
                     yiiActiveForm['attributes'][i]['status']=0;
                 }
                $('#{$form->getId()}').data('yiiActiveForm',yiiActiveForm);
            }catch(e){

            }
        });
        ";

    }

    /**
     * @param Model $model
     * @param $attributes
     * @param ActiveForm $form
     * @param View $view
     * @return string
     */
    public static function forceValidate(Model $model,$attributes,ActiveForm $form,View $view=null)
    {
        $selector ="";
        if(is_array($attributes)){
            foreach($attributes as $attribute){
                $selector .='#'.Html::getInputId($model,$attribute);
                $selector .= ',';
            }
            $selector = rtrim($selector,',');
        }else{
            $selector = '#'.Html::getInputId($model,$attributes);
        }
        $js = <<< EOD
        (function(){
            var validate_function = function(){
                try{
                    var yiiActiveForm = $('#{$form->getId()}').data('yiiActiveForm');
                    for(var i=0,len=yiiActiveForm.attributes.length;i<len;i++){
                         yiiActiveForm['attributes'][i]['status']=2;
                    }
                    $('#{$form->getId()}').data('yiiActiveForm',yiiActiveForm);
                    jQuery('#{$form->getId()}').yiiActiveForm('validate');
                }catch(e){}
            };
            $('{$selector}').bind({blur:validate_function,change:validate_function});
        })();
EOD;
        if($view){
            $view->registerJs($js);
        }
        return  $js;
    }

    public static function closeWindow($message=null,$url=null)
    {
        $alert = $message ? "alert('$message');":'';
        $href = $url  ? $url : 'about:blank ';
        $js = <<< EOD
        <script type="text/javascript">
        $alert
 if (navigator.userAgent.indexOf("MSIE") > 0) {
            if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {
                window.opener = null; window.close();
            }
            else {
                window.open('', '_top'); window.top.close();
            }
        }
        else if (navigator.userAgent.indexOf("Firefox") > 0 || navigator.userAgent.indexOf("Chrome") !=-1) {
            window.location.href = '$href';
            //window.history.go(-2);
        }
        else {
            window.opener = null;
            window.open('', '_self', '');
            window.close();
        }
        </script>
EOD;
       return $js;
    }

    public static function windowHref($message=null,$url=null)
    {
        $alert = $message ? "alert('$message');":'';
        $href = $url  ? "window.location.href = '$url';" : '';
        $js = <<< EOD
        <script type="text/javascript">
        $alert
        $href
        </script>
EOD;
        return $js;
    }

    public static function closeOrderWindow($url=null)
    {
        $href = $url  ? $url : 'about:blank ';
        $js = <<< EOD
        <script type="text/javascript">
            window.location.href = '$href';
        </script>
EOD;
        return $js;
    }

    /**
     * @param ActiveForm $form
     * @param Model $model
     * @param $attributes
     * @param null $message
     */
    public static  function beforeSubmit(ActiveForm $form,Model $model,$attributes,$message=null){
        $form_id = $form->getId();
        $selector = "";
        foreach($attributes as $attribute){
            $selector .= '#'.Html::getInputId($model,$attribute);
            $selector .=',';
        }
        $selector = rtrim($selector,',');
        $message = $message !== null ? "alert('$message');" :'';
        $form->getView()->registerJs("
            $('#{$form_id}').on('beforeSubmit',function(){
                  var flag = false;
                  $('$selector').each(function(){
                        if(!yii.validation.isEmpty(this.value)){
                            flag = true;
                        }
                  });
                  if(!flag){
                    $message
                  }
                  return flag;
            });
        ");
    }

    /**
     * @param $startField
     * @param $endField
     * @param Model $model
     * @param View|null $view
     * @return string
     */
    public static function dateCompare($startField,$endField,Model $model,View $view=null)
    {
        $startFieldId = Html::getInputId($model, $startField);
        $endFieldId = Html::getInputId($model, $endField);
        $js = <<<EOD
            (function(){
            var $startField = {
                    elem: '#$startFieldId',
                    format: 'YYYY-MM-DD',
                    min: '1900-01-01 00:00:00',
                    max: laydate.now(),
                    choose: function(date){
                        $endField.min = date;
                        $endField.start = date;
                    }
                };
                var $endField = {
                    elem: '#$endFieldId',
                    format: 'YYYY-MM-DD',
                    min: laydate.now(),
                    max: laydate.now(),
                    choose: function(date){
                        $startField.max = date;
                    }
                };
                laydate($startField);
                laydate($endField);
            })();
EOD;
        if($view){
            $view->registerJs($js);
        }
        return $js;
    }

} 