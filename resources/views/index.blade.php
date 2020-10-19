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
	<script src="jquery-md5.js">
	</script>
	<script src="jquery-mask.js">
	</script>
	<script id="main" src="main.js">
	</script>
</head>
<body>
	<div id="preloader" class="ui segment" style="height: 0px!important">
		<div class="ui active inverted dimmer preloader" style="background-image: url({{$url}});" @if ($url=='fondo5.png') title="{{ __('Photo by Cristina Gottardi on Unsplashs')}}" @else title="{{ __('Image designed by Freepik')}}" @endif href="http://www.freepik.com">
			<div class="ui text loader" <?php if($url=='fondo2.png') echo "style='color:white!important;'"; if($url=='fondo3.png') echo "style='color:#757576!important;'";?>>
				{{ __('Loading') }}
			</div>
		</div>
		<p></p>
	</div>
	<img class="ui centered medium image" src="bannersp.png" title="Banner Institucional">
	<h2 class="ui center aligned icon header titulo">
		{{ __('Comprehensive Care System for the Elderly Sector') }}
		<br>
		"Hugo Rafael Chávez Frías"
	</h2>
	<div id="segmento" class="ui placeholder segment">
		<div class="ui two column very relaxed stackable grid">
			<div class="column">
				<a href="login" style="color: #fff !important">
					<div id="inicie_sesion" class="ui blue submit button">
						<i class="sign-in icon">
						</i>
						{{ __('Login') }}
					</div>
				</a>
			</div>
			<div id="rayitacostada" hidden="">
			</div>
			<div class="middle aligned column">
				<div class="ui large button">
					<i class="large street view icon">
					</i>
					{{ __('Log in as guest') }}
				</div>
				<a href="password/reset">
					<div class="ui large button">
						<i class="shield alternate icon">
						</i>
						{{ __('Recover your password') }}
					</div>
				</a>
				<a href="faq">
					<div class="ui large button">
						<i class="question circle outline icon">
						</i>
						{{ __('See the most frequently asked questions') }}
					</div>
				</a>
			</div>
		</div>
		<div id="rayitaparada" hidden="">
		</div>
	</div>
	<div class="ui inverted vertical footer segment form-page">
		<div class="ui center aligned container">
			<div class="ui horizontal inverted small divided link list">
				<a class="item" href="#" onclick="Colab()">
					{{ __('Collaborators') }}
				</a>
				<a class="item" href="#" onclick="Conta()">
					{{ __('Contact us') }}
				</a>
				<a class="item" href="#" onclick="Termi()">
					{{ __('Terms and Conditions') }}
				</a>
			</div>
			<div class="ui section divider">
			</div>
		</div>
	</div>
	<div class="ui longer test modal m1">
		<div class="header">
			{{ __('Project collaborators') }}
		</div>
		<div class="scrolling image content">
			<div class="ui medium image">
				<a href="http://www.freepik.com">
					<img src="bussines-people.png" title="Imágen diseñada por Freepik">
				</a>
			</div>
			<div class="description">
				<div class="ui header">
					{{ __('National Constituent Assembly') }}
				</div>
				<p>
					{{ __('Constituentist deputy') }} Ramón Coéllar
				</p>
				<div class="ui header">
					Cenditel
				</div>
				<p>
					{{ __('Development analyst') }} William Páez
				</p>
				<div class="ui header">
					{{ __('Territorial Polytechnic University of the State of Mérida') }}
				</div>
				<p>
					{{ __('Advisor professor') }} Roberto Pozo
				</p>
				<p>
					{{ __('Advisor professor') }} Mayba Uzcátegui
				</p>
				<p>
					{{ __('Advisor professor') }} Yasmín Vicuña
				</p>
				<p>
					{{ __('Higher technician') }} Gabriel Picón
				</p>
				<p>
					{{ __('Higher technician') }} Yan Romero
				</p>
				<br>
			</div>
		</div>
	</div>
	<div class="ui longer test modal m2">
		<div class="header">
			{{ __('Contact means') }}
		</div>
		<div class="scrolling image content">
			<div class="ui medium image">
			</div>
			<div class="description">
				<div class="ui header">
					<i class="mail icon"></i>
					{{ __('E-Mail Address') }}
				</div>
				<p>
					saiam.gob.ve@gmail.com
				</p>
				<div class="ui header">
					<i class="phone icon"></i>
					{{ __('Phone number') }}
				</div>
				<p>
					+58 0800 0000000
				</p>
				<div class="ui header">
					{{ __('Social networks') }}
				</div>
				<div>
					<div class="ui four buttons">
						<div class="ui facebook small button">
							<a class='redes' href="https://www.facebook.com">
								<i class="facebook icon">
								</i>
								Facebook
							</a>
						</div>
						<div class="ui instagram small button">
							<a class='redes' href="https://www.instagram.com">
								<i class="instagram icon">
								</i>
								Instagram
							</a>
						</div>
						<div class="ui twitter small button">
							<a class='redes' href="https://www.twitter.com/saiam_ve">
								<i class="twitter icon">
								</i>
								Twitter
							</a>
						</div>
						<div class="ui youtube small button">
							<a class='redes' href="https://www.youtube.com/channel/UC0URyfb5a5UKAgtDTBDEwPw/">
								<i class="youtube icon">
								</i>
								Youtube
							</a>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
	<div class="ui longer test modal m3">
		<div class="header">
			{{ __('Terms and conditions of the service') }}
		</div>
		<div id="terminos" class="scrolling image content">
			<div class="ui image" style="width: 400%!important;">
				<a href="http://www.freepik.com">
					<img src="terminos.png" title="Imágen diseñada por slidesgo / Freepik" >
				</a>
			</div>
			<div class="description">
				<div class="ui header">
					{{ __('Dear visitor') }}:
				</div>
				<p>
					{{ __('The main function of this web application is to direct the public policies of integral attention to the elderly sector by the National Government, trying the best of efforts so that social justice is applied with socialist equity, giving each one according to their need; as well as disseminating and promoting norms and guidelines of the Ministry of People\'s Power of the Office of the Presidency and Follow-up of Government Management and of the National Constituent Assembly') }}.
				</p>
				<p>
					{{ __('The comprehensive care system for the elderly "Hugo Rafael Chávez Frías" reserves the right to change, add or remove parts of this terms of use agreement at any time. It is the user\'s responsibility to periodically review the terms and conditions when using this web application. If the user does not agree to these terms of use, we suggest that they refrain from accessing or browsing the website of our entity') }}.
				</p>
				<p>
					{{ __('To fully enjoy all the functionalities that the web application offers, it may be necessary to register and provide certain personal information that will serve to respond and provide a better service') }}.
				</p>
				<p>
					{{ __('By accepting the terms and conditions, the user agrees to provide the registration data and updates necessary to keep said information up to date. Improper access to the web application is left to the discretion of the user, being the sole party responsible for managing the confidentiality and security of his account') }}.
				</p>
				<div class="ui header">
					Constitución de la República Bolivariana de Venezuela
				</div>
				<p>
					<i>
						Artículo 80.
					</i>
					El Estado garantizará a los ancianos y ancianas el pleno ejercicio de sus derechos y garantías. El Estado, con la participación solidaria de las familias y la sociedad, está obligado a respetar su dignidad humana, su autonomía y les garantizará atención integral y los beneficios de la seguridad social que eleven y aseguren su calidad de vida. Las pensiones y jubilaciones otorgadas mediante el sistema de Seguridad Social no podrán ser inferiores al salario mínimo urbano. A los ancianos y ancianas se les garantizará el derecho a un trabajo acorde con aquellos y aquellas que manifiesten su deseo y estén en capacidad para ello.
				</p>
				<div class="ui header">
					Ley de Servicios Sociales
				</div>
				<p>
					<i>
						Artículo 4.
					</i>
					El Régimen Prestacional de Servicios Sociales al Adulto Mayor y Otras Categorías de Personas, se sustenta en una política nacional de protección a la población comprendida en su ámbito de aplicación y se gestionará en forma tal que se garantice el acercamiento de las instituciones prestadoras de servicios sociales a la población protegida por esta Ley; en consecuencia, la gestión del Régimen Prestacional regulado por esta Ley será: intersectorial, descentralizada, desconcentrada y participativa, lo cual requiere de la coordinación y cooperación de todos los organismos públicos y privados que desarrollen prestaciones, programas y servicios para dicha población.
				</p>
				<p>
					<i>
						Artículo 5.
					</i>
					A fines de garantizar la efectividad de los derechos, prestaciones, programas y servicios establecidos en esta Ley, los organismos públicos y privados encargados de su ejecución, deberán conformar una Red de Servicios Sociales que permita la coordinación y cooperación institucional, la eficiencia y la eficacia en la prestación de los servicios sociales y la racionalidad en el uso de los recursos económicos asignados en beneficio de las personas protegidas por esta Ley.
				</p>
				<p>
					<i>
						Artículo 7.
					</i>
					A los efectos de la aplicación de esta Ley, se entiende por:
					<br>
					<i class="art2">
						1-Adulto y adulta mayor.
					</i>
					A la persona natural con edad igual o mayor a sesenta años de edad.
					<br>
					<i class="art2">
						9-Servicio social.
					</i>
					A la intervención interdisciplinaria, metódica y científica, orientada a la atención general y especializada, institucionalizada, interna o ambulatoria, a domicilio, de rehabilitación y habilitación física, mental, sensorial, intelectual o social y de asistencia en general, para las personas protegidas por esta Ley.
					<br>
					<i class="art2">
						10-Atención integral.
					</i>
					A las acciones destinadas a satisfacer las necesidades económicas, físicas, materiales, emocionales, sociales, laborales, culturales, educativas, recreativas, productivas y espirituales de las personas protegidas por esta Ley.
					<br>
					<i class="art2">
						13-Integración social.
					</i>
					Al proceso de desarrollo de capacidades y creación de oportunidades en los órdenes económico, social y político para que los individuos, familias o grupos sujetos de protección de esta Ley, puedan reincorporarse a la vida comunitaria con pleno respeto a su dignidad, identidad y derechos sobre la base de la igualdad y equidad de oportunidades para una vida activa y productiva.
					<br>
					<i class="art2">
						14-Instituto Gestor.
					</i>
					A la institución encargada en el ámbito nacional de la gestión de los servicios sociales destinados a garantizar la atención integral a las personas protegidas por esta Ley.
				</p>
				<p>
					<i>
						Artículo 9.
					</i>
					El estado garantiza a las personas amparadas por esta Ley, los derechos humanos sindiscriminación,los derechos de carácter civil, su nacionalidad y ciudadanía, los derechos políticos, los derechos sociales y de la familia, los derechos culturales y educativos, los derechos económicos, los derechos ambientales y los derechos de los pueblos indígenas, en los términos y condiciones establecidos en la Constitución de la República Bolivariana de Venezuela, las leyes y los tratados, pactos y convenciones suscritos y ratificados por la República. El estado, las familias y la sociedad, se integrarán corresponsablemente, para mejorar la calidad de vida de los ciudadanos y ciudadanas protegidos por esta Ley, mediante su incorporación efectiva a programas, servicios y acciones que faciliten, de acuerdo a sus condiciones, el acceso a la educación, el trabajo de calidad, la salud integral, la vivienda y hábitat dignos, la participación y el control social, la asistencia social, las asignaciones económicas según sea el caso,la asistencia jurídica y la participación en actividades  recreativas, culturales y deportivas. Las familias tendrán derecho a recibir el apoyo de las instituciones públicas para el cuidado y atención de las personas protegidas por esta Ley.
				</p>
				<p>
					<i>
						Artículo 12.
					</i>
					Las personas protegidas por esta Ley y las familias, en la medida de sus posibilidades, participarán en los distintos procesos de los programas de servicios sociales, tales como la capacitación, rehabilitación e integración.
				</p>
				<p>
					<i>
						Artículo 13.
					</i>
					Las personas protegidas por esta Ley, deberán hacer uso adecuado de las prestaciones, programas y servicios consagrados en ella.
				</p>
				<p>
					<i>
						Artículo 14.
					</i>
					Los familiares de las personas protegidas por esta Ley, son corresponsables con los organismos públicos y privados pertinentes, en la atención y aprovechamiento de los programas de servicios sociales y contribuirán con:
					<br>
					<i class="art2">
						9-
					</i>
					Conformar redes de apoyo comunitario para la realización del control social en la coordinación, operación, control y evaluación de los programas de servicios sociales en las entidades locales.
				</p>
				<p>
					<i>
						Artículo 16.
					</i>
					Los estados y municipios en el ámbito de sus competencias deben participar activamente y en forma protagónica en la cogestión de las prestaciones, programas y servicios establecidos por esta Ley, a partir de convenios con el Instituto Nacional de Servicios Sociales.
				</p>
				<p>
					<i>
						Artículo 25.
					</i>
					Todos los organismos públicos con competencia en materia de educación, cultura y deporte, deben garantizar a las personas protegidas por esta Ley, el acceso a la educación pública en todos sus niveles y modalidades, a la cultura, al deporte y cualquier otra actividad que contribuya a su desarrollo y mejora en su calidad de vida.
				</p>
				<p>
					<i>
						Artículo 27.
					</i>
					El Ministerio con competencia en materia de turismo, deberá impulsar la participación de las personas protegidas por esta Ley, en los programas de recreación, utilización del tiempo libre y turismo social.
				</p>
				<p>
					<i>
						Artículo 30.
					</i>
					Tendrán protección prioritaria las personas que se encuentren en cualquiera de las siguientes situaciones de estado de necesidad:
					<br>
					<i class="art2">
						1-
					</i>
					Estar en desamparo familiar, social, económico o en indigencia.
					<br>
					<i class="art2">
						2-
					</i>
					Estar excluidas del núcleo familiar, carecer de medios de subsistencia y con ingresos inferiores al40% del salario mínimo urbano.
					<br>
					<i class="art2">
						3-
					</i>
					Estar privadas de alimentos y en estado de desnutrición.
					<br>
					<i class="art2">
						4-
					</i>
					Carecer de habitación y estar en exposición a la intemperie.
					<br>
					<i class="art2">
						5-
					</i>
					Estar en situación de avanzada edad o de gran discapacidad con imposibilidad de satisfacer sus necesidades básicas y depender permanentemente de otra persona con escasos recursos.
					<br>
					<i class="art2">
						6-
					</i>
					Ser jefe o jefa de familia en estado de necesidad y con personas bajo su dependencia.
					<br>
					<i class="art2">
						7-
					</i>
					Encontrarse en cualquier otra circunstancia de desamparo que implique limitaciones severas para cubrir las necesidades básicas de subsistencia y que la persona o familia no pueda superarlas por sí misma.
				</p>
				<p>
					<i>
						Artículo 55.
					</i>
					El Instituto Nacional de Servicios Sociales, en coordinación con los organismos con competencia en turismo, recreación y deporte, diseñará y ejecutará programas destinados al uso adecuado del tiempo libre, la recreación y el turismo social de las personas protegidas por esta Ley.
				</p>
				<p>
					<i>
						Artículo 103.
					</i>
					Las personas que tengan conocimiento de la comisión de una falta o delito en contra de las personas amparadas por la presente Ley, están en la obligación de notificarlo de inmediato al Instituto Nacional de Servicios Sociales, al Ministerio Público o a cualquier otra autoridad competente. Los familiares de la víctima, hasta el cuarto grado de consanguinidad y segundo de afinidad que no consignen la denuncia serán considerados cómplices por omisión.
				</p>
				<p>
					<i>
						Artículo 107.
					</i>
					La falta de suministro o falsedad por parte de cualquier persona natural o jurídica de la información a la que están obligadas a entregar conforme a la presente Ley, su Reglamento y las resoluciones emanadas del  Ministerio con competencia en materia de servicios sociales al adulto y adulta mayor y otras categorías de personas, el Instituto Nacional de Servicios Sociales o la Tesorería de Seguridad Social, será sancionada por  el Instituto Nacional de Servicios Sociales, con multa de setenta unidades tributarias (70U.T.) a ciento cuarenta unidades tributarias (140U.T.) en el caso de personas naturales, y de cuatro cientos unidades tributarias (400U.T.) a dos mil unidades tributarias (2.000U.T.) si se trata de personas jurídicas. Falsedad en el suministro de la información por parte de funcionarios públicos.
				</p>
				<p>
					<i>
						Artículo 108.
					</i>
					La falsedad en el suministro de información por parte de cualquier funcionario público para la inclusión de personas que no se encuentren en estado de necesidad en el Registro de Beneficiarios y Beneficiarias de Asignaciones Económicas previstas en esta Ley será sancionada por el Instituto Nacional de Servicios Sociales, con multa de cien unidades tributarias (100U.T.) por cada persona incluida irregularmente, sin perjuicio de las leyes que rigen la actuación de los funcionarios públicos.
				</p>
				<br>
			</div>
		</div>
		<div class="actions">
			<div id="bac" class="ui primary approve button escondido" onclick="aceptarCookies()">
				Aceptar
				<i class="right chevron icon">
				</i>
			</div>
		</div>
	</div>
	<script src="index.js">
	</script>
</body>
</html>