/**
 * Created by M on 16/10/17.
 */
$(function () {
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

    $('.nav-tabs li').click(function(){
        var menu = $(this).hasClass('menu-list');
        if(!menu){
            $('.content').show();
            $('.more-work-menu').addClass('none');
        }
    });

    $('.more-work-menu td').on({
        'mousemove':function(){
            $(this).addClass('info');
        },
        'mouseout':function(){
            $(this).removeClass('info');
        }
    });
});