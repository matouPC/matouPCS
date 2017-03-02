<?php if (!defined('THINK_PATH')) exit();?>
<!-- 悬赏大厅的局部 -->
<ul>
    <?php for ($i=0; $i < count($list); $i++) { ?>
        <a href="?s=/Home/xsdt/xqxs/id/<?php echo ($list[$i]['psid']); ?>">
            <li>
                <div class="tx">
                    <img src="/matouPCS/Public/Home/img/yhmc.png" />
                </div>
                <p class="yhmc">用户<?php echo (substr($list[$i]['username'],0,6)); ?></p>
                <p class="hdsj">活动时间：<?php echo ($list[$i]['time']); ?></p>
                <?php $add = explode(',',$list[$i]['address']); ?>
                <p class="hddd">活动地点：<?php echo ($add[0]); ?></p>
                <div class="details">
                        <?php for ($j=0; $j < count($list[$i]); $j++) { ?>

                            <?php if(!empty($list[$i][$j])){ ?>
                                <p class="sex"><?php echo ($list[$i][$j]['sex']); ?></p>
                                <p class="age"><?php echo ($list[$i][$j]['age']); ?></p>
                                <p class="jtyq"><?php echo $list[$i][$j]['type'];?></p>
                                <p class="price"><?php echo ($list[$i][$j]['price']); ?>元/天</p>
                                <p class="bm">123人报名</p>
                            <?php } ?>
                        <?php } ?>
                    <p class="sjfb"><?php echo ($list[$i]['date']); ?>发布</p>
                </div>
            </li>
        </a>
        <?php } ?>
    <br>
    <div class="pager"><?php echo ($page); ?></div>
</ul>