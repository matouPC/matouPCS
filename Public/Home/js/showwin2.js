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
				$("#btn_yzm").val("���»�ȡ").removeAttr("disabled");
				clearInterval(countdown);
			}
			count--;
		}
	})
};
$(function() {
	$('#login-alert').click(function() {
		$('body').css('overflow', 'hidden');
		$('.alert').fadeIn();
		$('.alert-black').fadeIn();
	});
	$('.alert-close').click(function() {
		$('body').css('overflow', 'auto');
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
	$(".action").click(function() {
		$('.action').css('background-color', '#ff5c5d');
	});
	$("#find").click(function() {
		//								alert("充值")
		$('body').css('overflow', 'hidden');
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
		$('body').css('overflow', 'auto');
		$("#spdlb").fadeOut();
		$(".show-bg").fadeOut();
		$("#find").css("background-color", "#999");
		$("#find").css("color", "#fff");
		$('#find').hover(function() {
			$(this).css('background-color', '#ff5c5d');
		}, function() {
			$(this).css('background-color', '#999');
		});
	});
	$("#tjbtn").click(function() {
		$('body').css('overflow', 'auto');
		$("#spdlb").fadeOut();
		$(".show-bg").fadeOut();
		$("#find").css("background-color", "#999");
		$("#find").css("color", "#fff");
		$('#find').hover(function() {
			$(this).css('background-color', '#ff5c5d');
		}, function() {
			$(this).css('background-color', '#999');
		});
	});
});

$(function() {
	$("#findc").click(function() {
		//								alert("充值")
		$("#spdlc").fadeIn();
		$(".show-bg").fadeIn();
		//				$("#findc").css("background", "#ff5c5d");
	});
	$("#spdl-okb").click(function() {

	});
	$("#spdl-escc").click(function() {
		$(".spdlsb").fadeOut();
		$(".show-bg").fadeOut();
	});
});
$(function() {
	$("#fbp1").css("border", "2px solid #ff5c5d");
	$(".rhidec").click(function() {
		$("#spdlc").fadeOut();
		$(".show-bg").fadeOut();
	});
	$("#tjbtnc").click(function() {
		$("#spdlc").fadeOut();
		$(".show-bg").fadeOut();
	});
});

$(function() {
	$("#cca").val("aaa");
	//	document.getElementById("cca").value = "aaa";

	$("#cca").click(function() {
		$("#cca").css("border", "2px solid #ff5c5d");
		$("#ccb").css("border", "2px solid #ccc");
		$("#cca").css("color", "#FF5C5D");
		$("#ccb").css("color", "#ccc");
	});
	$("#ccb").click(function() {
		$("#ccb").css("border", "2px solid #ff5c5d");
		$("#cca").css("border", "2px solid #ccc");
		$("#cca").css("color", "#ccc");
		$("#ccb").css("color", "#FF5C5D");
	});
});

//领取码头币开始
$('#lqmtb').click(function() {
	$('body').css('overflow', 'hidden');
	$('.gold-black').fadeIn();
});
//卡牌翻转
var turn = function(target, time, opts) {
	$(document).one('click', '#vertical a', function() {
		$('.info', this).stop().css('background', 'url(img/gold-sl.png)'); //当前卡牌选中
		//				$('.fanpai').html('45455');
		$('.fanpai-xz').html('您已连续领取n次，再接再厉领取更多码头币');
		$('.fanpai-xz').css('height', '40px');
		$('.info', this).css('height', '42px');
		$('.info', this).css('padding-top', '110px');
		$('.info', this).html('恭喜您成功领取到' + $('.info', this).html());
		$('#vertical a img').stop().animate(opts[0], time, function() {
			$(this).hide().next().show();
			$(this).next().animate(opts[1], time);
		});
	});
}
var verticalOpts = [{
	'width': 0
}, {
	'width': '104px'
}];
turn($('#vertical'), 100, verticalOpts);

//close
$('#gold-close').click(function() {
	$('body').css('overflow', 'auto');
	$('.gold-black').fadeOut();
});
//领取码头币结束

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

//----------------------------省略--------------------------
$(function() {
	//限制字符个数
	$(".text72").each(function() {
		var maxwidth = 72;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text36").each(function() {
		var maxwidth = 36;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text69").each(function() {
		var maxwidth = 69;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text90").each(function() {
		var maxwidth = 90;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text48").each(function() {
		var maxwidth = 48;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text30").each(function() {
		var maxwidth = 30;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
	$(".text49").each(function() {
		var maxwidth = 49;
		if($(this).text().length > maxwidth) {
			$(this).text($(this).text().substring(0, maxwidth));
			$(this).html($(this).html() + '…');
		}
	});
});

//----------------------------点赞--------------------------
$('.dz-qx span').click(function() {
	if($(this).hasClass('icon-dz')) {
		$(this).removeClass('icon-dz');
		$(this).addClass('icon-dz-kz');
	} else {
		$(this).removeClass('icon-dz-kz');
		$(this).addClass('icon-dz');
	}
});

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

