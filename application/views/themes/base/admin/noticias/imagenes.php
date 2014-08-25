<style type="text/css">
    #myId {
        background: #f9f9f9;
        border: 3px dashed #d0d0d0;
        color: #d2d2d2;
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
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Imagenes cargadas</div>
                <div id="imagenes-cargadas" class="panel-body">
                    <?php foreach ($imagenes as $imagen) { ?>
                        <figure class="imagen-cargada">
                            <img src="../<?=$imagen['thumbNoticiaImagen']?>">
                            <span class="glyphicon glyphicon-ok imagen-check"></span>
                            <figcaption>
                                <input type="checkbox" name="midocis" class="pull-left">
                                <a href="#" ic-post-to="noticias/eliminarImagen/<?=$imagen['idNoticiaImagen']?>" ic-target="#main_content"><span class="glyphicon glyphicon-remove pull-right"></span></a>
                            </figcaption>
                        </figure>
                    <?php } ?>
                    <!--<div class="dz-preview dz-file-preview">
                        <div class="dz-details">
                            <div class="dz-filename"><span data-dz-name></span></div>
                            <div class="dz-size" data-dz-size></div>
                            <img data-dz-thumbnail />
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <div class="dz-success-mark"><span>✔</span></div>
                        <div class="dz-error-mark"><span>✘</span></div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    </div>-->

                </div>
            </div>
        </div>
	</div>
</div>
<script type="text/javascript">
    $("div#myId").dropzone({ 
        paramName: 'userfile[]',
        url: "noticias/upload",
        'sending': function(file, xhr, formData) {
            formData.append("idNoticia", $('#idNoticia').val());
        },
        //previewsContainer: '#preview'
    });
    $('figcaption > input').on('click', function() {
        $('figcaption > input[type=checkbox]').prop('checked', '');
        $(this).prop('checked', 'checked');
    });
    $('.fecha').datetimepicker({
        pickTime: false
    });
</script>