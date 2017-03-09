<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺主页-商品cs</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/spmc-3rsc-cc.css" />
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
						<ul>
							<li>
								<a href="javascript:;">
									<div class="tj">
									<?php if($_SESSION['id'] == $shop['uid']){ ?>
									<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($shop["uid"]); ?>">
									<?php }else{ ?>
                                       <a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($shop["uid"]); ?>">
                                       <?php } ?>
										
										<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
										
										</a>
										
										
										<div class="tj_01">
											<p class="tj_01_01"><?php echo ($shop["shopname"]); ?></p>
											<p class="tj_01_02">商铺类型：<b style="color:#ccc; font-weight:500"><?php echo ($shop["type"]); ?></b></p>
											<p class="tj_01_02">收藏量：
												<b style="color:#ccc; font-weight:500"><?php echo ($shop["collect"]); ?></b>
											</p>

											<button id="btn" class="tj_01_03" onclick="change()">收藏商铺</button>
											<!--<p class="tj_01_03" style="margin-top:10px;">
												<button id="btn" onclick="change()">关注</button>
											</p>-->
										</div>

									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="s-c-ff">
						<div class="s-c-f1">
							<div class="s-c-f1-01">
								<p class="s-c-f1-01-01">商铺地址</p>
								<p class="s-c-f1-01-02"><?php echo ($shop["address"]); ?></p>
							</div>
							<div class="s-c-f1-02">
								<p class="s-c-f1-01-01">主营商品</p>
								<p class="s-c-f1-02-02"><?php echo ($shop["zysp"]); ?>
								</p>
							</div>
							<div class="s-c-f1-03">
								<p class="s-c-f1-03-01">手机号</p>
								<p class="s-c-f1-03-02"><?php echo ($shop["tel"]); ?></p>
								<p class="s-c-f1-03-01" style="margin-top:10px;">QQ号</p>
								<p class="s-c-f1-03-02"><?php echo ($shop["qq"]); ?></p>
								<p class="s-c-f1-03-01" style="margin-top:8px;"><?php echo ($v["wangzhan"]); ?></p>
								<p class="s-c-f1-03-03"><?php echo ($shop["lianjie"]); ?></p>
							</div>
						</div>
					</div>
     
				</div>

				<div class="s-main-l">

					<div class="s-c-2f">
						<div style="width: 850px;">
							<div class="s-f2l-c1">
								<ul>
									<li>
										<a class="selected-tab" href="javascript://">商品</a>
									</li>
									<!--<li>
										<a href="javascript://">出售商品</a>
									</li>-->
									<li>
										<a href="javascript://">留言区</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--<br>-->
					<div class="con">
						<div class="czsp">
							<ul>
								<?php if(is_array($shangpin)): foreach($shangpin as $key=>$v): ?><li>
									<img src="Uploads/Uploads/<?php echo ($v["pubtimes"]); ?>/<?php echo ($v["imagenames"]); ?>" width="254" height="150">
									<div class="czsp_01">
										<div class="czsp_01_00">
											<p class="czsp_01_01">￥<?php echo ($v["price"]); ?>元</p>
											<p class="czsp_01_02">浏览量<?php echo ($v["liulan"]); ?>次</p>
										</div>
										<p class="czsp_02"><?php echo ($v["content"]); ?></p>
									</div>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="con">
						<div class="s-c-4f">
							<p class="title">
								想问商铺主人问题？就来这里留言吧~
							</p>
							<div class="s-c-4f-1f">
						<textarea id="contents" name="contents"></textarea>
							</div>
							<div class="s-c-4f-2f">
							
								<button onclick="liuyan(<?php echo ($shop["uid"]); ?>)"  class="right">
									<p style="text-align:center">发留言</p>
								</button>
							</div>						
						</div>
							<script type="text/javascript">
								function liuyan(id){
									var p=id;
									//alert(p);
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
															var url='<a href="?s=/Home/Mtbu/grbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddndt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';	
														}
													}else{
														if(data[i].bdlx==1){
															var url='<a href="?s=/Home/Mtbu/grbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';
														}else if(data[i].bdlx==6){
															var url='<a href="?s=/Home/Mtbu/spbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';
														}else{
															var url='<a href="?s=/Home/Mtbu/rzbddydt/id/'+data[i].uid+'"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>';	
														}
													}
													
													
													li+=' <div class="s-c-3f-1f"><div><div class="yhtx">'+url+'<div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">用户'+use+'</a></p><p class="zwmc">性别：'+data[i].sex+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+' </p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span>--><div class="right dz-qx"><p onclick="zan('+data[i].id+','+data[i].zan+')" class="dz dz-qx">'+dianzan+'</span><span  id="s'+data[i].id+'">'+data[i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
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
						<div  id="li" class="s-c-3f">
				
							<?php if(is_array($list)): foreach($list as $key=>$lis): ?><div class="s-c-3f-1f">
							<!--<div class="mdhd">
								<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>-->
							<div>
						
								<div class="yhtx">
								    	<?php if($_SESSION['id'] == $lis['uid']){ ?>
									  <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($lis["uid"]); ?>">	<img src="/matouPCS/Public/Home/img/yhmc.png" /></a>
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($lis[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>
								<?php elseif($lis[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($lis["uid"]); ?>"><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><?php endif; ?>
                                       <?php } ?>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
									<div class="clearfloat"></div>
								</div>
								<p class="yhmc">
									<a href="">用户<?php echo (substr($lis["username"],0,5)); ?></a>
								</p>
								<p class="zwmc">
									性别：<?php echo ($lis["sex"]); ?>
								</p>
								<p class="szd">所在地：<?php echo ($lis["addre"]); ?></p>
								<div class="clearfloat"></div>
							</div>
							<p class="dtnr">
								<?php echo ($lis["contents"]); ?>
							</p>
							<div class="bottom">
								<p class="left"><?php echo ($lis["time"]); ?></p>
								<!--<span class="delete">
									<img src="/matouPCS/Public/Home/img/delete-2.png" />
								</span>-->
								<div class="right dz-qx">
									<p onclick="zan(<?php echo ($lis["id"]); ?>,<?php echo ($lis["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$lis['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($lis["id"]); ?>" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($lis["id"]); ?>" class="icon-dz"></span>
													<?php } ?>
													<span id="s<?php echo ($lis["id"]); ?>"><?php echo ($lis["zan"]); ?></span></p> 
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
								<p class="clearfloat"></p>
							</div>
							<div class="clearfloat"></div>
							
						</div><?php endforeach; endif; ?>
					</div>
					</div>
				</div>

			</div>

			<div class="clearfloat"></div>

			</div>

		</section>
		<br>
		<br>
		<br>
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
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
	<script src="/matouPCS/Public/Home/showWin.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".s-f2l-c1 ul li a").click(function() {
				var num = $(".s-f2l-c1 ul li a").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			})
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
			//----------------------------remove tab切换样式--------------------------
		$('.s-c-2f a').click(function() {
			$(this).parents('div').children('.s-f2l-c1').each(function() {
				$('a', this).removeClass('selected-tab');
			});
			$(this).attr('class', 'selected-tab');
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

		//收藏商铺
		function change() {
			var mark = document.getElementById('btn').innerText;
			if(mark == '收藏商铺') {
				document.getElementById('btn').innerText = "取消收藏";
			} else {
				document.getElementById('btn').innerText = "收藏商铺";
			};
		};
		
		//----------------------------点赞--------------------------
	
	</script>

</html>