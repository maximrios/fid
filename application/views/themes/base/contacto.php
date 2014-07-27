<section class="wrap-content container col-xs-12 col-lg-9">
<?php
    $vcFormName = antibotHacerLlave();
    $vcMsjSrv = (!empty($vcMsjSrv))? $vcMsjSrv: '';
    $vcFrmAction = (!empty($vcFrmAction))? $vcFrmAction: '';
?>
<section>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<h4 class="titulo-section">Cómo <span class="naranja">Contactarnos</span></h4>
			<p>Contactáte con nosotros, utiliza algunos de los medios que detallamos a continuación.</p>
			<ul>
				<li>Escribinos al mail <a href="mailto:contacto@fundacionfisalta.org">contacto@fundacionfidsalta.org</a></li>
				<li>Podés llamarnos a los teléfonos: (54 387) 155780060 | (54 387) 154686308</li>
				<li>Completando el formulario de contacto.</li>
			</ul>
			<h4 class="titulo-section">Formulario de <span class="naranja">Contacto</span></h4>
			<div class="mensaje-validacion">
				<?=$vcMsjSrv;?>
			</div>
			<div style="border:1px solid #f3f3f3;padding: 0.3em;">
				<form id="<?=$vcFormName;?>" name="<?=$vcFormName;?>" action="<?=$vcFrmAction;?>" method="post" accept-charset="utf-8" role="form" style="padding:1em;background:#f2f2f2;">
					<div class="form-group">
						<label for="nombresContacto">Nombres</label>
						<input id="nombresContacto" type="text" name="nombresContacto" tabindex="1" title="Ingrese el nombre completo" placeholder="Nombre completo" class="form-control" value="<?=$Reg['nombresContacto']?>">
					</div>
					<div class="form-group">
						<label for="telefonoContacto">Telefono</label>
						<input id="telefonoContacto" type="tel" name="telefonoContacto" tabindex="2" placeholder="03874290011. Solo números" class="form-control" value="<?=$Reg['telefonoContacto']?>">
					</div>
					<div class="form-group">
						<label for="emailContacto">Correo Electronico</label>
						<input id="emailContacto" type="email" name="emailContacto" tabindex="3" placeholder="ejemplo@servidor.com" class="form-control" value="<?=$Reg['emailContacto']?>">
					</div>
					<div class="form-group">
						<label for="mensajeContacto">Mensaje</label>
						<textarea id="mensajeContacto" name="mensajeContacto" rows="9" tabindex="4" placeholder="Mensaje" class="form-control"><?=$Reg['mensajeContacto']?></textarea>
						<span class="form-importante">* Todos los campos son obligatorios.</span>
					</div>
					<div class="form-group clearfix">
						<button name="btnenviar" type="submit" class="btn btn-primary pull-right">ENVIAR</button>
					</div>
					<input type="hidden" id="vcForm" name="vcForm" value="<?=$vcFormName;?>" />
				</form>
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
	<br>
	<div class="row">
		<div class="col-lg-12">
			<h4 class="titulo-section">Cómo <span class="naranja">llegar</span></h4>
				<?php 
				echo $map['js'];
				echo $map['html'];
				?>
		</div>
		
	</div>	
</section>
