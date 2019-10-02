<?php
$objeto= new stdClass();
$objeto=$_GET['fecha'];
$salida= $_GET['Fecha'];
$archivo = fopen("estacionados.txt", "r");

while(!feof($archivo)) 
{
$objeto = json_decode(fgets($archivo));
if ($objeto->Patente == $_GET['patente'])
	{
		
		$segundos= $FechaEntrada-$FechaSalida;
		echo "$segundos";
	} 
	



}

fclose($archivo);

exit();

?>