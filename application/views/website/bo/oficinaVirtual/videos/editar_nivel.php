
					<form id="nueva" class="smart-form"  novalidate="novalidate" >
							<fieldset>
								<input type="text" class="hide" value="<?php echo $_POST['id']; ?>" name="id">
								<br>
								<a name="id" value="<?php echo $nivel[0]->id_Nivel; ?>"> </a>
								<label class="input"> Nombre
								<input type="text" name="nombre" required placeholder="Nombre" style="width: 50%;" class="form-control" value="<?php echo $nivel[0]->Nombre; ?>" required>
								<br>
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
	alert("hola mundo");
	
	 $.ajax({
							type: "POST",
							url: "/bo/videos/actualizar_nivel",
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
												location.href="/bo/videos/listar_nivel";
												}
											}
										}
									});
						});//fin Done ajax
		
}
</script>