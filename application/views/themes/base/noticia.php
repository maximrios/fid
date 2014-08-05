<section class="wrap-content container col-xs-12 col-lg-9">
	<section>
<div class="col-lg-8 section">
	<div class="col-lg-12 noticia">
		<h4 class="naranja"><?=$noticia['tituloNoticia']?></h4>
		<div class="col-lg-12">
			<span class="fecha pull-right">Fecha de publicación: <?=GetDateFromISO($noticia['fechaDesdeNoticia'])?></span>	
		</div>
		<img src="assets/images/noticias/noticia1.jpg">
		<p><?=$noticia['epigrafeNoticia']?></p>
		<p><?=htmlspecialchars_decode($noticia['descripcionNoticia'])?></p>
	</div>
</div>
<div class="col-lg-4 section">
	<h4 class="titulo_seccion">OTRAS <span class="naranja">NOTICIAS</span></h4>
    		<hr>
	<ul class="otras_novedades">
	<?php foreach ($relacionadas as $noticia) { ?>
		<li><a href="noticia/<?=$noticia['idNoticia']?>/<?=$noticia['uriNoticia']?>"><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
</div>
</section>