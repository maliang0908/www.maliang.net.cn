/**
 * Created by M on 16/10/17.
 */
$(function () {
    // 更多页面展示/隐藏
    $('.more-work').click(function(){
        var menu = $('.more-work-menu').hasClass('none');
        if(menu){
            $('.more-work-menu').removeClass('none').show();
            $('.content').hide();
            $(this).addClass('menu-list');
        }else{
             $('.content').show();
            $('.more-work-menu').addClass('none');
            $(this).removeClass('menu-list');
        }
    });

    // 点击菜单
    $('.nav-tabs li').click(function(){
        var menu = $(this).hasClass('menu-list');
        if(!menu){
            $('.content').show();
            $('.more-work-menu').addClass('none');
        }
    });

    // 更多鼠标移除/移上效果
    $('.more-work-menu td').on({
        'mousemove':function(){
            $(this).addClass('info');
        },
        'mouseout':function(){
            $(this).removeClass('info');
        }
    });

    // 电话呼叫
    $('#tell-me').on('click',function(){
        $('#tell-phone').click();
    });
});