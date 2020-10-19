<?php
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$consulta = pg_query($conexion, "SELECT permisos FROM acceso_personas where persona='$_POST[persona]'");
$respuesta= pg_fetch_array($consulta);
$sz = strlen($respuesta['permisos']);
$i;
$b=$respuesta['permisos'];
for($i=0; $i<$sz; $i++){
 $cadena .=' '.$b[$i];
}
echo $cadena;
pg_close($conexion);
?>