<?php if (!defined('THINK_PATH')) exit();?>
<!-- 悬赏大厅的局部 -->
<ul>
        <?php for ($i=0; $i < count($list); $i++) { ?>
        <li>
            <a href="?s=/Home/xsdt/xqxs/id/<?php echo ($list[$i]['psid']); ?>">
                <div class="s-l-1f">
                    <div class="yhtx">
                       <?php if($list[$i][imagename]==''): ?><img src="/matouPCS/Public/Home/img/yhmc.png"/>
                                   <?php else: ?>
                                     <img style="border-radius:50%;width: 60px"  src="/MatouPCS/Tu/upload/<?php echo ($list[$i]["imagename"]); ?>"  /><?php endif; ?>
                    </div>
                    <p class="yhmc">
                     <?php if($list[$i][tel]==$list[$i][username]): ?>用户<?php echo (substr($list[$i]["username"],0,5)); ?>
					<?php else: ?>
					用户<?php echo ($list[$i]["username"]); endif; ?>
                    </p>
                    <p class="hdsj">
                        活动时间：<?php echo ($list[$i]['time']); ?>
                    </p>
                     <?php $add = explode(',',$list[$i]['address']); ?>
                    <p class="hddd">
                        活动地点：<?php echo ($add[0]); ?>
                    </p>
                    <div class="clearfloat"></div>
                </div>
                <div class="s-l-2f">
                    
                        <?php for ($j=0; $j < count($list[$i]); $j++) { ?>
                            <?php if(!empty($list[$i][$j])){ ?>
                            <div class="s-l-2f-1f">
                                <p class="black-333"><?php echo $list[$i][$j]['type'];?></p>
                                <?php if($list[$i][$j]['sex'] == '1'){ ?>
                                    <p class="sex">男</p>
                                <?php } ?>
                                <?php if($list[$i][$j]['sex'] == '2'){ ?>
                                    <p class="sex">女</p>
                                <?php } ?>
                                <?php if($list[$i][$j]['sex'] == '3'){ ?>
                                    <p class="sex">不限</p>
                                <?php } ?>
                                
                                <p class="age"><?php echo ($list[$i][$j]['age']); ?></p>
                                <p class="jtyq">
                                    <span class="black-333">具体要求：</span> <?php echo ($list[$i][$j]['yaoqiu']); ?>
                                </p>
                                <p class="jg">
                                    <span class="black-333">价格：</span> <?php echo ($list[$i][$j]['price']); ?>元/天
                                </p>
                                <p class="bm">
                                    10人报名
                                </p>
                                <div class="clearfloat"></div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                </div>
                <div class="s-l-3f">
                    <div class="left">
                        
                    </div>
                    <div class="right">
                        <?php echo ($list[$i]['date']); ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </li>
        <?php } ?>
    <br>
    <div class="pager"><?php echo ($page); ?></div>
</ul>