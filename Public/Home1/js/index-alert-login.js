/**
 * Created by Administrator on 2016/12/22 0022.
 */
$(function() {
    shortMessagraxc(); //��ȡ��֤��
// ---------------------------------------------       �ж���֤��
    $('#yzm').blur(function(){
        if($('#yzm').val() == 1111){
            $('.alert-true').css('display','block');
        }else{
            $('.alert-false').css('display','block');
        }
    })
    $('#yzm').click(function(){
        $('.alert-true').css('display','none');
        $('.alert-false').css('display','none');
    })
// ---------------------------------------------       �ж�������Ƿ�Ϊ��
//       ------------ ��¼
    $('.content-3f button').click(function(){
        if($('#login-userName').val() == '') {
            $('.login-userName p').css('display','block');
        }
        if($('#login-passWord').val() == ''){
            $('.login-passWord p').css('display','block');
        }
    })
    $('#login-userName').click(function(){
        $('.login-userName p').css('display','none');
    })
    $('#login-passWord').click(function(){
        $('.login-passWord p').css('display','none');
    })
//        ---------------------ע��
    $('.register-6f button').click(function(){
        if($('#register-userName').val() == ''){
            $('.register-userName p').css('display','block');
        }
        if($('#yzm').val() == ''){
            $('.alert-false').css('display','block');
        }
        if($('#register-passWord').val() == ''){
            $('.register-passWord p').css('display','block');
        }
        if($('#register-passWord').val() != $('#again').val() || $('#again').val() == ''){
            $('.register-again p').css('display','block');
        }
    })
    $('#register-userName').click(function(){
        $('.register-userName p').css('display','none');
    })
    $('#register-passWord').click(function(){
        $('.register-passWord p').css('display','none');
    })
    $('#again').click(function(){
        $('.register-again p').css('display','none');
    })
})
var checkPhone = function(a) {
    var patrn = /^((?:13|15|18|14|17)\d{9}|0(?:10|2\d|[3-9]\d{2})[1-9]\d{6,7})$/;
    if (!patrn.exec(a)) return false;
    return true;
};
$(function() {
    $(window).on("load", function() {
        $("#loading").fadeOut();
    })
    // ========================================�������
    $("#tip .pack a").on("click", function() {
        $("#tip").fadeOut()
        $("#tip .pack p").html("")
        $("#submit").css({
            "pointer-events": "auto"
        });
        return false;
    })

    function alerths(str) {
        $("#tip").fadeIn()
        $("#tip .pack p").html(str)
        return false;
    }
})
/*yanzhengma*/
function shortMessagraxc() {
    $('#btn_yzm').click(function() {
        var count = 60;
        var countdown = setInterval(CountDown, 1000);

        function CountDown() {
            $("#btn_yzm").attr("disabled", true);
            $("#btn_yzm").val("" + count + "s");
            if (count == 0) {
                $("#btn_yzm").val("���»�ȡ").removeAttr("disabled");
                clearInterval(countdown);
            }
            count--;
        }
    })
};
$(function () {
//  $('.alert').hide();
//  $('.alert-black').hide();
    $('#login-alert').click(function(){
        $('.alert').css('display','block');
        $('.alert-black').css('display','block');
    });
    $('#login').click(function(){
        $('.alert').css('display','block');
        $('.alert-black').css('display','block');
    });
    $('.alert-close').click(function(){
        $('.alert').css('display','none');
        $('.alert-black').css('display','none');
    });
    $('.tabbox .content-a ul').width(290 * $('.tabbox .content-a li').length + 'px');
    $(".tabbox .tab a").click(function () {
        $(this).addClass('on').siblings().removeClass('on');
        var index = $(this).index();
        number = index;
        var distance = -290 * index;
        $('.tabbox .content-a ul').stop().animate({
            left: distance
        });
    });

    var auto = 1;  //����1���Զ��л������������������Զ��л�
    if (auto == 1) {
        var number = 0;
        var maxNumber = $('.tabbox .tab a').length;

        function autotab() {
            number++;
            number == maxNumber ? number = 0 : number;
            $('.tabbox .tab a:eq(' + number + ')').addClass('on').siblings().removeClass('on');
            var distance = -290 * number;
            $('.tabbox .content-a ul').stop().animate({
                left: distance
            });
        }

//            var tabChange = setInterval(autotab, 3000);
//            //�����ͣ��ͣ�л�
//            $('.tabbox').mouseover(function () {
//                clearInterval(tabChange);
//            });
//            $('.tabbox').mouseout(function () {
//                tabChange = setInterval(autotab, 3000);
//            });
    }
});