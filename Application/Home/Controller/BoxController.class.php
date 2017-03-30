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
      //var_dump($address);die;
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
        if(!empty($where)){
             $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->where($where.' and bao_st = 1')->select();
          }else if(!empty($re)){
             $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select(); 
            foreach($data as $datas){
                $flag[] = $datas["bao"];
                }
                array_multisort($flag, SORT_DESC, $data);
          }else{
             $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select();
          }
          if(!empty($jwhere)){
              $count = M('reward1 as e')->where($jwhere)->count();//根据查到的条数来进行分页
          }else{
              $count = M("reward1")->count();
          }
          $Page = new \Think\PageAjax($count,20);
          if(!empty($where) && !empty($jwhere)){
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->join("reward2 as r on r.pid = e.psid")->where($where.' and '.$jwhere)->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();
            }else if(!empty($where)){
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();
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

        foreach ($list as $key => $value) {
            for ($i=0; $i < count($data); $i++) { 
                    if($value['psid'] == $data[$i]['pid']){
                        // if(in_array($sex,$data[$i])){
                            $value[] = $data[$i];
                            // var_dump($value);
                        // }
                    }
            }
            $newList[] = $value;
        }
            // echo '<pre>';
            // var_dump($newList);die;
            foreach ($newList as $key => $value) {
                // var_dump(count($value));
                for ($i=0; $i < 1; $i++) { //此处是符合这个条件的 有且只有一个
                    //var_dump($value[$i]);//拿到了查询的值
                    if($value[$i]['pid'] == $value['psid']){
                        $newLists[] = $value;
                    }
                }
            }
        //相关多少条
        $num = count($list);//分页开始
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$newLists);    
        // $this->assign('data',$data);    
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
        $count = M('due as d')->where($where)->count();
        $Page = new \Think\PageAjax($count,20);//分页开始
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
        $this->assign('data',$data);
        $this->display();
    }
    /**
    *   招聘大厅搜索分页
    */
    public function zpdt(){
        $type =  addslashes($_GET['type']);//职业
   //     var_dump($type);
        $sex =  $_GET['sex'];//性别
        $age =  $_GET['age'];//年龄
        $worktime = $_GET['worktime'];//工作经验
        $rzbd = $_GET['rzbd'];//认证部队
        $address = $_GET['address'];//活动地址
        if($type != '' && $sex != '' && $age != '' && $worktime != '' && $rzbd != ''){// 职业 性别 年龄 工作经验 认证部队
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $age != '' && $rzbd != ''){// 职业 性别 年龄 认证部队
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and {$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $worktime != '' && $rzbd != ''){// 职业 性别 工作经验 认证部队
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $worktime != '' && $rzbd != ''){// 职业 年龄 工作经验 认证部队
            $where = "r.type = '{$type}' and {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $age != '' && $worktime != '' && $rzbd != ''){// 性别 年龄 工作经验 认证部队 
            $where = "r.sex = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $age != '' && $worktime != ''){// 职业 性别 年龄 工作经验
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
        }else if($type != '' && $sex != '' && $rzbd != ''){//职业 性别 认证部队
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $rzbd != ''){//职业 年龄 认证部队
            $where = "r.type = '{$type}' and  {$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $worktime != '' && $rzbd != ''){//职业 工作经验 认证部队
            $where = "r.type = '{$type}' and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $age != '' && $rzbd != ''){//性别 年龄 认证部队
            $where = " r.sex = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $worktime != '' && $rzbd != ''){ //性别 工作经验 认证部队
            $where = "r.sex = '{$sex}'  and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($age != '' && $worktime != '' && $rzbd != ''){// 年龄 工作经验 认证部队
            $where = " {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $worktime != ''){// 职业 年龄 工作经验
            $where = "r.type = '{$type}' and {$age} and r.worktime = '{$worktime}'";
        }else if($age != '' && $sex != '' && $worktime != ''){// 性别 年龄 工作经验
            $where = "r.sex = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
        }else if($type != '' && $sex != '' && $worktime != ''){// 职业 性别 工作经验
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and r.worktime = '{$worktime}'";
        }else if($type != '' && $sex != '' && $age != ''){//职业 性别 年龄
            $where = "r.type = '{$type}' and r.sex = '{$sex}' and {$age}";
        }else if($type != ''  && $rzbd != ''){//职业 认证部队      
            $where = "r.type = '{$type}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($age != '' && $rzbd != ''){//年龄 认证部队
            $where = "{$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $rzbd != ''){//性别 认证部队
            $where = "r.sex = '{$sex}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($worktime != '' && $rzbd != ''){//工作经验 认证部队 
            $where = "r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $worktime != ''){//职业 工作经验     
            $where = "r.type = '{$type}' and r.worktime = '{$worktime}'";
        }else if($sex != '' &&  $worktime != ''){//性别 工作经验
            $where = "r.sex = '{$sex}' and r.worktime = '{$worktime}'";
        }else if($age != '' && $worktime != ''){//年龄 工作经验
            $where = "{$age} and r.worktime = '{$worktime}'";
        }else if($type != '' && $sex !='') {// 职业 性别
            $where = "r.type = '{$type}' and r.sex = '{$sex}'";
        }else if($type != '' && $age !=''){//职业 年龄     
            $where = "r.type = '{$type}' and {$age}";
        }else if($age != '' && $sex !=''){//性别 年龄
            $where = "r.sex = '{$sex}' and {$age}";
        }else if($type != ''){ //职业 
            $where = "r.type = '{$type}'";
        }else if($sex != ''){//性别
            $where = "r.sex = '{$sex}'";
        }else if($age != ''){//年龄
            $where = $age;
        }else if($worktime != ''){//工作经验
            $where = "r.worktime = '{$worktime}'";
        }else if($rzbd != ''){//认证部队
            $jwhere = "f.type_bd = '{$rzbd}'";
        }
        // else if($address != ''){
        //     $where = "e.address = '{$address}'";
        // }
        //var_dump($where);
        //计算总页数
        if(!empty($where)){
            $count = M('recruit2 as r')->where($where)->count();
        }else if(!empty($jwhere)){
            $count = M('recruit1 as e')->join("forcee as f on e.uid = f.uid")->where($jwhere)->count();
        }else{
            $count = M('recruit1')->count();
        }
        $Page = new \Think\PageAjax($count,20);//分页开始
        //分析条件是否为空的条件
        if(!empty($where) && !empty($jwhere) && !empty($address)){/*****************************/
             $data = M('recruit2 as r')->join("forcee as f on f.uid = r.usid")->where($jwhere.' and '.$where)->select();
            if($data == ''){
                $list = '';
            }else{
                $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("forcee as f on f.uid = e.uid")->where($jwhere)->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
             $list = $this->addre($address,$lists);
        }else if(!empty($where) && !empty($jwhere)){
            $data = M('recruit2 as r')->join("forcee as f on f.uid = r.usid")->where($jwhere.' and '.$where)->select();
            if($data == ''){
                $list = '';
            }else{

                $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("forcee as f on f.uid = e.uid")->where($jwhere)->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
        }else if(!empty($where) && !empty($address)){//详细条件 地址
            $data = M('recruit2 as r')->where($where)->select();
            if($data == ''){
                $list = '';
            }else{
                $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("recruit2 as r on r.pid = e.rid")->join("forcee as f on f.uid = u.id")->where($where)->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
            $list = $this->addre($address,$lists);
        }else if(!empty($jwhere) && !empty($address)){
            $data = M('recruit2 as r')->join("forcee as f on f.uid = r.usid")->where($jwhere)->select();
            if($data == ''){
                $list = '';
            }else{
                $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("forcee as f on f.uid = e.uid")->where($jwhere)->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
             $list = $this->addre($address,$lists);
        }else if(!empty($where)){
            $data = M('recruit2 as r')->where($where)->select();
            if($data == ''){
                $list = '';
            }else{
                // die;
                $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("forcee as f on f.uid = u.id")->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();

            }
        }else if(!empty($jwhere)){
            $data = M('recruit2 as r')->join("forcee as f on f.uid = r.usid")->where($jwhere)->select();
            if($data == ''){
                $list = '';
            }else{
                $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->join("forcee as f on f.uid = e.uid")->where($jwhere)->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            }
        }else if(!empty($address)){
           $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join('forcee as f on f.uid = u.id')->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();

           $list = $this->addre($address,$lists);
           $data = M('recruit2')->select();
        }else{
            $data = M('recruit2')->select();
            if($data == ''){
                $list = '';
            }else{
                $list = M('recruit1 as e')->join('user as u on e.uid = u.id')->join('forcee as f on f.uid = u.id')->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
            } 
        }
        /*******开始处理查询多的重复值*************/
        foreach ($list as $key => $value) {
            for ($i=0; $i < count($data); $i++) { 
                    if($value['rid'] == $data[$i]['pid']){
                        // if(in_array($sex,$data[$i])){
                            $value[] = $data[$i];
                        // }
                    }
            }
            $newList[] = $value;
        }

        foreach ($newList as $key => $value) {
            // var_dump(count($value));
            for ($i=0; $i < 1; $i++) { //此处是符合这个条件的 有且只有一个
                //var_dump($value[$i]);//拿到了查询的值
                if($value[$i]['pid'] == $value['rid']){
                    $newLists[] = $value;
                }
            }
        }

        /*********结束********************/
        $show = $Page->show();
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$newLists);
        // $this->assign('listn',$data);
        $this->display();
    }
    public function addre($address,$lists){//分别为传递过来的地址  和sql语句
          // $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join('forcee as f on f.uid = u.id')->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();

            
             foreach ($lists as $key => $value) {//遍历完成条件后的数组
                $aa = explode(',',$value['address_zp']);
                $arr[] .= $aa[0];//拿到可以查的地址
                $array[] = $value;
            }
            for ($i=0; $i < count($arr); $i++) { //将地址进行循环
                if($address == $arr[$i]){//如果传过来的地址等于处理过的这个地址 则将数组重新给一个数组
                    $list[$i] =  $lists[$i];
                }
            }
            return $list;
    }
    /**
    *   应聘区的搜索分页
    */
    function ypq(){
         $type =  addslashes($_GET['type']);//职业
        $sex =  $_GET['sex'];//性别
        $age =  $_GET['age'];//年龄
        $worktime = $_GET['worktime'];//工作经验
        $rzbd = $_GET['rzbd'];//认证部队
        $address = $_GET['address'];//活动地址
        $zuo = $_GET['zuo'];//有无作品
        if($type != '' && $sex != '' && $age != '' && $worktime != '' && $rzbd != ''){// 职业 性别 年龄 工作经验 认证部队
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and {$age} and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $age != '' && $rzbd != ''){// 职业 性别 年龄 认证部队
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and {$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $worktime != '' && $rzbd != ''){// 职业 性别 工作经验 认证部队
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $worktime != '' && $rzbd != ''){// 职业 年龄 工作经验 认证部队
            $where = "r.type = '{$type}' and {$age} and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $age != '' && $worktime != '' && $rzbd != ''){// 性别 年龄 工作经验 认证部队 
            $where = "r.sexs = '{$sex}' and {$age} and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $sex != '' && $age != '' && $worktime != ''){// 职业 性别 年龄 工作经验
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and {$age} and r.worktimes = '{$worktime}'";
        }else if($type != '' && $sex != '' && $rzbd != ''){//职业 性别 认证部队
            $where = "r.type = '{$type}' and r.sexs = '{$sex}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $rzbd != ''){//职业 年龄 认证部队
            $where = "r.type = '{$type}' and  {$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $worktime != '' && $rzbd != ''){//职业 工作经验 认证部队
            $where = "r.type = '{$type}' and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $age != '' && $rzbd != ''){//性别 年龄 认证部队
            $where = " r.sexs = '{$sex}' and {$age} and r.worktime = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $worktime != '' && $rzbd != ''){ //性别 工作经验 认证部队
            $where = "r.sexs = '{$sex}'  and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($age != '' && $worktime != '' && $rzbd != ''){// 年龄 工作经验 认证部队
            $where = " {$age} and r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $age != '' && $worktime != ''){// 职业 年龄 工作经验
            $where = "r.type = '{$type}' and {$age} and r.worktimes = '{$worktime}'";
        }else if($age != '' && $sex != '' && $worktime != ''){// 性别 年龄 工作经验
            $where = "r.sexs = '{$sex}' and {$age} and r.worktimes = '{$worktime}'";
        }else if($type != '' && $sex != '' && $worktime != ''){// 职业 性别 工作经验
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and r.worktimes = '{$worktime}'";
        }else if($type != '' && $sex != '' && $age != ''){//职业 性别 年龄
            $where = "r.type = '{$type}' and r.sexs = '{$sex}' and {$age}";
        }else if($type != ''  && $rzbd != ''){//职业 认证部队      
            $where = "r.type = '{$type}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($age != '' && $rzbd != ''){//年龄 认证部队
            $where = "{$age}";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($sex != '' && $rzbd != ''){//性别 认证部队
            $where = "r.sexs = '{$sex}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($worktime != '' && $rzbd != ''){//工作经验 认证部队 
            $where = "r.worktimes = '{$worktime}'";
            $jwhere = "f.type_bd = '{$rzbd}'";
        }else if($type != '' && $worktime != ''){//职业 工作经验     
            $where = "r.type = '{$type}' and r.worktimes = '{$worktime}'";
        }else if($sex != '' &&  $worktime != ''){//性别 工作经验
            $where = "r.sexs = '{$sex}' and r.worktimes = '{$worktime}'";
        }else if($age != '' && $worktime != ''){//年龄 工作经验
            $where = "{$age} and r.worktimes = '{$worktime}'";
        }else if($type != '' && $sex !='') {// 职业 性别
            $where = "r.type = '{$type}' and r.sexs = '{$sex}'";
        }else if($type != '' && $age !=''){//职业 年龄     
            $where = "r.type = '{$type}' and {$age}";
        }else if($age != '' && $sex !=''){//性别 年龄
            $where = "r.sexs = '{$sex}' and {$age}";
        }else if($type != ''){ //职业 
            $where = "r.type = '{$type}'";
        }else if($sex != ''){//性别
            $where = "r.sexs = '{$sex}'";
        }else if($age != ''){//年龄
            $where = $age;
        }else if($worktime != ''){//工作经验
            $where = "r.worktimes = '{$worktime}'";
        }else if($rzbd != ''){//认证部队
            $jwhere = "f.type_bd = '{$rzbd}'";
        }
        // else if($address != ''){
        //     $where = "e.address = '{$address}'";
        // }
        $count = M('employ')->count();
        $Page = new \Think\PageAjax($count,20);//分页开始
        if(!empty($where) && !empty($address) && !empty($zuo)){
            $lists = M('user as u')->join('employvideo as v on v.pid = r.eid')->join('employimage as m on r.eid = m.pid')->join('employ as r on u.id = r.uid')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
            $list = $this->addre_yp($address,$lists);
        }else if(!empty($where) && !empty($address)){//详细条件 地址
            $lists = M('employ as r')->join('user as u on r.uid = u.id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
            $list = $this->addre_yp($address,$lists);
        }else if(!empty($address) && !empty($zuo)){//地址  作品
            $lists = M('user as u')->join('employvideo as v on v.pid = r.eid')->join('employimage as m on r.eid = m.pid')->join('employ as r on u.id = r.uid')->limit($Page->firstRow.','.$Page->listRows)->select();
            if($lists != ''){
                $list = $this->addre_yp($address,$lists);
            }
        }else if(!empty($where) && !empty($zuo)){//条件 有无作品
            $list = M('user as u')->join('employ as r on u.id = r.uid')->join('employvideo as v on v.pid = r.eid')->join('employimage as m on r.eid = m.pid')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        }else if($where != ''){//条件
            $list = M('user as u')->join('employ as r on u.id = r.uid')->where($where)->order('r.eid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else if(!empty($address)){//地址
            $lists = M('employ as r')->join('user as u on r.uid = u.id')->limit($Page->firstRow.','.$Page->listRows)->select();
            $list = $this->addre_yp($address,$lists);
        }else if(!empty($zuo)){//有无作品
            $list = M('user as u')->join('employ as r on u.id = r.uid')->join('employimage as m on r.eid = m.pid')->join('employvideo as v on v.pid = r.eid')->order('r.eid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
            $list = M('user as u')->join('employ as r on u.id = r.uid')->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        
        $work = M('employwork')->select();
        $show = $Page->show();
        $this->assign('page',$show);//赋值分页输出
        $this->assign('list',$list);
        $this->assign('work',$work);
        $this->display();
    }
    public function addre_yp($address,$lists){//分别为传递过来的地址  和sql语句
          // $lists = M('recruit1 as e')->join('user as u on e.uid = u.id')->join('forcee as f on f.uid = u.id')->order("e.rid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        
            
             foreach ($lists as $key => $value) {//遍历完成条件后的数组
                $aa = explode(',',$value['address']);
                $arr[] .= $aa[0];//拿到可以查的地址
                $array[] = $value;
            }
            for ($i=0; $i < count($arr); $i++) { //将地址进行循环
                if($address == $arr[$i]){//如果传过来的地址等于处理过的这个地址 则将数组重新给一个数组
                    $list[$i] =  $lists[$i];
                }
            }
            return $list;
    }
    /**
    *  跳蚤市场搜索分页
    */
    public function tzsc(){
        $type = $_GET['type'];//闲置&求购
        $wp = $_GET['wp'];//物品类型
        $price = $_GET['price'];//物品类型
        if($type != '' && $wp != '' && $price != ''){//类型 物品名称 价格
            $where = "f.type = {$type} and f.name = '{$wp}' and {$price}";
        }else if($type != '' && $price != ''){//类型 价格
            $where = "f.type = {$type} and {$price}";
        }else if($wp != '' && $price != ''){//物品名称 价格
            $where = "f.name = '{$wp}' and {$price}";
        }else if($type != '' && $wp != ''){//类型 物品名称
            $where = "f.type = {$type} and f.name = '{$wp}'";
        }else if($type != ''){//类型
            $where = "f.type = {$type}";
        }else if($wp != ''){//物品名称
            $where = "f.name = '{$wp}'";
        }else if($price != ''){//价格
            $where = "{$price}";
        }
     //   dump($where);
        //根据不同的条件来计算计算分页数量
        if($where != ''){
            $count = M('flea as f')->join('user as u on f.uid = u.id')->where($where)->count();
        }else{
            $count = M('flea as f')->join('user as u on f.uid = u.id')->count();
        }
        
        $Page = new \Think\PageAjax($count,4);
        //根据条件确定最终获得的数据
        if($where != ''){
            $list = M('flea as f')->join('user as u on f.uid = u.id')->order("f.fid desc")->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
            $list = M('flea as f')->join('user as u on f.uid = u.id')->order("f.fid desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        }
        $listimg = M('fleaimage')->select();
        $this->assign('list',$list);
        $this->assign('listimg',$listimg);
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);//赋值分页输出
        $this->display();
    }

    
    
    public function bddz()
    {
    	//码头部队
    	 
        $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->join('forcee as s on s.uid = u.id')-> field( "u.*,d.*,s.status")->where('status=2')->order('d.did desc')->limit(0,2)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
        $uuid = $_SESSION['id'];
        if($uuid == ''){
        	$uuid = 0;
        }
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
    	$this->display('Box/bddz');
    }
    /**
    *  商城的搜索分页
    */
    public function mtsc(){
        
        $wp = $_GET['wp'];//物品名
         $type = $_GET['type'];//销售&租赁
        $price = $_GET['price'];//物品类型
        $address = $_GET['address'];//活动地址
        if($wp != ''&&$type !=''&&$price!=''){//目前是单单一个物品
            $where = "c.name = '{$wp}' and c.leixing = '{$type}' and '{$price}'";
        }else if($wp != ''&&$type !=''){
        	$where = "c.name = '{$wp}' and c.leixing = '{$type}'";
        }else if($wp != ''&&$price!=''){//目前是单单一个物品
            $where = "c.name = '{$wp}'  and '{$price}'";
        }else if($type !=''&&$price!=''){//目前是单单一个物品
            $where = "c.leixing = '{$type}' and '{$price}'";
        }else if($wp != ''){//目前是单单一个物品
            $where = "c.name = '{$wp}'";
        }else if($type !=''){//目前是单单一个物品
            $where = "c.leixing = '{$type}'";
        }else if($price!=''){//目前是单单一个物品
            $where = "{$price}";
        }
       // var_dump($where);
        $count = M('shop')->where('status = "2"')->count();
  
        $Page = new \Think\PageAjax($count,20);
       // dump($map);
        if($where != ''){
           // $shops = M('shop as s')->join('commodity as c on c.pid = s.id')->where($where)->select();
            $data = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->where($where)->select();
               if($data){
              foreach ($data as $v){
            	$in[] = $v['pid'];
            }
         
            $map['id'] = array('in', $in);
            $map['status'] = 2;
         $shop =  M('shop')->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
             }        
            //$shop+=$sp; 
          //  dump($map); 
        }else{
            $shop = M('shop')->where("status = '2'")->limit($Page->firstRow.','.$Page->listRows)->select();
            $data = M('commodity as c')->join('comimage as m on c.id = m.psid')->join('shop as s on c.pid = s.id')->select();
        }
        // echo '<pre>';
   // var_dump($address); 
        //var_dump($shop);
        $show = $Page->show();// 分页显示输出
        // var_dump($show);
        $this->assign('shop',$shop);
        $this->assign('data',$data);
        
        // var_dump($show);
        $this->assign('page',$show);//赋值分页输出
        $this->display('Box/sc');
    }
    
}

