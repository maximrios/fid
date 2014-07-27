	<!--<div class="col-lg-12">-->
		<div class="slider-wrapper theme-default">
    		<div class="ribbon"></div>
    		<div id="slider" class="nivoSlider">
		        <?php /*foreach ($slider as $imagen) { ?>
            	<a href="<?=$imagen['linkSlider']?>" target="<?=$imagen['targetSlider']?>"><img src="<?=$imagen['pathSlider']?>" alt="<?=$imagen['tituloSlider']?>"/></a>
        		<?php } */?>
        		<a href="#" target=""><img src="assets/images/imagen11.jpg" alt=""/></a>
        		<a href="#" target=""><img src="assets/images/imagen22.jpg" alt=""/></a>
    		</div>
    	</div>
	<!--</div>-->
<section class="wrap-content container col-xs-12 col-lg-9">
	<div class="row">
		<h3 style="text-align:center;">Bienvenido</h3>
		<p style="text-align:center;">En nombre de la Fundación FID (Salta) les damos la más cordial bienvenida a nuestra página web.</p>
		<p style="text-align:center;">El principal objetivo de este canal de comunicación, es dar a conocer sobre nuestros objetivos institucionales y actividades que realizamos en el día a día acompañando a las comunidades que viven en contextos rurales.</p>
		<p style="text-align:center;">Podrán encontrar aquí de una manera ágil y directa, una amplia descripción de nuestras funciones y acciones en los diversos campos y áreas de trabajo como son la gestión ambiental, el desarrollo económico sustentable, la educación, la promoción de la salud, el fortalecimiento cultural de las comunidades en pos de lograr el Desarrollo Integral de todas las comunidades.</p>	
	</div>
	<div class="row staff">
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
		
	</div>
	
	<div class="col-lg-9 ultimas_novedades">
		<h4 class="titulo_seccion">Ultimas novedades</h4>
		<hr>
		<?php foreach ($noticias as $noticia) { ?>
			<div class="row">
				<figure class="col-lg-12">
					<img src="http://localhost/fid/assets/images/noticias/people-q-c-200-150-3.jpg" class="col-lg-4">
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
		<h4 class="titulo_seccion">Actividades</h4>
		<hr>
		<div class="responsive-calendar">
        	<div class="controls">
            	<a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            	<h4><span data-head-year></span> <span data-head-month></span></h4>
            	<a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        	</div><hr/>
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
	<div class="col-lg-12">
		<h4 class="titulo_seccion">Nuestros Colaboradores</h4>
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
<script type="text/javascript">
	$('#slider').nivoSlider();
	$(".responsive-calendar").responsiveCalendar({
          time: '2013-05',
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
    });
	
        $("#scroller").simplyScroll({
			pauseOnHover: false,
            speed: 3,
        });
    
</script>