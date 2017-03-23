//加载列表项
var url_ajax = "?s=/Home/Box/mtsc";//这个路径是真正显示列表的
$(function() {
    $("#ajax_lists").delegate(".pager a", "click", function() {
        var page = $(this).attr("data-page");
        alert(page);
        getPage(page);
    })
    getPage(1);
})
function getPage(page) {
//     var type = getCookie("type");//类型
//     var sex = getCookie("sex");//性别
//     var age = getCookie("age");//性别
//     var bd = getCookie("bd");//部队类型
//     var date = getCookie("date");//档期
     $("#ajax_lists").html("<h1>请稍等。。。</h1>");
     $.get(url_ajax, function(data) {
        $('#ajax_lists').html(data);
    })
}