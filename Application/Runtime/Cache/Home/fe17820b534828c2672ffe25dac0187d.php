<?php if (!defined('THINK_PATH')) exit();?><div class="user">
<?php if(is_array($list)): foreach($list as $key=>$lists): if($lists['type'] == 2){ ?>
	<div class="user_01">
		<a href="?s=/Home/Tzsc/xqxz/id/<?php echo ($lists["fid"]); ?>">
			<img src="/matouPCS/Public/Home/img/yhmc-big.png" width="260" height="145">
			<div class="user_01_01">
				<div class="user_01_02">
					<h4><?php echo ($lists["name"]); ?></h4><span>￥<?php echo ($lists["price"]); ?>元</span></div>
				<p class="user_01_03"><?php echo ($lists["content"]); ?></p>
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
					<img src="/matouPCS/Public/Home/img/bdmc.png" width="101" height="101">
					<h4>用户<?php echo (substr($lists["username"],0,5)); ?></h4>
				</div>
				<div class="user_01_01">
					<div class="user_01_02">
						<h4><?php echo ($lists["name"]); ?></h4><span>预算￥<?php echo ($lists["price"]); ?>元</span></div>
					<p class="user_01_03"><?php echo ($lists["content"]); ?></p>
					<?php  $bao = explode(',',$lists['bao']); array_pop($bao); $baos = count($bao); ?>
					<p class="user_01_04">已有<?php echo $baos;?>人报名</p>
					<p class="user_01_05"><?php echo ($lists["address"]); ?></p>
				</div>
			</a>
		</div>
	<?php } endforeach; endif; ?>
</div>
<br>
<div class="pager"><?php echo ($page); ?></div>