<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>部队设置</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/yhzx-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
							<div class="clearfloat"></div>
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
								<div class="clearfloat"></div>
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
			
		    <?php if(is_array($jarr)): $i = 0; $__LIST__ = $jarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="s-main-c">
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-c-2f-1f">基本信息</div>
						<div class="s-c-2f-2f">
							<ul class="ul-l">
								<li>用户名</li>
								<li>性别</li>
								<li>所在地</li>
								<div class="clearfloat"></div>
							</ul>
							<form name="xingbie">
							<ul class="ul-r">
								<li>
									<input type="text" class="white-in" id="username" name="username" style="width: 178px; height: 18px;" value="<?php echo ($v["username"]); ?>" />
								</li>
								<li>
								<?php if($v[sex]=='男'): ?><input class="magic-radio" type="radio" name="sex" id="r1" value="男" checked>
									<label for="r1">男</label>
									<?php else: ?>
									<input class="magic-radio" type="radio" name="sex" id="r1" value="男" >
									<label for="r1">男</label><?php endif; ?>
								
										<?php if($v[sex]=='女'): ?><input class="magic-radio" type="radio" name="sex" id="r2" value="女" checked>
									<label for="r2">女</label>
									<?php else: ?>
									<input class="magic-radio" type="radio" name="sex" id="r2" value="女" >
									<label for="r2">女</label><?php endif; ?>
										<?php if($v[sex]=='保密'): ?><input class="magic-radio" type="radio" name="sex" id="r3" value="保密" checked>
									<label for="r3">保密</label>
									<?php else: ?>
									<input class="magic-radio" type="radio" name="sex" id="r3" value="保密" >
									<label for="r3">保密</label><?php endif; ?>
									<div class="clearfloat"></div>
								</li>
								<li>
									<input type="text" name="address" id="address" class="white-in" style="width: 178px; height: 18px;" value="<?php echo ($v["addre"]); ?>" />
								</li>
						
								<div class="clearfloat"></div>`
							</ul>
						</form>
							<div class="clearfloat"></div>
						</div>
						<div class="sctx">
							<div class="sctx-y">
								<img src="/matouPCS/Public/Home/img/yhmc.png" />
							</div>
							<button>修改头像</button>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-3f">
						<div class="s-c-3f-1f">账号安全</div>
						<div class="s-c-3f-2f">
							<ul class="ul-l">
								<li>码头币数量</li>
								<li>绑定手机</li>
								<li>绑定微信号</li>
								<li>绑定QQ号</li>
							</ul>
							<ul class="ul-r">
								<li>
									<p style="color: #FF5C5D">12</p>个&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="">查看码头币规则</a>
								</li>
								<li>
									<?php if($v[tel]==''): ?><input id="tel" value="<?php echo ($v["username"]); ?>" style="display: none;" type="text" class="white-in" style="width: 178px; height: 18px;" />
									<button id="bdtel" style="margin: 0;">绑定手机号</button>
									<?php else: ?>
										<input id="tel" value="<?php echo ($v["tel"]); ?>" style="display: none;" type="text" class="white-in" style="width: 178px; height: 18px;" />
									<a id="bdtel" href="javascript:void(0)" style="margin: 0;">绑定手机号</a><?php endif; ?>
								</li>
								<li>
									<div class="wc">
										<img src="/matouPCS/Public/Home/img/alert-wc.png" />
									</div>
									<button id="bdwc">绑定微信</button>
								</li>
								<li>
									<div class="QQ">
										<img src="/matouPCS/Public/Home/img/alert-QQ.png" />
									</div>
									<button id="bdQQ">绑定QQ</button>
								</li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-4f">
						<div class="s-c-4f-1f">修改密码</div>
						<div class="s-c-4f-2f">
							<ul class="ul-l">
								<li>当前密码</li>
								<li>新密码</li>
								<li>新密码确认</li>
							</ul>
							<ul class="ul-r">
								<li>
									<input type="password" class="white-in" id="password" name="password" style="width: 178px; height: 18px;" />
								</li>
								<li>
									<input placeholder="请输入新密码" id="password1"   name="password1" type="password" class="white-in" style="width: 178px; height: 18px;" />
								</li>
								<li>
									<input placeholder="请再次输入新密码" id="password2" name="password2" type="password" class="white-in" style="width: 178px; height: 18px;" />
									<span id="xxoo"></span>
								</li>
							</ul>
							<div class="clearfloat"></div>
						</div>
					</div>
					<div class="clearfloat"></div>
					<div class="s-c-5f">
						<button onclick="tj(<?php echo ($v["id"]); ?>)">确认修改</button>
					</div>
					
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</form>
				<div class="s-main-r">
					<p style="font-size: 22px;">WEDDING PIER</p>
					<p style="font-size: 22px;">喜事码头</p>
					<p style="font-size: 14px; padding:10px 0;">简单&nbsp;&nbsp;&nbsp;&nbsp;方便&nbsp;&nbsp;&nbsp;&nbsp;效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							用户中心
						</div>
						<ul>
							<li class="selected-con">
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://">
									账号安全
								</a>
							</li>
							<li>
								<a href="javascript://">
									修改密码
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>
			<div class="clearfloat"></div>

		</section>
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
	<script type="text/javascript">
		//----------------------------remove tab切换样式--------------------------
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		//----------------------------保存对勾变色--------------------------
		$('#jbxx').click(function() {
			$('.list-a').attr('src', '/matouPCS/Public/Home/img/list-2-red.png');
		});
		$('#zpxx').click(function() {
			$('.list-b').attr('src', '/matouPCS/Public/Home/img/list-2-red.png');
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
		//绑定微信
		$('#bdwc').click(function(){
			if($(this).html() == '绑定微信') {
				$(this).html('解除绑定');
				$(this).css('background-color','#FF5C5D');
			} else {
				$(this).html('绑定微信');
				$(this).css('background-color','#999999');
			}
		});
		//绑定QQ
		$('#bdQQ').click(function(){
			if($(this).html() == '绑定QQ') {
				$(this).html('解除绑定');
				$(this).css('background-color','#FF5C5D');
			} else {
				$(this).html('绑定QQ');
				$(this).css('background-color','#999999');
			}
		});
		//绑定手机号
		$('#bdtel').click(function(){
			$(this).css('display','none');
			$('#tel').css('display','block');
		});
		function tj(id){
			// alert(id);
			    var username = $("#username").val();  
			    var password = $("#upass").val();
			    var address= $("#address").val();
			    var tel = $("#tel").val(); 
			    var password = $("#password").val();
			    var password1 = $("#password1").val(); 
			    var password2 = $("#password2").val(); 
			    var xingbie = document.xingbie;
			    var sex= xingbie.sex.value;
			    //== alert(password);
		        if(password2==password1 && password2 != '' && password1 != ''){
			    $.ajax({  
			        type: "POST",  
			         url:"/matouPCS/index.php/Home/User/usave/",
			         data: {"username":username,"password":password,"tel":tel,"address":address,"password1":password1,"password2":password2,"sex":sex},  

			        success: function(data){ 
			        	if(data=='y'){
			        		//alert('密码输入错误，修改失败');
			        		 $('#xxoo').html('<p style="display: block;color:red">*密码输入错误，修改失败</p>');
			        		//window.location.reload(true);//重新加载当前文挡
			        	}else{
			        		 $('#xxoo').html('<p style="display: block;color:red">*修改成功</p>');
			        		 window.location.reload(true);//重新加载当前文挡
			        	}
			       //	 alert("修改完成");
                	
			      
		          },error:function(){
		       			alert('no');
		       		}
		       	});
		        }else{
		        	 $('#xxoo').html('<p style="display: block;color:red">*两次输入的密码不一致</p>');
		       
		        	//alert('两次密码输入不一致');
		        	//window.location.reload(true);
		        }
			}


	</script>

</html>