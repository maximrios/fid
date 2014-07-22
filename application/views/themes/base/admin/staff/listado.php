<div class="panel panel-default">
<div class="panel-heading">Staff</div>
	<div id="panel-body" class="panel-body">
		<?= $vcMsjSrv; ?>
		<a href="#" class="btn btn-primary pull-right" ic-trigger-on="click" ic-verb="POST" ic-src="staff/formulario" ic-target="#main_content"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Agregar persona al Staff</a>
		<?= $vcGridView; ?>
	</div>
</div>
<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/intercooler.min.js"></script>