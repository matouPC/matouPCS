<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/main-tx.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/cropper.min.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/upimg.css" />
	</head>

	<body>
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
			<div class="s-main-c">
			<div class="bjtx">
								<div class="sctx-y">
									<div class="container" id="crop-avatar">
										<div id="sctx" class="avatar-view" title="点击上传头像">
											<img src="/matouPCS/Public/Home/img/yhmc.png" alt="" alt="" />
										</div>
										<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
														<form class="avatar-form"  action="/matouPCS/Tu/crop.php" enctype="multipart/form-data" method="post">
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
								<div class="tx-button">
									<input id="syb"  onclick="document.getElementById('sctx').click();" style="text-align:center" class="button-tg" value="编辑头像">
								
								</div>
							</div>
							 <form action="/matouPCS/Home/Mtbu/rzbdcj" method="post" id="myform" name="myform" enctype="multipart/form-data">
				<div class="s-main-l right-tx">
					<div class="con1">
				
						<div class="s-c-8f">
							<div class="s-c-8f-1f">
								<h2>基本信息</h2>
							</div>
							<div class="s-c-8f-2f rzjbxx">
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
										<input type="text"  id="charter"  name="charter"  placeholder="请输入真实营业执照" class="gray-in" />
									</li>
									<li>
										<input type="text" id="representative"  name="representative" placeholder="请输入真实法定代表人姓名" class="gray-in" />
									</li>
									<li>
										<input type="text"  id="forcename"  name="forcename" class="gray-in" placeholder="请输入门店的简称、别称" />
									</li>
									<li>
										<input type="text" id="address"  name="address" class="white-in xz-city" readonly="readonly" placeholder="请选择" onclick="appendCity(this,'danxuan')" value="" data-value="" />
										<input type="text" id="xaddress"  name="xaddress" style="width: 245px;" class="white-in xxdz" placeholder="请填写详细地址（不超过18个字）" />
									</li>
									<li>
										<input type="text" id="tel" name="tel" class="white-in lxdh" placeholder="请输入联系电话" />
									</li>
									<li>
										<input type="text" id="qq"  name="qq" class="white-in lxdh" placeholder="请输入QQ" />
										 <input type="hidden" name="logo" value="<?php echo $_COOKIE['img'];?>">
									</li>
									<li class="parents" style="height: 138px;">
										<div id="typee" class="left">
											<a class="selected" href="javascript://">婚庆公司</a>
											<a href="javascript://">影楼</a>
											<a class="gzs" href="javascript://">
												<p>工作室</p>
												<div class="gzs-xl">
													<span>婚礼策划G</span>
													<span>摄影摄像G</span>
													<span>主持团队G</span>
													<span>化妆团队G</span>
													<span>其他G</span>
												</div>
											</a>
											<a href="javascript://">表演团队</a>
											<input type="hidden"  name="type_bd"   id="in"   />
										</div>
										   <script>
                 var cNode =document.getElementById('typee').getElementsByTagName('a');
                 for( var i=0; i<cNode.length; i++){
                     cNode[i].index= i;
                     //用来计算点击次数
                     var type = 0;
                             
                                cNode[i].onclick = function(){
                                   type+=1; 
                                    if(this.index == 0){
                                        this.index = '婚庆公司';  
                                    }else if(this.index == 1){
                                        this.index = '影楼';
                                    }else if(this.index == 2){
                                        this.index = '工作室';
                                    }else if(this.index == 3){
                                        this.index = '表演团队';
                                    }
                                    types = this.index;
                                    $('#in').val(types);
                                }
                            }
                        </script>
										<div class="right">
											<p>有门店，专注为新人举办婚礼</p>
											<p>有门店，业务包括婚纱摄影</p>
											<p>无门店，主持人团队、婚礼策划团队、婚礼摄影/摄像团队等</p>
											<p>专注歌舞、乐器演奏、民间艺术等表演的团队</p>
										</div>
										<div class="clearfloat"></div>
									</li>
									<li style="height: 110px;">
										<textarea id="content" name="content"   placeholder="请输入部队简介..."></textarea>
									</li>
									<li>
										<input type="text"  id="lianjie" name="lianjie" class="white-in" style="width: 354px;" placeholder="请输入链接地址" />
									</li>
								</ul>
								<ul class="clearfloat"></ul>
							
							</div>
								
						
							<div class="clearfloat"></div>
							<input id="jbxx"  style="text-align:center;" class="button-bc" value="下一步">
						</div>
				
					</div>
					<div class="con2" style="display: none;">
						<div class="s-c-8f">
							<div class="s-c-8f-1f">
								<h2>照片作品/</h2><span>最多上传12张照片</span>
								<span class="right"  id="rzbd_img">									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" alt="" />
									</div>
								</span>
							</div>
							<div class="s-c-8f-2f-f">
								<div class="dianji">
									<div class="gth">
										<img src="/matouPCS/Public/Home/img/gth.png" alt="">
									</div>
									上传照片作品，让用户进一步了解您店铺的实力！
									<div class="clearfloat"></div>
								</div>
								<div class="img_div" id="rzbd_imgs">
								</div>
								<a class="none" href="javascript:;" class="a-upload">
									点击这里上传文件
								</a>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
										<span class="text_span">
					
										</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="">
										<img class="showImg" src="" alt="" />
									</div>
								</div>
							</div>
						</div>
						<div class="s-c-9f">
							<div class="s-c-8f-1f">
								<h2>视频作品/</h2><span>最多上传3个视频文件</span>
							</div>
							<div class="s-c-9f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<div class="picture1">
												<img id="pic1" src="/matouPCS/Public/Home/img/scsp.png" alt="">
												<input class="none" id="upload1" name="file1" accept="image/jpg,image/jpeg,image/png" type="file" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file_title1" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="file_video1" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" alt="" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="picture2">
												<img id="pic2" src="/matouPCS/Public/Home/img/scsp.png" alt="">
												<input id="upload2" name="file2" accept="image/jpg,image/jpeg,image/png" type="file" class="none" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file_title2" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="file_video2" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" alt="" />
										</div>
									</li>
									<li class="last-child">
										<div class="na2">
											<div class="picture3">
												<img id="pic3" src="/matouPCS/Public/Home/img/scsp.png" alt="">
												<input id="upload3" name="file3" accept="image/jpg,image/jpeg,image/png" type="file" class="none" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file_title3" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="file_video3" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" alt="" />
										</div>
									</li>
									<div class="clearfloat"></div>
								</ul>
							</div>
						</div>
					
						<div class="bz">
							<input id="syb"  style="text-align:center" class="button-tg" value="上一步">
							<button class="button-wc" onclick="tj()">完成</button>
						</div>
					</div>
				</div>
					</form>
				<div class="s-main-r left">
					<p class="px-22">WEDDING PIER</p>
					<h1 class="px-22">喜事码头</h1>
					<p class="px-14">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							认证部队
						</div>
						<ul>
							<li id="con-jbxx" class="selected-con">
								<a href="javascript://">
									<h2>基本信息</h2>
								</a>
							</li>
							<li id="con-tjzp">
								<a href="javascript://">
									<h2>添加作品</h2>
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/areadata.js"></script>
<script src="/matouPCS/Public/Home/js/main-bdcj.js"></script>
	<script src="/matouPCS/Public/Home/js/bootstrap.min.js"></script>
	<script src="/matouPCS/Public/Home/js/cropper.min.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
	<script src="/matouPCS/Public/Home/js/sousuo.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
		<script src="/matouPCS/Public/Home/js/upimg.js"></script>
<script type="text/javascript">
function tj(){
	var form = document.myform;			
	form.action = "?s=/Home/Mtbu/rzbdcj";
	form.method="post";
	form.submit();
}

</script>
</html>