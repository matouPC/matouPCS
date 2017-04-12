<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>部队中心</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
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
						<img src="/matouPCS/Public/Home/img/navbg3.png" />
						<div class="s-f2-r">
							<input type="text" placeholder="搜索全站" />
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
					<div class="s-c-1f">
						<div class="s-c-1f-1f">
							<div class="left">
									<a href="?s=/Home/User">
								<?php if($user[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                   <?php else: ?>
                                     <img style="width: 100px; height: 100px;" src="/matouPCS/Tu/upload/<?php echo ($user["imagename"]); ?>"  /><?php endif; ?>
									
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<div class="right">
								<p class="yhmc">
										<?php if($user[username]==$user[tel]): ?>用户：<?php echo (substr($user["username"],0,5)); endif; ?>
								               <?php if($user[username]!=$user[tel]): ?>用户：<?php echo ($user["username"]); endif; ?>
								</p>
								<p class="fssl">粉丝数量<?php echo ($user["fen"]); ?></p>
								<p>所在地：<?php echo ($user["addre"]); ?></p>
								<a href="?s=/Home/User"><button class="bj">编辑</button></a>
							</div>
						</div>
						<div class="s-c-1f-2f">
							<div class="left">
								<h2>我的关注</h2>
							</div>
							<div class="right">
							<?php if(is_array($guanzhu)): foreach($guanzhu as $key=>$guanzhus): $fen = explode(',',$guanzhus['fid']); $num=count($fen); endforeach; endif; ?>
								关注量：<?php echo ($num); ?>
							</div>
						</div>
						<div class="s-c-1f-3f">
							<ul>
							<?php if(is_array($guanzhu)): foreach($guanzhu as $key=>$guanzhus): ?><li>
									<div class="left-gz">
									<?php if($_SESSION['id'] == $bguanzhus['uid']){ ?>
									  <?php if($bguanzhus[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($bguanzhus["id"]); ?>">	
								<?php elseif($bguanzhus[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($bguanzhus["id"]); ?>"><?php endif; ?>
									<?php }else{ ?>
                                   <?php if($bguanzhus[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php elseif($bguanzhus[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($bguanzhus["id"]); ?>"><?php endif; ?>
                              <?php } ?>
                               	<?php if($user[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                   <?php else: ?>
                                     <img style="width: 60px; height: 60px;" src="/matouPCS/Tu/upload/<?php echo ($user["imagename"]); ?>"  /><?php endif; ?>
                              </a>
						
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<?php if($guanzhus[username]==$guanzhus[tel]): ?>用户:<?php echo (substr($guanzhus["username"],0,5)); endif; ?>
								               <?php if($guanzhus[username]!=$guanzhus[tel]): ?>用户:<?php echo ($guanzhus["username"]); endif; ?>
											</span>
											<span class="right"><?php echo ($guanzhus["addre"]); ?></span>
										</p>
										
									</div>
									<div class="clearfloat"></div>
								</li><?php endforeach; endif; ?>
							</ul>
							<!-- 	<a class="ckgd-gz" href="?s=/Home/User/bdzxfs">查看更多</a> -->
						</div>
						<div class="s-c-1f-2f">
							<div class="left">
								<h2>我的粉丝</h2>
							</div>
							<div class="right">
							<?php if(is_array($bguanzhu)): foreach($bguanzhu as $key=>$bguanzhus): $fen = explode(',',$bguanzhus['fid']); $nums=count($fen)-1; endforeach; endif; ?>
								粉丝量：<?php echo ($nums); ?>
							</div>
						</div>
						<div class="s-c-1f-3f">
							<ul>
								<?php if(is_array($bb)): foreach($bb as $key=>$bguanzhus): if(is_array($arr)): foreach($arr as $key=>$arre): if($arre==$bguanzhus[id]): ?><li>
									<div class="left-gz">
										<a href="">
													<?php if($_SESSION['id'] == $bguanzhus['uid']){ ?>
									  <?php if($bguanzhus[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($bguanzhus["id"]); ?>">	
								<?php elseif($bguanzhus[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($bguanzhus["id"]); ?>"><?php endif; ?>
									<?php }else{ ?>
                                   <?php if($bguanzhus[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php elseif($bguanzhus[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($bguanzhus["id"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($bguanzhus["id"]); ?>"><?php endif; ?>
                              <?php } ?>
                               	<?php if($user[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                   <?php else: ?>
                                     <img style="width: 60px; height: 60px;" src="/matouPCS/Tu/upload/<?php echo ($user["imagename"]); ?>"  /><?php endif; ?>
                              </a>
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-gz">
										<p class="tt">
											<span class="left">
												<?php if($bguanzhus[username]==$bguanzhus[tel]): ?>用户:<?php echo (substr($bguanzhus["username"],0,5)); endif; ?>
								               <?php if($bguanzhus[username]!=$bguanzhus[tel]): ?>用户:<?php echo ($bguanzhus["username"]); endif; ?>
											</span>
											<span class="right"><?php echo ($bguanzhus["addre"]); ?></span>
										</p>
										
									</div>
									<div class="clearfloat"></div>
								</li><?php endif; endforeach; endif; endforeach; endif; ?>
							
							</ul>
						<!-- 	<a class="ckgd-gz" href="?s=/Home/User/bdzxfs">查看更多</a> -->
						</div>
					</div>

				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<p class="title">
							结婚是个开心事，分享喜事，传递幸福！
						</p>
			<!-- 			<div class="s-c-2f-1f">
							<textarea></textarea>
						</div>
						<div class="s-c-2f-2f">
							<div class="left">
								<div class="emot_photo_video">
									<a class="item" id="btn" tabindex="1" style="cursor: pointer;"><i class="icon_emot_photo_video icon_photo"></i><p>上传图片</p></a>
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
										<li>
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
						</div>
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
                     <div id="re">
					<div id="le"  class="s-c-3f">		
					<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div id="conn" class="s-c-3f-1f">
							<div class="mdhd">
								<?php if($v[type]=='2'): ?><img src="/matouPCS/Public/Home/img/mdhd.png" /><?php endif; ?>
							</div>
							<div class="yhtx">
								    	<?php if($_SESSION['id'] == $v['uid']){ ?>
									  <?php if($v[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($v["uid"]); ?>">
								<?php elseif($v[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($v["uid"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($v["uid"]); ?>"><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($v[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($v["uid"]); ?>">
								<?php elseif($v[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($v["uid"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($v["uid"]); ?>"><?php endif; ?>
							
                                       <?php } ?>
											<?php if($v[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="width: 60px; height: 60px;border-radius:50%" src="/matouPCS/Tu/upload/<?php echo ($v["imagename"]); ?>"  /><?php endif; ?>
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<p class="yhmc">
							 <?php if($v[username]==$v[tel]): echo (substr($v["username"],0,5)); endif; ?>
							<?php if($v[username]!=$v[tel]): echo ($v["username"]); endif; ?>
							</p>
							<p class="zw">职位：<?php echo ($v["type_u"]); ?></p>
							<p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
							<p class="dtnr">
							<?php echo ($v["content"]); ?>
							</p>
							<ul>					
								<?php if(is_array($img)): foreach($img as $key=>$vd): if($v[did]==$vd[pid]): ?><li>
									<a rel="gallery1" class="boxer" href="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>">
										<div class="pic">
											<img src="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>" />
										</div>
									</a>
								</li><?php endif; endforeach; endif; ?>
								<div class="clearfloat"></div>
							</ul>
							<div class="bottom">
								<p class="left"><?php echo ($v["time"]); ?></p>
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
								<div class="clearfloat"></div>
							</div>
							<div class="clearfloat"></div>
						</div><?php endforeach; endif; ?>
					</div>
			
				<div class="s-main-b">
					<div class="margin">
						<button onclick="tj(<?php echo ($v["uid"]); ?>)" name='btn' id='btn' >点击加载更多</button>
					</div>
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
	         $("#le").append("<div id='load'>加载中……</div>");
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';

						$("#le").append(li);
	 		
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
						if(data!=null){		
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
	                 	  if(t==data['nr'][i].uid){
								if(data['nr'][i].bdlx==1){
									var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
								}else if(data['nr'][i].bdlx==6){
									var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
								}else{
									var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
								}
							}else{
								if(data['nr'][i].bdlx==1){
									var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
								}else if(data['nr'][i].bdlx==6){
									var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
								}else{
									var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
								}
							}
						  
						  if(data['nr'][i].imagename==null){
								var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
							}else{
						     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
							}
						  if(data['nr'][i].type==2){
								var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
							}else{
						     var imgh = '';
							}
	                  	 for (var j= 0; j < data['tu'].length; j++) {
							 if(data['nr'][i].did==data['tu'][j].pid){
								p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
							 }
						 }
	                  	 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+' </p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
	                    	
							
						};
						var pl ='<div id="ha" class="s-c-3f ">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj'+where+'(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
				
						$('#re').html(pl);
						$('#re').val('');
						}else{
							$('#re').html('');
						}
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
				url:"<?php echo U('User/grbdjz');?>",
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
				url:"<?php echo U('User/rzbdjz');?>",
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
  var rf=2;

  function tj4(id){		 
	  var t = "<?php echo session('id');?>";
			$.ajax({
				type:'post',
				url:"<?php echo U('User/spbdjz');?>",
				data:{k:rf,id:id},
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
		 	rf++;
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
				url:"<?php echo U('User/grbdjz');?>",
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	           
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
				url:"<?php echo U('User/grbdjz');?>",
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
							  if(t==data['nr'][i].uid){
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data['nr'][i].uid+'">';
									}
								}else{
									if(data['nr'][i].bdlx==1){
										var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data['nr'][i].uid+'">';
									}else if(data['nr'][i].bdlx==6){
										var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
									}else{
										var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data['nr'][i].uid+'">';
									}
								}
							  
							  if(data['nr'][i].imagename==null){
									var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
								}else{
							     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'" /> ';
								}
							  if(data['nr'][i].type==2){
									var imgh='<img src="/matouPCS/Public/Home/img/mdhd.png" />';
								}else{
							     var imgh = '';
								}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd">'+imgh+'</div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
	                          
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
	<script src="/matouPCS/Public/Home/js/jquery.fs.boxer.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
</html>