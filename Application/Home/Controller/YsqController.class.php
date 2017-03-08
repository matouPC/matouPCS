<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class YsqController extends Controller
{
    public function index()
    {
    	//应赏区
    	// $list=M('due')->order('id desc')->select();
        $num = count(M('due')->select());
    	//推荐应赏
    	$xxoo = M('due as d')->join('user as u on d.uid = u.id')->order('d.collect desc')->limit('0,3')->select();
        //推荐部队
        $listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->order('f.collect desc')->limit('0,3')->select();
        $this->assign('xxoo',$xxoo);
    	$this->assign('num',$num);
        $this->assign('listnn',$listNew);
        $this->display();
    }
    public function txys(){
        //填写应赏
        $this->display('Ysq/txys');
    }
    public function txysgo(){
        //执行填写 
        // echo '<pre>';
        // var_dump($_POST);die;
        $post = array_keys($_POST);
        $files = array_keys($_FILES);
        $num = 0;
        $nums = 0;
        foreach ($files as $value) {
            $jie = substr($value,0,-1);
            if($jie == 'yszp'){
                $num ++;
            }else{
                $nums ++;
            }
        }
        date_default_timezone_set('prc');//先添加基本信息
        $data['name'] = $_POST['name'];//姓名
        $data['sexs'] = $_POST['sex'];//性别
        $data['age'] = $_POST['age'];//年龄
        $data['height'] = $_POST['height'];//身高
        $data['weight'] = $_POST['weight'];//体重
        $data['address'] = $_POST['address'].','.$_POST['address_s'];//地址+详细地址
        $data['date'] = date("Y-m-d",time());//发布日期
        if($_POST['type'] == '其他'){
            $data['type_d'] = $_POST['type1'];
        }else{
            $data['type_d'] = $_POST['type'];
        }
        $data['price'] = $_POST['price'];
        $data['time'] = time();
        $data['tels'] = $_POST['tel'];
        $data['qqs'] = $_POST['qq'];
        $data['content'] = $_POST['content'];
        $data['skilled'] = $_POST['skilled'];
        $data['uid'] = $_SESSION['id'];
        // var_dump($data);die;
        $ob = $did = M('due')->order("did desc")->add($data);
        if($ob > 0){
            // echo '添加成功';die;
            $im['pubtime'] = date("Y-m-d",time());
            $im['pid'] = $did;
            $im['imagename_z'] = '';
            for ($i=1; $i <= $num ; $i++) { 
                $im['imagename_z'] .= './Uploads/'.date("Y-m-d",time()).'/'.$_FILES["yszp".$i.""]['name'].',';//对于作品的上传
            }
            $ad = $iid = M('dueimage')->order('id desc')->add($im);
            if($ad > 0){
                $vadd['type'] = $_POST['file1_title'].','.$_POST['file2_title'].','.$_POST['file3_title'].',';
                $vadd['video'] = $_POST['file1_video'].','.$_POST['file2_video'].','.$_POST['file3_video'].',';
                $vadd['pubtime'] = date("Y-m-d",time());
                $vadd['imagename_v'] = '';
                for ($i=1; $i <= $nums ; $i++) { 
                    $vadd['imagename_v'] .= './Uploads/'.date("Y-m-d",time()).'/'.$_FILES["file".$i.""]['name'].',';//对于作品的上传
                }
                $vadd['pid'] = $did;
                $vd = $vid = M('duevideo')->order('id desc')->add($vadd); 
                if($vd > 0){
                    $dang_n = 0;
                    $dang_ns = 0;
                    foreach($post as $v){
                        $dang = substr($v,0,-1);
                        if($dang == 'dang_time'){
                            $dang_n ++;
                        }else if($dang == 'dangB'){
                            $dang_ns ++;
                        }
                    }
                    $dan['dangdate'] = '';
                    for ($k=0; $k <= $dang_n; $k++) {//对日期 
                         $dan['dangdate'] .= $_POST['dang_time'.$k.''].',';

                    }
                    $dan['dangs'] = '';
                    for ($k=0; $k <= $dang_n; $k++) {//对上下午 
                         $dan['dangs'] .= $_POST['dangB'.$k.''].',';

                    }
                    $dan['pid'] = $did;
                    $dangqi = M('due_dang')->add($dan);
                    if($dangqi > 0){
                        if(!empty($_FILES['file1'])){
                            $this->ysUpload_video($_FILES['file1'],$vid);
                        } else if(!empty($_FILES['file2'])){
                            $this->ysUpload_video($_FILES['file2'],$vid);
                        } else if(!empty($_FILES['file3'])){
                            $this->ysUpload_video($_FILES['file3'],$vid);
                        }
                    }
                    
                        
                }
               
            }
            
            
            // $ob = $did = M('due')->order("did desc")->add($data);
        }
    }
    //上传照片的方法
    // public function ysUpload($yszp,$id){
    //     $upload = new \Think\Upload($yszp);// 实例化上传类
    //     $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
    //     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    //     $upload->savePath  =      './Uploads/'; // 设置附件上传目录
    //     $info   =   $upload->upload();
    //     $upload->saveName = '';
    //     $im['imagename'] = '';
    //     if(!$info) {// 上传错误提示错误信息
    //         $this->error('zp失败');
    //         }else{// 上传成功
    //          foreach($info as $file){        
    //             // echo $file['savepath'].$file['savename'];
    //             $im['imagename'] .=  $file['savepath'].$file['savename'].',';
    //          }
    //          // $ob = M('dueimage')->where("id = {$id}")->save($im);
    //          if($ob > 0){
    //             $this->ysxqwc();
    //          }
                
    //     }

    // }
    //上传视频的方法
     public function ysUpload_video($yszp,$id){
        $upload = new \Think\Upload($yszp);// 实例化上传类
        $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Uploads/'; // 设置附件上传目录
        $upload->saveName = '';
        $info   =   $upload->upload();
        // $datas['imagename'] = '';
        // if(empty($info)) {// 上传错误提示错误信息
        //     $this->error('sp失败');
        //     }else{// 上传成功
             // foreach($info as $file){        
             //    // echo $file['savepath'].$file['savename'];
             //    $datas['imagename'] .=  $file['savepath'].$file['savename'].',';
               
             // }
             // $ob = M('duevideo')->where("id = {$id}")->save($datas);
             // if($ob > 0){

                $this->ysxqwc();
             // }
                
        // }

    }
    /**
    *  应赏详情
    */
    public function xqys($id){
        //应赏详情
        $list = M('due as d')->join('dueimage as m on d.did = m.pid')->join('duevideo as e on d.did = e.pid')->join('user as u on d.uid = u.id')->join('due_dang as a on d.did = a.pid')->where("d.did = {$id}")->find();
        // echo '<pre>';
        // var_dump($list);die;
        $this->assign('list',$list);
        $this->display('Ysq/xqys');
    }
    public function xqys_shou($did){//应赏_->收藏
        $uid = $_SESSION['id'];//当前用户的id
        $ob = M('due')->where("did = {$did}")->find();
        
        if(empty($ob)){
            $data['did'] = $fid;
            $db = M('due')->add($data);
        }
        $shou['due_shou'] = '';
        $shou = M('due')->where("did = {$did}")->find();
        $shou['due_shou'] .= $uid.',';
        $fids['uid'] = $uid;
        $fids['fid'] = $shou['uid'];//被收藏的用户id
        $fids['type_xx'] = 1;
        $fids['type_xs'] = 1;
        $fids['content_xx'] = '收藏应赏';
        $xd = M("user_xx")->add($fids);
        if($xd > 0){
            $dd = M('due')->where("did = {$did}")->save($shou);
            if($dd > 0){
                echo '收藏成功';
            }
        }
        
    }
    public function ysxqwc(){
        //应赏发布完成
        $list = M('reward1 as e')->join('user as u on e.uid = u.id')->select();
        //相关多少条
        $id = M('due')->order('did desc')->find();
        $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select();
        $this->assign('list',$list);
        $this->assign('id',$id['did']);
        $this->assign('data',$data);
        $this->display('Ysq/ysxqwc');
    }

}