<?php
namespace Admin\Controller;
use Think\Controller;
class EmployController extends BsController {//应聘大厅
    public function index(){
    	//$condition['status'] = $_GET['status'];
    	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询方法
    	//var_dump($condition );die;
    	$news = M('employ');
    	$num = $news-> field( "employ.*,user.username" ) ->//确定查询两个表里的字段
    	join( "user on employ.uid=user.id" ) ->count();//查询当前条件的所有数据条数
    	///echo $news->getLastSql();
    	//var_dump($num );die;
    	$pageSize = 5;//每页显示条数
    	$page = new \Think\Page($num,$pageSize);
    	$start = $page->firstRow;
    	$page->rollPage=5;//显示页数
    	//对分页的结果，指定的出现那些内容
    	$page->setConfig('next', "下一页");
    	$page->setConfig('prev', "上一页");
    	$page->setConfig('first', "首页");
    	$page->lastSuffix=false;
    	$page->setConfig("last", "尾页");
    	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$num.' 条/页 共 %TOTAL_ROW% 条)');
    	$pageStr = $page->show();//显示当前分页数
    	//$operarr = $news->where( $condition)->order("id desc")
    	//->limit("$start,$pageSize")
    	//->select();//查询当前分页数据内容
    	//var_dump($operarr );die;
    	$operarr = $news -> field( "employ.*,user.username" ) ->//确定查询两个表里的字段
    	join( "user on employ.uid=user.id" ) ->//两个表的关联字段
    	where($condition) ->//查询内容
    	order("id desc")->
    	limit("$start,$pageSize") ->
    	select();
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
        	$product = D('Employ');
        	date_default_timezone_set('prc');
        	$_POST['pubtime'] = date("Y-m-d",time());//获取时间戳
        	$id = $product->data($_POST)
        	->add();
        	if ($id) {
        		$upload = new \Think\Upload();
        		//设置
        		$upload->maxSize = 311245600;//设置附件上传大小
        		$upload->exts    = array('jpg','gif','png','jpeg');//设置附件上传类型
        		$upload->rootPath= './Public/upload/';//设置附件上传根目录
        		//$upload->saveName= array('uniqid','');
        		//保存          把图片保存至公共文件夹下的upload文件夹下
        		$reArr = $upload->upload();
        		/*         var_dump($reArr);
        		 exit(); */
        		if(!$reArr){
        			//提示
        			$this->error("内容保存成功，图片上传失败",U("Employ/add") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('Employ');
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
        				$this->redirect("Employ/index") ;
        			}else {
        				$this->error("内容保存成功，图片保存失败",U("Employ/add") );
        			}
        		}
        
        	}else{
        		$this->error("添加失败",U("Employ/add") );
        	}
        }
        
        /**people
         *修改
         */
        public function update(){
        	$id = I('id');
        	$ca = M('Employ');
        	$jarr = $ca->where("id=$id")->select();
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改提交
         */
    public function usave(){//修改用户资料
    
        	
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('Employ');
        	$Employ = $product ->where("id = {$id}")->save($_POST);
        
        			if($Employ){
        				$this->redirect("Employ/index") ;
        			}else {
        				$this->error("修改失败",U("Employ/add") );
        			}
        	
        }
        public function updatework(){
        	$id = I('id');
        	$ca = M('Employwork');
        	$jarr = $ca->where("pid=$id")->select();
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改工作经历
         */
        public function usavework(){//修改用户资料
        
        	 
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('Employwork');
        	$Employ = $product ->where("id = {$id}")->save($_POST);
        
        	$this->ajaxReturn($Employ);
        }
        
        
        public function updateimage(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('Employimage');
        	$jarr = $ca->field( "Employimage.*,Employ.name" ) ->//确定查询两个表里的字段
        	join( "Employ on Employimage.pid=Employ.id" ) ->where("pid=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage(){//修改图片
        	$id = I('id');
        	$img = M('Employimage');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
       
        	}
//var_dump($e);die;
        	$product = D('Employimage');
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
        			$this->error("图片修改失败",U("Employ/index") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('Employimage');
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				 
        			$reImage = $productimage->where(array('id'=>$id))->save(array('imagenames'=>$v['savename'] , 'pubtimes'=>$pubtime));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("Employ/index") ;
        			}else {
        				$this->error("图片修改失败",U("Employ/index") );
        			}
        		}
        
        //	}else{
        		//$this->error("修改失败",U("Employ/updateimage") );
        //	}
        
        }
        
        public function updatevideo(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('Employvideo');
        	$jarr = $ca->where("pid=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usavevideo(){//修改图片
        	$id = I('id');
        	$img = M('Employvideo');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	}
        	$resu = $img->where("id=$id")->delete();//删除当前id的内容
        	$product = D('Employvideo');
        	date_default_timezone_set('prc');
        	$_POST['pubtime'] = date("Y-m-d",time());
        	$id = $product->data($_POST)->where("id=$id")//获取时间戳
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
        			$this->error("保存成功，11图片上传失败",U("Employ/index") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('Employvideo');
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				 
        				$reImage = $productimage->where(array('id'=>$id))->save(array('imagename'=>$v['savename']));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("Employ/index") ;
        			}else {
        				$this->error("图片过大修改失败",U("Employ/index") );
        			}
        		}
        
        	}else{
        		$this->error("修改失败",U("Employ/index") );
        	}
        
        }
public function status(){//点击审核
	     $id = I('id');
		$data['status'] = 2;//2代表已审核
		$Employ = M('Employ')->where("id = {$id}")->save($data);
	
		$lists =M('Employ')->where("id = {$id}") ->select();
		if($lists>0){
			echo 'y';
		}
		//$this->ajaxReturn($lists);

	}
	public function bdel(){
		$ids=I('ids');//获取批量删除id
		//print_r($ids);die;
		$reward=D("Employ");
		$ids=implode(' , ' ,$ids);
		if($reward->delete($ids)) {//如果获取到id执行删除
			$this->redirect("Employ/index");
		}else{
			$this->error("批量删除失败",U("Employ/index") );
		}
	
	
	
	}
    public function delete(){
        	$id = I('id');
        	 
        	$img = M('Employ');
        	$img1 = M('Employimage');
        	$img2 = M('Employvideo');
        	$img3 = M('Employwork');
        	$arr = $img1->where("pid=$id")->select();//查看应赏照片
        	$arr1 = $img2->where("pid=$id")->select();
        	$arr2 = $img3->where("pid=$id")->select();
        
        
      if($arr || $arr1||$arr2){
       echo "y";
        }else {
        	$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
        	$res = $img1->where("pid=$id")->delete();
        	$res1 = $img2->where("pid=$id")->delete();
        	$res2 = $img3->where("pid=$id")->delete();
        	if($resu&&$res){
        		$this->redirect("Employ/index");
        	}else{
        		$this->error("删除失败",U("Employ/index") );
        	}
        }
        }
        
        
        public function delete1(){
        	$id = I('id');
        	$im = M('Employvideo');
        	$arr = $im->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtimes']."/".$v['imagenames']);//删除图片
        
        	}
        
        
        	$res = $im->where("id=$id")->delete();
        	if($res){
        		 
        	}else{
        		echo "y";
        	}
        }
        
        public function delete2(){
        	$id = I('id');
        	$im = M('Employimage');
        	$arr = $im->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        
        	}
        
        
        	$res = $im->where("id=$id")->delete();
        	if($res){
        		 
        	}else{
        		echo "y";
        	}
        }
        public function delete3(){
        	$id = I('id');
        	$im = M('Employwork');
        	$res = $im->where("id=$id")->delete();
        	if($res){
        		 
        	}else{
        		echo "y";
        	}
        }
    }