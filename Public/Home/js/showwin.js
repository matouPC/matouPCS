//		------------------------------------------------------------------------顶部下拉菜单------------------------------------------------------------------------
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
//		------------------------------------------------------------------------登陆弹窗------------------------------------------------------------------------
$(function() {
	shortMessagraxc();
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
		$('.alert').css('display', 'block');
		$('.alert-black').css('display', 'block');
	});
	$('#login').click(function() {
		$('.alert').css('display', 'block');
		$('.alert-black').css('display', 'block');
	});
	$('.alert-close').click(function() {
		$('.alert').css('display', 'none');
		$('.alert-black').css('display', 'none');
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

	var auto = 1;
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
	$("#find").click(function() {
		//								alert("充值")
		$("#spdlb").fadeIn(350).show();
		$(".show-bg").fadeIn(350).show();
		$("#find").css("background", "#ff5c5d");
	});
	$("#spdl-okb").click(function() {

	});
	$("#spdl-escb").click(function() {
		$(".spdlsb").hide();
		$(".show-bg").hide();
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
		$("#spdlb").hide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
	$("#tjbtn").click(function() {
		$("#spdlb").hide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
});

$(function() {
	$("#findc").click(function() {
		//								alert("充值")
		$("#spdlc").fadeIn(350).show();
		$(".show-bg").fadeIn(350).show();
		//				$("#findc").css("background", "#ff5c5d");
	});
	$("#spdl-okb").click(function() {

	});
	$("#spdl-escc").click(function() {
		$(".spdlsb").hide();
		$(".show-bg").hide();
	});
});
$(function() {
	$("#fbp1").css("border", "2px solid #ff5c5d");
	$(".rhidec").click(function() {
		$("#spdlc").hide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
	$("#tjbtnc").click(function() {
		$("#spdlc").hide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
});

$(function() {
	//$("#cca").val("aaa");
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
//		-----------------------------------------------------填写页面-------------------------------------------------------------

//		--------------------------------------------------填写日期组件-----------------------------------------------------------
//$('#dd').calendar({
//			trigger: '#dt',
//			zIndex: 999,
//			format: 'yyyy-mm-dd',
//			onSelected: function(view, date, data) {
//				console.log('event: onSelected')
//			},
//			onClose: function(view, date, data) {
//				console.log('event: onClose')
//				console.log('view:' + view)
//				console.log('date:' + date)
//				console.log('data:' + (data || 'None'));
//			}
//		});
//		--------------------------------------------------填写悬赏Add-----------------------------------------------------------
$(function() {
	var i = 0;
	$("#hfx3-1").click(function() {
		$(".txfg1-c2-1").hide();
		$(".txfg1").css("height", "auto");
		$(".txfg1").css("border-bottom", "0px");
		$(".addmation").append('<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">悬赏职位</p><p class="cf"></p></div><div class="litr"><select class="w95s"><option selected="selected">请选择职位</option><option>灯光</option></select> <input class="w209" disabled="disabled" type="text" placeholder="填写职业名称" /><div class="lidel" id="lidel"><img src="img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr"><div class="w36"><input type="radio" checked="checked" name="r' + i + '" />男</div><div class="w36"><input type="radio" name="r' + i + '" />女</div><div class="w41"><input type="radio" name="r' + i + '" />不限</div></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><input type="number" class="w75s" />&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">赏&nbsp;金</p><p class="cf"></p></div><div class="litr"><input class="w75t" type="text" />-<input class="w75t" type="text" />&nbsp;k/天</div><div class="cf"></div></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">报销路费</p><p class="cf"></p></div><div class="litr"><div class="w36"><input class="" name="radio' + i + '" type="radio" checked="checked" />是</div><div class="w36"><input name="radio' + i + '" class="" type="radio" />否</div></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">具体要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
			$(".lidel").on("click", function() {
				$(this).parent().parent().parent().parent().parent().remove();
				if($(".s-main-l").css("height") == "524px") {
					//							alert("605")
					$(".txfg1-c2-1").show();
					$(".txfg1").css("border-bottom", "1px solid #999");
				}
				if($('.addmation').has('li').length > 0) {
					$('.txfg1-c2-1').css('display', 'none');
				} else {
					$('.txfg1-c2-1').css('display', 'block');
				}
			});
		i++;
	});
});
$(function() {
	//				拿到点击按钮
	$("#tap").click(function() {
		//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
		$("html,body").animate({
			scrollTop: $("#ta").offset().top
		}, 600);
		return false;
	});
});

//		--------------------------------------------------图片上传Add-----------------------------------------------------------
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
	$("#pic4").click(function() {
		$("#upload4").click(); //隐藏了input:file样式后，点击头像就可以本地上传
		$("#upload4").on("change", function() {
			var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
			if(objUrl) {
				$("#pic4").attr("src", objUrl); //将图片路径存入src中，显示出图片
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

//		--------------------------------------------------填写应聘Add-----------------------------------------------------------
$(function() {
	var i = 0;
	$("#hfx3-1").click(function() {
		$(".txfg1-c2-1").hide();
		$(".txfg1").css("height", "auto");
		$(".txfg1").css("border-bottom", "0px");
		$(".addmation1").append('<li><div class="delete-gzjl"><img src="img/delete-2.png" /></div><ul class="tyint"><li><div class="mhdsj"><div class="litl"><p class="litx">*</p><p class="litc">活动时间</p><p class="cf"></p></div><div class="litr"><input class="w150t" type="text" name="" id="dt' + i + '" value="" />&nbsp;到&nbsp;<input class="w150t" type="text" name="" id="da' + i + '" value="" /><div class="liti1"><img src="img/jxrq.png" /></div><div class="liti2"><img src="img/jxrq.png" /></div></div><div id="dd' + i + '" style="left: 14px !important; top:42px !important"></div><div id="db' + i + '" style="left: 182px !important; top:42px !important"></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">所在公司</p><p class="cf"></p></div><div class="litr"><input class="w200t" type="text" /></div><div class="cf"></div></div></li><li><div class="memail"><div class="litl"><p class="litx">*</p><p class="litc">担任职位</p><p class="cf"></p></div><div class="litr"><input class="w200t" type="text" /></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作描述</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
			$(".delete-gzjl").on("click", function() {
				$(this).parent().remove();
				if($(".s-main-l").css("height") == "524px") {
					//							alert("605")
					$(".txfg1-c2-1").show();
					$(".txfg1").css("border-bottom", "1px solid #999");
				}
				if($('.addmation1').has('li').length > 0) {
					$('.txfg1-c2-1').css('display', 'none');
				} else {
					$('.txfg1-c2-1').css('display', 'block');
				}
			});
		//-------------------------------日期----------------------------------------
		$('#dd' + i).calendar({
			trigger: '#dt' + i,
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
		$('#db' + i).calendar({
			trigger: '#da' + i,
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
		i++;
	});

});

//		档期新增
var dq = 0;
$('#hfx3-3').click(function() {
	$('#tc .txfg1-c2-1').hide();
	$('.addmation-dq').append('<li><input id="da' + dq + '" type="text" readonly="readonly" placeholder="请选择时间" /><select><option selected="selected">请选择</option><option>上午</option><option>中午</option><option>下午</option><option>晚上</option></select><div class="delete-2"><img src="img/delete-2.png" /></div><div id="db' + dq + '" style="left: 0 !important; top:30px !important"></div></li>');
	//		删除档期
	$('.delete-2').click(function() {
		$(this).parents('li').remove();
		if($('#tc .addmation-dq').has('li').length > 0) {
			$('#tc .txfg1-c2-1').css('display', 'none');
		} else {
			$('#tc .txfg1-c2-1').css('display', 'block');
		}
	});
	$('#db' + dq).calendar({
		trigger: '#da' + dq,
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
	dq++;
});

//		H-S-CONTENT滑动跳转
$("#tab-jbxx").click(function() {
	$("html,body").animate({
		scrollTop: $("#jbxx").offset().top
	}, 600);
	return false;
});
$("#tap").click(function() {
	//					$("html,body").animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1200);
	$("html,body").animate({
		scrollTop: $("#ta").offset().top
	}, 600);
	return false;
});
$("#tab-zpzp").click(function() {
	$("html,body").animate({
		scrollTop: $("#tb").offset().top
	}, 600);
	return false;
});
$("#tab-spzp").click(function() {
	$("html,body").animate({
		scrollTop: $("#tc").offset().top
	}, 600);
	return false;
});

//		--------------------------------------------------填写招聘Add-----------------------------------------------------------

$(function() {
	var i = 0;
	$("#hfx3-1").click(function() {
		$(".txfg1-c2-1").hide();
		$(".txfg1").css("height", "auto");
		$(".txfg1").css("border-bottom", "0px");
		$(".addmation").append('<li><ul class="tyint"><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">招聘职位</p><p class="cf"></p></div> <div class="litr"><select style="width: 132px; height: 30px;" class="w95s"><option></option><option>灯光</option></select> <input class="w209" disabled="disabled" type="text" placeholder="填写职业名称" /><div class="lidel" id="lidel"><img src="img/delete-2.png" /></div></div><div class="cf"></div></li><li><div class="msex"><div class="litl"><p class="litx">*</p><p class="litc">性&nbsp;别</p><p class="cf"></p></div><div class="litr"><div class="w36"><input name="sex' + i + '" class="" type="radio" /> 男</div><div class="w36"><input class="" name="sex' + i + '" type="radio" /> 女</div><div class="w41"><input class="" name="sex' + i + '" type="radio" /> 不限</div></div><div class="cf"></div></div></li><li><div class="mage"><div class="litl"><p class="litx">*</p><p class="litc">年&nbsp;龄</p><p class="cf"></p></div><div class="litr"><input type="number" class="w75s" />&nbsp;岁 </div><div class="cf"></div></div></li><li><div class="mprofession"><div class="litl"><p class="litx">*</p><p class="litc">工作经验</p><p class="cf"></p></div><div class="litr"><select style="width: 132px; height: 30px;" class="w95s"><option></option><option>灯光</option></select>&nbsp;年 </div><div class="cf"></div></li><li><div class="mxz"><div class="litl"><p class="litx">*</p><p class="litc">薪&nbsp;资</p><p class="cf"></p></div><div class="litr"><input class="w75t" type="number" />-<input class="w75t" type="number" />&nbsp;k/月</div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">工作内容</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div><div class="cf"></div></div></li><li style="height: auto!important;"><div class="mzwjs" style="height: auto!important;"><div class="litl"><p class="litx">*</p><p class="litc">岗位要求</p><p class="cf"></p></div><div class="litr" style="height: auto!important;"><textarea class="w340" type="text"></textarea></div><div class="cf"></div></div></li><li id="mhllx"></li></ul></li>'),
			$(".lidel").on("click", function() {
				$(this).parent().parent().parent().parent().parent().remove();
				if($(".s-main-l").css("height") == "388px") {
					//							alert("605")
					$(".txfg1-c2-1").show();
					$(".txfg1").css("border-bottom", "1px solid #999");
				}
			});
		i++;
	});
});

//		--------------------------------------------------详情页面-----------------------------------------------------------

//		--------------------------------------------------详情求购-----------------------------------------------------------

//		--------------------------------------------------查看号码-----------------------------------------------------------
//查看号码
$(function() {
	$("#sp").click(function() {
		alert("充值")
		$("#spdl").show();
	});
	$("#spdl-ok").click(function() {
		$("#spdl-p").text("联系电话：1566666666");
		$("#spdl .spdl-c").html('<span>支付成功<br>3秒后自动关闭</span>');
		if($("#spdl .spdl-c span").text() == "支付成功3秒后自动关闭") {
			//					$("#id").value = "5"
			//					c = c-1
			setTimeout(function() {
				$(".spdl").hide();
			}, 3000);
		}
	});
	$("#spdl-esc").click(function() {
		$(".spdl").hide();
	});
});
//报名
$("#bt-p").click(function() {
	$(".xqbta a").css("font-size", "12px");
	$(".xqbta").css("background", "#ccc");
	$(".xqbta a").text("已有10人报名");
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
		$("#spdlb").hide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
	$("#tjbtn").click(function() {
		$("#spdlb").fhide();
		$(".show-bg").hide();
		$("#find").css("background", "#bfbfbf");
		$("#find").css("color", "#fff");
	});
});

//		--------------------------------------------------消息页面-----------------------------------------------------------
//需求
$('#xqxx-lb').hover(function() {
	$('.xqxx-lb ul').stop().animate({
		height: '150px'
	}, 300);
}, function() {
	$('.xqxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});
$('.xqxx-lb ul li').click(function() {
	$('#xqxx-lb p').html($(this).html());
	$('.xqxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});
//部队
$('#bdxx-lb').hover(function() {
	$('.bdxx-lb ul').stop().animate({
		height: '75px'
	}, 300);
}, function() {
	$('.bdxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});
$('.bdxx-lb ul li').click(function() {
	$('#bdxx-lb p').html($(this).html());
	$('.bdxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});
//商铺
$('#spxx-lb').hover(function() {
	$('.spxx-lb ul').stop().animate({
		height: '75px'
	}, 300);
}, function() {
	$('.spxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});
$('.spxx-lb ul li').click(function() {
	$('#spxx-lb p').html($(this).html());
	$('.spxx-lb ul').stop().animate({
		height: '0px'
	}, 300);
});


// $('#xx_01').on('click', function() {
	function xx_01(id){
		if($('#xx_01'+id).hasClass('act')) {
			$('#xx_01'+id).removeClass('act');
			$("#xx_01"+id+" img").css('transform', 'rotate(0deg)');
			$('#xx_01'+id+' span').html('查看详情');
			$('#yhmc'+id+' dl').stop().animate({
				height: '0px'
			}, 1000);
		} else {
			$('#xx_01'+id).addClass('act');
			$("#xx_01"+id+" img").css('transform', 'rotate(180deg)');
			$('#xx_01'+id+' span').html('收起');
			$('#yhmc'+id+' dl').stop().animate({
				height: '430px'
			}, 1000);
		}
	}
		
	// });

$('.spxx_hf').click(function(){
		$(this).parents('li').children('.no').show();
	});
	
	function tel(){
		var tel = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="xqxx"><p class="xqxx_01_01">活动时间：2016-12-10</p><p class="xqxx_01_02">活动地点：郑州</p><p class="xqxx_01_03">悬赏内容：摄影、主持人</p></div><div class="yhmc"><div id="xl_01" class="yhmc_01"><img src="img/yhmc.png"><p class="yhmc_01_01">用户名称</p><p class="yhmc_01_01">1年经验</p><p class="yhmc_01_02"></p><p class="yhmc_01_03">回复</p><p class="yhmc_01_04">电聊</p><a class="yhmc_01_07">查看号码</a><div class="clear"></div><div class="yhmc-date"><span>2012-12-12</span></div></div><div class="clearfloat"></div></div></li>';
		$('.s-main-b ul').append(tel);	
		$(".xs1").click(function(event) {
			$(this).parents('li').remove();
			event.stopPropagation();
		});
		xiala();
		return false;
	}
	
	function xiala(){
		$(".xll1").hover(function() {
			$(this).children('.xs1').show();
		},function(){
			$(this).children('.xs1').hide();
		});
	}
	
	function reject(){
		var reject = '<li><div class="xialai"><span class="xll1"><p class="xs1">删除</p></span></div><div class="xqxx"><p class="xqxx_01_01">活动时间：2016-12-10</p><p class="xqxx_01_02">活动地点：郑州</p><p class="xqxx_01_03">悬赏内容：摄影、主持人</p></div><div class="yhmc"><div id="xl_01" class="yhmc_01"><img src="img/yhmc.png"><p class="yhmc_01_01">用户名称</p><p class="yhmc_01_01">1年经验</p><p class="yhmc_01_02"></p><p class="yhmc_01_03">回复</p><p class="yhmc_01_06">拒绝</p><div class="clear"></div><div class="yhmc-date"><span>2012-12-12</span></div></div><div class="clearfloat"></div></div></li>';
		$('.s-main-b ul').append(reject);
		$(".xs1").click(function(event) {
			$(this).parents('li').remove();
			event.stopPropagation();
		});
		xiala();
	}

//		--------------------------------------------------部队消息-----------------------------------------------------------

$(".xs1").click(function() {
	$(this).parents('li').remove();
});
$("#man-top").click(function() {
	$(".na-top").toggle();
});
$(document).ready(function() {
	xiala();
});

//		--------------------------------------------------详情页面-----------------------------------------------------------
//已完成
function change() {
	var mark = document.getElementById('btn').innerText;
	if(mark == '已出售') {
		document.getElementById('btn').innerText = "未出售";
	} else {
		document.getElementById('btn').innerText = "已出售";
	}
}

function changes() {
	var mark = document.getElementById('btn_01').innerText;
	if(mark == '已出售') {
		document.getElementById('btn_01').innerText = "未出售";
	} else {
		document.getElementById('btn_01').innerText = "已出售";
	}
}
//收藏
function changec() {
	var mark = document.getElementById('btn_c').innerText;
	if(mark == '收藏') {
		document.getElementById('btn_c').innerText = "取消收藏";
	} else {
		document.getElementById('btn_c').innerText = "收藏";
	};
};
//		--------------------------------------------------详情页面-----------------------------------------------------------
//		--------------------------------------------------详情页面-----------------------------------------------------------
//		--------------------------------------------------详情页面-----------------------------------------------------------
//		--------------------------------------------------详情页面-----------------------------------------------------------
//		--------------------------------------------------详情页面-----------------------------------------------------------