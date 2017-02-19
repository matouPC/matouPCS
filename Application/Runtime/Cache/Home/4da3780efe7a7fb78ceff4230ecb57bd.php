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
				<p class="hddd">所在地: <?php echo ($lists["address"]); ?></p>
				<div class="details">
					<p><?php echo ($lists["name"]); ?></p>
					<p class="age-f"><?php echo ($lists["age"]); ?>岁</p>
					<!--<p style="margin-left: 20px; color: #999999;"></p>-->
					<p class="grjj"><?php echo ($lists["content"]); ?></p>
					<p>职位:<?php echo ($lists["type"]); ?></p>
					<p class="zpzp">照片作品：5个</p>
					<p class="spzp">视频作品：2个</p>
					<p class="dq">
						档期:12-11上午&nbsp;&nbsp;12-14下午&nbsp;&nbsp;12-30中午&nbsp;&nbsp;01-23中午。。。。。。。。。。。。。。。。。。。。。。
					</p>
					<p class="sc">
						<a href="">已有<?php echo ($lists["collect"]); ?>人收藏</a>
					</p>
					<p class="sjfb">2016.12.12发布</p>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
<div class="pager"><?php echo ($page); ?></div>
</ul>