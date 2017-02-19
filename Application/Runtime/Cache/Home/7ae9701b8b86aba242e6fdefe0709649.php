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

<div class="index_banner"><img src="/c/Public/images/coupon_banner.jpg" alt="banner"/></div>
<div class="index_main">
    <div class="index_dollar">
    10美元专属优惠码任你<span class="important">抢↓</span>
    </div>
    <div class="index_coupon">
   <?php echo ($code); ?>
    </div>
    <p class="index_activity_intro">活动期间进行购物车结算时</p>
    <p class="index_activity_intro">输入优惠码可额外享受10美金优惠</p>
    <p class="index_logo"><img src="/c/Public/images/logo.png" alt="logo"/></p>
</div>
<div class="swip_arrow" id="swip_arrow"></div>
</body>
</html>
<script src="<?php echo ($url_ali); ?>js/jquery1.8.min.js" type="text/javascript"></script>
<?php if(is_array($jsArr)): foreach($jsArr as $key=>$row): ?><script src="<?php echo ($url_ali); ?>js/<?php echo ($row); ?>.js" type="text/javascript"></script><?php endforeach; endif; ?>


<script type="text/javascript" src="/c/Public/js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript">
    $(function() {
        //http://www.cnblogs.com/aimyfly/p/3843977.html
        $("#swip_arrow").swipe({
            swipeStatus: function(event, phase, direction, distance, duration, fingerCount) {
                location.href = '<?php echo (C("site_url")); ?>?openid=<?php echo ($_GET['openid']); ?>';
            },
        });
    });
</script>

<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
wx.config({
    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: 'wxba922caddc6700a8', // 必填，公众号的唯一标识
    timestamp: '<?php echo ($timestamp); ?>', // 必填，生成签名的时间戳
    nonceStr: '<?php echo ($wxnonceStr); ?>', // 必填，生成签名的随机串
    signature: '<?php echo ($wxSha1); ?>',// 必填，签名，见附录1
    jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});
wx.ready(function(){

    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
	wx.onMenuShareTimeline({
	    title: '参与“洛杉矶寻人”,百分百拿豪礼', // 分享标题
	    link: '<?php echo ($shareWeixinUrl); ?>', // 分享链接
	    imgUrl: 'http://pics.mtgdfs.com/activities/WeChat-code.jpg', // 分享图标
	    success: function () { 
	        // 用户确认分享后执行的回调函数
	        alert('分享朋友圈成功');
	        
	    },
	    cancel: function () {
	        // 用户取消分享后执行的回调函数
	    	alert('取消分享成功');
	    }
	});


	wx.onMenuShareAppMessage({
	    title: '参与"洛杉矶寻人",百分百拿豪礼', // 分享标题
	    desc: '神马!不去美国也能拿奖?! 分享优惠码给要去洛杉矶的小伙伴，超级大奖等你拿~百分百的中奖率!你们还犹豫什么',
	    link: '<?php echo ($shareWeixinUrl); ?>', // 分享链接
	    imgUrl: 'http://pics.mtgdfs.com/activities/WeChat-code.jpg', // 分享图标
	    type: '', // 分享类型,music、video或link，不填默认为link
	    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	    success: function () { 
	        // 用户确认分享后执行的回调函数
	    	alert('分享朋友成功');
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    	alert('取消分享成功');
	    }
	});
});

wx.error(function(res){

    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。

});


</script>