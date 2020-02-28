<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/producto_reloj.css"> 
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
			}

			if(isset($_GET['color'])){ 
				$color = " AND pi.color='" . $_GET['color'] . "'"; 
			}else{ 
				$color=""; 
			} 

			$query_marca = "SELECT t.nombre FROM trademark t INNER JOIN productos p ON t.id = p.trademark_id WHERE 1=1 ".$id."";
			$nombre_marca_inicial = mysql_fetch_assoc(mysql_query($query_marca));

			$result = mysql_query(" SELECT *,pi.url as 'imagen_reloj', t.nombre as 'nombre_marca', p.nombre as 'nombre_reloj' 
				FROM productos as p INNER JOIN descripcion_productos as dp ON p.id=dp.id_producto INNER JOIN trademark as t ON p.trademark_id = t.id 
				INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id WHERE 1=1 ". $id . $color . " GROUP BY pi.color");

    		if($result != NULL){

			    if(mysql_num_rows($result) > 0){

			    	$row=mysql_fetch_array($result);

			    }else{

			        echo "no hay resutlado";
			    }
			}
				
		?> 

		<div id="cuerpo">
			<div id="zona_trabajo_body">
				<div id= "ruta"></div>
				<div id="mitad_izquierda">

					<div id= "imagen_grande">

						<div id ="lupa" class="zoom_photo">
							
							<img name ="../Photos/rellotges/Marques/<?php echo $nombre_marca_inicial['nombre'] ?>/<?php echo $row['url'] ?>" 
						src="../Photos/rellotges/Marques/<?php echo $nombre_marca_inicial['nombre'] ?>/<?php echo $row['url'] ?>" class="zoom_photo">

						</div>
						
						
						
					<div style="clear: both;"></div>

					</div>

					<div class="titulo_fotos_colores"> Más fotos </div>
					<div class= "fotos_colores">


						<?php 	

							$result_2 = mysql_query("SELECT * FROM productos as p INNER JOIN productos_imagenes as pi ON p.id = pi.producto_id WHERE 1=1 " . $id . $color );
							
				    		if($result_2 != NULL){
							    if(mysql_num_rows($result_2) > 0){
								    while($row_2 = mysql_fetch_array($result_2)){ ?>

								    	<div class="foto_color"> <img src="../Photos/rellotges/Marques/<?php echo $nombre_marca_inicial['nombre'] ?>/<?php echo $row_2['url'] ?>"></img></div>

								    <?php }
							    }else{
							        echo "no hay resutlado";
							    }
							}

						?>

					<div style="clear: both;"></div>
					</div>

					<div class="titulo_fotos_colores titulo_fotos_colores_2"> Colores </div>
					<div class= "fotos_colores fotos_colores_2">

						<?php 	

							$result_2 = mysql_query("SELECT *, p.id as 'id_producto' FROM productos as p INNER JOIN productos_imagenes as pi ON p.id = pi.producto_id WHERE 1=1 " . $id . " GROUP BY pi.color ORDER BY pi.nombre_imagen");
							
				    		if($result_2 != NULL){
							    if(mysql_num_rows($result_2) > 0){
								    while($row_2 = mysql_fetch_array($result_2)){ ?>
								    	<?php 

								    	if($row['nombre_imagen'] == $row_2['nombre_imagen']){ ?>

								    		<div class="foto_color"> <img src="../Photos/rellotges/Marques/<?php echo $nombre_marca_inicial['nombre'] ?>/<?php echo $row_2['url'] ?>"></img></div>
								    	
								    	<?php }else{ ?>

								    		<a href="../es/producto_reloj.php?id=<?php echo $row_2['id_producto'] . '&color='. $row_2['color'] ?>">

								    			<div class="foto_color"> <img src="../Photos/rellotges/Marques/<?php echo $nombre_marca_inicial['nombre'] ?>/<?php echo $row_2['url'] ?>"></img></div> 

								    		</a>
								    	<?php
								    	}
								    }
							    }else{
							        echo "no hay resutlado";
							    }
							}

						?>

					<div style="clear: both;"></div>
					</div>
				</div>

				<div id="mitad_derecha">
					
					<div id="titulo_reloj"> 
					
					<?php

					echo utf8_encode($row['nombre_reloj']);

					?>
					<br>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
						
						<?php

						echo utf8_encode($row['descripcion_producto']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i"> Descripción</div>
						<div style="clear: both;"></div>	
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
						
						<?php

						echo utf8_encode($row['tipo_reloj']);

						?>
						
						</div>
						<div class="div_hijo_caracteristicas_i">Tipo</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
						
						<?php

						echo utf8_encode($row['medidas']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i"> Medidas</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
						
						<?php

						echo utf8_encode($row['movimiento']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Movimiento</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
							
						<?php

						echo utf8_encode($row['impermeabilidad']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Impermeabilidad</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
							
						<?php

						echo utf8_encode($row['caja']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Caja</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
							
						<?php

						echo utf8_encode($row['fondo']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Fondo</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
							
						<?php

						echo utf8_encode($row['correa']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Correa</div>
						<div style="clear: both;"></div>
					</div>

					<div class= "div_padre_caracteristicas">

						<div class="div_hijo_caracteristicas_d">
							
						<?php

						echo utf8_encode($row['funciones']);

						?>

						</div>
						<div class="div_hijo_caracteristicas_i">Funciones</div>
						<div style="clear: both;"></div>
					</div>
					<br>

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
