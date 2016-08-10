<script src="/template/js/plugin/jquery-form/jquery-form.min.js"></script>
<script src="/template/js/validacion.js"></script>
<script src="/template/js/plugin/fuelux/wizard/wizard.min.js"></script>
<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function() {
	//Para local /ov/perfil_red/crear_user
	//Produccion /auth/register
	// fuelux 

			  var wizard = $('.wizard').wizard();

			  wizard.on('finished', function (e, data) {

				  $( ".invalid" ).remove();

			  	var ids = new Array( 
						"#nombre",
					 	"#apellido",
					 	"#datepicker",
					 	"#keyword",
					 	"#username",
					 	"#email",
					 	"#password",
					 	"#confirm_password"
					 	
					 );
					var mensajes = new Array( 
						"Por favor ingresa tu nombre",
					 	"Por favor ingresa tu apellido",
					 	"Por favor ingresa tu fecha de nacimiento",
					 	"Por favor ingresa tu DNI",
					 	"Por favor ingresa un nombre de usuario",
					 	"Por favor ingresa un correo",
					 	"Por favor ingresa una contraseña",
					 	"Por favor confirma tu contraseña"
					 );

					var idss=new Array(
						"#username"
					);
					var mensajess=new Array(
						"El nombre de usuario no puede contener espacios en blanco"
					);
					
					var validacion_=valida_espacios(idss,mensajess);
					var validacion=valida_vacios(ids,mensajes);
					if(validacion&&validacion_)
					{

						bootbox.dialog({
							message: "<h2>Términos y Condiciones </h2>"+
						"<p >"+
						"CONDICIONES - Contrato de Distribuidor  Independiente de Productos y Servicios  Digitales "+
						"El Distribuidor  Independiente en Productos y Servicios  Digitales  (DIPSD) y Educate Network (EN) acuerdan por la presente las siguientes condiciones: <br>"+
						"</p>"+
						"<ol type='1'>"+
						"<li>Capacidad legal. El DIPSD  certifica que es adulto y que tiene capacidad legal para celebrar el presente Contrato.</li>"+
						"<li>Totalidad del Contrato. Esta Solicitud de DIPSD  y el Manual de Políticas deEducate Network  junto con sus anexos (todos ellos integrados en la presente para su referencia) constituyen la totalidad del contrato (“el Contrato”) entre Educate Network  y el DIPSD . Ninguna otra promesa, manifestación, garantía o acuerdos de otro tipo que no se efectúen de conformidad con los procedimientos de modificación descritos en el Manual de Políticas de Educate Network tendrán validez a menos que se realicen por escrito y que estén firmados por ambas partes. Las palabras y expresiones definidas en el Manual de Políticas de Educate Network  tendrán el mismo significado en esta Solicitud de DIPSD </li>"+
						"<li>Aceptación. El Contrato entrará en vigor a partir de la firma de la Solicitud de DIPSD  por parte de Educate Network  y el DIPSD . La Fecha de Entrada en Vigor del Contrato será la fecha en la que la última de las dos partes firme la Solicitud de DIPSD . La persona o entidad jurídica no se convertirá en DIPSD  de Educate Network  hasta la Fecha de entrada en Vigor. Ninguna de las partes del presente Contrato tendrá ningún tipo de obligación ni compromiso hasta la Fecha de entrada en Vigor. El DIPSD  se compromete a enviar a Educate Network su documento legal de identificación y una copia de su Solicitud de DIPSD  en un plazo de 60 días a partir de la Fecha de entrada en Vigor del presente Contrato. En caso de no ser así, se cancelará automáticamente el Contrato. </li>"+
						"<li>Una vez que el DIPSD  ha recibido el Contrato refrendado por Educate Network  en la Solicitud de DIPSD , éste tendrá derecho a adquirir los Productos por su valor al por mayor, vender los productos de Educate Network , y participar en el plan de compensaciones de Educate Network  (que se adjunta al Manual de Políticas de Educate Network  ), sujeto a las condiciones establecidas en el Contrato.</li>"+
						"<li>Declaración de Obligaciones Financieras. Las únicas obligaciones financieras del DIPSD durante el periodo de 12 (doce) meses a partir de la fecha de inicio del presente Contrato será abonar una cuota de afiliación (actualmente de 60.00 dólares , los cuales le dan derecho a un año de las servicios educativos , la administración y tramitación de la solicitud de DIPSD  por parte de Edúcate Network  y el envío de los boletines de información y servicios de ayuda ) así como pagar los productos que el DISPD  decida adquirir a Edúcate Network .  El DIPSD  no tiene ninguna obligación financiera y en concreto puede decidir libremente sobre la compra de los productos y/o servicios  a  Edúcate Network, el pago de los 60.00 dólares también incluyen la inscripción del distribuidor al sistema de compensación vigente que es una matriz 2x2 la cual al ser completada, ya sea personalmente o por derrame  paga una comisión de 60.00 dólares, siempre y cuando se cumplan los siguientes requisitos  a) haber patrocinados 2 personas personalmente. b) Estar participando en el plan residual mensual de 30.00 dólares  , lo primero que ocurra , si después de que se llenó la matriz en 90 días no se tiene movimientos en la cuenta de la persona que lleno la matriz (mínimo una persona inscripta personalmente)  , se le excluye de la red y solo queda como un usuario del sistema educativo básico por el que pago los 60.00 dólares , el  tiempo que reste  de los 12 meses pactados.</li>"+
						"<li>Duración del Contrato. Conforme a las disposiciones de la sección 12 y el Manual de Políticas, el Contrato tendrá una duración de un año, comenzando desde la Fecha de Entrada en Vigor y finalizando un año después. La renovación del contrato estará sujeta a las condiciones establecidas en el Manual de Políticas de Educate Network  tal como esté dispuesto en el momento de la renovación.</li>"+
						"<li>Condición de Distribuidor Independiente. El DIPSD  comprende y reconoce su condición de Distribuidor  independiente, y no de empleado, representante, franquiciador, socio, asociado o propietario de Educate Network . El DIPSD  no tendrá potestad para obligar a Edúcate Network  ni incurrir en ninguna obligación en nombre de Edúcate Network. El DIPSD  será el único responsable del cumplimiento de todas las leyes y normativas relacionadas con las actividades comerciales del DIPSD  en todas las jurisdicciones con competencias sobre dichas actividades. El Manual de Políticas de Edúcate Network  contiene otras disposiciones adicionales relacionadas con la condición de Distribuidor independiente del DIPSD . A la hora de promocionar y vender los productos de Edúcate Network  el  DIPSD  actuará de forma independiente, vendiendo exclusivamente a través de su propia cuenta.</li>"+
						"<li>Derechos de marca / Uso de materiales de la empresa. El DIPSD  acepta no utilizar los nombres de marcas registradas, marcas comerciales o material con derechos de autor propiedad de Edúcate Network, o de cualquier otra entidad perteneciente a Edúcate Network  (de acuerdo con la definición incluida en el Manual de Políticas de Edúcate Network) sin el previo consentimiento por escrito de la entidad pertinente perteneciente a Edúcate Network. Edúcate Network  dispone  de derechos de marca sobre su red de Distribuidores  independientes, listas de nombres, correos electrónicos, números telefónicos y cualquiera otra forma de comunicación  confidencial. El DIPSD  acepta no usar ninguna red, listas de DIPSD , o información confidencial perteneciente a Edúcate Network   para promocionar la venta o uso de productos o servicios, salvo los que se ofrezcan a través de alguna entidad de Edúcate Network . El DIPSD  acepta que el uso de los materiales con derecho de marca de Edúcate Network, cuando éste suponga el incumplimiento del Contrato, podrá generar graves daños y perjuicios a Edúcate Network  o a cualquier entidad de la Organización Edúcate Network.</li>"+
						"<li>Cancelación. El DIPSD  tiene derecho a enviar a Edúcate Network  una notificación por escrito (a la dirección que aparece en el dorso) a fin de cancelar el presente Contrato por cualquier motivo en un plazo de 14 (catorce) días a partir de la fecha de entrada en vigor. Tras su cancelación, El DIPSD  podrá devolver a Edúcate Network  cualquier producto que Que esté usando y  recuperar la totalidad del importe abonado por dichos productos,  y se devuelvan a Edúcate Network  antes de 14 (catorce) días desde la fecha de entrada en vigor del presente Contrato. El DIPSD  reconoce que es libre de cancelar el Contrato en cualquier momento y por cualquier motivo siempre y cuando envíe una notificación escrita a la dirección de Edúcate Network  que aparece al final del contrato. Edúcate Network podrá cancelar el Contrato mediante notificación por escrito al DIPSD  por los siguientes motivos: (a) incumplimiento de cualquier condición, que en el Contrato (o en cualquier modificación del Contrato) esté definido como incumplimiento “material”; o (b) incumplimiento del DIPSD  de cualquier condición del Contrato que no se pueda corregir. A su única discreción, en el caso de cualquier otro incumplimiento de cualquier condición del Contrato, Edúcate Network  tendrá derecho a entregar al DIPSD , con una antelación no inferior a sesenta (60) días, una notificación en la que se exija que se corrija dicho incumplimiento. Si el DIPSD  no lo corrige, Edúcate Network tendrá derecho a cancelar el Contrato, tras los sesenta (60) días, entregando una notificación adicional que tendrá efecto inmediato. Tal como se explica en el Manual de Políticas de Edúcate Network, inmediatamente después de la cancelación del Contrato, el DIPSD  perderá sus derechos y privilegios, salvo los que se indican a continuación, relacionados con su condición de DIPSD  de Edúcate Network.</li>"+
						"<li>Derechos tras la cancelación. Si Edúcate Network  o el DIPSD  cancelan el contrato, el DIPSD  tendrá los siguientes derechos: (a) no estará sometido a ninguna obligación contractual futura de conformidad con el presente contrato; (b) tendrá derecho, en un plazo de 21 días tras la cancelación, a devolver a Edúcate Network todos los productos y servicios adquiridos 90 días antes de la cancelación por el DIPSD  a Edúcate Network y a recuperar los importes  abonados a Edúcate Network  por dichos productos y servicios ,  El Código de la Federación mundial  de Asociaciones de Venta Directa ()  WFDSA  concede al DIPSD  ciertos derechos de devolución y reclamación del  DIPSD  en  la cancelación del contrato. Edúcate Network  respetará dichos derechos.</li>"+
						"<li>Modificación. El DIPSD  comprende que Edúcate Network  puede modificar el presente Contrato, junto con los documentos que lo acompañan en cualquier momento, sometiéndose a condiciones sobre los precios de los Productos y a las obligaciones financieras del DIPSD . En el Manual de Políticas encontrará más detalles. Las modificaciones o variaciones se publicarán en la página web de Edúcate Network y entrarán en vigor en la fecha de publicación en la página web y/o en cualquier otro medio de comunicación, lo que suceda antes. Si alguna modificación o variación entra en conflicto con las condiciones del Contrato, las modificaciones o variaciones tendrán prioridad.</li>"+
						"<li>Recuperación de las comisiones. El DIPSD  podrá conservar las comisiones y bonificaciones recibidas después de la cancelación del Contrato, excepto cuando Edúcate Network  reclame cualquier comisión y bonificación que tenga relación con el producto o servicio  devuelto. Edúcate Network no tendrá derecho a reclamar ninguna comisión o bonificación después de 120 días de la fecha de pago de la misma.</li>"+
						"<li>Legislación aplicable. Las partes aceptan que el presente Contrato se rija e intérprete de conformidad con la legislación de los Estados Unidos De Norte América (USA)  Cualquier disputa que surja en relación con este contrato será dirimida por los tribunales de Los Estados Unidos de Norte América  (USA) .</li>"+
						"<li>Productos de la competencia: El Consultor Independiente en Productos y servicios no podrá promocionar, solicitar o comercializar productos y servicios  de empresas competidoras de productos y servicios similares o del mismo ramo. No se podrá promocionar en ningún tipo de eventos, reuniones, convenciones u otro tipo de actividades de Edúcate Network productos que no sean de Edúcate Network.</li>"+
						"<li>Cambios en la Información Personal. El distribuidor  Independiente en Productos y servicios  ha de notificar a Edúcate Network todo cambio relativo a su dirección postal, información bancaria o fiscal. Edúcate Network  no será responsable de ninguna pérdida incurrida por el DIPSD  debida a la falta de notificación de dicho cambio a Edúcate Network </li>"+
						"<li>Protección de datos. El DIPS , y si fuera aplicable, el co-solicitante que firma el presente contrato, por la presente dan su consentimiento a Edúcate Network  para que procese los datos personales detallados en la solicitud/ contrato y para que los ceda, junto con información sobre futuras actividades de venta del DIPSD  a Edúcate Network  en Oakdale , Ca , Estados Unidos de América, y a sus filiales y empresas asociadas en todo el mundo, y a otros DIPSD  dentro la misma organización de ventas o cadena de distribución que el DIPSD , con el único objeto de administrar las ventas y distribución de los productos de Edúcate Network y aportar informes a sus DIPSDs  sobre las ventas dentro de su organización de ventas. El DIPSD , y si fuera aplicable, el co-solicitante que firma el contrato, comprenden y aceptan que esta cesión de datos personales se puede efectuar a países sin un nivel legal de protección de la privacidad equivalente al que protege al DISPD  en su país de origen. El DIPSD , y si fuera aplicable, el co-solicitante que firma el contrato, tendrán derecho de acceso a sus datos personales y podrán solicitar a Edúcate Network  que corrija, elimine o bloquee cualquier dato incorrecto. El DIPSD y si fuera aplicable, el co-solicitante que firma el contrato, recibirán informes de ventas con datos personales de otros DIPSDs , y comprenden y aceptan no usar dichos datos salvo para la administración y desarrollo de su organización de ventas, así como que en el momento de la cancelación del presente Contrato, el DIPSD  y el co-solicitante eliminarán inmediatamente dichos datos personales de sus archivos, salvo cuando la legislación pertinente disponga lo contrario. Las partes aceptan que esta obligación perdurará tras la cancelación del Contrato.</li>"+
						"<li>División del contrato. En caso de que cualquier disposición del Contrato pueda llegar a perder su validez o legalidad por cualquier motivo, dicha disposición se eliminará del Contrato, pero la validez, legalidad y ejecución del resto de disposiciones del Contrato no se verán afectadas ni dañadas por esta división</li>"+
						"</ol>"+
						"<br>"+
						"<p>"+
						"Edúcate Network"+
						"135 S. Sierra St , Oakdale ,  Ca. USA."+
						"Todos los derechos reservados."+
						"</p>",
						title: "Términos y Condiciones",
						buttons: {
							success: {
								label: "Aceptar",
								className: "btn-success",
								callback: function(){
									enviarDatos();
									}
								},
								danger: {
									label: "Cancelar",
									className: "btn-danger",
									callback: function() {

										}
								}
							}

							});
						
					}
					else
					{
						$.smallBox({
					      title: "<h1>Atención</h1>",
					      content: "<h3>Por favor revisa que todos los datos estén correctos</h3>",
					      color: "#C46A69",
					      icon : "fa fa-warning fadeInLeft animated",
					      timeout: 4000
					    });
					}
			    
			  });
	
	pageSetUp();
});

function enviarDatos(){
	iniciarSpinner();
	$( ".steps" ).slideUp();
	$( ".steps" ).remove();
	$( ".actions" ).slideUp();
	$( ".actions" ).remove();
	$("#myWizard").append('<div class="progress progress-sm progress-striped active"><div id="progress" class="progress-bar bg-color-darken"  role="progressbar" style=""></div></div>');
	
	$.ajax({
		type: "POST",
		url: "/auth/register",
		data: $('#register').serialize()
	})
	.done(function( msg1 ) {
		
		$("#progress").attr('style','width: 40%');
		var email=$("#email").val();
		$("#checkout-form").append("<input value='"+email+"' type='hidden' name='mail_important'>");
		$.ajax({
			type: "POST",
			url: "/ov/perfil_red/afiliar_nuevo",
			data: $('#checkout-form').serialize()
			})
			.done(function( msg ) {
				$("#progress").attr('style','width: 100%');
				bootbox.dialog({
					message: msg,
					title: "Atención",
					buttons: {
						success: {
						label: "Ok!",
						className: "btn-success",
						callback: function() {
							location.href="/ov/red/red_arbol1?id="+<?php echo $_GET['id']; ?>;
							FinalizarSpinner();
							}
						}
					}
				});
			});
	});//fin Done ajax
}

$("#remove_step").click(function() {
	$("#tipo_plan").attr("name","tipo_plan");
	$('.wizard').wizard('selectedItem', {
			step: 4
		});
	$( "#step4" ).slideUp();
	$( "#step4" ).remove();
	$( "#paso4" ).slideUp();
	$( "#paso4" ).remove();
	$( this ).slideUp();
	$( this ).remove();
});

$("#plan1").click(function(event) {
	$("#tipo_plan").attr("value","1");
	$("#planuno").addClass('packselected');
	$("#plandos").removeClass('packselected');
	$("#plantres").removeClass('packselected');
	$("#plancuatro").removeClass('packselected');
});

$("#plan2").click(function(event) {
	$("#tipo_plan").attr("value","2");
	$("#planuno").removeClass('packselected');
	$("#plandos").addClass('packselected');
	$("#plantres").removeClass('packselected');
	$("#plancuatro").removeClass('packselected');
});
$("#plan3").click(function(event) {
	$("#tipo_plan").attr("value","3");
	$("#planuno").removeClass('packselected');
	$("#plandos").removeClass('packselected');
	$("#plantres").addClass('packselected');
	$("#plancuatro").removeClass('packselected');
});
$("#plan4").click(function(event) {
	$("#tipo_plan").attr("value","4");
	$("#planuno").removeClass('packselected');
	$("#plandos").removeClass('packselected');
	$("#plantres").removeClass('packselected');
	$("#plancuatro").addClass('packselected');
});



/*
CODIGO PARA QUITAR ELEMENTO HACIENDO CLICK EN ELLOS
$("input").click(function() {
$( this ).slideUp();
$( this ).remove();
});
*/
function codpos()
{
	
}
function clickme()
{
}

function SelecionarFase()
{

	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/MensajeFase",
		data: {	id: <?php echo $id ?>, red: <?php echo $_GET['id']; ?> }
	})
	.done(function( msg )
	{
		bootbox.dialog({
			message: msg,
			title: "Informacion Personal",
			buttons: {
				success: {
				label: "Cerrar!",
				className: "hide",
				callback: function() {
					//location.href="";
					}
				}
			}
		});
	});
}

function faseCambio(fase){
	
	bootbox.dialog({
		message: "¿Estas Seguro?",
		title: "Atención",
		buttons: {
			success: {
			label: "Si",
			className: "btn-success",
			callback: function() {
				
				$.ajax({
					type: "POST",
					url: "/ov/perfil_red/CambioFase",
					data: {
						id: <?php echo $id ?>,
						red: <?php echo $_GET['id']; ?>,
						fase: fase
							},
					})
					.done(function(msg)
					{
						alert('Has Cambiado de fase'+msg);
						location.reload();
					})
				}
			},
			close:{
				label: "NO",
				className: "btn-danger",
				callback: function() {
					
					}
				}
		}
	});
	
}

function use_username()
{
	$('#username').val($('#username').val().replace(" ",""));
	var username=$("#username").val();
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_username",
		data: {username: username},
	})
	.done(function( msg )
	{
		$("#msg_usuario").remove();
		$("#usuario").append("<div id='msg_usuario'>"+msg+"</div>")
	});
	validate_user_data();
}
function use_mail()
{
	var mail=$("#email").val();
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_mail",
		data: {mail: mail},
	})
	.done(function( msg )
	{
		$("#msg_correo").remove();
		$("#correo").append("<div id='msg_correo'>"+msg+"</div>")
	});
	validate_user_data()
}


function confirm_pass()
{
	var password=$("#password").val();
	var confirm_password=$("#confirm_password").val();
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/confirm_password",
		data: {password: password,confirm_password: confirm_password},
	})
	.done(function( msg )
	{
		$("#msg_confirm_password").remove();
		$("#confirmar_password").append("<div id='msg_confirm_password'>"+msg+"</div>")
	});
	validate_user_data()
}

function validate_user_data()
{
	var username=$("#username").val();
	var mail=$("#email").val();

	var password=$("#password").val();
	var confirm_password=$("#confirm_password").val();

	$("#validate_user_data").remove();

	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/validate_user_data",
		data: {mail: mail,username: username,password: password,confirm_password: confirm_password},
	})
	.done(function( msg )
	{
		$("#validate_user_data").remove();
		$("#register").append("<div id='validate_user_data'>"+msg+"</div>")
	});
}

function otra()
{
	if($("#otro:checked").val()=="on")
	{
		$("#b_persona").removeClass("hidden");
		$("#afiliado_value").attr("name","afiliados");
	}
	else
	{
		$("#b_persona").addClass("hidden");
		$("#afiliado_value").attr("name","");
	}
}

function agregar_red(tipo)
{
	if(tipo==1)
	{
		$("#tel_red").append("<section class='col col-6'><label class='input'> <i class='icon-prepend fa fa-mobile'></i><input type='tel' name='movil[]' placeholder='(999) 99-99-99-99-99'></label></section>");
	}
	else
	{
		$("#tel_red").append("<section class='col col-6'><label class='input'> <i class='icon-prepend fa fa-phone'></i><input type='tel' name='fijo[]' placeholder='(999) 99-99-99-99-99'></label></section>");
	}
}
 $(function()
 {
 	a = new Date();
	año = a.getFullYear()-18;
	$( "#datepicker" ).datepicker({
	changeMonth: true,
	numberOfMonths: 2,
	maxDate: año+"-12-31",
	dateFormat:"yy-mm-dd",
	changeYear: true,
	yearRange: "-99:+0",
	});
});

function subred(id)
{
	$("#"+id).children(".quitar").attr('onclick','');
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/get_red_afiliar",
		data: {id: id,
				red: <?php echo $_GET['id']; ?>},
	})
	.done(function( msg )
	{
		$("#"+id).append(msg);
	});
}


function check_keyword()
{
	$("#msg_key").remove();
	$("#key_").append('<i id="ajax_" class="icon-append fa fa-spinner fa-spin"></i>');

	var keyword=$("#keyword").val();
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_keyword",
		data: {keyword: keyword},
	})
	.done(function( msg )
	{
		$("#msg_key").remove();
		$("#key").append("<p id='msg_key'>"+msg+"</msg>");
		$("#ajax_").remove();
	});
}
function check_keyword_co()
{
	$("#msg_key_co").remove();
	$("#key_1").append('<i id="ajax_1" class="icon-append fa fa-spinner fa-spin"></i>');
	var keyword=$("#keyword_co").val();
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_keyword",
		data: {keyword: keyword},
	})
	.done(function( msg )
	{
		$("#msg_key_co").remove();
		$("#key_co").append("<p id='msg_key_co'>"+msg+"</msg>");
		$("#ajax_1").remove();
	});
}
function check_keyword_red()
{
	$("#msg_key_red").remove();
	var keyword=$("#keyword_red").val();
	$("#key_2").append('<i id="ajax_2" class="icon-append fa fa-spinner fa-spin"></i>');
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_keyword",
		data: {keyword: keyword},
	})
	.done(function( msg )
	{
		$("#key_red").append("<p id='msg_key_red'>"+msg+"</msg>");
		$("#ajax_2").remove();
	});
}
function check_keyword_red_co()
{
	$("#msg_key_red_co").remove();
	var keyword=$("#keyword_red_co").val();
	$("#key_3").append('<i id="ajax_3" class="icon-append fa fa-spinner fa-spin"></i>');
	$.ajax({
		type: "POST",
		url: "/ov/perfil_red/use_keyword",
		data: {keyword: keyword},
	})
	.done(function( msg )
	{
		$("#msg_key_red_co").remove();
		$("#key_red_co").append("<p id='msg_key_red_co'>"+msg+"</msg>");
		$("#ajax_3").remove();
	});
}
function codpos_red()
{
	var pais = $("#pais_red").val();
	if(pais=="MEX")
	{
		var cp=$("#cp_red").val();
		$.ajax({
			type: "POST",
			url: "/ov/perfil_red/cp_red",
			data: {cp: cp},
		})
		.done(function( msg )
		{
			$("#colonia_red").remove();
			$("#municipio_red").remove();
			$("#estado_red").remove();
			$("#dir_red").append(msg);
		})
	}
}

</script>
<!-- MAIN CONTENT -->
<div id="content">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
			<h1 class="page-title txt-color-blueDark">
					<a class="backHome" href="/bo"><i class="fa fa-home"></i> Menu</a>
				<span> 
				> <a href="/ov/perfil_red/afiliar?tipo=1">Red</a>
				> Frontal
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
				<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-colorbutton="false">
					<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
						
						data-widget-colorbutton="false"	
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true" 
						data-widget-sortable="false"
						
					-->
					<header>
						<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
						<h2>Datos personales</h2>
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
							<div id="myTabContent1" class="tab-content padding-10">
								<div class="tab-pane fade in active" id="s1">
									<div id="uno" class="row fuelux">
	                                	<div id="myWizard" class="wizard">
		                                	
											<ul class="steps">
											
												<li data-target="#step1" class="active">
													<span class="badge badge-info">1</span>Datos del registro<span class="chevron"></span>
												</li>
												<li data-target="#step2">
													<span class="badge">2</span>Datos personales<span class="chevron"></span>
												</li>
												
												<?php /* ocultar afiliado ?><li data-target="#step3">
													<span class="badge">3</span>Selección del plan<span class="chevron"></span>
												</li>
												<li id="paso4" data-target="#step4">
													<span class="badge">4</span>Método de pago<span class="chevron"></span>
												</li>
												<?php */ ?>
											</ul>
											<div id="acciones" class="actions">
												<button type="button" class="final btn btn-sm btn-primary btn-prev">
													<i class="fa fa-arrow-left"></i>Anterior
												</button>
												<button type="button" class="final btn btn-sm btn-success btn-next" data-last="Afiliar" disabled="disabled">
													Siguiente<i class="fa fa-arrow-right"></i>
												</button>
											</div>
										</div>
										<div class="step-content">
											<div class="form-horizontal" id="fuelux-wizard" >
												<div class="step-pane active" id="step1">
													<form id="register" class="smart-form">
														<fieldset>
														
															<legend>Información de cuenta</legend>
															<section id="usuario" class="col col-6">
																<label class="input"> <i class="icon-prepend fa fa-user"></i>
																	<input id="username" onkeyup="use_username()" required type="text" name="username" placeholder="Usuario">
																</label>
															</section>
															<section id="correo" class="col col-6">
																<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
																	<input id="email" onkeyup="use_mail()" required type="email" name="email" placeholder="Email">
																</label>
															</section>
															<section class="col col-6">
																<label class="input"> <i class="icon-prepend fa fa-lock"></i>
																	<input id="password" onkeyup="confirm_pass()" required type="password" name="password" placeholder="Contraseña">
																</label>
															</section>
															<section id="confirmar_password" class="col col-6">
																<label class="input"> <i class="icon-prepend fa fa-lock"></i>
																	<input id="confirm_password" onkeyup="confirm_pass()" required type="password" name="confirm_password" placeholder="Repite contraseña">
																</label>
															</section>
														</fieldset>
													</form>
												</div>
												<div class="step-pane" id="step2">
													<form method="POST" action="/perfil_red/afiliar_nuevo" id="checkout-form" class="smart-form" novalidate="novalidate">
														<fieldset>
															<legend>Datos personales del afiliado</legend>
															<div class="row">
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-user"></i>
																		<input id="nombre" required type="text" name="nombre" placeholder="Nombre">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-user"></i>
																		<input id="apellido" required type="text" name="apellido" placeholder="Apellido">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-calendar"></i>
																		<input required id="datepicker" type="text" name="nacimiento" placeholder="Fecha de nacimiento" readonly="readonly">
																	</label>
																</section>
																<section class="col col-3" id="key">
																	<label id="key_" class="input"> <i class="icon-prepend fa fa-barcode"></i>
																		<input id="keyword" onkeyup="check_keyword()" placeholder="Número de identificación" type="text" name="keyword">
																	</label>
																</section>
																<section class="col col-2">
																	Tipo de persona
																	<label class="select">
																		<select id="tipo_fiscal" required name="fiscal">
																		<?foreach ($tipo_fiscal as $key)
																		{?>
																			<option value="<?=$key->id?>">
																				<?=$key->descripcion?>
																			</option>
																		<?}?>
																		</select>
																	</label>
																</section>
															</div>
															<input type="hidden" name="tipo_plan" id="tipo_plan">
															<div class="row">
															<div id="tel" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-phone"></i>
																		<input required name="fijo[]" placeholder="(99) 99-99-99-99" type="tel">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-mobile"></i>
																		<input required name="movil[]" placeholder="(999) 99-99-99-99-99" type="tel">
																	</label>
																</section>
															</div>
															<section class="col col-3">
																<button type="button" onclick="agregar('1')" class="btn btn-primary">
																	&nbsp;Agregar <i class="fa fa-mobile"></i>&nbsp;
																</button>
																<button type="button" onclick="agregar('2')" class="btn btn-primary">
																	&nbsp;Agregar <i class="fa fa-phone"></i>&nbsp;
																</button>
															</section>
															</div>
														</fieldset>
														
														<fieldset>
															<legend>Datos co-aplicante</legend>
															<div class="row">
																<section class="col col-4">
																	<label class="input">
																		<input placeholder="Nombre" type="text" name="nombre_co">
																	</label>
																</section>
																<section class="col col-4">
																	<label class="input"> 
																		<input placeholder="Apellido" type="text" name="apellido_co">
																	</label>
																</section>
																<section class="col col-4" id="key_co">
																	<label id="key_1" class="input"> <i class=" icon-prepend fa fa-barcode"></i>
																		<input onkeyup="check_keyword_co()" placeholder="CURP o RFC" type="text" name="keyword_co" id="keyword_co">
																	</label>
																</section>
															</div>
														</fieldset>
														<fieldset>
														<legend>Dirección del afiliado</legend>
															<div id="dir" class="row">
																<section class="col col-2">
																	<div class="form-group">
																		<label>País</label>
																		<select style="width:100%" class="select2" id="pais" required name="pais">
																			<?foreach ($pais as $key)
																			{?>
																				<option value="<?=$key->Code?>">
																					<?=$key->Name?>
																				</option>
																			<?}?>
																		</select>
																	</div>
																</section>
																<section id="municipio" class="col col-2">
																	<label class="input">
																		Estado
																		<input type="text" name="estado" >
																	</label>
																</section>

																<section id="municipio" class="col col-2">
																	<label class="input">
																		Municipio
																		<input type="text" name="municipio" >
																	</label>
																</section>

																<section id="colonia" class="col col-2">
																	<label class="input">
																		Colonia
																		<input type="text" name="colonia" >
																	</label>
																</section>

																<section class="col col-2">
																	<label class="input">
																		Dirección de domicilio
																		<input required type="text" name="calle">
																	</label>
																</section>
																
																<section class="col col-2">
																	<label class="input">
																		Código postal
																		<input required type="text" id="cp" name="cp">
																	</label>
																</section>
																
															</div>
														</fieldset>
														<fieldset>
															<legend>Estadistica</legend>
															<div class="row">
																<section class="col col-3">Estado civil
																	<label class="select">
																		<select name="civil">
																		<?foreach ($civil as $key)
																		{
																			if($key->id_edo_civil==$usuario[0]->id_edo_civil)
																				echo '<option selected value="'.$key->id_edo_civil.'">'.$key->descripcion.'</option>';
																			else
																			echo '<option value="'.$key->id_edo_civil.'">'.$key->descripcion.'</option>';
																				
																		}?>
																		</select>
																	</label>
																</section>
																<section class="col col-2">Sexo&nbsp;
																	<div class="inline-group">
																		<?
																		foreach ($sexo as $value)
																		{?>
																			<label class="radio">
																			<input <?=($value->id_sexo==1) ? 'checked' : '' ?> type="radio" value="<?=$value->id_sexo?>" name="sexo" placeholder="sexo">
																			<i></i><?=$value->descripcion?></label>
																		<?}?>
																		</div>
																</section>
																<section class="col col-2">Estudio&nbsp;
																	<div class="inline-group">
																		<?
																		foreach ($estudios as $value)
																		{?>
																			<label class="radio">
																			<input <?=($value->id_estudio==1) ? 'checked' : '' ?> type="radio" value="<?=$value->id_estudio?>" name="estudios">
																			<i></i><?=$value->descripcion?></label>
																		<?}?>
																		</div>
																</section>
																<section class="col col-2">Ocupación&nbsp;
																	<div class="inline-group">
																		<?
																		foreach ($ocupacion as $value)
																		{?>
																			<label class="radio">
																			<input <?=($value->id_ocupacion==1) ? 'checked' : '' ?> type="radio" value="<?=$value->id_ocupacion?>" name="ocupacion">
																			<i></i><?=$value->descripcion?></label>
																		<?}?>
																		</div>
																</section>
																<section class="col col-2">Tiempo dedicado&nbsp;
																	<div class="inline-group">
																		<?
																		foreach ($tiempo_dedicado as $value)
																		{?>
																			<label class="radio">
																			<input <?=($value->id_tiempo_dedicado==1) ? 'checked' : '' ?> type="radio" value="<?=$value->id_tiempo_dedicado?>" name="tiempo_dedicado">
																			<i></i><?=$value->descripcion?></label>
																		<?}?>
																		</div>
																</section>
															</div>
														</fieldset>
															<input class='hide' type="text" name="red" id='red' value="<?php echo $_GET['id']; ?>" placeholder="">
															<input type="text" name="id" value="<?php echo $id; ?>" class="hide">
															<input type="text" name="ciclo" value="<?php echo $ciclo; ?>" class="hide">
													</form>
												</div>
												<div class="step-pane" id="step3">
													<div class="well">
														

													</div>
												</div>
												
												<div class="step-pane" id="step4">

													<div class="row">
														<br/>
													</div>
													<div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
														<div class="row">
													        <div id="planuno" class="col-xs-12 col-sm-6 col-md-3">
													            <div class="panel panel-success pricing-big">
													                <div class="panel-heading">
													                    <h3 class="panel-title">
													                       <i class="fa fa-plane"></i> Plan despegue</h3>
													                </div>
													                <div class="panel-body no-padding text-align-center">
													                    <div class="the-price">
													                        <h1>
													                            <strong>$85.25 USD</strong></h1>
													                    </div>
																		<div class="price-features">
																			<ul class="list-unstyled text-left">
																	          	<li><h1><i class="fa fa-check text-success"></i> <strong>8%</strong> de ganancia</h1></li>
																	        	<li><h1><i class="fa fa-check text-success"></i> <strong>60</strong> puntos de comisión</h1></li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>1</strong> Aloe Detox (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>1</strong> Vita Live (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>1</strong> Linea Gala</li>
																	        </ul>
																		</div>
													                </div>
													                <div class="panel-footer text-align-center">
													                    <a id="plan1" href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Seleccionar</span></a>
													                </div>
													            </div>
													        </div>
													        
													        <div id="plandos" class="col-xs-12 col-sm-6 col-md-3">
													            <div class="panel panel-teal pricing-big">
													            	
													                <div class="panel-heading">
													                    <h3 class="panel-title">
													                        <i class="fa fa-bar-chart-o"></i> Plan avance</h3>
													                </div>
													                <div class="panel-body no-padding text-align-center">
													                    <div class="the-price">
													                        <h1>
													                            <strong>$164.00 USD</strong></h1>
													                    </div>
																		<div class="price-features">
																			<ul class="list-unstyled text-left">
																	          	<li><h1><i class="fa fa-check text-success"></i> <strong>10%</strong> de ganancia</h1></li>
																	        	<li><h1><i class="fa fa-check text-success"></i> <strong>135</strong> puntos de comisión</h1></li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>4</strong> Aloe Detox (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>3</strong> Vita Live (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>1</strong> Linea Gala</li>
																	        </ul>
																		</div>
													                </div>
													                <div class="panel-footer text-align-center">
													                    <a id="plan2" href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Seleccionar</span></a>
													                </div>
													            </div>
													        </div>
													        
													        <div id="plantres" class="col-xs-12 col-sm-6 col-md-3">
													            <div class="panel panel-primary pricing-big">
													            	<img src="/template/img/ribbon.png" class="ribbon" alt="">
													                <div class="panel-heading">
													                    <h3 class="panel-title">
													                        <i class="fa fa-suitcase"></i> Plan empresarial</h3>
													                </div>
													                <div class="panel-body no-padding text-align-center">
													                    <div class="the-price">
													                        <h1>
													                            <strong>$454.25 USD</strong></h1>
													                    </div>
																		<div class="price-features">
																			<ul class="list-unstyled text-left">
																	          	<li><h1><i class="fa fa-check text-success"></i> <strong>12%</strong> de ganancia</h1></li>
																	        	<li><h1><i class="fa fa-check text-success"></i> <strong>420</strong> puntos de comisión</h1></li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>10</strong> Aloe Detox (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>9</strong> Vita Live (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>4</strong> Linea Gala</li>
																	        </ul>
																		</div>
													                </div>
													                <div class="panel-footer text-align-center">
													                    <a id="plan3" href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Seleccionar</span></a>
													                </div>
													            </div>
													        </div>
													        
													        <div id="plancuatro" class="col-xs-12 col-sm-6 col-md-3">
													            <div class="panel panel-darken pricing-big">
													            	
													                <div class="panel-heading">
													                    <h3 class="panel-title">
													                        <i class="fa fa-signal"></i> <i class="fa fa-male"></i> Plan inversionista</h3>
													                </div>
													                <div class="panel-body no-padding text-align-center">
													                    <div class="the-price">
													                        <h1>
													                            <strong>$920.00 USD</strong></h1>
													                    </div>
																		<div class="price-features">
																			<ul class="list-unstyled text-left">
																	          	<li><h1><i class="fa fa-check text-success"></i> <strong>15%</strong> de ganancia</h1></li>
																	        	<li><h1><i class="fa fa-check text-success"></i> <strong>850</strong> puntos de comisión</h1></li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>20</strong> Aloe Detox (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>20</strong> Vita Live (6 pack)</li>
																	        	<li><i class="fa fa-check text-success"></i> <strong>8</strong> Linea Gala</li>
																	        	<li><i class="fa fa-check text-success"></i> <small>Podrás modificar la cantidad de producto que tengan el mismo precio que no insida en el valor y puntaje del plan</small></li>
																	        </ul>
																		</div>
													                </div>
													                <div class="panel-footer text-align-center">
													                    <a id="plan4" href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Seleccionar</span></a>
													                </div>
													            </div>
													        </div>		    	
											    		</div>
											    		<br />
											    		<a id="remove_step" href="javascript:void(0);" class="btn btn-primary btn-block" role="button">Comprar el plan después</span></a>
											    	</div>
												</div>
												<div class="step-pane" id="step5">
													<div class="well">
-														<p>El pago se realizara despues en la enttrega de su primer pedido</p>
-													</div>
												</div>
				
											</div>
										</div>
									</div>
								</div>
								
							</div>
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
		<!-- END ROW -->
	</section>
	<!-- end widget grid -->
</div>
<!-- END MAIN CONTENT -->
<!-- PAGE RELATED PLUGIN(S) -->
<script>
var id=0;
use_username();
function agregar(tipo)
{
	if(tipo==1)
	{
		$("#tel").append("<section id='tel_"+id+"' class='col col-3'><label class='input'> <i class='icon-prepend fa fa-mobile'></i><input type='tel' name='movil[]' placeholder='(999) 99-99-99-99-99'></label><a style='cursor: pointer;color: red;' onclick='delete_telefono("+id+")'>Eliminar <i class='fa fa-minus'></i></a></section>");
	}
	else
	{
		$("#tel").append("<section id='tel_"+id+"' class='col col-3'><label class='input'> <i class='icon-prepend fa fa-phone'></i><input type='tel' name='fijo[]' placeholder='(999) 99-99-99-99-99'></label><a style='cursor: pointer;color: red;' onclick='delete_telefono("+id+")'>Eliminar <i class='fa fa-minus'></i></a></section>");
	}

	id++;
}
function delete_telefono(id){
	$("#tel_"+id+"").remove();	
}

</script>
<style type="text/css">
	/*Now the CSS*/
* {margin: 0; padding: 0;}
.nombre{background: rgba(255,255,255,.3); width: 100px; margin-top: -5px; margin-left: -11px;}
.todo{font-size: 11px; width: 100%; background: rgba(0,0,0,.5); margin-top: -4px; color: #FFF; cursor: pointer;}
.todo1{font-size: 11px; width: 100%; background: rgba(70, 120, 250, .8); margin-top: -4px; color: #FFF; cursor: pointer;}
.todo:hover{font-size: 11px; text-decoration: underline; width: 100%; margin-top:-4px; background: rgba(0,0,0,.7); color: #FFF; cursor: pointer;}
.todo1:hover{font-size: 11px; text-decoration: underline; width: 100%; margin-top:-4px; background: rgba(70, 120, 250, 1); color: #FFF; cursor: pointer;}
.tree1 ul {
	padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree1 li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree1 li::before, .tree1 li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 3px solid #ccc;
	width: 50%; height: 20px;
}
.tree1 li::after{
	right: auto; left: 50%;
	border-left: 3px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree1 li:only-child::after, .tree1 li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree1 li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree1 li:first-child::before, .tree1 li:last-child::after{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree1 li:last-child::before{
	border-right: 3px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree1 li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree1 ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 3px solid #ccc;
	width: 0; height: 20px;
}

.tree1 li a{

	height: 100px;
	width: 100px;
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #000;
	font-size: 13px;
	display: inline-block;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree1 li a:hover, .tree1 li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree1 li a:hover+ul li::after, 
.tree1 li a:hover+ul li::before, 
.tree1 li a:hover+ul::before, 
.tree1 li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

.packselected
{
	border-top: solid 5px #CCC;
	border-bottom: solid 5px #CCC;
	-webkit-box-shadow: 0px 0px 10px #CCC;
	-moz-box-shadow: 0px 0px 10px #CCC;
	box-shadow: 0px 0px 10px #CCC;
}
/*Thats all. I hope you enjoyed it.
Thanks :)*/
</style>
