<?php
namespace Admin\Controller;
use Think\Controller;
class usController extends BsController {
    public function index(){//吕本霄
        
        	$news = M('Us');//实例化表
       
        	$operarr = $news->order("id desc")->select();
        	//var_dump($operarr );die;
      
        	$this->assign("operarr",$operarr);//返回当前数据内容
        $this->display();
        }
   
        public function add(){//添加页面
        
        	$this->display();
        }   
     
        /**
         *添加入表
         */
        public function save(){
        	$product = D('us');

        	$id = $product->data($_POST)->add();//添加数据如表

       	if($id){
        				$this->redirect("Us/index");
        			}else {
        				$this->error("保存失败",U("Us/add") );
        			}
        	
        }
        

        public function update(){//修改链接
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('us');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *友情链接修改提交
         */
        public function usave(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('us');
        
        
             	$user = $product ->where("id = {$id}")->save($_POST);
        
        
        			if($id){
        				$this->redirect("Us/index") ;
        			}else {
        				$this->error("修改失败",U("Us/index") );
        			}
        	
        }
        /**
         *删除
         */
        public function delete(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$img = M('us');

        	$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
        	if($resu){
        		$this->redirect("Us/index") ;
        	}else{
        		$this->error("删除失败",U("Us/index") );
        	}
        }
         
        
        
    }

