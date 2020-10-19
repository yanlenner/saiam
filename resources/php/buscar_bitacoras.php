<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
if($_POST['tiempo']=='uh')
	$tiempo='1 day';
if($_POST['tiempo']=='ud')
	$tiempo='7 days';
if($_POST['tiempo']=='uq')
	$tiempo='15 days';
if($_POST['tiempo']=='um')
	$tiempo='1 month';
if($_POST['tiempo']=='ut')
	$tiempo='3 months';
if($_POST['tiempo']=='us')
	$tiempo='6 months';
if($_POST['tiempo']=='ua')
	$tiempo='12 months';
$consulta = pg_query($conexion, "SELECT id_sesion from sesiones where persona='$_SESSION[id]'");
while($r1 = pg_fetch_assoc($consulta)){
	$c= pg_query($conexion, "SELECT id_bitacora, operacion, momento FROM bitacoras where sesion='$r1[id_sesion]' and operacion !='Salió de la aplicación web' and operacion !='Ingresó a la aplicación web' and (momento >= NOW() - interval '$tiempo')");
	while($r2 = pg_fetch_assoc($c)){
		$cadena[]=$r2;		
	}
}
pg_close($conexion);
echo json_encode($cadena);
?>