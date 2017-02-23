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
        // $userYp = M('user as u')->join('employ as e on u.id = e.uid')->select();   //
        $userYp = M('user as u')->join('employ as e on u.id = e.uid')->join("employwork as w on e.id = w.pid")->select();   //工作经历
       
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
        $this->assign('user',$user);
        $this->assign('arr',$arr);
        $this->assign('li',$li);
        $this->assign('guanzhu',$guanzhu);//我关注的
        $this->assign('bguanzhu',$bguanzhu);//关注我的
        $this->assign('bb',$bb);//
        $this->display('Mtbu/bdzx');
    }
    public function liuyan(){
        //闲置留言板
        date_default_timezone_set('prc');
        $data['uid'] = $_SESSION['id'];
        $data['xsid'] = $_POST['xsid'];
        $data['contents'] = $_POST['content'];
        $data['ltime'] = date("Y-m-d H:i:s",time());
        $data['xzst'] = 1;
        $ob=$id= M('liuyan')->order("id desc")->add($data);
        if( $ob > 0 ){
            $xsid = $_POST['xsid'];
            $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->where("l.xsid = {$xsid}")->order('l.lid desc')->select(); 
            $this->ajaxReturn($liu);
        }
    }
    public function qliuyan(){
        //求购留言板
        date_default_timezone_set('prc');
        $data['uid'] = $_SESSION['id'];
        $data['xsid'] = $_POST['xsid'];
        $data['contents'] = $_POST['content'];
        $data['ltime'] = date("Y-m-d H:i:s",time());
        $data['xzst'] = 2;
        $ob=$id= M('liuyan')->order("id desc")->add($data);
        if( $ob > 0 ){
            $liu = M('user as u')->join('liuyan as l on u.id = l.uid')->where('l.xzst = 2')->order('l.lid desc')->select(); 
            $this->ajaxReturn($liu);
        }
    }
    public function usave(){
        //用户中心
             $id = $_SESSION['id'];
            $data['username'] = $_POST['username'];
            $data['tel'] = $_POST['tel'];
            $data['sex'] = $_POST['sex'];
            $data['address'] = $_POST['address'];
            //$data['password'] = $_POST['password'];
            $data['password'] = $_POST['password1'];
            //$data['password2'] = $_POST['password2'];
            $arr = M('user')->where("id=$id")->select();//查图片位置
            foreach ($arr as $v){
                $password=$v['password'];   
        }
        if($password==$_POST['password']){
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
        $fbyp = M('employ as e')->join('employimage as i on e.id = i.pid')->join("employvideo as v on e.id = v.pid")->where("e.uid = {$uid}")->find();
        $fbyp_jl =M('employ as e')->join('employwork as m on e.id = m.pid')->where("e.uid = {$uid}")->select();
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
}