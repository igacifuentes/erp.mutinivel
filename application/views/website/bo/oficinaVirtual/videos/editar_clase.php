
					<form id="nueva" class="smart-form"  novalidate="novalidate" >
							<fieldset>
								<input type="text" class="hide" value="<?php echo $_POST['id']; ?>" name="id">
								<br>
								<a name="id" value="<?php echo $clase[0]->id_Clase; ?>"> </a>
								<div class="row">
											<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="busquedatodos">
												<label class="label">Nombre de la clase</label>
												<label class="input">	
													<input name="nombre" value="<?php echo $clase[0]->Nombre; ?>" placeholder="Nombre" type="text" id="nombre" required>
												</label>	
											</section>
										</div>
										<div class="row">
												<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12" id="descripcion">
													<label class="label">Descripcion</label>
													<label class="textarea" value="<?php echo $clase[0]->Descripcion; ?>">								
														<textarea rows="3" value="<?php echo $clase[0]->Descripcion; ?>" class="custom-scroll" name="descripcion" name="descripcion"><?php echo $clase[0]->Descripcion; ?></textarea> 
													</label>
												</section>
										</div>
										<div class="row">
										
												<section class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<label class="label">Imagen</label>
													<div class="input input-file">
														<span class="button"><input id="file"  onchange="this.parentNode.nextSibling.value = this.value" name="userfile" type="file" required>Buscar</span><input placeholder="Seleccione un archivo" readonly="" type="text" >
													</div>
												</section>
										</div>
										<label class="select">
													<label class="label">Seleccione el nivel al que pertenece la clase:</label>
													<select name="tipo" id="tipo" required="">
													<?php foreach ($nivel as $Nivel) {

														?>
														<option value="<?php echo $Nivel->id_Nivel; ?>"><?php echo $Nivel->Nombre; ?></option>
														<?php } ?>
														
													</select>
											</label>


							</fieldset>
							<footer>
								<a class="btn btn-success" onclick="enviar()">
									Guardar
								</a>
							</footer>
						</form>

<script src="/template/js/plugin/jquery-form/jquery-form.min.js"></script>
<script src="/template/js/validacion.js"></script>
<script src="/template/js/plugin/fuelux/wizard/wizard.min.js"></script>
<script type="text/javascript">
function enviar() {

	
	 $.ajax({
							type: "POST",
							url: "/bo/videos/actualizar_clase",
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
												location.href="/bo/videos/listar_clase";
												}
											}
										}
									});
						});//fin Done ajax
		
}
</script>