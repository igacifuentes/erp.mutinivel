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
				<li><a href="#">Sobre Nosostros</a></li>
				<li><a href="http://oficinavirtual.educatenetwork.com/auth/login">Oficina
						Vitual</a></li>
				<li><a href="/ov/web/afiliar?web=<?php echo $_GET['web'];?>"
					onclick="afiliar()">Afiliarme</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Sobre Nosotros</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i
				class="material-icons">menu</i></a>
		</div>
	</nav>

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light"></h5>
				</div>
			</div>
		</div>
		<div class="parallax">
			<img src="/template/materialize/imagenes/bannerQuienes.jpg"
				alt="Unsplashed background img 3"
				style="transform: translate3d(-50%, 160px, 0px); display: block;">
		</div>
	</div>

	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<div class="icon-block">
						<h2 class="center brown-text">
							<i class="material-icons"></i>
						</h2>
						<h5 class="center-align">MISIÓN</h5>
						<p class="justify-align" style="text-align: justify;">EMPODERAR A
							TODO SOÑADOR ATREVIDO CON LOS CONOCIMIENTOS Y HERRAMIENTAS QUE
							NECESITA PARA TENER ÉXITO EN CUALQUIER TIPO DE NEGOCIO POR
							INTERNET Y EN SU VIDA, TRANSFORMANDO ASÍ A SOÑADORES DESBOCADOS
							EN EMPRESARIOS ENFOCADOS.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<div class="icon-block">
						<h2 class="center brown-text">
							<i class="material-icons"></i>
						</h2>
						<h5 class="center-align">+ SOBRE NOSOTROS</h5>
						<p class="justify-align" style="text-align: justify;">En nuestras
							filas Corporativas encontrarás un excelente equipo de
							profesionales, con alta orientación a resultados, afán de
							superación, altas dosis de innovación para garantizar la
							evolución del modelo de gestión y acostumbrados al trabajo en
							equipo y colaboración los unos con los otros para entre todos
							formar Educate Network.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										ADRIAN ALVAREZ <br> <i class="red-text">C.E.O.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										PEDRO PINEDA <br> <i class="red-text">C.E.O.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										LEONARDO LUJAN <br> <i class="red-text">Director de Educación.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										RAFAEL PÉREZ <br> <i class="red-text">Director de Marketing</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										LIANGELY SANCHEZ   <br> <i class="red-text">Herramientas Digitales.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										VIC CURIEL<br> <i class="red-text">Inglés Básico.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12 m6">
					<div class="card-panel grey lighten-5 z-depth-1">
						<div class="row valign-wrapper">
							<div class="col s4">
								<img alt="" src="/template/materialize/imagenes/adrian.png"
									class="circle responsive-img">
							</div>
							<div class="col s8">
								<span class="black-text">
									<p>
										PAOLA OCARRANZA <br> <i class="red-text">Vocabulario Express.</i>
									</p>
								</span>
							</div>
						</div>
					</div>
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
							<img class="activator"
								src="/template/materialize/imagenes/planbasico.jpg"
								style="height: 20rem; width: 30rem;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4 center"><p
									class="center">Plan Basico</p></span>
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
							<img class="activator"
								src="/template/materialize/imagenes/pro.jpg"
								style="height: 20rem; width: 30rem;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4"><p
									class="center">Plan Profesional</p></span>
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
							<a href="#"> </a> <a href="#" class="right">$ 30.00 Mensuales</a>
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
			<img src="/template/materialize/background3.jpg"
				alt="Unsplashed background img 3"
				style="transform: translate3d(-50%, 160px, 0px); display: block;">
		</div>
	</div>

	<footer class="page-footer white">
		<div>
			<div class="row">
				<div class="col l6 s12 center">
					<div class="row">
						<div class="col s12">
							<img alt="" src="/template/materialize/imagenes/logo.png"
								style="height: 10rem; width: 15rem;">
						</div>
						<div class="col l4 s12">
							<h5 class="">
								<i class="large material-icons">phone</i>
							</h5>
							<p class="">01-8000</p>
						</div>
						<div class="col l4 s12">
							<h5 class="">
								<i class="large material-icons">email</i>
							</h5>
							<p class="">INFO@EDUCATENETWORK.COM</p>
						</div>
						<div class="col l4 s12 ">
							<h5 class="">
								<i class="large material-icons">home</i>
							</h5>
							<p class="">
								135 S. SIERRA ST. <br> OAKDALE, CA
							</p>
						</div>
					</div>
				</div>
				<div class="col l6 s12">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.0102828711065!2d-120.84777248518891!3d37.76635707976101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8090f9cbeb4a62eb%3A0x142e6d6ca29594df!2s135+S+Sierra+Ave%2C+Oakdale%2C+CA+95361%2C+EE.+UU.!5e0!3m2!1ses-419!2sco!4v1475067032940"
						width="620px" height="400rem" style="border: 0" allowfullscreen></iframe>
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
