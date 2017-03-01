// 登录
$('.content-3f').click(function(){
    // alert($('#login-userName').val());
    // alert($('#login-passWord').val());
    var user = $('#login-userName').val();
    var pass = $('#login-passWord').val();
    $.ajax({
        url:"?s=/Home/Index/login",
        type:"post",
        data:{username:user,password:pass},
        success:function(data){
            if(data == 'y'){
                location.reload();
            }else if(data == 'n'){
                $('.login-passWord p').html('账号或密码错误');
                $('.login-passWord p').css('display','block');
            }
        },error:function(){
            alert('no');
        }
    });
});

// 注册手机号的判断
$('#register-userName').blur(function(){
    var tel = $('#register-userName').val();
    var reg =/^1\d{10}$/;
    var v = $("#register-userName").val();
    if($('#register-userName').val() == ''){
        $('.register-userName p').css('display','block');
    }else if(!reg.test(v)){
         $('.register-userName p').html('<p style="display: none;">*手机号格式不正确</p>');
         $('.register-userName p').css('display','block');
    }else{
        $.ajax({
            url:"?s=/Home/Index/user/u/"+tel,
            type:"get",
            success:function(data){
                if(data == 'y'){
                    $('.register-userName').append('<p style="color:green">该号码可以注册</p>');
                }
                if(data == 'n'){
                    $('.register-userName').append('<p  style="color:red">该号码已被注册</p>');
                    $('#submit').click(function(){
                        alert('滚犊子');
                    });
                }
            },error:function(){
                alert('no11');
            }
        });
    }
    
});
//密码的事件
// $('.register-3f').remove();
$('#register-passWord').blur(function(){
$('#reg').remove();
if($('#register-passWord').val() == ''){
    $('.register-3f').append('<p id="reg" style="color:red">不能为空!</p>');
}
});
$('#again').blur(function(){
if($('#register-passWord').val() == ''){
    $('.register-passWord p').css('display','block');
}else if(!pass.test(y)){
    $('.register-passWord p').html('<p style="display: none;">*密码只能是6道18位数字或字母组合</p>');
    $('.register-passWord p').css('display','block');

    // alert('密码只能是6道10位数字或字母组合');
}
});
// 提交表单
// function ssub(){
$('#submit').click(function(){
var username = $('#register-userName').val();
var password = $('#register-passWord').val();

// if( p == 1 && u == 1 && ps == 1){
        $.ajax({
            url:"?s=/Home/Index/regin",
            type:"post",
            data:{username:username,password:password},
            success:function(data){
            if($('#yzm').val() != $('#codes').val()){
                alert('验证码有误！');
            }else if(data == 'y'){
                // $('#login-alert').html(username);
                $('.alert').css('display','none');
                $('.alert-black').css('display','none');
                alert('注册成功！');
            }else{
                alert('输入有误');
            }
            // alert(data);
        },error:function(){
            alert('no2');
        }
    });
    // }else{
    //     alert('滚犊子');
    // }

});
// }


/**
 * Created by Administrator on 2016/12/22 0022.
 */
$(function() {
    shortMessagraxc(); //��ȡ��֤��
// ---------------------------------------------       �ж���֤��
    $('#yzm').blur(function(){
        if($('#yzm').val() == $('#codes').val()){
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
        var tel = $('#register-userName').val();
        $.ajax({
            type : "get",
            url : "http://139.196.34.227/matouPC/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/fileTest.php?tel="+tel,
            success:function(data){
                $('#codes').val(data);
            },error:function(){
                alert('123123');
            }
        });
        var count = 60;
        var countdown = setInterval(CountDown, 1000);

        function CountDown() {
            $("#btn_yzm").attr("disabled", true);
            $("#btn_yzm").val("" + count + "s");
            if (count == 0) {
                $("#btn_yzm").val("重新获取").removeAttr("disabled");
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
        if($('#login-alert').html() == '请注册\\登录'){
          $('.alert').css('display','block');
          $('.alert-black').css('display','block');  
        }
        
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