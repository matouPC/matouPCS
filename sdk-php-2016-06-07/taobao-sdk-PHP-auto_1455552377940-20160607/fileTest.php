<?php
    include "TopSdk.php";
    include "./top/request/AlibabaAliqinFcSmsNumSendRequest.php"; 
    // var_dump($_SESSION);die;
    //ajax参考链接http://139.196.34.227/matouPC/sdk-php-2016-06-07/taobao-sdk-PHP-auto_1455552377940-20160607/fileTest.php
    // var_dump($_GET);die;
    $c = new TopClient;
    $tel = $_GET['tel'];
    $code = rand(1000,9999);
    echo $code;
    $c ->appkey = '23590039' ;
    $c ->secretKey = '78b9d0b14317705a140e9512d2092682';
    $req = new AlibabaAliqinFcSmsNumSendRequest;
    $req ->setExtend( "12312" );
    $req ->setSmsType( "normal" );
    $req ->setSmsFreeSignName( "喜事码头" );
    $req ->setSmsParam( "{code:'".$code."'}" );
    $req ->setRecNum( "{$tel}" );
    $req ->setSmsTemplateCode( "SMS_37985087" );
    $resp = $c ->execute( $req );
  //var_dump($resp);

?>