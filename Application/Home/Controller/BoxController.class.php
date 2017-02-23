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
        $type = $_GET['type'];//类型
        $sex = $_GET['sex'];//性别
        $age = $_GET['age'];//年龄
        $date = $_GET['date'];//活动时间
        $address = $_GET['address'];//活动地点
        $re = $_GET['re'];//热门  排序
        // 类型 性别 年龄 活动时间 活动地点         
        if($type != '' && $sex != '' && $age != '' && $date != '' && $address != ''){
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $date != '' && $address != ''){//类型 性别 活动时间 活动地点
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($sex != '' && $age != '' && $date != '' && $address != ''){//性别 年龄 活动时间 活动地点
            $where = "r.sex = '{$sex}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $age != '' && $date != '' && $address != ''){//类型 年龄 活动时间 活动地点
            $where = "r.type = '{$type}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $age != '' && $date != ''){//类型 性别 年龄 活动时间
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $sex != '' && $address != ''){//类型 性别 活动地点            
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
            $jwhere = "e.address = '{$address}'";
        }else if($type != '' && $age != '' && $address != ''){//类型 年龄 活动地点
            $where = "r.type = '{$type}' and r.age = '{$age}'";
            $jwhere = "e.address = '{$address}'";
        }else if($age != '' && $sex != '' && $address != ''){//性别 年龄 活动地点
            $where = "r.sex = '{$sex}' and r.age = '{$age}'";
            $jwhere = "e.address = '{$address}'";
        }else if($type != '' && $date != '' && $address != ''){//类型 活动时间 活动地点 
            $where = "r.type = '{$type}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($sex != '' && $date != '' && $address != ''){//性别 活动时间 活动地点
            $where = "r.sex = '{$sex}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($age != '' && $date != '' && $address != ''){//年龄 活动时间 活动地点
            $where = "r.age = '{$age}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $age != '' ){ //类型 性别 年龄       
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and r.age = '{$age}'";
        }else if($type != '' && $sex != '' && $date != ''){//类型 性别 活动时间
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $age != '' && $date != ''){//类型 年龄 活动时间
            $where = "r.type = '{$type}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}'";
        }else if($sex != '' && $age != '' && $date != ''){//性别 年龄 活动时间
            $where = "r.sex = '{$sex}' and r.age = '{$age}'";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $address != ''){ //类型 活动地点  
            $where = "r.type = '{$type}'";
            $jwhere = "e.address = '{$address}'";
        }else if($sex != '' && $address != ''){ //性别活动地点
            $where = "r.sex = '{$sex}'";
            $jwhere = "e.address = '{$address}'";
        }else if($age != '' && $address != ''){//年龄活动地点
            $where = "r.age = '{$age}'";
            $jwhere = "e.address = '{$address}'";
        }else if($date != '' && $address != ''){//活动时间 活动地点
            $jwhere = "e.address = '{$address}' and date = '{$date}'";
        }else if($type != '' && $sex != ''){//类型性别  
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
        }else if($type != '' && $age != ''){//类型年龄
            $where = "r.type = '{$type}' and r.age = '{$age}'";
        }else if($sex != '' && $age != ''){//性别年龄
            $where = "r.sex = '{$sex}' and r.age = '{$age}'";
        }else if($type != '' && $date != ''){//类型 活动时间   
            $where = "r.type = '{$type}'";
            $jwhere = "e.time = '{$date}'";
        }else if($sex != '' && $date != ''){//性别 活动时间
            $where = "r.sex = '{$sex}'";
            $jwhere = "e.time = '{$date}'";
        }else if($age != '' && $date != ''){//年龄 活动时间
            $where = "r.age = '{$age}'";
            $jwhere = "e.time = '{$date}'";
        }else if($type != ''){//类型
            $where = "r.type = '{$type}'";
        }else if($sex != ''){//性别
            $where = "r.sex = '{$sex}'";
        }else if($age != ''){//年龄
            $where = "r.age = '{$age}'";
        }else if($date != ''){//活动时间
            $jwhere = "e.time = '{$date}'";
        }else if($address != ''){//活动地点
            $jwhere = "e.address = '{$address}'";
        }
        //分页开始
        if(empty($where)){
            $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select(); 
          }else if(!empty($re)){
             $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select(); 
            foreach($data as $datas){
                $flag[] = $datas["bao"];
                }
                array_multisort($flag, SORT_DESC, $data);
          }else{
            $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->where($where)->select();  
          }
          if(!empty($jwhere)){
              $count = M('reward1 as e')->where($jwhere)->count();//根据查到的条数来进行分页
          }else{
              $count = M("reward1")->count();
          }
          $Page = new \Think\PageAjax($count,1);
          if(!empty($where)){
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->join("reward2 as r on r.pid = e.psid")->where($where)->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();
            }else if(!empty($jwhere)){
                 $list = M('reward1 as e')->join('user as u on e.uid = u.id')->where($jwhere)->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select(); 
            }else if(!empty($re)){
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
                foreach($list as $datas){
                    $flag[] = $datas["bao"];
                    }
                array_multisort($flag, SORT_DESC, $list);
            }else{
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
            
        //相关多少条
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
        $type = $_GET['type'];//类型
        $sex = $_GET['sex'];//性别
        $age = $_GET['age'];//年龄
        $bd = $_GET['bd'];//查询部队类型
        $date = $_GET['date'];//档期
        // 类型 性别 年龄 活动时间 活动地点         
        if($type != '' && $sex != '' && $age != '' && $date != '' && $address != ''){
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}' and {$age}";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $date != '' && $address != ''){//类型 性别 活动时间 活动地点
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($sex != '' && $age != '' && $date != '' && $address != ''){//性别 年龄 活动时间 活动地点
            $where = "d.sexs = '{$sex}' and {$age}";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $age != '' && $date != '' && $address != ''){//类型 年龄 活动时间 活动地点
            $where = "d.type_d = '{$type}' and {$age}";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $age != '' && $date != ''){//类型 性别 年龄 活动时间
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}' and {$age}";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $sex != '' && $address != ''){//类型 性别 活动地点            
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}'";
            $jwhere = "e.address = '{$address}'";
        }else if($type != '' && $age != '' && $address != ''){//类型 年龄 活动地点
            $where = "d.type_d = '{$type}' and {$age}";
            $jwhere = "e.address = '{$address}'";
        }else if($age != '' && $sex != '' && $address != ''){//性别 年龄 活动地点
            $where = "d.sexs = '{$sex}' and {$age}";
            $jwhere = "e.address = '{$address}'";
        }else if($type != '' && $date != '' && $address != ''){//类型 活动时间 活动地点 
            $where = "d.type_d = '{$type}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($sex != '' && $date != '' && $address != ''){//性别 活动时间 活动地点
            $where = "d.sexs = '{$sex}'";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($age != '' && $date != '' && $address != ''){//年龄 活动时间 活动地点
            $where = "d.age = {$age}";
            $jwhere = "e.time = '{$date}' and e.address = '{$address}'";
        }else if($type != '' && $sex != '' && $age != '' ){ //类型 性别 年龄       
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}' and {$age}";
        }else if($type != '' && $sex != '' && $date != ''){//类型 性别 活动时间
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}'";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $age != '' && $date != ''){//类型 年龄 活动时间
            $where = "d.type_d = '{$type}' and {$age}";
            $jwhere = "e.time = '{$date}'";
        }else if($sex != '' && $age != '' && $date != ''){//性别 年龄 活动时间
            $where = "d.sexs = '{$sex}' and {$age}";
            $jwhere = "e.time = '{$date}'";
        }else if($type != '' && $address != ''){ //类型 活动地点  
            $where = "d.type_d = '{$type}'";
            $jwhere = "e.address = '{$address}'";
        }else if($sex != '' && $address != ''){ //性别活动地点
            $where = "d.sexs = '{$sex}'";
            $jwhere = "e.address = '{$address}'";
        }else if($age != '' && $address != ''){//年龄活动地点
            $where = $age;
            $jwhere = "e.address = '{$address}'";
        }else if($date != '' && $address != ''){//活动时间 活动地点
            $jwhere = "e.address = '{$address}' and date = '{$date}'";
        }else if($type != '' && $sex != ''){//类型性别  
            $where = "d.type_d = '{$type}' and d.sexs = '{$sex}'";
        }else if($type != '' && $age != ''){//类型年龄
            $where = "d.type_d = '{$type}' and {$age}";
        }else if($sex != '' && $age != ''){//性别年龄
            $where = "d.sexs = '{$sex}' and {$age}";
        }else if($type != '' && $date != ''){//类型 活动时间   
            $where = "d.type_d = '{$type}'";
            $jwhere = "e.time = '{$date}'";
        }else if($sex != '' && $date != ''){//性别 活动时间
            $where = "d.sexs = '{$sex}'";
            $jwhere = "e.time = '{$date}'";
        }else if($age != '' && $date != ''){//年龄 活动时间
            $where = $age;;
            $jwhere = "e.time = '{$date}'";
        }else if($type != ''){//类型
            $where = "d.type_d = '{$type}'";
        }else if($sex != ''){//性别
            $where = "d.sexs = '{$sex}'";
        }else if($age != ''){//年龄
            $where = $age;
        }else if($date != ''){//活动时间
            $jwhere = "e.time = '{$date}'";
        }else if($address != ''){//活动地点
            $jwhere = "e.address = '{$address}'";
        }
        var_dump($where);
        $count = M('due as d')->where($where)->count();
        $Page = new \Think\PageAjax($count,1);//分页开始
        if(!empty($where) && !empty($bd)){//部队和条件都存在的情况
            $list = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->join("forcee as f on f.uid = u.id")->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        }else if(!empty($bd)){//只有部队存在的情况 利用join多查询了认证部队的表
            $list = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->join("forcee as f on f.uid = u.id")->limit($Page->firstRow.','.$Page->listRows)->select();
        }else if(!empty($where)){//只有普通条件存在的情况
            $list = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        }else if(!empty($date)){//没有条件存在的情况
            $lists = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->limit($Page->firstRow.','.$Page->listRows)->select();
            // var_dump($list['dangdate']);die; $sc=new IndexController();  用相对路径 stringimg
            foreach ($lists as $key => $value) {
                // var_dump($value['dangdate']);
                $arr[] .= $value['dangdate'];
            }
            // var_dump($arr);die;
            $sc = A('User');
            for ($i=0; $i < count($arr) ; $i++) { //处理多余的字符
                 $xxoo[] = $sc->stringimg($arr[$i]);
            }
            for ($i=0; $i < count($xxoo); $i++) { //合并数组
                if(in_array($date, $xxoo[$i])){//如果传过来的日期属于某个数组里的档期  就证明搜索到了
                    $listss= M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->limit($Page->firstRow.','.$Page->listRows)->select();
                    //这个方法比较麻烦  不过为了赶时间  只有先这样写的 莫名其妙的 数组名直接改了 也不行
                    $list[$i]['did'] = $listss[$i]['did'];
                    $list[$i]['name'] = $listss[$i]['name'];
                    $list[$i]['age'] = $listss[$i]['age'];
                    $list[$i]['sexs'] = $listss[$i]['sexs'];
                    $list[$i]['height'] = $listss[$i]['height'];
                    $list[$i]['address'] = $listss[$i]['address'];
                    $list[$i]['type_d'] = $listss[$i]['type_d'];
                    $list[$i]['price'] = $listss[$i]['price'];
                    $list[$i]['skilled'] = $listss[$i]['skilled'];
                    $list[$i]['time'] = $listss[$i]['time'];
                    $list[$i]['tels'] = $listss[$i]['tels'];
                    $list[$i]['qqs'] = $listss[$i]['qqs'];
                    $list[$i]['content'] = $listss[$i]['content'];
                    $list[$i]['content'] = $listss[$i]['content'];
                    $list[$i]['uid'] = $listss[$i]['uid'];
                    $list[$i]['collect'] = $listss[$i]['collect'];
                    $list[$i]['date'] = $listss[$i]['date'];
                    $list[$i]['due_shou'] = $listss[$i]['due_shou'];
                    $list[$i]['id'] = $listss[$i]['id'];
                    $list[$i]['username'] = $listss[$i]['username'];
                    $list[$i]['password'] = $listss[$i]['password'];
                    $list[$i]['tel'] = $listss[$i]['tel'];
                    $list[$i]['sex'] = $listss[$i]['sex'];
                    $list[$i]['addre'] = $listss[$i]['addre'];
                    $list[$i]['imagename'] = $listss[$i]['imagename'];
                    $list[$i]['pubtime'] = $listss[$i]['pubtime'];
                    $list[$i]['weixin'] = $listss[$i]['weixin'];
                    $list[$i]['fen'] = $listss[$i]['fen'];
                    $list[$i]['qq'] = $listss[$i]['qq'];
                    $list[$i]['weibo'] = $listss[$i]['weibo'];
                    $list[$i]['cid'] = $listss[$i]['cid'];
                    $list[$i]['imagename_z'] = $listss[$i]['imagename_z'];
                    $list[$i]['pid'] = $listss[$i]['pid'];
                    $list[$i]['type'] = $listss[$i]['type'];
                    $list[$i]['video'] = $listss[$i]['video'];
                    $list[$i]['imagename_v'] = $listss[$i]['imagename_v'];
                    $list[$i]['usid'] = $listss[$i]['usid'];
                    $list[$i]['dangdate'] = $listss[$i]['dangdate'];
                    $list[$i]['dangs'] = $listss[$i]['dangs'];
                }
            }
        }else if(!empty($where) && !empty($date)){
            $lists = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
            // var_dump($list['dangdate']);die; $sc=new IndexController();  用相对路径 stringimg
            foreach ($lists as $key => $value) {
                // var_dump($value['dangdate']);
                $arr[] .= $value['dangdate'];
            }
            // var_dump($arr);die;
            $sc = A('User');
            for ($i=0; $i < count($arr) ; $i++) { //处理多余的字符
                 $xxoo[] = $sc->stringimg($arr[$i]);
            }
            for ($i=0; $i < count($xxoo); $i++) { //合并数组
                if(in_array($date, $xxoo[$i])){//如果传过来的日期属于某个数组里的档期  就证明搜索到了
                    $listss= M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->limit($Page->firstRow.','.$Page->listRows)->select();
                    //这个方法比较麻烦  不过为了赶时间  只有先这样写的 莫名其妙的 数组名直接改了 也不行
                    $list[$i]['did'] = $listss[$i]['did'];
                    $list[$i]['name'] = $listss[$i]['name'];
                    $list[$i]['age'] = $listss[$i]['age'];
                    $list[$i]['sexs'] = $listss[$i]['sexs'];
                    $list[$i]['height'] = $listss[$i]['height'];
                    $list[$i]['address'] = $listss[$i]['address'];
                    $list[$i]['type_d'] = $listss[$i]['type_d'];
                    $list[$i]['price'] = $listss[$i]['price'];
                    $list[$i]['skilled'] = $listss[$i]['skilled'];
                    $list[$i]['time'] = $listss[$i]['time'];
                    $list[$i]['tels'] = $listss[$i]['tels'];
                    $list[$i]['qqs'] = $listss[$i]['qqs'];
                    $list[$i]['content'] = $listss[$i]['content'];
                    $list[$i]['content'] = $listss[$i]['content'];
                    $list[$i]['uid'] = $listss[$i]['uid'];
                    $list[$i]['collect'] = $listss[$i]['collect'];
                    $list[$i]['date'] = $listss[$i]['date'];
                    $list[$i]['due_shou'] = $listss[$i]['due_shou'];
                    $list[$i]['id'] = $listss[$i]['id'];
                    $list[$i]['username'] = $listss[$i]['username'];
                    $list[$i]['password'] = $listss[$i]['password'];
                    $list[$i]['tel'] = $listss[$i]['tel'];
                    $list[$i]['sex'] = $listss[$i]['sex'];
                    $list[$i]['addre'] = $listss[$i]['addre'];
                    $list[$i]['imagename'] = $listss[$i]['imagename'];
                    $list[$i]['pubtime'] = $listss[$i]['pubtime'];
                    $list[$i]['weixin'] = $listss[$i]['weixin'];
                    $list[$i]['fen'] = $listss[$i]['fen'];
                    $list[$i]['qq'] = $listss[$i]['qq'];
                    $list[$i]['weibo'] = $listss[$i]['weibo'];
                    $list[$i]['cid'] = $listss[$i]['cid'];
                    $list[$i]['imagename_z'] = $listss[$i]['imagename_z'];
                    $list[$i]['pid'] = $listss[$i]['pid'];
                    $list[$i]['type'] = $listss[$i]['type'];
                    $list[$i]['video'] = $listss[$i]['video'];
                    $list[$i]['imagename_v'] = $listss[$i]['imagename_v'];
                    $list[$i]['usid'] = $listss[$i]['usid'];
                    $list[$i]['dangdate'] = $listss[$i]['dangdate'];
                    $list[$i]['dangs'] = $listss[$i]['dangs'];
                }
            }
        }else{
            $list = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->limit($Page->firstRow.','.$Page->listRows)->select();
        }
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
