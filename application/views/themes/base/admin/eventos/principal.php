<?php
	$vcMsjSrv = (!empty($vcMsjSrv))? $vcMsjSrv: ''; 
?>
    <div id="test">
    </div>
	<a href="#" ic-trigger-on="click" ic-verb="POST" ic-src="eventos/formulario" ic-target="#main_content">Clickeame</a>
	<script type="text/javascript">
        $(document).on('ready', function(){
            $('#test').load('eventos/listado');
        });
	</script>