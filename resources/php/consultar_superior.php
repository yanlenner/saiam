<?php 
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
if($_SESSION['rol']==1){
$consulta = pg_query($conexion, "SELECT lider FROM responsables_estadales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT primer_nombre, primer_apellido FROM identificacion_personas where id_persona='$respuesta[lider]'");
$respuesta= pg_fetch_array($consulta);
echo "$respuesta[primer_nombre] $respuesta[primer_apellido]";
}
if($_SESSION['rol']==2){
$consulta = pg_query($conexion, "SELECT lider FROM responsables_municipales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT primer_nombre, primer_apellido FROM identificacion_personas where id_persona='$respuesta[lider]'");
$respuesta= pg_fetch_array($consulta);
echo "$respuesta[primer_nombre] $respuesta[primer_apellido]";
}
if($_SESSION['rol']==3){
$consulta = pg_query($conexion, "SELECT lider FROM responsables_parroquiales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT primer_nombre, primer_apellido FROM identificacion_personas where id_persona='$respuesta[lider]'");
$respuesta= pg_fetch_array($consulta);
echo "$respuesta[primer_nombre] $respuesta[primer_apellido]";
}
if($_SESSION['rol']>3 && $_SESSION['rol']<7){
$consulta = pg_query($conexion, "SELECT lider FROM responsables_comunales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT primer_nombre, primer_apellido FROM identificacion_personas where id_persona='$respuesta[lider]'");
$respuesta= pg_fetch_array($consulta);
echo "$respuesta[primer_nombre] $respuesta[primer_apellido]";
}
pg_close($conexion);
?>