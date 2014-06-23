<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="<?=$site_info['author']?>">
	<title><?=$site_info['title']?></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/fid.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/default.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/responsive-calendar.css">
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/responsive-calendar.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.simplyScroll.js"></script>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container col-lg-9">

			&nbsp;&nbsp;<a href="#" class="btn btn-primary pull-right">Donar ahora</a>&nbsp;&nbsp;
			<img class="pull-right" src="assets/themes/base/img/facebook_hover.png" width="30">&nbsp;&nbsp;
		</div>
		
	</div>
	<header>
		<div class="container col-lg-10">
			<h1><a href="http://fundacionfidsalta.org" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales" title="Fundación para la Integración y el Desarollo de Comunidades Rurales"><img src="./assets/images/logo_header.png" title="Fundación para la Integración y el Desarollo de Comunidades Rurales" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales"></a></h1>	
			<nav class="nav navbar-nav">
				<ul class="container col-lg-10 pull-right">
					<li><a href="" title="">Inicio</a></li>
					<li><a href="" title="">Quienes Somos</a></li>
					<li><a href="" title="">Programas</a></li>
					<li><a href="" title="">Noticias</a></li>
					<li><a href="" title="">Galeria</a></li>
					<li><a href="" title="">Contacto</a></li>
				</ul>
			</nav>
		</div>

	</header>
	
	<section class="wrap-content container col-lg-10">
		<?=$main_content?>
	</section>
	
	<footer>
		<div class="container col-lg-10">
			<div class="col-lg-2">
				<h5>Menú</h5>
				<ul>
					<li><a href="inicio">Inicio</a></li>
					<li><a href="fundacion">Quienes Somos</a></li>
					<li><a href="" title="">Programas</a></li>
					<li><a href="noticias" title="">Noticias</a></li>
					<li><a href="" title="">Galeria</a></li>
					<li><a href="" title="">Contacto</a></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h5>Contactános</h5>
				<ul>
					<li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;info@fundacionfidsalta.org</li>
					<li><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;(0387) 4191919 - 4101010</li>
					<li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Av. Siempre Viva 74</li>
					<li><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Salta - Argentina</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h5>Suscribite a nuestro Newsletter</h5>
				<form>
					<input type="text" id="newsletter" name="newsletter" placeholder="Ingresa tu email" class="form-control">
				</form>
			</div>
			<div class="col-lg-2" style="text-align:right;">
				<img src="assets/images/fiscal.png" width="100">
			</div>
		</div>
	</footer>
<script type="text/javascript">
	
</script>
		
</body>
</html>