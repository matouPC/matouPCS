<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/css/box/login.css" rel="stylesheet" type="text/css">
<div class="modal fade ui-dialog" style="width:452px;margin-left: -226px" id="box_modal">
    <div class="ui-dialog-title">      
        <a title="关闭" class="ui-dialog-close" onclick="closeModal()"><span class="ui-icon ui-icon-delete"></span></a>
        <span>修改提现账号（手机验证）</span>     
    </div>
    <div class="ui-dialog-content">
        <div class="withdraw_form" id="withdraw_form">
            <div class='item'>
                <label>当前支付宝账号：</label>123***@163.com
            </div>
            <div class='item'>
                <label>新的支付宝账号：</label><input class="input_text" type="text" value="1800*****38" id="account_alipay">
            </div>
            <div class='item'>
                <label>手机号码：</label><span id='box_phone' data-phone='18005151538'>333</span>
            </div>
            <div class='item'>
                <label>验证码：</label><input class="input_text" type="text" value="" name="code" style='width:80px'>
                <input  type="button" onclick="sendPhoneCode()" class='btn_get_code' id="btn_get_code" value="点击获取"/>
            </div>
            <div class="msg_error" id="msg_error">
                <b></b>
                <span id="box_error"></span>
            </div>
            <div class='btns'>
                <a class='button btn_go_on' onclick='withdraw_save()'>继续</a>
                <a class="button btn_gray" onclick="closeModal()"> 取消</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function withdraw_save() {
        var phone = $("#box_phone").attr("data-phone");
        var account_alipay = $("#account_alipay").val();
        $.post(getUrl('Box/withdraw_save'), {phone: phone, account_alipay: account_alipay}, function(data) {
            showSuccess();
        })
    }
    function sendPhoneCode() {
        var phone = $("#box_phone").attr("data-phone");
        var obj_get_code = $("#btn_get_code");
        obj_get_code.attr("disabled", "disable").addClass("disabled");
        $.post(getUrl('Box/sendPhoneCode'), {phone: phone}, function(data) {
            if (data.code == 200) {
                //60s以后重新获取
                getShortMessagePassTime(obj_get_code);
            } else {
                showBoxError(data.msg);
            }
        }, "json")
    }
    var waitTime = 60;
    var close_timeleft = 3;
    var close_t;
    function getShortMessagePassTime(obj) {
        if (waitTime == 0) {
            obj.removeAttr("disabled").removeClass("disabled").val("点击获取");
            waitTime = 60;
        } else {
            obj.val("重新发送(" + waitTime + ")");
            waitTime--;
            setTimeout(function() {
                getShortMessagePassTime(obj)
            }, 1000)
        }
    }
    function showBoxError(msg) {
        $("#msg_error").show();
        $("#box_error").text(msg);
    }
    function showSuccess() {
        var box = "<div class='tip_box'><span class='icon_success'></span>\n\
    <div class='tip_words'><h3>修改提现账号成功！</h3><div class='auto_close'><span id='close_timeleft'>3</span> 秒后自动关闭</div></div></div>";
        $("#withdraw_form").html(box);
        showSuccessTimeLeft();
    }
    function showSuccessTimeLeft() {
        if (close_timeleft == 0) {
            $('#box_modal').modal('hide');
            close_timeleft = 3;
        } else {
            close_timeleft--;
          close_t = setTimeout(function() {
                showSuccessTimeLeft()
            }, 1000)
            $("#close_timeleft").text(close_timeleft);
        }
    }
    function closeModal(){
        $('#box_modal').modal('hide');
        clearTimeout(close_t)
    }
</script>