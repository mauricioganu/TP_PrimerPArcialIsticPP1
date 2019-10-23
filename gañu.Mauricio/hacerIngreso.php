<?php
$MiObjeto= new stdClass();
date_default_timezone_set("America/Argentina/Buenos_Aires");
$MiObjeto->Patente=$_GET['Patente'];
$MiObjeto->Horario=date("d-m-y H:i:s");
$archivo=fopen('estacionados.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
header("Location: ingresook.php");
?>


