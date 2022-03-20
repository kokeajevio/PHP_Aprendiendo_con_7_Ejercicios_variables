<?php
$cantidad=array(4,5,1,3,2);
$i=0;
$NotaT=$cantidad[$i];
$NotaP=$cantidad[$i];

while($i<=4){
	if($NotaT>$cantidad[$i]){ $NotaT=$cantidad[$i];	}
	$i=$i+1;
}
echo"La nota menor es $NotaT <br />";
$i=0;
while($i<=4){
	if($NotaP<$cantidad[$i]){ $NotaP=$cantidad[$i];	}
	 $i=$i+1;
}
echo"La nota mayor es $NotaP <br />";
?>
