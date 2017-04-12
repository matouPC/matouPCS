<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://xishimatou.com" charset="utf-8"></script>
	<script type="text/javascript"
	src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8" data-callback="true"></script>
	<body>
		<div class="show-bg"></div>
		<header>
			<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/header-index.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/indexstore.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/sinaFaceAndEffec.css" />
	</head>
	<body>
		<div class="show-bg"></div>
		<div class="h-c-1fwc">
				<div class="h-c-1fzy">
					<div class="h-f1-lzy">
						<div>
							<p class="center welcome">欢迎来到喜事码头官方网站
								<div class="small-position-top">
									<img src="/matouPCS/Public/Home/img/gray_small_position.png" />
								</div>
								<span id="xz-city" onclick="appendCity(this,'danxuan')" data-value=""></span>
							</p>
						</div>
					</div>
					<div class="h-f1-rzy">
						<ul>
							<li id="qqaj" style="width: 100px;">
								<?php if($_SESSION['username'] != ''){ ?>
								<a  class="xxlo" href="?s=/Home/User">用户<?php echo (substr($_SESSION['username'],0,5)); ?></a>
								<!-- <span><a href="javascript:void(0);" onclick="QC.Login.signOut();">退出</a></span> -->
								<?php }else{ ?>
								<a id="login-alert" href="#">请注册\登录</a>
								<?php } ?>

							</li>
							<li id="select-xx" style="width: 45px;">
								<?php if($_SESSION['id'] != ''){ ?>
								<a href="#">消息</a>
								<div class="news">
									<img src="/matouPCS/Public/Home/img/news.png" />
								</div>
								<div class="str"></div>
								<div class="select-xx">
								
									<ul>
										<li>	
											<a href="?s=/Home/User/xqxx">需求消息</a>
											<div class="newss">
												<img src="/matouPCS/Public/Home/img/news.png" />
											</div>
										</li>
										<li>
											<a href="?s=/Home/User/bdxx">部队消息</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">商铺消息</a>
										</li>
									</ul>
								</div>
								<?php }else{ ?>

								<a href="#" onclick="alert('请先登录')">消息</a>
								<div class="str"></div>
								<div class="select-xx" style="display:none;">
									<ul>
										<li>	
											<a href="?s=/Home/User/xqxx">需求消息</a>
										</li>
										<li>
											<a href="?s=/Home/User/bdxx">部队消息</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">商铺消息</a>
										</li>
									</ul>
								</div>
								<?php } ?>
							</li>
							<li style="width: 58px;">
								<?php if(empty($_SESSION['username'])){ ?>
									<a href="javascript:void(0)" onclick="alert('请先登录')">收藏报名</a>
								<?php }else{ ?>
									<a href="?s=/Home/User/scj">收藏报名</a>
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
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb" style="display:none;">
								
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
										<input type="hidden" id="codes" >							
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
									<div class="register-6f" id="submit">
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
				//    alert(tu);
				 //   alert(content);
				    $.ajax({  
				        type: "POST",  
				         url:"?s=/Home/user/usave1",
				         data: {content:content,type:types,tu:tu},  
				        success: function(data){ 
				        	
				        		 window.location.reload(true);//重新加载当前文挡 */
				  
	                	
				      
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
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
		<script src="/matouPCS/Public/Home/plupload/plupload.full.min.js"></script>
     	<script src="/matouPCS/Public/Home/js/header-index.js"></script>
		<script src="/matouPCS/Public/Home/js/index-alert-login.js"></script>
		<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://www.xishimatou.com;" charset="utf-8"></script>
	
	</body>
</html>

				<div class="h-content-main">
					<div class="h-main-c">
						<div class="h-c-2f">
							<div class="h-f2-l">
								<img alt="喜事码头" src="/matouPCS/Public/Home/img/logo.png" />
								<h1 class="none">喜事码头</h1>
							</div>
							<div class="h-f2-c">
								<div class="demo">
									<form action="?s=/Home/Sousuo/index" method="post" name="searchform" id="searchform" class="searchinfo">
										<ul>
											<li><input type="text" id="tt" name="sousuo" value="" class="text" placeholder="请输入您要查询的内容或关键字" autocomplete="off" /></li>
											<li><input type="submit" value="" class="button" /></li>
											<li class="clearfloat"></li>
										</ul>
									</form>
								</div>
								<div class="h-f2-c-dec">
									<a>热门搜索：</a>
									<a href="#">
										<strong>主持人</strong>
									</a>
									<a href="#">
										<strong>摄影师</strong>
									</a>
									<a href="#">
										<strong>策划师</strong>
									</a>
									<a href="#">
										<strong>摄影师</strong>
									</a>
									<a href="#">
										<strong>化妆师</strong>
									</a>
									<a href="#">
										<strong>场布师</strong>
									</a>
								</div>
							</div>
							<div class="h-f2-r">
								<p class="fwrx">24小时服务热线</p>
								<p class="fwrx-tel">188-8888-888</p>
							</div>
							<div class="clearf"></div>
						</div>
						<div class="h-c-3f">
							<div class="h-f3-c">
								<ul>
									<li>
										<a href="#" style="color: #ff5c5d; font-size: 18px; font-weight:bold;">首页</a>
									</li>
									<li>
										<a href="?s=/Home/Xsdt" id="xsdt-a">悬赏大厅</a>
									</li>
									<li>
										<a id="zpdt-a" href="?s=/Home/Zpdt1/index/type/0">招聘大厅</a>
									</li>
									<li>
										<a id="tzsc-a" href="?s=/Home/Tzsc">跳蚤市场</a>
									</li>
									<li>
										<a id="mtbd-a" href="?s=/Home/Mtbu">码头部队</a>
									</li>
									<li>
										<a id="mtsc-a" href="?s=/Home/Tjcs">码头商城</a>
									</li>
									<div class="clear"></div>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<nav>
					<div class="border"></div>
				</nav>
		</header>
		<div class="spdlc" id="spdlc" title="消息">
			<div class="titlenac">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhidec">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			<div class="fbtypec">
			</div>
			<div class="contentc">
					<a  href="?s=/Home/Xsdt/txxs/"><div class="cca" id="cca">个人</div></a>
				<div class="ccb" id="ccb">
					<a  href="?s=/Home/Xsdt/txxs/"><p class="ccrc">婚庆公司<br>影楼<br>工作室<br>表演团体</p></a>
				</div>
			</div>
			<div class="clear"></div>
			<div class="spfxb"></div>

			<div class="contentimg">
				<img src="/matouPCS/Public/Home/img/xzjs.png" />
			</div>
		</div>
		<section>
			<div class="s-conten-main">
				<div class="s-main-c">
					<div class="s-c-1f">
						<div class="s-f1-l">
							<div id="PicSlide">
								<ul class="img">
									<li style="display:list-item;">
										<a href="?s=/Home/Zpdt1"><img src="/matouPCS/Public/Home/img/banner_big01.png" width="980" ="450" /></a>
									</li>
									<li>
										<a href="?s=/Home/Tzsc"><img src="/matouPCS/Public/Home/img/banner_big02.png" width="980" height="450" /></a>
									</li>
									<li>
										<a href="?s=/Home/Xsdt"><img src="/matouPCS/Public/Home/img/banner_big03.png" width="980" height="450" /></a>
									</li>
									<li>
										<a href="?s=/Home/Ysq"><img src="/matouPCS/Public/Home/img/banner_big04.png" width="980" height="450" /></a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt"><img src="/matouPCS/Public/Home/img/banner_big05.png" width="980" height="450" /></a>
									</li>
									<li>
										<a href="?s=/Home/Tjcs"><img src="/matouPCS/Public/Home/img/banner_big06.png" width="980" height="450" /></a>
									</li>
								</ul>
								<div class="thumb">
									<ul>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small01.png" width="163" height="80" /></a>
										</li>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small02.png" width="163" height="80" /></a>
										</li>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small03.png" width="163" height="80" /></a>
										</li>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small04.png" width="163" height="80" /></a>
										</li>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small05.png" width="163" height="80" /></a>
										</li>
										<li>
											<a href=""><img src="/matouPCS/Public/Home/img/banner_small06.png" width="163" height="80" /></a>
										</li>
									</ul>
									<div class="now-status" style="/matouPCS/Public/Home/left:0px;"></div>
								</div>
							</div>
						</div>
						<div class="s-f1-r">
							<div class="s-f1-r-1f">
								<div class="center s-f1-r-1f-word">
									<p class="h2">发现更多好服务</p>
								</div>
									<div id="lqmtb" class="center">
										<div class="img"><img src="/matouPCS/Public/Home/img/M.png" alt="" /></div>
										<span id="lqmtbs">领取码头币</span>
										<input type="hidden" id="uuid" value="<?php echo ($_SESSION['id']); ?>">
									</div>
								<!--领取码头币开始-->
								<div class="gold-black" id="mts">
									<!-- <div class="gold-white">
										<div class="gold-title">
											<img src="/matouPCS/Public/Home/img/gold-title.png" />
										</div>
										<div id="vertical" class="brand vertical">
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold2.png" />
												<div class="info">
													15个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold1.png" />
												<div class="info">
													10个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold2.png" />
												<div class="info">
													20个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold1.png" />
												<div class="info">
													10个码头币
												</div>
											</a>
											<div class="fanpai">
												<div class="fanpai-xz">
													<img src="/matouPCS/Public/Home/img/fanpai.png" />
												</div>
												<p>
													（查看码头币规则）
												</p>
											</div>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold1.png" />
												<div class="info">
													10个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold2.png" />
												<div class="info">
													20个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold1.png" />
												<div class="info">
													30个码头币
												</div>
											</a>
											<a href="javascript://">
												<img alt="" src="/matouPCS/Public/Home/img/gold2.png" />
												<div class="info">
													15个码头币
												</div>
											</a>
											<div class="clear"></div>
											<div class="gold-close">
												<button id="gold-close">关闭</button>
											</div>
										</div>

										<div class="clear"></div>
									</div> -->
								</div>
								<!--领取码头币结束-->
							</div>
							<div class="s-f1-r-2f">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td >
											
											<?php if(empty($_SESSION['username'])){ ?>
											<a  href="#" onclick="alert('您还没有登录!')">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon01.png" alt="" />
											</div>
												<span class="s-f1-r-word">发布悬赏</span></a>
											<?php }else{ ?>
												<?php if(in_array($_SESSION['id'],$ren)){ ?>
												<a  id="findc" href="?s=/Home/Xsdt/txxs/">
													<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon01.png" alt="" />
											          </div>
												<span class="s-f1-r-word">发布悬赏</span></a>
												<?php }else{ ?>
												<a  id="findc" href="?s=/Home/Xsdt/txxs/">
												<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon01.png" alt="" />
											</div>
												<span class="s-f1-r-word">发布悬赏</span></a>
												<?php } ?>
												<!-- <span class="s-f1-r-word"><a href="?s=/Home/Xsdt/txxs">发布悬赏</a></span> -->
											<?php } ?>
										</td>
										<td>
											
											<?php if(empty($_SESSION['username'])){ ?>
											<a id="fbys" href="#" onclick="alert('您还没有登录!')">
                                           <div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon02.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应赏</span></a>
											
											<?php }else if(!empty($fbys)){ ?>
											<a href="#" onclick="alert('您已发布过应赏!')">
											    <div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon02.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应赏</span></a>
											<?php }else{ ?>
											<a id="fbys" href="?s=/Home/Ysq/txys">
											 <div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon02.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应赏</span></a>
											<?php } ?>
										</td>
									</tr>
									<tr>
										<td>
											
											<?php if(empty($_SESSION['username'])){ ?>
											<a id="fbzp" href="#" onclick="alert('您还没有登录!')">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon03.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布招聘</span></a>
											<?php }else{ ?>
											<a id="fbzp" href="?s=/Home/Zpdt/txzp">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon03.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布招聘</span></a>
											<?php } ?>
										</td>
										<td>
										
											<?php if(empty($_SESSION['username'])){ ?>
											<a id="fbyp" href="#" onclick="alert('您还没有登录!')">
												<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon04.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应聘</span></a>
											<?php }else if(!empty($fbyp)){ ?>
											<a href="#" onclick="alert('您已发布过应聘!')">
												<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon04.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应聘</span></a>
											<?php }else{ ?>
											<a id="fbyp" href="?s=/Home/Zpdt1/txyp">
												<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon04.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布应聘</span></a>
											<?php } ?>
										</td>
									</tr>
									<tr>
										<td>
											
											<?php if(empty($_SESSION['username'])){ ?>
											<a id="fbqg" href="#" onclick="alert('您还没有登录!')">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon05.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布二手求购</span></a>
											<?php }else{ ?>
											<a id="fbqg" href="?s=/Home/Tzsc/txqg">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon05.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布二手求购</span></a>
											<?php } ?>
										</td>
										<td>
											
											<?php if(empty($_SESSION['username'])){ ?>
											<a id="fbxz" href="#" onclick="alert('您还没有登录!')">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon06.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布二手闲置</span></a>
											<?php }else{ ?>
											<a id="fbxz" href="?s=/Home/Tzsc/txxz">
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon06.png" alt="" />
											</div>
											<span class="s-f1-r-word">发布二手闲置</span></a>
											<?php } ?>
										</td>
									</tr>
								</table>
							</div>
							<div class="s-f1-r-3f">
								<div class="s-f1-r-3f-wx center">
									<img src="/matouPCS/Public/Home/img/erweima_top.png" alt="" />
								</div>
								<p>关注喜事码头官方公众号</p>
								<p class="h2">有更多惊喜等着你哟</p>
							</div>
						</div>
						<div class="clearf"></div>
					</div>
					<div class="s-c-2f">
						<div id="xsdt" class="s-ft-f">
							<a href="?s=/Home/Xsdt"><div class="Catalog">
								<h2>悬赏大厅/</h2>
								<span>REWARD</span>
							</div></a>
							<div class="More">
								<p>
									<a href="?s=/Home/Xsdt">更多>></a>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="s-f2-l">
							<div class="s-f2-l">
								<ul>
									<li>
										<!-- 悬赏大厅遍历 -->
										<?php if(is_array($stu_one)): foreach($stu_one as $key=>$stuone): ?><a href="?s=/Home/xsdt/xqxs/id/<?php echo ($stuone['psid']); ?>">
												<div class="sxllist">
													<div class="sxultem1">
														<p style="color: #ff5c5d;">￥<?php echo ($stuone["price"]); ?></p>
														<p><?php echo ($stuone["time"]); ?></p>
														<p>需要：<?php echo ($stuone["type"]); ?></p>
													</div>
													<div class="sxultem2">
														<p>用户<?php echo (substr($stuone["username"],0,5)); ?>发布</p>
														<?php $add = explode(',',$stuone['address']); ?>
														<p style="font-size: 12px; float: right;padding-right: 10px;"><img src="/matouPCS/Public/Home/img/gray_small_position.png" />&nbsp;<?php echo ($add[0]); ?></p>
													</div>
												</div>
											</a><?php endforeach; endif; ?>
										<a class="clearf"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="s-f2-r">
							<div style="text-align: center" class="s-f2-r-1f">
								<h2>5秒发布悬赏</h2>
							</div>
							<div class="s-f2-r-2f">
								<p>发布一个需求</p>
								<p>得到多份解决</p>
							</div>
							<div class="s-f2-r-3f">
								<a href="?s=/Home/Xsdt/txxs"><div id="s-f2-r-button" class="button center">点击发布悬赏</div>
								<div id="s-f2-r-img" class="img center">
									<img id=tp src="/matouPCS/Public/Home/img/reword_gesture.png" style="position:absolute; left:0; top:0; border:0">
								</div></a>
							</div>
						</div>
						<div class="clearf"></div>
					</div>

					<div class="s-c-3f">
						<div id="zpdt" class="s-ft-f">

							<a href="?s=/Home/Zpdt1/index/type/0"><div class="Catalog">
								<h2>招聘大厅/</h2>
								<span>RECRUIT HALL</span>
							</div></a>
							<div class="More">
								<p>
									<a href="?s=/Home/Zpdt1">更多>></a>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="s-f3-r">
							<div class="s-f3-r-1f">招贤纳士</div>
							<div class="s-f3-r-2f">
								<ul class="s-f3-r-2f-l">
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_01.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_02.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_07.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_03.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_04.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_05.png" width="22" height="22">
										</div>
									</li>
									<li>
										<div style="width: 20px; height: 18px;">
											<img src="/matouPCS/Public/Home/img/icon_06.png" width="22" height="22">
										</div>
									</li>
								</ul>
								<ul class="s-f3-r-2f-r">
									<li>
										<a href="?s=/Home/Zpdt1/index/type/1">经理/店长</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/2">营业员</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/3">化妆师</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/4">数码师/设计</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/5">视频剪辑师</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/6">摄像师</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/7">摄影师</a>
									</li>
									<li>
										<a href="?s=/Home/Zpdt1/index/type/8">策划师</a>
									</li>
								</ul>
							</div>
							<div class="s-f3-r-3f">
								<div class="center ljyp">
								<a href="?s=/Home/Zpdt1/index/type/0">立即应聘</a>
								</div>
							</div>
						</div>
					<div class="s-f3-l">
							<ul>
								<div class="border">
									<?php if(is_array($zpbd)): foreach($zpbd as $key=>$zpbds): ?><li>
									<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($zpbds["rid"]); ?>">
										<div class="logo">
										<?php if($zpbds[logo]==''): ?><img src="/matouPCS/Public/Home/img/LOGO-zp.png" />
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 80px"  src="/Tu/upload/<?php echo ($zpbds["logo"]); ?>"  /><?php endif; ?>
											
										</div>
										<div class="content-zp">
											<strong><?php echo ($zpbds["type"]); ?></strong>
											<p>
												<span><?php echo ($zpbds["price"]); ?></span>
												<?php echo ($zpbds["address"]); ?>
											</p>
											<p class="szcs"><?php echo ($zpbds["type_bd"]); ?></p>
										</div>
										<div class="clear"></div>
									</a>
								</li><?php endforeach; endif; ?>
								<div class="clear"></div>
								</div>
							</ul>
						</div>
						<div class="clear"></div>
						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx1.png" />
						</div>
						<div class="clearf"></div>
					</div>

					<div class="s-c-4f">
						<div id="mtbd" class="s-ft-f">
							<a href="?s=/Home/Mtbu">
							<div class="Catalog">
								<h2>码头部队/</h2>
								<span>WHARF FORCE</span>
							</div></a>
							<div class="More">
								<p>
									<a href="?s=/Home/Mtbu">更多>></a>
								</p>
							</div>
							<div class="clear"></div>
						</div>

						<div class="troops">
							<!-- 码头部队 -->
							<?php if(is_array($budui)): foreach($budui as $key=>$buduis): ?><div class="company">
									<p class="company_01_01"><img style="margin-left: 10px"  src="/matouPCS/Public/Home/img/sca.png" />关注<?php echo ($buduis["fen"]); ?></p>
									<div class="hp">
										<img src="/matouPCS/Public/Home/img/wharf_force_people.png">
									</div>
									<div class="company_01">
										<p class="company_01_02"><b><?php echo ($buduis["forcename"]); ?></b></p>

										<ul>
											<li>公司类型：</li>
											<li>
												<p><?php echo ($buduis["type_bd"]); ?></p>
											</li>
											<span><img src="/matouPCS/Public/Home/img/zb.png"><?php echo ($buduis["address"]); ?></span>
										</ul>
										<div class="company_02">
											<ul>
												<li><?php echo ($buduis["content"]); ?></li>
											</ul>
										</div>
									</div>
									<?php if($_SESSION['id'] == $buduis['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($buduis["uid"]); ?>">
											<div class="company_03">
												<p>查看详情</p>
											</div>
										</a>
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($buduis["uid"]); ?>">
											<div class="company_03">
												<p>查看详情</p>
											</div>
										</a>
									<?php } ?>

								</div>
								<div class="blank">
								</div><?php endforeach; endif; ?>
						</div>

						<div class="s-f4-r">
							<div class="s-f4-r-1f">
								码头部队
							</div>
							<div class="s-f4-r-2f">
								<ul>
									<li class="s-f4-r-2f-1">
										<a href="">
											<h4>部队类型</h4>
										</a>
									</li>
									<li class="s-f4-r-2f-2">
										<a href="">
											<h4>部队类型</h4>
										</a>
									</li>
								</ul>
								<ul>
									<li class="s-f4-r-2f-3">
										<a href="">
											<h4>部队类型</h4>
										</a>
									</li>
									<li class="s-f4-r-2f-1">
										<a href="">
											<h4>部队类型</h4>
										</a>
									</li>
								</ul>
							</div>
							<div class="s-f4-r-3f">
								<p class="p1">婚庆行业的</p>
								<p class="p2">专属“<span>微博</span>”</p>
								<p class="p3">分享你身边的</p>
								<p class="p3">婚礼喜事</p>
							</div>
							<div class="s-f4-r-4f">
							<a href="?s=/Home/Mtbu/rzbd"><div style="width: 110px; height: 35px;" class="center">
								立即加入
								</div></a>
							</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx2.png" />
						</div>
						<div class="clearf"></div>
					</div>

					<div class="s-c-5f">
						<div id="mtsc" class="s-ft-f">

							<a href="?s=/Home/Tjcs"><div class="Catalog">
								<h2>码头商城/</h2>
								<span>WHARF HALL</span>
							</div></a>

							<div class="More">
								<p>
									<a href="?s=/Home/Tjcs">更多>></a>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="s-f5-l">
							<div class="s-f5-l-1f">
								码头商城
							</div>
							<div class="s-f5-l-2f">
								<ul>
									<li class="s-f5-l-2f-1">
										<a href="">销售商</a>
									</li>
									<li class="s-f5-l-2f-2">
										<a href="">租赁商</a>
									</li>
								</ul>
								<ul>
									<li class="s-f5-l-2f-3">
										<a href="">销售租赁</a>
									</li>
									<li class="s-f5-l-2f-1">
										<a href="">婚车租赁</a>
									</li>
								</ul>
							</div>
							<div class="s-f5-l-3f">
								<p class="p1">婚庆供应商的</p>
								<p class="p2">专属“<span>地盘</span>”</p>
								<p class="p3">免费入驻</p>
								<p class="p4">全国宣传</p>
							</div>
							<div class="s-f5-l-4f">
									<div style="width: 110px; height: 35px;" class="center">
							<a href="?s=/Home/Tjcs/spcj" >立即入驻</a>
								</div>
							</div>
						
						</div>

						<div class="wharf">
							<ul class="mtsc">
								<?php if(is_array($shang)): foreach($shang as $key=>$shangs): ?><li>
										<a href="?s=/Home/Tjcs/spxq/id/<?php echo ($shangs["id"]); ?>">

											<div class="mtsc-cl">
												<img src="/matouPCS/Public/Home/img/picture.png" />
											</div>
											<div class="mtsc-cr">
												<p style="font-size: 16px;color: #5b5b5b;"><?php echo ($shangs["shopname"]); ?></p>
												<p >地址：<?php echo ($shangs["address"]); ?>&nbsp;</p>
												<p>类型：<?php echo ($shangs["type"]); ?></p>
											<div class="mtscc">
												<p>
													<?php echo ($shangs["zysp"]); ?>
												</p>
												<div class="clearf"></div>
												</div>
												<p style="float: right;width: 90px;margin-top: 10px;"><img src="/matouPCS/Public/Home/img/sca.png" />&nbsp;收藏<?php echo ($shangs["collect"]); ?></p>
											</div>
										</a>
									</li><?php endforeach; endif; ?>
							</ul>
						</div>

						<div class="clear"></div>
						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx3.png" />
						</div>
						<div class="clearf"></div>
					</div>

					<div class="s-c-6f">
						<div id="tzsc" class="s-ft-f">

							<a href="?s=/Home/Tzsc"><div class="Catalog">
								<h2>跳蚤市场/</h2>
								<span>FLEA MARKET</span>
							</div></a>
							<div class="More">
								<p>
									<a href="?s=/Home/Tzsc">更多>></a>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="s-f6-l">

							<ul class="tsul">
								<?php if(is_array($tiao)): foreach($tiao as $key=>$tiaos): if($tiaos['type'] == 2){ ?>
										<li>
										<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($tiaos["fid"]); ?>">
											<div class="tsuimg">
										<?php if($tiaos[imagename]==''): ?><img src="/matouPCS/Public/Home/img/flea_people.png" alt="" />
	                                   <?php else: ?>
	                                     	<img src="/Tu/upload/<?php echo ($tiaos["imagename"]); ?>" alt="" /><?php endif; ?>
                                    </if>
											
											</div>
											<div class="tscontent1">
												<div class="tscontent1-a">
													<p>闲置：<?php echo ($tiaos["name"]); ?></p>
													<p>预算：<span style="color:#ff5c5d">￥<?php echo ($tiaos["price"]); ?></span></p>
													<p style="font-size: 14px!important;"><img src="/matouPCS/Public/Home/img/gray_small_position.png" />&nbsp;<?php echo ($tiaos["address"]); ?></p>
												</div>
												<div class="tscontent1-b">
													<p>要求：<?php echo (substr($tiaos["content"],0,30)); ?></p>
												</div>
											</div>
											<div class="tscontent2">
												<?php $shou = explode(',',$tiaos['shou']); array_pop($shou); $shous = count($shou); ?>
												<p><img src="/matouPCS/Public/Home/img/fsx.png" />&nbsp;&nbsp;收藏人数<?php echo ($shous); ?>人</p>
											</div>
										</a>
									</li>
									<?php }else{ ?>
										<li>
										<a href="?s=/Home/Tzsc/xqqg/id/<?php echo ($tiaos["fid"]); ?>">
											<div class="tsuimg">
										<?php if($tiaos[imagename]==''): ?><img src="/matouPCS/Public/Home/img/flea_people.png" alt="" />
	                                   <?php else: ?>
	                                     	<img src="/Tu/upload/<?php echo ($tiaos["imagename"]); ?>" alt="" /><?php endif; ?>
                                    </if>
											</div>
											<div class="tscontent1">
												<div class="tscontent1-a">
													<p>求购：<?php echo ($tiaos["name"]); ?></p>
												    <p>预算：<span style="color:#ff5c5d">￥<?php echo ($tiaos["price"]); ?></span></p>
													<p style="font-size: 14px!important;"><img src="/matouPCS/Public/Home/img/gray_small_position.png" />&nbsp;<?php echo ($tiaos["address"]); ?></p>
												</div>
												<div class="tscontent1-b">
													<p>要求：<?php echo (substr($tiaos["content"],0,30)); ?></p>
												</div>
											</div>
											<div class="tscontent2">
												<?php $bao = explode(',',$tiaos['bao']); array_pop($bao); $baos = count($bao); ?>
												<p><img src="/matouPCS/Public/Home/img/fsx.png" />&nbsp;&nbsp;报名人数<?php echo ($baos); ?>人</p>
											</div>
										</a>
									</li>
									<?php } endforeach; endif; ?>
								<li class="clearf"></li>
							</ul>
						</div>
						<div class="s-f6-r">
							<div class="f6-l-o1">
								<ul>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>摄影器材</h3>
											</a>
										</div>
									</li>

									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_01.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>摄像器材</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_02.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>音响</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_03.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>灯光</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_04.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>婚纱</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_05.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>礼服</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_06.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>舞台桁架</h3>
											</a>
										</div>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_07.png" width="124" height="124"></a>
										<div>
											<a href="#">
												<h3>笔记本</h3>
											</a>
										</div>
									</li>
			                  	<div class="clear"></div>
								</ul>
							</div>
						</div>
						<div class="clearf"></div>
					</div>
					<div class="clearf"></div>
				</div>
			</div>
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
	<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.leoweather.min.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/indexstore.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<!-- <script src="/matouPCS/Public/Home/js/sousuo.js"></script> -->
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/mtb.js"></script>

</html>