<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>部队中心</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/bdzx-3r-xy.css" />
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
			
			.icon_emot_photo_video {
				display: inline-block;
				margin: 0 4px 0 0
			}
			
			.icon_photo {
				background: url("img/sctpic.png") no-repeat scroll 0 0;
				width: 34px;
				height: 34px;
			}
			/*.emot_photo_video .item{vertical-align: top;display: inline-block;margin:0 10px 0 0; font-size: 18px;}*/
			
			.emot_photo_video .item i,
			.emot_photo_video .item span {
				vertical-align: middle;
				font-size: 18px;
			}
			/**********上传样式***********/
			
			.photo_upload_box_outside {
				position: absolute;
				left: 0;
				top: 0;
				z-index: 800;
				display: none
			}
			
			.photo_upload_box {
				padding: 16px 0 10px 16px;
				width: 268px;
				background-color: #FFF;
				border: 1px solid #ccc;
				border-radius: 3px;
				box-shadow: 0 4px 20px 1px rgba(0, 0, 0, 0.2);
				position: relative
			}
			
			.photo_upload_box h1 {
				font-size: 14px;
				font-weight: 700;
				color: #000;
				display: block;
				height: 21px;
				line-height: 21px;
			}
			
			.photo_upload_box .upload_num {
				margin: 10px 0;
				margin-left: 0 !important;
				width: 100%;
				font-size: 12px;
				height: 18px;
				line-height: 18px;
				color: #000000;
			}
			
			.photo_upload_box .arrow_layer .arrow_top_area {
				left: 20px
			}
			
			.ul_pics li {
				float: left;
				width: 80px;
				height: 80px;
				margin: 0 8px 8px 0;
				position: relative
			}
			
			.ul_pics li img {
				width: 100%;
				height: 100%
			}
			
			.ul_pics li:hover .picbg {
				background: #4A4A4A;
				opacity: 0.6;
				filter: alpha(opacity=60);
				display: block;
				height: 100%;
				position: absolute;
				top: 0;
				width: 100%;
			}
			
			.progress {
				position: relative;
				padding: 1px;
				border-radius: 3px;
				margin: 30px 0 0 0;
			}
			
			.bar {
				background-color: green;
				display: block;
				width: 0%;
				height: 20px;
				border-radius: 3px;
			}
			
			.percent {
				position: absolute;
				height: 20px;
				display: inline-block;
				top: 3px;
				left: 2%;
				color: #fff
			}
			
			.pic_close {
				background: url("img/ico_layer.png") no-repeat scroll -25px -25px;
				display: none;
				height: 20px;
				width: 20px;
				position: absolute;
				right: 0;
				top: 0;
				z-index: 990
			}
			
			.ul_pics li:hover .pic_close {
				display: block
			}
			
			.photo_upload_close {
				background: url("img/local_upload_close.png") no-repeat scroll 0 0;
				display: block;
				height: 11px;
				width: 11px;
				position: absolute;
				right: 7px;
				top: 8px
			}
			
			.arrow_top_area {
				right: 20px;
				top: -15px;
				display: block;
				overflow: hidden;
				position: absolute;
			}
			
			.arrow_top_area i,
			.arrow_top_area em {
				border-style: solid;
				border-width: 7px;
				display: inline-block;
				font-size: 0;
				height: 0;
				line-height: 0;
				overflow: hidden;
				vertical-align: top;
				width: 0;
				border-left-color: transparent;
				border-right-color: transparent;
				border-top-color: transparent;
			}
			
			.arrow_top_area em {
				margin: 1px 0 0 -14px;
			}
			
			.arrow_top_bg {
				border-color: #cccccc;
			}
			
			.arrow_top {
				border-color: #fff;
				color: #fff;
			}
			
			.clearfix:after {
				visibility: hidden;
				display: block;
				font-size: 0;
				content: " ";
				clear: both;
				height: 0
			}
			
			*:first-child+html .clearfix {
				zoom: 1
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
						<img src="/matouPCS/Public/Home/img/navbg3.png" />
						<div class="s-f2-r">
							<input type="text" placeholder="搜索全站" style="outline: none; color:white;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
					<!--<div class="h-c-3f">
						<img src="img/navbg4.png" />
						<a href="#"><div class="h-f3-c1">BTN</div></a>
						<div class="h-f3-c2"><a href="#">进入跳骚市场</a></div>
					</div>-->
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-r">
					<div class="s-c-1f">
						<div class="s-c-1f-1f">
							<div class="left">
								<a href="">
									<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<div class="right">
								<p class="yhmc">
									<a href="">用户<?php echo (substr($user["username"],0,5)); ?></a>
								</p>
								<p class="fssl">粉丝数量<?php echo ($user["fen"]); ?></p>
								<p>所在地：<?php echo ($user["addre"]); ?></p>
								<button>编辑</button>
							</div>
						</div>
						<div class="s-c-1f-2f">
							<div class="left"></div>
							<div class="right">
								关注量：<?php echo ($num); ?>
							</div>
						</div>
						<div class="s-c-1f-3f">
							<ul>
								<?php if(is_array($guanzhu)): foreach($guanzhu as $key=>$guanzhus): $fen = explode(',',$guanzhus['fid']); array_pop($fen); ?>
									<?php if(in_array($_SESSION['id'],$fen)){ ?>
									<li>
										<div class="left">
											<a href="">
												<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											</a>
										</div>
										<div class="right">
											<p class="tt">
												<span style="float: left;">
													<a href="">用户<?php echo (substr($guanzhus["username"],0,6)); ?></a>
												</span>
												<span style="float: right; text-align: right;color:#999999;"><?php echo ($guanzhus["addre"]); ?></span>
											</p>
											
										</div>
									</li>
									<?php } endforeach; endif; ?>
							</ul>
							<button onclick="window.location='bdzxgz-3r-xy.html'">查看更多</button>
						</div>

						<div class="s-c-1f-4f">
							<div class="left"></div>
							<div class="right">
								粉丝量：<?php echo ($gzs); ?>
							</div>
						</div>

						<div class="s-c-1f-3f">
							<ul>
								<?php if(is_array($bguanzhu)): foreach($bguanzhu as $key=>$bguanzhus): $gg = explode(',',$bguanzhus['fid']); array_pop($gg); foreach($bb as $bbs){ if(in_array($bbs['id'],$gg)){ ?>
											<li>
												<div class="left">
													<a href="">
														<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
													</a>
												</div>
												<div class="right">
													<p class="tt">
														<span style="float: left;">
															<a href="">用户<?php echo (substr($bbs['username'],0,6)); ?></a>
														</span>
														<span style="float: right; text-align: right; color:#999999;"><?php echo ($bbs["addre"]); ?></span>
													</p>
													
												</div>
										</li>
									<?php }} endforeach; endif; ?>
							</ul>
							<button onclick="window.location = 'bdzxfs-3r-xy.html'">查看更多</button>
						</div>
					</div>

				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<p class="title">
							结婚是个开心事，分享喜事，传递幸福！
						</p>
						<!-- <div class="s-c-2f-1f">
							<textarea></textarea>
						</div>
						<div class="s-c-2f-2f">
							<div class="left">
								<div class="emot_photo_video">
									<a class="item" id="btn" tabindex="1" style="cursor: pointer;"><i class="icon_emot_photo_video icon_photo"></i><span>上传图片</span></a>
								</div>
								<div class="photo_upload_box_outside" id="photo_upload_box_outside" tabindex="2000">
									<div class="photo_upload_box">
										<a class="photo_upload_close" href="javascript:void(0);" onclick="photo_upload_close()"></a>
										<h1>本地上传</h1>
										<p class="upload_num">共<span id="uploaded_length">0</span>张，还能上传<span id="upload_other">9</span>张</p>
										<ul id="ul_pics" class="ul_pics clearfix">
											<li id="local_upload"><img src="/matouPCS/Public/Home/img/local_upload.png" id="btn2" /></li>
										</ul>
										<div class="arrow_layer">
											<span class="arrow_top_area"><i class="arrow_top_bg"></i><em class="arrow_top"></em></span>
										</div>
									</div>
								</div>
							</div>
							<button class="right">
								发动态
							</button>
					</div> -->
						<div class="s-c-2f-3f">
							<div class="left">
								<p>全部类型</p>
								<img src="/matouPCS/Public/Home/img/xxjt.png" />
								<div class="select-lx">
									<ul id="typee">
										<li style="padding-top: 5px;">
											<a href="javascript://">全部部队</a>
										</li>
										<li>
											<a href="javascript://">个人部队</a>
										</li>
										<li>
											<a href="javascript://">认证部队</a>
										</li>
										<li>
											<a href="javascript://">商铺部队</a>
										</li>
									</ul>
								</div>
							</div>
								<script>
            var cNode =document.getElementById('typee').getElementsByTagName('li');
                    for( var i=0; i<cNode.length; i++){
                        cNode[i].index= i;
                        //用来计算点击次数
                        var type = 0;
                        cNode[i].onclick = function(){
                           type+=1; 
                            if(this.index == 0){
                                this.index = '全部部队';  
                            }else if(this.index == 1){
                                this.index = '个人部队';
                            }else if(this.index == 2){
                                this.index = '认证部队';
                            }else if(this.index == 3){
                                this.index = '商铺部队';
                            }
                         
                            types = this.index;
                            if(types == '全部部队'){
                            	types = '1';
                            }else if(types == '个人部队'){
                            	types = '2';
                            }else if(types == '认证部队'){
                            	types = '3';
                            }else if(types == '商铺部队'){
                            	types = '4';
                            }
                          if( paixu > 0){
                                
                                var where = types+paixus;
                            }else{
                                var where = types;
                            }
                        
                       

                 ajax(where);  
                            
                        }
                    }
                </script>
							<div id="paixu" class="right">
							<p>排序：</p>
						<a class="selected" href="javascript://">最新</a>
						<a href="javascript://">热门</a>
					</div>
					<script>
                    var cNode =document.getElementById('paixu').getElementsByTagName('a');
                            for( var i=0; i<cNode.length; i++){
                                cNode[i].index= i;
                                //用来计算点击次数
                                var paixu = 0;
                                cNode[i].onclick = function(){
                                   paixu+=1; 
                                    if(this.index == 0){
                                        this.index = 'z';  
                                    }else if(this.index == 1){
                                        this.index = 'r';
                                    }
                                 paixus = this.index;
                                 if( type > 0){
                                     
                                     var where = types+paixus;
                                 }else{
                                     var where =paixus;
                                 }
                      
                          ajax(where);  
                                }
                            }
                        </script>
						</div>
					</div>
					</div>
		<div id="re" class="s-main-l">
					
					<div id="conn" class="s-c-3f">
						<div class="s-c-3f-1f">
							<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="mdhd">
								<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>
							<div class="yhtx">
								<a href="">
									<img src="/matouPCS/Public/Home/img/yhmc.png" />
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<p class="yhmc">
							 <?php if($v[username]==$v[tel]): echo (substr($v["username"],0,5)); endif; ?>
							<?php if($v[username]!=$v[tel]): echo ($v["username"]); endif; ?>
							</p>
							<p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
							<p class="dtnr">
							<?php echo ($v["content"]); ?>
								</p>
							<ul>
									<?php if(is_array($img)): foreach($img as $key=>$vd): if($v[did]==$vd[pid]): ?><li>
									<a rel="gallery1" class="boxer" href="/matouPC/Uploads/<?php echo ($vd["imagename"]); ?>">
										<div class="pic">
											<img src="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>" />
										</div>
									</a>
								</li><?php endif; endforeach; endif; ?>
								<li class="clearfloat"></li>
							</ul>
										<div class="bottom">
								<p class="left"><?php echo ($v["time"]); ?></p>
								<span class="delete">
									<img src="/matouPCS/Public/Home/img/delete-2.png" />
								</span>
								<div class="right dz-qx">
										<p onclick="zan1(<?php echo ($v["did"]); ?>,<?php echo ($v["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$v['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz"></span>
													<?php } ?>
													<span style="font-size: 17px;" id="s<?php echo ($v["did"]); ?>"><?php echo ($v["zan"]); ?></span></p> 
								</div>
								<p class="clearfloat"></p>
							</div>
							<div class="clearfloat"></div><?php endforeach; endif; ?>
							<script type="text/javascript">
									var a = 0;
									function zan1(did,zan){
						
										var zan = parseInt(document.getElementById('s'+did).innerHTML);
										if($('#z'+did).hasClass('icon-dz')){
											zan += 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_gt_zan/did/"+did+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('点赞成功');
													$('#z'+did).removeClass('icon-dz');
													$('#z'+did).addClass('icon-dz-kz');
													$('#s'+did).html(zan);
												},error:function(){
													alert('n2o');
												}
											});
											
										}else{
											zan -= 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_gt_zan/did/"+did+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('取消成功');
													$('#z'+did).removeClass('icon-dz-kz');
													$('#z'+did).addClass('icon-dz');
													$('#s'+did).html(zan);
												},error:function(){
													alert('n4o');
												}
											});
											
										}
									}
								</script>
						</div>
					</div>
					<div class="s-main-b">
						<div class="margin">
							<button onclick="tj(<?php echo ($v["uid"]); ?>)" name='btn' id='btn' >点击加载更多</button>

						</div>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>


<script type="text/javascript">
var p=2;
  function tj(id){
	  var t = "<?php echo session('id');?>";
		$.ajax({
			type:'post',
			url:"<?php echo U('User/bdjz');?>",
			data:{k:p},
			beforeSend:function(){
	         $("#conn").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
		
					if(data!=null){				
						//alert(1);
						var zan='';
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
						
				
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
							
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';

						$("#conn").append(li);
	 		
						 }
				}else{
					// alert(22);
					 document.getElementById('bt').innerHTML = '加载完毕';
	 				flag=true;	
				}	
	 },
	 	complete:function(){
	           $("#load").remove();
			},
		 	dataType:'json'
		 	});
	 	p++;
	//  alert(p);
  }
  function ajax(where){
		 var t = "<?php echo session('id');?>";
	
				$.ajax({
					url:"?s=/Home/User/bdsousu",
					type:"post",
					data:{where:where},
					dataType:"json",
					success:function(data){
						
						var pl='';
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                       var p='';
	                       if(data['nr'][i].username==data['nr'][i].tel){
								var use = data['nr'][i].username.substr(0,5);
								}else{
							     var use = data['nr'][i].username;
								}
	                  	 for (var j= 0; j < data['tu'].length; j++) {
							 if(data['nr'][i].did==data['tu'][j].pid){
								p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
							 }
						 }
	                  	 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+' </p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
	                    	
							
						};
						var pl ='<div id="ha" class="s-c-3f ">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj'+where+'(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
				
						$('#re').html(pl);
						$('#re').val('');
					},error:function(){
						alert('no');
					}
				});
			
		}
  
  var l=2;

  function tj1(id){		
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:l,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	l++;
	// alert(p);
	  }  
  var w=2;

  function tj2(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:w,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 w++;
	// alert(p);
	  }  
  var e=2;

  function tj3(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/dtjzdt');?>",
				data:{k:e,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	e++;
	// alert(p);
	  }  
  var r=2;

  function tj4(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/dtjzdt');?>",
				data:{k:r,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	r++;
	// alert(p);
	  }  
  var t=2;

  function tj1r(id){		 
	  var t = "<?php echo session('id');?>";
	  var pxs='r';
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:t,id:id,pxs:pxs},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	t++;
	// alert(p);
	  }  
  var y=2;

  function tj2r(id){		 
	  var t = "<?php echo session('id');?>";
	  var pxs='r';
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:y,id:id,pxs:pxs},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	y++;
	// alert(p);
	  }  
  var u=2;

  function tj3r(id){		 
	  var t = "<?php echo session('id');?>";
	  var pxs='r';
			$.ajax({
				type:'post',
				url:"<?php echo U('User/rzbdjz');?>",
				data:{k:u,id:id,pxs:pxs},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	           
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	u++;
	// alert(p);
	  }  
  var o=2;

  function tj4r(id){		 
	  var t = "<?php echo session('id');?>";
	  var pxs='r';
			$.ajax({
				type:'post',
				url:"<?php echo U('User/spbdjz');?>",
				data:{k:o,id:id,pxs:pxs},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	o++;
	// alert(p);
	  }  
  var g=2;
  function tjr(id){		 
	  var t = "<?php echo session('id');?>";
	  var pxs='r';
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:g,id:id,pxs:pxs},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	g++;
	// alert(p);
	  }  
  var f=2;

  function tjz(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:f,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	f++;
	// alert(p);
	  }  
  var v=2;

  function tj1z(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:v,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	v++;
	// alert(p);
	  }  
  varb=2;

  function tj2z(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/bdjz');?>",
				data:{k:b,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	b++;
	// alert(p);
	  }  
  var n=2;

  function tj3z(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/rzbdjz');?>",
				data:{k:n,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	n++;
	// alert(p);
	  }  
  var m=2;

  function tj4z(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/spbdjz');?>",
				data:{k:m,id:id},
				beforeSend:function(){
		         $("#ha").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					// alert(data);
					if(data!=null){				
						
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
							 
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<=count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
						$("#ha").append(li);
						 }
					}else{
						 //alert(22);
						 document.getElementById('btn1').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	m++;
	// alert(p);
  }
  </script >
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
	<script type="text/javascript" src="/matouPCS/Public/Home/plupload/plupload.full.min.js"></script>
	<script type="text/javascript">
		var upload_total = 9; //最多上传数量
		var uploader = new plupload.Uploader({ //创建实例的构造方法
			runtimes: 'gears,html5,html4,silverlight,flash', //上传插件初始化选用那种方式的优先级顺序
			browse_button: ['btn', 'btn2'], // 上传按钮
			url: "ajax.php", //远程上传地址
			flash_swf_url: 'plupload/Moxie.swf', //flash文件地址
			silverlight_xap_url: 'plupload/Moxie.xap', //silverlight文件地址
			filters: {
				max_file_size: '10mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
				mime_types: [ //允许文件上传类型
					{
						title: "files",
						extensions: "jpg,png,gif,jpeg"
					}
				]
			},
			multi_selection: true, //true:ctrl多文件上传, false 单文件上传
			init: {
				FilesAdded: function(up, files) { //文件上传前
					var length_has_upload = $("#ul_pics").children("li").length;
					if(files.length >= upload_total) { //超过上传总数量则隐藏
						$("#local_upload").hide();
					}
					var li = '';
					plupload.each(files, function(file) { //遍历文件
						if(length_has_upload <= upload_total) {
							li += "<li class='li_upload' id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
						}
						length_has_upload++;
					});
					$("#ul_pics").prepend(li);
					uploader.start();
				},
				UploadProgress: function(up, file) { //上传中，显示进度条
					var percent = file.percent;
					$("#" + file.id).find('.bar').css({
						"width": percent + "%"
					});
					$("#" + file.id).find(".percent").text(percent + "%");
				},
				FileUploaded: function(up, file, info) { //文件上传成功的时候触发
					showPhotoUploadBox($('#btn'));
					var uploaded_length = $(".img_common").length;
					if(uploaded_length <= upload_total) {
						var data = eval("(" + info.response + ")"); //解析返回的json数据
						$("#" + file.id).html("<input type='hidden'name='pic[]' value='" + data.pic + "'/><input type='hidden'name='pic_name[]' value='" + data.name + "'/>\n\
                <img class='img_common' src='" + data.pic + "'/><span class='picbg'></span><a class='pic_close' onclick=delPic('" + data.pic + "','" + file.id + "')></a>");
					}
					showUploadBtn();
				},
				Error: function(up, err) { //上传出错的时候触发
					alert(err.message);
				}
			}
		});
		uploader.init();

		function delPic(pic, file_id) { //删除图片 参数1图片路径  参数2 随机数
			$.post("del.php", {
				pic: pic
			}, function(data) {
				$("#" + file_id).remove();
				showUploadBtn();
			})
		}

		function showUploadBtn() { //是否显示上传按钮
			var uploaded_length = $(".img_common").length;
			$("#uploaded_length").text(uploaded_length);
			var other_length = (upload_total - uploaded_length) > 0 ? upload_total - uploaded_length : 0;
			$("#upload_other").text(other_length);
			var uploaded_length = $(".img_common").length;
			if(uploaded_length >= upload_total) {
				$("#local_upload").hide();
			} else {
				$("#local_upload").show();
			}
		}

		function showPhotoUploadBox(obj) { //显示上传弹出层
			var left = obj.offset().left;
			var top = obj.offset().top + 46;
			$("#photo_upload_box_outside").css({
				"left": left,
				"top": top
			}).show()
		}

		function photo_upload_close() {
			$("#photo_upload_box_outside").fadeOut(500, function() {
				$(".li_upload").remove();
			})
		}
	</script>
	<script type="text/javascript">
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
		//全部类型下拉
		$('.s-c-2f-3f .left').hover(function() {
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(180deg)');
			$('.select-lx ul').css('background-color', '#FF5C5D');
			$('.select-lx').stop().animate({
				height: '150px'
			}, 300);
		}, function() {
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(0deg)');
			$('.select-lx ul').css('background-color', '#999999');
			$('.select-lx').stop().animate({
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
		$('.select-lx ul li a').click(function() {
			$('.s-c-2f-3f .left p').html($(this).html());
			$('.select-lx').stop().animate({
				height: '0px'
			}, 300);
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(0deg)');
		});
		//----------------------------remove tab切换样式--------------------------
		$('.s-c-2f-3f .right a').click(function() {
			$(this).parents('.s-c-2f-3f').children('.right').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
	</script>

</html>