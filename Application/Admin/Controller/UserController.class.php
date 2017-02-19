<?php
namespace Admin\Controller;
use Think\Controller;
class userController extends BsController {
    public function index(){//吕本霄
           	//$condition['status'] = $_GET['status'];
        	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询条件
        	//var_dump($condition );die;
        	$news = M('user');//实例化表
        	$num = $news->where( $condition)->count();//查询数据条数
        	///echo $news->getLastSql();
        	//var_dump($num );die;
        	$pageSize = 5;//每页数据条数
        	$page = new \Think\Page($num,$pageSize);//实例化new类继承分页
        	$start = $page->firstRow;
        	$page->rollPage=5;//显示页数
        	//对分页的结果，指定的出现那些内容
        	$page->setConfig('next', "下一页");
        	$page->setConfig('prev', "上一页");
        	$page->setConfig('first', "首页");
        	$page->lastSuffix=false;
        	$page->setConfig("last", "尾页");
        	$page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$num.' 条/页 共 %TOTAL_ROW% 条)');
        	$pageStr = $page->show();//显示页数
        	$operarr = $news->where( $condition)->order("id desc")
        	->limit("$start,$pageSize")//查询当前条件的数据
        	->select();
        	//var_dump($operarr );die;
        	$this->assign("pageStr",$pageStr);//返回当前页数位置
        	$this->assign("operarr",$operarr);//返回当前页数数据
        $this->display();
        }
   
        public function add(){//添加页面
        
        	$this->display();
        }   
     
        /**
         *添加入表
         */
  public function save(){
        	$product = D('user');
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
        			$this->error("内容保存成功，图片上传失败",U("user/add") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('user');
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
        				$this->redirect("User/index");
        			}else {
        				$this->error("内容保存成功，图片保存失败",U("User/index"));
        			}
        		}
        
        	}else{
        		$this->error("添加失败",U("User/add"));
        	}
        }
        
        

        public function update(){//修改
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('user');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改提交
         */
        public function usave(){//修改用户资料
    
        	
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('user');
        	$user = $product ->where("id = {$id}")->save($_POST);
        
        			if($user){
        				$this->redirect("user/index") ;
        			}else {
        				$this->error("用户资料修改失败",U("user/index") );
        			}
        	
        }
        
        public function updateimage(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('user');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage(){//修改图片
        	$id = I('id');
        	$img = M('user');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	
        	}
//var_dump($e);die;
        	$product = D('user');
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
        			$this->error("图片修改失败",U("user/updateimage") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('user');
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
        				$this->redirect("User/index");
        			}else {
        				$this->error("图片修改失败",U("User/index") );
        			}
        		}
        
        //	}else{
        		//$this->error("修改失败",U("User/updateimage") );
        //	}
        
        }
        /**
         *删除
         */
        
        

        public function bdel(){
        	$ids=I('ids');//获取批量删除id
        	//print_r($ids);die;
        	$reward=D("user");
        	$ids=implode(' , ' ,$ids);
        	if($reward->delete($ids)) {//如果获取到id执行删除
        		$this->redirect("User/index");
        	}else{
        		$this->error("批量删除失败",U("User/index") );
        	}
        
        
        
        }
        public function delete(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$img = M('user');

        	$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
        	if($resu){
        		$this->redirect("user/index");
        	}else{
        		$this->error("删除失败",U("user/index") );
        	}
        }
         
        
        
    }

