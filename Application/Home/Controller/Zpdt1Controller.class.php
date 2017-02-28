<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class Zpdt1Controller extends Controller
{
    public function index($type)
    {
    	//招聘大厅	
        //推荐招聘
        // $datas = M()
        $xiang = count(M('recruit1')->select());
        $datan = M('recruit2 as  r')->join('recruit1 as e on r.pid = e.rid ')->join(' user as u on e.uid = u.id')->order('r.id desc')->limit('0,3')->select();
    	$num = count($list);
        //推荐部队
        $listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->order('f.collect desc')->limit('0,3')->select();
    	
    	$this->assign('datan',$datan);
    	$this->assign('xiang',$xiang);
        $this->assign('listnn',$listNew);
    	$this->display();
    }
    public function txyp(){
        //填写应聘
        $this->display('Zpdt1/txyp');
    }
    public function txypgo(){
        // //执行填写应聘
        // var_dump($_POST);die;
        date_default_timezone_set('prc');
        $data['name'] = $_POST['name'];
        $data['sex'] = $_POST['sex'];
        $data['address'] = $_POST['address'].','.$_POST['add'];
        if($_POST['type'] == '其他'){
            $data['type'] = $_POST['zymc'];
        }else{
            $data['type'] = $_POST['type'];
        }
        $data['price'] = $_POST['price'];
        $data['worktimes'] = $_POST['worktime'];
        $data['ages'] = $_POST['age'];
        $data['tel'] = $_POST['tel'];
        $data['qqs'] = $_POST['qq'];
        $data['content'] = $_POST['content'];
        $data['uid'] = $_SESSION['id'];
        $data['date'] = date("Y-m-d",time());
        // var_dump($data);die;
        $ob = $id = M('employ')->order('id desc')->add($data);
        if($ob > 0){//执行添加工作经历
             if(!empty($_POST['workdate11']) && !empty($_POST['workdate21']) &&!empty($_POST['workname1']) && !empty($_POST['ty1']) && !empty($_POST['miao1'])){
                $xsdt['worktime'] = $_POST['workdate11'].'-'.$_POST['workdate21'];
                $xsdt['workname'] = $_POST['workname1'];
                $xsdt['typew'] = $_POST['ty1'];
                $xsdt['contents'] = $_POST['miao1'];
                $xsdt['pid'] = $id;
                $db = M('employwork')->add($xsdt);
            }
             if(!empty($_POST['workdate12']) && !empty($_POST['workdate22']) &&!empty($_POST['workname2']) && !empty($_POST['ty2']) && !empty($_POST['miao2'])){
                $xsdt['worktime'] =$_POST['workdate12'].'-'.$_POST['workdate22'];
                $xsdt['workname'] = $_POST['workname2'];
                $xsdt['typew'] = $_POST['ty2'];
                $xsdt['contents'] = $_POST['miao2'];
                $xsdt['pid'] = $id;
                $db = M('employwork')->add($xsdt);
            }
             if(!empty($_POST['workdate13']) && !empty($_POST['workdate23']) &&!empty($_POST['workname3']) && !empty($_POST['ty3']) && !empty($_POST['miao3'])){
                $xsdt['worktime'] = $_POST['workdate13'].'-'.$_POST['workdate23'];
                $xsdt['workname'] = $_POST['workname3'];
                $xsdt['typew'] = $_POST['ty3'];
                $xsdt['contents'] = $_POST['miao3'];
                $xsdt['pid'] = $id;
                $db = M('employwork')->add($xsdt);
            }

            if($db > 0){
                // $this->ypfbwc();
                // echo '添加成功';die;
                $img['pubtimes'] = date('Y-m-d',time());
                $img['pid'] = $id;
                $ypimage = M('employimage')->add($img);
                if($ypimage > 0){
                    $files = array_keys($_FILES);
                    $zp = 0;//用来计算图片的数量
                    $zp_v = 0;
                    foreach ($files as $value) {
                        $ypImg = substr($value,0,-1);
                        if($ypImg == 'ypimg'){//如果为ypimg  就证明是图片的
                            $zp ++;
                        }else if($ypImg == 'file'){
                            $zp_v ++;
                        }
                    }
                    $yp_img['imagenames'] = '';
                    for ($i=1; $i <= $zp; $i++) { 
                        $this->ypUpload($_FILES['ypimg'.$i.'']);
                        $yp_img['imagenames'] .= "./Uploads/".date("Y-m-d",time()).'/'.$_FILES['ypimg'.$i.'']['name'].',';
                    }
                    $img_add = M("employimage")->where("pid = {$id}")->save($yp_img);
                    if($img_add > 0){
                        // echo '执行成功';
                        $img_v['pubtime'] = date('Y-m-d',time());
                        $img_v['pid'] = $id;
                        $img_v['video'] = $_POST['video1'].','.$_POST['video2'].','.$_POST['video3'].',';
                        $img_v['types'] = $_POST['title1'].','.$_POST['title2'].','.$_POST['title3'].',';
                        // for ($i=1; $i <= $zp; $i++) { 
                        //     $this->ypUpload($_FILES['ypimg'.$i.'']);
                        //     $yp_img['imagenames'] .= "./Uploads/".date("Y-m-d",time()).$_FILES['ypimg'.$i.'']['name'].',';
                        // }
                        $img_v['imagename_v'] = './Uploads/'.date('Y-m-d',time()).'/'.$_FILES['file1']['name'].','.'./Uploads/'.date('Y-m-d',time()).'/'.$_FILES['file2']['name'].','.'./Uploads/'.date('Y-m-d',time()).'/'.$_FILES['file3']['name'].',';
                        $ypimage_v = M('employvideo')->add($img_v);
                        if($ypimage_v > 0){
                            if(!empty($_FILES['file1'])){
                                $this->ypUpload($_FILES['file1']);
                            } else if(!empty($_FILES['file2'])){
                                $this->ypUpload($_FILES['file2']);
                            } else if(!empty($_FILES['file3'])){
                                $this->ypUpload($_FILES['file3']);
                            }
                        }
                    }
                }
            }
           $this->ypfbwc();
        }
    }
     public function ypUpload($yszp){
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
        //      // foreach($info as $file){        
        //      //    // echo $file['savepath'].$file['savename'];
        //      //    $datas['imagename'] .=  $file['savepath'].$file['savename'].',';
               
        //      // }
        //      // $ob = M('duevideo')->where("id = {$id}")->save($datas);
        //      // if($ob > 0){

        //      //    $this->ysxqwc();
        //      // }
        //         echo '成功';
                
        // }

    }
    public function xqzp($id){
        //详情招聘
        $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->where("e.rid = {$id}")->find();
        $data = M('recruit2 as r')->join('recruit1 as e on r.pid = e.rid')->where("r.pid = {$id}")->select();
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->display('Zpdt1/xqzp');
    }
    /**
    *  招聘详情-》我要应聘
    */
    public function xqzp_zhao($id){
        $uid = $_SESSION['id'].',';

        $li = M('recruit2')->where("id = {$id}")->find();
        if(empty($li)){
            $data['id'] = $id;
            $ob = M("recruit2")->add($data);
        }
        $li['zhao'] = '';
        $lis = M('recruit2')->where("id = {$id}")->find();
        $lis['zhao'] .= $uid;
        $db = M("recruit2")->where("id = {$id}")->save($lis);
        if($db > 0){
            $db = M("recruit2")->where("id = {$id}")->find();
            $zhao = explode(',',$db['zhao']);
            array_pop($zhao);
            $zhao_num = count($zhao);
            $this->ajaxReturn($zhao_num);
        }
    }
    // public function zpfb(){
    //     //招聘发布完成
    //     $list = M('user as u')->join('employ as e on u.id = e.uid')->join('employwork as m on e.id = m.pid')->order('e.id desc')->limit('0,3')->select();
    //     $id = M('recruit1')->order('rid desc')->find();
    //     $this->assign('list',$list);
    //     $this->assign('id',$id['rid']);
    //     $this->display('Zpdt1/zpfbwc');
    // }
    public function ypfbwc(){
        //应聘发布完成
      $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->order('e.rid desc')->limit('0,3')->select();
      $data = M('recruit2 as r')->join('recruit1 as e on r.pid = e.rid')->select();
      //获得应聘最大的id
      $id = M('employ')->order('id desc')->find();

      $this->assign('list',$list);
      $this->assign('data',$data);
      $this->assign('id',$id['id']);

      $this->display('Zpdt/ypfbwc');
    }
}