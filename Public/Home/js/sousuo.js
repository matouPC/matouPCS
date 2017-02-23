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
//获取地址
// function address(address){
//     setCookie('address',address);
//     getPage(1);
// }

$('#submits').click(function(){
    alert($('#city').val());
});

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