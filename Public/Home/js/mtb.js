var cNode =document.getElementById('vertical').getElementsByTagName('a');
for( var i=0; i<cNode.length; i++){
    cNode[i].index= i;
    cNode[i].onclick = function(){ 
     // switch(this.index){
     // 	case 0:
     // 		this.index=10;
     // 		break;
     // } 
     // setCookie("type",type);
     alert(this.index);
     // getPage(1);
     // ajax();
    }
}