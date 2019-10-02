<?php
$MiObjeto= new stdClass();
date_default_timezone_set("America/Argentina/Buenos_Aires");
$FechaSalida= mktime();
$MiObjeto->Patente=$_GET['patente'];
$MiObjeto->FechaSalida=$FechaSalida;
$archivo=fopen('estacionados.txt', 'a');
header("Location: salida.php");
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>