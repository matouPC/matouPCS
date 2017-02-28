<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends BsController {
    public function index(){//继承BsController类
     	   	//$condition['status'] = $_GET['status'];
        	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询方法
        	//var_dump($condition );die;
        	$news = M('shop');
        	$num = $news-> field( "shop.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on shop.uid=user.id" )->where( $condition)->count();//查询当前条件的所有数据条数
        	///echo $news->getLastSql();
        	//var_dump($num );die;
        	$pageSize = 5;//每页显示条数
        	$page = new \Think\Page($num,$pageSize);//实例化new类继承分页
        	$start = $page->firstRow;
        	$page->rollPage=5;//显示页数
        	//对分页的结果，指定的出现那些内容
        	$page->setConfig('next', "下一页");
        	$page->setConfig('prev', "上一页");
        	$page->setConfig('first', "首页");
        	$page->lastSuffix=false;
        	$page->setConfig("last", "尾页");
        	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pageSize.' 条/页 共 %TOTAL_ROW% 条)');
        	//$p=I('p',1);
        	//var_dump($p);die;
        	$pageStr = $page->show();//显示当前分页数
        	
        	//$operarr = $news->where( $condition)->order("id desc")
        	//->limit("$start,$pageSize")
        	//->select();//查询当前分页数据内容
        	$operarr = $news -> field( "shop.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on shop.uid=user.id" ) ->//两个表的关联字段
        	where($condition) ->//查询内容
        	order("id desc")->
        	limit("$start,$pageSize") ->
        	select();
        	//var_dump($pageStr);die;
        	$this->assign("pageStr",$pageStr);//返回当前分页数
        	$this->assign("operarr",$operarr);//返回当前分页数据内容
        $this->display();
        }
        
      
        
        
        public function add(){//添加页面
        
        	$this->display();
        }   
     
        /**
         *添加入表
         */
        public function save(){
        	$product = D('shop');
        	date_default_timezone_set('prc');
        	$_POST['pubtime'] = date("Y-m-d",time());//获取时间戳
        	$id = $product->data($_POST)
        	->add();
        	if ($id) {
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
        		if(!$reArr){
        			//提示
        			$this->error("内容保存成功，图片上传失败",U("Force/add") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('shop');
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				//	$image->thumb(150, 190,\Think\Image::IMAGE_THUMB_CENTER)->save("./Public/upload/".$v['savepath']."s_".$v['savename']);
        					
        				$reImage = $productimage->where(array('id'=>$id))->save(array('imagename'=>$v['savename']));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("Shop/index") ;
        			}else {
        				$this->error("内容保存成功，图片保存失败",U("Shop/add"));
        			}
        		}
        
        	}else{
        		$this->error("添加失败",U("Shop/add"));
        	}
        }
        
        /**
         *修改页面
         */
        public function update(){
        	$id = I('id');
        	$ca = M('shop');
        	$jarr = $ca->where("id=$id")->select();
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改提交
         */
     public function usave(){//修改资料
    
        	
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('shop');
        	$shop = $product ->where("id = {$id}")->save($_POST);
        
        			if($shop){
        				$this->redirect("shop/index") ;
        			}else {
        				$this->error("修改失败",U("shop/add") );
        			}
        	
        }
        
        public function updateimage(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('shop');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage(){//修改图片
        	$id = I('id');
        	$img = M('shop');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	
        	}
//var_dump($e);die;
        	$product = D('shop');
        	date_default_timezone_set('prc');
        	$pubtime = date("Y-m-d",time());
        	//var_dump($pubtime);die;

        
        	
        //	var_dump($id);die;
        	//if ($id) {
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
        		if(!$reArr){
        			//提示
        			$this->error("图片修改失败",U("shop/index") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('shop');
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				 
        		$reImage = $productimage->where(array('id'=>$id))->save(array('imagename'=>$v['savename'] , 'pubtime'=>$pubtime));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("shop/index") ;
        			}else {
        				$this->error("图片修改失败",U("shop/index") );
        			}
        		}
        
        //	}else{
        		//$this->error("修改失败",U("shop/updateimage") );
        //	}
        
        }

	
	public function bdel(){
		$ids=I('ids');//获取批量删除id
		//print_r($ids);die;
		$reward=D("shop");
		$ids=implode(' , ' ,$ids);
		if($reward->delete($ids)) {//如果获取到id执行删除
			$this->redirect("Shop/index");
		}else{
			$this->error("批量删除失败",U("Shop/index") );
		}
	
	
	
	}
        public function delete(){
            	$id = I('id');
        	$im = M('commodity');
        	$img = M('shop');
        	$arr = $im->where("pid=$id")->select();//查图片位置
        //	foreach ($arr as $v){
       // 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        //	}
        if($arr){
       echo "y";
        }else {
        	$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
        	$res = $im->where("pid=$id")->delete();
        	if($resu&&$res){
        		$this->redirect("shop/index");
        	}else{
        		$this->error("删除失败",U("shop/index") );
        	}
        }
        
        }
        
        
        /**
         *商品信息
         */
        
        
        
        public function commodity(){
        	$id = I('id');
        	$ca = M('commodity');
        	$jarr= $ca->where("pid=$id")->select();
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        /**
         *商品详情修改提交
         */
        public function usave1(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('commodity');
        
        	$reward = $product ->where("id = {$id}")->save($_POST);
        	$this->ajaxReturn($reward);
        	//if($id){
        	//	$this->redirect('recruit/index');
        	//}else {
        	//	$this->error("修改失败",U("recruit/index") );
        	//	}
        
        } 
        
        
        public function delete1(){
        	$pid = I('id');
        	$im = M('commodity');
        
        	//	foreach ($arr as $v){
        	// 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        	//	}
        
        
        	$res = $im->where("id=$pid")->delete();
        	if($res){
        		 
        	}else{
        		echo "y";
        	}
        }
         
        
        /**
         *商品图片修改提交
         */
        public function comimage(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('comimage');
        	$jarr = $ca -> field( "comimage.*,commodity.name,commodity.pid" ) ->//确定查询两个表里的字段
        	join( "commodity on comimage.psid=commodity.id" ) ->
        	where("psid=$id")-> select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage1(){//修改图片
        	$id = I('id');
        	$img = M('comimage');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtimes']."/".$v['imagenames']);//删除图片
        	}
        	//var_dump($e);die;
        	$product = D('comimage');
        	date_default_timezone_set('prc');
        	$pubtime = date("Y-m-d",time());
        	//var_dump($pubtime);die;
        
        	//	var_dump($id);die;
        	//if ($id) {
        	$upload = new \Think\Upload();
        	//设置
        	$upload->maxSize = 111245600;//设置附件上传大小
        	$upload->exts    = array('jpg','gif','png','jpeg');//设置附件上传类型
        	$upload->rootPath= './Public/upload/';//设置附件上传根目录
        	//$upload->saveName= array('uniqid','');
        	//保存          把图片保存至公共文件夹下的upload文件夹下
        	$reArr = $upload->upload();
      ///   var_dump($reArr);
        //	 exit(); 
        	if(!$reArr){
        		//提示
        		$this->error("图片修改失败",U("shop/index") );
        	}else{
        		//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        		$productimage = M('comimage');
        		foreach ($reArr as $v){
        			//s实现缩略图
        			//$image = new \Think\Image();
        			//打开图片保存的位置
        			//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        			//修改图片的宽高   并保存到原地址
        			//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        			//var_dump(array('imagenames'=>$v['savename'] , 'pubtimes'=>$pubtime,'id'=>$id));
        			// exit();
        			$reImage = $productimage ->where("id=$id")->save(array('imagenames'=>$v['savename'] , 'pubtimes'=>$pubtime));
        			//echo $productimage ->getLastSql();die;
        		}
        		//根据写入表productimage表中的数据所返回的值进行判断
        		if($reImage){
        			$this->redirect("shop/index");
        		}else {
        			$this->error("图片修改失败22",U("shop/index") );
        		}
        	}
        
        	//	}else{
        	//$this->error("修改失败",U("shop/updateimage") );
        	//	}
        
        }
        
        public function status(){//点击审核
        	$id = I('id');
        	//var_dump($id);die;
        	//$data['status'] = 2;//2代表已审核
        	//	$force = M('forcee')->where("id = {$id}")->save($data);
        
        	//	$lists =M('forcee')->where("id = {$id}") ->select();
        	//	if($lists>0){
        	//		echo 'y';
        	//	}
        	$news=M('shop');
        	$operarr = $news -> field( "shop.*,user.username,user.sex,user.pubtime,user.imagename" ) ->//确定查询两个表里的字段
        	join( "user on shop.uid=user.id" ) ->//两个表的关联字段
        	where("uid = {$id}") ->//查询内容
        	select();
        	$this->assign("operarr",$operarr);//返回当前分页数据内容
        	$this->display();
        
        }
        
        public function shen(){
        	$id = I('id');
        	$uid = I('uid');
        	$data['status'] = $_POST['status'];
           $status=$_POST['status'];
        	$type=$_POST['type'];
        	if($status=='2'){
        		$bdlx = M('user')->where("id = {$uid}")->save("bdlx = 6");
        	}
        	$force = M('shop')->where("id = {$id}")->save($data);
        	$fo = M('shop')->where("id = {$id}")->select();
        	$this->ajaxReturn($fo);
        
        }
        
        
        
        
    }