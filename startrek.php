

<!doctype html>
<html lang="es">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
	<link rel="stylesheet" href="css/estilos.css">

	<?php
	  /*
	  se rescatan solo dos campos, favicon y title
	  y se muestran desgranando la variable de resultado $row
	  */
	include("coneccion.php");
	$sql = "select favicon, title from info_pagina;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result)  ?>
			  <?php //$favicon =  "favicon.png"; ?>
			<link rel="shortcut icon" href= <?php echo $row['favicon'];   ?> >
			<?php //$title = "Star Trek Fanpage Chile" ;  ?>
			<title><?php echo $row['title'];  ?></title>
		
	 
	
  </head>
<bo	dy>
		





     


		<!--
		  el carousel me dio problemas al hacer ajustar las imagenes al tamaño del
		  contenedor.
		  finalmente, decidí redimensionar las imágenes con una herramienta de internet
		-->

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">

			  <!-- si elimmino este IMG, las demás no se muestran ni el carousel funciona.
					entonces tengo que dejarlo aquí, aunque se repita una imagen, aunque me duela.-->
			<div class="carousel-item active">
				<?php $img0 = "img/img0.jpg" ;  ?>
			  <img class="d-block w-100" src= <?php  echo $img0 ; ?> >
			</div>
			  <!---->
			  <?php
			  /*
				se cargan las imagenes con una consulta y se 
				desgrana el resultado en sus filas y columnas dentro de un ciclo.
			  */
				include("coneccion.php");
				$sql = "select carpeta, imagen from info_pagina limit 1;";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<div class='carousel-item'>
							<img class='d-block w-100' src=' <?php echo $row['carpeta']. $row['imagen'] ?> '>
							</div>
				 <?php }  	
				?>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próxima</span>
		  </a>	 		
		</div>

 



		<div class="container centrado">
		  <div class="jumbotron text-white">

		<?php
			/*
				se cargan los mensjes con una consulta desde 
				una misma columna y luego se recorren las filas.
			*/

		//select saludo_jumbotron from info_pagina;
		include("coneccion.php");
				$sql = "select saludo_jumbotron, subtitulo from info_pagina limit 1;";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<p class="h1 saludo"><?php echo $row['saludo_jumbotron'];  ?></p>
					<p class="h3 subtitulo"><?php  echo $row['subtitulo']; ?>  </p>

		<?php }
		?>

		  </div>
		</div>


 



    <!-- NAVBAR    -->
    <!--
      esta paete me fue especialmente dificil de hacer funcionar,
      ya que casi todo los ejemplos son para bootstrap 5.3,
      mientras que la plantilla es de bootstrap 4.0
    -->
      
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(67, 67, 254);">
			<!-- <a class="navbar-brand" href="#">Mi Sitio</a>  -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			  <ul class="navbar-nav">

				<li class="nav-item active  ">
				  <a class="nav-link text-white" href="startrek.php">Inicio</a>
				</li>

				<li class="nav-item dropdown ">
				  <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Galería de páginas
				  </a>
					<!-- cada página se abre en una pestaña nueva -->
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="https://intl.startrek.com/" target="_blank">Sitio oficial de Star Trek</a>
					<a class="dropdown-item" href="fibonacci.php" target="_blank">Serie Fibonacci</a>
					<a class="dropdown-item" href="cuento.php" target="_blank">Un Cuento para niños</a>
				  </div>
				</li>
			  </ul>
			</div>
		</nav>



<!------------------------------------------------------------------------------------->
    
		<?php
		include('coneccion.php');
		$sql = 'select texto_intermedio1, texto_intermedio2 from info_pagina limit 1;';
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		?>

		<!-- esto fue fácil -->
		<div class="centrado color-fondo-1"  >
		  <p class="h3"><?php echo $row['texto_intermedio1']; ?></p>
		</div>

		<!-- esto fue fácil -->
		<div class="centrado color-fondo-1">
		  <div class="container">
			<div class="row align-items-start">
			  <div class="col h5"><?php echo $row['texto_intermedio2']; ?></div>
			</div>
		  </div>
		</div>




 

		<!--
		  esto no me dio tantos problemas.
		  es bonito el efecto de las tarjetas
		-->
		<div class="row row-cols-1 row-cols-md-3 g-4 centrado color-fondo-2">	
			<?php
			include('coneccion.php');
			$sql = 'select carpeta, imagen, titulo, contenido from info_pagina;';
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				  <div class="col">
					<div class="card">
					  <img src="<?php echo $row['carpeta'].$row['imagen']; ?>" class="card-img-top rounded" alt="...">
					  <div class="card-body">
						<h5 class="card-title"><?php echo $row['titulo']; ?></h5>
						<p class="card-text"><?php echo $row['contenido'];   ?>
						</p>
					  </div>
					</div>
				  </div>
			<?php }
			?>
		</div> <!----->

 
		<?php
		include('coneccion.php');
		$sql = 'select footer_name, footer_link from info_pagina limit 1;';
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);	?>
		<div class=" text-white" style="background-color: rgb(67, 67, 254);">
		  <div class="container">
			  <div class="row ">
				  <div class="col-8 col-sm-6 col-md-6 centrado">
					  <p class="text-start" style="margin-top:5%;margin-bottom:3%;"><?php echo $row['footer_name']; ?></p>
				  </div>
				  <div class="col-12 col-sm-6 col-md-6 centrado">
					  <p class="text-end" style="margin-top:5%;margin-bottom:8;font-size:1em;">
						  <a href="https://susistema.cl" target="_blank"><?php echo $row['footer_link']; ?></a> 
					  </p>
				  </div>
			  </div>
		  </div>
		</div>
		 







		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>





