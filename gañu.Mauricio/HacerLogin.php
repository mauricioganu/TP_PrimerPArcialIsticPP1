<?php


$archivo = fopen("registro.txt", "r");

while(!feof($archivo)) 
{
$objeto = json_decode(fgets($archivo));
if ($objeto->Usuario == $_GET['usuario'] && $objeto->Clave == $_GET['clave'])
	{
		header("Location: ingresoVehiculo.php");
		fclose($archivo);
		exit();
	}

if ($objeto->Usuario != $_GET['usuario'] )
	{
		header("Location: no.php");
		fclose($archivo);
		exit();
	}

if($objeto->Clave != $_GET['clave'])
	{
		header("Location: no.php");
		fclose($archivo);
		exit();
	}

}

fclose($archivo);

exit();

?>
