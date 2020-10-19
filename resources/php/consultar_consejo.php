<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT consejo_comunal FROM contacto_personas where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_consejo FROM consejos_comunales where id_consejo_comunal='$respuesta[consejo_comunal]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_consejo'];
pg_close($conexion);
?>