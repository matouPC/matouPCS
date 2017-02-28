//应聘职业
//跳蚤市场 搜索类型  闲置&求购
var cNode =document.getElementById('type').getElementsByTagName('dd');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="1";
            break;
        case 2:
            this.index="2";
            break;
     } 
     // alert(this.index);
     setCookie('type',this.index);//类型 闲置&求购
     getPage(1);
    }
}
//跳蚤市场 物品类型
var wp =document.getElementById('wp').getElementsByTagName('dd');
for( var i=0; i<wp.length; i++){
    wp[i].index= i;
    wp[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="摄影器材";
            break;
        case 2:
            this.index="摄像器材";
            break;
        case 3:
            this.index="音响";
            break;
        case 4:
            this.index="灯光";
            break;
        case 5:
            this.index="婚纱";
            break;
        case 6:
            this.index="礼服";
            break;
        case 7:
            this.index="舞台桁架";
            break;
        case 8:
            this.index="笔记本";
            break;
        case 9:
            this.index="其他";
            break;
     } 
     // alert(this.index);
     setCookie('wp',this.index);//类型 闲置&求购
     getPage(1);
    }
}
//价格的搜索条件
function ok(){
    var nu1 = $('#nu1').val();//最低价格
    var nu2 = $('#nu2').val();//最高价格
    if(nu2 < nu1 || nu1 == '' || nu2 == ''){
        alert('滚犊子');
    }else{
        if(nu1 != '' && nu2 !=''){
            var num = "f.price > "+nu1+" and f.price < "+nu2+"";
        }
        setCookie('price',num);
        getPage(1);
    }
    
}
//加载跳蚤市场列表
var url_ajax = "?s=/Home/Box/tzsc";//这个路径是真正显示列表的
   $(function() {
        $("#lists").delegate(".pager a", "click", function() {
            var page = $(this).attr("data-page");
            getPage(page);
        })
        getPage(1);
    })
    function getPage(page) {
         $("#lists").html("<h1>请稍等。。。</h1>");
         var type = getCookie('type');//闲置&求购
         var wp = getCookie('wp');//物品类型
         var price = getCookie('price');//物品价格
         $.get(url_ajax, {p: page,type:type,wp:wp,price:price}, function(data) {
            $('#lists').html(data);
        })
    }
//刷新或退出页面  清楚搜索cookie值
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//类型
    setCookie("wp",'');//名称
    setCookie("price",'');//价格
    return warning;      
}
function setCookie(cookieName, cookieValue, cookieExpires) {
    try {
        cookieName = cookieName.trim();
        cookieValue = escape(cookieValue);
        var nowDate = new Date();
        nowDate.setTime(new Date().getTime() + 7 * 24 * 60 * 60 * 1000);
        var cookieExpiresTime = nowDate.toGMTString();
        if (cookieExpires !== undefined && cookieExpires !== "" && cookieExpires > 0) {
            nowDate.setTime(new Date().getTime() + cookieExpires);
            cookieExpiresTime = nowDate.toGMTString();
        }
        document.cookie = cookieName + "=" + cookieValue
            + "; expires=" + cookieExpiresTime;
    } catch (e) {
    }
}
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
      