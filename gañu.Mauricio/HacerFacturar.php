<?php
$check=$_GET['patente'];
$archivo = fopen("estacionados.txt", 'r');

while (!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo)); //fgets recorro cada uno de los renglones fgets dato hasta final
	
	if ($objetoPatente==$check)
	{	$tiempo=$FechaSalida-$objeto->FechaEntrada;
		$importe=($tiempo/60)*100;




		$objeto->importe=$importe;
		$objeto->FechaSalida=$FechaSalida;
		

		$archivo1 = fopen("facturados.txt", 'r');
		break;

		
		
	}
}
fclose($archivo);





?>