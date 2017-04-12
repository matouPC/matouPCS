<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
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
							   <a href="#">商铺主页</a>
							   <?php } ?>
                                
										</li>
										<li>
									<?php if($sp['status']==1){?>
								<a href="?s=/Home/Tjcs/spcjcg">管理商铺</a>
								<?php }else if($sp['status']==2){ ?>
								<a href="?s=/Home/Mtbu/spgl">管理商铺</a>
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
								<div class="yhtx">
								<?php if($dt[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="width: 120px; height: 120px;border-radius:50%" src="/matouPCS/Tu/upload/<?php echo ($dt["imagename"]); ?>"  /><?php endif; ?>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
								</div>
							</div>
							<div class="s-f2">
								<p class="yhmc">
									<?php if($dt[username]==$dt[tel]): ?><a href=""><?php echo (substr($dt["username"],0,6)); ?></a><?php endif; ?>
								<?php if($dt[username]!=$dt[tel]): ?><a href=""><?php echo ($dt["username"]); ?></a><?php endif; ?>
								</p>
								<p class="center">
									<?php echo ($dt["type_u"]); ?>
								</p>
								<div>
									<p class="fsl">
										<span class="icon-fs"></span> <span id="gfen" style="font-size: 14px;"> <?php echo ($dt["fen"]); ?></span>
									</p>
									<p class="szd">
										<span class="szd-word"><?php echo ($dt["addre"]); ?></span>
										<span class="icon-szd szd-top"></span>
									</p>
									<p class="clearfloat"></p>
								</div>
							</div>
							<div class="clearfloat"></div>
							<div class="s-f3">
								<?php if(is_array($uus)): foreach($uus as $key=>$uuss): if($uuss['uid'] == $dt['uid']){ ?>
									<?php  $uu = explode(',',$uuss['fid']); array_pop($uu); if(in_array($_SESSION['id'],$uu)){ ?>
										<button  class="dy"  id="gz-qx" onclick="guanzhu(<?php echo ($dt['uid']); ?>)">已关注</button>
									<?php }else{ ?>
										<?php if(empty($_SESSION['id'])){ ?>
											<button  class="dy" id="gz-qx" onclick="alert('请先登录')">关注</button>
										<?php }else{ ?>
											<button  class="dy" id="gz-qx" onclick="guanzhu(<?php echo ($dt['uid']); ?>)">关注</button>
										<?php } ?>
									<?php } ?>
								<?php } endforeach; endif; ?>
							</div>
							<script>
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
						 </script>
							<div class="s-f4">
								<div class="spbd">
									<a rel="nofollow" style="width: 120px;"  href="?s=/Home/Tjcs/spxq/uid/<?php echo ($_GET['id']); ?>">商品</a>
									<a  href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($_GET['id']); ?>">动态</a>
									<a class="red" href="?s=/Home/Mtbu/spbddyxq/id/<?php echo ($_GET['id']); ?>">需求</a>
									<a style="width: 105px;" href="?s=/Home/Mtbu/spbddyly/id/<?php echo ($_GET['id']); ?>">留言区</a>
								</div>
							</div>
						</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-c-1f">
					<div class="left">
						<div class="left-xq">
							<p>全部需求</p>
						<img src="/matouPCS/Public/Home/img/xxjt.png" />
						<div id="typee" class="select-xq">
								<ul>
								<li style="padding-top: 5px;">
									<a href="javascript://">悬赏需求</a>
								</li>
								<li>
									<a href="javascript://" >应赏需求</a>
								</li>
									<li>
									<a href="javascript://" >招聘需求</a>
								</li>
								<li>
									<a href="javascript://" >应聘需求</a>
								</li>
								<li>
									<a href="javascript://">求购二手</a>
								</li>
								<li>
									<a href="javascript://" >处理闲置</a>
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
					<div class="s-c-1f">
						<div class="s-c-1f-3f">
							<div class="top">
								<div class="lyq">
									<h2>留 言 区</h2>
								</div>
								<div class="textarea">
									<textarea id="contents" name="contents"></textarea>
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
												var li = '';
												for (var i = 0; i < data.length; i++) {
													if(data[i].zid==null){
														 var aa=2;
													}else{
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
												     var img = '<img  width="80" height="80" src="/matouPCS/Tu/upload/'+data[i].imagename+'" /> ';
													}
													
													
													li+='<li><div class="left-tx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><div class="right-xx"><p class="tt"><span class="left">用户'+use+'</span><span class="right">'+data[i].addre+'</span></p><p class="grjj">'+data[i].contents+' </p><div class="bottom"><p class="sj">'+data[i].stime+'</p><p class="dz dz-qx"><p onclick="zan('+data[i].id+','+data[i].zan+')" class="dz dz-qx">'+dianzan+'</span><span  id="s'+data[i].id+'">'+data[i].zan+'</span></p></p></div></div><div class="clearfloat"></div></li>';
												
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
									<?php if(is_array($list)): foreach($list as $key=>$lis): ?><li>
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
                                     <img width="80" height="80" src="/matouPCS/Tu/upload/<?php echo ($lis["imagename"]); ?>"  /><?php endif; ?>
									
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
												<?php echo ($lis["contents"]); ?>
											</p>
											<div class="bottom">
												<p class="sj"><?php echo ($lis["stime"]); ?></p>
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
							<a href="?s=/Home/Mtbu/spbddyly/id/<?php echo ($_GET['id']); ?>">查看更多 》</a>
							</p>
						</div>
					</div>
						<script type="text/javascript">
									var a = 0;
									function zan(lid,zan){
								
										var zan = parseInt(document.getElementById('s'+lid).innerHTML);
										if($('#z'+lid).hasClass('icon-dz')){
											zan += 1;
											$.ajax({
												url:"?s=/Home/Mtbu/spbd_liu_zan/lid/"+lid+"/zan/"+zan,
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
												url:"?s=/Home/Mtbu/spbd_liu_zan/lid/"+lid+"/zan/"+zan,
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
							<div class="s-c-5f">
						<div class="s-c-5f-main">
							<?php if(is_array($sp)): foreach($sp as $key=>$v): ?><div class="s-c-5f-1f">
								<div class="title">
									<h2>码 头 商 铺</h2>
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-5f-2f">
								<p class="black-333">商铺名称</p>
								<p><?php echo ($v["shopname"]); ?></p>
								<p class="black-333"><?php echo ($v["address"]); ?></p>
								<p class="spdz">商铺地址商铺地址</p>
								<p class="zycp-f black-333">主营商品：</p>
								<span class="zysp"><?php echo ($v["zysp"]); ?></span>
								<hr class="hx">
								<p class="zycp-f black-333">手机号</p>
								<p><?php echo ($v["tel"]); ?></p>
								<p class="black-333">QQ号</p>
								<p><?php echo ($v["qq"]); ?></p>
								<p class="black-333">网店</p>
								<p><?php echo ($v["wangzhan"]); ?></p>
							</div>
							<p class="ckgd">
							<a href="?s=/Home/Tjcs/spxq/uid/<?php echo ($_GET['id']); ?>">进入商铺 》</a> 
							</p><?php endforeach; endif; ?>
						</div>
					</div>
				</div>
				<div id="ul" class="s-main-l">
					<div class="s-c-2f">
						<ul>
							
								<!-- 悬赏 -->
							<?php if(is_array($jbxs)): foreach($jbxs as $key=>$jbxss): ?><li>
							<a href="?s=/Home/xsdt/xqxs/id/<?php echo ($jbxss['psid']); ?>">
								<h3 style="color:#FF5C5D;">悬赏</h3>
									<p>
										<span class="black">活动时间：</span>
										<span class="hdsj black"><?php echo ($jbxss["time"]); ?></span>
										<span class="black">活动地点：</span>
										<span class="hddd black"><?php echo ($jbxss["address"]); ?></span>
									</p>
									<?php if(is_array($jbxsData)): foreach($jbxsData as $key=>$jbxsDatas): if($jbxss['psid'] == $jbxsDatas['pid']){ ?>
												<p id="p">
													<span class="sys black-333"><?php echo ($jbxsDatas["type"]); ?></span>
													<span class="sex">
													<?php if($jbxsDatas[sex]==1): ?>男
				                                         <?php elseif($jbxsDatas[sex]==2): ?>  
				                                             女
					                                    <?php else: ?>
					                                      保密<?php endif; ?>
													</span>
													<span class="age"><?php echo ($jbxsDatas["age"]); ?></span>
													<span class="black-333">岗位要求：</span>
													<span class="gwyq"><?php echo ($jbxsDatas["yaoqiu"]); ?></span>
													<span class="price"><?php echo ($jbxsDatas["price"]); ?>元/天</span>
													<span class="bmrs">
														<?php $bao = explode(',',$jbxsDatas['bao']); array_pop($bao); $num = count($bao); ?>
								 	   	<?php echo ($num); ?>人报名</span>
												</p>
											<?php } endforeach; endif; ?>
								</a>
								<p class="lastd">
											<span class="sc">已有<?php echo ($jbxss["collect"]); ?>人收藏</span>
											<span class="fb"><?php echo ($jbxss["date"]); ?></span>
									<span class="clearfloat"></span>
								</p>
							</li><?php endforeach; endif; ?>
							<!-- 应赏 -->
							<?php if(is_array($jbys)): foreach($jbys as $key=>$jbyss): ?><li>
							     <a href="?s=/Home/Ysq/xqys/id/<?php echo ($jbyss['did']); ?>">
							     <h3 style="color:#FF5C5D;">应赏</h3>
									<p>
										<span class="black">工作地点：</span>
										<span class="hddd black"><?php echo ($jbyss["address"]); ?></span>
									</p>
									<p>
										<span class="sys black-333"><?php echo ($jbyss["type_d"]); ?></span>
										<span class="sex">	
										<?php if($jbyss[sexs]==1): ?>男
				                                         <?php elseif($jbyss[sexs]==2): ?>  
				                                             女
					                                    <?php else: ?>
					                                      保密<?php endif; ?></span>
										<span class="age"><?php echo ($jbyss["age"]); ?></span>
										<span class="black-333">岗位要求：</span>
										<span class="gwyq"><?php echo ($jbyss["content"]); ?></span>
										<span class="price"><?php echo ($jbyss["price"]); ?>元/天</span>
										<span class="bmrs">
										<?php $bao = explode(',',$jbyss['due_shou']); array_pop($bao); $num = count($bao); ?>
										<?php echo ($num); ?>人报名</span>
										<span class="clearfloat"></span>
									</p>
							
								</a>
								<p class="lastd">
										<span class="sc">已有<?php echo ($jbxss["collect"]); ?>人收藏</span>
										<span class="fb"><?php echo ($jbxss["date"]); ?></span>
									<span class="clearfloat"></span>
								</p>
							</li><?php endforeach; endif; ?>
					<!-- 招聘 -->
							<?php if(is_array($jbzp)): foreach($jbzp as $key=>$jbzps): ?><li>
									<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($jbzps['rid']); ?>">
									<h3 style="color:#FF5C5D;">招聘</h3>
										<p style="color: #000000;">
											<span class="black">工作地点：</span>
											<span class="hddd"><?php echo ($jbzps["address_zp"]); ?></span>
										</p>
										<?php if(is_array($jbzpData)): foreach($jbzpData as $key=>$jbzpDatas): if($jbzps['rid'] == $jbzpDatas['pid']){ ?>
												<p id="p">
													<span class="sys black-333"><?php echo ($jbzpDatas["type"]); ?></span>
														<span class="sex">
													<?php if($jbzpDatas[sex]==1): ?>男
				                                         <?php elseif($jbzpDatas[sex]==2): ?>  
				                                             女
					                                    <?php else: ?>
					                                      不限<?php endif; ?>
													</span>
													<span class="age"><?php echo ($jbzpDatas["age"]); ?>岁</span>
													<span class="black">岗位要求：</span>
													<span class="gwyq"><?php echo ($jbzpDatas["content"]); ?></span>
													<span class="price"><?php echo ($jbzpDatas["price"]); ?>元/天</span>
													<span class="bmrs">	
													<?php $bao = explode(',',$jbzpDatas['zhao']); array_pop($bao); $num = count($bao); ?>
										<?php echo ($num); ?>人应聘</span>
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
							<!-- 应聘-->
							<?php if(is_array($jbyp)): foreach($jbyp as $key=>$jbyps): ?><li>
									<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($jbyps['eid']); ?>">
									<h3 style="color:#FF5C5D;">应聘</h3>
										<p>
											<span class="name"><?php echo ($jbyps["name"]); ?></span>
											<span class="age"><?php echo ($jbyps["ages"]); ?></span>
											<span class="black">工作经验：</span>
											<span class="gzjy"><?php echo ($jbyps["worktimes"]); ?>年</span>
											<span class="black">个人简介：</span>
											<span class="grjj"><?php echo ($jbyps["content"]); ?></span>
											<span class="zw"><?php echo ($jbyps["type"]); ?></span>
											<span class="clearfloat"></span>
										</p>
										<?php if(is_array($jbypx)): foreach($jbypx as $key=>$jbypsx): if($jbyps['eid'] == $jbypsx['pid']){ ?>
										<p>
											<span class="black">工作时间：</span>
											<span class="gzsj"><?php echo ($jbypsx["worktime"]); ?></span>
											<span class="black">所在公司：</span>
											<span class="szgs"><?php echo ($jbypsx["workname"]); ?></span>
											<span class="black">职位：</span>
											<span class="drzw"><?php echo ($jbypsx["typew"]); ?></span>
											<span class="clearfloat"></span>
										</p>
										<?php } endforeach; endif; ?>
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
									<div class="word width">
										<div>
											<p class="mc">求购物品：<?php echo ($jbqgs["name"]); ?></p>
											<p class="jg"><strong class="black-333">预算：</strong>￥<?php echo ($jbqgs["price"]); ?></p>
											<div class="clearfloat"></div>
										</div>
										<span class="word-jtyq width">
												<strong class="black-333">具体要求：</strong>
												<?php echo ($jbqgs["content"]); ?>
											</span>
									</div>
									<div class="clearfloat"></div>
								</a>
								<p>
									<span class="sc">已有<?php echo ($jbqgs["collect"]); ?>人收藏</span>
									<span class="fb"><?php echo ($jbqgs["date"]); ?></span>
									<span class="clearfloat"></span>
								</p>
							</li><?php endforeach; endif; ?>
								<?php if(is_array($jbxz)): foreach($jbxz as $key=>$jbxzs): ?><li>
								<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($jbxzs['fid']); ?>">
									<div class="yhtx">
												<?php if(is_array($jbxzimg)): foreach($jbxzimg as $key=>$jbxzimgs): $file = explode(',',$jbxzimgs['imagenames']); array_pop($file); ?>
											<?php if($jbxzs['fid'] == $jbxzimgs['pid']){ ?>								
										<img src="<?php echo '/matouPCS/Uploads/'.substr($file[0],1); ?>" alt="" />
											<?php } endforeach; endif; ?>
									</div>
									<div class="word">
										<div>
											<p class="mc">闲置名称：<?php echo ($jbxzs["name"]); ?></p>
											<p class="jg"><strong class="black-333">价格：</strong>￥<?php echo ($jbxzs["price"]); ?></p>
											<div class="clearfloat"></div>
										</div>
										<div>
											<span class="word-jtyq">
												<strong class="black-333">具体要求：</strong>
											<?php echo ($jbxzs["content"]); ?>
											</span>
											<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</a>
								<p class="word-bottom xzbottom">
									<span class="sc">已有<?php echo ($jbxzs["collect"]); ?>人收藏</span>
												<span class="fb"><?php echo ($jbxzs["date"]); ?></span>
									<span class="clearfloat"></span>
								</p>
							</li><?php endforeach; endif; ?>
						</ul>
					</div>
			
				</div>
				<div class="clearfloat"></div>
			</div>
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
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
	<script src="/matouPCS/Public/Home/js/rAF.js"></script>
	<script src="/matouPCS/Public/Home/js/demo-2.js"></script>
<script type="text/javascript">
function ajax(where,id){

	//alert(where);
var xqz='z';
var xqr='r';
		if(where=='z'||where=='r'){
			$.ajax({
				url:"?s=/Home/Mtbu/spbddnxqre",
				type:"post",
				data:{id:id,where:where},
				dataType:"json",
				success:function(data){
				//	alert(data);
                    var xxoo='';
						for (var i = 0; i < data['xji'].length; i++) {
							var li = '';
                            var p='';
							li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['xji'][i].psid+'"><h3 style="color:#FF5C5D;">悬赏</h3><p style="color: #000000;"><span class="black">活动时间：</span><span class="hdsj">'+data['xji'][i].time+'</span><span class="black">活动地点：</span><span class="hddd">'+data['xji'][i].address+'</span></p>';
							
						
								for (var j = 0; j < data['xben'].length; j++) {
								
									if(data['xji'][i].psid==data['xben'][j].pid){
										 var s=data['xben'][j].bao;  
										 if(s==null){
											 var count = 0; 
										 }else{
											var count = s.match(/,/g).length; 
										 }
										 if(data['xben'][j].sex==1){
												var sex='男';
											}else if(data['xben'][j].sex==2){
												var sex='女';
											}else{
												var sex='保密';
											}
									p+='<p><span class="sys black-333">'+data['xben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['xben'][j].age+'</span><span class="black">岗位要求：</span><span class="gwyq">'+data['xben'][j].yaoqiu+'</span><span class="price">'+data['xben'][j].price+'元/天</span><span class="bmrs">'+count+'人报名</span></p>';
									}
									
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['xji'][i].collect+'人收藏</span><span class="fb">'+data['xji'][i].date+'</span></p></a></li>';	
						};
					//	var p1='<div class="s-c-3f"><ul id="shiyan">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj(<?php echo ($_GET['id']); ?>)" name="btn" id="btn">点击加载更多</button></div></div>'
						
						
						var lq = '';

						for (var i = 0; i < data['shang'].length; i++) {
							 var s=data['shang'][i].due_shou;  
							 if(s==null){
								 var count = 0; 
							 }else{
								var count = s.match(/,/g).length; 
							 }
						if(data['shang'][i].sexs==1){
							var sex='男';
						}else if(data['shang'][i].sexs==2){
							var sex='女';
						}else{
							var sex='保密';
						}
							lq+='<li><a href="?s=/Home/Ysq/xqys/id/'+data['shang'][i].did+'"><h3 style="color:#FF5C5D;">应赏</h3><p><span class="black">工作地点：</span><span class="hddd black">'+data['shang'][i].address+'</span></p><p><span class="sys black-333">'+data['shang'][i].type_d+'</span><span class="sex">'+sex+'</span><span class="age">'+data['shang'][i].age+'</span><span class="black-333">岗位要求：</span><span class="gwyq">'+data['shang'][i].content+'</span><span class="price">'+data['shang'][i].price+'元/天</span><span class="bmrs"> '+count+'人报名</span><span class="clearfloat"></span></p></a><p class="lastd"><span class="sc">已有'+data['shang'][i].collect+'人收藏</span><span class="fb">'+data['shang'][i].date+'</span><span class="clearfloat"></span></p></li>';
						};
						
					      var xxww='';
						for (var i = 0; i < data['wji'].length; i++) {
							var lw= '';
                               var pw='';
                               lw+='<li><a href="?s=/Home/Zpdt1/xqzp/id/'+data['wji'][i].rid+'"><h3 style="color:#FF5C5D;">招聘</h3><p style="color: #000000;"><span class="black">工作地点：</span><span class="hddd">'+data['wji'][i].address_zp+'</span></p>';
   							
								for (var j = 0; j < data['wben'].length; j++) {
									 var s=data['wben'][j].zhao;
									 if(s==null){
										 var count = 0; 
									 }else{
										var count = s.match(/,/g).length; 
									 }
										if(data['wben'][j].sex==1){
											var sex='男';
										}else if(data['wben'][j].sex==2){
											var sex='女';
										}else{
											var sex='不限';
										}
									
									if(data['wji'][i].rid==data['wben'][j].pid){
							
										pw+='<p id="p"><span class="sys black-333">'+data['wben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['wben'][j].age+'岁</span><span class="black">岗位要求：</span><span class="gwyq">'+data['wben'][j].content+'</span><span class="price">'+data['wben'][j].price+'元/天</span><span class="bmrs">'+count+'人应聘</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxww+=lw+pw+'<p><span class="sc">已有'+data['wji'][i].collect+'人收藏</span><span class="fb">'+data['wji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
					//	var p1='<div class="s-c-3f"><ul id="zp">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2(<?php echo ($_GET['id']); ?>)" name="btn2" id="btn2">点击加载更多</button></div></div>'
						
						
				   var le = '';
						for (var i = 0; i < data['pji'].length; i++) {
							var lv= '';
                               var pv='';
                      		 var s=data['pji'][i].em_shou;
							 if(s==null){
								 var shou = 0; 
							 }else{
								var shou = s.match(/,/g).length; 
							 }
                               lv+='	<li><a href="?s=/Home/Zpdt/xqyp/id/'+data['pji'][i].eid+'"><h3 style="color:#FF5C5D;">应聘</h3><p><span class="name">'+data['pji'][i].name+'</span><span class="age">'+data['pji'][i].ages+'</span><span class="black">工作经验：</span><span class="gzjy">'+data['pji'][i].worktimes+'年</span><span class="black">个人简介：</span><span class="grjj">'+data['pji'][i].content+'</span><span class="zw">'+data['pji'][i].type+'</span><span class="clearfloat"></span></p>';
   							
								for (var j = 0; j < data['pben'].length; j++) {
									if(data['pji'][i].eid==data['pben'][j].pid){
							
										pv+='<p><span class="black">工作时间：</span><span class="gzsj">'+data['pben'][j].worktime+'</span><span class="black">所在公司：</span><span class="szgs">'+data['pben'][j].workname+'</span><span class="black">职位：</span><span class="drzw">'+data['pben'][j].typew+'</span><span class="clearfloat"></span></p>';
									}
								
							}
								le+=lv+pv+'<p><span class="sc">已有'+shou+'人收藏</span><span class="fb">'+data['pji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
					
						var lr = '';

						for (var i = 0; i < data['qiu'].length; i++) {
				
							lr+='<li><a href="?s=/Home/Tzsc/xqqg/id/'+data['qiu'][i].fid+'"><div class="word width"><div><p class="mc">求购物品：'+data['qiu'][i].name+'</p><p class="jg"><strong class="black-333">预算：</strong>￥'+data['qiu'][i].price+'</p><div class="clearfloat"></div></div><span class="word-jtyq width"><strong class="black-333">具体要求：</strong>'+data['qiu'][i].content+' </span></div><div class="clearfloat"></div></a><p><span class="sc">已有'+data['qiu'][i].collect+'人收藏</span><span class="fb">'+data['qiu'][i].date+'</span><span class="clearfloat"></span></p></li>';
						};
					//	var p='<div class="s-c-3f"><ul id="qg">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj4(<?php echo ($_GET['id']); ?>)" name="btn4" id="btn4">点击加载更多</button></div></div>'	
						
						
						var lt = '';

						for (var i = 0; i < data['xian'].length; i++) {
						     for (var j = 0; j < data['xianimg'].length; j++) {
	                            	if(data['xian'][i].fid==data['xianimg'][j].pid){	
	                            		var myArray=new Array()
	       							 var str=data['xianimg'][j].imagenames;  
	       							 myArray = str.split(","); 
	    							var img='<img src="/matouPCS/Uploads/'+myArray[0]+'" />';	
	    					
	    							}
							}
						 
							lt+='<li><a href="?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><div class="yhtx"> '+img+'</div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong class="black-333">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><div><span class="word-jtyq"><strong class="black-333">具体要求：</strong>'+data['xian'][i].content+'</span><div class="clear"></div></div></div><div class="clear"></div></a><p class="word-bottom xzbottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></li>';
						
						};
						var py='<div id="ul" class="s-main-l"><div class="s-c-2f"><ul id="xz">'+xxoo+lq+xxww+le+lr+lt+'</ul></div></div><div class="s-main-b"></div>'
						
						
						$('#ul').html(py);
						$('#content').val('');
				},error:function(){
					alert('no');
				}
			});
		
	}else if(where==1||where=='1z'){
		//alert(id);
	
			$.ajax({
				url:"?s=/Home/Mtbu/xuanshang",
				type:"post",
				data:{id:id,rz:xqz},
				dataType:"json",
				success:function(data){

                   var xxoo='';
					for (var i = 0; i < data['ji'].length; i++) {
						var li = '';
                           var p='';
                       	li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><h3 style="color:#FF5C5D;">悬赏</h3><p style="color: #000000;"><span class="black">活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span class="black">活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
						
					
							for (var j = 0; j < data['ben'].length; j++) {
							//	alert(id);
								if(data['ji'][i].psid==data['ben'][j].pid){
										 var s=data['ben'][j].bao;  
										 if(s==null){
											 var count = 0; 
										 }else{
											var count = s.match(/,/g).length; 
										 }
										 if(data['ben'][j].sex==1){
												var sex='男';
											}else if(data['ben'][j].sex==2){
												var sex='女';
											}else{
												var sex='保密';
											}
									p+='<p><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人报名</span></p>';
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
					url:"?s=/Home/Mtbu/yingshang",
					type:"post",
					data:{id:id,rz:xqz},
					dataType:"json",
					success:function(data){
						var li = '';
						
						for (var i = 0; i < data.length; i++) {
							 var s=data[i].due_shou;  
							 if(s==null){
								 var count = 0; 
							 }else{
								var count = s.match(/,/g).length; 
							 }
						if(data[i].sexs==1){
							var sex='男';
						}else if(data[i].sexs==2){
							var sex='女';
						}else{
							var sex='保密';
						}
							li+='<li><a href="?s=/Home/Ysq/xqys/id/'+data[i].did+'"><h3 style="color:#FF5C5D;">应赏</h3><p><span class="black">工作地点：</span><span class="hddd black">'+data[i].address+'</span></p><p><span class="sys black-333">'+data[i].type_d+'</span><span class="sex">'+sex+'</span><span class="age">'+data[i].age+'</span><span class="black-333">岗位要求：</span><span class="gwyq">'+data[i].content+'</span><span class="price">'+data[i].price+'元/天</span><span class="bmrs"> '+count+'人报名</span><span class="clearfloat"></span></p></a><p class="lastd"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
						};
						
						var p='<div class="s-c-2f"><ul id="ys">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button  onclick="tj1(<?php echo ($_GET['id']); ?>,1)" name="btn1" id="btn1">点击加载更多</button></div></div>'
					
						$('#ul').html(p);
						$('#content').val('');
					},error:function(){
						alert('no');
					}
				});
			
		}else if(where==3||where=='3z'){
		//	alert(id);
		
				$.ajax({
					url:"?s=/Home/Mtbu/zhaopin",
					type:"post",
					data:{id:id,rz:xqz},
					dataType:"json",
					success:function(data){
						
                     var xxoo='';
						for (var i = 0; i < data['ji'].length; i++) {
							var li = '';
                             var p='';
							li+='<li><a href="?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><h3 style="color:#FF5C5D;">招聘</h3><p style="color: #000000;"><span class="black">工作地点：</span><span class="hddd">'+data['ji'][i].address_zp+'</span></p>';
   							
						
								for (var j = 0; j < data['ben'].length; j++) {
									 var s=data['ben'][j].zhao;
									 if(s==null){
										 var count = 0; 
									 }else{
										var count = s.match(/,/g).length; 
									 }
										if(data['ben'][j].sex==1){
											var sex='男';
										}else if(data['ben'][j].sex==2){
											var sex='女';
										}else{
											var sex='不限';
										}
									
									if(data['ji'][i].rid==data['ben'][j].pid){
							
										p+='<p id="p"><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人应聘</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
					
						var p1='<div class="s-c-2f"><ul id="zp">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2(<?php echo ($_GET['id']); ?>,1)" name="btnn2" id="btnn2">点击加载更多</button></div></div>'
						$('#ul').html(p1);
						$('#content').val('');
					},error:function(){
						alert('no');
					}
				});
			
		}else if(where==4||where=='4z'){
			//	alert(1);
			
					$.ajax({
						url:"?s=/Home/Mtbu/yingpin",
						type:"post",
						data:{id:id,rz:xqz},
						dataType:"json",
						success:function(data){
							  var le = '';
								for (var i = 0; i < data['pji'].length; i++) {
									var lv= '';
		                               var pv='';
		                      		 var s=data['pji'][i].em_shou;
									 if(s==null){
										 var shou = 0; 
									 }else{
										var shou = s.match(/,/g).length; 
									 }
		                               lv+='	<li><a href="?s=/Home/Zpdt/xqyp/id/'+data['pji'][i].eid+'"><h3 style="color:#FF5C5D;">应聘</h3><p><span class="name">'+data['pji'][i].name+'</span><span class="age">'+data['pji'][i].ages+'</span><span class="black">工作经验：</span><span class="gzjy">'+data['pji'][i].worktimes+'年</span><span class="black">个人简介：</span><span class="grjj">'+data['pji'][i].content+'</span><span class="zw">'+data['pji'][i].type+'</span><span class="clearfloat"></span></p>';
		   							
										for (var j = 0; j < data['pben'].length; j++) {
											if(data['pji'][i].eid==data['pben'][j].pid){
									
												pv+='<p><span class="black">工作时间：</span><span class="gzsj">'+data['pben'][j].worktime+'</span><span class="black">所在公司：</span><span class="szgs">'+data['pben'][j].workname+'</span><span class="black">职位：</span><span class="drzw">'+data['pben'][j].typew+'</span><span class="clearfloat"></span></p>';
											}
										
									}
										le+=lv+pv+'<p><span class="sc">已有'+shou+'人收藏</span><span class="fb">'+data['pji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
								};
					
							var p='<div class="s-c-2f"><ul id="yp">'+le+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj3(<?php echo ($_GET['id']); ?>,1)" name="btn3" id="btn3">点击加载更多</button></div></div>'
							$('#ul').html(p);
							$('#content').val('');
						},error:function(){
							alert('no');
						}
					});
				
			}else if(where==5||where=='5z'){
								//	alert(1);
								
										$.ajax({
											url:"?s=/Home/Mtbu/qiugou",
											type:"post",
											data:{id:id,rz:xqz},
											dataType:"json",
											success:function(data){
												//alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
												
													li+='<li><a href="?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><div class="word width"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong class="black-333">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><span class="word-jtyq width"><strong class="black-333">具体要求：</strong>'+data[i].content+' </span></div><div class="clearfloat"></div></a><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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
											url:"?s=/Home/Mtbu/xianzhi",
											type:"post",
											data:{id:id,rz:xqz},
											dataType:"json",
											success:function(data){
												//alert(2);
												var li = '';

												for (var i = 0; i < data['xian'].length; i++) {
												
												     for (var j = 0; j < data['xianimg'].length; j++) {
							                            	if(data['xian'][i].fid==data['xianimg'][j].pid){	
							                            		var myArray=new Array()
							       							 var str=data['xianimg'][j].imagenames;  
							       							 myArray = str.split(","); 
							    							var img='<img src="/matouPCS/Uploads/'+myArray[0]+'" />';	
							    					
							    							}
													}
												 
													li+='<li><a href="?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><div class="yhtx"> '+img+'</div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong class="black-333">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><div><span class="word-jtyq"><strong class="black-333">具体要求：</strong>'+data['xian'][i].content+'</span><div class="clear"></div></div></div><div class="clear"></div></a><p class="word-bottom xzbottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></li>';
												
												};
												var p='<div class="s-c-2f"><ul id="xz">'+li+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj5(<?php echo ($_GET['id']); ?>,1)" name="btn5" id="btn5">点击加载更多</button></div></div>'
												$('#ul').html(p);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where=='1r'){
								//	alert(xqr);
									
									$.ajax({
										url:"?s=/Home/Mtbu/xuanshang",
										type:"post",
										data:{id:id,rz:xqr},
										dataType:"json",
										success:function(data){

										     var xxoo='';
												for (var i = 0; i < data['ji'].length; i++) {
													var li = '';
							                           var p='';
							                       	li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><h3 style="color:#FF5C5D;">悬赏</h3><p style="color: #000000;"><span class="black">活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span class="black">活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
													
												
														for (var j = 0; j < data['ben'].length; j++) {
														//	alert(id);
															if(data['ji'][i].psid==data['ben'][j].pid){
																	 var s=data['ben'][j].bao;  
																	 if(s==null){
																		 var count = 0; 
																	 }else{
																		var count = s.match(/,/g).length; 
																	 }
																	 if(data['ben'][j].sex==1){
																			var sex='男';
																		}else if(data['ben'][j].sex==2){
																			var sex='女';
																		}else{
																			var sex='保密';
																		}
																p+='<p><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人报名</span></p>';
																}
													}
														xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
													};
												var p1='<div class="s-c-2f"><ul id="shiyan">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tjc(<?php echo ($_GET['id']); ?>,2)" name="btnn" id="btnn">点击加载更多</button></div></div>'
												$('#ul').html(p1);
											$('#content').val('');
										},error:function(){
											alert('no');
										}
									});
								
							}else if(where=='2r'){
								//	alert(1);								
										$.ajax({
											url:"?s=/Home/Mtbu/yingshang",
											type:"post",
											data:{id:id,rz:xqr},
											dataType:"json",
											success:function(data){
												var li = '';
												
												for (var i = 0; i < data.length; i++) {
													 var s=data[i].due_shou;  
													 if(s==null){
														 var count = 0; 
													 }else{
														var count = s.match(/,/g).length; 
													 }
												if(data[i].sexs==1){
													var sex='男';
												}else if(data[i].sexs==2){
													var sex='女';
												}else{
													var sex='保密';
												}
													li+='<li><a href="?s=/Home/Ysq/xqys/id/'+data[i].did+'"><h3 style="color:#FF5C5D;">应赏</h3><p><span class="black">工作地点：</span><span class="hddd black">'+data[i].address+'</span></p><p><span class="sys black-333">'+data[i].type_d+'</span><span class="sex">'+sex+'</span><span class="age">'+data[i].age+'</span><span class="black-333">岗位要求：</span><span class="gwyq">'+data[i].content+'</span><span class="price">'+data[i].price+'元/天</span><span class="bmrs"> '+count+'人报名</span><span class="clearfloat"></span></p></a><p class="lastd"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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
											url:"?s=/Home/Mtbu/zhaopin",
											type:"post",
											data:{id:id,rz:xqr},
											dataType:"json",
											success:function(data){
												
											    var xxoo='';
												for (var i = 0; i < data['ji'].length; i++) {
													var li = '';
						                             var p='';
													li+='<li><a href="?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><h3 style="color:#FF5C5D;">招聘</h3><p style="color: #000000;"><span class="black">工作地点：</span><span class="hddd">'+data['ji'][i].address_zp+'</span></p>';
						   							
												
														for (var j = 0; j < data['ben'].length; j++) {
															 var s=data['ben'][j].zhao;
															 if(s==null){
																 var count = 0; 
															 }else{
																var count = s.match(/,/g).length; 
															 }
																if(data['ben'][j].sex==1){
																	var sex='男';
																}else if(data['ben'][j].sex==2){
																	var sex='女';
																}else{
																	var sex='不限';
																}
															
															if(data['ji'][i].rid==data['ben'][j].pid){
													
																p+='<p id="p"><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人应聘</span><span class="clearfloat"></span></p>';
															}
														
													}
														xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
												};
											
												var p1='<div class="s-c-2f"><ul id="zp">'+xxoo+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj2c(<?php echo ($_GET['id']); ?>,2)" name="btnn2" id="btnn2">点击加载更多</button></div></div>'
												$('#ul').html(p1);
												$('#content').val('');
											},error:function(){
												alert('no');
											}
										});
									
								}else if(where=='4r'){
									//	alert(1);
									
											$.ajax({
												url:"?s=/Home/Mtbu/yingpin",
												type:"post",
												data:{id:id,rz:xqr},
												dataType:"json",
												success:function(data){
													  var le = '';
														for (var i = 0; i < data['pji'].length; i++) {
															var lv= '';
								                               var pv='';
								                      		 var s=data['pji'][i].em_shou;
															 if(s==null){
																 var shou = 0; 
															 }else{
																var shou = s.match(/,/g).length; 
															 }
								                               lv+='	<li><a href="?s=/Home/Zpdt/xqyp/id/'+data['pji'][i].eid+'"><h3 style="color:#FF5C5D;">应聘</h3><p><span class="name">'+data['pji'][i].name+'</span><span class="age">'+data['pji'][i].ages+'</span><span class="black">工作经验：</span><span class="gzjy">'+data['pji'][i].worktimes+'年</span><span class="black">个人简介：</span><span class="grjj">'+data['pji'][i].content+'</span><span class="zw">'+data['pji'][i].type+'</span><span class="clearfloat"></span></p>';
								   							
																for (var j = 0; j < data['pben'].length; j++) {
																	if(data['pji'][i].eid==data['pben'][j].pid){
															
																		pv+='<p><span class="black">工作时间：</span><span class="gzsj">'+data['pben'][j].worktime+'</span><span class="black">所在公司：</span><span class="szgs">'+data['pben'][j].workname+'</span><span class="black">职位：</span><span class="drzw">'+data['pben'][j].typew+'</span><span class="clearfloat"></span></p>';
																	}
																
															}
																le+=lv+pv+'<p><span class="sc">已有'+shou+'人收藏</span><span class="fb">'+data['pji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
														};
											
													var p='<div class="s-c-2f"><ul id="yp">'+le+'</ul></div><div class="s-main-b"><div class="margin"><button onclick="tj3c(<?php echo ($_GET['id']); ?>,2)" name="btn3" id="btn3">点击加载更多</button></div></div>'
													$('#ul').html(p);
													$('#content').val('');
												},error:function(){
													alert('no');
												}
											});
										
									}else if(where=='5r'){
														//	alert(1);
														
																$.ajax({
																	url:"?s=/Home/Mtbu/qiugou",
																	type:"post",
																	data:{id:id,rz:xqr},
																	dataType:"json",
																	success:function(data){
																		var li = '';

																		for (var i = 0; i < data.length; i++) {
																			li+='<li><a href="?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><div class="word width"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong class="black-333">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><span class="word-jtyq width"><strong class="black-333">具体要求：</strong>'+data[i].content+' </span></div><div class="clearfloat"></div></a><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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
																	url:"?s=/Home/Mtbu/xianzhi",
																	type:"post",
																	data:{id:id,rz:xqr},
																	dataType:"json",
																	success:function(data){
																		var li = '';

																		for (var i = 0; i < data['xian'].length; i++) {
																		
																		     for (var j = 0; j < data['xianimg'].length; j++) {
													                            	if(data['xian'][i].fid==data['xianimg'][j].pid){	
													                            		var myArray=new Array()
													       							 var str=data['xianimg'][j].imagenames;  
													       							 myArray = str.split(","); 
													    							var img='<img src="/matouPCS/Uploads/'+myArray[0]+'" />';	
													    					
													    							}
																			}
																		 
																			li+='<li><a href="?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><div class="yhtx"> '+img+'</div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong class="black-333">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><div><span class="word-jtyq"><strong class="black-333">具体要求：</strong>'+data['xian'][i].content+'</span><div class="clear"></div></div></div><div class="clear"></div></a><p class="word-bottom xzbottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></li>';
																		
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
			url:"?s=/Home/Mtbu/xuanshangjz",
			data:{k:p,id:id,where:where},
			beforeSend:function(){
	         $("#shiyan").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
				if(data!=null){				
					//	alert(data);
					          var xxoo='';
												for (var i = 0; i < data['ji'].length; i++) {
													var li = '';
							                           var p='';
							                       	li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><h3 style="color:#FF5C5D;">悬赏</h3><p style="color: #000000;"><span class="black">活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span class="black">活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
													
												
														for (var j = 0; j < data['ben'].length; j++) {
														//	alert(id);
															if(data['ji'][i].psid==data['ben'][j].pid){
																	 var s=data['ben'][j].bao;  
																	 if(s==null){
																		 var count = 0; 
																	 }else{
																		var count = s.match(/,/g).length; 
																	 }
																	 if(data['ben'][j].sex==1){
																			var sex='男';
																		}else if(data['ben'][j].sex==2){
																			var sex='女';
																		}else{
																			var sex='保密';
																		}
																p+='<p><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人报名</span></p>';
																}
													}
														xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span></p></a></li>';	
													};
						$("#shiyan").append(xxoo);
			
				}else{
					
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
				url:"?s=/Home/Mtbu/yingshangjz",
				data:{k:pm,id:id,where:where},
				beforeSend:function(){
		         $("#ys").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					if(data!=null){				
						var li = '';
						
						for (var i = 0; i < data.length; i++) {
							 var s=data[i].due_shou;  
							 if(s==null){
								 var count = 0; 
							 }else{
								var count = s.match(/,/g).length; 
							 }
						if(data[i].sexs==1){
							var sex='男';
						}else if(data[i].sexs==2){
							var sex='女';
						}else{
							var sex='保密';
						}
							li+='<li><a href="?s=/Home/Ysq/xqys/id/'+data[i].did+'"><h3 style="color:#FF5C5D;">应赏</h3><p><span class="black">工作地点：</span><span class="hddd black">'+data[i].address+'</span></p><p><span class="sys black-333">'+data[i].type_d+'</span><span class="sex">'+sex+'</span><span class="age">'+data[i].age+'</span><span class="black-333">岗位要求：</span><span class="gwyq">'+data[i].content+'</span><span class="price">'+data[i].price+'元/天</span><span class="bmrs"> '+count+'人报名</span><span class="clearfloat"></span></p></a><p class="lastd"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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
				url:"?s=/Home/Mtbu/zhaopinjz",
				data:{k:pn,id:id,where:where},
				beforeSend:function(){
		         $("#zp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					if(data!=null){				

					    var xxoo='';
						for (var i = 0; i < data['ji'].length; i++) {
							var li = '';
                             var p='';
							li+='<li><a href="?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><h3 style="color:#FF5C5D;">招聘</h3><p style="color: #000000;"><span class="black">工作地点：</span><span class="hddd">'+data['ji'][i].address_zp+'</span></p>';
   							
						
								for (var j = 0; j < data['ben'].length; j++) {
									 var s=data['ben'][j].zhao;
									 if(s==null){
										 var count = 0; 
									 }else{
										var count = s.match(/,/g).length; 
									 }
										if(data['ben'][j].sex==1){
											var sex='男';
										}else if(data['ben'][j].sex==2){
											var sex='女';
										}else{
											var sex='不限';
										}
									
									if(data['ji'][i].rid==data['ben'][j].pid){
							
										p+='<p id="p"><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人应聘</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
							$("#zp").append(xxoo);
				
					}else{
						 //alert(22);
						 document.getElementById("btnn2").innerHTML = '加载完毕';
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
				url:"?s=/Home/Mtbu/yingpinjz",
				data:{k:pb,id:id,where:where},
				beforeSend:function(){
		         $("#yp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
			/* 		alert(data['pji']); */
					if(data['pji']!=null){				
						  var le = '';
							for (var i = 0; i < data['pji'].length; i++) {
								var lv= '';
	                               var pv='';
	                      		 var s=data['pji'][i].em_shou;
								 if(s==null){
									 var shou = 0; 
								 }else{
									var shou = s.match(/,/g).length; 
								 }
	                               lv+='	<li><a href="?s=/Home/Zpdt/xqyp/id/'+data['pji'][i].eid+'"><h3 style="color:#FF5C5D;">应聘</h3><p><span class="name">'+data['pji'][i].name+'</span><span class="age">'+data['pji'][i].ages+'</span><span class="black">工作经验：</span><span class="gzjy">'+data['pji'][i].worktimes+'年</span><span class="black">个人简介：</span><span class="grjj">'+data['pji'][i].content+'</span><span class="zw">'+data['pji'][i].type+'</span><span class="clearfloat"></span></p>';
	   							
									for (var j = 0; j < data['pben'].length; j++) {
										if(data['pji'][i].eid==data['pben'][j].pid){
								
											pv+='<p><span class="black">工作时间：</span><span class="gzsj">'+data['pben'][j].worktime+'</span><span class="black">所在公司：</span><span class="szgs">'+data['pben'][j].workname+'</span><span class="black">职位：</span><span class="drzw">'+data['pben'][j].typew+'</span><span class="clearfloat"></span></p>';
										}
									
								}
									le+=lv+pv+'<p><span class="sc">已有'+shou+'人收藏</span><span class="fb">'+data['pji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
							};
				
									$("#yp").append(le);
				
					}else{
				
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
					url:"?s=/Home/Mtbu/qiugoujz",
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
								
								li+='<li><a href="?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><div class="word width"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong class="black-333">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><span class="word-jtyq width"><strong class="black-333">具体要求：</strong>'+data[i].content+' </span></div><div class="clearfloat"></div></a><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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

	
				$.ajax({
					type:'post',
					url:"?s=/Home/Mtbu/xianzhijz",
					data:{k:pc,id:id,where:where},
					beforeSend:function(){
			         $("#xz").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						//alert(data['ji']);
						if(data['xian']!=null){				
							//	alert(data);
                                       var li = '';

				for (var i = 0; i < data['xian'].length; i++) {
							 for (var j = 0; j < data['xianimg'].length; j++) {
								if(data['xian'][i].fid==data['xianimg'][j].pid){	
								var myArray=new Array()
											 var str=data['xianimg'][j].imagenames;  
										myArray = str.split(","); 
						     var img='<img src="/matouPCS/Uploads/'+myArray[0]+'" />';	
													    					
							}
									}
																		 
							li+='<li><a href="?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><div class="yhtx"> '+img+'</div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong class="black-333">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><div><span class="word-jtyq"><strong class="black-333">具体要求：</strong>'+data['xian'][i].content+'</span><div class="clear"></div></div></div><div class="clear"></div></a><p class="word-bottom xzbottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></li>';
							};		$("#xz").append(li);
					
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
			url:"?s=/Home/Mtbu/xuanshangjz",
			data:{k:pj,id:id,where:where},
			beforeSend:function(){
	         $("#shiyan").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
				//alert(data['ji']);
				if(data!=null){				
					  var xxoo='';
						for (var i = 0; i < data['ji'].length; i++) {
							var li = '';
	                           var p='';
	                       	li+=' <li><a href="?s=/Home/xsdt/xqxs/id/'+data['ji'][i].psid+'"><h3 style="color:#FF5C5D;">悬赏</h3><p style="color: #000000;"><span class="black">活动时间：</span><span class="hdsj">'+data['ji'][i].time+'</span><span class="black">活动地点：</span><span class="hddd">'+data['ji'][i].address+'</span></p>';
							
						
								for (var j = 0; j < data['ben'].length; j++) {
								//	alert(id);
									if(data['ji'][i].psid==data['ben'][j].pid){
											 var s=data['ben'][j].bao;  
											 if(s==null){
												 var count = 0; 
											 }else{
												var count = s.match(/,/g).length; 
											 }
											 if(data['ben'][j].sex==1){
													var sex='男';
												}else if(data['ben'][j].sex==2){
													var sex='女';
												}else{
													var sex='保密';
												}
										p+='<p><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].yaoqiu+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人报名</span></p>';
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
	 	pj++;
// alert(p);
  }
  var pmc=2;
  function tj1c(id,where){
		 
		 
	//	alert(where);
			$.ajax({
				type:'post',
				url:"?s=/Home/Mtbu/yingshangjz",
				data:{k:pmc,id:id,where:where},
				beforeSend:function(){
		         $("#ys").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
	                    var li = '';
						
						for (var i = 0; i < data.length; i++) {
							 var s=data[i].due_shou;  
							 if(s==null){
								 var count = 0; 
							 }else{
								var count = s.match(/,/g).length; 
							 }
						if(data[i].sexs==1){
							var sex='男';
						}else if(data[i].sexs==2){
							var sex='女';
						}else{
							var sex='保密';
						}
							li+='<li><a href="?s=/Home/Ysq/xqys/id/'+data[i].did+'"><h3 style="color:#FF5C5D;">应赏</h3><p><span class="black">工作地点：</span><span class="hddd black">'+data[i].address+'</span></p><p><span class="sys black-333">'+data[i].type_d+'</span><span class="sex">'+sex+'</span><span class="age">'+data[i].age+'</span><span class="black-333">岗位要求：</span><span class="gwyq">'+data[i].content+'</span><span class="price">'+data[i].price+'元/天</span><span class="bmrs"> '+count+'人报名</span><span class="clearfloat"></span></p></a><p class="lastd"><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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
	 
		//alert(id);
			$.ajax({
				type:'post',
				url:"?s=/Home/Mtbu/zhaopinjz",
				data:{k:pnc,id:id,where:where},
				beforeSend:function(){
		         $("#zp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data!=null){				
					    var xxoo='';
						for (var i = 0; i < data['ji'].length; i++) {
							var li = '';
                             var p='';
							li+='<li><a href="?s=/Home/Zpdt1/xqzp/id/'+data['ji'][i].rid+'"><h3 style="color:#FF5C5D;">招聘</h3><p style="color: #000000;"><span class="black">工作地点：</span><span class="hddd">'+data['ji'][i].address_zp+'</span></p>';
   							
						
								for (var j = 0; j < data['ben'].length; j++) {
									 var s=data['ben'][j].zhao;
									 if(s==null){
										 var count = 0; 
									 }else{
										var count = s.match(/,/g).length; 
									 }
										if(data['ben'][j].sex==1){
											var sex='男';
										}else if(data['ben'][j].sex==2){
											var sex='女';
										}else{
											var sex='不限';
										}
									
									if(data['ji'][i].rid==data['ben'][j].pid){
							
										p+='<p id="p"><span class="sys black-333">'+data['ben'][j].type+'</span><span class="sex">'+sex+'</span><span class="age">'+data['ben'][j].age+'岁</span><span class="black">岗位要求：</span><span class="gwyq">'+data['ben'][j].content+'</span><span class="price">'+data['ben'][j].price+'元/天</span><span class="bmrs">'+count+'人应聘</span><span class="clearfloat"></span></p>';
									}
								
							}
								xxoo+=li+p+'<p><span class="sc">已有'+data['ji'][i].collect+'人收藏</span><span class="fb">'+data['ji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
						};
							$("#zp").append(xxoo);
				
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
				url:"?s=/Home/Mtbu/yingpinjz",
				data:{k:pbc,id:id,where:where},
				beforeSend:function(){
		         $("#yp").append("<div id='load'>加载中……</div>");
				},
				success:function(data){
					//alert(data['ji']);
					if(data['pji']!=null){				
						  var le = '';
							for (var i = 0; i < data['pji'].length; i++) {
								var lv= '';
	                               var pv='';
	                      		 var s=data['pji'][i].em_shou;
								 if(s==null){
									 var shou = 0; 
								 }else{
									var shou = s.match(/,/g).length; 
								 }
	                               lv+='	<li><a href="?s=/Home/Zpdt/xqyp/id/'+data['pji'][i].eid+'"><h3 style="color:#FF5C5D;">应聘</h3><p><span class="name">'+data['pji'][i].name+'</span><span class="age">'+data['pji'][i].ages+'</span><span class="black">工作经验：</span><span class="gzjy">'+data['pji'][i].worktimes+'年</span><span class="black">个人简介：</span><span class="grjj">'+data['pji'][i].content+'</span><span class="zw">'+data['pji'][i].type+'</span><span class="clearfloat"></span></p>';
	   							
									for (var j = 0; j < data['pben'].length; j++) {
										if(data['pji'][i].eid==data['pben'][j].pid){
								
											pv+='<p><span class="black">工作时间：</span><span class="gzsj">'+data['pben'][j].worktime+'</span><span class="black">所在公司：</span><span class="szgs">'+data['pben'][j].workname+'</span><span class="black">职位：</span><span class="drzw">'+data['pben'][j].typew+'</span><span class="clearfloat"></span></p>';
										}
									
								}
									le+=lv+pv+'<p><span class="sc">已有'+shou+'人收藏</span><span class="fb">'+data['pji'][i].date+'</span><span class="clearfloat"></span></p></a></li>';	
							};
				
									$("#yp").append(le);
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
					url:"?s=/Home/Mtbu/qiugoujz",
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
								
								li+='<li><a href="?s=/Home/Tzsc/xqqg/id/'+data[i].fid+'"><div class="word width"><div><p class="mc">求购物品：'+data[i].name+'</p><p class="jg"><strong class="black-333">预算：</strong>￥'+data[i].price+'</p><div class="clearfloat"></div></div><span class="word-jtyq width"><strong class="black-333">具体要求：</strong>'+data[i].content+' </span></div><div class="clearfloat"></div></a><p><span class="sc">已有'+data[i].collect+'人收藏</span><span class="fb">'+data[i].date+'</span><span class="clearfloat"></span></p></li>';
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

				$.ajax({
					type:'post',
					url:"?s=/Home/Mtbu/xianzhijz",
					data:{k:pcc,id:id,where:where},
					beforeSend:function(){
			         $("#xz").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						if(data['xian']!=null){				
							//	alert(data);
                                       var li = '';

				for (var i = 0; i < data['xian'].length; i++) {
							 for (var j = 0; j < data['xianimg'].length; j++) {
								if(data['xian'][i].fid==data['xianimg'][j].pid){	
								var myArray=new Array()
											 var str=data['xianimg'][j].imagenames;  
										myArray = str.split(","); 
						     var img='<img src="/matouPCS/Uploads/'+myArray[0]+'" />';	
													    					
							}
									}
																		 
							li+='<li><a href="?s=/Home/Tzsc/xqxz/id/'+data['xian'][i].fid+'"><div class="yhtx"> '+img+'</div><div class="word"><div><p class="mc">闲置名称：'+data['xian'][i].name+'</p><p class="jg"><strong class="black-333">价格：</strong>￥'+data['xian'][i].price+'</p><div class="clearfloat"></div></div><div><span class="word-jtyq"><strong class="black-333">具体要求：</strong>'+data['xian'][i].content+'</span><div class="clear"></div></div></div><div class="clear"></div></a><p class="word-bottom xzbottom"><span class="sc">已有'+data['xian'][i].collect+'人收藏</span><span class="fb">'+data['xian'][i].date+'</span><span class="clearfloat"></span></p></li>';
							};		$("#xz").append(li);
					
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
</html>