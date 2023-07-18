<?php

include("coneccion.php");


// Recibir los datos del formulario
$user = 'admin@aciasistencia.cl';    //    $_POST['username'];  //     
$pass = 'aci';     //     $_POST['password1'];    //      


// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (user, pass) VALUES ('$user', '$pass')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
	// "Registro exitoso"
    echo 1;
} else {
	// "Error al registrar usuario: " . $conn->error;
    echo 0;
}

// Cerrar la conexión
$conn->close();
?>
