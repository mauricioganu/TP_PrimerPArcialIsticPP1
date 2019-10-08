<?php
$costo=25;
$check=$_GET['patente'];
$archivo = fopen("estacionados.txt", 'r');

while (!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo)); //fgets recorro cada uno de los renglones fgets dato hasta final
	
	if ($objeto->Patente==$check)
	{	
		date_default_timezone_set('America/Argentina/Buenos_Aires');

		$salida=mktime();
		$tiempo=$salida-$objeto->$MiObjeto->HoraEntrada;
		$factura=($tiempo/60)*$costo;

		

		$objetoFactura= new stdClass();
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$objetoFactura->Vehiculo=$check;
		 $objetoFactura->FechaEntrada = date("d-m-y H:i",$HoraEntrada);
		 $objetoFactura->FechaSalida = date("d-m-y H:i",$salida);	
		$objetoFactura->importe=$factura;
		$archivo1 = fopen("facturados.txt", 'a');
		fwrite($archivo1, json_encode($objetoFacturado)."\n");
      	 fclose($archivo1);
      	 header("Location: pago.php? &cobrar=".$factura."&ingreso=".$objeto->HoraEntrada."&salida=".$salida."&patente=".$check);


		break;
	}
else
{
	header("Location: no.php");
}
}
fclose($archivo);





?>