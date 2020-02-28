<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/contactanos.css"> 
    <link rel="stylesheet"  href="../estilos_css/pie de pagina.css"> 
    <script src="../javascript/jquery-1.11.3.min.js"></script>
    <script src="../javascript/cabecera.js"></script>
    <script src="../javascript/vacio.js"></script>
    
</head>

<body>
	
		<?php 

		    include("../es/cabecera.php"); 

		?> 
		
		<div id="cuerpo">
			<div id="zona_trabajo_body">

				<div id="titulo_quienes_somos"></div>
				<div id="contenido">
			
					<div id="titulo"> CONTACTA CON NOSOTROS </div>
					<div id="cuadro_texto">

						<form name="upload_anillos" action="upload_anillos.php" method="post" enctype="multipart/form-data" autocomplete="on" accept-charset="UTF-8" >

				    	Nombre <br> <input type="text"  name="referencia" size="40" maxlength="40"/> <br><br>
				    	Teléfono <br> <input type="text"  name="referencia" size="40" maxlength="40"/> <br><br>
				    	E-mail <br> <input type="text"  name="referencia" size="40" maxlength="40"/> <br><br>
				    	Asunto <br> <textarea name="comment" rows="25" cols="105" name="descripcion" form="usrform"></textarea><br><br>
				    
				        <button type="submit"> Enviar </button>

				    	</form>

					</div>

					<div style="clear: both;"></div>

				</div>

				<div style="clear: both;"></div>

				</div>

				<div style="clear: both;"></div>

			</div>

			<div style="clear: both;"></div>
		</div>
				<div id="div_bot"></div>
		

</body>

<footer>

	<?php 

	    include("../es/pie de pagina.php"); 

	?> 

</footer>

</html>