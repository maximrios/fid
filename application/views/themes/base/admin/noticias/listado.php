<div class="panel panel-default">
<div class="panel-heading">Listado de Noticias</div>
    <div id="panel-body" class="panel-body">
        <?= $vcMsjSrv; ?>
        <a href="#" class="btn btn-primary pull-right" ic-trigger-on="click" ic-verb="POST" ic-src="noticias/formulario" ic-target="#main_content"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nueva noticia</a>
        <?= $vcGridView; ?>
    </div>
</div>
<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/intercooler.min.js"></script>