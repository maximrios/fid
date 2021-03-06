<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="<?=$site_info['author']?>">
	<title><?=$site_info['title']?></title>
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/fid.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/nivo-slider.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/default.css')?>">
	<!--<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/jquery.simplyScroll.css')?>">-->
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/responsive-calendar.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=site_url('assets/themes/base/css/jquery.bxslider.css')?>">
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/responsive-calendar.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.nivo.slider.js')?>"></script>
	<!--<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.simplyScroll.js')?>"></script>-->
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.easing.1.3.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.lavalamp.min.js')?>"></script>
	<script type="text/javascript" src="<?=site_url('assets/themes/base/js/jquery.bxslider.min.js')?>"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52256719-1', 'auto');
  ga('send', 'pageview');

</script>
<style type="text/css">
.navbar-default {
	z-index: 9999!important;
}
</style>
</head>
<body>
	<div class="navbar navbar-default nav-top">
		<div class="main-content container col-lg-9">
			<ul class="nav navbar-nav pull-right">
				<li class="facebook"><a href="https://www.facebook.com/pages/Fundacion-Para-La-Integracion-Y-El-Desarrollo-De-Comunidades-Rurales/209294019221667?fref=ts" title="Encontranos en facebook" target="_blank"></a></li>
				<li><a href="<?=site_url('contacto')?>"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;DONAR AHORA</a></li>
			</ul>
			
		</div>
	</div>
	<header>
		<div class="main-content container col-lg-9">
			<h1><a href="http://fundacionfidsalta.org" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales" title="Fundación para la Integración y el Desarollo de Comunidades Rurales"><img src="<?=base_url()?>assets/images/logo_header.jpg" title="Fundación para la Integración y el Desarollo de Comunidades Rurales" alt="Fundación para la Integración y el Desarollo de Comunidades Rurales" width="110"></a></h1>	
			<nav class="navbar navbar-default nav-primary" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
	      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-primary">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
      					</button>
   					</div>
   					<div class="collapse navbar-collapse" id="navbar-collapse-primary">
						<ul id="navlist" class="container col-lg-10 pull-right nav navbar-nav">
							<?=$main_menu?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
		<?=$main_content?>
	</section>
	<footer>
		<div class="main-content container col-lg-9">
			<!--<div class="col-lg-2">
				<h5>Menú</h5>
				<ul>
					<li><a href="inicio">Inicio</a></li>
					<li><a href="<?=base_url('/fundacion')?>">Quienes Somos</a></li>
					<li><a href="" title="">Programas</a></li>
					<li><a href="noticias" title="">Noticias</a></li>
					<li><a href="" title="">Galeria</a></li>
					<li><a href="contacto" title="">Contacto</a></li>
				</ul>
			</div>-->
			<div class="col-lg-4">
				<h5>Contactános</h5>
				<ul>
					<li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<a href="mailto:info@fundacionfidsalta.org">info@fundacionfidsalta.org</a></li>
					<li><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;(54 387) 155780060</li>
					<li><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Caseros 1907</li>
					<li><span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Salta - Argentina</li>
				</ul>
			</div>
		</div>
		<div class="footer">
			<div class="container col-lg-9">
				Fundación para la Integración y el Desarrollo de Comunidades | &copy; 2014 Todos los derechos reservados.
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