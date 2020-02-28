<!-- inicializamos los componentes básicos de la estructura de la página web-->

<div id="barra_sup_all">

	<div id="barra_sup"> 

		<div id="barra_sup_idiomas" class="negrita"> ES&nbsp;&nbsp;|&nbsp;&nbsp;CAT&nbsp;&nbsp;|&nbsp;&nbsp;EN </div>
		<div id="barra_sup1" class="negrita"> CONTACTA CON NOSOTROS  &nbsp;	|&nbsp; <a href="quienes_somos.php ">QUIEN SOMOS?</a> </div>

	</div>

</div>

<?php 
	
	    $ruta = $_SERVER['REQUEST_URI'] . "/.."; 

?>

<div id="cabecera">
	<div id="cabecera_interior">

		<!-- Logo y nombre de la empresa-->
		<a href="index.php ">
			<div id="logo1"></div>

			<div id="logo2">
				<div class="cursiva">OLIVERAS-PLA <br>Olesa de Montserrat</div>
			</div>
		</a>
		
		<!-- Zona de sección de productos-->
		<div class="seccion" id="seccion_tamano1" onmouseover="seccion1_over()" onmouseout="seccion1_out()">Artesanía y Restauración
			<div id="subseccion1">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">ARTESANIA Y RESTAURACIÓN</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="relojes_antiguos.php"><li>Relojes antiguos</li></a>
								<a href ="disenos_propios.php"><li>Diseños propios</li></a>
							</ul>
						<div id="imagenAR"></div>
						</div>
						
					</div>

				</div>		
			</div>
		</div>
			
		<div class="seccion" id="seccion_tamano2" onmouseover="seccion2_over()" onmouseout="seccion2_out()"><a href="marcas_relojes.php" style ="color:white;"> Relojes </a>
			<div id="subseccion2">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="marcas_relojes.php">RELOJES</a></div>
						<div class="lista">
							<ul>
								<li><a href="marcas_relojes.php?pag=1&tipo=hombre">Hombre</a></li>
								<li><a href="marcas_relojes.php?pag=1&tipo=mujer">Mujer</a></li>
								<li><a href="relojes_potens.php ">Potens</a></li>
								<li><a href="relojes_nowley.php">Nowley</a></li>
								<li><a href="relojes_citizen.php">Citizen</a></li>
								<li><a href="relojes_sector.php">Sector</a></li>
							</ul>
						</div>
							
						<div id="imagenRelojes"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id= "seccion_tamano3" onmouseover="seccion3_over()" onmouseout="seccion3_out()">
		Joyería
			<div id="subseccion3">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="argyor_anillos.php"> JOYERÍA </a></div>
						<br><br>
						<div class="lista">
							<ul>
								<li><a href="argyor_anillos.php"> Anillos </a></li>
								<li><a href="argyor_alianzas.php"> Alianzas </a></li>
								
							</ul>
						</div>
							
						<div id="imagenJoyeria"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id="seccion_tamano4" onmouseover="seccion4_over()" onmouseout="seccion4_out()"><a href="colecciones.php" style ="color:white;">Colecciones</a>
			<div id="subseccion4">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="colecciones.php"> COLECCIONES </a> </div>
						<div class="lista">
							<ul>
							
								<a href="joyas_de_olesa.php"><li>Joyas de Olesa</li></a>
								<a href="angel_y_demonio.php"><li>Ángel y Demonio</li></a>
								<a href="olivos.php"><li>Olivos</li></a>
								<a href="joyas_de_weingarten.php"><li>Olesa - Weingarten Baden</li></a>
								<a href="montserrat.php"><li>Montserrat</li></a>
								<a href="puente_del_diablo.php"><li>Puente del diablo</li></a>
								
							</ul>
						</div>
							
						<div id="imagenColecciones"></div>
					</div>
				</div>		
			</div>

		</div>

		<div class="seccion" id="seccion_tamano5" onmouseover="seccion5_over()" onmouseout="seccion5_out()">Regalos y Grabados
			<div id="subseccion5">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">REGALOS Y GRABADOS</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="grabados.php"><li>Grabados</li></a>
								<a href ="regalos_personalizados.php"><li>Regalos personalizados</li></a>
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

