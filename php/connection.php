<?php
	
	error_reporting(E_ERROR);

	$host = 'localhost';
	$user = 'Marc';
	$bdd = 'joieria_oliveras';
	$passwd  = '12345';

	mysql_connect($host, $user, $passwd) or die("Error en la connexion a la base de datos");

	mysql_select_db($bdd) or die("Error en la conexio a la base de datos");

?>