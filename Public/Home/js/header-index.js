//城市定位
$('#xz-city').leoweather({
	format: '{城市}'
});

//		------------------------------------------------------------------------登陆弹窗------------------------------------------------------------------------
$(function() {
	shortMessagraxc(); //��ȡ��֤��
	// ---------------------------------------------       �ж���֤��
	$('#yzm').blur(function() {
		if($('#yzm').val() == 1111) {
			$('.alert-true').css('display', 'block');
		} else {
			$('.alert-false').css('display', 'block');
		}
	})
	$('#yzm').click(function() {
			$('.alert-true').css('display', 'none');
			$('.alert-false').css('display', 'none');
		})
		// ---------------------------------------------       �ж�������Ƿ�Ϊ��
		//       ------------ ��¼
	$('.content-3f button').click(function() {
		if($('#login-userName').val() == '') {
			$('.login-userName p').css('display', 'block');
		}
		if($('#login-passWord').val() == '') {
			$('.login-passWord p').css('display', 'block');
		}
	})
	$('#login-userName').click(function() {
		$('.login-userName p').css('display', 'none');
	})
	$('#login-passWord').click(function() {
			$('.login-passWord p').css('display', 'none');
		})
		//        ---------------------ע��
	$('.register-6f button').click(function() {
		if($('#register-userName').val() == '') {
			$('.register-userName p').css('display', 'block');
		}
		if($('#yzm').val() == '') {
			$('.alert-false').css('display', 'block');
		}
		if($('#register-passWord').val() == '') {
			$('.register-passWord p').css('display', 'block');
		}
		if($('#register-passWord').val() != $('#again').val() || $('#again').val() == '') {
			$('.register-again p').css('display', 'block');
		}
	})
	$('#register-userName').click(function() {
		$('.register-userName p').css('display', 'none');
	})
	$('#register-passWord').click(function() {
		$('.register-passWord p').css('display', 'none');
	})
	$('#again').click(function() {
		$('.register-again p').css('display', 'none');
	})
})
var checkPhone = function(a) {
	var patrn = /^((?:13|15|18|14|17)\d{9}|0(?:10|2\d|[3-9]\d{2})[1-9]\d{6,7})$/;
	if(!patrn.exec(a)) return false;
	return true;
};
$(function() {
		$(window).on("load", function() {
			$("#loading").fadeOut();
		})
		$("#tip .pack a").on("click", function() {
			$("#tip").fadeOut()
			$("#tip .pack p").html("")
			$("#submit").css({
				"pointer-events": "auto"
			});
			return false;
		})

		function alerths(str) {
			$("#tip").fadeIn()
			$("#tip .pack p").html(str)
			return false;
		}
	})
	/*yanzhengma*/
function shortMessagraxc() {
	$('#btn_yzm').click(function() {
		var count = 60;
		var countdown = setInterval(CountDown, 1000);

		function CountDown() {
			$("#btn_yzm").attr("disabled", true);
			$("#btn_yzm").val("" + count + "s");
			if(count == 0) {
				$("#btn_yzm").val("重新获取").removeAttr("disabled");
				clearInterval(countdown);
			}
			count--;
		}
	})
};
$(function() {
	$('#login-alert').click(function() {
		$('body').css('overflow','hidden');
		$('.alert').fadeIn();
		$('.alert-black').fadeIn();
	});
	$('.alert-close').click(function() {
		$('body').css('overflow','auto');
		$('.alert').fadeOut();
		$('.alert-black').fadeOut();
	});
	$('.tabbox .content-a ul').width(290 * $('.tabbox .content-a li').length + 'px');
	$(".tabbox .tab a").click(function() {
		$(this).addClass('on').siblings().removeClass('on');
		var index = $(this).index();
		number = index;
		var distance = -290 * index;
		$('.tabbox .content-a ul').stop().animate({
			left: distance
		});
	});

	var auto = 1; //����1���Զ��л������������������Զ��л�
	if(auto == 1) {
		var number = 0;
		var maxNumber = $('.tabbox .tab a').length;

		function autotab() {
			number++;
			number == maxNumber ? number = 0 : number;
			$('.tabbox .tab a:eq(' + number + ')').addClass('on').siblings().removeClass('on');
			var distance = -290 * number;
			$('.tabbox .content-a ul').stop().animate({
				left: distance
			});
		}
	}
});
$(function() {
	$(".action").click(function(){
		$('.action').css('background-color','#ff5c5d');
	});
	$("#find").click(function() {
		//								alert("充值")
		$('body').css('overflow','hidden');
		$("#spdlb").fadeIn();
		$(".show-bg").fadeIn();
		$("#find").css("background-color", "#ff5c5d");
	});
	$("#spdl-okb").click(function() {

	});
	$("#spdl-escb").click(function() {
		$(".spdlsb").fadeOut();
		$(".show-bg").fadeOut();
	});
});
$(function() {
	$("#fbp1").css("border", "2px solid #ff5c5d");
	$("#fbp2").click(function() {
			$("#fbp2").css("border", "2px solid #ff5c5d");
			$("#fbp1").css("border", "2px solid  #f2f2f2");
		}),
		$("#fbp1").click(function() {
			$("#fbp1").css("border", "2px solid #ff5c5d");
			$("#fbp2").css("border", "2px solid  #f2f2f2");
		});
	$(".rhideb").click(function() {
		photo_upload_close();
		$('body').css('overflow','auto');
		$("#spdlb").fadeOut();
		$(".show-bg").fadeOut();
		$("#find").css("background-color", "#999");
		$("#find").css("color", "#fff");
		$('#find').hover(function(){
			$(this).css('background-color','#ff5c5d');
		},function(){
			$(this).css('background-color','#999');
		});
	});
	$("#tjbtn").click(function() {
		photo_upload_close()
		$('body').css('overflow','auto');
		$("#spdlb").fadeOut();
		$(".show-bg").fadeOut();
		$("#find").css("background-color", "#999");
		$("#find").css("color", "#fff");
		$('#find').hover(function(){
			$(this).css('background-color','#ff5c5d');
		},function(){
			$(this).css('background-color','#999');
		});
	});
});


//		------------------------------------------------------------------------下拉开始------------------------------------------------------------------------
$('#select-yfb').hover(function() {
	$('#select-yfb a img').css('transition-duration', '.5s');
	$('#select-yfb a img').css('transform', 'rotate(180deg)');
	$('.select-yfb').stop().animate({
		height: '150px'
	}, 300);
}, function() {
	$('#select-yfb a img').css('transition-duration', '.5s');
	$('#select-yfb a img').css('transform', 'rotate(0deg)');
	$('.select-yfb').stop().animate({
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

$('#select-sp').hover(function() {
	$('#select-sp a img').css('transition-duration', '.5s');
	$('#select-sp a img').css('transform', 'rotate(180deg)');
	$('.select-sp').stop().animate({
		height: '50px'
	}, 300);
}, function() {
	$('#select-sp a img').css('transition-duration', '.5s');
	$('#select-sp a img').css('transform', 'rotate(0deg)');
	$('.select-sp').stop().animate({
		height: '0px'
	}, 300);
});


//上传图片开始

var upload_total = 9; //最多上传数量
var uploader = new plupload.Uploader({ //创建实例的构造方法
	runtimes: 'gears,html5,html4,silverlight,flash', //上传插件初始化选用那种方式的优先级顺序
	browse_button: ['btn', 'btn2'], // 上传按钮
	url: "ajax.php", //远程上传地址
	flash_swf_url: 'plupload/Moxie.swf', //flash文件地址
	silverlight_xap_url: 'plupload/Moxie.xap', //silverlight文件地址
	filters: {
		max_file_size: '10mb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
		mime_types: [ //允许文件上传类型
			{
				title: "files",
				extensions: "jpg,png,gif,jpeg"
			}
		]
	},
	multi_selection: true, //true:ctrl多文件上传, false 单文件上传
	init: {
		FilesAdded: function(up, files) { //文件上传前
			var length_has_upload = $("#ul_pics").children("li").length;
			if(files.length >= upload_total) { //超过上传总数量则隐藏
				$("#local_upload").hide();
			}
			var li = '';
			plupload.each(files, function(file) { //遍历文件
				if(length_has_upload <= upload_total) {
					li += "<li class='li_upload' id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
				}
				length_has_upload++;
			});
			$("#ul_pics").prepend(li);
			uploader.start();
		},
		UploadProgress: function(up, file) { //上传中，显示进度条
			var percent = file.percent;
			$("#" + file.id).find('.bar').css({
				"width": percent + "%"
			});
			$("#" + file.id).find(".percent").text(percent + "%");
		},
		FileUploaded: function(up, file, info) { //文件上传成功的时候触发
			showPhotoUploadBox($('#btn'));
			var uploaded_length = $(".img_common").length;
			if(uploaded_length <= upload_total) {
				var data = eval("(" + info.response + ")"); //解析返回的json数据
				$("#" + file.id).html("<input type='hidden'name='pic[]' value='" + data.pic + "'/><input type='hidden'name='pic_name[]' value='" + data.name + "'/>\n\
                <img class='img_common' src='" + data.pic + "'/><span class='picbg'></span><a class='pic_close' onclick=delPic('" + data.pic + "','" + file.id + "')></a>");
			}
			showUploadBtn();
		},
		Error: function(up, err) { //上传出错的时候触发
			alert(err.message);
		}
	}
});
uploader.init();

function delPic(pic, file_id) { //删除图片 参数1图片路径  参数2 随机数
	$.post("del.php", {
		pic: pic
	}, function(data) {
		$("#" + file_id).remove();
		showUploadBtn();
		  setCookie('tu',tu);
		  Close();
	})
}

function showUploadBtn() { //是否显示上传按钮
	var uploaded_length = $(".img_common").length;
	$("#uploaded_length").text(uploaded_length);
	var other_length = (upload_total - uploaded_length) > 0 ? upload_total - uploaded_length : 0;
	$("#upload_other").text(other_length);
	var uploaded_length = $(".img_common").length;
	if(uploaded_length >= upload_total) {
		$("#local_upload").hide();
	} else {
		$("#local_upload").show();
	}
}

function showPhotoUploadBox(obj) { //显示上传弹出层
	var left = obj.offset().left-15;
	var top = obj.offset().top + 28;
	$("#photo_upload_box_outside").css({
		"left": left,
		"top": top
	}).show();
}


function photo_upload_close() {
	$("#photo_upload_box_outside").fadeOut(500, function() {
		$(".li_upload").remove();
	})
}

$('.show-bg').click(function(){
	$("#photo_upload_box_outside").fadeOut(500, function() {
		$(".li_upload").remove();
	});
});

//上传图片结束


// 绑定表情
		$('.adds').SinaEmotion($('.text-face'));
		// 测试本地解析
		function out() {
			var inputText = $('.text-face').val();
			$('#info-show ul').append(reply(AnalyticEmotion(inputText)));
		}

		var html;

		function reply(content) {
			html = '<li>';
			html += '<div class="head-face">';
			html += '<img src="images/1.jpg" / >';
			html += '</div>';
			html += '<div class="reply-cont">';
			html += '<p class="username">小小红色飞机</p>';
			html += '<p class="comment-body">' + content + '</p>';
			html += '<p class="comment-footer">2016年10月5日　回复　点赞54　转发12</p>';
			html += '</div>';
			html += '</li>';
			return html;
		}
		
		function Close() {
		    $('.aui_state_box').remove();
		}

		function setCookie(cookieName, cookieValue, cookieExpires) {
		    try {
		        cookieName = cookieName.trim();
		        cookieValue = escape(cookieValue);
		        var nowDate = new Date();
		        nowDate.setTime(new Date().getTime() + 7 * 24 * 60 * 60 * 1000);
		        var cookieExpiresTime = nowDate.toGMTString();
		        if (cookieExpires !== undefined && cookieExpires !== "" && cookieExpires > 0) {
		            nowDate.setTime(new Date().getTime() + cookieExpires);
		            cookieExpiresTime = nowDate.toGMTString();
		        }
		        document.cookie = cookieName + "=" + cookieValue
		            + "; expires=" + cookieExpiresTime;
		    } catch (e) {
		    }
		}
		function getCookie(cookieName) {
		    try {
		        cookieName = cookieName.trim();
		        var cookieValue = document.cookie;
		        var cookieStartAt = cookieValue.indexOf("" + cookieName + "=");
		        if (cookieStartAt === -1) {
		            cookieValue = "";
		        } else {
		            cookieStartAt = cookieValue.indexOf("=", cookieStartAt) + 1;
		            var cookieEndAt = cookieValue.indexOf(";", cookieStartAt);
		            if (cookieEndAt === -1) {
		                cookieEndAt = cookieValue.length;
		            }
		            cookieValue = unescape(cookieValue.substring(cookieStartAt, cookieEndAt));
		        }
		        return cookieValue;
		    } catch (e) {
		    }
		    return "";
		}
	
		
		
		