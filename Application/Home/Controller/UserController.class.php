<?php
namespace Home\Controller;

use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class UserController extends Controller
{
    public function index()
    {
        //个人中心首页
        $id = $_SESSION['id'];
        $jarr = M('user')->where("id=$id")->select();//查看当前id
        $this->assign('jarr',$jarr);
        $this->display();
    } 
    public function scj(){
        //个人收藏
        //收藏的应赏
        $userYs = M('user as u')->join(' due as d on d.uid = u.id')->select();
        $userYs_dq = M('due_dang')->select();//档期遍历
        $userYs_zp =  M("dueimage")->select();//照片遍历
        $userYs_sp =  M("duevideo")->select();//视频遍历
        //收藏的应聘
        $userYp = M('user as u')->join('employ as e on u.id = e.uid')->join("employwork as w on e.eid = w.pid")->select();   //工作经历
        
        $userYps = array();
        foreach ($userYp as $value) {
            $shou = explode(',',$value['em_shou']);
            array_pop($shou);
            if(in_array($_SESSION['id'],$shou)){
                $userYps[] = $value;
            }
        }
        //收藏的闲置
        $userIdle = M("flea as f")->join('user as u on f.uid = u.id')->where('f.type = 2')->select();
        //已报名 悬赏 基本信息
        $userBmxsjb = M('user as u')->join('reward1 as e on u.id = e.uid')->select();
        //已报名-》悬赏
        $userBmxs = M('user as u')->join('reward1 as r on u.id = r.uid')->join('reward2 as w on r.psid = w.pid')->select();
        $this->string($userBmxs);
        // var_dump($userYps);die;
        $this->assign('userIdle',$userIdle);
        $this->assign('userYs',$userYs);
        $this->assign('userYs_dq',$userYs_dq);
        $this->assign('userYs_zp',$userYs_zp);
        $this->assign('userYs_sp',$userYs_sp);
        $this->assign('userYps',$userYps);//收藏应赏
        $this->assign('userBmxsjb',$userBmxsjb);//收藏应赏=->基本信息
        $this->assign('userBmxs',$this->string($userBmxs));//悬赏报名
        // $this->assign('work',$work);//应赏工作经历
        $this->display('User/scj');
    }
    //拿取追加字符串的方法
    public function string($userYp){
        $userYps = array();
        foreach ($userYp as $value) {
            $shou = explode(',',$value['bao']);
            array_pop($shou);
            if(in_array($_SESSION['id'],$shou)){
                $userYps[] = $value;
            }
        }
        return $userYps;
    }
    public function bdzx(){
        //部队中心
        $id = $_SESSION['id'];
        $user = M('user')->where(" id = {$id} ")->find();//用户单条查询
        $li = M('user_fen')->where(" uid = {$id} ")->limit('0,6')->select();//查询关注量
        $guanzhu = M('user as u')->join('user_fen as f on u.id = f.uid')->limit('0,6')->select();//我关注的

        $bguanzhu = M('user as u')->join('user_fen as f on u.id = f.uid')->where("f.uid = {$id}")->limit('0,6')->select();//关注我的
        $bb = M('user')->select();
        $arr = array();
        foreach ($bguanzhu as $key => $value) {
            // var_dump($value['fid']);//这两个id都是关注我的
            $us_fen = explode(',',$value['fid']);
            array_pop($us_fen);
            $arr += $us_fen;
        }
       $dongtai=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
        $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
        $this->assign('img',$img);
        $this->assign('dongtai',$dongtai);
        $this->assign('user',$user);
        $this->assign('arr',$arr);
        $this->assign('li',$li);
        $this->assign('guanzhu',$guanzhu);//我关注的
        $this->assign('bguanzhu',$bguanzhu);//关注我的
        $this->assign('bb',$bb);//
        $this->display('Mtbu/bdzx');
    }
    /**
    *  闲置留言板
    */
    public function liuyan(){
        date_default_timezone_set('prc');
        $data['uid'] = $_SESSION['id'];
        $data['xsid'] = $ffid = $_POST['xsid'];
        $data['contents'] = $_POST['content'];
        $data['ltime'] = date("Y-m-d H:i:s",time());
        $data['xzst'] = 2;
        $ob=$id= M('liuyan')->order("id desc")->add($data);
        if( $ob > 0 ){//留言成功后给消息表插数据
            $user_xx['uid'] = $_SESSION['id'];//当前用户id
            $user_xx['fid'] =  $_POST['fid'];//被留言用户的id
            $user_xx['type_xx'] = 3;//留言
            $user_xx['type_xs'] = 6;//求购
            $user_xx['wid'] = $id;//留言id
            $user_xx['content_xx'] = $_POST['content'];//消息详情
            $db = M("user_xx")->add($user_xx);//执行消息表插入
            if($db > 0){//如果插入成功 则遍历
                 $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->join('flea as f on l.xsid = f.fid')->where("l.xsid = {$ffid} and tz_status = '1'")->order('l.lid desc')->limit('0,3')->select();//闲置留言遍历
                $this->ajaxReturn($liu);
            }
            
        }
    }
    /**
    *  求购留言板
    **/
    public function qliuyan(){
        date_default_timezone_set('prc');
        $data['uid'] = $_SESSION['id'];
        $data['xsid'] = $ffid = $_POST['xsid'];
        $data['contents'] = $_POST['content'];
        $data['ltime'] = date("Y-m-d H:i:s",time());
        $data['xzst'] = 1;
        $ob=$id= M('liuyan')->order("id desc")->add($data);
        if( $ob > 0 ){//留言成功后给消息表插数据
            $user_xx['uid'] = $_SESSION['id'];//当前用户id
            $user_xx['fid'] =  $_POST['fid'];//被留言用户的id
            $user_xx['type_xx'] = 3;//留言
            $user_xx['type_xs'] = 7;//求购
            $user_xx['content_xx'] = $_POST['content'];//消息详情
            $db = M("user_xx")->add($user_xx);//执行消息表插入
            if($db > 0){//如果插入成功 则遍历
                $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->join('flea as f on l.xsid = f.fid')->where("l.xsid = {$ffid} and tz_status = '1'")->order('l.lid desc')->limit('0,3')->select();//求购留言遍历 
                $this->ajaxReturn($liu);
            }
            
        }
    }
    public function usave(){
        //用户中心
             $id = $_SESSION['id'];
            $data['username'] = $_POST['username'];
            $data['type_u'] = $_POST['zhiye'];
            $data['addre'] = $_POST['address'];
            $arr = M('user')->where("id=$id")->select();//查图片位置
            foreach ($arr as $v){
                $password=$v['password'];   
        }
        if($password==$_POST['password']){
        	$data['password'] = $_POST['password1'];
            $data =  M('user') ->where("id = {$id}")->save($data);
            $this->ajaxReturn($data);
        }else if($_POST['password']==""){
            $data['password']=$password;
            $data =  M('user') ->where("id = {$id}")->save($data);
            $this->ajaxReturn($data);
        }else {
            echo 'y';
        }
    }
    public function user_ys(){//已发布 应赏
        $uid = $_SESSION['id'];
        // var_dump($uid);die;
        $fbys = M('user as u')->join("due as d on u.id = d.uid")->join("dueimage as m on d.did = m.pid")->join('duevideo as v on d.did = v.pid')->join("due_dang as a on d.did = a.pid")->where("u.id = {$uid}")->find();
        $this->assign('fbys',$fbys);
        $this->assign('fbys_zp',$this->stringimg($fbys['imagename_z']));//应赏照片作品
        $this->assign('fbys_sp',$this->stringimg($fbys['imagename_v']));//应赏视频作品
        $this->assign('fbys_sp_t',$this->stringimg($fbys['type']));//应赏视频标题
        $this->assign('fbys_sp_l',$this->stringimg($fbys['video']));//应赏视频链接
        $this->assign('fbys_da_r',$this->stringimg($fbys['dangdate']));//档期里的日期
        $this->assign('fbys_das',$this->stringimg($fbys['dangs']));//档期里的上下午
        $this->display("User/userYs");
    }
    public function user_ys_zp(){//已发布 应赏->照片
        $uid = $_SESSION['id'];
        $fbys = M('user as u')->join("due as d on u.id = d.uid")->join("dueimage as m on d.did = m.pid")->where("u.id = {$uid}")->find();
        $this->ajaxReturn($this->stringimg($fbys['imagename_z']));
        $this->display("User/userYs");
    }
    public function user_ys_dq(){//已发布 应赏 档期
        $uid = $_SESSION['id'];
        $fbys = M('user as u')->join("due as d on u.id = d.uid")->join("due_dang as a on d.did = a.pid")->where("u.id = {$uid}")->find();
        
        $userYs_dq['dangdate'] = $this->stringimg($fbys['dangdate']);
        $userYs_dq['dangs'] = $this->stringimg($fbys['dangs']);
        $this->ajaxReturn($userYs_dq);
        // $this->display("User/userYs");
    }
    //修改 已发布 应赏 
    public function userYs(){
        date_default_timezone_set('prc');
        $did = $_POST['did'];//被修改的应赏的id 基本信息
        $li = M('dueimage')->where("pid = {$did}")->find();//数据库图片的信息
        $dataImg = $this->stringimg($li['imagename_z']);//这个是数据库的值
        $li_v = M('duevideo')->where("pid = {$did}")->find();//数据库视频封面的信息
        $dataImg_v = $this->stringimg($li_v['imagename_v']);//视频封面存数据库的值
        $dataImg_t = $this->stringimg($li_v['type']);//视频封面存数据库的值->标题
        $dataImg_l = $this->stringimg($li_v['video']);//视频封面存数据库的值->链接
        $li_d = M('due_dang')->where("pid = {$did}")->find();//数据库的档期信息
        $dataDang = $this->stringimg($li_d['dangdate']);//数据库档期信息->日期
        $dataDang_w = $this->stringimg($li_d['dangs']);//数据库档期信息->日期
        $files = array_keys($_FILES);//返回每个图片建名的信息
        $posts = array_keys($_POST);//返回每个post数据的建名信息
        $arr = array();
        //获取每个上传文件的建名的标识
        foreach ($files as $value) {
            $fi = substr($value,0, -1);
            if($fi == 'ysimg'){
                $arr[] .= $value;
            }
            if($fi == 'file'){
                $arrv[] .= $value;
            }
        }
        foreach($posts as $v){
            $te = substr($v,0,-1);
            if($te == 'file_title'){
                $text[] .= $v;//标题
            }
            if($te == 'file_video'){
                $text_v[] .= $v;//链接
            }
            if($te == 'dang_time'){
                $dang[] .= $v;//传过来的档期日期
            }
            if($te == 'dangB'){
                $dangs[] .= $v;
            }
        }
        for ($i=0; $i <= count($arr) ; $i++) { 
           $upimg[$i] .= $_FILES['ysimg'.$i.'']['name'];//这个用来存取数据库
           $uploadImg = $_FILES['ysimg'.$i.''];//这个用来上传
           if(!empty($uploadImg)){
                $this->Uploadimg($_FILES['ysimg'.$i.'']);//将图片上传至服务器
           }
        } 

        $newImages = $this->strPj($upimg,$dataImg);//处理照片
        //处理视频封面
         for ($i=0; $i <= count($arrv) ; $i++) { 
           $upimgs[$i] .= $_FILES['file'.$i.'']['name'];//这个用来存取数据库
           $uploadImgs = $_FILES['file'.$i.''];//这个用来上传
           if(!empty($uploadImgs)){
                $this->Uploadimg($_FILES['file'.$i.'']);//将图片上传至服务器
           }
        } 
        //处理视频标题
        for ($i=0; $i <= count($text) ; $i++) { 
           $newText[$i] .= $_POST['file_title'.$i.''];//这个用来存取数据库
        } 
        //处理视频链接
        for ($i=0; $i <= count($text_v) ; $i++) { 
           $newText_l[$i] .= $_POST['file_video'.$i.''];//这个用来存取数据库
        }
        //处理档期日期 
        for ($i=0; $i <= 30 ; $i++) { //档期最低30个 所以让它小于等于30
            if($_POST['dang_time'.$i.''] != ''){
               $dang_t[$i] .= $_POST['dang_time'.$i.''];//这个用来存取数据库-》档期日期 
            }
           
        }
        //处理档期上下午
        for ($i=0; $i <= 30 ; $i++) { 
           $dang_w[$i] .= $_POST['dangB'.$i.''];//这个用来存取数据库-》档期日上下午
        }
        // var_dump($dang_w);die;
        // array_shift($newTexts);//如果有一项为空 就把剩下的拼接组成新的修改条件
        // for ($i=0; $i <= count($newTexts) ; $i++) { 
        //      if($_POST['file_title'.$i.''] == ''){
        //         $newText[$i] .= $_POST['file_title'.$i.''];
        //         unset($newText[$i]);
        //      }
        // }
        // var_dump($newTexts);die;
        
        $newTexts_t = $this->upText($newText,$dataImg_t);//得到更改后的数据-》标题
        $newTexts_v = $this->upText($newText_l,$dataImg_l);//得到更改后的数据-》链接
        $newDang = $this->upTextw($dang_t,$dataDang);//得到更改后的数据——》日期
        $newDangs = $this->upTextw($dang_w,$dataDang_w);//得到更改后的数据——》上下午
        $newImages_v = $this->strPjs($upimgs,$dataImg_v,$newText);//处理照片
        foreach ($newImages_v as $key => $value) {//视频封面图标
            $newimg_v['imagename_v'] = $value;
        }
        foreach ($newTexts_t as $key => $value) {//视频标题
            $newimg_v['type'] = $value;
        }
        foreach ($newTexts_v as $key => $value) {//视频连接
            $newimg_v['video'] = $value;
        }
        foreach ($newDang as $value){//档期 日期
            $newDangData['dangdate'] .= $value;
        }
        foreach ($newDangs as $value){//档期 上下午
            $newDangData['dangs'] .= $value;
        }
        $db = M('due_dang')->where("pid = {$did}")->save($newDangData);
        if($db > 0){
            echo '档期信息修改成功';
        }
        $newimg['pubtime'] = date("Y-m-d",time());
        $vb = M("duevideo")->where("pid = {$did}")->save($newimg_v);
        if($vb > 0){
            echo '视频封面及信息全部修改成功';
        }
        // $newImage = $this->strPj($arr);//处理视频封面图片
        $newImages['pubtime'] = date("Y-m-d",time());
        $md = M('dueimage')->where("pid = {$did}")->save($newImages);
        if($md > 0){
            echo '图片修改成功';
        }
        $data['name'] = $_POST['name'];//姓名
        $data['age'] = $_POST['age'];//年龄
        $data['sexs'] = $_POST['sex'];//性别
        $data['height'] = $_POST['height'];//身高
        $data['weight'] = $_POST['weight'];//体重
        $data['address'] = $_POST['address'].','.$_POST['address_s'];;//地址+详细地址
        if($_POST['type'] == '其他'){
            $data['type_d'] = $_POST['type1'];
        }else{
             $data['type_d'] = $_POST['type'];
        }
        //职位
        $data['price'] = $_POST['price'];//薪资
        $data['skilled'] = $_POST['skilled'];//婚礼类型
        $data['time'] = time();//当前时间戳
        $data['tels'] = $_POST['tel'];//电话
        $data['qqs'] = $_POST['qq'];//qq
        $data['content'] = $_POST['content'];//要求
        $data['uid'] = $_SESSION['id'];//当前用户id
        $data['date'] = date("Y-m-d",time());//当前日期
        $ob = M('due')->where("did = {$did}")->save($data);
        if($ob > 0){
            // $this->redirect('User/user_ys');
            echo '成功';
        }
    }
    /**
    *   这是一个处理多图片路径拼接的方法 适用于当前项目的情况
    *   多图片的修改方法
    */
    public function strPj($upimg,$dataImg){
        array_shift($upimg);//由于第一个元素为空 所以需要弹出第一个
        //$upimg表单提交的图片
        //$dataImg数据库提交的图片
         for ($i=0; $i <= count($upimg) ; $i++) { //表单
            // for ($j=0; $j < count($dataImg); $j++) { //数据库
                 if($upimg[$i] != ''){
                     $newImage['imagename_z'] .= './Uploads/'.date("Y-m-d",time()).'/'.$upimg[$i].',';
                 }else{
                     session_start();
                     $_SESSION['img'] = '';
                     $newImage['imagename'] .= $dataImg[$i].',';
                 }
             }
        //处理多出来的逗号
        $xx = explode(',',$newImage['imagename']);
        for ($i=0; $i < count($xx); $i++) { 
            if(!empty($xx[$i])){
                // var_dump($xx[$i].',');
                $ss['xx'] .= $xx[$i].',';
            }
        }
        //将提交的值和数据库剩下的值进行拼接 修改
        $newImages['imagename_z'] = $newImage['imagename_z'].$ss['xx'];
        return  $newImages;

    }
    /**
    *  该方法只对视频作品作品的增删改查有效
    */
     public function strPjs($upimg,$dataImg,$newText){
        array_shift($upimg);
        array_shift($newText);
        // var_dump($upimg);
        // // var_dump($dataImg);
        // var_dump($newText);die;
        // var_dump($did);
        // die;
       //由于第一个元素为空 所以需要弹出第一个
        //$upimg表单提交的图片
        //$dataImg数据库提交的图片
         for ($i=0; $i <= count($upimg) ; $i++) { //提交的图片
                 if($upimg[$i] != '' && $newText[$i] != ''){//可以重新上传(修改的视频封面)
                     $newImage['imagename_z'] .= './Uploads/'.date("Y-m-d",time()).'/'.$upimg[$i].',';
                 }else if($newText[$i] == ''){
                     unset($upimg[$i]);
                 }else{
                    $newImage['imagename'] .= $dataImg[$i].',';
                 }
         }
        // echo '<pre>';
         sort($newImage);
         
        //处理多出来的逗号
        // $xx = explode(',',$newImage['imagename']);
        // for ($i=0; $i < count($xx); $i++) { 
        //     if(!empty($xx[$i])){
        //         // var_dump($xx[$i].',');
        //         $ss['xx'] .= $xx[$i].',';
        //     }
        // } 
        // var_dump($newImage);
        //将提交的值和数据库剩下的值进行拼接 修改
        $newImages['imagename_z'] = $newImage[0].$newImage[1];
        return  $newImages;

    }
    /**
    *  这是处理纯文本拼接的方法
    */
    public function upText($newText,$dataImg_t){//第一个为表单提交的数据 第二个为数据库本身存在的数据
        array_shift($newText);//由于第一个元素为空 所以需要弹出第一个
         for ($i=0; $i <= count($newText) ; $i++) { //表单
                 if($newText[$i] != ''){
                     $newImage['imagename_z'] .= $newText[$i].',';
                 }
             }
             
        //处理多出来的逗号
        $xx = explode(',',$newImage['imagename']);
        for ($i=0; $i < count($xx); $i++) { 
            if(!empty($xx[$i])){
                // var_dump($xx[$i].',');
                $ss['xx'] .= $xx[$i].',';
            }
        }
        //将提交的值和数据库剩下的值进行拼接 修改
        $newImages['imagename_z'] = $newImage['imagename_z'].$ss['xx'];
        return  $newImages;
    }
    public function upTextw($newText,$dataImg_t){//第一个为表单提交的数据 第二个为数据库本身存在的数据
        // array_shift($newText);//文字有误差 不需要这一步
        //$upimg表单提交的图片
        //$dataImg数据库提交的图片
         // var_dump(count($newText));die;
         for ($i=0; $i <= 30; $i++) { //表单  档期最多30  所以让循环控制在30以内
            // for ($j=0; $j < count($dataImg); $j++) { //数据库
                 if($newText[$i] != ''){
                     $newImage['imagename_z'] .= $newText[$i].',';
                 }
             }
        //处理多出来的逗号
        // $xx = explode(',',$newImage['imagename']);
        // for ($i=0; $i < count($xx); $i++) { 
        //     if(!empty($xx[$i])){
        //         // var_dump($xx[$i].',');
        //         $ss['xx'] .= $xx[$i].',';
        //     }
        // }
        //将提交的值和数据库剩下的值进行拼接 修改
        $newImages['imagename_z'] = $newImage['imagename_z'];
        return  $newImages;
    }
    /**
    *  视频封面的删除方法
    */
    public function delefeng($id){
        $li = M('duevideo')->where("pid = {$id}")->find();
        $lis = explode(',',$li['type']);
        array_pop($lis);
        array_pop($lis);
        var_dump($lis);die;
    }
    /**
    *  删除一发布应赏的方法
    */
    public function deleYs($did){
        $ob = M('due')->where("did = {$did}")->delete();
            if($ob > 0){
                $obd = M('due_dang')->where("pid = {$did}")->delete();
                    if($obd > 0){
                        $obm = M('dueimage')->where("pid = {$did}")->delete();
                            if($obm > 0){
                                $obv = M('duevideo')->where("pid = {$did}")->delete();
                                    if($obv>0){
                                        echo '删除成功';
                                    }
                            }
                    }
            }
    }
    public function stringimg($userYp){
        // var_dump($userYp);die;
        $shou = explode(',',$userYp);
        // var_dump($shou);die;
        array_pop($shou);
        return $shou;
    }
     public function Uploadimg($yszp){
        $upload = new \Think\Upload($yszp);// 实例化上传类
        $upload->maxSize   =     99999999999999 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Uploads/'; // 设置附件上传目录
        $upload->saveName = '';
        $info   =   $upload->upload();
    }
    public function user_yp(){//已发布 应聘
        $uid = $_SESSION['id'];
        $fbyp = M('employ as e')->join('employimage as i on e.eid = i.pid')->join("employvideo as v on e.eid = v.pid")->where("e.uid = {$uid}")->find();
        $fbyp_jl =M('employ as e')->join('employwork as m on e.eid = m.pid')->where("e.uid = {$uid}")->select();
        // var_dump($fbyp_jl);die;
        $fbyp_js_num = count($fbyp_jl);
        $this->assign('fbyp',$fbyp);
        $this->assign('fbyp_jl',$fbyp_jl);
        $this->assign('dnum',$fbyp_js_num);
        $this->assign('fbyp_jl_im',$this->stringimg($fbyp['imagenames']));
        $this->assign('fbyp_jl_t',$this->stringimg($fbyp['types']));
        $this->assign('fbyp_jl_l',$this->stringimg($fbyp['video']));
        $this->assign('fbyp_jl_v',$this->stringimg($fbyp['imagename_v']));
        $this->display("User/userYp");
    }
    public function userYp(){
        $id = $_POST['id'];//基本信息的id
        // $wid = $_POST['']
        /*************工作经历的修改************//*******************图片的修改********************/
        $li = M('employimage')->where("pid = {$id}")->find();//数据库图片的信息
        $li_v = M('employvideo')->where("pid = {$id}")->find();//数据库视频封面的信息
        $dataImg_v = $this->stringimg($li_v['imagename_v']);//视频封面存数据库的值
        $dataImg_t = $this->stringimg($li_v['types']);//视频封面存数据库的值
        $dataImg_l = $this->stringimg($li_v['video']);//视频封面存数据库的值
         $dataImg = $this->stringimg($li['imagenames']);//这个是数据库的值->图片作品
          $files = array_keys($_FILES);//返回每个图片建名的信息
          $posts = array_keys($_POST);//返回每个图片建名的信息
        //获取每个上传文件的建名的标识
        foreach ($files as $value) {
            $fi = substr($value,0, -1);
            if($fi == 'ypimg'){
                $arr[] .= $value;
                // var_dump($_FILES["{$fi}"]);
            }
            if($fi == 'file'){
                $arrv[] .= $value;
            }
        }
        //处理视频的标题和链接
        
        foreach($posts as $v){
            $te = substr($v,0,-1);
            if($te == 'title'){
                $text[] .= $v;//标题
            }
            if($te == 'video'){
                $text_v[] .= $v;//链接
            }
        }
        foreach ($posts as $value) {
            $po = substr($value,0,-1);
            if($po == 'workdate1'){//拿到日期开始
                $pow = $po;
                $pof['worktime'] .= $pow.',';
                // var_dump($pof);
            }
            if($po == 'workdate2'){//拿到日期结束
                $pos = $po;
                $pof['worktimes'] .= $pos.'.';
            }
        }
        //修改工作经历 先全部删除 然后表单里有什么 就添加什么
        $pofs = explode(',',$pof['worktime']);
        $poss = explode('.',$pof['worktimes']);
        array_pop($pofs);
        array_pop($poss);
        $delWork = M("employwork")->where("pid = {$id}")->delete();
        for ($i=0; $i < 3; $i++) { 
            $newDate['worktime'] .= $_POST[$pofs[$i].$i].','. $_POST[$poss[$i].$i].'.';//拿到所有的开始日期+结束日期
            $newDate['workname'] .= $_POST['workname'.$i.''].',';
            $newDate['typew'] .= $_POST['ty'.$i.''].',';
            $newDate['contents'] .= $_POST['miao'.$i.''].','; 
            $newDate['pid'] .= $id.',';   
        }
        $newDates_t = $this->string_yp($newDate['worktime']);
        $newDates_n = $this->stringimg($newDate['workname']);
        $newDates_p = $this->stringimg($newDate['typew']);
        $newDates_o = $this->stringimg($newDate['contents']);
        $newDates_d = $this->stringimg($newDate['pid']);
        for ($i=0; $i < count($newDates_t); $i++) { 
            $arrs['worktime'] = $newDates_t[$i];
            $arrs['workname'] = $newDates_n[$i];
            $arrs['typew'] = $newDates_p[$i];
            $arrs['contents'] = $newDates_o[$i];
            $arrs['pid'] = $newDates_d[$i];
            $add_work = M("employwork")->add($arrs);
            if($add_work > 0){
                echo '工作经历修改成功';
            }
        }
        //图片作品
        for ($i=0; $i <= count($arr) ; $i++) { 
           $upimg[$i] .= $_FILES['ypimg'.$i.'']['name'];//这个用来存取数据库
           $uploadImg = $_FILES['ypimg'.$i.''];//这个用来上传
           if(!empty($uploadImg)){
                $this->Uploadimg($_FILES['ypimg'.$i.'']);//将图片上传至服务器
           }
        } 
        //视频封面
        for ($i=0; $i <= count($arrv) ; $i++) { 
           $upimgs[$i] .= $_FILES['file'.$i.'']['name'];//这个用来存取数据库
           $uploadImgs = $_FILES['file'.$i.''];//这个用来上传
           if(!empty($uploadImgs)){
                $this->Uploadimg($_FILES['file'.$i.'']);//将图片上传至服务器
           }
        } 
        //处理视频标题
        for ($i=0; $i <= count($text) ; $i++) { 
           $newText[$i] .= $_POST['title'.$i.''];//这个用来存取数据库
        } 
        //处理视频链接
        for ($i=0; $i <= count($text_v) ; $i++) { 
           $newText_l[$i] .= $_POST['video'.$i.''];//这个用来存取数据库
        }
        $newTexts_t = $this->upText($newText,$dataImg_t);//得到更改后的数据-》标题
        $newTexts_v = $this->upText($newText_l,$dataImg_l);//得到更改后的数据-》链接
        $newImages = $this->strPj($upimg,$dataImg);//处理照片
        $newImages_v = $this->strPjs($upimgs,$dataImg_v,$newText);//处理视频封面
        foreach ($newImages as $key => $value) {//照片作品图标
            $newimg_v['imagenames'] .= $value;
        }
        foreach ($newTexts_t as $key => $value) {//视频标题
            $newimg_vv['types'] .= $value;
        }
        foreach ($newTexts_v as $key => $value) {//视频连接
            $newimg_vv['video'] .= $value;
        }
        foreach ($newImages_v as $key => $value) {//视频封面图标
            $newimg_vv['imagename_v'] .= $value;
        }
        $newimg_vv['pubtime'] = date("Y-m-d",time());
        $nmg = M("employvideo")->where("pid = {$id}")->save($newimg_vv);
        if($nmg > 0){
            echo '视频封面修改成功';
        }die;
        $newimg_v['pubtimes'] = date("Y-m-d",time());
        $em = M("employimage")->where("pid = {$id}")->save($newimg_v);
        if($em > 0){
            echo '图片修改成功';
        }
        /*************基本信息的修改************/
        date_default_timezone_set('prc');
        $data['name'] = $_POST['name'];//姓名
        $data['sexs'] = $_POST['sex'];//性别
        $data['ages'] = $_POST['age'];//年龄
        $data['worktimes'] = $_POST['worktime'];//工作经验
        if($_POST['type'] == '其他'){
            $data['type'] = $_POST['zymc'];
        }else{
             $data['type'] = $_POST['type'];
        }
        $data['type'] = $_POST['type'];//职业
        $data['price'] = $_POST['price'];//薪资
        $data['tels'] = $_POST['tel'];//电话
        $data['qqs'] = $_POST['qq'];//QQ
        $data['content'] = $_POST['content'];//自我介绍
        $data['address'] = $_POST['address'].','.$_POST['add'];//地址+详细地址
        $data['date'] = date("Y-m-d",time());//发布日期
        $ob = M('employ')->where("id = {$id}")->save($data);
        if($ob > 0){
            echo '基本信息修改成功';
        }
    }
    /**
    *  专门处理应赏-》日期
    */
    public function string_yp($userYp){
        $shou = explode('.',$userYp);
        // var_dump($shou);die;
        array_pop($shou);
        return $shou;
    }
    public function user_yp_jl($id){
        $ob = M('employwork')->where("id = {$id}")->delete();
        if($ob > 0){
            echo '删除成功';
        }
    }
    public function user_qg(){//已发布 求购
        $uid = $_SESSION['id'];
        $fbqg = M("flea")->where("uid = {$uid} and type = 1")->select();
        $this->assign('fbqg',$fbqg);
        $this->display("User/userQg");
    }
    public function user_qg_wc($fid){//已发布 求购 点击完成
        $data['tz_status'] = 2;
        $ob = M('flea')->where("fid = {$fid}")->save($data);
        if($ob > 0){
            echo '已完成';
        }
    }
    public function user_qg_wc_del($fid){//已发布 求购 点击完成-》删除
        $ob = M('flea')->where("fid = {$fid}")->delete();
        if($ob > 0){
            echo '已删除';
        }
    }
    public function user_xz(){
        $uid = $_SESSION['id'];
        $fbxz = M("flea")->where("uid = {$uid} and type = 2")->select();
        $this->assign('fbxz',$fbxz);
        $this->display("User/userXz");
    }
    /**
    *  需求消息
    */
    public function xqxx(){
        // echo '<pre>';
        $uid = $_SESSION['id'];
        // var_dump($uid);die;
        $list = M('user as u')->join('user_xx as x on u.id = x.uid')->where("x.status_xx = '1' and x.type_xx = '3' and x.type_xs = '6'")->order("x.id desc")->select();//闲置留言
        $list_q = M('user as u')->join('user_xx as x on u.id = x.uid')->where("x.fid = {$uid} and x.status_xx = '1' and x.type_xx = '3' and x.type_xs = '6'")->order("x.id desc")->select();//求购留言
        $list_qs = M('user as u')->join('user_xx as x on u.id = x.uid')->where("x.fid = {$uid} and x.status_xx = '1' and x.type_xx = '1' and x.type_xs = '7'")->order("x.id desc")->select();//求购收藏
        $list_yps = M('user as u')->join('user_xx as x on u.id = x.uid')->where("x.fid = {$uid} and x.status_xx = '1' and x.type_xx = '1' and x.type_xs = '3'")->order("x.id desc")->select();//应聘收藏
        $list_yss = M('user as u')->join('user_xx as x on u.id = x.uid')->where("x.fid = {$uid} and x.status_xx = '1' and x.type_xx = '1' and x.type_xs = '1'")->order("x.id desc")->select();//应赏收藏
        $list_hui = M('user as u')->join('user_xx_hf as x on u.id = x.uid')->order('x.id')->select();//发送显示在自己页面上的留言
        $list_hui_js = M('user as u')->join('user_xx_hf as x on u.id = x.uid')->order('x.id')->select();//接受到的回复的留言

        $lijb = M('reward1 as e')->where("e.uid = {$uid}")->select();//悬赏基本信息
        $li = M('reward2')->where("usid = {$uid}")->select();//悬赏详情信息

        $lijb_zp = M('recruit1 as e')->where("e.uid = {$uid}")->select();//招聘基本信息
        $li_zp = M('recruit2')->where("usid = {$uid}")->select();//招聘详情信息
 
        $lijb_qg = M('flea')->where("uid = {$uid} and type = '1'")->select();
        //悬赏
        foreach ($lijb as $key => $value) {//基本信息
            foreach ($li as $k => $v) {//详情信息
                if($value['psid'] == $v['pid'] && $v['bao'] != ''){//如果报名了详情信息表的bao字段肯定有数据
                    $value['xs'] = $v;//符合条件的直接给详情信息赋值 数组建名为xs 
                    $value['xs']['uu'] = $this->xsFangfa($v['bao']);
                    if($value['xs'] != ''){//有的可能xs字段可能为空的存在 所以在这里进行处理
                        $arr[] = $value;
                    } 
                }
            }
        }
        //招聘
        foreach ($lijb_zp as $key => $value) {//基本信息
            foreach ($li_zp as $k => $v) {//详情信息
                if($value['rid'] == $v['pid'] && $v['zhao'] != ''){//如果报名了详情信息表的bao字段肯定有数据
                    $value['xs'] = $v;//符合条件的直接给详情信息赋值 数组建名为xs 
                    $value['xs']['uu'] = $this->xsFangfa($v['zhao']);
                    // var_dump($this->xsFangfa($v['bao']));
                    if($value['xs'] != ''){//有的可能xs字段可能为空的存在 所以在这里进行处理
                        $arr_zp[] = $value;
                    } 
                }
            }
        }
        //求购
        foreach ($lijb_qg as $key => $value) {
            if($value['bao'] != ''){
                $value['xs'] = $this->xsFangfa($value['bao']);
                $arr_qg[] = $value;
            }
        }
        $this->assign('list',$list);//留言
        $this->assign('list_hui',$list_hui);//人家回复你的留言
        // var_dump($list_hui_js);die;
        $this->assign('list_hui_js',$list_hui_js);//人家回复你的留言
        $this->assign('arr',$arr);//报名悬赏
        $this->assign('arr_zp',$arr_zp);//报名招聘
        $this->assign('arr_qg',$arr_qg);//报名求购
        // $this->assign('catXs',array_unique($catXs));
        $this->display();
    }
    /**
    *  需求消息中对留言的回复
    */
    public function xqxx_huifu($id,$fid,$content){//这两个分别是消息id和帖子id fid为被回复用户的id
        // echo $id;
        $data['uid'] = $_SESSION['id'];
        $data['fid'] = $fid;
        $data['tid'] = $id;//消息id
        $data['content_hf'] = $content;//回复内容
        $ob = M('user_xx_hf')->add($data);
        if($ob > 0){
            echo '回复成功';
        }
    }
    /**
    *  部队消息
    */
    public function bdxx(){
        $uid = $_SESSION['id'];
        $list = M("user_xx_bd as b")->join('user as u on u.id = b.uid')->where("b.fid = {$uid} and b.type_xx = '2' and b.status_xx = '1'")->select();//留言
        $this->assign('list',$list);
        $this->display();
    }
    /**
    *  商铺消息
    */
    public function spxx(){
        $uid = $_SESSION['id'];
        $list = M("user_xx_sp as b")->join('user as u on u.id = b.uid')->where("b.fid = {$uid} and b.type_xx = '1' and b.status_xx = '1'")->select();//留言
        $li = M("user_xx_sp as b")->join('user as u on u.id = b.uid')->where("b.fid = {$uid} and b.type_xx = '2' and b.status_xx = '1'")->select();//收藏
        $this->assign('list',$list);
        $this->assign('li',$li);
        $this->display();
    }
    /**
    *  已发布 悬赏
    */
    public function userXs(){
        $uid = $_SESSION['id'];
        $list = M('reward1')->where("uid = {$uid}")->select();//悬赏基本信息
        $data = M('reward2')->where("usid = {$uid}")->select();//悬赏详情信息
        foreach ($list as $k => $v) {
            foreach ($data as $key => $value) {
                if($v['psid'] == $value['pid']){
                    // var_dump($value['type']);
                    $arr[] = $value['type'].','.$value['pid'];//悬赏内容
                    $bao[] = $value['bao'].','.$value['pid'];//报名人数
                }
            }
        }
        //报名人数
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->assign('arr',$arr);
        $this->assign('bao',$bao);
        $this->display();
    }
    /**
    *  已发布 悬赏->已找到@id为详情id
    */
    public function yzd($id){
        $data['bao_st'] = 2; 
        $ob = M('reward2')->where(" wid = {$id}")->save($data);
        if($ob > 0){
            echo $id.'已找到';
        }
    }
    /**
    *  已发布 悬赏->编辑
    */
    public function userXss($psid){
        $list = M('reward1')->where("psid = {$psid}")->find();//悬赏基本信息
        $data = M('reward2')->where("pid = {$psid}")->select();//悬赏详情信息
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->display('userXss');
    }
    /**
    *  已发布 悬赏->提交
    */
    public function userXsgo(){
        $id = $_POST['id'];
        $id1 = $_POST['id1'];
        $id2 = $_POST['id2'];
        $id3 = $_POST['id3'];
          //填写悬赏
        // echo '<pre>';
        // var_dump($_POST);die;
        date_default_timezone_set('prc');
        $data['address'] = $_POST['add'].','.$_POST['ad'];
        $data['tels'] = $_POST['te'];
        $data['qqs'] = $_POST['q'];
        $data['time'] = $_POST['ti'];
        $data['content'] = $_POST['con'];//可直接添加
        $data['uid'] = $_SESSION['id'];
        $data['date'] = date('Y-m-d',time());
        $ob = $id = M('reward1')->where("psid = {$id}")->save($data);
        if($ob > 0){
            return 'ok';
        }
        //详细信息
        if(!empty($_POST['sex1']) && !empty($_POST['age1']) && !empty($_POST['yaoqiu1']) && !empty($_POST['whether1']) && !empty($_POST['type1'])){
            $xsdt['sex'] = $_POST['sex1'];
            $xsdt['age'] = $_POST['age1'];
            $xsdt['yaoqiu'] = $_POST['yaoqiu1'];
            $xsdt['whether'] = $_POST['whether1'];
            $xsdt['price'] = $_POST['price11'].'-'.$_POST['price21'];
            if($_POST['type1'] == '其他'){
               $xsdt['type'] = $_POST['zymc1']; 
            }else{
               $xsdt['type'] = $_POST['type1'];
            }
            $db = M('reward2')->where("wid = {$id1}")->save($xsdt);
            if($db > 0){
                return '第一个';
            }
        }
        if(!empty($_POST['sex2']) && !empty($_POST['age2']) && !empty($_POST['yaoqiu2']) && !empty($_POST['whether2']) && !empty($_POST['type1'])){
            $xsdts['sex'] = $_POST['sex2'];
            $xsdts['age'] = $_POST['age2'];
            $xsdts['yaoqiu'] = $_POST['yaoqiu2'];
            $xsdts['whether'] = $_POST['whether2'];
            $xsdts['price'] = $_POST['price12'].'-'.$_POST['price22'];
            if($_POST['type2'] == '其他'){
               $xsdts['type'] = $_POST['zymc2']; 
            }else{
               $xsdts['type'] = $_POST['type2'];
            }
            $obs = M('reward2')->where("wid = {$id2}")->save($xsdts);
            if($obs > 0){
                return '第二个';
            }
        }
        if(!empty($_POST['sex3']) && !empty($_POST['age3']) && !empty($_POST['yaoqiu3']) && !empty($_POST['whether3']) && !empty($_POST['type3'])){
            $xsdt['sex'] = $_POST['sex3'];
            $xsdt['age'] = $_POST['age3'];
            $xsdt['yaoqiu'] = $_POST['yaoqiu3'];
            $xsdt['whether'] = $_POST['whether3'];
            $xsdt['price'] = $_POST['price13'].'-'.$_POST['price23'];
            if($_POST['type3'] == '其他'){
               $xsdt['type'] = $_POST['zymc3']; 
            }else{
               $xsdt['type'] = $_POST['type3'];
            }
            $ob = $xsid = M('reward2')->where("wid = {$id3}")->save($xsdt);
            if($ob > 0){
                return '第三个';
            }
        }
        if($ob > 0){
            $this->userXss($_POST['id']);
        }
        $this->userXss($_POST['id']);
    }
    /**
    *  已发布 应赏-》删除应赏详情
    */
    public function userXs_del($id){
        $ob = M("reward2")->where("wid = {$id}")->delete();
        if($ob > 0){
            echo '删除成功';
        }
    }
    /**
    *  已发布 招聘
    */
    public function userZp(){
        $uid = $_SESSION['id'];
        $list = M('recruit1')->where("uid = {$uid}")->select();//招聘基本信息
        $data = M('recruit2')->where("usid = {$uid}")->select();//招聘详情信息
        foreach ($list as $k => $v) {
            foreach ($data as $key => $value) {
                if($v['psid'] == $value['rid']){
                    // var_dump($value['type']);
                    $arr[] = $value['type'].','.$value['pid'];//招聘内容
                }
            }
        }
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->assign('arr',$arr);
        $this->display('userZp');
    }
     /**
    *  已发布 招聘->已找到@id为详情id
    */
    public function yzds($id){
        $data['zhao_st'] = 2; 
        $ob = M('recruit2')->where("id = {$id}")->save($data);
        if($ob > 0){
            echo $id.'已找到';
        }
    }
    /**
    *  已发布 招聘-》修改@id为基本信息id
    */
    public function userEdit($id){
        $list = M('recruit1')->where("rid = {$id}")->find();//招聘基本信息
        $data = M('recruit2')->where("pid = {$id}")->select();//招聘详情信息
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->display('userEdit');
    }
    /**
    *  已发布 招聘-》执行修改
    */
    public function userEditgo(){
        $rid = $_POST['rid'];
        $rid1 = $_POST['rid1'];
        $rid2 = $_POST['rid2'];
        $rid3 = $_POST['rid3'];
        date_default_timezone_set('prc');
        $data['address_zp'] = $_POST['address'].','.$_POST['add'];
        $data['rtel'] = $_POST['tel'];
        $data['rqq'] = $_POST['qq'];
        $data['remail'] = $_POST['email'];
        $data['date'] = date("Y-m-d",time());
        $ob = $id = M('recruit1')->where("rid = {$rid}")->save($data);
        // if($ob > 0){
        //     $this->userZp();
        // }

        // if($ob > 0){
            if(!empty($_POST['sex1']) && !empty($_POST['timework1']) && !empty($_POST['type1']) && !empty($_POST['content1']) && !empty($_POST['yaoqiu1']) && !empty($_POST['age1'])){
                $xsdt['sex'] = $_POST['sex1'];
                $xsdt['age'] = $_POST['age1'];
                $xsdt['type'] = $_POST['type1'];
                $xsdt['worktime'] = $_POST['timework1'];
                $xsdt['price'] = $_POST['price11'].'-'.$_POST['price21'];
                $xsdt['type'] = $_POST['type1'];
                $xsdt['content'] = $_POST['content1'];
                $xsdt['work'] = $_POST['yaoqiu1'];
                $db = M('recruit2')->where("id = {$rid1}")->save($xsdt);
                // if($db > 0){
                //     $this->userZp();
                // }
            }
            if(!empty($_POST['sex2']) && !empty($_POST['timework2']) && !empty($_POST['type2']) && !empty($_POST['content2']) && !empty($_POST['yaoqiu2']) && !empty($_POST['age2'])){
                $xsdt1['sex'] = $_POST['sex2'];
                $xsdt1['age'] = $_POST['age2'];
                $xsdt1['type'] = $_POST['type2'];
                $xsdt1['worktime'] = $_POST['timework2'];
                $xsdt['price'] = $_POST['price12'].'-'.$_POST['price22'];
                $xsdt1['type'] = $_POST['type2'];
                $xsdt1['content'] = $_POST['content2'];
                $xsdt1['work'] = $_POST['yaoqiu2'];
                $db1 = M('recruit2')->where("id = {$rid2}")->save($xsdt1);
                // if($db1 > 0){
                //     $this->userZp();
                // }
                
            }
            if(!empty($_POST['sex3']) && !empty($_POST['timework3']) && !empty($_POST['type3']) && !empty($_POST['content3']) && !empty($_POST['yaoqiu3']) && !empty($_POST['age3'])){
                $xsdt2['sex'] = $_POST['sex3'];
                $xsdt2['age'] = $_POST['age3'];
                $xsdt2['type'] = $_POST['type3'];
                $xsdt2['worktime'] = $_POST['timework3'];
                $xsdt['price'] = $_POST['price13'].'-'.$_POST['price23'];
                $xsdt2['type'] = $_POST['type3'];
                $xsdt2['content'] = $_POST['content3'];
                $xsdt2['work'] = $_POST['yaoqiu3'];
                $db2 = M('recruit2')->where("id = {$rid3}")->save($xsdt2);
                // if($db2 > 0){
                //     $this->userZp();
                // }
                
            }
            $this->userZp();
    }
    public function userZp_del($id){
        $ob = M("recruit2")->where("id = {$id}")->delete();
        if($ob > 0){
            echo '招聘删除成功';
        }
    }


    
    
    
    public function bdjz(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$px=I('pxs');
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	if($px=='r'){
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->limit($limitpage,$num)->order('d.zan desc')->select();
    	}else{
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->limit($limitpage,$num)->order('d.did desc')->select();
    	}
    	  $img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
    	  $dongtai['nr'] = $data;
    	  $dongtai['tu'] = $img;
    		//  echo 1;
    	if(count($data)>0){
    	$this->ajaxReturn($dongtai);
    	}else{
        $this->ajaxReturn($data);
    	}
  
    
    }
    public function rzbdjz(){
       $p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$px=I('pxs');
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	if($px=='r'){
    		$data=M('dongtai as d')-> field( "d.*,u.username,u.sex,u.addre")->join('user as u on d.uid = u.id')->join('forcee as f on f.uid = u.id')->where('status=2')->limit($limitpage,$num)->order('d.zan desc')->select();
    	}else{
    		$data=M('dongtai as d')-> field( "d.*,u.username,u.sex,u.addre")->join('user as u on d.uid = u.id')->join('forcee as f on f.uid = u.id')->where('status=2')->limit($limitpage,$num)->order('d.did desc')->select();
    	}
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	if(count($data)>0){
    		$this->ajaxReturn($dongtai);
    	}else{
    		$this->ajaxReturn($data);
    	}
    
    
    }
    public function spbdjz(){
    	$p=isset($_POST['k'])?intval(trim($_POST['k'])):0;
    	$px=I('pxs');
    	$total=M('dongtai')->count();//数据记录总数
    	$num=1;//每页记录数
    	$totalpage=ceil($total/$num);//总计页数
    	$limitpage=($p-1)*$num;//每次查询取记录
    	//超过最大页数，退出
    	if($px=='r'){
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->join('shop as f on f.uid = u.id')->limit($limitpage,$num)->order('d.zan desc')->select();
    	}else{
    		$data=M('dongtai as d')->join('user as u on d.uid = u.id')->join('shop as f on f.uid = u.id')->limit($limitpage,$num)->order('d.did desc')->select();
    	}
    	$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
    	$dongtai['nr'] = $data;
    	$dongtai['tu'] = $img;
    	//  echo 1;
    	if(count($data)>0){
    		$this->ajaxReturn($dongtai);
    	}else{
    		$this->ajaxReturn($data);
    	}
    
    
    }
    public function bdsousu()
    {
    	//商铺部队对内动态热门
    	//$uid = $_SESSION['id'];
    
    	$where=I('where');
   

    		if($where=='z'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
    		}else if($where=='1z'||$where=='1'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
    		}else if($where=='2z'||$where=='2'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
    		}else if ($where=='3z'||$where=='3'){
    			$remen=M('dongtai as d')-> field( "d.*,u.username,u.sex,u.addre")->join('user as u on d.uid = u.id')->join('forcee as f on f.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
    		}else if ($where=='4z'||$where=='3'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('shop as f on f.uid = u.id')->join('dongimage as i on d.did = i.pid')->order('d.did desc')->limit(1)->select();
    		}else if($where=='1r') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.type = 2")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='r') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.type = 2")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='2r') {
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.type = 2")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='3r') {
    			$remen=M('dongtai as d')-> field( "d.*,u.username,u.sex,u.addre")->join('user as u on d.uid = u.id')->join('forcee as f on f.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.type = 2")->order('d.zan desc')->limit(1)->select();
    		}else if($where=='4r'){
    			$remen=M('dongtai as d')->join('user as u on d.uid = u.id')->join('shop as f on f.uid = u.id')->join('dongimage as i on d.did = i.pid')->where("d.type = 2")->order('d.did desc')->limit(1)->select();
    		}
    		$img=M('dongimage as g')->join('dongtai as d on d.did = g.pid')->order('g.iid desc')->select();
    		$dongtai['nr'] = $remen;
    		$dongtai['tu'] = $img;
    	$this->ajaxReturn($dongtai);
    }   
    //小测试使用
    public function a(){
        $this->display();
    }
    /**
    *  处理QQ登录的token值  该方法仅仅返回openid值
    */
    public function qqToken(){
        // var_dump($token);
        // var_dump($qqname);
        $token = $_POST['token'];
        $qqname = $_POST['qqname'];

        $tokens = explode("=",$token);
        $qqToken = $tokens[1];
        $url = 'https://graph.qq.com/oauth2.0/me?access_token='.$qqToken.'';
        $open = $this->get($url);

        $opens = explode("(",$open);
        $openid = explode(')',$opens[1]);
        array_pop($openid);
        $json = json_decode($openid[0],true);
        $openids = $json['openid'];
        $this->ajaxReturn($openids);
        // $list = M("user")->where("qq = '{$openids}'")->find();
        
        // if($list == null){
           
        //     $op['qq'] = $openids;
        //     $op['username'] = $qqname; 
        //     $ad =  M('user')->add($op);
        //     $this->ajaxReturn($ad);die;
        //     if($ad > 0){
        //         session_start();
        //         $_SESSION['qq'] = $openids;
        //         $_SESSION['username'] = $qqname;
        //     }
        //     // $_SESSION['id'] = $id;
        // }else{
        //     session_start();
        //     $_SESSION['username'] = $list['username'];
        //     $_SESSION['qq'] = $openids;
        //     // $_SESSION['id'] = $list['id'];
        //     // $this->ajaxReturn($_SESSION);
        // }
        
    }
    /**
    *   拿到qq用户的唯一就开始进行存储
    */
    public function qqLogin($openid,$qqname){
        // $openid = $_POST['openid'];
        // var_dump($qqname);die;
        $list = M("user")->where("qq = '{$openid}'")->find();

        // var_dump($list);die;
        if(empty($list)){
            $op['qq'] = $openid;
            $op['username'] = '用户'.time();
            $ad = $id = M('user')->order('id desc')->add($op);
            if($ad > 0){
                session_start();
                $_SESSION['qq'] = $openid;
                $_SESSION['username'] = $op['username'];
                $_SESSION['id'] = $id;
                // echo 123;
                // var_dump($_SESSION);
                // echo '登陆成功';
                $this->ajaxReturn($_SESSION);
            }
            
        }else{
            // $uid = $list['id'];
            session_start();
            $_SESSION['username'] = $list['username'];
            $_SESSION['qq'] = $openid;
            $_SESSION['id'] = $list['id'];
            $this->ajaxReturn($_SESSION);
        }
    }
    /**
    *  请求微信第三方登录
    */
    public function wxLogin(){
        $url='https://open.weixin.qq.com/connect/qrconnect?appid=wx06fc578080933319&redirect_uri=http://xishimatou.com;&response_type=code&scope=snsapi_login&state=STATE#wechat_redirect';
        // var_dump($this->get($url));
        file_get_contents($url);
        // echo $this->get($url);
    }
    /**
    *  微信请求
    */
    public function wxcode(){
        $code = $_POST['code'];
        // var_dump($code);die;
        $codes = explode('=',$code);
        $xxoo = explode('&',$codes[1]);
        $newCode = $xxoo[0];//拿到微信的code值
        // var_dump($newCode);die;
        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx06fc578080933319&secret=6477b3140c2043f67e4289e4245a8c6f&code='.$newCode.'&grant_type=authorization_code';//这个接口可以获得token和openid
        // // var_dump($this->get($url));die;
        $user = $this->get($url);
        
        $users = json_decode($user);
        //微信的openid  token
        $userXx = json_decode($this->wxUser($users->openid,$users->access_token));//获得登录用户的基本信息

        // var_dump($userXx->nickname);die;
        $wxad['username'] = '用户'.time();//若用户第一次登录 则用户名为微信昵称
        $wxad['weixin'] = $wxopenid = $userXx->openid;//用户唯一id

        //先查询此用户之前是否登录过
        $wxLi = M('user')->where("weixin = '{$wxopenid}'")->find();
        // var_dump($wxLi);die;
        if(empty($wxLi)){//如果为空证明之前没有登陆过 就进行添加
            // echo 123;die;
            // var_dump($wxad);die;
            if($wxad['weixin'] != ''){
                $wxAdd = $wxId = M('user')->order('id desc')->add($wxad);
            }
            if($wxAdd > 0){
                session_start();
                $_SESSION['username'] = $wxad['username'];
                $_SESSION['id'] = $wxId;
                $this->ajaxReturn($_SESSION);
            }
        }else{//如果不为空则直接登录
            session_start();
            $_SESSION['username'] = $wxLi['username'];
            $_SESSION['id'] = $wxLi['id'];
            $this->ajaxReturn($_SESSION);
        }
    }
    /**
    *  处理报名悬赏用户的方法 
    *   该方法仅仅适用于本次
    */
    public function xsFangfa($userYp){

        // $uid = $_SESSION['id'];
        $shou = explode(',',$userYp);
        array_pop($shou);
        for ($i=0; $i < count($shou); $i++) { 
            $uuid = $shou[$i];
            // var_dump($uuid
            $users[] = M('user as u')->where("u.id = {$uuid}")->find();
        }
        return $users;
    }

    /**
    *  微信登录 获取用户个人信息
    */
    public function wxUser($openid,$access_token){
        $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'';
        $userWx = $this->get($url);
        return $userWx;
    }
    /**
     * 在脚本中发送http get请求
     * get('http://www.itxdl.cn')
     */
    function get($url)
    {
        //curl扩展
        $ch = curl_init($url);
        //设置请求的参数
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $res = curl_exec($ch);
        //返回请求的结果
        return $res;
    }
    public function bdzxgz(){
    	//部队中心关注
    	$id = $_SESSION['id'];
    
    	$this->display('Mtbu/bdzxgz');
    }
    public function bdzxfs(){
    	//部队中心粉丝
    	$id = $_SESSION['id'];
    
    	$this->display('Mtbu/bdzxfs');
    }
    public function usaveimage(){
            $id = $_SESSION['id'];
        	$img = M('user');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	
        	}
        	date_default_timezone_set('prc');
        	$pubtime = date("Y-m-d",time());
        	//var_dump($pubtime);die;
        		$upload = new \Think\Upload();
        		//设置
        		$upload->maxSize = 111245600;//设置附件上传大小
        		$upload->exts    = array('jpg','gif','png','jpeg');//设置附件上传类型
        		$upload->rootPath= './Public/upload/';//设置附件上传根目录
        		//$upload->saveName= array('uniqid','');
        		//保存          把图片保存至公共文件夹下的upload文件夹下
        		$reArr = $upload->upload();
        		/*         var_dump($reArr);
        		 exit(); */
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				 
        				$reImage = $img->where(array('id'=>$id))->save(array('imagename'=>$v['savename'] , 'pubtime'=>$pubtime));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("User/index") ;
        			}
        		
        
    } 
    public function usaveimg(){
    	$data['imagename'] =I('imagename');
    	$id = $_SESSION['id'];
    	$img = M('user');
    	$ob = $img->where("id = {$id}")->save($data);
    if($ob){
    	echo 'y';
    }
    }
    
    

    public function usave1(){
    	//echo '<pre>';
    	//var_dump($_FILES['upload1']);die;
    	$tu=I('tu');
    	//var_dump($tu);die;
    	$data['uid'] =  $_SESSION['id'];
    	$data['content'] =  $_POST['content'];
    	$data['type'] =  $_POST['type'];
    	$data['time']=date("Y-m-d ",time());
    	$id = M('dongtai')->add($data);
    	$tu1=rtrim($tu, ",");
    	$array = explode("," ,$tu1);
    //	var_dump($array);die;
    	$form=M('dongimage');
    	$data['pid']=$id;
    	foreach ($array as $v){
    		$data['imagename'] = $v;
    		 
    		$fu = $form->add($data);
    
    	}
    
    
    }
    
    
    
}