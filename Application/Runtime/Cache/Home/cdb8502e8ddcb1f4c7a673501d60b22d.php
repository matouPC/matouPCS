<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/spbddndt-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
		<!--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->
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
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/2rank.css" />
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
													<a href="">悬赏</a>
												</li>
												<li>
													<a href="?s=/Home/User/user_ys">应赏</a>
												</li>
												<li>
													<a href="">招聘</a>
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
							<div class="bjzl">
							<a style="width: 120px;" href="?s=/Home/User">
								<button>编辑个人资料</button>
								</a>
							</div>
							<div class="yhtx">
								<img src="/matouPCS/Public/Home/img/yhmc.png">
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
							<p style="text-align: center;">
								（<?php echo ($dt["type"]); ?>）
							</p>
							<div>
								<p class="fsl">
								<span style="font-size: 24px; display: block; float: left; margin-top: -2px;" class="icon-fs"></span>
								<span style="display: block; float: left;"><?php echo ($dt["fen"]); ?></span>
							</p>
							<p class="szd">
								<span style="font-size: 18px;" class="icon-szd"></span>
								<span style="display: block; float: right; line-height: 20px;"><?php echo (substr($dt["address"],0,6)); ?></span>
							</p>
							<p class="clearfloat"></p>
							</div>
						</div>
						<div class="clearfloat"></div>
						<div class="s-f3">
							<button disabled="disabled">关注</button>
						</div>
						<div class="s-f4">
							<div>
								<a style="width: 120px;" href="?s=/Home/Tjcs/spxq/id/<?php echo ($_GET['id']); ?>">商品</a>
								<a style="color: #FF5C5D;" href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($_GET['id']); ?>">动态</a>
								<a href="?s=/Home/Mtbu/spbddnxq/id/<?php echo ($_GET['id']); ?>">需求</a>
								<a style="width: 105px;" href="?s=/Home/Mtbu/spbddnly/id/<?php echo ($_GET['id']); ?>">留言区</a>
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
						<div class="left-dt">
							<p>全部动态</p>
							<img src="/matouPCS/Public/Home/img/xxjt.png" />
							<div class="select-dt">
								<ul id="type1">
									<li style="padding-top: 5px;">
										<a href="javascript://">全部动态</a>
									</li>
									<li>
										<a href="javascript://">活动动态</a>
									</li>
								</ul>
							</div>
						</div>
	        <script>
	       
            var cNode =document.getElementById('type1').getElementsByTagName('li');
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
					</div>
					<div id="paixu" class="center">
						<p>排序：</p>
						<a  class="selected" href="javascript://">最新</a>
						<a  href="javascript://">热门</a>
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
                           //  alert(where);
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
									<button>留 言 区</button>
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
									//alert(1);
									var contents = $('#contents').val();
									if(contents.replace(/\s+/g, "")){
										$.ajax({
											url:"?s=/Home/Mtbu/spbddyly_liuyan",
											type:"post",
											data:{id:id,contents:contents},
											dataType:"json",
											success:function(data){
											//	alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
													var use = data[i].username.substr(0,5);
													li+='<li><div class="left"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><div class="right"><p class="tt"><span style="float: left;"><a href="">用户'+use+'</a></span><span style="float: right; text-align: right;">'+data[i].addre+'</span></p><p class="grjj">'+data[i].contents+'</p><div class="bottom"><p class="sj">'+data[i].stime+'</p><p class="dz dz-qx"><span class="icon-dz"></span>1000</p></div></div><div class="clearfloat"></div></li>';
												};
												$('#li').html(li);
												$('#contents').val('');
											},error:function(){
												alert('no');
											}
										});
									}else{
										alert('no');
									}
								}
							</script>
						<ul id="li">
								<?php if(is_array($list)): foreach($list as $key=>$lis): ?><li>
										<div class="left">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="vip">
												<img src="/matouPCS/Public/Home/img/rzlogo.png" />
											</div>
										</div>
										<div class="right">
											<p class="tt">
												<span style="float: left;">
													<a href="">用户<?php echo (substr($lis["username"],0,5)); ?></a>
												</span>
												<span style="float: right; text-align: right;"><?php echo ($lis["addre"]); ?></span>
											</p>
											<p class="grjj">
												<?php echo ($lis["contents"]); ?>
											</p>
											<div class="bottom">
												<p class="sj"><?php echo ($lis["time"]); ?></p>
												<p class="dz dz-qx"><span class="icon-dz"></span>1000</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</li><?php endforeach; endif; ?>
							</ul>
							<p class="ckgd">
								<a href="?s=/Home/Mtbu/spbddnly">查看更多 》</a>
							</p>
						</div>
					</div>
					<div class="s-c-2f">
						<div class="s-c-2f-main">
							<div class="s-c-2f-1f">
								<div class="title">
									码 头 商 铺
								</div>
								<div class="bj">
								<a style="width: 120px;" href="?s=/Home/Mtbu/spgl/id/<?php echo ($_GET['id']); ?>">
									<img src="/matouPCS/Public/Home/img/bj-gray.png" />
									</a>
								</div>
								<div class="clearfloat"></div>
							</div>
							<?php if(is_array($sp)): foreach($sp as $key=>$v): ?><div class="s-c-2f-2f">
								<p>商铺名称</p>
								<p style="color: #000;"><?php echo ($v["shopname"]); ?></p>
								<p>商铺地址</p>
								<p style="color: #000; padding-bottom: 15px; border-bottom: solid #CCCCCC 1px;"><?php echo ($v["address"]); ?></p>
								<p style="margin-top: 15px;">主营商品：</p>
								<p class="zysp"><?php echo ($v["zysp"]); ?></p>
								<hr style="border:none; border-top: solid #CCCCCC 1px ;">
								<p style="margin-top: 15px;">手机号</p>
								<p style="color: #000;"><?php echo ($v["tel"]); ?></p>
								<p>QQ号</p>
								<p style="color: #000;"><?php echo ($v["qq"]); ?></p>
								<p>网店</p>
								<p style="color: #000;"><?php echo ($v["wangzhan"]); ?></p>
							</div>
						
							<p class="ckgd">
							<a  href="?s=/Home/Tjcs/spxq/id/<?php echo ($_GET['id']); ?>">进入商铺 》</a>
							</p><?php endforeach; endif; ?>
						</div>
					</div>
				</div>
				<div id="re" class="s-main-l">
					<div id="content" class="s-c-3f">				
						<div   class="s-c-3f-1f">
						<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="mdhd">
								<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>
							<div class="yhtx">
								<a href="">
									<img src="/matouPCS/Public/Home/img/yhmc.png" />
								</a>
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<p class="yhmc">
								<a href=""><?php echo ($v["username"]); ?></a>
							</p>
							<p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
							<p class="dtnr">
							<?php echo ($v["content"]); ?>
							</p>
							<ul>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="/matouPCS/Public/Home/img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li>
									<a rel="gallery1" class="boxer" href="img/yhmc-big.png">
										<div class="pic">
											<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
										</div>
									</a>
								</li>
								<li class="clearfloat"></li>
							</ul>
							<div class="bottom">
								<p class="left"><?php echo ($v["time"]); ?></p>
								<span class="delete">
									<img src="/matouPCS/Public/Home/img/delete-2.png" />
								</span>
								<div class="right dz-qx">
									<span style="font-size: 20px;" class="icon-dz"></span>
									<p style="float: right; margin-left: 5px;"><?php echo ($v["zan"]); ?></p>
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
var bd="sp";
var p=2;
  function tj(id){

	 
	//  alert(id);
		$.ajax({
			type:'post',
			url:"<?php echo U('Mtbu/dnjzdt');?>",
			data:{k:p,id,id},
			beforeSend:function(){
	         $("#content").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
			// alert(data);
			
					if(data!=null){				
						//alert(1);
						 for (var i = 0; i < data.length; i++) {
						$("#content").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr"> '+data[i].content+'</p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div');
	 		
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
		//alert(id);	
			$.ajax({
				url:"?s=/Home/Mtbu/spbddndtre",
				type:"post",
				data:{id:id,where:where},
				dataType:"json",
				success:function(data){

                   var li='';
					for (var i = 0; i < data.length; i++) {
					
						li+='<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr"> '+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
									
						
					};
					var p ='<div id="ha" class="s-c-3f">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj'+where+'(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
					$('#re').html(p);
					$('#re').val('');
				},error:function(){
					alert('no');
				}
			});
		
	}
	var l=2;

	  function tj1(id){		 
			// alert(1);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:l,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			// alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthd');?>",
					data:{k:z,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
		//	 alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:x,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			// alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdtre');?>",
					data:{k:c,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
		//	 alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdtre');?>",
					data:{k:v,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			// alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdt');?>",
					data:{k:b,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			// alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthdr');?>",
					data:{k:n,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
		//	 alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/dtjzdthd');?>",
					data:{k:m,id:id,bd:bd},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="szd">所在地：'+data[i].addre+'</p><p class="dtnr">'+data[i].content+' </p><ul><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li><a rel="gallery1" class="boxer" href="img/yhmc-big.png"><div class="pic"><img src="/matouPCS/Public/Home/img/yhmc-big.png" /></div></a></li><li class="clearfloat"></li></ul><div class="bottom"><p class="left">'+data[i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
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

		//--------------------------全部动态下拉----------------------------------
		$('.s-main-c-1f .left-dt').hover(function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color', '#FF5C5D');
			$('.select-dt').stop().animate({
				height: '65px'
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
				height: '155px'
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
		//----------------------------remove tab切换样式--------------------------
		$('.s-main-c-1f .center a').click(function() {
			$(this).parents('.s-main-c-1f').children('.center').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		$('.s-c-2f-4f .zp a').click(function() {
			$(this).parents('.s-c-2f-4f').children('.zp').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
		//----------------------------删除动态/需求--------------------------
		$('.delete').click(function(){
//			alert(123);
			$(this).parents('.s-c-3f-1f').remove();
		});
		//----------------------------点赞--------------------------
		$('.dz-qx span').click(function(){
			if($(this).hasClass('icon-dz')){
				$(this).removeClass('icon-dz');
				$(this).addClass('icon-dz-kz');
			}else{
				$(this).removeClass('icon-dz-kz');
				$(this).addClass('icon-dz');
			}
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
	</script>

</html>