<?php
include_once ("application/models/ov/model_web_personal_reporte.php");
?>
<!-- MAIN CONTENT -->
<div id="content">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<h1 class="page-title txt-color-blueDark">
				<a class="backHome" href="/ov"><i class="fa fa-home"></i> Menu</a> <span>
					<a href="/ov/cgeneral/autoresponder"> > Autoresponder</a>
				</span> <span> > Web Personal </span>
			</h1>
		</div>
	</div>
	
	<?php
	
	if ($this->session->flashdata ( 'success' )) {
		echo '<div class="alert alert-success fade in">
								<button class="close" data-dismiss="alert">
									×
								</button>
								<i class="fa-fw fa fa-check"></i>
								<strong>Exito! </strong> ' . $this->session->flashdata ( 'success' ) . '
			</div>';
	}
	?>	 

<?php

if ($this->session->flashdata ( 'error' )) {
	echo '<div class="alert alert-danger fade in">
								<button class="close" data-dismiss="alert">
									×
								</button>
								<i class="fa-fw fa fa-check"></i>
								<strong>Error! </strong> ' . $this->session->flashdata ( 'error' ) . '
			</div>';
}
?>	
	
	<section id="widget-grid" class="row">
		<!-- START ROW -->

		<div class="col-xs-12 col-md-12 col-sm-8 col-lg-6"
			style="padding-left: 0%;">
			<!-- NEW COL START -->


			<article class="col-sm-12 col-md-12 col-lg-12">
				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget" id="wid-id-3"
					data-widget-editbutton="false" data-widget-custombutton="false"
					data-widget-colorbutton="false">


					<!-- widget div-->


					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->
					<!-- widget content -->
					<div class="widget-body">
						<div class="tab-pane">
							<form class="smart-form"
								action="/ov/cgeneral/envia_mail_invitacion_web_personal"
								method="POST" role="form">
								<div
									class="row col-xs-12 col-md-12 col-sm-8 col-lg-12 smart-form">
									<br>
									<section class="col col-xs-12 col-md-12 col-sm-8 col-lg-4"
										style="margin-top: 2rem;">

										<label> Invitar a un cliente </label>
									</section>

									<section class="col col-xs-12 col-md-12 col-sm-8 col-lg-4"
										style="margin-top: 0.5rem;">

										<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
											<input name="email_receptor"
											placeholder="e-mail de tu cliente" type="email">
										</label>
									</section>

									<section class="col col-xs-12 col-md-12 col-sm-8 col-lg-4">
										<button type="submit"
											class="btn btn-success col col-xs-12 col-md-12 col-sm-8 col-lg-12">
											Invitar</button>
									</section>

								</div>
								<br>
							</form>
						</div>
					</div>
				</div>
			</article>

			<article class="col-sm-12 col-md-12 col-lg-12">
				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget" id="wid-id-3"
					data-widget-editbutton="false" data-widget-custombutton="false"
					data-widget-colorbutton="false">


					<!-- widget div-->


					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->
					<!-- widget content -->
					<div class="widget-body">

						<div class="tab-pane">
							<div class="row col-xs-12 col-md-12 col-sm-12 col-lg-12 smart-form">
								<br>
								<section class="col col-xs-12 col-md-12 col-sm-8 col-lg-8" 
									style="margin-top: 2rem;">
									<label> URL: <?php echo base_url(); ?>ov/web/index?web=<?php echo $id; ?> </label>
								</section>

								<section class="col col-xs-12 col-md-12 col-sm-6 col-lg-3">
									<a
										href="<?php echo base_url(); ?>ov/web/index?web=<?php echo $id; ?>"
										class="btn btn-success col col-xs-12 col-md-12 col-sm-8 col-lg-12">
										Ir</a>
								</section>
							</div>
							<br>

						</div>
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->
			</article>
		</div>

	</section>



	<!-- end widget grid -->
</div>
<!-- END MAIN CONTENT -->
<script src="/template/js/plugin/dropzone/dropzone.min.js"></script>
<script src="/template/js/plugin/markdown/markdown.min.js"></script>
<script src="/template/js/plugin/markdown/to-markdown.min.js"></script>
<script src="/template/js/plugin/markdown/bootstrap-markdown.min.js"></script>
<script src="/template/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="/template/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script
	src="/template/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="/template/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script
	src="/template/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
<script src="/template/js/validacion.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	/* BASIC ;*/
		var responsiveHelper_dt_basic = undefined;
		var responsiveHelper_datatable_fixed_column = undefined;
		var responsiveHelper_datatable_col_reorder = undefined;
		var responsiveHelper_datatable_tabletools = undefined;
		
		var breakpointDefinition = {
			tablet : 1024,
			phone : 480
		};

		$('#dt_basic').dataTable({
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_dt_basic) {
					responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_dt_basic.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_dt_basic.respond();
			}
		});

	/* END BASIC */

	/* BASIC ;*/
		var responsiveHelper_dt_basic = undefined;
		var responsiveHelper_datatable_fixed_column = undefined;
		var responsiveHelper_datatable_col_reorder = undefined;
		var responsiveHelper_datatable_tabletools = undefined;
		
		var breakpointDefinition = {
			tablet : 1024,
			phone : 480
		};

		$('#dt_basic_paquete').dataTable({
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_dt_basic) {
					responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_dt_basic.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_dt_basic.respond();
			}
		});

	/* END BASIC */
	
		
	pageSetUp();

})
	
</script>

<script type="text/javascript">
		function Enviar(id)
		{
			bootbox.dialog({
				message: "¿Desea enviar este registro ahora?",
				title: "Enviar Venta ".concat(id),
				className: "",
				buttons: {
					success: {
					label: "Si",
					className: "btn-success",
					callback: function() {
						$.ajax({
							type: "post",
							data: {id:id},
							url: "/ov/compras/Cambiar_estado_enviar"
						})
						.done(function(msg){
							bootbox.dialog({
								message: "Se han enviado estos producto exitosamente.",
								title: "Exito",
								className: "",
								buttons: {
									success: {
										label: "Aceptar",
										className: "btn-success",
										callback: function(){
											window.location.href="/ov/cgeneral/web_personal";
										}
									}
								}
							})
						});
					}
				},
				danger: {
					label: "No",
					className: "btn-danger",
					callback: function(){
					
					}
				}
			}
		});
					
		}

		</script>