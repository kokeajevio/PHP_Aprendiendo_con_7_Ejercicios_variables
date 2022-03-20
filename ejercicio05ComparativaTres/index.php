<?php
$NotaT=1;
$NotaP=5;
$NotaAct=10;
if($NotaT>$NotaP && $NotaT>$NotaAct)
{
echo "El valor mayor es el de la nota llamada NotaT =".$NotaT;
}
else if($NotaP>$NotaT && $NotaP>$NotaAct)
{
echo "El valor mayor es el de la nota llamada NotaP =".$NotaP;
}
else if($NotaAct>$NotaT && $NotaAct>$NotaP)
{
echo "El valor mayor es el de la nota llamada NotaAct =".$NotaAct;
}
else
{
echo"No hay valores iguales: ";
}
?>
