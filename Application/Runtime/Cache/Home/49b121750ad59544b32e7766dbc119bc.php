<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>悬赏详情</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xqxs-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
	</head>

	<body>
		<div class="show-bg"></div>
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
		<div class="spdl" id="spdl" title="消息">
			<div class="spdl-c">
				<span>查看需要消耗5个码头币</span>
				<a href="#">请充值</a>
			</div>
			<button class="spdl-ok" id="spdl-ok">确定</button>
			<button class="spdl-esc" id="spdl-esc">取消</button>
		</div>
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
				<a href="#" style="margin-left: 24px;">
					<p id="fbp2">门面活动</p>
				</a>
			</div>
			<div class="spfxb"></div>
			<div class="contentb">
				<textarea style="resize: none; width: 420px; height: 100px;border-radius: 15px;margin-left: 40px; border: 0;padding: 10px;"></textarea>
			</div>
			<div class="swbtnb">
				<div class="swbtn-cb">
					<div>
						<img src="/matouPCS/Public/Home/img/addp.png" />
					</div>
					<div style="margin-left: 10px;">
						<img src="/matouPCS/Public/Home/img/adds.png" />
					</div>
					<button class="tjbtnb" id="tjbtn">发布</button>
				</div>
			</div>
		</div>
		<section>

			<div class="s-main-c">

				<div class="s-main-r">
					<div class="userin">
						<div class="u-img">
							<a href="#"><img src="/matouPCS/Public/Home/img/tx2-3r.png"></a>
						</div>
						<div class="u-cont">
							<p style="font-size: 14px;"><strong><a href="#">用户<?php echo (substr($list["username"],0,5)); ?></a></strong></p>
							<p style="font-size: 12px;margin-top: 10px;">职位：摄影师</p>
							<p style="font-size: 12px;margin-top: 10px;">所在地：<?php echo ($list["addre"]); ?></p>
							<button>进入Ta的主页</button>
						</div>
					</div>
					<br>
					<div class="bdsz">
						<div class="bdsz-bt">
							悬赏详情
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://">
									悬赏要求
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<p><strong>基本信息</strong></p>
						</div>
						<div class="s-2f-c2">
							<div class="c2-ct1">
								<p><span class="xqcc-c0">所在地点：</span><span class="xqcc-c3"><?php echo ($list["address"]); ?></span></p>
								<p><span class="xqcc-c0">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span><span class="xqcc-c3">暂无</span></p>
							</div>
							<div class="c2-ct2">
								<p><span class="xqcc-c0">QQ号码：</span><span class="xqcc-c3"><?php echo ($list["qqs"]); ?></span></p>
								<p id="spdl-p"><span class="xqcc-c0">联系电话：</span><span class="xqcc-c3"><?php echo (substr($list["tels"],0,3)); ?>XXXX<?php echo (substr($list["tels"],7,11)); ?></span></p><button id="sp">查看号码 </button>
								<input type="hidden" id="vv" value="<?php echo ($list["tels"]); ?>">
							</div>
						</div>
						<br>
					</div>
						<div class="s-c-2f" style="border-bottom: 0px!important;">
							<div class="s-2f-c1">
								<span class="hfx"></span>
								<p><strong>悬赏要求</strong></p>
							</div>
							<?php if(is_array($listNew)): foreach($listNew as $key=>$listNews): if($list['pid'] == $listNews['psid']){ ?>
								<div class="xqwc">
									<div class="xqcc">
										<p class="xqcc-c">
											<span class="xqcc-c0">职位名称：</span><span class="xqcc-c3"><?php echo ($listNews["type"]); ?></span><span class="xqcc-c1">赏金：</span><span class="xqcc-c3"><?php echo ($listNews["price"]); ?>&nbsp;k/天</span>
										</p>
										<p class="xqcc-c">
											<span class="xqcc-c0">性别：</span><span class="xqcc-c3">女</span><span class="xqcc-c1">年龄：</span><span class="xqcc-c3"><?php echo ($listNews["age"]); ?>岁</span><span class="xqcc-c1">工作经验：</span><span class="xqcc-c3">1-2年</span><span class="xqcc-c1">报销路费：</span><span class="xqcc-c3">否</span>
										</p>
										<p class="xqcc-c"><span class="xqcc-c0">工作内容：</span><span class="xqcc-c2"><?php echo ($listNews["yaoqiu"]); ?>...</span></p>
										<br>
									</div>
									
										<?php  $bao = explode(',',$listNews['bao']); array_pop($bao); $num = count($bao); ?>
										 <?php if($listNews['bao_st'] == '2'){ ?>
												<div class="xqbta a<?php echo ($listNews["wid"]); ?>"  style="background:#ccc;">
													<a href="#" style="font-size:12px;">报名结束</a>
												</div>
										 <?php }else if(in_array($_SESSION['id'], $bao)){ ?>
											 <div class="xqbta a<?php echo ($listNews["wid"]); ?>"  style="background:#ccc;" id="bt-p<?php echo ($listNews["wid"]); ?>">
												<a href="#" style="font-size:12px;">已有<?php echo ($num); ?>人报名</a>
											</div>
										<?php }else{ ?>
											<?php if(empty($_SESSION['id'])){ ?>
												<div class="xqbta a<?php echo ($listNews["wid"]); ?>"  id="bt-p<?php echo ($listNews["wid"]); ?>">
													<a href="#" onclick="alert('请先登录');">我要报名</a>
												</div>
											<?php }else if(!empty($_SESSION['id'])){ ?>
												<div class="xqbta a<?php echo ($listNews["wid"]); ?>"  id="bt-p<?php echo ($listNews["wid"]); ?>">
													<a href="#" onclick="tian(<?php echo ($listNews["wid"]); ?>)">我要报名</a>
												</div>
											<?php } ?>
										<?php } ?>
									
									<div class="clearfloat "></div>
								</div>
								<br>
								<?php } endforeach; endif; ?>
							<script type="text/javascript">
								function tian(wid){
									alert(wid);
									if(window.confirm('你确定要报名么？')){
										if($("#bt-p"+wid+" a").text() == '我要报名'){
											$.ajax({
												url:"?s=/Home/xsdt/xqxs_bao/wid/"+wid,
												type:"get",
												dataType:"json",
												success:function(data){
													$("#bt-p"+wid+" a").css("font-size", "12px");
													$("#bt-p"+wid).css("background", "#ccc");
													$("#bt-p"+wid+" a").text("已有"+data+"人报名");
												},error:function(){
													alert('no');
												}
											});
										}else{
											alert('滚犊子');
										}
									}
										
								}
							</script>
							
							<div class="clearfloat "></div>
						</div>

					<div class="s-c-4f">
						<div class="s-tf-btn" style="margin-right: 5px;">
							<p>分享
							</p>
							<img src="/matouPCS/Public/Home/img/xzfx.png" />
						</div>
						<div class="clearfloat "></div>
					</div>
					<div class="clearfloat "></div>

					<br>
					<br>
					<div class="clearfloat "></div>
				</div>
				<div class="clearfloat "></div>
		</section>
		<br>
		<br>
		<br>
		<footer>
			<div class="f-main-c ">
				<div class="f-c-2f ">
					<div style="width: 90%; margin: 0 auto; "><br>
						<a href="# ">i店大全</a>&nbsp;
						<a href="# ">十大家纺排行榜</a>&nbsp;
						<a href="# ">鲜花礼品网</a>&nbsp;
						<a href="# ">鲜花网</a>&nbsp;
						<a href="# ">婚介</a>&nbsp;
						<a href="# ">婚礼搜索导航</a>&nbsp;
						<a href="# ">杭州婚庆网</a>&nbsp;
						<a href="# ">新娘说</a>&nbsp;
						<a href="# ">拍表网</a>&nbsp;
						<a href="# ">结婚网</a>&nbsp;
						<a href="# ">钻戒品牌</a>&nbsp;
						<a href="# ">武汉婚车租摄</a>&nbsp;
						<a href="# ">婚礼时光</a>&nbsp;
						<a href="# ">婚礼电子请帖</a>&nbsp;
						<a href="# ">小笑话</a>&nbsp;
						<a href="# ">十大家纺排行榜</a>&nbsp;
						<br>
						<br>
						<p>© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>

				</div>
			</div>

		</footer>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script type="text/javascript ">
		$(document).ready(function() {
			$(".con ").eq(0).show();
			$(".bdsz ul li ").click(function() {
				var num = $(".bdsz ul li ").index(this);
				$(".con ").hide();
				$(".con ").eq(num).show().slblings().hide();
			})
		});
		//----------------------------remove tab切换样式--------------------------
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		$(function() {

				$("#tt ").bigAutocomplete({
					width: 440,
					data: [{
						title: "中国好声音 ",
						result: {
							ff: "qq "
						}
					}, {
						title: "中国移动网上营业厅 "
					}, {
						title: "中国银行 "
					}, {
						title: "中国移动 "
					}, {
						title: "中国好声音第三期 "
					}, {
						title: "中国好声音 第一期 "
					}, {
						title: "中国电信网上营业厅 "
					}, {
						title: "中国工商银行 "
					}, {
						title: "中国好声音第二期 "
					}, {
						title: "中国地图 "
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
		//		新增
		$(function() {
			$("#hfx3-1").click(function() {
				$(".txfg1-c2-1").hide();
				//				$(".txfg1-c1-1").hide();
				$(".txfg1").css("height", "auto");
				$("#adds-f-c1").on("click", function() {
					$(".s-c-3f").detach();
					$(".txfg1").css("height", "125px");
					$(".txfg1-c2-1").show();
				});
			});
		});
		//查看号码
		$(function() {
			$("#sp").click(function() {
				//				alert("充值")
				$("#spdl").show();
			});
			$("#spdl-ok").click(function() {
				var vv = $('#vv').val();
				$("#spdl-p").text("联系电话:"+vv);
				$("#spdl .spdl-c").html('<span>支付成功<br>3秒后自动关闭</span>');
				//				<input type="text"  class="time" id="stime">
				if($("#spdl .spdl-c span").text() == "支付成功3秒后自动关闭") {
					//					$("#id").value = "5"
					//					c = c-1
					setTimeout(function() {
						$(".spdl").hide();
					}, 3000);
				}
			});
			$("#spdl-esc").click(function() {
				$(".spdl").hide();
			});
		});
		//我要报名
		// $("#bt-p").click(function(id) {
		// function bao(wid)
		// });
		//弹窗2
		$(function() {
			$("#find").click(function() {
				//								alert("充值")
				$("#spdlb").fadeIn(350).show();
				$(".show-bg").fadeIn(350).show();
				$("#find").css("background", "#ff5c5d");
			});
			$("#spdl-okb").click(function() {

			});
			$("#spdl-escb").click(function() {
				$(".spdlsb").hide();
				$(".show-bg").hide();
			});
		});
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
			$(".rhideb").click(function() {
				$("#spdlb").hide();
				$(".show-bg").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
			$("#tjbtn").click(function() {
				$("#spdlb").fhide();
				$(".show-bg").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
		});

	</script>

</html>