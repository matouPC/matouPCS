<?php if (!defined('THINK_PATH')) exit();?><!-- 招聘大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><a href="?s=/Home/Zpdt1/xqzp/id/<?php echo ($lists["rid"]); ?>">
			<li>
				<div class="tx">
					<img style="width:60px;" src="/matouPCS/Public/Home/hye/<?php echo ($lists["imagename"]); ?>" />
				</div>
				<p class="yhmc">用户<?php echo (substr($lists["username"],0,5)); ?></p>
                <p class="hdsj">认证logo</p>
				<p class="hdsj">部队名称：<?php echo ($lists["forcename"]); ?></p>
                <p class="hdsj">部队类型：<?php echo ($lists["type_bd"]); ?></p>
                <?php $add = explode(',',$lists['address_zp']); ?>
				<p class="hddd">活动地点：<?php echo $add[0];?></p>
				<div class="details">
					<?php for ($i=0; $i < 3; $i++) { ?>
						<?php if(!empty($lists[$i])){ ?>
						<p><?php echo $lists[$i]['type'] ?></p>
						<?php if($lists[$i]['sex'] == 1){ ?>
						<p class="sex" style="color:#000;">男</p>
						<?php } ?>
						<?php if($lists[$i]['sex'] == 2){ ?>
						<p class="sex" style="color:#000;">女</p>
						<?php } ?>
						<?php if($lists[$i]['sex'] == 3){ ?>
						<p class="sex" style="color:#000;">不限</p>
						<?php } ?>
						<p class="age" style="color:#000;"><?php echo $lists[$i]['age']?>岁</p>
						<p class="jtyq" ><span style="color:#000;">具体要求 :</span> &nbsp;<?php echo $lists[$i]['content'].substr(0,10)?></p>
						<p class="price"><?php echo $lists[$i]['price']?>元/天</p>
						<?php $ying = explode(',',$lists[$i]['zhao']); array_pop($ying); $yings = count($ying);?>
						<p class="bm"><?php echo $yings;?>人应聘</p>
					    <p class="sjfb"><?php echo $lists[$i]['date']?>发布</p>
					    <?php } ?>
					<?php } ?>
				</div>
			</li>
		</a><?php endforeach; endif; ?>
	<div class="pager"><?php echo ($page); ?></div>
</ul>