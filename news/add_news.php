<!DOCTYPE html>
<html>
<head>
  <title>Agregar Noticia</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="mt-4">Agregar Noticia</h1>

    <form action="add_news.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>

      <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
      </div>

      <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea class="form-control" id="contenido" name="contenido" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
  </div>
</body>
</html>

<?php
// Procesar el formulario de agregar noticia
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Conexión a la base de datos
  include("../coneccion.php");
	
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];

  // Subir la imagen
  $imagen = $_FILES['imagen']['name'];
  $imagen_temp = $_FILES['imagen']['tmp_name'];
  move_uploaded_file($imagen_temp, 'img/' . $imagen);

  // Insertar la noticia en la base de datos
  $query = "INSERT INTO noticias (titulo, imagen, contenido) VALUES ('$titulo', '$imagen', '$contenido')";
  mysqli_query($conn, $query);

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);

  // Redireccionar a la página de noticias
  header("Location: news.php");
  exit();
}
?>
