<?php
session_start();
require_once 'enlace.php';
$rol=$_SESSION['rol']+1;
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT id_persona FROM identificacion_personas where no_cedula='$_POST[ci]' and rol='$rol'");
$respuesta= pg_fetch_array($consulta);
if($respuesta['id_persona']==0)
	echo 'false';
else
	echo $respuesta['id_persona'];
pg_close($conexion);
?>