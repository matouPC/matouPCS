<?php
namespace Admin\Controller;

use Think\Controller;

class BdzxController extends BsController
{
    public function index()
    {
      	//$condition['status'] = $_GET['status'];
        	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询方法
        	//var_dump($condition );die;
        	$news = M('forcee');
        	$num = $news-> field( "forcee.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on forcee.uid=user.id" )->where( $condition)->count();//查询当前条件的所有数据条数
        	///echo $news->getLastSql();
        	//var_dump($num );die;
        	$pageSize = 5;//每页显示条数
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
        	$pageStr = $page->show();//显示当前分页数
        	
        	//$operarr = $news->where( $condition)->order("id desc")
        	//->limit("$start,$pageSize")
        	//->select();//查询当前分页数据内容
        	$operarr = $news -> field( "forcee.*,user.username,user.fen,user.pubtime,user.imagename" ) ->//确定查询两个表里的字段
        	join( "user on forcee.uid=user.id" ) ->//两个表的关联字段
        	where($condition) ->//查询内容
        	order("id desc")->
        	limit("$start,$pageSize") ->
        	select();
        	//var_dump($pageStr);die;
        	$this->assign("pageStr",$pageStr);//返回当前分页数
        	$this->assign("operarr",$operarr);//返回当前分页数据内容
          $this->display();
    }
    
    
    public function guanzhu(){

    		$id = I('id');//I方法自动检测POST或GET传值方式
    		$ca = M('user_fen');
    		$jarr = $ca->field( "user_fen.fid,user.*" ) ->//确定查询两个表里的字段
        	join( "user on user_fen.fid=user.id" ) ->//两个表的关联字段
        	where("uid=$id and fens='2'")->order("id desc")->select();//查看当前id
    	
    		$this->assign('jarr',$jarr);
    		$this->display();
    	
    	
    	
    }
    
    public function dongtai(){
    	 
    	 
    	 
    }
    
    
    
    
    
}