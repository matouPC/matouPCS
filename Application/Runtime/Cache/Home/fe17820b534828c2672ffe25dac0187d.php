<?php if (!defined('THINK_PATH')) exit();?><div class="user">
<?php if(is_array($list)): foreach($list as $key=>$lists): if($lists['type'] == 2){ ?>
	<div class="user_01">
					<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($lists["fid"]); ?>">
							<div class="xztp">
								<?php if(is_array($listimg)): foreach($listimg as $key=>$v): if($v[pid]==$lists[fid]): $file = explode(',',$v['imagenames']); array_pop($file); endif; endforeach; endif; ?>			
								<?php if($file==''): ?><img src="/matouPCS/Public/Home/img/yhmc-big.png" alt="闲置">
                                      <?php else: ?>
                                      		<img  width="254" height="150" class="xqcc-c5" src="<?php echo '/matouPCS/Uploads/'.substr($file[0],1); ?>" /><?php endif; ?>
							
									
								
									</div>
									<div class="user_01_01">
										<div class="user_01_02">
											<p><?php echo ($lists["name"]); ?></p><span>￥<?php echo ($lists["price"]); ?>元</span></div>
										<p class="user_01_03">
											<span class="black-333">商品介绍：</span>
											<span class="text69">
											<?php echo ($lists["content"]); ?>
											</span>
										</p>
									<?php $shou = explode(',',$lists['shou']); array_pop($shou); $shous = count($shou); ?>
				              	<p class="user_01_04">已有<?php echo ($shous); ?>人收藏</p>
			              	<p class="user_01_05"><?php echo ($lists["address"]); ?></p>
									</div>
								</a>
							</div>
	                  <?php }else{ ?>
	                  	<div class="user_01">
								<a href="?s=/Home/Tzsc/xqqg/id/<?php echo ($lists["fid"]); ?>">
									<div class="user_02">
										<div class="wptp">
										<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png">
                                      <?php else: ?>
                                      	<img src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>"   width="120" height="120" style="border-radius:50%"/><?php endif; ?>
									
										</div>
										<p>用户<?php echo (substr($lists["username"],0,5)); ?></p>
										<div class="clearfloat"></div>
									</div>
									<div class="user_01_01-f">
										<div class="user_01_02">
											<p><?php echo ($lists["name"]); ?></p><span>预算￥<?php echo ($lists["price"]); ?>元</span></div>
										<p class="user_01_03-f">
											<span class="black-333">商品介绍：</span>
											<span class="text90">
											<?php echo ($lists["content"]); ?>
											</span>
										</p>
											<?php  $bao = explode(',',$lists['bao']); array_pop($bao); $baos = count($bao); ?>
					<p class="user_01_04">已有<?php echo $baos;?>人报名</p>
					<p class="user_01_05"><?php echo ($lists["address"]); ?></p>
						<div class="clearfloat"></div>
										<div class="clearfloat"></div>
									</div>
								</a>
							</div>
	<?php } endforeach; endif; ?>
</div>
<br>
<div class="pager"><?php echo ($page); ?></div>