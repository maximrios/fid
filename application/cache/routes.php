<?php
	$route['fundacion'] = "inicio/fundacion";
	$route['noticias'] = "inicio/noticias";
	$route['noticia/(:num)/([a-z-0-9-]+)'] = "inicio/noticia/$1";
	$route['administrador/login'] = "administrador/auth/login";
	$route['administrador/autenticar'] = "administrador/auth/autenticar";
