<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class IndexController extends Controller
{
    public function index()
    {
    	//这里是首页的遍历
        //悬赏大厅
        $list_one = M('reward2 as  r')->join('reward1 as e on r.pid = e.psid ')->join(' user as u on e.uid = u.id')->order('e.psid desc')->limit('0,21')->select();
        //判断是否已发布了应赏

    	//认证部队遍历
        // $budui = M('forcee')->where('status = 2')->order('collect desc')->limit('0,4')->select();
        $budui = M("user as u")->join('forcee as f on f.uid = u.id')->where("f.status = 2")->order("f.collect desc")->limit('0,4')->select();
        //判断当前用户是否为认证部队
        if(!empty($_SESSION['id'])){
            $uid = $_SESSION['id'];
            $ren = M('user as u')->join('forcee as f on f.uid = u.id')->where("f.status = 2 and u.id = {$uid}")->find();
            $fbys = M('user as u')->join("due as d on u.id = d.uid")->where("u.id = {$uid}")->find();
            $fbyp = M('user as u')->join("employ as d on u.id = d.uid")->where("u.id = {$uid}")->find();
        }
        //判断是否能进入商铺
        if(!empty($_SESSION['id'])){
        	$uid = $_SESSION['id'];//当前用户的id
        	$sp = M('shop')->where("uid = {$uid}")->limit('1')->find();//我的商铺
        	//  var_dump($sp);die;
        	$this->assign('sp',$sp);
        }
    	//码头商城遍历
    	$shang = M('shop')->order('collect desc')->limit(' 0,4')->select();
    	//跳槽市场
    	$tiao = M('flea as f')->join('user as u on f.uid = u.id')->order('f.fid desc')->where("tz_status = '1'")->limit('0,5')->select();
    	$this->assign('stu_one',$list_one);
    	// $this->assign('stu_two',$list_two);
    	// $this->assign('stu_three',$list_three);

    	$this->assign('budui',$budui);

    	$this->assign('shang',$shang);

        $this->assign('tiao',$tiao);

        $this->assign('ren',$ren);

        $this->assign('fbys',$fbys);

    	$this->assign('fbyp',$fbyp);

        $this->display();
    }
    //验证注册信息
    public function user(){
        $user = $_GET['u'];
        $ob = M('user')->where("tel = {$user}")->find();
        if($ob == null){
            echo 'y';
        }else{
            echo 'n';
        }
    }
    //提交注册信息
    public function regin(){
        if(!empty($_POST['username']) && !empty($_POST['password'])){

            $data['tel'] = $_POST['username']; 
            // $data['tel'] = '123123'; 
            $data['password'] = $_POST['password'];
            // $data['password'] = '132312';
            $ob = M('user')->order('id desc')->add($data);
            if( $ob > 0 ){
                echo 'y';
                // $this->ajaxReturn('y');
            }else{
                // $this->ajaxReturn('n');
                echo 'n';
            }
        }else{
            echo 'n';
        }
    }
    //用户登录
    public function login(){
        // if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = $_POST['username'];//可能是用户名 可能是电话号码
            $password = $_POST['password'];
            $ob = M('user')->where("tel = '{$username}' and password = '{$password}'")->find();
            $xb = M('user')->where("username = '{$username}' and password = '{$password} '")->find();
            if(!empty($ob)){
                session_start();
                $_SESSION['username'] = $ob['tel'];
                $_SESSION['id'] = $ob['id'];
                // session_id($ob['id']);
                 // session_id() = $xb['id'];
                //增加粉丝的方法
                $uid = $_SESSION['id'];//当前用户的id
                $ji = M('user_fen')->where(" uid = {$uid}")->find();
                if(empty($ji)){
                    $arr['uid'] = $uid;
                    $dd = M('user_fen')->add($arr);
                }
                echo 'y';
            }else if(!empty($xb)){
                session_start();
                $_SESSION['username'] = $xb['tel'];
                $_SESSION['id'] = $xb['id'];
                // session_id('xx') = $xb['id'];
                //增加粉丝的方法
                $uid = $_SESSION['id'];//当前用户的id
                $ji = M('user_fen')->where(" uid = {$uid}")->find();
                if(empty($ji)){
                    $arr['uid'] = $uid;
                    $dd = M('user_fen')->add($arr);
                }
                echo 'y';
            }else{
                echo 'n';
            }
    }
    /**
    *    关注的方法
    */
    public function guanzhu($id){
        //接受被关注用户的id  $id 
        $uid = $_SESSION['id'];//当前用户的id
        $ji = M('user_fen')->where(" uid = {$id}")->find();
        if(empty($ji)){
            $arr['uid'] = $id;
            $dd = M('user_fen')->add($arr);
        }
        $dsd['fid'] = '';
       
        if($id == '' && $uid == ''){
            echo '关注失败';
        }else{
            $dsd = M('user_fen')->where("uid = {$id}")->find();
            
            $dsd['fid'] .= $uid.',';

            $ob = M('user_fen')->where("uid = {$id}")->save($dsd);

            if($ob > 0){
                $ub = M('user')->where("id = {$id}")->find();
                $fen = explode(',',$dsd['fid']);
                array_pop($fen);
                $ub['fen'] = count($fen);

                $fb = M('user')->where("id = {$id}")->save($ub);
                if($fb > 0){
                    echo '关注成功';
                }
            }
        }
    }
    /**
    *   取消关注的方法
    */
    public function qguan($id){
        //首先传过来被关注的用户的id
        $user = M('user_fen')->where("uid = {$id}")->find();//查询符合此用户的唯一的一条数据
        $uid = $_SESSION['id'];

        $fen = explode(',',$user['fid']);

        array_pop($fen);
        foreach ($fen as $key=>$value)
        {
            if ($value === $uid)
                unset($fen[$key]);
        }

        $ss['fid'] = implode(',',$fen).',';
        $ob = M('user_fen')->where("uid = {$id}")->save($ss);//成功取出取消关注的id并且修改数据库
        
        if($ob > 0){//如果修改成功  开始去修改用户表的粉丝数
            $fb = M('user_fen')->where("uid = {$id}")->find();
            $fens = explode(',',$fb['fid']);

            array_pop($fens);
            $num = count($fens);

            $data['fen'] = $num;
            $db = M('user')->where("id = {$id}")->save($data);
           
            if($db > 0){
                echo '取消成功';
            }else{
                echo '滚犊子';
            }
            // $user_fen['fen']
        }else{
            echo '失败';
        }

    }
    
    public function usave1(){
    	//echo '<pre>';
    	//var_dump($_FILES['upload1']);die;
    	$tu=I('tu');
    
    	$data['uid'] =  $_SESSION['id'];
    	$data['content'] =  $_POST['content'];
    	$data['type'] =  $_POST['type'];
    	$data['time']=date("Y-m-d ",time());
    		$id = M('dongtai')->add($data);
    		$tu1=rtrim($tu, ",");
    		$array = explode("," ,$tu1);
    		$form=M('dongimage');
    		$data['pid']=$id;
    		foreach ($array as $v){
    			$data['imagename'] = $v;
    			
    		$fu = $form->add($data);
    
    		}
    		
    
    } 
    
    
    
    
}