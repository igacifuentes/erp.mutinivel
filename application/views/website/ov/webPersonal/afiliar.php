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
				<li><a href="/ov/web/afiliar?web=<?php echo $_GET['web'];?>">Afiliarme</a></li>
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

	<iframe src="http://erp.multinivel/ov/web/formularioAfiliar?web=<?php echo $_GET['web'];?>" width="100%" height="1000"></iframe>
			

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
	</script>

</body>
</html>
