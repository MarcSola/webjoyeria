function validation(f){
	
	var ret=0;

	expr_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	expr_tlf = /^([0-9]{9})+$/;
	
	/*$("#nombre_cliente").val("");
	$("#telefono").val("");
	$("#mail").val("");
	$("#asunto").text("");	
	var tlf = $("#telefono").val();
	alert(tlf);*/
	if(f.elements[0].value==""){
		$("#nombre_cliente").val("");
		$("#nombre_cliente").attr("placeholder","Introduzca su nombre ");
		ret=1;
	}

	if(f.elements[1].value==""){
		$("#telefono").val("");
		$("#telefono").attr("placeholder","Introduzca su número de teléfono ");
		ret=1;
	}else{
		if (!expr_tlf.test(f.elements[1].value)) {
			$("#telefono").val("");
			$("#telefono").attr("placeholder","Introduzca un teléfono de 9 dígitos");
			ret=1;
		};
	}

	if(f.elements[2].value==""){
		$("#mail").val("");
		$("#mail").attr("placeholder","Introduzca un correo ");
		ret=1;
	}else{
		if (!expr_mail.test(f.elements[2].value)) {
			$("#mail").val("");
			$("#mail").attr("placeholder","Introduzca un correo");
			ret=1;
		};
	}

	if(f.elements[3].value==""){
		$("#asunto").val("");
		$("#asunto").attr("placeholder","Introduzca un asunto ");
		ret=1;
	}
	
	if(ret==1){
		return false;
	}else{
		return true;
	}

}