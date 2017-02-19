    function getObjectURL(file) {
    	var url = null;
    	if(window.createObjectURL != undefined) {
    		url = window.createObjectURL(file)
    	} else if(window.URL != undefined) {
    		url = window.URL.createObjectURL(file)
    	} else if(window.webkitURL != undefined) {
    		url = window.webkitURL.createObjectURL(file)
    	}
    	return url
    };
    $(function() {
        var a = 0;
    	$("#img").on("change", ".filepath1", function() {
            a += 1;
    		//alert($('.imgbox1').length);
    		var srcs = getObjectURL(this.files[0]); //获取路径
    		//this指的是input;
    		/* $(this).nextAll(".img22").attr("src",srcs);    //this指的是input
    		 $(this).nextAll(".img22").show();  //fireBUg查看第二次换图片不起做用*/
    		var htmlImg = '<div class="imgbox1">' +
    			'<div class="imgnum1">' +
    			'<input type="file" name="img'+a+'" class="filepath1" />' +
    			'<span class="close1">X</span>' +
    			'<img src="btn.png" class="img11" />' +
    			'<img src="' + srcs + '" class="img22" />' +
    			'</div>' +
    			'</div>';
    		$(this).parent().parent().before(htmlImg);
    		$(this).val(''); //必须制空
    		$(this).parent().parent().prev().find(".img11").hide(); //this指的是input
    		$(this).parent().parent().prev().find('.close1').show();

    		$(".close1").on("click", function() {
    			$(this).hide(); //this指的是span
    			$(this).nextAll(".img22").hide();
    			$(this).nextAll(".img11").show();
    			if($('.imgbox1').length > 1) {
    				$(this).parent().parent().remove();
    			}

    		})
    	})
    })