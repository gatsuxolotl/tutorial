<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		//echo "hola mundo";
		$data["title"]="bienvenido | balamquize";
		$this->load->view("/templates/head", $data);
		$this->load->view("/templates/header");
		$this->load->view("/templates/sidebar");
		$this->load->view("/inicio/container");
		$this->load->view("/templates/quick-sidebar");
		$this->load->view("/templates/footer");
	}

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */