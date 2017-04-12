

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
	if($('#uuid').val() != ''){
		$.ajax({
			url:'?s=/Home/User/mtb_lq',
			type:'get',
			dataType:'json',
			success:function(data){
				if(data == 1){
					alert('明天再来');
				}else{
					$('#mts').append('<div class="gold-white"><div class="gold-title"><img src="/matouPCS/public/Home/img/gold-title.png" /></div><div id="vertical" class="brand vertical"><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold2.png" /><div class="info">'+data[0]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold1.png" /><div class="info">'+data[1]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold2.png" /><div class="info">'+data[2]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold1.png" /><div class="info">'+data[3]+'个码头币</div></a><div class="fanpai"><div class="fanpai-xz"><img src="/matouPCS/public/Home/img/fanpai.png" /></div><p>（查看码头币规则）</p></div><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold1.png" /><div class="info">'+data[4]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold2.png" /><div class="info">'+data[5]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold1.png" /><div class="info">'+data[6]+'个码头币</div></a><a href="javascript://"><img alt="" src="/matouPCS/public/Home/img/gold2.png" /><div class="info">'+data[7]+'个码头币</div></a><div class="clear"></div><div class="gold-close" id="xs"><button id="gold-close" onclick="clonse_mtb()">关闭</button></div></div><div class="clear"></div></div>');
					// alert(data);
					$('body').css('overflow', 'hidden');
					$('.gold-black').fadeIn();
				}
				

			},error:function(){
				alert('no');
			}
		});
	}else{
		alert('请先登录');
	}
});

//卡牌翻转
var turn = function(target, time, opts) {
	$(document).one('click', '#vertical a', function() {
		var strmtb = $('.info', this).html();
		$('.info', this).stop().css('background', 'url(img/gold-sl.png)'); //当前卡牌选中
		//				$('.fanpai').html('45455');
		$('.fanpai-xz').html('您已连续领取n次，再接再厉领取更多码头币');
		$('.fanpai-xz').css('height', '40px');
		$('.info', this).css('height', '42px');
		$('.info', this).css('padding-top', '110px');
		$('.info', this).html('恭喜您成功领取到' + $('.info', this).html());
		$.ajax({
			url:'?s=/Home/User/mtbcc/mtbsl/'+strmtb.substr(0,2),
			type:'get',
			success:function(data){
				alert(data);
				$('#vertical a img').stop().animate(opts[0], time, function() {
					$(this).hide().next().show();
					$(this).next().animate(opts[1], time);
				});
			},error:function(){
				alert('no');
			}
		});
		// alert();
		
	});
}
var verticalOpts = [{
	'width': 0
}, {
	'width': '104px'
}];
turn($('#vertical'), 100, verticalOpts);

//close 关闭领取码头币的窗口
function clonse_mtb(){
	$('body').css('overflow', 'auto');
	$('#mts').fadeOut();
}
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



