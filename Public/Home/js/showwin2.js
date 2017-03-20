

$(function() {
	$("#findc").click(function() {
		//								alert("充值")
		$("#spdlc").fadeIn();
		$(".show-bg").fadeIn();
		$('body').css('overflow','hidden');
		return false;
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
		$('body').css('overflow','auto');
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



