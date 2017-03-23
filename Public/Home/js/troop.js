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
		height: '200px'
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

//作品样式切换
$('.s-c-4f-4f .zp a').click(function() {
	$(this).parents('.s-c-4f-4f').children('.zp').each(function() {
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

$('.s-c-2f-3f .fs').click(function() {
	$('.con1').show();
	$('.con2').hide();
	$(this).addClass('select-gzfs');
	$('.s-c-2f-3f .gz').removeClass('select-gzfs');
});

$('.s-c-2f-3f .gz').click(function() {
	$('.con2').show();
	$('.con1').hide();
	$(this).addClass('select-gzfs');
	$('.s-c-2f-3f .fs').removeClass('select-gzfs');
});

//----------------------------关注/取消--------------------------
$('.gz-qx').click(function() {
	if($(this).html() == '关注') {
		$(this).html('取消关注');
		$(this).addClass('gzqx');
	} else {
		$(this).html('关注');
		$(this).removeClass('gzqx');
	}
});

$('#gz-qx').click(function() {
	if($(this).html() == '关注') {
		$(this).html('取消关注');
		$(this).addClass('dygzqx');
	} else {
		$(this).html('关注');
		$(this).removeClass('dygzqx');
	}
});

//头部背景
var t;
window.onload = function() {
	t = setInterval(function() {
		$('#large-header img').fadeToggle();
	}, 5000);
}

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
	var a = 0;
	var fi = '';
	$("#myFile").change(function() {
		
		a += 1;
		var input = document.getElementById("myFile");
		var files = document.getElementById("myFile").files;
			for(var i=0; i< files.length; i++){
				alert(input.files[i].name);
				alert(i);
			}
		var img_div = $(".img_div");
		var filepath = $("input[name='myFile[]']").val();
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
				img_html = "<div class='isImg'><img src='" + objUrl + "' id='xx"+a+"'  onclick='javascript:lookBigImg(this)' style='height: 100%; width: 100%;' /><div class='na1bg' onclick='javascript:removeImg(this)'><div class='delete-1'><img src='/matouPCS/Public/Home/img/delete-1.png' /></div>删除</div></div>";
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

//----------------------------作品切换--------------------------
$(document).ready(function() {
	$(".con").eq(0).show();
	$(".s-c-4f-4f .zp a").click(function() {
		var num = $(".s-c-4f-4f .zp a").index(this);
		$(".con").hide();
		$(".con").eq(num).show().slblings().hide();
	})
});

//----------------------------作品轮播--------------------------
var rnum = $(".mkeUl ul li").size();
var cnum = 0;
$(".mke_ns2").html(rnum);
$(".mkeUl ul").width(rnum * 264);
$(".mkeRbtn").click(function() {
	cnum++;
	if(cnum > (rnum - 1)) {
		cnum = 0
	}
	$(".mkeUl ul").animate({
		"left": -cnum * 264
	}, 300);
	$(".mke_ns1").html(cnum + 1);
});
$(".mkeLbtn").click(function() {
	cnum--;
	if(cnum < 0) {
		cnum = rnum - 1;
	}
	$(".mkeUl ul").animate({
		"left": -cnum * 264
	}, 300);
	$(".mke_ns1").html(cnum + 1);
});
$('.mkeFocus').hover(function() {
	$('.mkeLbtn').css('background-image', 'url(img/kelBtn.png)');
	$('.mkeRbtn').css('background-image', 'url(img/kerBtn.png)');
}, function() {
	$('.mkeLbtn').css('background-image', 'url(img/kelBtn1.png)');
	$('.mkeRbtn').css('background-image', 'url(img/kerBtn1.png)');
});

function autoPlay() {
	cnum++;
	if(cnum > (rnum - 1)) {
		cnum = 0
	}
	$(".mkeUl ul").animate({
		"left": -cnum * 264
	}, 300);
	$(".mke_ns1").html(cnum + 1);
}
var Timer = setInterval(autoPlay, 4000);
$(".mkeFocus").hover(function() {
	clearInterval(Timer)
}, function() {
	Timer = setInterval(autoPlay, 4000);
});

//-----------------------------用户中心页面------------------------------------------------
$('#bdsjh').click(function() {
	$('.show-bg').fadeIn();
	$('.alert-tel').fadeIn();
	$('body').css('overflow','hidden');
});

$('.alert-tel-close').click(function() {
	$('.show-bg').fadeOut();
	$('.alert-tel').fadeOut();
	$('body').css('overflow','auto');
});

//----------------------------编辑用户名--------------------------
$(function() {
	$('#bianji').click(function() {
		$('.alert-black-bj').fadeIn();
		$('body').css('overflow','hidden');
	});
	$('#close-bj').click(function() {
		$('.alert-black-bj').fadeOut();
		$('body').css('overflow','auto');
	});

	function bj() {
		$('#name').val($('#bj-name').val());
		$('.alert-black-bj').fadeOut();
	}
	$('#bj-ok').click(function() {
		bj();
		$('.bjcg').fadeIn();
		setTimeout(function() {
			$('.bjcg').fadeOut();
		}, 1000);
	});
	$('#bj-cancel').click(function() {
		$('.alert-black-bj').fadeOut();
	});
});

//select下拉框
$(function() {
	$("#dropdown p").click(function() {
		var ul = $("#dropdown ul");
		if(ul.css("display") == "none") {
			ul.slideDown("fast");
		} else {
			ul.slideUp("fast");
		}
	});
	$("#dropdown ul li a").click(function() {
		var txt = $(this).text();
		$("#dropdown p").html(txt);
		var value = $(this).attr("rel");
		$("#dropdown ul").hide();
	});
});

//绑定手机号
$('#bdsjh').click(function() {
	$(this).css('display', 'none');
	$('#tel').css('display', 'block');
});

//绑定QQ
$('#bdQQ').click(function() {
	if($(this).html() == '绑定QQ') {
		$(this).html('解除绑定');
		$(this).css('background-color', '#FF5C5D');
	} else {
		$(this).html('绑定QQ');
		$(this).css('background-color', '#999999');
		$(this).hover(function() {
			$(this).css('background-color', '#FF5C5D');
		}, function() {
			$(this).css('background-color', '#999999');
		});
	}
});

//绑定微信
$('#bdwc').click(function() {
	if($(this).html() == '绑定微信') {
		$(this).html('解除绑定');
		$(this).css('background-color', '#FF5C5D');
	} else {
		$(this).html('绑定微信');
		$(this).css('background-color', '#999999');
		$(this).hover(function() {
			$(this).css('background-color', '#FF5C5D');
		}, function() {
			$(this).css('background-color', '#999999');
		});
	}
});

//描点
$('#xsdt').click(function() {
	$("html,body").animate({
		scrollTop: $('#xsdt-a').offset().top
	}, 1000);
})
$('#ysdt').click(function() {
	$("html,body").animate({
		scrollTop: $('#ysdt-a').offset().top
	}, 1000);
})
$('#zpdt').click(function() {
	$("html,body").animate({
		scrollTop: $('#zpdt-a').offset().top
	}, 1000);
})
$('#ypdt').click(function() {
	$("html,body").animate({
		scrollTop: $('#ypdt-a').offset().top
	}, 1000);
})
$('#tzsc').click(function() {
	$("html,body").animate({
		scrollTop: $('#tzsc-a').offset().top
	}, 1000);
})
$('#mtbd').click(function() {
	$("html,body").animate({
		scrollTop: $('#mtbd-a').offset().top
	}, 1000);
})
$('#mtsc').click(function() {
	$("html,body").animate({
		scrollTop: $('#mtsc-a').offset().top
	}, 1000);
})

//收藏夹页面

//----------------------------remove tab切换样式--------------------------
		$('.s-c-1f-scj .left button').click(function() {
			$(this).parents('.s-c-1f-scj').children('.left').each(function() {
				$('button', this).removeClass('selected');
			});
			$(this).attr('class', 'selected');
		});

//----------------------------收藏需求类别--------------------------
		$('#scxq').click(function(){
			$('#scxq-lb').css('display','block');
			$('#bmxq-lb').css('display','none');
			$('#sp-lb').css('display','none');
		});
		$('#bmxq').click(function(){
			$('#scxq-lb').css('display','none');
			$('#bmxq-lb').css('display','block');
			$('#sp-lb').css('display','none');
		});
		$('#sp').click(function(){
			$('#scxq-lb').css('display','none');
			$('#bmxq-lb').css('display','none');
			$('#sp-lb').css('display','block');
		});
		
		$('#scxq-lb').hover(function(){
			$('.scxq-lb ul').stop().animate({
				height: '100px'
			}, 300);
		},function(){
			$('.scxq-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		$('.scxq-lb ul li').click(function(){
			$('#scxq-lb p').html($(this).html());
			$('.scxq-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('#bmxq-lb').hover(function(){
			$('.bmxq-lb ul').stop().animate({
				height: '100px'
			}, 300);
		},function(){
			$('.bmxq-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		$('.bmxq-lb ul li').click(function(){
			$('#bmxq-lb p').html($(this).html());
			$('.bmxq-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		
		$('#sp-lb').hover(function(){
			$('.sp-lb ul').stop().animate({
				height: '100px'
			}, 300);
		},function(){
			$('.sp-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		$('.sp-lb ul li').click(function(){
			$('#sp-lb p').html($(this).html());
			$('.sp-lb ul').stop().animate({
				height: '0px'
			}, 300);
		});
		
//----------------------------切换页面--------------------------
		$(document).ready(function() {
			$(".con").eq(0).show();
			$(".s-c-1f-scj .left button").click(function() {
				var num = $(".s-c-1f-scj .left button").index(this);
				$(".con").hide();
				$(".con").eq(num).show().slblings().hide();
			});
		});
		
		//----------------------------工作室下拉--------------------------	
		$('.gzs').hover(function() {
			$('.gzs-xl').css('border', '1px');
			$('.gzs-xl').css('border-style', 'solid');
			$('.gzs-xl').css('border-color', '#FF5C5D');
			$('.gzs-xl').stop().animate({
				height: '100px'
			}, 300);
		}, function() {
			$('.gzs-xl').css('border', '0px');
			$('.gzs-xl').stop().animate({
				height: '0px'
			}, 300);
		});

		$('.gzs-xl span').click(function() {
			$('.gzs p').html($(this).html());
			$('.gzs-xl').css('border', '0px');
			$('.gzs-xl').stop().animate({
				height: '0px'
			}, 300);
		});
		
//----------------------------remove tab切换样式--------------------------
		$('.parents .left a').click(function() {
			$(this).parents('.parents').children('.left').each(function() {
				$('a', this).removeClass('selected');
			});
			$(this).addClass('selected');
		});
		//----------------------------上一步/下一步--------------------------
		$('#jbxx').click(function() {
			$('.con1').css('display', 'none');
			$('.con2').css('display', 'block');
			$('.bjtx').css('display','none');
			$('#con-jbxx').removeClass('selected-con');
			$('#con-tjzp').attr('class', 'selected-con');
		});

		$('#syb').click(function() {
			$('.con1').css('display', 'block');
			$('.con2').css('display', 'none');
			$('.bjtx').css('display','block');
			$('#con-tjzp').removeClass('selected-con');
			$('#con-jbxx').attr('class', 'selected-con');
		});

		$('#zpxx').click(function() {
			$('.list-b').attr('src', 'img/list-2-red.png');
		});