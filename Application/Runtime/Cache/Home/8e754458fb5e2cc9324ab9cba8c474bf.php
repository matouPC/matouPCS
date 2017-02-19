<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/rzbdsz-3r-xy.css" />
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
								<a href="index.html">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<li style="width: 100px;">
									<a href="#">
										<img src="/matouPCS/Public/Home/img/tx.png" />
										<p>chenney</p>
									</a>
									<div class="str"></div>
								</li>
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
					<!--<div class="h-c-3f">
						<img src="img/banner.png" />
					</div>-->
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-l">
					<!--<div class="s-c-1f">
						<a href="#">所有分类</a>>
						<a href="#">找到相关100.5万相关结果</a>
					</div>-->
					<div class="con">
						<div class="s-c-2f">
							<div class="s-c-2f-1f">基本信息</div>
							<div class="s-c-2f-2f">
								<ul class="ul-l">
									<li><span class="red">* </span>营业执照名称</li>
									<li><span class="red">* </span>法定代表人</li>
									<li><span class="red">* </span>部队名称</li>
									<li><span class="red">* </span>详细地址</li>
									<li><span class="red">* </span>联系电话</li>
									<li><span class="red">* </span>QQ</li>
									<li style="height: 138px;"><span class="red">* </span>部队类型</li>
									<li style="height: 110px;"><span class="red">* </span>部队简介</li>
									<li><span class="red">* </span>官网链接</li>
								</ul>
								<ul class="ul-r">
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" class="gray-in" />
									</li>
									<li>
										<input type="text" style="width: 58px; float: left;" class="white-in" placeholder="请选择" />
										<input type="text" class="white-in" style="width: 266px; float: right; margin-right: 2px;" placeholder="请选择详细地址" />
									</li>
									<li>
										<input type="text" class="white-in" style="width: 200px;" placeholder="请输入联系电话" />
									</li>
									<li>
										<input type="text" class="white-in" style="width: 200px;" placeholder="请输入QQ" />
									</li>
									<li class="parents" style="height: 138px;">
										<div class="left">
											<a class="selected" href="javascript://">婚庆公司</a>
											<a href="javascript://">影楼</a>
											<a href="javascript://">工作室</a>
											<a href="javascript://">表演团队</a>
										</div>
										<div class="right">
											<p>有门店，专注为新人举办婚礼</p>
											<p>有门店，业务包括婚纱摄影</p>
											<p>无门店，主持人团队、婚礼策划团队、婚礼摄影/摄像团队等</p>
											<p>专注歌舞、乐器演奏、民间艺术等表演的团队</p>
										</div>
										<div class="clearfloat"></div>
									</li>
									<li style="height: 110px;">
										<textarea placeholder="请输入部队简介..."></textarea>
									</li>
									<li>
										<input type="text" class="white-in" style="width: 356px;" placeholder="请输入链接地址" />
									</li>
								</ul>
								<ul class="clearfloat"></ul>
							</div>
							<div class="bjtx">
								<div class="border"></div>
								<div class="tx-button">
									<button>编辑头像</button>
								</div>
							</div>
							<div class="clearfloat"></div>
							<button id="jbxx" class="button-bc">下一步</button>
						</div>
					</div>
					<div class="con" style="display: none;">
						<div class="s-c-2f">
							<div class="s-c-2f-1f">
								<p>照片作品/</p><span>最多上传12张照片</span>
								<span class="right">									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-2f-2f-f">
								<ul>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
									<li class="na1">
										<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
										<div class="na1bg">
											<a href="javascript://">
												<div class="bj">
													<img src="/matouPCS/Public/Home/img/bj.png" />
												</div>
												<p>编辑</p>
											</a>
											<a href="javascript://">
												<div class="delete-1">
													<img src="/matouPCS/Public/Home/img/delete-1.png" />
												</div>
												<p style=" float: right; margin-right: 30px;">删除</p>
											</a>
										</div>
									</li>
								</ul>

							</div>
						</div>
						<div class="s-c-3f">
							<div class="s-c-2f-1f">
								<p>视频作品/</p><span>最多上传3个视频文件</span>
								<span class="right">
									添加视频
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-3f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="na2bg">
												<a href="javascript://">编辑视频封面</a>
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="tjtp">
												<img src="/matouPCS/Public/Home/img/tjtp.png" />
											</div>
											<p style="text-align: center; color: #999999;">
												上传视频封面
											</p>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li style="margin: 0;">
										<div class="na2">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="na2bg">
												<a href="javascript://">编辑视频封面</a>
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="clearfloat"></div>
						<div style="width: 226px; height: 30px; margin: auto; margin-bottom: 20px;">
							<button class="button-tg">跳过</button>
							<button class="button-wc">完成</button>
						</div>
					</div>
					<!--<div class="s-c-3f">
						<div class="f3-c-1">aa</div>
						<br>
						<div class="f3-c-1">aa</div>
						<br>
						<div class="f3-c-1">aa</div>
					
					</div>-->
				</div>
				<div class="s-main-r">
						<p style="font-size: 22px;">WEDDING PIER</p>
						<p style="font-size: 22px;">喜事码头</p>
						<p style="font-size: 14px; padding:10px 0;">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
						<div class="bdsz">
							<div class="bdsz-bt">
								部队认证
							</div>
							<ul>
								<li class="selected-con">
									<a href="javascript://">
										基本信息
										<img class="list-a" src="/matouPCS/Public/Home/img/list-2-gray.png" style="position: absolute; top: 76px; right: 70px;" />
									</a>
								</li>
								<li>
									<a href="javascript://">
										添加作品
										<img class="list-b" src="/matouPCS/Public/Home/img/list-2-gray.png" style="position: absolute; top: 116px; right: 70px;" />
									</a>
								</li>
							</ul>
						</div>
					</div>
			</div>
			<div class="clearfloat"></div>
		</section>
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
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".bdsz ul li").click(function() {
				var num = $(".bdsz ul li").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			})
		});
		//----------------------------remove tab切换样式--------------------------
		$('.parents .left a').click(function() {
			$(this).parents('.parents').children('.left').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		//----------------------------保存对勾变色--------------------------
		$('#jbxx').click(function(){
			$('.list-a').attr('src','/matouPCS/Public/Home/img/list-2-red.png');
		});
		$('#zpxx').click(function(){
			$('.list-b').attr('src','/matouPCS/Public/Home/img/list-2-red.png');
		});
		
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
	</script>

</html>