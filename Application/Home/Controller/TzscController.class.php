<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class TzscController extends Controller
{
    public function index()
    {
    	//跳蚤市场	
    	
    	//推荐求购
    	$listnew = M('flea as f')->join('user as u on f.uid = u.id')->where('type = 1 and tz_status = "1"')->limit('0,3')->select();
    	//推荐闲置
    	$listx = M('flea as f')->join('user as u on f.uid = u.id')->where('type = 2 and tz_status = "1"' )->limit('0,3')->select();
    	//推荐用户
    	$user = M('user as u')->join('user_fen as f on u.id = f.uid')->order('u.fen desc')->select();

        // if(!empty($_SESSION)){
        //     $uid = $_SESSION['id'];
        //     $uu = M('user_fen')->where("uid = {$uid}")->find();
        //     $uus = explode(',',$uu['fid']);
        //     array_pop($uus);//获得当前用户的每个粉丝
        // }
        //用户之间的关注
        $uus = M('user_fen')->select();
        // 查询粉丝
        // $uu = M('user_fen as f')->join('user as u on f.fid = u.id')->select();
        
    	$this->assign('uus',$uus);
    	$this->assign('listnew',$listnew);
    	$this->assign('listx',$listx);
    	$this->assign('user',$user);
    	$this->display();
    }
    public function txqg(){
        //填写求购
        $this->display('Tzsc/txqg');
    }
    public function txqggo(){
        //执行填写
        date_default_timezone_set('prc');
        if($_POST['names'] == '其他'){
            $data['name'] = $_POST['zymc1'];
        }else{
            $data['name'] = $_POST['names'];
        }
        $data['price'] = $_POST['price'];
        $data['address'] = $_POST['add'];
        $data['tels'] = $_POST['tel'];
        $data['qqs'] = $_POST['qq'];
        $data['content'] = $_POST['content'];
        $data['date'] = date("Y-m-d",time());
        $data['uid'] = $_SESSION['id'];
        $ob = $id = M('flea')->order('id desc')->add($data);
        if($ob > 0){
            $this->qgfbwc();
        }
    }
    public function txxz(){
        //填写闲置
        $this->display('Tzsc/txxz');
    }
    public function txxzgo(){
        //执行填写闲置

        date_default_timezone_set('prc');
       if($_POST['names'] == '其他'){
            $data['name'] = $_POST['zymc1'];
        }else{
            $data['name'] = $_POST['names'];
        }
        $data['price'] = $_POST['price'];
        $data['address'] = $_POST['address'];
        $data['tels'] = $_POST['tel'];
        $data['qqs'] = $_POST['qq'];
        $data['content'] = $_POST['content'];
        $data['uid'] = $_SESSION['id'];
        $data['date'] = date('Y-m-d',time());
        $data['type'] = 2;
        $ob = $id = M('flea')->order('fid desc')->add($data);
        if($ob > 0){
            $im['pid'] = $id;
            $im['usid'] = $_SESSION['id'];
            $im['pubtimes'] = date('Y-m-d',time());
            $dd = M('fleaimage')->add($im);
            if($dd > 0 ){
                if(!empty($_FILES['file1'])){
                    $this->upload( $_FILES['file1'],$id);//将刚刚添加的信息的最大id传过去用来专门做图片名字的存储
                }else if(!empty($_FILES['file2'])){
                    $this->upload( $_FILES['file2'],$id);
                }else if(!empty($_FILES['file3'])){
                    $this->upload( $_FILES['file3'],$id);
                }else if(!empty($_FILES['file4'])){
                    $this->upload( $_FILES['file4'],$id);
                }
            }
           $this->xzfbwc();
        }
    }
    //上传的方法
    public function upload($file,$id){
        $upload = new \Think\Upload($file);// 实例化上传类
        $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Uploads/'; // 设置附件上传目录
        $info   =   $upload->upload();
        $data['imagenames'] = '';
        if(!$info) {// 上传错误提示错误信息
            $this->error('失败');
            }else{// 上传成功
             foreach($info as $file){        
                // echo $file['savepath'].$file['savename'];
                $data['imagenames'] .=  $file['savepath'].$file['savename'].',';
               
             } 
             
             $ob = M('fleaimage')->where("pid = {$id}")->save($data); 

        }

    }
    public function xqqg($id){
        //求购详情页
        $list = M('flea as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id} and tz_status = '1'")->find();
        // var_dump($list);die;
        $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->join('flea as f on l.xsid = f.fid')->where("l.xsid = {$id} and tz_status = '1'")->order('l.lid desc')->limit('0,3')->select();//求购留言遍历
        $this->assign('list',$list);
        $this->assign('liu',$liu);
        $this->display('Tzsc/xqqg');
    }
    public function xqqg_bao($id){//闲置详情-》报名
        $uid = $_SESSION['id'].',';

        $li = M('flea')->where("fid = {$id}")->find();
        if(empty($li)){
            $data['wid'] = $wid;
            $ob = M("flea")->add($data);
        }
        $li['bao'] = '';
        $lis = M('flea')->where("fid = {$id}")->find();
        $lis['bao'] .= $uid;
        $db = M("flea")->where("fid = {$id}")->save($lis);
        if($db > 0){
            $db = M("flea")->where("fid = {$id}")->find();
            $bao = explode(',',$db['bao']);
            array_pop($bao);
            $bao_num = count($bao);
            $this->ajaxReturn($bao_num);
        }

    }
    public function xqxz($id){
        //闲置详情
        $list = M('flea as f')->join('fleaimage as m on f.fid = m.pid')->join('user as u on f.uid = u.id')->where("f.fid = {$id} and tz_status = '1'")->find();
        $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->join('flea as f on l.xsid = f.fid')->where("l.xsid = {$id} and tz_status = '1'")->order('l.lid desc')->limit('0,3')->select();//闲置留言遍历
        $this->assign('list',$list);
        $this->assign('liu',$liu);
        $this->display('Tzsc/xqxz');
    }
    public function shou($fid){
        //闲置收藏
        $uid = $_SESSION['id'];
        $ob = M('flea')->where("fid = {$fid}")->find();
        if(empty($ob)){
            $data['fid'] = $fid;
            $db = M('flea')->add($data);
        }
        $shou['shou'] = '';
        $shou = M('flea')->where("fid = {$fid}")->find();
        $shou['shou'] .= $uid.',';
        $dd = M('flea')->where("fid = {$fid}")->save($shou);
        if($dd > 0){
            echo '收藏成功';
        }
    }
    public function qgfbwc(){
        //求购发布完成
        $list = M('flea as f')->join('fleaimage as e on f.fid = e.pid')->join('user as u on f.uid = u.id')->where('type = 2 and tz_status = "1"')->limit('0,6')->select();
        $id = M('flea')->where(' type = 1 and tz_status = "1"')->order('fid desc')->find();

        $this->assign('list',$list);
        $this->assign('id',$id['fid']);
        $this->display('Tzsc/qgfbwc');
    }
    public function xzfbwc(){
        //闲置发布完成
        $list = M('flea as f')->join('user as u on f.uid = u.id')->where('type = 1 and tz_status = "1"')->limit('0,6')->select();
        $id = M('flea')->where(' type = 2 and tz_status = "1"')->order('fid desc')->find();
        $this->assign('id',$id['fid']);
        $this->assign('list',$list);
        $this->display('Tzsc/xzfbwc');
    }

}