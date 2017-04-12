//添加商品1
		var i = 0;
		$("#hfx3-1").click(function() {
			i+=1;
			$(".p12").hide();
			$(".dianji").hide();
			$(".s-c-2f-2f-f ul").append('<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="yszp'+i+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div></li>'),
				$(".refcc").on("click", function() {
					if($(".s-c-3f").css("height") == "10px") {
						$(".p12").show();
					}
					$(this).parent().parent().remove();
				});
			$(".photobt").change(function(e) {
				var that = this;
				//				console.log($(that).parent());
				var $os = $(that).siblings(".click1");
				//				console.log($os.length);
				var files = this.files;
				var img = new Image();
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onload = function(e) {
					var mb = (e.total / 1024) / 1024;
					if(mb >= 2) {
						alert('文件大小大于2M');
						return;
					}
					img.src = this.result;
//					img.style.width = "100%";
					
					$os.css({
//						width: "100%"
//						height: "100%"
					});
					$os.html("");
					$os.append($(img));
				}
				if($os.html() != "") {} else {
					var $de = $(that).siblings(".remm");
					var $bg = $(that).siblings("")
					$(".addimg").hide();
					$de.show();
					$(".photobg2").show();
					
				}
				var $im = $(that).siblings("img");
				var addimg = document.getElementsByClassName("click1 img").innerHTML;
				window.localStorage.setItem("ai", addimg);
				//				console.log(window.localStorage.setItem("ai", addimg));
				$(".remm").click(function() {
					$(this).hide();
					var that = this;
					var $os = $(that).siblings(".click1");
					$($os).parent().parent().parent()	.remove();
					if($(".txfg1-a").css("height") > "110px"){
						alert("1");
						$(".txfg1-c2-1-a").css("display","block");
						$(".txfg1-a").css("height","126px")
					}else{
						alert("2");
					}
				});
				return(that);
			});
		});
		
		
		
		
		//添加商品2
		$("#hfx3-2").click(function() {
			alert(123);
			$(".p12").hide();
			$(".txfg2 ul").append('<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div></li>'),
				$(".refcc").on("click", function() {
					if($(".s-c-3f").css("height") == "10px") {
						$(".p12").show();
					}
					$(this).parent().parent().remove();
				});
			$(".photobt").change(function(e) {
				var that = this;
				//				console.log($(that).parent());
				var $os = $(that).siblings(".click1");
				//				console.log($os.length);
				var files = this.files;
				var img = new Image();
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onload = function(e) {
					var mb = (e.total / 1024) / 1024;
					if(mb >= 2) {
						alert('文件大小大于2M');
						return;
					}
					img.src = this.result;
//					img.style.width = "100%";
					
					$os.css({
//						width: "100%"
//						height: "100%"
					});
					$os.html("");
					$os.append($(img));
				}
				if($os.html() != "") {} else {
					var $de = $(that).siblings(".remm");
					var $bg = $(that).siblings("")
					$(".addimg").hide();
					$de.show();
					$(".photobg2").show();
					
				}
				var $im = $(that).siblings("img");
				var addimg = document.getElementsByClassName("click1 img").innerHTML;
				window.localStorage.setItem("ai", addimg);
				//				console.log(window.localStorage.setItem("ai", addimg));
				$(".remm").click(function() {
					$(this).hide();
					var that = this;
					var $os = $(that).siblings(".click1");
					$($os).parent().parent().parent()	.remove();
					if($(".txfg1-a").css("height") > "110px"){
						alert("1");
						$(".txfg1-c2-1-a").css("display","block");
						$(".txfg1-a").css("height","126px")
					}else{
						alert("2");
					}
				});
				return(that);
			});
		});
//添加商品3 -->已发布 应赏
		// var yps = $('.dm{$i}');
			function userYp(){
			var yp = document.getElementById("lists").getElementsByTagName("li").length;
			yp+=1;
			$(".dianji").hide();
			$(".s-c-2f-2f-f ul").append('<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="ypimg'+yp+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div></li>'),
				$(".refcc").on("click", function() {
					if($(".s-c-3f").css("height") == "10px") {
						$(".p12").show();
					}
					$(this).parent().parent().remove();
				});
			$(".photobt").change(function(e) {
				var that = this;
				
				var $os = $(that).siblings(".click1");
				//				console.log($os.length);
				var files = this.files;
				// console.log(that);
				var img = new Image();
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onload = function(e) {
					var mb = (e.total / 1024) / 1024;
					if(mb >= 2) {
						alert('文件大小大于2M');
						return;
					}
					img.src = this.result;
//					img.style.width = "100%";
					
					$os.css({
//						width: "100%"
//						height: "100%"
					});
					$os.html("");
					$os.append($(img));
				}
				if($os.html() != "") {} else {
					var $de = $(that).siblings(".remm");
					var $bg = $(that).siblings("")
					$(".addimg").hide();
					$de.show();
					$(".photobg2").show();
					
				}
				var $im = $(that).siblings("img");
				var addimg = document.getElementsByClassName("click1 img").innerHTML;
				window.localStorage.setItem("ai", addimg);
				//				console.log(window.localStorage.setItem("ai", addimg));
				$(".remm").click(function() {
					$(this).hide();
					var that = this;
					var $os = $(that).siblings(".click1");
					$($os).parent().parent().parent()	.remove();
					if($(".txfg1-a").css("height") > "110px"){
						//alert("1");
						$(".txfg1-c2-1-a").css("display","block");
						$(".txfg1-a").css("height","126px")
					}else{
						alert("2");
					}
				});
				return(that);
			});
			}

		// });
//自动加载自己已经发布的作品 
	
	// function userYs(){
	// 	var a = 0;
	// 	$.ajax({
	// 		url:"?s=/Home/User/user_ys_zp",
	// 		type:"post",
	// 		dataType:"json",
	// 		success:function(data){
	// 			var xxoo = '';
	// 			for (var i = 0; i < data.length; i++) {
	// 				a+=1;
	// 				xxoo+= '<li><div class="cjsp_sc"><div class="photobg1"><div class="remm" ><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="ysimg'+a+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"><img src="/matouPCS/Uploads/'+data[i].substr(1)+'"></div></div></div></li>';
	// 			};
	// 			$("#this").html(xxoo);
	// 			// var an = parseInt(a);
	// 			setCookie('ysnu',parseInt(a));
	// 			hfx3();
	// 		},error:function(){
	// 			alert('no');
	// 		}
	// 	});
	// }

	// var im = $("#this").children("li").length;
	// console.log(im);
		// $("#hfx3-1-u").click(function() {
			
		function hfx3(){ //应赏图片的方法this
		//	alert(456);
			var im = document.getElementById("this").getElementsByTagName("li").length;
			im++;
			if( im > 9 ){
				alert('(最多张图片)');
			}else{
				$(".p12").hide();
				$(".dianji").hide();
				$(".s-c-2f-2f-f ul").append('<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="ysimg'+im+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div></li>'),
					$(".refcc").on("click", function() {
						if($(".s-c-3f").css("height") == "10px") {
							$(".p12").show();
						}
						$(this).parent().parent().remove();
					});
			}
			
			$(".photobt").change(function(e) {
				var that = this;
				var $os = $(that).siblings(".click1");
				
				var files = this.files;
				console.log(this.files);
				
				var img = new Image();
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				// alert(files[0]);
				reader.onload = function(e) {
					var mb = (e.total / 1024) / 1024;
					if(mb >= 2) {
						alert('文件大小大于2M');
						return;
					}
					img.src = this.result;

//					img.style.width = "100%";
					
					$os.css({
//						width: "100%"
//						height: "100%"
					});
					$os.html("");
					$os.append($(img));
				}
				if($os.html() != "") {} else {
					var $de = $(that).siblings(".remm");
					var $bg = $(that).siblings("")
					$(".addimg").hide();
					$de.show();
					$(".photobg2").show();
					
				}
				var $im = $(that).siblings("img");
				var addimg = document.getElementsByClassName("click1 img").innerHTML;
				window.localStorage.setItem("ai", addimg);// console.log(window.localStorage.setItem("ai", addimg));
				$(".remm").click(function() {
					$(this).hide();
					var that = this;
					var $os = $(that).siblings(".click1");
					$($os).parent().parent().parent().remove();
					if($(".txfg1-a").css("height") > "110px"){
						alert("1");
						$(".txfg1-c2-1-a").css("display","block");
						$(".txfg1-a").css("height","126px")
					}else{
						alert("2");
					}
				});
				return(that);
			});
		};
		var rzbd_im = 0;
		$("#rzbd_img").click(function() {
			rzbd_im+=1;
			$(".p12").hide();
			$(".dianji").hide();
			                    
			$("#rzbd_imgs").append('<div class="isImg"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="bdimg'+rzbd_im+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div>'),
				$(".refcc").on("click", function() {
					if($(".s-c-3f").css("height") == "10px") {
						$(".p12").show();
					}
					$(this).parent().parent().remove();
				});
			$(".photobt").change(function(e) {
				var that = this;
				//				console.log($(that).parent());
				var $os = $(that).siblings(".click1");
				//				console.log($os.length);
				var files = this.files;
				var img = new Image();
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onload = function(e) {
					var mb = (e.total / 1024) / 1024;
					if(mb >= 2) {
						alert('文件大小大于2M');
						return;
					}
					img.src = this.result;
//					img.style.width = "100%";
					
					$os.css({
//						width: "100%"
//						height: "100%"
					});
					$os.html("");
					$os.append($(img));
				}
				if($os.html() != "") {} else {
					var $de = $(that).siblings(".remm");
					var $bg = $(that).siblings("")
					$(".addimg").hide();
					$de.show();
					$(".photobg2").show();
					
				}
				var $im = $(that).siblings("img");
				var addimg = document.getElementsByClassName("click1 img").innerHTML;
				window.localStorage.setItem("ai", addimg);
				//				console.log(window.localStorage.setItem("ai", addimg));
				$(".remm").click(function() {
					$(this).hide();
					var that = this;
					var $os = $(that).siblings(".click1");
					$($os).parent().parent().parent()	.remove();
					if($(".txfg1-a").css("height") > "110px"){
						alert("1");
						$(".txfg1-c2-1-a").css("display","block");
						$(".txfg1-a").css("height","126px")
					}else{
						alert("2");
					}
				});
				return(that);
			});
		});
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