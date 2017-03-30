<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>跳蚤市场</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
	</head>

	<body>
		<div class="show-bg"></div>
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
													 <img style="border-radius:50%;width: 30px"  src="/MatouPCS/Tu/upload/<?php echo ($_SESSION['imagename']); ?>"/> 
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
							<div class="s-f2-l-f">
								<div class="f2-l-1-f">
									<a href="indexstore.php">
										<img src="/matouPCS/Public/Home/img/logo.png" alt="喜事码头" />
									</a>
								</div>
								<div class="f2-l-3-f">
									<h1>跳蚤市场</h1>
								</div>

							</div>
							<div class="s-f2-r-f">
								<div class="demo">
									<ul>
										<li><input type="text" id="tt" value="" class="text" autocomplete="off" /></li>
										<li><input type="submit" value="搜索" class="button" /></li>
										<li><button id="fbxq" type="submit" class="button2">发布需求</button></li>
										<div class="clear"></div>
									</ul>
								</div>
							</div>
						</div>
						<div class="h-c-4f">
							<img src="/matouPCS/Public/Home/img/banner.png" />
						</div>
				</div>
			</div>
		</header>
		<!--发布需求-->
		<div class="fbxq">
			<div class="fbxq-close">
				<img src="/matouPCS/Public/Home/img/alert-close.png" />
			</div>
			<div class="fbxq-title">
				请选择您的需求
			</div>
			<div class="clear"></div>
			<ul>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyxs.png" />
					</div>
					<div class="fbxq-1f">
						悬赏
					</div>
					<div class="fbxq-2f">
						<span class="red">临时雇佣</span> 主持人、摄影摄像师、化妆师、策划师等婚庆从业者
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyys.png" />
					</div>
					<div class="fbxq-1f">
						应赏
					</div>
					<div class="fbxq-2f">
						主持人、摄影摄像师、化妆师、策划师等婚庆从业者发布
						<span class="red">兼职简历</span>
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyzp.png" />
					</div>
					<div class="fbxq-1f">
						招聘
					</div>
					<div class="fbxq-2f">
						<span class="red">长期雇佣</span> 摄影摄像师、化妆师、策划师、剪辑师、设计师、店长、营业员等婚庆从业者
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyyp.png" />
					</div>
					<div class="fbxq-1f">
						应聘
					</div>
					<div class="fbxq-2f">
						摄影摄像师、化妆师、策划师、剪辑师、设计师、店长、营业员等婚庆从业者发布
						<span class="red">全职简历</span>
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyqg.png" />
					</div>
					<div class="fbxq-1f">
						求购二手
					</div>
					<div class="fbxq-2f">
						如果您想要购买二手物品，点击这里填写求购要求，让卖家主动找到您
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="/matouPCS/Public/Home/img/wyxz.png" />
					</div>
					<div class="fbxq-1f">
						处理闲置
					</div>
					<div class="fbxq-2f">
						如果您想要出售你的闲置，点击这里填写闲置信息，让买家主动找到您
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		<section>
				<div class="s-main-c">
				<div class="s-main-l">
					<div class="s-c-1f">
						<a href="#">所有分类</a>>
						<a href="#">找到相关100.5万相关结果</a>
					</div>
					<div class="s-c-2f">
						<div id="filter">
							<dl id="type">
								<dt>类型</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>求购二手</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>出售闲置</a>
									</div>
								</dd>
							</dl>
							<dl id="wp">
								<dt>物品</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄影器材</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄像器材</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>音响</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>灯光</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>婚纱</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>礼服</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>舞台桁架</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>笔记本</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>其他</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>价格</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
									<dd>
									<div style="color: #000000;">
										<input type="number" id="nu1" style="width: 65px; margin-top: 17px; border: solid 1px #CCCCCC; float:left;">
										<span style="font-size:25px; display:block; width:20px; height:30px; color: #999999; float :left; margin-top:-1px; text-align:center;">-</span>
										<input type="number" id="nu2" style="width: 65px; margin-top: 15px;border: solid 1px #CCCCCC;">元
										<button style="outline: none; margin-left: 20px; background-color: #FF5C5D; border: 0; color: white; border-radius: 10px; width: 40px; height: 18px;" onclick="ok()">
											ok
										</button>
									</div>
								</dd>
							</dl>
							<dl id="xz-dq">
								<dt>地区</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<input type="text" id="xz-city" placeholder="请选择地区" readonly="readonly" value="" data-value="" onclick="appendCity(this,'danxuan')">
								</dd>
								<div class="clear"></div>
							</dl>
						</div>
						<div class="px">
							<p>排序：</p>
							<div class="hot">
								热门
							</div>
							<div class="new">
								最新
							</div>
						</div>
						<div class="clear"></div>
					</div>
				<div class="s-c-3f" id="lists">
			</div>
			
				</div>
				<div class="s-main-r">
					<div class="s-r-3f">
						<div>
							<a id="tjqg" href="javascript://">
								<h2>推荐求购</h2>
							</a>
							<div class="clear"></div>
						</div>
					</div>
					<div class="tab-r">
						<div class="s-r-2f">
							<ul>
									<?php if(is_array($listnew)): foreach($listnew as $key=>$listnews): ?><li>
									<a href="?s=/Home/Tzsc/xqqg/id/<?php echo ($listnews["fid"]); ?>">
										<div class="f2t">
											<div class="f2t-img">
													  <?php if($listnews[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" width="120" height="120">
                                      <?php else: ?>
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($listnews["imagename"]); ?>" style="border-radius:50%" width="120" height="120"/><?php endif; ?>
											</div>
											<p class="f2t_01">
													<?php if($lis[username]==$lis[tel]): ?>用户：<?php echo (substr($listnews["username"],0,5)); endif; ?>
								               <?php if($lis[username]!=$lis[tel]): ?>用户：<?php echo ($listnews["username"]); endif; ?></p></p>
										</div>
										<div class="f2r-ul-c1">
											<strong><?php echo ($listnews["name"]); ?></strong>
											<p class="right red">预算￥<?php echo ($listnews["price"]); ?>元</p>
											<div class="clear"></div>
										</div>
										<p class="user_01_03">
											<span class="black-333">商品介绍：</span>
											<span class="text69">
												<?php echo ($listnews["content"]); ?>
											</span>
										</p>
										<div class="f2r-ul-c2">
							<?php  $bao = explode(',',$lists['bao']); array_pop($bao); $baos = count($bao); ?>
				              	          <p class="left">已有<?php echo $baos;?>人报名</p>
										<p class="right"><?php echo ($listnews["address"]); ?></p>
											<div class="clear"></div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
								<div class="clear"></div>
							</ul>
						</div>
					</div>
					<div class="s-r-3f">
						<div>
							<a href="javascript://">
								<h2>推荐用户</h2>
							</a>
							<div class="clear"></div>
						</div>
					</div>
					<div class="s-r-4f">
						<ul>
							<?php if(is_array($user)): foreach($user as $key=>$users): ?><li>
								<a href="javascript:;">
									<div class="tj">
									<?php if($_SESSION['id'] == $users['uid']){ ?>
									  <?php if($users[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($users["uid"]); ?>">
								  <?php if($$users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>

                                      <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
								</a>
								<?php elseif($users[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($users["uid"]); ?>">	  <?php if($users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>

                                    <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
                                    </a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($users["uid"]); ?>">	  <?php if($users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>
                                        <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
                                    </a><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($users[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($users["uid"]); ?>">	  <?php if($users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>
                                         <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
                                    </a>
								<?php elseif($users[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($users["uid"]); ?>">	  <?php if($users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>
                                         <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
                                    </a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($users["uid"]); ?>">	  <?php if($users[imagename]==''): ?><div class="tj-img">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											</div>
                                      <?php else: ?>
                                         <div class="tj-img">
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($users["imagename"]); ?>"  style="border-radius:50%" width="101" height="101" />
                                  </div><?php endif; ?>
                                    </a><?php endif; ?>
                                       <?php } ?>
								
										
										<div class="tj_01">
											<strong class="tj_01_01">
											<?php if($users[username]==$users[tel]): ?>用户<?php echo (substr($users["username"],0,5)); endif; ?>
								               <?php if($users[username]!=$users[tel]): ?>用户<?php echo ($users["username"]); endif; ?></strong>
											<p class="tj_01_02" ><span class="black-333">粉丝数量：</span><b id="fen<?php echo ($users["id"]); ?>"><?php echo ($users["fen"]); ?></b></p>
											<p class="tj_01_02"><span class="black-333">所在地：</span><?php echo ($users["addre"]); ?>
											</p>
           
												<?php if(is_array($uus)): foreach($uus as $key=>$uuss): if($uuss['uid'] == $users['id']){ ?>
														<?php  $uu = explode(',',$uuss['fid']); array_pop($uu); if(in_array($_SESSION['id'],$uu)){ ?>
															<button id="btn<?php echo ($users["id"]); ?>"  onclick="change(<?php echo ($users["id"]); ?>)" class="tj_01_03 xs">已关注</button>
														<?php }else{ ?>
															<button id="btn<?php echo ($users["id"]); ?>"  onclick="change(<?php echo ($users["id"]); ?>)" class="tj_01_03 xs">关注</button>
														<?php } ?>
													<?php } endforeach; endif; ?>
										</div>
										<div class="clear"></div>
									</div>
								</a>
							</li><?php endforeach; endif; ?>
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
	
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
	<script src="/matouPCS/Public/Home/js/city-data.js"></script>
	<script src="/matouPCS/Public/Home/js/hzw-city-picker.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/tz.js"></script>
	<script src="/matouPCS/Public/Home/js/2rank.js"></script>
<script type="text/javascript">
function change(id) {
	//拿到被关注用户id 由于值会丢 决定选择使用cookie
    var mark = document.getElementById('btn'+id+'').innerHTML;
    var fen = parseInt(document.getElementById('fen'+id+'').innerHTML);
    if (mark == '关注') {
    	fen += 1;
    	$.ajax({
    		url:"?s=/Home/Index/guanzhu/id/"+id,
    		type:"get",
    		success:function(data){
    			// alert(data);
    			document.getElementById('btn'+id+'').innerHTML = "已关注";
    			document.getElementById('fen'+id+'').innerHTML = fen;
    		},error:function(){
    			alert('no');
    		}
    	});
    	
    }else{
    	fen -= 1;
    	$.ajax({
    		url:"?s=/Home/Index/qguan/id/"+id,
    		type:"get",
    		success:function(data){
    			document.getElementById('btn'+id+'').innerHTML = "关注";
    			document.getElementById('fen'+id+'').innerHTML = fen;
    			alert(data);
    		},error:function(){
    			alert('no');
    		}
    	});
		// document.getElementById('btn'+id+'').innerHTML = "关注"; 
    };
};
</script>
</html>