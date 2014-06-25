<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends Ext_AutController {
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$aData = array();
		$this->_SiteInfo['title'] .= ' - Dashboard';
		$this->_content = $this->load->view('admin/template',$aData,true);
		//parent::index();
	}
}
?>