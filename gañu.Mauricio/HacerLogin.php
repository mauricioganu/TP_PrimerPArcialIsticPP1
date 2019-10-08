<?php

$check= $_GET['usuario'];
$clave=$_GET['clave'];
$archivo = fopen("registro.txt", 'r');
$contador=0;
while(!feof($archivo)) 
{
	$objeto = json_decode(fgets($archivo));
	
	if ($objeto->Usuario==$check)
	{	
		if ($objeto->Clave == $_GET['clave'])
		{
			$contador=1;
		}
		
	}
	if ($contador==1)
	{
		header("Location: ok.php");
	}
	else
	{
		header("Location: no.php");
			}

}

fclose($archivo);
exit();

?>