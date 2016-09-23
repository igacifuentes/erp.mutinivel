<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class web extends CI_Controller
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
	
	function index(){
		$this->load->view('website/ov/webPersonal/index');
	}
	
	function afiliar(){
		$this->load->view('website/ov/webPersonal/index');
	}
}