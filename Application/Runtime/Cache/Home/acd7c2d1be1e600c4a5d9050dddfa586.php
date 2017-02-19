<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>Thinkphp仿淘宝分页跳转</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/page/Public/css/style.css" />
    </head>
    <body>

        <div class="container clearfix">
            <div class="contents">
                <div class="recommend_details">
                    <div class="head">
                        <div class="title">jQuery特效</div>
                    </div>
                    <div class="content">
                        <table width="100%" class="table_recommend">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>标题</th>
                                    <th>时间</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($lists)): foreach($lists as $key=>$row): ?><tr class='state_range'>
                                    <td><?php echo ($row["id"]); ?></td>
                                    <td><a href="http://www.test.com/js/<?php echo ($row["id"]); ?>.html" target="_blank"><?php echo ($row["name"]); ?></a></td>
                                    <td><?php echo (date("Y-m-d H:i",$row["addtime"])); ?></td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div class='pager'><?php echo ($page); ?></div>
                    </div>
                </div>
            </div>
        </div>
    <div  id="footer" class="footer"  data-url="http://www.test.com/"> 
</div>
<div id="windown_box"></div>
</body>
</html>



    <script src="/page/Public/js/jquery.js" type="text/javascript"></script>
    <script>
        function getInputPage() {
            var page = $("#page-num").val();
            var page_url = decodeURI($("#page-submit").attr("data-page"));
            page_url = page_url.replace('[PAGE]', page)
            location.href = page_url;
        }
        $("#page-num").keydown(function(e) {
            var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
            if (key == 13) {
                e.preventDefault();
                getInputPage()
            }
        });
    </script>