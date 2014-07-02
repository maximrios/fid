<div class="col-xs-12 col-lg-8">
	<div class="noticias">
	<?php foreach ($noticias as $noticia) { ?>
		<div class="col-lg-12 noticia">
			<h4><a href="noticia/<?=$noticia['idNoticia'].'/'.$noticia['uriNoticia']?>"><?=$noticia['tituloNoticia']?></a></h4>
			<span class="col-lg-12 fecha"><?=$noticia['inicioNoticia']?></span>
			<a href="noticia/<?=$noticia['idNoticia'].'/'.$noticia['uriNoticia']?>"><img src="assets/images/noticias/noticia1.jpg"></a>
			<p><?=$noticia['epigrafeNoticia']?></p>
			<p><?=word_limiter($noticia['descripcionNoticia'], 80)?></p>
			<a href="noticia/<?=$noticia['idNoticia'].'/'.$noticia['uriNoticia']?>" class="btn btn-default pull-right">Leer más</a>
		</div>
	<?php } ?>
	</div>
</div>
<div class="hidden-xs col-lg-4">
	<h4 class="titulo_seccion">Otras Noticias</h4>
	<ul class="aside">
	<?php foreach ($noticias as $noticia) { ?>
		<li><a><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
</div>