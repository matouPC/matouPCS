<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>招聘填写</title>
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/txzp-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/zyzn_1.css" />
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
	<script src="/matouPCs/Public/Home/js/jquery-1.8.3.min.js"></script>
	<body>
		<header>
			<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/sinaFaceAndEffec.css" />
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/header.css" />
	</head>

	<body>
		<div class="show-bg"></div>
		<header>
			<div class="h-c-1f">
				<div class="h-c-1f">
					<div class="h-f1-lzy">
						<div class="home">
							<img src="/matouPCs/Public/Home/img/home.png" />
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
												<img src="/matouPCs/Public/Home/img/tx.png" />
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
									<img src="/matouPCs/Public/Home/img/news.png" />
								</div>
								<div class="str"></div>
								<div class="select-xx">
									<ul>
										<li>
												<a href="?s=/Home/User/xqxx">需求消息
											<div class="newss">
												<img src="/matouPCs/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCs/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCs/Public/Home/img/news.png" />
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
												<img src="/matouPCs/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCs/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCs/Public/Home/img/news.png" />
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
								<a rel="nofollow" href="#">&nbsp;&nbsp;已发布<img class="img" src="/matouPCs/Public/Home/img/arrow_bottom.png"></a>
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
									<a href="javascript:void(0)" onclick="alert('请先登录')">已发布<img class="img" src="/matouPCs/Public/Home/img/arrow_bottom.png"></a>
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
								<a href="#">商铺中心<img class="img" src="/matouPCs/Public/Home/img/arrow_bottom.png"></a>
								<div class="str"></div>
								<div class="select-sp">
									<ul>
										<li>
							<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">商铺主页</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">商铺主页</a>
							   <?php }else{ ?>	
							   <a href="#">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
									<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($sp['uid']); ?>">管理商铺</a>
							   <?php }else{ ?>	
							   <a href="#">管理商铺</a>
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
						<img src="/matouPCs/Public/Home/img/alert-close.png">
					</div>
				</div>
				<div class="alert-2f">
					<div class="alert-logo">
						<img src="/matouPCs/Public/Home/img/alert-logo.png">
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
											<img src="/matouPCs/Public/Home/img/login-uesr.png">
										</div>
										<input id="login-userName" type="text" placeholder="使用用户名/手机号码">
									</div>
									<div class="login-userName">
										<p class="none">*用户名/手机号码输入有误，请重新输入</p>
									</div>
									<div class="content-2f">
										<div class="login-pw">
											<img src="/matouPCs/Public/Home/img/login-pw.png">
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
												<img src="/matouPCs/Public/Home/img/alert-QQ.png">
											</a>
										</div>
										<div class="alert-wc">
											 <a href="javascript:void(0)" onclick="wxLogin()"> <!--微信登录 -->
												<img src="/matouPCs/Public/Home/img/alert-wc.png">
											</a>
										</div>
										<div class="alert-xl">
											<a href="">
												<img src="/matouPCs/Public/Home/img/alert-xl.png">
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
											<img src="/matouPCs/Public/Home/img/true.png">
										</div>
										<div class="alert-false">
											<img src="/matouPCs/Public/Home/img/false.png">
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
				<img src="/matouPCs/Public/Home/img/swtitle.png">
				<div class="rhideb">
					<img src="/matouPCs/Public/Home/img/hide.png">
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
							<img src="/matouPCs/Public/Home/img/addp.png" />
						</a>
					</div>
				
					<div class="adds">
						<img src="/matouPCs/Public/Home/img/adds.png" />
					</div>
				
					<button class="tjbtnb" id="tjbtn" onclick="tj()">发布</button>
				</div>
			</div>
		</div>
	<script>
			function tj(){
				   var tu = getCookie("tu");
				    var content= $("#content").val();  
		    $.ajax({  
				        type: "POST",  
				         url:"/matouPCS/index.php/Home/User/usave1",
				         data: {content:content,type:types,tu:tu},  
				        success: function(data){ 
				
				        		 window.location.reload(true);//重新加载当前文挡
				  
	                	
				      
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
                    <li id="local_upload"><img src="/matouPCs/Public/Home/img/local_upload.png" id="btn2"/></li>
                </ul>
                <div class="arrow_layer">
                    <span class="arrow_top_area"><i class="arrow_top_bg"></i><em class="arrow_top"></em></span>
                </div>
            </div>
        </div>
    
		<!--上传图片结束-->
		<script src="/matouPCs/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/matouPCs/Public/Home/js/jquery.leoweather.min.js"></script>
		<script src="/matouPCs/Public/Home/js/City_data.js"></script>
		<script src="/matouPCs/Public/Home/js/areadata.js"></script>
		<script src="/matouPCs/Public/Home/js/sinaFaceAndEffec.js"></script>
		<script src="/matouPCs/Public/Home/plupload/plupload.full.min.js"></script>
		<script src="/matouPCs/Public/Home/js/header-index.js"></script>
		<script src="/matouPCs/Public/Home/js/index-alert-login.js"></script>
		<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://www.xishimatou.com;" charset="utf-8"></script>
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
	</body>
</html>
					<div class="h-c-2f">
						<img src="/matouPCs/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="/matouPCs/Public/Home/img/ss-t.png" />
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
							填写招聘
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://" id="tap">
									招聘职位
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<p><strong>基本信息</strong></p>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">工作地点</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input type="text" class="w95s" readonly="readonly" name="address" id="address" value="" data-value="" onclick="appendCity(this,'danxuan')" placeholder="请选择">
											<input id="xsdz" disabled="disabled"  class="w209" type="text" placeholder="填写详细地址" />
										</div>
										<div class="cf"></div>
								</li>
								<li>
									<div class="mphone">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">联系电话</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="tel" type="text"  maxlength="11" placeholder="请输入你的电话" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mqq">
										<div class="litl">
											<p class="litx"></p>
											<p class="litc">Q&nbsp;Q</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="qq" maxlength="10" type="text" placeholder="请输入您的QQ" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litc">邮&nbsp;箱</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="email" type="email" placeholder="请输入您的邮箱" /></div>
										<div class="cf"></div>
									</div>
								</li>
							</ul>
							</div>
						</div>

						<div class="txfg1" id="ta">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<p><strong>招聘职位/</strong><samp style="color: #ff5c5d;font-size: 12px;">最多添加3个职位</samp></p>
								<span class="hfx3" id="hfx3-1"><img src="/matouPCs/Public/Home/img/tj-sp.png" />添加职位</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCs/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"添加职位"完善招聘职位信息</span></div>
							<ul>
								<form name="myform" class="addmation">
									<input type="hidden" name="address" value="">
									<input type="hidden" name="tel" value="">
									<input type="hidden" name="qq" value="">
									<input type="hidden" name="email" value="">
									<input type="hidden" name="add" value="">
								</form>
								<script type="text/javascript">
									

								</script>
							</ul>
						</div>
						<!--<ul class="tyint">
							<li>
								<div class="mprofession">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">招聘职位</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w95s">
											<option></option>
											<option>灯光</option>
										</select> <input class="w209" type="text" placeholder="填写职业名称" />
										<div class="lidel" id="lidel"><img src="img/delete-2.png" /></div>
									</div>
									<div class="cf"></div>
							</li>
							<li>
								<div class="msex">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">性&nbsp;别</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<div class="w36"><input class="" type="radio" />男</div>
										<div class="w36"><input class="" type="radio" />女</div>
										<div class="w41"><input class="" type="radio" />不限</div>
									</div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="mage">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">年&nbsp;龄</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w75s">
											<option>1</option>
										</select>&nbsp;岁 </div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="mprofession">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">工作经验</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w95s">
											<option></option>
											<option>灯光</option>
										</select>&nbsp;年
									</div>
									<div class="cf"></div>
							</li>
							<li>
								<div class="mxz">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">薪&nbsp;资</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w75t" type="text" />-<input class="w75t" type="text" />&nbsp;k/月</div>
									<div class="cf"></div>
								</div>
							</li>
							<li style="height: auto!important;">
								<div class="mzwjs" style="height: auto!important;">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">工作内容</p>
										<p class="cf"></p>
									</div>
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li style="height: auto!important;">
								<div class="mzwjs" style="height: auto!important;">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">岗位要求</p>
										<p class="cf"></p>
									</div>
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li id="mhllx"></li>
						</ul>-->
						<div class="clearfloat "></div>

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
		<link rel="stylesheet" href="/matouPCs/Public/Home/css/3rank-footer.css" />
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
	<script src="/matouPCs/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCs/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCs/Public/Home/js/City_data.js"></script>
	<script src="/matouPCs/Public/Home/js/areadata.js"></script>
	<script src="/matouPCs/Public/Home/js/zp.js"></script>
	<script type="text/javascript ">
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
		var i = 0;
		$(function() {
			$("#hfx3-1").click(function() {
				i += 1;
				$(".txfg1-c2-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				if(i <= 3){
					$(".addmation").append('<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">招聘职位</p><p class="cf"></p></div> <div class="litr"><select class="w95s"  name="type'+i+'" id="xtype'+i+'" style="width:105px;" onchange="gradeChange'+i+'()"><option>经理\\店长</option><option>营业员</option><option>数码师/设计</option><option>视频剪辑师</option><option>摄影师</option><option>摄像师</option><option>化妆师</option><option>策划师</option><option>其他</option></select><span class="types'+i+'"></span><div class="lidel" id="lidel"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class=""  name="sex'+i+'" value="1" checked = "checked" type="radio" />男</div><div class="w36"><input class="" name="sex'+i+'" value="2" type="radio" />女</div><div class="w41"><input class="" name="sex'+i+'" value="3" type="radio" />不限</div></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><select class="w75s" style="width:72px;" name="age'+i+'" ><option>不限</option><option>18-25</option><option>25-30</option><option>30-35</option><option>>35</option></select>&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">工作经验</p><p class="cf"></p></div><div class="litr"><select class="w95s" style="width:72px;" name="timework'+i+'"><option>不限</option><option>1-2</option><option>2-5</option><option>5-10</option><option>>10</option></select>&nbsp;年 </div><div class="cf"></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">薪&nbsp;资</p><p class="cf"></p></div><div class="litr"><input class="w75t" type="text" name="price1'+i+'" /> — <input class="w75t" name="price2'+i+'" type="text" />&nbsp;元/月</div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作内容</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="content'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">岗位要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="yaoqiu'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
						$(".lidel").on("click", function() {
							i-=1;
							$(this).parent().parent().parent().parent().parent().remove();
							if($(".s-main-l").css("height") == "388px") {
								//							alert("605")
								$(".txfg1-c2-1").show();
								$(".txfg1").css("border-bottom", "1px solid #999");
							}
						});
					}else{
						alert('滚犊子');
					}
			});
		});

		//		H-S-CONTENT滑动跳转
		$(function() {
			//				拿到点击按钮
			$("#tap").click(function() {
				//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
				$("html,body").animate({
					scrollTop: $("#ta").offset().top
				}, 600);
				return false;
			});
		});
		function submit(){
			var form = document.myform;
			if(document.getElementById('address').value == '' || document.getElementById('tel').value == ''  || document.getElementById('qq').value == '' || document.getElementById('email').value == ''){
				alert('滚犊子');
			}else{
			form.address.value = document.getElementById('address').value;
			form.ad.value = document.getElementById('ad').value;
			form.add.value = document.getElementById('xsdz').value;
			form.tel.value = document.getElementById('tel').value;
			form.qq.value = document.getElementById('qq').value;
			form.email.value = document.getElementById('email').value;
			form.action = "?s=/Home/Zpdt/txzpgo";
			form.method="post";
			form.submit();
			}
		}
		
	function gradeChange1(){
	    var checkText=$("#xtype1").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types1').html('<input class="w209" type="text" name="zymc1" placeholder="填写职业名称" />');
	    }else{
	    	$('.types1').html('<input class="w209" type="hidden" name="zymc1" placeholder="填写职业名称" />');
	    }
	}
	function gradeChange2(){
	    var checkText=$("#xtype2").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types2').html('<input class="w209" type="text" name="zymc2" placeholder="填写职业名称" />');
	    }else{
	    	$('.types2').html('<input class="w209" type="hidden" name="zymc2" placeholder="填写职业名称" />');
	    }
	}
	function gradeChange3(){
	    var checkText=$("#xtype3").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types3').html('<input class="w209" type="text" name="zymc3" placeholder="填写职业名称" />');
	    }else{
	    	$('.types3').html('<input class="w209" type="hidden" name="zymc3" placeholder="填写职业名称" />');
	    }
	}

	</script>

</html>