<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="UTF-8">
		<title>悬赏大厅</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xsdt1-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<!-- <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" /> -->
		<style>
			.s-f1-r ul li a .img {
				margin-top: 15px;
				margin-right: 10px;
				float: right;
			}
			#xz-date{
				position: relative;
			}

			.sjxz {
				position: absolute;
				top: 10px;
				left: 111px;
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
							<div class="f2-l-2">悬赏大厅</div>
							<a href="?s=/Home/Ysq">
								<div class="f2-l-3">应赏区</div>
							</a>
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
										<a>场布</a>
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
							<!-- <dl id="">
								<dt>赏金/天</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>800元以下</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>800元-1500元</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>1500元-3000元</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>3000元-5000元</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>6000元以上</a>
									</div>
								</dd>
							</dl> -->
							<dl id="xz-date">
								<dt>活动时间</dt>
								<dd>
									<div class="gray">
										<a id="daTe">不限</a>
									</div>
								</dd>
								<dd>
									<div class="xz-date" >
										<input type="text" id="dt" readonly="readonly" placeholder="请选择活动时间">
									</div>
									<div class="sjxz">
										<div id="dd"></div>
									</div>
								</dd>
							</dl>
							<dl>
								<dt>活动地点</dt>
								<dd>
									<div id="ceshi">
										<form name="xxoo">
											<input type="text" id="xz-city" placeholder="请选择地区" readonly="readonly" value="" data-value="" onclick="appendCity(this,'danxuan')">
										</form>
									</div>
								</dd>
							</dl>
							<script type="text/javascript">
							var url_ajax = "?s=/Home/Box/orders";//这个路径是真正显示列表的
							   $(function() {
							        $("#ajax_lists").delegate(".pager a", "click", function() {
							            var page = $(this).attr("data-page");
							            getPage(page);
							        })
							        getPage(1);
							    })
							    function getPage(page,type) {
							         $("#ajax_lists").html("<h1>请稍等。。。</h1>");
							         var type = getCookie("type");//类型
							         var sex = getCookie("sex");//性别
							         var age = getCookie("age");//年龄
							         var date = getCookie("date");//活动时间
							         var address = getCookie("address");//活动时间
							         var re = getCookie("re");//热门
							         $.get(url_ajax, {p: page,type:type,sex:sex,age:age,date:date,address:address,re:re}, function(data) {
							            $('#ajax_lists').html(data);
							        })
							    }
							    </script>
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
					<script type="text/javascript">
						
            		</script>
					<div class="s-c-3f"  id="ajax_lists">
						
					</div>
				</div>
				<script type="text/javascript"></script>
				<div class="s-main-r">
					<div class="s-r-1f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tzxs.png" /></a>
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-2f">
						<ul>
							<!-- 推荐悬赏 -->
							<?php if(is_array($listnew)): foreach($listnew as $key=>$newlist): ?><li>
								<a href="?s=/Home/xsdt/xqxs/id/<?php echo ($newlist["psid"]); ?>">
									<div class="sys">
										<img src="/matouPCS/Public/Home/img/sys.png" />
									</div>
									<p class="price"><?php echo ($newlist["price"]); ?>元/月</p>
									<div class="contents">
										<p><?php echo ($newlist["type"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($newlist["age"]); ?></p>
										<p>活动日期：<?php echo ($newlist["time"]); ?></p>
										<p>活动地点：<?php echo ($newlist["address"]); ?></p>
									</div>
									<div class="detail">
										<p>
											<?php echo ($newlist["content"]); ?>
										</p>
									</div>
								</a>
								</li><?php endforeach; endif; ?>
							<li class="clearfloat" style="border: 0; height: 0px; width: 0px; background: rgba(255,255,255,0.0); "></li>
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
							<?php if(is_array($listn)): foreach($listn as $key=>$listns): ?><li>
									<?php if($_SESSION['id'] == $listns['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($listns["id"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listns["id"]); ?>">
									<?php } ?>
										<div class="tj">
											<img src="/matouPCS/Public/Home/img/bdmc.png" width="101px" height="101px">
											<div class="tj_01">
												<p class="tj_01_01" style="width: 100px;color: #333;"><?php echo ($listns["forcename"]); ?></p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important;">部队类型：<?php echo ($listns["type"]); ?></p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important; ">粉丝数量：110</p>
												<p class="tj_01_02" style="width: 100px；color:#666666!important;">所在地点：<?php echo ($listns["address"]); ?></p>
												<p style="font-size: 12px; color:#999; margin-left:-116px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
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
	</body>
	
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/City_data.js"></script>
	<script src="/matouPCS/Public/Home/js/sousuo.js"></script>
	<script src="/matouPCS/Public/Home/js/areadata.js"></script>
	<script src="/matouPCS/Public/Home/js/2rank.js"></script>
	<script type="text/javascript">
		

		
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
		//热门
		$('.px .hot').click(function() {
			$('.px .hot').css('background-color', '#ff5c5d');
			$('.px .new').css('background-color', '#999999');
			 getPage(1);
		})
		$('.px .new').click(function() {
			setCookie('re',1);
			$('.px .new').css('background-color', '#ff5c5d');
			$('.px .hot').css('background-color', '#999999');
			getPage(1);
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
		//-------------------------------日期----------------------------------------
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
			// alert($('#dt').val());
		// 	var flag = true;
		// 	function checkLeave(){
		// 　　　　window.event.returnValue="确定离开当前页面吗？";
		// 			setCookie("type",'');//类型
		// 			setCookie("sex",'');//性别
		// 			setCookie("age",'');//年龄
		// 			setCookie("date",'');//活动时间
		// 			setCookie("address",'');//活动时间
		// 			 if (flag) {
		// 	            var evt = window.event || arguments[0];
		// 	            var userAgent = navigator.userAgent;
		// 	            if (userAgent.indexOf("MSIE") > 0) {
		// 	              var n = window.event.screenX - window.screenLeft;
		// 	              var b = n > document.documentElement.scrollWidth - 20;
		// 	              if (b && window.event.clientY < 0 || window.event.altKey) {
		// 	                window.event.returnValue = ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
		// 		                setCookie("type",'');//类型
		// 						setCookie("sex",'');//性别
		// 						setCookie("age",'');//年龄
		// 						setCookie("date",'');//活动时间
		// 						setCookie("address",'');//活动时间

		// 	              }else {
		// 	              	setCookie("type",'');//类型
		// 					setCookie("sex",'');//性别
		// 					setCookie("age",'');//年龄
		// 					setCookie("date",'');//活动时间
		// 					setCookie("address",'');//活动时间
		// 	                return ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
		// 	              }
		// 	            }else if (userAgent.indexOf("Firefox") > 0) {
		// 	            	alert('火狐');
		// 	            	setCookie("type",'');//类型
		// 					setCookie("sex",'');//性别
		// 					setCookie("age",'');//年龄
		// 					setCookie("date",'');//活动时间
		// 					setCookie("address",'');//活动时间
		// 	               return ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
		// 	            }
		// 	          }
		// 　　　}
		      
	</script>

</html>