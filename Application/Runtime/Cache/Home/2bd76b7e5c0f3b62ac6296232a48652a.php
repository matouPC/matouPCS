<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/scj-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
				list-style-type: none;
			}
			
			a,
			img {
				border: 0;
			}
			
			img {
				width: 100%;
				height: 100%;
			}
			
			.demo {
				width: 720px;
				margin: 35px auto;
			}
			
			.demo h2 {
				font-size: 16px;
				color: #3366cc;
				height: 30px;
			}
			
			.demo li {
				float: left;
			}
			
			.text,
			.button {
				background: url(http://su.bdimg.com/static/superpage/img/spis_031ddf34.png) no-repeat;
			}
			
			.text {
				width: 425px;
				height: 22px;
				padding: 4px 7px;
				padding: 6px 7px 2px\9;
				font: 16px arial;
				border: 1px solid #cdcdcd;
				border-color: #9a9a9a #cdcdcd #cdcdcd #9a9a9a;
				vertical-align: top;
				outline: none;
				margin: 0 -1px 0 0;
			}
			
			.button {
				width: 79px;
				height: 32px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
			
			.button2 {
				width: 135px;
				height: 32px;
				margin-left: 30px;
				padding: 0;
				padding-top: 2px\9;
				border: 0;
				background-position: 0 -35px;
				background-color: #ff5c5d;
				cursor: pointer;
				border: 1px solid #cdcdcd;
				color: #fff;
			}
		</style>
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
										<div style="width: 30px; height: 30px; float: left;"><img src="/matouPCS/Public/Home/img/tx.png"></div>
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
								<img src="/matouPCS/Public/Home/img/ss-t.png" onclick="alert('准备搜索')"/>
							</div>
						</div>
					</div>
					<div class="h-c-3f">
						收藏夹
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-c-1f">
					<div class="left">
						<button class="selected">已收藏需求</button>
						<button>已报名</button>
						<button>已收藏商铺</button>
					</div>
					<div class="right">
						<button class="lb">类别</button>
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="con">
					<div class="s-c-2f">
						<ul>
							<?php if(is_array($userYs)): foreach($userYs as $key=>$userYss): $userYs_s = explode(',',$userYss['due_shou']); array_pop($userYs_s); ?>
								<?php if(in_array($_SESSION['id'],$userYs_s)){ ?>
								<li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($userYss["did"]); ?>">
										<div class="s-c-2f-1f">
											<div class="yhtx">
												<img src="/matouPCS/Public/Home/img/bdmc.png" />
											</div>
											<p class="yhmc">用户<?php echo (substr($userYss["username"],0,6)); ?></p>
											<p class="szd">所在地：<?php echo ($userYss["addre"]); ?></p>
											<button>应赏</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-2f">
											<div>
												<p><?php echo ($userYss["name"]); ?></p>
												<p class="age"><?php echo ($userYss["age"]); ?>岁</p>
												<p class="grjl"><strong style="color: #000; font-weight: 500;">个人简历：</strong><?php echo ($userYss["content"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div>
												<p><?php echo ($userYss["type"]); ?></p>
												<p class="zpzp"><strong style="color: #000; font-weight: 500;">照片作品：</strong>
													<?php if(is_array($userYs_zp)): foreach($userYs_zp as $key=>$userYs_zp): if($userYs_zp['pid'] == $userYss['did']){ $userYs_zps = explode(',',$userYs_zp['imagename_z']); array_pop($userYs_zps); $userYs_zps = count($userYs_zps); ?>
														<?php echo ($userYs_zps); ?>个
														<?php } endforeach; endif; ?>
												</p>
												<p class="spzp"><strong style="color: #000; font-weight: 500;">视频作品：</strong>
													<?php if(is_array($userYs_sp)): foreach($userYs_sp as $key=>$userYs_sp): if($userYs_sp['pid'] == $userYss['did']){ $userYs_sps = explode(',',$userYs_sp['imagename_v']); array_pop($userYs_sps); $userYs_sps = count($userYs_sps); ?>
														<?php echo ($userYs_sps); ?>个
														<?php } endforeach; endif; ?>
												</p>
												<?php if(is_array($userYs_dq)): foreach($userYs_dq as $key=>$userYs_dqs): if($userYs_dqs['pid'] == $userYss['did']){ ?>
													<?php  $dangdate = explode(',',$userYs_dqs['dangdate']); $dangs = explode(',',$userYs_dqs['dangs']); array_pop($dangdate); ?>
															<p class="dq"><strong style="color: #000; font-weight: 500;">档期：</strong>
																<?php for ($i=0; $i < count($dangdate); $i++) { ?>
																	<?php echo ($dangdate[$i]); echo ($dangs[$i]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
																<?php } ?></p>
														<?php } endforeach; endif; ?>
												<p class="jg"><?php echo ($userYss["price"]); ?>元/天</p>
												<div class="clearfloat"></div>
											</div>
										</div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
							<?php if(is_array($userYps)): foreach($userYps as $key=>$userYpss): ?><li>
									<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($userYpss["pid"]); ?>">
										<div class="s-c-2f-1f">
											<div class="yhtx">
												<img src="/matouPCS/Public/Home/img/bdmc.png" />
											</div>
											<p class="yhmc">用户<?php echo (substr($userYpss["username"],0,6)); ?></p>
											<p class="szd">所在地：<?php echo ($userYpss["addre"]); ?></p>
											<p class="qwzw">期望职位：<?php echo ($userYpss["type"]); ?></p>
											<button>应聘</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-2f">
											<div>
												<p><?php echo ($userYpss["name"]); ?></p>
												<p class="age"><?php echo ($userYpss["ages"]); ?></p>
												<p class="gzjy">工作经验：<?php echo ($userYpss["worktimes"]); ?>年</p>
												<p class="grjl" style="width: 700px;"><strong style="color: #000; font-weight: 500;">个人简历：</strong><?php echo ($userYpss["content"]); ?></p>
												<p style="float: right; margin-right: 50px;"><?php echo ($userYpss["typew"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div>
												<p class="gzsj"><strong style="color: #000; font-weight: 500;">工作时间：</strong><?php echo ($userYpss["worktime"]); ?></p>
												<p class="spzp"><strong style="color: #000; font-weight: 500;">所在公司：</strong><?php echo ($userYpss["workname"]); ?> </p>
												<p class="spzp"><strong style="color: #000; font-weight: 500;">职位：</strong><?php echo ($userYpss["<?php echo ($userYpss"]["typew"]); ?></p>
												<!--<p class="jg">￥500-￥700天</p>-->
												<div class="clearfloat"></div>
											</div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<?php foreach ($userIdle as $userIdles) { ?>
							 <?php $shou = explode(',',$userIdles['shou']); array_pop($shou);?>
							 	<?php if(in_array($_SESSION['id'],$shou)){ ?>
								<li>
									<div href="{); ?>">
										<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($userIdles['fid']); ?>">
										<div class="s-c-2f-1f">
											<div class="yhtx">
												<img src="/matouPCS/Public/Home/img/bdmc.png" />
											</div>
											<p class="yhmc">用户<?php echo (substr($userIdles["username"],0,6)); ?></p>
											<p class="szd">所在地：<?php echo ($userIdles["addre"]); ?></p>
											<button>闲置</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-2f">
											<div>
												<p>物品名称：<strike style="color: #999999; font-weight: 500;"><?php echo ($userIdles["name"]); ?></strike></p>
												<p class="ys"><strong style="color: #000000; font-weight: 500;">预算：</strong>￥<?php echo ($userIdles["price"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div>
												<!--<p class="jg">￥500-￥700天</p>-->
												<p style="margin: 0; width: 1100px;" class="grjl"><strong style="color: #000; font-weight: 500;">个人简历：</strong><?php echo ($userIdles["content"]); ?></p>
												<div class="clearfloat"></div>
											</div>
										</div>
									</a>
									</div>
								</li>
								<?php } ?>
								<?php } ?>
						</ul>
					</div>
				</div>
				<div class="con" style="display: none;">
					<div class="s-c-3f">
						<ul>
							<li>
								<!--<p class="hdsj">
									活动时间：2016-12-10
								</p>-->
								<p class="hddd">
									工作地点：郑州
								</p>
								<p class="xsnr">
									招聘内容：摄影、主持人
								</p>
								<a href="">
									<div class="nr">
										<div class="left">
											<div class="yhtx">
												<img src="/matouPCS/Public/Home/img/bdmc.png" />
											</div>
											<p class="yhmc">
												用户名称
											</p>
											<div class="clearfloat"></div>
										</div>
										<div class="right">
											<p class="hf">
												未回复
											</p>
											<p class="rq">
												2017-01-01
											</p>
										</div>
										<div class="clearfloat"></div>
									</div>
								</a>
							</li>
							<li>
								<!--<p class="hdsj">
									活动时间：2016-12-10
								</p>-->
								<p class="hddd">
									物品名称：摄影机
								</p>
								<p class="xsnr">
									预算：<span style="color: #ff5c5d;">￥500</span>
								</p>
								<a href="">
									<div class="nr">
										<div class="left">
											<div class="yhtx">
												<img src="/matouPCS/Public/Home/img/bdmc.png" />
											</div>
											<p class="yhmc">
												用户名称
											</p>
											<div class="clearfloat"></div>
										</div>
										<div class="right">
											<p class="hf">
												回复：
											</p>
											<p class="jj">
												拒绝
											</p>
											<p class="rq">
												2017-01-01
											</p>
										</div>
										<div class="clearfloat"></div>
									</div>
								</a>
							</li>
							<?php if(is_array($userBmxs)): foreach($userBmxs as $key=>$userBmxss): ?><li>
									<p class="hdsj">
										活动时间：<?php echo ($userBmxss["date"]); ?>
									</p>
									<p class="hddd">
										活动地点：<?php echo ($userBmxss["address"]); ?>
									</p>
									<p class="xsnr">
										悬赏内容：摄影、主持人
									</p>
									<a href="">
										<div class="nr">
											<div class="left">
												<div class="yhtx">
													<img src="/matouPCS/Public/Home/img/bdmc.png" />
												</div>
												<p class="yhmc">
													用户名称
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="right">
												<p class="hf">
													未回复
												</p>
												<p class="rq">
													2017-01-01
												</p>
											</div>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="con" style="display: none;">
					<div class="s-c-4f">
						<ul>
							<li>
								<a href="">
									<div class="left">
										<div class="sptx">
											<img src="/matouPCS/Public/Home/img/sptx.png" />
										</div>
										<div class="sp">
											<p>牛牛婚纱店牛牛婚纱店</p>
											<div class="bottom">
												<p class="xss">销售商</p>
												<p class="sc">收藏1000</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</div>
									<div class="right">
										<p class="dpdz">
											<strong style="color: #000000; font-weight: 500;">店铺地址：</strong>店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址
										</p>
										<div class="clearfloat"></div>
										<div class="bottom">
											<p class="zysp">
												<strong style="color: #000000; font-weight: 500;">主营商品：</strong> 主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品
											</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="left">
										<div class="sptx">
											<img src="/matouPCS/Public/Home/img/sptx.png" />
										</div>
										<div class="sp">
											<p>牛牛婚纱店牛牛婚纱店</p>
											<div class="bottom">
												<p class="xss">销售商</p>
												<p class="sc">收藏1000</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</div>
									<div class="right">
										<p class="dpdz">
											<strong style="color: #000000; font-weight: 500;">店铺地址：</strong>店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址
										</p>
										<div class="clearfloat"></div>
										<div class="bottom">
											<p class="zysp">
												<strong style="color: #000000; font-weight: 500;">主营商品：</strong> 主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品
											</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="left">
										<div class="sptx">
											<img src="/matouPCS/Public/Home/img/sptx.png" />
										</div>
										<div class="sp">
											<p>牛牛婚纱店牛牛婚纱店</p>
											<div class="bottom">
												<p class="xss">销售商</p>
												<p class="sc">收藏1000</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</div>
									<div class="right">
										<p class="dpdz">
											<strong style="color: #000000; font-weight: 500;">店铺地址：</strong>店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址
										</p>
										<div class="clearfloat"></div>
										<div class="bottom">
											<p class="zysp">
												<strong style="color: #000000; font-weight: 500;">主营商品：</strong> 主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品
											</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="left">
										<div class="sptx">
											<img src="/matouPCS/Public/Home/img/sptx.png" />
										</div>
										<div class="sp">
											<p>牛牛婚纱店牛牛婚纱店</p>
											<div class="bottom">
												<p class="xss">销售商</p>
												<p class="sc">收藏1000</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</div>
									<div class="right">
										<p class="dpdz">
											<strong style="color: #000000; font-weight: 500;">店铺地址：</strong>店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址店铺地址
										</p>
										<div class="clearfloat"></div>
										<div class="bottom">
											<p class="zysp">
												<strong style="color: #000000; font-weight: 500;">主营商品：</strong> 主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品&nbsp;&nbsp;&nbsp;&nbsp;主营商品
											</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</section>
		<br>
		<br>
		<br>
		<footer>
			<div class="f-main-c">
				<div class="f-c-2f">
					<div style="width: 90%; margin: 0 auto;"><br>
						<a href="#">i店大全</a>&nbsp;
						<a href="#">十大家纺排行榜</a>&nbsp;
						<a href="#">鲜花礼品网</a>&nbsp;
						<a href="#">鲜花网</a>&nbsp;
						<a href="#">婚介</a>&nbsp;
						<a href="#">婚礼搜索导航</a>&nbsp;
						<a href="#">杭州婚庆网</a>&nbsp;
						<a href="#">新娘说</a>&nbsp;
						<a href="#">拍表网</a>&nbsp;
						<a href="#">结婚网</a>&nbsp;
						<a href="#">钻戒品牌</a>&nbsp;
						<a href="#">武汉婚车租摄</a>&nbsp;
						<a href="#">婚礼时光</a>&nbsp;
						<a href="#">婚礼电子请帖</a>&nbsp;
						<a href="#">小笑话</a>&nbsp;
						<a href="#">十大家纺排行榜</a>&nbsp;
						<br>
						<br>
						<p>© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<!--<br/>-->
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>

				</div>
			</div>

		</footer>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script type="text/javascript">
		$(function() {

				$("#tt").bigAutocomplete({
					width: 440,
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
			//		下拉菜单
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
		//----------------------------remove tab切换样式--------------------------
		$('.s-c-1f .left button').click(function() {
			$(this).parents('.s-c-1f').children('.left').each(function() {
				$('button', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		//----------------------------切换页面--------------------------
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".s-c-1f .left button").click(function() {
				var num = $(".s-c-1f .left button").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			});
		});
	</script>

</html>