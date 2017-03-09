<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>我的粉丝</title>
		<link rel="stylesheet" href="__/PUBLIC__/Home/css/troop.css" />
		<link rel="stylesheet" href="__/PUBLIC__/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="__/PUBLIC__/Home/css/showwin2.css" />
	</head>

	<body>
		<div class="show-bg"></div>
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
						<img src="__/PUBLIC__/Home/img/navbg3.png" />
						<div class="s-f2-r">
							<input type="text" placeholder="搜索全站"/>
							<div class="s-f2-r1">
								<img src="__/PUBLIC__/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
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
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
								<div class="vip">
									<img src="__/PUBLIC__/Home/img/rzlogo.png" />
								</div>
							</div>
							<div class="right">
								<p class="yhmc">
									<a href="">用户名称</a>
								</p>
								<p class="fssl">粉丝数量</p>
								<p>所在地：郑州</p>
								<button class="bj">编辑</button>
							</div>
						</div>
						<div class="s-c-1f-2f">
							<div class="left"></div>
							<div class="right">
								关注量：111111
							</div>
						</div>
						<div class="s-c-1f-3f">
							<ul>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
							</ul>
							<button class="ckgd-gz" onclick="window.location='bdzxgz-3r-xy.html'">查看更多</button>
						</div>
						<div class="s-c-1f-4f">
							<div class="left"></div>
							<div class="right">
								粉丝量：111111
							</div>
						</div>
						<div class="s-c-1f-3f">
							<ul>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left-gz">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<a href="">用户名称</a>
											</span>
											<span class="right">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
									<div class="clearfloat"></div>
								</li>
							</ul>
							<button class="ckgd-gz" onclick="window.location='bdzxfs-3r-xy.html'">查看更多</button>
						</div>
					</div>

				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<p class="title">
							结婚是个开心事，分享喜事，传递辛福！
						</p>
						<div class="s-c-2f-1f">
							<textarea></textarea>
						</div>
						<div class="s-c-2f-2f">
							<div class="left">
								<div class="sctp">
									<img src="__/PUBLIC__/Home/img/sctpic.png" />
								</div>
								<p>上传图片</p>
							</div>
							<button class="right">
								发动态
							</button>
						</div>
					</div>
					<div class="s-c-6f">
						<div class="s-c-6f-1f">
							<ul>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx" onclick="">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="__/PUBLIC__/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="__/PUBLIC__/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="yhmc">
											<a href="">用户名称</a>
										</p>
										<p class="fssl">粉丝数量</p>
										<p>所在地：郑州</p>
										<button class="gz-qx">关注</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="s-main-b">
						<div class="margin">
							<button>点击加载更多</button>
						</div>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>

		</section>
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
	<script src="__/PUBLIC__/Home/js/jquery-1.8.3.min.js"></script>
	<script src="__/PUBLIC__/Home/js/jquery.bigautocomplete.js"></script>
	<script src="__/PUBLIC__/Home/js/showwin2.js"></script>
	<script src="__/PUBLIC__/Home/js/troop.js"></script>
</html>