<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class dashboard extends CI_Controller {
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
		$this->load->model ( 'ov/modelo_dashboard' );
		$this->load->model ( 'ov/general' );
		$this->load->model ( 'ov/modelo_compras' );
		$this->load->model ( 'modelo_premios' );
		$this->load->model ( 'model_tipo_red' );
		$this->load->model ( 'bo/model_admin' );
		$this->load->model ( 'ov/model_perfil_red' );
	}
	private $afiliados = array ();
	private $numeroAfiliadosActivos = 0;
	private $ciclo;
	private $hayEspacio = false;
	private function VerificarCompras($id_afiliado, $id_red, $nivel, $profundidad, $frecuencia) {
		if ($nivel < $profundidad) {
			$afiliados = $this->modelo_compras->traer_afiliados_red ( $id_afiliado, $id_red );
			
			$contador = 0;
			$siCompro = 0;
			$this->afiliados [$nivel] = 0;
			foreach ( $afiliados as $afiliado2 ) {
				$siCompro = 0;
				if ($this->modelo_compras->ComprovarCompraProducto ( $afiliado2->id_afiliado, $id_red, $frecuencia )) {
					$siCompro = 1;
				}
				if ($this->afiliados [$nivel] != 0) {
					$this->afiliados [$nivel] = $siCompro + $this->afiliados [$nivel];
				} else {
					$this->afiliados [$nivel] = $siCompro;
				}
				$this->VerificarCompras ( $afiliado2->id_afiliado, $id_red, $nivel + 1, $profundidad, $frecuencia );
			}
		}
	}
	
	private function requisitoMesesPremio($id_afiliado, $meses, $codificados){
		$fechaActual = date('Y-m-d');
		
		$siCumple = true;
		
		for ($i = $meses; $i > 0; $i--){
			$fechaConsulta = strtotime ( '-'.$i.' month' , strtotime ( $fechaActual ) ) ;
			$fechaConsulta = date ( 'Y-m-d' , $fechaConsulta );
			
			$fecha = explode('-', $fechaConsulta);
			
			$numerCodificados = $this->model_perfil_red->numeroCodificadosMesPremio($id_afiliado,$fecha[1], $fecha[0]);
			
			if($numerCodificados < $codificados){
				$siCumple = false;
			}
		}
		return $siCumple;
	}
	private function DeterminarPremio($id_afiliado, $id_red, $numeroCodificados) {
		$fecha = date('Y-m-d');
		$fechaConsulta = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
		$fechaConsulta = date ( 'Y-m-d' , $fechaConsulta );
		$fecha = explode('-', $fechaConsulta);
		
		$numeroCodificados = $this->model_perfil_red->numeroCodificadosMesPremio($id_afiliado, $fecha[1], $fecha[0]);
		
		$premios = $this->modelo_premios->getPremiosActivos ( $id_red );
		
		foreach ( $premios as $premio ) {
			
			if ($numeroCodificados >= $premio->codificados){
					
				switch ($premio->id){
					case 1:
						
						if($this->RegistrarPremioAfiliado($id_afiliado, $premio->id, $premio->frecuencia))
						{
							$this->modelo_compras->set_comision_afiliadoTipo( 0, $id_red, $id_afiliado, 500, 5);
							$this->modelo_premios->cambiarEstadoPremioAfiliado($id_afiliado, 1, "Embarcado", $premio->frecuencia);
						}
						break;
					case 2:
						
						if($this->requisitoMesesPremio($id_afiliado, $premio->meses, $premio->codificados))
						{
							$this->RegistrarPremioAfiliado($id_afiliado, $premio->id, $premio->frecuencia);
						}
						
						break;
				}	
			}
			
		}
		unset ( $GLOBALS ['afiliados'] );
		
	}
	private function VerificarComprasAfiliado($id_afiliado, $tiempo) {
		if ($this->modelo_compras->ComprovarCompraProducto ( $afiliado2->id_afiliado, $id_red, $frecuencia )) {
			$siCompro = 1;
		}
		if ($this->afiliados [$nivel] != 0) {
			$this->afiliados [$nivel] = $siCompro + $this->afiliados [$nivel];
		} else {
			$this->afiliados [$nivel] = $siCompro;
		}
		$this->VerificarCompras ( $afiliado2->id_afiliado, $id_red, $nivel + 1, $profundidad, $frecuencia );
	}
	private function RegistrarPremioAfiliado($id_afiliado, $id_premio, $frecuencia) {
		return $this->modelo_premios->InsertarPremioAfiliado ( $id_premio, $id_afiliado, $frecuencia );
	}
	private function EnviarMail($id_afiliado, $id_premio) {
		$datos = $this->modelo_premios->datosEmail ( $id_afiliado, $id_premio );
		$premio ['usuario'] = $datos [0]->nombre;
		$premio ['premio'] = $datos [0]->premio;
		$premio ['descripcion'] = $datos [0]->descripcion;
		$premio ['imagen'] = $datos [0]->imagen;
		// $this->load->view('email/Premio', $premio);
		
		$this->load->library ( 'email' );
		$this->email->from ( $this->config->item ( 'webmaster_email', 'tank_auth' ), $this->config->item ( 'website_name', 'tank_auth' ) );
		$this->email->reply_to ( $this->config->item ( 'webmaster_email', 'tank_auth' ), $this->config->item ( 'website_name', 'tank_auth' ) );
		$this->email->to ( $datos [0]->email );
		$this->email->subject ( 'Confirmacion de pago por Banco' );
		$this->email->message ( $this->load->view ( 'email/Premio', $premio, TRUE ) );
		// $this->email->set_alt_message($this->load->view('email/activate-txt', $data, TRUE));
		$this->email->send ();
	}
	private function comprovarGeneracionBonos($id) {
		$venta = $this->modelo_compras->compraMercanciaMenbresia ( $id );
		if (! isset ( $venta [0] )) {
			
			return 0;
		}
		$redesUsuario = $this->model_tipo_red->cantidadRedesUsuario ( $id );
		
		foreach ( $redesUsuario as $redUsuario ) {
			$red = $this->model_tipo_red->ObtenerFrontalesRed ( $redUsuario->id );
			
			$this->generearBonoCiclo ( $id, $redUsuario->id, $red [0]->profundidad, $venta [0]->id_venta, $venta [0]->id_mercancia );
		}
	}
	function index() {
		if (! $this->tank_auth->is_logged_in ()) { // logged in
			redirect ( '/auth' );
		}
		
		$id = $this->tank_auth->get_user_id ();
		$usuario = $this->general->get_username ( $id );
		$numeroCodificados = $this->model_perfil_red->numeroCodificadosMes($id);
		
		$this->comprovarGeneracionBonos ( $id );
		$id_red = 1;
		$this->DeterminarPremio($id, $id_red,$numeroCodificados);
		
		$this->getAfiliadosRed ( $id );
		$numeroAfiliadosRed = count ( $this->afiliados );
		
		$style = $this->modelo_dashboard->get_style ( $id );
		
		$id_sponsor = $this->modelo_dashboard->get_red ( $id );
		$ultima = $this->modelo_dashboard->get_ultima ( $id );
		$telefono = $this->modelo_dashboard->get_user_phone ( $id );
		$email = $this->modelo_dashboard->get_user_email ( $id );
		$username = $this->modelo_dashboard->get_user_name ( $id );
		$pais = $this->modelo_dashboard->get_user_country_code ( $id );
		
		$cuentasPorPagar = $this->modelo_dashboard->get_cuentas_por_pagar_banco ( $id );
		$notifies = $this->model_admin->get_notify_activos ();
		
		$name_sponsor = ($id_sponsor) ? $this->general->get_username ( $id_sponsor [0]->id_usuario ) : '';
		
		$image = $this->modelo_dashboard->get_images ( $id );
		$fondo = "/template/img/portada.jpg";
		$user = "/template/img/empresario.jpg";
		
		foreach ( $image as $img ) {
			$cadena = explode ( ".", $img->img );
			if ($cadena [0] == "user") {
				$user = $img->url;
			}
			if ($cadena [0] == "fondo") {
				$fondo = $img->url;
			}
		}
		
		$style = $this->modelo_dashboard->get_style ( $id );
		
		$actividad = $this->modelo_compras->is_afiliado_activo ( $id, date ( 'Y-m-d' ) );
		
		/*
		$puntos_semana = $this->modelo_dashboard->get_puntos_personales_semana ( $id );
		$puntos_mes = $this->modelo_dashboard->get_puntos_personales_mes ( $id );
		$puntos_total = $this->modelo_dashboard->get_puntos_personales_total ( $id );
		*/
		
		
		$puntos_red_semana = $this->modelo_dashboard->get_puntos_red_semana ( $id );
		$puntos_red_mes = $this->modelo_dashboard->get_puntos_red_mes ( $id );
		$puntos_red_total = $this->modelo_dashboard->get_puntos_red_total ( $id );
		
		$ultimos_auspiciados = $this->modelo_dashboard->get_ultimos_auspiciados ( $id );
		
		$this->template->set ( "id", $id );
		$this->template->set ( "usuario", $usuario );
		$this->template->set ( "telefono", $telefono );
		$this->template->set ( "email", $email );
		$this->template->set ( "username", $username );
		$this->template->set ( "pais", $pais );
		$this->template->set ( "style", $style );
		$this->template->set ( "user", $user );
		$this->template->set ( "fondo", $fondo );
		$this->template->set ( "id_sponsor", $id_sponsor );
		$this->template->set ( "name_sponsor", $name_sponsor );
		$this->template->set ( "ultima", $ultima );
		$this->template->set ( "cuentasPorPagar", $cuentasPorPagar );
		$this->template->set ( "notifies", $notifies );
		$this->template->set ( "actividad", $actividad );
	
		$this->template->set ( "puntos_red_semana", $puntos_red_semana );
		$this->template->set ( "puntos_red_mes", $puntos_red_mes );
		$this->template->set ( "puntos_red_total", $puntos_red_total );
		$this->template->set ( "codificadosMes", $numeroCodificados );
		
		$this->template->set ( "ultimos_auspiciados", $ultimos_auspiciados );
		
		$this->template->set ( "numeroAfiliadosRed", $numeroAfiliadosRed );
		
		$this->template->set_theme ( 'desktop' );
		$this->template->set_layout ( 'website/main' );
		$this->template->set_partial ( 'header', 'website/ov/header' );
		$this->template->set_partial ( 'footer', 'website/ov/footer' );
		$this->template->build ( 'website/ov/view_dashboard' );
	}
	/**
	 */
	private function getAfiliadosRed($id) {
		$redesUsuario = $this->model_tipo_red->cantidadRedesUsuario ( $id );
		
		foreach ( $redesUsuario as $redUsuario ) {
			$red = $this->model_tipo_red->ObtenerFrontalesRed ( $redUsuario->id );
			
			if ($red) {
				
				if ($red [0]->profundidad == 0)
					$this->preOrdenRedProfundidadInfinita ( $id, $redUsuario->id, $red [0]->frontal );
				else
					$this->preOrdenRed ( $id, $redUsuario->id, $red [0]->frontal, $red [0]->profundidad );
			}
		}
	}
	function ConsultarPremio() {
		$id = $this->tank_auth->get_user_id ();
		$infoPremios = $this->modelo_premios->verEstadoPremio ( $id );
		
		if ($this->general->isAValidUser ( $id, "OV" ) == false) {
			redirect ( '/ov/compras/carrito' );
		}
		
		$this->template->set ( "infoPremios", $infoPremios );
		$this->template->build ( 'website/ov/perfil_red/premio' );
	}
	function preOrdenRed($id, $id_red, $frontalidad, $profundidad) {
		$datos = $this->modelo_compras->traer_afiliados_red_frontalidad_profundidad ( $id, $id_red, $frontalidad );
		
		foreach ( $datos as $dato ) {
			
			if (($dato != NULL) && ($profundidad > 0)) {
				array_push ( $this->afiliados, $dato );
				$this->preOrdenRed ( $dato->id_afiliado, $id_red, $frontalidad, $profundidad - 1 );
			}
		}
		$profundidad ++;
	}
	function preOrdenRedProfundidadInfinita($id, $id_red, $frontalidad) {
		$datos = $this->modelo_compras->traer_afiliados_red_frontalidad_profundidad ( $id, $id_red, $frontalidad );
		
		foreach ( $datos as $dato ) {
			if (($dato != NULL)) {
				array_push ( $this->afiliados, $dato );
				$this->preOrdenRedProfundidadInfinita ( $dato->id_afiliado, $id_red, $frontalidad );
			}
		}
	}
	private function generearBonoCiclo($id_afiliado, $id_red, $profundidad_red, $id_venta, $mercancia) {
		
		if ($this->model_perfil_red->isCiclaje ( $id_afiliado, $id_red )) {
			$this->generearBonoCicloCliclajes ( $id_afiliado, $id_red, $profundidad_red, $id_venta, $mercancia );
			return 0;
		}
		
		/*
		 * $afiliado_padre = $this->model_perfil_red->ConsultarIdPadre($id_afiliado,$id_red)[0]->debajo_de;
		 *
		 * if(!$afiliado_padre||$afiliado_padre==2 ||$afiliado_padre==1)
		 * return false;
		 *
		 * $afiliado_abuelo = $this->model_perfil_red->ConsultarIdPadre($afiliado_padre,$id_red)[0]->debajo_de;
		 */
		$afiliado_abuelo = $id_afiliado;
		
		$this->numeroAfiliadosActivos = 0;
		
		$this->consultarRedAfiliado ( $afiliado_abuelo, $id_red, $profundidad_red, 0 );
		
		if ($this->numeroAfiliadosActivos >= 5) {
			
			$directos = $this->model_perfil_red->get_afiliados_directos ( $id_red, $afiliado_abuelo );
			
			if ((count ( $directos ) >= 2) || ($this->modelo_compras->ComprobarCompraMercancia ( $afiliado_abuelo, 2 ))) {
				$tipo = 1;
				$valor_comision = $this->modelo_compras->consultarMercancia ( $id_venta ) [0]->puntos_comisionables;
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $afiliado_abuelo, $valor_comision, $tipo );
				
				$tipo = 2;
				$sponson = $this->model_perfil_red->get_sponsor_id ( $afiliado_abuelo, $id_red );
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $sponson [0]->directo, $valor_comision, $tipo );
				
				$this->registarCiclo ( $afiliado_abuelo, $id_red, $profundidad_red, $id_venta, $mercancia );
			}
		}
	}
	private function generearBonoCicloCliclajes($id_afiliado, $id_red, $profundidad_red, $id_venta, $mercancia) {
		$id_ciclo = $this->model_perfil_red->consultarCiclo ( $id_afiliado, $id_red ) [0]->id_ciclo;
		/*
		 * $afiliado_padre = $this->model_perfil_red->consultarIdPadreCiclo($id_afiliado, $id_red, $id_ciclo)[0]->debajo_de;
		 *
		 * if(!$afiliado_padre||$afiliado_padre==2 ||$afiliado_padre==1){
		 * return false;
		 * }
		 * $afiliado_abuelo = $this->model_perfil_red->consultarIdPadreCiclo($afiliado_padre, $id_red, $id_ciclo)[0]->debajo_de;
		 */
		$afiliado_abuelo = $id_afiliado;
		$this->numeroAfiliadosActivos = 0;
		
		$this->verificarCiclaje ( $afiliado_abuelo, $id_ciclo, $id_red, $profundidad_red, 0 );

		
		if ($this->numeroAfiliadosActivos == 6) {
			
			$directos = $this->model_perfil_red->get_afiliados_directos ( $id_red, $afiliado_abuelo );
			
			if ((count ( $directos ) >= 2) || ($this->modelo_compras->ComprobarCompraMercancia ( $afiliado_abuelo, 2 ))) {
				$tipo = 1;
				$valor_comision = $this->modelo_compras->consultarMercancia ( $id_venta ) [0]->puntos_comisionables;
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $afiliado_abuelo, $valor_comision, $tipo);
				$tipo = 2;
				$sponson = $this->model_perfil_red->get_sponsor_id ( $afiliado_abuelo, $id_red );
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $sponson [0]->directo, $valor_comision, $tipo );
				
				$this->registarCiclo ( $afiliado_abuelo, $id_red, $profundidad_red, $id_venta, $mercancia );
			}
		}
	}
	private function consultarRedAfiliado($id_afiliado, $id_red, $profundidad_red, $contador) {
		if ($profundidad_red <= $contador) {
			return $contador - 1;
		}
		
		$hijos = $this->model_perfil_red->ConsultarHijos ( $id_afiliado, $id_red );
		
		foreach ( $hijos as $hijo ) {
			if ($this->modelo_compras->is_afiliado_activo ( $hijo->id_afiliado, $id_red )) {
				$this->numeroAfiliadosActivos ++;
			}
			
			$contador = $this->consultarRedAfiliado ( $hijo->id_afiliado, $id_red, $profundidad_red, $contador + 1 );
		}
	}
	private function registarCiclo($id_afiliado, $id_red, $profundidad_red, $id_venta, $mercancia) {
		$id_padre = $this->model_perfil_red->get_sponsor_id ( $id_afiliado, $id_red ) [0]->directo;
		
		if ($id_padre == 1) {
			$ciclo = $this->model_perfil_red->consultarCiclo ( 2, $id_red ) [0]->id_ciclo;
			if (isset ( $ciclo ))
				$this->model_perfil_red->insertarAfiliadoCiclo ( 2, $id_red, 1, 0, $ciclo + 1 );
			else
				$this->model_perfil_red->insertarAfiliadoCiclo ( 2, $id_red, 1, 0, 1 );
			
			return 0;
		}
		$miCiclo = 0;
		if ($this->model_perfil_red->isCiclaje ( $id_afiliado, $id_red )) {
			$miCiclo = $this->model_perfil_red->consultarCiclo ( $id_afiliado, $id_red ) [0]->id_ciclo;
		}
		$ciclo = $this->buscarCicloPadre ( $id_padre, $id_red, $miCiclo );
		
		$this->hayEspacio = false;
		$contador = 0;
		
		$this->buscarEspacioCiclo ( $this->ciclo [0]->id_afiliado, $profundidad_red, $contador );
		
		$this->model_perfil_red->insertarAfiliadoCiclo ( $id_afiliado, $id_red, $this->ciclo [0]->id_afiliado, $this->ciclo [0]->lado, $this->ciclo [0]->id_ciclo );
		
		// Verificar ciclajes continuo
		
		$id_padre = $this->ciclo [0]->id_afiliado;
		
		if (! $id_padre || $id_padre == 2 || $id_padre == 1) {
			return false;
		}
		
		$id_padre_abuelo = $this->model_perfil_red->consultarIdPadreCiclo ( $id_padre, $id_red, $this->ciclo [0]->id_ciclo );
		
		$this->numeroAfiliadosActivos = 0;
		
		$this->verificarCiclaje ( $id_padre_abuelo [0]->debajo_de, $this->ciclo [0]->id_ciclo, $id_red, 2, 0 );
		
		if ($this->numeroAfiliadosActivos == 6) {
			
			if ($id_padre_abuelo [0]->debajo_de == 2) {
				
				$this->model_perfil_red->insertarAfiliadoCiclo ( 2, $id_red, 1, 0, $this->ciclo [0]->id_ciclo + 1 );
			} else {
				$tipo = 1;
				$valor_comision = $this->modelo_compras->consultarMercancia ( $id_venta ) [0]->puntos_comisionables;
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $id_padre_abuelo [0]->debajo_de, $valor_comision, $tipo);
				
				$tipo = 2;
				$sponson = $this->model_perfil_red->get_sponsor_id ( $id_padre_abuelo [0]->debajo_de, $id_red );
				$this->modelo_compras->set_comision_afiliadoTipo( $id_venta, $id_red, $sponson [0]->directo, $valor_comision, $tipo);
				
				$this->registarCiclo ( $id_padre_abuelo [0]->debajo_de, $id_red, $profundidad_red, $id_venta, $mercancia );
			}
		}
	}
	private function buscarCicloPadre($id_afiliado, $id_red, $miCiclo) {
		$ciclo = $this->model_perfil_red->consultarCiclo ( $id_afiliado, $id_red );
		$id_padre = $this->model_perfil_red->ConsultarIdPadre ( $id_afiliado, $id_red ) [0]->debajo_de;
		if ($id_afiliado == 1) {
			return 0;
		}
		
		if (! isset ( $ciclo [0]->id_ciclo ) || $ciclo [0]->id_ciclo == $miCiclo) {
			$this->buscarCicloPadre ( $id_padre, $id_red, $miCiclo );
		} else {
			$this->ciclo = $ciclo;
			return $ciclo [0]->id_ciclo;
		}
	}
	private function buscarEspacioCiclo($id, $profundidad_red, $contador) {
		if ($profundidad_red <= $contador) {
			return $contador - 1;
		}
		
		$hijos = $this->model_perfil_red->consultarHijosCiclo ( $id, $this->ciclo [0]->id_red, $this->ciclo [0]->id_ciclo );
		
		if (count ( $hijos ) == 0) {
			$this->ciclo [0]->lado = 0;
			$this->hayEspacio = true;
			return 0;
		} else if (count ( $hijos ) == 1) {
			$this->hayEspacio = true;
			$this->ciclo [0]->lado = 1;
			return 0;
		} else if ($profundidad_red - 1 > $contador) {
			foreach ( $hijos as $hijo ) {
				
				if (! $this->hayEspacio) {
					$this->ciclo [0]->id_afiliado = $hijo->id_afiliado;
					$contador = $this->buscarEspacioCiclo ( $hijo->id_afiliado, $profundidad_red, $contador + 1 );
				}
			}
		}
		return $contador --;
	}
	private function verificarCiclaje($id_afiliado, $id_ciclo, $id_red, $profundidad_red, $contador) {
		if ($profundidad_red <= $contador) {
			return $contador - 1;
		}
		
		$hijos = $this->model_perfil_red->consultarHijosCiclo ( $id_afiliado, $id_red, $id_ciclo );
		
		foreach ( $hijos as $hijo ) {
			// $padre = "Nivel ".$contador." ".$id_afiliado." - ".$hijo->id_afiliado;
			// var_dump($padre);
			if ($this->modelo_compras->is_afiliado_activo ( $hijo->id_afiliado, $id_red )) {
				$this->numeroAfiliadosActivos ++;
			}
			$this->verificarCiclaje ( $hijo->id_afiliado, $id_ciclo, $id_red, $profundidad_red, $contador + 1 );
		}
		$contador --;
	}
}
