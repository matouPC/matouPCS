<?php if (!defined('THINK_PATH')) exit();?>
	<ul>
	<?php if(is_array($list)): foreach($list as $key=>$xsdt): ?><a href="?s=/Home/xsdt/xqxs/id/<?php echo ($xsdt['psid']); ?>">
		
			<li>
				<div class="tx">
					<img src="/page/Public/Home/img/yhmc.png" />
				</div>
				<p class="yhmc">用户<?php echo (substr($xsdt["username"],0,5)); ?></p>
				<p class="hdsj">活动时间：<?php echo ($xsdt["time"]); ?></p>
				<p class="hddd">活动地点：<?php echo ($xsdt["address"]); ?></p>
				<div class="details">
					<?php if(is_array($data)): foreach($data as $key=>$xsdts): if($xsdt['uid'] == $xsdts['usid'] && $xsdt['psid'] == $xsdts['pid']){ ?>
							<p><?php echo ($xsdts["type"]); ?></p>
							<literal>
                    			<?php if($xsdts['sex'] == 1 ): ?><p class="sex">男</p><?php endif; ?>
								<?php if($xsdts['sex'] == 2 ): ?><p class="sex">女</p><?php endif; ?>
								<?php if($xsdts['sex'] == 3 ): ?><p class="sex">不限</p><?php endif; ?>
							<literal>
							<!-- <p class="sex">女</p> -->
							<p class="age"><?php echo ($xsdts["age"]); ?></p>
							<p class="jtyq"><?php echo ($xsdts["yaoqiu"]); ?></p>
							<p class="price"><?php echo ($xsdts["price"]); ?>元/天</p>
							<p class="bm"><?php echo ($xsdts["whether"]); ?>人报名</p>
						<?php } endforeach; endif; ?>
					<p class="sc">
						<a href="">已有<?php echo ($xsdt["collect"]); ?>人收藏</a>
					</p>
					<p class="sjfb">2016.12.12发布</p>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
	<div class="pager"><?php echo ($page); ?></div>
</ul>