<?php
namespace Admin\Controller;
use Think\Controller;
class ViwepagerController extends BsController {
    public function index(){
        // echo 123;die;	
    	$ca = M('Viwepager');
    	$jarr = $ca->select();//查轮播图
    	$this->assign('jarr',$jarr);
   
        $this->display();
    }
    
 

    	/**
    	 *轮播图添加
    	 */
    	public function add(){
    	 
    		$this->display();
    	}
    	/**
    	 *轮播图添加入表
    	 */
    	public function save(){
    		$product = D('Viwepager');
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
    				$this->error("内容保存成功，图片上传失败",U("Viwepager/add") );
    			}else{
    				//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
    				$productimage = M('Viwepager');
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
    					$this->redirect("Viwepager/index");
    				}else {
    					$this->error("内容保存成功，图片保存失败",U("Viwepager/add") );
    				}
    			}
    
    		}else{
    			$this->error("添加失败",U("Viwepager/index"));
    		}
    	}
  
    	/**
    	 *轮播图修改
    	 */
    	public function update(){
    		$id = I('id');
    	$ca = M('Viwepager');
    	$jarr = $ca->where("id=$id")->select();
    	$this->assign('jarr',$jarr);
    	$this->display();
    
    	}
    	/**
    	 *轮播图修改提交
    	 */
public function usave(){
        	$id = I('id');
        	$img = M('Viwepager');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	}
        	$resu = $img->where("id=$id")->delete();//删除当前id的内容
        	$product = D('Viwepager');
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
        			$this->error("保存成功，图片上传失败",U("Viwepager/index")  );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('Viwepager');
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
        				$this->redirect("Viwepager/index") ;
        			}else {
        				$this->error("内容修改成功，图片修改失败",U("Viwepager/index") );
        			}
        		}
        
        	}else{
        		$this->error("修改失败",U("Viwepager/index") );
        	}
        
        }
    	/**
    	 *轮播图删除
    	 */
    	public function delete(){
    		$id = I('id');
    	
    		$img = M('Viwepager');
    		$arr = $img->where("id=$id")->select();//查图片位置
    		foreach ($arr as $v){
    			@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
    		
    		}
    
    		$resu = $img->where("id=$id")->delete();//删除当前id的所有内容
    		if($resu){
    			$this->redirect("Viwepager/index");
    		}else{
    			$this->error("轮播图删除失败",U("Viwepager/index") );
    		}
    	}
    	
    	 
    }
    ?>
