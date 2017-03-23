<?php if (!defined('THINK_PATH')) exit(); if(is_array($shop)): foreach($shop as $key=>$v): ?><div class="s-c-3f">
		<div class="f3-c-1">
			<div class="f3-c-user">
				<div class="f3-c-user-img">
						 <?php if($v[imagename]==''): ?><img src="/matouPCS/Public/Home/img/bdmc.png" />
                      <?php else: ?>
                      	<img src="/matouPCS/Tu/upload/<?php echo ($v["imagename"]); ?>"  width="60" height="60" style="border-radius:50%"/><?php endif; ?>
					
				</div>
				<div class="f3-c-user-xx">
					<p class="spmc">
						<?php echo ($v["shopname"]); ?>
					</p>
					<p>
						<?php echo ($v["type"]); ?>
					</p>
					<p>
						收藏量<?php echo ($v["collect"]); ?>
					</p>
					<p>
						<?php echo ($v["address"]); ?>
					</p>
					<p class="clearfloat"></p>
				</div>
			</div>
			<ul>
			<?php if(is_array($data)): foreach($data as $key=>$datav): if($v[id]==$datav[pid]): ?><li>
					<a href="?s=/Home/Tjcs/spxq/id/<?php echo ($datav["id"]); ?>">
						<div class="f3-ul-cz">
							<img src="/matouPCS/Public/Home/img/123.png" />
						</div>
				
						<img src="Uploads/Uploads/<?php echo ($datav["pubtimes"]); ?>/<?php echo ($datav["imagenames"]); ?>"  width="255" height="142" alt="商铺名称" />
				
						<div class="f3-ul-c1">
							<p class="red">￥<?php echo ($datav["price"]); ?>元</p>
							<p  class="lll">浏览量:<?php echo ($datav["liulan"]); ?>次</p>
							<p class="spxq">
							<?php echo ($datav["content"]); ?>
							</p>
						</div>
						<div class="f3-ul-c2">
						</div>
					</a>
				</li><?php endif; endforeach; endif; ?>
				<div class="clear"></div>
			</ul>
		</div>
	</div><?php endforeach; endif; ?>
 <div class="pager"><?php echo ($page); ?></div>