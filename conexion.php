<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'facturacion';

	$conection = @mysqli_connect($host, $user,$password,$db);
	mysqli_set_charset($conection, 'utf8');
	if (!$conection) {

		echo "Error en la Conexion";
		# code...
	}

?>