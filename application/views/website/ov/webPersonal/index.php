<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<title>Educate</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link href="/template/materialize/css/materialize.css" type="text/css"
	rel="stylesheet" media="screen,projection" />
<link href="/template/materialize/css/style.css" type="text/css"
	rel="stylesheet" media="screen,projection" />
</head>
<body>
	<nav class="yellow" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo"><img
				style="height: 2rem; width: 7rem;" class="responsive-img"
				src="/template/materialize/imagenes/logo.png"></img></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="/ov/web/index?web=<?php echo $_GET['web'];?>">Home</a></li>
				<li><a href="/ov/web/nosotros?web=<?php echo $_GET['web'];?>">Sobre Nosostros</a></li>
				<li><a href="http://oficinavirtual.educatenetwork.com/auth/login">Oficina
						Vitual</a></li>
				<li><a href="/ov/web/afiliar?web=<?php echo $_GET['web'];?>" onclick="afiliar()">Afiliarme</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Sobre Nosotros</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i
				class="material-icons">menu</i></a>
		</div>
	</nav>

	<div class="slider yellow">
		<ul class="slides">
			<li><img src="/template/materialize/imagenes/banner1.png"> <!-- random image -->
				<div class="caption center-align">
					<h3></h3>
					<h5 class="light grey-text text-lighten-3"></h5>
				</div></li>
			<li><img src="/template/materialize/imagenes/banner2.png"> <!-- random image -->
				<div class="caption left-align">
					<h3></h3>
					<h5 class="light grey-text text-lighten-3"></h5>
				</div></li>
			<li><img src="/template/materialize/imagenes/banner3.png"> <!-- random image -->
				<div class="caption right-align">
					<h3></h3>
					<h5 class="light grey-text text-lighten-3">
						<br>
						<br>
						<br>
						<br>
						<br>
						<font color="black">APRENDE HABILIDADES Y HERRAMIENTAS
							PROFESIONALES PARA CONSTRUIR E IMPULSAR TU NEGOCIO</font>
					</h5>
				</div></li>
			<li><img src="/template/materialize/imagenes/banner4.png"> <!-- random image -->
				<div class="caption right-align">
					<h3></h3>
					<h5 class="light grey-text text-lighten-3"></h5>
				</div></li>
			<li><img src="/template/materialize/imagenes/banner5.png"> <!-- random image -->
				<div class="caption right-align">
					<h3></h3>
					<h5 class="light yellow-text text-lighten-3"></h5>
				</div></li>

		</ul>
	</div>

	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m6 offset-m3">
					<div class="icon-block">
						<h2 class="center brown-text">
							<i class="material-icons">flash_on</i>
						</h2>
						<h5 class="center-align">NUESTRO OBJETIVO</h5>
						<p class="justify-align" style="text-align: justify;">PONER EN TUS
							MANOS LA INFORMACIÓN, CAPACITACIÓN Y HERRAMIENTAS DIGITALES
							NECESARIAS PARA MARCAR LA DIFERENCIA EN CUALQUIER ÁMBITO,
							MANTENIÉNDOTE A LA VANGUARDIA DE LOS AVANCES Y NOVEDADES EN LOS
							NEGOCIOS Y EL INTERNET</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="section">
			<h4>ALGUNOS DE NUESTOS CURSOS ONLINE</h4>
			<div class="row">
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" 
							src="/template/materialize/imagenes/FormacionP.png"> <br>FORMACIÓN
						PROFESIONAL EN MERCADEO EN RED
					</h5>
					<p class="left-align light" style="text-align: justify;">La
						industria de redes de mercadeo (MLM o network marketing) ha sido
						catalogada por prestigiosos medios de comunicación
						norteamericanos, como el Fortuna Magazine y The New York Times
						como: “La Industria que más millonarios ha producido y sigue
						produciendo, a lo largo de toda la historia de la humanidad”. Acá
						aprenderás su historia, y pasos claves para tener éxito en este
						mundo</p>
				</div>
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" class="responsive-img"
							src="/template/materialize/imagenes/Neuroventas.png"><br> NEUROVENTAS
						<br> <br>
					</h5>
					<p class="left-align light" style="text-align: justify;">¿Sabías
						que el 85% de toda decisión de compra que tomamos en nuestras
						vidas es inconsciente y subconsciente? Solo el 15% de la decisión
						es racional. Es decir, la gente no tiene idea de por qué compra,
						pero las ciencias sí. Aprende a venderle a subconsciente e
						inconsciente y venderás más hablando menos.</p>
				</div>
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" class="responsive-img"
							src="/template/materialize/imagenes/Haciadondevas.png"> <br>PLAN DE
						VIDA. <br> <br>
					</h5>
					<p class="left-align light" style="text-align: justify;">Suele
						ocurrirnos que logramos tener éxito en una faceta de nuestras
						vidas pero descuidamos otras. O que simplemente no logramos el
						éxito en ningún aspecto de nuestras vidas. Acá aprenderás cuáles
						son las facetas principales de tu vida y cómo lograr el éxito en
						cada una de ellas. De esta manera, lograrás un éxito integral.</p>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" 
							src="/template/materialize/imagenes/Mentalidad.png"> <br>MENTALIDAD MILLONARIA
					</h5>
					<p class="left-align light" style="text-align: justify;">
					Una de las cosas más importantes para lograr los objetivos financieros y mantenerse obteniéndolos es desarrollar una mentalidad que te permita tomar las acciones y decisiones correctas o con mayor probabilidad de éxito. Tanto la riqueza como la pobreza son un estado mental personal. Tener la mentalidad correcta, te llevará a obtener los resultados correctos.
					</p>
				</div>
				
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" class="responsive-img"
							src="/template/materialize/imagenes/Inglesbasico.png"><br> INGLÉS BÁSICO  
						<br> <br>
					</h5>
					<p class="left-align light" style="text-align: justify;">
						El mundo del marketing y los negocios habla inglés. De hecho, la clave del éxito en la estrategia de internacionalización es manejar este idioma. El emprendedor que no tiene siquiera nociones del inglés automáticamente está cerrando puertas a negocios y clientes realmente grandes.
					</p>
				</div>
				
				<div class="col s12 m6 l4 center">
					<h5>
						<img style="height: 20rem; width: 20rem;" class="responsive-img"
							src="/template/materialize/imagenes/HerraDigita.png"> <br>HERRAMIENTAS DIGITALES GRATUITAS <br>
					</h5>
					<p class="left-align light" style="text-align: justify;">
						Existen herramientas en Internet que son totalmente gratuitas pero son muy útiles para impulsar tu negocio y ahorrarte esfuerzo. Acá aprenderás cuáles son estas herramientas y cómo usarlas.
					</p>
				</div>


			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="icon-block">

					<h5 class="center"></h5>
					<iframe src="//player.vimeo.com/video/181566641" width="100%"
						height="400" frameborder="0" webkitallowfullscreen
						mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>	
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 m6">
					<h4 class="light"></h4>
					<div class="card" style="overflow: hidden;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/template/materialize/imagenes/planbasico.jpg" style="height: 20rem; width: 30rem;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4 center"><p class="center">Plan Basico</p></span>
							<ul>
								<li>Plan de Vida</li>
								<li>Neuro Ventas</li>
								<li>Inglés Básico</lir>
								<li>Vocabulario Express</li>
								<li>Formación Profesional en Mercadeo en Red</li>
							</ul>
							<br>
						</div>
						<div class="card-reveal"
							style="display: none; transform: translateY(0px);">
							<span class="card-title grey-text text-darken-4">Card Title<i
								class="material-icons right">close</i></span>
								
						</div>

						<div class="card-action">
							<a href="#"></a> <a href="#" class="right">$ 60.00 Anuales</a>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<h4 class="light"></h4>
					<div class="card" style="overflow: hidden;">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/template/materialize/imagenes/pro.jpg" style="height: 20rem; width: 30rem;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4"><p class="center">Plan Profesional</p></span>
								<ul>
									<li>Sistemas</li>
									<li>Embudo de Ventas</li>
									<li>Inteligencia Emocional</li>
									<li>Facebook Marketing</li>
									<li>Creador Google apps</li>
									<li>Creador de paginas Web</li>
								</ul>
								
						</div>
						<div class="card-reveal"
							style="display: none; transform: translateY(0px);">
							<span class="card-title grey-text text-darken-4">Card Title<i
								class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only
								revealed once clicked on.</p>
						</div>
						<div class="card-action">
							<a href="#">    </a> <a href="#" class="right">$ 30.00 Mensuales</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">A modern responsive front-end
						framework based on Material Design</h5>
				</div>
			</div>
		</div>
		<div class="parallax">
			<img src="/template/materialize/background3.jpg" alt="Unsplashed background img 3" style="transform: translate3d(-50%, 160px, 0px); display: block;">
		</div>
	</div>

		<footer class="page-footer white">
			<div >
				<div class="row">
					<div class="col l6 s12 center">
						<div class="row">
							<div class="col s12">
								<img alt="" src="/template/materialize/imagenes/logo.png" style="height: 10rem; width: 15rem;">
							</div>
							<div class="col l4 s12">
								<h5 class=""><i class="large material-icons">phone</i></h5>
								<p class="">
									01-8000
								</p>
							</div>
							<div class="col l4 s12">
								<h5 class=""><i class="large material-icons">email</i></h5>
								<p class="">
									INFO@EDUCATENETWORK.COM
								</p>
							</div>
							<div class="col l4 s12 ">
								<h5 class=""><i class="large material-icons">home</i></h5>
								<p class="">
									135 S. SIERRA ST. <br> OAKDALE, CA
								</p>
							</div>
						</div>
					</div>
					<div class="col l6 s12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.0102828711065!2d-120.84777248518891!3d37.76635707976101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8090f9cbeb4a62eb%3A0x142e6d6ca29594df!2s135+S+Sierra+Ave%2C+Oakdale%2C+CA+95361%2C+EE.+UU.!5e0!3m2!1ses-419!2sco!4v1475067032940" width="620px" height="400rem" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</footer>


		<!--  Scripts-->
		<script src="/template/materialize/js/jquery-2.1.1.min.js"></script>
		<script src="/template/materialize/js/materialize.js"></script>
		<script src="/template/materialize/js/init.js"></script>

		<script>
		$(document).ready(function(){
			$("select").material_select();
			$('.datepicker').pickadate();
			$('.dropdown-buton').dropdown();
			$('.button-collapse').sideNav();
			$('.slider').slider();
			$('.materialboxed').materialbox();
			}
		);

		function afiliar(){

		}
	</script>

</body>
</html>
