<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class SousuoController extends Controller
{
    public function index()
    {
        //接收模糊查询的条件-》类型
        $where['r.type']  = array('like','%'.$_POST['sousuo'].'%');
        //悬赏
        $xsList = M('reward1 as e')->join('reward2 as r on r.pid = e.psid')->join('user as u on u.id = e.uid')->where($where)->limit('0,3')->select();//悬赏基本信息
        $xsList_xq = M('reward2 as r')->where($where)->select();//悬赏详情信息

        //应赏
        $yswhere['d.type_d']  = array('like','%'.$_POST['sousuo'].'%');
        // var_dump($yswhere);die;
        $ysList = M('due as d')->join('user as u on u.id = d.uid')->join('dueimage as m on m.pid = d.did')->join('duevideo as v on v.pid = d.did')->join('due_dang as g on g.pid = d.did')->where($yswhere)->limit('0,3')->select();
        
        //招聘
        $zpwhere['r.type']  = array('like','%'.$_POST['sousuo'].'%');
        
        $zpList = M('recruit1 as e')->join('recruit2 as r on r.pid = e.rid')->join('user as u on u.id = e.uid')->where($where)->limit('0,3')->select();//招聘基本信息
        $zpList_xq = M('recruit2 as r')->where($where)->select();//招聘详情信息

        //应聘

        $ypwhere['e.type']  = array('like','%'.$_POST['sousuo'].'%');
        // var_dump($yswhere);die;
        $ypList = M('employ as e')->join('user as u on u.id = e.uid')->join('employimage as m on m.pid = e.eid')->join('employvideo as v on v.pid = e.eid')->where($ypwhere)->limit('0,3')->select();
        //工作经历
        $ypList_gz = M('employwork')->select();
        // var_dump($ypList);die;

        //跳蚤市场
        $tzwhere['f.name'] = array('like','%'.$_POST['sousuo'].'%');
        $tzList = M('flea as f')->join('user as u on u.id = f.uid')->join('fleaimage as m on m.pid = f.fid')->where($tzwhere)->select();

        //码头部队
        $bdwhere['f.type_bd'] = array('like','%'.$_POST['sousuo'].'%');
        $bdList = M('forcee as f')->join('user as u on u.id = f.uid')->where($bdwhere)->select();

        //码头商城
        $scwhere['c.name'] = array('like','%'.$_POST['sousuo'].'%');
        $scList = M('commodity as c')->join('user as u on u.id = c.usid')->join('comimage as m on m.id = c.pid')->where($scwhere)->select();
        // var_dump($scList);die;

        $this->assign('xsList',$xsList);//悬赏基本
        $this->assign('xsList_xq',$xsList_xq);//悬赏详情

        $this->assign('ysList',$ysList);//应赏

        $this->assign('zpList',$zpList);//招聘基本
        $this->assign('zpList_xq',$zpList_xq);//招聘详情
        // echo '<pre>';
        // var_dump($ypList);die;
        $this->assign('ypList',$ypList);//应聘
        $this->assign('ypList_gz',$ypList_gz);//工作经历

        $this->assign('tzList',$tzList);//跳蚤市场

        $this->assign('bdList',$bdList);//码头部队

        $this->assign('scList',$scList);//码头商城

        $this->display('Sousuo/sousuo');
    }   
}