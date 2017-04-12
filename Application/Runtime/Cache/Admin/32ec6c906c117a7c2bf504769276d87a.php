<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登录</title>
<link href="/matouPCS/Public/Admin/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<link href="/matouPCS/Public/Admin/css/demo.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/matouPCS/Public/Admin/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="/matouPCS/Public/Admin/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/matouPCS/Public/Admin/js/Validform_v5.3.2_min.js"></script>

<script>
$(function(){

$(".i-text").focus(function(){
$(this).addClass('h-light');
});

$(".i-text").focusout(function(){
$(this).removeClass('h-light');
});

$("#username").focus(function(){
 var username = $(this).val();
 if(username=='输入账号'){
 $(this).val('');
 }
});

$("#username").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入账号');
 }
});


$("#password").focus(function(){
 var username = $(this).val();
 if(username=='输入密码'){
 $(this).val('');
 }
});


$("#yzm").focus(function(){
 var username = $(this).val();
 if(username=='输入验证码'){
 $(this).val('');
 }
});

$("#yzm").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入验证码');
 }
});



$(".registerform").Validform({
	tiptype:function(msg,o,cssctl){
		var objtip=$(".error-box");
		cssctl(objtip,o.type);
		objtip.text(msg);
	},
	ajaxPost:true
});

});




</script>


</head>

<body>


<div class="header">
  <h1 class="headerLogo"><a title="后台管理系统" target="_blank" href="#"><img alt="logo" src="/matouPCS/Public/Admin/images/logo.png"></a></h1>
	<div class="headerNav">
		<a target="_blank" href="#">喜事码头</a>
		<a target="_blank" href="#">后台管理</a>
		<a target="_blank" href="#">开发团队</a>
		<a target="_blank" href="#">意见反馈</a>
		<a target="_blank" href="#">帮助</a>	
	</div>
</div>

<div class="banner">

<div class="login-aside">
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
   <div class="error-box"></div>
   

      <form  action="/matouPCS/Admin/Login/check" method="post">
         
   <div class="fm-item">
	   <label for="logonId" class="form-label">喜事码头：</label>
	   <input type="text" value="输入账号" name="username" maxlength="100" id="username" class="i-text" ajaxurl="demo/valid.jsp"  datatype="s4-18" errormsg="用户名至少4个字符,最多18个字符！"  >    
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label">登陆密码：</label>
	   <input type="password" value="" maxlength="100" name="password"  id="password" class="i-text" datatype="*4-16" nullmsg="请设置密码！" errormsg="密码范围在4~16位之间！">    
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item pos-r">
	   <label for="logonId" class="form-label">验证码</label>
	   <input type="text" value="输入验证码" name="verify"  maxlength="100" id="yzm" class="i-text yzm" nullmsg="请输入验证码！" >    
       <div class="ui-form-explain"><img class="yzm-img"  style="vertical-align:bottom; height:35px;width: 100px;" size=5  onclick="this.src='/matouPCS/Admin/Login/verify/'+Math.random();" style="height:30px" src="/matouPCS/Admin/Login/verify"/></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login"> 
       <div class="ui-form-explain"></div>
  </div>
  
  </form>
  
  </div>

</div>

	<div class="bd">
		<ul>
			<li style="background:url(/matouPCS/Public/Admin/themes/theme-pic1.jpg) #CCE1F3 center 0 no-repeat;"><a target="_blank" href="#"></a></li>
			<li style="background:url(/matouPCS/Public/Admin/themes/theme-pic1.jpg) #BCE0FF center 0 no-repeat;"><a target="_blank" href="#"></a></li>
		</ul>
	</div>

	<div class="hd"><ul></ul></div>
</div>
<script type="text/javascript">jQuery(".banner").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });</script>


<div class="banner-shadow"></div>

<div class="footer">
   <p> 版权所有    Copyright 2016  HUARUAN Corporation, All Rights Reserved</p>
</div>

<div style="text-align:center;">
<p>来源：<a href="http://www.mycodes.net/" target="_blank">喜事码头</a></p>
</div>

</body>
</html>