<?php
namespace Admin\Controller;
use Think\Controller;
class FriendController extends BsController {
    public function index(){//吕本霄
           	//$condition['status'] = $_GET['status'];
        	$condition['name'] = array('like',"%".$_POST['keywords']."%");//模糊查询条件
        	//var_dump($condition );die;
        	$news = M('friend');//实例化表
        	$num = $news->where( $condition)->count();//查询数据条数
        	///echo $news->getLastSql();
        	//var_dump($num );die;
        	$pageSize = 5;//每页数据条数
        	$page = new \Think\Page($num,$pageSize);//实例化new类继承分页
        	$start = $page->firstRow;
        	$page->rollPage=5;//显示页数
        	//对分页的结果，指定的出现那些内容
        	$page->setConfig('next', "下一页");
        	$page->setConfig('prev', "上一页");
        	$page->setConfig('first', "首页");
        	$page->lastSuffix=false;
        	$page->setConfig("last", "尾页");
        	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$num.' 条/页 共 %TOTAL_ROW% 条)');
        	$pageStr = $page->show();//显示页数
        	$operarr = $news->where( $condition)->order("id desc")
        	->limit("$start,$pageSize")//查询当前条件的数据
        	->select();
        	//var_dump($operarr );die;
        	$this->assign("pageStr",$pageStr);//返回当前页数位置
        	$this->assign("operarr",$operarr);//返回当前页数数据
        $this->display();
        }
   
        public function add(){//添加页面
        
        	$this->display();
        }   
     
        /**
         *添加入表
         */
        public function save(){
        	$product = D('Friend');
        	date_default_timezone_set('prc');
        	$_POST['pubtime'] = date("Y-m-d",time());//获取时间戳
        	$id = $product->data($_POST)->add();//添加数据如表

       	if($id){
        				$this->redirect("Friend/index") ;
        			}else {
        				$this->error("链接保存失败",U("Friend/add") );
        			}
        	
        }
        

        public function update(){//修改链接
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('Friend');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *友情链接修改提交
         */
        public function usave(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('Friend');
        
        	$resu =$product->where("id=$id")->delete();//删除当前id的内容
        	date_default_timezone_set('prc');
        	$_POST['pubtime'] = date("Y-m-d",time());//获取时间戳
        	$id = $product->data($_POST)->where("id=$id")//添加数据
        	->add();
        
        			if($id){
        				$this->redirect("Friend/index") ;
        			}else {
        				$this->error("友情链接修改失败",U("Friend/index") );
        			}
        	
        }
        /**
         *删除
         */
        public function delete(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$img = M('Friend');

        	$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
        	if($resu){
        		$this->redirect("Friend/index");
        	}else{
        		$this->error("链接删除失败",U("Friend/index") );
        	}
        }
         
        
        
    }
