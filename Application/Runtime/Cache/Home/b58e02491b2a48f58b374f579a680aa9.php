<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>商铺主页</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/cjspcg-3r-cc.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showWin.css" />
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
						<img src="/matouPCS/Public/Home/img/navbg3.png" alt="" />
						<div class="s-f2-r">
							<input placeholder="搜索全站" type="text" class="find3" />
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-main-r right-tx">
					<div class="s-c-1f-r">
						<ul>
							<li>
									<?php if($_SESSION['id'] == $shop['uid']){ ?>
									<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($shop["uid"]); ?>">
									<?php }else{ ?>
                                       <a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($shop["uid"]); ?>">
                                       <?php } ?>
									<div class="tj">
									<?php if($shop[imagename]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png" alt="" width="101" height="101">
                                   <?php else: ?>
                                     <img style="border-radius:50%" width="101" height="101" src="/matouPCS/Tu/upload/<?php echo ($shop["imagename"]); ?>"  /><?php endif; ?>
								</a>
										<div class="tj_01">
											<strong class="tj_01_01"><?php echo ($shop["shopname"]); ?></strong>
											<p class="tj_01_02">商铺类型：<span class="fz1"><?php echo ($shop["type"]); ?></span></p>
											<p class="tj_01_02">收藏量：
												<span class="fz1"><?php echo ($shop["collect"]); ?></span>
											</p>
                                           <?php if($_SESSION['id'] == $shop['uid']){ ?>
                                           		<a href="?s=/Home/Mtbu/spgl" class="tj_01_06">管理商铺</a>							
											<?php }else{ ?>
													<?php $shou = explode(",",$shop['shou']);array_pop($shou); if(in_array($_SESSION['id'],$shou)){ ?>
												<button id="btns" class="tj_01_03" onclick="change(<?php echo ($_GET['id']); ?>)">取消收藏</button>
											<?php }else{ ?>
												<button id="btns" class="tj_01_03" onclick="change(<?php echo ($_GET['id']); ?>)">收藏商铺</button>
											<?php } ?>
											     <?php } ?>
										</div>

									</div>
								
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

				<div class="s-main-l left">

					<div class="s-c-2f-qh">
						<div class="2fb">
							<div class="s-f2l-c1">
								<ul>
									<li class="selected-tab">
										<a rel="nofollow" href="javascript://">
											<h2>出租商品</h2>
										</a>
									</li>
									<li>
										<a rel="nofollow" href="javascript://">
											<h2>出售商品</h2>
										</a>
									</li>
									<li>
										<a rel="nofollow" href="javascript://">
											<h2>留言区</h2>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="s-f2l-c2">
							<input type="text" placeholder="搜索该店铺商品" />
							<button></button>
						</div>
						<div class="clearfloat"></div>
					</div>
					<div class="con">
						<div class="czsp">
							<ul>
								<?php if(is_array($shangpinz)): foreach($shangpinz as $key=>$vz): ?><li>
									<img src="Uploads/Uploads/<?php echo ($vz["pubtimes"]); ?>/<?php echo ($vz["imagenames"]); ?>" width="254" height="150">
									<div class="czsp_01">
										<div class="czsp_01_00">
										  <p class="czsp_01_01">￥<?php echo ($vz["price"]); ?>元</p>
											<p class="czsp_01_02">浏览量<?php echo ($vz["liulan"]); ?>次</p>
										</div>
										<p class="czsp_02">
											<span class="black-333">商品介绍：</span><?php echo ($vz["content"]); ?>
										</p>
									</div>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="con">
						<div class="czsp">
							<ul>
							<?php if(is_array($shangpins)): foreach($shangpins as $key=>$vs): ?><li>
									<img src="Uploads/Uploads/<?php echo ($vs["pubtimes"]); ?>/<?php echo ($vs["imagenames"]); ?>" width="254" height="150">
									<div class="czsp_01">
										<div class="czsp_01_00">
										  <p class="czsp_01_01">￥<?php echo ($vs["price"]); ?>元</p>
											<p class="czsp_01_02">浏览量<?php echo ($vs["liulan"]); ?>次</p>
										</div>
										<p class="czsp_02">
											<span class="black-333">商品介绍：</span><?php echo ($vs["content"]); ?>
										</p>
									</div>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="con">
						<div class="s-c-4f-ly">
							<p class="title">
								想问商铺主人问题？就来这里留言吧~
							</p>
							<div class="s-c-4f-ly-1f">
							<textarea id="contents" name="contents"></textarea>
							</div>
							<div class="s-c-4f-ly-2f">
								<button  onclick="liuyan(<?php echo ($shop["uid"]); ?>)" class="right-ly">
									发留言
								</button>
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
												//alert(id)
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
														var img='<img src="/matouPCS/Public/Home/img/pltx.png" alt="" />';
													}else{
												     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i].imagename+'" /> ';
													}
													li+=' <div class="s-c-3f-1f"><div><div class="yhtx">'+url+img+'</a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">用户'+use+'</a></p><p class="zwmc">职位名称：'+data[i].type_u+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+' </p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span>--><div class="right dz-qx"><p onclick="zan('+data[i].id+','+data[i].zan+')" class="dz dz-qx">'+dianzan+'</span><span  id="s'+data[i].id+'">'+data[i].zan+'</span></p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
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
								<div>
									<div class="yhtx">
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
											 <?php if($lis[imagename]==''): ?><img src="/matouPCS/Public/Home/img/pltx.png" alt="" />
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/<?php echo ($lis["imagename"]); ?>"  /><?php endif; ?>
										</a>
										<div class="vip">
											<img src="/matouPCS/Public/Home/img/rzlogo.png" alt="" />
										</div>
										<div class="clearfloat"></div>
									</div>
									<p class="yhmc">
									<?php if($lists[tel]==$lists[username]): ?>用户<?php echo (substr($lis["username"],0,5)); ?>
				                  	<?php else: ?>
				            	   用户<?php echo ($lis["username"]); endif; ?>
									</p>
									<p class="zwmc">
										职位名称：<?php echo ($lis["type_u"]); ?>
									</p>
									<p class="szd">所在地：<?php echo ($lis["addre"]); ?></p>
									<div class="clearfloat"></div>
								</div>
								<p class="dtnr">
										<?php echo ($lis["contents"]); ?>
								</p>
								<div class="bottom">
									<p class="left"><?php echo ($lis["time"]); ?></p>
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
				//收藏商铺
		function change(id) {  
			var mark = document.getElementById('btns').innerText;
			if(mark == '收藏商铺') {
				$.ajax({
					url:'?s=/Home/Tjcs/spxq_shou/id/'+id,
					type:'get',
					success:function(data){
						document.getElementById('btns').innerText = "取消收藏";
					},error:function(){
						alert('no');
					}
				});
			} else {
				document.getElementById('btns').innerText = "收藏商铺";
			};
		};				
		</script>
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
	<script src="/matouPCS/Public/Home/js/showWin.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>

</html>