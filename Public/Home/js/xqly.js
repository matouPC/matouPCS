/**
*  闲置的留言与回复
*/
function liuyan_xz(id,fid){//id为消息id   wid为留言id 被回复用户的id
	var content = $('#textarea').val();
	//alert(content);
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
function liuyan_xz1(id,fid){//id为消息id   wid为留言id 被回复用户的id
	var content = $('#liuyan').val();
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
/**
*	求购的留言与回复
*/
function liuyan_qg(id,fid){//id为消息id   wid为留言id 被回复用户的id
	var content = $('#textarea_qg').val();
	// alert(content);
	$.ajax({
		url:'?s=/Home/User/qgxx_huifu/id/'+id+'/fid/'+fid+'/content/'+content,
		type:'get',
		success:function(data){
			alert(data);
		},error:function(){
			alert('no');
		}
	});
}
function liuyan_qg1(id,fid){//id为消息id   wid为留言id 被回复用户的id
	var content = $('#liuyan_qg').val();
	//alert(content);
	$.ajax({
		url:'?s=/Home/User/qgxx_huifu/id/'+id+'/fid/'+fid+'/content/'+content,
		type:'get',
		success:function(data){
			alert(data);
		},error:function(){
			alert('no');
		}
	});
}


