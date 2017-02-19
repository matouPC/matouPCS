//删除档期->或删除照片
if(document.getElementById('pic1').src == 'http://localhost/matouPCS/?s=/Home/User/user_ys'){
	$('#pic1').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pic2').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pic2').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pic3').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pic3').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
	function pc1(num){//第一个视频文件
		if(window.confirm('确定删除？')){
			$('#upload1').val('');//先将图片清楚
			$('#file_title1').val('');//再将标题和连接清空
			$('#file_video1').val('');
			$('#pic1').attr('src','/matouPCS/Public/Home/img/scsp.png');
		}
	}
	function pc2(num){//第二个视频文件
		if(window.confirm('确定删除？')){
			$('#upload2').val('');//先将图片清楚
			$('#file_title2').val('');//再将标题和连接清空
			$('#file_video2').val('');
			$('#pic2').attr('src','/matouPCS/Public/Home/img/scsp.png');
		}
	}
	function pc3(num){//第3个视频文件
		if(window.confirm('确定删除？')){
			$('#upload3').val('');//先将图片清楚
			$('#file_title3').val('');//再将标题和连接清空
			$('#file_video3').val('');
			$('#pic3').attr('src','/matouPCS/Public/Home/img/scsp.png');
		}
	}
	$('.dq').click(function(){
		if(window.confirm('确定删除？')){
			$(this).parents('li').remove();
			if($('#tc .addmation-dq').has('li').length > 0) {
				$('#tc .txfg1-c2-1').css('display', 'none');
			} else {
				$('#tc .txfg1-c2-1').css('display', 'block');
			}
		}
	});
/***********应聘*日期选择器*************/
$('#dd'+i).calendar({
	trigger: '#dt'+i,
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});
$('#db'+i).calendar({
	trigger: '#da'+i,
	zIndex: 999,
	format: 'yyyy-mm-dd',
	onSelected: function(view, date, data) {
		console.log('event: onSelected')
	},
	onClose: function(view, date, data) {
		console.log('event: onClose')
		console.log('view:' + view)
		console.log('date:' + date)
		console.log('data:' + (data || 'None'));
	}
});