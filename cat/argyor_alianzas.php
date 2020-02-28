<!DOCTYPE html>

<head>
    <title>Joyería Oliveras</title>
    <link href="photos/otros/icono_16.png" type="image/png" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="../estilos_css/general.css">
    <link rel="stylesheet"  href="../estilos_css/cabecera.css">
    <link rel="stylesheet"  href="../estilos_css/argyor_alianzas.css"> 
    <link rel="stylesheet"  href="../estilos_css/pie de pagina.css"> 
    <script src="../javascript/jquery-1.11.3.min.js"></script>
    <script src="../javascript/cabecera.js"></script>
    <script src="../javascript/relojes.js"></script>
    
</head>

<body>
		
	<?php 

		include("../php/connection.php");
	    include("../cat/cabecera.php"); 

	?>

	<div id="cuerpo">
		<div id="zona_trabajo_body">
			
			<div id="titulo_nowley"></div><br>
			<div class="tit_text">

			La nostra firma és sinònim de joies des de 1954, destacant en les aliances, però també en medalles d'or, arres de casament i altres peces de joieria que t'acompanyen en els millors moments de la teva vida.
			<br><br>
			El ingredient principal per acumular aquesta experiència és la passió, que avui ens porta a submergir-nos en l'univers de la joieria online: tan aquesta web com les xarxes socials on estem ens apropen a tu, als teus somnis, a un futur junts.
			
			</div>

		</div>
	</div>

	<div class="background_relojes">
		<div class="productos">
			<div class="titulo">
				<b>Catàleg</b>
			</div>

			<?php 

				$str_where = "";
				if(isset($_GET['familia'])){
					if ($_GET['familia'] == "anillos_de_oro"){

						$str_where = " AND p.subfamilia LIKE 'anillos de oro' ";
						$familia_url = "&familia=oro";

					}elseif($_GET['familia'] == "alianzas_bicolor"){

						$str_where = " AND p.subfamilia LIKE 'alianzas bicolor' ";
						$familia_url = "&familia=bicolor";

					}elseif($_GET['familia']== "alianzas_de_oro_rosa"){

						$str_where = " AND p.subfamilia LIKE 'alianzas de oro rosa' ";
						$familia_url = "&familia=oro_rosa";

					}elseif ($_GET['familia']== "alianzas_de_diseño_argyor") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de diseño argyor' ";
						$familia_url = "&familia=diseno_argyor";
						
					}elseif ($_GET['familia']== "alianzas_clasicas") {

						$str_where = " AND p.subfamilia LIKE 'alianzas clasicas' ";
						$familia_url = "&familia=clasicas";
						
					}elseif ($_GET['familia']== "anillos_con_diamantes") {

						$str_where = " AND p.subfamilia LIKE 'anillos con diamantes' ";
						$familia_url = "&familia=con_diamantes";
						
					}elseif ($_GET['familia']== "acabados_especiales") {

						$str_where = " AND p.subfamilia LIKE 'acabados especiales' ";
						$familia_url = "&familia=acabados_especiales";
						
					}elseif ($_GET['familia']== "alianzas_de_oro_blanco") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de oro blanco' ";
						$familia_url = "&familia=oro_blanco";
						
					}elseif ($_GET['familia']== "alianzas_de_oro_amarillo") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de oro amarillo' ";
						$familia_url = "&familia=oro_amarillo";
						
					}elseif ($_GET['familia']== "alianzas_de_platino") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de platino' ";
						$familia_url = "&familia=platino";
						
					}elseif ($_GET['familia']== "alianzas_de_plata") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de plata' ";
						$familia_url = "&familia=plata";
						
					}elseif ($_GET['familia']== "alianzas_de_plata_de_diseño_ancho") {

						$str_where = " AND p.subfamilia LIKE 'alianzas de plata de diseño ancho' ";
						$familia_url = "&familia=diseno_ancho";
						
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

				<div class="mostrando" style="height:280px">

					<div id="alianzas_izquierda">
						<span class="titulo_anillos_1"> ALIANCES </span><br>

						<span class="titulo_anillos_2"> Per una vida junts </span><br>
						<span class="margin"></span>
					
						<a href="../cat/argyor_alianzas.php?familia=anillos_de_oro"><span class="titulo_anillos_3" style="font-weight:900; color:#512B1B;"> ANILLOS DE ORO  </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_bicolor"><span class="titulo_anillos_3"> ALIANCES BICOLOR </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_de_oro_rosa"><span class="titulo_anillos_3"> ALIANCES D'OR ROSA </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_de_diseño_argyor"><span class="titulo_anillos_3"> ALIANCES DE DISSENY ARGYOR </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_clasicas"><span class="titulo_anillos_3"> ALIANCES CLÀSSIQUES </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=anillos_con_diamantes"><span class="titulo_anillos_3"> ANELLS AMB DIAMANTS </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=acabados_especiales"><span class="titulo_anillos_3"> ACABATS ESPECIALS </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_de_oro_blanco"><span class="titulo_anillos_3"> ALIANCES D'OR BLANC </span></a><br>
						<a href="../cat/argyor_alianzas.php?familia=alianzas_de_oro_amarillo"><span class="titulo_anillos_3"> ALIANCES D'OR GROC </span></a><br>
					
					</div>

					<div id="alianzas_central">

						<a href="../cat/argyor_alianzas.php?familia=alianzas_de_platino"><span class="titulo_anillos_3" style="font-weight:900; color:#512B1B;"> 
						ALIANCES DE PLATÍ </span> </a>
						
					</div>

					<div id="alianzas_dreta">

					<a href="../cat/argyor_alianzas.php?familia=alianzas_de_plata"><span class="titulo_anillos_3" style="font-weight:900; color:#512B1B;"> 
					ALIANCES DE PLATA </span></a><br>
					<a href="../cat/argyor_alianzas.php?familia=alianzas_de_plata_de_diseño_ancho"><span class="titulo_anillos_3"> ALIANCES DE PLATA DE DISSENY AMPLE </span></a>
					<br>
					
					</div>

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
									WHERE p.trademark_id = 7 AND p.familia = 'alianzas' " . $str_where . "GROUP BY p.id ORDER BY pi.nombre_imagen ASC LIMIT ". $min .', 9 ';

					$result = mysql_query($query_result_1 );

					$query_result_2="SELECT * 
									FROM productos as p 
									INNER JOIN productos_imagenes as pi ON p.id=pi.producto_id 
									INNER JOIN descripcion_anillos as da ON p.id=da.id_producto  
									WHERE p.trademark_id = 7 AND p.familia = 'alianzas' " . $str_where ;

					$result2 = mysql_query($query_result_2);
							
		    		if($result != NULL){
					    if(mysql_num_rows($result) > 0){
					    	$marc_num_items = mysql_num_rows($result);
						    while($row = mysql_fetch_array($result)){ ?>
		
						        <a href="../cat/producto_alianza.php?id=<?php echo $row['super_id'] ?>"><div class="z_trabajo"> 
							        <div class="relojes">
										<img src="../Photos/joieria/alianzas/<?php echo $row['url'] ?>" ></img>
										<div class="mas_info">Més info.</div>
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
					Ensenyant &nbsp;
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
							echo ($_GET['pag']*9)-8 . " - ". $page . "&nbsp; de ". $marc_num_items ." items" ;
						}else{
							echo " 1 - ". mysql_num_rows($result) . "&nbsp; de ". $marc_num_items ." items" ;
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
									?><a href="../cat/argyor_alianzas.php?pag=<?php echo $_GET['pag']-1 . $familia_url?>"><div class="cuadrito"><</div></a><?php
								}

								while( $min_page <= $max_page ){
									?> <a href="../cat/argyor_alianzas.php?pag=<?php echo $min_page . $familia_url?>"> <div class="cuadrito"><b> <?php echo $min_page; ?> </b></div></a> <?php
									$min_page += 1;
								}

								if ($_GET['pag'] < $max_page){
									?><a href="../cat/argyor_alianzas.php?pag=<?php echo $_GET['pag']+1 . $familia_url?>"><div class="cuadrito">></div></a><?php
								}

							}else{
								
								$x = 1;
								while( $x <= $tot_paginas ){
									?> <a href="../cat/argyor_alianzas.php?pag=<?php echo $x . $familia_url ?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
									$x += 1;
								}

								?><a href="../cat/argyor_alianzas.php?pag=2"><div class="cuadrito">></div></a><?php

							}

						}else{

							$x = 1;
							while( $x <= $tot_paginas ){
								?> <a href="../cat/argyor_alianzas.php?pag=<?php echo $x . $familia_url?>"><div class="cuadrito"><b> <?php echo $x; ?> </b></div></a> <?php
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
		</div>
	</div>
</body>

<footer>

	<?php 

	    include("../es/pie de pagina.php"); 

	?> 

</footer>

</html>
