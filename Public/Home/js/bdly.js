function bdly_hf(id,uid){//帖子id  回复的用户的id
	var content = $('#textarea').val()
	// alert();
	$.ajax({
		url:"?s=/Home/User/bdxx_hf/id/"+id+"/uid/"+uid+"/content/"+content,
		type:"get",
		success:function(data){
			alert(data);
		},error:function(){
			alert('ajax请求失败');
		}
	});
	// alert(1);
}