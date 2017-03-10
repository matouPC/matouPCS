<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/rzbdsz-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
										<a id="login-alert" href="#">
											<div class="dltx">
												<img src="/matouPCS/Public/Home/img/tx.png" />
											</div>
											<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
										</a>
								<?php }else{ ?>
								<a id="login-alert" href="#">请注册\登录</a>
								<?php } ?>
									</li>
								
								<li id="select-xx" style="width: 45px;">
								<a href="#">消息</a>
								<div class="str"></div>
								<div class="select-xx">
									<ul>
										<li>	
											<a href="?s=/Home/User/xqxx">需求消息</a>
										</li>
										<li>
											<a href="">部队消息</a>
										</li>
										<li>
											<a href="">商铺消息</a>
										</li>
									</ul>
								</div>
							</li>
							<li style="width: 58px;">
								<?php if(empty($_SESSION['username'])){ ?>
									<a href="javascript:void(0)" onclick="alert('请先登录')">收藏夹</a>
								<?php }else{ ?>
									<a href="?s=/Home/User/scj">收藏夹</a>
								<?php } ?>
								<div class="str"></div>
							</li>
							<?php if(!empty($_SESSION['id'])){ ?>
								<li id="select-yfb" style="width: 70px;">
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
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
									<a href="javascript:alert('您还没有登录！')">已发布</a>
								</li>
								<?php } ?>
							<li style="width: 68px;">
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
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-QQ.png">
											</a>
										</div>
										<div class="alert-wc">
											<a href="">
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
				//  alert(tu);

				    $.ajax({  
				        type: "POST",  
				         url:"/matouPCS/index.php/Home/Index/usave1",
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
	</body>
</html>

					<div class="h-c-2f">
						<img src="/matouPCS/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
					<!--<div class="h-c-3f">
						<img src="img/banner.png" />
					</div>-->
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-l">
					<!--<div class="s-c-1f">
						<a href="#">所有分类</a>>
						<a href="#">找到相关100.5万相关结果</a>
					</div>-->
					<div class="con">
						<div class="s-c-2f">
							<div class="s-c-2f-1f">基本信息</div>
							<div class="s-c-2f-2f">
								<ul class="ul-l">
									<li><span class="red">* </span>营业执照名称</li>
									<li><span class="red">* </span>法定代表人</li>
									<li><span class="red">* </span>部队名称</li>
									<li><span class="red">* </span>详细地址</li>
									<li><span class="red">* </span>联系电话</li>
									<li><span class="red">* </span>QQ</li>
									<li style="height: 138px;"><span class="red">* </span>部队类型</li>
									<li style="height: 110px;"><span class="red">* </span>部队简介</li>
									<li><span class="red">* </span>官网链接</li>
								</ul>
								<ul class="ul-r">
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" style="width: 58px; float: left;" class="white-in" placeholder="请选择" />
										<input type="text" class="white-in" style="width: 266px; float: right; margin-right: 2px;" placeholder="请选择详细地址" />
									</li>
									<li>
										<input type="text" class="white-in" style="width: 200px;" placeholder="请输入联系电话" />
									</li>
									<li>
										<input type="text" class="white-in" style="width: 200px;" placeholder="请输入QQ" />
									</li>
									<li class="parents" style="height: 138px;">
										<div class="left">
											<a class="selected" href="javascript://">婚庆公司</a>
											<a href="javascript://">影楼</a>
											<a href="javascript://">工作室</a>
											<a href="javascript://">表演团队</a>
										</div>
										<div class="right">
											<p>有门店，专注为新人举办婚礼</p>
											<p>有门店，业务包括婚纱摄影</p>
											<p>无门店，主持人团队、婚礼策划团队、婚礼摄影/摄像团队等</p>
											<p>专注歌舞、乐器演奏、民间艺术等表演的团队</p>
										</div>
										<div class="clearfloat"></div>
									</li>
									<li style="height: 110px;">
										<textarea placeholder="请输入部队简介..."></textarea>
									</li>
									<li>
										<input type="text" class="white-in" style="width: 356px;" placeholder="请输入链接地址" />
									</li>
								</ul>
								<ul class="clearfloat"></ul>
							</div>
							<div class="bjtx">
								<div class="border"></div>
								<div class="tx-button">
									<button>编辑头像</button>
								</div>
							</div>
							<div class="clearfloat"></div>
							<button id="jbxx" class="button-bc">下一步</button>
						</div>
					</div>
					<div class="con" style="display: none;">
						<div class="s-c-2f">
							<div class="s-c-2f-1f">
								<p>照片作品/</p><span>最多上传12张照片</span>
								<span class="right">									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-2f-2f-f">
								<ul>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
								</ul>

							</div>
						</div>
						<div class="s-c-3f">
							<div class="s-c-2f-1f">
								<p>视频作品/</p><span>最多上传3个视频文件</span>
								<span class="right">
									添加视频
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-3f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="na2bg">
												<a href="javascript://">编辑视频封面</a>
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="tjtp">
												<img src="/matouPCS/Public/Home/img/tjtp.png" />
											</div>
											<p style="text-align: center; color: #999999;">
												上传视频封面
											</p>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li style="margin: 0;">
										<div class="na2">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="na2bg">
												<a href="javascript://">编辑视频封面</a>
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="clearfloat"></div>
						<div style="width: 226px; height: 30px; margin: auto; margin-bottom: 20px;">
							<button class="button-tg">跳过</button>
							<button class="button-wc">完成</button>
						</div>
					</div>
					<!--<div class="s-c-3f">
						<div class="f3-c-1">aa</div>
						<br>
						<div class="f3-c-1">aa</div>
						<br>
						<div class="f3-c-1">aa</div>
					
					</div>-->
				</div>
				<div class="s-main-r">
						<p style="font-size: 22px;">WEDDING PIER</p>
						<p style="font-size: 22px;">喜事码头</p>
						<p style="font-size: 14px; padding:10px 0;">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
						<div class="bdsz">
							<div class="bdsz-bt">
								部队认证
							</div>
							<ul>
								<li class="selected-con">
									<a href="javascript://">
										基本信息
										<img class="list-a" src="/matouPCS/Public/Home/img/list-2-gray.png" style="position: absolute; top: 76px; right: 70px;" />
									</a>
								</li>
								<li>
									<a href="javascript://">
										添加作品
										<img class="list-b" src="/matouPCS/Public/Home/img/list-2-gray.png" style="position: absolute; top: 116px; right: 70px;" />
									</a>
								</li>
							</ul>
						</div>
					</div>
			</div>
			<div class="clearfloat"></div>
		</section>
		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/indexstore.css" />
	</head>
	<body>
		<footer>
			<div class="f-content-main">
				<div class="ttm">
					<div class="s-c-7f">
						<div class="f7-o1">
							<ul>
								<li class="f4-o1-1">
									<div>
										<h5>喜事码头客服热线</h5>
										<p>工作时间:每天9:00-23:00</p>
										<p>188-8888-888</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h5>关注喜事码头微信公众号</h5>
										<p>
											<img src="img/erweima_top.png" />
										</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h5>关于我们</h5>
										<p>
											<a href="#">关于喜事码头</a>
										</p>
										<p>
											<a href="#">加入我们</a>
										</p>
										<p>
											<a href="#">网站地图</a>
										</p>
										<p>
											<a href="#">合伙人招募</a>
										</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h5>联系我们</h5>
										<p>官方邮箱:xishimatou@163.com</p>
										<p>通讯地址:河南省郑州市863软件园</p>
									</div>
								</li>
								<li class="clearf"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="f-main-c">
					<div class="f-c-1f">
						<h6>友情链接：</h6>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<a href="#">友情链接</a>
						<p>© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".bdsz ul li").click(function() {
				var num = $(".bdsz ul li").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			})
		});
		//----------------------------remove tab切换样式--------------------------
		$('.parents .left a').click(function() {
			$(this).parents('.parents').children('.left').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		//----------------------------保存对勾变色--------------------------
		$('#jbxx').click(function(){
			$('.list-a').attr('src','/matouPCS/Public/Home/img/list-2-red.png');
		});
		$('#zpxx').click(function(){
			$('.list-b').attr('src','/matouPCS/Public/Home/img/list-2-red.png');
		});
		
		$(function() {

				$("#tt").bigAutocomplete({
					width: 440,
					data: [{
						title: "中国好声音",
						result: {
							ff: "qq"
						}
					}, {
						title: "中国移动网上营业厅"
					}, {
						title: "中国银行"
					}, {
						title: "中国移动"
					}, {
						title: "中国好声音第三期"
					}, {
						title: "中国好声音 第一期"
					}, {
						title: "中国电信网上营业厅"
					}, {
						title: "中国工商银行"
					}, {
						title: "中国好声音第二期"
					}, {
						title: "中国地图"
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
	</script>

</html>