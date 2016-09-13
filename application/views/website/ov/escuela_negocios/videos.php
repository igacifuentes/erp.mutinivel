
			
			
			<div id="content">

				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<a class="backHome" href="/ov"><i class="fa fa-home"></i> Menu</a> 
							<span>> 
								Videos
							</span>
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
<link href="/cart/HTML/assets/css/ion.checkRadio.cloudy.css" rel="stylesheet">

<!-- styles needed by mCustomScrollbar -->
<link href="/cart/HTML/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">

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
</div>
<div class="container main-container" style="background-color: #fff;min-height: auto ! important;padding-top: 10rem;padding-bottom: 10rem;"> 
<div class="row">
	<div class="breadcrumbDiv col-lg-12">
      <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Inicio</a> </li>
        <li class="active"><i class="fa fa-graduation-cap"></i> Clases </li>
      </ul>
    </div>
<article class="col-lg-12 col-sm-4 col-md-3 col-lg-3">
	  			<div class="carousel-inner">
				<!-- Slide 1 -->
				<div class="item active" style="height: 100%; margin-bottom: 2rem;">
					<img src="/media/imagenes/m3.jpg" alt="demo user">
				</div>
			</div>
		
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-graduation-cap "></i> </span>
						<h2 class="font-md"><i>Niveles</i></h2>				
					</header>

					<!-- widget div-->
					<div>
						
						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->

						</div>
						<!-- end widget edit box -->
						
						<!-- widget content -->
						<div class="widget-body">
								<h3>Categoria niveles</h3>
								<div class="dropdown open">
								
								<?php if(isset($nivel)){
									foreach ($nivel as $Nivel ) { ?>
										<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary btn-block" data-target="#" href="javascript:void(0);"> 
											<span class="menu-item-parent"> <?php echo $Nivel->Nombre; ?></span>
										</a>
		      								<ul>
		      									<?php foreach ($clase as $Clase) {
		      										if($Nivel->id_Nivel== $Clase->id_Nivel){?>
														<li>
															<a class="btn btn-sm btn-block" onclick="ver_videos('<?php echo $Clase->id_Clase; ?>')"><?php echo $Clase->Nombre; ?></a>
							      						</li>
							      					<?php }
							      					} ?>

		      								</ul>
		      						<?php } 
      							} ?>
      				
									
								</div>
								<br>
						</div>
						<!-- end widget content -->
						
					</div>
					<!-- end widget div -->
					
				</div>
				<!-- end widget -->
</article>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
	    		<div class="">
	      			<div class="row xsResponse" >
	      			     <div class="row" id="mercancias">
	      			     	
	      			     </div>
	      									<!-- start row -->
					<div class="row">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-8">
				
							<div class="row">
				
								<div class="col-sm-12 col-md-12 col-lg-12">
				
									<!-- well -->
									<div class="well">
										<?php foreach ( $videos as $video ) { 
											if($video->tipo == 1){
										?>
											<div class="item col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="container">
											  <div class="row">
											    <div class="col-sm-6">
											   
											      <h2><?php echo $video->Titulo; ?></h2>
													<div class="embed-responsive embed-responsive-16by9">
													<iframe src="<?php echo $video->ruta_Video; ?>" width="320" height="192" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
													<p><a href="https://vimeo.com/58340810">L&#039;uomo d&#039;acqua e la sua fontana</a> from <a href="https://vimeo.com/user12742413">Sang hyun</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
													</div>
											    </div>
											    <div class="col-sm-6"></div>
											    </div>
											    </div>
										<?php } }?>
									</div>
									<!-- end well-->
				
								</div>
				
							</div>
				
						</div>
				
					</div>
				        
				        <!--/.item--> 
	      			</div>
	      <!-- /.row -->
	      
	      			
	    		</div>
	    	<!--/.container--> 
	  		</div>
	  <!--/.featuredPostContainer-->
	  
	  
	  <!--/.section-block-->
	  
	  
	  <!--/.section-block--> 
	  
	</div>
</div>
</div>
</div>


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

		</script>
