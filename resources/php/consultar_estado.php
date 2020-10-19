<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT estado FROM contacto_personas where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$respuesta[estado]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_estado'];
pg_close($conexion);
?>