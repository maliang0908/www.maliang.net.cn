<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>媒体播放器</title>
    <link rel="stylesheet" href="/css/zy.media.min.css">
</head>
<body>
<div class="zy_media">
    <video poster="/images/test.jpg" data-config='{"mediaTitle": "《疯狂动物城》--腾讯视频"}'>
        <source src="/public/video/test.mp4" type="video/mp4">
        您的浏览器不支持HTML5视频
    </video>
    <!--<audio data-config='' src="test.mp3">
        您的浏览器不支持HTML5音频
    </audio>-->
</div>
<script src="/js/zy.media.min.js"></script>
<script>
    zymedia('video');
</script>
</body>
</html>