<div class="col-lg-">
	<div class="col-lg-12 noticia">
		<h4><?=$noticia['tituloNoticia']?></h4>
		<span class="col-lg-12 fecha"><?=$noticia['fechaDesdeNoticia']?></span>
		<img src="assets/images/noticias/noticia1.jpg">
		<p><?=$noticia['epigrafeNoticia']?></p>
		<p><?=$noticia['descripcionNoticia']?></p>
	</div>
</div>
<div class="col-lg-4">
	<h4 class="titulo_seccion">Otras Noticias</h4>
	<ul>
	<?php foreach ($relacionadas as $noticia) { ?>
		<li><a><?=$noticia['tituloNoticia']?></a></li>
	<?php } ?>
	</ul>
</div>