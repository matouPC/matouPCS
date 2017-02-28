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
            this.index="场布师";
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
     // alert(type);
     setCookie("type",type);
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
            this.index="d.age > 18 and d.age < 25";
            break;
        case 2:
            this.index="d.age > 25 and d.age < 30";
            break;
        case 3:
            this.index="d.age > 30 and d.age < 35";
            break;
        case 4:
            this.index="d.age > 35";
            break;
     } 
      setCookie('age',this.index);
      getPage(1);
    }
}
//获得部队类型
var bd =document.getElementById('bd').getElementsByTagName('dd');
for( var i=0; i<bd.length; i++){
    bd[i].index= i;
    bd[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="个人部队";
            break;
        case 2:
            this.index="认证部队";
            break;
     } 
      setCookie('bd',this.index);
      getPage(1);
    }
}
//加载列表项
var url_ajax = "?s=/Home/Box/ysdt";//这个路径是真正显示列表的
$(function() {
    $("#ajax_lists").delegate(".pager a", "click", function() {
        var page = $(this).attr("data-page");
        getPage(page);
    })
    getPage(1);
})
function getPage(page) {
    var type = getCookie("type");//类型
    var sex = getCookie("sex");//性别
    var age = getCookie("age");//性别
    var bd = getCookie("bd");//部队类型
    var date = getCookie("date");//档期
     $("#ajax_lists").html("<h1>请稍等。。。</h1>");
     $.get(url_ajax, {p: page,type:type,sex:sex,age:age,bd:bd,date:date}, function(data) {
        $('#ajax_lists').html(data);
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
    return warning;      
}