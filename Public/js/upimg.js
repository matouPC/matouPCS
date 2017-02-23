//添加商品
		var a = 0;
		$("#appc").click(function() {
			a+=1;
			
			$(".p12").hide();
			$(".s-c-3f ul").append('<li>' +
					'<div class="cjsp_sc">' +
					'<div class="photobg1"><div class="remm"><img  src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div>' +
					'<input class="photobt" name="upload'+a+'" type="file" id="photo1">' +
					'<p class="addimg"><img src="/matouPCS/Public/Home/img/photoadd.png"></p><div class="click1"></div>' +
					'</div><div class="photobg2"><div class="remm"><img  src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18"></div>' +
					'<input class="photobt" type="file" name="uploads'+a+'" id="photo2"><p class="addimg"><img src="/matouPCS/Public/Home/img/photoadd.png"></p>' +
					'<div class="click1"></div></div></div><div class="cjsp_sc_00">' +
					'<textarea class="cjsp_sc_01" name="content'+a+'" placeholder=请输入商品信息(不得超过60个字) maxlength="120"></textarea>' +
					'<p class="cjsp_sc_02">价格：<input type="text" name="price'+a+'" class="cjsp_sc_02_01" maxlength="6">&nbsp;元</p>' +
					'<img class="refcc" src="/matouPCS/Public/Home/img/sc_01.png" width="19" height="18" class="cjsp_sc_02_02"></div>' +
					'<div class="mycontent"></li>'),
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
					//alert(img.src);
					img.style.width = "100%";
					
					$os.css({
						width: "123px",
						height: "73px"
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
					$($os).children().remove();
				});
				return(that);
			});
		});