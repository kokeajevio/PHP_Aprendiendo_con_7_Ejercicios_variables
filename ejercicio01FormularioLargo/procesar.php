<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FormularioPHP</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Datos de persona
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php
	
				$nombre = $_POST['nombre'];
				$apellidoP = $_POST['apellidoP'];
				$apellidoM = $_POST['apellidoM'];
				$cargo = $_POST['cargo'];
				$rfc = $_POST['rfc'];
				$curp = $_POST['curp'];
				$domicilio = $_POST['domicilio'];
				$correo = $_POST['correo'];
				$sexo = $_POST['sexo'];
				$fechaN = $_POST['fechaN'];
				$estadoC = $_POST['estadoC'];
				$escolaridad = $_POST['esc'];
				$telefono = $_POST['telefono'];
				$referencia = $_POST['ref'];
				$observaciones = $_POST['observaciones'];

				echo "<h1 class='is-subtitle'>";
				echo "Hola " . $nombre . " " . $apellidoP . " " . $apellidoM . ".";
				echo "<br>Tu puesto es: " . $cargo . ".";
				echo "<br>Tu RFC es: " . $rfc;
				echo "<br>Tu CURP es: " . $curp;
				echo "<br>Tu domicilio es: " . $domicilio;
				echo "<br>Tu correo electrónico: " . $correo;
				if (isset($_POST['sexo'])) {
					$sexo = $_POST['sexo'];
				    switch ($sexo) {
					    case 'Hombre':
						echo "<br>Sexo: " . $sexo . ".";
					break;
					case 'Mujer':
						echo "<br>Sexo: " . $sexo . ".";
					break;
				}
			}
				echo "<br>Naciste el " . $fechaN;
				if (isset($_POST['estadoC'])) {
					$estadoC = $_POST['estadoC'];
				    switch ($estadoC) {
					    case 'Soltero':
						echo "<br>Estado civil: " . $estadoC . ".";
					break;
					case 'Casado':
						echo "<br>Estado civil: " . $estadoC . ".";
					break;
					case 'Unión libre':
						echo "<br>Estado civil: " . $estadoC . ".";
				}
			}
			if (isset($_POST['esc'])) {
				$escolaridad = $_POST['esc'];
				switch ($escolaridad) {
					case 'Primaria':
					echo "<br>Escolaridad : " . $escolaridad . ".";
				break;
				case 'Secundaria':
					echo "<br>Escolaridad: " . $escolaridad . ".";
				break;
				case 'Preparatoria':
					echo "<br>Escolaridad: " . $escolaridad . ".";
				break;
				case 'Técnico profesional':
					echo "<br>Escolaridad: " . $escolaridad . ".";
			}
		}   
		        echo "<br>Tu número telefónico es: " . $telefono;
		        echo "<br>Referencias familiares: " . $referencia;
				echo "<br>Observaciones: " . $observaciones;
				echo "</h1>";
			?>

		</div>

		<div class="column"></div>

	</section>

</body>
</html>



