function liuyan_xz(id,fid){//id为消息id   wid为留言id 被回复用户的id
	var content = $('#textarea').val();
	alert(content);
	$.ajax({
		url:'?s=/Home/User/xqxx_huifu/id/'+id+'/fid/'+fid+'/content/'+content,
		type:'get',
		success:function(data){
			alert(data);
		},error:function(){
			alert('no');
		}
	});
}