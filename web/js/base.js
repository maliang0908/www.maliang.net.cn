/**
 * Created by M on 16/10/11.
 */
$(function () {
    $('#qr-code').click(function(){
        $('.pub-bg,.qr-code').show();
    });

    $('.qr-code img').on('click',function(){
        $('.pub-bg,.qr-code').hide();
    });
});

// 提示框显示
function alertShow(msg,url){
    if(msg){
        $('.pub-tip-box').find('span').text(msg);
    }
    $('.pub-tip-box,.opc-bg').show();
    // 关闭提示框
    $('.pub-tip-box').on('click',function(){
        $('.pub-tip-box,.opc-bg').hide();
        if(url){
            window.location.href = url;
        }
    });
}