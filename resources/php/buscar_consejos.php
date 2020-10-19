<?php

require_once 'enlace.php';
	$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
	$consulta = pg_query($conexion, "SELECT id_consejo_comunal, nm_consejo FROM consejos_comunales where id_parroquia=$_POST[id]");
	while($consejo = pg_fetch_array($consulta))
	{
		$cadena[]=$consejo;
	}

pg_close($conexion);
		echo json_encode($cadena);



?>