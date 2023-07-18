<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "diseño_web";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Si la conexión se realizó con éxito
//echo "Conexión exitosa a la base de datos";

// Realizar operaciones con la base de datos...

// Cerrar la conexión
// no se puede llamar 2 veces
//$conn->close();
?>
