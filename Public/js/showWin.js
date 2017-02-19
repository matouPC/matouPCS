//navtitle弹窗
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