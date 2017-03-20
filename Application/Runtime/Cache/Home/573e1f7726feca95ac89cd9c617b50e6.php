<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): foreach($list as $key=>$lists): ?><li>
		<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($lists["eid"]); ?>">
			<div class="s-l-1f">
				<div class="yhtx">
					<?php if($lists[imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 60px"  src="/MatouPCS/Tu/upload/<?php echo ($lists["imagename"]); ?>"  /><?php endif; ?>
				</div>
				<p class="yhmc">
				<?php if($lists[tel]==$lists[username]): ?>用户<?php echo (substr($lists["username"],0,5)); ?>
					<?php else: ?>
					用户<?php echo ($lists["username"]); endif; ?>
				</p>
				<?php $add = explode(',',$lists['address']); ?>
				<p class="szd">
					工作地点：<?php echo $add[0];?>
				</p>
				<div class="clearfloat"></div>
			</div>
			<div class="s-l-2f">
				<div class="middle">
					<p class="black-333"><?php echo ($lists["name"]); ?></p>
					<p class="age"><?php echo ($lists["ages"]); ?></p>
					<p class="gzjy">
						<span class="black-333">工作经验：</span> <?php echo ($lists["worktimes"]); ?>年
					</p>
					<p class="grjj">
						<span class="black-333">个人简介：</span> <?php echo ($lists["content"]); ?>
					</p>
					<p class="ypzw">
						<span class="black-333">应聘职位：</span> <?php echo ($lists["type"]); ?>
					</p>
					<div class="clearfloat"></div>
				</div>
				<div>
					<p class="gzsj">
						<span class="black-333">工作时间：</span> <?php echo ($works["worktime"]); ?>
					</p>
					<p class="szgs">
						<span class="black-333">所在公司：</span> <?php echo ($works["workname"]); ?>
					</p>
					<p class="zw">
						<span class="black-333">职位：</span> <?php echo ($works["typew"]); ?>
					</p>
					<div class="clearfloat"></div>
				</div>
			</div>
			<div class="s-l-3f">
				<?php $shou = explode(',',$lists['em_shou']); array_pop($shou); $shous = count($shou); ?>
				<div class="left">
					已有<?php echo ($shous); ?>人收藏
				</div>
				<div class="right">
					<?php echo ($lists["date"]); ?>
				</div>
				<div class="clearfloat"></div>
			</div>
		</a>
	</li><?php endforeach; endif; ?>
<div class="pager"><?php echo ($page); ?></div>