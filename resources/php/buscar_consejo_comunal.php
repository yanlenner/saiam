<?php 
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT id_consejo_comunal FROM consejos_comunales where no_rif='$_POST[rif]'");
$respuesta= pg_fetch_array($consulta);
if($respuesta['id_consejo_comunal']==0)
	echo 'false';
else
	echo 'true';

pg_close($conexion);
?>