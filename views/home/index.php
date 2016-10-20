<!-- 轮播图 -->
<div id="myCarousel" class="carousel slide carousel-w-h" data-wrap="true" data-pause="hover" data-interval="5000">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner carousel-w-h">
        <div class="item  carousel-w-h active">
            <img src="/images/carousel-1.jpg" alt="First slide" class="carousel-w-h">
        </div>
        <div class="item  carousel-w-h">
            <img src="/images/carousel-2.jpg" alt="Second slide" class="carousel-w-h">
        </div>
        <div class="item  carousel-w-h">
            <img src="/images/carousel-3.jpg" alt="Third slide" class="carousel-w-h">
        </div>
    </div>
</div>
<div>
<!-- 文章 -->
    <div class="row">
        <div class="col-xs-1" id="myScrollspy" >
            <ul class="nav nav-tabs nav-stacked none" data-spy="affix" data-offset-top="375">
                <li class="active"><a href="#section-1"><span class="glyphicon glyphicon-picture"></span></a></li>
                <li><a href="#section-2"><span class="glyphicon glyphicon-music"></span></a></li>
                <li><a href="#section-3"><span class="glyphicon glyphicon-facetime-video"></span></a></li>
                <li><a href="#section-4"><span class="glyphicon glyphicon-file"></span></a></li>
                <li><a href="#section-5"><span class="glyphicon glyphicon-comment"></span></a></li>
            </ul>
        </div>
        <div class="col-xs-11">
           <div class="col-xs-12">
               <h2 id="section-1">Picture</h2>
               <div class="col-xs-3">
                   <a href="javascript:void(0)" class="thumbnail" style="height: 132px;">
                       <img src="/images/pic-1.jpg" alt="" width="98%" style="height: 120px">
                   </a>
               </div>
               <div class="col-xs-3">
                   <a href="javascript:void(0)" class="thumbnail" style="height: 132px;">
                       <img src="/images/pic-1.jpg" alt="" width="98%" style="height: 120px">
                   </a>
               </div>
               <div class="col-xs-3">
                   <a href="javascript:void(0)" class="thumbnail" style="height: 132px;">
                       <img src="/images/pic-1.jpg" alt="" width="98%" style="height: 120px">
                   </a>
               </div>
               <div class="col-xs-3">
                   <a href="javascript:void(0)" class="thumbnail" style="height: 132px;">
                       <img src="/images/pic-1.jpg" alt="" width="98%" style="height: 120px">
                   </a>
               </div>
           </div>
            <div class="col-xs-12">
                <h2 id="section-2">Music</h2>
                <div class="col-xs-12 jumbotron">
                    <div class="ml30 mr30">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">1</span>
                                <a href="javascript:void(0)" data-url="http://cc.stream.qqmusic.qq.com/C100000xM8bN4OGgoo.m4a?fromtag=52">不再联系-夏天</a>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">2</span>
                                <a href="javascript:void(0)" data-url="http://cc.stream.qqmusic.qq.com/C100004RBsdr0kJrws.m4a?fromtag=52">看不见的风景-许嵩</a>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">3</span>
                                <a href="javascript:void(0)" data-url="http://cc.stream.qqmusic.qq.com/C100001oGzem0k192p.m4a?fromtag=52">江南-林俊杰</a>
                            </li>
                            <li class="list-group-item">
                                <span class="badge">4</span>
                                <a href="javascript:void(0)" data-url="http://cc.stream.qqmusic.qq.com/C100000rMFLS0ZnngN.m4a?fromtag=52">李白-李荣浩</a>
                            </li>
                        </ul>
                        <div class="col-xs-12 zy_media h60">
                            <?php $this->registerCssFile('./css/zy.media.min.css')?>
                            <?php $this->registerJsFile('./js/zy.media.min.js')?>
                            <?php $this->registerJs("zymedia('audio');");?>
                            <audio data-config='' src="http://cc.stream.qqmusic.qq.com/C100000xM8bN4OGgoo.m4a?fromtag=52"  autoplay>
                                您的浏览器不支持HTML5音频
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-xs-12">
                <h2 id="section-3">Video</h2>
                <div class="zy_media" style="height:400px">
                    <video poster="/images/test.jpg" data-config='{"mediaTitle": "《疯狂动物城》--腾讯视频"}' style="height:400px">
                        <source src="/public/video/test.mp4" type="video/mp4">
                        您的浏览器不支持HTML5视频
                    </video>
                </div>
            </div>
            <div class="col-xs-12">
                <h2 id="section-4">Article</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    Nam eget purus nec est consectetur vehicula.
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
                                <p>Vivamus mattis accumsan erat, vel convallis risus pretium nec. Integer nunc nulla, viverra ut sem non, scelerisque vehicula arcu. Fusce bibendum convallis augue sit amet lobortis. Cras porta urna turpis, sodales lobortis purus adipiscing id. Maecenas ullamcorper, turpis suscipit pellentesque fringilla, massa lacus pulvinar mi, nec dignissim velit arcu eget purus. Nam at dapibus tellus, eget euismod nisl. Ut eget venenatis sapien. Vivamus vulputate varius mauris, vel varius nisl facilisis ac. Nulla aliquet justo a nibh ornare, eu congue neque rutrum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo">
                                    Suspendisse a orci facilisis, dignissim tortor vitae, ultrices mi.
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
                                <p>Vivamus mattis accumsan erat, vel convallis risus pretium nec. Integer nunc nulla, viverra ut sem non, scelerisque vehicula arcu. Fusce bibendum convallis augue sit amet lobortis. Cras porta urna turpis, sodales lobortis purus adipiscing id. Maecenas ullamcorper, turpis suscipit pellentesque fringilla, massa lacus pulvinar mi, nec dignissim velit arcu eget purus. Nam at dapibus tellus, eget euismod nisl. Ut eget venenatis sapien. Vivamus vulputate varius mauris, vel varius nisl facilisis ac. Nulla aliquet justo a nibh ornare, eu congue neque rutrum.</p>
                                <p>Suspendisse a orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a iaculis lacus. Phasellus vitae convallis ligula, nec volutpat tellus. Vivamus scelerisque mollis nisl, nec vehicula elit egestas a. Sed luctus metus id mi gravida, faucibus convallis neque pretium. Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo. Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices nunc sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra tellus. Phasellus sodales libero nec dui convallis, sit amet fermentum sapien auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eu elementum nibh, quis varius libero.</p>
                                <p>Morbi sed fermentum ipsum. Morbi a orci vulputate tortor ornare blandit a quis orci. Donec aliquam sodales gravida. In ut ullamcorper nisi, ac pretium velit. Vestibulum vitae lectus volutpat, consequat lorem sit amet, pulvinar tellus. In tincidunt vel leo eget pulvinar. Curabitur a eros non lacus malesuada aliquam. Praesent et tempus odio. Integer a quam nunc. In hac habitasse platea dictumst. Aliquam porta nibh nulla, et mattis turpis placerat eget. Pellentesque dui diam, pellentesque vel gravida id, accumsan eu magna. Sed a semper arcu, ut dignissim leo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <h2 id="section-5">MessageBoard</h2>
                <p>Nam eget purus nec est consectetur vehicula. Nullam ultrices nisl risus, in viverra libero egestas sit amet. Etiam porttitor dolor non eros pulvinar malesuada. Vestibulum sit amet est mollis nulla tempus aliquet. Praesent luctus hendrerit arcu non laoreet. Morbi consequat placerat magna, ac ornare odio sagittis sed. Donec vitae ullamcorper purus. Vivamus non metus ac justo porta volutpat.</p>
                <p>Vivamus mattis accumsan erat, vel convallis risus pretium nec. Integer nunc nulla, viverra ut sem non, scelerisque vehicula arcu. Fusce bibendum convallis augue sit amet lobortis. Cras porta urna turpis, sodales lobortis purus adipiscing id. Maecenas ullamcorper, turpis suscipit pellentesque fringilla, massa lacus pulvinar mi, nec dignissim velit arcu eget purus. Nam at dapibus tellus, eget euismod nisl. Ut eget venenatis sapien. Vivamus vulputate varius mauris, vel varius nisl facilisis ac. Nulla aliquet justo a nibh ornare, eu congue neque rutrum.</p>
                <p>Suspendisse a orci facilisis, dignissim tortor vitae, ultrices mi. Vestibulum a iaculis lacus. Phasellus vitae convallis ligula, nec volutpat tellus. Vivamus scelerisque mollis nisl, nec vehicula elit egestas a. Sed luctus metus id mi gravida, faucibus convallis neque pretium. Maecenas quis sapien ut leo fringilla tempor vitae sit amet leo. Donec imperdiet tempus placerat. Pellentesque pulvinar ultrices nunc sed ultrices. Morbi vel mi pretium, fermentum lacus et, viverra tellus. Phasellus sodales libero nec dui convallis, sit amet fermentum sapien auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eu elementum nibh, quis varius libero.</p>
                <p>Morbi sed fermentum ipsum. Morbi a orci vulputate tortor ornare blandit a quis orci. Donec aliquam sodales gravida. In ut ullamcorper nisi, ac pretium velit. Vestibulum vitae lectus volutpat, consequat lorem sit amet, pulvinar tellus. In tincidunt vel leo eget pulvinar. Curabitur a eros non lacus malesuada aliquam. Praesent et tempus odio. Integer a quam nunc. In hac habitasse platea dictumst. Aliquam porta nibh nulla, et mattis turpis placerat eget. Pellentesque dui diam, pellentesque vel gravida id, accumsan eu magna. Sed a semper arcu, ut dignissim leo.</p>
                <p>Sed vitae lobortis diam, id molestie magna. Aliquam consequat ipsum quis est dictum ultrices. Aenean nibh velit, fringilla in diam id, blandit hendrerit lacus. Donec vehicula rutrum tellus eget fermentum. Pellentesque ac erat et arcu ornare tincidunt. Aliquam erat volutpat. Vivamus lobortis urna quis gravida semper. In condimentum, est a faucibus luctus, mi dolor cursus mi, id vehicula arcu risus a nibh. Pellentesque blandit sapien lacus, vel vehicula nunc feugiat sit amet.</p>
                <p>Morbi sed fermentum ipsum. Morbi a orci vulputate tortor ornare blandit a quis orci. Donec aliquam sodales gravida. In ut ullamcorper nisi, ac pretium velit. Vestibulum vitae lectus volutpat, consequat lorem sit amet, pulvinar tellus. In tincidunt vel leo eget pulvinar. Curabitur a eros non lacus malesuada aliquam. Praesent et tempus odio. Integer a quam nunc. In hac habitasse platea dictumst. Aliquam porta nibh nulla, et mattis turpis placerat eget. Pellentesque dui diam, pellentesque vel gravida id, accumsan eu magna. Sed a semper arcu, ut dignissim leo.</p>
                <p>Sed vitae lobortis diam, id molestie magna. Aliquam consequat ipsum quis est dictum ultrices. Aenean nibh velit, fringilla in diam id, blandit hendrerit lacus. Donec vehicula rutrum tellus eget fermentum. Pellentesque ac erat et arcu ornare tincidunt. Aliquam erat volutpat. Vivamus lobortis urna quis gravida semper. In condimentum, est a faucibus luctus, mi dolor cursus mi, id vehicula arcu risus a nibh. Pellentesque blandit sapien lacus, vel vehicula nunc feugiat sit amet.</p>
            </div>
        </div>
    </div>
</div>