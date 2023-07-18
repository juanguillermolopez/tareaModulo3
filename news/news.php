<!DOCTYPE html>
<html>
<head>
  <title>Noticias</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .news-container {
      margin-top: 20px;
    }
    .news {
      margin-bottom: 20px;
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
					<a class="dropdown-item" href="../fibonacci.php" target="_blank">Serie Fibonacci</a>
					<a class="dropdown-item" href="../cuento.php" target="_blank">Un Cuento para niños</a>
					  <a class="dropdown-item" href="news.php" target="_blank">Noticias</a>
				  </div>
				</li>
			  </ul>
			</div>
		</nav>

	
  <div class="container">
    <h1 class="mt-4 mb-4">Noticias</h1>

    <div class="news-container">
      <?php
        // Conexión a la base de datos
        include("../coneccion.php");

        // Obtener todas las noticias
        $query = "SELECT * FROM noticias ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        // Mostrar las noticias
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div  class="card news">';  
          echo '<img style="width:300px;" src="' . 'img/'.$row['imagen'] . '" class="card-img-top" alt="Imagen">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">' . $row['titulo'] . '</h5>';
          echo '<p class="card-text">' . $row['contenido'] . '</p>';
          echo '<a href="edit_news.php?id=' . $row['id'] . '" class="btn btn-primary">Editar</a>';
          echo '<a href="delete_news.php?id=' . $row['id'] . '" class="btn btn-danger">Eliminar</a>';
          echo '</div>';
          echo '</div>';
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
      ?>
    </div>

    <a href="add_news.php" class="btn btn-success mt-4">Agregar noticia</a>
  </div>
</body>
</html>
