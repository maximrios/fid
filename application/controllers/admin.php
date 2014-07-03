<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends Ext_AutController {
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$aData = array();
		$this->_content = $this->load->view('admin/dashboard',$aData,true);
		$this->_menu = menu_ul('inicio');
		parent::index();
	}
}
?>