//删除档期->或删除照片
// alert(document.getElementById('pic1').src);
if(document.getElementById('pic1').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pic1').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pic2').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pic2').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
if(document.getElementById('pic3').src == 'http://localhost/matouPCS/Uploads/'){
	$('#pic3').attr('src','/matouPCS/Public/Home/img/scsp.png');
}
// if(document.getElementById('pics1').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics1').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
// if(document.getElementById('pics2').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics2').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
// if(document.getElementById('pics3').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics3').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
	function pc1(num){//第一个视频文件
		if(window.confirm('确定删除？')){
			alert(num);
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
//应聘 视频封面时间
// if(document.getElementById('pic1').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics1').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
// if(document.getElementById('pic2').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics2').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
// if(document.getElementById('pic3').src == 'http://localhost/matouPCS/Uploads/'){
// 	$('#pics3').attr('src','/matouPCS/Public/Home/img/scsp.png');
// }
// function pcs1(){//第3个视频文件
// 		if(window.confirm('确定删除1？')){
// 			$('#uploads1').val('');//先将图片清楚
// 			$('#file_titles1').val('');//再将标题和连接清空
// 			$('#file_videos1').val('');
// 			$('#pics1').attr('src','/matouPCS/Public/Home/img/scsp.png');
// 		}
// 	}
// function pcs2(){//第3个视频文件
// 		if(window.confirm('确定删除2？')){
// 			$('#uploads2').val('');//先将图片清楚
// 			$('#file_titles2').val('');//再将标题和连接清空
// 			$('#file_videos2').val('');
// 			$('#pics2').attr('src','/matouPCS/Public/Home/img/scsp.png');
// 		}
// 	}
// function pcs3(){//第3个视频文件
// 		if(window.confirm('确定删除3？')){
// 			$('#uploads3').val('');//先将图片清楚
// 			$('#file_titles3').val('');//再将标题和连接清空
// 			$('#file_videos3').val('');
// 			$('#pics3').attr('src','/matouPCS/Public/Home/img/scsp.png');
// 		}
// 	}