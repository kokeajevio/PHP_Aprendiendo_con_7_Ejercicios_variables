<?php
   $contador = 1;
   $limite = 100;
   echo ("<h3>Ejercicio 07. </h3>");
   echo ("<h3>Bucles a través de PHP</h3>");
   echo ("<h1> <blockquote> El primer bucle contar del 1 al 100: </h1> ");
   while($contador < $limite){
      echo $contador . ' , ';
      $contador++;
   }
    echo (" <h1> <blockquote> El segundo bucle cuenta atrás a partir de 10: </h1> ");
   for($i = 10; $i > 0; $i--){
      echo  $i . ' , ';
   }
?>
