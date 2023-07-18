<!DOCTYPE html>
<html>
<head>
  <title>Serie Fibonacci</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<style>
    #fibonacci-list {
      list-style-type: none;
      padding: 0;
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
					<a class="dropdown-item" href="fibonacci.php" target="_blank">Serie Fibonacci</a>
					<a class="dropdown-item" href="cuento.php" target="_blank">Un Cuento para niños</a>
				  </div>
				</li>
			  </ul>
			</div>
		</nav>



	<?php
		include('coneccion.php');
		$sql = "select numero from fibo limit 1;";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	?>
  <div class="container">
    <h1 class="mt-4">Serie Fibonacci</h1>
    <form method="post" action="">
      <div class="form-group">
        <label for="fibonacci-input">Mostrar hasta el número:</label>
        <input type="number" class="form-control" id="fibonacci-input" name="limit" 
			  	min="1" max="99" required value='<?php echo $row['numero']; ?>'></inupt>
      </div>
      <button type="submit" class="btn btn-primary">Generar</button>
    </form>

    <?php
    // Función para generar la serie de Fibonacci
    function generateFibonacci($limit) {
      $fibonacci = [0, 1]; // Primeros dos números de la serie
      
      for ($i = 2; $i <= $limit; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      }
      
      return $fibonacci;
    }
    
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $limit = intval($_POST["limit"]);
      
      // Validar si el número es válido
      if ($limit < 1 || $limit > 99) {
        echo "<p class='text-danger'>Por favor, ingresa un número válido entre 1 y 99.</p>";
      } else {
        echo "<ul id='fibonacci-list' class='mt-4'>";
        
        // Generar la serie de Fibonacci
        $fibonacciSeries = generateFibonacci($limit);
        
        // Mostrar la serie iteración por iteración
        for ($j = 0; $j <= $limit; $j++) {
          echo "<li>" . $fibonacciSeries[$j] . "</li>";
        }
        
        echo "</ul>";
      }
    }
    ?>
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
