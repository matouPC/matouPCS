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
		//$("#findc").css("background", "#ff5c5d");
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
	document.getElementById("cca").value = "aaa";
	
	$("#cca").click(function(){
		$("#cca").css("border", "2px solid #ff5c5d");
		$("#ccb").css("border", "2px solid #ccc");
		$("#cca").css("color","#FF5C5D");
		$("#ccb").css("color","#ccc");
		window.location.href = '?s=/Home/Xsdt/txxs/xs/0';//如果为个人名义就传过去一个xs为0
	});
	$("#ccb").click(function(){
		$("#ccb").css("border", "2px solid #ff5c5d");
		$("#cca").css("border", "2px solid #ccc");
		$("#cca").css("color","#ccc");
		$("#ccb").css("color","#FF5C5D");
		window.location.href = '?s=/Home/Xsdt/txxs/xs/0';//如果为部队名义就传过去一个xs为1
	});
});