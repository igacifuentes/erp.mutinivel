<!-- MAIN CONTENT -->
			<div id="content" >
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
						<h1 class="page-title txt-color-blueDark">
						<a class="backHome" href="/bo"><i class="fa fa-home"></i> Menu</a>
							<span>>
								<a href="/bo/oficinaVirtual/"> Oficina Virtual</a> > <a href="/bo/oficinaVirtual/videos"> Videos</a> 
								> <a href="/bo/videos/alta"> Alta</a> > Clase
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
<form class="smart-form" id="reporte-form" method="post" action="guardar_clase" enctype="multipart/form-data">

										<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">Nombre de la clase</label>
												<label class="input">	
													<input name="nombre" placeholder="Nombre" type="text" id="nombre" required>
												</label>	
											</section>
										</div>
										<div class="row">
												<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descripcion">
													<label class="label">Descripcion</label>
													<label class="textarea">								
														<textarea rows="3" class="custom-scroll" name="descripcion" name="descripcion"></textarea> 
													</label>
												</section>
										</div>
										<div class="row">
										
												<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<label class="label">Imagen</label>
													<div class="input input-file">
														<span class="button"><input id="file" onchange="this.parentNode.nextSibling.value = this.value" name="userfile" type="file" required>Buscar</span><input placeholder="Seleccione un archivo" readonly="" type="text">
													</div>
												</section>
										</div>
										<label class="select">
													<label class="label">Seleccione el nivel al que pertenece la clase:</label>
													<select name="tipo" id="tipo" required="">
													<?php foreach ($nivel as $Nivel) {
															if($Nivel->estatus=='ACT'){
														?>
														<option value="<?php echo $Nivel->id_Nivel; ?>"><?php echo $Nivel->Nombre; ?></option>
														<?php }} ?>
														
													</select>
											</label>
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
			