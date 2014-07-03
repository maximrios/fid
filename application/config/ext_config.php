<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$config['ext_base_url'] = 'http://localhost/fid';
	$config['ext_theme_name'] = 'base';
	$config['ext_theme_folder'] = $config['ext_base_url'].'/assets/themes/'.$config['ext_theme_name'].'/';
	$config['ext_base_panel']['titulo'] = 'Panel de Administración';
	$config['ext_base_panel']['cliente'] = 'Fundacion FID';
	$config['ext_base_panel']['web'] = $config['ext_base_url'];
	$config['ext_base_assets_images'] = 'assets/images/';
	$config['ext_base_assets_theme'] = 'assets/'.$config['ext_theme_folder'];
	$config['ext_base_favicon'] = $config['ext_base_assets_images'].'favicon.ico';
	$config['ext_autenticacion'] = array('login_uri', 'login_success_uri', 'pass_is_md5');
	$config['ext_autenticacion_login_uri'] = 'administrador/login';
	$config['ext_autenticacion_pass_is_md5'] = FALSE;
	$config['ext_autenticacion_login_success_uri'] = 'admin';
	
	$config['js_array'] = array(
    	$config['ext_base_assets_theme'].'js/jquery.js',
	);
	$config['css_array'] = array(
	    $config['ext_base_assets_theme'].'css/bootstrap.min.css',
	);