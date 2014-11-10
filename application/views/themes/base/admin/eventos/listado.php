<div class="row">
	<form id="form-search-gridview" name="form-search-gridview" ic-post-to="eventos/listado" ic-target="#main_content">
		<div class="input-group search-gridview pull-right">
	    	<input type="text" id="buscarGridview" name="buscarGridview" class="form-control" placeholder="Buscar..." value="<?=$txtvcBuscar?>" autofocus>
    		<span class="input-group-btn">
		    	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	    	</span>
		</div>
		<a href="#" class="btn btn-primary pull-right" ic-trigger-on="click" ic-verb="POST" ic-src="eventos/formulario" ic-target="#main_content"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo evento</a>
	</form>	
</div>
<?=$vcMsjSrv?>
<?=$vcGridView;?>