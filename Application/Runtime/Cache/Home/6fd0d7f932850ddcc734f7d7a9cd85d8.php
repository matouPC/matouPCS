<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>部队设置</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
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
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-l right-tx">
					<div class="s-c-1f-ss">
						<input type="text" placeholder="搜索全站" />
						<button></button>
						<div class="clearfloat"></div>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($xsList)){ ?>
						<div class="s-c-8f-1f" id="xsdt-a">
							<h2>悬赏大厅</h2>
						</div>
						<?php } ?>
						<div class="s-c-2f-ss-2f">
							<ul>
								<?php if(is_array($xsList)): foreach($xsList as $key=>$xsLists): ?><li>
										<a href="?s=/Home/xsdt/xqxs/id/<?php echo ($xsLists['psid']); ?>">
											<div class="s-l-1f">
												<div class="yhtx">
													<?php if($xsLists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($xsLists["imagename"]); ?>" alt="" /><?php endif; ?>
												</div>
												<h3 class="yhmc">
													用户<?php echo (substr($xsLists['username'],0,6)); ?>
												</h3>
												<p class="hdsj">
													活动时间：<?php echo ($xsLists['time']); ?>
												</p>
												<p class="hddd">
													活动地点：<?php echo ($xsLists['address']); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="s-l-2f">
												<?php if(is_array($xsList_xq)): foreach($xsList_xq as $key=>$xsList_xqs): if($xsList_xqs['pid'] == $xsLists['psid']){ ?>
													<div class="s-l-2f-1f">
														<p class="black-333"><?php echo ($xsList_xqs["type"]); ?></p>
														<?php if($xsList_xqs['sex'] == 1){ ?>
														<p class="sex">男</p>
														<?php } ?>
														<?php if($xsList_xqs['sex'] == 2){ ?>
														<p class="sex">女</p>
														<?php } ?>
														<?php if($xsList_xqs['sex'] == 3){ ?>
														<p class="sex">不限</p>
														<?php } ?>
														<p class="age">年龄<?php echo ($xsList_xqs["age"]); ?></p>
														<p class="jtyq">
															<span class="black-333">具体要求：</span> <?php echo ($xsList_xqs["yaoqiu"]); ?>
														</p>
														<p class="jg">
															<span class="black-333">价格：</span>
															<?php echo ($xsList_xqs["price"]); ?>元/天
														</p>
														<?php $bao = explode(',',$xsList['bao']); array_pop($bao); $xsbaos = count($bao); ?>
														<p class="bm">
															<?php echo ($xsbaos); ?>人报名
														</p>
														<div class="clearfloat"></div>
													</div>
													<?php } endforeach; endif; ?>
											</div>
											<div class="s-l-3f">
												<div class="left">
													<!-- 已有10人收藏 -->
												</div>
												<div class="right">
													<?php echo ($xsLists['date']); ?>
												</div>
												<div class="clearfloat"></div>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<?php if(!empty($xsLists)){ ?>
						<div class="djjzgd">
							<button>点击加载更多</button>
						</div>
						<?php } ?>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($ysList)){ ?>
						<div class="s-c-8f-1f" id="ysdt-a">
							<h2>应赏大厅</h2>
						</div>
						<?php } ?>
						<div class="s-c-3f-ss-2f">
							<ul>
								<?php if(is_array($ysList)): foreach($ysList as $key=>$ysLists): ?><li>
										<a href="?s=/Home/Ysq/xqys/id/<?php echo ($ysLists["did"]); ?>">
											<div class="s-l-1f">
												<div class="yhtx">
													<?php if($ysLists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($ysLists["imagename"]); ?>" alt="" /><?php endif; ?>
												</div>
												<h3 class="yhmc">
													用户<?php echo (substr($ysLists["username"],0,6)); ?>
												</h3>
												<p class="jg">
													<span class="black-333">薪资：</span>
													<?php echo ($ysLists["price"]); ?>元/天
												</p>
												<p class="szd">
													所在地：<?php echo ($ysLists["address"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="s-l-2f">
												<div class="middle">
													<p class="black-333"><?php echo ($ysLists["name"]); ?></p>
													<p class="age"><?php echo ($ysLists["age"]); ?></p>
													<p class="grjj">
														<span class="black-333">个人简介：</span>
														<?php echo ($ysLists["content"]); ?>
													</p>
													<div class="clearfloat"></div>
												</div>
												<div class="middle">
													<p class="black-333">职位:<?php echo ($ysLists["type_d"]); ?></p>
													<p class="zpzp">
														<?php $zhao = explode(',',$ysLists['imagename_z']); array_pop($zhao); $zhaos = count($zhao); ?>
														<span class="black-333">照片作品：</span>
														<?php echo ($zhaos); ?>个
													</p>
													<?php $video = explode(',',$ysLists['imagename_v']); array_pop($video); $videos = count($video)-1; ?>
													<p class="spzp">
														<span class="black-333">视频作品：</span>
														<?php echo ($videos); ?>个
													</p>
													<?php  $types = explode(',',$ysLists['type']); $video = explode(',',$ysLists['video']); array_pop($types); array_pop($video); ?>
													<p class="dq">
														<span class="black-333">档期：</span>
														<?php echo ($types[0]); ?>&nbsp;<?php echo ($video[0]); ?>&nbsp;&nbsp;&nbsp;
													</p>
													<div class="clearfloat"></div>
												</div>
											</div>
											<?php $ys_shou = explode(',',$ysLists['due_shou']); array_pop($ys_shou); $ysshou = count($ys_shou); ?>
											<div class="s-l-3f">
												<div class="left">
													已有<?php echo ($ysshou); ?>人收藏
												</div>
												<div class="right">
													<?php echo ($ysLists['date']); ?>
												</div>
												<div class="clearfloat"></div>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<?php if(!empty($ysList)){ ?>
							<div class="djjzgd">
								<button>点击加载更多</button>
							</div>
						<?php } ?>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($zpList)){ ?>
							<div class="s-c-8f-1f" id="zpdt-a">
								<h2>招聘大厅</h2>
							</div>
						<?php } ?>
						<div class="s-c-4f-ss-2f">
							<ul>
								<?php if(is_array($zpList)): foreach($zpList as $key=>$zpLists): ?><li>
										<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($zpLists["rid"]); ?>">
											<div class="s-l-1f">
												<div class="yhtx">
													<?php if($zpLists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($zpLists["imagename"]); ?>" alt="" /><?php endif; ?>
												</div>
												<h3 class="yhmc">
													用户<?php echo (substr($zpLists["username"],0,6)); ?>
												</h3>
												<p class="bdmc">
													部队名称：
												</p>
												<p class="bdlx">
													部队类型：
												</p>
												<p class="szd">
													工作地点：<?php echo ($zpLists["address_zp"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="s-l-2f">
												<?php if(is_array($zpList_xq)): foreach($zpList_xq as $key=>$zpList_xqss): if($zpList_xqss['pid'] == $zpLists['rid']){ ?>
														<div class="middle">
															<p class="black-333"><?php echo ($zpList_xqss["type"]); ?></p>
															<p class="age"><?php echo ($zpList_xqss["age"]); ?></p>
															<p class="gwyq">
																<span class="black-333">岗位要求：</span>
																<?php echo ($zpList_xqss["content"]); ?>
															</p>
															<p class="jg">
																<span class="black-333">薪资：</span>
																<?php echo ($zpList_xqss["price"]); ?>元/天
															</p>
															<?php $zhao = explode(',',$zpList_xqss['zhao']); array_pop($zhao); $zhaos = count($zhao); ?>
															<p class="bm"><?php echo ($zhaos); ?>人应聘</p>
															<div class="clearfloat"></div>
														</div>
													<?php } endforeach; endif; ?>
											</div>
											<div class="s-l-3f">
												<div class="right">
													<?php echo ($zpLists["date"]); ?>
												</div>
												<div class="clearfloat"></div>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<?php if(!empty($zpList)){ ?>
							<div class="djjzgd">
								<button>点击加载更多</button>
							</div>
						<?php } ?>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($ypList)){ ?>
						<div class="s-c-8f-1f" id="ypdt-a">
							<h2>应聘大厅</h2>
						</div>
						<?php } ?>
						<div class="s-c-5f-ss-2f">
							<ul>
								<?php if(is_array($ypList)): foreach($ypList as $key=>$ypLists): ?><li>
										<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($ypLists["eid"]); ?>">
											<div class="s-l-1f">
												<div class="yhtx">
													<?php if($ypLists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($ypLists["imagename"]); ?>" alt="" /><?php endif; ?>
													<!-- <img src="img/yhmc.png" alt="" /> -->
												</div>
												<h3 class="yhmc">
													用户<?php echo (substr($ypLists["username"],0,6)); ?>
												</h3>
												<p class="szd">
													工作地点：<?php echo ($ypLists["address"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="s-l-2f">
												<div class="middle">
													<p class="black-333"><?php echo ($ypLists["name"]); ?></p>
													<p class="age">年龄<?php echo ($ypLists["ages"]); ?></p>
													<p class="gzjy">
														<span class="black-333">工作经验：</span>
														<?php echo ($ypLists["worktimes"]); ?>年
													</p>
													<p class="grjj">
														<span class="black-333">个人简介：</span>
														<?php echo ($ypLists["content"]); ?>
													</p>
													<p class="ypzw">
														<span class="black-333">应聘职位：</span>
														<?php echo ($ypLists["type"]); ?>
													</p>
													<!--<p class="bm">10人报名</p>-->
													<div class="clearfloat"></div>
												</div>

												<div class="middle">
													<p class="gzsj">
														<span class="black-333">工作时间：</span>
														<?php echo ($ypList_gz[0][worktime]); ?>
													</p>
													<p class="szgs">
														<span class="black-333">所在公司：</span>
														<?php echo ($ypList_gz[0][workname]); ?>
													</p>
													<p class="zw">
														<span class="black-333">职位：</span>
														<?php echo ($ypList_gz[0][typew]); ?>
													</p>
													<div class="clearfloat"></div>
												</div>
											</div>
											<div class="s-l-3f">
												<?php  $shou_yp = explode(',',$ypLists); array_pop($shou_yp); $num_yp = count($shou_yp); ?>
												<div class="left">
													已有<?php echo ($num_yp); ?>人收藏
												</div>
												<div class="right">
													<?php echo ($ypLists[date]); ?>
												</div>
												<div class="clearfloat"></div>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<?php if(!empty($ypList)){ ?>
							<div class="djjzgd">
								<button>点击加载更多</button>
							</div>
						<?php } ?>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($tzList)){ ?>
							<div class="s-c-8f-1f" id="tzsc-a">
								<h2>跳蚤市场</h2>
							</div>
						<?php } ?>
						<div class="user">
							<?php if(is_array($tzList)): foreach($tzList as $key=>$tzLists): $img = explode(',',$tzLists['imagenames']); $shou = explode(',',$tzLists['shou']); $bao = explode(',',$tzLists['bao']); array_pop($shou); array_pop($bao); $shous = count($shou); $baos = count($bao); ?>
								<?php if($tzLists['type'] == 2){ ?>
								<div class="user_01">
									<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($tzLists["fid"]); ?>">
										<div class="xztp">
		                                  	<?php if($tzLists[imagenames]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
		                                   <?php else: ?>
		                                     	<img src="/matouPCS/Uploads/<?php echo ($img[0]); ?>" alt="" /><?php endif; ?>
										</div>
										<div class="user_01_01">
											<div class="user_01_02">
												<p>闲置：<?php echo ($tzLists["name"]); ?></p><span>￥<?php echo ($tzLists["price"]); ?>元</span></div>
											<p class="user_01_03">
												<span class="black-333">商品介绍：</span>
												<span class="text69">
													<?php echo ($tzLists["content"]); ?>
												</span>
											</p>
											<p class="user_01_04">已有<?php echo ($shous); ?>人收藏</p>
											<p class="user_01_05"><?php echo ($tzLists["address"]); ?></p>
										</div>
									</a>
								</div>
								<?php }else{ ?>
									<div class="user_01">
										<a href="#">
											<div class="user_02">
												<div class="wptp">
													<?php if($tzLists[imagenames]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img src="/matouPCS/Uploads/<?php echo ($tzLists[imagenames][0]); ?>" alt="" /><?php endif; ?>
												</div>
												<p>用户<?php echo (substr($tzLists["username"],0,6)); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div class="user_01_01-f">
												<div class="user_01_02">
													<p><?php echo ($tzLists["name"]); ?></p><span>预算￥<?php echo ($tzLists["price"]); ?>元</span></div>
												<p class="user_01_03-f">
													<span class="black-333">商品介绍：</span>
													<span class="text90">
														<?php echo ($tzLists["content"]); ?>
													</span>
												</p>
												<p class="user_01_04">已有<?php echo ($baos); ?>人报名</p>
												<p class="user_01_05"><?php echo ($tzLists["address"]); ?></p>
												<div class="clearfloat"></div>
											</div>
										</a>
									</div>
								<?php } endforeach; endif; ?>
							
							<div class="clearfloat"></div>
						</div>
						<?php if(!empty($tzList)){ ?>
							<div class="djjzgd">
								<button>点击加载更多</button>
							</div>
						<?php } ?>
					</div>
					<div class="clear"></div>
					<div class="s-c-2f-ss">
						<?php if(!empty($bdList)){ ?>
							<div class="s-c-8f-1f" id="mtbd-a">
								<h2>码头部队</h2>
							</div>
						<?php } ?>
						<div class="f3-t-1">
								<ul>
									<?php if(is_array($bdList)): foreach($bdList as $key=>$bdLists): ?><li>
											<?php if($_SESSION['id'] == $bdLists['uid']){ ?>
												  <?php if($bdLists[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($bdLists["uid"]); ?>">	
											<?php elseif($bdLists[bdlx]=='6'): ?>
											<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($bdLists["uid"]); ?>">
											<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($bdLists["uid"]); ?>"><?php endif; ?>
												<?php }else{ ?>
			                                        <?php if($bdLists[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($bdLists["uid"]); ?>">
											<?php elseif($bdLists[bdlx]=='6'): ?>
											<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($bdLists["uid"]); ?>">
											<?php else: ?>
											<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($bdLists["uid"]); ?>"><?php endif; ?>
			                                       <?php } ?>
												<div class="f3-t-1-c1">
													<?php if($bdLists[logo]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png.png" alt="" />
				                                   <?php else: ?>
				                                     	<img src="/matouPCS/Uploads/<?php echo ($bdLists[logo]); ?>" alt="" /><?php endif; ?>
												</div>
												<div class="f3-t-1-c2">
													<strong><?php echo ($bdLists["forcename"]); ?></strong>
												</div>
												<div class="f3-t-1-c3l">
													<p>部队类型: <?php echo ($bdLists["type_bd"]); ?></p>
												</div>
												<div class="f3-t-1-c3r">
													<p>粉丝数量100</p>
												</div>
												<div class="clear"></div>
												<div class="f3-t-1-c4">
													<p>
														<span class="black-333">部队介绍：</span>
														<span class="text72">
															<?php echo ($bdLists["content"]); ?></p>
														</span>
												</div>
												<div class="f3-t-1-c5">
													<p>所在地：<?php echo ($bdLists["address"]); ?></p>
												</div>
												<div class="clearfloat"></div>
											</a>
										</li><?php endforeach; endif; ?>
									<div class="clear"></div>
								</ul>
							</div>
							<?php if(!empty($bdList)){ ?>
								<div class="djjzgd">
									<button>点击加载更多</button>
								</div>
							<?php } ?>
					</div>
					<?php if(!empty($scList)){ ?>
						<div class="clear"></div>
						<div class="s-c-2f-ss">
							<div class="s-c-8f-1f" id="mtsc-a">
								<h2>码头商城</h2>
							</div>
							<div class="s-c-8f-ss-2f">
								<ul>
									<?php if(is_array($scList)): foreach($scList as $key=>$scLists): ?><li>
											<a href="?s=/Home/Tjcs/spxq/id/<?php echo ($scLists["id"]); ?>">
												<div class="wptp">
													<?php if($scLists['imagenames']==''): ?><img src="/matouPCS/Public/Home/img/yhmc-big.png" alt="">
				                                   <?php else: ?>
				                                     	<img src="/matouPCS/Uploads/<?php echo ($scLists[imagenames]); ?>" alt="" /><?php endif; ?>
												</div>
												<div class="nr">
													<p class="yhmc">用户<?php echo (substr($scLists["username"],0,6)); ?></p>
													<!-- <span><?php echo ($scLists["name"]); ?></span> -->
													<p class="jg">￥<?php echo ($scLists["price"]); ?></p>
													<div class="clearfloat"></div>
												</div>
												<p class="spjs">
													<span class="black-333">商品介绍：</span>
													<?php echo ($scLists["content"]); ?>
												</p>
												<p class="bottom">
													<!-- <span class="left">已有10人报名</span> -->
													<span class="right"><?php echo ($scLists["address"]); ?></p>
													<span class="clearfloat"></span>
												</p>
											</a>
										</li><?php endforeach; endif; ?>
									<div class="clearfloat"></div>
								</ul>
							</div>
							<div class="djjzgd">
								<button>点击加载更多</button>
							</div>
						</div>
						<?php } ?>
				</div>

				<div class="s-main-r left-tx">
					<p class="px-22">WEDDING PIER</p>
					<p class="px-22">
						<h1>喜事码头</h1>
					</p>
					<p class="px-14">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							全部
						</div>
						<ul>
							<li id="xsdt" class="selected-con">
								<a rel="nofollow" href="javascript://">
									<h2>悬赏大厅</h2>
								</a>
							</li>
							<li id="ysdt">
								<a rel="nofollow" href="javascript://">
									<h2>应赏大厅</h2>
								</a>
							</li>
							<li id="zpdt">
								<a rel="nofollow" href="javascript://">
									<h2>招聘大厅</h2>
								</a>
							</li>
							<li id="ypdt">
								<a rel="nofollow" href="javascript://">
									<h2>应聘大厅</h2>
								</a>
							</li>
							<li id="tzsc">
								<a rel="nofollow" href="javascript://">
									<h2>跳蚤市场</h2>
								</a>
							</li>
							<li id="mtbd">
								<a rel="nofollow" href="javascript://">
									<h2>码头部队</h2>
								</a>
							</li>
							<li id="mtsc">
								<a rel="nofollow" href="javascript://">
									<h2>码头商城</h2>
								</a>
							</li>
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
											<img src="/matouPCS/Public/Home/img/erweima_top.png" />
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
						<a href="#">友情链接544</a>
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
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>

</html>