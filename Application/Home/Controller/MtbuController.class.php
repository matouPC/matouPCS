<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class MtbuController extends Controller
{
    public function index()
    {
    	//码头部队
    	$list = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.id desc')->select();
    	//热门部队
    	$listNew = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.collect desc')->select();
    	//工作室
    	$listg = M('forcee as f')->join('forceimage as r on f.id = r.pid')->join('user as u on u.id = f.uid')->order('f.id')->select();
    	$this->assign('list',$list);
    	$this->assign('listn',$listNew);
    	$this->assign('listg',$listg);
    	$this->display();
    }
    public function rzbd()
    {
        //认证部队
        $this->display('Mtbu/rzbd');
    }
    public function rzbdzy($id)
    {
    //认证部队主页
        $list = M('forcee as f')->join('user as u on f.uid = u.id')->join('forceimage as m on f.id = m.pid')->join('forcevideo as v on f.id = v.pid')->where("f.id = {$id}")->select();
        $this->assign('list',$list);
        $this->display('Mtbu/rzbdzy');
    }
    public function grbdzy()
    {
        //个人部队主页
        $this->display('Mtbu/grbdzy');
    }
    public function grbddndt()
    {
        //个人部队对内动态
        $this->display('Mtbu/grbddndt');
    }
    public function grbddnly()
    {
        //个人部队对内留言
        $this->display('Mtbu/grbddnly');
    }
    public function grbddnxq()
    {
        //个人部队对内详情
        $this->display('Mtbu/grbddnxq');
    }
    public function grbddydt()
    {
        //个人部队对外动态
        $this->display('Mtbu/grbddydt');
    }
    public function grbddyly()
    {
        //个人部队对外留言
        $this->display('Mtbu/grbddyly');
    }
    public function grbddyxq()
    {
        //个人部队对外详情
        $this->display('Mtbu/grbddyxq');
    }
    public function rzbddndt($id)
    {
        //认证部队对内动态
        $list = M('forcee as f')->join('user as u on f.uid = u.id')->join('forceimage as m on f.id = m.pid')->join('forcevideo as v on f.id = v.pid')->where("f.id = {$id}")->find();
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        $this->assign('list',$list);
        $this->assign('li',$li);
        $this->display('Mtbu/rzbddndt');
    }
    public function rzbddnly($id)
    {
        //认证部队对内留言
        $list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //用户和部队基本信息遍历
        $bu = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
         //关注
        $uid = $_SESSION['id'];
        $fid = $bu['uid'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
         $uus = M('user_fen')->select();//互粉
        $this->assign('bu',$bu);
        $this->assign('list',$list);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddnly');
    }
    public function rzbddnxq($id)
    {
        //认证部队对内详情
        //认证部队对外需求 传过来的是认证部队的id->用来查询所有的认证部队发的需求信息
        //用户基本信息
        $user = M('forcee as f')->join('user as u on u.id = f.uid')->where("f.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('forcee as f')->join('reward1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('forcee as f')->join('reward2 as r on f.uid = r.usid')->where("f.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('forcee as f')->join('due as d on f.uid = d.uid')->where(" f.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('forcee as f')->join('recruit1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('forcee as f')->join('recruit2 as r on f.uid = r.usid')->where(" f.id = {$id} ")->select();
        //基本应聘信息
        $jbyp = M('forcee as f')->join('employ as e on f.uid = e.uid')->join("employwork as r on r.pid = e.id")->where("f.id = {$id}")->select();
        //基本闲置
        $jbxz = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 1")->select();
        //基本求购
        $jbqg = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 2")->select();
        //留言
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //关注
        $uid = $_SESSION['id'];
        $fid = $user['id'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        //开始带值
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddnxq');
    }
    public function rzbddydt($id)
    {
        //认证部队对外动态
        $list = M('forcee as f')->join('user as u on f.uid = u.id')->join('forceimage as m on f.id = m.pid')->join('forcevideo as v on f.id = v.pid')->where("f.id = {$id}")->find();
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        // var_dump($list);die;
        $uid = $_SESSION['id'];//当前登录用户的id
        $fid = $list['uid'];//当前查看的用户id
        $uus = M('user_fen')->select();//互粉
        $this->assign('list',$list);
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddydt');
    }
    //关注的方法
    public function rzbddydt_guanzhu($fid){
        $data['fens'] = 2;
        $ob = M('user_fen')->where(" id = {$fid}")->save($data);
        if($ob > 0){
            echo '关注成功';
        }else{
            echo '滚犊子';
        }
    }
    //取消关注的方法
    public function rzbddydt_qxguanzhu($fid){
        $data['fens'] = 1;
        $ob = M('user_fen')->where(" id = {$fid}")->save($data);
        if($ob > 0){
            echo '已取消';
        }else{
            echo '滚犊子';
        }
    }    
    public function rzbddydt_liuyan()
    {
        //认证部队对外动态_留言
        // var_dump($_POST);
        date_default_timezone_set('prc');
        $data['fid'] = $_POST['fid'];//部队的id
        $data['uid'] = $_SESSION['id'];//用户的id
        $data['content'] = $_POST['content'];//留言的内容
        $data['time'] = date('Y-m-d H:i:s',time());//留言的事件
        $ob = M('foree_liuyan')->add($data);
        if($ob > 0){
            $fid = $_POST['fid'];
            $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$fid}")->order('f.lid desc')->limit('0,3')->select(); 
            $this->ajaxReturn($li);
        }
       
    }
    public function rzbd_liu_zan($lid,$zan){
         $uid = $_SESSION['id'].',';

        $li = M('foree_liuyan')->where("lid = {$lid}")->find();
        if(empty($li)){
            $data['lid'] = $lid;
            $ob = M("foree_liuyan")->add($data);
        }
        $li['zid'] = '';
        $lis = M('foree_liuyan')->where("lid = {$lid}")->find();
        $lis['zid'] .= $uid;
        $db = M("foree_liuyan")->where("lid = {$lid}")->save($lis);
        if($db > 0){
           $data['zan'] = $zan;
           $ob = M('foree_liuyan')->where("lid = {$lid}")->save($data);
           if($ob > 0){
               echo '点赞成功';
            } 
        }   
    }
    public function rzbddyly($id)
    {
        //认证部队对外留言 $id为部队id
        $list = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->where("f.fid = {$id}")->order('f.lid desc')->limit('0,3')->select();
        //用户和部队基本信息遍历
        $bu = M('forcee as f')->join('user as u on f.uid = u.id')->where("f.id = {$id}")->find();
         //关注
        $uid = $_SESSION['id'];
        if($uid == ''){
            $uid = 0;
        }
        $fid = $bu['uid'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
         $uus = M('user_fen')->select();//互粉
        $this->assign('bu',$bu);
        $this->assign('list',$list);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        $this->display('Mtbu/rzbddyly');
    }
    public function rzbddyxq($id)//$id为部队id
    {
        //认证部队对外需求 传过来的是认证部队的id->用来查询所有的认证部队发的需求信息
        //用户基本信息
        $user = M('forcee as f')->join('user as u on u.id = f.uid')->where("f.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('forcee as f')->join('reward1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('forcee as f')->join('reward2 as r on f.uid = r.usid')->where("f.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('forcee as f')->join('due as d on f.uid = d.uid')->where(" f.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('forcee as f')->join('recruit1 as e on f.uid = e.uid')->where("f.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('forcee as f')->join('recruit2 as r on f.uid = r.usid')->where(" f.id = {$id} ")->select();
        //基本应聘信息
        $jbyp = M('forcee as f')->join('employ as e on f.uid = e.uid')->join("employwork as r on r.pid = e.id")->where("f.id = {$id}")->select();
        //基本闲置
        $jbxz = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 1")->select();
        //基本求购
        $jbqg = M('forcee as f')->join("flea as e on e.uid = f.uid")->where("f.id = {$id} and e.type = 2")->select();
        //留言
        $li = M('foree_liuyan as f')->join('user as u on f.uid = u.id')->order('f.lid desc')->limit('0,3')->select();
        //关注

        $uid = $_SESSION['id'];
        if($uid == ''){
            $uid = 0;
        }
        $fid = $user['id'];
        $guan = M('user_fen')->where("uid = {$uid} and fid = {$fid}")->find();
        $uus = M('user_fen')->select();//互粉
        //开始带值
        $this->assign('li',$li);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('guan',$guan);
        $this->assign('uus',$uus);
        
        $this->display('Mtbu/rzbddyxq');
    }
      public function spbddndt($id)
    {
        //商铺部队对内动态
       ;
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        //var_dump($dt);die;
         $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->order('s.id desc')->limit('0,3')->select();
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        $dongtai=M('user')->order('id asc')->limit(1)->select();
        $this->assign('dongtai',$dongtai);
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddndt');
    }
    public function jzdt(){
        $p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
         
        $db=M('user');
        $total=$db->count();//数据记录总数
        $num=1;//每页记录数
        $totalpage=ceil($total/$num);//总计页数
        $limitpage=($p-1)*$num;//每次查询取记录
        if($p>$totalpage){
            exit();
        }//超过最大页数，退出
        $data=$db->limit($limitpage,$num)->order('id asc')->select();
        // $arr=$data;
        //   var_dump( $data);die;
        //$this->ajaxReturn($data);
        if(count($data)>0){
        //  echo 1;
            $this->ajaxReturn($data);
        }else{}
    }
    public function spbddnly($id)
    {
        //商铺部队对内留言
        
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
         $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->order('s.id desc')->limit('0,3')->select();
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddnly');
    }
    public function spbddnxq($id)
    {
        //商铺部队对内详情

        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->order('s.id desc')->limit('0,3')->select();
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        $user = M('shop as s')->join('user as u on u.id = s.uid')->where("s.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
        //基本应聘信息
        $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.id")->where("s.id = {$id}")->select();
        //基本闲置
        $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->select();
        //基本求购
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddnxq');
    }
    public function spgl($id)
    {
        //商铺部队基本信息详情
        //$id = $_SESSION['id'];
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        //var_dump($sp);die;
        $this->assign('sp',$sp);
        $this->display('Mtbu/spgl');
    }
    public function spglsp()
    {
        //商铺部队商品详情
    
        $this->display('Mtbu/spglsp');
    }
    public function usave(){
        //商铺基本信息修改
        $id = I('id');
        $product = M('shop');
        $reward = $product ->where("id={$id}")->save($_POST);
        $this->ajaxReturn($reward);
    
    
    }
    public function spbddydt($id)
    {
        //商铺部队对外动态 
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $sp = M('shop')->where("uid = {$id}")->select();//我的商铺
        //var_dump($dt);die;
        $this->assign('sp',$sp);
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->display('Mtbu/spbddydt');
    }
    public function spbddyly($id)
    {
        //商铺部队对外留言
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $sp = M('shop')->where("id = {$id}")->select();//我的商铺
        $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $this->assign('dt',$dt);
        $this->assign('list',$list);
        $this->assign('sp',$sp);
        $this->display('Mtbu/spbddyly');
    }
    public function spbddyly_liuyan()
    {
        //认证部队对外动态_留言
        // var_dump($_POST);
        date_default_timezone_set('prc');
        $data['sid'] = $_POST['id'];//商铺的id
        $data['uid'] = $_SESSION['id'];//用户的id
        $data['contents'] = $_POST['contents'];//留言的内容
        $data['stime'] = date('Y-m-d H:i:s',time());//留言的事件
        $ob = M('shop_liuyan')->add($data);
        if($ob > 0){
            $id = $_POST['id'];
              $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
            $this->ajaxReturn($list);
        }
         
    }
 
    public function spbddyxq($id)
    {
        //商铺部队对外需求详情
        $sp = M('shop')->where("uid = {$id}")->select();//我的商铺
        //var_dump($sp);die;
        $user = M('shop as s')->join('user as u on u.id = s.uid')->where("s.id = {$id}")->find();
        //基本悬赏信息
        $jbxs = M('shop as s')->join('reward1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情悬赏信息
        $jbxsData = M('shop as s')->join('reward2 as r on s.uid = r.usid')->where("s.id = {$id}")->select();
        // var_dump($jbxsData);die;
        //基本应赏信息
        $jbys = M('shop as s')->join('due as d on s.uid = d.uid')->where(" s.id = {$id} ")->select();
        //基本招聘信息
        $jbzp = M('shop as s')->join('recruit1 as e on s.uid = e.uid')->where("s.id = {$id}")->select();
        //详情招聘信息
        $jbzpData = M('shop as s')->join('recruit2 as r on s.uid = r.usid')->where(" s.id = {$id} ")->select();
        //基本应聘信息
        $jbyp = M('shop as s')->join('employ as e on s.uid = e.uid')->join("employwork as r on r.pid = e.id")->where("s.id = {$id}")->select();
        //基本闲置
        $jbxz = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 1")->select();
        //基本求购
        $jbqg = M('shop as s')->join("flea as e on e.uid = s.uid")->where("s.id = {$id} and e.type = 2")->select();
        //留言
        $list = M('shop_liuyan as s')->join('user as u on s.uid = u.id')->where("s.sid = {$id}")->order('s.id desc')->limit('0,3')->select();
        $dt = M('shop as s')->join('user as u on s.uid = u.id')->where("s.id = {$id}")->find();
        $this->assign('list',$list);
        $this->assign('user',$user);
        $this->assign('jbxs',$jbxs);
        $this->assign('jbxsData',$jbxsData);
        $this->assign('jbys',$jbys);
        $this->assign('jbzp',$jbzp);
        $this->assign('jbzpData',$jbzpData);
        $this->assign('jbyp',$jbyp);
        $this->assign('jbxz',$jbxz);
        $this->assign('jbqg',$jbqg);
        $this->assign('dt',$dt);
        $this->assign('sp',$sp);
        $this->display('Mtbu/spbddyxq');
    }
}