<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>应赏填写</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/tx.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/input.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/calendar.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/zyzn_1.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/upimg.css" />
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
							<img src="/matouPCS/Public/Home/img/navbg2.png" />
							<div class="s-f2-r">
								<input placeholder="搜索全站" type="text" class="find3" />
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
					<p class="tfs22">WEDDING PIER</p>
					<h1 class="tfs22">喜事码头</h1>
					<p class="tfs14">简单<samp class="kog10"></samp>方便<samp class="kog10"></samp>效率</p>
					<div class="bdsz">
						<div class="bdsz-bt">
							填写应赏
						</div>
						<ul>
							<li id="tab-jbxx" class="selected-con">
								<a rel="nofollow" href="javascript://">
									<h2>基本信息</h2>
								</a>
							</li>
							<li id="tap">
								<a rel="nofollow" href="javascript://">
									<h2>照片作品</h2>
								</a>
							</li>
							<li id="tab-spzp">
								<a rel="nofollow" href="javascript://">
									<h2>视频作品</h2>
								</a>
							</li>
							<li id="tab-dq">
								<a rel="nofollow" href="javascript://">
									<h2>档<samp class="kog8"></samp>期</h2>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<form name="myform" enctype="multipart/form-data">
				<div class="s-main-l">
					<div id="jbxx" class="s-c-2f">
						<div class="s-c-8f-1f">
							<h2>基本信息</h2>
						</div>
						<div class="s-2f-c2">
							<ul class="tyint">
								<li>
									<div class="mname">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">姓<samp class="kog8"></samp>名</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input class="w200t" name="name" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="msex">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">性<samp class="kog8"></samp>别</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<div class="w36"><input checked="checked" name="sex" class="" value='1' type="radio" /> 男</div>
											<div class="w36"><input name="sex" class="" value='0' type="radio" /> 女</div>
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mage">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">年<samp class="kog8"></samp>龄</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w75t" name="age" type="number" />&nbsp;岁
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mheight">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">身<samp class="kog8"></samp>高</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w75t" name="height" type="text" />&nbsp;cm
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mweight">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">体<samp class="kog8"></samp>重</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<input class="w75t" name="weight" type="text" />&nbsp;kg
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
											<input style="cursor: pointer;" name="address" readonly="readonly" class="w75t" id="xz-city" type="text" value="" data-value="" onclick="appendCity(this,'danxuan')">
											<input class="w209" type="text" name="address_s" style="background-color:white;" placeholder="填写详细地址" />
										</div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div class="mprofession">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">职<samp class="kog8"></samp>业</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w95s" name="type" id="type" style="width:100px;" onchange="gradeChange()">
												<option value="0">-请选择-</option>
												<option>主持人</option>
												<option>摄影师</option>
												<option>摄像师</option>
												<option>化妆师</option>
												<option>策划师</option>
												<option>音响师</option>
												<option>灯光师</option>
												<option>花艺师</option>
												<option>场布师</option>
												<option>歌手</option>
												<option>舞者</option>
												<option>乐器演奏</option>
												<option>其他</option>
											</select>
											<span class="types1">
												<!-- <input class="w209" id="types1" type="text" name="type" placeholder="输入具体职业名称" /> -->
											</span>
										</div>
										<div class="cf"></div>
								</li>
								<script type="text/javascript">
									function gradeChange(){
									    var checkText=$("#type").find("option:selected").text();
									    if(checkText == '其他'){
									    	$('.types1').html('<input class="w209" type="text" name="type1" placeholder="填写职业名称" />');
									    }else{
									    	$('.types1').html('<input class="w209" type="hidden" name="type1" placeholder="填写职业名称" />');
									    }
									}
								</script>
								<li>
									<div class="memail">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">期望赏金</p>
											<p class="cf"></p>
										</div>
										<div class="litr">
											<select class="w200s" name="price" style="width:110px;">
												<option>请选择</option>
												<option>不限</option>
												<option>< 1000</option>
												<option>1000 - 1500</option>
												<option>1500 - 2000</option>
												<option>2000 - 2500</option>
												<option>2500 - 3000</option>
												<option>3000 - 5000</option>
												<option>> 5000</option>
											</select> k/天
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
										<div class="litr"><input class="w200t" name="tel" type="tel" /></div>
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
										<div class="litr"><input class="w200t" name="qq" type="text" /></div>
										<div class="cf"></div>
									</div>
								</li>
								<li class="jbxxli1">
									<div class="mzwjs">
										<div class="litl">
											<p class="litx">*</p>
											<p class="litc">自我介绍</p>
											<p class="cf"></p>
										</div>
										<div class="litrb"><textarea class="w340" name="content" type="text"></textarea></div>
										<div class="cf"></div>
									</div>
								</li>
								<li>
									<div>
										<div class="litl">
											<p class="litx"></p>
											<p class="litc">擅长婚礼类型</p>
											<p class="cf"></p>
										</div>
										<div class="litr"><input name="skilled" placeholder="比如中式婚礼 西式婚礼" class="w200tb" type="text" /></div>
										<span>用空格隔开</span>
										<div class="cf"></div>
									</div>
								</li>
							</ul>
							</div>
						</div>

						<div class="s-c-2f">
							<div id="ta" class="s-c-8f-1f">
								<h2>照片作品/</h2><span>最多上传12张照片</span>
								<span class="right" id="hfx3-1">									
									添加照片
									<div class="tjsp">
										<img src="/matouPCS/Public/Home/img/tj-sp.png" />
									</div>
								</span>
							</div>
							<div class="s-c-2f-2f-f" id="s-c-2f-2f-f">
								<div class="dianji">
									<div class="gth">
										<img src="/matouPCS/Public/Home/img/gth.png">
									</div>
									点击右上角"添加照片"完善作品
									<div class="clearfloat"></div>
								</div>
								<div class="img_div">
								</div>
								<a style="display: none;" href="javascript:;" class="a-upload">
									<input type="file" name="myFile" id="myFile" multiple />点击这里上传文件
								</a>
								<ul>
									<div class="clearfloat"></div>
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
							<div id="tb" class="s-c-8f-1f">
								<h2>视频作品/</h2><span>最多上传3个视频文件</span>
							</div>
							<div class="s-c-3f-2f-f">
								<ul>
									<li>
										<div class="na2">
											<div class="picture1">
												<img id="pic1" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload1" name="file1" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file1_title" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="file1_video" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-sp">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li>
										<div class="na2">
											<div class="picture2">
												<img id="pic2" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload2" name="file2" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file2_title" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text"  name="file2_video" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-sp">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<li style="margin: 0;">
										<div class="na2">
											<div class="picture3">
												<img id="pic3" src="/matouPCS/Public/Home/img/scsp.png">
												<input id="upload3" name="file3" accept="image/jpg,image/jpeg,image/png" type="file" style="display: none" />
											</div>
										</div>
										<div class="input-h">
											<div class="input-bt">
												<input type="text" name="file3_title" placeholder="请输入视频标题" />
											</div>
											<div class="input-dz">
												<input type="text" name="file3_video" placeholder="输入视频链接地址" />
											</div>
										</div>
										<div class="delete-sp">
											<img src="/matouPCS/Public/Home/img/delete-2.png" />
										</div>
									</li>
									<div class="clearfloat"></div>
								</ul>
							</div>
						</div>
						<div class="txfg1" id="tc">
							<div class="txfg1-c1-1">
								<span class="hfx2"></span>
								<div>
									<h2>档期/</h2>
									<samp class="addtitle">最多添加30个档期</samp>
								</div>
								<span class="hfx3" id="hfx3-3"><img src="/matouPCS/Public/Home/img/tj-sp.png" />添加档期</span>
							</div>
							<div class="txfg1-c2-1"><img src="/matouPCS/Public/Home/img/gth.png" /><span class="txfgts">点击右上角"添加档期"完善档期</span></div>
							<ul class="addmation-dq">
							</ul>
						</div>
						<div class="clearfloat "></div>

						<a href="javascript:void(0)" onclick="submit()" class="s-tf-btn">确认发布</a>
					</div>
					<div class="clearfloat "></div>
				</form>
		</section>
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
	<script src="/matouPCS/Public/Home/js/upimg.js"></script>
	<script src="/matouPCS/Public/Home/js/sjs.js"></script>
	<script src="/matouPCS/Public/Home/js/dz.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin.js"></script>
	<script src="/matouPCS/Public/Home/js/ys.js"></script>
	
</html>