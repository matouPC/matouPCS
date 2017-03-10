(function(k) {
	var f = null,
		l = 0,
		d = null,
		g = null,
		c = null,
		e = null,
		m = 0,
		h = [],
		n = null,
		b = 0,
		o = 6E3,
		p = 0,
		i = "top",
		u = function(a) {
			f = a.id;
			i = a.way && a.way == "left" ? "left" : "top";
			n = f.find(".title a");
			g = f.find(".thumb");
			e = g.find("img");
			p = e.size();
			c = g.find(".now-status");
			d = f.find(".img li");
			o = a.interval;
			m = i == "left" ? c.outerWidth() : c.outerHeight();
			for(a = 0; a < e.size(); a++)
				if(a == 0)
					h.push(0);
				else
					a > 0 && h.push(a * m);
			q();
			t()
		},
		j = null,
		t = function() {
			e.hover(function() {
				c.stop();
				clearInterval(l);
				var a = e.index($(this));
				if(a != b) {
					j && clearTimeout(j);
					j = setTimeout(function() {
						r(a)
					}, 100)
				}
			}, function() {
				q()
			})
		},
		r = function(a) {
			var s = h[a];
			i == "left" ? c.animate({ left: s }) : c.animate({ top: s });
			d.fadeOut();
			$(d[a]).fadeIn();
			n.text($(d[a]).find("img").attr("alt")).attr("href", $(d[a]).find("a").attr("href"));
			b = a
		},
		q = function() {
			l = window.setInterval(function() {
				b = b == p - 1 ? -1 : b;
				b += 1;
				r(b)
			}, o)
		};
	k.slider || (k.slider = { init: u });
	return slider
})(this);

//		------------------------------------------------------------------------下拉开始------------------------------------------------------------------------
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

$('#select-sp').hover(function() {
	$('#select-sp a img').css('transition-duration', '.5s');
	$('#select-sp a img').css('transform', 'rotate(180deg)');
	$('.select-sp').stop().animate({
		height: '50px'
	}, 300);
}, function() {
	$('#select-sp a img').css('transition-duration', '.5s');
	$('#select-sp a img').css('transform', 'rotate(0deg)');
	$('.select-sp').stop().animate({
		height: '0px'
	}, 300);
});
//收藏
$(function() {
	$(".company_01_01 img").hover(
		function() {
			$(this).attr("src", "img/scb.png");
		},
		function() {
			$(this).attr("src", "img/sca.png");
		}
	);
});

$(function() {
	$(".mtscc p img").hover(
		function() {
			$(".mtscc p img").attr("src", "img/scb.png");
		},
		function() {
			$(".mtscc p img").attr("src", "img/sca.png");
		}
	);
});
$(function() {
	$(".content_01_01 img").hover(
		function() {
			$(".content_01_01 img").attr("src", "img/scb.png");
		},
		function() {
			$(".content_01_01 img").attr("src", "img/sca.png");
		}
	);
});
//    鼠标动态开始
var hh = 30; //图片实际高度减去div高度
var pp = 2; //每次移动幅度（像素）
var ss = 50; //每次移动时间（毫秒）
var fx = true; //移动方向
var tp = document.getElementById("tp"); //图片对象
var b = document.getElementById('s-f2-r-button');

function gd() {
	var tt = parseInt(tp.style.top);
	fx = fx ? tt > -hh : tt >= 0;
	tp.style.top = tt + (fx ? -pp : pp) + "px";
	if(tt <= -15 && tt >= -30) {
		b.style.backgroundColor = '#ff9393';
		b.style.color = '#ffffff';
	} else {
		b.style.backgroundColor = '#cccccc';
		b.style.color = '#ff6b6b';
	}
	var timer1 = setTimeout(gd, ss);
	b.onmouseover = function() {
		tp.style.top = '0';
		clearInterval(timer1);
		b.style.backgroundColor = '#cccccc';
		b.style.color = '#ff6b6b';
	}
	b.onmouseout = function() {
		tp.style.top = '0';
		gd();
	}
}
gd();
//    鼠标动态结束
		$(document).ready(function() {
			//幻灯片调用
			slider.init({
				'id': $('#PicSlide'),
				way: 'left',
				interval: 4000
			});
		});
