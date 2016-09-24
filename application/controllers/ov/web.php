<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class web extends CI_Controller {
	function __construct() {
		parent::__construct ();
		
		$this->load->helper ( array (
				'form',
				'url' 
		) );
		$this->load->library ( 'form_validation' );
		$this->load->library ( 'security' );
		$this->load->model ( 'bo/model_admin' );
		$this->load->model ( 'bo/modelo_comercial' );
		$this->load->library('tank_auth');
		$this->load->model('ov/general');
		$this->load->model('ov/model_perfil_red');
		$this->load->model('ov/model_afiliado');
		$this->load->model('model_tipo_red');
		$this->load->model('model_planes');
		$this->load->model('ov/modelo_dashboard');
		$this->load->model('bo/model_tipo_usuario');
	}
	function index() {
		$this->load->view ( 'website/ov/webPersonal/index' );
	}
	function afiliar() {
		$id_red = 1;
		$id = $_GET ['web'];
		
		$usuario = $this->model_perfil_red->datos_perfil ( $id );
		$telefonos = $this->model_perfil_red->telefonos ( $id );
		$sexo = $this->model_perfil_red->sexo ();
		$pais = $this->model_perfil_red->get_pais ();
		$style = $this->general->get_style ( $id );
		$dir = $this->model_perfil_red->dir ( $id );
		$civil = $this->model_perfil_red->edo_civil ();
		$tipo_fiscal = $this->model_perfil_red->tipo_fiscal ();
		$estudios = $this->model_perfil_red->get_estudios ();
		$ocupacion = $this->model_perfil_red->get_ocupacion ();
		$tiempo_dedicado = $this->model_perfil_red->get_tiempo_dedicado ();
		$red = $this->model_afiliado->RedAfiliado ( $id, $id_red );
		
		$afiliados = $this->model_perfil_red->get_afiliados ( $id_red, $id );
		// $planes = $this->model_planes->Planes();
		$image = $this->model_perfil_red->get_images ( $id );
		$red_forntales = $this->model_tipo_red->ObtenerFrontalesRed ( $id_red );
		
		$estaEnRed = $this->model_tipo_red->validarUsuarioRed ( $id, $id_red );
		
		if (! $estaEnRed)
			redirect ( '/' );
		
		if ($this->model_perfil_red->isCiclaje ( $id, $id_red )) {
			$ciclo = $this->model_perfil_red->consultarCiclo ( $id, $id_red ) [0]->id_ciclo;
			$this->template->set ( "ciclo", $ciclo );
		} else {
			$this->template->set ( "ciclo", 0 );
		}
		
		$img_perfil = "/template/img/empresario.jpg";
		foreach ( $image as $img ) {
			$cadena = explode ( ".", $img->img );
			if ($cadena [0] == "user") {
				$img_perfil = $img->url;
			}
		}
		
		$datos["id"] = $id;
		$datos["style"] = $style;
		$datos["contar"] = count ( $afiliados );
		$datos["sexo"] = $sexo;
		$datos["civil"] = $civil;
		$datos["pais"] = $pais;
		$datos["tipo_fiscal"] = $tipo_fiscal;
		$datos["estudios"] = $estudios;
		$datos["ocupacion"] = $ocupacion;
		$datos["tiempo_dedicado"] = $tiempo_dedicado;
		$datos["red_frontales"] = $red_forntales;
		
		$this->load->view ( 'website/ov/webPersonal/afiliar',$datos);
	}
	function afiliar_nuevo() {
		$this->load->model ( 'ov/modelo_afiliado' ); // pruebas
		isset ( $_POST ['token'] ) ? $this->model_perfil_red->trash_token ( $_POST ['token'] ) : '';
		
		$resultado = $this->modelo_afiliado->crearUsuario ();
		// echo $resultado;
		// $resultado=$this->model_perfil_red->afiliar_nuevo($id);
		
		if (intval ( $resultado )) {
			// $id_afiliado=$this->model_perfil_red->get_id(); //$id_afiliado[0]->id
			echo "!FINE¡ El usuario <b>" . $_POST ['nombre'] . "&nbsp; " . $_POST ['apellido'] . "</b> ha quedado afiliado con el id <b>" . $resultado . "</b>";
		} else {
			echo "!UPS¡ lo sentimos parece que algo fallo";
		}
	}
}