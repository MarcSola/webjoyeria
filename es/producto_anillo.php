<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/producto_anillo.css"> 
    <link rel="stylesheet"  href="../estilos_css/pie de pagina.css"> 
    <script src="../javascript/jquery-1.11.3.min.js"></script>
    <script src="../javascript/cabecera.js"></script>
    <script src="../javascript/producto_reloj.js"></script>
    <script src="../javascript/funciones.js"></script>
    
</head>

<body>
		
		<?php 

		    include("../es/cabecera.php"); 
		    include("../php/connection.php");

		    //Miramos que marca es

			if(isset($_GET['id'])){
				$id = ' AND p.id =' . $_GET['id'];
			}else{
				$id = "";
				?>
				<script>window.location.replace("argyor_anillos.php");</script> 
				<?php
			    exit;
			}

			$query_marca = "SELECT t.nombre FROM trademark t INNER JOIN productos p ON t.id = p.trademark_id WHERE 1=1 ". $id;
			$nombre_marca_inicial = mysql_fetch_assoc(mysql_query($query_marca));

			$query_full_description ="SELECT *,pi.url as 'imagen_anillo', t.nombre as 'nombre_marca', p.nombre as 'nombre_anillo', da.color as 'color_anillo'
				FROM productos p 
				INNER JOIN descripcion_anillos da ON p.id=da.id_producto 
				INNER JOIN trademark t ON p.trademark_id = t.id 
				INNER JOIN productos_imagenes pi ON p.id=pi.producto_id 
				WHERE 1=1 ". $id ;

			/*ejemplo query_full_description. El contenido lo tiene la variable $row

				[id] => 13  ------ este id corresponde al de productos_imagenes
			    [nombre] => argyor
			    [estado del producto] => 1
			    [familia] => Anillos de compromiso
			    [subfamilia] => Anillos de compromiso oro amarillo
			    [trademark_id] => 7
			    [created_at] => 2016-09-18 12:24:47
			    [updated_at] => 2016-09-18 12:24:47
			    [id_producto] => 12
			    [referencia] => 18-74A0001/7
			    [descripcion] => Anillo de compromiso de 4 garras, con brazo abierto gan�ndole as� m�s presencia en tama�o, montado en oro amarillo de 18 quilates con un diamante de 3 mm y talla brillante de 0.10 ct. Color H y pureza SI. Se acompa�a en todos los anillos de diamantes el certificado de autenticidad de diamante. Acabado brillo y est� disponible tambi�n en 9 k y en oro blanco para ambos quilatajes (si bien en blanco la referencia cambia).
			    [metal] => Oro 18k
			    [acabado_superficial] => 
			    [color] => 
			    [forma_piedras] => Brillante (redondo)
			    [grupo_productos] => Brillanter�a argyor
			    [numero_piedras] => 1 piedra
			    [peso_diamantes] => 0.10 ct
			    [tipo_forma_diamante] => Sortija solitario
			    [tipo_piedras] => Diamante
			    [anchura_alianza] => 
			    [espesor] => 
			    [forma_alianza] => 
			    [tipo_interior] => 
			    [pvp] => 471.00
			    [logo] => logo_argyor.jpg
			    [nombre_imagen] => 74a0001_001
			    [producto_id] => 12
			    [url] => 74a0001_001.jpg
			    [imagen_anillo] => 74a0001_001.jpg
			    [nombre_marca] => argyor
			    [nombre_anillo] => ANILLO DE COMPROMISO 1 DIAMANTE TALLA BRILLANTE 0.10CT (74A0001)
			    [color_anillo] => Amarillo

			echo "$query_full_description";
			exit;
			*/

			$result = mysql_query($query_full_description);


    		if($result != NULL){

			    if(mysql_num_rows($result) > 0){

			    	$row=mysql_fetch_assoc($result);
			    	if ($row['familia'] != 'anillos de compromiso') {
			    		?>
						<script>window.location.replace("argyor_anillos.php");</script>
						<?php
			    	}
			    	/*echo "<br>" . $query_full_description;
			    	echo "<pre>";
			    	print_r($row);
			    	echo "</pre>";
			    	exit;*/
					
			    }else{

			        ?>
					<script>window.location.replace("argyor_anillos.php");</script>
					<?php
			    }

			}else{

		        ?>
				<script>window.location.replace("argyor_anillos.php");</script>
				<?php
		    }
			/*
			echo "mrglmgrl";
			exit;
			*/	
		?> 

		<div id="cuerpo">
			<div id="zona_trabajo_body">
				<div id= "ruta"></div>

				<!-- Por si queremos poner path
				<div id="anillo_tipo">
					Anillos de <?php //echo variable consulta de que tipo son los anillos ?>
				</div>
 				-->

				<div id="mitad_izquierda">

					<div id= "imagen_grande">

						<div id ="lupa" class="zoom_photo">
							<?php if(isset($_GET['photo'])){ ?>

								<img name ="Photos/joieria/anillos/<?php echo $_GET['photo'] ?>" src="../Photos/joieria/anillos/<?php echo $_GET['photo'] ?>" class="zoom_photo">


							<?php }else{ ?>

								<img name ="Photos/joieria/anillos/<?php echo $row['url'] ?>" src="../Photos/joieria/anillos/<?php echo $row['url'] ?>" class="zoom_photo">

							<?php } ?>
							

						</div>
						
					<div style="clear: both;"></div>

					</div>

					<?php 	

						$result_2 = mysql_query("SELECT * FROM productos as p INNER JOIN productos_imagenes as pi ON p.id = pi.producto_id WHERE 1=1 " . $id );
						
			    		if($result_2 != NULL){
						    if(mysql_num_rows($result_2) > 1){ ?>

						    	<div class="titulo_fotos_colores"> Más fotos </div>

								<div class= "fotos_colores">

									<?php 	

									    while($row_2 = mysql_fetch_array($result_2)){ ?>

									    	<a href="../es/producto_anillo.php?id=<?php $_GET['id'] ?>&photo=<?php echo $row_2['url'] ?>"><div class="foto_color"> <img src="../Photos/joieria/anillos/<?php echo $row_2['url']; ?>"></img></div></a>

										<?php } ?>

								<div style="clear: both;"></div>
								</div>

					<?php	}
						}

					?>
					
				</div>

				<div id="mitad_derecha">
					
					<div id="titulo_reloj"> 
					
					<?php

					//echo variable consulta nombre del anillo/alianza;

					echo utf8_encode($row['nombre_anillo']);

					?> 
					
					</div>

					<div id="referencia"><b>Referencia:</b> 
					<?php 
					
					//echo variable consulta nombre/id

					echo utf8_encode($row['referencia']);

					?> </div>

					<br>

					<div id="descripcion">
					<?php

					//echo variable consulta resto de descripcion

					echo utf8_encode($row['descripcion']);
					?>

					</div>

					<br>

					<div id="mas_info"> MÁS INFORMACIÓN </div>
					<div id="big_daddy">

						<?php if($row['metal']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
								
								<?php

								//echo variable consulta metal

								echo utf8_encode($row['metal']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i"> Metal</div>
								<div style="clear: both;"></div>	
							</div>
						<?php } 
						
						if($row['acabado_superficial']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
									
								<?php

								//echo variable consulta tipo de piedras;

								echo utf8_encode($row['acabado_superficial']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Acabado superficial</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 
						
						if($row['color_anillo']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
								
								<?php

								//echo variable consulta color;

								echo utf8_encode($row['color_anillo']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Color</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['forma_piedras']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
								
								<?php

								//echo variable consulta forma de las piedras;

								echo utf8_encode($row['forma_piedras']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i"> Forma de las piedras</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['grupo_productos']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
								
								<?php

								//echo variable consulta grupo de productos;

								echo utf8_encode($row['grupo_productos']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Grupo de productos</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['numero_piedras']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
									
								<?php

								//echo variable consulta número de piedras;

								echo utf8_encode($row['numero_piedras']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Número de piedras</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['peso_diamantes']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
									
								<?php

								//echo variable consulta peso total de diamantes;

								echo utf8_encode($row['peso_diamantes']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Peso total de diamantes</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['tipo_forma_diamante']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
									
								<?php

								//echo variable consulta tipo/forma joyas con diamantes;

								echo utf8_encode($row['tipo_forma_diamante']);
								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Tipo/Forma joyas con diamantes</div>
								<div style="clear: both;"></div>
							</div>

						<?php } 

						if($row['tipo_piedras']!=NULL){ ?>

							<div class= "div_padre_caracteristicas">

								<div class="div_hijo_caracteristicas_d">
									
								<?php

								//echo variable consulta tipo de piedras;

								echo utf8_encode($row['tipo_piedras']);

								?>
								
								</div>
								<div class="div_hijo_caracteristicas_i">Tipo de piedras</div>
								<div style="clear: both;"></div>
							</div>

						<?php } ?>
					</div>
					<br><br>
				</div>
					
			</div>
			<div style="clear: both;"></div>

			<div id="transparente"></div>
			<img id="photo_ampliada" src="">
			<div id="close"></div> 

		</div>
</body>

<footer>

	<?php 

	    include("../es/pie de pagina.php"); 

	?> 

</footer>

</html>
