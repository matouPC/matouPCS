<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>闲置详情</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/xqxz-3r-zy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
		<div class="spdl" id="spdl" title="消息">
			<div class="spdl-c">
				<span>查看需要消耗5个码头币</span>
				<a href="#">请充值</a>
			</div>
			<button class="spdl-ok" id="spdl-ok">确定</button>
			<button class="spdl-esc" id="spdl-esc">取消</button>
		</div>
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
					<div class="userin">
						<div class="u-img">
							   	<?php if($_SESSION['id'] == $list['uid']){ ?>
									  <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddndt/id/<?php echo ($list["uid"]); ?>">	<img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($list["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddndt/id/<?php echo ($list["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a><?php endif; ?>
									<?php }else{ ?>
                                        <?php if($list[bdlx]=='1'): ?><a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($list["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php elseif($list[bdlx]=='6'): ?>
								<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($list["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a>
								<?php else: ?>
								<a href="?s=/Home/Mtbu/rzbddydt/id/<?php echo ($list["uid"]); ?>"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /></a><?php endif; ?>
                                       <?php } ?>
						</div>
						<div class="u-cont">
							<p style="font-size: 14px;"><strong><a href="#">
	                                     <?php if($list[username]==$list[tel]): ?>用户<?php echo (substr($list["username"],0,5)); endif; ?>
								               <?php if($list[username]!=$list[tel]): ?>用户<?php echo ($list["username"]); endif; ?></a></strong></p>
							<p style="font-size: 12px;margin-top: 10px;">
							<?php if($list[bdlx]==1): ?>类型：个人部队
								<?php elseif($list[bdlx]==2): ?>
								类型：婚庆公司
								<?php elseif($list[bdlx]==3): ?>
								类型：工作室
								<?php elseif($list[bdlx]==4): ?>
								类型：影楼
								<?php elseif($list[bdlx]==5): ?>
								类型：表演团
								<?php else: ?>
								类型：商铺部队<?php endif; ?></p>
							<p style="font-size: 12px;margin-top: 10px;">所在地：<?php echo ($list["address"]); ?></p>
				  
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
								<a href="javascript://">
									基本信息
								</a>
							</li>
							<li>
								<a href="javascript://">
									闲置信息
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="s-main-l">
					<div class="s-c-2f" style="height: 85px;">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<p><strong>基本信息</strong></p>
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
					<div class="s-c-2f" style="border-bottom: 0px;">
						<div class="s-2f-c1" style="height: 40px;">
							<span class="hfx"></span>
							<p><strong>闲置信息</strong></p>
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

					<div class="s-c-4f">
						<div class="s-tf-btn" style="margin-right: 5px;">
							<p>分享
							</p>
							<img src="/matouPCS/Public/Home/img/xzfx.png" />
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
					<br>
					<br>
					<div class="s-c-5f">
						<div class="s-2f-c1">
							<span class="hfx"></span>
							<p>留言区</p>
						</div>
						<div class="s-2f-c2">
<<<<<<< HEAD
							<textarea style="resize: none;width: 832px;height: 102px; padding:8px;color: #333; border: solid 1px #DEDEDE;"  id="contentt" placeholder="留言吧"></textarea>
							<button class="lybtn" onclick="liuyan(<?php echo ($list["fid"]); ?>,<?php echo ($list["uid"]); ?>)" >我要留言</button>
=======

							<textarea style="resize: none;width: 832px;height: 102px; padding:8px;color: #333; border: solid 1px #DEDEDE;"  id="content_x" placeholder="留言吧"></textarea>
							<button class="lybtn" onclick="liuyan(<?php echo ($list["fid"]); ?>,<?php echo ($list["uid"]); ?>)" >我要留言</button>

>>>>>>> 706bcda07b6b78ee01ffa618e087c090c5e2e8f0
						</div>
						<br>
						<script type="text/javascript">
							function liuyan(xsid,fid){
								//获得基本信息id
<<<<<<< HEAD
								var content = $('#contentt').val();
=======
<<<<<<< HEAD
=======

								var content = $('#content_x').val();

<<<<<<< HEAD
=======
=======
>>>>>>> ecac97798ff9fa7ada481945b7e21c9e572fe0b9
								var content = $('#contentt').val();
>>>>>>> 6cd88e7931464c4ca860f2fdbe30c951f7add0ac
>>>>>>> e68f8276d68e538a66dbd665bd4a306ce2123c44
>>>>>>> 706bcda07b6b78ee01ffa618e087c090c5e2e8f0
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
												var username = data[i].username;
												content += '<div class="s-5f-c1"><div class="s-5f-c1-1-c1" style="border: 0 solid #fff;margin-top: 10px;"><div class="s-5f-c1-1-c1img"><img src="/matouPCS/Public/Home/img/pltx.png" /></div><div class="s-5f-c1-1-c1p1">用户名称：'+username.substr(0,5)+'</div><div class="s-5f-c1-1-c1p2">所在地：'+data[i]['addre']+'</div></div><div class="s-5f-c1-1"><div class="s-5f-c1-1-c1">'+data[i]['contents']+'</div>'+data[i]['ltime']+'</div></div>';
											};
											// $('#ll').remove();
											$('#s-c-5f').html(content);
										},error:function(){
											alert('no');
										}});
								}
								
							}
						</script>
					</div>
					<div id="s-c-5f" class="s-c-5f">
						<?php if(is_array($liu)): foreach($liu as $key=>$lius): ?><div class="s-5f-c1"><div class="s-5f-c1-1-c1" style="border: 0 solid #fff;margin-top: 10px;"><div class="s-5f-c1-1-c1img"><img src="/matouPCS/Public/Home/img/pltx.png" /></div><div class="s-5f-c1-1-c1p1">用户名称：<?php echo (substr($lius["username"],0,5)); ?></div><div class="s-5f-c1-1-c1p2">所在地：<?php echo ($lius["addre"]); ?></div></div><div class="s-5f-c1-1"><div class="s-5f-c1-1-c1"><?php echo ($lius["contents"]); ?></div><span id="wx<?php echo ($lius["id"]); ?>"><?php echo ($lius['ltime']); ?></span></div></div><?php endforeach; endif; ?>
					</div>
					
					<div class="clearfloat "></div>
				</div>
				<div class="clearfloat "></div>
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
						
						<p>© 2016－2017 郑州码头网络技术有限公司 </p>
						<a href="http://www.miitbeian.gov.cn"><p>豫ICP备16015506号</p></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

	</body>
	<script src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js "></script>
	<script src="/matouPCS/Public/Home/js/jquery.bigautocomplete.js "></script>
	<script type="text/javascript ">
		$(document).ready(function() {
			$(".con ").eq(0).show();
			$(".bdsz ul li ").click(function() {
				var num = $(".bdsz ul li ").index(this);
				$(".con ").hide();
				$(".con ").eq(num).show().slblings().hide();
			})
		});
		//----------------------------remove tab切换样式--------------------------
		$('.bdsz li').click(function() {
			$(this).parents('.s-main-r').children('.bdsz').each(function() {
				$('li', this).removeClass('selected-con');
			});
			$(this).attr('class', 'selected-con');
		});
		$(function() {

				$("#tt ").bigAutocomplete({
					width: 440,
					data: [{
						title: "中国好声音 ",
						result: {
							ff: "qq "
						}
					}, {
						title: "中国移动网上营业厅 "
					}, {
						title: "中国银行 "
					}, {
						title: "中国移动 "
					}, {
						title: "中国好声音第三期 "
					}, {
						title: "中国好声音 第一期 "
					}, {
						title: "中国电信网上营业厅 "
					}, {
						title: "中国工商银行 "
					}, {
						title: "中国好声音第二期 "
					}, {
						title: "中国地图 "
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
		//		新增
		$(function() {
			$("#hfx3-1").click(function() {
				$(".txfg1-c2-1").hide();
				//				$(".txfg1-c1-1").hide();
				$(".txfg1").css("height", "auto");
				$(".txfg1").append('<div class="s-c-3f"><div class="s-2f-c1"><span class="hfx"></span><p>悬赏信息1</p><p class="adds-f-c" id="adds-f-c1">添加悬赏</p><div class="del-f-c" id="del-f-c1"><img src="/matouPCS/Public/Home/img/delete-2.png" /></div></div><div class="s-2f-c2"><ul><li><div class="s-2f-c2ul-l"><samp>*</samp>&nbsp;悬赏职位&nbsp;</div><div class="s-2f-c2ul-r"><input type="text" style="width: 132px;height: 28px;border: 1px solid #000;position: relative;top: -2px;"><input type="text" style="width: 205px;height: 28px;border: 1px solid #000;position: relative;top: -2px;left: 10px;"></div></li><li><div class="s-2f-c2ul-l"><samp style="display: block;width: 30px;height: 30px;float: left;text-align: left;">*</samp>&nbsp;性&nbsp;别&nbsp;</div><div class="s-2f-c2ul-r"><samp style="display: block;width: 60px;margin-top:2px;float: left;margin-left: 30px;"><input type="radio" style="margin-right: 8px;"/>男 </samp><samp style="display: block;width: 60px;margin-top:2px;float: left;"><input type="radio" style="margin-right: 8px;"/>女 </samp><samp style="display: block;width: 60px;margin-top:2px;float: left;"><input type="radio" style="margin-right: 8px;"/>不限 </samp></div></li><li><div class="s-2f-c2ul-l"><samp style="display: block;width: 30px;height: 30px;float: left;text-align: left;">*</samp>&nbsp;年&nbsp;龄&nbsp;</div><div class="s-2f-c2ul-r"><input type="text" style="width: 200px;height: 28px;border: 1px solid #000;position: relative;top: -2px;"></div></li><li><div class="s-2f-c2ul-l"><samp style="display: block;width: 30px;height: 30px;float: left;text-align: left;">*</samp>&nbsp;赏&nbsp;金&nbsp;</div><div class="s-2f-c2ul-r"><input type="text" style="width: 132px;height: 28px;border: 1px solid #000;position: relative;top: -2px;">&nbsp;元/天 </div></li><li><div class="s-2f-c2ul-l"><samp>*</samp>&nbsp;报销路费&nbsp;</div><div class="s-2f-c2ul-r"><samp style="display: block;width: 60px;margin-top:2px;float: left;margin-left: 30px;"><input type="radio" style="margin-right: 8px;"/>是 </samp><samp style="display: block;width: 60px;margin-top:2px;float: left;"><input type="radio" style="margin-right: 8px;"/>否 </samp></div></li><li><div class="s-2f-c2ul-l"><samp>*</samp>&nbsp;具体要求&nbsp;</div><div class="s-2f-c2ul-r"><textarea style="width: 348px;height: 110px;border: 1px solid #000;position: relative;top: -0px;"></textarea></div></li></ul></div></div>');
				$("#adds-f-c1").on("click", function() {
					$(".s-c-3f").detach();
					$(".txfg1").css("height", "125px");
					$(".txfg1-c2-1").show();

				})
			})

		});
		//查看号码
		$(function() {
			$("#sp").click(function() {
				//				alert("充值")
				$("#spdl").show();
			});
			$("#spdl-ok").click(function() {
				var xp = $('#xp').val();
				$("#spdl-p").text("联系电话："+xp);
				$("#spdl .spdl-c").html('<span>支付成功<br>3秒后自动关闭</span>');
				//				<input type="text"  class="time" id="stime">
				if($("#spdl .spdl-c span").text() == "支付成功3秒后自动关闭") {
					//					$("#id").value = "5"
					//					c = c-1
					setTimeout(function() {
						$(".spdl").hide();
					}, 3000);
				}
			});
			$("#spdl-esc").click(function() {
				$(".spdl").hide();
			});
		});
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
		//弹窗2
		$(function() {
			$("#find").click(function() {
				//								alert("充值")
				$("#spdlb").fadeIn(350).show();
				$(".show-bg").fadeIn(350).show();
				$("#find").css("background", "#ff5c5d");
			});
			$("#spdl-okb").click(function() {

			});
			$("#spdl-escb").click(function() {
				$(".spdlsb").hide();
				$(".show-bg").hide();
			});
		});
		$(function() {
			$("#fbp1").css("border", "2px solid #ff5c5d");
			$("#fbp2").click(function() {
					$("#fbp2").css("border", "2px solid #ff5c5d");
					$("#fbp1").css("border", "2px solid  #f2f2f2");
				}),
				$("#fbp1").click(function() {
					$("#fbp1").css("border", "2px solid #ff5c5d");
					$("#fbp2").css("border", "2px solid  #f2f2f2");
				});
			$(".rhideb").click(function() {
				$("#spdlb").hide();
				$(".show-bg").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
			$("#tjbtn").click(function() {
				$("#spdlb").fhide();
				$(".show-bg").hide();
				$("#find").css("background", "#bfbfbf");
				$("#find").css("color", "#fff");
			});
		});
	</script>

</html>