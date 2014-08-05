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
		<div class="row">
			<div class="col-lg-12">
				<a href="programa/<?=$programa['idPrograma']?>/<?=$programa['uriPrograma']?>"><h3><?=$programa['nombrePrograma']?></h3></a>
				<?=word_limiter(htmlspecialchars_decode($programa['descripcionPrograma']), 100)?>
				<a href="programa/<?=$programa['idPrograma']?>/<?=$programa['uriPrograma']?>">Leer programa completo</a>
			</div>
		</div>
	<?php } ?>
	</div>
	<div class="col-lg-4 section">
    	<h4 class="titulo_seccion">AYUDANOS A <span class="naranja">AYUDAR</span></h4>
    		<hr>
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
    </div>
</section>