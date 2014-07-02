<?php
    $vcFormName = antibotHacerLlave();
    $vcMsjSrv = (!empty($vcMsjSrv))? $vcMsjSrv: '';
    $vcFrmAction = (!empty($vcFrmAction))? $vcFrmAction: '';
?>
<section>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="mensaje-validacion">
				<?=$vcMsjSrv;?>
			</div>
			<div style="border:1px solid #f3f3f3;padding: 0.3em;">
				<form id="<?=$vcFormName;?>" name="<?=$vcFormName;?>" action="<?=$vcFrmAction;?>" method="post" accept-charset="utf-8" role="form" style="padding:1em;background:#f2f2f2;">
					<div class="form-group">
						<label for="nombresContacto">Nombres</label>
						<input id="nombresContacto" type="text" name="nombresContacto" tabindex="1" title="Ingrese el nombre completo" placeholder="Nombre completo" class="form-control" value="<?=$Reg['nombresContacto']?>" required>
					</div>
					<div class="form-group">
						<label for="telefonoContacto">Telefono</label>
						<input id="telefonoContacto" type="tel" name="telefonoContacto" tabindex="2" placeholder="03874290011. Solo números" class="form-control" value="<?=$Reg['telefonoContacto']?>" required>
					</div>
					<div class="form-group">
						<label for="emailContacto">Correo Electronico</label>
						<input id="emailContacto" type="email" name="emailContacto" tabindex="3" placeholder="ejemplo@servidor.com" class="form-control" value="<?=$Reg['emailContacto']?>" required>
					</div>
					<div class="form-group">
						<label for="mensajeContacto">Mensaje</label>
						<textarea id="mensajeContacto" name="mensajeContacto" rows="9" tabindex="4" placeholder="Mensaje" class="form-control" required><?=$Reg['mensajeContacto']?></textarea>
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
    		<h3 class="titulo-section">DONDE <span class="celeste">ESTAMOS</span></h3>
			<div class="aside">
				<ul>
					<li>Av. Siempre Viva 74</li>
					<li>Salta - Argentina</li>
					<li>TE: 0387 4290011</li>
					<li>E-mail: <a href="mailto:info@fundacionfidsalta.org">info@fundacionfidsalta.org</a></li>
				</ul>
			</div>
    	</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-8">
			<h3 class="titulo-section">CÓMO LLEGAR</h3>
				<?php 
				echo $map['js'];
				echo $map['html'];
				?>
		</div>
		<div class="col-lg-offset-4"></div>
	</div>	
</section>
