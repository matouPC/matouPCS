<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>应聘填写</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/txyp-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/upimg.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/tx.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
				list-style-type: none;
			}
			
			a,
			img {
				border: 0;
			}
			
			.demo {
				width: 720px;
				margin: 35px auto;
			}
			
			.demo h2 {
				font-size: 16px;
				color: #3366cc;
				height: 30px;
			}
			
			.demo li {
				float: left;
			}
			
			.text,
			.button {
				background: url(http://su.bdimg.com/static/superpage/img/spis_031ddf34.png) no-repeat;
			}
			
			.text {
				width: 425px;
				height: 22px;
				padding: 4px 7px;
				padding: 6px 7px 2px\9;
				font: 16px arial;
				border: 1px solid #cdcdcd;
				border-color: #9a9a9a #cdcdcd #cdcdcd #9a9a9a;
				vertical-align: top;
				outline: none;
				margin: 0 -1px 0 0;
			}
			
			.button {
				width: 79px;
				height: 32px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
			
			.button2 {
				width: 135px;
				height: 32px;
				margin-left: 30px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
		</style>
	</head>

	<body>
		<header>
			<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/sinaFaceAndEffec.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/header.css" />
	</head>

	<body>
		<div class="show-bg"></div>
		<header>
			<div class="h-c-1f">
				<div class="h-c-1f">
					<div class="h-f1-lzy">
						<div class="home">
							<img src="/matouPCS/Public/Home/img/home.png" />
						</div>
						<p>
							<a href="?s=/Home/index">首页</a>
						</p>
					</div>
					<div class="h-f1-rzy">
						<ul>
									<li class="login-register">
									<?php if($_SESSION['username'] != ''){ ?>
										<a href="?s=/Home/User">
											<div class="dltx">			
													<?php if($_SESSION['imagename'] != ''){ ?>
													 <img style="border-radius:50%;width: 30px"  src="/matouPCS/Tu/upload/<?php echo ($_SESSION['imagename']); ?>"/> 
													<?php }else{ ?>
												<img src="/matouPCS/Public/Home/img/tx.png" />
												<?php } ?>
											</div>
											<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
										</a>
								<?php }else{ ?>
								<a id="login-alert" href="#">请注册\登录</a>
								<?php } ?>
									</li>
							<li id="select-xx">
							<?php if($_SESSION['id'] != ''){ ?>
								<a rel="nofollow" href="#">消息</a>
								<div class="news">
									<img src="/matouPCS/Public/Home/img/news.png" />
								</div>
								<div class="str"></div>
								<div class="select-xx">
									<ul>
										<li>
												<a href="?s=/Home/User/xqxx">需求消息
											<div class="newss">
												<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
									</ul>
								</div>
								<?php }else{ ?>

								<a href="#" onclick="alert('请先登录')">消息</a>
								<div class="str"></div>
								<div class="select-xx" style="display:none;">
									<ul>
											<li>
												<a href="?s=/Home/User/xqxx">需求消息
											<div class="newss">
												<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
									</ul>
								</div>
								<?php } ?>
							</li>
							<li>
								<?php if(empty($_SESSION['username'])){ ?>
									<a href="javascript:void(0)" onclick="alert('请先登录')">收藏报名</a>
								<?php }else{ ?>
									<a href="?s=/Home/User/scj">收藏报名</a>
								<?php } ?>
								<div class="str"></div>
							</li>
								<?php if(!empty($_SESSION['id'])){ ?>
							<li id="select-yfb">
								<a rel="nofollow" href="#">&nbsp;&nbsp;已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
								<div class="str"></div>
								<div class="select-yfb">
									<ul>
									<li>
													<a href="?s=/Home/User/userXs">悬赏</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_ys">应赏</a>
												</li>
												<li>
													<a href="?s=/Home/User/userZp">招聘</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_yp">应聘</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_qg">求购</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_xz">闲置</a>
												</li>
									</ul>
								</div>
							</li>
									<?php }else{ ?>
									<li id="select-yfb" style="width: 70px;">
									<a href="javascript:void(0)" onclick="alert('请先登录')">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb" style="display:none;">
								
											<ul>
											
											</ul>
								</div>
								<?php } ?>
							<li class="bdzx-top">
							<?php if(empty($_SESSION['username'])){ ?>
								<a href="javascript:void(0)" onclick="alert('请先登录')">部队中心</a>
								<?php }else{ ?>
								<a href="?s=/Home/User/bdzx">部队中心</a>
								<?php } ?>
								<div class="str"></div>
							</li>
						<li id="select-sp">
								<a href="#">商铺中心<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
								<div class="str"></div>
								<div class="select-sp">
									<ul>
										<li>
							<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">商铺主页</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Tjcs/spxq/uid/<?php echo ($sp['uid']); ?>">商铺主页</a>
							   <?php }else{ ?>	
							   <a href="#" onclick="alert('你暂时还没注册商铺')">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
									<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">管理商铺</a>
							   <?php }else{ ?>	
							   <a href="#" onclick="alert('你暂时还没注册商铺')">管理商铺</a>
							   <?php } ?>
										
										</li>
									</ul>
								</div>
							</li>
							<li class="fdt-top">
								<a class="action" href="#" id="find">发动态</a>
								<div class="strf"></div>
							</li>
							<li class="clearf"></li>
						</ul>
					</div>
					<div class="clearf"></div>
				</div>
			</div>
				<!--登录注册开始-->
			<div class="alert">
				<div class="alert-1f">
					<div class="alert-close">
						<img src="/matouPCS/Public/Home/img/alert-close.png">
					</div>
				</div>
				<div class="alert-2f">
					<div class="alert-logo">
						<img src="/matouPCS/Public/Home/img/alert-logo.png">
					</div>
				</div>
				<div class="alert-3f">
					<div class="tabbox">
						<div class="tabbox-t">
							<div class="tab">
								<a href="javascript:;" class="on">登录</a>
								<a href="javascript:;">注册</a>
								<span class="str">|</span>
							</div>
						</div>
						<div class="content-a">
							<ul>
								<li>
									<div class="content-1f">
										<div class="login-user">
											<img src="/matouPCS/Public/Home/img/login-uesr.png">
										</div>
										<input id="login-userName" type="text" placeholder="使用用户名/手机号码">
									</div>
									<div class="login-userName">
										<p class="none">*用户名/手机号码输入有误，请重新输入</p>
									</div>
									<div class="content-2f">
										<div class="login-pw">
											<img src="/matouPCS/Public/Home/img/login-pw.png">
										</div>
										<input id="login-passWord" type="password" placeholder="请输入您的密码">
									</div>
									<div class="login-passWord">
										<p class="none">* 您的密码输入有误，请重新输入</p>
									</div>
									<div class="content-3f">
										<button>登录</button>
									</div>
									<div class="content-4f">
										<div class="i-check">
											<input type="checkbox" checked value="" />
											<label></label>
										</div>
										<P>
											<span class="left">下次自动登录</span>
											<span class="right"><a href="">忘记密码</a></span>
										</P>
									</div>
									<div class="content-5f">
										<p>使用其它方式登录</p>
										<div class="alert-QQ">
											<a href="javascript:void(0)" onclick="windowDl()">
												<!-- <span  id="qqLoginBtn"></span> -->
												<img src="/matouPCS/Public/Home/img/alert-QQ.png">
											</a>
										</div>
										<div class="alert-wc">
											 <a href="javascript:void(0)" onclick="wxLogin()"> <!--微信登录 -->
												<img src="/matouPCS/Public/Home/img/alert-wc.png">
											</a>
										</div>
										<div class="alert-xl">
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-xl.png">
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="register-1f">
										<span class="title">手 机 号</span>
										<input type="text" placeholder="请输入您的手机号码" id="register-userName">
										<input type="button" autocomplete="off" class="button" value="获取验证码" id="btn_yzm" />
									</div>
									<div class="register-userName">
										<p class="none">*请输入手机号码</p>
									</div>
									<div class="register-2f">
										<span class="title">验 证 码</span>
										<input id="yzm" type="text" maxlength="4" placeholder="请输入您的手机验证码">
										<div class="alert-true">
											<img src="/matouPCS/Public/Home/img/true.png">
										</div>
										<div class="alert-false">
											<img src="/matouPCS/Public/Home/img/false.png">
										</div>
									</div>
									<div class="register-3f">
										<span class="title">设置密码</span>
										<input id="register-passWord" type="password" placeholder="建议使用至少两种字符组合">
									</div>
									<div class="register-passWord">
										<p class="none">*请输入密码</p>
									</div>
									<div class="register-4f">
										<span class="title">确认密码</span>
										<input id="again" type="password" placeholder="请再次输入密码">
										<div class="register-again">
											<p class="none">*两次输入密码不一致，请重新输入</p>
										</div>
									</div>
									<div class="register-5f">
										<div class="i-check">
											<input type="checkbox" checked value="" />
											<label></label>
										</div>
										<p>
											<span class="left">我已阅读并同意</span>
											<a>《码头用户使用协议》</a>
										</p>
										<div class="clear"></div>
									</div>
									<div class="register-6f">
										<button>注册</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="alert-black"></div>
			<!--登录注册结束-->
			
			<!--发动态-->
		<div class="spdlb" id="spdlb" title="消息">
		
			<div class="titlenab">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhideb">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			
			<div id="type1" class="fbtypeb">
				<a>类型：</a>
				<a href="#">
					<p id="fbp1">婚礼喜事</p>
				</a>
				<a href="#" class="fbp2">
					<p id="fbp2">门面活动</p>
				</a>
			</div>
				 <script>
            var cNode =document.getElementById('type1').getElementsByTagName('p');
                    for( var i=0; i<cNode.length; i++){
                        cNode[i].index= i;
                        //用来计算点击次数
                        var type = 0;
                        cNode[i].onclick = function(){
                           type+=1; 
                            if(this.index == 0){
                                this.index = '婚礼喜事';  
                            }else if(this.index == 1){
                                this.index = '门面活动';
                            }
                         
                            types = this.index;
                            if(types == '婚礼喜事'){
                            	types = '1';
                            }else{
                            	types = '2';
                            }
                     
               
                            
                        }
                    }
                </script>
			<div class="spfxb"></div>
			<div class="contentb">
				<textarea name="content" id="content" class="text-face"></textarea>
			</div>
			<div class="swbtnb">
				<div class="swbtn-cb">
					<div>
						<a class="item" id="btn" tabindex="1">
							<img src="/matouPCS/Public/Home/img/addp.png" />
						</a>
					</div>
				
					<div class="adds">
						<img src="/matouPCS/Public/Home/img/adds.png" />
					</div>
				
					<button class="tjbtnb" id="tjbtn" onclick="tj()">发布</button>
				</div>
			</div>
		</div>
	<script>
			function tj(){
				   var tu = getCookie("tu");
				    var content= $("#content").val();  
		              alert(222);
					   alert(content);
		    $.ajax({  
				        type: "POST",  
				         url:"?s=/Home/User/usave1",
				         data: {content:content,type:types,tu:tu},  
				        success: function(data){ 
				            alert(666);
				        	//	 window.location.reload(true);//重新加载当前文挡
				  
	                	
				      
			          },error:function(){
			       			alert('no');
			       		}
			       	});
			      
		
		}   
	</script>
		<!--上传图片开始-->
		<div class="photo_upload_box_outside" id="photo_upload_box_outside" tabindex="2000">
            <div class="photo_upload_box">
                <a class="photo_upload_close"href="javascript:void(0);"onclick="photo_upload_close()"></a>
                <h1>本地上传</h1>
                <p class="upload_num">共<span id="uploaded_length">0</span>张，还能上传<span id="upload_other">9</span>张</p>
                <ul id="ul_pics" class="ul_pics clearfix">
                    <li id="local_upload"><img src="/matouPCS/Public/Home/img/local_upload.png" id="btn2"/></li>
                </ul>
                <div class="arrow_layer">
                    <span class="arrow_top_area"><i class="arrow_top_bg"></i><em class="arrow_top"></em></span>
                </div>
            </div>
        </div>
    
		<!--上传图片结束-->
		<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/matouPCS/Public/Home/js/jquery.leoweather.min.js"></script>
		<script src="/matouPCS/Public/Home/js/City_data.js"></script>
		<script src="/matouPCS/Public/Home/js/areadata.js"></script>
		<script src="/matouPCS/Public/Home/js/sinaFaceAndEffec.js"></script>
		<script src="/matouPCS/Public/Home/plupload/plupload.full.min.js"></script>
		<script src="/matouPCS/Public/Home/js/header-index.js"></script>
		<script src="/matouPCS/Public/Home/js/index-alert-login.js"></script>
		<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://www.xishimatou.com;" charset="utf-8"></script>
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
	</body>
</html>
					<div class="h-c-2f">
						<img src="/matouPCS/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input placeholder="搜索全站" type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0); color: white;" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-r">
					<p style="font-size: 22px;">WEDDING PIER</p>
					<p style="font-size: 22px;">喜事码头</p>
					<p style="font-size: 14px; padding:10px 0;">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							填写应聘
						</div>
						<ul>
							<li id="tab-jbxx" class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li id="tap">
								<a href="javascript://">
									工作经历
								</a>
							</li>
							<li id="tab-zpzp">
								<a href="javascript://">
									照片作品
								</a>
							</li>
							<li id="tab-spzp">
								<a href="javascript://">
									视频作品
								</a>
							</li>
						</ul>
					</div>
				</div>
				<form name="myform" enctype="multipart/form-data">
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<strong><p>基本信息</p></strong>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mname">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">姓&nbsp;&nbsp;&nbsp;&nbsp;名</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="name" id="uname" value="<?php echo ($fbyp["name"]); ?>" class="w200t" type="text" />
											<input type="hidden" name="id"  value="<?php echo ($fbyp["pid"]); ?>" class="w200t" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="msex">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">性&nbsp;&nbsp;&nbsp;&nbsp;别</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<?php if($fbyp['sexs']== '1'){?>
											<div class="w36"><input class="" name="sex" value="1" checked="checked" type="radio" /> 男</div>
											<?php }else{ ?>
											<div class="w36"><input class=""  name="sex"  value="1" type="radio" /> 男</div>
											<?php } ?>
											<?php if($fbyp['sexs']== '2'){?>
											<div class="w36"><input class="" name="sex" value="2" checked="checked" type="radio" />女</div>
											<?php }else{ ?>
											<div class="w36"><input class=""  name="sex" value="2" type="radio" /> 女</div>
											<?php } ?> 
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mage">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">年&nbsp;&nbsp;&nbsp;&nbsp;龄</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w75t" name="age" id="uage" type="number" value="<?php echo ($fbyp['ages']); ?>"/>&nbsp;岁
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mmap">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">所在地</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input type="text" class="w95s" id="uaddress" readonly="readonly" name="address" id="xz-city"  value="<?php $add = explode(',',$fbyp['address']); echo $add[0];?>"  data-value="" onclick="appendCity(this,'danxuan')" placeholder="请选择">
											<input id="xsdz" name="add" class="w209" id="uadd" value="<?php echo $add[1]; ?>" type="text" placeholder="填写详细地址" />
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">期望职业</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w95s" name="type" id="xtype" onchange="gradeChange()" style="width:100px;">
												<option>-请选择-</option>
												<?php if($fbyp['type'] == '经理/店长'){ ?>
												<option selected="selected">经理/店长</option>
												<?php }else{?>
												<option>经理/店长</option>
												<?php } ?>
												<?php if($fbyp['type'] == '营业员'){ ?>
												<option selected="selected">营业员</option>
												<?php }else{?>
												<option>营业员</option>
												<?php } ?>
												<?php if($fbyp['type'] == '数码师/设计'){ ?>
												<option selected="selected">数码师/设计</option>
												<?php }else{?>
												<option>数码师/设计</option>
												<?php } ?>
												<?php if($fbyp['type'] == '视频剪辑师'){ ?>
												<option selected="selected">视频剪辑师</option>
												<?php }else{?>
												<option>视频剪辑师</option>
												<?php } ?>
												<?php if($fbyp['type'] == '摄影师'){ ?>
												<option selected="selected">摄影师</option>
												<?php }else{?>
												<option>摄影师</option>
												<?php } ?>
												<?php if($fbyp['type'] == '摄像师'){ ?>
												<option selected="selected">摄像师</option>
												<?php }else{?>
												<option>摄像师</option>
												<?php } ?>
												<?php if($fbyp['type'] == '化妆师'){ ?>
												<option selected="selected">化妆师</option>
												<?php }else{?>
												<option>化妆师</option>
												<?php } ?>
												<?php if($fbyp['type'] == '策划师'){ ?>
												<option selected="selected">策划师</option>
												<?php }else{?>
												<option>策划师</option>
												<?php } ?>
												<?php if($fbyp['type'] == '其他'){ ?>
												<option selected="selected">其他</option>
												<input class="w209" type="hidden" name="zymc" placeholder="填写职业名称" />
												<?php }else{?>
												<option>其他</option>
												<?php } ?>
											</select>
											<span class="types"></span>
										</div>
										<div class="cf"></div>
								</li>
								<script type="text/javascript">
									function gradeChange(){
										 var checkText=$("#xtype").find("option:selected").text();
										    if(checkText == '其他'){
										    	$('.types').html('<input class="w209" type="text" name="zymc" placeholder="填写职业名称" />');
										    }else{
										    	$('.types').html('<input class="w209" type="hidden" name="zymc" placeholder="填写职业名称" />');
										    }
									}
								</script>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">期望薪资</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w200s" id="uprice" style="width:110px;" name="price">
												<option>-请选择-</option>
												<?php if($fbyp['price'] == '不限'){ ?>
												<option selected="selected">不限</option>
												<?php }else{?>
												<option>不限</option>
												<?php } ?>
												<?php if($fbyp['price'] == '2000-4000'){ ?>
												<option selected="selected">2000-4000</option>
												<?php }else{?>
												<option>2000-4000</option>
												<?php } ?>
												<?php if($fbyp['price'] == '4000-6000'){ ?>
												<option selected="selected">4000-6000</option>
												<?php }else{?>
												<option>4000-6000</option>
												<?php } ?>
												<?php if($fbyp['price'] == '6000-8000'){ ?>
												<option selected="selected">6000-8000</option>
												<?php }else{?>
												<option>6000-8000</option>
												<?php } ?>
												<?php if($fbyp['price'] == '> 8000'){ ?>
												<option selected="selected">> 8000</option>
												<?php }else{?>
												<option>> 8000</option>
												<?php } ?>
											</select> k/月
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">工作经验</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input name="worktime"  id="uworktime" name="worktime" class="w200t" maxlength="2" style="width:50px;" type="number"  value="<?php echo ($fbyp['worktimes']); ?>"/> 年
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">联系电话</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="tel" id="utel" class="w200t" value="<?php echo ($fbyp['tels']); ?>" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mqq">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">Q&nbsp;Q</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="qq" id="uqq" class="w200t" value="<?php echo ($fbyp['qqs']); ?>" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li style="height: auto!important;">
									<div class="mzwjs" style="height: auto!important;">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">自我介绍</p>
											<p class="cf"></p>
										</div>
										<div class="litr" style="height: auto!important;"><textarea class="w340" id="ucontent" name="content" type="text"><?php echo ($fbyp['content']); ?> </textarea></div>
										<div class="cf"></div>
									</div>
								</li>
								<!--<li>
									<div class="mhllx"></div>
								</li>-->
							</ul>
							</div>
						</div>

						<div class="txfg1" id="ta">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<p><strong>工作经历/</strong><samp style="color: #ff5c5d;font-size: 12px;">最多上传3个工作经历</samp></p>
								<span class="hfx3"  id="hfx3-1"><img src="/matouPCS/Public/Home/img/tj-sp.png" />新增经历</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCS/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"新增经历"完善工作经历</span></div>
							
								<ul class="addmation1" id="xxs">
									<?php $wnum = 0; ?>
									<?php if(is_array($fbyp_jl)): foreach($fbyp_jl as $key=>$fbyp_jls): ?><li id="dew<?php echo ($fbyp_jls["id"]); ?>" class="dc<?php echo ($dnum); ?>"><div class="delete-gzjl"  onclick="dework(<?php echo ($fbyp_jls["id"]); ?>)"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div><ul class="tyint"><li><div class="mhdsj"><div class="litl"><p class="litx">*</p><p class="litc">活动时间</p><p class="cf"></p></div><div class="litr"><input readonly="readonly" name="workdate1<?php echo ($wnum); ?>" class="w150t" type="text" id="dt<?php echo ($wnum); ?>"  value="<?php $tt = explode(',',$fbyp_jls['worktime']); echo $tt[0]; ?>" />&nbsp;到&nbsp;<input id="da<?php echo ($wnum); ?>" name="workdate2<?php echo ($wnum); ?>"readonly="readonly" class="w150t" type="text"   value="<?php  echo $tt[1]; ?>" /><input type="hidden" name="wid<?php echo ($wnum); ?>" value="<?php echo ($fbyp_jls["id"]); ?>"><div class="liti1"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div><div class="liti2"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div></div><div  id="dd<?php echo ($wnum); ?>" style="left: 14px !important; top:42px !important"></div><div  id="db<?php echo ($wnum); ?>" style="left: 182px !important; top:42px !important"></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">所在公司</p><p class="cf"></p></div><div class="litr"><input name="workname<?php echo ($wnum); ?>" class="w200t" type="text" value="<?php echo $fbyp_jls['workname'] ?>"/></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">担任职位</p><p class="cf"></p></div><div class="litr"><input name="ty<?php echo ($wnum); ?>" class="w200t" value="<?php echo $fbyp_jls['typew'] ?>" type="text" /></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作描述</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="miao<?php echo ($wnum); ?>" type="text"><?php echo $fbyp_jls['contents'] ?></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>
										<?php $wnum++; endforeach; endif; ?>
								</ul>
							
						</div>
						<div class="s-c-2f">
							<div id="tb" class="s-c-2f-1f">
								<p>照片作品/</p><span>最多上传9张照片</span>
								<span class="right" onclick="userYp()" >									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-2f-2f-f" id="zp">
								<div style="font-size: 14px; color: #999999; height: 30px; z-index: -1; line-height: 30px; width: 100%; text-align: center; position: absolute; top: 0;" class="dianji">
									<div class="gth">
										<img src="/matouPCS/Public/Home/img/gth.png">
									</div>
									点击右上角"添加视频"完善作品
									<div class="clearfloat"></div>
								</div>
								<ul id="lists"> 
									<?php  for ($i=0; $i < count($fbyp_jl_im); $i++) {?>
									<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="ypimg<?php echo $i+1;?>" type="file" id="photo1"><p class="addimg"></p><div class="click1"><img src="<?php echo '/matouPCS/Uploads/'.substr($fbyp_jl_im[$i],1); ?>"></div></div></div></li>
									<?php } ?>
								</ul>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
										<span class="text_span">
											
										</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="">
										<img class="showImg" src="" />
									</div>
								</div>
							</div>
						</div>
						<div class="s-c-3f">
							<div id="tc" class="s-c-2f-1f">
								<p>视频作品/</p><span>最多上传3个视频文件</span>
								<!--<span class="right">
									添加视频
									<div class="tjsp">
										<img src="img/tj-sp.png" />
									</div>
								</span>-->
							</div>
							<div class="s-c-3f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<div class="picture1">
												<img id="pics1" src="<?php echo '/matouPCS/Uploads/'.$fbyp_jl_v[0]; ?>">
												<input id="uploads1" name="file1" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title1" id="title1" value="<?php echo $fbyp_jl_t[0] ?>" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video1"  id="video1" value="<?php echo $fbyp_jl_l[0] ?>" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2" onclick="pcs1()">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="picture2">
												<img id="pics2" src="<?php echo '/matouPCS/Uploads/'.$fbyp_jl_v[1]; ?>">
												<input id="uploads2" name="file2" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title2" id="title2" value="<?php echo $fbyp_jl_t[1] ?>" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video2" id="video2" value="<?php echo $fbyp_jl_l[1] ?>" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2" onclick="pcs2()">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li style="margin: 0;">
										<div class="na2">
											<div class="picture3">
												<img id="pics3" src="<?php echo '/matouPCS/Uploads/'.$fbyp_jl_v[2]; ?>">
												<input id="uploads3" name="file3" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title3" id="title3" value="<?php echo $fbyp_jl_t[2] ?>" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video3" id="video3" value="<?php echo $fbyp_jl_l[2] ?>" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2" onclick="pcs3()">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<div class="clearfloat"></div>
								</ul>
							</div>
						</div>

						<!--<ul class="tyint">
							<li>
								<div class="mhdsj">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">活动时间</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<input class="w150t" type="text" name="" id="" value="" />&nbsp;到&nbsp;<input class="w150t" type="text" name="" id="" value="" />
										<div class="liti1"><img src="img/jxrq.png" /></div>
										<div class="liti2"><img src="img/jxrq.png" /></div>
									</div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="memail">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">所在公司</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w200t" type="text" /></div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="memail">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">担任职位</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w200t" type="text" /></div>
									<div class="cf"></div>
								</div>
							</li>

							<li style="height: auto!important;">
								<div class="mzwjs" style="height: auto!important;">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">活动详情</p>
										<p class="cf"></p>
									</div>
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li id="mhllx"></li>
						</ul>-->
						<div class="clearfloat "></div>

						</form>
						<div class="s-tf-btn" onclick="submit()">确认发布</div>
					</div>
					
					<div class="clearfloat "></div>
		</section>
		<br>
		<br>
		<br>
		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/3rank-footer.css" />
	</head>
	<body>
		<footer>
			<div class="f-content-main">
				<div class="f-main-c">
					<div class="f-c-1f">
						
						<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<p><a href="http://www.miitbeian.gov.cn">豫ICP备16015506号</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/txyp.js"></script>
	<script src="/matouPCS/Public/Home/js/upimg.js"></script>
	<script src="/matouPCS/Public/Home/js/sj.js"></script>
	<script type="text/javascript ">
		// userYp();
		$(document).ready(function() {
			$(".con ").eq(0).show();
			$(".bdsz ul li ").click(function() {
				var num = $(".bdsz ul li ").index(this);
				$(".con ").hide();
				$(".con ").eq(num).show().slblings().hide();
			})
		});
		//----------------------------remove tab切换样式--------------------------
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		$(function() {

				$("#tt ").bigAutocomplete({
					width: 440,
					data: [{
						title: "中国好声音 ",
						result: {
							ff: "qq "
						}
					}, {
						title: "中国移动网上营业厅 "
					}, {
						title: "中国银行 "
					}, {
						title: "中国移动 "
					}, {
						title: "中国好声音第三期 "
					}, {
						title: "中国好声音 第一期 "
					}, {
						title: "中国电信网上营业厅 "
					}, {
						title: "中国工商银行 "
					}, {
						title: "中国好声音第二期 "
					}, {
						title: "中国地图 "
					}],

				});

			})
			//		下拉菜单
		$('#select-yfb').hover(function() {
			$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(180deg)');
			$('.select-yfb').stop().animate({
				height: '150px'
			}, 300);
		}, function() {
			$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(0deg)');
			$('.select-yfb').stop().animate({
				height: '0px'
			}, 300);
		});
		$('#select-xx').hover(function() {
			$('.select-xx').stop().animate({
				height: '75px'
			}, 300);
		}, function() {
			$('.select-xx').stop().animate({
				height: '0px'
			}, 300);
		});
		//		新增
		$(function() {
			var ss = $('.dc<?php echo ($dnum); ?>');
			var s = parseInt(ss.selector.substr(3));
			var xx = $('#dt<?php echo ($wnum); ?>');
			var i = parseInt(xx.selector.substr(3));
			// var i = parseInt(ce.selector.substr(3));
			// var as = parseInt(document.getElementById("xxs").getElementsByTagName("li").length);
			$("#hfx3-1").click(function() {
				s++;
				$(".txfg1-c2-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				if(s > 3){
					alert('滚犊子(最多3条)');
				}else{
				$(".addmation1").append('<li><div class="delete-gzjl"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div><ul class="tyint"><li><div class="mhdsj"><div class="litl"><p class="litx">*</p><p class="litc">活动时间</p><p class="cf"></p></div><div class="litr"><input readonly="readonly" class="w150t" type="text"  id="dt'+i+'" name="workdate1'+i+'" value="" />&nbsp;到&nbsp;<input readonly="readonly" class="w150t" type="text" name="workdate2'+i+'" id="da'+i+'" value="" /><div class="liti1"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div><div class="liti2"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div></div><div id="dd'+i+'" style="left: 14px !important; top:42px !important"></div><div id="db'+i+'" style="left: 182px !important; top:42px !important"></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">所在公司</p><p class="cf"></p></div><div class="litr"><input class="w200t" name="workname'+i+'" type="text" /></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">担任职位</p><p class="cf"></p></div><div class="litr"><input class="w200t" name="ty'+i+'" type="text" /></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作描述</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="miao'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
					$('#dt'+i).val();
					$(".delete-gzjl").on("click", function() {
						$(this).parent().remove();
						if($(".s-main-l").css("height") == "524px") {
							//							alert("605")
							$(".txfg1-c2-1").show();
							$(".txfg1").css("border-bottom", "1px solid #999");
						}
						if($('.addmation1').has('li').length > 0) {
							$('.txfg1-c2-1').css('display', 'none');
						} else {
							$('.txfg1-c2-1').css('display', 'block');
						}
					});
				}
					//-------------------------------日期----------------------------------------
		$('#dd'+i).calendar({
			trigger: '#dt'+i,
			zIndex: 999,
			format: 'yyyy-mm-dd',
			onSelected: function(view, date, data) {
				console.log('event: onSelected')
			},
			onClose: function(view, date, data) {
				console.log('event: onClose')
				console.log('view:' + view)
				console.log('date:' + date)
				console.log('data:' + (data || 'None'));
			}
		});
		$('#db'+i).calendar({
			trigger: '#da'+i,
			zIndex: 999,
			format: 'yyyy-mm-dd',
			onSelected: function(view, date, data) {
				console.log('event: onSelected')
			},
			onClose: function(view, date, data) {
				console.log('event: onClose')
				console.log('view:' + view)
				console.log('date:' + date)
				console.log('data:' + (data || 'None'));
			}
		});
		i++;
			});

		});
		
		//图片上传预览    IE是用了滤镜。
		$(function() {
			$("#pics1").click(function() {
				$("#uploads1").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#uploads1").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pics1").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
			var src = $('.picture1').find("img").attr("src");
			if(src != '') {
				$('.na2bg').css('display', 'block');
			}
		});

		//建立一個可存取到該file的url
		function getObjectURL(file) {
			var url = null;
			if(window.createObjectURL != undefined) { // basic
				url = window.createObjectURL(file);
			} else if(window.URL != undefined) { // mozilla(firefox)
				url = window.URL.createObjectURL(file);
			} else if(window.webkitURL != undefined) { // webkit or chrome
				url = window.webkitURL.createObjectURL(file);
			}
			return url;
		}
		$(function() {
			$("#pics2").click(function() {
				$("#uploads2").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#uploads2").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pics2").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
		});
		$(function() {
			$("#pics3").click(function() {
				$("#uploads3").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#uploads3").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pics3").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
		});

		$(function() {
			var objUrl;
			var img_html;
			$("#myFile").change(function() {
				var img_div = $(".img_div");
				var filepath = $("input[name='myFile']").val();
				for(var i = 0; i < this.files.length; i++) {
					objUrl = getObjectURL(this.files[i]);
					var extStart = filepath.lastIndexOf(".");
					var ext = filepath.substring(extStart, filepath.length).toUpperCase();

					if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
						$(".shade").fadeIn(500);
						$(".text_span").text("图片限于bmp,png,gif,jpeg,jpg格式");
						this.value = "";
						$(".img_div").html("");
						return false;
					} else {
						img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)' style='height: 100%; width: 100%;' /><div class='na1bg' onclick='javascript:removeImg(this)'><div class='delete-1'><img src='img/delete-1.png' /></div>删除</div></div>";
						img_div.append(img_html);
					}
				}
				var file_size = 0;
				var all_size = 0;
				for(j = 0; j < this.files.length; j++) {
					file_size = this.files[j].size;
					all_size = all_size + this.files[j].size;
					var size = all_size / 1024;
					if(size > 500) {
						$(".shade").fadeIn(500);
						$(".text_span").text("上传的图片大小不能超过100k！");
						this.value = "";
						$(".img_div").html("");
						return false;
					}
				}
				return true;
			});

			function getObjectURL(file) {
				var url = null;
				if(window.createObjectURL != undefined) { // basic
					url = window.createObjectURL(file);
				} else if(window.URL != undefined) { // mozilla(firefox)
					url = window.URL.createObjectURL(file);
				} else if(window.webkitURL != undefined) { // webkit or chrome
					url = window.webkitURL.createObjectURL(file);
				}
				//console.log(url);
				return url;
			}
		});

		function removeImg(r) {
			$(r).parent().remove();
		}

		function lookBigImg(b) {
			$(".shadeImg").fadeIn(500);
			$(".showImg").attr("src", $(b).attr("src"))
		}

		function closeShade() {
			$(".shade").fadeOut(500);
		}

		function closeShadeImg() {
			$(".shadeImg").fadeOut(500);
		}
		
		//		H-S-CONTENT滑动跳转
		$("#tab-jbxx").click(function() {
			$("html,body").animate({
				scrollTop: $("#jbxx").offset().top
			}, 600);
			return false;
		});
		$("#tap").click(function() {
			//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
			$("html,body").animate({
				scrollTop: $("#ta").offset().top
			}, 600);
			return false;
		});
		$("#tab-zpzp").click(function() {
			$("html,body").animate({
				scrollTop: $("#tb").offset().top
			}, 600);
			return false;
		});
		$("#tab-spzp").click(function() {
			$("html,body").animate({
				scrollTop: $("#tc").offset().top
			}, 600);
			return false;
		});
		//提交发布
		function submit(){
			var myform = document.myform;
			myform.action = "?s=/Home/User/userYp";
			myform.method = "post";
			myform.submit();
		}
		//加载 照片信息
		//去除工作经历小广告
		if($(".addmation1").html() != ''){
			$(".txfg1-c2-1").hide();
		}
		if($(".s-c-2f-2f-f ul").html() != ''){
			$(".dianji").hide();
		}
		//删除工作经历的方法
		function dework(id){
			if(window.confirm('确定删除？')){
				$.ajax({
					url:"?s=/Home/User/user_yp_jl/id/"+id,
					type:"get",
					success:function(data){
						alert(data);
						$('#dew'+id).remove();
						location.reload();
					}
				});
				
			}
		}
		//进去就加载这个方法
		userYp();
if(document.getElementById('pics1').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pics1').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pics2').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pics2').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pics3').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pics3').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
$('#dd0').calendar({
	trigger: '#dt0',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#db0').calendar({
	trigger: '#da0',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#dd1').calendar({
	trigger: '#dt1',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#db1').calendar({
	trigger: '#da1',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#dd2').calendar({
	trigger: '#dt2',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#db2').calendar({
	trigger: '#da2',
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
	</script>

</html>