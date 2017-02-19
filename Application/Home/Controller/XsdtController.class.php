<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class XsdtController extends Controller
{
    public function index()
    {   
    	// $list = M('reward1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
    	//推荐悬赏遍历 -》根据收藏数来遍历
    	$listnew = M('reward2 as  r')->join('reward1 as e on r.pid = e.psid ')->join(' user as u on e.uid = u.id')->order('e.psid desc')->limit('0,3')->select();
        //推荐部队
        $listNew = M("user as u")->join('forcee as f on f.uid = u.id')->where("f.status = 2")->order("f.collect desc")->limit('0,4')->select();
    	//相关多少条
        $num = count(M('reward1')->select());
        $this->assign('listnew',$listnew);
        $this->assign('listn',$listNew);        
        $this->assign('num',$num);		
        $this->display();
    }
    public function xsdt(){
        $this->display('Xsdt/txxs');
    }
    public function xsdtgo(){
        //填写悬赏
        // var_dump($_POST);die;
        date_default_timezone_set('prc');
        $data['address'] = $_POST['add'];
        $data['tels'] = $_POST['te'];
        $data['qqs'] = $_POST['q'];
        $data['time'] = $_POST['ti'];
        $data['content'] = $_POST['con'];//可直接添加
        $data['uid'] = $_SESSION['id'];
        $data['date'] = date('Y-m-d',time());
        $ob = $id = M('reward1')->order('id desc')->add($data);
        //详细信息
        if(!empty($_POST['sex1']) && !empty($_POST['age1']) && !empty($_POST['yaoqiu1']) && !empty($_POST['whether1']) && !empty($_POST['price11']) && !empty($_POST['price21']) && !empty($_POST['type1'])){
            $xsdt['sex'] = $_POST['sex1'];
            $xsdt['age'] = $_POST['age1'];
            $xsdt['yaoqiu'] = $_POST['yaoqiu1'];
            $xsdt['whether'] = $_POST['whether1'];
            $xsdt['price'] = $_POST['price11'].'-'.$_POST['price21'];
            if($_POST['type1'] == '其他'){
               $xsdt['type'] = $_POST['zymc1']; 
            }else{
               $xsdt['type'] = $_POST['type1'];
            }
            $xsdt['usid'] = $_SESSION['id'];
            $xsdt['pid'] = $id;
            $db = M('reward2')->order(' id desc')->add($xsdt);
        }
        if(!empty($_POST['sex2']) && !empty($_POST['age2']) && !empty($_POST['yaoqiu2']) && !empty($_POST['whether2'])  && !empty($_POST['type2']) && !empty($_POST['price12']) && !empty($_POST['price22'])){
            $xsdt['sex'] = $_POST['sex2'];
            $xsdt['age'] = $_POST['age2'];
            $xsdt['yaoqiu'] = $_POST['yaoqiu2'];
            $xsdt['whether'] = $_POST['whether2'];
            $xsdt['price'] = $_POST['price12'].'-'.$_POST['price22'];
            if($_POST['type2'] == '其他'){
               $xsdt['type'] = $_POST['zymc2']; 
            }else{
               $xsdt['type'] = $_POST['type2'];
            }
            $xsdt['usid'] = $_SESSION['id'];
            $xsdt['pid'] = $id;
            $ob = M('reward2')->add($xsdt);
        }
        if(!empty($_POST['sex3']) && !empty($_POST['age3']) && !empty($_POST['yaoqiu3']) && !empty($_POST['whether3']) && !empty($_POST['type3']) && !empty($_POST['price13']) && !empty($_POST['price23'])){
            $xsdt['sex'] = $_POST['sex3'];
            $xsdt['age'] = $_POST['age3'];
            $xsdt['yaoqiu'] = $_POST['yaoqiu3'];
            $xsdt['whether'] = $_POST['whether3'];
            $xsdt['price'] = $_POST['price13'].'-'.$_POST['price23'];
            if($_POST['type3'] == '其他'){
               $xsdt['type'] = $_POST['zymc3']; 
            }else{
               $xsdt['type'] = $_POST['type3'];
            }
            $xsdt['usid'] = $_SESSION['id'];
            $xsdt['pid'] = $id;
            $ob = $xsid = M('reward2')->order('wid desc')->add($xsdt);
        }
        if($ob > 0){
            $this->xsfb();
        }

    }
    public function xqxs($id){
        //悬赏详情 
        $list = M('reward2 as r')->join("reward1 as e on r.pid = e.psid")->join('user as u on u.id = e.uid')->join('forcee as f on f.uid = u.id')->where(" e.psid = {$id}")->find();//先查是否为认证部队
        //悬赏要求
        $listNew = M('reward2 as r')->join("reward1 as e on r.pid = e.psid")->where("e.psid = {$id}")->select();
        //悬赏报名人数查询
        $this->assign('list',$list);
        $this->assign('listNew',$listNew);
        $this->display('Xsdt/xqxs');
    }
    /**
    *  对每条悬赏信息进行报名
    */
    public function xqxs_bao($wid){//接受传过来的悬赏详情的id
        date_default_timezone_set('prc');
        $uid = $_SESSION['id'].',';
        $li = M('reward2')->where("wid = {$wid}")->find();
        if(empty($li)){
            $data['wid'] = $wid;
            $ob = M("reward2")->add($data);
        }
        $li['bao'] = '';
        $lis = M('reward2')->where("wid = {$wid}")->find();
        $lis['bao'] .= $uid;
        $lis['baodate'] .= date("Y-m-d",time()).',';
        $db = M("reward2")->where("wid = {$wid}")->save($lis);
        if($db > 0){
            $db = M("reward2")->where("wid = {$wid}")->find();
            $bao = explode(',',$db['bao']);
            array_pop($bao);
            $bao_num = count($bao);
            $this->ajaxReturn($bao_num);
        }
    }
    public function xsfb(){
        //悬赏发布完成
        $xxoo = M('due as d')->join('user as u on d.uid = u.id')->order('d.collect desc')->limit('0,3')->select();
        $id = M('reward1')->order('psid desc')->find();
        $this->assign('list',$xxoo);
        $this->assign('wid',$id['psid']);
        $this->display('Xsdt/xsfb');
    }
}