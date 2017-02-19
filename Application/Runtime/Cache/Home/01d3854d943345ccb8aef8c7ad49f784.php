<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>码头部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/mtbu-zy.css" />
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
							<div class="f2-l-2">码头部队</div>
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
						<p style="float: left; display: block; width: 60px; line-height: 30px; font-size: 14px; margin-right: 30px;">所在地区</p>
						<input style="width: 100px;background: #fefefe;border: 1px solid #bbb;font-size: 12px !important;color: #333;padding: 7px;border-radius: 3px;text-align: center;" id="city" type="text" placeholder="点击选择地点">
						<img src="/matouPCS/Public/Home/img/mtbutitle.png" />
					</div>
					<div class="s-c-2f">
						<div style="width: 850px;">
							<div class="s-f2l-c1">
								<ul>
									<li>
										<a class="selected-tab" href="javascript://">热门动态</a>
									</li>
									<li>
										<a href="javascript://">工作室</a>
									</li>
									<li>
										<a href="javascript://">表演团</a>
									</li>
									<li>
										<a href="javascript://">婚庆公司</a>
									</li>
									<li>
										<a href="javascript://">影楼</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<br>
					<div class="con">
						<?php if(is_array($list)): foreach($list as $key=>$lists): ?><div class="s-c-3f">
								<div class="rmdtct">
									<ul class="rmdt">
										<li>
											<div class="rmdt-1f">
												<div class="rmdt-1fc1">
													<p><img src="/matouPCS/Public/Home/img/pltx.png" /></p>
													<p>用户<?php echo (substr($lists["username"],0,5)); ?></p>
													<p>logo</p>
													<p class="rmdtcmap">所在地：<?php echo ($lists["address"]); ?>&nbsp;郑州</p>
													<p class="rmdtcjs"><?php echo ($lists["content"]); ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="rmdt-2f">
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="clearfloat "></div>
											</div>
										</li>
										<li>
											<div class="rmdt-3f">
												<p class="rmdtcdz">点赞&nbsp;100</p>
												<p class="rmdtcfb">2016.12.12发布</p>
												<p class="clearfloat"></p>
												<br>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<br><?php endforeach; endif; ?>
					</div>
					<div class="con">
						<div class="s-c-3f">
							<div class="f3-t-1">
								<ul>
									<?php if(is_array($listg)): foreach($listg as $key=>$listgs): ?><li>
											<a href="#">
												<div class="f3-t-1-c1">
													<img src="/matouPCS/Public/Home/img/bdmc.png" />
												</div>
												<div class="f3-t-1-c2">
													<p><?php echo ($listgs["forcename"]); ?></p>
												</div>
												<div class="f3-t-1-c3l">
													<p>部队类型:<?php echo ($listgs["type"]); ?></p>
												</div>
												<div class="f3-t-1-c3r">
													<p>粉丝数量100</p>
												</div>
												<div class="f3-t-1-c4">
													<p><?php echo ($listgs["content"]); ?>...</p>
												</div>
												<div class="f3-t-1-c5">
													<p>所在地：<?php echo ($listgs["address"]); ?></p>
												</div>
												<div class="clearfloat"></div>
											</a>
										</li><?php endforeach; endif; ?>
									<li class="clearfloat"></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="con">
						333
					</div>
					<div class="con">
						444
					</div>
					<div class="con">
						555
					</div>
					<!--<div class="s-c-3f2">

					</div>-->
				</div>
				<div class="s-main-r">
					<div class="s-r-3f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/rmbd.png" /></a>
							<!--<a href="#"><img src="img/tjcz.png" /></a>-->
							<a class="clearfloat"></a>
						</div>
					</div>

					<div class="s-r-4f">
						<ul>
							<!-- 热门部队 -->
							<?php if(is_array($listn)): foreach($listn as $key=>$listns): ?><li>
									<a href="?s=/Home/Mtbu/rzbdzy/id/<?php echo ($listns["pid"]); ?>">
										<div class="tj">
											<img src="/matouPCS/Public/Home/img/bdmc.png" width="101px" height="101px">
											<div class="tj_01">
												<p class="tj_01_01" style="width: 100px;color: #333;"><?php echo ($listns["forcename"]); ?></p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important;">部队类型：<?php echo ($listns["type"]); ?></p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important; ">粉丝数量：110</p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important;">所在地点：<?php echo ($listns["address"]); ?></p>
												<p style="font-size: 12px; color:#999; margin-left:-120px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
													<?php echo ($listns["content"]); ?>
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

		<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
		<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
		<script src="/matouPCS/Public/Home/js/city-data.js"></script>
		<script src="/matouPCS/Public/Home/js/hzw-city-picker.min.js"></script>
		<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".con").eq(0).show();
				$(".s-f2l-c1 ul li a").click(function() {
					var num = $(".s-f2l-c1 ul li a").index(this);
					$(".con").hide();
					$(".con").eq(num).show().slblings().hide();
				})
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
				//----------------------------remove tab切换样式--------------------------
			$('.s-c-2f a').click(function() {
				$(this).parents('div').children('.s-f2l-c1').each(function() {
					$('a', this).removeClass('selected-tab');
				});
				$(this).attr('class', 'selected-tab');
			});
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
			//查看号码
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
	</body>

</html>