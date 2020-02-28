function language_swap(id){
	var str=window.location.href;
	str=str.replace(/\/[a-z]{2,3}\//,"/"+id+"/");
	
	window.location.href=str;
}

var className = document.getElementsByClassName("language_button");
for (var i = 0; i<className.length;i++)
{
	var obj = className[i];
	obj.onclick=function(){language_swap(this.id);};
}
