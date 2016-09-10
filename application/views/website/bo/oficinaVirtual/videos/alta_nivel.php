<!-- MAIN CONTENT -->
			<div id="content" >
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<h1 class="page-title txt-color-blueDark">
						<a class="backHome" href="/bo"><i class="fa fa-home"></i> Menu</a>
							<span>>
								<a href="/bo/oficinaVirtual/"> Oficina Virtual</a> > <a href="/bo/oficinaVirtual/videos"> Videos</a> 
								> <a href="/bo/videos/alta"> Alta</a> > Nivel
							</span>
						</h1>
					</div>
				</div>
	<section id="widget-grid" class="">
		<!-- START ROW -->
		<div class="row">
			<!-- NEW COL START -->
			<article class="col-sm-12 col-md-12 col-lg-12">
				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false"
          data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-sortable="false"
          data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-collapsed="false">
					<div>

						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->

						</div>
						<!-- end widget edit box -->
						<!-- widget content -->
						<div class="widget-body no-padding smart-form">
                <fieldset>
                  <div class="contenidoBotones">
										<div class="col col-lg-4 col-md-6 col-sm-8 col-xs-12" style="margin-bottom: 2rem;"	>
<form class="smart-form" id="reporte-form" method="post" action="guardar_nivel" enctype="multipart/form-data">

										<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">Nombre del nivel</label>
												<label class="input">	
													<input name="nombre_nivel" placeholder="Nombre" type="text" id="nombre_nivel" required>
												</label>	
											</section>
										</div>
																				<div>
												<label class="select">
													<label class="label">Seleccione la mercancía relacionada:</label>
													<select name="tipo" id="tipo" required="">
																	
																	<?php foreach ($mercancia as $Mercancia) {
																			foreach ($producto as $Producto) {
																			if($Mercancia->sku==$Producto->id && $Mercancia->id_tipo_mercancia==1){

																		?>
																		<option value="<?php echo $Mercancia->id; ?>"><?php echo $Producto->nombre; ?></option>
																	<?php }} 
																			foreach ($servicio as $Servicio) {
																			if($Mercancia->sku==$Servicio->id && $Mercancia->id_tipo_mercancia==2){

																	?>
																	<option value="<?php echo $Mercancia->id; ?>"><?php echo $Servicio->nombre; ?></option>
																	<?php }} 
																			foreach ($paquete_inscripcion as $Paquete_inscripcion) {
																			if($Mercancia->sku==$Paquete_inscripcion->id_paquete && $Mercancia->id_tipo_mercancia==3){

																	?>
																	<option value="<?php echo $Mercancia->id; ?>"><?php echo $Paquete_inscripcion->nombre; ?></option>
																	<?php }} 
																			foreach ($combinado as $Combinado) {
																			if($Mercancia->sku==$Combinado->id && $Mercancia->id_tipo_mercancia==4){

																	?>
																	<option value="<?php echo $Mercancia->id; ?>"><?php echo $Combinado->nombre; ?></option>	
																		<?php }} 

																			foreach ($membresia as $Membresia) {
																			if($Mercancia->sku==$Membresia->id && $Mercancia->id_tipo_mercancia==5){

																		?>	
																		<option value="<?php echo $Mercancia->id; ?>"><?php echo $Membresia->nombre; ?></option>														
																		<?php }} ?>
																	<?php } ?>
														
													</select>
											</label>
			
										</div><br>
										<br>
										<input type="submit" class="btn btn-success" id="boton_subir" value="Guardar nivel">
									</form>
										 </div>
									</div>
								</fieldset>
						</div>
						<!-- end widget content -->

					</div>
					<!-- end widget div -->
				</div>
				<!-- end widget -->
			</article>
			<!-- END COL -->
		</div>
				<div class="row">         
			        <!-- a blank row to get started -->
			        <div class="col-sm-12">
			            <br />
			            <br />
			        </div>
		        </div>
			</div>
			<!-- END MAIN CONTENT -->

			<<script type="text/javascript">
function new_grupo()
{
	var grupo=$("#grupo").val();
	var tipo=$("#tipo").val();
	if(grupo!="")
	{
		$.ajax({
			data: {grupo: grupo, tipo: tipo},
			type: "post",
			url: "add_grupo",
			success: function(){
				location.href="/bo/grupos/listar"
			}
		});
	}
}
</script>
<style>


.link
{
	margin: 0.5rem;
}
.minh
{
	padding: 50px;
}
.link a:hover
{
	text-decoration: none !important;
}
</style>
			
