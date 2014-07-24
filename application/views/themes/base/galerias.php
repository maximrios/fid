<style type="text/css">
	.galeria {
    	position: relative;
    	width: 200px; 
    	margin: 80px auto;
    	padding: 0.5em;
    	text-align: center;
    	background: #fff;
    	border: 1px solid #ccc;
	}
</style>
<?php foreach ($galerias as $galeria) { ?>
	<div class="galeria">
		<img src="<?=substr($galeria['thumbGaleriaMedia'],1)?>">
	</div>	
<?php } ?>
