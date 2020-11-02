<?php

if(isset($_POST["Score"]) && isset($_POST["v1"]))
{
	if(($_POST["Score"]) && ($_POST["v1"]))
    {

	$servidor="localhost";
	$usuario="root";
	$clave="";
	$basedatos="score";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);

		echo "Se ha enviado correctamente: ".$_POST["Score"];
		
		$Score =$_POST["Score"];
		$v1 = ($_POST["v1"]);

		$insertardatos="INSERT INTO puntos values ('','pedro','@gmail','$v1','$Score')";
		
		$ejecutarIn = mysqli_query($enlace, $insertardatos);
	}
}
?>