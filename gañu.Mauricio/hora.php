
<?php 
$hora = "13:00:00";
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 ) + $segundos;
echo $hora_en_segundos;
?>




<?php
function segundosToCadena($segs){
$cadena = '';
if($segs >= 86400) {
$dias = floor($segs/86400);
$segs = $segs%86400;
$cadena = $dias.'día';
if($dias != 1) $cadena .= 's';
if($segs >= 0) $cadena .= ',';
}
if($segs>=3600){
$horas = floor($segs/3600);
$segs = $segs%3600;
$cadena .= $horas. 'hora';
if($horas != 1) $cadena .= 's';
if($segs >= 0) $cadena .= ',';
}
if($segs>=60){
$minutes = floor($segs/60);
$segs = $segs%60;
$cadena .= $minutes.'minuto';
if($minutes != 1) $cadena .= 's';
if($segs >= 0) $cadena .= ',';
}
$cadena .= $segs.'segundo';
if($segs != 1) $cadena .= 's';
return $cadena;
}

echo segundosToCadena(6284629);
echo segundosToCadena(3600);
echo segundosToCadena(3601);

?>