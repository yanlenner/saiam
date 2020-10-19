<?php
session_start();
if($_SESSION['rol']==1){
	require 'enlace.php';
	$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("No se pudo establecer una conexión con la base de datos.");
	if($_POST['nivel']=='el'){
		$consulta = pg_query($conexion, "SELECT persona, responsable_estado, lider FROM responsables_estadales");
		while($r = pg_fetch_assoc($consulta)){
			$consultados = pg_query($conexion, "SELECT no_cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$consultatres = pg_query($conexion, "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[lider]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['nombre_completo']="$s[primer_nombre] $s[segundo_nombre] $s[primer_apellido] $s[segundo_apellido]";
			$respuesta['no_cedula']="Cédula: $s[no_cedula]. Responsable superior: $t[primer_nombre] $t[segundo_nombre] $t[primer_apellido] $t[segundo_apellido]";
			$consultados = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$r[responsable_estado]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['responsable']=$s['nm_estado'];
			$consultados = pg_query($conexion, "SELECT count(*) as total FROM responsables_municipales where lider='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['subordinados']=$s['total'];
			$consultados= pg_query($conexion, "SELECT sum(duracion) as s, count(duracion) as c FROM sesiones where persona = '$r[persona]' and duracion > 0");
			$s = pg_fetch_assoc($consultados);
			$respuesta['promedio']=round($s['s']/$s['c']).' minutos';
			$respuesta['titulo']='';
			if($respuesta['promedio']=='NAN minutos')
				$respuesta['promedio']='nulo';
			$consultatres = pg_query($conexion, "SELECT fecha_registro FROM acceso_personas where persona='$r[persona]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['registro']='Fecha de registro: '.$t['fecha_registro'];
			$cadena[]=$respuesta;
		}
	}
	if($_POST['nivel']=='ml'){
		$consulta = pg_query($conexion, "SELECT persona, responsable_municipio, lider FROM responsables_municipales");
		while($r = pg_fetch_assoc($consulta)){
			$consultados = pg_query($conexion, "SELECT no_cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['nombre_completo']="$s[primer_nombre] $s[segundo_nombre] $s[primer_apellido] $s[segundo_apellido]";
			$consultatres = pg_query($conexion, "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[lider]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['no_cedula']="Cédula: $s[no_cedula]. Responsable superior: $t[primer_nombre] $t[segundo_nombre] $t[primer_apellido] $t[segundo_apellido]";
			$consultados = pg_query($conexion, "SELECT id_estado, nm_municipio FROM municipios where id_municipio='$r[responsable_municipio]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['responsable']=$s['nm_municipio'];
			$consultados = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$s[id_estado]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['titulo']='Estado: '.$s['nm_estado'];
			$consultados = pg_query($conexion, "SELECT count(*) as total FROM responsables_parroquiales where lider='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['subordinados']=$s['total'];
			$consultados= pg_query($conexion, "SELECT sum(duracion) as s, count(duracion) as c FROM sesiones where persona = '$r[persona]' and duracion > 0");
			$s = pg_fetch_assoc($consultados);
			$respuesta['promedio']=round($s['s']/$s['c']).' minutos';
			if($respuesta['promedio']=='NAN minutos')
				$respuesta['promedio']='nulo';
			$consultatres = pg_query($conexion, "SELECT fecha_registro FROM acceso_personas where persona='$r[persona]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['registro']='Fecha de registro: '.$t['fecha_registro'];
			$cadena[]=$respuesta;
		}
	}
	if($_POST['nivel']=='pl'){
		$consulta = pg_query($conexion, "SELECT persona, responsable_parroquia, lider FROM responsables_parroquiales");
		while($r = pg_fetch_assoc($consulta)){
			$consultados = pg_query($conexion, "SELECT no_cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['nombre_completo']="$s[primer_nombre] $s[segundo_nombre] $s[primer_apellido] $s[segundo_apellido]";
			$consultatres = pg_query($conexion, "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[lider]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['no_cedula']="Cédula: $s[no_cedula]. Responsable superior: $t[primer_nombre] $t[segundo_nombre] $t[primer_apellido] $t[segundo_apellido]";
			$consultados = pg_query($conexion, "SELECT id_municipio, nm_parroquia FROM parroquias where id_parroquia='$r[responsable_parroquia]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['responsable']=$s['nm_parroquia'];
			$consultados = pg_query($conexion, "SELECT id_estado, nm_municipio FROM municipios where id_municipio='$s[id_municipio]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['municipio']=$s['nm_municipio'];
			$consultados = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$s[id_estado]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['estado']=$s['nm_estado'];
			$respuesta['titulo']="Estado: $respuesta[estado]. Municipio: $respuesta[municipio]";
			$consultados = pg_query($conexion, "SELECT count(*) as total FROM responsables_parroquiales where lider='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['subordinados']=$s['total'];
			$consultados = pg_query($conexion, "SELECT count(*) as total FROM responsables_comunales where lider='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['subordinados']=$respuesta['subordinados']+$s['total'];
			$consultados= pg_query($conexion, "SELECT sum(duracion) as s, count(duracion) as c FROM sesiones where persona = '$r[persona]' and duracion > 0");
			$s = pg_fetch_assoc($consultados);
			$respuesta['promedio']=round($s['s']/$s['c']).' minutos';
			if($respuesta['promedio']=='NAN minutos')
				$respuesta['promedio']='nulo';
			$consultatres = pg_query($conexion, "SELECT fecha_registro FROM acceso_personas where persona='$r[persona]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['registro']='Fecha de registro: '.$t['fecha_registro'];
			$cadena[]=$respuesta;
		}
	}
	if($_POST['nivel']=='cl'){
		$consulta = pg_query($conexion, "SELECT persona, responsable_consejo_comunal, lider FROM responsables_comunales");
		while($r = pg_fetch_assoc($consulta)){
			$consultados = pg_query($conexion, "SELECT no_cedula, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['nombre_completo']="$s[primer_nombre] $s[segundo_nombre] $s[primer_apellido] $s[segundo_apellido]";
			$consultatres = pg_query($conexion, "SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido FROM identificacion_personas where id_persona='$r[lider]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['no_cedula']="Cédula: $s[no_cedula]. Responsable superior: $t[primer_nombre] $t[segundo_nombre] $t[primer_apellido] $t[segundo_apellido]";
			$consultados = pg_query($conexion, "SELECT id_parroquia, nm_consejo FROM consejos_comunales where id_consejo_comunal='$r[responsable_consejo_comunal]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['responsable']=$s['nm_consejo'];
			$consultados = pg_query($conexion, "SELECT id_municipio, nm_parroquia FROM parroquias where id_parroquia='$s[id_parroquia]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['parroquia']=$s['nm_parroquia'];
			$consultados = pg_query($conexion, "SELECT id_estado, nm_municipio FROM municipios where id_municipio='$s[id_municipio]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['municipio']=$s['nm_municipio'];
			$consultados = pg_query($conexion, "SELECT nm_estado FROM estados where iso_3166_2_ve='$s[id_estado]'");
			$s = pg_fetch_assoc($consultados);	
			$respuesta['estado']=$s['nm_estado'];
			$respuesta['titulo']="Estado: $respuesta[estado]. Municipio: $respuesta[municipio]. Parroquia: $respuesta[parroquia]";
			$consultados = pg_query($conexion, "SELECT count(*) as total FROM responsables_comunales where lider='$r[persona]'");
			$s = pg_fetch_assoc($consultados);
			$respuesta['subordinados']=$s['total'];
			$consultados= pg_query($conexion, "SELECT sum(duracion) as s, count(duracion) as c FROM sesiones where persona = '$r[persona]' and duracion > 0");
			$s = pg_fetch_assoc($consultados);
			$respuesta['promedio']=round($s['s']/$s['c']).' minutos';
			if($respuesta['promedio']=='NAN minutos')
				$respuesta['promedio']='nulo';
			$consultatres = pg_query($conexion, "SELECT fecha_registro FROM acceso_personas where persona='$r[persona]'");
			$t = pg_fetch_assoc($consultatres);
			$respuesta['registro']='Fecha de registro: '.$t['fecha_registro'];
			$cadena[]=$respuesta;
		}
	}
	pg_close($conexion);
	echo json_encode($cadena);
}
?>