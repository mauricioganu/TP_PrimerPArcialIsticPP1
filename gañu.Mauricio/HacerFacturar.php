<?php
$check=$_GET['patente'];
$archivo = fopen("estacionados.txt", "r");

while (!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo));
	$objetoPatente = $objeto->Patente;
	if ($objetoPatente==$check)
	{
		$check1=$_GET['FechaSalida'];
		//$archivo1= fopen("estacionados.txt", "r");
		$objetoFechaSalida = $objeto->FechaSalida;
		$check2=$_GET['FechaEntrada'];
		//$archivo2= fopen("estacionados.txt", "r");
		$objetoFechaEntrada = $objeto->FechaSalida;
		echo("$objetoFechaEntrada");
		echo("$objetoFechaSalida");
		//fclose($archivo1);
		//exit();
		//fclose($archivo2);
		//exit();
		
	}
}
fclose($archivo);
exit();






?>