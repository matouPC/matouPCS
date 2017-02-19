<?php

namespace Home\Controller;
header("Content-type: text/html; charset=utf-8"); 

class BoxController extends CommonController {

    public function Index() {
        
    }
    /**
    *  悬赏大厅搜索分页
    */
    public function orders() {//成员详情
        $count = M('reward1')->count();// 
        $Page = new \Think\PageAjax($count,2);//分页开始
        $list = M('reward1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //相关多少条
        $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select();
        $num = count($list);//分页开始
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);    
        $this->assign('data',$data);    
        $this->assign('num',$count);    
        $this->display();
    }
    /**
    *  应赏大厅搜索分页
    */
    public function ysdt(){
        $count = M('due')->count();
        $Page = new \Think\PageAjax($count,2);//分页开始
        $list = M('due as d')->join('user as u on d.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);
        $this->display();
    }
    /**
    *   招聘大厅搜索分页
    */
    public function zpdt(){
        $count = M('recruit1')->count();
        $Page = new \Think\PageAjax($count,2);//分页开始
        $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $data = M('recruit2 as r')->join('recruit1 as e on r.pid = e.rid')->select();
        $show = $Page->show();
         $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);
        $this->assign('listn',$data);
        $this->display();
    }
    /**
    *   应聘区的搜索分页
    */
    function ypq(){
        $count = M('employ')->count();
        $Page = new \Think\PageAjax($count,2);//分页开始
        $list = M('user as u')->join('employ as e on u.id = e.uid')->join('employwork as m on e.id = m.pid')->order('e.id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);
        $this->display();
    }

}

?>
