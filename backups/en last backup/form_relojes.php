<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/pie de pagina.css"> 
    <script src="../javascript/jquery-1.11.3.min.js"></script>
    <script src="../javascript/cabecera.js"></script>
    <script src="../javascript/vacio.js"></script>
    <script src="../javascript/funciones.js"></script> 
    
</head>

<body>

    <form name="upload_anillos" action="upload_anillos.php" method="post" enctype="multipart/form-data" autocomplete="on" accept-charset="UTF-8" >

    	Introduce nombre de imagen 1 <input type="file"  name="img_1" size="35" maxlength="25" placeholder=" Introduce nombre de imagen"/><br>
    	Introduce nombre de imagen 2 <input type="file"  name="img_2" size="35" maxlength="25" placeholder=" Introduce nombre de imagen"/><br>
    	Introduce nombre de imagen 3 <input type="file"  name="img_3" size="35" maxlength="25" placeholder=" Introduce nombre de imagen"/><br>
    	
        Sexo <input type="text"  name="sexo" size="180" maxlength="180"/> <br>
    	Descripcion producto <input type="text"  name="descripcion_producto" size="180" maxlength="180"/><br>
        Tipo <input type="text"  name="tipo_reloj" size="180" maxlength="180"/><br>
    	Medidas <input type="text"  name="medidas" size="180" maxlength="180"/><br>
    	Impermeabilidad <input type="text"  name="impermeabilidad" size="180" maxlength="180"/><br>
    	Caja <input type="text"  name= "caja" size="180" maxlength="180"/><br>
    	Fondo <input type="text"  name="fondo" size="180" maxlength="180"/><br>
    	Correa <input type="text"  name="correa" size="180" maxlength="180"/><br>
    	Funciones <input type="text"  name="funciones" size="180" maxlength="180"/><br>
    	Movimiento <input type="text"  name="tipo_piedras" size="180" maxlength="180"/><br>
    	PVP <input type="text"  name="pvp" size="180" maxlength="180"/><br>


        <button type="submit"> Agregar Reloj </button>

          
    </form>

</body>

<footer>

</footer>

</html>
