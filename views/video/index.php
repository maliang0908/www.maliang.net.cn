<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>媒体播放器</title>
    <link rel="stylesheet" href="/css/zy.media.min.css">
</head>
<body style="overflow-y:hidden;margin: 0;padding: 0">
<div class="zy_media">
    <video poster="/images/test.jpg" data-config='{"mediaTitle": "《疯狂动物城》--腾讯视频"}'>
        <source src="/public/video/test.mp4" type="video/mp4">
        您的浏览器不支持HTML5视频
    </video>
    <!--<audio data-config='' src="test.mp3">
        您的浏览器不支持HTML5音频
    </audio>-->
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/zy.media.min.js"></script>
<script>
    $(function(){
        horizontalScreen('.zy_media');
    });
    /*强制横屏*/
    function horizontalScreen(className){
        // transform 强制横屏
        //var conW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var conW = window.innerWidth;
        var conH = window.innerHeight;
        //var conH = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        // transform: rotate(90deg); width: 667px; height: 375px;transform-origin:28% 50%;
        //var iosTopHe = 0;//若有其他样式判断，写于此
        console.log(conW);
        console.log(conH);
        $(className).css({
            "transform":"rotate(90deg) translate("+((conH-conW)/2)+"px,"+((conH-conW)/2)+"px)",
            "width":conH+"px",
            "height":conW+"px",
            //"margin-top":iosTopHe+"px",
            // "border-left":iosTopHe+"px solid #000",
            "transform-origin":"center center",
            "-webkit-transform-origin": "center center"
        }).find('video').css({
            "width":conH+"px",
            "height":conW+"px",
        });
    }
    zymedia('video');
</script>
</body>
</html>
