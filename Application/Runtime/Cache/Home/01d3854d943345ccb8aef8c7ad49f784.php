<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>码头部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/mtbu-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/datePicker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/hzw-city-picker.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
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


	<body>
		<header>
			<div class="h-content-main">
				<div class="h-main-c">
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
										<a href="?s=/Home/User">
											<div class="dltx">			
													<?php if($_SESSION['imagename'] != ''){ ?>
													 <img style="border-radius:50%;width: 30px"  src="/matouPCS/Tu/upload/<?php echo ($_SESSION['imagename']); ?>"/> 
													<?php }else{ ?>
												<img src="/matouPCS/Public/Home/img/tx.png" />
												<?php } ?>
											</div>
											<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
										</a>
								<?php }else{ ?>
								<a id="login-alert" href="#">请注册\登录</a>
								<?php } ?>
									</li>
							<li id="select-xx">
							<?php if($_SESSION['id'] != ''){ ?>
								<a rel="nofollow" href="#">消息</a>
								<div class="news">
									<img src="/matouPCS/Public/Home/img/news.png" />
								</div>
								<div class="str"></div>
								<div class="select-xx">
									<ul>
										<li>
												<a href="?s=/Home/User/xqxx">需求消息
											<div class="newss">
												<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
									</ul>
								</div>
								<?php }else{ ?>

								<a href="#" onclick="alert('请先登录')">消息</a>
								<div class="str"></div>
								<div class="select-xx" style="display:none;">
									<ul>
											<li>
												<a href="?s=/Home/User/xqxx">需求消息
											<div class="newss">
												<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
								    	<a href="?s=/Home/User/bdxx">
												部队消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
										<li>
											<a href="?s=/Home/User/spxx">
												商铺消息
												<div class="newss">
													<img src="/matouPCS/Public/Home/img/news.png" />
												</div>
											</a>
										</li>
									</ul>
								</div>
								<?php } ?>
							</li>
							<li>
								<?php if(empty($_SESSION['username'])){ ?>
									<a href="javascript:void(0)" onclick="alert('请先登录')">收藏报名</a>
								<?php }else{ ?>
									<a href="?s=/Home/User/scj">收藏报名</a>
								<?php } ?>
								<div class="str"></div>
							</li>
								<?php if(!empty($_SESSION['id'])){ ?>
							<li id="select-yfb">
								<a rel="nofollow" href="#">&nbsp;&nbsp;已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
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
									<a href="javascript:void(0)" onclick="alert('请先登录')">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb" style="display:none;">
								
											<ul>
											
											</ul>
								</div>
								<?php } ?>
							<li class="bdzx-top">
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
								<a href="?s=/Home/Tjcs/spxq/uid/<?php echo ($sp['uid']); ?>">商铺主页</a>
							   <?php }else{ ?>	
							   <a href="#" onclick="alert('你暂时还没注册商铺')">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
									<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">管理商铺</a>
							   <?php }else{ ?>	
							   <a href="#" onclick="alert('你暂时还没注册商铺')">管理商铺</a>
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
											<a href="javascript:void(0)" onclick="windowDl()">
												<!-- <span  id="qqLoginBtn"></span> -->
												<img src="/matouPCS/Public/Home/img/alert-QQ.png">
											</a>
										</div>
										<div class="alert-wc">
											 <a href="javascript:void(0)" onclick="wxLogin()"> <!--微信登录 -->
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
		              alert(222);
					   alert(content);
		    $.ajax({  
				        type: "POST",  
				         url:"?s=/Home/User/usave1",
				         data: {content:content,type:types,tu:tu},  
				        success: function(data){ 
				            alert(666);
				        	//	 window.location.reload(true);//重新加载当前文挡
				  
	                	
				      
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
		<script src="/matouPCS/Public/Home/js/index-alert-login.js"></script>
		<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://www.xishimatou.com;" charset="utf-8"></script>
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
	</body>
</html>
						<div class="h-c-2f">
							<div class="s-f2-l-f">
								<div class="f2-l-1-f">
									<a href="?s=/Home/Index">
										<img src="/matouPCS/Public/Home/img/logo.png" alt="喜事码头" />
									</a>
								</div>
								<div class="f2-l-3-f">
									<h1>码头部队</h1>
								</div>
							</div>
							<div class="s-f2-r-f">
								<div class="demo">
									
										<ul>
											<li><input type="text" id="tt" value="" class="text" autocomplete="off" /></li>
											<li><input type="submit" value="搜索" class="button" /></li>
											<li>
												<a href="" class="button2">商家认证部队</a>
											</li>
											<div class="clear"></div>
										</ul>
								</div>
							</div>
						</div>
						<div class="h-c-4f">
							<img src="/matouPCS/Public/Home/img/banner.png" />
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
					<div class="s-c-1f" style="margin-top:30px;">
						<p style="float: left; display: block; width: 60px; line-height: 30px; font-size: 14px; margin-right: 30px;">所在地区</p>
	                            <form name="xxoo">
											<input type="text" id="xz-city" placeholder="请选择地区" readonly="readonly" value="" data-value="" onclick="appendCity(this,'danxuan')">
										</form>
								
						<img src="/matouPCS/Public/Home/img/mtbutitle.png" />
					</div>
						<script type="text/javascript">				
							var url_ajax = "?s=/Home/Box/bddz";//这个路径是真正显示列表的
							    function getPage() {
							    	//alert(getCookie("add"));
							         $("#xxoos").html("<h1>请稍等。。。</h1>");
							         var address = getCookie("add");//活动时间
							         $.get(url_ajax, {address:address}, function(data) {
							        	   //	alert(data);
							            $('#xxoos').html(data);
							        })
							    }
							    getPage();
							    </script>
					
				
					<div   class="s-c-2f">
						<div style="width: 850px;">
							<div class="s-f2l-c1">
								<ul>
									<li>
										<a class="selected-tab" href="javascript://">热门动态</a>
									</li>
									<li>
										<a href="javascript://"  onclick="gzs(1)">工作室</a>
									</li>
									<li>
										<a href="javascript://" onclick="gzs(2)">表演团</a>
									</li>
									<li>
										<a href="javascript://" onclick="gzs(3)">婚庆公司</a>
									</li>
									<li>
										<a href="javascript://" onclick="gzs(4)">影楼</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<br>
					<div>
					<div class="con" id="re">
					
					<div id="xxoos">
					
				</div>
					</div>
					<div class="con">
				
						<div class="s-c-3f">
							<div class="f3-t-1">
							
								<ul id='xxoo1'>
									<div class="clear"></div>
								</ul>
				
						</div>
						</div>
						<div class="djjzgd">
							<button onclick="tj1()" name='btn1' id='btn1' >点击加载更多</button>
						</div>
					</div>
					<div class="con">
							<div class="s-c-3f">
							<div class="f3-t-1">
								<ul id="xxoo2">
									<div class="clear"></div>
								</ul>
							</div>
						</div>
						  <div class="djjzgd">
							<button onclick="tj2()" name='btnn' id='btnn' >点击加载更多</button>
						</div>
					</div>
					
					
					<div class="con">
							<div class="s-c-3f">
							<div class="f3-t-1">
								<ul id="xxoo3">
									<div class="clear"></div>
								</ul>
							</div>
						</div>
						  <div class="djjzgd">
							<button onclick="tj3()" name='btn3' id='btn3' >点击加载更多</button>
						</div>
					</div>
					<div class="con">
							<div class="s-c-3f">
							<div class="f3-t-1">
								<ul id='xxoo4'>
									<div class="clear"></div>
								</ul>
							</div>
						</div>
					<div class="djjzgd">
							<button onclick="tj4()" name='btn4' id='btn4' >点击加载更多</button>
						</div>
					</div>
					<!--<div class="s-c-3f2">

					</div>-->
				</div>
				</div>
  	<script type="text/javascript">
									var a = 0;
									function zan1(did,zan){
						
										var zan = parseInt(document.getElementById('s'+did).innerHTML);
										if($('#z'+did).hasClass('icon-dz')){
											zan += 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_gt_zan/did/"+did+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('点赞成功');
													$('#z'+did).removeClass('icon-dz');
													$('#z'+did).addClass('icon-dz-kz');
													$('#s'+did).html(zan);
												},error:function(){
													alert('n2o');
												}
											});
											
										}else{
											zan -= 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_gt_zan/did/"+did+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('取消成功');
													$('#z'+did).removeClass('icon-dz-kz');
													$('#z'+did).addClass('icon-dz');
													$('#s'+did).html(zan);
												},error:function(){
													alert('n4o');
												}
											});
											
										}
									}
		
	function gzs(id){
		 var address = getCookie("add");//活动时间 
	//	alert(id);	
	//	alert(address);
				$.ajax({
					url:"?s=/Home/Mtbu/dongtaidi",
					type:"post",
					data:{id:id,address:address},
					dataType:"json",
					success:function(data){
						//alert(data);	
	                   var li='';
						for (var i = 0; i < data.length; i++) {
						
							li+='<li><a href="#"><div class="f3-t-1-c1"><img src="/matouPCS/Public/Home/img/bdmc.png" /></div><div class="f3-t-1-c2"><p>'+data[i].forcename+'</p></div><div class="f3-t-1-c3l"><p>部队类型:'+data[i].type_bd+'</p></div><div class="f3-t-1-c3r"><p>粉丝数量100</p></div><div class="f3-t-1-c4"><p>'+data[i].content+'...</p></div><div class="f3-t-1-c5"><p>所在地：'+data[i].address+'</p></div><div class="clearfloat"></div></a></li>';
										
							
						};
						var p = '<div class="clear"></div>';
						$('#xxoo'+id).html(li+p);
						$('#xxoo'+id).val('');
					},error:function(){
						alert('no');
					}
				});
			
		}
		</script>
	<script type="text/javascript">
	 var c=2;
	  
	  function tj(){	
		  var t = "<?php echo session('id');?>";
	      var address = getCookie("add");//活动时间
	//	alert(1);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/buduijzre');?>",
					data:{k:c,address:address},
					beforeSend:function(){
			         $("#contentt").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
				
						if(data!=null){		
							
	               	 for (var i = 0; i < data['nr'].length; i++) {
							if(data['nr'][i].zid==null){
								 var aa=2;
							}else{
	               		 var myArray=new Array()
						 var str=data['nr'][i].zid;  
						 myArray = str.split(","); 
						 
						 var c = ","; // 要计算的字符
						 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
						 var result = str.match(regex);
						 var count = !result ? 0 : result.length;
						 for(var j=0;j<=count;j++){
							 if(myArray[j]==t){
								 var aa=1;
	
							 }
						 }
							}
						if(aa==1){
							var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
						}else{
							var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
						}
						if(data['nr'][i].uid==t){
							var href='<a href="?s=/Home/Mtbu/spbddndt/id/'+data['nr'][i].uid+'">';
						}else{
							var href='<a href="?s=/Home/Mtbu/spbddydt/id/'+data['nr'][i].uid+'">';
						}
	               		 if(data['nr'][i].imagename==''){
	               			var img='<img src="/matouPCS/Public/Home/img/yhmc.png" />';
	               		 }else{
	               			var img='<img src="/matouPCS/Tu/upload/'+data['nr'][i].imagename+'"  width="60" height="60" style="border-radius:50%"/>';
	               		 }
	               	    if(data['nr'][i].username==data['nr'][i].tel){
							var use = data['nr'][i].username.substr(0,5);
							}else{
						     var use = data['nr'][i].username;
							}	
	               	 var p='';
	                	 for (var j= 0; j < data['tu'].length; j++) {
							 if(data['nr'][i].did==data['tu'][j].pid){

								p+='<li><a rel="gallery1" class="boxer" href="/matouPCS/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
							 }
						 }
	               		$("#contentt").append('<div class="s-c-3f-1f"><div class="yhtx">'+href+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="zw">职位名称： '+data['nr'][i].type_u+'<</p><p class="szd">所在地： '+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'<div class="clear"></div></ul><div class="bottom"><p class="left"> '+data['nr'][i].time+'</p><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><div class="clear"></div></div><div class="clear"></div></div></div>');
				 		
								 }
						}else{
							 //alert(22);
							 document.getElementById('btn').innerHTML = '加载完毕';
			 				flag=true;	
						}	
			 },
			 	complete:function(){
			           $("#load").remove();
					},
				 	dataType:'json'
				 	});
			 	c++;
		// alert(p);
		  }  
		 var w=2;
		  function tj1(){	
			   var address = getCookie("add");//活动时间
			//	 alert(1);
					$.ajax({
						type:'post',
						url:"<?php echo U('Mtbu/buduijzgz');?>",
						data:{k:w,address:address},
						beforeSend:function(){
				         $("#xxoo1").append("<div id='load'>加载中……</div>");
						},
						success:function(data){
							// alert(data);
							if(data!=null){				
									//alert(1);
									
									 for (var i = 0; i < data.length; i++) {
							
									$("#xxoo1").prepend('<li><a href="#"><div class="f3-t-1-c1"><img src="/matouPCS/Public/Home/img/bdmc.png" /></div><div class="f3-t-1-c2"><p>'+data[i].forcename+'</p></div><div class="f3-t-1-c3l"><p>部队类型:'+data[i].type_bd+'</p></div><div class="f3-t-1-c3r"><p>粉丝数量100</p></div><div class="f3-t-1-c4"><p>'+data[i].content+'...</p></div><div class="f3-t-1-c5"><p>所在地：'+data[i].address+'</p></div><div class="clearfloat"></div></a></li>');
				 		
									 }
							}else{
								 //alert(22);
								 document.getElementById('btn1').innerHTML = '加载完毕';
				 				flag=true;	
							}	
				 },
				 	complete:function(){
				           $("#load").remove();
						},
					 	dataType:'json'
					 	});
				 	w++;
			// alert(p);
			  }  
			 var t=2;
			  function tj2(){
				   var address = getCookie("add");//活动时间
					//alert(2);
						$.ajax({
							type:'post',
							url:"<?php echo U('Mtbu/buduijzby');?>",
							data:{k:t,address:address},
							beforeSend:function(){
					         $("#xxoo2").append("<div id='load'>加载中……</div>");
							},
							success:function(data){
							//	alert(data);
								if(data!=null){				
										//alert(1);
										
										 for (var i = 0; i < data.length; i++) {
								
										$("#xxoo2").prepend('<li><a href="#"><div class="f3-t-1-c1"><img src="/matouPCS/Public/Home/img/bdmc.png" /></div><div class="f3-t-1-c2"><p>'+data[i].forcename+'</p></div><div class="f3-t-1-c3l"><p>部队类型:'+data[i].type_bd+'</p></div><div class="f3-t-1-c3r"><p>粉丝数量100</p></div><div class="f3-t-1-c4"><p>'+data[i].content+'...</p></div><div class="f3-t-1-c5"><p>所在地：'+data[i].address+'</p></div><div class="clearfloat"></div></a></li>');
					 		
										 }
								}else{
									 //alert(22);
									 document.getElementById('btnn').innerHTML = '加载完毕';
					 				flag=true;	
								}	
					 },
					 	complete:function(){
					           $("#load").remove();
							},
						 	dataType:'json'
						 	});
					 	t++;
				// alert(p);
				  } 
				 var r=2;
				  function tj3(){	
					   var address = getCookie("add");//活动时间; 
					//	 alert(1);
							$.ajax({
								type:'post',
								url:"<?php echo U('Mtbu/buduijzhq');?>",
								data:{k:r,address:address},
								beforeSend:function(){
						         $("#xxoo3").append("<div id='load'>加载中……</div>");
								},
								success:function(data){
									// alert(data);
									if(data!=null){				
											//alert(1);
											
											 for (var i = 0; i < data.length; i++) {
									
											$("#xxoo3").prepend('<li><a href="#"><div class="f3-t-1-c1"><img src="/matouPCS/Public/Home/img/bdmc.png" /></div><div class="f3-t-1-c2"><p>'+data[i].forcename+'</p></div><div class="f3-t-1-c3l"><p>部队类型:'+data[i].type_bd+'</p></div><div class="f3-t-1-c3r"><p>粉丝数量100</p></div><div class="f3-t-1-c4"><p>'+data[i].content+'...</p></div><div class="f3-t-1-c5"><p>所在地：'+data[i].address+'</p></div><div class="clearfloat"></div></a></li>');
						 		
											 }
									}else{
										 //alert(22);
										 document.getElementById('btn3').innerHTML = '加载完毕';
						 				flag=true;	
									}	
						 },
						 	complete:function(){
						           $("#load").remove();
								},
							 	dataType:'json'
							 	});
						 	r++;
					// alert(p);
					  } 
					 var e=2;
					  function tj4(){
						   var address = getCookie("add");
							// alert(1);
								$.ajax({
									type:'post',
									url:"<?php echo U('Mtbu/buduijzyl');?>",
									data:{k:e,address:address},
									beforeSend:function(){
							         $("#xxoo4").append("<div id='load'>加载中……</div>");
									},
									success:function(data){
										// alert(data);
										if(data!=null){				
												//alert(1);
												
												 for (var i = 0; i < data.length; i++) {
										
												$("#xxoo4").prepend('<li><a href="#"><div class="f3-t-1-c1"><img src="/matouPCS/Public/Home/img/bdmc.png" /></div><div class="f3-t-1-c2"><p>'+data[i].forcename+'</p></div><div class="f3-t-1-c3l"><p>部队类型:'+data[i].type_bd+'</p></div><div class="f3-t-1-c3r"><p>粉丝数量100</p></div><div class="f3-t-1-c4"><p>'+data[i].content+'...</p></div><div class="f3-t-1-c5"><p>所在地：'+data[i].address+'</p></div><div class="clearfloat"></div></a></li>');
							 		
												 }
										}else{
											 //alert(22);
											 document.getElementById('btn4').innerHTML = '加载完毕';
							 				flag=true;	
										}	
							 },
							 	complete:function(){
							           $("#load").remove();
									},
								 	dataType:'json'
								 	});
							 	e++;
						// alert(p);
						  } 
	  </script>
					<div class="s-main-r">
					<div class="s-r-3f">
						<div>
							<a href="javascript://">
								<h2>热门部队</h2>
							</a>
							<div class="clear"></div>
						</div>
					</div>

					<div class="s-r-4f">
						<ul>
							<!-- 热门部队 -->
							
								<div class="s-r-4f">
						<ul>
						<?php if(is_array($listn)): foreach($listn as $key=>$listns): ?><li>
									<?php if($_SESSION['id'] == $listns['uid']){ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listns["uid"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($listns["uid"]); ?>">
									<?php } ?>
									<div class="tj">
										<div class="tj-img">
												<?php if($listns[logo]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
                                   <?php else: ?>
                                     <img style="border-radius:50%" width="101" height="101" src="/matouPCS/Tu/upload/<?php echo ($listns["logo"]); ?>"  /><?php endif; ?>
										</div>
										<div class="tj_01">
											<strong class="tj_01_01"><?php echo ($listns["forcename"]); ?></strong>
											<p class="tj_01_02">
												<span class="black-333">部队类型：</span> <?php echo ($listns["type"]); ?>
											</p>
											<p class="tj_01_02">
												<span class="black-333">粉丝数量：</span> <?php echo ($listns["fen"]); ?>
											</p>
											<p class="tj_01_02">
												<span class="black-333">所在地点：</span> <?php echo ($listns["address"]); ?>
											</p>
										</div>
										<div class="clear"></div>
										<div>
											<p class="tj_01_04">
												<span class="black-333">主营产品：</span>
												<span class="text36"><?php echo ($listns["content"]); ?></span>
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
		<br>
		<br>
		<br>
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
							<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<p><a href="http://www.miitbeian.gov.cn">豫ICP备16015506号</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

		<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
      <script src="/matouPCS/Public/Home/js/City_data.js"></script>
        <script src="/matouPCS/Public/Home/js/bddz.js"></script>
		<script type="text/javascript" src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>	
		<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".con").eq(0).show();
				$(".s-f2l-c1 ul li a").click(function() {
					var num = $(".s-f2l-c1 ul li a").index(this);
					$(".con").hide();
					$(".con").eq(num).show().slblings().hide();
				})
			});
			
		


		</script>
	</body>

</html>