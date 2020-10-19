<?php
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT id_parroquia, nm_parroquia FROM parroquias where id_parroquia=$_SESSION[t_parroquia]"); 
while($respuesta = pg_fetch_array($consulta)){	
	$cadena[]=$respuesta;
}
pg_close($conexion);
echo json_encode($cadena);
?>