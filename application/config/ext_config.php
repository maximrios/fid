<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	$config['ext_theme_name'] = 'base';
	$config['ext_theme_folder'] = 'themes/'.$config['ext_theme_name'].'/';
	$config['ext_base_assets_images'] = 'assets/images/';
	$config['ext_base_assets_theme'] = 'assets/'.$config['ext_theme_folder'];
	$config['ext_base_favicon'] = $config['ext_base_assets_images'].'favicon.ico';
	$config['ext_autenticacion'] = array();
	$config['js_array'] = array(
    	$config['ext_base_assets_theme'].'js/jquery.js',
	);
	$config['css_array'] = array(
	    $config['ext_base_assets_theme'].'css/bootstrap.min.css',
	);