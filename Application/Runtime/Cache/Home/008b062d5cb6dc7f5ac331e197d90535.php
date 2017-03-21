<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>应赏区</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
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
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/logo.png" alt="喜事码头" />
								</a> 
							</div>
							<a href="?s=/Home/Xsdt">
								<div class="f2-l-2-f">
									<h1>悬赏大厅</h1>
								</div>
							</a>
							<div class="f2-l-3-f">
								<h1>应赏区</h1>
							</div>
						</div>
						<div class="s-f2-r-f">
							<div class="demo">
								<ul>
									<li><input type="text" id="tt" value="" class="text" autocomplete="off" /></li>
									<li><input type="submit" value="搜索" class="button" /></li>
									<li><button id="fbxq" type="submit" class="button2">发布需求</button></li>
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
				<img src="img/alert-close.png" />
			</div>
			<div class="fbxq-title">
				请选择您的需求
			</div>
			<div class="clear"></div>
			<ul>
				<li>
					<div class="fbxq-img">
						<img src="img/wyxs.png" />
					</div>
					<div class="fbxq-1f">
						悬赏
					</div>
					<div class="fbxq-2f">
						<span class="red">临时雇佣</span>
						主持人、摄影摄像师、化妆师、策划师等婚庆从业者
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="img/wyys.png" />
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
						<img src="img/wyzp.png" />
					</div>
					<div class="fbxq-1f">
						招聘
					</div>
					<div class="fbxq-2f">
						<span class="red">长期雇佣</span>
						摄影摄像师、化妆师、策划师、剪辑师、设计师、店长、营业员等婚庆从业者
					</div>
				</li>
				<li>
					<div class="fbxq-img">
						<img src="img/wyyp.png" />
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
						<img src="img/wyqg.png" />
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
						<img src="img/wyxz.png" />
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
						<p class="title">
							<a href="#">所有分类</a>>
							<span>找到相关100.5万相关结果</span>
						</p>
						<div class="clear"></div>
					</div>
					<div class="s-c-2f">
						<div id="filter">
							<dl id="type">
								<dt>职位</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>主持人</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄影师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>化妆师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>策划师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>灯光师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>音响师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>花艺师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>场布师</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>表演者</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>其他</a>
									</div>
								</dd>
							</dl>
							<dl id="sex">
								<dt>性别</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>女</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>男</a>
									</div>
								</dd>
							</dl>
							<dl id="ages">
								<dt>年龄</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>18-25岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>25-30岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>30-35岁</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>35岁以上</a>
									</div>
								</dd>
							</dl>
							<!-- <dl id="xz-price">
								<dt>价格</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div class="txjg">
										<input type="number">
										<span>-</span>
										<input type="number">&nbsp;元
										<button>
											ok
										</button>
									</div>
								</dd>
								<div class="clear"></div>
							</dl> -->
							<dl id="bd">
								<dt>类型</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>个人部队</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>认证部队</a>
									</div>
								</dd>
							</dl>
							<dl id="rq">
								<dt>档期</dt>
								<dd>
									<div class="gray" onclick="dq_tzh()">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div class="xz-date" >
										<input type="text" id="dt" readonly="readonly" placeholder="请选择活动时间">
									</div>
									<div class="sjxz">
										<div id="dd"></div>
									</div>
								</dd>
							</dl>
							<!-- <dl id="xz-dq">
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
							</dl> -->
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
					<div class="s-c-3f-2f" id="ajax_lists">
						
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-r-3f">
						<div>
							<a href="javascript://">
								<h2>推荐应赏</h2>
							</a>
							<div class="clear"></div>
						</div>
					</div>
					<div class="s-r-2f-f">
						<ul>
							<?php if(is_array($xxoo)): foreach($xxoo as $key=>$listn): ?><li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($listn["did"]); ?>">
										<div class="yp">
											<div class="xg">		
			                 <?php if($listn[imagename]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
                                      <?php else: ?>

                                      	<img src="/matouPCS/Tu/upload/<?php echo ($listn["imagename"]); ?>"   width="101" height="101" style="border-radius:50%"/><?php endif; ?>

												<div class="xg_01">
													<div class="xg_01_01">
														<p><?php echo ($listn["name"]); ?></p>
														<p><?php echo ($listn["age"]); ?>岁</p>
														<p><?php echo ($listn["type_d"]); ?></p>
													</div>
													<p class="xg_01_02">
														<span class="black-333">作品数量：</span> 5个
													</p>
													<p class="xg_01_03">
														<span class="black-333">个人简介：</span>
														<span class="text30"><?php echo ($listn["content"]); ?></span>
													</p>
												</div>
												<div class="clear"></div>
											</div>
											<div class="xg_02">
												<p class="xg_02_01">已有<?php echo ($listn["collect"]); ?>人收藏</p>
												<p class="xg_02_02"><?php echo ($listn["address"]); ?></p>
												<div class="clear"></div>
											</div>

										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<div class="clear"></div>
						</ul>
					</div>
					<div class="s-r-3f">
						<div>
							<a href="javascript://">
								<h2>推荐部队</h2>
							</a>
							<div class="clear"></div>
						</div>
					</div>
					<div class="s-r-4f">
						<ul>
							<!-- 推荐部队  -->
							<?php if(is_array($listnn)): foreach($listnn as $key=>$listnns): ?><li>
									<?php if($_SESSION['id'] == $listns['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($listnns["uid"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listnns["uid"]); ?>">
									<?php } ?>
										<div class="tj">
											<div class="tj-img">
											<?php if($listnns[logo]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
                                   <?php else: ?>
                                     <img style="border-radius:50%" width="101" height="101" src="/MatouPCS/Tu/upload/<?php echo ($listnns["logo"]); ?>"  /><?php endif; ?>
											
											</div>
											<div class="tj_01">
												<strong class="tj_01_01"><?php echo ($listnns["forcename"]); ?></strong>
												<p class="tj_01_02">
													<span class="black-333">部队类型：</span> <?php echo ($listnns["type"]); ?>
												</p>
												<p class="tj_01_02">
													<span class="black-333">粉丝数量：</span> 110
												</p>
												<p class="tj_01_02">
													<span class="black-333">所在地点：</span> <?php echo ($listnns["address"]); ?>
												</p>
											</div>
											<div class="clear"></div>
											<div>
												<p class="tj_01_04">
													<span class="black-333">主营产品：</span></span>
												</p>
											</div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<div class="clear"></div>
						</ul>

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
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/2rank.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/ys.js"></script>

</html>