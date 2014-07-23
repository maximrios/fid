<style type="text/css">
    #myId {
        min-height: 300px;
    }
</style>
<div class="panel panel-default">
    <div class="panel-heading">Agregar Imagenes a la galeria <?=$galeria['nombreGaleria']?></div>
    <div class="panel-body" id="myId">
        <?= $vcMsjSrv; ?>
        <link href="../assets/themes/base/dropzone/css/dropzone.css" type="text/css" rel="stylesheet" />
		<script src="../assets/themes/base/dropzone/dropzone.js"></script>
        <input type="hidden" id="idGaleria" name="idGaleria" value="<?=$galeria['idGaleria']?>">    
		<!--<form ic-post-to="<?=$formAction?>" ic-target="#main_content">
			<div class="form-group col-lg-8">
            	<label for="embedLink">Embed a video</label>
            	<input type="text" class="form-control" id="embedLink" name="embedLink" placeholder="http://www.youtube.com/watch?v=Zx4Hjq6KwO0">
        	</div>
        	<div class="botones col-lg-12">
        		<button type="button" ic-post-to="galerias/listado" ic-target="#main_content" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Cancelar</button>
        		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Guardar</button>
        	</div>
            <input type="hidden" id="idGaleria" name="idGaleria" value="<?=$idGaleria?>">
        	<input type="hidden" id="vcForm" name="vcForm" value="asdasd">
		</form>-->
    </div>
</div>
<!--<div class="panel panel-default">
    <div class="panel-heading">Embed Video</div>
    <div class="panel-body">
        <?= $vcMsjSrv; ?>
		<form ic-post-to="galerias/check_youtube" ic-target="#embed-video">
			<div class="form-group col-lg-12">
            	<label for="embedLink">Embed a video</label>
  				<input type="text" class="form-control" id="embedLink" name="embedLink" placeholder="http://www.youtube.com/watch?v=Zx4Hjq6KwO0">
        	</div>
        	<div class="botones col-lg-12">
        		<button type="button" ic-post-to="eventos/listado" ic-target="#main_content" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Cancelar</button>
        		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-<?=$video_icon?>"></span>&nbsp;&nbsp;<?=$video_legend?></button>
        	</div>
        	<input type="hidden" id="vcForm" name="vcForm" value="asdasd">
		</form>
		<div id="embed-video">

		</div>
    </div>
</div>-->
<script type="text/javascript">
	$("div#myId").dropzone({ 
		headers: { "My-Awesome-Header": "header valpedosss" },
        paramName: 'userfile',
		url: "galerias/upload" ,
		'sending': function(file, xhr, formData) {
			formData.append("idGaleria", $('#idGaleria').val());
		}	
	});
</script>