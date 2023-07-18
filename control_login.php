<?php

include('coneccion.php');

 

// Recibir los datos del formulario
$user = $_POST['username'];
$pass = $_POST['password'];


 
// Consultar la base de datos para verificar si existe el usuario
$sql = "SELECT COUNT(*) as count FROM usuarios WHERE user = '$user' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];
    if ($count > 0) {
        // El usuario existe en la base de datos
        echo 1;
    } else {
        // El usuario no existe en la base de datos
        echo 0;
    }
} else {
    // Error en la consulta
    echo "Error al consultar la base de datos";
}

// Cerrar la conexión
$conn->close();
?>
