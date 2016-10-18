<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body  style="font-size: 48px;">
    <div>
        <a href="tel:13141234768">拨号</a><br/>
        <button type="button" id="upload" style="width: 240px;height: 80px;font-size: 36px">头像上传</button>
        <input id='file' type="file" style="display: none">
    </div>
    <div id="content">手机监听：</div>
    <script src="./js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            window.addEventListener('resize',function(){
                $('#content').append('1  ');
            });

            $('#upload').click(function(){
               $('#file').click();
            });
        });
    </script>
</body>
</html>-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap{height:500px;width:100%;}
        #r-result{width:100%; font-size:14px;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=zBmUka1bMGaRm9fveN5DLIR7"></script>
    <title>城市名定位</title>
</head>
<body>
<div id="allmap"></div>
<div>
    <ul id="list">
        <a href="javascript:void(0)"><li data-longitude="116.275704" data-latitude="40.146901">沙河</li></a>
        <a href="javascript:void(0)"><li data-longitude="116.403371" data-latitude="39.913854">天安门</li></a>
    </ul>
</div>
</body>
</html>
<script src="./js/jquery.min.js"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<script type="text/javascript">
    var map = null;
    $(function(){
        var myPostion = navigator.geolocation;//定位
        if(myPostion){
            myPostion.getCurrentPosition(function(position){ // 如果成果则执行该回调函数
                var currentLat = position.coords.latitude;
                var currentLon = position.coords.longitude;
                var gpsPoint = new BMap.Point(currentLon, currentLat);
                BMap.Convertor.translate(gpsPoint, 0, initMap); //转换坐标
            },function(err){ // 如果失败则执行该回调函数
                alert('定位失败,失败原因::'+err.message);
            },{ // 附带参数
                enableHighAccuracy: false, // 提高精度(耗费资源)
                timeout: 5000, // 超过timeout则调用失败的回调函数
                maximumAge: 1000 // 获取到的地理信息的有效期，超过有效期则重新获取一次位置信息
        });
        }else{
            alert('不好意思，你的浏览器不支持html5定位');
        }

        $('#list li').on('click',function(){
            var longitude = $(this).data('longitude');
            var latitude = $(this).data('latitude');
            theLocation(longitude,latitude);
        });
    });

    function initMap(point){
        //初始化地图
        map = new BMap.Map("allmap");
        map.addControl(new BMap.NavigationControl());
        map.addControl(new BMap.ScaleControl());
        map.addControl(new BMap.OverviewMapControl());
        map.centerAndZoom(point,18);
        map.enableScrollWheelZoom(true);
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);              // 将标注添加到地图中
        map.panTo(point);
    }

    // 用经纬度设置地图中心点
    function theLocation(longitude,latitude){
        if(longitude && latitude){
            map.clearOverlays();
            var new_point = new BMap.Point(longitude,latitude);
            var marker = new BMap.Marker(new_point);  // 创建标注
            console.log(new_point);
            console.log(marker);
            map.addOverlay(marker);              // 将标注添加到地图中
            map.panTo(new_point);
        }
    }
</script>