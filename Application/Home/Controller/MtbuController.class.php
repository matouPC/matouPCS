<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class MtbuController extends Controller
{
    public function index()
    {
    	//码头部队
   
    	$list =M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit('0,2')->select();
    	//热门部队
    	$listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.collect desc')->limit('0,2')->select();


    	$this->assign('list',$list);
    	$this->assign('listn',$listNew);

    	$this->display();
    }
    public function rzbdsh()
    {
    	//商品详情
    	 
    	$force = M('forcee as s')->field( "s.*,u.username,u.addre,u.fen" ) ->join('user as u on s.uid = u.id')->where('s.status=2')->order('s.id desc')->find();
    
    	$this->assign('v',$force);
    	$this->display('Mtbu/rzbdsh');
    	 
    }
    public function spglcg()
    {
    	//商品详情
 
    	$uid=$_SESSION['id'];
    	
    	$v = M('shop')->where("uid = {$uid}")->where("status=2")->find();//我的商铺
    	
    	$this->assign('v',$v);
    
    	$this->display('Mtbu/spglcg');
    
    }
    public function spglsh()
    {
    	//商品详情
    
    	$this->display('Mtbu/spglsh');
    
    }
    public function bdusaveimg(){
    	$data['logo'] =I('imagename');
    	$id = $_SESSION['id'];
    	$img = M('forcee');
    	$ob = $img->where("status=2 and uid = {$id}")->save($data);
    	if($ob){
    		echo 'y';
    	}
    }
    public function rzbdcj()
    {
    	/*  echo '<pre>';
    	 var_dump($_FILES);die; */
    	$post = array_keys($_POST);
    	$files = array_keys($_FILES);
    	$num = 0;
    	$nums = 0;
    	foreach ($files as $value) {
    		$jie = substr($value,0,-1);
    		if($jie == 'bdimg'){
    			$num ++;
    		}else{
    			$nums ++;
    		}
    
    	}
    	$_POST['uid']= $_SESSION['id'];
    	$ob = $did = M('forcee')->add($_POST);
    	
    	for ($i=1; $i <= $num ; $i++) {
    		 
    		$upload=$_FILES["bdimg{$i}"];
    		$upload = new \Think\Upload($upload);
    		// var_dump($upload);die;
    		$upload->maxSize   =     99999999999999 ;// 设置附件上传大小
    		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath  =      './Uploads/'; // 设置附件上传目录
    		$info   =   $upload->upload(array($_FILES["bdimg{$i}"]));
    		foreach($info as $upload){
    			$data['imagenames'] =  $upload['savename'];
    		}
    		$data['pid'] =  $ob;
    		$data['usid'] =  $_SESSION['id'];
    		$data['pubtimes']=date("Y-m-d",time());
    		if($data['imagenames']==''){
    			 
    		}else{
    			$id= M('forceimage')->add($data);
    		}
    		
    	
    	}
    	for ($i=1; $i <= $nums-1 ; $i++) {
    		 
    		$upload=$_FILES["file{$i}"];
    		$upload = new \Think\Upload($upload);
    		// var_dump($upload);die;
    		$upload->maxSize   =     99999999999999 ;// 设置附件上传大小
    		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    		$upload->savePath  =      './Uploads/'; // 设置附件上传目录
    		$info   =   $upload->upload(array($_FILES["file{$i}"]));
    	//var_dump($nums);die;
    		foreach($info as $upload){
    			$data['imagename'] =  $upload['savename'];
    		}
    		$data['types'] = $_POST["file_title{$i}"];
    		$data['video'] = $_POST["file_video{$i}"];
    		$data['pid'] =  $ob;
    		$data['usid'] =  $_SESSION['id'];
    		$data['usid'] =  $_SESSION['id'];
    		$data['pubtime']=date("Y-m-d",time());
    		if($data['imagename']==''){
    			
    		}else{
    		$id= M('forcevideo')->add($data);
    		}
    	}
    	$this->rzbdsh();
    }
    public function dongtaidi()
    {
    	//码头部队
    	$id=I('id');
    	$address=I('address');
    	if($address==''){
    		if($id==1){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '工作室'")->order('f.id')->limit('0,3')->select();
    	}else if($id==2){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '表演团'")->order('f.id')->limit('0,3')->select();
    	}else if($id==3){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '婚庆公司'")->order('f.id')->limit('0,3')->select();
    	}else if($id==4){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '影楼'")->order('f.id')->limit('0,3')->select();
    	}
    }else{
    	if($id==1){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '工作室' and addre='{$address}'")->order('f.id')->limit('0,3')->select();
    	}else if($id==2){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '表演团' and addre='{$address}'")->order('f.id')->limit('0,3')->select();
    	}else if($id==3){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '婚庆公司' and addre='{$address}'")->order('f.id')->limit('0,3')->select();
    	}else if($id==4){
    		$list =M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '影楼' and addre='{$address}'")->order('f.id')->limit('0,3')->select();
    	}
    }
    	//热门部队
    	$this->ajaxReturn($list);
    }
    public function buduijzre(){
    	//动态
    	//$uid = $_SESSION['id'];
    	$address=I('address');
    	
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$total=M('dongtai')->count();//数据记录总数
    	$num=2;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出if
    	if($address==''){
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->join('forcee as s on s.uid = u.id')-> field( "u.*,d.*,s.status")->where('status=2')->limit($limitpage,$num)->order('d.did desc')->select();
    	}else{
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->join('forcee as s on s.uid = u.id')-> field( "u.*,d.*,s.status")->where("addre='{$address} and status=2'")->limit($limitpage,$num)->order('d.did desc')->select();
    	}
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
    	
    
    }
    public function buduijzgz(){
    $address=I('address');
    	//$uid = $_SESSION['id'];
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$total=M('forcee')->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($address==''){
    	$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("type_bd='工作室' ")->limit($limitpage,$num)->order('f.id desc')->select();
    	}else{
    		$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("type_bd='工作室' and addre='{$address}'")->limit($limitpage,$num)->order('f.id desc')->select();
    	}
    	//$this->ajaxReturn($data);
    	$this->ajaxReturn($data);
    
    }
    public function buduijzby(){
    	$address=I('address');
    	//$uid = $_SESSION['id'];
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$total=M('forcee')->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($address==''){
    	$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '表演团' ")->order('f.id desc')->limit($limitpage,$num)->select();
    	}else{
    			$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("f.type_bd = '表演团'  and addre='{$address}'")->order('f.id desc')->limit($limitpage,$num)->select();
    	}
    	//$this->ajaxReturn($data);
    	$this->ajaxReturn($data);
    
    }
    public function buduijzhq(){
    	$address=I('address');
    	//$uid = $_SESSION['id'];
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$total=M('forcee')->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($address==''){
    	$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("type_bd='婚庆公司' ")->limit($limitpage,$num)->order('f.id desc')->select();
    	}else{
    	$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("type_bd='婚庆公司' addre='{$address}'")->limit($limitpage,$num)->order('f.id desc')->select();
    	}
    	//$this->ajaxReturn($data);
    	$this->ajaxReturn($data);
    
    }
    public function buduijzyl(){
    	$address=I('address');
    	//$uid = $_SESSION['id'];
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$total=M('forcee')->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出if
    
    	$data=M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->where("type_bd='影楼' addre='{$address}'")->limit($limitpage,$num)->order('f.id desc')->select();
    
    	//$this->ajaxReturn($data);
    	$this->ajaxReturn($data);
    
    }
    public function rzbd()
    {
        //认证部队
        $this->display('Mtbu/rzbd');
    }
    public function rzbdzy($id)
    {
    //认证部队主页

        $list = M('forcee as f')->join('user as u on f.uid = u.id')->join('forceimage as m on f.id = m.pid')->join('forcevideo as v on f.id = v.pid')->where("f.id = {$id}")->select();
        $this->assign('list',$list);
        $this->display('Mtbu/rzbdzy');
    }
    public function grbdzy()
    {
        //个人部队主页
        $this->display('Mtbu/grbdzy');
    }
    public function grbddndt($id)
    {
        //个人部队对内动态
       $list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	//var_dump($list);die;
    	//个人基本信息遍历
    	$dt = M('user')->where("id = {$id}")->find();
    	//	var_dump($dt);die;
    $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$id}")->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$id}")->order('g.iid desc')->select();
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddndt');
    }
    public function grliuyan()
    {
    	//认证部队对外动态_留言
    	// var_dump($_POST);
    	date_default_timezone_set('prc');
    	$data['xsid'] = $_POST['id'];//商铺的id
    	$id=$_POST['id'];
    	$data['uid'] = $_SESSION['id'];//用户的id
    	$data['contents'] = $_POST['contents'];//留言的内容
    	$data['ltime'] = date('Y-m-d H:i:s',time());//留言的事件
    //	var_dump($data['Itime']);die;
    	$form=M('liuyan');
    	$ob = $form->add($data);
    	// echo  $form->getLastSql();die;
    	if($ob > 0){

    		$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    		$this->ajaxReturn($list);
    	}
    	 
    }
    public function grlyjzdt(){
    	$p=2;
    	$id=23;
    
    	$total=M('liuyan')->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	$data=M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->limit($limitpage,$num)->order('lid desc')->select();
    	
    	$this->ajaxReturn($data);
    }
    public function grbddnlyre()
    {
    	//商铺部队对内留言
    	$id = I('id');
    	$where = I('where');
    	if($where=='z'){
    		$list =  M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	}else{
    		$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('s.zan desc')->limit('0,3')->select();
    	}
    	$this->ajaxReturn($list);
    }
    public function grlyjzdtre(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	//$db=M('shop_liuyan');
    	$total=M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    //超过最大页数，退出
    	$data=M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->limit($limitpage,$num)->order('s.zan desc')->select();
    	//echo $data;die;
    	$this->ajaxReturn($data);
    
    }
    public function grbddnly($id)
    {
        //个人部队对内留言
    	$list = $list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	//var_dump($list);die;
    	//个人基本信息遍历
    	$dt = M('user')->where("id = {$id}")->find();
    	//	var_dump($dt);die;
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddnly');
    }
    public function grbddnxq($id)
    {
        //个人部队对内详情

    	$dt = $dt = M('user')->where("id = {$id}")->find();
    	$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	
    	//基本悬赏信息
    	$jbxs = M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.psid desc')->limit('5')->select();
    	//详情悬赏信息
    	$jbxsData = M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	// var_dump($jbxsData);die;
    	//基本应赏信息
    	$jbys = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('d.did desc')->limit('3')->select();
    	//基本招聘信息
    	$jbzp = M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.rid desc')->limit('4')->select();
    	//详情招聘信息
    	$jbzpData = M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//基本应聘信息
    	$jbyp = M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	$jbypx = M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	//基本闲置
       $jbxz = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('e.fid desc')->limit('3')->select();
    	$jbxzimg = M('fleaimage')->select();
    	//基本求购
    	$jbqg = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('e.fid desc')->limit('3')->select();
    	
    	$this->assign('jbxs',$jbxs);
    	$this->assign('jbxsData',$jbxsData);
    	$this->assign('jbys',$jbys);
    	$this->assign('jbzp',$jbzp);
    	$this->assign('jbzpData',$jbzpData);
    	$this->assign('jbyp',$jbyp);
    	$this->assign('jbypx',$jbypx);
    	$this->assign('jbxz',$jbxz);
    	$this->assign('jbxzimg',$jbxzimg);
    	$this->assign('jbqg',$jbqg);
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddnxq');
    }
    public function grbddydt()
    {
        //个人部队对外动态
       $id=I('id');
    	$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	//var_dump($list);die;
    	//个人基本信息遍历
    	$dt = M('user')->where("id = {$id}")->find();
    	//	var_dump($dt);die;
        $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$id}")->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$id}")->order('g.iid desc')->select();
        $uuid = $_SESSION['id'];
        if($uuid == ''){
        	$uuid = 0;
        }
        $fid = $dt['id'];
        $guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);

        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddydt');
    }
    public function grbddyly($id)
    {
        //个人部队对外留言
    	$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();
    	//var_dump($list);die;
    	//个人基本信息遍历
    	$dt = M('user')->where("id = {$id}")->find();
        $uuid = $_SESSION['id'];
        if($uuid == ''){
        	$uuid = 0;
        }
        $fid = $dt['id'];
        $guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddyly');
    }
    public function grbddyxq($id)
    {
        //个人部队对外详情

    	$dt = $dt = M('user')->where("id = {$id}")->find();
    	$list = M('liuyan as s')->join('user as u on s.uid = u.id')->where("s.xsid = {$id}")->order('lid desc')->limit('0,3')->select();

    	//基本悬赏信息
    	$jbxs = M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.psid desc')->limit('5')->select();
    	//详情悬赏信息
    	$jbxsData = M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	// var_dump($jbxsData);die;
    	//基本应赏信息
    	$jbys = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('d.did desc')->limit('3')->select();
    	//基本招聘信息
    	$jbzp = M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.rid desc')->limit('4')->select();
    	//详情招聘信息
    	$jbzpData = M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//基本应聘信息
    	$jbyp = M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	$jbypx = M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	//基本闲置
    	$jbxzimg = M('fleaimage')->select();
    	$jbxz = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('e.fid desc')->limit('3')->select();
    	
    	//基本求购
    	$jbqg = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('e.fid desc')->limit('3')->select();
    	$uuid = $_SESSION['id'];
    	if($uuid == ''){
    		$uuid = 0;
    	}
    	$fid = $dt['id'];
    	$guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
    	$uus = M('user_fen')->select();//互粉
    	$this->assign('guan',$guan);
    	$this->assign('uus',$uus);
    	$this->assign('jbxs',$jbxs);
    	$this->assign('jbxsData',$jbxsData);
    	$this->assign('jbys',$jbys);
    	$this->assign('jbzp',$jbzp);
    	$this->assign('jbzpData',$jbzpData);
    	$this->assign('jbyp',$jbyp);
    	$this->assign('jbypx',$jbypx);
    	$this->assign('jbxzimg',$jbxzimg);
    	$this->assign('jbxz',$jbxz);
    	$this->assign('jbqg',$jbqg);
    	$this->assign('dt',$dt);
    	$this->assign('list',$list);
        $this->display('Mtbu/grbddyxq');
    }
    public function grbdxqre()
    {
    
    	//$uid = $_SESSION['id'];
    	$id=I('id');
    	$where=I('where');
    	if($where=='r'){
    			//基本悬赏信息
    	$jbxs = M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->order('collect desc')->limit('5')->select();
    	//详情悬赏信息
    	$jbxsData = M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	// var_dump($jbxsData);die;
    	//基本应赏信息
    	$jbys = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('collect desc')->limit('3')->select();
    	//基本招聘信息
    	$jbzp = M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->order('collect desc')->limit('4')->select();
    	//详情招聘信息
    	$jbzpData = M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//基本应聘信息
    	$jbyp = M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->order('collect desc')->limit('3')->select();
    	$jbypx = M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('collect desc')->limit('3')->select();
    	//基本闲置
    	$jbxz = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('collect desc')->limit('3')->select();
    	$jbxzimg = M('fleaimage')->select();
    	//基本求购
    	$jbqg = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('collect desc')->limit('3')->select();
    		$xuqiu['xji'] =  $jbxs;
    		$xuqiu['xben'] =  $jbxsData ;
    		$xuqiu['shang'] =  $jbys ;
    		$xuqiu['wji'] =  $jbzp ;
    		$xuqiu['wben'] =  $jbzpData   ;
    		$xuqiu['pji'] =  $jbyp ;
    		$xuqiu['pben'] =  $jbypx ;
    		$xuqiu['qiu'] =  $jbqg  ;
    		$xuqiu['xian'] =   $jbxz  ;
    		$xuqiu['xianimg'] =   $jbxzimg  ;
    	}else if($where=='z') {
    		//基本悬赏信息
    	$jbxs = M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.psid desc')->limit('3')->select();
    	//详情悬赏信息
    	$jbxsData = M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	// var_dump($jbxsData);die;
    	//基本应赏信息
    	$jbys = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('d.did desc')->limit('3')->select();
    	//基本招聘信息
    	$jbzp = M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->order('e.rid desc')->limit('4')->select();
    	//详情招聘信息
    	$jbzpData = M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//基本应聘信息
    	$jbyp = M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	$jbypx = M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    	//基本闲置
    	$jbxz = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('e.fid desc')->limit('3')->select();
    	$jbxzimg = M('fleaimage')->select();
    	//基本求购
    	$jbqg = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('e.fid desc')->limit('3')->select();
    	$xuqiu['xji'] =  $jbxs;
    	$xuqiu['xben'] =  $jbxsData ;
    	$xuqiu['shang'] =  $jbys ;
    	$xuqiu['wji'] =  $jbzp ;
    	$xuqiu['wben'] =  $jbzpData   ;
    	$xuqiu['pji'] =  $jbyp ;
    	$xuqiu['pben'] =  $jbypx ;
    	$xuqiu['qiu'] =  $jbqg  ;
    	$xuqiu['xian'] =   $jbxz  ;
    	$xuqiu['xianimg'] =   $jbxzimg  ;
    	}
    
    	$this->ajaxReturn($xuqiu);
    }
    public function grxuanshang()
    {
    	//搜索悬赏
    	$id=$_POST['id'];
    	//$db=M('user');
    	$rz=I('rz');
    	if($rz=='z'){
    		$list= M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.psid desc')->select();
    	}else if($rz=='r'){
    		$list= M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	//详情悬赏信息
    	$lis=M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	//   echo '<pre>';
    	$xuanshang['ji'] = $list;
    	$xuanshang['ben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xuanshang);
    
    }
    public function gryingshang()
    {
    	//搜索应赏
    
    	$id=$_POST['id'];
    	$rz=I('rz');
    	if($rz=='z'){
    		$list = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.did desc')->select();
    	}else if($rz=='r'){
    		$list = M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.collect desc')->select();
    	}
    	$this->ajaxReturn($list);
    
    }
    public function grzhaopin()
    {
    	//搜索招聘
    	$id=$_POST['id'];
    	$rz=I('rz');
    	if($rz=='z'){
    		$list= M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.rid desc')->select();
    	}elseif ($rz=='r'){
    		$list= M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	$lis= M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//  echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($zhaopin);
    
    }
    public function gryingpin()
    {
    	//搜索应聘
    	$id=$_POST['id'];
    	$rz=I('rz');
    	if($rz=='z'){
    		$list= M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.eid desc')->select();
    	}else if($rz=='r'){
    		$list= M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}//详情悬赏信息
    	$lis= M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($yingpin);
    
    }
    public function grqiugou()
    {
    	//搜索求购
    	$id=$_POST['id'];
    	$rz=I('rz');
    	if($rz=='z'){
    		$list = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
    		$list = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
    	$this->ajaxReturn($list);
    
    }
    public function grxianzhi()
    {
    	//搜索闲置
    	$id=$_POST['id'];
    	//$db=M('user');
    	$rz=I('rz');
    	if($rz=='z'){
    		$list = M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
    		$list =M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
       $lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);
    
    }
  
    public function grbddndtre()
    {
    	//商铺部队对内动态热门
    	//$uid = $_SESSION['id'];
    	$id=I('id');
    	$where=I('where');
    	
    
    	if(strlen($where)>1){
    		$type= substr($where, 0, 1 );
    		$two= substr($where, 1, 1 );
    		//var_dump($two);die;
    		if($type=='1'&&$two=='z'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id} ")->order('d.did desc')->limit(1)->select();
    		}else if ($type=='1'&&$two=='r'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id}")->order('d.zan desc')->limit(1)->select();
    		}else if ($type=='2'&&$two=='z'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id} and d.type = 2")->order('d.did desc')->limit(1)->select();
    		}else {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id}")->order('d.zan desc')->limit(1)->select();
    		}
    
    	}else{
    		if($where=='r'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id}")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='z') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id}")->order('d.did desc')->limit(1)->select();
    		}else if($where=='1') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id}")->order('d.did desc')->limit(1)->select();
    		}else{
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.uid = {$id} and d.type = 2")->order('d.did desc')->limit(1)->select();
    		}
    	}
    	$this->ajaxReturn($remen);
    }
    public function rzbd1()
    {
    	//认证部队对内动态
             $uid=I('uid');
    	$sp= M('forcee')->where("uid = {$uid}")->select();//我
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	//var_dump($id);die;
    	 $this->rzbddndt($id);
    }
    public function rzbddndt()
    {
        //认证部队对内动态
    	
    	$uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $list = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
        $this->assign('list',$list);
        $this->assign('li',$li);
        $this->display('Mtbu/rzbddndt');
    }
    public function rzbddnly()
    {
        //认证部队对内留言
    	$uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //用户和部队基本信息遍历
        $bu = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
         //关注
        $uid = $_SESSION['id'];
        $fid = $bu['uid'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
         $uus = M('user_fen')->select();//互粉
        $this->assign('bu',$bu);
        $this->assign('list',$list);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddnly');
    }
    public function rzbddnxq()
    {
        //认证部队对内详情
    	$uuid=I('id');
    	$sp = M('forcee')->where("uid ={$uuid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        //认证部队对外需求 传过来的是认证部队的id->用来查询所有的认证部队发的需求信息
        //用户基本信息
        $user = M('forcee as f')->join('user as u on u.id = f.uid')->where("f.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('forcee as f')->join('reward1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('forcee as f')->join('reward2 as r on f.uid = r.usid')->where("f.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('forcee as f')->join('due as d on f.uid = d.uid')->where(" f.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('forcee as f')->join('recruit1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('forcee as f')->join('recruit2 as r on f.uid = r.usid')->where(" f.id = {$id} ")->select();
        //基本应聘信息
         $jbyp = M('forcee as f')->join('employ as e on f.uid = e.uid')->where("f.id = {$id}")->limit('0,3')->select();
        //应聘详情信息
          $jbypx = M('forcee as f')->join('employ as e on f.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("f.id = {$id}")->select();
        //基本闲置
         $jbxz =  M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 1")->order('e.fid desc')->limit('0,3')->select();
          $jbxzimg = M('fleaimage')->select();
        //基本求购
        $jbqg = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 2")->select();
        //留言
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //关注
       if($_SESSION['id']!=''){
        $uid = $_SESSION['id'];
        $fid = $user['id'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
       }
        $uus = M('user_fen')->select();//互粉
        //开始带值
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbypx',$jbypx);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbxzimg',$jbxzimg);
        $this->assign('jbqg',$jbqg);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddnxq');
    }
    public function rzbddydt()
    {
        //认证部队对外动态
    	$uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $list = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();;
        $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
     
        $uid = $_SESSION['id'];//当前登录用户的id
        $fid = $list['uid'];//当前查看的用户id
        $uus = M('user_fen')->select();//互粉
        $this->assign('list',$list);
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddydt');
    }
   

    //关注的方法
    public function rzbddydt_guanzhu($fid){
        $data['fens'] = 2;
        $ob = M('user_fen')->where(" id = {$fid}")->save($data);
        if($ob > 0){
            echo '关注成功';
        }else{
            echo '滚犊子';
        }
    }
    //取消关注的方法
    public function rzbddydt_qxguanzhu($fid){
        $data['fens'] = 1;
        $ob = M('user_fen')->where(" id = {$fid}")->save($data);
        if($ob > 0){
            echo '已取消';
        }else{
            echo '滚犊子';
        }
    }    
    public function rzbddydt_liuyan()
    {
        //认证部队对外动态_留言
        // var_dump($_POST);
        date_default_timezone_set('prc');
        $uid = I('id');//商铺的id
      
        $sp = M('forcee')->where("uid = {$uid}")->where("status = 2")->select();//我的商铺
        foreach ($sp as $v){
        	$fid=$v['id'];
        }
        $data['fid'] = $fid;//部队的id
        $data['uid'] = $_SESSION['id'];//用户的id
        $data['content'] = $_POST['content'];//留言的内容
        $data['time'] = date('Y-m-d H:i:s',time());//留言的事件
       
        $fids['uid'] = $_SESSION['id'];
        $fids['fid'] = $uid;//被收藏的用户id
        $fids['type_xx'] = 2;
        $fids['content_xx'] = $_POST['content'];
        $xd = M("user_xx_bd")->add($fids);
        if($xd > 0){
        $ob = M('foree_liuyan')->add($data);
            if($ob > 0){
                $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$fid}")->order('f.lid desc')->limit('0,3')->select(); 
                $this->ajaxReturn($li);
            }
        }  
       
    }
    public function rzbd_liu_zan($lid,$zan){
         $uid = $_SESSION['id'].',';

        $li = M('foree_liuyan')->where("lid = {$lid}")->find();
        if(empty($li)){
            $data['lid'] = $lid;
            $ob = M("foree_liuyan")->add($data);
        }
        $li['zid'] = '';
        $lis = M('foree_liuyan')->where("lid = {$lid}")->find();
        $lis['zid'] .= $uid;
        $db = M("foree_liuyan")->where("lid = {$lid}")->save($lis);
        if($db > 0){
           $data['zan'] = $zan;
           $ob = M('foree_liuyan')->where("lid = {$lid}")->save($data);
           if($ob > 0){
               echo '点赞成功';
            } 
        }   
    }
    public function grbd_liu_zan($lid,$zan){
    	$uid = $_SESSION['id'].',';
    
    	$li = M('liuyan')->where("lid = {$lid}")->find();
    	if(empty($li)){
    		$data['lid'] = $lid;
    		$ob = M("liuyan")->add($data);
    	}
    	$li['zid'] = '';
    	$lis = M('liuyan')->where("lid = {$lid}")->find();
    	$lis['zid'] .= $uid;
    	$db = M("liuyan")->where("lid = {$lid}")->save($lis);
    	if($db > 0){
    		$data['zan'] = $zan;
    		$ob = M('liuyan')->where("lid = {$lid}")->save($data);
    		if($ob > 0){
    			echo '点赞成功';
    		}
    	}
    }
    public function spbd_liu_zan($lid,$zan){
    	$uid = $_SESSION['id'].',';
    
    	$li = M('shop_liuyan')->where("id = {$lid}")->find();
    	if(empty($li)){
    		$data['id'] = $lid;
    		$ob = M("shop_liuyan")->add($data);
    	}
    	$li['zid'] = '';
    	$lis = M('shop_liuyan')->where("id = {$lid}")->find();
    	$lis['zid'] .= $uid;
    	$db = M("shop_liuyan")->where("id = {$lid}")->save($lis);
    	if($db > 0){
    		$data['zan'] = $zan;
    		$ob = M('shop_liuyan')->where("id = {$lid}")->save($data);
    		if($ob > 0){
    			echo '点赞成功';
    		}
    	}
    }
    public function rzbd_gt_zan($did,$zan){
    	$uid = $_SESSION['id'].',';
    
    	$li = M('dongtai')->where("did = {$did}")->find();
    	if(empty($li)){
    		$data['did'] = $did;
    		$ob = M("dongtai")->add($data);
    	}
    	$li['zid'] = '';
    	$lis = M('dongtai')->where("did = {$did}")->find();
    	$lis['zid'] .= $uid;
    	$db = M("dongtai")->where("did = {$did}")->save($lis);
    	if($db > 0){
    		$data['zan'] = $zan;
    		$ob = M('dongtai')->where("did = {$did}")->save($data);
    		if($ob > 0){
    			echo '点赞成功';
    		}
    	}
    }
    public function rzbddyly()
    {
        //认证部队对外留言 $id为部队id
    	$uuid=I('id');
    	$sp = M('forcee')->where("uid ={$uuid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //用户和部队基本信息遍历
        $bu = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
         //关注
        $uid = $_SESSION['id'];
        if($uid == ''){
            $uid = 0;
        }
        $fid = $bu['uid'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
         $uus = M('user_fen')->select();//互粉
        $this->assign('bu',$bu);
        $this->assign('list',$list);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddyly');
    }
    public function lyjiazai(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
     	$uuid=I('id');
    	$sp = M('forcee')->where("uid ={$uuid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	//$db=M('foree_liuyan');
    	$total=M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
   
    	$data=M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->limit($limitpage,$num)->order('f.lid desc')->select();
    	//echo $data;die;
    	$this->ajaxReturn($data);
    
    }
    public function lypaixu()
    {
    	
       	$uuid=I('id');
    	$sp = M('forcee')->where("uid ={$uuid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where = I('where');
    	if($where=='z'){
    		$list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
    	}else{
    		$list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.zan desc')->limit('0,3')->select();
    	}
    	$this->ajaxReturn($list);
    }
    public function lyjiazaire(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
       	$uuid=I('id');
    	$sp = M('forcee')->where("uid ={$uuid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where = I('where');
    	$total=M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    //超过最大页数，退出
    	if($where=='1'){
    	$data=M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->limit($limitpage,$num)->order('f.lid desc')->select();
    	}else{
    		$data=M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->limit($limitpage,$num)->order('f.zan desc')->select();
    	}
    
  
    		$this->ajaxReturn($data);
   
    }
    public function rzbddyxq()//$id为部队id
    {
    	$uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        //认证部队对外需求 传过来的是认证部队的id->用来查询所有的认证部队发的需求信息
        //用户基本信息
        $user = M('forcee as f')->join('user as u on u.id = f.uid')->where("f.id = {$id}")->limit('0,3')->find();
        //基本悬赏信息
        $jbxs = M('forcee as f')->join('reward1 as e on f.uid = e.uid')->where("f.id = {$id}")->limit('0,3')->select();
        //详情悬赏信息
        $jbxsData = M('forcee as f')->join('reward2 as r on f.uid = r.usid')->where("f.id = {$id}")->limit('0,3')->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('forcee as f')->join('due as d on f.uid = d.uid')->where(" f.id = {$id} ")->limit('0,3')->select();
        //基本招聘信息
        $jbzp = M('forcee as f')->join('recruit1 as e on f.uid = e.uid')->where("f.id = {$id}")->limit('0,3')->select();
        //详情招聘信息
        $jbzpData = M('forcee as f')->join('recruit2 as r on f.uid = r.usid')->where(" f.id = {$id} ")->limit('0,3')->select();
        //基本应聘信息
         $jbyp = M('forcee as f')->join('employ as e on f.uid = e.uid')->where("f.id = {$id}")->limit('0,3')->select();
        //应聘详情信息
        $jbypx = M('forcee as f')->join('employ as e on f.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("f.id = {$id}")->select();
        //基本闲置
        $jbxz =  M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 1")->limit('0,3')->select();
        $jbxzimg = M('fleaimage')->select();

        //基本求购
        $jbqg = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 2")->limit('0,3')->select();
        //留言
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where(" f.fid = {$id} ")->order('f.lid desc')->limit('0,3')->select();
        //关注

        $uid = $_SESSION['id'];
        if($uid == ''){
            $uid = 0;
        }
        $fid = $user['id'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        //开始带值
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbypx',$jbypx);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbxzimg',$jbxzimg);
        $this->assign('jbqg',$jbqg);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        
        $this->display('Mtbu/rzbddyxq');
    }
    public function rzbdxqre()
    {
    
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=I('where');
    	if($where=='r'){
    		//基本悬赏信息
    		$jbxs = M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('3')->select();
    		//详情悬赏信息
    		$jbxsData = M('forcee as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    		// var_dump($jbxsData);die;
    		//基本应赏信息
    		$jbys = M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('d.collect desc')->limit('3')->select();
    		//基本招聘信息
    		$jbzp = M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('3')->select();
    		//详情招聘信息
    		$jbzpData = M('forcee as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    		//基本应聘信息
    		$jbyp = M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('3')->select();
    		$jbypx = M('forcee as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('e.collect desc')->limit('3')->select();
    		//基本闲置
    		$jbxz = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('e.collect desc')->limit('3')->select();
    		$jbxzimg = M('fleaimage')->select();
    		//基本求购
    		$jbqg = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('e.collect desc')->limit('3')->select();
    		$xuqiu['xji'] =  $jbxs;
    		$xuqiu['xben'] =  $jbxsData ;
    		$xuqiu['shang'] =  $jbys ;
    		$xuqiu['wji'] =  $jbzp ;
    		$xuqiu['wben'] =  $jbzpData   ;
    		$xuqiu['pji'] =  $jbyp ;
    		$xuqiu['pben'] =  $jbypx ;
    		$xuqiu['qiu'] =  $jbqg  ;
    		$xuqiu['xian'] =   $jbxz  ;
    		$xuqiu['xianimg'] =   $jbxzimg  ;
    	}else if($where=='z') {
    		//基本悬赏信息
    		$jbxs = M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.psid desc')->limit('5')->select();
    		//详情悬赏信息
    		$jbxsData = M('forcee as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    		// var_dump($jbxsData);die;
    		//基本应赏信息
    		$jbys = M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('d.did desc')->limit('3')->select();
    		//基本招聘信息
    		$jbzp = M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.rid desc')->limit('4')->select();
    		//详情招聘信息
    		$jbzpData = M('forcee as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    		//基本应聘信息
    		$jbyp = M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    		$jbypx = M('forcee as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
    		//基本闲置
    		$jbxz = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('e.fid desc')->limit('3')->select();
    		$jbxzimg = M('fleaimage')->select();
    		//基本求购
    		$jbqg = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('e.fid desc')->limit('3')->select();
    	    $xuqiu['xji'] =  $jbxs;
    		$xuqiu['xben'] =  $jbxsData ;
    		$xuqiu['shang'] =  $jbys ;
    		$xuqiu['wji'] =  $jbzp ;
    		$xuqiu['wben'] =  $jbzpData   ;
    		$xuqiu['pji'] =  $jbyp ;
    		$xuqiu['pben'] =  $jbypx ;
    		$xuqiu['qiu'] =  $jbqg  ;
    		$xuqiu['xian'] =   $jbxz  ;
    		$xuqiu['xianimg'] =   $jbxzimg  ;
    	}
    
    	$this->ajaxReturn($xuqiu);
    }
  public function spbddndt()
    {
        //商铺部队对内动态
        $uid=I('id');
    	//$uid = $_SESSION['id'];
        $sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
        foreach ($sp as $v){
        	$id=$v['id'];
        }
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        //var_dump($dt);die;
         $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();

         $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
         $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
         $this->assign('img',$img);
         $this->assign('dongtai',$dongtai);
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        //var_dump($dtimg);die;
        $this->display('Mtbu/spbddndt');
    }
    public function spbddndtre()
    {
    	//商铺部队对内动态热门
    	//$uid = $_SESSION['id'];
    	$uid=I('id');
    	$where=I('where');
   
    	if(strlen($where)>1){
    		$type= substr($where, 0, 1 );
    		$two= substr($where, 1, 1 );
    		//var_dump($two);die;
    		if($type=='1'&&$two=='z'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid} ")->order('d.did desc')->limit(1)->select();
    		}else if ($type=='1'&&$two=='r'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.zan desc')->limit(1)->select();
    		}else if ($type=='2'&&$two=='z'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid} and d.type = 2")->order('d.did desc')->limit(1)->select();
    		}else {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.zan desc')->limit(1)->select();
    		}
    
    	}else{
    		if($where=='r'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='z') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
    		}else if($where=='1') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
    		}else{
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid} and d.type = 2")->order('d.did desc')->limit(1)->select();
    		}
    	}
    	
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
    	$dongtai['nr'] = $remen;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	$this->ajaxReturn($dongtai);
  
    }
    public function jzdt(){
        $p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
         
        $db=M('user');
        $total=$db->count();//数据记录总数
        $num=1;//每页记录数
        $totalpage=ceil($total/$num);//总计页数
        $limitpage=($p-1)*$num;//每次查询取记录
        if($p>$totalpage){
            exit();
        }//超过最大页数，退出
        $data=$db->limit($limitpage,$num)->order('id desc')->select();
        // $arr=$data;
        //   var_dump( $data);die;
        //$this->ajaxReturn($data);
        if(count($data)>0){
        //  echo 1;
            $this->ajaxReturn($data);
        }else{}
    }
    public function lyjzdt(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$db=M('shop_liuyan');
    	$total=$db->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	$data=M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->join('shop as p on p.id = s.sid')->where("s.sid = {$id}")->limit($limitpage,$num)->order('s.id desc')->select();
    	//echo $data;die;
    	$this->ajaxReturn($data);
    
    		$this->ajaxReturn($data);
   
    }
    public function lyjzdtre(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$db=M('shop_liuyan');
    	$total=$db->count();//数据记录总数
    	$num=3;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    //超过最大页数，退出
    	$data=M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->join('shop as p on p.id = s.sid')->where("s.sid = {$id}")->limit($limitpage,$num)->order('s.zan desc')->select();
    	//echo $data;die;
    	$this->ajaxReturn($data);
    	
    		$this->ajaxReturn($data);
    
    }
    public function dtjzdtre(){
    	//动态
    	//$uid = $_SESSION['id'];  	
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$uid=$_POST['id'];
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出if
        $data=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->limit($limitpage,$num)->order('d.zan desc')->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
        $dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
 
    }
    public function dtjzdt(){
    	//动态
    	//$uid = $_SESSION['id'];
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$uid=$_POST['id'];
    	
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	$data=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->limit($limitpage,$num)->order('d.did desc')->select();
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
    
    }
    public function dnjzdt(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	//$db=M('user');
    
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	$data=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid={$id}")->limit($limitpage,$num)->order('d.did desc')->select();
    	  $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$id}")->order('g.iid desc')->select();
    	  $dongtai['nr'] = $data;
    	  $dongtai['tu'] = $img;
    		//  echo 1;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
  
    }
    public function dtjzdthd(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$uid=$_POST['id'];
    	//$db=M('user');
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出
    	$data=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid={$uid} and d.type = 2")->limit($limitpage,$num)->order('d.did desc')->select();
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
    	
    
    }
    public function dtjzdthdr(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$uid=$_POST['id'];
    	//$db=M('user')
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出
    	
    	$data=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid={$uid} and d.type = 2")->limit($limitpage,$num)->order('d.zan desc')->select();
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
    
    }
    public function spbddnly()
    {
        //商铺部队对内留言
    	$uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
         $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
       //  var_dump($list);die;
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddnly');
    }
    public function spbddnlyre()
    {
    	//商铺部队对内留言
    $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where = I('where');
    	if($where=='z'){
    	$list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
    	}else{
    		$list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.zan desc')->limit('0,3')->select();
    	}
          $this->ajaxReturn($list);
    }
    public function spbddnxq()
    {
 //商铺部队对外需求详情
    	$uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        //var_dump($sp);die;
        $user = M('shop as s')->join('user as u on u.id = s.uid')->where("s.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
        
        //基本应聘信息
        $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //应聘详情信息
        $jbypx = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
        //基本闲置
        $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->select();
        $jbxzimg = M('fleaimage')->select();
        //基本求购
        $jbqg = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->select();

        //留言
        $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();

        $this->assign('list',$list);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbypx',$jbypx);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('jbxzimg',$jbxzimg);
        $this->assign('dt',$dt);
        $this->assign('sp',$sp);
        $this->display('Mtbu/spbddnxq');
    }
    public function spbddnxqre()
    {

    	$uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=I('where');
    		if($where=='r'){
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('5')->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
     $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('d.collect desc')->limit('3')->select();
        //基本招聘信息
      $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('4')->select();
        //详情招聘信息
       $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
       //基本应聘信息
       $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.collect desc')->limit('3')->select();
       //应聘详情信息
       $jbypx = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();

        //基本闲置
     $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('e.collect desc')->limit('3')->select();
        //基本求购
        $jbqg = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('e.collect desc')->limit('3')->select();
        $jbxzimg = M('fleaimage')->select();
        $xuqiu['xji'] =  $jbxs;
        $xuqiu['xben'] =  $jbxsData ;
         $xuqiu['shang'] =  $jbys ;
         $xuqiu['wji'] =  $jbzp ;
         $xuqiu['wben'] =  $jbzpData ;
         $xuqiu['pji'] =  $jbyp ;
         $xuqiu['pben'] =  $jbypx ;
         $xuqiu['qiu'] =  $jbqg  ;
         $xuqiu['xian'] =   $jbxz ;
          $xuqiu['xianimg'] =   $jbxzimg  ;
    		}else if($where=='z') {		  
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.psid desc')->limit('5')->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('d.did desc')->limit('3')->select();
        //基本招聘信息
        $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.rid desc')->limit('4')->select();
        //详情招聘信息
        $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
        //基本应聘信息
        $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->order('e.eid desc')->limit('3')->select();
        //应聘详情信息
        $jbypx = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
        
        //基本闲置
        $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('e.fid desc')->limit('3')->select();
        //基本求购
        $jbqg = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('e.fid desc')->limit('3')->select();
        $jbxzimg = M('fleaimage')->select();
        $xuqiu['xji'] =  $jbxs;
        $xuqiu['xben'] =  $jbxsData ;
         $xuqiu['shang'] =  $jbys ;
         $xuqiu['wji'] =  $jbzp ;
         $xuqiu['wben'] =  $jbzpData ;
         $xuqiu['pji'] =  $jbyp ;
         $xuqiu['pben'] =  $jbypx ;
         $xuqiu['qiu'] =  $jbqg  ;
         $xuqiu['xian'] =   $jbxz ;
          $xuqiu['xianimg'] =   $jbxzimg  ;
    		}
    
      $this->ajaxReturn($xuqiu);
    }
    public function spgl()
    {
        //商铺部队基本信息详情
    	$id=I('id');
        if($id==''){
        $uid = $_SESSION['id'];
        $v = M('shop')->where("uid = {$uid}")->where("status=2")->find();//我的商铺
    }else{
    	$v = M('shop')->where("id = {$id}")->where("status=2")->find();//我的商铺
    }
        //var_dump($sp);die;
        $this->assign('v',$v);
        $this->display('Mtbu/spgl');
    }
    public function spglsp()
    {
        //商铺部队商品详情
    
        $this->display('Mtbu/spglsp');
    }
    public function usave(){
        //商铺基本信息修改
    	$id=I('id');
    	if($id==''){
    		$uid = $_SESSION['id'];
    		    $reward =M('shop')->where("uid={$uid}")->save($_POST);//我的商铺
    	}else{
    		    $reward =M('shop')->where("id={$id}")->save($_POST);//我的商铺
    	}
    
        $this->ajaxReturn($reward);
    
    
    }
    public function spbddydt($id)
    {
        
        //商铺部队对外动态 
    	$uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status = '2'")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->where("d.uid = {$uid}")->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->where("d.uid={$uid}")->order('g.iid desc')->select();
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $uuid = $_SESSION['id'];

        if($uuid == ''){
        	$uuid = 0;
        }
        $fid = $dt['id'];
        $guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddydt');
    }
    public function spbddyly()
    {
        //商铺部队对外留言
    	$uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
 
        $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $uuid = $_SESSION['id'];
        if($uuid == ''){
        	$uuid = 0;
        }
        $fid = $dt['id'];
        $guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->assign('sp',$sp);
        $this->display('Mtbu/spbddyly');
    }
    public function spbddyly_liuyan()
    {
        //认证部队对外动态_留言
        // var_dump($_POST);
        date_default_timezone_set('prc');
        $uid = I('id');//商铺的id
        $sp = M('shop')->where("uid = {$uid}")->select();//我的商铺
        foreach ($sp as $v){
        	$id=$v['id'];
        }
        $data['sid'] = $id;//用户的id
        $data['uid'] = $_SESSION['id'];//用户的id
        $data['contents'] = $_POST['contents'];//留言的内容
        $data['stime'] = date('Y-m-d H:i:s',time());//留言的事件


        $fids['uid'] = $_SESSION['id'];
        $fids['fid'] = $uid;//被收藏的用户id
        $fids['type_xx'] = 1;
        $fids['content_xx'] = $_POST['contents'];
        $xd = M("user_xx_sp")->add($fids);
        if($xd > 0){
            $ob = M('shop_liuyan')->add($data);
            if($ob > 0){
                $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
                $this->ajaxReturn($list);
            }
        }
        
         
    }
 
    public function spbddyxq()
    {
        //商铺部队对外需求详情
    	$uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        //var_dump($sp);die;
        $user = M('shop as s')->join('user as u on u.id = s.uid')->where("s.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
        
        //基本应聘信息
        $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //应聘详情信息
        $jbypx = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
        //基本闲置
        $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->select();
        $jbxzimg = M('fleaimage')->select();
        //基本求购
        $jbqg = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->select();

        //留言
        $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $uuid = $_SESSION['id'];
        if($uuid == ''){
        	$uuid = 0;
        }
        $fid = $user['id'];
        $guan = M('user_fen')->where("uid = {$uuid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->assign('list',$list);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbypx',$jbypx);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('jbxzimg',$jbxzimg);
        $this->assign('dt',$dt);
        $this->assign('sp',$sp);
        
        $this->display('Mtbu/spbddyxq');
    }
    public function xqjz(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$db=M('user');
    	$total=$db->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		exit();
    	}//超过最大页数，退出
    	$data=$db->limit($limitpage,$num)->order('id asc')->select();
    	// $arr=$data;
    	//   var_dump( $data);die;
    	//$this->ajaxReturn($data);
    	if(count($data)>0){
    		//  echo 1;
    		$this->ajaxReturn($data);
    	}else{}
    }   
    
    public function yingshang()
    {
    	//搜索应赏

        $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
     	$list = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.did desc')->select();
    	}else if($rz=='r'){
    	$list = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.collect desc')->select();
    	}
     	$this->ajaxReturn($list);
           
    }    
    
    public function qiugou()
    {
    	//搜索求购
        $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
       $list = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
    	$this->ajaxReturn($list);
    	 
    }   
    
    public function xianzhi()
    {
    	//搜索闲置
        $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
    	$list = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
    	$lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);
    
    }
    public function xuanshang()
    {
    	//搜索悬赏
         $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	 $list= M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.psid desc')->select();
        }else if($rz=='r'){
        $list= M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
        }
       $lis= M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    //   echo '<pre>';
       $xuanshang['ji'] = $list;
       $xuanshang['ben'] = $lis;
       //var_dump($xuanshang);die;
   	$this->ajaxReturn($xuanshang);
    
    }
    public function zhaopin()
    {
    	//搜索招聘
        $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list= M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.rid desc')->select();
    	}else if($rz=='r'){
    	$list= M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	$lis= M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    	//   echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($zhaopin);
    
    }
    public function yingpin()
    {
    	//搜索应聘
        $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list= M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.eid desc')->select();
    	}else if($rz=='r'){
    	$list= M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	$lis = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
    	//基本闲置
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($yingpin);
    	
    
    }
    public function rzyingshang()
    {
    	//搜索应赏
    
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list = M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.did desc')->select();
    	}else if($rz=='r'){
        $list = M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->order('s.id desc')->limit('1')->order('d.collect desc')->select();
    	}
    	$this->ajaxReturn($list);
    	 
    }
    

    
    public function rzxianzhi()
    {
    	//搜索闲置
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
       $rz=I('rz');
    	if($rz=='z'){
    	$list = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
    		$list = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
       $lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);
    
    }
    public function rzxuanshang()
    {
    	//搜索悬赏
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list= M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.psid desc')->select();
    	}else if($rz=='r'){
    	$list= M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	//详情悬赏信息
    	$lis= M('forcee  as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    	//   echo '<pre>';
    	$xuanshang['ji'] = $list;
    	$xuanshang['ben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xuanshang);
    
    }
    public function rzzhaopin()
    {
    	//搜索招聘
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list= M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.rid desc')->select();
    	}elseif ($rz=='r'){
    	$list= M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}
    	$lis= M('forcee as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    	//  echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($zhaopin);
    
    }
    public function rzyingpin()
    {
    	//搜索应聘
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list= M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.eid desc')->select();
    	}else if($rz=='r'){
    	$list= M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit(1)->order('e.collect desc')->select();
    	}//详情悬赏信息
    	$lis =  M('forcee as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
    	//基本闲置
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($yingpin);
    
    }

    
    public function rzqiugou()
    {
    	//搜索求购
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$rz=I('rz');
    	if($rz=='z'){
    	$list = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.fid desc')->select();
    	}else if($rz=='r'){
    		$list = M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->order('s.id desc')->limit('1')->order('e.collect desc')->select();
    	}
    	$this->ajaxReturn($list);
    
    }
    

    public function xuanshangjz(){
    	//悬赏加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	//$uid = $_SESSION['id'];
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->count();//数据记录总数
    	$num=2;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
      if($p>$totalpage){
    		$this->ajaxReturn($xuanshang);exit();
    	}//超过最大页数，退出
    	if($where==1){
         $list= M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.psid desc')->select();
    	}else{
    	$list= M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
       $lis= M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    //   echo '<pre>';
     
       $xuanshang['ji'] = $list;
       $xuanshang['ben'] = $lis;
    
    		$this->ajaxReturn($xuanshang);
    
    }
    public function rzxuanshangjz(){
    	//悬赏加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->count();//数据记录总数
    	$num=2;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    if($p>$totalpage){
    		$this->ajaxReturn($xuanshang);exit();
    	}//超过最大页数，退出
    	if($where==1){
    		$list= M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.psid desc')->select();
    	}else{
    		$list= M('forcee as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	$lis= M('forcee as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
    	//   echo '<pre>';
    	 
    	$xuanshang['ji'] = $list;
    	$xuanshang['ben'] = $lis;
    
    		$this->ajaxReturn($xuanshang);
    	
    }
    public function grxuanshangjz(){
    	//悬赏加载
    	$p=2;
    	$id=2;
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('reward1')->count();//数据记录总数
    	$num=2;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		$this->ajaxReturn($xuanshang);exit();
    	}
    	if($where==1){
    		$list= M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.psid desc')->select();
    	}else{
    		$list= M('user as s')->join('reward1 as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	$lis= M('user as s')->join('reward2 as r on s.id = r.usid')->where("s.id = {$id}")->select();
    	//   echo '<pre>';
    
    	$xuanshang['ji'] = $list;
    	$xuanshang['ben'] = $lis;

    		$this->ajaxReturn($xuanshang);

    }
    public function yingshangjz(){
    	//应赏加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
       $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    	$list= M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.did desc')->select();
    	}else{
    	$list= M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.collect desc')->select();
    	}
    

    		$this->ajaxReturn($list);
    	
    } 
    public function rzyingshangjz(){
    	//应赏加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    
    	if($where==1){
    		$list= M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.did desc')->select();
    	}else{
    		$list= M('forcee as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.collect desc')->select();
    	}
    
 
    		$this->ajaxReturn($list);
    
    }
    public function gryingshangjz(){
    	//应赏加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('due')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    		$list= M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.did desc')->select();
    	}else{
    		$list= M('user as s')->join('due as d on s.id = d.uid')->where(" s.id = {$id} ")->limit($limitpage,$num)->order('d.collect desc')->select();
    	}
    
    
    		$this->ajaxReturn($list);
   
    }
    
    public function zhaopinjz(){
    	//招聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
       $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	$total=M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    if($p>$totalpage){
    		$this->ajaxReturn($zhaopin);exit();
    	}//超过最大页数，退出
    	if($where==1){
    	 	$list= M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.rid desc')->select();
    	}else{
    		$list= M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
   
    	$lis= M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    	//   echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
    
    		$this->ajaxReturn($zhaopin);
   
    }
    
    public function rzzhaopinjz(){
    	//招聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	$total=M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		$this->ajaxReturn($zhaopin);exit();
    	}//超过最大页数，退出
    	if($where==1){
    		$list= M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.rid desc')->select();
    	}else{
    		$list= M('forcee as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	 
    	$lis= M('forcee as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
    	//   echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
   
    		$this->ajaxReturn($zhaopin);

    }
    public function grzhaopinjz(){
    	//招聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$where=$_POST['where'];
    	$total=M('recruit1')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	if($p>$totalpage){
    		$this->ajaxReturn($zhaopin);exit();
    	}
    	if($where==1){
    		$list= M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.rid desc')->select();
    	}else{
    		$list= M('user as s')->join('recruit1 as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    
    	$lis= M('user as s')->join('recruit2 as r on s.id = r.usid')->where(" s.id = {$id} ")->select();
    	//   echo '<pre>';
    	$zhaopin['ji'] = $list;
    	$zhaopin['ben'] = $lis;
    	$this->ajaxReturn($zhaopin);
    	
    }
    public function yingpinjz(){
    	//应聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
       $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('employ')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	if($where==1){
    	$list= M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.eid desc')->select();
    	}else{
    	$list= M('shop as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}

    	$lis = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->select();
    	//基本闲置
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	$this->ajaxReturn($yingpin);
   
    }
    public function rzyingpinjz(){
    	//应聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('forcee as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    		$list= M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.eid desc')->select();
    	}else{
    		$list= M('forcee as s')->join('employ as e on s.uid = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	$lis= M('forcee as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	//基本闲置
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	$this->ajaxReturn($yingpin);

    }
    public function gryingpinjz(){
    	//应聘加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('employ')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
 
    	if($where==1){
    		$list= M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.eid desc')->select();
    	}else{
    		$list= M('user as s')->join('employ as e on s.id = e.uid')->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    
    	$list= M('user as s')->join('employ as e on s.id = e.uid')->join("employwork as r on r.pid = e.eid")->where("s.id = {$id}")->limit($limitpage,$num)->order('e.collect desc')->select();
    	//基本闲置
    	$yingpin['pji'] = $list;
    	$yingpin['pben'] = $lis;
    	$this->ajaxReturn($yingpin);
    }
    public function qiugoujz(){
    	//求购加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
       $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
   
    	if($where==1){
    	$list= M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    	$list= M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.collect desc')->select();
    
    	}

    		//  echo 1;
    		$this->ajaxReturn($list);

    }
    public function rzqiugoujz(){
    	//求购加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    
    	if($where==1){
    		$list= M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    		$list= M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.collect desc')->select();
    
    	}
    

    		$this->ajaxReturn($list);
   
    }
    public function grqiugoujz(){
    	//求购加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('flea')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    		$list= M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    		$list= M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 2")->limit($limitpage,$num)->order('e.collect desc')->select();
    
    	}
    
    	$this->ajaxReturn($list);

    }
    public function xianzhijz(){
    	//闲置加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    	$list= M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    	$list= M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	$lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);;
    }
    public function rzxianzhijz(){
    	//闲置加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
        $uid=I('id');
    	$sp = M('forcee')->where("uid ={$uid} and status=2")->select();//我的商铺
    	foreach ($sp as $v){
    		$id=$v['id'];
    	}
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    //超过最大页数，退出
    	if($where==1){
    		$list= M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    		$list= M('forcee as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    	$lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);;
    
    } 
    
    public function grxianzhijz(){
    	//闲置加载
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$id=$_POST['id'];
    	$where=$_POST['where'];
    	//$db=M('user');
    	$total=M('flea')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录

    	if($where==1){
    		$list= M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.fid desc')->select();
    	}else{
    		$list= M('user as s')->join("flea as e on e.uid = s.id")->where("s.id = {$id} and e.type = 1")->limit($limitpage,$num)->order('e.collect desc')->select();
    	}
    
    	$lis = M('fleaimage')->select();
    	$xianzhi['xian'] = $list;
    	$xianzhi['xianimg'] = $lis;
    	//var_dump($xuanshang);die;
    	$this->ajaxReturn($xianzhi);
 
    }
    
    
}