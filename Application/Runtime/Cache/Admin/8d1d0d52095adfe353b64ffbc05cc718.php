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
<!--头部完结-->  
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/matouPCS/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">应赏区</a></span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
               <div class="result-wrap">
         
                <div class="result-title">
                    <div class="result-list">
                        <a href="/matouPCS/index.php/Admin/Due/add"><i class="icon-font"></i>添加照片作品</a>
                    
                    </div>
                </div>
            <?php if(is_array($jarr)): $i = 0; $__LIST__ = $jarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><br/><br/>
           <form action="/matouPCS/index.php/Admin/Due/usaveimage" method="post" enctype="multipart/form-data">
   <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>姓名：</th>
                                <td>
                                <?php echo ($v["name"]); ?>
                                         <input type="hidden" name="id" value="<?php echo ($v["id"]); ?>"/>
                                     <input type="hidden" name="pid" value="<?php echo ($v["pid"]); ?>">
                                     <input type="hidden" name="usid" value="<?php echo ($v["usid"]); ?>">
                                </td>
                            </tr>
                          
                         
                            <tr>
                                <th><i class="require-red">*</i>照片作品：</th>
                                <td><input name="smallimg" id="" type="file" multiple="multiple" name="upload[]"><img src="/matouPCS/Public/upload/<?php echo ($v["pubtime"]); ?>/<?php echo ($v["imagename"]); ?>"  width="400"/></td>
                            </tr>
                           
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="修改" type="submit">
                                      <a class="btn btn-primary btn6 mr10"  onclick="sc(<?php echo ($v["id"]); ?>)">删除</a>
                                    <a href="/matouPCS/index.php/Admin/Due"><input class="btn btn6"  value="返回"></a>
                                </td>
                            </tr>
                        </tbody></table>
 </form><?php endforeach; endif; else: echo "" ;endif; ?>   
  <script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>            
 <script type="text/javascript">              
 function sc(id){
//	alert(id);
	if(confirm( '是否确定删除这条信息！')==true){
       	$.ajax({

       		url:"/matouPCS/index.php/Admin/Due/delete2/id/"+id,
     
       		type:"get",
       		success:function(data){
       			//alert(data);
       			if(data == 'y'){
       			
       				alert('删除失败');
    		
    			}else{
    				window.location.reload(true);
    			}
       		},error:function(){
       			alert('no');
       		}
       	});
    	}else{
    		return false;
    	}
    };
    
</script>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>