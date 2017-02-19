<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>应聘填写</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/txyp-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/upimg.css" />
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
						<img src="/matouPCS/Public/Home/img/navbg2.png" />
						<div class="s-f2-r">
							<input placeholder="搜索全站" type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0); color: white;" />
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
							填写应聘
						</div>
						<ul>
							<li id="tab-jbxx" class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li id="tap">
								<a href="javascript://">
									工作经历
								</a>
							</li>
							<li id="tab-zpzp">
								<a href="javascript://">
									照片作品
								</a>
							</li>
							<li id="tab-spzp">
								<a href="javascript://">
									视频作品
								</a>
							</li>
						</ul>
					</div>
				</div>
				<form name="myform" enctype="multipart/form-data">
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<strong><p>基本信息</p></strong>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mname">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">姓&nbsp;&nbsp;&nbsp;&nbsp;名</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="name" id="uname" class="w200t" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="msex">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">性&nbsp;&nbsp;&nbsp;&nbsp;别</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<div class="w36"><input class="" id="sex1" name="sex" value="1" type="radio" /> 男</div>
											<div class="w36"><input class="" id="sex0" name="sex" value="0" type="radio" /> 女</div>
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mage">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">年&nbsp;&nbsp;&nbsp;&nbsp;龄</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w75t" name="age" id="uage" type="number" />&nbsp;岁
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mmap">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">所在地</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input type="text" class="w95s" id="uaddress" readonly="readonly" name="address" id="xz-city" value="" data-value="" onclick="appendCity(this,'danxuan')" placeholder="请选择">
											<input id="xsdz" name="add" class="w209" id="uadd" type="text" placeholder="填写详细地址" />
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">期望职业</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w95s" name="type" id="xtype" onchange="gradeChange()" style="width:100px;">
												<option>-请选择-</option><option>经理/店长</option><option>营业员</option><option>数码师/设计</option><option>视频剪辑师</option><option>摄影师</option><option>摄像师</option><option>化妆师</option><option>策划师</option><option>其他</option>
											</select>
											<span class="types"></span>
										</div>
										<div class="cf"></div>
								</li>
								<script type="text/javascript">
									function gradeChange(){
										 var checkText=$("#xtype").find("option:selected").text();
										    if(checkText == '其他'){
										    	$('.types').html('<input class="w209" type="text" name="zymc" placeholder="填写职业名称" />');
										    }else{
										    	$('.types').html('<input class="w209" type="hidden" name="zymc" placeholder="填写职业名称" />');
										    }
									}
								</script>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">期望薪资</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w200s" id="uprice" style="width:110px;" name="price">
												<option>-请选择-</option>
												<option>不限</option>
												<option>2000-4000</option>
												<option>4000-6000</option>
												<option>6000-8000</option>
												<option>> 8000</option>
											</select> k/月
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">工作经验</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input name="worktime"  id="uworktime" name="worktime" class="w200t" maxlength="2" style="width:50px;" type="number" /> 年
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">联系电话</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="tel" id="utel" class="w200t" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mqq">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">Q&nbsp;Q</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="qq" id="uqq" class="w200t" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li style="height: auto!important;">
									<div class="mzwjs" style="height: auto!important;">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">自我介绍</p>
											<p class="cf"></p>
										</div>
										<div class="litr" style="height: auto!important;"><textarea class="w340" id="ucontent" name="content" type="text"></textarea></div>
										<div class="cf"></div>
									</div>
								</li>
								<!--<li>
									<div class="mhllx"></div>
								</li>-->
							</ul>
							</div>
						</div>

						<div class="txfg1" id="ta">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<p><strong>工作经历/</strong><samp style="color: #ff5c5d;font-size: 12px;">最多上传3个工作经历</samp></p>
								<span class="hfx3" id="hfx3-1"><img src="/matouPCS/Public/Home/img/tj-sp.png" />新增经历</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCS/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"新增经历"完善工作经历</span></div>
							
								<ul class="addmation1">
									<input type="hidden" name="uuname">

								</ul>
							
						</div>
						<div class="s-c-2f">
							<div id="tb" class="s-c-2f-1f">
								<p>照片作品/</p><span>最多上传12张照片</span>
								<span class="right" onclick="userYp()" id="hfx3-3">									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-2f-2f-f" id="zp">
								<div style="font-size: 14px; color: #999999; height: 30px; z-index: -1; line-height: 30px; width: 100%; text-align: center; position: absolute; top: 0;" class="dianji">
									<div class="gth">
										<img src="/matouPCS/Public/Home/img/gth.png">
									</div>
									点击右上角"添加视频"完善作品
									<div class="clearfloat"></div>
								</div>
								<ul>
								</ul>
								<div class="shade" onclick="javascript:closeShade()">
									<div class="">
										<span class="text_span">
					
										</span>
									</div>
								</div>

								<div class="shadeImg" onclick="javascript:closeShadeImg()">
									<div class="">
										<img class="showImg" src="" />
									</div>
								</div>
							</div>
						</div>
						<div class="s-c-3f">
							<div id="tc" class="s-c-2f-1f">
								<p>视频作品/</p><span>最多上传3个视频文件</span>
								<!--<span class="right">
									添加视频
									<div class="tjsp">
										<img src="img/tj-sp.png" />
									</div>
								</span>-->
							</div>
							<div class="s-c-3f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<div class="picture1">
												<img id="pic1" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload1" name="file1" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title1" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video1" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="picture2">
												<img id="pic2" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload2" name="file2" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title2" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video2" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li style="margin: 0;">
										<div class="na2">
											<div class="picture3">
												<img id="pic3" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload3" name="file3" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<!--<div class="na2bg">
												<a onclick="document.getElementById('pic1').click()" href="javascript://">编辑视频封面</a>
											</div>-->
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="title3" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="video3" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-2">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<div class="clearfloat"></div>
								</ul>
							</div>
						</div>

						<!--<ul class="tyint">
							<li>
								<div class="mhdsj">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">活动时间</p>
										<p class="cf"></p>
									</div>
									<div class="litr">
										<input class="w150t" type="text" name="" id="" value="" />&nbsp;到&nbsp;<input class="w150t" type="text" name="" id="" value="" />
										<div class="liti1"><img src="img/jxrq.png" /></div>
										<div class="liti2"><img src="img/jxrq.png" /></div>
									</div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="memail">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">所在公司</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w200t" type="text" /></div>
									<div class="cf"></div>
								</div>
							</li>
							<li>
								<div class="memail">
									<div class="litl">
										<p class="litx">*</p>
										<p class="litc">担任职位</p>
										<p class="cf"></p>
									</div>
									<div class="litr"><input class="w200t" type="text" /></div>
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
									<div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div>
									<div class="cf"></div>
								</div>
							</li>
							<li id="mhllx"></li>
						</ul>-->
						<div class="clearfloat "></div>

						</form>
						<div class="s-tf-btn" onclick="submit()">确认发布</div>
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
						<!--<br/>-->
						<p>京ICP证090015号 京ICP备11027288号 网络视听许可证0110418号 </p>
						<p>京网文[2015]2026-368号 京公网安备11010502000728 新出网证(京)字129号 </p>
					</div>

				</div>
			</div>

		</footer>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/txyp.js"></script>
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
			var i = 0;
			var a = 0;
			$("#hfx3-1").click(function() {
				a+=1;
				$(".txfg1-c2-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				if(a > 3){
					alert('滚犊子(最多3条)');
				}else{
				$(".addmation1").append('<li><div class="delete-gzjl"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div><ul class="tyint"><li><div class="mhdsj"><div class="litl"><p class="litx">*</p><p class="litc">活动时间</p><p class="cf"></p></div><div class="litr"><input readonly="readonly" class="w150t" type="text"  id="dt'+i+'" name="workdate1'+a+'" value="" />&nbsp;到&nbsp;<input readonly="readonly" class="w150t" type="text" name="workdate2'+a+'" id="da'+i+'" value="" /><div class="liti1"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div><div class="liti2"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div></div><div id="dd'+i+'" style="left: 14px !important; top:42px !important"></div><div id="db'+i+'" style="left: 182px !important; top:42px !important"></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">所在公司</p><p class="cf"></p></div><div class="litr"><input class="w200t" name="workname'+a+'" type="text" /></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">担任职位</p><p class="cf"></p></div><div class="litr"><input class="w200t" name="ty'+a+'" type="text" /></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作描述</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" name="miao'+a+'" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
					$('#dt'+i).val();
					$(".delete-gzjl").on("click", function() {
						$(this).parent().remove();
						if($(".s-main-l").css("height") == "524px") {
							//							alert("605")
							$(".txfg1-c2-1").show();
							$(".txfg1").css("border-bottom", "1px solid #999");
						}
						if($('.addmation1').has('li').length > 0) {
							$('.txfg1-c2-1').css('display', 'none');
						} else {
							$('.txfg1-c2-1').css('display', 'block');
						}
					});
				}
					//-------------------------------日期----------------------------------------
		$('#dd'+i).calendar({
			trigger: '#dt'+i,
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
		$('#db'+i).calendar({
			trigger: '#da'+i,
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
		i++;
			});

		});
		
		//图片上传预览    IE是用了滤镜。
		$(function() {
			$("#pic1").click(function() {
				$("#upload1").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#upload1").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pic1").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
			var src = $('.picture1').find("img").attr("src");
			if(src != '') {
				$('.na2bg').css('display', 'block');
			}
		});

		//建立一個可存取到該file的url
		function getObjectURL(file) {
			var url = null;
			if(window.createObjectURL != undefined) { // basic
				url = window.createObjectURL(file);
			} else if(window.URL != undefined) { // mozilla(firefox)
				url = window.URL.createObjectURL(file);
			} else if(window.webkitURL != undefined) { // webkit or chrome
				url = window.webkitURL.createObjectURL(file);
			}
			return url;
		}
		$(function() {
			$("#pic2").click(function() {
				$("#upload2").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#upload2").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pic2").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
		});
		$(function() {
			$("#pic3").click(function() {
				$("#upload3").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#upload3").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pic3").attr("src", objUrl); //将图片路径存入src中，显示出图片
					}
				});
			});
		});

		$(function() {
			var objUrl;
			var img_html;
			$("#myFile").change(function() {
				var img_div = $(".img_div");
				var filepath = $("input[name='myFile']").val();
				for(var i = 0; i < this.files.length; i++) {
					objUrl = getObjectURL(this.files[i]);
					var extStart = filepath.lastIndexOf(".");
					var ext = filepath.substring(extStart, filepath.length).toUpperCase();

					if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
						$(".shade").fadeIn(500);
						$(".text_span").text("图片限于bmp,png,gif,jpeg,jpg格式");
						this.value = "";
						$(".img_div").html("");
						return false;
					} else {
						img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)' style='height: 100%; width: 100%;' /><div class='na1bg' onclick='javascript:removeImg(this)'><div class='delete-1'><img src='img/delete-1.png' /></div>删除</div></div>";
						img_div.append(img_html);
					}
				}
				var file_size = 0;
				var all_size = 0;
				for(j = 0; j < this.files.length; j++) {
					file_size = this.files[j].size;
					all_size = all_size + this.files[j].size;
					var size = all_size / 1024;
					if(size > 500) {
						$(".shade").fadeIn(500);
						$(".text_span").text("上传的图片大小不能超过100k！");
						this.value = "";
						$(".img_div").html("");
						return false;
					}
				}
				return true;
			});

			function getObjectURL(file) {
				var url = null;
				if(window.createObjectURL != undefined) { // basic
					url = window.createObjectURL(file);
				} else if(window.URL != undefined) { // mozilla(firefox)
					url = window.URL.createObjectURL(file);
				} else if(window.webkitURL != undefined) { // webkit or chrome
					url = window.webkitURL.createObjectURL(file);
				}
				//console.log(url);
				return url;
			}
		});

		function removeImg(r) {
			$(r).parent().remove();
		}

		function lookBigImg(b) {
			$(".shadeImg").fadeIn(500);
			$(".showImg").attr("src", $(b).attr("src"))
		}

		function closeShade() {
			$(".shade").fadeOut(500);
		}

		function closeShadeImg() {
			$(".shadeImg").fadeOut(500);
		}
		
		//		H-S-CONTENT滑动跳转
		$("#tab-jbxx").click(function() {
			$("html,body").animate({
				scrollTop: $("#jbxx").offset().top
			}, 600);
			return false;
		});
		$("#tap").click(function() {
			//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
			$("html,body").animate({
				scrollTop: $("#ta").offset().top
			}, 600);
			return false;
		});
		$("#tab-zpzp").click(function() {
			$("html,body").animate({
				scrollTop: $("#tb").offset().top
			}, 600);
			return false;
		});
		$("#tab-spzp").click(function() {
			$("html,body").animate({
				scrollTop: $("#tc").offset().top
			}, 600);
			return false;
		});
		//提交发布
		function submit(){
			var myform = document.myform;
			myform.action = "?s=/Home/Zpdt1/txypgo";
			myform.method = "post";
			myform.submit();
		}

	</script>

</html>