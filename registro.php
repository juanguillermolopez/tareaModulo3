<!DOCTYPE html>
<html>
<head>
  <title>Formulario de registro de usuarios</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .container {
      max-width: 400px;
    }
  </style>
	
</head>
<body>
  <div class="container">
    <h2>Registro de usuario</h2>
    <form id="registrationForm">
      <div class="form-group">
        <label for="username">Nombre de usuario:</label>
        <input type="email" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password1">Contraseña:</label>
        <input type="password" class="form-control" id="password1" name="password1" required>
      </div>
	  <div class="form-group">
        <label for="password2">Repita la Contraseña:</label>
        <input type="password" class="form-control" id="password2" name="password2" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
	  <div class="mt-3 text-center">
      <p>¿Ya tiene una cuenta? <a href="index.php">Iniciar sesión</a>.</p>
    </div>
  </div>

  <script>
	  
    $(document).ready(function() {
		
		$('#registrationForm').submit(function(event) {
			event.preventDefault();

			var pass1 = document.getElementById("password1").value
			var pass2 = document.getElementById("password2").value
			
			if ( pass1 == pass2 ){
				
				enviar()

			}else{
				alert("Las contraseñas no coinciden. Intente de nuevo.")
			}
		});

	   
	  
	  
		function enviar(){
			// Obtener los datos del formulario
			var formData = $("#registrationForm").serialize();

			$.ajax({
				  url: 'procesar_registro.php',
				  type: 'POST',
				  data: formData,
				  success: function(response) {
					  if (response == 1){
						  alert("Registro exitoso!")
						  window.location.href = "index.php";
					  }else{
						  alert("Este nombre de usuario ya existe. Pruebe con otro.")
					  }
				  }
			})
		}
	 
    });  // cierra el document
	  
	  
  </script>
</body>
</html>
