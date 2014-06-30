<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panel de Administracion</title>
	<link rel="stylesheet" href="<?=config_item('ext_theme_folder')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=config_item('ext_theme_folder')?>css/hits.css">
	<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/jquery.js"></script>
	<script type="text/javascript" src="<?=config_item('ext_theme_folder')?>js/intercooler.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-vertical">
                    <span class="sr-only">Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?=$PanelInfo['titulo'];?></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->autenticacion->apellidoPersona().', '.$this->autenticacion->nombrePersona();?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="aut/logout"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <header>
    </header>
    <div id="wrapper" class="active">
        <div id="sidebar-wrapper" class="sidebar-holder">
            <ul id="sidebar_menu" class="sidebar-nav">
                <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
            </ul>
            <ul class="sidebar-nav" id="sidebar"> 
                <?=$menu?>    
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content inset">
                <br>
                <div class="row">
                    <div class="col-md-12" style="padding-top:5px;">
                        <?=$main_content;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>