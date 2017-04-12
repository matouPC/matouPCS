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
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/matouPCS/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">码头部队管理</span></div>
        </div>
        
        <div class="result-wrap">
             <form action="/matouPCS/admin/Force/save" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>部队名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="forcename" size="20" value="" type="text">
                                            <input type="hidden" name="uid"  value="1"/>
                                </td>
                            </tr>
                          
                            <tr>
                                <th><i class="require-red">*</i>部队类型：</th>
                                <td>
                                    <input class="common-text required" id="type" name="type_bd" size="20" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>营业执照名称：</th>
                                <td>
                                    <input class="common-text required" name="charter" size="30" value="" type="text">
                                </td>
                            </tr>
                               <tr>
                                <th><i class="require-red">*</i>法定代表人：</th>
                                <td>
                                    <input class="common-text required" name="representative" size="20" value="" type="text">
                                </td>
                            </tr>
                                   <tr>
                                <th><i class="require-red">*</i>详细地址：</th>
                                <td>
                                    <input class="common-text required"  name="address" size="40" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>电话：</th>
                                <td>
                                    <input class="common-text required" name="tels" size="12" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>qq：</th>
                                <td>
                                    <input class="common-text required" id="height" name="qqs" size="10" value="" type="text">
                                </td>
                            </tr>
                           
                              <tr>
                                <th><i class="require-red">*</i>官网链接：</th>
                                <td>
                                    <input class="common-text required" id="height" name="lianjie" size="25" value="" type="text">
                                </td>
                            </tr>
                           
                            <tr>
                                <th>关注数：</th>
                                <td><input class="common-text" name="collect" size="11" value="" type="text"></td>
                            </tr>
                          
                            <tr>
                                <th><i class="require-red">*</i>部队logo图：</th>
                                <td><input name="smallimg" id="" type="file" multiple="multiple" name="upload[]"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>部队简介：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <a href="/matouPCS/Admin/Force"><input class="btn btn6"  value="返回"></a>
                                </td>
                            </tr>
                        </tbody></table>
                </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>