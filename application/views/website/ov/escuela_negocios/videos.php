


<div id="content">

	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				<a class="backHome" href="/ov"><i class="fa fa-home"></i> Menu</a> <span>>
					Videos </span>
			</h1>
		</div>
	</div>

	<!-- widget grid -->
	<link href="/cart/HTML/assets/css/style.css" rel="stylesheet">
	<link href="/cart/HTML/assets/css/skin-3.css" rel="stylesheet">

	<!-- css3 animation effect for this template -->
	<link href="/cart/HTML/assets/css/animate.min.css" rel="stylesheet">

	<!-- styles needed by carousel slider -->
	<link href="/cart/HTML/assets/css/owl.carousel.css" rel="stylesheet">
	<link href="/cart/HTML/assets/css/owl.theme.css" rel="stylesheet">

	<!-- styles needed by checkRadio -->
	<link href="/cart/HTML/assets/css/ion.checkRadio.css" rel="stylesheet">
	<link href="/cart/HTML/assets/css/ion.checkRadio.cloudy.css"
		rel="stylesheet">

	<!-- styles needed by mCustomScrollbar -->
	<link href="/cart/HTML/assets/css/jquery.mCustomScrollbar.css"
		rel="stylesheet">

	<!-- Just for debugging purposes. -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

	<!-- include pace script for automatic web page progress bar  -->

	<div id="content">

		<div class="navbar-header">


			<!--/.cartMenu-->
			<!--  
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group 
          
        </div>
        <!--/.search-box -->
		</div>
		<!--/.navbar-nav hidden-xs-->
	</div>
	<!--/.nav-collapse -->
</div>

<article class="row">
	<section class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
		<div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false"
			data-widget-custombutton="false" data-widget-colorbutton="false">

			<header>
				<span class="widget-icon"> <i class="fa fa-graduation-cap "></i>
				</span>
				<h2 class="font-md">
					<i>Cursos</i>
				</h2>
			</header>

			<!-- widget div-->
			<div class="widget-body">

				<!-- widget edit box -->
				<div class="jarviswidget-editbox">
					<!-- This area used as dropdown edit box -->

				</div>
				<!-- end widget edit box -->

				<!-- widget content -->
				<div class="tab-pane">
					<h3>Categoria niveles</h3>
					<div class="tree smart-form">
						<ul>
						<?php
						
if (isset ( $nivel )) {
							foreach ( $nivel as $Nivel ) {
								if ($Nivel->estatus == 'ACT') {
									?>
										<li><span><i class="fa fa-lg fa-plus-circle"></i> <?php echo $Nivel->Nombre; ?></span>
								<ul>
		      									<?php
									
foreach ( $clase as $Clase ) {
										if ($Clase->estatus == 'ACT') {
											if ($Nivel->id_Nivel == $Clase->id_Nivel) {
												?>
														<li style="display: none"><a
										onclick="ver_videos('<?php echo $Clase->id_Clase; ?>')"><?php echo $Clase->Nombre; ?></a>
									</li>
							      					<?php
											}
										}
									}
									?>
											</ul></li>
								<?php
								
}
							}
						}
						?>
      					</ul>

					</div>
					<br>
				</div>
				<!-- end widget content -->

			</div>
			<!-- end widget div -->

		</div>
		<!-- end widget -->
	</section>


	<section class="col-lg-8 col-sm-6 col-md-8 col-xs-12">
		<div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false"
			data-widget-custombutton="false" data-widget-colorbutton="false">

			<header>
				<span class="widget-icon"> <i class="fa fa-graduation-cap "></i>
				</span>
				<h2 class="font-md">
					<i>Clases</i>
				</h2>
			</header>

			<div class="widget-body xsResponse">
				<div class="row" id="mercancias"></div>
				<!-- start row -->
				<div>

					<div class="tab-pane">

						<div class="col-sm-12 col-md-12 col-lg-12">

							<!-- well -->
							<div class="well">
								<?php
								foreach ( $videos as $video ) {
									if ($video->tipo == 1) {
										?>
									<div class="item">
									<div class="container">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

												<h2><?php echo $video->Titulo; ?></h2>
												<div
													class="embed-responsive embed-responsive-16by9 video-responsive">
													<iframe src="" width="320"
														height="192" frameborder="0" webkitallowfullscreen
														mozallowfullscreen allowfullscreen="allowfullscreen"> </iframe>
													<p>
														
													</p>
												</div>
											</div>
											<div class="col-sm-6"></div>
										</div>
									</div>
										<?php } }?>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</article>


<script>
    paceOptions = {
      elements: true
    };
</script>
<script src="/cart/HTML/assets/js/pace.min.js"></script>
<!--<script type="text/javascript" src="/cart/HTML/assets/js/smoothproducts.min.js"></script> -->
<!--<script src="/template/js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>  -->
<script src="/template/js/plugin/fuelux/wizard/wizard.min.js"></script>
<script type="text/javascript">
			function detalles(id,tipo)
			{
				var datos={'id':id,'tipo':tipo};
				$.ajax({
					data: {info:JSON.stringify(datos)},
					type: "get",
					url: "muestra_mercancia",
					success: function(msg){
				             
				             bootbox.dialog({
								message: msg,
								title: "Descripción",
								className: "div_info_merc",
								buttons: {
									success: {
										label: "Cerrar",
										className: "btn-danger",
										callback: function() {
											}
									}
								}
							})
				    }
				});
			}
			
			function compra_prev(id,tipo,desc)
			{
				var datos={'id':id,'tipo':tipo,'desc':desc};
				$.ajax({
					data: {info:JSON.stringify(datos)},
					type: "get",
					url: "add_carrito",
					success: function(msg){
				            
				             bootbox.dialog({
								message: msg,
								title: "Descripcion",
								className: "div_info_merc",
								buttons: {
									danger: {
										label: "Cancelar",
										className: "btn-danger",
										callback: function() {
											}
									}
								}
							})
				    }
				});
			}
		</script>
<script type="text/javascript">

			function show_todos_categoria(idTipoRed)
			{
				iniciarSpinner();
				$.ajax({
					type: "get",
					url: "show_todos_categoria",
					data: { id: idTipoRed},
					success:function(msg){
						FinalizarSpinner();
						$("#mercancias").html(msg);
				
					}
				});
			}
					
			function show_todos(idTipoRed)
			{
				iniciarSpinner();
				$.ajax({
					type: "get",
					url: "show_todos",
					data: { id: idTipoRed},
					success:function(msg){
						FinalizarSpinner();
						$("#mercancias").html(msg);
				
					}
				});
			}

		

			function ver_videos(idClase){
				iniciarSpinner();
				$.ajax({
					type: "get",
					url: "get_videos",
					data: { idClase: idClase},
					success:function(msg){
						FinalizarSpinner();
						$("#mercancias").html(msg);
				
					}
				});
			}

		</script>
<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			/*
			 * Autostart Carousel
			 */
			$('.carousel.slide').carousel({
				interval : 3000,
				cycle : true
			});
			$('.carousel.fade').carousel({
				interval : 3000,
				cycle : true
			});
		
			// Fill all progress bars with animation
			
			$('.progress-bar').progressbar({
				display_text : 'fill'
			});
			
				
		})

		$(document).ready(function() {
			
			pageSetUp();
			
			// PAGE RELATED SCRIPTS
		
			$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
			$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
				var children = $(this).parent('li.parent_li').find(' > ul > li');
				if (children.is(':visible')) {
					children.hide('fast');
					$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
				} else {
					children.show('fast');
					$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
				}
				e.stopPropagation();
			});			
		
		})


		</script>
<style>
<!--
.video-responsive {
	position: relative;
	padding-bottom: 56.25%; /* 16/9 ratio */
	padding-top: 30px; /* IE6 workaround*/
	height: 0;
	overflow: hidden;
}	

.video-responsive iframe, .video-responsive object, .video-responsive embed
	{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
-->
</style>
