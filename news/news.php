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
