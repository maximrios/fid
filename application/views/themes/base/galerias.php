<section class="wrap-content container col-xs-12 col-lg-9">
<section>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h4 class="titulo-section">Galería de <span class="naranja">Fotos</span></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta corrupti impedit maxime laborum distinctio. Enim ad, reprehenderit ea possimus sequi mollitia quas dolorum ex quibusdam officia. Similique, sint. Odio, harum!</p>
            <div class="polaroid">
            <?php foreach ($galerias as $galeria) { ?>
            <figure class="col-lg-3">
            	<img src="<?=$galeria['thumbGaleriaMedia']?>">
            	<figcaption><?=$galeria['nombreGaleria']?></figcaption>
            </figure>
            <?php } ?>
            </div>
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
    </div>
</section>            
