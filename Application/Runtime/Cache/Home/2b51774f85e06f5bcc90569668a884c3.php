<?php if (!defined('THINK_PATH')) exit();?><!-- 招聘大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($lists["rid"]); ?>">
			<li>
				<div class="tx">
					<img style="width:60px;" src="/matouPCS/Public/Home/hye/<?php echo ($lists["imagename"]); ?>" />
				</div>
				<p class="yhmc">用户<?php echo (substr($lists["username"],0,5)); ?></p>
                <p class="hdsj">认证logo</p>
				<p class="hdsj">部队名称：<?php echo ($zpdt["forcename"]); ?></p>
                <p class="hdsj">部队类型：<?php echo ($zpdt["type_bd"]); ?></p>
                <?php $add = explode(',',$lists['address_zp']); ?>
				<p class="hddd">活动地点：<?php echo $add[0];?></p>
				<div class="details">
					<?php if(is_array($listn)): foreach($listn as $key=>$zpdt): if($lists['rid'] == $zpdt['pid'] && $lists['uid'] == $zpdt['usid']){ ?>
						<p><?php echo ($zpdt["type"]); ?></p>
						<?php if($zpdt['sex'] == '1'){ ?>
							<p class="sex" style="color:#000;">男</p>
						<?php } ?>
						<?php if($zpdt['sex'] == '2'){ ?>
							<p class="sex" style="color:#000;">女</p>
						<?php } ?>
						<?php if($zpdt['sex'] == '3'){ ?>
							<p class="sex" style="color:#000;">不限</p>
						<?php } ?>
						
						<p class="age" style="color:#000;"><?php echo ($zpdt["age"]); ?>岁</p>
						<p class="jtyq" ><span style="color:#000;">具体要求 :</span> &nbsp;<?php echo ($zpdt["content"]); ?></p>
						 <p class="price"><?php echo ($zpdt["price"]); ?>元/天</p>
						 <?php $num = explode(',',$zpdt['zhao']); array_pop($num); $nums = count($num); ?>
						<p class="bm"><?php echo ($nums); ?>人应聘</p>
						<?php } endforeach; endif; ?>
					<p class="sjfb"><?php echo ($lists["date"]); ?>发布</p>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
	<div class="pager"><?php echo ($page); ?></div>
</ul>