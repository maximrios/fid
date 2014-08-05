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
	<div class="col-lg-8 section">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
				<h4 class="titulo_seccion">NUESTROS <span class="naranja">PROGRAMAS</span></h4>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe temporibus reprehenderit molestiae provident blanditiis quae soluta voluptas quos molestias natus unde quia, repudiandae nobis, placeat adipisci illo cumque quaerat recusandae.
				</p>
			</div>
		</div>
		<?php foreach ($programas as $programa) { ?>
		<div class="row programa section">
			<div class="col-lg-12">
				<a href="programa/<?=$programa['idPrograma']?>/<?=$programa['uriPrograma']?>"><label><?=$programa['nombrePrograma']?></label></a>
				<?=word_limiter(htmlspecialchars_decode($programa['descripcionPrograma']), 100)?>
				
			</div>
			<div class="row"><a href="programa/<?=$programa['idPrograma']?>/<?=$programa['uriPrograma']?>" class="pull-right">Leer programa completo</a></div>
		</div>
	<?php } ?>
	</div>
	<div class="col-lg-4 section">
    	<h4 class="titulo_seccion">AYUDANOS A <span class="naranja">AYUDAR</span></h4>
    	<hr>
    	<h5>Ayudá como <span class="naranja">donante</span></h5>
    	<p>Con tu aporte, estamos seguros que participamos de la construcción de una sociedad más equitativa.</p>
    	<span>Transferencia Bancaria</span>
    	<ul>
    		<li>Titular: Fundacion FID</li>
    		<li>Banco de la Nación Argentina</li>
    		<li>Cta. corriente N° 3070-4533055016</li>
    		<li>CBU 01104534/40045330550162</li>
    	</ul>
    	<div class="section">
    		<h4 class="titulo_seccion">SUSCRIBITE AL <span class="naranja">NEWSLETTER</span></h4>
    		<hr>
    		<p>Completá el formulario para suscribirte a nuestro newsletter, enterarte de nuestras acciones y de los encuentros que realizamos para ayudar a las comunidades.</p>
    		<form>
                <input type="text" placeholder="Apellido" class="form-control">
                <input type="text" placeholder="Nombre" class="form-control">
                <input type="text" placeholder="Email" class="form-control">
                <button class="btn btn-primary form-control">Suscribirme</button>
    		</form>
		</div>
    	<div class="fb-like-box" data-href="https://www.facebook.com/pages/Fundacion-Para-La-Integracion-Y-El-Desarrollo-De-Comunidades-Rurales/209294019221667?fref=ts" data-width="250" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
</section>