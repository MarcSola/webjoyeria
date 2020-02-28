<!-- inicializamos los componentes básicos de la estructura de la página web-->

<div id="barra_sup_all">

	<div id="barra_sup"> 

		<div id="barra_sup_idiomas" class="negrita"> 

			<?php

				include("../cat/language_swapper.php")
			?>

		</div>

		<div id="barra_sup1" class="negrita"> <a href= "../cat/contactanos.php"> CONTACTE AMB NOSALTRES</a> &nbsp;|&nbsp; <a href="../cat/quienes_somos.php ">QUI SOM?</a> </div>

	</div>

</div>

<?php 
	
	    $ruta = $_SERVER['REQUEST_URI'] . "/.."; 

?>

<div id="cabecera">
	<div id="cabecera_interior">

		<!-- Logo y nombre de la empresa-->
		<a href="../cat/index.php ">
			<div id="logo1"></div>

			<div id="logo2">
				<div class="cursiva">OLIVERAS-PLA <br>Olesa de Montserrat</div>
			</div>
		</a>
		
		<!-- Zona de sección de productos-->
		<div class="seccion" id="seccion_tamano1" onmouseover="seccion1_over()" onmouseout="seccion1_out()">Artesania i Restauració
			<div id="subseccion1">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">ARTESANIA I RESTAURACIÓ</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="../cat/relojes_antiguos.php"><li>Rellotges antics</li></a>
								<a href ="../cat/disenos_propios.php"><li>Dissenys propis</li></a>
							</ul>
						<div id="imagenAR"></div>
						</div>
						
					</div>

				</div>		
			</div>
		</div>
			
		<div class="seccion" id="seccion_tamano2" onmouseover="seccion2_over()" onmouseout="seccion2_out()">
		<a href="../cat/marcas_relojes.php" style ="color:white;"> Rellotges </a>
			<div id="subseccion2">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../cat/marcas_relojes.php">RELLOTGES</a></div>
						<div class="lista">
							<ul>
								<li><a href="../cat/marcas_relojes.php?pag=1&tipo=hombre">Home</a></li>
								<li><a href="../cat/marcas_relojes.php?pag=1&tipo=mujer">Dona</a></li>
								<li><a href="../cat/relojes_potens.php ">Potens</a></li>
								<li><a href="../cat/relojes_nowley.php">Nowley</a></li>
								<li><a href="../cat/relojes_citizen.php">Citizen</a></li>
								<li><a href="../cat/relojes_sector.php">Sector</a></li>
							</ul>
						</div>
							
						<div id="imagenRelojes"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id= "seccion_tamano3" onmouseover="seccion3_over()" onmouseout="seccion3_out()">
		Joieria
			<div id="subseccion3">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../cat/argyor_anillos.php"> JOIERIA </a></div>
						<br><br>
						<div class="lista">
							<ul>
								<li><a href="../cat/argyor_anillos.php"> Anells </a></li>
								<li><a href="../cat/argyor_alianzas.php"> Aliances </a></li>
								
							</ul>
						</div>
							
						<div id="imagenJoyeria"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id="seccion_tamano4" onmouseover="seccion4_over()" onmouseout="seccion4_out()">
		<a href="../cat/colecciones.php" style ="color:white;">Coleccions</a>
			<div id="subseccion4">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../cat/colecciones.php"> COLECCIONS </a> </div>
						<div class="lista">
							<ul>
							
								<a href="../cat/joyas_de_olesa.php"><li>Joies d'Olesa</li></a>
								<a href="../cat/angel_y_demonio.php"><li>Àngel i Dimoni</li></a>
								<a href="../cat/olivos.php"><li>Oliveres</li></a>
								<a href="../cat/joyas_de_weingarten.php"><li>Olesa - Weingarten Baden</li></a>
								<a href="../cat/montserrat.php"><li>Montserrat</li></a>
								<a href="../cat/puente_del_diablo.php"><li>Pont del diable</li></a>
								
							</ul>
						</div>
							
						<div id="imagenColecciones"></div>
					</div>
				</div>		
			</div>

		</div>

		<div class="seccion" id="seccion_tamano5" onmouseover="seccion5_over()" onmouseout="seccion5_out()">Regals i Gravats
			<div id="subseccion5">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">REGALS I GRAVATS</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="../cat/grabados.php"><li>Gravats</li></a>
								<a href ="../cat/regalos_personalizados.php"><li>Regals personalizats</li></a>
								<!-- <li>Regalos de empresa</li>
								<li>Trofeos</li> -->
							</ul>
						</div>
							
						<div id="imagenRegalos"></div>

					</div>
				</div>
			</div>

		</div>

	</div>
</div>

