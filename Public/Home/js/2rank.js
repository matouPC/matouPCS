//-----------------------------------tab切换-----------------------------------------
$(document).ready(function() {
	$(".con").eq(0).show();
	$(".s-f2l-c1 ul li a").click(function() {
		var num = $(".s-f2l-c1 ul li a").index(this);
		$(".con").hide();
		$(".con").eq(num).show().slblings().hide();
	})
});

//----------------------------remove tab切换样式--------------------------
$('.s-c-2f a').click(function() {
	$(this).parents('div').children('.s-f2l-c1').each(function() {
		$('a', this).removeClass('selected-tab');
	});
	$(this).attr('class', 'selected-tab');
});

$('.px .hot').click(function() {
	$('.px .hot').css('background-color', '#ff5c5d');
	$('.px .new').css('background-color', '#999999');
})
$('.px .new').click(function() {
	$('.px .new').css('background-color', '#ff5c5d');
	$('.px .hot').css('background-color', '#999999');
})

//------------------------------------------筛选--------------------------------------
$(function() {
	//选中filter下的所有a标签，为其添加hover方法，该方法有两个参数，分别是鼠标移上和移开所执行的函数。
	$("#filter a").hover(
		function() {
			$(this).addClass("seling");
		},
		function() {
			$(this).removeClass("seling");
		}
	);

	//选中filter下所有的dt标签，并且为dt标签后面的第一个dd标签下的a标签添加样式seled。(感叹jquery的强大)
	$("#filter dt+dd a").attr("class", "seled");
	/*注意：这儿应该是设置(attr)样式，而不是添加样式(addClass)，
	                                                     不然后面通过$("#filter a[class='seled']")访问不到class样式为seled的a标签。*/

	//为filter下的所有a标签添加单击事件
	$("#filter a").click(function() {
		$(this).parents("dl").children("dd").each(function() {
			//下面三种方式效果相同（第三种写法的内部就是调用了find()函数，所以，第二、三种方法是等价的。）
			//$(this).children("div").children("a").removeClass("seled");
			//$(this).find("a").removeClass("seled");
			$('a', this).removeClass("seled");
		});

		$(this).attr("class", "seled");

		//				alert(RetSelecteds()); //返回选中结果
	});
	//返回选中结果
});

function RetSelecteds() {
	var result = "";
	$("#filter a[class='seled']").each(function() {
		result += $(this).html() + "\n";
	});
	return result;
}

//			筛选清空
$("#xz-price input").click(function() {
	$("#xz-price dd div a").removeClass("seled");
});
$("#xz-price dd .gray").click(function() {
	$("#xz-price input").val("");
});
$("#xz-dq input").click(function() {
	$("#xz-dq dd div a").removeClass("seled");
});
$("#xz-dq dd div").click(function() {
	$("#xz-dq input").val("");
});
$("#xz-date input").click(function() {
	$("#xz-date dd div a").removeClass("seled");
});
$("#xz-date dd .gray").click(function() {
	$("#xz-date input").val("");
});

//	关注/取消
$(function() {
	$(".tj_01_03").click(function() {
		if($(this).html() == '关注') {
			$(this).html("取消关注");
			$(this).css("background-color", "transparent");
			$(this).css({
				'border': '1px solid #ccc'
			});
			$(this).css("color", "#999");
		} else {
			$(this).html("关注");
			$(this).css("background-color", "#ff5c5d");
			$(this).css({
				'border': '0px'
			});
			$(this).css("color", "white");
		}
	});
});

//发布需求
$(function(){
	$('#fbxq').click(function(){
		$('body').css('overflow','hidden');
		$('.show-bg').fadeIn();
		$('.fbxq').fadeIn();
	});
	$('.fbxq-close').click(function(){
		$('body').css('overflow','auto');
		$('.show-bg').fadeOut();
		$('.fbxq').fadeOut();
	});
});





