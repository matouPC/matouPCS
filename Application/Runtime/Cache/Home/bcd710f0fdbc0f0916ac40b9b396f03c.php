<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>闲置详情</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xq-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.fs.boxer.css" />
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
							<img src="/matouPCS/Public/Home/img/navbg2.png" alt="" />
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
		<div class="spdl" id="spdl" title="消息">
			<div class="spdl-c">
				<span>查看需要消耗5个码头币</span>
				<a href="#">请充值</a>
			</div>
			<button class="spdl-ok" id="spdl-ok">确定</button>
			<button class="spdl-esc" id="spdl-esc">取消</button>
		</div>
		<section>
			<div class="s-main-c">
				<div class="s-main-r">
					<div class="userin">
						<div class="u-img">
								<?php if($_SESSION['id'] == $list['uid']){ ?>
									  <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($list["uid"]); ?>">
								  <?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                        	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?>
								</a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($list["uid"]); ?>">  
								<?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                        	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($list["uid"]); ?>">
								  <?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?></a><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($list["uid"]); ?>">
								  <?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?></a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($list["uid"]); ?>">
								  <?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                      	  	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($list["uid"]); ?>">  
								<?php if($list[imagename]==''): ?><img src="/matouPCS/Public/Home/img/tx2-3r.png" />
                                      <?php else: ?>
                                    	<img src="/matouPCS/Tu/upload/<?php echo ($list["imagename"]); ?>"  alt="" /><?php endif; ?></a><?php endif; ?>
                                       <?php } ?>
						</div>
						<div class="u-cont">
							<p class="tfs14"><strong><?php if($list[username]==$list[tel]): ?>用户<?php echo (substr($list["username"],0,5)); endif; ?>
								               <?php if($list[username]!=$list[tel]): ?>用户<?php echo ($list["username"]); endif; ?></strong></p>
							<p class="tfs12">职位：<?php echo ($list["type_u"]); ?></p>
								<p style="font-size: 12px;margin-top: 10px;">所在地：<?php echo ($list["addre"]); ?></p>
							
								   	<?php if($_SESSION['id'] == $list['uid']){ ?>
									  <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($list["uid"]); ?>"><button>进入Ta的主页</button></a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($list["uid"]); ?>"><button>进入Ta的主页</button></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($list["uid"]); ?>"><button>进入Ta的主页</button></a><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($list["uid"]); ?>"><button>进入Ta的主页</button></a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($listt["uid"]); ?>"><button>进入Ta的主页</button></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($list["uid"]); ?>"><button>进入Ta的主页</button></a><?php endif; ?>
                                       <?php } ?>
						</div>
					</div>
					<br>
					<div class="bdsz">
						<div class="bdsz-bt">
							闲置详情
						</div>
						<ul>
							<li class="selected-con">
								<a rel="nofollow" href="javascript://">
									<h2>基本信息</h2>
								</a>
							</li>
							<li>
								<a rel="nofollow" href="javascript://">
									<h2>闲置信息</h2>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="s-main-l">
					<div class="s-c-2f">
						<div class="s-c-8f-1f">
							<h2>基本信息</h2>
						</div>
						<div class="s-2f-c2">
							<div class="c2-ct1">
								<p><span class="xqcc-c0">所在地：</span><span class="xqcc-c3"><?php echo ($list["address"]); ?></span></p>
								<p><span class="xqcc-c0">QQ号码：</span><span class="xqcc-c3"><?php echo ($list["qqs"]); ?></span></p>
							</div>
							<div class="c2-ct2">
								<p id="spdl-p"><span class="xqcc-c0">联系电话：</span><span class="xqcc-c3" ><?php echo (substr($list["tels"],0,3)); ?>XXXX<?php echo (substr($list["tels"],8,11)); ?></span></p><button id="sp">查看号码 </button>
								<input type="hidden" id="xp" value="<?php echo ($list["tels"]); ?>">
							</div>
						</div>
						<br>
					</div>
					<div class="s-c-2fb">
						<div class="s-c-8f-1f">
							<h2>闲置信息</h2>
						</div>
						<div class="xqwc">
							<div class="xqcc">
								<p class="xqcc-c">
									<span class="xqcc-c0">闲置名称：</span><span class="xqcc-c3"><?php echo ($list["name"]); ?></span><span class="xqcc-c1">价格：</span><span class="xqcc-c3"><?php echo ($list["price"]); ?>k</span>
								</p>
								<p class="xqcc-c"><span class="xqcc-c0">闲置介绍：</span><span class="xqcc-c2"><?php echo ($list["content"]); ?>...
									<br />
								<div class="fgx"></div>
								<?php  $file = explode(',',$list['imagenames']); array_pop($file); ?>
								<?php for ($i=0; $i < count($file); $i++) { ?>
								<img style="width:140px;height:140px;" class="xqcc-c5" src="<?php echo '/matouPCS/Uploads/'.substr($file[$i],1); ?>" />
								<?php } ?>
								</span>
								</p>
								<p class="xqcc-c">

								</p>
							</div>
							<div class="clearfloat "></div>
						</div>
						
					</div>

					<div class="s-c-4f-2">
						<div class="s-tf-btn">
							<p>分享
							</p>
							<img src="/matouPCS/Public/Home/img/xzfx.png" alt="" />
						</div>
								<?php if($_SESSION['id'] != ''){ ?>
						<div class="s-tf-btn" onclick="shou(<?php echo ($list["fid"]); ?>)" style="margin-left: 5px;" id="bt-sc">
							<?php  $shou = explode(',',$list['shou']); array_pop($shou); ?>
							 <?php if(in_array($_SESSION['id'],$shou)){ ?>
							<p id="bt-scs">&nbsp;已收藏
							</p>
							<?php }else{?>
							<p id="bt-scs">收藏</p>
							<img src="/matouPCS/Public/Home/img/sc.png" style="top: 14px;">
							<?php }?>
							
						</div>
						<?php }else{ ?>
							<div class="s-tf-btn" onclick="alert('请先登录')" style="margin-left: 5px;" >
							<p>收藏
							</p>
							<img src="/matouPCS/Public/Home/img/sc.png" style="top: 14px;">
							
						</div>
						<?php } ?>
						<div class="clearfloat "></div>
					</div>
					<div class="s-c-5f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<p>留言板</p>
						</div>
						<div class="s-2f-c2">
							<textarea class="lyk" id="content_x" placeholder="留言吧"></textarea>
							<button class="lybtn" onclick="liuyan(<?php echo ($list["fid"]); ?>,<?php echo ($list["uid"]); ?>)" >我要留言</button>
						</div>
						<br>
					</div>
						<script type="text/javascript">
							function liuyan(xsid,fid){
								//获得基本信息id
								var content = $('#content_x').val();
								if(content == ''){
									alert('滚犊子');
								}else{
									$.ajax({
										url:"?s=/Home/User/liuyan",
										type:"post",
										data:{xsid:xsid,content:content,fid:fid},
										dataType:"json",
										success:function(data){
											console.log(data);
											$('#content').val('');
											var content = '';
											for (var i = 0; i < data.length; i++) {
												if(data[i].username==data[i].tel){
													var use = data[i].username.substr(0,5);
												}else{
											     var use = data[i].username;
												}
												if(data[i].imagename==''){
													var img='<img src="/matouPCS/Public/Home/img/pltx.png" alt="" />';
												}else{
											     var img = '<img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/'+data[i].imagename+'" /> ';
												}
												content += '<div class="s-5f-c1"><div class="s-5f-c1-1-c1" style="border: 0 solid #fff;margin-top: 10px;"><div class="s-5f-c1-1-c1img">'+img+'</div><div class="s-5f-c1-1-c1p1">用户名称：'+use+'</div><div class="s-5f-c1-1-c1p2">所在地：'+data[i]['addre']+'</div></div><div class="s-5f-c1-1"><div class="s-5f-c1-1-c1">'+data[i]['contents']+'</div>'+data[i]['ltime']+'</div></div>';
											};
											// $('#ll').remove();
											$('#s-c-5f').html(content);
										},error:function(){
											alert('no');
										}});
								}
								
							}
						</script>
	
				<div id="s-c-5f" class="s-c-5f">
					<?php if(is_array($liu)): foreach($liu as $key=>$lius): ?><div class="s-5f-c1">
							<div class="s-5f-c1-1-c1b">
								<div class="s-5f-c1-1-c1img">
								
	                        <?php if($lius[imagename]==''): ?><img src="/matouPCS/Public/Home/img/pltx.png" alt="" />
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/<?php echo ($lius["imagename"]); ?>"  /><?php endif; ?>
								
								</div>
								<div class="s-5f-c1-1-c1p1">
					<?php if($lius[tel]==$lius[username]): ?>用户<?php echo (substr($lius["username"],0,5)); ?>
					<?php else: ?>
					用户<?php echo ($lius["username"]); endif; ?></div>
								<div class="s-5f-c1-1-c1p2">所在地：<?php echo ($lius["addre"]); ?></div>
							</div>
							<div class="s-5f-c1-1">
								<div class="s-5f-c1-1-c1">
									<?php echo ($lius["contents"]); ?>
								</div>
							<span id="wx<?php echo ($lius["id"]); ?>"><?php echo ($lius['ltime']); ?></span>
							</div>
							
						</div><?php endforeach; endif; ?>
					</div>
					<div class="clearfloat "></div>
				</div>
				<div class="clearfloat "></div>
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
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script src="/matouPCS/Public/Home/js/showwin.js"></script>
	<script src="/matouPCS/Public/Home/js/jquery.fs.boxer.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
<script>
function shou(fid){
	// alert($("#bt-scs").html());
	if($("#bt-scs").html() == '收藏'){
		$.ajax({
			url:"?s=/Home/Tzsc/shou/fid/"+fid,
			type:"get",
			success:function(data){
				alert(data);
				$("#bt-sc").text("已收藏");
				$("#bt-sc").css("text-align", "center");
				$("#bt-sc img").hide();
			},error:function(){
				alert('no');
			}
		});
	}
	
}

</script>
</html>