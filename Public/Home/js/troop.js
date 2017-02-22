//----------------------------删除动态/需求--------------------------
$('.delete').click(function() {
	//			alert(123);
	$(this).parents('.s-c-3f-1f').remove();
	$(this).parents('li').remove();
});
//--------------------------全部动态下拉----------------------------------
$('.s-main-c-1f .left-dt').hover(function() {
	$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-dt img').css('transform', 'rotate(180deg)');
	$('.s-main-c-1f .left-dt ul').css('background-color', '#FF5C5D');
	$('.select-dt').stop().animate({
		height: '65px'
	}, 300);
}, function() {
	$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
	$('.s-main-c-1f .left-dt ul').css('background-color', '#999999');
	$('.select-dt').stop().animate({
		height: '0px'
	}, 300);
});

$('.s-main-c-1f .left-dt ul li a').click(function() {
	$('.left-dt p').html($(this).html());
	$('.select-dt').stop().animate({
		height: '0px'
	}, 300);
	$('.s-main-c-1f .left-dt img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-dt img').css('transform', 'rotate(0deg)');
});

//--------------------------全部需求下拉----------------------------------
$('.s-main-c-1f .left-xq').hover(function() {
	$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-xq img').css('transform', 'rotate(180deg)');
	$('.s-main-c-1f .left-xq ul').css('background-color', '#FF5C5D');
	$('.select-xq').stop().animate({
		height: '155px'
	}, 300);
}, function() {
	$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
	$('.s-main-c-1f .left-xq ul').css('background-color', '#999999');
	$('.select-xq').stop().animate({
		height: '0px'
	}, 300);
});

$('.s-main-c-1f .left-xq ul li a').click(function() {
	$('.left-xq p').html($(this).html());
	$('.select-xq').stop().animate({
		height: '0px'
	}, 300);
	$('.s-main-c-1f .left-xq img').css('transition-duration', '.5s');
	$('.s-main-c-1f .left-xq img').css('transform', 'rotate(0deg)');
});

//全部类型下拉
		$('.s-c-2f-3f .left').hover(function() {
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(180deg)');
			$('.select-lx ul').css('background-color', '#FF5C5D');
			$('.select-lx').stop().animate({
				height: '150px'
			}, 300);
		}, function() {
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(0deg)');
			$('.select-lx ul').css('background-color', '#999999');
			$('.select-lx').stop().animate({
				height: '0px'
			}, 300);
		});
		$('#select-xx').hover(function() {
			$('.select-xx').stop().animate({
				height: '75px'
			}, 300);
		}, function() {
			$('.select-xx').stop().animate({
				height: '0px'
			}, 300);
		});
		$('.select-lx ul li a').click(function() {
			$('.s-c-2f-3f .left p').html($(this).html());
			$('.select-lx').stop().animate({
				height: '0px'
			}, 300);
			$('.s-c-2f-3f .left img').css('transition-duration', '.5s');
			$('.s-c-2f-3f .left img').css('transform', 'rotate(0deg)');
		});


//----------------------------remove tab切换样式--------------------------
$('.s-main-c-1f .center a').click(function() {
	$(this).parents('.s-main-c-1f').children('.center').each(function() {
		$('a', this).removeClass('selected');
	});
	$(this).attr('class', 'selected');
});

$('.bdsz li').click(function() {
	$(this).parents('.s-main-r').children('.bdsz').each(function() {
		$('li', this).removeClass('selected-con');
	});
	$(this).attr('class', 'selected-con');
});

$('.s-c-2f-3f .right a').click(function() {
			$(this).parents('.s-c-2f-3f').children('.right').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});
//tab切换
$(document).ready(function() {
	$(".con").eq(0).show();
	$(".bdsz ul li").click(function() {
		var num = $(".bdsz ul li").index(this);
		$(".con").hide();
		$(".con").eq(num).show().slblings().hide();
	})
});

//----------------------------视频删除--------------------------
$('.delete-2').click(function() {
	$(this).parents('li').remove();
});

//图片上传预览    IE是用了滤镜。
$(function() {
	$("#pic1").click(function() {
		$("#upload1").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#upload1").on("change", function() {
			var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
			if(objUrl) {
				$("#pic1").attr("src", objUrl); //将图片路径存入src中，显示出图片
			}
		});
	});
	var src = $('.picture1').find("img").attr("src");
	if(src != '') {
		$('.na2bg').css('display', 'block');
	}
});

//建立一個可存取到該file的url
function getObjectURL(file) {
	var url = null;
	if(window.createObjectURL != undefined) { // basic
		url = window.createObjectURL(file);
	} else if(window.URL != undefined) { // mozilla(firefox)
		url = window.URL.createObjectURL(file);
	} else if(window.webkitURL != undefined) { // webkit or chrome
		url = window.webkitURL.createObjectURL(file);
	}
	return url;
}
$(function() {
	$("#pic2").click(function() {
		$("#upload2").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#upload2").on("change", function() {
			var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
			if(objUrl) {
				$("#pic2").attr("src", objUrl); //将图片路径存入src中，显示出图片
			}
		});
	});
});
$(function() {
	$("#pic3").click(function() {
		$("#upload3").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#upload3").on("change", function() {
			var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
			if(objUrl) {
				$("#pic3").attr("src", objUrl); //将图片路径存入src中，显示出图片
			}
		});
	});
});

$(function() {
	var objUrl;
	var img_html;
	$("#myFile").change(function() {
		var img_div = $(".img_div");
		var filepath = $("input[name='myFile']").val();
		for(var i = 0; i < this.files.length; i++) {
			objUrl = getObjectURL(this.files[i]);
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();

			if(ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				$(".shade").fadeIn(500);
				$(".text_span").text("图片限于bmp,png,gif,jpeg,jpg格式");
				this.value = "";
				$(".img_div").html("");
				return false;
			} else {
				img_html = "<div class='isImg'><img src='" + objUrl + "' onclick='javascript:lookBigImg(this)' style='height: 100%; width: 100%;' /><div class='na1bg' onclick='javascript:removeImg(this)'><div class='delete-1'><img src='img/delete-1.png' /></div>删除</div></div>";
				img_div.append(img_html);
			}
		}
		var file_size = 0;
		var all_size = 0;
		for(j = 0; j < this.files.length; j++) {
			file_size = this.files[j].size;
			all_size = all_size + this.files[j].size;
			var size = all_size / 1024;
			if(size > 500) {
				$(".shade").fadeIn(500);
				$(".text_span").text("上传的图片大小不能超过100k！");
				this.value = "";
				$(".img_div").html("");
				return false;
			}
		}
		return true;
	});

	function getObjectURL(file) {
		var url = null;
		if(window.createObjectURL != undefined) { // basic
			url = window.createObjectURL(file);
		} else if(window.URL != undefined) { // mozilla(firefox)
			url = window.URL.createObjectURL(file);
		} else if(window.webkitURL != undefined) { // webkit or chrome
			url = window.webkitURL.createObjectURL(file);
		}
		//console.log(url);
		return url;
	}
});

function removeImg(r) {
	$(r).parent().remove();
}

function lookBigImg(b) {
	$(".shadeImg").fadeIn(500);
	$(".showImg").attr("src", $(b).attr("src"))
}

function closeShade() {
	$(".shade").fadeOut(500);
}

function closeShadeImg() {
	$(".shadeImg").fadeOut(500);
}

//----------------------------图片放大--------------------------
$(function() {
	$('.boxer').boxer({
		labels: {
			close: "关闭",
			count: "/",
			next: "下一个",
			previous: "上一个"
		}
	});
});