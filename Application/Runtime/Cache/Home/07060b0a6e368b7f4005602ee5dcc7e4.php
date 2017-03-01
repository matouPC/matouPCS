<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺管理-管理信息</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/spgl-3rxx-cc.css" />
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
								<a href="?s=Home/index.html">
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
				<div class="s-main-r">
					<div class="s-c-1f">
						<ul class="s-1f_00">
							<li class="s-1f_01">WEDDING&nbsp;PIER</li>
							<li class="s-1f_02">喜事码头</li>
							<li class="s-1f_03">简单&nbsp;&nbsp;方便&nbsp;&nbsp;效率</li>
						</ul>
					</div>
					<div class="cjsp_bt">
						<ul>
							<li class="cjsp_bt_01">
								<a href="#">商铺管理</a>
							</li>
							<li class="cjsp_bt_03">
								<a href="#"><img src="/matouPCS/Public/Home/img/r_01.png" width="20" height="20">&nbsp;&nbsp;基本信息</a>&nbsp;&nbsp;&nbsp;</li>
							<li class="cjsp_bt_02">
								<a href="?s=Home/Mtbu/spglsp/id/<?php echo ($v['id']); ?>"><img src="/matouPCS/Public/Home/img/r_01.png" width="20" height="20">&nbsp;&nbsp;店铺商品</a>&nbsp;&nbsp;&nbsp;</li>
						</ul>
					</div>

				</div>
				<div class="s-main-l">
		
						<div class="s-c-2f">
							<ul>
								<li class="cjsp_cz">&nbsp;<img style="position: relative;top: 3px;" src="/matouPCS/Public/Home/img/cjsp_01.png">&nbsp;&nbsp;<strong>基本信息</strong></li>
							</ul>
						</div>
						<div class="s-c-3f">
						<form action="?s=/Home/Mtbu/usave" method="post" id="myform" enctype="multipart/form-data">
						
							<div class="spgl_xx">
								<div class="spgl_xx_00">
									<em>*</em>
										<p>营业执照名称</p>
										<input type="hidden" name="id" value="<?php echo ($v["id"]); ?>"/>
									<input name="charter" value="<?php echo ($v["charter"]); ?>"  type="text" placeholder="" class="spgl_input_00" style="background: #ccc; maxlength="20" autocomplete="off" readonly="readonly">
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:16px;">*</em>
									<p>法定代表人</p>
									 
									<input name="representative" value="<?php echo ($v["representative"]); ?>"   type="text" placeholder="" class="spgl_input_00" style="background: #ccc; maxlength="20" autocomplete="off" readonly="readonly">
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:33px;">*</em>
									<p>商铺名称</p>
									<input name="shopname"  value="<?php echo ($v["shopname"]); ?>" type="text" placeholder="" class="spgl_input_00" style="background: #ccc; maxlength="20" autocomplete="off" readonly="readonly">
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:33px;">*</em>
									<p>商铺类型</p>
									<input name="type"  value="<?php echo ($v["type"]); ?>" type="text" placeholder="" class="spgl_input_02" maxlength="11" style="background: #ccc;width: 111px;" autocomplete="off" readonly="readonly">
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:33px;">*</em>
									<p>详细地址</p>
									<input id="city" type="text" placeholder="点击选择地点" />
									<input name="address" id="address"  value="<?php echo ($v["address"]); ?>" type="text" placeholder="请输入详细地址" class="spgl_input_01" maxlength="20">
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:33px;">*</em>
									<p>联系电话</p>
									<input name="tel" id="tel"  value="<?php echo ($v["tel"]); ?>" type="text" placeholder="" class="spgl_input_02" maxlength="11">
								</div>
								<div class="spgl_xx_00">
									<p style="margin-left:89px;">QQ</p>
									<input name="qq" value="<?php echo ($v["qq"]); ?>" type="text" placeholder="" class="spgl_input_02" maxlength="12">
								</div>

								<div class="spgl_xx_01">
									<em style="margin-left:33px;">*</em>
									<p>主营商品</p>
									<textarea name="zysp" id="zysp"   cols="" rows="" placeholder="请输入商品名称，用间隔号隔开。。。。。。" class="spgl_input_03"><?php echo ($v["zysp"]); ?></textarea>
								</div>
								<div class="spgl_xx_00">
									<em style="margin-left:33px;">&nbsp;&nbsp;</em>
									<p>网店链接</p>
									<select name="wangzhan"  id="city2">
									   <option><?php echo ($v["wangzhan"]); ?></option >
										<option>淘宝</option>
										<option>天猫</option>
										<option>阿里巴巴</option>
									</select>
									<input name="lianjie" value="<?php echo ($v["lianjie"]); ?>" type="text" placeholder="请输入链接地址" class="spgl_input_01" maxlength="20">
								</div>

							</div>
					
							</form>
							<div class="spgl_x1">
								<div class="spgl_x1_00"></div>
								<input class="s-c-tj_01" type="submit" value="编辑店铺头像">
							</div>
						</div>

						<div class="s-c-4f">
							<input class="s-c-tj" type="submit" onclick="tj()" value="保存">
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
	<script src="/matouPCS/Public/Home/js/city-data.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/js/showWin.js"></script>
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
		
		 function tj(){		 	
			    var  	charter = $("#charter").val();  
			    var representative = $("#representative").val();
			    var shopname= $("#shopname").val();
			    var tel = $("#tel").val(); 
			    var type = $("#type").val();
			    var address = $("#address").val(); 
			    var zysp = $("#zysp").val(); 
			    //alert(charter);
			    if(charter==''||representative==''||shopname==''||tel==''||type==''||address==''||zysp==''){
			    	alert("请完善信息再提交");
			    }else{
				 $.ajax({
				                 cache: true,
				                 type: "POST",
				                 url:"/matouPCS/index.php/Home/Mtbu/usave/",
				                 data:$('#myform').serialize(),// 你的formid
				                 async: false,
				                 error: function(request) {
				                     alert("Connection error");
				                 },
				                 success: function(data) {
				                	 location = "?s=/Home/Mtbu/spglsp";
				                 }
				             });
			    }
				 }       
			 
	 
	</script>

</html>