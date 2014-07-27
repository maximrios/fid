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
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/jquery.simplyScroll.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/fid/assets/themes/base/css/responsive-calendar.css">
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/responsive-calendar.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.simplyScroll.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://localhost/fid/assets/themes/base/js/jquery.lavalamp.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52256719-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container col-lg-9">
			<a href="#" class="btn btn-primary pull-right">Donar ahora</a>
		</div>
	</div>
	<header>
		<div class="container col-lg-9">
			<h1><a href="http://fundacionfidsalta.org" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales" title="Fundación para la Integración y el Desarollo de Comunidades Rurales"><img src="<?=base_url()?>assets/images/logo_header.jpg" title="Fundación para la Integración y el Desarollo de Comunidades Rurales" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales" width="110"></a></h1>	
			<nav class="nav navbar-nav">
				<ul id="navlist" class="container col-lg-10 pull-right">
					<!--<li class="active"><a href="inicio" title="">Inicio</a></li>
					<li><a href="fundacion" title="">Quienes Somos</a></li>
					<li><a href="programas" title="">Programas</a></li>
					<li><a href="noticias" title="">Noticias</a></li>
					<li><a href="galeria" title="">Galeria</a></li>
					<li><a href="contacto" title="">Contacto</a></li>-->
					<?=$main_menu?>
				</ul>
			</nav>
		</div>

	</header>
	
	
		<?=$main_content?>
	</section>
	
	<footer>
		<div class="container col-lg-9">
			<div class="col-lg-2">
				<h5>Menú</h5>
				<ul>
					<li><a href="inicio">Inicio</a></li>
					<li><a href="<?=base_url('/fundacion')?>">Quienes Somos</a></li>
					<li><a href="" title="">Programas</a></li>
					<li><a href="noticias" title="">Noticias</a></li>
					<li><a href="" title="">Galeria</a></li>
					<li><a href="contacto" title="">Contacto</a></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h5>Contactános</h5>
				<ul>
					<li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;info@fundacionfidsalta.org</li>
					<li><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;(0387) 4191919 - 4101010</li>
					<li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Florida 1550</li>
					<li><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Salta - Argentina</li>
				</ul>
			</div>
			<div class="col-lg-3">
				<h5>Suscribite a nuestro Newsletter</h5>
				<form>
					<input type="text" id="newsletter" name="newsletter" placeholder="Ingresa tu nombre" class="form-control">
					<br>
					<input type="text" id="newsletter" name="newsletter" placeholder="Ingresa tu email" class="form-control">
					<br>
					<button class="btn btn-primary pull-right">Enviar</button>
				</form>
			</div>
			<div class="col-lg-3" style="text-align:right;">
				<img src="<?=base_url()?>assets/images/fiscal.png" width="100">
			</div>
		</div>
	</footer>
	<script type="text/javascript">
	$('#navlist').lavalamp({
   		easing: 'easeOutBack'
	});
	</script>
</body>
</html>