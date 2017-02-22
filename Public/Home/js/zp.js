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
         $.get(url_ajax, {p: page}, function(data) {
            $('#ajax_lists').html(data);
        })
    }
   function address(address){
   	alert(address);
   }