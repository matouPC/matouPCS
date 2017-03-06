<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>悬赏修改</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/txxs-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/upimage.css" />
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<body>

		<!-- <form name="myform"> -->
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
				<div class="s-main-r">
					<p style="font-size: 22px;">WEDDING PIER</p>
					<p style="font-size: 22px;">喜事码头</p>
					<p style="font-size: 14px; padding:10px 0;">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							填写悬赏
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://" id="">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://" id="tap">
									悬赏信息
								</a>
							</li>
						</ul>
					</div>
				</div>
				<form name="myforms">
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<strong><p>基本信息</p></strong>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mhdsj">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">活动时间</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w150t" id="dt" readonly="readonly" type="text"  name="time" value="<?php echo ($list["time"]); ?>" />
											<div class="liti"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div>
											<div id="dd" style="left: 0 !important; top:30px !important"></div>
										</div>

										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">活动地点</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<?php $add = explode(',',$list['address']);?>
											<input id="xz-city" placeholder="请选择所在市" readonly="readonly" name="address" type="text" value="<?php echo ($add[0]); ?>" data-value="" onclick="appendCity(this,'danxuan')" style="float: left; padding: 0 10px; width: 110px; height: 28px; border: solid #DEDEDE 1px;" />
											<input class="w209" type="text" name="ad" value="<?php echo ($add[1]); ?>"style="background-color:white;" placeholder="填写详细地址" />
										</div>
										<div class="cf"></div>
								</li>
								<li>
									<div class="mphone">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">联系电话</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="tel" name="tel" value="<?php echo ($list["tels"]); ?>"maxlength="11" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mqq">
										<div class="litl">
											<p class="litx"></p>
											<p class="litc">Q&nbsp;Q</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="qq" name="qq" value="<?php echo ($list["qqs"]); ?>" type="text" maxlength="10" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li style="height: auto!important;">
									<div class="mzwjs" style="height: auto!important;">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">活动详情</p>
											<p class="cf"></p>
										</div>
										<div class="litr" style="height: auto!important;"><textarea class="w340" name="content" id="w340" type="text"><?php echo ($list["content"]); ?></textarea></div>
										<div class="cf"></div>
										<script type="text/javascript">
										window.onload = function() { document.getElementById('w340').onkeydown = function() { 
											if(this.value.length >= 200){
												alert('滚犊子(最多200)');
											}
										}
									  } 
										</script>
									</div>
								</li>
								<li>
									<div class="mhllx"></div>
								</li>
							</ul>
							</div>
						</div>
					</form>
						<div class="txfg1" id="ta">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<p><strong>悬赏信息/</strong><samp style="color: #ff5c5d;font-size: 12px;">最多添加3个悬赏</samp></p>
								<span class="hfx3" id="hfx3-1"><img src="/matouPCS/Public/Home/img/tj-sp.png" />添加悬赏</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCS/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"添加悬赏"完善悬赏要求</span></div>
							<ul class="addmation" id="xs">
								<form name="myform" class="submit">
									<input type="hidden" name="add">
									<input type="hidden" name="ad">
									<input type="hidden" name="te">
									<input type="hidden" name="q">
									<input type="hidden" name="ti">
									<input type="hidden" name="con">
									<input type="hidden" name="id" value="<?php echo ($list["psid"]); ?>">
									<?php $num = 0; ?>
									<?php if(is_array($data)): foreach($data as $key=>$datas): $num++; ?>
										<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">悬赏职位</p><p class="cf"></p></div><div class="litr"><select class="w95s" id="xtype<?php echo ($num); ?>" name="type<?php echo ($num); ?>" onchange="gradeChange<?php echo ($num); ?>()">
											<?php if($datas['type'] == '主持人'){ ?>
												<option selected="selected">主持人</option>
											<?php }else{ ?>
												<option>主持人</option>
											<?php } ?>
											<?php if($datas['type'] == '摄影师'){ ?>
												<option selected="selected">摄影师</option>
											<?php }else{ ?>
												<option>摄影师</option>
											<?php } ?>
											<?php if($datas['type'] == '摄像师'){ ?>
												<option selected="selected">摄像师</option>
											<?php }else{ ?>
												<option>摄像师</option>
											<?php } ?>
											<?php if($datas['type'] == '化妆师'){ ?>
												<option selected="selected">化妆师</option>
											<?php }else{ ?>
												<option>化妆师</option>
											<?php } ?>
											<?php if($datas['type'] == '策划师'){ ?>
												<option selected="selected">策划师</option>
											<?php }else{ ?>
												<option>策划师</option>
											<?php } ?>
											<?php if($datas['type'] == '音响师'){ ?>
												<option selected="selected">音响师</option>
											<?php }else{ ?>
												<option>音响师</option>
											<?php } ?>
											<?php if($datas['type'] == '灯光师'){ ?>
												<option selected="selected">灯光师</option>
											<?php }else{ ?>
												<option>灯光师</option>
											<?php } ?>
											<?php if($datas['type'] == '花艺师'){ ?>
												<option selected="selected">花艺师</option>
											<?php }else{ ?>
												<option>花艺师</option>
											<?php } ?>
											<?php if($datas['type'] == '场布师'){ ?>
												<option selected="selected">场布师</option>
											<?php }else{ ?>
												<option>场布师</option>
											<?php } ?>
											<?php if($datas['type'] == '表演者'){ ?>
												<option selected="selected">表演者</option>
											<?php }else{ ?>
												<option>表演者</option>
											<?php } ?>
											<option>其他</option>
										</select>
										<span class="types<?php echo ($num); ?>"></span>
										<div class="lidel" onclick="lidel(<?php echo ($datas["wid"]); ?>)" id="lidel<?php echo ($datas["wid"]); ?>">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr">
									<?php if($datas['sex'] == '1'){ ?>
										<div class="w36"><input class="" checked="checked" name="sex<?php echo ($num); ?>" id="sex<?php echo ($num); ?>" value="1" type="radio" />男</div>
									<?php }else{ ?>
										<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" id="sex<?php echo ($num); ?>" value="1" type="radio" />男</div>
									<?php } ?>
									<?php if($datas['sex'] == '2'){ ?>
										<div class="w36"><input class="" checked="checked" type="radio" name="sex<?php echo ($num); ?>" id="sex<?php echo ($num); ?>" value="0"/>女</div>
									<?php }else{ ?>
										<div class="w36"><input class="" type="radio" name="sex<?php echo ($num); ?>" id="sex<?php echo ($num); ?>" value="0"/>女</div>
									<?php } ?>
									<?php if($datas['sex'] == '3'){ ?>
										<div class="w41"><input name="sex<?php echo ($num); ?>" value="3" checked="checked" id="sex<?php echo ($num); ?>" class="" type="radio" />不限</div>
									<?php }else{ ?>
										<div class="w41"><input name="sex<?php echo ($num); ?>" value="3" id="sex<?php echo ($num); ?>" class="" type="radio" />不限</div>
									<?php } ?>
									</div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><select name="age<?php echo ($num); ?>" class="w75s" style="width:72px;">
									<?php if($datas['age'] == '不限'){ ?>
										<option selected="selected">不限</option>									
									<?php }else{ ?>
										<option>不限</option>
									<?php } ?>
									<?php if($datas['age'] == '18-25'){ ?>
										<option selected="selected">18-25</option>									
									<?php }else{ ?>
										<option>18-25</option>
									<?php } ?>
									<?php if($datas['age'] == '25-30'){ ?>
										<option selected="selected">25-30</option>									
									<?php }else{ ?>
										<option>25-30</option>
									<?php } ?>
									<?php if($datas['age'] == '30-35'){ ?>
										<option selected="selected">30-35</option>									
									<?php }else{ ?>
										<option>30-35</option>
									<?php } ?>
									<?php if($datas['age'] == '35以上'){ ?>
										<option selected="selected">35以上</option>									
									<?php }else{ ?>
										<option>35以上</option>
									<?php } ?></select>&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">赏&nbsp;金</p>
									<p class="cf"></p></div><div class="litr">
									<?php $price = explode('-',$datas['price']);?>
									<input class="w75t" name="price1<?php echo ($num); ?>" type="text" value="<?php echo ($price[0]); ?>"/> — <input class="w75t" type="text" name="price2<?php echo ($num); ?>" value="<?php echo ($price[1]); ?>"/>&nbsp;元/天
								</div><div class="cf"></div></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">报销路费</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class="" name="whether<?php echo ($num); ?>" value="1" checked="checked" type="radio" />是</div><div class="w36"><input class="" value="2" name="whether<?php echo ($num); ?>" type="radio" />否</div></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">具体要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="yaoqiu<?php echo ($num); ?>" type="text"><?php echo ($datas['yaoqiu']); ?></textarea></div><div class="cf"></div></div></li><li id="mhllx"><input type="hidden" name="id<?php echo ($num); ?>" value="<?php echo ($datas["wid"]); ?>"></li></ul></li><?php endforeach; endif; ?>
								</form>
							</ul>
						</div>
						<div class="clearfloat "></div>

						<div class="s-tf-btn" id="submit">确认修改</div>
					</div>
					<div class="clearfloat "></div>
					
		</section>
		<script type="text/javascript">
			
		</script>
		<br>
		<br>
		<br>
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/3rank-footer.css" />
	</head>
	<body>
		<footer>
			<div class="f-content-main">
				<div class="f-main-c">
					<div class="f-c-1f">
						
						<p>© 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司 </p>
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCS/Public/Home/js/sjs.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/dz.js"></script>
	<script type="text/javascript" src="/matouPCS/Public/Home/js/upimg.js"></script>
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
		// var xs = document.getElementById('xs').getElementsByTagName('li').length;
		// alert(xs);
		var i = document.getElementById('xs').getElementsByTagName('li').length;
		$(function() {
			$("#hfx3-1").click(function() {
				i += 9;
				$(".txfg1-c2-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				if( i <= 30 ){
				$(".submit").append('<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">悬赏职位</p><p class="cf"></p></div><div class="litr"><select class="w95s" id="xtype'+i+'" name="type'+i+'" onchange="gradeChange'+i+'()"><option>主持人</option><option>摄影师</option><option>摄像师</option><option>化妆师</option><option>策划师</option><option>音响师</option><option>灯光师</option><option>花艺师</option><option>场布师</option><option>表演者</option><option>其他</option></select><span class="types'+i+'"></span><div class="lidel" id="lidel"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class="" checked="checked" name="sex'+i+'" id="sex'+i+'" value="1" type="radio" />男</div><div class="w36"><input class="" type="radio" name="sex'+i+'" id="sex'+i+'" value="0"/>女</div><div class="w41"><input name="sex'+i+'" value="2" id="sex'+i+'" class="" type="radio" />不限</div></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><select name="age'+i+'" class="w75s" style="width:72px;"><option>不限</option><option>18-25</option><option>25-30</option><option>30-35</option><option>35以上</option></select>&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">赏&nbsp;金</p><p class="cf"></p></div><div class="litr"><input class="w75t" name="price1'+i+'" type="text" /> — <input class="w75t" type="text" name="price2'+i+'" />&nbsp;元/天</div><div class="cf"></div></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">报销路费</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class="" name="whether'+i+'" value="1" checked="checked" type="radio" />是</div><div class="w36"><input class="" value="2" name="whether'+i+'" type="radio" />否</div></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">具体要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="yaoqiu'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
						

					$(".lidel").on("click", function() {
						alert(1);
						i-=1;
						$(this).parent().parent().parent().parent().parent().remove();
						if($(".s-main-l").css("height") == "524px") {
							//							alert("605")
							$(".txfg1-c2-1").show();
							$(".txfg1").css("border-bottom", "1px solid #999");
						}
					});

					}else{
					alert('滚犊子(最多3条)');
				}
			});

		});
		$(function() {
			//				拿到点击按钮
			$("#tap").click(function() {
				//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
				$("html,body").animate({
					scrollTop: $("#ta").offset().top
				}, 600);
				return false;
			});
		});

		
		
$('#submit').click(function(){ 
		var form = document.myform;
		var forms = document.myforms;
		form.add.value = forms.address.value;
		form.ti.value = forms.time.value;
		form.te.value = forms.tel.value;
		form.q.value = forms.qq.value;
		form.con.value = forms.content.value;
		form.ad.value = forms.ad.value;
		if(form.ti.value == '' || form.add.value == '' || form.te.value == '' || form.con.value == '' ){
			alert('滚犊子');
		}else{
			form.action = "?s=/Home/User/userXsgo";
			form.method="post";
			form.submit();
		}
		
	});	
function gradeChange1(){

    var checkText=$("#xtype1").find("option:selected").text();
    if(checkText == '其他'){
    	$('.types1').html('<input class="w209" type="text" name="zymc1" style="background-color:white;" placeholder="填写职业名称" />');
    }else{
    	$('.types1').html('<input class="w209" type="hidden" name="zymc1" placeholder="填写职业名称" />');
    }
}
function gradeChange2(){
    var checkText=$("#xtype2").find("option:selected").text();
    if(checkText == '其他'){
    	$('.types2').html('<input class="w209" type="text" name="zymc2" style="background-color:white;" placeholder="填写职业名称" />');
    }else{
    	$('.types2').html('<input class="w209" type="hidden" name="zymc2" placeholder="填写职业名称" />');
    }
}
function gradeChange3(){
    var checkText=$("#xtype3").find("option:selected").text();
    if(checkText == '其他'){
    	$('.types3').html('<input class="w209" type="text" name="zymc3" style="background-color:white;" placeholder="填写职业名称" />');
    }else{
    	$('.types3').html('<input class="w209" type="hidden" name="zymc3" placeholder="填写职业名称" />');
    }
}
//-------------------------------日期----------------------------------------
		$('#dd').calendar({
			trigger: '#dt',
			zIndex: 999,
			format: 'yyyy-mm-dd',
			onSelected: function(view, date, data) {
				console.log('event: onSelected')
			},
			onClose: function(view, date, data) {
				console.log('event: onClose')
				console.log('view:' + view)
				console.log('date:' + date)
				console.log('data:' + (data || 'None'));
			}
		});
			if($('.addmation').html() != ''){
				$(".txfg1-c2-1").hide()
			}
	function lidel(id){
		if(window.confirm("确定删除么？")){
			$.ajax({
				url:"?s=/Home/User/userXs_del/id/"+id,
				type:"get",
				success:function(data){
					$('#lidel'+id).parent().parent().parent().parent().parent().remove();
					if($(".s-main-l").css("height") == "524px") {
						$(".txfg1-c2-1").show();
						$(".txfg1").css("border-bottom", "1px solid #999");
					}
				},error:function(){
					alert('no');
				}
			});
		}
	}
	</script>
</html>