<?php
	require_once 'funciones.php';
		require_once 'enlace.php';
		$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
		$ci = $_POST['ci'];
		$username=md5(lenner($_POST['usr']));
		$consulta="SELECT id_persona FROM identificacion_personas where no_cedula='$ci'";
		$respuesta=query_r($conexion,$consulta); 
		$consulta="SELECT pregunta_seguridad FROM acceso_personas where persona='$respuesta[id_persona]' and usuario='$username'";
		$respuesta=query_r($conexion,$consulta);
		$consulta="SELECT descripcion FROM preguntas_de_seguridad where id_pregunta='$respuesta[pregunta_seguridad]' ";
		$respuesta=query_r($conexion,$consulta);
		echo $respuesta['descripcion'];
		pg_close($conexion);
		?>