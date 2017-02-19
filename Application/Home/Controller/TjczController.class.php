<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class TjczController extends Controller
{
    public function index()
    {
        //码头商城
    	$list = M('shop as s')->join('user u on s.uid = u.id')->where('s.status = 2')->order('s.collect desc')->select();
    	$data = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->select();
    	//推荐部队部队
    	$listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.collect desc')->limit('0,3
    		')->select();
    	$num = count($list);
    	$this->assign('list',$list);
    	$this->assign('data',$data);
    	$this->assign('listn',$listNew);
    	$this->assign('num',$num);
    	$this->display();
    }
}