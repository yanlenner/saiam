<?php

require_once 'enlace.php';
	$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
	$consulta = pg_query($conexion, "SELECT id_pregunta, descripcion FROM preguntas_de_seguridad");
	while($pregunta = pg_fetch_array($consulta))
	{
		$cadena[]=$pregunta;
	}

pg_close($conexion);
		echo json_encode($cadena);



?>