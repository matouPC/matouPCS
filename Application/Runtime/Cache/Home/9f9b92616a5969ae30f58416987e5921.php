<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>已发布招聘</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/yfb-3rzp-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showWin.css" />
		
	</head>

	<body>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
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
								<li id="select-xx" style="width: 45px;">
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
								<li style="width: 58px;">
									<a href="#">收藏夹</a>
									<div class="str"></div>
								</li>
								<li id="select-yfb" style="width: 70px;">
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
								<li style="width: 68px;">
									<a href="#">部队中心</a>
									<div class="str"></div>
								</li>
								<li style="width: 68px;">
									<a href="#">我的商铺</a>
									<div class="str"></div>
								</li>
								<li style="width: 70px;">
									<a class="action" href="#">发动态</a>
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
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
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
				<div class="s-main-t">
					<p>已发布招聘</p>
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
											<?php $add = explode(',',$lists['address_zp']);?>
											<p class="yfb_01_01">工作地点：<b><?php echo ($add[0]); ?></b></p>
											<p class="yfb_01_02">招聘内容：<b>
												<?php ; for ($i=0; $i < count($arr); $i++) { $arrs = explode(',',$arr[$i]); if($arrs[1] == $lists['rid']){ echo $arrs[0].','; } }?></b></p>
											<p class="yfb_01_03"><button class="tj_01_03" id="btn_01<?php echo ($lists["rid"]); ?>" onclick="changess(<?php echo ($lists["rid"]); ?>)">未出售</button></p>

										</div>
										<div class="yfb_01" style="margin-top:24px;">
											<p class="yfb_sj">发布时间：<?php echo ($lists["date"]); ?></p>

										</div>
										<!--下拉隐藏开始-->
										<div class="SubCategoryBox">
											<dl>

												<dd></dd>
												<dd>
													<div id="xl<?php echo ($lists["rid"]); ?>" class="yfb_xl">
														<?php if(is_array($data)): foreach($data as $key=>$datas): ?><div class="yfb_xl_01">
																<p class="yfb_xl_01_01"><?php echo ($datas["type"]); ?></p>
																<p class="yfb_xl_01_02">
																	<?php  $bao = explode(',',$datas['zhao']); array_pop($bao); $baos = count($bao); ?>
																		已应聘<?php echo ($baos); ?>人</p>
																<p class="yfb_xl_01_03">已答应3人</p>
																<p class="yfb_xl_01_03" id="yzds<?php echo ($datas["id"]); ?>" >
																	<?php if($datas['zhao_st'] == '1'){ ?>
																		<button onclick="yzds(<?php echo ($datas["id"]); ?>)">已找到</button>
																		<?php }else{ ?>
																		<div>已找到</div>
																	<?php } ?>
																</p>
															</div><?php endforeach; endif; ?>
													</div>
												</dd>
											</dl>
											<div class="showmore" style="margin-left:-500px;">
												<a id="xx<?php echo ($lists["rid"]); ?>" onclick="xx(<?php echo ($lists["rid"]); ?>)"href="javascript:;"><span>查看详情</span></a>

											</div>
										</div>

									</div>
									<a href="?s=/Home/User/userEdit/id/<?php echo ($lists["rid"]); ?>"><p class="yfb_01_05">编辑</p></a>
								</li><?php endforeach; endif; ?>

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
		<footer>
			<div class="f-content-main">
				<div class="f-main-c">
					<div class="f-c-1f">
						<a href="#">友情链接：</a>
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
						<a href="#">友情链接</a>
						<p class="footerp">© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<p class="footerp">京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p class="footerp">京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/showWin.js"></script>
	

</html>