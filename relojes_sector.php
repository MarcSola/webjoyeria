<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="estilos_css/general.css">
    <link rel="stylesheet"  href="estilos_css/cabecera.css">
    <link rel="stylesheet"  href="estilos_css/relojes_sector.css"> 
    <link rel="stylesheet"  href="estilos_css/pie de pagina.css"> 
    <script src="javascript/jquery-1.11.3.min.js"></script>
    <script src="javascript/cabecera.js"></script>
    <script src="javascript/relojes.js"></script>
    
</head>

<body>
		
	<?php 

		include("/php/connection.php");
	    include("cabecera.php"); 

	?>

	<div id="cuerpo">
		<div id="zona_trabajo_body">
			
			<div id="titulo_sector"></div><br>
			<div class="tit_text">

			<b> Sector No Limits nace en 1973 llevando en sí desde su origen el significado del permanente desafío. Su esencia se resume en tres palabras clave:
			SECTOR EXTREMO - INDESTRUCTIBLE - DISEÑO ITALIANO</b>
			<br><br>
			Los años Ochenta y Noventa estuvieron marcados por los desafíos de atletas que llevaban relojes técnicos y deportivos Sector No Limits, que acompañaron récords de prestaciones importantes e inolvidables conjugando pura tecnología con diseño italiano. Las hazañas llevadas a cabo por estos héroes entraron en el imaginario colectivo: Sector No Limits se convirtió en la expresión de una síntesis entre las cualidades técnicas del producto y las prestaciones deportivas de hombres audaces que se desafían a sí mismos cada día para ganar su personal competición con ellos mismos.
			<br><br>
			Web oficial de Sector:   <a style="color:white; background-color:rgb(164, 20, 20); padding-left: 3px; padding-right: 3px; border-radius: 5px;
									" href="http://www.sectornolimits.com/shop/ss_en/watches.html" target='_blank'> www.sectornolimits.com </a>
			</div>

		</div>
	</div>

	<div class="background_relojes">
		<div class="productos">
			<div class="titulo">
				<b>Catálogo</b>
			</div>

			<?php 

				$str_where = "";
				if(isset($_GET['tipo'])){
					if ($_GET['tipo'] == "mujer"){
						$str_where = " AND dp.sexo = 'mujer' ";
						$tipo_url = "&tipo=mujer";
					}elseif($_GET['tipo'] == "hombre"){
						$str_where = " AND dp.sexo = 'hombre' ";
						$tipo_url = "&tipo=hombre";
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

				<div class="mostrando">
					Mostrando &nbsp;
					<?php

					    $result = mysql_query("SELECT *, p.id as 'super_id' FROM productos as p INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id INNER JOIN descripcion_productos as dp ON p.id=dp.id_producto WHERE p.trademark_id = 6 " . $str_where . "ORDER BY p.nombre ASC LIMIT ". $min .', 9 ' );
						$result2 = mysql_query("SELECT * FROM productos as p INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id INNER JOIN descripcion_productos as dp ON p.id=dp.id_producto  WHERE p.trademark_id = 6" . $str_where);
						$tot_paginas = floor(mysql_num_rows($result2) / 9) + 1;

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
							echo ($_GET['pag']*9)-8 . " - ". $page . "&nbsp; de ". mysql_num_rows($result2) ." items" ;
						}else{
							echo " 1 - ". mysql_num_rows($result) . "&nbsp; de ". mysql_num_rows($result2) ." items" ;
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
									?><a href="relojes_sector.php?pag=<?php echo $_GET['pag']-1 . $tipo_url ?>"><div class="cuadrito"><</div></a><?php
								}

								while( $min_page <= $max_page ){
									?> <a href="relojes_sector.php?pag=<?php echo $min_page . $tipo_url ?>"> <div class="cuadrito"><b> <?php echo $min_page; ?> </b></div></a> <?php
									$min_page += 1;
								}

								if ($_GET['pag'] < $max_page){
									?><a href="relojes_sector.php?pag=<?php echo $_GET['pag']+1 . $tipo_url ?>"><div class="cuadrito">></div></a><?php
								}


							}else{
							$x = 1;
							while( $x <= $tot_paginas ){
								?> <a href="relojes_sector.php?pag=<?php echo $x . $tipo_url ?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
								$x += 1;
							}

							?><a href="relojes_sector.php?pag=2"><div class="cuadrito">></div></a><?php

						}
						}else{
							$x = 1;
							while( $x <= $tot_paginas ){
								?> <a href="relojes_sector.php?pag=<?php echo $x . $tipo_url ?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
								$x += 1;
							}

						}
					?>
				</div>
				<?php
					if(isset($_GET['pag'])){ ?>

						<a href="relojes_sector.php?pag=1"><div class="tipo">Todos</div></a>
						<a href="relojes_sector.php?pag=1"><div class="tipo">Mujer</div></a>
						<a href="relojes_sector.php?pag=1"><div class="tipo">Hombre</div></a>

					<?php }else{ ?>

						<a href="relojes_sector.php"><div class="tipo">Todos</div></a>
						<a href="relojes_sector.php<?php echo "?tipo=mujer" ?>"><div class="tipo">Mujer</div></a>
						<a href="relojes_sector.php<?php echo "?tipo=hombre" ?>"><div class="tipo">Hombre</div></a>

					<?php }
				?>
				
			<div style="clear: both;"></div> 
			</div>



			<!-- zona photos -->
			<div class="todos">

				<?php 	

					$result = mysql_query("SELECT *, p.id as 'super_id', pi.nombre_imagen as 'nombraco' FROM productos as p INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id INNER JOIN descripcion_productos as dp ON p.id=dp.id_producto WHERE p.trademark_id = 6 " . $str_where . "ORDER BY pi.nombre_imagen ASC LIMIT ". $min .', 9 ' );
					$result2 = mysql_query("SELECT * FROM productos as p INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id INNER JOIN descripcion_productos as dp ON p.id=dp.id_producto  WHERE p.trademark_id = 6" . $str_where);
							
		    		if($result != NULL){
					    if(mysql_num_rows($result) > 0){
						    while($row = mysql_fetch_array($result)){ ?>
						    	<?php $color =""; if($row['color'] != ''){ $color = '&color=' . $row['color']; }else{ $color=""; } ?>
						        <a href="producto_reloj.php?id=<?php echo $row['super_id'] . $tipo_url . $color?>"><div class="z_trabajo"> 
							        <div class="relojes">
										<img src="Photos/rellotges/Marques/sector/<?php echo $row['url'] ?>" ></img>
										<div class="mas_info">Más info.</div>
									</div> 
									<div class="title"><?php echo $row['nombraco'] ?></div>

								</div></a>
						    <?php }
					    }else{
					        echo "no hay resutlado";
					    }
					}

				?>
			<div style="clear: both;"></div> 




			<!-- Paginación inferior -->
			<div class="paginacion">

				<div class="mostrando">
					Mostrando &nbsp;
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
							echo ($_GET['pag']*9)-8 . " - ". $page . "&nbsp; de ". mysql_num_rows($result2) ." items" ;
						}else{
							echo " 1 - ". mysql_num_rows($result) . "&nbsp; de ". mysql_num_rows($result2) ." items" ;
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
									?><a href="relojes_sector.php?pag=<?php echo $_GET['pag']-1 . $tipo_url?>"><div class="cuadrito"><</div></a><?php
								}

								while( $min_page <= $max_page ){
									?> <a href="relojes_sector.php?pag=<?php echo $min_page . $tipo_url?>"> <div class="cuadrito"><b> <?php echo $min_page; ?> </b></div></a> <?php
									$min_page += 1;
								}

								if ($_GET['pag'] < $max_page){
									?><a href="relojes_sector.php?pag=<?php echo $_GET['pag']+1 . $tipo_url?>"><div class="cuadrito">></div></a><?php
								}

							}else{
								
								$x = 1;
								while( $x <= $tot_paginas ){
									?> <a href="relojes_sector.php?pag=<?php echo $x . $tipo_url ?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
									$x += 1;
								}

								?><a href="relojes_sector.php?pag=2"><div class="cuadrito">></div></a><?php

							}

						}else{

							$x = 1;
							while( $x <= $tot_paginas ){
								?> <a href="relojes_sector.php?pag=<?php echo $x . $tipo_url?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
								$x += 1;
							}
						}
					?>
				</div>
			<div style="clear: both;"></div> 
			</div>
		</div>
	</div>
</body>

<footer>

	<?php 

	    include("pie de pagina.php"); 

	?> 

</footer>

</html>
