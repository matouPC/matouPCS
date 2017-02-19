<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/spbddnxq-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<!--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->  
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
						<!--<img src="img/navbg3.png" />-->
						<!--<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="img/ss-t.png" />
							</div>
						</div>-->
						<div class="s-f1">
							<div class="bjzl">
								<button>编辑个人资料</button>
							</div>
							<div class="yhtx">
								<img src="/matouPCS/Public/Home/img/yhmc.png">
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<div class="rzbd">
								<button>认证部队</button>
							</div>
						</div>
						<div class="s-f2">
							<p class="yhmc">
								<a href="">用户名称</a>
							</p>
							<p style="text-align: center;">
								（摄影师）
							</p>
							<div>
								<p class="fsl">
								<span style="font-size: 24px; display: block; float: left; margin-top: -2px;" class="icon-fs"></span>
								<span style="display: block; float: left;">1000</span>
							</p>
							<p class="szd">
								<span style="font-size: 18px;" class="icon-szd"></span>
								<span style="display: block; float: right; line-height: 20px;">郑州</span>
							</p>
							<p class="clearfloat"></p>
							</div>
						</div>
						<div class="clearfloat"></div>
						<div class="s-f3">
							<button disabled="disabled">关注</button>
						</div>
						<div class="s-f4">
							<div>
								<a style="width: 120px;" href="">基本信息</a>
								<a href="spbddndt-3r-xy.html">动态</a>
								<a style="color: #FF5C5D;" href="spbddnxq-3r-xy.html">需求</a>
								<a style="width: 105px;" href="spbddnly-3r-xy.html">留言区</a>
							</div>
						</div>
					</div>
					<!--<div class="h-c-3f">
						<img src="img/navbg4.png" />
						<a href="#"><div class="h-f3-c1">BTN</div></a>
						<div class="h-f3-c2"><a href="#">进入跳骚市场</a></div>
					</div>-->
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-c-1f">
					<div class="left">
					<!--<div class="left-dt">
						<p>全部动态</p>
						<img src="img/xxjt.png" />
						<div class="select-dt">
							<ul>
								<li style="padding-top: 5px;">
									<a href="javascript://">全部动态</a>
								</li>
								<li>
									<a href="javascript://">活动动态</a>
								</li>
							</ul>
						</div>
					</div>-->
					<div class="left-xq">
						<p>全部需求</p>
						<img src="/matouPCS/Public/Home/img/xxjt.png" />
						<div class="select-xq">
							<ul>
								<li style="padding-top: 5px;">
									<a href="javascript://">悬赏需求</a>
								</li>
								<li>
									<a href="javascript://">应赏需求</a>
								</li>
								<li>
									<a href="javascript://">应聘需求</a>
								</li>
								<li>
									<a href="javascript://">求购二手</a>
								</li>
								<li>
									<a href="javascript://">处理闲置</a>
								</li>
							</ul>
						</div>
					</div>
					</div>
					<div class="center">
						<p>排序：</p>
						<a class="selected" href="javascript://">热门</a>
						<a href="javascript://">最新</a>
					</div>
					<div class="right">
						<input type="text" placeholder="搜索全站" />
						<div class="ss-t">
							<button></button>
						</div>
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-c-1f">
						<div class="s-c-1f-3f">
							<div class="top">
								<div class="lyq">
									<button>留 言 区</button>
								</div>
								<div class="textarea">
									<textarea></textarea>
								</div>
								<div class="fbly">
									<button>发布留言</button>
								</div>
							</div>
							<ul>
								<li>
									<div class="left">
										<a href="">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">
												<a href="">用户名称</a>
											</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
										<div class="bottom">
											<p class="sj">4小时前</p>
											<p class="dz dz-qx"><span class="icon-dz"></span>1000</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">
												<a href="">用户名称</a>
											</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
										<div class="bottom">
											<p class="sj">4小时前</p>
											<p class="dz dz-qx"><span class="icon-dz"></span>1000</p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</li>
								<li>
									<div class="left">
										<a href="">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">
												<a href="">用户名称</a>
											</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
										<div class="bottom">
											<p class="sj">4小时前</p>
											<p class="dz dz-qx"><span class="icon-dz"></span>1000</p>
											<p class="clearfloat"></p>
										</div>
									</div>
									<div class="clearfloat"></div>
								</li>
							</ul>
							<p class="ckgd">
								<a href="spbddnly-3r-xy.html">查看更多 》</a>
							</p>
						</div>
					</div>
					<div class="s-c-2f">
						<div class="s-c-2f-main">
							<div class="s-c-2f-1f">
								<div class="title">
									码 头 商 铺
								</div>
								<div class="bj">
									<img src="/matouPCS/Public/Home/img/bj-gray.png" />
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-2f-2f">
								<p>商铺名称</p>
								<p style="color: #000;">商铺名称商铺名称</p>
								<p>商铺地址</p>
								<p style="color: #000; padding-bottom: 15px; border-bottom: solid #CCCCCC 1px;">商铺地址商铺地址</p>
								<p style="margin-top: 15px;">主营商品：</p>
								<p class="zysp">主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品主营商品</p>
								<hr style="border:none; border-top: solid #CCCCCC 1px ;">
								<p style="margin-top: 15px;">手机号</p>
								<p style="color: #000;">137*******02</p>
								<p>QQ号</p>
								<p style="color: #000;">989898989</p>
								<p>网店</p>
								<p style="color: #000;">淘宝</p>
							</div>
							<p class="ckgd">
								<a href="">进入商铺 》</a>
							</p>
						</div>
					</div>
				</div>
				<div class="s-main-l">
					<div class="s-c-3f">
						<ul>
							<li>
								<a href="">
									<p>
										<span>活动时间：</span>
										<span class="hdsj">2016-12-12</span>
										<span>活动地点：</span>
										<span class="hddd">郑州</span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
									</p>
										</a>
									<p style="margin-top: 6px;">
										<span class="sc">已有10人收藏</span>
										<span class="fb">2016-12-12</span>
										<span id="delete" class="delete">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</span>
										<span class="clearfloat"></span>
									</p>
							</li>
							<li>
								<a href="">
									<p>
										<span>工作地点：</span>
										<span class="hddd">郑州</span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
										<span class="clearfloat"></span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
										<span class="clearfloat"></span>
									</p>
									<p>
										<span class="sys">摄影师</span>
										<span class="sex">女</span>
										<span class="age">年龄</span>
										<span>岗位要求：</span>
										<span class="gwyq">具体要求具体要求具体要求具体要求具体要求具体要求具体要求。。。</span>
										<span class="price">3000元/天</span>
										<span class="bmrs">10人报名</span>
										<span class="clearfloat"></span>
									</p>
								</a>
								<p style="margin-top: 6px;">
										<span class="sc">已有10人收藏</span>
										<span class="fb">2016-12-12</span>
										<span id="delete" class="delete">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</span>
										<span class="clearfloat"></span>
									</p>
							</li>
							<li>
								<a href="">
									<p>
										<span class="name">陈女士</span>
										<span class="age">年龄</span>
										<span>工作经验：</span>
										<span class="gzjy">1-2年</span>
										<span>个人简介：</span>
										<span class="grjj">个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介</span>
										<span class="zw">摄影师</span>
										<span class="clearfloat"></span>
									</p>
									<p>
										<span>工作时间：</span>
										<span class="gzsj">2013-04~2016-03</span>
										<span>所在公司：</span>
										<span class="szgs">某某某公司</span>
										<span>职位：</span>
										<span class="drzw">摄影师</span>
										<span class="clearfloat"></span>
									</p>
								</a>
								<p style="margin-top: 6px;">
										<span class="sc">已有10人收藏</span>
										<span class="fb">2016-12-12</span>
										<span id="delete" class="delete">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</span>
										<span class="clearfloat"></span>
									</p>
							</li>
							<li>
								<a href="">
									<!--<div class="yhtx">
										<img src="img/yhmc-big.png" />
									</div>-->
									<div style="width: 100%;" class="word">
										<div>
											<p class="mc">求购物品：音响</p>
											<p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥500</p>
											<div class="clearfloat"></div>
										</div>
											<span class="word-jtyq" style="width: 100%;">
												<strong style="font-weight: 500; color: #000000;">具体要求：</strong>
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
											</span>
									</div>
									<div class="clearfloat"></div>
								</a>
								<p style="margin-top: 2px;">
										<span class="sc">已有10人收藏</span>
										<span class="fb">2016-12-12</span>
										<span id="delete" class="delete">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</span>
										<span class="clearfloat"></span>
									</p>
							</li>
							<li>
								<a href="">
									<div class="yhtx">
										<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
									</div>
									<div class="word">
										<div>
											<p class="mc">闲置名称：音响</p>
											<p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥500</p>
											<div class="clearfloat"></div>
										</div>
										<p>
											<span class="word-jtyq">
												<strong style="font-weight: 500; color: #000000;">具体要求：</strong>
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
												具体要求具体要求具体要求具体要求具体要求具体要求具体要求具体要求
											</span>
										</p>
									</div>
									<div class="clearfloat"></div>
								</a>
								<p class="word-bottom" style="bottom: 28px;">
											<span class="sc">已有10人收藏</span>
											<span class="fb">2016-12-12</span>
											<span class="delete">
												<img src="/matouPCS/Public/Home/img/delete-2.png" />
											</span>
											<span class="clearfloat"></span>
										</p>
							</li>
						</ul>
					</div>
					<div class="s-main-b">
						<div class="margin">
							<button>点击加载更多</button>
						</div>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>

		</section>
		<br>
		<br>
		<br>
		<footer>
			<div class="f-main-c">
				<!--<div class="f-c-1f">
					<ul>
						<li>
							<h4>喜事码头客服热线</h4></li>
						<li>
							<p>工作时间：每天9：00-23：00</p>
						</li>
						<li>
							<p>188-8888-888</p>
						</li>
					</ul>
					<ul>
						<li>
							<h4>关注喜事码头官方微信公众号</h4></li>
						<li>
							<img style="margin-left: 45px;" src="img/erweima_bottom.png" />
						</li>

					</ul>
					<ul>
						<li>
							<h4>关于我们</h4></li>
						<li>
							<a href="#">
								<p>关于喜事码头</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>码头部队</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>码头商城</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>合伙人招募</p>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<h4>联系我们</h4></li>
						<li>
							<a href="#">
								<p>官方邮箱：xishimatou@163.com</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>通讯地址：河南省郑州市863软件园</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>码头商城</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p>合伙人招募</p>
							</a>
						</li>
					</ul>
				</div>-->
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
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
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
		
		//--------------------------全部动态下拉----------------------------------
		$('.s-main-c-1f .left-dt').hover(function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color','#FF5C5D');
			$('.select-dt').stop().animate({
				height: '65px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color','#999999');
			$('.select-dt').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('.s-main-c-1f .left-dt ul li a').click(function(){
			$('.left-dt p').html($(this).html());
			$('.select-dt').stop().animate({
				height: '0px'
			}, 300);
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
		});
		
		//--------------------------全部需求下拉----------------------------------
		$('.s-main-c-1f .left-xq').hover(function() {
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-xq ul').css('background-color','#FF5C5D');
			$('.select-xq').stop().animate({
				height: '155px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-xq ul').css('background-color','#999999');
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('.s-main-c-1f .left-xq ul li a').click(function(){
			$('.left-xq p').html($(this).html());
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
		});
		//----------------------------remove tab切换样式--------------------------
		$('.s-main-c-1f .center a').click(function() {
			$(this).parents('.s-main-c-1f').children('.center').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		$('.s-c-2f-4f .zp a').click(function() {
			$(this).parents('.s-c-2f-4f').children('.zp').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		//----------------------------删除动态/需求--------------------------
		$('.delete').click(function(){
			$(this).parents('li').remove();
		});
		//----------------------------点赞--------------------------
		$('.dz-qx span').click(function(){
			if($(this).hasClass('icon-dz')){
				$(this).removeClass('icon-dz');
				$(this).addClass('icon-dz-kz');
			}else{
				$(this).removeClass('icon-dz-kz');
				$(this).addClass('icon-dz');
			}
		});
	</script>

</html>