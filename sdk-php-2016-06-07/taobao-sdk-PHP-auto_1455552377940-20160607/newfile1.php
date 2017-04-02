<?php
    include "TopSdk.php";
    include "./top/request/AlibabaAliqinFcSmsNumSendRequest.php"; 
    // var_dump($_SESSION);die;
    //ajax参考链接http://127.0.0.1//matouPC/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/newfile.php?phone=15136092338
  //var_dump($_GET);die;
 
    $c = new TopClient;
    $phone = $_GET['phone'];
   
    $c ->appkey = '23590039' ;
    $c ->secretKey = '78b9d0b14317705a140e9512d2092682';
    $req = new AlibabaAliqinFcSmsNumSendRequest;
   $req ->setExtend( "12312" );
  $req ->setSmsType( "normal" );
   	$req ->setSmsFreeSignName( "喜事码头" ); //你申请的短信签名
	//$req ->setSmsParam( "{code:'$code'}" );
	$req ->setRecNum( "$phone" );//客户手机号
    $req ->setSmsTemplateCode( "SMS_41655149" );
    $resp = $c ->execute( $req );
   // var_dump($resp);
?>