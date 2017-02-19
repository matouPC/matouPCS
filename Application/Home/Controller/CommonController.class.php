<?php

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller {

    public function orders() {//成员详情
        $count = M('js')->count();    //计算总数
        $Page = new \Think\PageAjax($count, 10);
        $lists = M('js')->page($_GET['p'].',10')->order('id DESC')->select();
        $show = $Page->show();
        $this->assign("page", $show);
        $this->assign("lists", $lists);
        $this->display('Box/order');
    }

}
