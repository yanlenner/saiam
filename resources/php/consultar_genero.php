<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT genero FROM identificacion_personas where id_persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
if($respuesta['genero']=='H')
	echo 'Hombre';
else
	echo 'Mujer';
pg_close($conexion);
?>