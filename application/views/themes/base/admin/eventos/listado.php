<div class="panel panel-default">
<div class="panel-heading">Listado de Eventos</div>
	<div id="panel-body" class="panel-body">
		<?= $vcMsjSrv; ?>
		<a href="#" class="btn btn-primary pull-right" ic-trigger-on="click" ic-verb="POST" ic-src="eventos/formulario" ic-target="#main_content">Clickeame</a>
		<?= $vcGridView; ?>
	</div>
</div>
<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/intercooler.min.js"></script>