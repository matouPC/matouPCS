<include file="Public/header"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/think/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">部队中心管理</span></div>
        </div>
        <div class="result-wrap">
  <volist name="jarr" id="v">
             <form action="__APP__/admin/Bdzx/usave1" method="post" id="myform{$v.id}" name="myform" enctype="multipart/form-data">
          
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe014;</i>个人动态详情</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tr>
                                <th width="15%"><i class="require-red">*</i>商品名称：</th>
                                <td><input type="text" id="" value="{$v.name}" size="20" name="name" class="common-text">
                                <input type="hidden" name="id" value="{$v.id}"/>
                                <input type="hidden" name="pid" value="{$v.pid}"/>
                                   <input type="hidden" name="usid" value="{$v.usid}"/></td>
                            </tr>
                              
                                <tr>
                                    <th><i class="require-red">*</i>价格：</th>
                                    <td><input type="text" id="" value="{$v.price}" size="10" name="price" class="common-text"></td>
                                </tr>
                               
                                           <tr>
     
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>商品介绍：</th>
                                    <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10">{$v.content}</textarea></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="hidden" value="" name="file">
                                        <a id="submit" onclick="tj({$v.id})"  class="btn btn-primary btn6 mr10">修改</a>
                                             <a class="btn btn-primary btn6 mr10"  onclick="sc({$v.id})">删除</a>
                                             <a class="btn btn-primary btn6 mr10"  href="__APP__/Admin/Bdzx/comimage?id={$v.id}">商品图片管理</a>
                                   <a href="__APP__/Admin/Bdzx"><input type="button" value="返回上一级"  class="btn btn6"></a>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </form>
              </volist> 
  <script type="text/javascript" src="__PUBLIC__/Home/js/jquery-1.8.3.min.js"></script>            
 <script type="text/javascript">
 function tj(id){
	// alert(id);
	 $.ajax({
	                 cache: true,
	                 type: "POST",
	                 url:"/matouPCS/index.php/Admin/Bdzx/usave1/",
	                 data:$('#myform'+id).serialize(),// 你的formid
	                 async: false,
	                 error: function(request) {
	                     alert("Connection error");
	                 },
	                 success: function(data) {
	                	 alert("ok");
	                	 window.location.reload(true);//重新加载当前文挡
	                 }
	             });
	 }       
 
 
 
 function sc(id){
//	alert(id);
	if(confirm( '是否确定删除这条信息！')==true){
       	$.ajax({

       		url:"/matouPCS/index.php/Admin/Bdzx/delete1/id/"+id,
     
       		type:"get",
       		success:function(data){
       			//alert(data);
       			if(data == 'y'){
       			
       				alert('删除失败');
    		
    			}else{
    				window.location.reload(true);
    			}
       		},error:function(){
       			alert('no');
       		}
       	});
    	}else{
    		return false;
    	}
    };
    
</script>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>