//获得类型
var cNode =document.getElementById('type').getElementsByTagName('dd');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="2";
            break;
        case 2:
            this.index="1";
            break;
        }
     if(this.index == ''){
        var type = '';
     }else{
        var type = this.index;
     }
     // alert(type);
     setCookie("type",type);
   // alert(getCookie('type'));
     getPage(1);
     // ajax();
    }
}
//获得物品名
var cNode =document.getElementById('wp').getElementsByTagName('dd');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="音响";
            break;
        case 2:
            this.index="舞台";
            break;
        case 3:
            this.index="灯光";
            break;
        case 4:
            this.index="屏幕";
            break;
        case 5:
            this.index="泡泡机";
            break;
        case 6:
            this.index="彩妆饰品";
            break;
        case 7:
            this.index="摄影器材";
            break;
        case 8:
            this.index="婚纱礼服";
            break;
        case 9:
            this.index="婚车";
            break;
        case 10:
            this.index="其他";
            break;
        }
     if(this.index == ''){
        var wp = '';
     }else{
        var wp = this.index;
     }
     // alert(wp);
     setCookie("wp",wp);
     // alert(getCookie('type'));
     getPage(1);
     // ajax();
    }
}
//价格
function price(){
    // alert('这里是价格');
    if($('#price1').val() == '' || $('#price2').val() == ''){
        alert('您输入的价格有误');
    }else{
        var price='c.price>'+$('#price1').val()+ ' and ' +'c.price<'+$('#price2').val();
        //setCookie('price1',$('#price1').val());
        //setCookie('price2',$('#price2').val());
        setCookie("price",price);
        //alert(getCookie('price'));
        getPage(1);
    }
   ;
}

//加载列表项
var url_ajax = "?s=/Home/Box/mtsc";//这个路径是真正显示列表的
$(function() {
    $("#ajax_lists").delegate(".pager a", "click", function() {
        var page = $(this).attr("data-page");
        getPage(page);
    })
    getPage(1);
})
function getPage(page) {
    var type = getCookie("type");//类型
    var wp = getCookie("wp");//物品名
    //alert(wp);
    var price = getCookie("price");//价格1
   // var price2 = getCookie("price2");//价格2
    var address = getCookie("address");//地址
    // alert(getCookie('address'));
     $("#ajax_lists").html("<h1>请稍等。。。</h1>");
     $.get(url_ajax, {p:page,wp:wp,type:type,price:price}, function(data) {
        $('#ajax_lists').html(data);
    })
}
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//类型
    setCookie("wp",'');//物品名
    setCookie("price",'');//价格1
    //setCookie("price2",'');//价格2  
    setCookie("address",'');//活动地点   
    return warning;      
}
