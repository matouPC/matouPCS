<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>部队消息</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xx-3rsp-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showWin.css" />
	</head>

	<body>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<?php	include '2rank-header.php';?>
					<div class="h-c-2f">
						<img src="img/navbg2.png" />
						<div class="s-f2-r">
							<input type="text" placeholder="搜素全站" />
							<div class="s-f2-r1">
								<img src="img/ss-t.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-t">
					<p>部队消息</p>
					<div id="bdxx-lb" class="lb"><p>全部</p>
						<div class="bdxx-lb">
								<ul>
									<li>全部</li>
									<li>留言</li>
									<li>关注</li>
								</ul>
							</div>
						</div>
				</div>
				<div class="wk_01">
					<div class="con">
						<div class="s-main-b">
							<ul>
								<li>
									<div class="xialai">
										<span class="xll1">
											<p class="xs1">删除</p>
										</span>
									</div>
									<div class="spxx">
										<img src="img/yhmc.png">
										<p class="spxx_01">用户名称用户名称</p>
										<p class="spxx_02"></p>
										<form>
											<p class="spxx_03">留言</p>
											
										</form>
									</div>
									<div class="spxx_00">
										<p>
											二战时，美国军方委托着名的心理学家桂尔福研发一套心理测验，希望能用这套东西挑选出最优秀的人来担任飞行员。 结果很惨，通过这套测试的飞行员，训练时的表现很亮眼，可是一上战场，所驾驶的飞机大多被击落，死亡率非常高。 桂尔福在反思时发现那些战绩辉煌，身经百战打不死的飞行员，多半是从那些退役的“老鸟”中挑选出来的。 他非常纳闷儿，为什么精密的心理测量，却比不上“老鸟”的直觉呢？其中的问题在哪儿呢？
										</p>
									</div>
									<div class="spxx_sj">
										<p class="spxx_sj_r">2016-12-12</p>
										<p class="spxx_hf">
											回复
										</p>
									</div>
									<div class="no">
										<textarea id="textarea" placeholder="留言留言留言留言留言留言"></textarea>
									<button class="hf">回复</button>
									<div class="clear"></div>
									</div>
								</li>

								<li>
									<div class="xialai">
										<span class="xll1">
											<p class="xs1">删除</p>
										</span>
									</div>
									<div class="spxx">
										<img src="img/yhmc.png">
										<p class="spxx_01">用户名称用户名称</p>
										<p class="spxx_02"></p>
										<p class="spxx_03">收藏应赏</p>
										<div class="spxx_img">
												<img src="img/heart.png" />
											</div>
										<p class="spxx_04">
											收藏
										</p>
									</div>
									<div class="spxx_sj">
										<p class="spxx_sj_r">2016-12-12</p>
									</div>
								</li>
								<li>
									<div class="xialai">
										<span class="xll1">
											<p class="xs1">删除</p>
										</span>
									</div>
									<div class="spxx">
										<img src="img/yhmc.png">
										<p class="spxx_01">用户名称用户名称</p>
										<p class="spxx_02"></p>
										<form>
											<p class="spxx_03">回复</p>
											<textarea name="" cols="" rows="" placeholder="留言留言留言留言留言留言留言。。。" class="lyhf"></textarea>
										</form>
									</div>
									<div class="spxx_00">
										<p>
											二战时，美国军方委托着名的心理学家桂尔福研发一套心理测验，希望能用这套东西挑选出最优秀的人来担任飞行员。 结果很惨，通过这套测试的飞行员，训练时的表现很亮眼，可是一上战场，所驾驶的飞机大多被击落，死亡率非常高。 桂尔福在反思时发现那些战绩辉煌，身经百战打不死的飞行员，多半是从那些退役的“老鸟”中挑选出来的。 他非常纳闷儿，为什么精密的心理测量，却比不上“老鸟”的直觉呢？其中的问题在哪儿呢？
										</p>
									</div>
									<div class="spxx_sj">
										<p class="spxx_sj_r">2016-12-12</p>
									</div>
								</li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="clearfloat"></div>
				<div class="djjzgd">
					<button>点击加载更多</button>
				</div>
			</div>
		</section>
		<?php	include '3rank-footer.php';?>
	</body>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/textarea.js"></script>
	<script src="js/scrolltopcontrol.js"></script>
	<script src="js/showWin.js"></script>

</html>