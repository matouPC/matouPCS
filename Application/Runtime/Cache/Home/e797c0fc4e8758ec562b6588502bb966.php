<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
        <title><?php echo ($title); ?></title>
        <link href="<?php echo ($url_ali); ?>images/favicon.ico" rel="shortcut icon"/>
         <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <meta content="<?php echo (msubstr($keywords,0,3000,14000,true)); ?>" name="keywords"/>
        <meta content="<?php echo (msubstr($description,0,3000,14000,true)); ?>" name="description"/>
        <link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>css/style_mobile<?php echo ($version); ?>.css" />
        <?php if(is_array($cssArr)): foreach($cssArr as $key=>$row): ?><link rel="stylesheet" type="text/css" href="<?php echo ($url_ali); ?>/<?php echo ($row); ?>.css" /><?php endforeach; endif; ?>
		<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?3150038f336cd12048cd9c88278dcfa9";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    </head>
    <body class="<?php echo ($control); ?>_<?php echo ($mod); ?>">


<link href="/c/Public/js/award/css/style_choujiang.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/c/Public/js/award/js/jquery-1-6.js"></script>
<script type="text/javascript" >
    $(function(){
      $('#begin').click(function(){
        
         var  name=$('#name').val();
           phone=$('#phone').val();
         
         var rel=/^(1(3|4|5|8){1}[0-9]{1})+\d{8}$/;  
         if(name===''||name=='姓名'){
             alert('请填写姓名。');
         }else if(rel.test(phone)==false||phone=='电话'){
             alert('请填写正确的电话');
         }else{
             $.post('./ajax.php',{name:name,phone:phone},function(data){
                  
                data=eval('('+data+')');
                    $('.lottery-unit').removeClass('active');
                    if(data['status']==1){
                      $('#phone_who').val(data['phone']); 
                      $('.regbox').css('display','none');
                      $('.cj_box').css('display','block');
                    }else if(data['status']==0){
                        alert('亲，您的抽奖次数已用完。');
                    }
                 
             })
         };
          
     
      } );
      $('#share').click(function(){
          
          $('#huojiang').css('display','none');
          $('#jieguo').css('display','block');
           window.scroll(0, 0);
//             var sTop = document.documentElement.scrollTop || document.body.scrollTop;
//               $('#jieguo ').css('top', sTop);
      });
      
    })
    
</script>
</head>

<body>
<div class=" " id="wrap">
    <div class="topbox"><img src="/c/Public/js/award/images/top.jpg" /></div>
    <div class="regbox" style=" display:  none" >
    <form>
        <div class="ttbox1">请先完善个人信息，以便工作人员及时与您联系发放奖品</div>
        <div class="ttbox"><input type="text" name="name" id='name'value="姓名" onblur="if(this.value==''){this.value='姓名'}" onfocus="if(this.value=='姓名'){this.value=''}" /></div>
        <div class="ttbox"><input type="text" name="phone" id='phone'value='电话' onblur="if(this.value==''){this.value='电话'}" onfocus="if(this.value=='电话'){this.value=''}" /></div>
        <div class="ttbox3"><a id="begin">立即抽奖</a></div>
        </form>
    </div>



    <div class="cj_box" id="lottery">
            <ul>
                    <li class="lottery-unit  lottery-unit-0 active"><img src="/c/Public/js/award/images/p1.jpg" alt="" width="80px" height="131px"/></li>
                    <li class="lottery-unit lottery-unit-1 active"><img src="/c/Public/js/award/images/p2.jpg" alt="" width="105px" height="80px" /></li>
                    <li class="lottery-unit lottery-unit-2 active"><img src="/c/Public/js/award/images/p3.jpg" alt="" width="105px" height="80px" /></li>
                    <li class="pt5"><img src="/c/Public/js/award/images/cj.jpg" alt="" width="130px" height="46px" class="btn"/></li>
                    <li class="lottery-unit pt5 fr lottery-unit-3  active"><img src="/c/Public/js/award/images/p4.jpg" alt="" width="80px" height="131px"/></li>
                    <li class="lottery-unit pt5 fr lottery-unit-4 active"><img src="/c/Public/js/award/images/p5.jpg" alt="" width="105px" height="80px" /></li>
                    <li class="lottery-unit pt5 fr lottery-unit-5 active"><img src="/c/Public/js/award/images/p6.jpg" alt="" width="105px" height="80px" /></li>
                    <div class="clear"></div>
                    <input type="hidden"  value="" id='phone_who'>
            </ul>

    </div>
    <div class="guize">
      <span class="gztt">活动规则</span><br/>
      1. 一人报名仅可使用一张现金券<br/>
     2. 现金券不可折现，不可叠加使用<br/>
     3. 活动时间：11月11日—11月21日<br/>
     4. 此次活动最终解释权归线话英语所有<br/>
    </div>
    
</div>
<div style=" display: none" id='huojiang'>
<div class="huojiang">
<img id='jiangping' src="/c/Public/js/award/images/1.png" />
</div>
<div class="fenxianganniu"><a id='share'>领取奖品</a></div>    
</div>
    
     <div id="jieguo" style=" display:  none">
    <div class="fenxiang"><img src="/c/Public/js/award/images/fenxiang.png" /></div>
    <div class="fenxiangtt">转发到朋友圈可再抽奖一次<br/>手快iPhone 6 就是你的！</div>
    <div class="weixintt"><span class="weixinicon"><img src="/c/Public/js/award/images/weixin.png" /></span>微信关注”<span class="cly">线话英语</span>”查询奖品</div>
 <div class="jingcai">1、关注微信“线话英语”<br/>2、微信菜单【抽奖查询】<br/>3、输入【手机号】查询</div>

  
    <div class="wx"><img src="/c/Public/js/award/images/wx.png" /></div>
    </div>
<script type="text/javascript">
   
var lottery={
	index:-1,	//当前转动到哪个位置，起点位置
	count:0,	//总共有多少个位置
	timer:0,	//setTimeout的ID，用clearTimeout清除
	speed:20,	//初始转动速度
	times:0,	//转动次数
	cycle:36,	//转动基本次数：即至少需要转动多少次再进入抽奖环节
	prize:-1,	//中奖位置
	init:function(id){
		if ($("#"+id).find(".lottery-unit").length>0) {
			$lottery = $("#"+id);
			$units = $lottery.find(".lottery-unit");
			this.obj = $lottery;
			this.count = $units.length;
			$lottery.find(".lottery-unit-"+this.index).addClass("active");
		};
	},
	roll:function(){
		var index = this.index;
		var count = this.count;
		var lottery = this.obj;
		$(lottery).find(".lottery-unit-"+index).removeClass("active");
		index += 1;
		if (index>count-1) {
			index = 0;
		};
		$(lottery).find(".lottery-unit-"+index).addClass("active");
		this.index=index;
		return false;
	},
	stop:function(index){
		this.prize=index;
		return false;
	}
};
function save(){
    prize=lottery.prize;
	// ajax 保存奖品
    $.post('/index.php/show/save_prize',{prize:prize,phone:phone},function(data){
    });
                $('#wrap').addClass('on');
                $('.guize').css('display','none');
                $('#jiangping').attr('src','./images/'+lottery.prize+'.png');
                $('#huojiang').css('display','block');
                lottery.prize=-1;
		lottery.times=0;
}
function roll(){
	lottery.times += 1;
	lottery.roll();
	if (lottery.times > lottery.cycle+10 && lottery.prize==lottery.index) {
          
		clearTimeout(lottery.timer);
		click=false;
//               alert('恭喜你获得'+lottery.prize+'等奖');
//                $('.topbox,.guize,.cj_box').css('display','none');
                 setTimeout(save,1000);
               
	}else{
		if (lottery.times<lottery.cycle) {
			lottery.speed -= 40;
		}else if(lottery.times==lottery.cycle) {
			var index = Math.random()*(lottery.count)|0;
                        if(index==3){
                            lottery.prize = index+1;	
                        }else if(index==0){
                              lottery.prize = index+1;	
                        }else{
                            lottery.prize = index;		
                        }
			
		}else{
			if (lottery.times > lottery.cycle+10 && ((lottery.prize==0 && lottery.index==7) || lottery.prize==lottery.index+1)) {
				lottery.speed += 80;
			}else{
				lottery.speed += 20;
			}
		}
		if (lottery.speed<100) {
			lottery.speed=100;
		};
		//console.log(lottery.times+'^^^^^^'+lottery.speed+'^^^^^^^'+lottery.prize);
		lottery.timer = setTimeout(roll,lottery.speed);
	}
	return false;
}

var click=false;

window.onload=function(){
	lottery.init('lottery');
	$("#lottery .btn").click(function(){
               if($('#phone_who').val()==''){
                   $('.cj_box').css('display','none');
                   $('.regbox').css('display','block');
               }else{
                        if (click) {
                             return false;
                        }else{
                                lottery.speed=200;
                                roll();
                                click=true;
                                return false;
                        }
               }
		
	});
};
</script>
</body>
</html>
<script src="<?php echo ($url_ali); ?>js/jquery1.8.min.js" type="text/javascript"></script>
<?php if(is_array($jsArr)): foreach($jsArr as $key=>$row): ?><script src="<?php echo ($url_ali); ?>js/<?php echo ($row); ?>.js" type="text/javascript"></script><?php endforeach; endif; ?>