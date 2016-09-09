<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class videos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->model('bo/modelo_dashboard');
		$this->load->model('bo/model_admin');
		$this->load->model('bo/general');
		$this->load->model('bo/modelo_comercial');
	}
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) 
		{																		// logged in
			redirect('/auth');
		}

	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}

		$style=$this->modelo_dashboard->get_style(1);

		$this->template->set("style",$style);

		$this->template->set_theme('desktop');
        $this->template->set_layout('website/main');
        $this->template->set_partial('header', 'website/bo/header');
        $this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/index');
	}

	function alta()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);

		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/alta',$data);
	}
	
	function alta_normal()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$grupos=$this->modelo_comercial->get_groups("VID");
		$data=array();
		$data['videos']=$videos;
		$data['grupos']=$grupos;
		$this->template->set("style",$style);
	
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/alta_normal',$data);
	}
	
	function alta_vimeo()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$clase=$this->modelo_comercial->get_clase();
		$grupos=$this->modelo_comercial->get_groups("VID");
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$data['grupos']=$grupos;
		$this->template->set("clase",$clase);
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/alta_vimeo',$data);
	}


		function nivel()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
		$mercancia=$this->modelo_comercial->mercancia();
		$producto=$this->modelo_comercial->producto();
		$servicio=$this->modelo_comercial->servicio();
		$paquete_inscripcion=$this->modelo_comercial->paquete_inscripcion();
		$membresia=$this->modelo_comercial->membresia();
		$combinado=$this->modelo_comercial->combinado();
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$grupos=$this->modelo_comercial->get_groups("VID");
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$data['grupos']=$grupos;
		$this->template->set("mercancia",$mercancia);
		$this->template->set("producto",$producto);//1
		$this->template->set("servicio",$servicio);//2
		$this->template->set("paquete_inscripcion",$paquete_inscripcion);//3
		$this->template->set("membresia",$membresia);//5
		$this->template->set("combinado",$combinado);//4
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/alta_nivel',$data);
	}

			function alta_clase()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
		$nivel=$this->modelo_comercial->get_nivel();
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$grupos=$this->modelo_comercial->get_groups("VID");
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$data['grupos']=$grupos;
		$this->template->set("nivel",$nivel);
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/alta_clase',$data);
	}
	
function sube_video()	{
		if (!$this->tank_auth->is_logged_in()) 
		{																		// logged in
			redirect('/auth');
		}

$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}

		//Checamos si el directorio del usuario existe, si no, se crea
		if(!is_dir(getcwd()."/media/".$id))
		{
			mkdir(getcwd()."/media/".$id, 0777);
		}

		$ruta="/media/".$id."/";
		//definimos la ruta para subir la imagen
		$config['upload_path'] 		= getcwd().$ruta;
		$config['allowed_types'] 	= 'mp4|jpg|png|jpeg';

		//Cargamos la libreria con las configuraciones de arriba
		$this->load->library('upload', $config);

		//Preguntamos si se pudo subir el archivo "foto" es el nombre del input del dropzone
		if (!$this->upload->do_multi_upload('userfile'))
		{

			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data = array('upload_data' => $this->upload->get_multi_upload_data());
			
			$contador=0;
			$extVideo="";
			$extImagen="";
			
			foreach ($data["upload_data"] as $key)
			{
				if($contador==0){
					$filename=strrev($key["file_name"]);
					$explode=explode(".",$filename);
					$nombre=strrev($explode[1]);
					$extencion=strrev($explode[0]);
					$extVideo=strtolower($extencion);
			
				}
				else{
					$filename=strrev($key["file_name"]);
					$explode=explode(".",$filename);
					$nombre=strrev($explode[1]);
					$extencion=strrev($explode[0]);
					$extImagen=strtolower($extencion);
				}
				$contador++;
			}

			if($extVideo=="mp4"){
				
			}else {
				$this->session->set_flashdata('error','El tipo de archivo de video que se intenta subir no esta permitido , solo se permiten videos en formato MP4');
				redirect('/bo/videos/alta_normal');
			}
			
			if($extImagen=="png"||$extImagen=="jpg"||$extImagen=="jpeg"){
			
			}else {
				$this->session->set_flashdata('error','El tipo de archivo de imagen que se intenta subir no esta permitido');
				redirect('/bo/videos/alta_normal');
			}
			
			
			
			foreach ($data["upload_data"] as $key) 
			{
				if($contador==0){
					$filename=strrev($key["file_name"]);
					$explode=explode(".",$filename);
					$nombre=strrev($explode[1]);
					$extencion=strrev($explode[0]);
					$extVideo=strtolower($extencion);

				}	
				else{
					$filename=strrev($key["file_name"]);
					$explode=explode(".",$filename);
					$nombre=strrev($explode[1]);
					$extencion=strrev($explode[0]);
					$extImagen=strtolower($extencion);
				}
				echo $extVideo." - ".$extImagen;
				$contador++;
				
				$filename=strrev($key["file_name"]);
				$explode=explode(".",$filename);
				$nombre=strrev($explode[1]);
				$extencion=strrev($explode[0]);
				$ext=strtolower($extencion);
				if($ext=="mp4")
				{
					$this->db->query('insert into archivo (id_usuario,id_grupo,id_tipo,descripcion,ruta,status,nombre_publico) 
					values ('.$id.','.$_POST['grupo_frm'].',2,"'.$_POST['desc_frm'].'","'.$ruta.$key["file_name"].'","ACT","'.$_POST["nombre_publico"].'")');
					$video=$this->db->insert_id();
				}
				else 
				{
					$this->db->query('insert into cat_img (url,nombre_completo,nombre,extencion,estatus) 
					values ("'.$ruta.$key["file_name"].'","'.$key["file_name"].'","'.$nombre.'","'.$extencion.'","ACT")');
					$imgn=$this->db->insert_id();
				}
								
			}
			$this->db->query('insert into cross_img_archivo	values ('.$video.','.$imgn.')');
			redirect('/bo/videos/listar');
		}  
			$this->session->set_flashdata('error','El tipo de archivo de video que se intenta subir no esta permitido , solo se permiten videos en formato MP4');
			redirect('/bo/videos/alta_normal');
	}

	function guardar_nivel(){
				if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
		//echo 'heey';
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}

		$this->db->query('insert into Nivel_Clase (id_mercancia,Nombre) values("'.$_POST["tipo"].'","'.$_POST["nombre_nivel"].'" )');

		redirect('/bo/videos/nivel');


	}


function guardar_clase(){
					if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
		//echo 'heey';
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}

		if(!is_dir(getcwd()."/media/".$id))
		{
			mkdir(getcwd()."/media/".$id, 0777);
		}

		$ruta="/media/".$id."/";
		//definimos la ruta para subir la imagen
		$config['upload_path'] 		= getcwd().$ruta;
		$config['allowed_types'] 	= 'jpg|png|gif|jpeg';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload())
		{

			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','El tipo de archivo que se intenta subir no esta permitido');
			redirect('/bo/videos/alta_vimeo');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$filename=strrev($data["upload_data"]["file_name"]);
			$explode=explode(".",$filename);
			$nombre=strrev($explode[1]);
			$extencion=strrev($explode[0]);
			$ext=strtolower($extencion);
			if($ext=='jpg'||$ext=="png"||$ext=="jpeg")
			{
				$this->db->query('insert into cat_img (url,nombre_completo,nombre,extencion,estatus)
				values ("'.$ruta.$data["upload_data"]["file_name"].'","'.$data["upload_data"]["file_name"].'","'.$nombre.'","'.$extencion.'","ACT")');
				$imgn=$this->db->insert_id();

				$this->db->query('insert into Clase (id_Nivel,Nombre, Descripcion, ruta_Imagen) values("'.$_POST["tipo"].'","'.$_POST["nombre"].'","'.$_POST["descripcion"].'","'.$ruta.$data["upload_data"]["file_name"].'" )');


			}

			redirect('/bo/videos/alta_clase');
			}


}



function subir_video_vimeo(){
					if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
		//echo 'heey';
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}

		if(!is_dir(getcwd()."/media/".$id))
		{
			mkdir(getcwd()."/media/".$id, 0777);
		}

		$ruta="/media/".$id."/";
		//definimos la ruta para subir la imagen
		$config['upload_path'] 		= getcwd().$ruta;
		$config['allowed_types'] 	= 'pdf|txt';
		$config['remove_spaces']=TRUE;
        $config['max_size']    = '2048';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload())
		{

			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','El tipo de archivo que se intenta subir no esta permitido');
			redirect('/bo/videos/alta_vimeo');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$filename=strrev($data["upload_data"]["file_name"]);
			$explode=explode(".",$filename);
			$nombre=strrev($explode[1]);
			$extencion=strrev($explode[0]);
			$ext=strtolower($extencion);
			//if($ext=='pdf'||$ext=="txt")
			//{
				/*$this->db->query('insert into cat_img (url,nombre_completo,nombre,extencion,estatus)
				values ("'.$ruta.$data["upload_data"]["file_name"].'","'.$data["upload_data"]["file_name"].'","'.$nombre.'","'.$extencion.'","ACT")');
				$imgn=$this->db->insert_id();*/

				$this->db->query('insert into Video (id_Clase,Titulo, Descripcion,tipo, ruta_Video, ruta_pdf) values("'.$_POST["clase"].'","'.$_POST["nombre"].'","'.$_POST["descripcion"].'","'.$_POST["tipo"].'","'.$_POST["url"].'","'.$ruta.$data["upload_data"]["file_name"].'" )');


			//}

			redirect('/bo/videos/alta_vimeo');
			}


}
function sube_video_youtube()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
		//echo 'heey';
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		//Checamos si el directorio del usuario existe, si no, se crea
		if(!is_dir(getcwd()."/media/".$id))
		{
			mkdir(getcwd()."/media/".$id, 0777);
		}
	
		$ruta="/media/".$id."/";
		//definimos la ruta para subir la imagen
		$config['upload_path'] 		= getcwd().$ruta;
		$config['allowed_types'] 	= 'jpg|png|gif|jpeg';
	
		//Cargamos la libreria con las configuraciones de arriba
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{

			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error','El tipo de archivo que se intenta subir no esta permitido');
			redirect('/bo/videos/alta_vimeo');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$filename=strrev($data["upload_data"]["file_name"]);
			$explode=explode(".",$filename);
			$nombre=strrev($explode[1]);
			$extencion=strrev($explode[0]);
			$ext=strtolower($extencion);
			if($ext=='jpg'||$ext=="png"||$ext=="jpeg")
			{
				$this->db->query('insert into cat_img (url,nombre_completo,nombre,extencion,estatus)
				values ("'.$ruta.$data["upload_data"]["file_name"].'","'.$data["upload_data"]["file_name"].'","'.$nombre.'","'.$extencion.'","ACT")');
				$imgn=$this->db->insert_id();
	
				$this->db->query('insert into archivo (id_usuario,id_grupo,id_tipo,descripcion,ruta,status,nombre_publico)
				values ('.$id.','.$_POST['grupo_frm'].',21,"'.$_POST['desc_frm'].'","'.$_POST["url"].'","ACT","'.$_POST["nombre_publico"].'")');
				$video=$this->db->insert_id();
				$this->db->query('insert into cross_img_archivo	values ('.$video.','.$imgn.')');
			}
			redirect('/bo/videos/listar');
		}
		$this->session->set_flashdata('error','El tipo de archivo que se intenta subir no esta permitido');
		redirect('/bo/videos/alta_vimeo');
	}
	
	function listar()
	{
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
		
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$id=$this->tank_auth->get_user_id();
		$usuario=$this->general->get_username($id);
		$videos=$this->modelo_comercial->get_video();
		$grupos=$this->modelo_comercial->get_groups("VID");
		$comentarios=$this->modelo_comercial->get_comments();
		$style=$this->modelo_dashboard->get_style(1);
		$data['videos']=$videos;
		$data['grupos']=$grupos;
		$data['comentarios']=$comentarios;
		$this->template->set("style",$style);
	
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/ov/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/listar',$data);
	}
	
	function insert_coment()
	{
		$id_user=$this->tank_auth->get_user_id();
		$data=$_GET["info"];
		$data=json_decode($data,true);
		$id=$data['video'];
		$coment=$data['comentario'];
		$this->db->query('insert into comentario (comentario,id_video,autor) values ("'.$coment.'"," '.$id.'","'.$id_user.'")');
	}
	
	function cambiar_estado_video(){
		$this->db->query("update archivo set status = '".$_POST['estado']."' where id_archivo=".$_POST["id"]);
		
	}
	
	function kill_video(){
		$this->db->query("delete from archivo where id_archivo=".$_POST["id"]);
	}
	
	function kill_comentario(){
		$this->db->query("delete from comentario where id=".$_POST["id"]);
	}

	function listar_videos(){

				if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);

		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/listar_videos',$data);

	}


	function listar_nivel(){
			if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$nivel=$this->modelo_comercial->get_nivel();
		$mercancia=$this->modelo_comercial->mercancia();
		$producto=$this->modelo_comercial->producto();
		$servicio=$this->modelo_comercial->servicio();
		$paquete_inscripcion=$this->modelo_comercial->paquete_inscripcion();
		$membresia=$this->modelo_comercial->membresia();
		$combinado=$this->modelo_comercial->combinado();
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$this->template->set("nivel",$nivel);
		$this->template->set("mercancia",$mercancia);
		$this->template->set("producto",$producto);//1
		$this->template->set("servicio",$servicio);//2
		$this->template->set("paquete_inscripcion",$paquete_inscripcion);//3
		$this->template->set("membresia",$membresia);//5
		$this->template->set("combinado",$combinado);//4
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/listar_nivel',$data);

	}

	function listar_clase(){
					if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$nivel=$this->modelo_comercial->get_nivel();
		$clase=$this->modelo_comercial->get_clase();
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$this->template->set("nivel",$nivel);
		$this->template->set("clase",$clase);
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/listar_clase',$data);

	}

	function listar_vimeo(){
		if (!$this->tank_auth->is_logged_in())
		{																		// logged in
			redirect('/auth');
		}
	
	$id=$this->tank_auth->get_user_id();
		
		if(!$this->general->isAValidUser($id,"oficina"))
		{
			redirect('/auth/logout');
		}
	
		$style=$this->modelo_dashboard->get_style(1);
		$videos=$this->modelo_comercial->get_video();
		$clase=$this->modelo_comercial->get_clase();
		$video1=$this->modelo_comercial->get_vimeo();
		$data=array();
		$data['videos']=$videos;
		$this->template->set("style",$style);
		$this->template->set("clase",$clase);
		$this->template->set("video1",$video1);
		$this->template->set_theme('desktop');
		$this->template->set_layout('website/main');
		$this->template->set_partial('header', 'website/bo/header');
		$this->template->set_partial('footer', 'website/bo/footer');
		$this->template->build('website/bo/oficinaVirtual/videos/listar_vimeo',$data);


	}
}
