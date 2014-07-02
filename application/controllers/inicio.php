<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Inicio extends Ext_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('layout_model', 'layout');
	}
	public function index() {
		$data = array();
		$this->_content = $this->load->view('inicio', $data, true);
		parent::index();
	}
	public function fundacion() {
		$data = array();
		$this->_content = $this->load->view('fundacion', $data, true);
		parent::index();
	}
	public function noticias() {
		$data = array();
		$this->load->helper('text_helper');
		$data['noticias'] = $this->layout->obtenerNoticias();
		$this->_content = $this->load->view('noticias', $data, true);
		parent::index();
	}
	public function noticia($noticia) {
		$data = array();
		$data['relacionadas'] = $this->layout->obtenerNoticias();
		$data['noticia'] = $this->layout->obtenerNoticiaId($noticia);
		if($data['noticia']) {
			$this->_content = $this->load->view('noticia', $data, true);
			parent::index();
		}
		
	}
}
/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */