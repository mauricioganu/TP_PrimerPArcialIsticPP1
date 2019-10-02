<?php

$check= $_GET['patente'];
$archivo = fopen("estacionados.txt", "r");

while(!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo));
	$objeto=$objeto->Patente;
	if ($objetoPatente==$check)
	{	
		$segundos=$FechaSalida-$FechaEntrada;
		echo "$segundos";
		
	}

}

fclose($archivo);
exit();

?>