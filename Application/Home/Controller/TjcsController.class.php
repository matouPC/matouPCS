<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class TjcsController extends Controller
{
    public function index()
    {
    	//码头商品
    	// $shop = M('shop')->where('status = "2"')->limit('0,3')->select();
    	// $data = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->select();
    	//推荐商品
    	$datas = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->where('leixing="1"')->order('c.id desc')->limit('0,3')->select();
    	//推荐部队部队
    	$listNew = M('shop as f')->join('user as u on u.id = f.uid')->order('f.collect desc')->where('status="2"')->order('f.id desc')->limit('0,3')->select();
    	// $this->assign('list',$list);
    	$num = count($data);
    	$this->assign('shop',$shop);
        $this->assign('datas',$datas);
    	$this->assign('data',$data);
    	
    	$this->assign('listn',$listNew);
    	$this->assign('num',$num);

    	$this->display();
    }
     public function spxq()
    {
        //商品详情
        
        $uid=I('uid');
        if($uid==''){
        	$id=I('id');
        }else{
        $sp = M('shop')->where("uid ={$uid} and status=2")->select();//我的商铺
        foreach ($sp as $v){
        	$id=$v['id'];
        }
    }
        $shop=M('shop as c')-> field( "c.*,u.username,u.type_u,u.tel,u.addre")->join('user as u on c.uid = u.id')->where("status=2 and c.id={$id}")->find();
        $shangpinz=M('commodity as c')->join('comimage as m on c.id = m.psid')->where("pid=$id and leixing=1")->select();
        $shangpins=M('commodity as c')->join('comimage as m on c.id = m.psid')->where("pid=$id and leixing=2")->select();
        $list = M('shop_liuyan as s')-> field( "s.*,u.username,u.type_u,u.tel,u.imagename,u.addre")->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        
        $this->assign('list',$list);
        $this->assign('shop',$shop);
        $this->assign('shangpinz',$shangpinz);
        $this->assign('shangpins',$shangpins);
        $this->display('Tjcs/spxq');
    
    }
    public function spxq_shou($id){

        $uid = $_SESSION['id'];//当前用户的id
        $ob = M('shop')->where("id = {$id}")->find();

        if(!empty($ob)){
            $shou['shou'] = '';
            $shou = M('shop')->where("id = {$id}")->find();
            $shou['shou'] .= $uid.',';
            $fids['uid'] = $uid;
            $fids['fid'] = $shou['uid'];//被收藏的用户id
            $fids['type_xx'] = 2;
            // $fids['type_xs'] = 1;
            $fids['content_xx'] = '收藏商铺';
            $xd = M("user_xx_sp")->add($fids);
            if($xd > 0){
                $dd = M('shop')->where("id = {$id}")->save($shou);
                if($dd > 0){
                    echo '收藏成功';
                }
            }
        }
        
    }
    public function usave(){
        //创建商品基本信息
        $_POST['uid'] = $_SESSION['id'];
        $product = M('shop');
        $reward = $product ->add($_POST);
        $this->ajaxReturn($reward);
         
    
    }
    public function usave1(){
        //echo '<pre>';
        //var_dump($_FILES['upload1']);die;
        $data['usid'] =  $_SESSION['id'];
        $data['pid'] =  $_POST['pid'];
        $data['pubtimes']=date("Y-m-d ",time());
        $j= count($_FILES)/2;
        //echo $j;die;
        for( $i=1;$i<=$j;$i++){
        
            $data['price'] = $_POST["price{$i}"];
            $data['content'] = $_POST["content{$i}"];
            $data['leixing'] = $_POST["leixing{$i}"];
            $data['name'] = $_POST["name{$i}"];
            $v=M('commodity');
            $id = $v->add($data);
           // $this->upload( $_FILES["upload{$i}"],$id);
            $upload=$_FILES["upload{$i}"];
            $upload = new \Think\Upload($upload);   
           // var_dump($upload);die;
            $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath  =      './Uploads/'; // 设置附件上传目录
            $info   =   $upload->upload(array($_FILES["upload{$i}"]));
            $data['psid'] =  $id;
            $data['pubtimes']=date("Y-m-d",time());
            if(!$info) {// 上传错误提示错误信息
                $this->redirect('Mtbu/spglcg');
            }else{// 上传成功
                foreach($info as $upload){
                    //echo $file['savepath'].$file['savename'];die;
                    $data['imagenames'] =  $upload['savename'];
                    $ob = M('comimage')->add($data);
            
                }
            }
            $uploads=$_FILES["uploads{$i}"];
            $upload = new \Think\Upload($uploads);
            // var_dump($upload);die;
            $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath  =      './Uploads/'; // 设置附件上传目录
            $info   =   $upload->upload(array($_FILES["uploads{$i}"]));
            $data['psid'] =  $id;
            $data['pubtimes']=date("Y-m-d",time());
            if(!$info) {// 上传错误提示错误信息
                $this->redirect('Mtbu/spglcg');
            }else{// 上传成功
                foreach($info as $upload){
                    //echo $file['savepath'].$file['savename'];die;
                    $data['imagenames'] =  $upload['savename'];
                    $ob = M('comimage')->add($data);
                } 
             }
            
             if($i==$j){
            $this->redirect('Mtbu/spglcg');
            }
   
           }
    
           }   
    
          public function spcjcg()
           {
            //商品详情
     
            $shop = M('shop as s')->field( "s.*,u.username,u.addre,u.fen" ) ->join('user as u on s.uid = u.id')->where('s.status=2')->order('s.id desc')->find();
    
            $this->assign('v',$shop);
            $this->display('Tjcs/spcjcg');
           
           }   
           public function spcjcg1()
           {
            //商品详情
             
            $shop = M('shop as s')->field( "s.*,u.username,u.addre,u.fen" ) ->join('user as u on s.uid = u.id')->where('s.status=2')->order('s.id desc')->limit('0,2')->select();
           
            $this->assign('shop',$shop);
            $this->display('Tjcs/spcjcg1');
             
           }  
           public function usaveimg(){
           	$data['imagename'] =I('imagename');
           	$id = $_SESSION['id'];
           	$img = M('shop');
           	$ob = $img->where("status=2 and uid = {$id}")->save($data);
           	if($ob){
           		echo 'y';
           	}
           }
}