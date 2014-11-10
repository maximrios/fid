<div class="row">
	<form id="form-search-gridview" name="form-search-gridview" ic-post-to="newsletter/listado" ic-target="#main_content">
		<div class="input-group search-gridview pull-right">
	    	<input type="text" id="buscarGridview" name="buscarGridview" class="form-control" placeholder="Buscar..." value="<?=$txtvcBuscar?>" autofocus>
    		<span class="input-group-btn">
		    	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	    	</span>
		</div>
		<a href="#" class="btn btn-primary pull-right" ic-trigger-on="click" ic-verb="POST" ic-src="newsletter/formulario" ic-target="#main_content"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Agregar suscriptor</a>
        <!--<a href="#" class="btn btn-success" ic-trigger-on="click" ic-verb="POST" ic-src="newsletter/formulario" ic-target="#main_content"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;Exportar a Excel</a>-->
	</form>	
</div>
<?=$vcMsjSrv?>
<?=$vcGridView;?>