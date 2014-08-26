<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="wrap-content container col-xs-12 col-lg-9">
	<section>
<div class="col-xs-12 col-lg-8 section">
	<h4 class="titulo_seccion">NOTICIAS <span class="naranja">FID</span></h4>
    		<hr>
	<div class="ultimas_novedades">
	<?php foreach ($noticias as $noticia) { ?>
		<div class="row">
			<figure class="col-lg-12">
				<img src="<?=site_url($noticia['thumbNoticiaImagen'])?>" class="col-lg-4">
				<figcaption class="col-lg-8">
					<a href="noticia/<?=$noticia['idNoticia']?>/<?=$noticia['uriNoticia']?>"><label><?=$noticia['tituloNoticia']?></label></a>
					<p><?=$noticia['epigrafeNoticia']?></p>
					<a href="noticia/<?=$noticia['idNoticia']?>/<?=$noticia['uriNoticia']?>" class="pull-right">Leer más</a>
				</figcaption>
			</figure>
		</div>
	<?php } ?>
	</div>
</div>
<div class="hidden-xs col-lg-4 section">
	<h4 class="titulo_seccion">OTRAS <span class="naranja">NOTICIAS</span></h4>
    		<hr>
	<ul class="aside">
	<?php foreach ($noticias as $noticia) { ?>
		<li><a><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
	<div class="fb-like-box" data-href="https://www.facebook.com/pages/Fundacion-Para-La-Integracion-Y-El-Desarrollo-De-Comunidades-Rurales/209294019221667?fref=ts" data-width="250" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
</div>
</section>