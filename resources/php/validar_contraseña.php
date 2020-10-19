<?php
function query_r( $a,  $b){			
			$c = pg_query($a, $b);
			return pg_fetch_assoc($c);
		}
session_start();
require_once 'enlace.php';
$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
$usr = $_SESSION['n-usuario'];
$consulta="SELECT password FROM acceso_personas where usuario='$usr'";
$respuesta=query_r($conexion,$consulta); 
$passwd= md5($_POST['passwd']);
if(password_verify($passwd,$respuesta['password'])){
	echo 'true';
}
else
	echo 'false';
pg_close($conexion);
?>