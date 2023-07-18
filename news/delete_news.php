<?php
// Obtener el ID de la noticia a eliminar
$id = $_GET['id'];

// Conexión a la base de datos
  include("../coneccion.php");
	
// Eliminar la noticia de la base de datos
$query = "DELETE FROM noticias WHERE id = '$id'";
mysqli_query($conn, $query);

// Cerrar la conexión a la base de datos
mysqli_close($conn);

// Redireccionar a la página de noticias
header("Location: news.php");
exit();
?>
