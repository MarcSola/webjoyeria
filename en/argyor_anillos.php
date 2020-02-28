<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/argyor_anillos.css"> 
    <link rel="stylesheet"  href="../estilos_css/pie de pagina.css"> 
    <script src="../javascript/jquery-1.11.3.min.js"></script>
    <script src="../javascript/cabecera.js"></script>
    <script src="../javascript/relojes.js"></script>
    
</head>

<body>
		
	<?php 

		include("../php/connection.php");
	    include("../en/cabecera.php"); 

	?>

	<div id="cuerpo" style="height:360px;">
		<div id="zona_trabajo_body">
			
			<div id="titulo_nowley"></div><br>
			<div class="tit_text">

			Our firm is crafting jewelry since 1954. Wedding rings, gold medals, other pieces of jewelry will accompany the best moments of your life.

			<br><br>

			Our passion is what brings us to immerse ourselves in the world of online jewelry: both, this website and social networks are where we want to take you closer to our world.

			<br><br>

			Argyor official website: <a style="color:white; background-color:#d66965; padding-left: 3px; padding-right: 3px; border-radius: 5px;
									" href="http://www.argyor.com" target='_blank'> www.argyor.com </a>
			
			</div>

		</div>
	</div>

	<div class="background_relojes">
		<div class="productos">
			<div class="titulo">
				<b>Catalogue</b>
			</div>

			<?php 

				$str_where = "";
				if(isset($_GET['familia'])){
					if ($_GET['familia'] == "oro_amarillo"){

						$str_where = " AND p.subfamilia LIKE 'anillos de compromiso oro amarillo' ";
						$familia_url = "&familia=oro_amarillo";

					}elseif($_GET['familia'] == "oro_rosa"){

						$str_where = " AND p.subfamilia LIKE 'anillos de compromiso oro rosa' ";
						$familia_url = "&familia=oro_rosa";

					}elseif($_GET['familia']== "oro_blanco"){

						$str_where = " AND p.subfamilia LIKE 'anillos de compromiso oro blanco' ";
						$familia_url = "&familia=oro_blanco";

					}elseif ($_GET['familia']== "solitario") {

						$str_where = " AND p.subfamilia LIKE 'anillos solitarios' ";
						$familia_url = "&familia=solitarios";

					}
				}

				if(isset($_GET['pag'])){
						if($_GET['pag'] == 1){
							$min = 0;
						}else{
							$max = ($_GET['pag'] * 9);
							$min = $max - 9;
						}
					}else{
						$min = 0;
					}

				$tot_paginas = floor(mysql_num_rows($result2) / 9) + 1;
			?>

			<!-- Paginación superior -->

			<div class="paginacion2">

				<div class="mostrando" style="height:165px">

					<span class="titulo_anillos_1"> ENGAGEMENT RINGS </span><br>

					<span class="titulo_anillos_2"> Finde the ring of your dreams </span><br>
					<span class="margin"></span>
					<a href="../es/argyor_anillos.php?familia=oro_blanco"><span class="titulo_anillos_3"> WHITE GOLD ENGAGEMENT RINGS </span></a><br>
					<a href="../es/argyor_anillos.php?familia=oro_rosa"><span class="titulo_anillos_3"> ROSE GOLD ENGAGEMENT RINGS </span></a><br>
					<a href="../es/argyor_anillos.php?familia=oro_amarillo"><span class="titulo_anillos_3"> YELLOW GOLD ENGAGEMENT RINGS </span></a><br>
					<a href="../es/argyor_anillos.php?familia=solitario"><span class="titulo_anillos_3"> SOLITAIRE RINGS </span></a><br>

				</div>

				<div style="clear: both;"></div> 
			</div>



			<!-- zona photos -->
			<div class="todos">

				<?php 	

					$query_result_1="SELECT *, p.id as 'super_id', pi.nombre_imagen as 'nombraco' 
									FROM productos as p 
									INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id 
									INNER JOIN descripcion_anillos as da ON p.id=da.id_producto 
									WHERE p.trademark_id = 7 AND p.familia = 'anillos de compromiso' " . $str_where . "GROUP BY p.id ORDER BY pi.nombre_imagen ASC LIMIT ". $min .', 9 ';

					$result = mysql_query($query_result_1 );

					$query_result_2="SELECT * 
									FROM productos as p 
									INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id 
									INNER JOIN descripcion_anillos as da ON p.id=da.id_producto  
									WHERE p.trademark_id = 7 AND p.familia = 'anillos de compromiso' " . $str_where ;

					$result2 = mysql_query($query_result_2);
							
		    		if($result != NULL){
					    if(mysql_num_rows($result) > 0){
					    	$marc_num_items = mysql_num_rows($result);
						    while($row = mysql_fetch_array($result)){ ?>
		
						        <a href="../es/producto_anillo.php?id=<?php echo $row['super_id'] ?>"><div class="z_trabajo"> 
							        <div class="relojes">
										<img src="../Photos/joieria/anillos/<?php echo $row['url'] ?>" ></img>
										<div class="mas_info">More info.</div>
									</div> 
									<div class="title"><?php echo $row['nombraco'] ?></div>

								</div></a>
						    <?php }
					    }else{
					        echo '<b> <span style="position: relative;left: 50px;top: 5px;"> No hay resutlado </span> </b>';
					    }
					}

				?>
			<div style="clear: both;"></div> 




			<!-- Paginación inferior -->
			<?php
			if($result != NULL){
				if(mysql_num_rows($result) > 0){
			?>
				<div class="paginacion">

					<div class="mostrando">
						Showing &nbsp;
						<?php 
							if( mysql_num_rows($result2) > $GET['pag']*9 ){ 
								if($_GET['pag']*9 > mysql_num_rows($result2)){
									$page = mysql_num_rows($result2); 
								}else{
									$page = $_GET['pag']*9;	
								} 
							}else{ 
								$page = mysql_num_rows($result2); 
							}

							if(isset($_GET['pag'])){
								echo ($_GET['pag']*9)-8 . " - ". $page . "&nbsp; of ". $marc_num_items ." items" ;
							}else{
								echo " 1 - ". mysql_num_rows($result) . "&nbsp; of ". $marc_num_items ." items" ;
							} 
						?>
					</div>
					
					<div class="pagin">
						<?php
							if( mysql_num_rows($result2) > 9){

								if(isset($_GET['pag'])){
									
									$min_page = $_GET['pag'] - 3;
									$max_page = $_GET['pag'] + 3;
									if ($min_page < 1){
										$min_page = 1;
									}
									if ($max_page > floor(mysql_num_rows($result2) / 9) + 1){
										$max_page = floor(mysql_num_rows($result2) / 9) + 1;
									}

									if ($_GET['pag'] != 1){
										?><a href="../es/argyor_anillos.php?pag=<?php echo $_GET['pag']-1 . $familia_url?>"><div class="cuadrito"><</div></a><?php
									}

									while( $min_page <= $max_page ){
										?> <a href="../es/argyor_anillos.php?pag=<?php echo $min_page . $familia_url?>"> <div class="cuadrito"><b> <?php echo $min_page; ?></b></div></a> <?php
										$min_page += 1;
									}

									if ($_GET['pag'] < $max_page){
										?><a href="../es/argyor_anillos.php?pag=<?php echo $_GET['pag']+1 . $familia_url?>"><div class="cuadrito">></div></a><?php
									}

								}else{
									
									$x = 1;
									while( $x <= $tot_paginas ){
										?> <a href="../es/argyor_anillos.php?pag=<?php echo $x . $familia_url ?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
										$x += 1;
									}

									?><a href="../es/argyor_anillos.php?pag=2"><div class="cuadrito">></div></a><?php

								}

							}else{

								$x = 1;
								while( $x <= $tot_paginas ){
									?> <a href="../es/argyor_anillos.php?pag=<?php echo $x . $familia_url?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
									$x += 1;
								}
							}
						?>
					</div>
				<div style="clear: both;"></div> 
				</div>
			<?php
			}
		} ?>
			<!-- fin paginacion -->
		</div>
	</div>
</body>

<footer>

	<?php 

	    include("../es/pie de pagina.php"); 

	?> 

</footer>

</html>
