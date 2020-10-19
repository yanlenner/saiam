<?php
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT impedimento_por_condicion_fisica FROM identificacion_personas where id_persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
echo $respuesta['impedimento_por_condicion_fisica'];
pg_close($conexion);
?>