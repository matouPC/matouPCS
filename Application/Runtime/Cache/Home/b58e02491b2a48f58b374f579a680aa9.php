<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺主页-商品cs</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/spmc-3rsc-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/css/showWin.css" />

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
		<div class="show-bg"></div>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="?s=/Home/index.html">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/index.html">首页</a>
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
				<?php if(is_array($shop)): foreach($shop as $key=>$v): ?><div class="s-main-r">
					<div class="s-c-1f">
						<ul>
							<li>
								<a href="javascript:;">
									<div class="tj">
									<?php if($_SESSION['id'] == $v['uid']){ ?>
									<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($_GET['id']); ?>">
									<?php }else{ ?>
                                       <a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($_GET['id']); ?>">
                                       <?php } ?>
										
										<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
										
										</a>
										
										
										<div class="tj_01">
											<p class="tj_01_01"><?php echo ($v["shopname"]); ?></p>
											<p class="tj_01_02">商铺类型：<b style="color:#ccc; font-weight:500"><?php echo ($v["type"]); ?></b></p>
											<p class="tj_01_02">收藏量：
												<b style="color:#ccc; font-weight:500"><?php echo ($v["collect"]); ?></b>
											</p>

											<button id="btn" class="tj_01_03" onclick="change()">收藏商铺</button>
											<!--<p class="tj_01_03" style="margin-top:10px;">
												<button id="btn" onclick="change()">关注</button>
											</p>-->
										</div>

									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="s-c-ff">
						<div class="s-c-f1">
							<div class="s-c-f1-01">
								<p class="s-c-f1-01-01">商铺地址</p>
								<p class="s-c-f1-01-02"><?php echo ($v["address"]); ?></p>
							</div>
							<div class="s-c-f1-02">
								<p class="s-c-f1-01-01">主营商品</p>
								<p class="s-c-f1-02-02"><?php echo ($v["zysp"]); ?>
								</p>
							</div>
							<div class="s-c-f1-03">
								<p class="s-c-f1-03-01">手机号</p>
								<p class="s-c-f1-03-02"><?php echo ($v["tel"]); ?></p>
								<p class="s-c-f1-03-01" style="margin-top:10px;">QQ号</p>
								<p class="s-c-f1-03-02"><?php echo ($v["qq"]); ?></p>
								<p class="s-c-f1-03-01" style="margin-top:8px;"><?php echo ($v["wangzhan"]); ?></p>
								<p class="s-c-f1-03-03"><?php echo ($v["lianjie"]); ?></p>
							</div>
						</div>
					</div><?php endforeach; endif; ?>
				</div>

				<div class="s-main-l">

					<div class="s-c-2f">
						<div style="width: 850px;">
							<div class="s-f2l-c1">
								<ul>
									<li>
										<a class="selected-tab" href="javascript://">商品</a>
									</li>
									<!--<li>
										<a href="javascript://">出售商品</a>
									</li>-->
									<li>
										<a href="javascript://">留言区</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--<br>-->
					<div class="con">
						<div class="czsp">
							<ul>
								<?php if(is_array($shangpin)): foreach($shangpin as $key=>$v): ?><li>
									<img src="Uploads/Uploads/<?php echo ($v["pubtimes"]); ?>/<?php echo ($v["imagenames"]); ?>" width="254" height="150">
									<div class="czsp_01">
										<div class="czsp_01_00">
											<p class="czsp_01_01">￥<?php echo ($v["price"]); ?>元</p>
											<p class="czsp_01_02">浏览量<?php echo ($v["liulan"]); ?>次</p>
										</div>
										<p class="czsp_02"><?php echo ($v["content"]); ?></p>
									</div>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="con">
						<div class="s-c-4f">
							<p class="title">
								想问商铺主人问题？就来这里留言吧~
							</p>
							<div class="s-c-4f-1f">
						<textarea id="contents" name="contents"></textarea>
							</div>
							<div class="s-c-4f-2f">
								<button onclick="liuyan(<?php echo ($_GET['id']); ?>)" class="right">
									发留言
								</button>
							</div>						
						</div>
						<script type="text/javascript">
								function liuyan(id){
									//alert(1);
									var contents = $('#contents').val();
									if(contents.replace(/\s+/g, "")){
										$.ajax({
											url:"?s=/Home/Mtbu/spbddyly_liuyan",
											type:"post",
											data:{id:id,contents:contents},
											dataType:"json",
											success:function(data){
											//	alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
													var use = data[i].username.substr(0,5);
													li+=' <div class="s-c-3f-1f"><div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">用户'+use+'</a></p><p class="zwmc"> 职位名称： </p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+' </p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">1000000000</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
												};
												$('#li').html(li);
												$('#contents').val('');
											},error:function(){
												alert('no');
											}
										});
									}else{
										alert('no');
									}
								}
							</script>
						<div  id="li" class="s-c-3f">
				
							<?php if(is_array($list)): foreach($list as $key=>$lis): ?><div class="s-c-3f-1f">
							<!--<div class="mdhd">
								<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>-->
							<div>
						
								<div class="yhtx">
									<a href="">
										<img src="/matouPCS/Public/Home/img/yhmc.png" />
									</a>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
									<div class="clearfloat"></div>
								</div>
								<p class="yhmc">
									<a href="">用户<?php echo (substr($lis["username"],0,5)); ?></a>
								</p>
								<p class="zwmc">
									职位名称：<?php echo ($lis["type"]); ?>
								</p>
								<p class="szd">所在地：<?php echo ($lis["addre"]); ?></p>
								<div class="clearfloat"></div>
							</div>
							<p class="dtnr">
								<?php echo ($lis["contents"]); ?>
							</p>
							<div class="bottom">
								<p class="left"><?php echo ($lis["time"]); ?></p>
								<!--<span class="delete">
									<img src="/matouPCS/Public/Home/img/delete-2.png" />
								</span>-->
								<div class="right dz-qx">
									<span style="font-size: 20px;" class="icon-dz"></span>
									<p style="float: right; margin-left: 5px;">1000000000</p>
								</div>
								<p class="clearfloat"></p>
							</div>
							<div class="clearfloat"></div>
							
						</div><?php endforeach; endif; ?>
					</div>
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
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/showWin.js"></script>

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

		//收藏商铺
		function change() {
			var mark = document.getElementById('btn').innerText;
			if(mark == '收藏商铺') {
				document.getElementById('btn').innerText = "取消收藏";
			} else {
				document.getElementById('btn').innerText = "收藏商铺";
			};
		};
		
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