<?php
$config['navigation'] = array(
            'inicio' => array(
                'id'     => 'inicio',
                'title'  => 'Inicio',
                'link'   => 'admin',
                'icon'   => 'home'
            ),
            'actuaciones' => array(
                'id'     => 'actuaciones',
                'title'  => 'Actuaciones',
                'link'   => 'administrator/actuaciones',
                'icon'   => 'file'
            ),
            'bandeja' => array(
                'id'     => 'bandeja',
                'title'  => 'Bandeja',
                'link'   => 'administrator/pases/bandeja',
                'icon'   => 'inbox'
            ),
            'pendientes' => array(
                'id'     => 'pendientes',
                'title'  => 'Pendientes',
                'link'   => 'administrator/pases/ppendientes',
                'icon'   => 'tags'
            ),
            'pases' => array(
                'id'     => 'pases',
                'title'  => 'Pases',
                'link'   => 'administrator/pases',
                'icon'   => 'refresh'
            ),
            'logout' => array(
                'id'     => 'logout',
                'title'  => 'Cerrar Sesión',
                'link'   => 'aut/logout',
                'icon'   => 'off'
            )
        );
/* End of file navigation.php */
/* Location: ./application/config/navigation.php */