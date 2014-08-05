<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="wrap-content container col-xs-12 col-lg-9">
<section class="section">
    <?=$breadcrumb?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 programa">
			<h3><?=$programa['nombrePrograma']?></h3>
			<?=htmlspecialchars_decode($programa['descripcionPrograma'])?>
		</div>
		<div class="col-lg-4">
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
                <!--<li>CUIT N° 20325053713</li>-->
            </ul>
            <div class="fb-like-box" data-href="https://www.facebook.com/pages/Fundacion-Para-La-Integracion-Y-El-Desarrollo-De-Comunidades-Rurales/209294019221667?fref=ts" data-width="250" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    	</div>
	</div>
</section>