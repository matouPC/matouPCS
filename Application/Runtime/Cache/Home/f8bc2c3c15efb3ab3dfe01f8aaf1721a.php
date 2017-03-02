<?php if (!defined('THINK_PATH')) exit();?>   	

		
						<?php if(is_array($list)): foreach($list as $key=>$lists): ?><div class="s-c-3f">
								<div class="rmdtct">
									<ul class="rmdt">
										<li>
											<div class="rmdt-1f">
												<div class="rmdt-1fc1">
													<p><img src="/matouPCS/Public/Home/img/pltx.png" /></p>
													<p>用户<?php echo (substr($lists["username"],0,5)); ?></p>
													<p>logo</p>
													<p class="rmdtcmap">所在地：<?php echo ($lists["addre"]); ?>&nbsp;</p>
													<p class="rmdtcjs"><?php echo ($lists["content"]); ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="rmdt-2f">
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="rmdt-img1">
													<img src="/matouPCS/Public/Home/img/yhmc-big.png" />
												</div>
												<div class="clearfloat "></div>
											</div>
										</li>
										<li>
											<div class="rmdt-3f">
												<p class="rmdtcdz">点赞&nbsp;100</p>
												<p class="rmdtcfb">2016.12.12发布</p>
												<p class="clearfloat"></p>
												<br>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<br><?php endforeach; endif; ?>
			
						<div style="text-align:center;" class="margin">
							<button onclick="tj()" name='btn' id='btn' >点击加载更多</button>
						</div>