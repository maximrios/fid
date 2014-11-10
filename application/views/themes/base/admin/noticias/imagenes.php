<style type="text/css">
    #myId {
        background: #f9f9f9;
        border: 3px dashed #d0d0d0;
        color: #d2d2d2;
        min-height: 365px;
        width: 100%;
    }
    .col-lg-6 > div {
        min-height: 400px;
    }
</style>
<div class="panel panel-default">
	<div class="panel-heading">Administrar imagenes para <?=$Reg['tituloNoticia']?><a href="#" ic-post-to="noticias/listado" style="" ic-target="#main_content" class="pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;&nbsp;Volver</a></div>
	<div class="panel-body">
        <div class="alert alert-info" role="alert">
            En este espacio podrá agregar o eliminar imágenes. Arrastre las imágenes que desea agregar hasta el espacio de lineas punteadas.<br>Las imágenes no deben superar 3 MB de tamaño máximo.
        </div>
        <?=$vcMsjSrv;?>
        <div class="col-lg-6">
            <div class="col-lg-12" id="myId">
                <link href="../assets/themes/base/dropzone/css/dropzone.css" type="text/css" rel="stylesheet" />
                <script src="../assets/themes/base/dropzone/dropzone.js"></script>
            </div>
            <input type="hidden" id="idNoticia" name="idNoticia" value="<?=$Reg['idNoticia']?>">
            <button id="btn_upload" ic-post-to="noticias/imagenes/<?=$Reg['idNoticia']?>" ic-trigger-on="click" ic-target="#main_content" class="btn btn-primary col-lg-12">Subir imagenes</button>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Imagenes cargadas</div>
                <div id="imagenes-cargadas" class="panel-body">
                    <?php foreach ($imagenes as $imagen) { 
                        $active = ($imagen['checkNoticiaImagen'])? 'active':'';?>
                        <figure class="imagen-cargada <?=$active?>">
                            <form ic-post-to="noticias/checkImagen" ic-trigger-on="click" ic-target="#main_content" id="form_check_<?=$imagen['idNoticiaImagen']?>" name="form_check_<?=$imagen['idNoticiaImagen']?>">
                                <img src="../<?=$imagen['thumbNoticiaImagen']?>">
                                <input type="hidden" id="idNoticiaImg" name="idNoticia" value="<?=$imagen['idNoticia']?>">
                                <input type="hidden" id="idNoticiaImagen" name="idNoticiaImagen" value="<?=$imagen['idNoticiaImagen']?>">
                            </form>
                            <figcaption>
                                <a href="#" ic-post-to="noticias/eliminarImagen/<?=$imagen['idNoticiaImagen']?>" ic-target="#main_content" title="Eliminar imagen"><span class="glyphicon glyphicon-remove pull-right"></span></a>
                            </figcaption>
                        </figure>
                    <?php } ?>
                </div>
            </div>
            
        </div>
	</div>
</div>
<script type="text/javascript">
    var myDropzone = new Dropzone("div#myId", { 
        paramName: 'userfile[]',
        url: "noticias/upload",
        'sending': function(file, xhr, formData) {
            formData.append("idNoticia", $('#idNoticia').val());
        },
        autoProcessQueue: false,
    });
    $('#btn_upload').on('beforeSend.ic', function() {
        myDropzone.processQueue();
        alert('subida');
    });
    $('figcaption > input').on('click', function() {
        $('figcaption > input[type=checkbox]').prop('checked', '');
        $(this).prop('checked', 'checked');
    });
</script>