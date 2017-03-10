<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>应赏区</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xsdt-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<body onbeforeunload="checkLeave()">
		<header>
			<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
	
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/sinaFaceAndEffec.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/header.css" />
	</head>
	<body>
		<div class="show-bg"></div>
		<header>
			<div class="h-c-1f">
						<div class="h-c-1f">
							<div class="h-f1-lzy">
								<div class="home">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</div>
								<p>
									<a href="?s=/Home/index">首页</a>
								</p>
							</div>
							<div class="h-f1-rzy">
								<ul>
									<li class="login-register">
									<?php if($_SESSION['username'] != ''){ ?>
										<a id="login-alert" href="#">
											<div class="dltx">
												<img src="/matouPCS/Public/Home/img/tx.png" />
											</div>
											<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
										</a>
								<?php }else{ ?>
								<a id="login-alert" href="#">请注册\登录</a>
								<?php } ?>
									</li>
								
								<li id="select-xx" style="width: 45px;">
								<a href="#">消息</a>
								<div class="str"></div>
								<div class="select-xx">
									<ul>
										<li>	
											<a href="?s=/Home/User/xqxx">需求消息</a>
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
								<?php if(empty($_SESSION['username'])){ ?>
									<a href="javascript:void(0)" onclick="alert('请先登录')">收藏夹</a>
								<?php }else{ ?>
									<a href="?s=/Home/User/scj">收藏夹</a>
								<?php } ?>
								<div class="str"></div>
							</li>
							<?php if(!empty($_SESSION['id'])){ ?>
								<li id="select-yfb" style="width: 70px;">
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb">
								
											<ul>
												<li>
													<a href="?s=/Home/User/userXs">悬赏</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_ys">应赏</a>
												</li>
												<li>
													<a href="?s=/Home/User/userZp">招聘</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_yp">应聘</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_qg">求购</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_xz">闲置</a>
												</li>
											</ul>
								</div>
							</li>
							<?php }else{ ?>
									<li id="select-yfb" style="width: 70px;">
									<a href="javascript:alert('您还没有登录！')">已发布</a>
								</li>
								<?php } ?>
							<li style="width: 68px;">
								<?php if(empty($_SESSION['username'])){ ?>
								<a href="javascript:void(0)" onclick="alert('请先登录')">部队中心</a>
								<?php }else{ ?>
								<a href="?s=/Home/User/bdzx">部队中心</a>
								<?php } ?>
								<div class="str"></div>
							</li>
							<li id="select-sp">
								<a href="#">商铺中心<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
								<div class="str"></div>
								<div class="select-sp">
									<ul>
										<li>
										<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">商铺主页</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">商铺主页</a>
							   <?php }else{ ?>	
							   <a href="#">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
											<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($sp['uid']); ?>">管理商铺</a>
							   <?php }else{ ?>	
							   <a href="#">管理商铺</a>
							   <?php } ?>
										
										</li>
									</ul>
								</div>
							</li>
							<li class="fdt-top">
								<a class="action" href="#" id="find">发动态</a>
								<div class="strf"></div>
							</li>
							<li class="clearf"></li>
						</ul>
					</div>
					<div class="clearf"></div>
				</div>
			</div>
				<!--登录注册开始-->
			<div class="alert">
				<div class="alert-1f">
					<div class="alert-close">
						<img src="/matouPCS/Public/Home/img/alert-close.png">
					</div>
				</div>
				<div class="alert-2f">
					<div class="alert-logo">
						<img src="/matouPCS/Public/Home/img/alert-logo.png">
					</div>
				</div>
				<div class="alert-3f">
					<div class="tabbox">
						<div class="tabbox-t">
							<div class="tab">
								<a href="javascript:;" class="on">登录</a>
								<a href="javascript:;">注册</a>
								<span class="str">|</span>
							</div>
						</div>
						<div class="content-a">
							<ul>
								<li>
									<div class="content-1f">
										<div class="login-user">
											<img src="/matouPCS/Public/Home/img/login-uesr.png">
										</div>
										<input id="login-userName" type="text" placeholder="使用用户名/手机号码">
									</div>
									<div class="login-userName">
										<p class="none">*用户名/手机号码输入有误，请重新输入</p>
									</div>
									<div class="content-2f">
										<div class="login-pw">
											<img src="/matouPCS/Public/Home/img/login-pw.png">
										</div>
										<input id="login-passWord" type="password" placeholder="请输入您的密码">
									</div>
									<div class="login-passWord">
										<p class="none">* 您的密码输入有误，请重新输入</p>
									</div>
									<div class="content-3f">
										<button>登录</button>
									</div>
									<div class="content-4f">
										<div class="i-check">
											<input type="checkbox" checked value="" />
											<label></label>
										</div>
										<P>
											<span class="left">下次自动登录</span>
											<span class="right"><a href="">忘记密码</a></span>
										</P>
									</div>
									<div class="content-5f">
										<p>使用其它方式登录</p>
										<div class="alert-QQ">
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-QQ.png">
											</a>
										</div>
										<div class="alert-wc">
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-wc.png">
											</a>
										</div>
										<div class="alert-xl">
											<a href="">
												<img src="/matouPCS/Public/Home/img/alert-xl.png">
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="register-1f">
										<span class="title">手 机 号</span>
										<input type="text" placeholder="请输入您的手机号码" id="register-userName">
										<input type="button" autocomplete="off" class="button" value="获取验证码" id="btn_yzm" />
									</div>
									<div class="register-userName">
										<p class="none">*请输入手机号码</p>
									</div>
									<div class="register-2f">
										<span class="title">验 证 码</span>
										<input id="yzm" type="text" maxlength="4" placeholder="请输入您的手机验证码">
										<div class="alert-true">
											<img src="/matouPCS/Public/Home/img/true.png">
										</div>
										<div class="alert-false">
											<img src="/matouPCS/Public/Home/img/false.png">
										</div>
									</div>
									<div class="register-3f">
										<span class="title">设置密码</span>
										<input id="register-passWord" type="password" placeholder="建议使用至少两种字符组合">
									</div>
									<div class="register-passWord">
										<p class="none">*请输入密码</p>
									</div>
									<div class="register-4f">
										<span class="title">确认密码</span>
										<input id="again" type="password" placeholder="请再次输入密码">
										<div class="register-again">
											<p class="none">*两次输入密码不一致，请重新输入</p>
										</div>
									</div>
									<div class="register-5f">
										<div class="i-check">
											<input type="checkbox" checked value="" />
											<label></label>
										</div>
										<p>
											<span class="left">我已阅读并同意</span>
											<a>《码头用户使用协议》</a>
										</p>
										<div class="clear"></div>
									</div>
									<div class="register-6f">
										<button>注册</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="alert-black"></div>
			<!--登录注册结束-->
			
			<!--发动态-->
		<div class="spdlb" id="spdlb" title="消息">
		
			<div class="titlenab">
				<img src="/matouPCS/Public/Home/img/swtitle.png">
				<div class="rhideb">
					<img src="/matouPCS/Public/Home/img/hide.png">
				</div>
			</div>
			
			<div id="type1" class="fbtypeb">
				<a>类型：</a>
				<a href="#">
					<p id="fbp1">婚礼喜事</p>
				</a>
				<a href="#" class="fbp2">
					<p id="fbp2">门面活动</p>
				</a>
			</div>
				 <script>
            var cNode =document.getElementById('type1').getElementsByTagName('p');
                    for( var i=0; i<cNode.length; i++){
                        cNode[i].index= i;
                        //用来计算点击次数
                        var type = 0;
                        cNode[i].onclick = function(){
                           type+=1; 
                            if(this.index == 0){
                                this.index = '婚礼喜事';  
                            }else if(this.index == 1){
                                this.index = '门面活动';
                            }
                         
                            types = this.index;
                            if(types == '婚礼喜事'){
                            	types = '1';
                            }else{
                            	types = '2';
                            }
                     
               
                            
                        }
                    }
                </script>
			<div class="spfxb"></div>
			<div class="contentb">
				<textarea name="content" id="content" class="text-face"></textarea>
			</div>
			<div class="swbtnb">
				<div class="swbtn-cb">
					<div>
						<a class="item" id="btn" tabindex="1">
							<img src="/matouPCS/Public/Home/img/addp.png" />
						</a>
					</div>
				
					<div class="adds">
						<img src="/matouPCS/Public/Home/img/adds.png" />
					</div>
				
					<button class="tjbtnb" id="tjbtn" onclick="tj()">发布</button>
				</div>
			</div>
		
		</div>
	<script>
			function tj(){
				   var tu = getCookie("tu");
				    var content= $("#content").val();  
				//  alert(tu);

				    $.ajax({  
				        type: "POST",  
				         url:"/matouPCS/index.php/Home/Index/usave1",
				         data: {content:content,type:types,tu:tu},  
				        success: function(data){ 
				
				        		 window.location.reload(true);//重新加载当前文挡
				  
	                	
				      
			          },error:function(){
			       			alert('no');
			       		}
			       	});
			      
		
		}   
	</script>
		<!--上传图片开始-->
		<div class="photo_upload_box_outside" id="photo_upload_box_outside" tabindex="2000">
            <div class="photo_upload_box">
                <a class="photo_upload_close"href="javascript:void(0);"onclick="photo_upload_close()"></a>
                <h1>本地上传</h1>
                <p class="upload_num">共<span id="uploaded_length">0</span>张，还能上传<span id="upload_other">9</span>张</p>
                <ul id="ul_pics" class="ul_pics clearfix">
                    <li id="local_upload"><img src="/matouPCS/Public/Home/img/local_upload.png" id="btn2"/></li>
                </ul>
                <div class="arrow_layer">
                    <span class="arrow_top_area"><i class="arrow_top_bg"></i><em class="arrow_top"></em></span>
                </div>
            </div>
        </div>
		<!--上传图片结束-->
		
		
		<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/matouPCS/Public/Home/js/jquery.leoweather.min.js"></script>
		<script src="/matouPCS/Public/Home/js/City_data.js"></script>
		<script src="/matouPCS/Public/Home/js/areadata.js"></script>
		<script src="/matouPCS/Public/Home/js/sinaFaceAndEffec.js"></script>
		<script src="/matouPCS/Public/Home/plupload/plupload.full.min.js"></script>
		<script src="/matouPCS/Public/Home/js/header-index.js"></script>
	</body>
</html>

					<div class="h-c-2f">
						<div class="s-f2-l">
							<div class="f2-l-1">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/logo.png" />
								</a>
							</div>
							<a href="?s=/Home/Xsdt">
								<div class="f2-l-2-f">悬赏大厅</div>
							</a>
							<div class="f2-l-3-f">应赏区</div>
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
										<a>场布师</a>
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
							<dl id="bd">
								<dt>类型</dt>
								<dd>
									<div class="gray">
										<a>不限</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>个人部队</a>
									</div>
								</dd>
								<dd>
									<div>
										<a>认证部队</a>
									</div>
								</dd>
							</dl>
							<dl id="rq">
								<dt>档期</dt>
								<dd>
									<div class="xz-date" >
										<input type="text" id="dt" readonly="readonly" placeholder="请选择活动时间">
									</div>
									<div class="sjxz">
										<div id="dd"></div>
									</div>
								</dd>
							</dl>
							<!--<dl>
								<dt>所在地</dt>
								<dd>
									<div>
										<input id="city" type="text" placeholder="点击选择地点" />
									</div>
								</dd>
							</dl>-->
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
					<div class="s-c-3f" id="ajax_lists">
						
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-r-1f">
						<div>
							<a href="#"><img src="/matouPCS/Public/Home/img/tjys.png" /></a>
							<a class="clearfloat"></a>
						</div>
					</div>
					<div class="s-r-2f-f">
						<ul>
							<!-- 推荐应赏 -->
							<?php if(is_array($xxoo)): foreach($xxoo as $key=>$listn): ?><li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($listn["did"]); ?>">
										<div class="yp">
											<div class="xg">
												<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
												<div class="xg_01">
													<p class="xg_01_01"><?php echo ($listn["name"]); ?></p>
													<p class="xg_01_01"><?php echo ($listn["age"]); ?>岁</p>
													<p class="xg_01_01"><?php echo ($listn["type_d"]); ?></p>
													<p class="xg_01_02">&nbsp;作品数量：<b style="color:#666666; font-weight:500;">5个</b></p>
													<p class="xg_01_03">个人简介：<b style="color:#666666; font-weight:500;"><?php echo ($listn["content"]); ?></b></p>
												</div>
											</div>
											<div class="xg_02">
												<p class="xg_02_01">已有<?php echo ($listn["collect"]); ?>人收藏</p>
												<p class="xg_02_02"><?php echo ($listn["address"]); ?></p>
											</div>

										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<!--<li class="clearfloat"></li>-->
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
							<!-- 推荐部队  -->
							<?php if(is_array($listnn)): foreach($listnn as $key=>$listnns): ?><li>
											<?php if($_SESSION['id'] == $listns['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($listnns["uid"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listnns["uid"]); ?>">
									<?php } ?>
										<div class="tj">
											<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
											<div class="tj_01">
												<p class="tj_01_01" style="100px"><?php echo ($listnns["forcename"]); ?></p>
												<p class="tj_01_02" style="100px">部队类型：<b style="color:#666666; font-weight:500"><?php echo ($listnns["type"]); ?></b></p>
												<p class="tj_01_02" style="100px">粉丝数量：<b style="color:#666666; font-weight:500">110</b></p>
												<p class="tj_01_02" style="100px">
													所在地点：<b style="color:#666666; font-weight:500"><?php echo ($listnns["address"]); ?></b>
												</p>

												<p style="font-size: 12px; color:#666666; margin-left:-120px; margin-top:14px; display:block;width: 255px;height:50px;overflow: hidden;">
													<?php echo ($listnns["content"]); ?>
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
		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank-footer.css" />
	</head>
	<body>
		<footer>
			<div class="f-content-main">
				<div class="ttm">
					<div class="s-c-7f">
						<div class="f7-o1">
							<ul>
								<li class="f4-o1-1">
									<div>
										<h4>喜事码头客服热线</h4>
										<p>工作时间:每天9:00-23:00</p>
										<p>188-8888-888</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h4>关注喜事码头微信公众号</h4>
										<p>
											<img src="/matouPCS/Public/Home/img/erweima_top.png" />
										</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h4>关于我们</h4>
										<p>
											<a href="#">关于喜事码头</a>
										</p>
										<p>
											<a href="#">加入我们</a>
										</p>
										<p>
											<a href="#">网站地图</a>
										</p>
										<p>
											<a href="#">合伙人招募</a>
										</p>
									</div>
								</li>
								<li class="f4-o1-1">
									<div>
										<h4>联系我们</h4>
										<p>官方邮箱:xishimatou@163.com</p>
										<p>通讯地址:河南省郑州市863软件园</p>
									</div>
								</li>
								<li class="clearf"></li>
							</ul>
						</div>
					</div>
				</div>
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
	<script src="/matouPCS/Public/Home/js/sousuo.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.date_input.pack.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/calendar.js"></script>
	<script src="/matouPCS/Public/Home/js/ys.js"></script>
	<script type="text/javascript">
		//日期
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

		$(function() {
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
			getPage(1);
		})
		$('.px .new').click(function() {
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
		});//查看号码
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

</html>