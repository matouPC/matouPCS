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
            this.index="不限";
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

//招聘大厅搜索分页
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
   var flag = true;
      function checkLeave(){
    　　　　window.event.returnValue="确定离开当前页面吗？";
          setCookie("type",'');//职业
          setCookie("sex",'');//性别
          setCookie("age",'');//年龄
          setCookie("worktime",'');//工作经验
          setCookie("rzbd",'');//认证部队
          setCookie("address",'');//认证部队
           if (flag) {
                  var evt = window.event || arguments[0];
                  var userAgent = navigator.userAgent;
                  if (userAgent.indexOf("MSIE") > 0) {
                    var n = window.event.screenX - window.screenLeft;
                    var b = n > document.documentElement.scrollWidth - 20;
                    if (b && window.event.clientY < 0 || window.event.altKey) {
                      window.event.returnValue = ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
                        setCookie("type",'');//职业
                        setCookie("sex",'');//性别
                        setCookie("age",'');//年龄
                        setCookie("worktime",'');//工作经验
                      setCookie("rzbd",'');//活动时间
                      setCookie("address",'');//活动时间

                    }else {
                      return ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
                    }
                  }else if (userAgent.indexOf("Firefox") > 0) {
                     return ("该操作将会导致非正常退出系统(正确退出系统方式：点击退出系统按钮)，您是否确认?");
                  }
                }
    　　　}