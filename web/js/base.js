/**
 * Created by M on 16/10/11.
 */
$(function () {
    // 轮播图
    $('.carousel').carousel();
    scrollShow();
    $(window).scroll(scrollShow);

    $('img').click(function(){
        alertShow($(this).attr('src'));
    });

    $('.list-group a').click(function(){
        var url = $(this).data('url');
        $('.zy_wrap audio').attr('src',url);
        zymedia('audio');
        $('.zy_play').click();
    });
});
function scrollShow(){
    var H = $(document).scrollTop();
    if(H>390){
        $('#myScrollspy ul').show();
    }else{
        $('#myScrollspy ul').hide();
    }
}
function alertShow(msg){

    var str = '<div class="alert alert-warning navbar-fixed-top">' +
        '<a href="#" class="close" data-dismiss="alert">&times;</a>' +
        '<strong>警告！</strong>'+msg+'。 </div>';
    $('body').find('.alert').remove();
    $('body').append(str);

}