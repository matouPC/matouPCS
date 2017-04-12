<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <title>『喜事码头』后台管理</title>
    <link rel="stylesheet" type="text/css" href="/matouPCS/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/matouPCS/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script> 
    <link rel="stylesheet" href="/matouPCS/Public/Admin/css/datePicker.css" />    
    <script type="text/javascript" src="/matouPCS/Public/Admin/js/libs/modernizr.min.js"></script>
    <style type="text/css">
     .pagelist{ text-align:center; background:#f1f1f1; padding:7px 0;}
     .pagelist a{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
   .pagelist span{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#6185a2;}
              
    
    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="?s=/Admin/Index/index">首页</a></li>
                <li><a href="?s=/Index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">你好[<?php echo (cookie('username')); ?>]</a></li>
                <li><a href="#">修改密码</a></li>      
                <li><a href="?s=/Admin/Login/index">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                         <li><a href="?s=/Admin/Viwepager"><i class="icon-font">&#xe008;</i>图片轮播管理</a></li>
                          <li><a href="?s=/Admin/Reward"><i class="icon-font">&#xe005;</i>悬赏大厅管理</a></li>
                            <li><a href="?s=/Admin/Due"><i class="icon-font">&#xe005;</i>应赏区管理</a></li>
                          <li><a href="?s=/Admin/Recruit"><i class="icon-font">&#xe005;</i>招聘大厅管理</a></li>
                              <li><a href="?s=/Admin/Employ"><i class="icon-font">&#xe005;</i>应聘区管理</a></li>
                          <li><a href="?s=/Admin/Force"><i class="icon-font">&#xe005;</i>码头部队管理</a></li>
                          <li><a href="?s=/Admin/Shop"><i class="icon-font">&#xe005;</i>码头商城管理</a></li>
                          <li><a href="?s=/Admin/Flea"><i class="icon-font">&#xe005;</i>跳蚤市场管理</a></li>
                         <li><a href="?s=/Admin/Friend"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                         <li><a href="?s=/Admin/Us"><i class="icon-font">&#xe052;</i>关于我们</a></li>
                    
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                     <li><a href="?s=/Admin/User"><i class="icon-font">&#xe005;</i>用户信息管理</a></li>
                     <li><a href="?s=/Admin/Bdzx"><i class="icon-font">&#xe005;</i>认证部队中心管理</a></li>
                      <li><a href="?s=/Admin/Liuyan"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                  
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--头部完结-->  
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/matouPCS/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">悬赏大厅管理</span></div>
        </div>
        
        <div class="result-wrap">
             <form action="/matouPCS/admin/Reward/save" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                  
                          
                            <tr>
                                <th><i class="require-red">*</i>活动时间：</th>
                                <td>
                                	<input id="date" type="text" class="date_picker" name="time" placeholder="点击选择时间" />
                                   
                                        <input type="hidden" name="uid" value="1"/>
                                </td>
                            </tr>
                              <tr>
                                <th><i class="require-red">*</i>活动地点：</th>
                                <td>
                                    <input class="common-text required" id="type" name="address" size="12" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>联系电话：</th>
                                <td>
                                    <input class="common-text required" id="name" name="tel" size="15" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>qq：</th>
                                <td>
                                    <input class="common-text required" id="sex" name="qqs" size="15" value="" type="text">
                                </td>
                            </tr>
                                <tr>
                                <th>活动详情：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>收藏数：</th>
                                <td>
                                    <input class="common-text required" id="height" name="collect" size="10" value="" type="text">
                                </td>
                            </tr>
                      
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <a href="/matouPCS/Admin/Reward"><input class="btn btn6"  value="返回"></a>
                                </td>
                            </tr>
                        </tbody></table>
                </form>
                <script src="/matouPCS/Public/Admin/js/jquery.date_input.pack.js"></script>
                <script type="text/javascript">
                $(function() {
        			//日期
        			$('#date').date_input();
        			//选中filter下的所有a标签，为其添加hover方法，该方法有两个参数，分别是鼠标移上和移开所执行的函数。
        			$("#filter a").hover(
        				function() {
        					$(this).addClass("seling");
        				},
        				function() {
        					$(this).removeClass("seling");
        				}
        			);

        			//选中filter下所有的dt标签，并且为dt标签后面的第一个dd标签下的a标签添加样式seled。(感叹jquery的强大)
        			$("#filter dt+dd a").attr("class", "seled");
        			/*注意：这儿应该是设置(attr)样式，而不是添加样式(addClass)，
        			                                                     不然后面通过$("#filter a[class='seled']")访问不到class样式为seled的a标签。*/

        			//为filter下的所有a标签添加单击事件
        			$("#filter a").click(function() {
        				$(this).parents("dl").children("dd").each(function() {
        					//下面三种方式效果相同（第三种写法的内部就是调用了find()函数，所以，第二、三种方法是等价的。）
        					//$(this).children("div").children("a").removeClass("seled");
        					//$(this).find("a").removeClass("seled");
        					$('a', this).removeClass("seled");
        				});

        				$(this).attr("class", "seled");

        				//				alert(RetSelecteds()); //返回选中结果
        			});
        			//返回选中结果
        		});

                
                </script>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>