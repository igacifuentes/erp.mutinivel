
			
			
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
								<div class="dropdown">
								
								<?php if(isset($nivel)){
									
									foreach ($nivel as $Nivel ) {
									
										
		      						echo ' <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown" > <span class="menu-item-parent">'.$Nivel->Nombre.'</span></a>';
		      						echo '<ul>';
		      						foreach ($clase as $Clase) {
		      								if($Nivel->id_Nivel== $Clase->id_Nivel){

		      							echo '<li>';

		      							echo '<a onclick="ver_videos('.$Clase->id_Clase.')">'.$Clase->Nombre.'</a>';
		      							echo '</li>';


		      						}
		      						}

		      						echo "</ul>";
		      					}
		      					
		        				
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
										<div id="myCarousel-2" class="carousel slide">
											<ol class="carousel-indicators">
												<li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel-2" data-slide-to="1" class=""></li>
												<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
											</ol>
											<div class="carousel-inner">
												<!-- Slide 1 -->
												<div class="item active">
													<img src="/media/imagenes/carrito/banner1.png" alt="">
													<div class="carousel-caption caption-right">
												<!--  		<h4>Title 1</h4>
														<p>
															Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
														</p>
														<br>
														<a href="javascript:void(0);" class="btn btn-info btn-sm">Read more</a> -->
													</div>
												</div>
												<!-- Slide 2 -->
												<div class="item">
													<img src="/media/imagenes/carrito/banner2.png" alt="">
													<div class="carousel-caption caption-left">
													<!--  	<h4>Title 2</h4>
														<p>
															Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
														</p>
														<br>
														<a href="javascript:void(0);" class="btn btn-danger btn-sm">Read more</a> -->
													</div>
												</div>
												<!-- Slide 3 -->
												<div class="item">
													<img src="/media/imagenes/carrito/banner3.png" alt="">
													<div class="carousel-caption caption-left">
													<!--  	<h4>Title 2</h4>
														<p>
															Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
														</p>
														<br>
														<a href="javascript:void(0);" class="btn btn-danger btn-sm">Read more</a> -->
													</div>
												</div>
											</div>
											<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
											<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
										</div>
				
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

			function show_todos_tipo_mercancia(tipoMercancia)
			{
				iniciarSpinner();
				$.ajax({
					type: "get",
					url: "show_todos_tipo_mercancia",
					data: { tipoMercancia: tipoMercancia},
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
		<script>
			function comprar(id,tipo)
			{
				
				var qty=$("#cantidad").val();

					var datos={'id':id,'tipo':tipo,'qty':qty};
					$.ajax({
						data:{info:JSON.stringify(datos)},
						type: 'get',
						url: 'add_merc',
						success: function(msg){
							if(msg=="Error")
							{
								bootbox.dialog({
									message: "¡Ooops! El producto se ha agotado, intente mas tarde porfavor.",
									title: "Error",
									className: "",
									buttons: {
										danger: {
										label: "Ok!",
										className: "btn-danger",
										callback: function() {
											}
										}
									}
								});
							}
							else
							{
								bootbox.dialog({
									message: "El producto se ha añadido al carrito",
									title: "Exito",
									className: "",
									buttons: {
										success: {
										label: "Ok!",
										className: "btn-success",
										callback: function() {
												bootbox.hideAll();
											}
										}
									}
								});
								update_cart_button();
							}			
						}
					});
			}
			function ver_cart()
			{
				$.ajax({
					type: 'get',
					url: 'ver_carrito',
					success: function(msg){
			 			bootbox.dialog({
								message: msg,
								title: "Ver carro",
								className: "",
								buttons: {
									success: {
									label: "Aceptar",
									className: "btn-success",
									callback: function() {
										}
									}
								}
							})
					}
				});
			}

			function update_cart_button()
			{
				$.ajax({
					type: "get",
					url: "printContentCartButton",
					success:function(msg){
						$(".cartButton").html(msg);
						
					}
				});
			}
			

			function quitar_producto(id)
			{
				
				$.ajax({
					type: "POST",
					url: "/auth/show_dialog",
					data: {message: '¿ Esta seguro que desea Eliminar la mercancia ?'},
				})
				.done(function( msg )
				{
					bootbox.dialog({
						message: msg,
						title: 'Eliminar Mercancia',
						buttons: {
							success: {
							label: "Aceptar",
							className: "btn-success",
							callback: function() {
								
									$.ajax({
										type: "POST",
										url: "/ov/compras/quitar_producto",
										data: {id:id}
									})
									.done(function( msg )
									{
										window.location.href='/ov/compras/carrito'
									});//Fin callback bootbox
								}
					
							},
								danger: {
								label: "Cancelar!",
								className: "btn-danger",
								callback: function() {

									}
							}
						}
					})
				});
				
			}

		function a_comprar()
			{
				window.location.href="DatosEnvio";						
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
