<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>应赏区</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xsdt-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<style>
			.s-f1-r ul li a .img {
				margin-top: 15px;
				margin-right: 10px;
				float: right;
			}
			
			.select-yfb {
				width: 70px;
				/*height: 100px;*/
				height: 0px;
				background-color: white;
				position: absolute;
				/*background-color: #008B8B;*/
				border-left: solid 1px #E6E6E6;
				border-right: solid 1px #E6E6E6;
				border-bottom: solid 1px #E6E6E6;
				/*right: 200px;*/
				top: 34px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-yfb ul {
				width: 70px;
				height: 150px;
				/*background-color: #008B8B;*/
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
				/*height: 100px;*/
				height: 0px;
				background-color: white;
				position: absolute;
				/*background-color: #008B8B;*/
				border-left: solid 1px #E6E6E6;
				border-right: solid 1px #E6E6E6;
				border-bottom: solid 1px #E6E6E6;
				/*right: 200px;*/
				top: 34px;
				z-index: 555;
				overflow: hidden;
			}
			
			.select-xx ul {
				width: 70px;
				height: 150px;
				/*background-color: #008B8B;*/
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
		</style>
	</head>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<body onbeforeunload="checkLeave()">
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
										<a class="action" href="#" id="find">发动态</a>
									<div class="strf"></div>
								</li>
								<li class="clearfloat"></li>
							</ul>
						</div>
						<div class="clearfloat"></div>
					</div>
					<div class="h-c-2f">
						<div class="s-f2-l">
							<div class="f2-l-1">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/logo.png" />
								</a>
							</div>
							<a href="?s=/Home/Xsdt">
								<div class="f2-l-2-f">悬赏大厅</div>
							</a>
							<div class="f2-l-3-f">应赏区</div>
						</div>
						<div class="s-f2-r">
							<div class="demo">
								<form action="http://www.jsfoot.com/e/search/index.php" method="post" name="searchform" id="searchform" class="searchinfo">
									<ul>
										<li><input type="text" id="tt" value="" class="text" style="text-align: left;" autocomplete="off" /></li>
										<li><input type="submit" value="搜索" class="button" /></li>
										<li><input type="submit" value="商家认证部队" class="button2" /></li>

									</ul>
								</form>
							</div>
						</div>
					</div>
					<div class="h-c-3f">
						<img src="/matouPCS/Public/Home/img/banner1.png" />
					</div>
				</div>
			</div>
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
		<section>
			<div class="s-main-c">
				<div class="s-main-l">
					<div class="s-c-1f">
						<p style="position: relative;top: 10px;">
							<a href="#" style="font-size: 16px;">所有分类</a>>
							<a href="#" style="font-size: 14px; color: #999;">找到相关<?php echo ($num); ?>条相关结果</a>
						</p>
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
									<div class="xz-date" >
										<input type="text" id="dt" readonly="readonly" placeholder="请选择活动时间">
									</div>
									<div class="sjxz">
										<div id="dd"></div>
									</div>
								</dd>
							</dl>
							<!--<dl>
								<dt>所在地</dt>
								<dd>
									<div>
										<input id="city" type="text" placeholder="点击选择地点" />
									</div>
								</dd>
							</dl>-->
							<div class="px">
								<p>排序：</p>
								<div class="hot">
									最新
								</div>
								<div class="new">
									热门
								</div>
							</div>
						</div>
					</div>
					<div class="s-c-3f" id="ajax_lists">
						
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-r-1f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjys.png" /></a>
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-2f-f">
						<ul>
							<!-- 推荐应赏 -->
							<?php if(is_array($xxoo)): foreach($xxoo as $key=>$listn): ?><li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($listn["did"]); ?>">
										<div class="yp">
											<div class="xg">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
												<div class="xg_01">
													<p class="xg_01_01"><?php echo ($listn["name"]); ?></p>
													<p class="xg_01_01"><?php echo ($listn["age"]); ?>岁</p>
													<p class="xg_01_01"><?php echo ($listn["type_d"]); ?></p>
													<p class="xg_01_02">&nbsp;作品数量：<b style="color:#666666; font-weight:500;">5个</b></p>
													<p class="xg_01_03">个人简介：<b style="color:#666666; font-weight:500;"><?php echo ($listn["content"]); ?></b></p>
												</div>
											</div>
											<div class="xg_02">
												<p class="xg_02_01">已有<?php echo ($listn["collect"]); ?>人收藏</p>
												<p class="xg_02_02"><?php echo ($listn["address"]); ?></p>
											</div>

										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<!--<li class="clearfloat"></li>-->
						</ul>
					</div>
					<div class="s-r-3f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjbd.png" /></a>
							<!--<a href="#"><img src="img/tjcz.png" /></a>-->
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-4f">
						<ul>
							<!-- 推荐部队  -->
							<?php if(is_array($listnn)): foreach($listnn as $key=>$listnns): ?><li>
									<a href="?s=/Home/Mtbu/rzbdzy/id/<?php echo ($listnns["id"]); ?>">
										<div class="tj">
											<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											<div class="tj_01">
												<p class="tj_01_01" style="100px"><?php echo ($listnns["forcename"]); ?></p>
												<p class="tj_01_02" style="100px">部队类型：<b style="color:#666666; font-weight:500"><?php echo ($listnns["type"]); ?></b></p>
												<p class="tj_01_02" style="100px">粉丝数量：<b style="color:#666666; font-weight:500">110</b></p>
												<p class="tj_01_02" style="100px">
													所在地点：<b style="color:#666666; font-weight:500"><?php echo ($listnns["address"]); ?></b>
												</p>

												<p style="font-size: 12px; color:#666666; margin-left:-120px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
													<?php echo ($listnns["content"]); ?>
												</p>
											</div>

										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<!--<li class="clearfloat"></li>-->
						</ul>

					</div>
				</div>
			</div>
			<div class="clearfloat"></div>
		</section>
		<footer>
			<div class="f-main-c">
				<div class="f-c-1f">
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
							<img style="margin-left: 45px;" src="/matouPCS/Public/Home/img/erweima_bottom.png" />
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
				</div>
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
	<script src="/matouPCS/Public/Home/js/sousuo.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/ys.js"></script>
	<script type="text/javascript">
		//日期
		$('#dd').calendar({
				trigger: '#dt',
				zIndex: 999,
				format: 'yyyy-mm-dd',
				onSelected: function(view, date, data) {
					console.log('event: onSelected');
					
				},
				onClose: function(view, date, data) {
					console.log('event: onClose')
					console.log('view:' + view)
					console.log('date:' + date)
					console.log('data:' + (data || 'None'));
				}
			});

		$(function() {
			$("#filter a").hover(
				function() {
					$(this).addClass("seling");
				},
				function() {
					$(this).removeClass("seling");
				}
			);

			//选中filter下所有的dt标签，并且为dt标签后面的第一个dd标签下的a标签添加样式seled。(感叹jquery的强大)
			$("#filter dt+dd a").attr("class", "seled");
			/*注意：这儿应该是设置(attr)样式，而不是添加样式(addClass)，
			                                                     不然后面通过$("#filter a[class='seled']")访问不到class样式为seled的a标签。*/

			//为filter下的所有a标签添加单击事件
			$("#filter a").click(function() {
				$(this).parents("dl").children("dd").each(function() {
					//下面三种方式效果相同（第三种写法的内部就是调用了find()函数，所以，第二、三种方法是等价的。）
					//$(this).children("div").children("a").removeClass("seled");
					//$(this).find("a").removeClass("seled");
					$('a', this).removeClass("seled");
				});

				$(this).attr("class", "seled");

				//				alert(RetSelecteds()); //返回选中结果
			});
			//返回选中结果
		});

		function RetSelecteds() {
			var result = "";
			$("#filter a[class='seled']").each(function() {
				result += $(this).html() + "\n";
			});
			return result;
		}
		//		$('#date').click(function(){
		//				alert(RetSelecteds()+$('#date').val()+$('#city').val());
		//			})
		$('.px .hot').click(function() {
			$('.px .hot').css('background-color', '#ff5c5d');
			$('.px .new').css('background-color', '#999999');
		})
		$('.px .new').click(function() {
				$('.px .new').css('background-color', '#ff5c5d');
				$('.px .hot').css('background-color', '#999999');
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
		});//查看号码
		$(function() {
			$("#find").click(function() {
				//				alert("充值")
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