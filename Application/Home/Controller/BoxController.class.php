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
        var_dump($where);
        var_dump($jwhere);
        
        // var_dump($datas);
        //die;    
        //分页开始
        if(empty($where)){
            $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->select();  
          }else{
            $data = M('reward2 as r')->join('reward1 as e on r.pid = e.psid')->where($where)->select();  
            var_dump($data);
          }
          if(!empty($jwhere)){
              $count = M('reward1 as e')->where($jwhere)->count();//根据查到的条数来进行分页
          }else if(!empty($where)){
              $count = M('reward2 as r')->where($where)->count();//根据查到的条数来进行分页
          }else{
              $count = M("reward1")->count();
          }
         
          $Page = new \Think\PageAjax($count,2);
          if(empty($jwhere)){
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();   
            }else{
                $list = M('reward1 as e')->join('user as u on e.uid = u.id')->where($jwhere)->order(" e.psid desc ")->limit($Page->firstRow.','.$Page->listRows)->select();
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
        $count = M('due')->count();
        $Page = new \Think\PageAjax($count,2);//分页开始
        $list = M('due as d')->join('user as u on d.uid = u.id')->join('dueimage as m on d.did = m.pid')->join('duevideo as v on d.did = v.pid')->join('due_dang as a on a.pid = d.did')->limit($Page->firstRow.','.$Page->listRows)->select();
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
