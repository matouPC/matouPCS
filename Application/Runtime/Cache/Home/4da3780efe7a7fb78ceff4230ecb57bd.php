<?php if (!defined('THINK_PATH')) exit();?><!-- 应赏大厅的局部 -->
<ul>
	<?php if(is_array($list)): foreach($list as $key=>$lists): ?><li>
		<a href="?s=/Home/Ysq/xqys/id/<?php echo ($lists["did"]); ?>">
			<div class="s-l-1f">
				<div class="yhtx">
					<img src="/matouPCS/Public/Home/img/yhmc.png" />
				</div>
				<p class="yhmc">
					用户<?php echo (substr($lists["username"],0,5)); ?>
				</p>
				<p class="jg">
					薪资：
					<span class="red"><?php echo ($lists["price"]); ?>元/天</span>
				</p>
				<p class="szd">
					所在地：<?php $listss = explode(',',$lists['address']); echo $listss[0]; ?>
				</p>
				<div class="clearfloat"></div>
			</div>
			<div class="s-l-2f">
				<div class="middle">
					<p class="black-333"><?php echo ($lists["name"]); ?></p>
					<p class="age"><?php echo ($lists["age"]); ?></p>
					<p class="grjj">
						<span class="black-333">个人简介：</span> <?php echo ($lists["content"]); ?>
					</p>
					<div class="clearfloat"></div>
				</div>
				<div>
					<p class="black-333">职位:<?php echo ($lists["type_d"]); ?></p>
					<?php $imgnum = explode(',',$lists['imagename_z']); $vidnum = explode(',',$lists['imagename_v']); $dang = explode(',',$lists['dangdate']); $dangs = explode(',',$lists['dangs']); $ss = explode(',',$lists['due_shou']); array_pop($imgnum); array_pop($vidnum); array_pop($dang); array_pop($dangs); array_pop($ss); $imgnums = count($imgnum); $vidnums = count($vidnum); $sss = count($ss); ?>
					<p class="zpzp">
						<span class="black-333">照片作品：</span> <?php echo ($imgnums); ?>个
					</p>
					<p class="spzp">
						<span class="black-333">视频作品：</span> <?php echo ($vidnums); ?>个
					</p>
					<p class="dq">
						<span class="black-333">档期：</span> <?php echo $dang[0];echo $dangs[0];?>&nbsp;&nbsp;......
					</p>
					<div class="clearfloat"></div>
				</div>
			</div>
			<div class="s-l-3f">
				<div class="left">
					已有<?php echo ($sss); ?>人收藏
				</div>
				<div class="right">
					<?php echo ($lists["date"]); ?>
				</div>
				<div class="clearfloat"></div>
			</div>
		</a>
	</li><?php endforeach; endif; ?>
<div class="pager"><?php echo ($page); ?></div>
</ul>