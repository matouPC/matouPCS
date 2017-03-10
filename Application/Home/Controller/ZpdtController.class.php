<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class ZpdtController extends Controller
{
    public function index()
    {
    	//应聘区
    	$list = M('user as u')->join('employ as e on u.id = e.uid')->join('employwork as m on e.eid = m.pid')->order('e.eid desc')->select();
        //推荐应聘
        $listn = M('employ as e')->field( "e.*,u.pubtime,u.imagename" )->join('user as u on u.id = e.uid')->order('collect desc')->limit('0,3')->select();
        //推荐部队
        // $listNew = M('forcee as f')->join('user as u on u.id = f.uid')->order('f.collect desc')->limit('0,3')->select();
        $listNew = M('forcee')->order('collect desc')->limit('0,3')->select();
        $num = count($list);
        $this->assign('list',$list);    
        $this->assign('num',$num);    
    	$this->assign('listn',$listn);	
        $this->assign('listnn',$listNew);
    	$this->display();
    }
    public function txzp(){
        //填写招聘
        $this->display('Zpdt/txzp');
    }
    public function txzpgo(){
        //执行招聘填写
        date_default_timezone_set('prc');
        $data['address_zp'] = $_POST['address'].','.$_POST['add'];
        $data['rtel'] = $_POST['tel'];
        $data['rqq'] = $_POST['qq'];
        $data['remail'] = $_POST['email'];
        $data['uid'] = $_SESSION['id'];
        $data['date'] = date("Y-m-d",time());
        $ob = $id = M('recruit1')->order('id desc')->add($data);
        if($ob > 0){
            if(!empty($_POST['sex1']) && !empty($_POST['timework1']) && !empty($_POST['type1']) && !empty($_POST['content1']) && !empty($_POST['yaoqiu1']) && !empty($_POST['age1']) && !empty($_POST['price11']) && !empty($_POST['price21'])){
                $xsdt['sex'] = $_POST['sex1'];
                $xsdt['age'] = $_POST['age1'];
                $xsdt['type'] = $_POST['type1'];
                $xsdt['worktime'] = $_POST['timework1'];
                $xsdt['price'] = $_POST['price11'].'-'.$_POST['price21'];
                $xsdt['type'] = $_POST['type1'];
                $xsdt['content'] = $_POST['content1'];
                $xsdt['work'] = $_POST['yaoqiu1'];
                $xsdt['usid'] = $_SESSION['id'];
                $xsdt['pid'] = $id;
                $db = M('recruit2')->add($xsdt);
                
            }
            if(!empty($_POST['sex2']) && !empty($_POST['timework2']) && !empty($_POST['type2']) && !empty($_POST['content2']) && !empty($_POST['yaoqiu2']) && !empty($_POST['age2']) && !empty($_POST['price12']) && !empty($_POST['price22'])){
                $xsdt1['sex'] = $_POST['sex2'];
                $xsdt1['age'] = $_POST['age2'];
                $xsdt1['type'] = $_POST['type2'];
                $xsdt1['worktime'] = $_POST['timework2'];
                $xsdt['price'] = $_POST['price12'].'-'.$_POST['price22'];
                $xsdt1['type'] = $_POST['type2'];
                $xsdt1['content'] = $_POST['content2'];
                $xsdt1['work'] = $_POST['yaoqiu2'];
                $xsdt1['usid'] = $_SESSION['id'];
                $xsdt1['pid'] = $id;
                $db1 = M('recruit2')->add($xsdt1);
                
            }
            if(!empty($_POST['sex3']) && !empty($_POST['timework3']) && !empty($_POST['type3']) && !empty($_POST['content3']) && !empty($_POST['yaoqiu3']) && !empty($_POST['age3']) && !empty($_POST['price13']) && !empty($_POST['price23'])){
                $xsdt2['sex'] = $_POST['sex3'];
                $xsdt2['age'] = $_POST['age3'];
                $xsdt2['type'] = $_POST['type3'];
                $xsdt2['worktime'] = $_POST['timework3'];
                $xsdt['price'] = $_POST['price13'].'-'.$_POST['price23'];
                $xsdt2['type'] = $_POST['type3'];
                $xsdt2['content'] = $_POST['content3'];
                $xsdt2['work'] = $_POST['yaoqiu3'];
                $xsdt2['usid'] = $_SESSION['id'];
                $xsdt2['pid'] = $id;
                $db2 = M('recruit2')->add($xsdt2);
                
            }
            if($db > 0){
                $this->zpfb();
            }
        }
        // $this->display('Zpdt/txzp');
    }
    public function xqyp($id){
        //应聘详情
        // $list = M('employ as e')->join('employwork as w on e.id = w.pid')->join('employimage as m on m.pid = e.id')->join('employvideo as v on v.pid = e.id')->join('user as u on e.uid = u.id')->where(" w.id = {$id}")->find();
        $list = M('employ as e')->join('employvideo as v on e.eid = v.pid')->join('employwork as w on e.eid = w.pid')->join('employimage as i on e.eid = i.pid')->join('user as u on e.uid = u.id')->join('forcee as f on u.id = f.uid')->where(" e.eid = {$id}")->find();
        // var_dump($list);die;
        $work = M('employwork')->where("pid = {$id}")->select();
        $this->assign('list',$list);
        $this->assign('work',$work);
        $this->display('Zpdt/xqyp');
    }
    public function xqyp_shou($id){//应聘->收藏
        $uid = $_SESSION['id'];
        $ob = M('employ')->where("eid = {$id}")->find();
        
        if(empty($ob)){
            $data['id'] = $id;
            $db = M('employ')->add($data);
        }
        $shou['em_shou'] = '';
        $shou = M('employ')->where("eid = {$id}")->find();
        $shou['em_shou'] .= $uid.',';
        $fids['uid'] = $uid;
        $fids['fid'] = $shou['uid'];//被收藏的用户id
        $fids['type_xx'] = 1;
        $fids['type_xs'] = 3;
        // $fids['tid'] = $lis['pid'];
        // $fids['wid'] = $lis['wid'];
        $fids['content_xx'] = '收藏应聘';
        $xd = M("user_xx")->add($fids);
        if($xd > 0){
            $dd = M('employ')->where("eid = {$id}")->save($shou);
            if($dd > 0){
                echo '收藏成功';
            }
        }
        
    }
    

    public function zpfb(){
        //招聘发布完成
        $list = M('user as u')->join('employ as e on u.id = e.uid')->join('employwork as m on e.eid = m.pid')->order('e.eid desc')->limit('0,3')->select();
        $id = M('recruit1')->order('rid desc')->find();
        $this->assign('list',$list);
        $this->assign('id',$id['rid']);
        $this->display('Zpdt1/zpfbwc');
    }
}