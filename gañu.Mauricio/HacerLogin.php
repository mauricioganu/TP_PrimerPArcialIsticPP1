<?php

$check= $_GET['usuario'];
$archivo = fopen("registro.txt", "r");

while(!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo));
	$objetoUsuario=$objeto->Usuario;
	if ($objetoUsuario==$check)
	{	
		if ($objeto->Clave == $_GET['clave'])
		{
			header("Location: ingresoVehiculo.php");
			fclose($archivo);
			exit();
		}
		else
		{
			header("Location: no.php");
			fclose($archivo);
			exit();
		}
	}

}

fclose($archivo);
exit();

?>