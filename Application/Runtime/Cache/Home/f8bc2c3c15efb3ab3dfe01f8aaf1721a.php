<?php if (!defined('THINK_PATH')) exit();?>	           	<div id="contentt"  class="s-c-3f">
	               	<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><div class="s-c-3f-1f">
								<div class="yhtx">
								<?php if($_SESSION['id'] == $v['uid']){ ?>
										<a href="?s=/Home/Mtbu/spbddndt/id/<?php echo ($v["uid"]); ?>">
									<?php }else{ ?>
										<a href="?s=/Home/Mtbu/spbddydt/id/<?php echo ($v["uid"]); ?>">
									<?php } ?>
									
											 <?php if($v[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png" />
                                      <?php else: ?>
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($v["imagename"]); ?>"  width="60" height="60" style="border-radius:50%"/><?php endif; ?>
									</a>
									<div class="vip">
										<img src="/matouPCS/Public/Home/img/rzlogo.png" />
									</div>
								</div>
								<p class="yhmc">
								 <?php if($v[username]==$v[tel]): echo (substr($v["username"],0,5)); endif; ?>
							<?php if($v[username]!=$v[tel]): echo ($v["username"]); endif; ?>
								</p>
								<p class="zw">职位名称：<?php echo ($v["type_u"]); ?></p>
								<p class="szd">所在地：<?php echo ($v["addre"]); ?></p>
								<p class="dtnr">
								<?php echo ($v["content"]); ?>
								</p>
								<ul>
									<?php if(is_array($img)): foreach($img as $key=>$vd): if($v[did]==$vd[pid]): ?><li>
									<a rel="gallery1" class="boxer" href="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>">
										<div class="pic">
											<img src="/matouPCS/Uploads/<?php echo ($vd["imagename"]); ?>" />
										</div>
									</a>
								</li><?php endif; endforeach; endif; ?>
									<div class="clear"></div>
								</ul>
								<div class="bottom">
									<p class="left"><?php echo ($v["time"]); ?></p>
									<div class="right dz-qx">
										<p onclick="zan1(<?php echo ($v["did"]); ?>,<?php echo ($v["zan"]); ?>)" class="dz dz-qx">
													<?php $zan = explode(',',$v['zid']); array_pop($zan); ?>
													<?php if(in_array($_SESSION['id'],$zan)){ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz-kz"></span>
													<?php }else{ ?>
													<span id="z<?php echo ($v["did"]); ?>" style="font-size: 17px;" class="icon-dz"></span>
													<?php } ?>
													<span style="font-size: 17px;" id="s<?php echo ($v["did"]); ?>"><?php echo ($v["zan"]); ?></span></p> 
									</div>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div><?php endforeach; endif; ?>
						</div>
						<div class="djjzgd">
							<button onclick="tj()" name='btn' id='btn' >点击加载更多</button>
						</div>