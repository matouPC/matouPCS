<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	//显示验证码
	function verify(){
		//实例化验证码类
		$Verify = new \Think\Verify();
		//如果生成多个验证码则在entry后面写值  为空则是一个验证码
		$Verify->entry();
	}
	 
	 
	function index(){
		//显示模板login文件夹下的index
	//	setcookie("username",$username,0,time()-1);
	  setcookie('username',0,time()-1);
		$this->display();
	}
	/*
	 *判断用户名密码是否正确0
	*/
	function check(){
		//获取session中和表单中的数据对比     I为快捷函数   自动判断post和get方式传输
		$FVerify = I('verify');
		//实例化验证码
		$verify = new \Think\Verify();
		//判断
		if($verify->check($FVerify,"")){
			//I为快捷方式     获取id参数自动判断post和get传输
			$username = I('username');
			$password = I('password');
	
			//M为快捷方式    指定表名
			$mOb=M('admin');
			///根据得到的账号和密码和数据库查询到的数据比对    不能防注入
			//$arr=$mOb->where("username='$username' and password='$password'")->find();
			//对账号密码进行占位预处理  %s为预处理字符串
			$arr=$mOb->where("username='%s' and password='%s'",array($username,$password))->find();
			//对账号密码进行占位预处理
			//$arr=$mOb->where("username=:u and password=:p")->bind(array(':u'=>$username,':p'=>$password))->find();
			//判断POST获得的用户名和密码是否
			if ($arr) {
				//创建会话变量
				setcookie("username",$username,0,"/");
				//成功则跳转到Index控制器下的index方法
				$this->redirect('Index/index');
			}else{
				//失败则返回登录页
				//echo "no";
				$this->error("登录失败",U("Login/index"));
			}
		}else{
			//echo "no1";
		$this->error("验证码错误",U("Login/index"));
		}
	}
	
	
}
?>