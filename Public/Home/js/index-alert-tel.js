
// 注册手机号的判断
$('#bd-tel').blur(function(){
    var tel = $('#bd-tel').val();
    var reg =/^1\d{10}$/;
    var v = $("#bd-tel").val();
    if($('#bd-tele').val() == ''){
        $('.aaa p').css('display','block');
    }else if(!reg.test(v)){
    	//alert(22)
         $('.aaa p').html('<p style="display: tsxx;">*手机号格式不正确</p>');
         $('.aaa p').css('display','block');
    }else{
    	//alert(tel);
        $.ajax({
            url:"?s=/Home/User/user/u/"+tel,
            type:"get",
            success:function(data){
                if(data == 'y'){
                	//alert('ok');
                    $('.aaa p').html('<p style="color:green">该号码可以绑定</p>');
                }

                if(data == 'n'){
                	//alert('ok1');
                    $('.aaa p').html('<p  style="color:red">该号码已被绑定</p>');
                    $('#submit').click(function(){
                        alert('no');
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
$('#rpassWord').blur(function(){
$('#reg').remove();
if($('#rpassWord').val() == ''){
	 $('.bbb p').html('<p  style="color:red">请输入密码</p>');  
}else{
	 $('.bbb p').html('<p  style="color:red"></p>'); 
}
});

// 提交表单
// function ssub(){
$('#submitt').click(function(){
var username = $('#bd-tel').val();
var password = $('#rpassWord').val();
//alert(password);
//alert(username);
// if( p == 1 && u == 1 && ps == 1){
        $.ajax({
            url:"?s=/Home/User/regins",
            type:"post",
            data:{username:username,password:password},
            success:function(data){
            	//alert($('#codess').val());
            if($('#fyzms').val() != $('#fcodes').val()){
                alert('验证码有误！');
            }else if(data == 'y'){
                // $('#login-alert').html(username);
                $('.alert-tel').css('display','none');
              /*  $('.alert-blackq').css('display','none');*/
                $('.ccc p').html('<p  style="color:red"></p>'); 
                alert('绑定成功！');
                window.location.reload(true);
            }else{
            	 $('.ccc p').html('<p  style="color:red">密码输入有误</p>');  
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
    $('#fyzms').blur(function(){
        if($('#fyzms').val() == $('#fcodes').val()){
            $('.alert-true').css('display','block');
        }else{
            $('.alert-false').css('display','block');
        }
    })
    $('#fyzms').click(function(){
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
        if($('#rpassWord').val() == ''){
            $('.rpassWord p').css('display','block');
        }
        if($('#rpassWord').val() != $('#againa').val() || $('#againa').val() == ''){
            $('.register-againa p').css('display','block');
        }
    })
    $('#register-userName').click(function(){
        $('.register-userName p').css('display','none');
    })
    $('#rpassWord').click(function(){
        $('.rpassWord p').css('display','none');
    })
    $('#againa').click(function(){
        $('.register-againa p').css('display','none');
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
    $('#btn_yzmn').click(function() {
        var tel = $('#bd-tel').val();
        $.ajax({
            type : "get",
            url : "/matouPCS/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/fileTest.php?tel="+tel,
            success:function(data){
            	//alert('666');
              $('#fcodes').val(data);
            },error:function(){
                alert('123123');
            }
        });
        var count = 60;
        var countdown = setInterval(CountDown, 1000);

        function CountDown() {
            $("#btn_yzmn").attr("disabled", true);
            $("#btn_yzmn").val("" + count + "s");
            if (count == 0) {
                $("#btn_yzmn").val("重新获取").removeAttr("disabled");
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
            // alert($('#login-alert').html());
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

