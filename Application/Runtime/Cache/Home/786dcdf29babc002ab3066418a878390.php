<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>需求消息</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xx-3rsp-cc.css" />
	</head>

	<body>
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
		<section>
			<div class="s-main-c">
				<div class="s-main-t">
					<p>需求消息</p>
				</div>
				<div class="s-main-t-qb">
					<div id="xqxx-lb" class="lb"><p>全部</p>
						<div class="xqxx-lb">
								<ul>
									<a href="#xz"><li>闲置留言</li></a>
									<a href="#qg"><li>求购留言</li></a>
									<a href="#qgs"><li>求购收藏</li></a>
									<a href="#yps"><li>应聘收藏</li></a>
									<a href="#yss"><li>应赏收藏</li></a>
									<a href="#xsb"><li>悬赏报名</li></a>
									<a href="#zpb"><li>招聘报名</li></a>
									<a href="#qgb"><li>求购报名</li></a>
								</ul>
							</div>
						</div>
				</div>

				<div class="wk_01">
					<div class="con">
						<div class="s-main-b">
							<ul>
								<!-- 闲置留言 -->
								<a name="xz"></href> 
								<div id="xianzhi">
								<?php if(is_array($list)): foreach($list as $key=>$lists): ?><li>
										<div class="xialai">
											<span class="xll1">
												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="spxx">
											<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>" alt="" /><?php endif; ?>
											<p class="spxx_01">
						<?php if($lists[tel]==$lists[username]): ?>用户<?php echo (substr($lists["username"],0,5)); ?>
					<?php else: ?>
					用户<?php echo ($lists["username"]); endif; ?>
                                          </p>
											<p class="spxx_02"></p>
											<form>
												<p class="spxx_03">
													闲置留言
												</p>
												
											</form>
										</div>
										<div class="spxx_00">
											<p>
												<?php echo ($lists["content_xx"]); ?>
											</p>
										</div>
										<?php if(is_array($list_hui)): foreach($list_hui as $key=>$list_huis): if($list_huis['tid'] == $lists['id']){ ?>
											<div class="spxx">
												<?php if($list_huis[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($list_huis["imagename"]); ?>" alt="" /><?php endif; ?>
												<p class="spxx_01">
						       <?php if($$list_huis[tel]==$$list_huis[username]): ?>用户<?php echo (substr($list_huis["username"],0,5)); ?>
					            <?php else: ?>
					        用户<?php echo ($list_huis["username"]); endif; ?>
												</p>
												<p class="spxx_02"></p>
												<form>
													<p class="spxx_03">
														回复
													</p>
												</form>
											</div>
											<div class="spxx_00">
												<p>
													<?php echo ($list_huis["content_hf"]); ?>
												</p>
											</div>
								<?php } endforeach; endif; ?>

										<div class="spxx_sj">
											<p class="spxx_sj_r">2016-12-12</p>
											<p class="spxx_hf">
												回复
											</p>
										</div>
										<div class="no">
											<input type="hidden" id="uid" value="<?php echo ($uid); ?>">
											<textarea id="textarea" placeholder="留言留言留言留言留言留言"></textarea>
										<button class="hf" onclick="liuyan_xz(<?php echo ($lists["id"]); ?>,<?php echo ($lists["uid"]); ?>)">回复</button>
										<div class="clear"></div>
										</div>
									</li><?php endforeach; endif; ?>
								</div>
								<?php if(!empty($list)){ ?>
									<div class="djjzgd">
										<button onclick="tj()" name='btnn' id='btnn' >点击加载更多</button>
									</div>
								<?php } ?>
								 <!-- 求购留言 -->
                               <a name="qg"></href> 
								<div id="qiugou">
								<?php if(is_array($list_q)): foreach($list_q as $key=>$lists): ?><li>
										<div class="xialai">
											<span class="xll1">

												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="spxx">
											<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>" alt="" /><?php endif; ?>
											<p class="spxx_01"><?php echo ($lists["username"]); ?></p>
											<p class="spxx_02"></p>
											<form>
												<p class="spxx_03">
													求购留言
												</p>
												
											</form>
										</div>
										<div class="spxx_00">
											<p>
												<?php echo ($lists["content_xx"]); ?>
											</p>
										</div>
										<?php if(is_array($list_qgxx_hui)): foreach($list_qgxx_hui as $key=>$list_qgxx_huis): if($list_qgxx_huis['tid'] == $lists['id']){ ?>
											<div class="spxx">
												<?php if($list_qgxx_huis[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($list_qgxx_huis["imagename"]); ?>" alt="" /><?php endif; ?>
												<p class="spxx_01"><?php echo ($list_qgxx_huis["username"]); ?></p>
												<p class="spxx_02"></p>
												<form>
													<p class="spxx_03">
														回复
													</p>
												</form>
											</div>
											<div class="spxx_00">
												<p>
													<?php echo ($list_qgxx_huis["content_hf"]); ?>
												</p>
											</div>
											<?php } endforeach; endif; ?>
										<div class="spxx_sj">
											<p class="spxx_sj_r">2016-12-12</p>
											<p class="spxx_hf">
												回复
											</p>
										</div>
										<div class="no">
											<textarea id="textarea_qg" placeholder="留言留言留言留言留言留言"></textarea>
										<button class="hf" onclick="liuyan_qg(<?php echo ($lists["id"]); ?>,<?php echo ($lists["uid"]); ?>)">回复</button>
										<div class="clear"></div>
										</div>
									</li><?php endforeach; endif; ?>
								</div>
								<?php if(!empty($list_q)){ ?>
									<div class="djjzgd">
									<button onclick="tj1()" name='btn1' id='btn1' >点击加载更多</button>
									</div>
								<?php } ?>
								<!-- 求购收藏 -->
								 <a name="qgs"></href> 
								<div id="qiugous">
								<?php if(is_array($list_qs)): foreach($list_qs as $key=>$lists): ?><li>
										<div class="xialai">
											<span class="xll1">

												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="spxx">
											<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>" alt="" /><?php endif; ?>
											<p class="spxx_01"><?php echo ($lists["username"]); ?></p>
											<p class="spxx_02"></p>
											<p class="spxx_03">求购收藏</p>
											<div class="spxx_img">
													<img src="/matouPCS/Public/Home/img/heart.png" />
												</div>
											<p class="spxx_04">
												收藏
											</p>
										</div>
										<div class="spxx_sj">
											<p class="spxx_sj_r">2016-12-12</p>
										</div>
									</li><?php endforeach; endif; ?>
								</div>
								<?php if(!empty($list_qs)){ ?>
									<div class="djjzgd">
									<button onclick="tj2()" name='btnt' id='btnt' >点击加载更多</button>
									</div>
								<?php } ?>
								<!-- 应聘收藏 -->
								<a name="yps"></href> 
								<div id="yingpins">
								<?php if(is_array($list_yps)): foreach($list_yps as $key=>$lists): ?><li>
										<div class="xialai">
											<span class="xll1">

												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="spxx">
											<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>" alt="" /><?php endif; ?>
											<p class="spxx_01"><?php echo ($lists["username"]); ?></p>
											<p class="spxx_02"></p>
											<p class="spxx_03">应聘收藏</p>
											<div class="spxx_img">
													<img src="/matouPCS/Public/Home/img/heart.png" />
												</div>
											<p class="spxx_04">
												收藏
											</p>
										</div>
										<div class="spxx_sj">
											<p class="spxx_sj_r">2016-12-12</p>
										</div>
									</li><?php endforeach; endif; ?>
								</div>
									<?php if(!empty($list_yps)){ ?>
									<div class="djjzgd">
									<button onclick="tj3()" name='btnt1' id='btnt1' >点击加载更多</button>
									</div>
								<?php } ?>
								<!-- 应赏收藏 -->
									<a name="yss"></href> 
								<div id="yingshangs">
								<?php if(is_array($list_yss)): foreach($list_yss as $key=>$lists): ?><li>
										<div class="xialai">
											<span class="xll1">

												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="spxx">
											<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>" alt="" /><?php endif; ?>
											<p class="spxx_01"><?php echo ($lists["username"]); ?></p>
											<p class="spxx_02"></p>
											<p class="spxx_03">应赏收藏</p>
											<div class="spxx_img">
													<img src="/matouPCS/Public/Home/img/heart.png" />
												</div>
											<p class="spxx_04">
												收藏
											</p>
										</div>
										<div class="spxx_sj">
											<p class="spxx_sj_r">2016-12-12</p>
										</div>
									</li><?php endforeach; endif; ?>
									</div>
									<?php if(!empty($list_yss)){ ?>
									<div class="djjzgd">
									<button onclick="tj4()" name='btnt2' id='btnt2' >点击加载更多</button>
									</div>
								<?php } ?>
								<!-- 报名悬赏 -->
								<a name="xsb"></href> 
								<?php $num = 0; ?>
								<div id="xuanshangb">
								<?php if(is_array($arr)): foreach($arr as $key=>$arrs): ?><li id="zp<?php echo ($num); ?>">
										<div class="xialai">
											<span class="xll1">
												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="xqxx">
											<p class="xqxx_01_01">活动时间：<?php echo ($arrs["time"]); ?></p>
											<p class="xqxx_01_02">活动地点：<?php $xx = explode(',',$arrs['address']);echo $xx[0];?></p>
											<p class="xqxx_01_03">悬赏内容：<?php echo ($arrs['xs']['type']); ?></p>
											<p class="xqxx_01_03">报名悬赏</p>
											<p class="xqxx_01_04">未完成</p>
										</div>
										<!--下拉隐藏开始-->
										<div class="yhmc <?php echo ($num); ?>" id="yhmc<?php echo ($num); ?>">
											<dl>
												<div>
												<?php
 for ($i=0; $i < count($arrs['xs']['uu']); $i++) { ?>
													<dd>
														<!-- <a href=""> -->
															<div id="xl_01" class="yhmc_01">
							                                   <?php  if($arrs['xs']['uu'][$i]['imagename'] == ''){ ?>
							                                    	<img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
							                                	<?php }else{ ?>
							                                	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($arrs['xs']['uu'][$i]['imagename']); ?>" alt="" />
							                                	<?php } ?>
																<p class="yhmc_01_01"><?php echo '用户'.$arrs['xs']['uu'][$i]['username']; ?></p>
																<!-- <p class="yhmc_01_01">1年经验</p> -->
																<p class="yhmc_01_02"></p>
																<p class="yhmc_01_03">报名</p>
																<p class="yhmc_01_04">期望赏金：私聊</p>
																<p class="yhmc_01_04">电话号码：<span id="dh<?php echo $arrs['xs']['uu'][$i]['id'];?>"><?php echo substr($arrs['xs']['uu'][$i]['tel'],0,3).'XXXX'. substr($arrs['xs']['uu'][$i]['tel'],7,11); ?></span></p>
																<input type="hidden" id="xp<?php echo $arrs['xs']['uu'][$i]['id']; ?>" value="<?php echo $arrs['xs']['uu'][$i]['tel']?>">
																<button id="btn_c_01" class="yhmc_01_05" onclick="jj(<?php echo $arrs['xs']['wid']; ?>,<?php echo $arrs['xs']['uu'][$i]['id']; ?>);" >拒接</button>
																<button id="btn_c_02" class="yhmc_01_05" onclick="dl(<?php echo $arrs['xs']['wid']; ?>,<?php echo $arrs['xs']['uu'][$i]['id']; ?>);" >电聊</button>
																<div class="clear"></div>
																<div class="yhmc-date">
																	<span>2012-12-12</span>
																</div>
															</div>
															</dd>
													<script type="text/javascript">
													// //拒绝
													function jj(wid,uid){
														if(window.confirm('确定要拒绝么？')){
																$.ajax({
																	url:'?s=/Home/User/xqxx_sf/wid/'+wid+'/uid/'+uid,
																	type:'get',
																	success:function(data){
																		alert(data);
																	},error:function(){
																		alert('ajax请求失败');
																	}
																});
															}
													}
													//电聊
													function dl(wid,uid){
														alert(222);
														if(window.confirm('确定耗费5个码头币来查看么？')){
															$('#dh'+uid).html($('#xp'+uid).val());
														}
													}
												</script>

														<!-- </a> -->
													
												<?php  } ?>
												</div>
												
											</dl>
											<div class="showmore">
												<a id="xx_01<?php echo ($num); ?>" onclick="xx_01(<?php echo ($num); ?>)" href="javascript:;">
													<div class="ckxq">
														<img src="/matouPCS/Public/Home/img/xiala.png" />
													</div>
													<span>查看详情</span>
												</a>

											</div>

											<div class="clearfloat"></div>
										</div>
									</li>
									<?php $num++; endforeach; endif; ?>
								</div>
								<?php if(!empty($arr)){ ?>
									<div class="djjzgd">
									<button onclick="tj5()" name='btnt3' id='btnt3' >点击加载更多</button>
									</div>
								<?php } ?>
								<!-- 报名招聘 -->
								<a name="zpb"></href> 
								<?php $num_zp = 100; ?>
								<div id="zhaopinb">
								<?php if(is_array($arr_zp)): foreach($arr_zp as $key=>$arr_zps): ?><li>
									<div class="xialai">
										<span class="xll1">
											<p class="xs1">删除</p>
										</span>
									</div>
									<div class="xqxx">
										<!-- <p class="xqxx_01_01">活动时间：<?php echo ($arrs["time"]); ?></p> -->
										<p class="xqxx_01_02">工作地点：<?php $xx = explode(',',$arr_zps['address_zp']);echo $xx[0];?></p>
										<p class="xqxx_01_03">招聘内容：<?php echo ($arr_zps['xs']['type']); ?></p>
										<p class="xqxx_01_03">报名招聘</p>
										<p class="xqxx_01_04">未完成</p>
									</div>

									<!--下拉隐藏开始-->
									<div class="yhmc" id="yhmc<?php echo ($num_zp); ?>">
										<dl>
											<!--<dd></dd>-->
												<div>
											<?php for ($i=0; $i < count($arr_zps['xs']['uu']); $i++) {?>
												<dd>
													<!-- <a href=""> -->
														<div id="xl_01" class="yhmc_01">
														<?php  if($arr_zps['xs']['uu'][$i]['imagename'] == ''){ ?>
						                                    	<img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
						                                	<?php }else{ ?>
						                                	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($arr_zps['xs']['uu'][$i]['imagename']); ?>" alt="" />
						                                	<?php } ?>
														<p class="yhmc_01_01"><?php echo $arr_zps['xs']['uu'][$i]['username'];?></p>
														<p class="yhmc_01_02"></p>
														<p class="yhmc_01_03">报名</p>
														<p class="yhmc_01_04">电话号码：<span id="dhzp<?php echo $arr_zps['xs']['uu'][$i]['id'];?>"><?php echo substr($arr_zps['xs']['uu'][$i]['tel'],0,3).'XXXX'. substr($arr_zps['xs']['uu'][$i]['tel'],7,11); ?></span></p>
																<input type="hidden" id="xpzp<?php echo $arr_zps['xs']['uu'][$i]['id']; ?>" value="<?php echo $arr_zps['xs']['uu'][$i]['tel']?>">
														<button id="btn_c_01" class="yhmc_01_05" onclick="jjzp(<?php echo $arr_zps['xs']['id']?>,<?php echo $arr_zps['xs']['uu'][$i]['id']?>)">拒接</button>

														<button id="btn_c_02" class="yhmc_01_05" onclick="dlzp(<?php echo $arr_zps['xs']['uu'][$i]['id']; ?>)">电聊</button>
														<div class="clear"></div>
														<div class="yhmc-date">
															<span>2012-12-12</span>
														</div>
													</div>
													<!-- </a> -->

												</dd>
												<script type="text/javascript">
													function jjzp(xid,id){
														if(window.confirm('确定要拒绝么？')){
																$.ajax({
																	url:'?s=/Home/User/xqxx_sf_zp/xid/'+xid+'/id/'+id,
																	type:'get',
																	success:function(data){
																		alert(data);
																	},error:function(){
																		alert('ajax请求失败');
																	}
																});
															}
													}
													function dlzp(id){
														alert(id);
														if(window.confirm('确定耗费5个码头币来查看么？')){
															$('#dhzp'+id).html($('#xpzp'+id).val());
														}
													}
												</script>
											<?php } ?>
											</div>
										</dl>
										
										<div class="showmore">
											<a id="xx_01<?php echo ($num_zp); ?>" onclick="xx_01(<?php echo ($num_zp); ?>)" href="javascript:;">
												<div class="ckxq">
													<img src="/matouPCS/Public/Home/img/xiala.png" />
												</div>
												<span>查看详情</span>
											</a>

										</div>

										<div class="clearfloat"></div>
									</div>
								</li>
								<?php $num_zp++; endforeach; endif; ?>
							</div>
							<?php if(!empty($arr_zp)){ ?>
									<div class="djjzgd">
								<button onclick="tj6()" name='btnt4' id='btnt4' >点击加载更多</button>
									</div>
								<?php } ?>
							<!-- 报名求购 -->
							<a name="qgb"></href> 
							<?php $numqg = 200; ?>
								<div id="qiugoub">
								<?php if(is_array($arr_qg)): foreach($arr_qg as $key=>$arr_qgs): ?><li>
										<div class="xialai">
											<span class="xll1">
												<p class="xs1">删除</p>
											</span>
										</div>
										<div class="xqxx">
											<p class="xqxx_01_01">发布时间：<?php echo ($arr_qgs['date']); ?></p>
											<p class="xqxx_01_02">地点：<?php echo ($arr_qgs['address']); ?></p>
											<p class="xqxx_01_03">求购内容：<?php echo ($arr_qgs['name']); ?></p>
											<p class="xqxx_01_03">报名求购</p>
											<p class="xqxx_01_04">未完成</p>
										</div>

										<!--下拉隐藏开始-->
										<div class="yhmc" id="yhmc<?php echo ($numqg); ?>">
											<dl>
												<!--<dd></dd>-->
												<div>
												<?php  for ($i=0; $i < count($arr_qgs['xs']); $i++) {?>
												<dd>
													<!-- <a href=""> -->
														<div id="xl_01" class="yhmc_01">
														<?php  if($arr_qgs['xs'][$i]['imagename'] == ''){ ?>
						                                    	<img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
						                                	<?php }else{ ?>
						                                	<img style="width:60px;" src="/matouPCS/Tu/upload/<?php echo ($arr_qgs['xs'][$i]['imagename']); ?>" alt="" />
						                                	<?php } ?>
														<p class="yhmc_01_01"><?php echo $arr_qgs['xs'][$i]['username']; ?></p>
														<!-- <p class="yhmc_01_01">1年经验</p> -->
														<!-- <p class="yhmc_01_02"></p> -->
														<p class="yhmc_01_03">报名</p>
														<p class="yhmc_01_04">电话号码：<span id="dhzp<?php echo $arr_qgs['xs'][$i]['id'];?>"><?php echo substr($arr_qgs['xs'][$i]['tel'],0,3).'XXXX'. substr($arr_qgs['xs'][$i]['tel'],7,11); ?></span></p>
																<input type="hidden" id="xpzp<?php echo $arr_qgs['xs'][$i]['id']; ?>" value="<?php echo $arr_qgs['xs'][$i]['tel']?>">
														<!-- <p class="yhmc_01_04">摄影师</p> -->
														<p class="yhmc_01_04">期望赏金：私聊</p>
														<button id="btn_c_01" class="yhmc_01_05" onclick="jjqg(<?php echo $arr_qgs['fid']?>,<?php echo $arr_qgs['xs'][$i]['id'];?>)">拒接</button>
														<button id="btn_c_02" class="yhmc_01_05" onclick="dlqg()">电聊</button>
														<div class="clear"></div>
														<div class="yhmc-date">
															<span>2012-12-12</span>
														</div>
													</div>
													<!-- </a> -->

												</dd>
												<script type="text/javascript">
													function jjqg(fid,uid){
														//fid为求购id  uid为报名用户的id
														if(window.confirm('确定要拒绝么？')){
																$.ajax({
																	url:'?s=/Home/User/xqxx_sf_qg/fid/'+fid+'/uid/'+uid,
																	type:'get',
																	success:function(data){
																		alert(data);
																	},error:function(){
																		alert('ajax请求失败');
																	}
																});
															}
													}
													function dlqg(){
														alert('电聊求购');
													}
												</script>
												<?php } ?>
												</div>
											</dl>
											<div class="showmore">
												<a id="xx_01<?php echo ($numqg); ?>" onclick="xx_01(<?php echo ($numqg); ?>)" href="javascript:;">
													<div class="ckxq">
														<img src="/matouPCS/Public/Home/img/xiala.png" />
													</div>
													<span>查看详情</span>
												</a>

											</div>

											<div class="clearfloat"></div>
										</div>

									</li>
									<?php $numqg++; endforeach; endif; ?>
									</div>
									<?php if(!empty($arr_qg)){ ?>
									<div class="djjzgd">
										<button onclick="tj7()" name='btnt5' id='btnt5' >点击加载更多</button>
									</div>
								<?php } ?>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="clearfloat"></div>
				<!-- <div class="djjzgd">
					<button>点击加载更多</button>
				</div> -->
			</div>
		</section>
		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank-footer.css" />
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
										<h4>喜事码头客服热线</h4>
										<p>工作时间:每天9:00-23:00</p>
										<p>188-8888-888</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h4>关注喜事码头微信公众号</h4>
										<p>
											<img src="/matouPCS/Public/Home/img/erweima_top.png" />
										</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h4>关于我们</h4>
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
										<h4>联系我们</h4>
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
							<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<p><a href="http://www.miitbeian.gov.cn">豫ICP备16015506号</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script type="text/javascript">

	  var v=2;
	  function  tj(){		 
		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/xianzhijz",
					data:{k:v},
					beforeSend:function(){
			         $("#xianzhi").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data['xz']);
						if(data['xz']!=null){				
							
							 for (var i = 0; i < data['xz'].length; i++) {
								 if(data['xz'][i].imagename==null) {
                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
								 }else{
								var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['xz'][i].imagename+'" />';
								 }
								 var p='';
								 for (var j= 0; j < data['xzh'].length; j++) {
									 if(data['xz'][i].id==data['xzh'][j].tid){
										 if(data['xzh'][j].imagename==null) {
				                                var imgs='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
												 }else{
												var imgs='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['xzh'][j].imagename+'" />';
												 }
									 p+='<div class="spxx">'+imgs+'<p class="spxx_01">'+data['xzh'][j].username+'</p><p class="spxx_02"></p><form><p class="spxx_03"> 回复 </p></form></div><div class="spxx_00"><p>'+data['xzh'][j].content_hf+'</p></div>';
									 }
								 }
								 var li = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="spxx">'+img+'<p class="spxx_01">'+data['xz'][i].username+'</p><p class="spxx_02"></p><form><p class="spxx_03"> 闲置留言 </p></form></div><div class="spxx_00"><p> '+data['xz'][i].content_xx+'</p></div> '+p+'<div class="spxx_sj"><p class="spxx_sj_r">2016-12-12</p><p class="spxx_hf"> 回复 </p></div><div class="no"><input type="hidden" id="uid" value="'+data['xz'][i].uid+'"><textarea id="liuyan" placeholder="留言留言留言留言留言留言"></textarea><button class="hf" onclick="liuyan_xz1('+data['xz'][i].id+','+data['xz'][i].uid+')">回复</button><div class="clear"></div></div></li>';
								// alert(p);
							$("#xianzhi").append(li);
							$('.spxx_hf').click(function() {
								$(this).parents('li').children('.no').show();
							});
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnn').innerHTML = '加载完毕';
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
	  
	  var b=2;
	  function  tj1(){		 
		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/qiugoujz",
					data:{k:b},
					beforeSend:function(){
			         $("#qiugou").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data['xz']);
						if(data['qg']!=null){				
							
							 for (var i = 0; i < data['qg'].length; i++) {
								 if(data['qg'][i].imagename==null) {
                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
								 }else{
								var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['qg'][i].imagename+'" />';
								 }
								 var p='';
								 for (var j= 0; j < data['qgh'].length; j++) {
									 if(data['qg'][i].id==data['qgh'][j].tid){
										 if(data['qgh'][j].imagename==null) {
				                                var imgs='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
												 }else{
												var imgs='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data['qgh'][j].imagename+'" />';
												 }
									 p+='<div class="spxx">'+imgs+'<p class="spxx_01">'+data['qgh'][j].username+'</p><p class="spxx_02"></p><form><p class="spxx_03"> 回复 </p></form></div><div class="spxx_00"><p>'+data['xzh'][j].content_hf+'</p></div>';
									 }      
								 }
								 var li = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="spxx">'+img+'<p class="spxx_01">'+data['qg'][i].username+'</p><p class="spxx_02"></p><form><p class="spxx_03"> 求购留言 </p></form></div><div class="spxx_00"><p> '+data['qg'][i].content_xx+'</p></div> '+p+'<div class="spxx_sj"><p class="spxx_sj_r">2016-12-12</p><p class="spxx_hf"> 回复 </p></div><div class="no"><textarea id="liuyan_qg" placeholder="留言留言留言留言留言留言"></textarea><button class="hf" onclick="liuyan_qg1('+data['qg'][i].id+','+data['qg'][i].uid+')">回复<div class="clear"></div></div></li>';
							$("#qiugou").append(li);
							$('.spxx_hf').click(function() {
								$(this).parents('li').children('.no').show();
							});
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
	  function  tj2(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/qiugousjz",
					data:{k:n},
					beforeSend:function(){
			         $("#qiugous").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
					//alert(data);
						if(data!=null){				
							
							 for (var i = 0; i < data.length; i++) {
								 if(data[i].imagename==null) {
                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
								 }else{
								var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i].imagename+'" />';
								 }
			
								 var li = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="spxx"> '+img+'<p class="spxx_01">'+data[i].username+'</p><p class="spxx_02"></p><p class="spxx_03">求购收藏</p><div class="spxx_img"><img src="/matouPCS/Public/Home/img/heart.png" /></div><p class="spxx_04"> 收藏 </p></div><div class="spxx_sj"><p class="spxx_sj_r">2016-12-12</p></div></li>';
							$("#qiugous").append(li);
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt').innerHTML = '加载完毕';
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
	  

	  var q=2;
	  function  tj3(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/yingpinsjz",
					data:{k:q},
					beforeSend:function(){
			         $("#yingpins").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
					//	alert(data);
						if(data!=null){				
							
							 for (var i = 0; i < data.length; i++) {
								 if(data[i].imagename==null) {
                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
								 }else{
								var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i].imagename+'" />';
								 }
			
								 var li = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="spxx"> '+img+'<p class="spxx_01">'+data[i].username+'</p><p class="spxx_02"></p><p class="spxx_03">应聘收藏</p><div class="spxx_img"><img src="/matouPCS/Public/Home/img/heart.png" /></div><p class="spxx_04"> 收藏 </p></div><div class="spxx_sj"><p class="spxx_sj_r">2016-12-12</p></div></li>';
							$("#yingpins").append(li);
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt1').innerHTML = '加载完毕';
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
	  var m=2;
	  function  tj4(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/yingshangsjz",
					data:{k:m},
					beforeSend:function(){
			         $("#yingshangs").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data);
						if(data!=null){				
							
							 for (var i = 0; i < data.length; i++) {
								 if(data[i].imagename==null) {
                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
								 }else{
								var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i].imagename+'" />';
								 }
			
								 var li = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="spxx"> '+img+'<p class="spxx_01">'+data[i].username+'</p><p class="spxx_02"></p><p class="spxx_03">应赏收藏</p><div class="spxx_img"><img src="/matouPCS/Public/Home/img/heart.png" /></div><p class="spxx_04"> 收藏 </p></div><div class="spxx_sj"><p class="spxx_sj_r">2016-12-12</p></div></li>';
							$("#yingshangs").append(li);
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt2').innerHTML = '加载完毕';
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
	  var g=2;
	  function  tj5(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/xuanshangbjz",
					data:{k:g},
					beforeSend:function(){
			         $("#xuanshangb").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data);
						if(data!=null){				
							var $num=3;
						
							 for (var i = 0; i < data.length; i++) {
									var p='';
								//	 alert(data.length);
								 for (var j = 0; j < data[i]['xs']['uu'].length; j++) {
										if(data[i]['xs']['uu'][j]!=null){
									 if(data[i]['xs']['uu'][j].imagename==null) {
			                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
											 }else{
											var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i]['xs']['uu'][j].imagename+'" />';
											 }
									 var s=data[i]['xs']['uu'][j].tel;
									 var tel=s.substr(0,3)+'xxxx'+s.substr(7,11);
									p+='<dd><div id="xl_01" class="yhmc_01"> '+img+'<p class="yhmc_01_01">'+data[i]['xs']['uu'][j].username+'</p><p class="yhmc_01_02"></p><p class="yhmc_01_03">报名</p><p class="yhmc_01_04">期望赏金：私聊</p><p class="yhmc_01_04">电话号码：<span id="dh'+data[i]['xs']['uu'][j].id+'">'+tel+'</span></p><input type="hidden" id="xp'+data[i]['xs']['uu'][j].id+'" value="'+data[i]['xs']['uu'][j].tel+'"><button id="btn_c_01" class="yhmc_01_05" onclick="jj('+data[i]['xs'].wid+','+data[i]['xs']['uu'][j].id+');" >拒接</button><button id="btn_c_02" class="yhmc_01_05" onclick="dl('+data[i]['xs'].wid+','+data[i]['xs']['uu'][j].id+');" >电聊</button><div class="clear"></div><div class="yhmc-date"><span>2012-12-12</span></div></div></dd>';
								 }
								 }
								 var li = '<li id="zp'+$num+'"><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="xqxx"><p class="xqxx_01_01">活动时间：'+data[i].time+'</p><p class="xqxx_01_02">活动地点：'+data[i].address+'</p><p class="xqxx_01_03">悬赏内容：'+data[i]['xs'].type+'</p><p class="xqxx_01_03">报名悬赏</p><p class="xqxx_01_04">未完成</p></div><!--下拉隐藏开始--><div class="yhmc <?php echo ($num); ?>" id="yhmc<?php echo ($num); ?>"><dl><div> '+p+'</div></dl><div class="showmore"><a id="xx_01<?php echo ($num); ?>" onclick="xx_01(<?php echo ($num); ?>)" href="javascript:;"><div class="ckxq"><img src="/matouPCS/Public/Home/img/xiala.png" /></div><span>查看详情</span></a></div><div class="clearfloat"></div></div></li>';
								 
								 $("#xuanshangb").append(li);
		 	
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt3').innerHTML = '加载完毕';
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
	  var a=2;
	  function  tj6(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/zhaopinbjz",
					data:{k:a},
					beforeSend:function(){
			         $("#xuanshangb").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data);
						if(data!=null){				
							var $num=0;
						
							 for (var i = 0; i < data.length; i++) {
									var p='';
								//	 alert(data.length);
								 for (var j = 0; j < data[i]['xs']['uu'].length; j++) {
										if(data[i]['xs']['uu'][j]!=null){
									 if(data[i]['xs']['uu'][j].imagename==null) {
			                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
											 }else{
											var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i]['xs']['uu'][j].imagename+'" />';
											 }
									 var s=data[i]['xs']['uu'][j].tel;
									 var tel=s.substr(0,3)+'xxxx'+s.substr(7,11);
									p+='<dd><div id="xl_01" class="yhmc_01"> '+img+'<p class="yhmc_01_01">'+data[i]['xs']['uu'][j].username+'</p><p class="yhmc_01_02"></p><p class="yhmc_01_03">报名</p><p class="yhmc_01_04">期望赏金：私聊</p><p class="yhmc_01_04">电话号码：<span id="dhzp'+data[i]['xs']['uu'][j].id+'">'+tel+'</span></p><input type="hidden" id="xpzp'+data[i]['xs']['uu'][j].id+'" value="'+data[i]['xs']['uu'][j].tel+'"><button id="btn_c_01" class="yhmc_01_05" onclick="jjzp('+data[i]['xs'].wid+','+data[i]['xs']['uu'][j].id+');" >拒接</button><button id="btn_c_02" class="yhmc_01_05" onclick="dlzp('+data[i]['xs']['uu'][j].id+');" >电聊</button><div class="clear"></div><div class="yhmc-date"><span>2012-12-12</span></div></div></dd>';
								 }
								 }
								 var li = '<li "><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="xqxx"> <p class="xqxx_01_02">工作地点：'+data[i].address_zp+'</p><p class="xqxx_01_03">招聘内容：'+data[i]['xs'].type+'</p><p class="xqxx_01_03">报名招聘</p><p class="xqxx_01_04">未完成</p></div><!--下拉隐藏开始--><div class="yhmc <?php echo ($num); ?>" id="yhmc<?php echo ($num); ?>"><dl><div> '+p+'</div></dl><div class="showmore"><a id="xx_01<?php echo ($num); ?>" onclick="xx_01(<?php echo ($num); ?>)" href="javascript:;"><div class="ckxq"><img src="/matouPCS/Public/Home/img/xiala.png" /></div><span>查看详情</span></a></div><div class="clearfloat"></div></div></li>';
								 
								 $("#zhaopinb").append(li);
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt4').innerHTML = '加载完毕';
			 				flag=true;	
						}	
			 },
			 	complete:function(){
			           $("#load").remove();
					},
				 	dataType:'json'
				 	});
			 	a++;
		// alert(p);
		  } 
	  var s=2;
	  function  tj7(){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"?s=/Home/User/qiugoubjz",
					data:{k:s},
					beforeSend:function(){
			         $("#xuanshangb").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
					
						if(data!=null){				
							var $num=1245;
						
							 for (var i = 0; i < data.length; i++) {
									var p='';
								//	 alert(data.length);
								 for (var j = 0; j < data[i]['xs'].length; j++) {
										if(data[i]['xs'][j]!=null){
									 if(data[i]['xs'][j].imagename==null) {
			                                var img='<img src="/matouPCS/Public/Home/img/yhmc.png"/>';
											 }else{
											var img='<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i]['xs'][j].imagename+'" />';
											 }
									 var s=data[i]['xs'][j].tel;
									 var tel=s.substr(0,3)+'xxxx'+s.substr(7,11);
									p+='<dd><div id="xl_01" class="yhmc_01"> '+img+'<p class="yhmc_01_01">'+data[i]['xs'][j].username+'</p><p class="yhmc_01_02"></p><p class="yhmc_01_03">报名</p><p class="yhmc_01_04">期望赏金：私聊</p><p class="yhmc_01_04">电话号码：<span id="dhzp'+data[i]['xs'][j].id+'">'+tel+'</span></p><input type="hidden" id="xpzp'+data[i]['xs'][j].id+'" value="'+data[i]['xs'][j].tel+'"><button id="btn_c_01" class="yhmc_01_05" onclick="jjqg('+data[i].fid+','+data[i]['xs'][j].id+');" >拒接</button><button id="btn_c_02" class="yhmc_01_05" onclick="dlqg();" >电聊</button><div class="clear"></div><div class="yhmc-date"><span>2012-12-12</span></div></div></dd>';
								 }
								 }
								 var li = '<li id="zp'+$num+'"><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="xqxx"><p class="xqxx_01_01">发布时间：'+data[i].date+'</p><p class="xqxx_01_02">地点：'+data[i].address+'</p><p class="xqxx_01_03">求购内容：'+data[i].name+'</p><p class="xqxx_01_03">报名求购</p><p class="xqxx_01_04">未完成</p></div><!--下拉隐藏开始--><div class="yhmc <?php echo ($num); ?>" id="yhmc<?php echo ($num); ?>"><dl><div> '+p+'</div></dl><div class="showmore"><a id="xx_01<?php echo ($num); ?>" onclick="xx_01(<?php echo ($num); ?>)" href="javascript:;"><div class="ckxq"><img src="/matouPCS/Public/Home/img/xiala.png" /></div><span>查看详情</span></a></div><div class="clearfloat"></div></div></li>';
									alert(li);
								 $("#qiugoub").append(li);
		 		
							 }
						}else{
							 //alert(22);
							 document.getElementById('btnt5').innerHTML = '加载完毕';
			 				flag=true;	
						}	
			 },
			 	complete:function(){
			           $("#load").remove();
					},
				 	dataType:'json'
				 	});
			 	s++;
		// alert(p);
		  } 
	 
	  </script>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/showWin.js"></script>
	<script src="/matouPCS/Public/Home/js/xqly.js"></script>
</html>