<section class="wrap-content container col-xs-12 col-lg-9">
	<section>
<div class="col-lg-8 section">
	<div class="col-lg-12 noticia">
		<h4 class="naranja"><?=$noticia['tituloNoticia']?></h4>
		<div class="col-lg-12">
			<span class="fecha pull-right">Fecha de publicación: <?=GetDateFromISO($noticia['fechaDesdeNoticia'])?></span>	
		</div>
		<!--<p><?=$noticia['epigrafeNoticia']?></p>-->
		<br><br>
		<div class="slider-wrapper theme-default">
    		<div id="slider" class="nivoSlider">
				<?php foreach ($imagenes as $imagen) { ?>
				<img src="<?=site_url($imagen['pathNoticiaImagen'])?>">	
				<?php } ?>
			</div>
		</div>
		<p><?=htmlspecialchars_decode($noticia['descripcionNoticia'])?></p>
		
		<iframe src="//www.facebook.com/plugins/like.php?href=<?=site_url().'noticia/'.$noticia['idNoticia'].'/'.$noticia['uriNoticia']?>&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
	</div>
</div>
<div class="col-lg-4 section">
	<h4 class="titulo_seccion">OTRAS <span class="naranja">NOTICIAS</span></h4>
    		<hr>
	<ul class="otras_novedades">
	<?php foreach ($relacionadas as $noticia) { ?>
		<li><a href="<?=site_url('noticia/'.$noticia['idNoticia'].'/'.$noticia['uriNoticia'])?>"><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
</div>
</section>
<script type="text/javascript">
	$('#slider').nivoSlider({
		controlNav: false,
		directionNav: false,
	});
</script>
