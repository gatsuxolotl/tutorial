<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	
		public function ver($value='')
		{
			# code...
		}
		public function crear($accion="formulario")
		{
			# code...
			switch ($accion) {
				case 'formulario':
					# code...
					$data["title"]="bienvenido | balamquize";
					$this->load->view("/templates/head", $data);
					$this->load->view("/templates/header");
					$this->load->view("/templates/sidebar");
					$this->load->view("/noticias/formulario");
					$this->load->view("/templates/quick-sidebar");
					$this->load->view("/templates/footer");
					break;
				case 'insertar':
					# code...
					break;
				
				default:
					# code...
					show_404();
					break;
			}
		}
	

}

/* End of file noticias.php */
/* Location: ./application/controllers/noticias.php */