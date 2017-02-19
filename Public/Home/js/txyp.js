var yp = 0;
		$("#hfx3-3").click(function() {
			yp+=1;
			$(".dianji").hide();
			$("#zp ul").append('<li><div class="cjsp_sc"><div class="photobg1"><div class="remm"><img src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div><input class="photobt" name="ypimg'+yp+'" type="file" id="photo1"><p class="addimg"></p><div class="click1"></div></div></div></li>'),
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