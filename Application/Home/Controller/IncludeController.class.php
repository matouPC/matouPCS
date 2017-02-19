<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class IncludeController extends Controller
{
    public function index()
    {
    	//应聘区
    	// $list = M('user as u')->join('employ as e on u.id = e.uid')->join('employwork as m on e.id = m.pid')->select();
     //    //推荐招聘
     //    $listn = M('employ as e')->join('employwork as m on e.id = m.pid')->order('collect desc')->limit('0,3')->select();
     //    //推荐部队
     //    $listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.collect desc')->limit('0,3')->select();
     //    $this->assign('list',$list);    
    	// $this->assign('listn',$listn);	
     //    $this->assign('listnn',$listNew);
        $count      = M('reward1')->count();// 
        $Page = new \Think\Page($count,1);//分页开始
        $list = M('reward1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);//赋值分页输
        $this->assign('list',$list);
    	$this->display();
    }
}