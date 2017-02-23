<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class TjcsController extends Controller
{
    public function index()
    {
    	//码头商品
    	$data = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->select();
    	//推荐部队部队
    	$listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.collect desc')->limit('0,3
    		')->select();
    	// $this->assign('list',$list);
    	$num = count($data);
    	$this->assign('data',$data);
    	$this->assign('listn',$listNew);
    	$this->assign('num',$num);

    	$this->display();
    }
     public function spxq()
    {
        //商品详情
        $id=I('id');
        $shop=M('shop as c')->join('user as u on c.uid = u.id')->where("c.id=$id")->select();
        $shangpin=M('commodity as c')->join('comimage as m on c.id = m.psid')->where("pid=$id")->select();
        $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        //var_dump($shangpin);die;
        $this->assign('list',$list);
        $this->assign('shop',$shop);
        $this->assign('shangpin',$shangpin);
        $this->display('Tjcs/spxq');
    
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
                $this->redirect('Tjcs/spcjcg');
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
                $this->redirect('Tjcs/spcjcg');
            }else{// 上传成功
                foreach($info as $upload){
                    //echo $file['savepath'].$file['savename'];die;
                    $data['imagenames'] =  $upload['savename'];
                    $ob = M('comimage')->add($data);
                } 
             }
            
             if($i==$j){
            $this->redirect('Tjcs/spcjcg');
            }
   
           }
    
           }   
    
          public function spcjcg()
           {
            //商品详情
     
            $shop = M('shop as s')->field( "s.*,u.username,u.addre,u.fen" ) ->join('user as u on s.uid = u.id')->where('s.status=2')->order('s.id desc')->limit('0,2')->select();
    
            $this->assign('shop',$shop);
            $this->display('Tjcs/spcjcg');
           
           }   
           public function spcjcg1()
           {
            //商品详情
             
            $shop = M('shop as s')->field( "s.*,u.username,u.addre,u.fen" ) ->join('user as u on s.uid = u.id')->where('s.status=2')->order('s.id desc')->limit('0,2')->select();
           
            $this->assign('shop',$shop);
            $this->display('Tjcs/spcjcg1');
             
           }  
}