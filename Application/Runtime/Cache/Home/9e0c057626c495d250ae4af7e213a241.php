<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/rzbddyxq-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/style.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/DialogBySHF.css" />
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
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($sp['id']); ?>">管理商铺</a>
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
						<!--<img src="img/navbg3.png" />-->
						<!--<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="img/ss-t.png" />
							</div>
						</div>-->
						<div class="s-f1">
							<div class="yhtx">
								<img src="/matouPCS/Public/Home/img/yhmc.png">
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
						</div>
						<div class="s-f2">
							<p class="yhmc">
								<?php if($user[username]==$user[tel]): ?><a href=""><?php echo (substr($user["username"],0,6)); ?></a><?php endif; ?>
								<?php if($user[username]!=$user[tel]): ?><a href=""><?php echo ($user["username"]); ?></a><?php endif; ?>
							</p>
							<p style="text-align: center;">
								（<?php echo ($user["type"]); ?>）
							</p>
							<div>
								<p class="fsl">
								<span style="font-size: 24px; display: block; float: left; margin-top: -2px;" class="icon-fs"></span>
								<span id="gfen" style="display: block; float: left;"><?php echo ($user["fen"]); ?></span>
							</p>
							<p class="szd">
								<span style="font-size: 18px;" class="icon-szd"></span>
								<span style="display: block; float: right; line-height: 20px;"><?php echo ($user["addre"]); ?></span>
							</p>
							<p class="clearfloat"></p>
							</div>
						</div>
						<div class="clearfloat"></div>
						<div class="s-f3">
							<?php if(is_array($uus)): foreach($uus as $key=>$uuss): if($uuss['uid'] == $user['uid']){ ?>
									<?php  $uu = explode(',',$uuss['fid']); array_pop($uu); if(in_array($_SESSION['id'],$uu)){ ?>
										<button id="gz-qx" onclick="guanzhu(<?php echo ($user['uid']); ?>)">已关注</button>
									<?php }else{ ?>
										<?php if(empty($_SESSION['id'])){ ?>
											<button id="gz-qx" onclick="alert('请先登录')">关注</button>
										<?php }else{ ?>
											<button id="gz-qx" onclick="guanzhu(<?php echo ($user['uid']); ?>)">关注</button>
										<?php } ?>
									<?php } ?>
								<?php } endforeach; endif; ?>
						</div>
						<div class="s-f4">
							<div>
								<a style="width: 120px;" href="">基本信息</a>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($_GET['id']); ?>">动态</a>
								<a style="color: #FF5C5D;" href="#">需求</a>
								<a id="zp" href="">作品</a>
								<a style="width: 105px;" href="?s=/Home/Mtbu/rzbddyly/id/<?php echo ($_GET['id']); ?>">留言区</a>
							</div>
						</div>
					</div>
					<!--<div class="h-c-3f">
						<img src="img/navbg4.png" />
						<a href="#"><div class="h-f3-c1">BTN</div></a>
						<div class="h-f3-c2"><a href="#">进入跳骚市场</a></div>
					</div>-->
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-c-1f">
					<div class="left">
						<!--<div class="left-dt">
							<p>全部动态</p>
							<img src="img/xxjt.png" />
							<div class="select-dt">
								<ul>
									<li style="padding-top: 5px;">
										<a href="javascript://">全部动态</a>
									</li>
									<li>
										<a href="javascript://">活动动态</a>
									</li>
								</ul>
							</div>
						</div>-->
						<div class="left-xq">
							<p>全部需求</p>
							<img src="/matouPCS/Public/Home/img/xxjt.png" />
							<div class="select-xq">
								<ul id="typee">
									<li style="padding-top: 5px;">
										<a href="javascript://">悬赏需求</a>
									</li>
									<li>
										<a href="javascript://">应赏需求</a>
									</li>
									<li>
										<a href="javascript://">招聘需求</a>
									</li>
									<li>
										<a href="javascript://">应聘需求</a>
									</li>
									<li>
										<a href="javascript://">求购二手</a>
									</li>
									<li>
										<a href="javascript://">处理闲置</a>
									</li>
								</ul>
							</div>
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
                                this.index = '悬赏需求';  
                            }else if(this.index == 1){
                                this.index = '应赏需求';
                            }else if(this.index == 2){
                                this.index = '招聘需求';
                            }else if(this.index == 3){
                                this.index = '应聘需求';
                            }else if(this.index == 4){
                                this.index = '求购二手';
                            }else if(this.index == 5){
                                this.index = '处理闲置';
                            }
                         
                            types = this.index;
                            if(types == '悬赏需求'){
                            	types = '1';
                            }else if(types == '应赏需求'){
                            	types = '2';
                            }else if(types == '招聘需求'){
                            	types = '3';
                            }else if(types == '应聘需求'){
                            	types = '4';
                            }else if(types == '求购二手'){
                            	types = '5';
                            }else{
                            	types = '6';
                            }
                          if( paixu > 0){
                                
                                var where = types+paixus;
                            }else{
                                var where = types;
                            }
                        
                       
                        // $('#every').click();
                    //alert(where);
                        // // 这里才是最终的搜索条件
                       id=	<?php echo ($_GET['id']); ?>;
                       // alert(id);
                 ajax(where,id);  
                            
                        }
                    }
                </script>
					<div id="paixu" class="center">
						<p>排序：</p>
						<a class="selected" href="javascript://">最新</a>
						<a href="javascript://">热门</a>
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
                          // alert(where);
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
					<div class="s-c-3f">
						<div class="s-c-3f-main">
							<div class="s-c-3f-1f">
								<div class="title">
									基 本 信 息
								</div>
								<!--<div class="bj">
									<img src="img/bj-gray.png" />
								</div>-->
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-3f-2f">
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
										<li><?php echo ($user["forcename"]); ?></li>
										<li><?php echo ($user["type"]); ?></li>
										<li><?php echo ($user["address"]); ?></li>
										<li>
											<span class="tel"><?php echo (substr($user["tels"],0,3)); ?>XXXX<?php echo (substr($user["tels"],8,11)); ?></span>
											<button id="btnConfirm">查看</button>
											<input type="hidden" id="xp" value="<?php echo ($user["tels"]); ?>">
										</li>
										<li><?php echo ($user["qqs"]); ?></li>
										<li class="bdjj">
											<?php echo ($user["content"]); ?>
										</li>
										<li><?php echo ($user["lianjie"]); ?></li>
									</ul>
									<ul class="clearfloat"></ul>
								</div>
							</div>
							<div class="s-c-3f-3f">
								<div class="title">
									作 品
								</div>
								<!--<div class="bj">
									<img src="img/bj.png" />
								</div>-->
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-3f-4f">
								<div class="zp">
									<a class="selected" href="javacript://">照片作品</a>
									<a href="javacript://">视频作品</a>
									<!--<a class="clearfloat"></a>-->
								</div>
							</div>
							<div class="con">
								<div class="s-c-3f-5f">
									<div class="filter">
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; top: 0; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
									</div>
									<div class="page">共12张（点击查看）</div>
								</div>
							</div>
							<div class="con" style="display: none;">
								<div class="s-c-3f-6f">
									<div class="mkeFocus">
										<div class="mkeUl">
											<ul>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small01.png" width="264" height="264" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small02.png" width="264" height="264" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small03.png" width="264" height="264" />
														<span>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</span>
													</a>
												</li>
												<li>
													<a href="" target="_blank">
														<img src="/matouPCS/Public/Home/img/banner_small04.png" width="264" height="264" />
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
						<!--<div class="s-c-1f-1f">
							<div class="left">
								<img src="img/tx2-3r.png" />
								<div class="vip">
									<img src="img/rzlogo.png" />
								</div>
							</div>
							<div class="right">
								<p class="yhmc">用户名称</p>
								<p class="fssl">粉丝数量</p>
								<p>所在地：郑州</p>
								<button>编辑</button>
							</div>
						</div>-->
						<!--<div class="s-c-1f-2f">
							<div class="left"></div>
							<div class="right">
								关注量：111111
							</div>
						</div>-->
						<div class="s-c-1f-3f">
							<div class="top">
								<div class="lyq">
									<button>留 言 区</button>
								</div>
								<div class="textarea">
									<textarea id="content"></textarea>
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
											url:"?s=/Home/Mtbu/spbddyly_liuyan",
											type:"post",
											data:{id:p,contents:contents},
											dataType:"json",
											success:function(data){
											//	alert(2);
												var li = '';
												for (var i = 0; i < data.length; i++) {
													if(data[i].username==data[i].tel){
													var use = data[i].username.substr(0,5);
													}else{
												     var use = data[i].username;
													}
													if(t==data[i].uid){
														if(data[i].bdlx==1){
															var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';	
														}
													}else{
														if(data[i].bdlx==1){
															var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>';	
														}
													}
													
													
													li+='<li><div class="left">'+url+'<div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><div class="right"><p class="tt"><span style="float: left;"><a href="">用户'+use+'</a></span><span style="float: right; text-align: right;">'+data[i].addre+'</span></p><p class="grjj">'+data[i].contents+'</p><div class="bottom"><p class="sj">'+data[i].stime+'</p><p class="dz dz-qx"><span class="icon-dz"></span>1000</p></div></div><div class="clearfloat"></div></li>';
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
										<div class="left">
												<?php if($_SESSION['id'] == $lis['uid']){ ?>
									  <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($lis["uid"]); ?>">	<img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a><?php endif; ?>
									<?php }else{ ?>
                                   <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a><?php endif; ?>
                              <?php } ?>
											<div class="vip">
												<img src="/matouPCS/Public/Home/img/rzlogo.png" />
											</div>
										</div>
										<div class="right">
											<p class="tt">
												<span style="float: left;">
															<?php if($lis[username]==$lis[tel]): echo (substr($lis["username"],0,5)); endif; ?>
								               <?php if($lis[username]!=$lis[tel]): echo ($lis["username"]); endif; ?>	
												</span>
												<span style="float: right; text-align: right;"><?php echo ($lis["addre"]); ?></span>
											</p>
											<p class="grjj">
												<?php echo ($lis["content"]); ?>
											</p>
											<div class="bottom">
												<p class="sj"><?php echo ($lis["time"]); ?></p>
												<p onclick="zan(<?php echo ($lis["lid"]); ?>,<?php echo ($lis["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$lis['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($lis["lid"]); ?>" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($lis["lid"]); ?>" class="icon-dz"></span>
													<?php } ?>
													<span id="s<?php echo ($lis["lid"]); ?>"><?php echo ($lis["zan"]); ?></span></p> 
											</div>
										</div>
										<div class="clearfloat"></div>
									</li><?php endforeach; endif; ?>
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
							</ul>
							<p class="ckgd">
								<a href="?s=/Home/Mtbu/rzbddyly/id/<?php echo ($_GET['id']); ?>">查看更多 》</a>
							</p>
							<!--<button onclick="window.location='bdzxgz-3r-xy.html'">查看更多</button>-->
						</div>
						<!--<div class="s-c-1f-4f">
							<div class="left"></div>
							<div class="right">
								粉丝量：111111
							</div>
						</div>-->
						<!--<div class="s-c-1f-3f">
							<ul>
								<li>
									<div class="left">
										<img src="img/tx2-3r.png" />
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">用户名称</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
								</li>
								<li>
									<div class="left">
										<img src="img/tx2-3r.png" />
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">用户名称</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
								</li>
								<li>
									<div class="left">
										<img src="img/tx2-3r.png" />
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">用户名称</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
								</li>
								<li>
									<div class="left">
										<img src="img/tx2-3r.png" />
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">用户名称</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
								</li>
								<li>
									<div class="left">
										<img src="img/tx2-3r.png" />
									</div>
									<div class="right">
										<p class="tt">
											<span style="float: left;">用户名称</span>
											<span style="float: right; text-align: right;">郑州</span>
										</p>
										<p class="grjj">
											个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介个人简介
										</p>
									</div>
								</li>
							</ul>
							<button onclick="window.location = 'bdzxfs-3r-xy.html'">查看更多</button>
						</div>-->
					</div>

				</div>
				<div id="ul" class="s-main-l">
					<div class="s-c-2f">
							<ul>
							<!-- 悬赏 -->
							<?php if(is_array($jbxs)): foreach($jbxs as $key=>$jbxss): ?><li>
									<a href="?s=/Home/xsdt/xqxs/id/<?php echo ($jbxss['psid']); ?>">
									<h style="color:#FF5C5D;">悬赏</h>
										<p style="color: #000000;">
											<span>活动时间：</span>
											<span class="hdsj"><?php echo ($jbxss["date"]); ?></span>
											<span>活动地点：</span>
											<span class="hddd"><?php echo ($jbxss["address"]); ?></span>
										</p>
										<?php if(is_array($jbxsData)): foreach($jbxsData as $key=>$jbxsDatas): if($jbxss['psid'] == $jbxsDatas['pid']){ ?>
												<p>
													<span class="sys"><?php echo ($jbxsDatas["type"]); ?></span>
													<span class="sex"><?php echo ($jbxsDatas["sex"]); ?></span>
													<span class="age"><?php echo ($jbxsDatas["age"]); ?></span>
													<span>岗位要求：</span>
													<span class="gwyq"><?php echo ($jbxsDatas["yaoqiu"]); ?></span>
													<span class="price"><?php echo ($jbxsDatas["price"]); ?>元/天</span>
													<span class="bmrs">10人报名</span>
												</p>
											<?php } endforeach; endif; ?>
										<p>
											<span class="sc">已有<?php echo ($jbxss["collect"]); ?>人收藏</span>
											<span class="fb"><?php echo ($jbxss["date"]); ?></span>
										</p>
									</a>
								</li><?php endforeach; endif; ?>
							<!-- 应赏 -->
							<?php if(is_array($jbys)): foreach($jbys as $key=>$jbyss): ?><li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($jbyss['did']); ?>">
									<h style="color:#FF5C5D;">应赏</h>
										<p>
											<span class="name"><?php echo ($jbyss["name"]); ?></span>
											<span class="age"><?php echo ($jbyss["age"]); ?></span>
											<!--<span>工作经验：</span>
											<span class="gzjy">1-2年</span>-->
											<span>个人简介：</span>
											<span style="width: 450px;" class="grjj"><?php echo ($jbyss["content"]); ?></span>
											<span class="zw"><?php echo ($jbyss["price"]); ?>元/天</span>
											<span class="clearfloat"></span>
										</p>
										<p>
											<span>职位：</span>
											<span class="drzw"><?php echo ($jbyss["type"]); ?></span>
											<span>照片作品：</span>
											<span style="width: auto;" class="gzsj">5个</span>
											<span>视频作品：</span>
											<span style="width: auto;" class="szgs">2个</span>
											<span>档期：</span>
											<span style="width: auto;" class="szgs">中午 上午 晚上</span>
											<span class="clearfloat"></span>
										</p>
										<p>
											<span class="sc">已有<?php echo ($jbyss["collect"]); ?>人收藏</span>
											<span class="fb"><?php echo ($jbyss["date"]); ?></span>
											<span class="clearfloat"></span>
										</p>
									</a>
								</li><?php endforeach; endif; ?>
							<!-- 招聘 -->
							<?php if(is_array($jbzp)): foreach($jbzp as $key=>$jbzps): ?><li>
									<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($jbzps['rid']); ?>">
									<h style="color:#FF5C5D;">招聘</h>
										<p style="color: #000000;">
											<span>工作地点：</span>
											<span class="hddd"><?php echo ($jbzps["address"]); ?></span>
										</p>
										<?php if(is_array($jbzpData)): foreach($jbzpData as $key=>$jbzpDatas): if($jbzps['rid'] == $jbzpDatas['pid']){ ?>
												<p>
													<span class="sys"><?php echo ($jbzpDatas["type"]); ?></span>
													<span class="sex"><?php echo ($jbzpDatas["sex"]); ?></span>
													<span class="age"><?php echo ($jbzpDatas["age"]); ?>岁</span>
													<span>岗位要求：</span>
													<span class="gwyq"><?php echo ($jbzpDatas["content"]); ?></span>
													<span class="price"><?php echo ($jbzpDatas["price"]); ?>元/天</span>
													<span class="bmrs"><?php echo ($jbzpDatas["collect"]); ?>人报名</span>
													<span class="clearfloat"></span>
												</p>
											<?php } endforeach; endif; ?>
										<p>
											<span class="sc">已有<?php echo ($jbzps["collect"]); ?>人收藏</span>
											<span class="fb"><?php echo ($jbzps["date"]); ?></span>
											<span class="clearfloat"></span>
										</p>
									</a>
								</li><?php endforeach; endif; ?>	
							<?php if(is_array($jbyp)): foreach($jbyp as $key=>$jbyps): ?><li>
									<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($jbyps['id']); ?>">
									<h style="color:#FF5C5D;">应聘</h>
										<p>
											<span class="name"><?php echo ($jbyps["name"]); ?></span>
											<span class="age"><?php echo ($jbyps["ages"]); ?></span>
											<span>工作经验：</span>
											<span class="gzjy"><?php echo ($jbyps["worktimes"]); ?>年</span>
											<span>个人简介：</span>
											<span class="grjj"><?php echo ($jbyps["content"]); ?></span>
											<span class="zw"><?php echo ($jbyps["type"]); ?></span>
											<span class="clearfloat"></span>
										</p>
										<p>
											<span>工作时间：</span>
											<span class="gzsj"><?php echo ($jbyps["worktime"]); ?></span>
											<span>所在公司：</span>
											<span class="szgs"><?php echo ($jbyps["workname"]); ?></span>
											<span>职位：</span>
											<span class="drzw"><?php echo ($jbyps["typew"]); ?></span>
											<span class="clearfloat"></span>
										</p>
										<p>
											<span class="sc">已有<?php echo ($jbyps["collect"]); ?>人收藏</span>
											<span class="fb"><?php echo ($jbyps["date"]); ?></span>
											<span class="clearfloat"></span>
										</p>
									</a>
								</li><?php endforeach; endif; ?>
							<!-- 求购 -->
							<?php if(is_array($jbqg)): foreach($jbqg as $key=>$jbqgs): ?><li>
									<a href="?s=/Home/Tzsc/xqqg/id/<?php echo ($jbqgs['fid']); ?>">
									<h style="color:#FF5C5D;">求购</h>
										<!--<div class="yhtx">
											<img src="img/yhmc-big.png" />
										</div>-->
										<div style="width: 100%;" class="word">
											<div>
												<p class="mc">求购物品：<?php echo ($jbqgs["name"]); ?></p>
												<p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥<?php echo ($jbqgs["price"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<p>
												<span class="word-jtyq" style="width: 100%;">
													<strong style="font-weight: 500; color: #333;">具体要求：</strong>
													<?php echo ($jbqgs["content"]); ?>
													<!--<strong class="clearfloat"></strong>-->
												</span>
												<span class="clearfloat"></span>
											</p>
											<p class="word-bottom" style="width: 100%;">
												<span class="sc">已有<?php echo ($jbqgs["collect"]); ?>人收藏</span>
												<span class="fb"><?php echo ($jbqgs["date"]); ?></span>
												<span class="clearfloat"></span>
											</p>
										</div>
										<div class="clearfloat"></div>
									</a>
								</li><?php endforeach; endif; ?>
							<?php if(is_array($jbxz)): foreach($jbxz as $key=>$jbxzs): ?><li>
									<h style="color:#FF5C5D;">闲置</h>
								<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($jbxzs['fid']); ?>">
										<div class="yhtx">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
										<div class="word">
											<div>
												<p class="mc">闲置名称：<?php echo ($jbxzs["name"]); ?></p>
												<p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥<?php echo ($jbxzs["price"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<p>
												<span class="word-jtyq">
													<strong style="font-weight: 500; color: #333;">具体要求：</strong>
													<?php echo ($jbxzs["content"]); ?>
												</span>
											</p>
											<p style="top:5px;" class="word-bottom">
												<span class="sc">已有<?php echo ($jbxzs["collect"]); ?>人收藏</span>
												<span class="fb"><?php echo ($jbxzs["date"]); ?></span>
												<span class="clearfloat"></span>
											</p>
										</div>
										<div class="clearfloat"></div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>
					<div class="s-main-b">
					
					</div>
				</div>
				<div class="clearfloat"></div>
			</div>
<script type="text/javascript">
function ajax(where,id){

	//alert(where);
var xqz='z';
var xqr='r';
		if(where=='z'||where=='r'){
			$.ajax({
				url:"?s=/Home/Mtbu/rzbdxqre",
				type:"post",
				data:{id:id,where:where},
				dataType:"json",
				success:function(data){
				//	alert(data);
                    var xxoo='';
						for (var i = 0; i < data['xji'].length; i++) {
							var li = '';
                            var p='';
							li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['xji'][i].psid+'"><h style="color:#FF5C5D;">悬赏</h><p style="color: #000000;"><span>活动时间：</span><span class="hdsj">'+data['xji'][i].time+'</span><span>活动地点：</span><span class="hddd">'+data['xji'][i].address+'</span></p>';
							
						
								for (var j = 0; j < data['xben'].length; j++) {
								//	alert(id);
									if(data['xji'][i].psid==data['xben'][j].pid){
									p+='<p><span class="sys">'+data['xben'][j].type+'</span><span class="sex">'+data['xben'][j].sex+'</span><span class="age">'+data['xben'][j].age+'</span><span>岗位要求：</span><span class="gwyq">'+data['xben'][j].yaoqiu+'</span><span class="price">'+data['xben'][j].price+'元/天</span><span class="bmrs">10人报名</span></p>';
									}
									
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['xji'][i].collect+'人收藏</span><span class="fb">'+data['xji'][i].date+'</span></p></a></li>';	
						};
					//	var p1='<div class="s-c-3f"><ul id="shiyan">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj(<?php echo ($_GET['id']); ?>)" name="btn" id="btn">点击加载更多</button></div></div>'
						
						
						var lq = '';

						for (var i = 0; i < data['shang'].length; i++) {
						
							lq+='<li><a href="/matouPCS/?s=/Home/Ysq/xqys/id/'+data['shang'][i].did+'"><h style="color:#FF5C5D;">应赏</h><p><span class="name">'+data['shang'][i].name+'</span><span class="age">'+data['shang'][i].age+'</span><!--<span>工作经验：</span><span class="gzjy">1-2年</span>--><span>个人简介：</span><span style="width: 450px;" class="grjj">'+data['shang'][i].content+'</span><span class="zw">'+data['shang'][i].price+'元/天</span><span class="clearfloat"></span></p><p><span>职位：</span><span class="drzw">'+data['shang'][i].type+'</span><span>照片作品：</span><span style="width: auto;" class="gzsj">5个</span><span>视频作品：</span><span style="width: auto;" class="szgs">2个</span><span>档期：</span><span style="width: auto;" class="szgs">中午 上午 晚上</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data['shang'][i].collect+'人收藏</span><span class="fb">'+data['shang'][i].date+'</span><span class="clearfloat"></span></p></a></li>';
						};
					//	var pq='<div class="s-c-3f"><ul id="ys">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button  onclick="tj1(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1">点击加载更多</button></div></div>'		
						
						
						
					      var xxww='';
						for (var i = 0; i < data['wji'].length; i++) {
							var lw= '';
                               var pw='';
							lw+='<li><a href="/matouPCS/?s=/Home/Zpdt1/xqzp/id/'+data['wji'][i].rid+'"><h style="color:#FF5C5D;">招聘</h><p style="color: #000000;"><span>工作地点：</span><span class="hddd">'+data['wji'][i].address+'</span></p>';
							
						
								for (var j = 0; j < data['wben'].length; j++) {
								//	alert(id);
									if(data['wji'][i].rid==data['wben'][j].pid){
									pw+='<p><span class="sys">'+data['wben'][j].type+'</span><span class="sex">'+data['wben'][j].sex+'</span><span class="age">'+data['wben'][j].age+'岁</span><span>岗位要求：</span><span class="gwyq">'+data['wben'][j].content+'</span><span class="price">'+data['wben'][j].price+'元/天</span><span class="bmrs">10人报名</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxww+=lw+pw+'<p><span class="sc">已有'+data['wji'][i].collect+'人收藏</span><span class="fb">'+data['wji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
					//	var p1='<div class="s-c-3f"><ul id="zp">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2(<?php echo ($_GET['id']); ?>)" name="btn2" id="btn2">点击加载更多</button></div></div>'
						
						
						
						var le = '';

						for (var i = 0; i < data['pin'].length; i++) {
						
							le+='<li><a href=""><h style="color:#FF5C5D;">应聘</h><p><span class="name">'+data['pin'][i].name+'</span><span class="age">'+data['pin'][i].ages+'</span><span>工作经验：</span><span class="gzjy">'+data['pin'][i].worktimes+'年</span><span>个人简介：</span><span class="grjj">'+data['pin'][i].content+'</span><span class="zw">'+data['pin'][i].type+'</span><span class="clearfloat"></span></p><p><span>工作时间：</span><span class="gzsj">'+data['pin'][i].worktime+'</span><span>所在公司：</span><span class="szgs">'+data['pin'][i].workname+'</span><span>职位：</span><span class="drzw">'+data['pin'][i].typew+'</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data['pin'][i].collect+'人收藏</span><span class="fb">'+data['pin'][i].date+'</span><span class="clearfloat"></span></p></a></li>';
						};
						//var p='<div class="s-c-3f"><ul id="yp">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj3(<?php echo ($_GET['id']); ?>)" name="btn3" id="btn3">点击加载更多</button></div></div>		
						
						
						var lr = '';

						for (var i = 0; i < data['qiu'].length; i++) {
						
							lr+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqqg/id/'+data['qiu'][i].fid+'"><h style="color:#FF5C5D;">求购</h><!--<div class="yhtx"><img src="img/yhmc-big.png" /></div>--><div style="width: 100%;" class="word"><div><p class="mc">求购物品：'+data['qiu'][i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥'+data['qiu'][i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq" style="width: 100%;"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data['qiu'][i].content+' <!--<strong class="clearfloat"></strong>--></span><span class="clearfloat"></span></p><p class="word-bottom" style="width: 100%;"><span class="sc">已有'+data['qiu'][i].collect+'人收藏</span><span class="fb">'+data['qiu'][i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
						};
					//	var p='<div class="s-c-3f"><ul id="qg">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj4(<?php echo ($_GET['id']); ?>)" name="btn4" id="btn4">点击加载更多</button></div></div>'	
						
						
						var lt = '';

						for (var i = 0; i < data['xian'].length; i++) {
						
							lt+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><h style="color:#FF5C5D;">闲置</h><div class="yhtx"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data['xian'][i].content+' </span></p><p style="top:5px;" class="word-bottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
						};
						var py='<div class="s-c-2f"><ul id="xz">'+xxoo+lq+xxww+le+lr+lt+'</ul></div><div class="s-main-b"></div>'
						
						
						$('#ul').html(py);
						$('#content').val('');
				},error:function(){
					alert('no');
				}
			});
		
	}else if(where==1||where=='1z'){
		//alert(xqz);
	
			$.ajax({
				url:"?s=/Home/Mtbu/rzxuanshang",
				type:"post",
				data:{id:id,rz:xqz},
				dataType:"json",
				success:function(data){
					//alert(data);
                   var xxoo='';
					for (var i = 0; i < data['ji'].length; i++) {
						var li = '';
                           var p='';
						li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><p style="color: #000000;"><span>活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span>活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
						
					
							for (var j = 0; j < data['ben'].length; j++) {
							//	alert(id);
								if(data['ji'][i].psid==data['ben'][j].pid){
								p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span></p>';
								}
								
						}
							xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
					};
					var p1='<div class="s-c-2f"><ul id="shiyan">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj(<?php echo ($_GET['id']); ?>,1)" name="btnn" id="btnn">点击加载更多</button></div></div>'
					$('#ul').html(p1);
					$('#content').val('');
				},error:function(){
					alert('no');
				}
			});
		
	}else if(where==2||where=='2z'){
			//alert(1);								
				$.ajax({
					url:"?s=/Home/Mtbu/rzyingshang",
					type:"post",
					data:{id:id,rz:xqz},
					dataType:"json",
					success:function(data){
						var li = '';
						
						for (var i = 0; i < data.length; i++) {
							console.log(data[i].did);
							li+='<li><a href="/matouPCS/?s=/Home/Ysq/xqys/id/'+data[i].did+'"><p>应赏 <span class="name">'+data[i].name+'</span><span class="age">'+data[i].age+'</span><!--<span>工作经验：</span><span class="gzjy">1-2年</span>--><span>个人简介：</span><span style="width: 450px;" class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].price+'元/天</span><span class="clearfloat"></span></p><p><span>职位：</span><span class="drzw">'+data[i].type+'</span><span>照片作品：</span><span style="width: auto;" class="gzsj">5个</span><span>视频作品：</span><span style="width: auto;" class="szgs">2个</span><span>档期：</span><span style="width: auto;" class="szgs">中午 上午 晚上</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
						};
						var p='<div class="s-c-2f"><ul id="ys">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button  onclick="tj1(<?php echo ($_GET['id']); ?>,1)" name="btn1" id="btn1">点击加载更多</button></div></div>'
						
						console.log(p);
						$('#ul').html(p);
						$('#content').val('');
					},error:function(){
						alert('no');
					}
				});
			
		}else if(where==3||where=='3z'){
		//	alert(id);
		
				$.ajax({
					url:"?s=/Home/Mtbu/rzzhaopin",
					type:"post",
					data:{id:id,rz:xqz},
					dataType:"json",
					success:function(data){
						
				
                     var xxoo='';
						for (var i = 0; i < data['ji'].length; i++) {
							var li = '';
                             var p='';
							li+='<li><a href="/matouPCS/?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><p style="color: #000000;"><span>工作地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
							
						
								for (var j = 0; j < data['ben'].length; j++) {
								//	alert(id);
									if(data['ji'][i].rid==data['ben'][j].pid){
									p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
						var p1='<div class="s-c-2f"><ul id="zp1">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2(<?php echo ($_GET['id']); ?>,1)" name="btnt" id="btnt">点击加载更多</button></div></div>'
						$('#ul').html(p1);
						$('#content').val('');
					},error:function(){
						alert('no');
					}
				});
			
		}else if(where==4||where=='4z'){
			//	alert(1);
			
					$.ajax({
						url:"?s=/Home/Mtbu/rzyingpin",
						type:"post",
						data:{id:id,rz:xqz},
						dataType:"json",
						success:function(data){
						//	alert(2);
							var li = '';

							for (var i = 0; i < data.length; i++) {
							
								li+='<li><a href="/matouPCS/?s=/Home/Zpdt/xqyp/id/'+data[i].id+'"><p><span class="name">'+data[i].name+'</span><span class="age">'+data[i].ages+'</span><span>工作经验：</span><span class="gzjy">'+data[i].worktimes+'年</span><span>个人简介：</span><span class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].type+'</span><span class="clearfloat"></span></p><p><span>工作时间：</span><span class="gzsj">'+data[i].worktime+'</span><span>所在公司：</span><span class="szgs">'+data[i].workname+'</span><span>职位：</span><span class="drzw">'+data[i].typew+'</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
							};
							var p='<div class="s-c-2f"><ul id="yp">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj3(<?php echo ($_GET['id']); ?>,1)" name="btn3" id="btn3">点击加载更多</button></div></div>'
							$('#ul').html(p);
							$('#content').val('');
						},error:function(){
							alert('no');
						}
					});
				
			}else if(where==5||where=='5z'){
								//	alert(1);
								
										$.ajax({
											url:"?s=/Home/Mtbu/rzqiugou",
											type:"post",
											data:{id:id,rz:xqz},
											dataType:"json",
											success:function(data){
												//alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
												
													li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><!--<div class="yhtx"><img src="img/yhmc-big.png" /></div>--><div style="width: 100%;" class="word"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq" style="width: 100%;"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' <!--<strong class="clearfloat"></strong>--></span><span class="clearfloat"></span></p><p class="word-bottom" style="width: 100%;"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
												};
												var p='<div class="s-c-2f"><ul id="qg">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj4(<?php echo ($_GET['id']); ?>,1)" name="btn4" id="btn4">点击加载更多</button></div></div>'
												$('#ul').html(p);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where==6||where=='6z'){
								//	alert(1);
								
										$.ajax({
											url:"?s=/Home/Mtbu/rzxianzhi",
											type:"post",
											data:{id:id,rz:xqz},
											dataType:"json",
											success:function(data){
												//alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
												
													li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqxz/id/'+data[i].fid+'"><div class="yhtx"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div><div class="word"><div><p class="mc">闲置名称：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' </span></p><p style="top:5px;" class="word-bottom"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
												};
												var p='<div class="s-c-2f"><ul id="xz">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj5(<?php echo ($_GET['id']); ?>,1)" name="btn5" id="btn5">点击加载更多</button></div></div>'
												$('#ul').html(p);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where=='1r'){
								//	alert(id);
									
									$.ajax({
										url:"?s=/Home/Mtbu/rzxuanshang",
										type:"post",
										data:{id:id,rz:xqr},
										dataType:"json",
										success:function(data){

						                   var xxoo='';
											for (var i = 0; i < data['ji'].length; i++) {
												var li = '';
						                           var p='';
												li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><p style="color: #000000;"><span>活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span>活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
												
											
													for (var j = 0; j < data['ben'].length; j++) {
													//	alert(id);
														if(data['ji'][i].psid==data['ben'][j].pid){
														p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span></p>';
														}
														
												}
													xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
											};
											var p1='<div class="s-c-2f"><ul id="shiyan">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tjc(<?php echo ($_GET['id']); ?>,2)" name="btn" id="btn">点击加载更多</button></div></div>'
											$('#ul').html(p1);
											$('#content').val('');
										},error:function(){
											alert('no');
										}
									});
								
							}else if(where=='2r'){
								//	alert(1);								
										$.ajax({
											url:"?s=/Home/Mtbu/rzyingshang",
											type:"post",
											data:{id:id,rz:xqr},
											dataType:"json",
											success:function(data){
											//	alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
												
													li+='<li><a href="/matouPCS/?s=/Home/Ysq/xqys/id/'+data[i].did+'"><p>应赏 <span class="name">'+data[i].name+'</span><span class="age">'+data[i].age+'</span><!--<span>工作经验：</span><span class="gzjy">1-2年</span>--><span>个人简介：</span><span style="width: 450px;" class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].price+'元/天</span><span class="clearfloat"></span></p><p><span>职位：</span><span class="drzw">'+data[i].type+'</span><span>照片作品：</span><span style="width: auto;" class="gzsj">5个</span><span>视频作品：</span><span style="width: auto;" class="szgs">2个</span><span>档期：</span><span style="width: auto;" class="szgs">中午 上午 晚上</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
												};
												var p='<div class="s-c-2f"><ul id="ys">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button  onclick="tj1c(<?php echo ($_GET['id']); ?>,2)" name="btn1" id="btn1">点击加载更多</button></div></div>'
												$('#ul').html(p);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where=='3r'){
								//	alert(id);
								
										$.ajax({
											url:"?s=/Home/Mtbu/rzzhaopin",
											type:"post",
											data:{id:id,rz:xqr},
											dataType:"json",
											success:function(data){
												
										
						                     var xxoo='';
												for (var i = 0; i < data['ji'].length; i++) {
													var li = '';
						                             var p='';
													li+='<li><a href="/matouPCS/?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><p style="color: #000000;"><span>工作地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
													
												
														for (var j = 0; j < data['ben'].length; j++) {
														//	alert(id);
															if(data['ji'][i].rid==data['ben'][j].pid){
															p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span><span class="clearfloat"></span></p>';
															}
														
													}
														xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
												};
												var p1='<div class="s-c-2f"><ul id="zp2">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2c(<?php echo ($_GET['id']); ?>,2)" name="btn2" id="btn2">点击加载更多</button></div></div>'
												$('#ul').html(p1);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where=='4r'){
									//	alert(1);
									
											$.ajax({
												url:"?s=/Home/Mtbu/rzyingpin",
												type:"post",
												data:{id:id,rz:xqr},
												dataType:"json",
												success:function(data){
												//	alert(2);
													var li = '';

													for (var i = 0; i < data.length; i++) {
													
														li+='<li><a href="/matouPCS/?s=/Home/Zpdt/xqyp/id/'+data[i].id+'"><p><span class="name">'+data[i].name+'</span><span class="age">'+data[i].ages+'</span><span>工作经验：</span><span class="gzjy">'+data[i].worktimes+'年</span><span>个人简介：</span><span class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].type+'</span><span class="clearfloat"></span></p><p><span>工作时间：</span><span class="gzsj">'+data[i].worktime+'</span><span>所在公司：</span><span class="szgs">'+data[i].workname+'</span><span>职位：</span><span class="drzw">'+data[i].typew+'</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
													};
													var p='<div class="s-c-2f"><ul id="yp">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj3c(<?php echo ($_GET['id']); ?>,2)" name="btn3" id="btn3">点击加载更多</button></div></div>'
													$('#ul').html(p);
													$('#content').val('');
												},error:function(){
													alert('no');
												}
											});
										
									}else if(where=='5r'){
														//	alert(1);
														
																$.ajax({
																	url:"?s=/Home/Mtbu/rzqiugou",
																	type:"post",
																	data:{id:id,rz:xqr},
																	dataType:"json",
																	success:function(data){
																		//alert(2);
																		var li = '';

																		for (var i = 0; i < data.length; i++) {
																		
																			li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><!--<div class="yhtx"><img src="img/yhmc-big.png" /></div>--><div style="width: 100%;" class="word"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq" style="width: 100%;"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' <!--<strong class="clearfloat"></strong>--></span><span class="clearfloat"></span></p><p class="word-bottom" style="width: 100%;"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
																		};
																		var p='<div class="s-c-2f"><ul id="qg">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj4c(<?php echo ($_GET['id']); ?>,2)" name="btn4" id="btn4">点击加载更多</button></div></div>'
																		$('#ul').html(p);
																		$('#content').val('');
																	},error:function(){
																		alert('no');
																	}
																});
															
														}else if(where=='6r'){
														//	alert(1);
													
																$.ajax({
																	url:"?s=/Home/Mtbu/rzxianzhi",
																	type:"post",
																	data:{id:id,rz:xqr},
																	dataType:"json",
																	success:function(data){
																		//alert(2);
																		var li = '';

																		for (var i = 0; i < data.length; i++) {
																		
																			li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqxz/id/'+data[i].fid+'"><div class="yhtx"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div><div class="word"><div><p class="mc">闲置名称：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' </span></p><p style="top:5px;" class="word-bottom"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
																		};
																		var p='<div class="s-c-2f"><ul id="xz">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj5c(<?php echo ($_GET['id']); ?>,2)" name="btn5" id="btn5">点击加载更多</button></div></div>'
																		$('#ul').html(p);
																		$('#content').val('');
																	},error:function(){
																		alert('no');
																	}
																});
															
														}

	
}
							</script>

<script type="text/javascript">
var p=2;

  function tj(id,where){ 
	//alert(id);

		$.ajax({
			type:'post',
			url:"<?php echo U('Mtbu/rzxuanshangjz');?>",
			data:{k:p,id:id,where:where},
			beforeSend:function(){
	         $("#shiyan").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
				//alert(data['ji']);
				if(data!=null){				
					//	alert(data);
					       var xxoo='';
							for (var i = 0; i < data['ji'].length; i++) {
								var li = '';
                                  var p='';
								li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><p style="color: #000000;"><span>活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span>活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
								if(data['ben']!=null){
								for (var j = 0; j < data['ben'].length; j++) {
									//	alert(id);
										if(data['ji'][i].psid==data['ben'][j].pid){
										p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span></p>';
										}
								}
								}
									xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
							};
						$("#shiyan").append(xxoo);
			
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
	 	p++;
// alert(p);
  }
  var pm=2;
  function tj1(id,where){
		 
		 
		//alert(where);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzyingshangjz');?>",
				data:{k:pm,id:id,where:where},
				beforeSend:function(){
		         $("#ys").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
						//	alert(data);
						  var li = '';
						for (var i = 0; i < data.length; i++) {
												
								li+='<li><a href="/matouPCS/?s=/Home/Ysq/xqys/id/'+data[i].did+'"><p>应赏 <span class="name">'+data[i].name+'</span><span class="age">'+data[i].age+'</span><!--<span>工作经验：</span><span class="gzjy">1-2年</span>--><span>个人简介：</span><span style="width: 450px;" class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].price+'元/天</span><span class="clearfloat"></span></p><p><span>职位：</span><span class="drzw">'+data[i].type+'</span><span>照片作品：</span><span style="width: auto;" class="gzsj">5个</span><span>视频作品：</span><span style="width: auto;" class="szgs">2个</span><span>档期：</span><span style="width: auto;" class="szgs">中午 上午 晚上</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
							};
							$("#ys").append(li);
				
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
		 	pm++;
	// alert(p);
	  }
  var pn=2;
  function tj2(id,where){
	 
		//alert(id);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzzhaopinjz');?>",
				data:{k:pn,id:id,where:where},
				beforeSend:function(){
		         $("#zp1").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				

                        var xxoo='';
							for (var i = 0; i < data['ji'].length; i++) {
								var li = '';
                                var p='';
								li+='<li><a href="/matouPCS/?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><p style="color: #000000;"><span>工作地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
								
							
									for (var j = 0; j < data['ben'].length; j++) {
									//	alert(id);
										if(data['ji'][i].rid==data['ben'][j].pid){
										p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span><span class="clearfloat"></span></p>';
										}
									
								}
									xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
								};
							$("#zp1").append(xxoo);
				
					}else{
					//alert(22);
						 document.getElementById('btnt').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	pn++;
	// alert(p);
	  }
  var pb=2;
  function tj3(id,where){

	//	alert(id);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzyingpinjz');?>",
				data:{k:pb,id:id,where:where},
				beforeSend:function(){
		         $("#yp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
						//	alert(data);
						var li = '';

								for (var i = 0; i < data.length; i++) {
												
									li+='<li><a href="/matouPCS/?s=/Home/Zpdt/xqyp/id/'+data[i].id+'"><p><span class="name">'+data[i].name+'</span><span class="age">'+data[i].ages+'</span><span>工作经验：</span><span class="gzjy">'+data[i].worktimes+'年</span><span>个人简介：</span><span class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].type+'</span><span class="clearfloat"></span></p><p><span>工作时间：</span><span class="gzsj">'+data[i].worktime+'</span><span>所在公司：</span><span class="szgs">'+data[i].workname+'</span><span>职位：</span><span class="drzw">'+data[i].typew+'</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
									};
									$("#yp").append(li);
				
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
		 	pb++;
	// alert(p);
	  } 
  var pv=2;
  function tj4(id,where){

		//	alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/rzqiugoujz');?>",
					data:{k:pv,id:id,where:where},
					beforeSend:function(){
			         $("#qg").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data['ji']);
						if(data!=null){				
							//	alert(data);
							var li = '';

							for (var i = 0; i < data.length; i++) {
								
								li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><!--<div class="yhtx"><img src="img/yhmc-big.png" /></div>--><div style="width: 100%;" class="word"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq" style="width: 100%;"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' <!--<strong class="clearfloat"></strong>--></span><span class="clearfloat"></span></p><p class="word-bottom" style="width: 100%;"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
							};
										$("#qg").append(li);
					
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
			 	pv++;
		// alert(p);
		  } 
  var pc=2;
  function tj5(id,where){

		//	alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/rzxianzhijz');?>",
					data:{k:pc,id:id,where:where},
					beforeSend:function(){
			         $("#xz").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data['ji']);
						if(data!=null){				
							//	alert(data);
							var li = '';

							for (var i = 0; i < data.length; i++) {
								
								li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqxz/id/'+data[i].fid+'"><div class="yhtx"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div><div class="word"><div><p class="mc">闲置名称：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' </span></p><p style="top:5px;" class="word-bottom"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
							};
										$("#xz").append(li);
					
						}else{
							 //alert(22);
							 document.getElementById('btn5').innerHTML = '加载完毕';
			 				flag=true;	
						}	
			 },
			 	complete:function(){
			           $("#load").remove();
					},
				 	dataType:'json'
				 	});
			 	pc++;
		// alert(p);
		  } 
  var pj=2;

  function tjc(id,where){ 
	//alert(id);

		$.ajax({
			type:'post',
			url:"<?php echo U('Mtbu/rzxuanshangjz');?>",
			data:{k:pj,id:id,where:where},
			beforeSend:function(){
	         $("#shiyan").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
				//alert(data['ji']);
				if(data!=null){				
					//	alert(data);
					       var xxoo='';
							for (var i = 0; i < data['ji'].length; i++) {
								var li = '';
                                  var p='';
								li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><p style="color: #000000;"><span>活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span>活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
								if(data['ben']!=null){
								for (var j = 0; j < data['ben'].length; j++) {
									//	alert(id);
										if(data['ji'][i].psid==data['ben'][j].pid){
										p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span></p>';
										}
								}
								}
									xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
							};
						$("#shiyan").append(xxoo);
			
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
	 	pj++;
// alert(p);
  }
  var pmc=2;
  function tj1c(id,where){
		 
		 
	//	alert(where);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzyingshangjz');?>",
				data:{k:pmc,id:id,where:where},
				beforeSend:function(){
		         $("#ys").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
						//	alert(data);
						  var li = '';
						for (var i = 0; i < data.length; i++) {
												
								li+='<li><a href="/matouPCS/?s=/Home/Ysq/xqys/id/'+data[i].did+'"><p>应赏 <span class="name">'+data[i].name+'</span><span class="age">'+data[i].age+'</span><!--<span>工作经验：</span><span class="gzjy">1-2年</span>--><span>个人简介：</span><span style="width: 450px;" class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].price+'元/天</span><span class="clearfloat"></span></p><p><span>职位：</span><span class="drzw">'+data[i].type+'</span><span>照片作品：</span><span style="width: auto;" class="gzsj">5个</span><span>视频作品：</span><span style="width: auto;" class="szgs">2个</span><span>档期：</span><span style="width: auto;" class="szgs">中午 上午 晚上</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
							};
							$("#ys").append(li);
				
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
		 	pmc++;
	// alert(p);
	  }
  var pnc=2;
  function tj2c(id,where){
	 
	//	alert(888);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzzhaopinjz');?>",
				data:{k:pnc,id:id,where:where},
				beforeSend:function(){
		         $("#zp2").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
				//alert(data);
					if(data!=null){				

                        var xxoo='';
							for (var i = 0; i < data['ji'].length; i++) {
								var li = '';
                                var p='';
								li+='<li><a href="/matouPCS/?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><p style="color: #000000;"><span>工作地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
								
							
									for (var j = 0; j < data['ben'].length; j++) {
									//	alert(id);
										if(data['ji'][i].rid==data['ben'][j].pid){
										p+='<p><span class="sys">'+data['ben'][j].type+'</span><span class="sex">'+data['ben'][j].sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span>岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">10人报名</span><span class="clearfloat"></span></p>';
										}
									
								}
									xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
								};
							$("#zp2").append(xxoo);
				
					}else{
						 //alert(22);
						 document.getElementById('btn2').innerHTML = '加载完毕';
		 				flag=true;	
					}	
		 },
		 	complete:function(){
		           $("#load").remove();
				},
			 	dataType:'json'
			 	});
		 	pnc++;
	// alert(p);
	  }
  var pbc=2;
  function tj3c(id,where){

	//	alert(id);
			$.ajax({
				type:'post',
				url:"<?php echo U('Mtbu/rzyingpinjz');?>",
				data:{k:pbc,id:id,where:where},
				beforeSend:function(){
		         $("#yp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
						//	alert(data);
						var li = '';

								for (var i = 0; i < data.length; i++) {
												
									li+='<li><a href="/matouPCS/?s=/Home/Zpdt/xqyp/id/'+data[i].id+'"><p><span class="name">'+data[i].name+'</span><span class="age">'+data[i].ages+'</span><span>工作经验：</span><span class="gzjy">'+data[i].worktimes+'年</span><span>个人简介：</span><span class="grjj">'+data[i].content+'</span><span class="zw">'+data[i].type+'</span><span class="clearfloat"></span></p><p><span>工作时间：</span><span class="gzsj">'+data[i].worktime+'</span><span>所在公司：</span><span class="szgs">'+data[i].workname+'</span><span>职位：</span><span class="drzw">'+data[i].typew+'</span><span class="clearfloat"></span></p><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></a></li>';
									};
									$("#yp").append(li);
				
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
		 	pbc++;
	// alert(p);
	  } 
  var pvc=2;
  function tj4c(id,where){

		//	alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/rzqiugoujz');?>",
					data:{k:pvc,id:id,where:where},
					beforeSend:function(){
			         $("#qg").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data['ji']);
						if(data!=null){				
							//	alert(data);
							var li = '';

							for (var i = 0; i < data.length; i++) {
								
								li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><!--<div class="yhtx"><img src="img/yhmc-big.png" /></div>--><div style="width: 100%;" class="word"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq" style="width: 100%;"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' <!--<strong class="clearfloat"></strong>--></span><span class="clearfloat"></span></p><p class="word-bottom" style="width: 100%;"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
							};
										$("#qg").append(li);
					
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
			 	pvc++;
		// alert(p);
		  } 
  var pcc=2;
  function tj5c(id,where){

		//	alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/rzxianzhijz');?>",
					data:{k:pcc,id:id,where:where},
					beforeSend:function(){
			         $("#xz").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data['ji']);
						if(data!=null){				
							//	alert(data);
							var li = '';

							for (var i = 0; i < data.length; i++) {
								
								li+='<li><a href="/matouPCS/?s=/Home/Tzsc/xqxz/id/'+data[i].fid+'"><div class="yhtx"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div><div class="word"><div><p class="mc">闲置名称：'+data[i].name+'</p><p class="jg"><strong style="font-weight: 500; color: #000;">价格：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><p><span class="word-jtyq"><strong style="font-weight: 500; color: #333;">具体要求：</strong> '+data[i].content+' </span></p><p style="top:5px;" class="word-bottom"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></div><div class="clearfloat"></div></a></li>';
							};
										$("#xz").append(li);
					
						}else{
							 //alert(22);
							 document.getElementById('btn5').innerHTML = '加载完毕';
			 				flag=true;	
						}	
			 },
			 	complete:function(){
			           $("#load").remove();
					},
				 	dataType:'json'
				 	});
			 	pcc++;
		// alert(p);
		  } 
</script>
		</section>
		<br>
		<br>
		<br>
		<footer>
			<div class="f-main-c">
				<!--<div class="f-c-1f">
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
							<img style="margin-left: 45px;" src="img/erweima_bottom.png" />
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
				</div>-->
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
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/js/DialogBySHF.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.fs.boxer.js"></script>
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
		//----------------------------remove tab切换样式--------------------------
		$('.s-main-c-1f .center a').click(function() {
			$(this).parents('.s-main-c-1f').children('.center').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		$('.s-c-3f-4f .zp a').click(function() {
			$(this).parents('.s-c-3f-4f').children('.zp').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		//		关注/取消
		// $('#gz-qx').click(function() {
			function guanzhu(fid){
				var fen = parseInt(document.getElementById('gfen').innerHTML);
				if($('#gz-qx').html() == '关注') {
					fen += 1;
					$.ajax({
						url:"?s=/Home/Index/guanzhu/id/"+fid,
						type:"get",
						success:function(data){
							$('#gfen').html(fen);
							$('#gz-qx').html('已关注');
							$('#gz-qx').css('background-color','#FF5C5D');
							$('#gz-qx').hover(function(){
								$('#gz-qx').css('background-color','#FF5C5D');
							})
						},error:function(){
							alert('no');
						}
					});
					;
				} else {
					fen -= 1;
					$.ajax({
						url:"?s=/Home/Index/qguan/id/"+fid,
						type:"get",
						success:function(data){
							$('#gfen').html(fen);
							$('#gz-qx').html('关注');
							$('#gz-qx').css('background-color','transparent');
							$('#gz-qx').hover(function(){
								$('#gz-qx').css('background-color','#FF5C5D');
							},function(){
								$('#gz-qx').css('background-color','transparent');
							}
							);
						},error:function(){
							alert('no');
						}
					});
					
				}
			}
		// });
		//--------------------------全部动态下拉----------------------------------
		$('.s-main-c-1f .left-dt').hover(function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color', '#FF5C5D');
			$('.select-dt').stop().animate({
				height: '150px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color', '#999999');
			$('.select-dt').stop().animate({
				height: '0px'
			}, 300);
		});

		$('.s-main-c-1f .left-dt ul li a').click(function() {
			$('.left-dt p').html($(this).html());
			$('.select-dt').stop().animate({
				height: '0px'
			}, 300);
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
		});

		//--------------------------全部需求下拉----------------------------------
		$('.s-main-c-1f .left-xq').hover(function() {
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-xq ul').css('background-color', '#FF5C5D');
			$('.select-xq').stop().animate({
				height: '200px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-xq ul').css('background-color', '#999999');
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
		});

		$('.s-main-c-1f .left-xq ul li a').click(function() {
			$('.left-xq p').html($(this).html());
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
		});
		
		//----------------------------图片放大--------------------------
		$(function() {
			$('.boxer').boxer({
				labels: {
					close: "关闭",
					count: "/",
					next: "下一个",
					previous: "上一个"
				}
			});
		});
		//----------------------------作品切换--------------------------
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".s-c-3f-4f .zp a").click(function() {
				var num = $(".s-c-3f-4f .zp a").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			})
		});
		
		//----------------------------作品轮播--------------------------
		var rnum = $(".mkeUl ul li").size();
		var cnum = 0;
		$(".mke_ns2").html(rnum);
		$(".mkeUl ul").width(rnum * 264);
		$(".mkeRbtn").click(function() {
			cnum++;
			if(cnum > (rnum - 1)) {
				cnum = 0
			}
			$(".mkeUl ul").animate({
				"left": -cnum * 264
			}, 300);
			$(".mke_ns1").html(cnum + 1);
		});
		$(".mkeLbtn").click(function() {
			cnum--;
			if(cnum < 0) {
				cnum = rnum - 1;
			}
			$(".mkeUl ul").animate({
				"left": -cnum * 264
			}, 300);
			$(".mke_ns1").html(cnum + 1);
		});
		$('.mkeFocus').hover(function(){
			$('.mkeLbtn').css('background-image','url(img/kelBtn.png)');
			$('.mkeRbtn').css('background-image','url(img/kerBtn.png)');
		},function(){
			$('.mkeLbtn').css('background-image','url(img/kelBtn1.png)');
			$('.mkeRbtn').css('background-image','url(img/kerBtn1.png)');
		});
		function autoPlay() {
			cnum++;
			if(cnum > (rnum - 1)) {
				cnum = 0
			}
			$(".mkeUl ul").animate({
				"left": -cnum * 264
			}, 300);
			$(".mke_ns1").html(cnum + 1);
		}
		var Timer = setInterval(autoPlay, 4000);
		$(".mkeFocus").hover(function() {
			clearInterval(Timer)
		}, function() {
			Timer = setInterval(autoPlay, 4000);
		});
		//----------------------------点赞--------------------------
		// $('.dz-qx span').click(function(){
		// 	if($(this).hasClass('icon-dz')){
		// 		$(this).removeClass('icon-dz');
		// 		$(this).addClass('icon-dz-kz');
		// 	}else{
		// 		$(this).removeClass('icon-dz-kz');
		// 		$(this).addClass('icon-dz');
		// 	}
		// });
		//----------------------------查看码头币--------------------------
		$(document).ready(function () {
        $("#btnConfirm").click(function () {
            $.DialogBySHF.Confirm({ Width: 350, Height: 200, Title: "提示信息", Content: '查看号码需要2个码头币', ConfirmFun: test});
        })
    })
    function test() {
        if(1>0){
        	$.DialogBySHF.Alert({ Width: 350, Height: 200, Title: "成功", Content: '号码准备就绪，你可以联系Ta了' });
        	var xp = $('#xp').val();
        	$('.tel').html(xp);
        }else{
        	$.DialogBySHF.Alert({ Width: 350, Height: 200, Title: "失败", Content: '余额不足' });
        }
    }
    function testCancel() {
    	if(1>0){
    		$.DialogBySHF.Alert({ Width: 350, Height: 200, Title: "", Content: '取消后执行的方法' });	
    	}
    	$.DialogBySHF.Alert({ Width: 350, Height: 200, Title: "", Content: '取消后执行的方法' });	
    }
	</script>

</html>