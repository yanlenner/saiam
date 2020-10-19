<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT pais_nacimiento FROM identificacion_personas where id_persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_pais FROM paises where iso_3166_2='$respuesta[pais_nacimiento]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_pais'];
pg_close($conexion);
?>