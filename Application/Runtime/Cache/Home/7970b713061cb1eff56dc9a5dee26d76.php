<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>闲置填写</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/txxz-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
							填写闲置
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://">
									闲置信息
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="s-main-l">
					<form name="myform" enctype="multipart/form-data">
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<strong><p>基本信息</p></strong>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mmap">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">地&nbsp;区</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input id="xz-city" placeholder="请选择所在地" name="address" readonly="readonly" type="text" value="" data-value="" onclick="appendCity(this,'danxuan')" style="float: left; padding: 0 10px; width: 178px; height: 28px; border: solid #DEDEDE 1px;" />
										</div>
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
										<div class="litr"><input class="w200t" name="qq" maxlength="10" type="text" /></div>
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
										<div class="litr"><input class="w200t" name="tel" maxlength="11" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mhllx"></div>
								</li>
							</ul>
						</div>
					</div>
					<div class="s-c-2f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<strong><p>求购物品</p></strong>
						</div>
						<div style="margin-left: 55px; width: 690px;" class="s-2f-c2">
							<ul style="width:100%;" class="tyint">
								<li style="height: 140px;">
									<div class="mprofession">
										<div class="litl" style="height: 140px;">
											<p class="litx">*</p>
											<p class="litc">闲置图片</p>
											<p class="cf"></p>
										</div>
										<div class="litr" style="width: 590px; height: 140px;">
											<div class="xztp">
												<img id="pic1" src="/matouPCS/Public/Home/img/local_upload.png" />
												<input id="upload1" name="file1" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<div class="xztp">
												<img id="pic2" src="/matouPCS/Public/Home/img/local_upload.png" />
												<input id="upload2" name="file2" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<div class="xztp">
												<img id="pic3" src="/matouPCS/Public/Home/img/local_upload.png" />
												<input id="upload3" name="file3" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<div style="margin: 0px;" class="xztp">
												<img id="pic4" src="/matouPCS/Public/Home/img/local_upload.png" />
												<input id="upload4" name="file4" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
											<div class="clearfloat"></div>
										</div>
									</div>
								</li>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">闲置名称</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w95s" id="types" name="names" onchange="gradeChange()">
												<option>-请选择-</option>
												<option>摄像器材</option>
												<option>摄影器材</option>
												<option>音响</option>
												<option>灯光</option>
												<option>舞台桁架</option>
												<option>婚纱</option>
												<option>礼服</option>
												<option>笔记本</option>
												<option>其他</option>
											</select>
											<span class="types1"></span>
											<!-- <input class="w209" type="text" name="names" placeholder="输入具体物品名称" /> -->
										</div>
										<div class="cf"></div>
								</li>
								<script type="text/javascript">
									function gradeChange(){
										var checkText=$("#types").find("option:selected").text();
									    if(checkText == '其他'){
									    	$('.types1').html('<input class="w209" type="text" name="zymc1" placeholder="填写职业名称" />');
									    }else{
									    	$('.types1').html('<input class="w209" type="hidden" name="zymc1" placeholder="填写职业名称" />');
									    }
									}
								</script>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">价&nbsp;格</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w95t" type="text" name="price" />&nbsp;元
										</div>
									</div>
									<div class="cf"></div>
								</li>
								<li style="height: auto!important;">
									<div class="mzwjs" style="height: auto!important;">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">闲置简介</p>
											<p class="cf"></p>
										</div>
										<div class="litr" style="height: auto!important;"><textarea class="w340" name="content" type="text"></textarea></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mhllx"></div>
								</li>
							</ul>
							</div>
						</div>
						<div class="clearfloat "></div>
						<div class="s-tf-btn" onclick="submit()">确认发布</div>
					</div>
					<div class="clearfloat "></div>
				</div>
			</div>
			</form>
			<div class="clearfloat "></div>
		</section>
		<script type="text/javascript">
		function submit(){
			var form = document.myform;
			if(form.address.value == '' || form.qq.value == '' || form.tel.value == '' || form.names.value == '' || form.price.value == '' || form.content.value == '' ){
				alert('滚犊子');
			}else{
				form.action = "?s=/Home/Tzsc/txxzgo";
				form.method = "post";
				form.submit();
			}
		}
			

		</script>
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
	<script type="text/javascript" src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
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
				$(".txfg1").css("height", "auto");
				$(".txfg1").css("border-bottom", "0px");
				$(".addmation").append('<li><ul class="tyint"><li><div class="mhdsj"><div class="litl"><p class="litx">*</p><p class="litc">活动时间</p><p class="cf"></p></div><div class="litr"><input class="w150t" type="text" name="" id="" value="" />&nbsp;到&nbsp;<input class="w150t" type="text" name="" id="" value="" /><div class="liti1"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div><div class="liti2"><img src="/matouPCS/Public/Home/img/jxrq.png" /></div></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">所在公司</p><p class="cf"></p></div><div class="litr"><input class="w200t" type="text" /></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">担任职位</p><p class="cf"></p></div><div class="litr"><input class="w200t" type="text" /></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作描述</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
					$(".lidel").on("click", function() {
						$(this).parent().parent().parent().parent().parent().remove();
						if($(".s-main-l").css("height") == "524px") {
							//							alert("605")
							$(".txfg1-c2-1").show();
							$(".txfg1").css("border-bottom", "1px solid #999");
						}
					});
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
			$("#pic4").click(function() {
				$("#upload4").click(); //隐藏了input:file样式后，点击头像就可以本地上传
				$("#upload4").on("change", function() {
					var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
					if(objUrl) {
						$("#pic4").attr("src", objUrl); //将图片路径存入src中，显示出图片
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
	</script>

</html>