<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/css/box/login.css" rel="stylesheet" type="text/css">
<div class="modal fade ui-dialog" style="width:452px;margin-left: -226px" id="box_modal">
    <div class="ui-dialog-title">      
        <a title="关闭" class="ui-dialog-close" onclick="closeModal()"><span class="ui-icon ui-icon-delete"></span></a>
        <span>添加提现账号</span>     
    </div>
    <div class="ui-dialog-content">
        <div class="withdraw_form" id="withdraw_form">

            <div class="withdraw_input_area" id="withdraw_input_area">
                <div class="alipay_money_words">请输入您要提现的支付宝账号：</div>
                <input class="input_text" type="text" value="" id="account_alipay" style="width:330px;">
            </div>
            <div class="msg_error" id="msg_error" style="margin:20px 0 0">
                <b></b>
                <span id="box_error"></span>
            </div>
            <div class='btns'>
                <a class='button btn_go_on' onclick='bindUserAlipay()'>继续</a>
                <a class="button btn_gray" onclick="closeModal()"> 取消</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var close_timeleft = 3;
    var close_t;
    function bindUserAlipay() {
        var account_alipay = $("#account_alipay").val();
        if (account_alipay == '') {
            showBoxError("请输入支付宝账号！");
            return false;
        }
        $.post(getUrl('Box/bindUserAlipay'), {ccount_alipay: account_alipay}, function(data) {
            showSuccess();
        })
    }

    function showBoxError(msg) {
        $("#msg_error").show();
        $("#box_error").text(msg);
    }
    function showSuccess() {
        var box = "<div class='tip_box'><span class='icon_success'></span>\n\
    <div class='tip_words'><h3>添加提现账号成功！</h3><div class='auto_close'><span id='close_timeleft'>3</span> 秒后自动关闭</div></div></div>";
        $("#withdraw_form").html(box);
        showSuccessTimeLeft()
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
    function closeModal() {
        $('#box_modal').modal('hide');
        clearTimeout(close_t)
    }
</script>