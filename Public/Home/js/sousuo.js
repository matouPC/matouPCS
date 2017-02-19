//获得类型
var cNode =document.getElementById('type').getElementsByTagName('dd');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     switch(this.index){
     	case 0:
     		this.index="不限";
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
     // alert(this.index);
     if(this.index == '不限'){
        setCookie('type','');
     }else{
        setCookie('type',this.index);
     }
     
     // alert(getCookie('type'));
     ajax();
    }
}
//获得性别
// var cNodes =document.getElementById('sex').getElementsByTagName('dd');
// for( var i=0; i<cNodes.length; i++){
//     cNodes[i].index= i;
//     cNodes[i].onclick = function(){ 
//      switch(this.index){
//      	case 0:
//      		this.index="不限";
//      		break;
//      	case 1:
//      		this.index="女";
//      		break;
//      	case 2:
//      		this.index="男";
//      		break;
//      } 
//      setCookie('sex',this.index);
//      // alert(getCookie('sex'));
//      ajax();
//     }
// }
//获得年龄
// var age =document.getElementById('ages').getElementsByTagName('dd');
// for( var i=0; i<age.length; i++){
//     age[i].index= i;
//     age[i].onclick = function(){ 
//      switch(this.index){
//         case 0:
//             this.index="不限";
//             break;
//         case 1:
//             this.index="18-25";
//             break;
//         case 2:
//             this.index="25-30";
//             break;
//         case 3:
//             this.index="30-35";
//             break;
//         case 4:
//             this.index="35以上";
//             break;
//      } 
//      setCookie('age',this.index);
//      // alert(getCookie('age'));
//      ajax();
//     }
// }
// //获得赏金
// var price =document.getElementById('price').getElementsByTagName('dd');
// for( var i=0; i<price.length; i++){
//     price[i].index= i;
//     price[i].onclick = function(){ 
//      switch(this.index){
//         case 0:
//             this.index="不限";
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
//      // alert(getCookie('price'));
//      ajax();
//     }
// }
//获取日期！
function date(date){
    alert(date);
}
//获取地址
// $('#city').click(function(){
//     alert($('#city').val());
// });
$('#submits').click(function(){
    alert($('#city').val());
});
// $("#hzw-city-picker").click(function(){
//     alert(13);
// });
//搜索的方法
function ajax(){
    //性别 类型 年龄 赏金同时存在的情况
    if(getCookie('sex') != '' && getCookie('type') != '' && getCookie('age') != '' && getCookie('price') != ''){
        alert(' sex = "'+getCookie('sex')+'" and type = "'+getCookie('type')+'" and age = "'+getCookie('age')+'" and price = "'+getCookie('price')+'"'); 
        //性别 类型 年龄
    }else if(getCookie('sex') != '' && getCookie('type') != '' && getCookie('age') != '' ){
        alert(' sex = "'+getCookie('sex')+'" and type = "'+getCookie('type')+'" and age = "'+getCookie('age')+'"');
        //性别 类型 赏金
    }else if(getCookie('sex') != '' && getCookie('type') != '' && getCookie('price') != '' ){
        alert(' sex = "'+getCookie('sex')+'" and type = "'+getCookie('type')+'"and price = "'+getCookie('price')+'"');
        //类型 年龄 赏金
    }else if(getCookie('price') != '' && getCookie('type') != '' && getCookie('age') != '' ){
        alert('type = "'+getCookie('type')+'" and age = "'+getCookie('age')+'" and price = "'+getCookie('price')+'"');
        //性别 年龄 赏金
    }else if(getCookie('price') != '' && getCookie('sex') != '' && getCookie('age') != '' ){
        alert(' sex = "'+getCookie('sex')+'"and age = "'+getCookie('age')+'" and price = "'+getCookie('price')+'"');
        //性别 赏金  
    }else if(getCookie('price') != '' && getCookie('sex') != '' ){
        alert(' sex = "'+getCookie('sex')+'" and price = "'+getCookie('price')+'"');
        //类型 赏金
    }else if(getCookie('type') != '' && getCookie('price') != ''){
        alert(' type = "'+getCookie('type')+'" and price = "'+getCookie('price')+'"');
        //年龄 赏金
    }else if(getCookie('price') != '' && getCookie('age') != '' ){
        alert(' age = "'+getCookie('age')+'" and price = "'+getCookie('price')+'"');
        //性别 类型
    }else if(getCookie('sex') != '' && getCookie('type') != ''){
        alert('sex = "'+getCookie('sex')+'" and type = "'+getCookie('type')+'"');
        //类型 年龄
    }else if(getCookie('type') != '' && getCookie('age') != ''){
        alert('type = "'+getCookie('type')+'" and age = "'+getCookie('age')+'"');         
        //性别 年龄
    }else if(getCookie('sex') !='' && getCookie('age') != ''){
        alert(' sex = "'+getCookie('sex')+'"and age = "'+getCookie('age')+'"'); 
        //类型
    }else if(getCookie('type') != ''){
        alert(' type = "'+getCookie('type')+'"');
        //性别
    }else if(getCookie('sex') != ''){
        alert(' sex = "'+getCookie('sex')+'"');
        //年龄 
    }else if(getCookie('age') != ''){
        alert(' age = "'+getCookie('age')+'"');
        //赏金
    }else if(getCookie('price') != ''){
        alert(' price = "'+getCookie('price')+'"');
    }
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