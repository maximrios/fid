<?php
	$route['fundacion'] = "inicio/fundacion";
	$route['newsletter'] = "inicio/suscripcion";
	//$route['noticias'] = "inicio/noticias";
	$route['programa/(:num)/(:any)'] = 'programas/programa/$1';
	$route['galerias'] = "inicio/galerias";
	$route['galeria/(:num)/([a-z-0-9-]+)'] = "inicio/galeria/$1";
	$route['noticia/(:num)/([a-z-0-9-]+)'] = "noticias/noticia/$1";
	$route['administrador/login'] = "administrador/auth/login";
	$route['administrador/autenticar'] = "administrador/auth/autenticar";
