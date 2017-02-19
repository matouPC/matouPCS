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
            <div class="crumb-list"><i class="icon-font"></i><a href="/think/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">部队审核管理</span></div>
        </div>
        <div class="result-wrap">
  <?php if(is_array($operarr)): $i = 0; $__LIST__ = $operarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><form action="/matouPCS/index.php/admin/Force/shen" method="post" id="myform" name="myform" enctype="multipart/form-data">
          
          
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe014;</i>用户详情</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>用户名：</th>
                                <td><input type="text" id="" value="<?php echo ($v["username"]); ?>" size="20" name="type" class="common-text" readonly="true"></td>                              
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>性别：</th>
                               <td><input type="text" id="" value="<?php echo ($v["sex"]); ?>" size="20" name="type" class="common-text" readonly="true"></td>                          
                                    <td>
                            
										</td>				
                                </tr>
                       
                                    <tr>
                                    <th><i class="require-red">*</i>头像：</th>
                                     <td><img src="/matouPCS/Public/upload/<?php echo ($v["time"]); ?>/<?php echo ($v["logo"]); ?>"  width="70"/></td>
                                </tr>
                              
                        </table>
                    </div>
                </div>
                  <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe014;</i>码头部队认证信息</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>部队名称：</th>
                                <td><input type="text" id="" value="<?php echo ($v["forcename"]); ?>" size="85" class="common-text" readonly="true"/>
                                   <input type="hidden" name="id" value="<?php echo ($v["id"]); ?>"/>
                                </td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>部队类型：</th>
                                    <td><input type="text" id="" value="<?php echo ($v["type"]); ?>" size="85" class="common-text" readonly="true"/></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>营业执照名称：</th>
                                    <td><input type="text" id="" value="<?php echo ($v["charter"]); ?>" size="85" class="common-text" readonly="true"/></td>
                                </tr>
                             <tr>
                                    <th><i class="require-red">*</i>法定代表人：</th>
                                    <td><input type="text" id="" value="<?php echo ($v["representative"]); ?>" size="85" class="common-text" readonly="true"/></td>
                                </tr>
                                  <tr>
                                    <th><i class="require-red">*</i>详细地址：</th>
                                    <td><input type="text" id="" value="<?php echo ($v["address"]); ?>" size="85" class="common-text" readonly="true"/></td>
                                </tr>
                                  <tr>
                                    <th><i class="require-red">*</i>联系电话：</th>
                                    <td><input type="text" id="phone" value="<?php echo ($v["tels"]); ?>" size="85" class="common-text" readonly="true"/></td>
                                </tr>
                                   <tr>
                                    <th><i class="require-red">*</i>审核状态：</th>
                                    <td>
                                    
                                    <?php if($v[status]=='1'): ?>未审核<?php endif; ?>
                                        <?php if($v[status]=='2'): ?>审核通过<?php endif; ?>
                                     <?php if($v[status]=='3'): ?>审核未通过<?php endif; ?>
                                    
                                    </td>
                                </tr>
                                   <tr>
                                    <th><i class="require-red">*</i>码头部队审核结果：</th>
                               
                                    <td >

                                      <input type="radio" name = 'status'  value="2"  id="radio" readonly="true"/> 通过
                                      <input type="radio" name = 'status'  value="3"  id="radio"  readonly="true"/> 不通过
            
										</td>				
                                </tr>
                                   <tr>
                                    <th></th>
                                    <td>
                                   <a id="submit" onclick="tj(<?php echo ($v["id"]); ?>)"  class="btn btn-primary btn6 mr10">提交</a>
                                   <a href="/matouPCS/index.php/Admin/Shenhe"><input type="button" value="返回上一级"  class="btn btn6"></a>
                                    
                                    </td>
                        </table>
                    </div>
                </div>
            </form><?php endforeach; endif; else: echo "" ;endif; ?> 
 <script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>       
   <script type="text/javascript">



   $("#check").click(function(){
	 if($(this).prop("checked")){
		 $(".check").prop("checked","checked")
	 }else{
		 $(".check").removeAttr("checked")
	 }
	 
})
 function tj(id){
	// alert(id);
	 $.ajax({
	                 cache: true,
	                 type: "POST",
	                 url:"/matouPCS/index.php/Admin/Force/status/",
	                 data:$('#myform').serialize(),// 你的formid
	                 async: false,
	                 error: function(request) {
	                     alert("Connection error");
	                 },
	                 success: function(data) {
	                	 alert("审核成功");
	                  
	                	 var phone = $("#phone").val();
	            
	                	 var chkObjs=null;
	                	 var obj= document.getElementsByName("status");
	                	 for (var i=0;i<obj.length;i++){ //遍历Radio
	                	 if(obj[i].checked){
	                	 chkObjs=obj[i].value;
	                	 }
	                	 }
	                	if(chkObjs=='2'){
	                		xxoo(phone); 	
	                	}else{
	                		xxoo1(phone); 
	                	}
	       		        

	                 }
	             });
	 }     


   function xxoo(phone){
  	 $.ajax({
          	url:"http://127.0.0.1/matouPCS/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/newfile.php?phone="+phone,
          	type:"get",
          	success:function(phone){
          		alert('审核通过短信通知发送成功');
          	},error:function(){
          		alert('no');
          	}
          });  
   }
   function xxoo1(phone){
	  	 $.ajax({
	          	url:"http://127.0.0.1/matouPCS/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/newfile1.php?phone="+phone,
	          	type:"get",
	          	success:function(phone){
	          		alert('审核未通过短信通知发送成功');
	          	},error:function(){
	          		alert('no');
	          	}
	          });  
	   }
</script>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>