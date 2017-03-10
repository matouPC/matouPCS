<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>已发布悬赏</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/yfb-3rzp-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showWin.css" />
	</head>
	<body>
			<div class="show-bg"></div>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="?s=Home/Index">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<?php if(empty($_SESSION['username'])){ ?>
								<li style="width: 100px;">
									<a id="login-alert" href="#">请注册\登录</a>
								</li>
								<?php }else{ ?>
								<li style="width: 100px;">
									<a href="#">
										<img src="/matouPCS/Public/Home/img/tx.png" />
										<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
									</a>
									<div class="str"></div>
								</li>
								<?php } ?>
								<li id="select-xx">
									<a href="#">消息</a>
									<div class="str"></div>
									<div class="select-xx">
										<ul>
											<li>
												<a href="">需求消息</a>
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
								<li class="nn58">
									<a href="#">收藏夹</a>
									<div class="str"></div>
								</li>
								<li id="select-yfb">
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb">
										<ul>
											<ul>
												<li>
													<a href="">悬赏</a>
												</li>
												<li>
													<a href="">应赏</a>
												</li>
												<li>
													<a href="">招聘</a>
												</li>
												<li>
													<a href="">应聘</a>
												</li>
												<li>
													<a href="">求购</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
											</ul>
										</ul>
									</div>
								</li>
								<li class="nn68">
									<a href="#">部队中心</a>
									<div class="str"></div>
								</li>
								<li class="nn68">
									<a href="#">我的商铺</a>
									<div class="str"></div>
								</li>
								<li class="nn70">
									<a class="action" href="#" id="find">发动态</a>
									<div class="strf"></div>
								</li>
								<li class="clearfloat"></li>
							</ul>
						</div>
						<div class="clearfloat"></div>
					</div>
					<div class="h-c-2f">
						<img src="/matouPCS/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input placeholder="搜索全站" type="text" class="find3" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="spdlb" id="spdlb" title="消息">
			<div class="titlenab">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhideb">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			<div class="fbtypeb">
				<a>类型：</a>
				<a href="#">
					<p id="fbp1">婚礼喜事</p>
				</a>
				<a href="#" class="naml">
					<p id="fbp2">门面活动</p>
				</a>
			</div>
			<div class="contentb">
				<textarea class="showtarea"></textarea>
			</div>
			<div class="swbtnb">
				<div class="swbtn-cb">
					<div>
						<img src="/matouPCS/Public/Home/img/addp.png" />
					</div>
					<div class="nnml10">
						<img src="/matouPCS/Public/Home/img/adds.png" />
					</div>
					<button class="tjbtnb" id="tjbtn">发布</button>
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
			<div class="contentc">
				<div class="cca" id="cca">个人</div>
				<div class="ccb" id="ccb">
					<p class="ccrc">婚庆公司<br>影楼<br>工作室<br>表演团体</p>
				</div>
			</div>
			<div class="spfxb"></div>
			<div class="contentimg">
				<img src="/matouPCS/Public/Home/img/xzjs.png" />
			</div>
		</div>
		<section>
			<div class="s-main-c">
				<div class="s-main-t">
					<p>已发布悬赏</p>
				</div>
				<div class="s-main-t-qb">
					<div class="s-main-t-qb" id="man-top">
						<p>全部<span class="xll11"></span></p>
					</div>
					<div class="na-top">
						<ul>
							<li>
								<a href="#">全部</a>
							</li>
							<li>
								<a href="#">留言</a>
							</li>
							<li>
								<a href="#">关注</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="wk_01">
					<div>
						<div class="s-main-b">
							<ul>
								<?php if(is_array($list)): foreach($list as $key=>$lists): ?><li>
										<div class="yfb">
											<div class="yfb_01">
												<p class="yfb_01_01">活动时间：<b><?php echo ($lists["date"]); ?></b></p>
												<p class="yfb_01_02">活动地点：<b><?php echo ($lists["address"]); ?></b></p>
												<p class="yfb_01_01">悬赏内容：<b>
												<?php for ($i=0; $i < count($arr); $i++) { $arrs = explode(',',$arr[$i]); if($arrs[1] == $lists['psid']){ echo $arrs[0].','; } }?></b></p>
												<p class="yfb_01_03"><button class="tj_01_03" id="btn_01<?php echo ($lists["psid"]); ?>" onclick="changes(<?php echo ($lists["psid"]); ?>)">未完成</button></p>
											</div>
											<div class="yfb_01" style="margin-top:24px;">
												<p class="yfb_sj">发布时间：<?php echo ($lists["date"]); ?></p>
											</div>
											<!--下拉隐藏开始-->
											<div class="SubCategoryBox">
												<dl>
													<dd></dd>
													<dd>
														<div id="xl<?php echo ($lists["psid"]); ?>" class="yfb_xl">
															<?php if(is_array($data)): foreach($data as $key=>$datas): if($lists['psid'] == $datas['pid'] && $datas != ''){ ?>
																<div class="yfb_xl_01">
																	<p class="yfb_xl_01_01"><?php echo ($datas["type"]); ?></p>
																	<p class="yfb_xl_01_02">
																		<?php  $bao = explode(',',$datas['bao']); array_pop($bao); $baos = count($bao); ?>
																		已报名<?php echo ($baos); ?>人
																	</p>
																	<p class="yfb_xl_01_03">已答应3人</p>
																	<p class="yfb_xl_01_03" id="yzd<?php echo ($datas["wid"]); ?>" >
																		<?php if($datas['bao_st'] == '1'){ ?>
																		<button onclick="yzd(<?php echo ($datas["wid"]); ?>)">已找到</button>
																		<?php }else{ ?>
																		<div>已找到</div>
																		<?php } ?>
																	</p>
																</div>
																<?php } endforeach; endif; ?>
														</div>
													</dd>
												</dl>
												<div class="showmore" style="margin-left:-500px;">
													<a  onclick="xx(<?php echo ($lists["psid"]); ?>)" href="javascript:;"><span>查看详情</span></a>
												</div>
											</div>
										</div>
										<a href="?s=/Home/User/userXss/psid/<?php echo ($lists["psid"]); ?>"><p class="yfb_01_05">编辑</p></a>
									</li><?php endforeach; endif; ?>
								<div class="clearfloat"></div>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="clearfloat"></div>
			</div>
		</section>
		<br>
		<br>
		<br>
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
						<a href="http://www.miitbeian.gov.cn"><p>豫ICP备16015506号</p></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/showWin.js"></script>
</html>