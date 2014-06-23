	<div class="col-lg-12">
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
	</div>

	<div class="col-lg-4">
		<span></span>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	</div>
	<div class="col-lg-4">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	</div>
	<div class="col-lg-4">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	</div>
	<div class="col-lg-9 ultimas_novedades">
		<h4 class="titulo_seccion">Ultimas novedades</h4>
		<hr>
		<div class="col-lg-4">
			<figure class="">
				<figcaption class="titulo">Juntos por Baritú</figcaption>
				<img src="http://localhost/fid/assets/images/noticias/people-q-c-200-150-3.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="#" class="btn btn-primary pull-right">Leer más</a>
			</figure>
		</div>
		<div class="col-lg-4">
			<figure class="">
				<figcaption class="titulo">Objetivos de Milenio</figcaption>
				<img src="http://localhost/fid/assets/images/noticias/people-q-c-200-150-4.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="#" class="btn btn-primary pull-right">Leer más</a>
			</figure>
		</div>
		<div class="col-lg-4">
			<figure class="">
				<figcaption class="titulo">Titulo de noticia</figcaption>
				<img src="http://localhost/fid/assets/images/noticias/people-q-c-200-150-3.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a href="#" class="btn btn-primary pull-right">Leer más</a>
			</figure>
		</div>
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
<link rel="stylesheet" type="text/css" href="assets/<?=$this->config->item('ext_theme_folder')?>css/jquery.simplyScroll.css">
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