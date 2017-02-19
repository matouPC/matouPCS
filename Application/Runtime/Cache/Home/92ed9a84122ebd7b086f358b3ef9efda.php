<?php if (!defined('THINK_PATH')) exit();?><!-- 招聘大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($lists["rid"]); ?>">
			<li>
				<div class="tx">
					<img style="width:60px;" src="/matouPCS/Public/Home/hye/<?php echo ($lists["imagename"]); ?>" />
				</div>
				<p class="yhmc">用户<?php echo (substr($lists["username"],0,5)); ?></p>
                <p class="hdsj">认证logo</p>
				<p class="hdsj">部队名称：</p>
                <p class="hdsj">部队类型：</p>
				<p class="hddd">活动地点：<?php echo ($lists["address"]); ?></p>
				<div class="details">
					<?php if(is_array($listn)): foreach($listn as $key=>$zpdt): if($lists['rid'] == $zpdt['pid'] && $lists['uid'] == $zpdt['usid']){ ?>
						<p><?php echo ($zpdt["type"]); ?></p>
						<p class="sex" style="color:#000;"><?php echo ($zpdt["sex"]); ?></p>
						<p class="age" style="color:#000;"><?php echo ($zpdt["age"]); ?>岁</p>
						<p class="jtyq" ><span style="color:#000;">具体要求 :</span> &nbsp;<?php echo ($zpdt["content"]); ?></p>
						 <p class="price"><?php echo ($zpdt["price"]); ?>元/天</p>
						<p class="bm">10人报名</p>
						<?php } endforeach; endif; ?>
					<p class="sc"><a href="">已有<?php echo ($zpdt["collect"]); ?>人收藏</a></p>
					<p class="sjfb">2016.12.12发布</p>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
	<div class="pager"><?php echo ($page); ?></div>
</ul>