<!DOCTYPE html>
<html>
<head>
  <title>Formulario de inicio de sesión</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Inicio de sesión</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Nombre de usuario:</label>
        <input type="email" class="form-control" id="username" name="username" 
			   maxlength="50" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" 
			   maxlength="20" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
    </form>
    <div class="mt-3 text-center">
      <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
    </div>
  </div>
 
</body>
</html>









 <script>
    $(document).ready(function() {
	  $('#loginForm').submit(function(event) {
		event.preventDefault();

		// Obtener los datos del formulario
		var formData = $(this).serialize();

		$.ajax({
		  url: 'control_login.php',
		  type: 'POST',
		  data: formData,
		  success: function(response) {
			// Lógica para manejar la respuesta del servidor después de enviar el formulario
			  if (response == 1){
				  //ahora se dirige a la pagina principal
				  window.location.href = "startrek.php";
			  }else{
				  alert("Nombre usuario o contraseña incorrecta.")
			  }
		  },
		  error: function(xhr, status, error) {
			// Manejo de errores en caso de que la solicitud Ajax falle
			console.log(xhr.responseText);
		  }
		});
	  });
	});

  </script>


