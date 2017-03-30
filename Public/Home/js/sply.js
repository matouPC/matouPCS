function sphf(id,uid){//id为帖子id  uid为留言用户的id
	// alert(123);
	var content = $('#textarea').val();
	$.ajax({
		url:'?s=/Home/User/spxx_hf/id/'+id+'/uid/'+uid+'/content/'+content,
		type:'get',
		success:function(data){
			alert(data);
		},error:function(){
			alert('no');
		}
	});
}

function sphf1(id,uid){//id为帖子id  uid为留言用户的id
	// alert(123);
	var content = $('#liuyan').val();
	$.ajax({
		url:'?s=/Home/User/spxx_hf/id/'+id+'/uid/'+uid+'/content/'+content,
		type:'get',
		success:function(data){
			alert(data);
		},error:function(){
			alert('no');
		}
	});
}