<style type="text/css">
.als-container {
	position: relative;
	width: 100%;
	margin: 0px auto;
}

.als-viewport {
	position: relative;
	overflow: hidden;
	margin: 0px!important;
	width: 100%!important;
	padding: 0!important;
}

.als-wrapper {
	position: relative;
	list-style: none;
}

.als-item {
	position: relative;
	display: block;
	text-align: center;
	cursor: pointer;
	float: left;
}

.als-prev, .als-next {
	font-size: 2em;
	position: absolute;
	cursor: pointer;
	clear: both;
}
.als-prev {
	float: left;
}
#demo2 .als-item {
	margin: 10px 0px;
	min-height: 152px;
	min-width: 128px;
}

#demo2 .als-item img {
	position: relative;
	display: block;
	vertical-align: middle;
	margin-bottom: 8px;
}

#demo2 .als-prev, #demo2 .als-next {
	width: 22px;
	height: 15px;
}

#demo2 .als-prev {
	left: -50px;
	top: 90px;
}

#demo2 .als-next {
	right: -50px;
	top: 90px;
}

#demo2 .als-item {
	vertical-align: middle;
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	
	<!--<div class="col-lg-12">-->
		<div class="slider-wrapper theme-default">
    		<!--<div class="ribbon"></div>-->
    		<div id="slider" class="nivoSlider">
		        <?php /*foreach ($slider as $imagen) { ?>
            	<a href="<?=$imagen['linkSlider']?>" target="<?=$imagen['targetSlider']?>"><img src="<?=$imagen['pathSlider']?>" alt="<?=$imagen['tituloSlider']?>"/></a>
        		<?php } */?>
        		<a href="#" target=""><img src="assets/images/imagen11.jpg" alt=""/></a>
        		<a href="#" target=""><img src="assets/images/imagen22.jpg" alt=""/></a>
    		</div>
    	</div>
	<!--</div>-->
<section class="wrap-content main-content container col-xs-12 col-lg-10">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="titulo_seccion">MENSAJE DE <span class="naranja">BIENVENIDA</span></h4>
		<hr>
		<p style="text-align:center;">En nombre de la Fundación FID (Salta) les damos la más cordial bienvenida a nuestra página web.</p>
		<p style="text-align:center;">El principal objetivo de este canal de comunicación, es dar a conocer sobre nuestros objetivos institucionales y actividades que realizamos en el día a día acompañando a las comunidades que viven en contextos rurales.</p>
		<p style="text-align:center;">Podrán encontrar aquí de una manera ágil y directa, una amplia descripción de nuestras funciones y acciones en los diversos campos y áreas de trabajo como son la gestión ambiental, el desarrollo económico sustentable, la educación, la promoción de la salud, el fortalecimiento cultural de las comunidades en pos de lograr el Desarrollo Integral de todas las comunidades.</p>		
		</div>
	</div>
	<div class="row section">
		<h4 class="titulo_seccion">NUESTROS <span class="naranja">PROGRAMAS</span> | <a href="programas">VER TODOS</a></h4>
		<hr>
		<div class="als-container" id="demo2">
  			<span class="als-prev glyphicon glyphicon-circle-arrow-left pull-left hidden-xs"></span>
			<div class="als-viewport">
				<div class="als-wrapper row">
					<?php foreach ($programas as $programa) { ?>
					<div class="als-item col-xs-12 col-lg-3">
						<a href="programa/<?=$programa['idPrograma']?>/<?=$programa['uriPrograma']?>">
							<figure class="programas">
								<img src="./assets/images/programas/programa<?=$programa['idPrograma']?>.jpg">
								<figcaption class="detalle">
									<span class="nombre"><?=substr($programa['nombrePrograma'], 12)?></span>
									<span class="more">Ver detalle</span>
								</figcaption>
							</figure>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			<span class="als-next glyphicon glyphicon-circle-arrow-right hidden-xs"></span>
		</div>
	</div>
	<!--<div class="row staff">
		<h4 class="titulo_seccion">Conocénos</h4>	
		<div class="col-lg-4">
			<span><img src="assets/images/staff/persona1.jpg"></span>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
		</div>
		<div class="col-lg-4">
			<span><img src="assets/images/staff/persona1.jpg"></span>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
		</div>
		<div class="col-lg-4">
			<span><img src="assets/images/staff/persona1.jpg"></span>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</div>
		
	</div>-->
	<div class="row section">
	<div class="col-lg-9 ultimas_novedades">
		<h4 class="titulo_seccion">ULTIMAS <span class="naranja">NOTICIAS</span> | <a href="noticias">VER TODAS</a></h4>
		<hr>
		<?php foreach ($noticias as $noticia) { ?>
			<div class="row">
				<figure class="col-lg-12">
					<img src="<?=$noticia['thumbNoticiaImagen']?>" class="col-lg-4">
					<figcaption class="col-lg-8">
						<a href="noticia/<?=$noticia['idNoticia']?>/<?=$noticia['uriNoticia']?>"><label><?=$noticia['tituloNoticia']?></label></a>
						<p><?=$noticia['epigrafeNoticia']?></p>
						<a href="noticia/<?=$noticia['idNoticia']?>/<?=$noticia['uriNoticia']?>" class="pull-right">Leer más</a>
					</figcaption>
				</figure>
			</div>
		<?php } ?>
	</div>
	<div class="col-lg-3">
		<h4 class="titulo_seccion">VER <span class="naranja">EVENTOS</span></h4>
		<hr>
		<div class="responsive-calendar">
        	<div class="controls">
            	<a class="pull-left" data-go="prev"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
            	<h4><span data-head-year></span> <span data-head-month></span></h4>
            	<a class="pull-right" data-go="next"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
        	</div><br>
        	<div class="day-headers">
          		<div class="day header">Mon</div>
          			<div class="day header">Tue</div>
          			<div class="day header">Wed</div>
          			<div class="day header">Thu</div>
          			<div class="day header">Fri</div>
          			<div class="day header">Sat</div>
          			<div class="day header">Sun</div>
        		</div>
        		<div class="days" data-group="days">
        		</div>
      		</div>
		</div>
		<div class="fb-like-box" data-href="https://www.facebook.com/pages/Fundacion-Para-La-Integracion-Y-El-Desarrollo-De-Comunidades-Rurales/209294019221667?fref=ts" data-width="235" data-height="408" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			
		
		<h4 class="titulo_seccion">NUESTROS <span class="naranja">COLABORADORES</span></h4>
		<hr>
		<div id="carousel">
			<ul id="scroller">
				<li><img src="assets/images/colaboradores/red_comunidades_rurales.png"></li>
				<li><img src="assets/images/colaboradores/imprenta_milenio.png"></li>
				<li><img src="assets/images/colaboradores/red_comunidades_rurales.png"></li>
				<li><img src="assets/images/colaboradores/imprenta_milenio.png"></li>
				<li><img src="assets/images/colaboradores/red_comunidades_rurales.png"></li>
				<li><img src="assets/images/colaboradores/imprenta_milenio.png"></li>
				<li><img src="assets/images/colaboradores/red_comunidades_rurales.png"></li>
				<li><img src="assets/images/colaboradores/imprenta_milenio.png"></li>
			</ul>
		</div>
		</div>
	</div>

<script type="text/javascript" src="assets/themes/base/js/jquery.als-1.6.min.js"></script>
<script type="text/javascript">
	$("#demo2").als({
		visible_items: 4,
		scrolling_items: 1,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "no"
	});
	$('#slider').nivoSlider({
		controlNav: false,
	});
	$(".responsive-calendar").responsiveCalendar({
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2014-07-30": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
    });
	$('#scroller').bxSlider({
		auto: true,
		maxSlides: 2,
		infiniteLoop: true,
		controls: false,
        pager: false,
    });
</script>