<?php
function Send_sms($phone){
	Vendor('Alidayu.TopSdk','','.php');
	$appkey = '23590039'; //申请到的key
	$secret = '78b9d0b14317705a140e9512d2092682';//申请的secret
	$c = new \TopClient;
	$c ->appkey = $appkey ;
	$c ->secretKey = $secret ;
	$req = new \AlibabaAliqinFcSmsNumSendRequest;
	//$req ->setExtend( "123" );
	$req ->setSmsType( "normal" );
	$req ->setSmsFreeSignName( "码头通知" ); //你申请的短信签名
	//$req ->setSmsParam( "{code:'$code'}" );
	$req ->setRecNum( "$phone" );//客户手机号
	$req ->setSmsTemplateCode( "SMS_41025098 " );//你的短信模板编号
	$resp = $c ->execute( $req );
	return $resp;
}
?>