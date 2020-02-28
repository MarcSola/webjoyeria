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
    	Referencia <input type="text"  name="referencia" size="180" maxlength="180"/> <br>
    	Descripción <br>
    	<textarea name="comment" rows="25" cols="100" name="descripcion" form="usrform"></textarea><br>
    	Metal <input type="text"  name="metal" size="180" maxlength="180"/><br>
    	Acabado superficial <input type="text"  name="acabado_superficial" size="180" maxlength="180"/><br>
    	Color <input type="text"  name="color" size="180" maxlength="180"/><br>
    	Forma de la piedras <input type="text"  name="forma_piedras" size="180" maxlength="180"/><br>
    	Grupo de productos <input type="text"  name="grupo_productos" size="180" maxlength="180"/><br>
    	Número de piedras <input type="text"  name="numero_piedras" size="180" maxlength="180"/><br>
    	Peso de diamantes <input type="text"  name="peso_diamantes" size="180" maxlength="180"/><br>
    	Tipo de forma de diamantes <input type="text"  name="tipo_forma_diamantes" size="180" maxlength="180"/><br>
    	Tipo de piedras <input type="text"  name="tipo_piedras" size="180" maxlength="180"/><br>
    	Anchura de alianza <input type="text"  name="anchura_alianza" size="180" maxlength="180"/><br>
    	Espesor <input type="text"  name="espesor" size="180" maxlength="180"/><br>
    	Forma de la alianza <input type="text"  name="forma_alianza" size="180" maxlength="180"/><br>
    	Tipo de interior <input type="text"  name="tipo_interior" size="180" maxlength="180"/><br>
    	PVP <input type="text"  name="pvp" size="180" maxlength="180"/><br>


        <button type="submit"> Agregar anillo </button>

          
    </form>

</body>

<footer>

</footer>

</html>
