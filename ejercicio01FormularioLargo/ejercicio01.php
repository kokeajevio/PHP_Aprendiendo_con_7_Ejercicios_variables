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
			<form action="procesar.php" method="post">
				<div>
					<label>Nombre:</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>

				<div>
					<label>Apellido paterno:</label>
					<input class="input is-primary" type="text" name="apellidoP" required>
                </div>

				<div>
					<label>Apellido materno:</label>
					<input class="input is-primary" type="text" name="apellidoM" required>
                </div>
				
				<div>
					<label>Cargo:</label>
					<input class="input is-primary" type="text" name="cargo" required>
                </div>

				<div>
					<label>RFC:</label>
					<input class="input is-primary" type="text" name="rfc" required>
                </div>

				<div>
					<label>CURP:</label>
					<input class="input is-primary" type="text" name="curp" required>
                </div>

				<div>
					<label>Domicilio:</label>
					<input class="input is-primary" type="text" name="domicilio" required>
                </div>

				<div>
					<label>Correo electrónico:</label>
					<input class="input is-primary" type="email" name="correo" required>
                </div>

				<br>

				<div>
					<label>Sexo:</label>
					<select name="sexo"></option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select><br>
                </div>

				<br>

				<div>
					<label>Fecha de nacimiento:</label>
					<input class="input is-primary" type="date" name="fechaN" required>
				</div>

				<br>

				<div>
				<label>Estado civil:</label>
					<select name="estadoC"></option>
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
						<option value="Unión libre">Unión libre</option>
                    </select><br>
				</div>

				<br>

				<div>
				<label>Escolaridad:</label>
					<select name="esc"></option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secudaria">Secundaria</option>
						<option value="Preparatoria">Preparatoria</option>
						<option value="Técnico profesional">Técnico profesional</option>
                    </select><br>
				</div>

				<br>

				<div>
					<label>Teléfono</label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>

				<div>
					<label>Referencia familiar:</label>
					<input class="input is-primary" type="text" name="ref" required>
                </div>

				<div>
					<label>Observaciones:</label>
					<input class="input is-primary" type="text" name="observaciones" required>
                </div>

				<br>

				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>
