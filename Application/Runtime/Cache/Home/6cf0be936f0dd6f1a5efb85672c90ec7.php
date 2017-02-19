<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/css/box/login.css" rel="stylesheet" type="text/css">
<div class="modal fade ui-dialog" style="width:452px;margin-left: -226px" id="box_modal">
    <div class="ui-dialog-title">      
        <a title="关闭" class="ui-dialog-close" onclick="$('#box_modal').modal('hide')"><span class="ui-icon ui-icon-delete"></span></a>
        <span>提现</span>     
    </div>
    <div class="ui-dialog-content">
        <div class="withdraw_form" id="withdraw_form">
            <div class="withdraw_info" id="withdraw_info">
                <div class="alipay_money_words">您将提现$99到支付宝账号：</div>
                <div class="alipay_account">2313123</div>
                <div class="msg_error" id="msg_error">
                    <b></b>
                    <span id="box_error"></span>
                </div>
                <div class="alipay_other"><a onclick="withdraw_alipay_other()">提现到其他支付宝账号</a></div>
            </div>
            <div class="withdraw_input_area" id="withdraw_input_area">
                 <div class="alipay_money_words">请输入您要提现的支付宝账号：</div>
                 <input class="input_text" type="text" value="" id="account_alipay" style="width:330px;">
            </div>
            <div class='btns'>
                <a class='button btn_go_on' onclick='withdraw_save()'>继续</a>
                <a class="button btn_gray" onclick="$('#box_modal').modal('hide')"> 取消</a>
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

    function showBoxError(msg) {
        $("#msg_error").show();
        $("#box_error").text(msg);
    }
    function showSuccess() {
        var box = "<div class='tip_box'><span class='icon_success'></span>\n\
    <div class='tip_words'><h3>修改提现账号成功！</h3><div class='auto_close'><span id='close_timeleft'>3</span> 秒后自动关闭</div></div></div>";
        $("#withdraw_form").html(box);
        setTimeout(function() {
            showSuccessTimeLeft()
        }, 1000)
    }
    function showSuccessTimeLeft() {
        if (close_timeleft == 0) {
            $('#box_modal').modal('hide');
            close_timeleft = 3;
        } else {
            close_timeleft--;
            setTimeout(function() {
                showSuccessTimeLeft()
            }, 1000)
            $("#close_timeleft").text(close_timeleft);
        }
    }
    function withdraw_alipay_other() {
        $("#withdraw_info").hide();
        $("#withdraw_input_area").show();
    }
</script>