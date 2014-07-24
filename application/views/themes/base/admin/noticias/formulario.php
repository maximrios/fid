<div class="panel panel-default">
	<div class="panel-heading">Agregar Noticia</div>
	<div class="panel-body">
        <?= $vcMsjSrv; ?>
		<form ic-post-to="<?=$formAction?>" ic-target="#main_content">
			<div class="form-group col-lg-12">
            	<label for="tituloNoticia">Titulo</label>
            	<input type="text" class="form-control" id="tituloNoticia" name="tituloNoticia" tabindex="1" placeholder="Titulo de Noticia" value="<?=$Reg['tituloNoticia']?>" autofocus>
        	</div>
            <div class="form-group col-lg-12">
                <label for="epigrafeNoticia">Epígrafe</label>
                <input type="text" class="form-control" id="epigrafeNoticia" name="epigrafeNoticia" tabindex="2" placeholder="Epígrafe de Noticia" value="<?=$Reg['epigrafeNoticia']?>">
            </div>
            <div class="form-group col-lg-12">
                <label for="descripcionNoticia">Descripción</label>
                <textarea class="form-control" id="descripcionNoticia" name="descripcionNoticia" tabindex="3" placeholder="Noticia completa."><?=$Reg['descripcionNoticia']?></textarea>
            </div>
        	<div class="form-group col-lg-2">
            	<label for="fechaDesdeNoticia">Fecha de Publicación</label>
            	<input type="text" class="form-control fecha" id="fechaDesdeNoticia" name="fechaDesdeNoticia" tabindex="4" placeholder="dd/mm/yyyy" value="<?=$Reg['fechaDesdeNoticia']?>">
        	</div>
        	<div class="botones col-lg-12">
        		<button type="button" ic-post-to="noticias/listado" ic-target="#main_content" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Cancelar</button>
        		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Guardar</button>
        	</div>
            <input type="hidden" id="idNoticia" name="idNoticia" value="<?=$Reg['idNoticia']?>">
        	<input type="hidden" id="vcForm" name="vcForm" value="asdasd">
		</form>
	</div>
</div>
<script type="text/javascript">
    $('.fecha').datetimepicker({
        pickTime: false
    });
</script>