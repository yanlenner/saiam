<?php
function query_r( $a,  $b){			
			$c = pg_query($a, $b);
			return pg_fetch_assoc($c);
		}
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$usr = $_SESSION['n-usuario'];
$consulta="SELECT pregunta_seguridad FROM acceso_personas where usuario='$usr'";
$respuesta=query_r($conexion,$consulta); 
echo $respuesta['pregunta_seguridad'];
pg_close($conexion);
?>