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
     		this.index="主持人";
     		break;
     	case 2:
     		this.index="摄影师";
     		break;
     	case 3:
     		this.index="化妆师";
     		break;
     	case 4:
     		this.index="策划师";
     		break;
     	case 5:
     		this.index="灯光师";
     		break;
     	case 6:
     		this.index="音响师";
     		break;
     	case 7:
     		this.index="花艺师";
     		break;
     	case 8:
     		this.index="场布";
     		break;
     	case 9:
     		this.index="表演者";
     		break;
     	case 10:
            this.index="其他";
            break;
     } 
     if(this.index == ''){
        var type = '';
     }else{
        var type = this.index;
     }
     setCookie("type",type);
     // alert(getCookie('type'));
     getPage(1);
     // ajax();
    }
}
//获得性别
var cNodes =document.getElementById('sex').getElementsByTagName('dd');
for( var i=0; i<cNodes.length; i++){
    cNodes[i].index= i;
    cNodes[i].onclick = function(){ 
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
     setCookie('sex',this.index);
     getPage(1);
     // alert(getCookie('sex'));
     // ajax();
    }
}
//获得年龄
var age =document.getElementById('ages').getElementsByTagName('dd');
for( var i=0; i<age.length; i++){
    age[i].index= i;
    age[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="18-25";
            break;
        case 2:
            this.index="25-30";
            break;
        case 3:
            this.index="30-35";
            break;
        case 4:
            this.index="35";
            break;
     } 
     setCookie('age',this.index);
      getPage(1);
    }
}
//获得赏金
// var price =document.getElementById('price').getElementsByTagName('dd');
// for( var i=0; i<price.length; i++){
//     price[i].index= i;
//     price[i].onclick = function(){ 
//      switch(this.index){
//         case 0:
//             this.index="";
//             break;
//         case 1:
//             this.index="<800";
//             break;
//         case 2:
//             this.index="800-1500";
//             break;
//         case 3:
//             this.index="1500-3000";
//             break;
//         case 4:
//             this.index="3000-5000";
//             break;
//         case 5:
//             this.index=">6000";
//             break
//      } 
//      setCookie('price',this.index);
//      ajax();
//     }
// }
//获取日期！
// function date(date){
//     setCookie('date',date);
//     // alert(getCookie('date'));
//     getPage(1);
// }
$('#daTe').click(function(){
    setCookie('date','');
    getPage(1);
});
$('#dq_tzh').click(function(){
    setCookie('address','');
    getPage(1);
});
//获取地址
// function address(address){
//     setCookie('address',address);
//     getPage(1);
// }
//刷新浏览器  清除搜索的cookie值
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//类型
    setCookie("sex",'');//性别
    setCookie("age",'');//年龄
    setCookie("date",'');//活动时间
    setCookie("address",'');//活动时间    
    return warning;      
}

$('#submits').click(function(){
    alert($('#city').val());
});
// 选择日期
$('#dd').calendar({
    trigger: '#dt',
    zIndex: 999,
    format: 'yyyy-mm-dd',
    onSelected: function(view, date, data) {
        console.log('event: onSelected');
        
    },
    onClose: function(view, date, data) {
        console.log('event: onClose')
        console.log('view:' + view)
        console.log('date:' + date)
        console.log('data:' + (data || 'None'));
    }
});
var url_ajax = "?s=/Home/Box/orders";//这个路径是真正显示列表的
   $(function() {
        $("#ajax_lists").delegate(".pager a", "click", function() {
            var page = $(this).attr("data-page");
            getPage(page);
        })
        getPage(1);
    })
    function getPage(page,type) {
         $("#ajax_lists").html("<h1>请稍等。。。</h1>");
         var type = getCookie("type");//类型
         var sex = getCookie("sex");//性别
         var age = getCookie("age");//年龄
         var date = getCookie("date");//活动时间
         var address = getCookie("address");//活动时间
         var re = getCookie("re");//热门

         $.get(url_ajax, {p: page,type:type,sex:sex,age:age,date:date,address:address,re:re}, function(data) {
            $('#ajax_lists').html(data);
            // alert(data);
        })
    }
//刷新或关闭浏览器清除搜索使用的cookie值
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//类型
    setCookie("sex",'');//性别
    setCookie("age",'');//年龄
    setCookie("date",'');//活动时间
    setCookie("bd",'');//活动时间   
    setCookie("address",'');//活动时间   
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