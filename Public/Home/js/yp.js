//应聘职业
var cNode =document.getElementById('type').getElementsByTagName('dd');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="经理\\店长";
            break;
        case 2:
            this.index="营业员";
            break;
        case 3:
            this.index="数码师";
            break;
        case 4:
            this.index="视频剪辑师";
            break;
        case 5:
            this.index="摄影师";
            break;
        case 6:
            this.index="摄像师";
            break;
        case 7:
            this.index="化妆师";
            break;
        case 8:
            this.index="策划师";
            break;
        case 9:
            this.index="其他";
            break;
     } 
     if(this.index == ''){
        var type = '';
     }else{
        var type = this.index;
     }
     setCookie("type",type);
     getPage(1);
     // ajax();
    }
}
//应聘性别
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
     // alert(this.index);
     setCookie('sex',this.index);
     getPage(1);
    }
}
//应聘年龄
var age =document.getElementById('age').getElementsByTagName('dd');
for( var i=0; i<age.length; i++){
    age[i].index= i;
    age[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="r.ages > 18 and r.ages < 25";
            break;
        case 2:
            this.index="r.ages > 25 and r.ages < 30";
            break;
        case 3:
            this.index="r.ages > 30 and r.ages < 35";
            break;
        case 4:
            this.index="r.ages > 35";
            break;
     } 
      setCookie('age',this.index);
      getPage(1);
      // alert(this.index);
    }
}
//应聘工作经验
var worktime =document.getElementById('worktime').getElementsByTagName('dd');
for( var i=0; i<worktime.length; i++){
    worktime[i].index= i;
    worktime[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="1-2";
            break;
        case 2:
            this.index="2-5";
            break;
        case 3:
            this.index="5-10";
            break;
        case 4:
            this.index=">10";
            break;
     } 
      setCookie('worktime',this.index);
      getPage(1);
    }
}
//是否有无作品
var zuo =document.getElementById('zuo').getElementsByTagName('dd');
for( var i=0; i<zuo.length; i++){
    zuo[i].index= i;
    zuo[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="1";
            break;
     } 
      setCookie('zuo',this.index);
      getPage(1);
    }
}
//地址的不限点击
$('#add').click(function(){
	setCookie('address','');
    getPage(1);
});
var url_ajax = "?s=/Home/Box/ypq";//这个路径是真正显示列表的
   $(function() {
        $("#ajax_lists").delegate(".pager a", "click", function() {
            var page = $(this).attr("data-page");
            getPage(page);
        })
        getPage(1);
    })
    function getPage(page) {
         $("#ajax_lists").html("<h1>请稍等。。。</h1>");
         var type = getCookie('type');//职业
         var sex = getCookie('sex');//职业
         var age = getCookie('age');//年龄
         var worktime = getCookie('worktime');//工作经验
         var address = getCookie('address');//地址
         var zuo = getCookie('zuo');//有无作品
         $.get(url_ajax, {p: page,type:type,sex:sex,age:age,worktime:worktime,address:address,zuo:zuo}, function(data) {
            $('#ajax_lists').html(data);
        })
    }
//刷新或关闭浏览器清除搜索使用的cookie值
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//职业
    setCookie("sex",'');//性别
    setCookie("age",'');//年龄
    setCookie("worktime",'');//工作经验
    setCookie("address",'');//活动时间
    setCookie("zuo",'');//有无作品
    return warning;      
}