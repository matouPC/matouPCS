<?php
namespace Admin\Controller;
use Think\Controller;
class RewardController extends BsController {
    public function index(){
           	//$condition['status'] = $_GET['status'];
        	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询方法
        	//var_dump($condition );die;
        	$news = M('reward1');
        	$num = $news-> field( "reward1.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on reward1.uid=user.id" )->where( $condition)->count();//查询当前条件的所有数据条数
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
        	$operarr = $news -> field( "reward1.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on reward1.uid=user.id" ) ->//两个表的关联字段
        	where($condition) ->//查询内容
        	order("psid desc")->
        	limit("$start,$pageSize") ->
        	select();
        	//var_dump($pageStr);die;
        	$this->assign("pageStr",$pageStr);//返回当前分页数
        	$this->assign("operarr",$operarr);//返回当前分页数据内容
        $this->display();
        }
        /**
         *悬赏详情
         */
        public function tem(){//
        
        	$id = I('psid');//I方法自动检测POST或GET传值方式
        	$ca = M('reward2');
        	$jarr = $ca->where("pid=$id")->order("wid desc")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *悬赏详情修改提交
         */
        public function usave1(){
               	$id = I('wid');//I方法自动检测POST或GET传值方式
        
        	$product = M('reward2');
        
        	$id = $product ->where("wid = {$id}")->save($_POST);
        	$this->ajaxReturn($id);
        	//if($id){
        	//	$this->redirect('recruit/index');
        	//}else {
        	//	$this->error("修改失败",U("recruit/index") );
        //	}
        	 
        }
        
        public function add(){//添加页面
        
        	$this->display();
        }   
        
        /**
         *数据添加入表
         */
        public function save(){
        	$product = D('reward1');
        $_POST['data']=date("Y-m-d H:i:s",time());
        	$id = $product->data($_POST)
        	->add();
      
        			if($id){
        				$this->redirect("Reward/index");
        			}else {
        				$this->error("内容保存成功，图片保存失败",U("Reward/add") );
        			}
     
        
        	
        }
        
        /**
         *修改页面
         */
        public function update(){
        	$id = I('psid');
        	$ca = M('reward1');
        	$jarr = $ca->where("psid=$id")->select();//当前id所有内容
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改提交
         */
     public function usave(){//修改资料
    
        	
        	$id = I('psid');//I方法自动检测POST或GET传值方式
      
        	$product = M('reward1');
        	$reward = $product ->where("psid = {$id}")->save($_POST);
        
        			if($reward){
        				$this->redirect("Reward/index");
        			}else {
        				$this->error("修改失败",U("Reward/add") );
        			}
        	
        }
        
        public function updateimage(){//图片
        	$id = I('psid');//I方法自动检测POST或GET传值方式
        	$ca = M('reward1');
        	$jarr = $ca->where("psid=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage(){//修改图片
        	$id = I('id');
        	$img = M('reward1');
        	$arr = $img->where("psid=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	
        	}
//var_dump($e);die;
        	$product = D('reward1');
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
        			$this->error("图片修改失败1",U("reward/index") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('reward1');
        			foreach ($reArr as $v){
        				//s实现缩略图
        				//$image = new \Think\Image();
        				//打开图片保存的位置
        				//$image->open("./public/upload/".$v['savepath'].$v['savename']);
        				//修改图片的宽高   并保存到原地址
        				//$image->thumb(75, 50)->save("./public/upload/".$v['savepath']."s_".$v['savename']);
        				//	$image->thumb(150, 190,\Think\Image::IMAGE_THUMB_CENTER)->save("./Public/upload/".$v['savepath']."s_".$v['savename']);
        				// var_dump(array('id'=>$id));die;
        				$reImage = $productimage->where(array('psid'=>$id))->save(array('imagename'=>$v['savename'] , 'pubtime'=>$pubtime));
        			}
        			//根据写入表productimage表中的数据所返回的值进行判断
        			if($reImage){
        				$this->redirect("reward/index");
        			}else {
        				$this->error("图片修改失败",U("reward/index") );
        			}
        		}
        
        //	}else{
        		//$this->error("修改失败",U("reward/updateimage") );
        //	}
        
        }
        /**
         *删除
         */
        
     public function bdel(){
     	$ids=I('ids');//获取批量删除id
     //print_r($ids);die;
     	$reward=D("reward1");
     	$ids=implode(' , ' ,$ids);
    if($reward->delete($ids)) {//如果获取到id执行删除
    	$this->redirect("Reward/index");
    }else{
        		$this->error("批量删除失败",U("Reward/index") );
        	}
     	
     	
     	
     } 
        
        public function delete(){
        	$id = I('psid');
        	$im = M('reward2');
        	$img = M('reward1');
        	$arr = $im->where("pid=$id")->select();//查图片位置
        //	foreach ($arr as $v){
       // 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        //	}
        if($arr){
       echo "y";
        }else {
        	$resu = $img->where("psid=$id")->delete();//删除当前id的所有内容
        	$res = $im->where("pid=$id")->delete();
        	if($resu&&$res){
        		$this->redirect("Reward/index");
        	}else{
        		$this->error("删除失败",U("Reward/index") );
        	}
        }
        }
         
        public function delete1(){
        	$pid = I('wid');
        	$im = M('reward2');
  
        	//	foreach ($arr as $v){
        	// 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        	//	}
        

        		$res = $im->where("wid=$pid")->delete();
        		if($res){
        	
        		}else{
        				echo "y";
        		}
        	}
      
        
    }
