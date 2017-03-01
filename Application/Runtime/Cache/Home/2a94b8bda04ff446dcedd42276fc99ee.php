<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<!--		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />-->
		<!--IE7,8兼容-->
		<!--<meta http-equiv="x-ua-compatible" content="ie=7" />-->
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/index.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin.css" />

		<style>
			.h-f1-r ul li a .img {
				margin-top: 15px;
				margin-right: 10px;
				float: right;
			}
			
			.select-yfb {
				width: 70px;
				height: 0px;
				background-color: #f0f0f0;
				position: absolute;
				top: 35px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-yfb ul {
				width: 70px;
				height: 150px;
				overflow: hidden;
			}
			
			.select-yfb ul li {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			
			.select-yfb ul li a {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			
			.select-xx {
				width: 70px;
				height: 0px;
				background-color: #f0f0f0;
				position: absolute;
				top: 35px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-xx ul {
				width: 70px;
				height: 150px;
				overflow: hidden;
			}
			
			.select-xx ul li {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			
			.select-xx ul li a {
				width: 70px;
				height: 25px;
				line-height: 25px !important;
			}
			
			input,
			button,
			select,
			textarea {
				outline: none
			}
			
			textarea {
				resize: none
			}
		</style>
	</head>
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://xishimatou.com" charset="utf-8"></script>
<script type="text/javascript"
src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8" data-callback="true"></script>
	<body>
		<div class="show-bg"></div>
		<header>
			<div class="h-c-1fwc">
				<div class="h-c-1f">
					<div class="h-f1-l">
						<div>
							<p style="text-align: center;">欢迎来到喜事码头官方网站 <img src="/matouPCS/Public/Home/img/gray_small_position.png" /></p>
						</div>
					</div>
					<div class="h-f1-r">
						<ul>
							<li style="width: 100px;">
								<?php if($_SESSION['username'] != ''){ ?>
								<a  href="?s=/Home/User">用户<?php echo (substr($_SESSION['username'],0,5)); ?></a>
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
							<li style="width: 68px;">
								<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">我的商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">我的商铺</a>
							   <?php }else{ ?>	
							   <a href="#">我的商铺</a>
							   <?php } ?>
								<div class="str"></div>
							</li>
							<li style="width: 70px;">
								<a class="action" href="#" id="find">发动态</a>
								<div class="strf"></div>
							</li>
							<li class="clearf"></li>
						</ul>
					</div>
					<div class="clearf"></div>
				</div>
			</div>
			<div class="h-content-main">
				<div class="h-main-c">

					<div class="h-c-2f">
						<div class="h-f2-l">
							<img src="/matouPCS/Public/Home/img/logo.png" />
						</div>
						<div class="h-f2-c">
							<div class="demo">
								<form action="http://www.jsfoot.com/e/search/index.php" method="post" name="searchform" id="searchform" class="searchinfo">
									<ul>
										<li><input type="text" id="tt" value="" class="text" style="text-align: left;" placeholder="请输入您要查询的内容或关键字" autocomplete="off" /></li>
										<li><input type="submit" value="" class="button" /></li>
										<li class="clearfloat"></li>
									</ul>
								</form>
							</div>
							<div class="h-f2-c-dec">
								<a>热门搜索：</a>
								<a href="#">
									<p>关键字</p>
								</a>
								<a href="#">
									<p>关键字</p>
								</a>
								<a href="#">
									<p>关键字</p>
								</a>
								<a href="#">
									<p>关键字</p>
								</a>
								<a href="#">
									<p>关键字</p>
								</a>
								<a href="#">
									<p>关键字</p>
								</a>
							</div>
						</div>
						<div class="h-f2-r">
							<p style="margin-top: 25px;">24小时服务热线</p>
							<p style="margin-top: 12px; color: #FF5C5D; font-size: 18px;">188-8888-888</p>
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
								<li class="clearf"></li>
							</ul>
						</div>
					</div>
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
										<p style="display: none;">*用户名/手机号码输入有误，请重新输入</p>
									</div>
									<div class="content-2f">
										<div class="login-pw">
											<img src="/matouPCS/Public/Home/img/login-pw.png">
										</div>
										<input id="login-passWord" type="password" placeholder="请输入您的密码">
									</div>
									<div class="login-passWord">
										<p style="display: none;">* 您的密码输入有误，请重新输入</p>
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
											<a href="javascript:void(0)" id="qqLoginBtn">
												<img src="/matouPCS/Public/Home/img/alert-QQ.png">
											</a>
											<script type="text/javascript">
											//     QC.Login({
											//        btnId:"qqLoginBtn"    //插入按钮的节点id
											// });
											</script>
										</div>
										<div class="alert-wc">
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-wc.png">
											</a>
										</div>
										<div class="/matouPCS/Public/Home/alert-xl">
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
										<p style="display: none;">*请输入手机号码</p>
									</div>
									<div class="register-2f">
										<span class="title">验 证 码</span>
										<input id="yzm" type="text" maxlength="4" placeholder="请输入您的手机验证码">
										<input type="hidden" id="codes">
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
										<p style="display: none;">*请输入密码</p>
									</div>
									<div class="register-4f">
										<span class="title">确认密码</span>
										<input id="again" type="password" placeholder="请再次输入密码">
										<div class="register-again">
											<p style="display: none;">*两次输入密码不一致，请重新输入</p>
										</div>
									</div>
									<div class="register-5f">
										<div class="i-check">
											<input type="checkbox" checked value="" />
											<label></label>
										</div>
										<p>
											我已阅读并同意
											<span>《码头用户使用协议》</span>
										</p>
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
			<nav>
				<div style="width: 100%;height: 2px;background: #ff5c5d;"></div>
			</nav>
		</header>

		<div class="spdl" id="spdl" title="消息">
			<div class="titlena">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhide">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			<div class="fbtype">
				<a>类型：</a>
				<a href="#">
					<p id="fbp1">婚礼喜事</p>
				</a>
				<a href="#" style="margin-left: 24px;">
					<p id="fbp2">门面活动</p>
				</a>
			</div>
			<div class="spfx"></div>
			<div class="content">
				<textarea style="resize: none; width: 420px; height: 100px;border-radius: 15px;margin-left: 40px; border: 0;padding: 10px;"></textarea>
			</div>
			<div class="swbtn">
				<div class="swbtn-c">
					<div>
						<img src="/matouPCS/Public/Home/img/addp.png" />
					</div>
					<div style="margin-left: 10px;">
						<img src="/matouPCS/Public/Home/img/adds.png" />
					</div>
					<button class="tjbtn" id="tjbtn">发布</button>
				</div>
			</div>
		</div>
		<div class="spdlc" id="spdlc" title="消息">
			<div class="titlenac">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhidec">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			<div class="fbtypec">
			</div>
			<!--<div class="spfxc"></div>-->

			<div class="contentc">
				<div class="cca" id="cca" >个人</div>
				<div class="ccb" id="ccb"><p class="ccrc">婚庆公司<br>影楼<br>工作室<br>表演团体</p></div>
			</div>
			<div class="spfxb" style="margin-top: 200px;"></div>
			
			<div class="contentimg">
				<img src="/matouPCS/Public/Home/img/xzjs.png" />
			</div>
		</div>
		<div style="width: 1200px;height: 7px;background: #fff; margin:  0 auto;"></div>
		<section>
			<div class="s-conten-main">
				<div class="s-main-c">
					<div class="s-c-1f">
						<div class="s-f1-l">
							<div id="PicSlide">
								<ul class="img">
									<li style="display:list-item;">
										<a href="?s=/Home/Zpdt1"><img src="/matouPCS/Public/Home/img/banner_big01.png" width="980" height="450" /></a>
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
									<h2>发现更多好服务</h2>
								</div>
								<?php if(empty($_SESSION['username'])){ ?>
									<div id="login" class="center login">
										<div class="img"><img src="/matouPCS/Public/Home/img/login.png" alt="" /></div>
										<span>用户登录</span>
									</div>
								<?php }else{ ?>
									<div class="center login">
										<div class="img"><img src="/matouPCS/Public/Home/img/login.png" alt="" /></div>
										<span onclick="alert('您已登录')">用户登录</span>
									</div>
								<?php } ?>

							</div>
							<div class="s-f1-r-2f">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td >
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon01.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>
												<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布悬赏</a></span>
											<?php }else{ ?>
												<?php if(in_array($_SESSION['id'],$ren)){ ?>
												<span class="s-f1-r-word"><a href="?s=/Home/Xsdt/txxs/">发布悬赏</a></span>
												<?php }else{ ?>
												<span class="s-f1-r-word"><a id="findc" href="javascript:void(0)">发布悬赏</a></span>
												<?php } ?>
												<!-- <span class="s-f1-r-word"><a href="?s=/Home/Xsdt/txxs">发布悬赏</a></span> -->
											<?php } ?>
										</td>
										<td>
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon02.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>

											<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布应赏</a></span>
											
											<?php }else if(!empty($fbys)){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您已发布过应赏!')">发布应赏</a></span>
											<?php }else{ ?>
											<span class="s-f1-r-word"><a href="?s=/Home/Ysq/txys">发布应赏</a></span>
											<?php } ?>
										</td>
									</tr>
									<tr>
										<td>
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon03.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布招聘</a></span>
											<?php }else{ ?>
											<span class="s-f1-r-word"><a href="?s=/Home/Zpdt/txzp">发布招聘</a></span>
											<?php } ?>
										</td>
										<td>
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon04.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布应聘</a></span>
											<?php }else if(!empty($fbyp)){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您已发布过应聘!')">发布应聘</a></span>
											<?php }else{ ?>
											<span class="s-f1-r-word"><a href="?s=/Home/Zpdt1/txyp">发布应聘</a></span>
											<?php } ?>
										</td>
									</tr>
									<tr>
										<td>
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon05.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布二手求购</a></span>
											<?php }else{ ?>
											<span class="s-f1-r-word"><a href="?s=/Home/Tzsc/txqg">发布二手求购</a></span>
											<?php } ?>
										</td>
										<td>
											<div class="s-f1-r-6 center">
												<img src="/matouPCS/Public/Home/img/rightside_icon06.png" alt="" />
											</div>
											<?php if(empty($_SESSION['username'])){ ?>
											<span class="s-f1-r-word"><a href="#" onclick="alert('您还没有登录!')">发布二手闲置</a></span>
											<?php }else{ ?>
											<span class="s-f1-r-word"><a href="?s=/Home/Tzsc/txxz">发布二手闲置</a></span>
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
								<h2>有更多惊喜等着你哟</h2>
							</div>
						</div>
						<div class="clearf"></div>
					</div>
					<span style="height: 50px;display: block;"></span>

					<div class="s-c-2f">
						<div id="xsdt" class="s-ft-f">
							<div class="Catalog">
								<a href="?s=/Home/Xsdt"><img src="/matouPCS/Public/Home/img/Catalog.png" width="198" height="26"></a>
							</div>

							<div class="More">
								<p>
									<a href="?s=/Home/Xsdt">更多>>
										<!--<img src="img/more.png" width="17" height="17">--></a>
								</p>
							</div>

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
							<div class="s-f2-r-1f">
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
					<span style="height: 50px;display: block;"></span>

					<div class="s-c-3f">
						<div id="zpdt" class="s-ft-f">

							<div class="Catalog">
								<a href="?s=/Home/Zpdt1/index/type/0"><img src="/matouPCS/Public/Home/img/Catalog_02.png" width="198" height="26"></a>
							</div>
							<div class="More">
								<p>
									<a href="?s=/Home/Zpdt1/index/type/0">更多>></a>
								</p>
							</div>

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
								<div style="width: 110px; height: 35px;" class="center">
									<button>立即应聘</button>
								</div>
							</div>
						</div>
						<div class="s-f3-l">
							<ul>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/1" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic01.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">经理/店长</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>

								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/2" class="abgs2">
										<img src="/matouPCS/Public/Home/img/recruit_pic02.png" />
										<div class="abg2">
											<div class="abg2-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">营业员</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/3" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic03.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">化妆师</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/4" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic04b.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">数码师/设计</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/5" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic05.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">视频剪辑师</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/6" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic06.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">摄像师</div>
											<div class="abg1-r">查看更多</div>
										</div>

									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/7" class="abgs2">
										<img src="/matouPCS/Public/Home/img/recruit_pic07.png" />
										<div class="abg2">
											<div class="abg2-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">摄影师</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li>
									<a href="?s=/Home/Zpdt1/index/type/8" class="abgs1">
										<img src="/matouPCS/Public/Home/img/recruit_pic08.png" />
										<div class="abg1">
											<div class="abg1-c">
												<p>Welcome to</p>
												<p>the wedding pier</p>
											</div>
											<div class="abg1-l">策划师</div>
											<div class="abg1-r">查看更多</div>
										</div>
									</a>
								</li>
								<li class="clearf"></li>
							</ul>
							<ul class="clearf"></ul>
						</div>
						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx1.png" />
						</div>
						<div class="clearf"></div>
					</div>
					<span style="height: 50px;display: block;"></span>

					<div class="s-c-4f">
						<div id="mtbd" class="s-ft-f">

							<div class="Catalog">
								<a href="?s=/Home/Mtbu"><img src="/matouPCS/Public/Home/img/Catalog_01.png" width="198" height="26"></a>
							</div>
							<div class="More">
								<p>
									<a href="?s=/Home/Mtbu">更多>></a>
								</p>
							</div>

						</div>

						<div class="troops">
							<!-- 码头部队 -->
							<?php if(is_array($budui)): foreach($budui as $key=>$buduis): ?><div class="company">
									<p class="company_01_01"><img src="/matouPCS/Public/Home/img/sca.png" />关注<?php echo ($buduis["fen"]); ?></p>
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
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($buduis["id"]); ?>">
											<div class="company_03">
												<p>查看详情</p>
											</div>
										</a>
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($buduis["id"]); ?>">
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
										<a href="">部队类型</a>
									</li>
									<li class="s-f4-r-2f-2">
										<a href="">部队类型</a>
									</li>
								</ul>
								<ul>
									<li class="s-f4-r-2f-3">
										<a href="">部队类型</a>
									</li>
									<li class="s-f4-r-2f-1">
										<a href="">部队类型</a>
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
									<button>立即加入</button>
								</div></a>
							</div>
						</div>
						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx2.png" />
						</div>
						<div class="clearf"></div>
					</div>
					<span style="height: 50px;display: block;"></span>

					<div class="s-c-5f">
						<div id="mtsc" class="s-ft-f">

							<a href="?s=/Home/Tjcs"><div class="Catalog">
								<img src="/matouPCS/Public/Home/img/Catalog_03.png" width="198" height="26">
							</div></a>

							<div class="More">
								<p>
									<a href="?s=/Home/Tjcs">更多>></a>
								</p>
							</div>

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
							<a href="?s=/Home/Tjcs/spcj" >

							<div class="s-f5-l-4f">
								<div style="width: 110px; height: 35px;" class="center">
									<button>立即入驻</button>
								</div>
							</div>
						</a>
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
												<p style="height: 20px;">地址：<?php echo ($shangs["address"]); ?>&nbsp;</p>
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

						<div class="s-f3-x">
							<img src="/matouPCS/Public/Home/img/bannerfgx3.png" />
						</div>
						<div class="clearf"></div>
					</div>
					<span style="height: 50px;display: block;"></span>

					<div class="s-c-6f">
						<div id="tzsc" class="s-ft-f">

							<div class="Catalog">
								<a href="?s=/Home/Tzsc">
									<img src="/matouPCS/Public/Home/img/Catalog_04.png" width="198" height="26">
								</a>
							</div>
							<div class="More">
								<p>
									<a href="?s=/Home/Tzsc">更多>></a>
								</p>
							</div>

						</div>
						<div class="s-f6-l">

							<ul class="tsul">
								<?php if(is_array($tiao)): foreach($tiao as $key=>$tiaos): if($tiaos['type'] == 2){ ?>
										<li>
										<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($tiaos["fid"]); ?>">
											<div class="tsuimg">
												<img src="/matouPCS/Public/Home/img/flea_people.png" />
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
												<img src="/matouPCS/Public/Home/img/flea_people.png" />
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
							<!--<ul>
								<li>
									<a href="#">
										<div>
											<div class="" style="float: left;">
												<img src="img/flea_people.png" style="width: 90%;">
											</div>
											<p style="line-height: 38px; font-size: 16px;"><strong><span id="">求购音响一台</span>&nbsp;预算:<span>￥800</span></strong></p>
											<p><span id="">要求:可以播在电脑、手机上的、音量要大、九成新...</span>&nbsp;&nbsp;<span id="" style="font-size: 12px;">报名人数10人</span></p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div>
											<div class="" style="float: left;">
												<img src="img/flea_people.png" style="width: 90%;">
											</div>
											<p style="line-height: 38px; font-size: 16px;"><strong><span id="">求购音响一台</span>&nbsp;预算:<span>￥800</span></strong></p>
											<p><span id="">要求:可以播在电脑、手机上的、音量要大、九成新...</span>&nbsp;&nbsp;<span id="" style="font-size: 12px;">报名人数10人</span></p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div>
											<div class="" style="float: left;">
												<img src="img/flea_people.png" style="width: 90%;">
											</div>
											<p style="line-height: 38px; font-size: 16px;"><strong><span id="">求购音响一台</span>&nbsp;预算:<span>￥800</span></strong></p>
											<p><span id="">要求:可以播在电脑、手机上的、音量要大、九成新...</span>&nbsp;&nbsp;<span id="" style="font-size: 12px;">报名人数10人</span></p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div>
										<div class="" style="float: left;">
												<img src="img/flea_people.png" style="width: 90%;">
											</div>
											<p style="line-height: 38px; font-size: 16px;"><strong><span id="">求购音响一台</span>&nbsp;预算:<span>￥800</span></strong></p>
											<p><span id="">要求:可以播在电脑、手机上的、音量要大、九成新...</span>&nbsp;&nbsp;<span id="" style="font-size: 12px;">报名人数10人</span></p>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div>
											<div class="" style="float: left;">
												<img src="img/flea_people.png" style="width: 90%;">
											</div>
											<p style="line-height: 38px; font-size: 16px; color: #4d4d4D!important;"><span id="" style="font-size: 16px!important;display: block; width: 80;">一台</span>&nbsp;&nbsp;&nbsp;预算:￥800
												<span style="float: right;" id=""><img src="img/gray_small_position.png">&nbsp;郑州</span>
											</p>
											<p style="color: #999;"><span id="">要求:可以播在电脑、手机上的、音量要大、九成新...</span>&nbsp;&nbsp;<span id="" style="font-size: 12px; color: #CCC;">报名人数10人</span></p>
										</div>
									</a>
								</li>
								<li class="clearf"></li>
							</ul>-->
						</div>
						<div class="s-f6-r">
							<div class="f6-l-o1">
								<ul>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea.png" width="124" height="124"></a>
										<p>
											<a href="#">摄影器材</a>
										</p>
									</li>

									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_01.png" width="124" height="124"></a>
										<p>
											<a href="#">摄像器材</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_02.png" width="124" height="124"></a>
										<p>
											<a href="#">音响</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_03.png" width="124" height="124"></a>
										<p>
											<a href="#">灯光</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_04.png" width="124" height="124"></a>
										<p>
											<a href="#">婚纱</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_05.png" width="124" height="124"></a>
										<p>
											<a href="#">礼服</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_06.png" width="124" height="124"></a>
										<p>
											<a href="#">舞台桁架</a>
										</p>
									</li>
									<li>
										<a href="#"><img src="/matouPCS/Public/Home/img/Flea_07.png" width="124" height="124"></a>
										<p>笔记本</a>
										</p>
									</li>
									<li class="clearf"></li>
								</ul>
							</div>
							<!--<div class="f6-l-o2">2</div>-->
						</div>
						<div class="clearf"></div>
					</div>
					<span style="height: 50px;display: block;"></span>
					<br>
					<br>
					<br>
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
						<!--<div class="f7-o2">
							<h4>热门城市:</h4>
							<a href="#">北京婚纱摄影</a>&nbsp;
							<a href="#">上海婚纱摄影</a>&nbsp;
							<a href="#">杭州婚纱摄影</a>&nbsp;
							<a href="#">成都婚纱摄影</a>&nbsp;
							<a href="#">深圳婚纱摄影</a>&nbsp;
							<a href="#">武汉婚纱摄影</a>&nbsp;
							<a href="#">三亚婚纱摄影</a>&nbsp;
							<a href="#">厦门婚纱摄影</a>&nbsp;
							<a href="#">广州婚纱摄影</a>&nbsp;
							<a href="#">南京婚纱摄影</a>&nbsp;
							<a href="#">重庆婚纱摄影</a>&nbsp;
							<a href="#">苏州婚纱摄影</a>&nbsp;
							<a href="#">天津婚纱摄影</a>&nbsp;
							<a href="#">青岛婚纱摄影</a>&nbsp;
							<a href="#">长沙婚纱摄影</a>&nbsp;
							<a href="#">郑州婚纱摄影</a>&nbsp;
							<a href="#">丽江婚纱摄影</a>&nbsp;
							<a href="#">西安婚纱摄影</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#">更多></a>
						</div>-->
					</div>
					<div class="clearf"></div>
				</div>
			</div>
		</section>
		<footer>
			<div class="f-content-main">
				<div class="f-main-c">
					<div class="f-c-1f">
						<a href="#">友情链接：</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<a href="#">友情链接</a>&nbsp;
						<p style="text-align: center;">© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<!--<br/>-->
						<p style="text-align: center;">京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p style="text-align: center;">京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/index.js"></script>
	<script src="/matouPCS/Public/Home/js/index-alert-login.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/showwin.js"></script>
	<script>
		//描点
		//	$('#xsdt-a').click(function(){
		//		$("html,body").animate({scrollTop: $('#xsdt').offset().top}, 1000);
		//	})
		//	$('#zpdt-a').click(function(){
		//		$("html,body").animate({scrollTop: $('#zpdt').offset().top}, 1000);
		//	})
		//	$('#tzsc-a').click(function(){
		//		$("html,body").animate({scrollTop: $('#tzsc').offset().top}, 1000);
		//	})
		//	$('#mtbd-a').click(function(){
		//		$("html,body").animate({scrollTop: $('#mtbd').offset().top}, 1000);
		//	})
		//	$('#mtsc-a').click(function(){
		//		$("html,body").animate({scrollTop: $('#mtsc').offset().top}, 1000);
		//	})
		//    鼠标动态开始
		var hh = 30; //图片实际高度减去div高度
		var pp = 2; //每次移动幅度（像素）
		var ss = 50; //每次移动时间（毫秒）
		var fx = true; //移动方向
		var tp = document.getElementById("tp"); //图片对象
		var b = document.getElementById('s-f2-r-button');

		function gd() {
			var tt = parseInt(tp.style.top);
			fx = fx ? tt > -hh : tt >= 0;
			tp.style.top = tt + (fx ? -pp : pp) + "px";
			if(tt <= -15 && tt >= -30) {
				b.style.backgroundColor = '#ff9393';
				b.style.color = '#ffffff';
			} else {
				b.style.backgroundColor = '#cccccc';
				b.style.color = '#ff6b6b';
			}
			var timer1 = setTimeout(gd, ss);
			b.onmouseover = function() {
				tp.style.top = '0';
				clearInterval(timer1);
				b.style.backgroundColor = '#cccccc';
				b.style.color = '#ff6b6b';
			}
			b.onmouseout = function() {
				tp.style.top = '0';
				gd();
			}
		}
		gd();
		//    鼠标动态结束
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			//幻灯片调用
			slider.init({
				'id': $('#PicSlide'),
				way: 'left',
				interval: 4000
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {

				$("#tt").bigAutocomplete({
					width: 464,
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
			//		下拉开始
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
		//收藏
		$(function() {
			$(".company_01_01 img").hover(
					function() {
						$(this).attr("src", "/matouPCS/Public/Home/img/scb.png");
					},
				function() {
					$(this).attr("src", "/matouPCS/Public/Home/img/sca.png");
				}
			);
		});

		$(function() {
			$(".mtscc p img").hover(
				function() {
				$(".mtscc p img").attr("src", "/matouPCS/Public/Home/img/scb.png");
			},
			function() {
				$(".mtscc p img").attr("src", "/matouPCS/Public/Home/img/sca.png");
			}
				);
		});
		$(function() {
			$(".content_01_01 img").hover(
				function() {
				$(this).attr("src", "/matouPCS/Public/Home/img/scb.png");
			},
			function() {
				$(this).attr("src", "/matouPCS/Public/Home/img/sca.png");
			}
				);
		});
		//查看号码
		$(function() {
			$("#find").click(function() {
				// alert("充值")
				$("#spdl").show();
				$("#find").css("background", "#ff5c5d");
			});
			$("#spdl-ok").click(function() {

			});
			$("#spdl-esc").click(function() {
				$(".spdl").hide();
			});
		});
		//弹窗
		$(function() {
			$("#fbp1").css("border", "2px solid #ff5c5d");
			$("#fbp2").click(function() {
					$("#fbp2").css("border", "2px solid #ff5c5d");
					$("#fbp1").css("border", "2px solid  #f2f2f2");
				}),
				$("#fbp1").click(function() {
					$("#fbp1").css("border", "2px solid #ff5c5d");
					$("#fbp2").css("border", "2px solid  #f2f2f2");
				});
			$(".rhide").click(function() {
				$("#spdl").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
			$("#tjbtn").click(function() {
				$("#spdl").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
		});
		
	</script>

</html>