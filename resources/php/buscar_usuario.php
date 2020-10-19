<?php 
include 'funciones.php';
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$usuario=lenner($_POST['usr']);
$usuario=md5($usuario);
$consulta = pg_query($conexion, "SELECT usuario FROM acceso_personas where usuario='$usuario'");
$respuesta= pg_fetch_array($consulta);
if($respuesta['usuario']==$usuario)
	echo 'true';
else
	echo 'false';

pg_close($conexion);
?>