<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/style-xlb.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/component.css" />
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
												<img src="/matouPCS/Public/Home/img/tx.png" />
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
		    $.ajax({  
				        type: "POST",  
				         url:"/matouPCS/index.php/Home/User/usave1",
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
		<script src="/matouPCS/Public/Home/js/index-alert-login.js"></script>
		<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101383226" data-redirecturi="http://www.xishimatou.com;" charset="utf-8"></script>
		<script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
	</body>
</html>
						<div class="h-c-3f">
							<div id="large-header" class="large-header">
								<div class="tbbj">
									<img src="/matouPCS/Public/Home/img/demo-2-bg.jpg" />
								</div>
								<canvas id="demo-canvas"></canvas>
							</div>
							<div class="s-f1">
								<div class="bjzl">
									<a href="?s=/Home/User">编辑个人资料</a>
								</div>
								<div class="yhtx">
										<?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="width: 120px; height: 120px;border-radius:50%" src="/MatouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  /><?php endif; ?>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
								</div>
							
							</div>
							<div class="s-f2">
								<p class="yhmc">
										<?php if($list[username]==$list[tel]): ?><a href=""><?php echo (substr($list["username"],0,6)); ?></a><?php endif; ?>
								<?php if($list[username]!=$list[tel]): ?><a href=""><?php echo ($list["username"]); ?></a><?php endif; ?>
								</p>
								<p class="center">
									（<?php echo ($list["type_u"]); ?>）
								</p>
								<div>
									<p class="fsl">
										<span class="icon-fs"></span> <?php echo ($list["fen"]); ?>
									</p>
									<p class="szd">
										<span class="szd-word"><?php echo ($list["addre"]); ?></span>
										<span class="icon-szd szd-top"></span>
									</p>
									<p class="clearfloat"></p>
								</div>
							</div>
							<div class="clearfloat"></div>
							<div class="s-f3">
								<button class="dn" disabled="disabled">关注</button>
							</div>
							<div class="s-f4">
								<div class="rzbd">
								<a rel="nofollow" style="width: 120px;" href="">基本信息</a>
									<a class="red" href="rzbddndt.php">动态</a>
									<a href="?s=/Home/Mtbu/rzbddnxq/id/<?php echo ($_GET['id']); ?>">需求</a>
									<a rel="nofollow" id="zp" href="">作品</a>
									<a style="width: 105px;" href="?s=/Home/Mtbu/rzbddnly/id/<?php echo ($_GET['id']); ?>">留言区</a>
								</div>
							</div>
						</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-c-1f">
					<div class="left-dt">
						<p>全部动态</p>
						<img src="/matouPCS/Public/Home/img/xxjt.png" />
						<div class="select-dt">
								<ul id="typee">
									<li>
									<a rel="nofollow" href="javascript://">全部动态</a>
								</li>
								<li>
									<a rel="nofollow" href="javascript://">活动动态</a>
								</li>
							</ul>
						</div>
					</div>
						  <script>
            var cNode =document.getElementById('typee').getElementsByTagName('li');
                    for( var i=0; i<cNode.length; i++){
                        cNode[i].index= i;
                        //用来计算点击次数
                        var type = 0;
                        cNode[i].onclick = function(){
                           type+=1; 
                            if(this.index == 0){
                                this.index = '全部动态';  
                            }else if(this.index == 1){
                                this.index = '活动动态';
                            }
                         
                            types = this.index;
                            if(types == '全部动态'){
                            	types = '1';
                            }else{
                            	types = '2';
                            }
                          if( paixu > 0){
                                
                                var where = types+paixus;
                            }else{
                                var where = types;
                            }
                        
                       
                        // $('#every').click();
                     // alert(where);
                        // // 这里才是最终的搜索条件
                       id=	<?php echo ($_GET['id']); ?>;
                       // alert(id);
                    ajax(where,id);  
                            
                        }
                    }
                </script>
					<div id="paixu" class="center">
						<p>排序：</p>
						<a class="selected" href="javascript://">热门</a>
						<a href="javascript://">最新</a>
					</div>
						<script>
                    var cNode =document.getElementById('paixu').getElementsByTagName('a');
                            for( var i=0; i<cNode.length; i++){
                                cNode[i].index= i;
                                //用来计算点击次数
                                var paixu = 0;
                                cNode[i].onclick = function(){
                                   paixu+=1; 
                                    if(this.index == 0){
                                        this.index = 'z';  
                                    }else if(this.index == 1){
                                        this.index = 'r';
                                    }
                                 paixus = this.index;
                                  
                                   if( type > 0){
                                       
                                       var where = types+paixus;
                                   }else{
                                       var where =paixus;
                                   }
                               
                                // $('#every').click();
                       //   alert(where);
                                // // 这里才是最终的搜索条件
                                id=	<?php echo ($_GET['id']); ?>; 
                             ajax(where,id);  
                                    
                                }
                            }
                        </script>
					<div class="right">
						<input type="text" placeholder="搜索全站" />
						<div class="ss-t">
							<button></button>
						</div>
					</div>
				</div>
				<div class="s-main-r">
					<div class="s-c-4f">
						<div class="s-c-4f-main">
							<div class="s-c-4f-1f">
								<div class="title">
									<h2>基 本 信 息</h2>
								</div>
								<div class="bj">
									<a href="">
										<img src="/matouPCS/Public/Home/img/bj-gray.png" />
									</a>
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-4f-2f">
								<div class="jbxx">
									<ul class="left">
										<li>部队名称：</li>
										<li>部队类型：</li>
										<li>详细地址：</li>
										<li>联系电话：</li>
										<li>QQ号：</li>
										<li style="height: 64px;">部队简介：</li>
										<li>官网链接：</li>
									</ul>
										<ul class="right">
										<li><?php echo ($list["forcename"]); ?></li>
										<li><?php echo ($list["type_bd"]); ?></li>
										<li>河南省郑州市</li>
										<li>
												<span class="tel"><?php echo (substr($list["tels"],0,3)); ?>XXXX<?php echo (substr($list["tels"],8,11)); ?></span>
											<button id="btnConfirm">查看</button><input type="hidden" id="xp" value="<?php echo ($list["tels"]); ?>">
										</li>
										<li><?php echo ($list["qqs"]); ?></li>
										<li class="bdjj">
										<?php echo ($list["content"]); ?>
										</li>
										<li><?php echo ($list["lianjie"]); ?></li>
									</ul>
									<ul class="clearfloat"></ul>
								</div>
							</div>
							<div class="s-c-4f-3f">
								<div class="title">
									<h2>作 品</h2>
								</div>
								<div class="bj">
									<a href="">
										<img src="/matouPCS/Public/Home/img/bj-gray.png" />
									</a>
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-4f-4f">
								<div class="zp">
									<a class="selected" href="javascript://">照片作品</a>
									<a href="javascript://">视频作品</a>
									<!--<a class="clearfloat"></a>-->
								</div>
							</div>
							<div class="con">
								<div class="s-c-4f-5f">
									<div class="filter">
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
										<a rel="gallery2" class="boxer" href="/matouPCS/Public/Home/img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" alt="" />
										</a>
									</div>
									<div class="page">共12张（点击查看）</div>
								</div>
							</div>
							<div class="con" style="display: none;">
								<div class="s-c-4f-6f">
									<div class="mkeFocus">
										<div class="mkeUl">
											<ul>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small01.png" width="264" height="264" alt="" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small02.png" width="264" height="264" alt="" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small03.png" width="264" height="264" alt="" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small04.png" width="264" height="264" alt="" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
											</ul>
											<div class="mkeNum"><span class="mke_ns1">1</span>/<span class="mke_ns2">1</span></div>
											<div class="mkeLbtn"></div>
											<div class="mkeRbtn"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="s-c-1f">
						<div class="s-c-1f-3f">
							<div class="top">
								<div class="lyq">
									<h2>留 言 区</h2>
								</div>
								<div class="textarea">
									<textarea id="contents"></textarea>
								</div>
								<div class="fbly">
										<button onclick="liuyan(<?php echo ($_GET['id']); ?>)">发布留言</button>
								</div>
							</div>
								<script type="text/javascript">
								function liuyan(id){
									var p=id;
									var t = "<?php echo session('id');?>";
									var contents = $('#contents').val();
									if(contents.replace(/\s+/g, "")){
										$.ajax({
											url:"?s=/Home/Mtbu/rzbddydt_liuyan",
											type:"post",
											data:{id:p,content:contents},
											dataType:"json",
											success:function(data){
										
												var li = '';
												for (var i = 0; i < data.length; i++) {
													 var myArray=new Array()
													 var str=data[i].zid;  
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
													if(aa==1){
														var dianzan='<span id="z'+data[i].id+'"  class="icon-dz-kz"></span>';
													}else{
														var dianzan='<span id="z'+data[i].id+'"  class="icon-dz"></span>';
													}
													if(data[i].username==data[i].tel){
														var use = data[i].username.substr(0,5);
														}else{
													     var use = data[i].username;
														}
													if(t==data[i].uid){
														if(data[i].bdlx==1){
															var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data[i].uid+'">';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data[i].uid+'">';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data[i].uid+'">';	
														}
													}else{
														if(data[i].bdlx==1){
															var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data[i].uid+'">';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data[i].uid+'">';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data[i].uid+'">';	
														}
													}
													
													if(data[i].imagename==null){
														var img='<img src="/matouPCS/Public/Home/img/tx2-3r.png" alt="" />';
													}else{
												     var img = '<img  width="80" height="80" src="/MatouPCS/Tu/upload/'+data[i].imagename+'" /> ';
													}
													
													
													li+='<li><div class="left-tx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><div class="right-xx"><p class="tt"><span class="left">用户'+use+'</span><span class="right">'+data[i].addre+'</span></p><p class="grjj">'+data[i].content+' </p><div class="bottom"><p class="sj">'+data[i].time+'</p><p class="dz dz-qx"><p onclick="zan('+data[i].id+','+data[i].zan+')" class="dz dz-qx">'+dianzan+'</span><span  id="s'+data[i].id+'">'+data[i].zan+'</span></p></p></div></div><div class="clearfloat"></div></li>';
												
												};
												$('#li').html(li);
												$('#contents').val('');
											},error:function(){
												alert('no');
											}
										});
									}else{
										alert('请填写留言内容在提交');
									}
								}
							</script>
							<ul id="li">
									<?php if(is_array($li)): foreach($li as $key=>$lis): ?><li>
									<div class="left-tx">
										<?php if($_SESSION['id'] == $lis['uid']){ ?>
									  <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($lis["uid"]); ?>">	
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($lis["uid"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($lis["uid"]); ?>"><?php endif; ?>
									<?php }else{ ?>
                                   <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($lis["uid"]); ?>">
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($lis["uid"]); ?>">
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($lis["uid"]); ?>"><?php endif; ?>
                              <?php } ?>
                              		 <?php if($lis[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" alt="" />
                                   <?php else: ?>
                                     <img width="80" height="80" src="/MatouPCS/Tu/upload/<?php echo ($lis["imagename"]); ?>"  /><?php endif; ?>
									
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" />
										</div>
									</div>
									<div class="right-xx">
										<p class="tt">
											<span class="left">
													<?php if($lis[username]==$lis[tel]): echo (substr($lis["username"],0,5)); endif; ?>
								               <?php if($lis[username]!=$lis[tel]): echo ($lis["username"]); endif; ?>
											</span>
											<span class="right"><?php echo ($lis["addre"]); ?></span>
										</p>
										<p class="grjj">
												<?php echo ($lis["content"]); ?>
											</p>
											<div class="bottom">
												<p class="sj"><?php echo ($lis["time"]); ?></p>
											<p class="dz dz-qx"><p onclick="zan(<?php echo ($lis["id"]); ?>,<?php echo ($lis["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$lis['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($lis["id"]); ?>" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($lis["id"]); ?>" class="icon-dz"></span>
													<?php } ?>
													<span id="s<?php echo ($lis["id"]); ?>"><?php echo ($lis["zan"]); ?></span></p> 
										</div>
									</div>
									<div class="clearfloat"></div>
								</li><?php endforeach; endif; ?>
							</ul>
							<p class="ckgd">
							<a href="?s=/Home/Mtbu/rzbddyly/id/<?php echo ($_GET['id']); ?>">查看更多 》</a>
							</p>
						</div>
					</div>

				</div>
					<script type="text/javascript">
									var a = 0;
									function zan(lid,zan){
										var zan = parseInt(document.getElementById('s'+lid).innerHTML);
										if($('#z'+lid).hasClass('icon-dz')){
											zan += 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_liu_zan/lid/"+lid+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('点赞成功');
													$('#z'+lid).removeClass('icon-dz');
													$('#z'+lid).addClass('icon-dz-kz');
													$('#s'+lid).html(zan);
												},error:function(){
													alert('no');
												}
											});
											
										}else{
											zan -= 1;
											$.ajax({
												url:"?s=/Home/Mtbu/rzbd_liu_zan/lid/"+lid+"/zan/"+zan,
												type:"get",
												success:function(data){
													alert('取消成功');
													$('#z'+lid).removeClass('icon-dz-kz');
													$('#z'+lid).addClass('icon-dz');
													$('#s'+lid).html(zan);
												},error:function(){
													alert('no');
												}
											});
											
										}
									}
								</script>
				<div id="re" class="s-main-l">
					<div id="conn" class="s-c-3f">
						<div class="s-c-3f-1f">
							<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="mdhd">
								<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>
							<div class="yhtx">
								<a href="">
									<img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<p class="yhmc">
							<?php if($v[username]==$v[tel]): echo (substr($v["username"],0,5)); endif; ?>
							<?php if($v[username]!=$v[tel]): echo ($v["username"]); endif; ?>
							</p>
						  <p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
							<p class="dtnr">
							<?php echo ($v["content"]); ?>
								</p>
							<ul>
										<?php if(is_array($img)): foreach($img as $key=>$vd): if($v[did]==$vd[pid]): ?><li>
									<a rel="gallery1" class="boxer" href="/matouPC/Uploads/<?php echo ($vd["imagename"]); ?>">
										<div class="pic">
											<img src="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>" />
										</div>
									</a>
								</li><?php endif; endforeach; endif; ?>
								<div class="clear"></div>
							</ul>
							<div class="bottom">
						   <p class="left"><?php echo ($v["time"]); ?></p>
								<div class="right dz-qx">
												<p onclick="zan1(<?php echo ($v["did"]); ?>,<?php echo ($v["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$v['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz"></span>
													<?php } ?>
													<span style="font-size: 17px;" id="s<?php echo ($v["did"]); ?>"><?php echo ($v["zan"]); ?></span></p> 
								</div>
								<p class="clearfloat"></p>
							</div>
							<div class="clearfloat"></div><?php endforeach; endif; ?>
						</div>
					</div>
					<div class="s-main-b">
						<div class="margin">
							<button onclick="tj(<?php echo ($v["uid"]); ?>)" name='btn' id='btn' >点击加载更多</button>
						</div>
					</div>
				</div>
				<div class="clearfloat"></div>
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
															
									
				</script>
					<script type="text/javascript">
var p=2;
  function tj(id){

	  var t = "<?php echo session('id');?>";
	 // alert(id);
		$.ajax({
			type:'post',
			url:"<?php echo U('Mtbu/dnjzdt');?>",
			data:{k:p,id,id},
			beforeSend:function(){
	         $("#conn").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
	//	alert(data);
			
					if(data!=null){		
						var zan='';
						 for (var i = 0; i < data['nr'].length; i++) {
							 var myArray=new Array()
							 var str=data['nr'][i].zid;  
							 myArray = str.split(","); 
						
				
							 var c = ","; // 要计算的字符
							 var regex = new RegExp(c, 'g'); // 使用g表示整个字符串都要匹配
							 var result = str.match(regex);
							 var count = !result ? 0 : result.length;
							 for(var j=0;j<count;j++){
								 if(myArray[j]==t){
									 var aa=1;
		
								 }
							 }
							if(aa==1){
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
							}else{
								var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
							}
	                            var p='';
							 if(data['nr'][i].username==data['nr'][i].tel){
							
									var use = data['nr'][i].username.substr(0,5);
									}else{
								     var use = data['nr'][i].username;
									}
							 for (var j= 0; j < data['tu'].length; j++) {
								 if(data['nr'][i].did==data['tu'][j].pid){
									p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
								 }
							 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		//	alert(li);
						$("#conn").append(li);
	 		
						 }
				}else{
					// alert(22);
					 document.getElementById('btn').innerHTML = '加载完毕';
	 				flag=true;	
				}	
	 },
	 	complete:function(){
	           $("#load").remove();
			},
		 	dataType:'json'
		 	});
	 	p++;
	//  alert(p);
  }


  
	function ajax(where,id){
	//var id=	 $_GET['id'];
		 var t = "<?php echo session('id');?>";
			$.ajax({
				url:"?s=/Home/Mtbu/spbddndtre",
				type:"post",
				data:{id:id,where:where},
				dataType:"json",
				success:function(data){
					
					var pl='';
					 for (var i = 0; i < data['nr'].length; i++) {
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
						if(aa==1){
							var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
						}else{
							var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
						}
                       var p='';
                       if(data['nr'][i].username==data['nr'][i].tel){
							var use = data['nr'][i].username.substr(0,5);
							}else{
						     var use = data['nr'][i].username;
							}
                  	 for (var j= 0; j < data['tu'].length; j++) {
						 if(data['nr'][i].did==data['tu'][j].pid){
							p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
						 }
					 }
                  	 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+' </p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
                    	
						
					};
					var pl ='<div id="ha" class="s-c-3f ">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj'+where+'(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
					$('#re').html(pl);
					$('#re').val('');
				},error:function(){
					alert('no');
				}
			});
		
	}
	var l=2;

	  function tj1(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:l,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
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
			 	l++;
		// alert(p);
		  }  
	  var z=2;
	  function tj2(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthd');?>",
					data:{k:z,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	z++;
		// alert(p);
		  }  
	  var x=2;
	  function tjz(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:x,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	x++;
		// alert(p);
		  }  
	  var c=2;
	  function tjr(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdtre');?>",
					data:{k:c,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	c++;
		// alert(p);
		  }  
	  var v=2;
	  function  tj1r(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdtre');?>",
					data:{k:v,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	v++;
		// alert(p);
		  }  
	  var b=2;
	  function tj1z(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:b,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
							if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	b++;
		// alert(p);
		  }  
	  var n=2;
	  function tj2r(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthdr');?>",
					data:{k:n,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
							if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	n++;
		// alert(p);
		  }  
	  var m=2;
	  function tj2z(id){		 
		  var t = "<?php echo session('id');?>";
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthd');?>",
					data:{k:m,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						if(data!=null){				
							
							 for (var i = 0; i < data['nr'].length; i++) {
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
								if(aa==1){
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz-kz"></span>';
								}else{
									var dianzan='<span id="z'+data['nr'][i].did+'" style="font-size:17px;" class="icon-dz"></span>';
								}
		                            var p='';
								 if(data['nr'][i].username==data['nr'][i].tel){
										var use = data['nr'][i].username.substr(0,5);
										}else{
									     var use = data['nr'][i].username;
										}
								 for (var j= 0; j < data['tu'].length; j++) {
									 if(data['nr'][i].did==data['tu'][j].pid){
										p+='<li><a rel="gallery1" class="boxer" href="/matouPC/Uploads/'+data['tu'][j].imagename+'"><div class="pic"><img src="/matouPCS/Uploads/'+data['tu'][j].imagename+'" /></div></a></li>';
									 }
								 }
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"> <p onclick="zan1('+data['nr'][i].did+','+data['nr'][i].zan+')" class="dz dz-qx">'+dianzan+'</span><span style="font-size: 17px;" id="s'+data['nr'][i].did+'">'+data['nr'][i].zan+'</span></p></div><p class="clearfloat"></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
							$("#ha").append(li);
		 		
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
			 	m++;
		// alert(p);
		  }  

  
</script>
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.fs.boxer.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
	<script src="/matouPCS/Public/Home/js/rAF.js"></script>
	<script src="/matouPCS/Public/Home/js/demo-2.js"></script>

</html>