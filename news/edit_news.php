<!DOCTYPE html>
<html>
<head>
  <title>Editar Noticia</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php
	
	// Conexión a la base de datos
  include("../coneccion.php");
	
  // Obtener el ID de la noticia a editar
  $id = $_GET['id'];



  // Obtener la noticia por su ID
  $query = "SELECT * FROM noticias WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);
  ?>

  <div class="container">
    <h1 class="mt-4">Editar Noticia</h1>

    <form action="edit_news.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $row['titulo']; ?>" required>
      </div>

      <div class="form-group">
        <label for="imagen">Cambiar Foto:</label>
        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
        <small class="form-text text-muted">Sube una nueva foto si deseas cambiarla.</small>
      </div>

      <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea class="form-control" id="contenido" name="contenido" required><?php echo $row['contenido']; ?></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</body>
</html>

<?php
// Procesar el formulario de editar noticia
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];

	// Conexión a la base de datos
  include("../coneccion.php");
	
  // Actualizar la noticia en la base de datos
  $query = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido'";

  // Verificar si se ha subido una nueva imagen
  if ($_FILES['imagen']['name']) {
    $imagen = $_FILES['imagen']['name'];
    $imagen_temp = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($imagen_temp, 'img/' . $imagen);

    $query .= ", imagen = '$imagen'";
  }

  $query .= " WHERE id = '$id'";
  mysqli_query($conn, $query);

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);

  // Redireccionar a la página de noticias
  header("Location: news.php");
  exit();
}
?>
