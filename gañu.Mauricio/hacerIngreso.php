<?php
$MiObjeto= new stdClass();
$MiObjeto->Patente=$_GET['patente'];
$MiObjeto->Hora=$_GET['hora'];
//$MiObjeto->Fecha=$_GET['fecha'];
$MiObjeto->Fecha= date("d-m-Y ");
$archivo=fopen('estacionados.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>
