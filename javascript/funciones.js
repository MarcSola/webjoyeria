$(document).ready(function(){
	
	$(".zoom_photo").click(function(){

		var url_image = $(this).attr('name');
		$("#photo_ampliada").attr('src', url_image);
		$("#transparente").show();
		$("#photo_ampliada").show();
		$("#close").show();

	});

	$("#transparente").click(function(){

		$("#transparente").hide();
		$("#photo_ampliada").hide();
		$("#close").hide();
		
	});
	$("#close").click(function(){

		$("#transparente").hide();
		$("#photo_ampliada").hide();
		$("#close").hide();
		
	});
});