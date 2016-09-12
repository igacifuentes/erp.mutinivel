<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class escuela_negocios extends CI_Controller {
	function __construct() {
		parent::__construct ();
		
		$this->load->helper ( array (
				'form',
				'url' 
		) );
		$this->load->library ( 'form_validation' );
		$this->load->library ( 'security' );
		$this->load->library ( 'tank_auth' );
		$this->lang->load ( 'tank_auth' );
		$this->load->model ( 'ov/general' );
		$this->load->model ( 'ov/modelo_escuela_negocios' );
		$this->load->model ( 'bo/modelo_comercial' );
		$this->load->model ( 'bo/model_bonos' );
		$this->load->model ( 'bo/model_planes' );
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
	}
	function index() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/blank' );
	}
	function noticias() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$grupos = $this->modelo_escuela_negocios->Grupos ( 'NOT' );
		
		$noticias = $this->modelo_escuela_negocios->get_new_activas ();
		$data = array ();
		$data ["noticias"] = $noticias;
		$data ["grupos"] = $grupos;
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/noticias', $data );
	}
	function ver_noticia() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$data = array ();
		if (isset ( $_GET ["idnw"] )) {
			$data ["noticia"] = $this->modelo_escuela_negocios->noticia_espec ( $_GET ["idnw"] );
			$index = 1;
			$parrafos = array ();
			$i = 0;
			$texto = html_entity_decode ( $data ["noticia"] [0]->contenido );
			/*
			 * while($index>0)
			 * {
			 *
			 * $index=strpos($texto, "<br />");
			 * $parrafos[$i]=substr($texto,0,$index);
			 * $texto=substr($texto,$index+6);
			 * $i++;
			 * }
			 */
			$parrafos = $texto;
			$data ["parrafos"] = $parrafos;
		}
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/ver_noticia', $data );
	}
	function presentaciones() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$presentaciones = $this->modelo_escuela_negocios->get_presentaciones_activas ();
		$grupos = $this->modelo_escuela_negocios->Grupos ( 'PRE' );
		
		$data = array ();
		$data ["presentaciones"] = $presentaciones;
		$data ["grupos"] = $grupos;
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/presentaciones', $data );
	}
	function ebooks() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$ebooks = $this->modelo_escuela_negocios->get_ebooks ();
		
		$grupos = $this->modelo_escuela_negocios->Grupos ( 'EBO' );
		$data = array ();
		$data ['ebooks'] = $ebooks;
		$data ["grupos"] = $grupos;
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/e_books', $data );
	}
	function videos() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$videos = $this->modelo_escuela_negocios->get_video_activos ();
		$nivel = $this->modelo_comercial->get_nivel ();
		$clase = $this->modelo_comercial->get_clase ();
		$video = $this->modelo_comercial->get_vimeo ();
		$data = array ();
		$data ['videos'] = $videos;
		$this->template->set ( "nivel", $nivel );
		$this->template->set ( "clase", $clase );
		$this->template->set ( "videos", $video );
		$grupos = $this->modelo_escuela_negocios->Grupos ( 'VID' );
		$data ['grupos'] = $grupos;
		$comentarios = $this->modelo_escuela_negocios->get_comments ();
		$data ['comentarios'] = $comentarios;
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/videos', $data );
	}
	function get_videos() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$clase = $this->modelo_comercial->get_clase ();
		$video = $this->modelo_comercial->get_vimeo ();
		$nivel = $this->modelo_comercial->get_nivel ();
		$venta = $this->modelo_comercial->venta ( $id );
		$cross_venta_mercancia = $this->modelo_comercial->cross_venta_mercancia ();
		
		$rf = '';
		$nivel_id = $this->modelo_comercial->get_nivel1 ( $_GET ['idClase'] );
		foreach ( $nivel_id as $key ) {
			$rf = $key->id_Nivel;
		}
		
		$id_merc = '';
		$mercancia_id = $this->modelo_comercial->get_mercancia ( $rf );
		foreach ( $mercancia_id as $Mercancia_id ) {
			$id_merc = $Mercancia_id->id_mercancia;
		}
		$igualdad = FALSE;
		
		if ((is_null ( $venta ) && is_null ( $cross_venta_mercancia ) && is_null ( $id_merc )) && (isset ( $venta ) && isset ( $cross_venta_mercancia ) && isset ( $id_merc ))) {
			foreach ( $venta as $Venta ) {
				foreach ( $cross_venta_mercancia as $Cross_venta_mercancia ) {
					if ($Venta->id_venta == $Cross_venta_mercancia->id_venta && $id_merc == $Cross_venta_mercancia->id_mercancia) {
						$igualdad = TRUE;
					}
				}
			}
		}
		
		$imprimir = '';
		foreach ( $video as $Video ) {
			if ($Video->id_clase == $_GET ['idClase'] && $igualdad == TRUE) {
				
				$imprimir .= '<div class="item col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="container">
  <div class="row">
    <div class="col-sm-6">
   
      <h2>' . $Video->Titulo . '</h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe src="//player.vimeo.com/video/'.$Video->ruta_Video.'" width="WIDTH" height="HEIGHT" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/58340810">L&#039;uomo d&#039;acqua e la sua fontana</a> from <a href="https://vimeo.com/user12742413">Sang hyun</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
</div>
    </div>
    <div class="col-sm-6"></div>';
			} else {
				if ($Video->tipo == 1 && $Video->id_clase == $_GET ['idClase']) {
					$imprimir .= '<div class="item col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="container">
  <div class="row">
    <div class="col-sm-6">
   
      <h2>' . $Video->Titulo . '</h2>
<div class="embed-responsive embed-responsive-16by9">
<iframe src="//player.vimeo.com/video/'.$Video->ruta_Video.'" width="WIDTH" height="HEIGHT" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/58340810">L&#039;uomo d&#039;acqua e la sua fontana</a> from <a href="https://vimeo.com/user12742413">Sang hyun</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
</div>
    </div>
    <div class="col-sm-6"></div>';
				}
			}
		}
		echo $imprimir ;
	}
	function descargas() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$archivos = $this->modelo_escuela_negocios->get_files ();
		$grupos = $this->modelo_escuela_negocios->Grupos ( 'DES' );
		
		$this->template->set ( "archivos", $archivos );
		$this->template->set ( "grupos", $grupos );
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/descargas' );
	}
	function crm() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/blank' );
	}
	function eventos() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$eventos = $this->modelo_escuela_negocios->get_evento ();
		$data = array ();
		$data ["eventos"] = $eventos;
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/eventos', $data );
	}
	function informacion() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$this->template->set ( "usuario", $usuario );
		
		$info = $this->modelo_escuela_negocios->get_info_activas ();
		$data = array ();
		$data ['infos'] = $info;
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/informacion', $data );
	}
	function ver_informacion() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$data = array ();
		
		$data ["informacion"] = $this->modelo_escuela_negocios->informacion_espec ( $_GET ["id"] );
		$index = 1;
		$parrafos = array ();
		$i = 0;
		/*
		 * while($index>0)
		 * {
		 *
		 * $index=strpos($texto, "<br />");
		 * $parrafos[$i]=substr($texto,0,$index);
		 * $texto=substr($texto,$index+6);
		 * $i++;
		 * }
		 */
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/ver_informacion', $data );
	}
	function conferencias() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/conferencia' );
	}
	function cupones_boletos() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$style = $this->general->get_style ( $id );
		$this->template->set ( "style", $style );
		$this->template->set ( "usuario", $usuario );
		$cupones = $this->modelo_escuela_negocios->get_cupon ( $id );
		$data = array ();
		$data ["cupones"] = $cupones;
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/cupones', $data );
	}
	function do_upload() {
		$config ['upload_path'] = 'xlsx';
		$config ['allowed_types'] = 'xls|xlsx|pdf';
		$config ['max_size'] = '5000';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '768';
		
		$data ['usuario'] = $this->tank_auth->get_username ();
		$this->load->library ( 'upload', $config );
		
		if (! $this->upload->do_upload ()) {
			$error = array (
					'error' => $this->upload->display_errors () 
			);
			
			$this->load->view ( 'upload/form_carga', $error );
		} else {
			$data = array (
					'upload_data' => $this->upload->data () 
			);
			
			$this->load->view ( 'upload/exito', $data );
		}
	}
	function sube_presentacion() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		
		// Checamos si el directorio del usuario existe, si no, se crea
		if (! is_dir ( getcwd () . "/media/" . $id )) {
			mkdir ( getcwd () . "/media/" . $id, 0777 );
		}
		
		$ruta = "/media/" . $id . "/";
		// definimos la ruta para subir la imagen
		$config ['upload_path'] = getcwd () . $ruta;
		$config ['allowed_types'] = 'ppt|pdf|pptx';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '1024';
		
		// Cargamos la libreria con las configuraciones de arriba
		$this->load->library ( 'upload', $config );
		
		// Preguntamos si se pudo subir el archivo "foto" es el nombre del input del dropzone
		if (! $this->upload->do_upload ( "presentacion" )) {
			echo 'Holis';
			echo $ruta;
			$error = array (
					'error' => $this->upload->display_errors () 
			);
		} else {
			echo 'ptm';
			$data = array (
					'upload_data' => $this->upload->data () 
			);
		}
	}
	function nuevo_grupo() {
		$this->db->query ( 'insert into cat_grupo (descripcion) values ("' . $_GET ["grupo"] . '")' );
	}
	function sube_video() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		
		// Checamos si el directorio del usuario existe, si no, se crea
		if (! is_dir ( getcwd () . "/media/" . $id )) {
			mkdir ( getcwd () . "/media/" . $id, 0777 );
		}
		
		$ruta = "/media/" . $id . "/";
		// definimos la ruta para subir la imagen
		$config ['upload_path'] = getcwd () . $ruta;
		$config ['allowed_types'] = 'mp4';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '1024';
		
		// Cargamos la libreria con las configuraciones de arriba
		$this->load->library ( 'upload', $config );
		
		// Preguntamos si se pudo subir el archivo "foto" es el nombre del input del dropzone
		if (! $this->upload->do_upload ( "video" )) {
			// echo 'Holis';
			// echo $ruta;
			$error = array (
					'error' => $this->upload->display_errors () 
			);
		} else {
			
			// echo 'ptm';
			$data = array (
					'upload_data' => $this->upload->data () 
			);
		}
	}
	function nuevo_video() {
		$id = $this->tank_auth->get_user_id ();
		$grupo = $_GET ['grupo'];
		$ruta = "/media/" . $id . "/" . $_GET ['video'];
		$archivo = $this->general->get_tipo_archivo ( 'mp4' );
		$this->db->query ( 'insert into archivo (id_usuario,id_grupo,id_tipo,descripcion,ruta) values (' . $id . ',' . $grupo . ',' . $archivo . ',"algo","' . $ruta . '")' );
	}
	function insert_coment() {
		$id_user = $this->tank_auth->get_user_id ();
		$data = $_GET ["info"];
		$data = json_decode ( $data, true );
		$id = $data ['video'];
		$coment = $data ['comentario'];
		$this->db->query ( 'insert into comentario (comentario,id_video,autor) values ("' . $coment . '"," ' . $id . '","' . $id_user . '")' );
	}
	function bonos() // promociones
{
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		// echo "dentro de bonos";
		
		$id = $this->tank_auth->get_user_id ();
		$style = $this->general->get_style ( $id );
		
		$bonos = $this->model_bonos->get_bonos_activos ();
		$planes = $this->model_planes->get_planes_activos ();
		$plan_bonos = $this->model_planes->get_planes_bonos ();
		$cross_plan_bonos = $this->model_planes->get_cross_plan_bonos_activos ();
		
		$condicionesBono = $this->model_bonos->get_condiciones_bonos ();
		$this->template->set ( "condicionesBono", $condicionesBono );
		
		$valorNiveles = $this->model_bonos->get_valor_niveles ();
		$this->template->set ( "valorNiveles", $valorNiveles );
		
		$this->template->set ( "style", $style );
		$this->template->set ( "bonos", $bonos );
		$this->template->set ( "planes", $planes );
		$this->template->set ( "plan_bonos", $plan_bonos );
		$this->template->set ( "cross_plan_bonos", $cross_plan_bonos );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/bonos' ); // promociones
	}
	function reconocimientos() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		$style = $this->general->get_style ( $id );
		
		$this->template->set ( "style", $style );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/escuela_negocios/reconocimientos' );
	}
	function get_info_evento() {
		$evento = $this->modelo_escuela_negocios->get_info_evento ( $_POST ["id"] );
		echo "	<table class='table table-striped table-forum hidden-sm hidden-xs'>
					<tr>
						<th class='text-center' colspan='2'><h3 class='text-primary'><strong>NOMBRE</strong></h3></th>
						<th class='text-center' colspan='2'><h4><strong>" . $evento [0]->nombre . "</strong></h4></th>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>LUGAR</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->lugar . "</h6></td>
						<th class='text-center'><h5 class='text-primary'><strong>FECHA Y HORA</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->inicio . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>COSTO</strong></h5></th>
						<td class='text-center'><h6>$ " . $evento [0]->costo . "</h6></td>
						<th class='text-center'><h5 class='text-primary'><strong>OBSERVACIONES</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->observaciones . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>DIRECCION</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->direccion . "</h6></td>

					</tr>
				</table>
				<table class='table table-striped table-forum hidden-lg hidden-md'>
					<tr>
						<th class='text-center' colspan='2'><h3 class='text-primary'><strong>NOMBRE</strong></h3></th>
					</tr>
					<tr>
						<th class='text-center' colspan='2'><h4><strong>" . $evento [0]->nombre . "</strong></h4></th>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>LUGAR</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->lugar . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>FECHA Y HORA</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->inicio . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>COSTO</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->costo . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>OBSERVACIONES</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->observaciones . "</h6></td>
					</tr>
					<tr>
						<th class='text-center'><h5 class='text-primary'><strong>DIRECCION</strong></h5></th>
						<td class='text-center'><h6>" . $evento [0]->direccion . "</h6></td>
					</tr>
				</table>
				<div id='googleMap' style='width:100%;height:100%;'>" . $evento [0]->url . "
				</div>
				<script>
					$('iframe').each(
					     function(index, elem) {
					         elem.setAttribute('width','100%');
					     }
					 );
				</script>		
				";
	}
}