<?php
namespace Home\Controller;

use Think\Controller; 
class CeshiController extends Controller
{
    
    public function order()
    {  
        $count = M('reward1')->count();// 
        $Page = new \Think\Pageparams($count,1);//分页开始
        $list = M('reward1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //相关多少条
        // $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select();
        $num = count($list);//分页开始
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);    
        $this->assign('data',$data);    
        $this->display('Ceshi/index');
    }
}