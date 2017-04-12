<?php
namespace Admin\Controller;
use Think\Controller;

class BsController extends Controller{
	//initialize类似于构造方法，把每个方法执行前要做的操作，写在初始化方法中。
	
	
	
	
	function _initialize(){
		//若是cookie中的缓存被清除就执行输出跳转
		
		if(!isset($_COOKIE['username'])){
			//跳转到登录页                                                                           跳转到最原始的页面
			$this->show("<script type='text/javascript'>top.location.replace('?s=/Admin/Login/index')</script>");
		}
	}
}
?>
