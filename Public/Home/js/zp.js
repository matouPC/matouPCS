
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
//年龄
var age =document.getElementById('age').getElementsByTagName('dd');
for( var i=0; i<age.length; i++){
    age[i].index= i;
    age[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="r.age > 18 and r.age < 25";
            break;
        case 2:
            this.index="r.age > 25 and r.age < 30";
            break;
        case 3:
            this.index="r.age > 30 and r.age < 35";
            break;
        case 4:
            this.index="r.age > 35";
            break;
     } 
      setCookie('age',this.index);
      getPage(1);
      // alert(this.index);
    }
}
//工作经验
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
     // alert(this.index);
      setCookie('worktime',this.index);
      getPage(1);
    }
}
//认证部队
var rzbd =document.getElementById('rzbd').getElementsByTagName('dd');
for( var i=0; i<rzbd.length; i++){
    rzbd[i].index= i;
    rzbd[i].onclick = function(){ 
     switch(this.index){
        case 0:
            this.index="";
            break;
        case 1:
            this.index="婚庆公司";
            break;
        case 2:
            this.index="工作室";
            break;
        case 3:
            this.index="影楼";
            break;
        case 4:
            this.index="表演团";
            break;
     } 
     // alert(this.index);
      setCookie('rzbd',this.index);
      getPage(1);
    }
}
//从一级点进来的搜索事件
// if($('#type').val() ){}
// var ty = document.getElementById('types');
// switch (ty.value){
//     case '1':
//         setCookie('type','经理\\店长');
        
//         $('#jl').attr('class','seled');
//         break;
//     case '2':
//         setCookie('type','营业员');
//          $('#yy').attr('class','seled');
//         break;
//     case '3':
//         setCookie('type','化妆师');
//          $('#hz').attr('class','seled');
//         break;
//     case '4':
//         setCookie('type','数码师');
//          $('#sm').attr('class','seled');
//         break;
//     case '5':
//         setCookie('type','视频剪辑师');
//          $('#sp').attr('class','seled');
//         break;
//     case '6':
//         setCookie('type','摄像师');
//          $('#sx').attr('class','seled');
//         break;
//     case '7':
//         setCookie('type','摄影师');
//          $('#sy').attr('class','seled');
//         break;
//     case '8':
//         setCookie('type','策划师');
//          $('#ch').attr('class','seled');
//         break;
//         $('#bx').html('<a>不限</a>');
// }
//招聘大厅搜索分页
$('#dd_tzh').click(function(){
    setCookie('address','');
    getPage(1);
});
var url_ajax = "?s=/Home/Box/zpdt";//这个路径是真正显示列表的
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
         var rzbd = getCookie('rzbd');//认证部队
         var address = getCookie('address');//地址
         $.get(url_ajax, {p: page,type:type,sex:sex,age:age,worktime:worktime,rzbd:rzbd,address:address}, function(data) {
            $('#ajax_lists').html(data);
        })
    }
   function address(address){
   	alert(address);
   }
//刷新或关闭浏览器清除搜索使用的cookie值
window.onbeforeunload = onbeforeunload_handler;  
function onbeforeunload_handler(){      
    var warning="确认退出sssssssssss?";
    setCookie("type",'');//职业
    setCookie("sex",'');//性别
    setCookie("age",'');//年龄
    setCookie("worktime",'');//工作经验
    setCookie("rzbd",'');//活动时间
    setCookie("address",'');//活动时间
    $('#types').val('');
    return warning;      
}