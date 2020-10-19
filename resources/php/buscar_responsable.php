<?php 
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT id_persona FROM identificacion_personas where no_cedula='$_POST[ci]'");
$respuesta= pg_fetch_array($consulta);
if($respuesta['id_persona']==0)
	echo 'false';
else
	echo 'true';

pg_close($conexion);
?>