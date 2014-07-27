<section class="wrap-content container col-xs-12 col-lg-9">
<div class="col-xs-12 col-lg-9">
	<div class="ultimas_novedades">
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
</div>
<div class="hidden-xs col-lg-3">
	<h4 class="titulo_seccion">Otras Noticias</h4>
	<ul class="aside">
	<?php foreach ($noticias as $noticia) { ?>
		<li><a><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
</div>