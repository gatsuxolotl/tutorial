<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("noticiamodel");
	}

		public function ver($id=null)
		{
			if (empty($id)) {
				$data["title"]="bienvenido | balamquize";
				$data["noticias"]=$this->noticiamodel->obtener_noticia();

				$this->load->view("/templates/head", $data);
				$this->load->view("/templates/header");
				$this->load->view("/templates/sidebar");
				$this->load->view("/noticias/catalogo");
				//$this->load->view("/noticias/noticiasimple");
				$this->load->view("/templates/quick-sidebar");
				$this->load->view("/templates/footer");
			}else{
				$data["title"]="bienvenido | balamquize";
				$data["noticia"]=$this->noticiamodel->obtener_noticia($id);

				$this->load->view("/templates/head", $data);
				$this->load->view("/templates/header");
				$this->load->view("/templates/sidebar");
				//$this->load->view("/noticias/catalogo");
				$this->load->view("/noticias/noticiasimple");
				$this->load->view("/templates/quick-sidebar");
				$this->load->view("/templates/footer");
			}
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
					$noticia= array(
						"titulo"=>$this->input->post("titulo"),
						"contenido"=>$this->input->post("contenido"),
						"fecha"=>$this->input->post("fecha")
					);

					if ($this->noticiamodel->insertar_noticias($noticia)) {
						$respuesta = array("exito"=>TRUE,"mensaje" => "exito");
					}else{
						$respuesta = array("exito"=>FALSE,"mensaje"=>"error");
					}
					$this->output->set_content_type('json')->set_output(json_encode($respuesta));
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