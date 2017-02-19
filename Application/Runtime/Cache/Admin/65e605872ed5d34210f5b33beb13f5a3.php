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
                <li><a class="on" href="/matouPCS/index.php/Admin/Index/index">首页</a></li>
                <li><a href="/matouPCS/index.php/Index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">你好[<?php echo (cookie('username')); ?>]</a></li>
                <li><a href="#">修改密码</a></li>      
                <li><a href="/matouPCS/index.php/Admin/Login/index">退出</a></li>
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
                         <li><a href="/matouPCS/index.php/Admin/Viwepager"><i class="icon-font">&#xe008;</i>图片轮播管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Reward"><i class="icon-font">&#xe005;</i>悬赏大厅管理</a></li>
                            <li><a href="/matouPCS/index.php/Admin/Due"><i class="icon-font">&#xe005;</i>应赏区管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Recruit"><i class="icon-font">&#xe005;</i>招聘大厅管理</a></li>
                              <li><a href="/matouPCS/index.php/Admin/Employ"><i class="icon-font">&#xe005;</i>应聘区管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Force"><i class="icon-font">&#xe005;</i>码头部队管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Shop"><i class="icon-font">&#xe005;</i>码头商城管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Flea"><i class="icon-font">&#xe005;</i>跳蚤市场管理</a></li>
                       
                        
                         <li><a href="/matouPCS/index.php/Admin/Friend"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                         <li><a href="/matouPCS/index.php/Admin/Us"><i class="icon-font">&#xe052;</i>关于我们</a></li>
                    
                    </ul>
                </li>\
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                     <li><a href="/matouPCS/index.php/Admin/User"><i class="icon-font">&#xe005;</i>用户信息管理</a></li>
                     <li><a href="/matouPCS/index.php/Admin/Bdzx"><i class="icon-font">&#xe005;</i>部队中心管理</a></li>
                      <li><a href="/matouPCS/index.php/Admin/Liuyan"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                  
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/matouPCS/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户信息管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/matouPCS/index.php/Admin/User/index" method="post">
               <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/matouPCS/index.php/Admin/user/add"><i class="icon-font"></i>添加新用户</a>
                     <a id="batchDel" href="javascript:void(0)"><input form="myform"  formaction="/matouPCS/index.php/Admin/User/bdel" 
                        type="submit" class="btn btn-primary btn2" onclick="return confirm('确定删除这些信息吗？');" value="批量删除"/></a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                       
                            <th>用户名</th>
                <th>用户密码</th>
                            <th>性别</th>
                              <th>地址</th>
                            <th>电话</th>
                             <th>微博</th>
                             <th>qq</th>
                             <th>微信</th>
                             <th>用户头像</th>
                             <th>粉丝数</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($operarr)): $i = 0; $__LIST__ = $operarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                         <td class="tc"><input name="ids[]" value="<?php echo ($v["id"]); ?>"  class="check" type="checkbox"></td>
                          
                            <td> <?php echo ($v["username"]); ?> </td>
                            <td><?php echo ($v["password"]); ?></td>
                            <td><?php echo ($v["sex"]); ?></td>
                            <td><?php echo ($v["address"]); ?></td>
                            <td><?php echo ($v["tel"]); ?></td>
                            <td><?php echo ($v["weibo"]); ?></td>
                            <td><?php echo ($v["qq"]); ?></td>
                             <td><?php echo ($v["weixin"]); ?></td>
                              <td><img src="/matouPCS/Public/upload/<?php echo ($v["pubtime"]); ?>/<?php echo ($v["imagename"]); ?>" width="50"/></td>
                                <th><?php echo ($v["fen"]); ?></th>
                            <td>
                                <a class="link-update" href="/matouPCS/index.php/Admin/User/update?id=<?php echo ($v["id"]); ?>">修改资料</a>
                                <a class="link-update" href="/matouPCS/index.php/Admin/User/updateimage?id=<?php echo ($v["id"]); ?>">修改图片</a>
                               <a class="link-del"  href = "/matouPCS/index.php/Admin/User/delete?id=<?php echo ($v["id"]); ?>" onclick="if(confirm( '是否确定删除这条链接！')==false)return false;">删除</a>
	                  
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div  class="pagelist"><?php echo ($pageStr); ?></div>
                </div>
            </form>
             <script type="text/javascript">
     $("#check").click(function(){
	 if($(this).prop("checked")){
		 $(".check").prop("checked","checked")
	 }else{
		 $(".check").removeAttr("checked")
	 }
	 
 })
 
</script>
        </div>
    </div>
    <!--/main-->
</div>
</body>