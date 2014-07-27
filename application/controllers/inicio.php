<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Inicio extends Ext_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('layout_model', 'layout');
	}
	public function index() {
		$aData['noticias'] = $this->layout->obtenerNoticias(0, 3);
		$this->_content = $this->load->view('inicio', $aData, true);
		parent::index();
	}
	public function fundacion() {
		$data = array();
		$this->_content = $this->load->view('fundacion', $data, true);
		parent::index();
	}
	
	public function galerias() {
		$data = array();
		$data['galerias'] = $this->layout->obtenerGalerias();	
		$this->_menu = 'galerias';
		$this->_content = $this->load->view('galerias', $data, true);
		parent::index();
	}
}
/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */