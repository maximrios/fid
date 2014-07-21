<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?=config_item('ext_theme_folder')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=config_item('ext_theme_folder')?>css/login.css">
	<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/jquery.js"></script>
	<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/intercooler.min.js"></script>

</head>
<body>
	<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"><a href="<?=config_item('ext_site_url')?>" target="_blank" alt="Fundacion para la Integración y el desarrollo de comunidades" title="Fundacion para la Integración y el desarrollo de comunidades"><img src="../assets/images/logo_fid.jpg" alt="Fundacion para la Integración y el desarrollo de comunidades" width="100"></a></div>
            <div class="form-box">
                <form ic-post-to="autenticar">
                    <input name="nombreUsuario" type="text" placeholder="Usuario">
                    <input type="password" name="passwordUsuario" placeholder="Contraseña">
                    <button class="btn btn-info btn-block login" type="submit">Ingresar</button>
                </form>
            </div>
        </div>
        
</div>
</body>
</html>