<?php
   $contador = 1;
   $limite = 100;
   echo ("<p> <blockquote> El primer bucle contar del 1 al 100: </p> ");
   while($contador < $limite){
      echo $contador . ',';
      $contador++;
   }
    echo (" <p>  El segundo bucle cuenta atrás a partir de 10: </p> ");
   for($i = 10; $i > 0; $i--){
      echo $i . ',';
   }
?>
