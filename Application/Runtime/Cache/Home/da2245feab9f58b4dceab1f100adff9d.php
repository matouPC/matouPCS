<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
        <title><?php echo ($title); ?></title>
        <link href="<?php echo ($url_ali); ?>images/favicon.ico" rel="shortcut icon"/>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <meta content="<?php echo (msubstr($keywords,0,3000,14000,true)); ?>" name="keywords"/>
        <meta content="<?php echo (msubstr($description,0,3000,14000,true)); ?>" name="description"/>
        <link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>css/style_mobile<?php echo ($version); ?>.css" />
        <?php if(is_array($cssArr)): foreach($cssArr as $key=>$row): ?><link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>/<?php echo ($row); ?>.css" /><?php endforeach; endif; ?>
        <?php if($control == 'lottery'): ?><script src="/Public/js/jquery.js" type="text/javascript"></script>
            <?php else: ?>
        <script src="<?php echo ($url_ali); ?>js/jquery1.8.min.js" type="text/javascript"></script><?php endif; ?>
        <?php if(is_array($jsArr)): foreach($jsArr as $key=>$row): ?><script src="<?php echo ($url_ali); ?>js/<?php echo ($row); ?>.js" type="text/javascript"></script><?php endforeach; endif; ?>
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?3150038f336cd12048cd9c88278dcfa9";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
    </head>
    <body class="<?php echo ($control); ?>_<?php echo ($mod); ?>">

<style>
    .smail_hand img{height:1.35em;}

</style>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wxba922caddc6700a8', // 必填，公众号的唯一标识
        timestamp: '<?php echo ($timestamp); ?>', // 必填，生成签名的时间戳
        nonceStr: '<?php echo ($wxnonceStr); ?>', // 必填，生成签名的随机串
        signature: '<?php echo ($wxSha1); ?>', // 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
    wx.ready(function() {

        // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
        wx.onMenuShareTimeline({
            title: '参与“洛杉矶寻人”,百分百拿豪礼', // 分享标题
            link: '<?php echo ($shareWeixinUrl); ?>', // 分享链接
            imgUrl: 'http://pics.mtgdfs.com/activities/WeChat-code.jpg', // 分享图标
            success: function() {
                // 用户确认分享后执行的回调函数
                alert('分享朋友圈成功');

            },
            cancel: function() {
                // 用户取消分享后执行的回调函数
                alert('取消分享成功');
            }
        });


        wx.onMenuShareAppMessage({
            title: '参与“洛杉矶寻人”,百分百拿豪礼', // 分享标题
            desc:'神马!不去美国也能拿奖?! 分享优惠码给要去洛杉矶的小伙伴，超级大奖等你拿~百分百的中奖率!你们还犹豫什么',
            link: '<?php echo ($shareWeixinUrl); ?>', // 分享链接
            imgUrl: 'http://pics.mtgdfs.com/activities/WeChat-code.jpg', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function() {
                // 用户确认分享后执行的回调函数
                alert('分享朋友成功');
            },
            cancel: function() {
                // 用户取消分享后执行的回调函数
                alert('取消分享成功');
            }
        });
    });

    wx.error(function(res) {

        // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。

    });


</script>
<div class="m_main_absolute">
    <div class="c_index_title">距离活动结束还有</div>
    <div class="endtime" value="<?php echo ($endtime); ?>"></div>
    <div class="index_tip_outer">
        <div class="index_tip"></div>
        <div class="index_tip_words">
            <p style="position: relative;top:0.2rem">现在就点击右上角</p>
            <p class="smail_hand">分享活动至朋友圈拿大奖<img src="/Public/images/hand.png"/></p>
        </div>
        <div class="index_btn">
            <div class="index_btn_reg_outer">
                <a class="index_btn_reg_box"></a>
                <a class="index_btn_reg" href="http://www.mtgdfs.com/customer/account/create/">立即注册</a>
                <p style="margin:1.2rem 0 0"><a class="index_btn_reg_box"></a>
                    <a class="index_btn_reg" href="http://www.mtgdfs.com/c/pro1020/?aid=m-pagec-4">立即查看活动</a></p>
            </div>
        </div>
    </div>
    <div class="swip_arrow" id="swip_arrow"></div>
</div>
</body>
</html>


<div  class="m_main_absolute_img">
    <img src="/Public/images/index_bg.jpg"  id="bigimg"/>
</div>
<script type="text/javascript" src="/Public/js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript">
    $(function() {
        //http://www.cnblogs.com/aimyfly/p/3843977.html
        $("#swip_arrow").swipe({
            swipeStatus: function(event, phase, direction, distance, duration, fingerCount) {
                location.href = '<?php echo (C("site_url")); ?>coupon/openid/<?php echo ($openid); ?>';
            },
        });
        var h = $(document).height();
        $("#bigimg").css({"height": h})
    });
</script>
<style type="text/css">
    .endtime{color:#FFF;text-align: center;font-size: 2.4rem;margin:2rem 0 0;letter-spacing: 0.2rem}
    .endtime span{font-size: 1.6rem;margin:0 1rem 0 0.2rem}
    .endtime span.word_minute{margin-right: 0}
</style>
<script type="text/javascript">
    var time_current = (new Date()).valueOf();//获取当前时间
    var dateTime = new Date();
    difference = dateTime.getTime() - time_current;
    $(function() {

        getEndtime();
        setInterval(function() {
            getEndtime();
        }, 1000);
    });
    function getEndtime() {
        $(".endtime").each(function() {
            var obj = $(this);
            var endTime = new Date(parseInt(obj.attr('value')) * 1000);
            var nowTime = new Date();
            var nMS = endTime.getTime() - nowTime.getTime() + difference;
            var myD = Math.floor(nMS / (1000 * 60 * 60 * 24));
            var myH = Math.floor(nMS / (1000 * 60 * 60)) % 24;
            var myM = Math.floor(nMS / (1000 * 60)) % 60;
            var myS = Math.floor(nMS / 1000) % 60;
            if (myD >= 0) {
                var str = myD + "<span class='word_day'>天</span>" + myH + "<span class='word_hour'>小时</span>" + myM + "<span class='word_minute'>分</span>";
            } else {
                var str = "已结束！";
            }
            obj.html(str);
        });
    }
</script>