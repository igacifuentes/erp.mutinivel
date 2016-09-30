	<!--<form id="nueva" class="smart-form"  novalidate="novalidate" >-->
						<form class="smart-form" id="reporte-form" method="post" action="actualizar_vimeo" enctype="multipart/form-data">
							<fieldset>
								<input type="text" class="hide" value="<?php echo $_POST['id']; ?>" name="id">
								<br>
								<a name="id" value="<?php echo $clase[0]->id_Clase; ?>"> </a>
	<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">Nombre del video</label>
												<label class="input">	
													<input name="nombre" placeholder="Nombre" type="text" id="nombre" value="<?php echo $video[0]->Titulo; ?>" required>
												</label>	
											</section>
										</div>
										<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">Descripcion</label>
												<label class="textarea">								
													<textarea rows="3" class="custom-scroll" name="descripcion" required><?php echo $video[0]->Descripcion; ?></textarea> 
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">URL del Video</label>
												<label class="input">	
													<input name="url" placeholder="http://vimeo.com/..." type="text" id="url" value="<?php echo $video[0]->ruta_Video; ?>" required>
												</label>	
											</section>
										</div>
<br>
										<div class="row">
										<!--value="<?php //echo getcwd().$video[0]->ruta_pdf; ?>"-->
													<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<label class="label">PDF</label>
														<div class="input input-file">
														<?php if(empty($video[0]->ruta_pdf)){?>
															<span class="button"><input  id="file" onchange="this.parentNode.nextSibling.value = this.value"  name="userfile" type="file" >Buscar</span><input placeholder="Seleccione un archivo" readonly="" type="text" >
															<?php }else{?>
															<span class="button"><input  id="file" onchange="this.parentNode.nextSibling.value = this.value"  name="userfile" type="file" >Buscar</span><input placeholder="Seleccione un archivo" readonly="" type="text" value="<?php echo getcwd().$video[0]->ruta_pdf; ?>">
															<?php }?>
														</div>
													</section>
										</div>
												<label class="label">Clase</label>
												<label class="select">
													<select name="clase">
													<?php foreach ($clase as $Clase) {

														?>
														<option value="<?php echo $Clase->id_Clase; ?>"><?php echo $Clase->Nombre; ?></option>
														<?php } ?>
													
														 
													</select> 
													<i></i> 
												</label>

													<label class="select">
													<label class="label">Seleccione el tipo de video</label>
													<select name="tipo" id="tipo" required="">
														<option value="1">Promocional</option>
														<option value="2">Clase</option>
														
													</select>
											</label>



							</fieldset>
							<footer>
								<!--<a class="btn btn-success" onclick="enviar()">
									Guardar
								</a>-->
								<input type="submit" class="btn btn-success" id="boton_subir" value="Guardar video">
							</footer>
						</form>

<script src="/template/js/plugin/jquery-form/jquery-form.min.js"></script>
<script src="/template/js/validacion.js"></script>
<script src="/template/js/plugin/fuelux/wizard/wizard.min.js"></script>
<script type="text/javascript">
/*function enviar() {

	
	 $.ajax({
							type: "POST",
							url: "/bo/videos/actualizar_vimeo",
							data: $('#nueva').serialize()
						})
						.done(function( msg ) {
							
									bootbox.dialog({
										message: msg,
										title: "Atención",
										buttons: {
											success: {
											label: "Ok!",
											className: "btn-success",
											callback: function() {
												location.href="/bo/videos/listar_vimeo";
												}
											}
										}
									});
						});//fin Done ajax
		
}*/
</script>