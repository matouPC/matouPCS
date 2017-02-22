<?php if (!defined('THINK_PATH')) exit();?><!-- 应赏大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><a href="?s=/Home/Ysq/xqys/id/<?php echo ($lists["did"]); ?>">
			<li>
				<div class="tx">
					<img src="/matouPCS/Public/Home/img/yhmc.png" />
				</div>
				<p class="yhmc">用户<?php echo (substr($lists["username"],0,5)); ?></p>
				<p class="price-f">
					<?php echo ($lists["price"]); ?>元/天
				</p>
				<p class="hddd">所在地: <?php $listss = explode(',',$lists['address']); echo $listss[0]; ?></p>
				<div class="details">
					<p><?php echo ($lists["name"]); ?></p>
					<p class="age-f"><?php echo ($lists["age"]); ?>岁</p>
					<!--<p style="margin-left: 20px; color: #999999;"></p>-->
					<p class="grjj"><?php echo ($lists["content"]); ?></p>
					<p>职位:<?php echo ($lists["type_d"]); ?></p>
					<?php $imgnum = explode(',',$lists['imagename_z']); $vidnum = explode(',',$lists['imagename_v']); $dang = explode(',',$lists['dangdate']); $dangs = explode(',',$lists['dangs']); $ss = explode(',',$lists['due_shou']); array_pop($imgnum); array_pop($vidnum); array_pop($dang); array_pop($dangs); array_pop($ss); $imgnums = count($imgnum); $vidnums = count($vidnum); $sss = count($ss); ?>
					<p class="zpzp">照片作品：<?php echo ($imgnums); ?>个</p>
					<p class="spzp">视频作品：<?php echo ($vidnums); ?>个</p>
					<p class="dq">
						档期:<?php echo $dang[0];echo $dangs[0];?>&nbsp;&nbsp;......
					</p>
					<p class="sc">
						<a href="">已有<?php echo ($sss); ?>人收藏</a>
					</p>
					<p class="sjfb"><?php echo ($lists["date"]); ?>发布</p>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
<div class="pager"><?php echo ($page); ?></div>
</ul>