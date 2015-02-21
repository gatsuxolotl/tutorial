<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class noticiamodel extends CI_Model {

	public function __construct()
	{
		//Do your magic here
		$this->load->database();
	}

	public function obtener_noticia($id=null)
	{
		//validacion para saver si obendremos todas las noticias o solo una
		if (empty($id)) {
			$query = $this->db->get("notici");
			return $query->result_array();
		}else{
			$noticia=$this->db->get_where("notici",array("id"=>$id));
			return$noticia->row();
		}
	}

	public function insertar_noticias($noticia)
	{
		# code...
		return $this->db->insert("notici",$noticia);
	}

}

/* End of file noticias_model.php */
/* Location: ./application/models/noticias_model.php */