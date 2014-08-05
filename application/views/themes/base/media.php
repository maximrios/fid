<section class="wrap-content container col-xs-12 col-lg-9">
	<section>
		<div class="col-lg-8 noticia">
			<h4>Galería de imágenes <span class="naranja"><?=$galeria['nombreGaleria']?></span></h4>
			<?php foreach ($medias as $media) { ?>
				<img src="../.<?=$media['thumbGaleriaMedia']?>">
			<?php } ?>
		</div>
		<div class="col-lg-4">
    		<h4 class="titulo-section">Ayudános a <span class="naranja">ayudar</span></h4>
    		<h5>Ayudá como <span class="naranja">donante</span></h5>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nisi animi quaerat obcaecati sit autem ut, quas nihil blanditiis, veniam fuga ipsam deleniti aspernatur ab, quasi repellendus. Nulla, consequatur, voluptas!</p>
    		<span>Transferencia Bancaria</span>
    		<ul>
    			<li>Titular: Fundacion FID</li>
    			<li>Banco de la Nación Argentina</li>
    			<li>Cta. corriente N° 3070-4533055016</li>
    			<li>CBU 01104534/40045330550162</li>
    			<!--<li>CUIT N° 20325053713</li>-->
    		</ul>
    		<!--<h5>Ayudá como <span class="naranja">voluntario</span></h5>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nisi animi quaerat obcaecati sit autem ut, quas nihil blanditiis, veniam fuga ipsam deleniti aspernatur ab, quasi repellendus. Nulla, consequatur, voluptas!</p>
    		<p>Completá el formulario y nos comunicaremos al instante.</p>-->
    	</div>
	</section>
	