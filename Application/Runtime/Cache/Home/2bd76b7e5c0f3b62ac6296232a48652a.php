<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>收藏报名</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/troop.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/showwin2.css" />
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
					<div class="h-c-2f">
						<img src="/matouPCS/Public/Home/img/navbg2.png" alt="" />
						<div class="s-f2-r">
							<input type="text" placeholder="搜索全站"/>
							<div class="s-f2-r1">
								<img src="/matouPCS/Public/Home/img/ss-t.png" alt="" />
							</div>
						</div>
					</div>
					<div class="h-c-3f-f">
						<h1>收藏报名</h1>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="s-main-c">
				<div class="s-c-1f-scj">
					<div class="left">
						<button id="bmxq" class="selected">已报名</button>
						<button id="scxq">已收藏需求</button>
						<button id="sp">已收藏商铺</button>
					</div>
					<div class="right">
						<div id="bmxq-lb" class="lb"><p>全部</p>
						<div class="bmxq-lb">
								<ul>
									<li>全部</li>
									<li>招聘</li>
									<li>悬赏</li>
									<li>求购</li>
								</ul>
							</div>
						</div>
						
						<div style="display: none;" id="scxq-lb" class="lb"><p>全部</p>
							<div class="scxq-lb">
								<ul>
									<li>全部</li>
									<li>应赏</li>
									<li>应聘</li>
									<li>闲置</li>
								</ul>
							</div>
						</div>
						
						<div style="display: none;" id="sp-lb" class="lb"><p>全部</p>
						<div class="sp-lb">
								<ul>
									<li>全部</li>
									<li>销售商</li>
									<li>租赁商</li>
									<li>婚车租赁</li>
								</ul>
							</div>
						</div>
						<div class="clearfloat"></div>
					</div>
					<div class="clearfloat"></div>
				</div>
				<div class="con" style="display: none;">
					<div class="s-c-3f-scj">
						<ul>
							<?php if(is_array($newUserZp)): foreach($newUserZp as $key=>$newUserZps): ?><li>
									<p class="hddd">
										<?php $ad_zp = explode(',',$newUserZps['address_zp']); ?>
										工作地点：<?php echo ($ad_zp[0]); ?>
									</p>
									<p class="xsnr">
										招聘内容：<?php if(is_array($newUserZp_xq)): foreach($newUserZp_xq as $key=>$newUserZp_xqs): if($newUserZp_xqs['pid'] == $newUserZps['rid']){ ?>
										<?php echo $newUserZp_xqs['type']; ?>
										<?php } endforeach; endif; ?>
									</p>
									<div class="clear"></div>
									<a href="">
										<div class="nr">
											<div class="left">
												<div class="yhtx">
													<img src="/matouPCS/Public/Home/img/bdmc.png" alt="" />
												</div>
												<p class="yhmc">
													用户<?php echo ($newUserZps["username"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="right">
												<p class="hf">
													请耐心等待。。。
												</p>
												<p class="rq">
													2017-01-01
												</p>
											</div>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
							<?php if(is_array($userIdle)): foreach($userIdle as $key=>$userIdles): $shou = explode(',',$userIdles['bao']); array_pop($shou);?>
							 	<?php if(in_array($_SESSION['id'],$shou)){ ?>
								<li>
									<p class="hddd">
										物品名称：<?php echo ($userIdles["name"]); ?>
									</p>
									<p class="xsnr">
										预算：<span class="red">￥<?php echo ($userIdles["price"]); ?>元</span>
									</p>
									<div class="clear"></div>
									<a href="">
										<div class="nr">
											<div class="left">
												<div class="yhtx">
													<img src="/matouPCS/Public/Home/img/bdmc.png" alt="" />
												</div>
												<p class="yhmc">
													用户<?php echo ($userIdles["username"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="right">
												<p class="hf">
													请耐心等待。。。
												</p>
												<!-- <p class="jj">
													拒绝
												</p> -->
												<p class="rq">
													2017-01-01
												</p>
											</div>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
							<?php if(is_array($newUserXs)): foreach($newUserXs as $key=>$newUserXss): ?><li>
									<p class="hdsj">
										活动时间：<?php echo ($newUserXss["time"]); ?>
									</p>
									<p class="hddd">
										<?php $ad = explode(',',$newUserXss['address']); ?>
										活动地点：<?php echo ($ad[0]); ?>
									</p>
									<p class="xsnr">
										<?php if(is_array($newUserXs_xq)): foreach($newUserXs_xq as $key=>$newUserXs_xqs): if($newUserXs_xqs['pid'] == $newUserXss['psid']){ ?>
											报名悬赏内容：<?php echo ($newUserXs_xqs["type"]); ?>
											<?php } endforeach; endif; ?>
									</p>
									<div class="clear"></div>
									<a href="">
										<div class="nr">
											<div class="left">
												<div class="yhtx">
													<img src="/matouPCS/Public/Home/img/bdmc.png" alt="" />
												</div>
												<p class="yhmc">
													用户<?php echo ($newUserXss["username"]); ?>
												</p>
												<div class="clearfloat"></div>
											</div>
											<div class="right">
												<p class="hf">
													请耐心等待。。。
												</p>
												<p class="rq">
													2017-01-01
												</p>
											</div>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
						</ul>
						<div class="djjzgd">
							<button>点击加载更多</button>
						</div>
					</div>
				</div>
				<div class="con" style="display: none;">
					<div class="s-c-2f-scj">
						<ul>
							<?php if(is_array($userYsSc)): foreach($userYsSc as $key=>$userYsScs): $ysXq = explode(',',$userYsScs['due_shou']); array_pop($ysXq); ?>
								<?php if(in_array($_SESSION['id'],$ysXq)){ ?>
								<li>
									<a href="?s=/Home/Ysq/xqys/id/<?php echo ($userYsScs["did"]); ?>">
										<div class="s-c-2f-scj-1f">
											<div class="yhtx">
												<?php if($userYsScs[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img src="/MatouPCS/Tu/upload/<?php echo ($userYsScs["imagename"]); ?>" alt="" /><?php endif; ?>
											</div>
											<p class="yhmc"><?php echo ($userYsScs["username"]); ?></p>
											<?php  $add_ysad = explode(',',$userYsScs['address']);?>
											<p class="szd">所在地：<?php echo ($add_ysad[0]); ?></p>
											<button>应赏</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-scj-2f">
											<div>
												<p><?php echo ($userYsScs["name"]); ?></p>
												<p class="age"><?php echo ($userYsScs["age"]); ?>岁</p>
												<p class="grjl"><span class="black-333">个人简历：</span><?php echo ($userYsScs["content"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div>
												<p><?php echo ($userYsScs["type_d"]); ?></p>
												<?php $imgnum = explode(',',$userYsScs['imagename_z']); $vidnum = explode(',',$userYsScs['imagename_v']); $dang = explode(',',$userYsScs['dangdate']); $dangs = explode(',',$userYsScs['dangs']); $ss = explode(',',$userYsScs['due_shou']); array_pop($imgnum); array_pop($vidnum); array_pop($dang); array_pop($dangs); array_pop($ss); $imgnums = count($imgnum); $vidnums = count($vidnum); $sss = count($ss); ?>
												<p class="zpzp"><span class="black-333">照片作品：</span><?php echo ($imgnums); ?>个</p>
												<p class="spzp"><span class="black-333">视频作品：</span><?php echo ($vidnums); ?>个</p>
												<p class="dq"><span class="black-333">档期：</span><?php echo $dang[1];echo $dangs[1];?>&nbsp;&nbsp;......</p>
												<p class="jg"><?php echo ($userYsScs["price"]); ?>元/天</p>
												<div class="clearfloat"></div>
											</div>
										</div>
										<div class="s-c-2f-scj-3f">
											<p class="fbsj"><?php echo ($userYsScs["date"]); ?></p>
											<p class="sc">已有<?php echo ($sss); ?>人收藏</p>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
							<?php if(is_array($userYpSc)): foreach($userYpSc as $key=>$userYpScs): $ypXq = explode(',',$userYpScs['em_shou']); array_pop($ypXq); ?>
								<?php if(in_array($_SESSION['id'],$ypXq)){ ?>
								<li>
									<a href="">
										<div class="s-c-2f-scj-1f">
											<div class="yhtx">
												<?php if($userYsScs[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img src="/MatouPCS/Tu/upload/<?php echo ($userYsScs["imagename"]); ?>" alt="" /><?php endif; ?>
											</div>
											<p class="yhmc"><?php echo ($userYpScs["username"]); ?></p>
											<p class="szd">所在地：<?php echo ($userYpScs["address"]); ?></p>
											<p class="qwzw">期望职位：<?php echo ($userYpScs["type"]); ?></p>
											<button>应聘</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-scj-2f">
											<div>
												<p><?php echo ($userYpScs["name"]); ?></p>
												<p class="age"><?php echo ($userYpScs["ages"]); ?>岁</p>
												<p class="gzjy">工作经验：<?php echo ($userYpScs["worktimes"]); ?>年</p>
												<p class="grjl-yp"><span class="black-333">个人简历：</span><?php echo ($userYpScs["content"]); ?></p>
												<p class="zw-yp"><?php echo ($userYpScs["type_u"]); ?></p>
												<div class="clearfloat"></div>
											</div>
												<div>
													<p class="gzsj"><span class="black-333">工作时间：</span><?php echo ($userYpSc_work[0]['worktime']); ?></p>
													<p class="spzp"><span class="black-333">所在公司：</span><?php echo ($userYpSc_work[0]['workname']); ?></p>
													<p class="spzp"><span class="black-333">职位：</span><?php echo ($userYpSc_work[0]['typew']); ?></p>
													<!--<p class="jg">￥500-￥700天</p>-->
													<div class="clearfloat"></div>
												</div>
										</div>
										<div class="s-c-2f-scj-3f">
											<p class="fbsj"><?php echo ($userYpScs["date"]); ?></p>
											<?php $shou = explode(',',$lists['em_shou']); array_pop($shou); $shous = count($shou); ?>
											<p class="sc">已有<?php echo ($shous); ?>人收藏</p>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
							<?php if(is_array($userXzSc)): foreach($userXzSc as $key=>$userXzScs): $xzShou = explode(',',$userXzScs['shou']); array_pop($xzShou); ?>
								<?php if(in_array($_SESSION['id'],$xzShou)){ ?>
								<li>
									<a href="">
										<div class="s-c-2f-scj-1f">
											<div class="yhtx">
												<?php if($userYsScs[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img src="/MatouPCS/Tu/upload/<?php echo ($userYsScs["imagename"]); ?>" alt="" /><?php endif; ?>
											</div>
											<p class="yhmc"><?php echo ($userXzScs["username"]); ?></p>
											<p class="szd">所在地：<?php echo ($userXzScs["address"]); ?></p>
											<button>闲置</button>
											<div class="clearfloat"></div>
										</div>
										<div class="s-c-2f-scj-2f">
											<div>
												<p>物品名称：<span class="black-333"><?php echo ($userXzScs["name"]); ?></span></p>
												<p class="ys"><span class="black-333">报价：</span>￥<?php echo ($userXzScs["price"]); ?></p>
												<div class="clearfloat"></div>
											</div>
											<div>
												<p class="xzjj"><span class="black-333">闲置简介：</span><?php echo ($userXzScs["content"]); ?></p>
												<div class="clearfloat"></div>
											</div>
										</div>
										<div class="s-c-2f-scj-3f">
											<p class="fbsj"><?php echo ($userXzScs["date"]); ?></p>
											<?php $shou_xz = explode(',',$userXzScs['shou']); array_pop($shou_xz); $shous_xz = count($shou_xz); ?>
											<p class="sc">已有<?php echo ($shous_xz); ?>人收藏</p>
											<div class="clearfloat"></div>
										</div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
						</ul>
						<div class="djjzgd">
							<button>点击加载更多</button>
						</div>
					</div>
				</div>
				<div class="con" style="display: none;">
					<div class="s-c-4f-scj">
						<ul>
							<?php if(is_array($userSpSc)): foreach($userSpSc as $key=>$userSpScs): $spShou = explode(',',$userSpScs['shou']); array_pop($spShou); ?>
								<?php if(in_array($_SESSION['id'],$spShou)){ ?>
								<li>
									<a href="">
										<div class="left">
											<div class="sptx">
												<img src="img/sptx.png" alt="" />
												<?php if($userSpScs[imagename]==''): ?><img style="width:100px;" src="/matouPCS/Public/Home/img/yhmc.png" alt="" />
			                                   <?php else: ?>
			                                     	<img style="width:100px;" src="/MatouPCS/Tu/upload/<?php echo ($userSpScs["imagename"]); ?>" alt="" /><?php endif; ?>
											</div>
											<div class="sp">
												<p><?php echo ($userSpScs["shopname"]); ?></p>
												<div class="bottom">
													<p class="xss"><?php echo ($userSpScs["type"]); ?></p>
													<?php $sp_shou = explode(',',$userSpScs['shou']); array_pop($sp_shou); $sp_shou_num = count($sp_shou); ?>
													<p class="sc">收藏<?php echo ($sp_shou_num); ?></p>
												</div>
											</div>
											<div class="clearfloat"></div>
										</div>
										<div class="right">
											<p class="dpdz">
												<span class="black-333">店铺地址：</span><?php echo ($userSpScs["address"]); ?>
											</p>
											<div class="clearfloat"></div>
											<div class="bottom">
												<p class="zysp">
													<span class="black-333">主营商品：</span> <?php echo ($userSpScs["zysp"]); ?>
												</p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</a>
								</li>
								<?php } endforeach; endif; ?>
						</ul>
						<div class="djjzgd">
							<button>点击加载更多</button>
						</div>
					</div>
				</div>
			</div>

		</section>
		<?php	include '3rank-footer.php';?>
	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script src="/matouPCS/Public/Home/js/showwin2.js"></script>
	<script src="/matouPCS/Public/Home/js/troop.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
</html>