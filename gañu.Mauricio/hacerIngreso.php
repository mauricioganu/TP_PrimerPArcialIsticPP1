<?php
$MiObjeto= new stdClass();
date_default_timezone_set("America/Argentina/Buenos_Aires");
$FechaEntrada= mktime();
$MiObjeto->Patente=$_GET['patente'];
$MiObjeto->FechaEntrada=$FechaEntrada;
$archivo=fopen('estacionados.txt', 'a');
header("Location: ok.php");
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>
