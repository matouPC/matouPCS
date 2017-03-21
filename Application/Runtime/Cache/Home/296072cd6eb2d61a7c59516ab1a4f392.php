<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>招聘修改</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/txzp-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/tx.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
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
									<a href="#">已发布<img class="img" src="img/arrow_bottom.png"></a>
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
							填写招聘
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://" id="tap">
									招聘职位
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
							<ul class="tyint">
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">工作地点</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><?php $add = explode(',',$list['address_zp']); ?>
											<input type="text" class="w95s" readonly="readonly" name="address" id="address" value="<?php echo ($add[0]); ?>" data-value="" onclick="appendCity(this,'danxuan')" placeholder="请选择">
											<input id="xsdz" disabled="disabled" class="w209" type="text" value="<?php echo ($add[1]); ?>"placeholder="填写详细地址" />
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
										<div class="litr"><input class="w200t" id="tel" type="text"  value="<?php echo ($list["rtel"]); ?>" maxlength="11" placeholder="请输入你的电话" /></div>
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
										<div class="litr"><input class="w200t" id="qq" maxlength="10" value="<?php echo ($list["rqq"]); ?>" type="text" placeholder="请输入您的QQ" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litc">邮&nbsp;箱</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" id="email" type="email" value="<?php echo ($list["remail"]); ?>" placeholder="请输入您的邮箱" /><input class="w200t" type="hidden" id="rid" type="rid" value="<?php echo ($list["rid"]); ?>"/></div>
										<div class="cf"></div>
									</div>
								</li>
							</ul>
							</div>
						</div>

						<div class="txfg1" id="ta">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<p><strong>招聘职位/</strong><samp style="color: #ff5c5d;font-size: 12px;">最多添加3个职位</samp></p>
								<span class="hfx3" id="hfx3-1"><img src="/matouPCS/Public/Home/img/tj-sp.png" />添加职位</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCS/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"添加职位"完善招聘职位信息</span></div>
							<ul>
								<form name="myform" id="addmation" class="addmation">
									<input type="hidden" name="address" value="">
									<input type="hidden" name="tel" value="">
									<input type="hidden" name="qq" value="">
									<input type="hidden" name="email" value="">
									<input type="hidden" name="add" value="">
									<input type="hidden" name="rid" value="">
									<?php $num = 0; ?>
									<?php if(is_array($data)): foreach($data as $key=>$datas): $num++; ?>
										<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">招聘职位</p><p class="cf"></p></div> <div class="litr"><select class="w95s"  name="type<?php echo ($num); ?>" id="xtype<?php echo ($num); ?>" style="width:105px;" onchange="gradeChange<?php echo ($num); ?>()">
											<?php if($datas['type'] == '主持人'){ ?>
												<option selected="selected">主持人</option>
											<?php }else{ ?>
												<option>主持人</option>
											<?php } ?>
											<?php if($datas['type'] == '营业员'){ ?>
												<option selected="selected">营业员</option>
											<?php }else{ ?>
												<option>营业员</option>
											<?php } ?>
											<?php if($datas['type'] == '数码师/设计'){ ?>
												<option selected="selected">数码师/设计</option>
											<?php }else{ ?>
												<option>数码师/设计</option>
											<?php } ?>
											<?php if($datas['type'] == '视频剪辑师'){ ?>
												<option selected="selected">视频剪辑师</option>
											<?php }else{ ?>
												<option>视频剪辑师</option>
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
											<?php if($datas['type'] == '其他'){ ?>
												<option selected="selected">其他</option>
											<?php }else{ ?>
												<option>其他</option>
											<?php } ?></select><span class="types<?php echo ($num); ?>"></span><div class="lidel" id="lidels<?php echo ($datas["id"]); ?>" onclick="lidels(<?php echo ($datas["id"]); ?>)"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr">
											<?php if($datas['sex'] == 1){ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="1" checked = "checked" type="radio" />男</div>
											<?php }else{ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="1" type="radio" />男</div>
											<?php } ?>
											<?php if($datas['sex'] == 2){ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="2" checked = "checked" type="radio" />女</div>
											<?php }else{ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="2" type="radio" />女</div>
											<?php } ?>
											<?php if($datas['sex'] == 3){ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="3" checked = "checked" type="radio" />不限</div>
											<?php }else{ ?>
												<div class="w36"><input class=""  name="sex<?php echo ($num); ?>" value="3" type="radio" />不限</div>
											<?php } ?></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><select class="w75s" style="width:72px;" name="age<?php echo ($num); ?>" >
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
											<?php if($datas['age'] == '>35'){ ?>
												<option selected="selected">>35</option>
											<?php }else{ ?>
												<option>>35</option>
											<?php } ?></select>&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">工作经验</p><p class="cf"></p></div><div class="litr"><select class="w95s" style="width:72px;" name="timework<?php echo ($num); ?>">
											<?php if($datas['worktime'] == '不限'){ ?>
												<option selected="selected">不限</option>
											<?php }else{ ?>
												<option>不限</option>
											<?php } ?>
											<?php if($datas['worktime'] == '1-2'){ ?>
												<option selected="selected">1-2</option>
											<?php }else{ ?>
												<option>1-2</option>
											<?php } ?>
											<?php if($datas['worktime'] == '2-5'){ ?>
												<option selected="selected">2-5</option>
											<?php }else{ ?>
												<option>2-5</option>
											<?php } ?>
											<?php if($datas['worktime'] == '5-10'){ ?>
												<option selected="selected">5-10</option>
											<?php }else{ ?>
												<option>5-10</option>
											<?php } ?>
											<?php if($datas['worktime'] == '>10'){ ?>
												<option selected="selected">>10</option>
											<?php }else{ ?>
												<option>>10</option>
											<?php } ?></select>&nbsp;年 </div><div class="cf"></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">薪&nbsp;资</p><p class="cf"></p></div><div class="litr">
											<?php $price = explode('-',$datas['price']);?>
											<input class="w75t" type="text" name="price1<?php echo ($num); ?>" value="<?php echo ($price[0]); ?>" /> — <input class="w75t" name="price2<?php echo ($num); ?>" type="text" value="<?php echo ($price[1]); ?>"/>&nbsp;元/月</div><div class="cf"><input type="hidden" name="rid<?php echo ($num); ?>" value="<?php echo ($datas["id"]); ?>"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作内容</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="content<?php echo ($num); ?>" type="text"><?php echo ($datas["content"]); ?></textarea></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">岗位要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="yaoqiu<?php echo ($num); ?>" type="text"><?php echo ($datas["work"]); ?></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li><?php endforeach; endif; ?>
								</form>
							</ul>
						</div>
						<!--<ul class="tyint">
							<li>
								<div class="mprofession">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">招聘职位</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w95s">
											<option></option>
											<option>灯光</option>
										</select> <input class="w209" type="text" placeholder="填写职业名称" />
										<div class="lidel" id="lidel"><img src="img/delete-2.png" /></div>
									</div>
									<div class="cf"></div>
							</li>
							<li>
								<div class="msex">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">性&nbsp;别</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<div class="w36"><input class="" type="radio" />男</div>
										<div class="w36"><input class="" type="radio" />女</div>
										<div class="w41"><input class="" type="radio" />不限</div>
									</div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="mage">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">年&nbsp;龄</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w75s">
											<option>1</option>
										</select>&nbsp;岁 </div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="mprofession">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">工作经验</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<select class="w95s">
											<option></option>
											<option>灯光</option>
										</select>&nbsp;年
									</div>
									<div class="cf"></div>
							</li>
							<li>
								<div class="mxz">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">薪&nbsp;资</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w75t" type="text" />-<input class="w75t" type="text" />&nbsp;k/月</div>
									<div class="cf"></div>
								</div>
							</li>
							<li style="height: auto!important;">
								<div class="mzwjs" style="height: auto!important;">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">工作内容</p>
										<p class="cf"></p>
									</div>
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li style="height: auto!important;">
								<div class="mzwjs" style="height: auto!important;">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">岗位要求</p>
										<p class="cf"></p>
									</div>
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li id="mhllx"></li>
						</ul>-->
						<div class="clearfloat "></div>

						<div class="s-tf-btn" onclick="submit()">确认修改</div>
					</div>
					<div class="clearfloat "></div>
		</section>
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
						
						<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<p><a href="http://www.miitbeian.gov.cn">豫ICP备16015506号</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/zp.js"></script>
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
		var i = document.getElementById('addmation').getElementsByTagName('li').length;
		
		$(function() {
			$("#hfx3-1").click(function() {
				i += 9;
				$(".txfg1-c2-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				if(i <= 27){
					$(".addmation").append('<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">招聘职位</p><p class="cf"></p></div> <div class="litr"><select class="w95s"  name="type'+i+'" id="xtype'+i+'" style="width:105px;" onchange="gradeChange'+i+'()"><option>经理\\店长</option><option>营业员</option><option>数码师/设计</option><option>视频剪辑师</option><option>摄影师</option><option>摄像师</option><option>化妆师</option><option>策划师</option><option>其他</option></select><span class="types'+i+'"></span><div class="lidel" id="lidel"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class=""  name="sex'+i+'" value="1" checked = "checked" type="radio" />男</div><div class="w36"><input class="" name="sex'+i+'" value="2" type="radio" />女</div><div class="w41"><input class="" name="sex'+i+'" value="3" type="radio" />不限</div></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><select class="w75s" style="width:72px;" name="age'+i+'" ><option>不限</option><option>18-25</option><option>25-30</option><option>30-35</option><option>>35</option></select>&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">工作经验</p><p class="cf"></p></div><div class="litr"><select class="w95s" style="width:72px;" name="timework'+i+'"><option>不限</option><option>1-2</option><option>2-5</option><option>5-10</option><option>>10</option></select>&nbsp;年 </div><div class="cf"></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">薪&nbsp;资</p><p class="cf"></p></div><div class="litr"><input class="w75t" type="text" name="price1'+i+'" /> — <input class="w75t" name="price2'+i+'" type="text" />&nbsp;元/月</div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作内容</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="content'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">岗位要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="yaoqiu'+i+'" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
						$(".lidel").on("click", function() {
							i-=1;
							$(this).parent().parent().parent().parent().parent().remove();
							if($(".s-main-l").css("height") == "388px") {
								//							alert("605")
								$(".txfg1-c2-1").show();
								$(".txfg1").css("border-bottom", "1px solid #999");
							}
						});
					}else{
						alert('滚犊子');
					}
			});
		});

		//		H-S-CONTENT滑动跳转
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
		function submit(){
			var form = document.myform;
			if(document.getElementById('address').value == '' || document.getElementById('tel').value == ''  || document.getElementById('qq').value == '' || document.getElementById('email').value == ''){
				alert('滚犊子');
			}else{
			form.address.value = document.getElementById('address').value;
			form.add.value = document.getElementById('xsdz').value;
			form.tel.value = document.getElementById('tel').value;
			form.qq.value = document.getElementById('qq').value;
			form.email.value = document.getElementById('email').value;
			form.rid.value = document.getElementById('rid').value;
			form.action = "?s=/Home/User/userEditgo";
			form.method="post";
			form.submit();
			}
		}
		
	function gradeChange1(){
	    var checkText=$("#xtype1").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types1').html('<input class="w209" type="text" name="zymc1" placeholder="填写职业名称" />');
	    }else{
	    	$('.types1').html('<input class="w209" type="hidden" name="zymc1" placeholder="填写职业名称" />');
	    }
	}
	function gradeChange2(){
	    var checkText=$("#xtype2").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types2').html('<input class="w209" type="text" name="zymc2" placeholder="填写职业名称" />');
	    }else{
	    	$('.types2').html('<input class="w209" type="hidden" name="zymc2" placeholder="填写职业名称" />');
	    }
	}
	function gradeChange3(){
	    var checkText=$("#xtype3").find("option:selected").text();
	    if(checkText == '其他'){
	    	$('.types3').html('<input class="w209" type="text" name="zymc3" placeholder="填写职业名称" />');
	    }else{
	    	$('.types3').html('<input class="w209" type="hidden" name="zymc3" placeholder="填写职业名称" />');
	    }
	}
	//去除小广告
	if($('.addmation').html() != ''){
				$(".txfg1-c2-1").hide()
			}
	//删除
	// $(".lidel").on("click", function() {
	function lidels(id){
		alert(id);
		if(window.confirm('确定要删除么?')){
			$.ajax({
				url:'?s=/Home/User/userZp_del/id/'+id,
				type:'get',
				success:function(data){
					$('#lidels'+id).parent().parent().parent().parent().parent().remove();
					if($(".s-main-l").css("height") == "388px") {
						$(".txfg1-c2-1").show();
						$(".txfg1").css("border-bottom", "1px solid #999");
					}
				},error:function(){
					alert('no');
				}
			});
		}
		
		
	}
	
						// });
	</script>

</html>