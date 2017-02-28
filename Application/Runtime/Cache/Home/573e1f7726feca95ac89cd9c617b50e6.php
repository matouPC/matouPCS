<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): foreach($list as $key=>$lists): ?><br>
	<div class="f3-c-1">
		<a href="?s=/Home/Zpdt/xqyp/id/<?php echo ($lists["eid"]); ?>">
			<img src="/matouPCS/Public/Home/img/yhmc.png" height="60" width="61">
			<?php $add = explode(',',$lists['address']); ?>
			<h3 class="app_01">工作地点:<?php echo $add[0];?></h3>
			<h3 class="app_01_01">用户<?php echo (substr($lists["username"],0,5)); ?></h3>
			<ul>
				<li class="app_01_h"><?php echo ($lists["name"]); ?></li>
				<li class="app_01_h1 app_01_h2">年龄:<?php echo ($lists["ages"]); ?>岁</li>
				<li class="app_01_h app_01_h2">工作经验：</li>
				<li class="app_01_h1"><?php echo ($lists["worktimes"]); ?>年</li>
				<li class="app_01_h app_01_h2">个人简介：</li>
				<li class="app_01_h1 app_01_oh"><?php echo ($lists["content"]); ?></li>
				<li class="app_01_h3"><?php echo ($lists["type"]); ?></li>
			</ul>
			<br/>
			<ul class="app_02">
				<?php $i = 0; ?>
				<?php if(is_array($work)): foreach($work as $key=>$works): if($works['pid'] == $lists['id']){ ?>
					<?php $i++; ?>
						<?php if($i > 1){ break; }else{ ?>
						<li class="app_01_h">工作时间：</li>
						<li class="app_01_h1"><?php echo ($works["worktime"]); ?></li>
						<li class="app_01_h app_01_h2">所在公司：</li>
						<li class="app_01_h1" style="width:114px; height:18px; overflow:hidden;"><?php echo ($works["workname"]); ?></li>
						<li class="app_01_h app_01_h2">职位：</li>
						<li class="app_01_h1"><?php echo ($works["typew"]); ?>...</li>
						<?php } ?>
						<?php } endforeach; endif; ?>
			</ul>
			<br/>
			<ul class="app_03">
				<?php $shou = explode(',',$lists['em_shou']); array_pop($shou); $shous = count($shou); ?>
				<li class="">已有<?php echo ($shous); ?>人收藏</li>
				<li class="app_03_01" style="float:right; margin-right:24px;"><?php echo ($lists["date"]); ?>发布</li>
			</ul>
		</a>
	</div><?php endforeach; endif; ?>
<div class="pager"><?php echo ($page); ?></div>