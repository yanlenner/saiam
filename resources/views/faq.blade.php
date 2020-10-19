<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta name="author" content="Yan Romero">
	<link rel="icon" href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="semantic.css"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>{{ config('app.name') }}</title>
	<script src="jquery-3.js">
	</script>
	<script src="semantic.js">
	</script>
</head>
<body>
	<br>
	<img class="ui centered medium image" src="bannersp.png" title="Banner Institucional">
	<h2 class="ui center aligned icon header">
		<img class="ui centered image" src="scrum_board.png" style="height: 16rem!important; width: 35%!important" title="Imágen tomada de unDraw">
		<br>
		Preguntas más frecuentes acerca del aplicativo web
	</h2>
	<div id="segmento" class="ui raised very padded text container segment">
		<div class="ui three column doubling stackable grid container">
			<div class="column">
				<h2 class="ui header blue center aligned">Estándar</h2>
				<div class="ui styled fluid accordion">
					<div class="title blue">
						<i class="dropdown icon"></i>
						No soy responsable, tampoco encargado ni beneficiario
					</div>
					<div class="content">
						<p class="transition hidden">Puedes ingresar al aplicativo web como invitado.</p>
						<img class="ui small image centerede" src="boton_invitado.png">
					</div>
					<div class="title">
						<i class="dropdown icon"></i>
						No recuerdo mi contraseña de acceso
					</div>
					<div class="content">
						<p class="transition hidden">Al hacer clic en el siguiente botón.</p>
						<img class="ui small image centerede" src="boton_contraseña.png">
						<br>
						<p class="transition hidden">Podrás intentar recuperarla llenando el formulario correspondiente.</p>
					</div>
				</div>
			</div>
			<div class="column">
				<h2 class="ui header center aligned">Responsables y encargados</h2>
				<div class="ui styled fluid accordion">
					<div class="title">
						<i class="dropdown icon"></i>
						¿Por qué el uso de algunas funciones está limitado?
					</div>
					<div class="content">
						<p class="transition hidden">Porque el responsable local puede personalizar los permisos para proporcionarte un nivel de acceso adecuado.
						</p>
					</div>
					<div class="title">
						<i class="dropdown icon"></i>
						¿Por qué no puedo ver la información de otros usuarios?
					</div>
					<div class="content">
						<p class="transition hidden">Esto para así establecer responsabilidades concretas y prevenir la evasión de las obligaciones respectivas.
						</p>
					</div>
				</div>
			</div>
			<div class="column">
				<h2 class="ui header center aligned">Beneficiarios</h2>
				<div class="ui styled fluid accordion">
					<div class="title">
						<i class="dropdown icon"></i>
						¿Qué debo hacer si no tengo un nombre de usuario?
					</div>
					<div class="content">
						<p class="transition hidden">Tienes que contactar a tu jefe o jefa de calle o del consejo comunal para que te cense y te registre en el aplicativo web.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui inverted vertical footer segment form-page">
		<div class="ui center aligned container">
			<div class="ui horizontal inverted small divided link list">
				<a class="item" href="#" >
					Sistema de Atención Integral al Sector Adulto Mayor
					<br><br>
					"Hugo Rafael Chávez Frías"
				</a>
			</div>
			<div class="ui section divider">
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.ui.styled.fluid.accordion').accordion('close others');
		$('.title').on('click', function () {
			$('h2').removeClass('blue');
			$(this).parent().siblings().addClass('blue');
		});
	</script>
</body>
</html>