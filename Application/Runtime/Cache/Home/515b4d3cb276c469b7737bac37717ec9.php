<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>认证部队</title>
		<link rel="stylesheet" href="/matouPCS/Public/Home/css/rzbddndt-3r-xy.css" />
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
	
					<div class="h-c-2f">
						<!--<img src="img/navbg3.png" />-->
						<!--<div class="s-f2-r">
							<input type="text" style="outline: none;border: 0;position: absolute;left: 20px;width: 195px; height: 36px;background: rgba(0,0,0,0);" />
							<div class="s-f2-r1">
								<img src="img/ss-t.png" />
							</div>
						</div>-->
						<div class="s-f1">
							<a href="?s=/Home/User">
								<div class="bjzl">
									<button>编辑个人资料</button>
								</div>
							</a>
							<div class="yhtx">
								<img src="/matouPCS/Public/Home/img/yhmc.png">
								<div class="vip">
									<img src="/matouPCS/Public/Home/img/rzlogo.png" />
								</div>
							</div>
							<div class="rzbd">
								<button>认证部队</button>
							</div>
						</div>
						<div class="s-f2">
							<p class="yhmc">
								<?php if($list[username]==$list[tel]): ?><a href=""><?php echo (substr($list["username"],0,5)); ?></a><?php endif; ?>
								<?php if($list[username]!=$list[tel]): ?><a href=""><?php echo ($list["username"]); ?></a><?php endif; ?>
							</p>
							<p style="text-align: center;">
								（<?php echo ($list["bdlx"]); ?>）
							</p>
							<div>
								<p class="fsl">
								<span style="font-size: 24px; display: block; float: left; margin-top: -2px;" class="icon-fs"></span>
								<span style="display: block; float: left;"><?php echo ($list["fen"]); ?></span>
							</p>
							<p class="szd">
								<span style="font-size: 18px;" class="icon-szd"></span>
								<span style="display: block; float: right; line-height: 20px;"><?php echo ($list["addre"]); ?></span>
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
								<a style="width: 120px;" href="">基本信息</a>
								<a style="color: #FF5C5D;" href="#">动态</a>
								<a href="?s=/Home/Mtbu/rzbddnxq/id/<?php echo ($_GET['id']); ?>">需求</a>
								<a id="zp" href="">作品</a>
								<a style="width: 105px;" href="?s=/Home/Mtbu/rzbddnly/id/<?php echo ($_GET['id']); ?>">留言区</a>
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
					<!--<div class="left-xq">
						<p>全部需求</p>
						<img src="img/xxjt.png" />
					</div>-->
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
					<div class="s-c-2f">
						<div class="s-c-2f-main">
							<div class="s-c-2f-1f">
								<div class="title">
									基 本 信 息
								</div>
								<div class="bj">
									<img src="/matouPCS/Public/Home/img/bj-gray.png" />
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-2f-2f">
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
										<li><?php echo ($list["type"]); ?></li>
										<li><?php echo ($list["address"]); ?></li>
										<li>
											<span class="tel"><?php echo ($list["tels"]); ?></span>
											<!--<button id="btnConfirm">查看</button>-->
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
							<div class="s-c-2f-3f">
								<div class="title">
									作 品
								</div>
								<div class="bj">
									<img src="/matouPCS/Public/Home/img/bj-gray.png" />
								</div>
								<div class="clearfloat"></div>
							</div>
							<div class="s-c-2f-4f">
								<div class="zp">
									<a class="selected" href="javacript://">照片作品</a>
									<a href="javacript://">视频作品</a>
									<!--<a class="clearfloat"></a>-->
								</div>
							</div>
							<div class="con">
								<div class="s-c-2f-5f">
									<div class="filter">
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
										<a rel="gallery2" class="boxer" href="img/banner_big01.png">
											<img style="position: absolute; z-index: -1;" src="/matouPCS/Public/Home/img/banner_big01.png" />
										</a>
									</div>
									<div class="page">共12张（点击查看）</div>
								</div>
							</div>
							<div class="con" style="display: none;">
								<div class="s-c-2f-6f">
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
									<textarea></textarea>
								</div>
								<div class="fbly">
									<button onclick="submit()">发布留言</button>
								</div>
							</div>
							<script type="text/javascript">
								function submit(){
									alert('不能给自己留言');
								}
							</script>
							<ul>
								<?php if(is_array($li)): foreach($li as $key=>$lis): ?><li>
										<div class="left">
											<img src="/matouPCS/Public/Home/img/tx2-3r.png" />
											<div class="vip">
												<img src="/matouPCS/Public/Home/img/rzlogo.png" />
											</div>
										</div>
										<div class="right">
											<p class="tt">
												<span style="float: left;">
											 <?php if($list[username]==$lis[tel]): echo (substr($lis["username"],0,5)); endif; ?>
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
								<a href="?s=/Home/zbddnly/id/<?php echo ($_GET['id']); ?>">查看更多 》</a>
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
					<div id="conn" class="s-c-3f">				
						<div   class="s-c-3f-1f">
						<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="mdhd">
									<img src="/matouPCS/Public/Home/img/mdhd.png" />
							</div>
							<div class="yhtx">
								<img src="/matouPCS/Public/Home/img/yhmc.png" />
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
								<li class="clearfloat"></li>
							</ul>
							<div class="bottom">
								<p class="left"><?php echo ($v["time"]); ?></p>
								<!--<span class="delete">
									<img src="img/delete-2.png" />
								</span>-->
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

var p=2;
  function tj(id){

	 
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
						 for (var i = 0; i < data['nr'].length; i++) {
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
								 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
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
		
			$.ajax({
				url:"?s=/Home/Mtbu/spbddndtre",
				type:"post",
				data:{id:id,where:where},
				dataType:"json",
				success:function(data){
					var pl='';
					 for (var i = 0; i < data['nr'].length; i++) {
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
                  	 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+' </p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div>';
                    	
						
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
			alert(1);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
		                          
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
			// alert(bd);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
									// alert(li);
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
			// alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
				
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
			// alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
									// alert(li);
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
			// alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
									// alert(li);
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
		// alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
								//	 alert(li);
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
			// alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
									// alert(li);
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
		//	 alert(id);
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
									 var li = '<div class="s-c-3f-1f"><div class="mdhd"><img src="/matouPCS/Public/Home/img/mdhd.png" /></div><div class="yhtx"><a href=""><img src="/matouPCS/Public/Home/img/yhmc.png" /></a><div class="vip"><img src="/matouPCS/Public/Home/img/rzlogo.png" /></div></div><p class="yhmc"><a href="">'+use+'</a></p><p class="szd">所在地：'+data['nr'][i].addre+'</p><p class="dtnr"> '+data['nr'][i].content+'</p><ul>'+p+'</ul><div class="bottom"><p class="left">'+data['nr'][i].time+'</p><span class="delete"><img src="/matouPCS/Public/Home/img/delete-2.png" /></span><div class="right dz-qx"><span style="font-size: 20px;" class="icon-dz"></span><p style="float: right; margin-left: 5px;">'+data['nr'][i].zan+'</p></div><p class="clearfloat"></p></div><div class="clearfloat"></div></div';
									 //alert(li);
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
	<script src="/matouPCS/Public/Home/js/DialogBySHF.js"></script>
	<script src="/matouPCS/Public/Home/js/scrolltopcontrol.js"></script>
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
		$('.s-c-2f-4f .zp a').click(function() {
			$(this).parents('.s-c-2f-4f').children('.zp').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
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
				height: '160px'
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
		//----------------------------点赞--------------------------
		// $('.dz-qx span').click(function() {
		// 	if($(this).hasClass('icon-dz')) {
		// 		$(this).removeClass('icon-dz');
		// 		$(this).addClass('icon-dz-kz');
		// 	} else {
		// 		$(this).removeClass('icon-dz-kz');
		// 		$(this).addClass('icon-dz');
		// 	}
		// });
		//----------------------------删除动态/需求--------------------------
		$('.delete').click(function() {
			//			alert(123);
			$(this).parents('.s-c-3f-1f').remove();
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
			$(".s-c-2f-4f .zp a").click(function() {
				var num = $(".s-c-2f-4f .zp a").index(this);
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
		
		//----------------------------查看码头币--------------------------
		$(document).ready(function () {
        $("#btnConfirm").click(function () {
            $.DialogBySHF.Confirm({ Width: 350, Height: 200, Title: "提示信息", Content: '查看号码需要2个码头币', ConfirmFun: test});
        })
    })
    function test() {
        if(1>0){
        	$.DialogBySHF.Alert({ Width: 350, Height: 200, Title: "成功", Content: '号码准备就绪，你可以联系Ta了' });
        	$('.tel').html('15666666666');
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