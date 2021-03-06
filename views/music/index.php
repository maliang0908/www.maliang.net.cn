<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My music play for mobile</title>
    <!-- 默认宽度，静止双击缩放 -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link rel="stylesheet" type="text/css" href="/css/music/swiper3.06.min.css">
    <link rel="stylesheet" type="text/css" href="/css/music/mainStyle.css">
</head>
<body>
<!-- loding page -->
<section class="main_page lodingCon">
    <div class="affrimLoad" id="affrimLoad">
        <div></div>
        <div></div>
			<span>
				<p>旋律就绪</p>
				<p>点击倾听</p>
			</span>
    </div>
</section>
<!-- loding page end-->
<!-- 上方容器 -->
<section class="con_mainUP" id="pageA">
    <!-- 头部显示 -->
    <header class="conUp_header">
      <!--  <span class="returnOnePage iconfont" onclick="window.location.href='/'">&#xe608;</span> -->
        <p class="pageA_title">
            带上你和音乐一起去旅行..
        </p>
        <div class="moreThat">
            <i class="iconfont" id="moreThat">&#xe605;</i>
        </div>
    </header>
    <!-- 中间列表容器 -->
    <section class="con_container">
        <ul class="misicClassList" id="misicClassList">
            <!--<li class="showNow">
                <span>中文</span>
            </li>
            <li class="playNow">
                <span>英文</span>
            </li>-->
        </ul>
        <ul class="misicClassList" id="protect">
            <li id="allSong">
                <span>全部</span>
            </li>
            <li id="ILike">
                <span>喜欢</span>
            </li>
        </ul>
        <div class="clear"></div>
    </section>
    <!-- 尾部容器 -->
    <footer class="con_footer">
        <!-- 歌手图片 -->
        <div class="pageA_singerImg" id="pageA_SingerImg">
            <img src="/images/singer/cronmyshoider.jpg">
        </div>
        <!-- 歌名显示 -->
        <div class="nowSong_information" id="nowSong_information">
            <p id="pageA_singerName">SongName</p>
            <p id="pageA_songName">singer</p>
        </div>
        <!-- 播放组件 -->
        <div class="pageA_musicElemnt">
				<span id="pageA_palyStop">
					<i class="iconfont">&#xe610</i>
					<i class="iconfont hide">&#xe611</i>
				</span>
				<span>
					<i class="iconfont" id="PageA_NextSong">&#xe60d</i>
				</span>
        </div>
        <!-- 第一页的时间轴 -->
        <div class="pageTimeLine" id="pageA_timeLine">
            <div></div>
        </div>
    </footer>
</section>
<!-- 上方容器 end-->
<!-- 下方主容器 DownPage-->
<section class="con_mainDown" id="pageB">
    <!-- 头部显示 -->
    <header class="conUp_header">
        <span class="returnOnePage iconfont" id="returnPageA">&#xe608;</span>
        <p class="pageB_songName" id="pageB_songName">
            songName
        </p>
        <p class="pageB_singerName" id="pageB_singerName">singerName</p>
    </header>
    <!-- 中间列表容器 -->
    <section class="con_container">
        <!-- pageB,三个容器的集合 -->
        <div class="swiper-container pageBArr">
            <div class="swiper-wrapper" id="pageBArr">
                <!-- 第一个，歌曲列表页面 -->
                <div class="swiper-slide">
                    <ul class="songList" id="songList">
                         <!--<li>
                            <span class="songNumber">01</span>
                            <div class="songListInformation">
                                <p>李白</p>
                                <p>杜甫</p>
                            </div>
                            <div class="thisHeart">
                                <i class="iconfont noFind">&#xe60b;</i>
                                <i class="iconfont Find">&#xe609;</i>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <!-- 第二页，歌曲播放大碟图片 -->
                <div class="swiper-slide">
                    <div class="pageB_SingerImg" id="pageB_SingerImg">
                        <img src="/images/singer/huiT.jpg">
                    </div>
                </div>
                <!-- 第三页，歌词显示页面 -->
                <div class="swiper-slide" id="Lyricer_video">
                    <ul class="lyrics_list" id="lyrics_list">
                        <li class="active">想听与你有关的声音</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- 尾部容器 -->
    <footer class="con_footer">
        <!-- pageB，播放组件 -->
        <div  class="paluMode" id="playMode">
            <!-- 列表播放 -->
            <i class="iconfont">&#xe60a;</i>
            <!-- 循环播放 -->
            <i class="iconfont">&#xe600;</i>
            <!-- 单曲播放 -->
            <i class="iconfont">&#xe602;</i>
            <!-- 随机播放 -->
            <i class="iconfont">&#xe60f;</i>
        </div>
        <div class="pageB_play">
            <!-- pre -->
				<span>
					<i class="iconfont" id="pageB_preSong">&#xe60c;</i>
				</span>
            <!-- play/stop -->
				<span class="playB_playStop" id="pageB_playStop">
					<i class="iconfont">&#xe610;</i>
					<i class="iconfont">&#xe611;</i>
				</span>
            <!-- next -->
				<span>
					<i class="iconfont" id="pageB_nextSong">&#xe60d;</i>
				</span>
        </div>
        <div class="nowHeart" id="nowHeart">
            <i class="iconfont">&#xe60b;</i>
            <i class="iconfont red">&#xe609;</i>
        </div>
        <!-- pageB,时间轴 -->
        <div class="pageB_line" id="pageB_line">
            <div></div>
        </div>
        <p class="songTime">
            <span class="nowTime" id="nowTime">00:00</span>
            <span class="allTime" id="allTime">00:00</span>
        </p>
        <div class="pageB_nowPage" id="pageB_nowPage">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </footer>
</section>
<!-- 下方主容器 end-->
<!-- audio,元素 -->
<audio src="" id="audio">
</audio>
<!-- 声明容器 -->
<section class="con_mainUP Warming" id="morePage">
    <header class="conUp_header">
        <p class="pageA_title">
            项目声明
        </p>
        <div class="returnMain">
            <i class="iconfont" id="returnMain">&#xe608;</i>
        </div>
    </header>
    <section class="con_container">
        <section class="warming_con">
            <h3>目的：</h3>
            <ul>
                <li>兴趣爱好</li>
                <li>学习交流</li>
                <li>(革命尚未成功，大叔仍需努力)</li>
            </ul>
            <h3>主要功能：</h3>
            <ul>
                <li>a.音乐分类，以及基础操作(播放、暂停、上一首、下一首)</li>
                <li>
                    b.记录喜欢的音乐，下次访问时，依旧在‘喜欢’列表里面
                </li>
                <li>
                    c.歌词的同步显示
                </li>
            </ul>
            <h3>技术介绍</h3>
            <ul>
                <li>a.本项目基于zepto.js.(主要用了其选择器)</li>
                <li>
                    b.屏幕滑动用的是swiper.js。(原本是自己写的，但是有兼容问题，希望路过的大神可以提供一些js原生的touch教程，感激不尽)
                </li>
                <li>
                    c.Html5中的音频(audio)，以及它对应的Api(w3cschool有详细API)。
                </li>
                <li>
                    d.图标是用了iconfont.(第一次用，果然很方便)。
                </li>
            </ul>
            <h3>关于作者</h3>
            <ul>
                <li>笨·大叔</li>
                <li>QQ：756500909</li>
                <li>邮箱：awarriorer@163.com</li>
                <li>GitHubName：awarriorer</li>
            </ul>
        </section>
    </section>
</section>
<!-- 声明容器 end-->
<script type="text/javascript" src="/js/music/zepto.js"></script>
<script type="text/javascript" src="/js/music/zeptoTouch.js"></script>
<script type="text/javascript" src="/js/music/data.js"></script>
<script type="text/javascript" src="/js/music/swiper3.06.jquery.min.js"></script>
<script type="text/javascript" src="/js/music/mainJs.js"></script>
</body>
</html>
