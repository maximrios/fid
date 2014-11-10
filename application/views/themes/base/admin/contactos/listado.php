<div class="row">
	<form id="form-search-gridview" name="form-search-gridview" ic-post-to="contactos/listado" ic-target="#main_content">
		<div class="input-group search-gridview pull-right">
	    	<input type="text" id="buscarGridview" name="buscarGridview" class="form-control" placeholder="Buscar..." value="<?=$txtvcBuscar?>" autofocus>
    		<span class="input-group-btn">
		    	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	    	</span>
		</div>
	</form>	
</div>
<?=$vcMsjSrv?>
<?=$vcGridView;?>