<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>码头商城</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/tjcs-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
			.select-yfb ul li a{
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
			.select-xx ul li a{
				width: 70px;
				height: 25px;
				line-height: 25px !important;
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
								<img src="/matouPCS/Public/Home/img/home.png" />
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<literal>
                     				<?php if($_SESSION['username'] == '' ): ?><li style="width:100px; ">
											<a id="login-alert" href="#">请注册\登录</a>
										</li>
									<?php else: ?>
										<li style="width: 100px;">
											<a href="#">
												<img src="/matouPCS/Public/Home/img/tx.png" />
												<p >用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
											</a>
											<div class="str"></div>
										</li><?php endif; ?>
								<literal>
								<li id="select-xx" style="width: 45px;">
									<a href="#">消息</a>
									<div class="str"></div>
									<div class="select-xx">
										<ul>
											<li><a href="">需求消息</a></li>
											<li><a href="">部队消息</a></li>
											<li><a href="">商铺消息</a></li>
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
											<li><a href="">悬赏</a></li>
											<li><a href="">应赏</a></li>
											<li><a href="">招聘</a></li>
											<li><a href="">应聘</a></li>
											<li><a href="">求购</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
											<li><a href="">闲置</a></li>
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
						<div class="s-f2-l">
							<div class="f2-l-1">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/logo.png" />
								</a>
							</div>
							<div class="f2-l-2">码头商城</div>
							<!--<div class="f2-l-3">应赏区</div>-->
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
						<img src="/matouPCS/Public/Home/img/banner.png" />
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-l">
					<div class="s-c-1f">
						<a href="#">所有分类</a>>
						<a href="#">找到相关<?php echo ($num); ?>条相关结果</a>
					</div>
					<div class="s-c-2f">
						<div id="filter">
							<dl>
								<dt>类型</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>销售</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>租赁</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>物品</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>音响</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>舞台</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>灯光</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>屏幕</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>泡泡机</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>彩妆饰品</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>摄影摄影器材</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>婚纱礼服</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>婚车</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>其他</a>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>价格</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div style="color: #000000;">
										<input type="number" style="width: 65px; margin-top: 17px; border: solid 1px #CCCCCC; float:left;">
										<span style="font-size:25px; display:block; width:20px; height:30px; color: #999999; float :left; margin-top:-1px; text-align:center;">-</span>
										<input type="number" style="width: 65px; margin-top: 15px;border: solid 1px #CCCCCC;">元
										<button style="outline: none; margin-left: 20px; background-color: #FF5C5D; border: 0; color: white; border-radius: 10px; width: 40px; height: 18px;">
											ok
										</button>
									</div>
								</dd>

							</dl>
							<div class="px">
								<p>排序：</p>
								<div class="hot">
									热门
								</div>
								<div class="new">
									最新
								</div>
							</div>

						</div>
					</div>
					<div class="px2">
						<div class="hot">
							<a href="?s=/Home/Tjcs" style="color: #fff;">显示物品</a>
						</div>
						<div class="new">
							显示商铺
						</div>
					</div>
					<br>
					<?php if(is_array($list)): foreach($list as $key=>$lists): ?><div class="s-c-3f">
							<div class="f3-c-1">
								<div class="f3-c-user">
									<div class="f3-c-user-img">
										<img src="/matouPCS/Public/Home/img/bdmc.png" />
									</div>
									<div class="f3-c-user-xx">
										<p style="background: #f2f2f2; border-radius: 5px;">
											<a href="#"><?php echo ($lists["shopname"]); ?></a>
										</p>
										<p>
											<a href="#"><?php echo ($lists["type"]); ?></a>
										</p>
										<p>
											<a href="#">收藏量<?php echo ($lists["collect"]); ?></a>
										</p>
										<p>
											<a href="#"><?php echo ($lists["address"]); ?></a>
										</p>
										<p class="clearfloat"></p>
									</div>
								</div>
								<ul>
									<?php if(is_array($data)): foreach($data as $key=>$datas): if($lists['uid'] == $datas['usid']){ ?>
									<li>
										<a href="#">
											<div class="f3-ul-cz">
												<img src="/matouPCS/Public/Home/img/123.png" />
											</div>
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
											<div class="f3-ul-c1">
												<!--<p>商铺名称:</p>-->
												<!--<p>商品名称:摄像机</p>-->
												<p style="width: 50px; color: red;">￥<?php echo ($datas["price"]); ?>元</p>
												<p style="width: 80%; text-align: right;color: #ccc;">浏览量:200次</p>
												<p style="width: 250px;"><?php echo ($datas["content"]); ?></p>
											</div>
											<div class="f3-ul-c2">
											</div>
										</a>
									</li>
									<?php } endforeach; endif; ?>
									<!--<li class="clearfloat" style="border: 0;"></li>-->
								</ul>
							</div>
						</div>
						<br><?php endforeach; endif; ?>
				</div>
				<div class="s-main-r">
					<div class="s-r-1f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjcz-hui.png" /></a>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjcs-hong.png" /></a>
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-2f">
						<ul>
							<li>
								<a href="#">
									<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
									<div class="f2r-ul-c1">
										<p>商铺名称:</p>
										<p>商品名称:摄像机</p>
										<p style="width: 50px; color: #FF5C5D;">￥500元</p>
									</div>
									<br>
									<div class="f2r-ul-c2">
										<p>浏览量:200次<</p>
										<p style="width: 25px;">郑州</p>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
									<div class="f2r-ul-c1">
										<p>商铺名称:</p>
										<p>商品名称:摄像机</p>
										<p style="width: 50px; color: #FF5C5D;">￥500元</p>
									</div>
									<br>
									<div class="f2r-ul-c2">
										<p>浏览量:200次</p>
										<p style="width: 25px;">郑州</p>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
									<div class="f2r-ul-c1">
										<p>商铺名称:</p>
										<p>商品名称:摄像机</p>
										<p style="width: 50px; color: #FF5C5D;">￥500元</p>
									</div>
									<br>
									<div class="f2r-ul-c2">
										<p>浏览量:200次</p>
										<p style="width: 25px;">郑州</p>
									</div>
								</a>
							</li>
							<li class="clearfloat"></li>
						</ul>
					</div>
					<div class="s-r-3f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjsp.png" /></a>
							<!--<a href="#"><img src="img/tjcz.png" /></a>-->
							<a class="clearfloat"></a>
						</div>
					</div>

					<div class="s-r-4f">
						<ul>
							<?php if(is_array($listn)): foreach($listn as $key=>$listns): ?><li><a href="#">
								<div class="tj">
									<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
									<div class="tj_01">
										<p class="tj_01_01" style="100px">部队名称：<?php echo ($listns["forcename"]); ?></p>
										<p class="tj_01_02" style="100px">部队类型：<b style="color:#666666; font-weight:500"><?php echo ($listns["type"]); ?></b></p>
										<p class="tj_01_02" style="100px">粉丝数量：<b style="color:#666666; font-weight:500">110</b></p>
										<p class="tj_01_02" style="100px">
											所在地点：<b style="color:#666666; font-weight:500"><?php echo ($listns["address"]); ?></b>
										</p>
										
										<p style="font-size: 12px; color:#666666; margin-left:-120px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
											<?php echo ($listns["content"]); ?>
										</p>
									</div>

								</div></a>
							</li><?php endforeach; endif; ?>
							<!--<li class="clearfloat"></li>-->
						</ul>

					</div>
				</div>
			</div>
			<div class="clearfloat"></div>
		</section>
		<br>
		<br>
		<br>
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
		<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
		<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
		<script src="/matouPCS/Public/Home/js/city-data.js"></script>
		<script src="/matouPCS/Public/Home/js/hzw-city-picker.min.js"></script>
		<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
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

			//			地址选择
			var cityPicker = new HzwCityPicker({
				data: data,
				target: 'city',
				valType: 'k-v',
				hideCityInput: {
					name: 'city',
					id: 'city'
				},
				hideProvinceInput: {
					name: 'province',
					id: 'province'
				}

			});
			cityPicker.init();

			$(function() {
				//日期
				$('#date').date_input();
				//选中filter下的所有a标签，为其添加hover方法，该方法有两个参数，分别是鼠标移上和移开所执行的函数。
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
				height:'150px'
			}, 300);
		},function(){
				$('#select-yfb a img').css('transition-duration', '.5s');
			$('#select-yfb a img').css('transform', 'rotate(0deg)');
			$('.select-yfb').stop().animate({
				height:'0px'
			}, 300);
		});
		$('#select-xx').hover(function() {
			$('.select-xx').stop().animate({
				height:'75px'
			}, 300);
		},function(){
			$('.select-xx').stop().animate({
				height:'0px'
			}, 300);
		});
		</script>

	</body>

</html>