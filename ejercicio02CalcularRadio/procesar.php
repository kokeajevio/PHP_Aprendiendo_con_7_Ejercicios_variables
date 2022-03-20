


<?php

define("PI", 3.1416);
# Leer el diámetro desde el formulario que fue enviado a este script
$diametro = $_POST["diametro"];
/*
Realizar cálculos
 */
$circunferencia = PI * $diametro;
$radio = $diametro / 2;
/*
Imprimir
*/
echo "La circunferencia del círculo es: " . $circunferencia . " <br>";
echo "El radio del círculo es " . $radio . " <br>";

?>
