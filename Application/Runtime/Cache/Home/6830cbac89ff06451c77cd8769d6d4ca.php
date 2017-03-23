<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>用户中心</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/main-tx.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/cropper.min.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />

	</head>

	<body>
		<!-----------------------------------编辑开始---------------------------------------->
		<div class="bjcg">
			修改成功
			<div class="bj-ok">
				<img src="/matouPCS/Public/Home/img/bj-ok.png" alt="" />
			</div>
		</div>
		<div class="alert-black-bj">
			<div class="alert-bj">
				<div class="a-1f">
					<div class="alert-tel-close">
						<img id="close-bj" src="/matouPCS/Public/Home/img/alert-close.png" alt="" />
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="a-2f">
					<p>用户名只能修改一次哦</p>
					<div class="input">
						<input type="text" id="bj-name" placeholder="请输入你的新用户名" />
						<p class="ts">不得超过10个字符</p>
						<div class="clearfloat"></div>
					</div>
				</div>
				<div class="a-3f">
					<div class="ok-cancel">
						<button id="bj-ok">确认</button>
						<button id="bj-cancel" class="right-tx">取消</button>
						<div class="clearfloat"></div>
					</div>
				</div>
			</div>
		</div>
		<!-----------------------------------编辑结束---------------------------------------->
		<!--绑定手机号开始-->
		<div class="alert-tel">
			<div class="alert-tel-1f">
				<div class="alert-tel-close">
					<img src="/matouPCS/Public/Home/img/alert-close.png" alt="">
				</div>
				<div class="clearfloat"></div>
			</div>
			<div class="alert-tel-2f">
				<div class="alert-tel-logo">
					<img src="/matouPCS/Public/Home/img/alert-logo.png" alt="喜事码头">
				</div>
				<h1>绑定手机号</h1>
			</div>
			<div class="alert-tel-3f">
				<ul>
					<li>
						<div class="left">
							手&nbsp;&nbsp;机&nbsp;&nbsp;号
						</div>
						<div class="right">
							<input type="tel" id="bd-tel" class="bd-tel" placeholder="请输入您的手机号码" />
							<input type="button" autocomplete="off" value="获取验证码" id="btn_yzm" class="button" />
						</div>
						<div class="clearfloat"></div>
						<p class="tsxx">*请输入手机号码</p>
					</li>
					<li>
						<div class="left">
							验&nbsp;&nbsp;证&nbsp;&nbsp;码
						</div>
						<div class="right">
							<input type="tel" class="word-border" placeholder="请输入您的验证码" />
							<div class="alert-false">
								<img src="/matouPCS/Public/Home/img/false.png" alt="" />
							</div>
							<div class="alert-true">
								<img src="/matouPCS/Public/Home/img/true.png" alt="" />
							</div>
						</div>
						<div class="clearfloat"></div>
					</li>
					<li>
						<div class="left">
							输入密码
						</div>
						<div class="right">
							<input type="tel" placeholder="建议使用至少两种字符组合" class="word-border" />
						</div>
						<div class="clearfloat"></div>
						<p class="tsxx">*请输入密码</p>
					</li>
					<li>
						<div class="left">
							确认密码
						</div>
						<div class="right">
							<input type="tel" placeholder="请再次输入您的密码" class="word-border" />
						</div>
						<div class="clearfloat"></div>
						<p class="tsxx">*两次密码输入不一致，请重新输入</p>
					</li>
				</ul>
				<div class="ok">
					<button>确定</button>
				</div>
			</div>
		</div>
		<!--绑定手机号结束-->
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
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
												<img src="/matouPCS/Public/Home/img/tx.png" />
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
							   <a href="#">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
									<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">管理商铺</a>
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
							<img src="/matouPCS/Public/Home/img/navbg2.png" alt="" />
							<div class="s-f2-r">
								<input type="text" placeholder="搜索全站" />
								<div class="s-f2-r1">
									<img src="/matouPCS/Public/Home/img/ss-t.png" alt="" />
								</div>
							</div>
						</div>
				</div>
			</div>
		</header>
		<section>
		 <?php if(is_array($jarr)): $i = 0; $__LIST__ = $jarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="s-main-c">
				<div class="s-main-l right-tx">
					<div class="s-c-2f-yh">
						<div class="update">
							<button id="bianji">编辑</button>
						</div>
						<div class="s-c-8f-1f">
							<h2>基本信息</h2>
						</div>
						<div class="s-c-2f-yh-2f">
							<form name="zhiye">
							<ul class="ul-l">
								<li>用户名</li>
								<li>职业</li>
								<li>所在地</li>
								<div class="clearfloat"></div>
							</ul>
							<ul class="ul-r">
								<li>
									<input disabled="disabled" type="text" id="name" class="white-in" readonly="readonly"    value="<?php echo ($v["username"]); ?>"  />
								
								</li>
								<li>
									<div id="dropdown">
									 <?php if($v[type_u]==''): ?><p id="type">请选择职位</p>
										<?php else: ?>
										<p id="type"><?php echo ($v["type_u"]); ?></p><?php endif; ?>
										<ul>
											<li>
												<a href="#" name="type_u"  rel="1">督导</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="2">主持人</a>
											</li>
											<li>
												<a href="#" name="type_u"  rel="3">摄影师</a>
											</li>
											<li>
												<a href="#" name="type_u"  rel="4">摄像师</a>
											</li>
											<li>
												<a href="#" name="type_u"  rel="5">化妆师</a>
											</li>
											<li>
												<a href="#" name="type_u"  rel="6">策划师</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="7">音响师</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="8">灯光师</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="9">花艺师</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="5">数码师/设计</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="5">视频剪辑师</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="5">表演者</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="5">老板</a>
											</li>
											<li>
												<a href="#" name="type_u" rel="5">营业员</a>
											</li>
											<li>
												<a name="type_u" href="#" rel="5">其他</a>
											</li>
											<li class="fgx">
												<a name="type_u" href="#" rel="5">保密</a>
											</li>
											<li>
												<a name="type_u"  href="#" rel="5">求职中</a>
											</li>
										</ul>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<input type="text" class="white-in" id="address" readonly="readonly" placeholder="请输入所在地"  value="<?php echo ($v["addre"]); ?>" data-value="" onclick="appendCity(this,'danxuan')" />
								
								</li>
								<div class="clearfloat"></div>`
							</ul>
							</form>
							<div class="clearfloat"></div>
						</div>
						<div class="sctx">
							<div class="sctx-y">
								<div class="container" id="crop-avatar">
									<div id="sctx" class="avatar-view" title="点击上传头像">
										<img src="/matouPCS/Tu//upload/<?php echo ($v["imagename"]); ?>" alt="" />
									</div>
									<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<form action="/matouPCS/Tu/crop.php" enctype="multipart/form-data" method="post">
													<div class="modal-header">
														<button class="close" data-dismiss="modal" type="button">&times;</button>
														<h4 class="modal-title" id="avatar-modal-label">更换头像</h4>
													</div>
													<div class="modal-body">
														<div class="avatar-body">
															<!-- Upload image and data -->
															<div class="avatar-upload">
																<input class="avatar-src" name="avatar_src" type="hidden" />
																<input class="avatar-data" name="avatar_data" type="hidden" />
																<label for="avatarInput">头像上传</label>
																<input class="avatar-input" id="avatarInput" name="avatar_file" type="file" />
															</div>
															<!-- Crop and preview -->
															<div class="row">
																<div class="col-md-9">
																	<div class="avatar-wrapper"></div>
																</div>
																<div class="col-md-3">
																	<div class="avatar-preview preview-lg"></div>
																	<div class="avatar-preview preview-md">
																	</div>
																</div>
															</div>
															<div class="row avatar-btns">
																<div class="col-md-9">
																	<div class="btn-group">
																		<button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">向左转</button>
																	</div>
																	<div class="btn-group">
																		<button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">向右转</button>
																	</div>
																</div>
																<div class="col-md-3">
																	<button class="btn btn-primary btn-block avatar-save" type="submit">完成</button>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- /.modal -->

									<!-- Loading state -->
									<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
								</div>
							</div>
							<button onclick="document.getElementById('sctx').click();">修改头像</button>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-3f-tx">
						<div class="s-c-8f-1f">
							<h2>账号安全</h2>
						</div>
						<div class="s-c-3f-2f">
							<ul class="ul-l">
								<li>码头币数量</li>
								<li>绑定手机</li>
								<li>绑定微信号</li>
								<li>绑定QQ号</li>
							</ul>
							<ul class="ul-r">
								<li>
									<p class="red"><?php echo ($v["mtb"]); ?></p>个&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="">查看码头币规则</a>
								</li>
								<li>
										<?php if($v[tel]==''): ?><input id="tel" value="<?php echo ($v["username"]); ?>" style="display: none;" type="text" class="white-in"/>
											<button id="bdsjh">绑定手机号</button>
									<?php else: ?>
										<input id="tel" value="<?php echo ($v["tel"]); ?>" style="display: none;" type="text" class="white-in" />
									<button id="bdsjh">绑定手机号</button><?php endif; ?>
							
								</li>
								<li>
									<div class="wc">
										<img src="/matouPCS/Public/Home/img/alert-wc.png" alt="微信" />
									</div>
									<button id="bdwc">绑定微信</button>
								</li>
								<li>
									<div class="QQ">
										<img src="/matouPCS/Public/Home/img/alert-QQ.png" alt="QQ" />
									</div>
									<button id="bdQQ">绑定QQ</button>
								</li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-4f-tx">
						<div class="s-c-8f-1f">
							<h2>修改密码</h2>
						</div>
						<div class="s-c-4f-2f">
							<ul class="ul-l">
								<li>当前密码</li>
								<li>新密码</li>
								<li>新密码确认</li>
								</ul>
							<ul class="ul-r">
								<li>
									<input type="password" class="white-in" id="password" name="password" />
								</li>
								<li>
									<input placeholder="请输入新密码" id="password1"   name="password1" type="password" class="white-in"  />
								</li>
								<li>
									<input placeholder="请再次输入新密码" id="password2" name="password2" type="password" class="white-in" />
									<span id="xxoo"></span>
								</li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-5f-yh">
							<button onclick="tj()">确认修改</button>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="s-main-r left">
					<p class="px-22">WEDDING PIER</p>
					<h1 class="px-22">喜事码头</h1>
					<p class="px-14">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							用户中心
						</div>
						<ul>
							<li class="selected-con">
								<a rel="nofollow" href="javascript://">
									<h2>基本信息</h2>
								</a>
							</li>
							<li>
								<a rel="nofollow" href="javascript://">
									<h2>账号安全</h2>
								</a>
							</li>
							<li>
								<a rel="nofollow" href="javascript://">
									<h2>修改密码</h2>
								</a>
							</li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>
			<div class="clearfloat"></div>
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
						
						<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<p><a href="http://www.miitbeian.gov.cn">豫ICP备16015506号</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/sousuo.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/bootstrap.min.js"></script>
	<script src="/matouPCS/Public/Home/js/cropper.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/main-tx.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
<script type="text/javascript">
function tj(){
	
    var username = $("#name").val();  
    var password = $("#upass").val();
    var address= $("#address").val();
    var password = $("#password").val();
    var password1 = $("#password1").val(); 
    var password2 = $("#password2").val(); 
    var zhiye = $("#type").html(); 
    
    if(password2==password1){
   
    $.ajax({  
        type: "POST",  
         url:"/matouPCS/index.php/Home/User/usave/",
         data: {"username":username,"password":password,"address":address,"password1":password1,"password2":password2,"zhiye":zhiye},  

        success: function(data){ 
        	alert(555);
        	if(data=='y'){
        		//alert('密码输入错误，修改失败');
        		 $('#xxoo').html('<p style="display: block;color:red">*密码输入错误，修改失败</p>');
        		//window.location.reload(true);//重新加载当前文挡
        	}else{
        		 $('#xxoo').html('<p style="display: block;color:red">*修改成功</p>');
        		 window.location.reload(true);//重新加载当前文挡
        	}
       //	 alert("修改完成");
    	
      
      },error:function(){
   			alert('no');
   		}
   	});
    }else{
    	 $('#xxoo').html('<p style="display: block;color:red">*两次输入的密码不一致</p>');
   
    	//alert('两次密码输入不一致');
    	//window.location.reload(true);
    }
}

</script>
</html>