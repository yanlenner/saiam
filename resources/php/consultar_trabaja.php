<?php 
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
if($_SESSION['rol']==1){
$consulta = pg_query($conexion, "SELECT responsable_estado FROM responsables_estadales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$respuesta[responsable_estado]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_estado'];
}
if($_SESSION['rol']==2){
$consulta = pg_query($conexion, "SELECT responsable_municipio FROM responsables_municipales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_municipio FROM municipios where id_municipio='$respuesta[responsable_municipio]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_municipio'];
}
if($_SESSION['rol']==3){
$consulta = pg_query($conexion, "SELECT responsable_parroquia FROM responsables_parroquiales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_parroquia FROM parroquias where id_parroquia='$respuesta[responsable_parroquia]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_parroquia'];
}
if($_SESSION['rol']>3 && $_SESSION['rol']<7){
$consulta = pg_query($conexion, "SELECT responsable_consejo_comunal FROM responsables_comunales where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$consulta = pg_query($conexion, "SELECT nm_consejo FROM consejos_comunales where id_consejo_comunal='$respuesta[responsable_consejo_comunal]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['nm_consejo'];
}
pg_close($conexion);
?>