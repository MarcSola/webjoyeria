<?php 
	/*
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	Array
	(
	    [nombre] => papito_el_mio
	    [telefono] => 618933902
	    [e-mail] => marcsr03@gmail.com
	    [asunto] => hola nois
	)
	*/

	include("../php/connection.php");

	$query =" 	INSERT INTO `contactanos` (`nombre`, `telefono`, `mail`, `asunto`) 
				VALUES ('".$_POST['nombre']."', '".$_POST['telefono']."', '".$_POST['e-mail']."', '".$_POST['asunto']."'); ";

	mysql_query( $query );

	header('Location: index.php');

?>