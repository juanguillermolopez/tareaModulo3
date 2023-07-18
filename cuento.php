<!DOCTYPE html>
<html>
<head>
  <title>Un cuento para niños</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<style>
    #cuento-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>

	
	

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



	
  <div class="container" id="cuento-container">
    <h1>El conejo Benito</h1>

    <div>
		<?php  
		// carga la imagen del conejo
		include('coneccion.php');
		$sql = "select imagen from info_pagina where imagen = 'benito.png' limit 1;";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result) 
		?>
      <img class="rounded" src=<?php echo $row['imagen'];  ?> alt="Conejo Benito" style="max-width: 100%;">
    </div>

	  
	  <!-- si elige un idioma, se cargan las variables de php  -->
    <div class="form-group mt-4">
      <label for="idioma">Idioma:</label>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select class="form-control" id="idioma" name="idioma" onchange="this.form.submit()">
			<?php  
			// carga los idiomas en la lista
			include('coneccion.php');
			$sql = "select idioma,
							label_idioma
					from info_pagina limit 3;";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) { ?>
				<option value=<?php echo $row['idioma'] ?> <?php if(isset($_POST['idioma']) && $_POST['idioma'] === $row['idioma']) echo 'selected'; ?>><?php echo $row['label_idioma']   ?></option>
			<?php }
			?>	
        </select>
      </form>
    </div>

    <div id="cuento">
      <!--  esta traducido a ingles, español y ruso    -->
      <?php
		// si no hay un idioma seleccionado,  por defecto es español
		$idioma = isset($_POST['idioma']) ? $_POST['idioma'] : 'es';
		
		// carga el texto traducido
			include('coneccion.php');
			$sql = "select titulo_cuento,
							relato,
							fin_cuento,
							idioma
					from info_pagina limit 3;";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) { 
				if ($idioma === $row['idioma']) {
				  	echo '<p><h1>'.$row['titulo_cuento'].'</h1><br>'.
				   	$row['relato'] . '</p>';
					echo '<p>' . $row['fin_cuento'] . '</p>';
				}
			}
      ?>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
