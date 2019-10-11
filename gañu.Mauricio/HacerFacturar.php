<?php

$costo = 100;
$archivo=fopen("estacionados.txt", "r");
$check = $_GET['patente'];

while(!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo));
	if ($objeto->Patente == $check);
	{
		$HoraSalida = mktime();
		$tiempo = ($HoraSalida-$objeto->HoraEntrada)/60/60;
		$factura = $tiempo. $objeto->HoraEntrada;
		$entrada = $objeto->HoraEntrada;

		$objetofactura = new stdClass();

		date_default_timezone_set('America/Argentina/Buenos_Aires');

		$objetofactura->vehiculo = $check;
		$objetofactura->entrada = date("d-m-y H:i",$objeto->HoraEntrada);
		$objetofactura->HoraSalida = date("d-m-y H:i",$HoraSalida);

		$archivo1 = fopen('facturados.txt', 'a');
		fwrite($archivo1, json_encode($objetofactura). "\n");
		fclose($archivo1);

		header("Location: facturarok.php?factura=$factura&entrada=$entrada");
		break;	
	}	

}

fclose($archivo)



?>