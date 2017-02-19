<?php
namespace Admin\Controller;
use Think\Controller;
class RecruitController extends BsController {//继承BsController类
    public function index(){
           	//$condition['status'] = $_GET['status'];
        	$condition['username'] = array('like',"%".$_POST['keywords']."%");//模糊查询方法
        	//var_dump($condition );die;
        	$news = M('recruit1');
        	$num = $news-> field( "recruit1.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on recruit1.uid=user.id" ) ->count();//查询当前条件的所有数据条数
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
        	$operarr = $news -> field( "recruit1.*,user.username" ) ->//确定查询两个表里的字段
        	join( "user on recruit1.uid=user.id" ) ->//两个表的关联字段
        	where($condition) ->//查询内容
        	order("rid desc")->
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
         *招聘详情
         */
        public function tem(){//添加页面
        
        	$id = I('rid');//I方法自动检测POST或GET传值方式
        	$ca = M('recruit2');
        	$jarr = $ca->where("pid=$id")->order("id desc")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *招聘详情修改提交
         */
        public function usave1(){
        	$id = I('id');//I方法自动检测POST或GET传值方式
        
        	$product = M('recruit2');
        
               $reward = $product ->where("id = {$id}")->save($_POST);
        	$this->ajaxReturn($reward);
        	//if($id){
        	//	$this->redirect('recruit/index');
        	//}else {
        	//	$this->error("修改失败",U("recruit/index") );
        //	}
        	 
        }
        /**
         *添加入表
         */
        public function save(){
        	$product = D('Recruit1');
        	
        	$id = $product->data($_POST)
        	->add();
        
        			if($id){
        				$this->redirect("Recruit/index") ;
        			}else {
        				$this->error("内容保存成功，图片保存失败",U("Recruit/add") );
        			}
        		}
        
   

        public function update(){//修改页面
        	$id = I('rid');//I方法自动检测POST或GET传值方式
        	$ca = M('Recruit1');
        	$jarr = $ca->where("rid=$id")->select();
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        /**
         *修改提交
         */
 public function usave(){//修改资料
    
        	
        	$id = I('rid');//I方法自动检测POST或GET传值方式
        
        	$product = M('recruit1');
        	$recruit = $product ->where("rid = {$id}")->save($_POST);
        
        			if($recruit){
        				$this->redirect("Recruit/index");
        			}else {
        				$this->error("修改失败",U("Recruit/index") );
        			}
        	
        }
        
        public function updateimage(){//图片
        	$id = I('id');//I方法自动检测POST或GET传值方式
        	$ca = M('recruit');
        	$jarr = $ca->where("id=$id")->select();//查看当前id
        	$this->assign('jarr',$jarr);
        	$this->display();
        
        }
        
        public function usaveimage(){//修改图片
        	$id = I('id');
        	$img = M('recruit');
        	$arr = $img->where("id=$id")->select();
        	foreach ($arr as $v){
        		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片
        	
        	}
//var_dump($e);die;
        	$product = D('recruit');
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
        			$this->error("图片修改失败",U("recruit/index") );
        		}else{
        			//对$re这个二维数组进行遍历，把产品的id和图片名称，写到productimage表中
        			$productimage = M('recruit');
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
        				$this->redirect("Recruit/index") ;
        			}else {
        				$this->error("图片修改失败",U("Recruit/index") );
        			}
        		}
        
        //	}else{
        		//$this->error("修改失败",U("recruit/updateimage") );
        //	}
        
        }
        /**
         *删除
         */
        public function bdel(){
        	$ids=I('ids');//获取批量删除id
        	//print_r($ids);die;
        	$recruit=D("recruit1");
        	$ids=implode(' , ' ,$ids);
        	if($recruit->delete($ids)) {//如果获取到id执行删除
        		$this->redirect("Recruit/index");
        	}else{
        		$this->error("批量删除失败",U("Recruit/index") );
        	}
        
        
        
        }
     public function delete(){
        	$id = I('rid');
        	$im = M('recruit2');
        	$img = M('recruit1');
        	$arr = $im->where("pid=$id")->select();//查图片位置
        //	foreach ($arr as $v){
       // 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        //	}
        if($arr){
       echo "y";
        }else {
        	$resu = $img->where("rid=$id")->delete();//删除当前id的所有内容
        	$res = $im->where("pid=$id")->delete();
        	if($resu&&$res){
        		$this->redirect("Recruit/index");
        	}else{
        		$this->error("资料删除失败",U("Recruit/index") );
        	}
        }
        }
         
        public function delete1(){
        	$pid = I('id');
        	$im = M('recruit2');
        
        	//	foreach ($arr as $v){
        	// 		@unlink("./Public/upload/".$v['pubtime']."/".$v['imagename']);//删除图片名
        
        	//	}
        
        
        	$res = $im->where("id=$pid")->delete();
        	if($res){
        		 
        	}else{
        		echo "y";
        	}
        }
           
        
    }
