<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
        <title><?php echo ($title); ?></title>
        <link href="<?php echo ($url_ali); ?>images/favicon.ico" rel="shortcut icon"/>
         <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <meta content="<?php echo (msubstr($keywords,0,3000,14000,true)); ?>" name="keywords"/>
        <meta content="<?php echo (msubstr($description,0,3000,14000,true)); ?>" name="description"/>
        <link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>css/style_mobile<?php echo ($version); ?>.css" />
        <?php if(is_array($cssArr)): foreach($cssArr as $key=>$row): ?><link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>/<?php echo ($row); ?>.css" /><?php endforeach; endif; ?>
		<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?3150038f336cd12048cd9c88278dcfa9";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    </head>
    <body class="<?php echo ($control); ?>_<?php echo ($mod); ?>">

<?php echo ($code); ?>
</body>
</html>
<script src="<?php echo ($url_ali); ?>js/jquery1.8.min.js" type="text/javascript"></script>
<?php if(is_array($jsArr)): foreach($jsArr as $key=>$row): ?><script src="<?php echo ($url_ali); ?>js/<?php echo ($row); ?>.js" type="text/javascript"></script><?php endforeach; endif; ?>