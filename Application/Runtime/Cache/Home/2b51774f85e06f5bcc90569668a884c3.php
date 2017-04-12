<?php if (!defined('THINK_PATH')) exit();?><!-- 招聘大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><li>
			<a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($lists["rid"]); ?>">
				<div class="s-l-1f">
					<div class="yhtx">
					
                                  <?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 60px"  src="/matouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>"  /><?php endif; ?>
					
						
					</div>
					<p class="yhmc">
						用户<?php echo (substr($lists["username"],0,5)); ?>
					</p>
					<p class="bdmc">
						<?php echo ($lists["forcename"]); ?>
					</p>
					<p class="bdlx">
						<?php echo ($lists["type_bd"]); ?>
					</p>
					<?php $add = explode(',',$lists['address_zp']); ?>
					<p class="szd">
						工作地点：<?php echo $add[0];?>
					</p>
					<div class="clearfloat"></div>
				</div>
				<div class="s-l-2f">
					<?php for ($i=0; $i < 3; $i++) { ?>
					<?php  if($lists[$i]['type'] != ''){?>
					<div class="middle">
						<p class="black-333"><?php echo $lists[$i]['type']?></p>
						<p class="age"><?php echo $lists[$i]['age']?></p>
						<p class="gwyq">
							<span class="black-333">岗位要求：</span> <?php echo $lists[$i]['content'].substr(0,10)?>
						</p>
						<p class="jg">
							<span class="black-333">薪资：</span> <?php echo $lists[$i]['price']?>元/天
						</p>
						<?php $ying = explode(',',$lists[$i]['zhao']); array_pop($ying); $yings = count($ying);?>
						<p class="bm"><?php echo $yings;?>
					<?php echo $lists[$i]['date']?>发布人报名</p>
						<div class="clearfloat"></div>
					</div>
					<?php } ?>
					<?php } ?>
				</div>
				<div class="s-l-3f">
					<div class="left">

					</div>
					<div class="right">
						2016-12-12
					</div>
					<div class="clearfloat"></div>
				</div>
			</a>
		</li><?php endforeach; endif; ?>
	<div class="pager"><?php echo ($page); ?></div>
</ul>