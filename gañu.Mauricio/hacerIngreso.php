<?php
$MiObjeto= new stdClass();
date_default_timezone_set("America/Argentina/Buenos_Aires");
$HoraIngreso= time(); 
$MiObjeto->Patente=$_GET['patente'];
$MiObjeto->HoraEntrada=$HoraIngreso;
$archivo=fopen('estacionados.txt', 'a');

fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: ingresook.php");
?>
