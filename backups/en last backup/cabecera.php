<!-- inicializamos los componentes básicos de la estructura de la página web-->

<div id="barra_sup_all">

	<div id="barra_sup"> 

		<div id="barra_sup_idiomas" class="negrita"> 

			<?php

				include("../en/language_swapper.php")
			?>

		</div>

		<div id="barra_sup1" class="negrita"> <a href= "../en/contactanos.php"> CONTACT US</a> &nbsp;|&nbsp; <a href="../en/quienes_somos.php ">ABOUT US</a> </div>

	</div>

</div>

<?php 
	
	    $ruta = $_SERVER['REQUEST_URI'] . "/.."; 

?>

<div id="cabecera">
	<div id="cabecera_interior">

		<!-- Logo y nombre de la empresa-->
		<a href="../en/index.php ">
			<div id="logo1"></div>

			<div id="logo2">
				<div class="cursiva">OLIVERAS-PLA <br>Olesa de Montserrat</div>
			</div>
		</a>
		
		<!-- Zona de sección de productos-->
		<div class="seccion" id="seccion_tamano1" onmouseover="seccion1_over()" onmouseout="seccion1_out()">Handicraft & Restoration
			<div id="subseccion1">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">HANDICRAFT & RESTORATION</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="../en/relojes_antiguos.php"><li>Old clocks</li></a>
								<a href ="../en/disenos_propios.php"><li>Own designs</li></a>
							</ul>
						<div id="imagenAR"></div>
						</div>
						
					</div>

				</div>		
			</div>
		</div>
			
		<div class="seccion" id="seccion_tamano2" onmouseover="seccion2_over()" onmouseout="seccion2_out()">
		<a href="../en/marcas_relojes.php" style ="color:white;"> Watches </a>
			<div id="subseccion2">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../en/marcas_relojes.php">WATCHES</a></div>
						<div class="lista">
							<ul>
								<li><a href="../en/marcas_relojes.php?pag=1&tipo=hombre">Man</a></li>
								<li><a href="../en/marcas_relojes.php?pag=1&tipo=mujer">Woman</a></li>
								<li><a href="../en/relojes_potens.php ">Potens</a></li>
								<li><a href="../en/relojes_nowley.php">Nowley</a></li>
								<li><a href="../en/relojes_citizen.php">Citizen</a></li>
								<li><a href="../en/relojes_sector.php">Sector</a></li>
							</ul>
						</div>
							
						<div id="imagenRelojes"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id= "seccion_tamano3" onmouseover="seccion3_over()" onmouseout="seccion3_out()">
		Jewelry
			<div id="subseccion3">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../en/argyor_anillos.php"> JEWELRY </a></div>
						<br><br>
						<div class="lista">
							<ul>
								<li><a href="../en/argyor_anillos.php"> Rings </a></li>
								<li><a href="../en/argyor_alianzas.php"> Wedding rings </a></li>
								
							</ul>
						</div>
							
						<div id="imagenJoyeria"></div>

					</div>		
				</div>
			</div>

		</div>

		<div class="seccion" id="seccion_tamano4" onmouseover="seccion4_over()" onmouseout="seccion4_out()">
		<a href="../en/colecciones.php" style ="color:white;">Collections</a>
			<div id="subseccion4">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo"><a href="../en/colecciones.php"> COLLECTIONS </a> </div>
						<div class="lista">
							<ul>
							
								<a href="../en/joyas_de_olesa.php"><li>Olesa jewelry</li></a>
								<a href="../en/angel_y_demonio.php"><li>Angels & Demons</li></a>
								<a href="../en/olivos.php"><li>Olive trees</li></a>
								<a href="../en/joyas_de_weingarten.php"><li>Olesa - Weingarten Baden</li></a>
								<a href="../en/montserrat.php"><li>Montserrat</li></a>
								<a href="../en/puente_del_diablo.php"><li>Devil's bridge</li></a>
								
							</ul>
						</div>
							
						<div id="imagenColecciones"></div>
					</div>
				</div>		
			</div>

		</div>

		<div class="seccion" id="seccion_tamano5" onmouseover="seccion5_over()" onmouseout="seccion5_out()">Gifts & Engravings
			<div id="subseccion5">
				<div class="fondo_blanco">
					<div class="seccion_texto">

						<div class="seccion_titulo">GIFTS & ENGRAVINGS</div>
						<br><br>
						<div class="lista">
							<ul>
								<a href ="../en/grabados.php"><li>Engravings</li></a>
								<a href ="../en/regalos_personalizados.php"><li>Customized gifts</li></a>
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

