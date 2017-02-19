<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title><?php echo ($title); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="<?php echo (msubstr($keywords,0,3000,14000,true)); ?>" name="keywords"/>
        <meta content="<?php echo (msubstr($description,0,3000,14000,true)); ?>" name="description"/>
        <link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>css/style<?php echo ($version); ?>.css" />
    <?php if(is_array($cssArr)): foreach($cssArr as $key=>$row): ?><link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>/<?php echo ($row); ?>.css" /><?php endforeach; endif; ?>
    <script src="<?php echo ($url_ali); ?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo ($url_ali); ?>js/common.js" type="text/javascript"></script>
    <?php if(is_array($jsArr)): foreach($jsArr as $key=>$row): ?><script src="<?php echo ($url_ali); ?>js/<?php echo ($row); ?>.js" type="text/javascript"></script><?php endforeach; endif; ?>
</head>
<body>
    <div class="header">
        <div class="header_innder w">
            <div class="logo"><a href=""><img src="http://www.mtdfs.com/skin/frontend/rwd/mtdfs/images/logo.gif"></a></div>
            <div class="head_shade">用户推荐</div>
        </div>
    </div>





<div class="container clearfix">
    <div class="navs">
    <a href="http://www.user.com" <?php echo (getEqual($mod,'index','class=current')); ?>>首 页</a>
    <a href="http://www.user.com/award" <?php echo (getEqual($mod,'award','class=current')); ?>>奖励详情</a>
    <a href="http://www.user.com/withdraw" <?php echo (getEqual($mod,'withdraw','class=current')); ?>>提现记录</a>
</div>
    <div class="contents">
        <div class="recommend_details">
            <div class="head">
                <div class="title">提现记录</div>
            </div>
            <div class="content">
                <table width="100%" class="table_recommend">
                    <thead>
                        <tr>
                            <th>日期</th>
                            <th>订单金额</th>
                            <th>状态</th>
                            <th>备注</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class='state_range'>
                            <td>直接推荐</td>
                            <td>12人</td>
                            <td>12人</td>
                            <td>*  </td>
                        </tr>
                        <tr class='state_success'>
                            <td>直接推荐</td>
                            <td>12人</td>
                            <td>12人</td>
                            <td>*  </td>
                        </tr>
                        <tr class='state_fail'>
                            <td>直接推荐</td>
                            <td>12人</td>
                            <td>12人</td>
                            <td>*  </td>
                        </tr>
                    </tbody>
                </table>
                <div class='page'><?php echo ($page); ?></div>
            </div>
        </div>
    </div>
</div>
<div  id="footer" class="footer"  data-url="http://www.user.com/"> 
</div>
<div id="windown_box"></div>
</body>
</html>