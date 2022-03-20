<form action="index.php" method="post"><html>
<head>
<title> Saludo </title>
</head>
<body>
<?php
echo "¡Bienvenido ".$nombre." ".$apellido."  al formulario!. ";

$año = 2004;
$edad = $año - $nacimiento;

echo " Tienes ".$edad." años.";

?>
</body>
</html>
