<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>个人部队-个人</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/grbddyly-3r-xy.css" />
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/jquery.bigautocomplete.css" />
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
			<div class="h-content-main">
				<div class="h-main-c">
					<div class="h-c-1f">
						<div class="s-f1-l">
							<div class="home">
								<a href="?s=/Home/Index">
									<img src="/matouPCS/Public/Home/img/home.png" />
								</a>
							</div>
							<p>
								<a href="?s=/Home/Index">首页</a>
							</p>
						</div>
						<div class="s-f1-r">
							<ul>
								<?php if(empty($_SESSION['username'])){ ?>
								<li style="width: 100px;">
									<a id="login-alert" href="#">请注册\登录</a>
								</li>
								<?php }else{ ?>
								<li style="width: 100px;">
									<a href="#">
										<img src="/matouPCS/Public/Home/img/tx.png" />
										<p>用户<?php echo (substr($_SESSION['username'],0,5)); ?></p>
									</a>
									<div class="str"></div>
								</li>
								<?php } ?>
								<li id="select-xx" style="width: 45px;">
									<a href="#">消息</a>
									<div class="str"></div>
									<div class="select-xx">
										<ul>
											<li>
												<a href="">需求消息</a>
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
									<a href="#">收藏夹</a>
									<div class="str"></div>
								</li>
								<li id="select-yfb" style="width: 70px;">
									<a href="#">已发布<img class="img" src="/matouPCS/Public/Home/img/arrow_bottom.png"></a>
									<div class="str"></div>
									<div class="select-yfb">
										<ul>
											<ul>
												<li>
													<a href="">悬赏</a>
												</li>
												<li>
													<a href="">应赏</a>
												</li>
												<li>
													<a href="">招聘</a>
												</li>
												<li>
													<a href="">应聘</a>
												</li>
												<li>
													<a href="">求购</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
												<li>
													<a href="">闲置</a>
												</li>
											</ul>
										</ul>
									</div>
								</li>
								<li style="width: 68px;">
									<a href="#">部队中心</a>
									<div class="str"></div>
								</li>
								<li style="width: 68px;">
									<a href="#">我的商铺</a>
									<div class="str"></div>
								</li>
								<li style="width: 70px;">
									<a class="action" href="#">发动态</a>
									<div class="strf"></div>
								</li>
								<li class="clearfloat"></li>
							</ul>
						</div>
						<div class="clearfloat"></div>
					</div>
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
								<a href=""><?php echo ($dt["username"]); ?></a>
							</p>
							<p style="text-align: center;">
								（<?php echo ($dt["sex"]); ?>）
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
							<button id="gz-qx">关注</button>
						</div>
						<div class="s-f4">
							<div>
								<a href="?s=/Home/Mtbu/grbddydt/id/<?php echo ($_GET['id']); ?>">动态</a>
								<a href="?s=/Home/Mtbu/grbddyxqid/<?php echo ($_GET['id']); ?>">需求</a>
								<a style="color: #FF5C5D;" href="#">留言区</a>
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
					<!--<div class="left-xq">
						<p>全部需求</p>
						<img src="img/xxjt.png" />
					</div>-->
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
                                 where = this.index;
                           
                              // $('#every').click();
                          // alert(where);
                              // // 这里才是最终的搜索条件
                               id=	<?php echo ($_GET['id']); ?>;
                              remen(where,id);  
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
											url:"?s=/Home/Mtbu/grliuyan",
											type:"post",
											data:{id:id,contents:contents},
											dataType:"json",
											success:function(data){
											//	alert(2);
												var li = '';

												for (var i = 0; i < data.length; i++) {
													var use = data[i].username.substr(0,5);
													li+='<li><div class="left"><img src="/matouPCS/Public/Home/img/tx2-3r.png" /><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><div class="right"><p class="tt"><span style="float: left;"><a href="">用户'+use+'</a></span><span style="float: right; text-align: right;">'+data[i].addre+'</span></p><p class="grjj">'+data[i].contents+'</p><div class="bottom"><p class="sj">'+data[i].ltime+'</p><p class="dz dz-qx"><span class="icon-dz"></span>1000</p></div></div><div class="clearfloat"></div></li>';
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
												<p class="sj"><?php echo ($lis["ltime"]); ?></p>
												<p class="dz dz-qx"><span class="icon-dz"></span><?php echo ($lis["zan"]); ?></p>
											</div>
										</div>
										<div class="clearfloat"></div>
									</li><?php endforeach; endif; ?>
							</ul>
							<p class="ckgd">
								<a href="?s=/Home/Mtbu/spbddyly">查看更多 》</a>
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
				<div id="re" class="s-main-l">
					<!--<div class="s-c-2f">
						<p class="title">
							结婚是个开心事，分享喜事，传递辛福！
						</p>
						<div class="s-c-2f-1f">
							<textarea></textarea>
						</div>
						<div class="s-c-2f-2f">
							<div class="left">
								<div class="sctp">
									<img src="img/sctpic.png" />
								</div>
								<p>上传图片</p>
							</div>
							<button class="right">
								发动态
							</button>
						</div>
						<!--<div class="s-c-2f-3f">
							<div class="left">
								<p>全部类型</p>
								<img src="img/xxjt.png" />
							</div>
							<div class="right">
								排序：热门&nbsp;&nbsp; |&nbsp;&nbsp; 最新
							</div>
						</div>-->
					<!--</div>-->
					<div id="content" class="s-c-3f">
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="s-c-3f-1f">
							<!--<div class="mdhd">
								<img src="img/mdhd.png" />
							</div>-->
							<div>
								<div class="yhtx">
									<a href="">
										<img src="/matouPCS/Public/Home/img/yhmc.png" />
									</a>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
									<div class="clearfloat"></div>
								</div>
								<p class="yhmc">
									<a href=""><?php echo ($v["username"]); ?></a>
								</p>
								<p class="zwmc">
									职位名称：<?php echo ($v["type"]); ?>
								</p>
								<p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
								<div class="clearfloat"></div>
							</div>
								<p class="dtnr">
							<?php echo ($v["contents"]); ?>
						   </p>
							<div class="bottom">
								<p class="left"><?php echo ($v["ltime"]); ?></p>
								<!--<span class="delete">
									<img src="img/delete-2.png" />
								</span>-->
								<div class="right dz-qx">
									<span style="font-size: 20px;" class="icon-dz"></span>
									<p style="float: right; margin-left: 5px;"><?php echo ($v["zan"]); ?></p>
								</div>
								<p class="clearfloat"></p>
							</div>
							<div class="clearfloat"></div>
						</div><?php endforeach; endif; ?>
					</div>
					<div class="s-main-b">
					<div class="margin">
						<button onclick="tj(<?php echo ($_GET['id']); ?>)" name='btn' id='btn' >点击加载更多</button>
					</div>
				</div>
				</div>
				<div class="clearfloat"></div>
			</div>
<script type="text/javascript">
var p=2;
  function tj(id){
	 
	 
	//alert(22);
		$.ajax({
			type:'post',
			url:"<?php echo U('Mtbu/grlyjzdt');?>",
			data:{k:p,id:id},
			beforeSend:function(){
	         $("#content").append("<div id='load'>加载中……</div>");
			},
			success:function(data){
				// alert(data);
				if(data!=null){				
						//alert(1);
						 for (var i = 0; i < data.length; i++) {
						$("#content").append('<div class="s-c-3f-1f"><div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="zwmc"> 职位名称：</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+'</p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
	 		
						 }
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
	 	p++;
// alert(p);
  }


	function remen(where,id){
	alert(where);	
	if(where=='z'){
			$.ajax({
				url:"?s=/Home/Mtbu/grbddnlyre",
				type:"post",
				data:{where:where,id:id},
				dataType:"json",
				success:function(data){
					//alert(data);	
                 var li='';
					for (var i = 0; i < data.length; i++) {
					
						li+='<div id="ha" class="s-c-3f-1f"><div ><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="zwmc"> 性别：'+data[i].sex+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+'</p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
									
						
					};
					var p ='<div id="ha">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj2(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
					$('#re').html(p);
					//$('#re').val('');
				},error:function(){
					alert('no');
				}
			});
	}else{
		$.ajax({
			url:"?s=/Home/Mtbu/grbddnlyre",
			type:"post",
			data:{where:where,id:id},
			dataType:"json",
			success:function(data){
				//alert(data);	
             var li='';
				for (var i = 0; i < data.length; i++) {
				
					li+='<div id="ha" class="s-c-3f-1f"><div ><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="zwmc"> 性别：'+data[i].sex+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+'</p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
								
					
				};
				var p ='<div id="ha">'+li+'</div><div class="s-main-b"><div class="margin"><button onclick="tj1(<?php echo ($_GET['id']); ?>)" name="btn1" id="btn1" >点击加载更多</button></div></div>';
				$('#re').html(p);
				//$('#re').val('');
			},error:function(){
				alert('no');
			}
		});
	}
	}
	var pc=2;
	  function tj1(id){
			 
			 
			 alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/grlyjzdtre');?>",
					data:{k:pc,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="zwmc"> 性别：'+data[i].sex+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+'</p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			 	pc++;
		// alert(p);
		  }
	  var pd=2;
	  function tj2(id){
			 
			 
			 alert(id);
				$.ajax({
					type:'post',
					url:"<?php echo U('Mtbu/grlyjzdt');?>",
					data:{k:pd,id:id},
					beforeSend:function(){
			         $("#ha").append("<div id='load'>加载中……</div>");
					},
					success:function(data){
						// alert(data);
						if(data!=null){				
								//alert(1);
								 for (var i = 0; i < data.length; i++) {
									 
								$("#ha").append('<div class="s-c-3f-1f"><div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div><div class="clearfloat"></div></div><p class="yhmc"><a href="">'+data[i].username+'</a></p><p class="zwmc"> 性别：'+data[i].sex+'</p><p class="szd">所在地：'+data[i].addre+'</p><div class="clearfloat"></div></div><p class="dtnr"> '+data[i].contents+'</p><div class="bottom"><p class="left">'+data[i].stime+'</p><!--<span class="delete"><img src="img/delete-2.png" /></span>--><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data[i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>');
			 		
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
			 	pd++;
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
		
		//--------------------------全部动态下拉----------------------------------
		$('.s-main-c-1f .left-dt').hover(function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(180deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color','#FF5C5D');
			$('.select-dt').stop().animate({
				height: '65px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-dt ul').css('background-color','#999999');
			$('.select-dt').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('.s-main-c-1f .left-dt ul li a').click(function(){
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
			$('.s-main-c-1f .left-xq ul').css('background-color','#FF5C5D');
			$('.select-xq').stop().animate({
				height: '155px'
			}, 300);
		}, function() {
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
			$('.s-main-c-1f .left-xq ul').css('background-color','#999999');
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('.s-main-c-1f .left-xq ul li a').click(function(){
			$('.left-xq p').html($(this).html());
			$('.select-xq').stop().animate({
				height: '0px'
			}, 300);
			$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
			$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
		});
		
		//		关注/取消
		$('#gz-qx').click(function() {
			if($(this).html() == '关注') {
				$(this).html('已关注');
				$(this).css('background-color','#FF5C5D');
				$(this).hover(function(){
					$(this).css('background-color','#FF5C5D');
				});
			} else {
				$(this).html('关注');
				$(this).css('background-color','transparent');
				$(this).hover(function(){
					$(this).css('background-color','#FF5C5D');
				},function(){
					$(this).css('background-color','transparent');
				}
				);
			}
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
		//----------------------------删除动态/需求--------------------------
		$('.delete').click(function() {
			//			alert(123);
			$(this).parents('.s-c-3f-1f').remove();
		});
	</script>
</html>