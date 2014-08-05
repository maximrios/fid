<?php
$config['navigation'] = array(
                'inicio' => array(
                'id'     => 'inicio',
                'title'  => 'Inicio',
                'link'   => 'admin',
                'icon'   => 'home'
            ),
            'datos' => array(
                'id'     => 'datos',
                'title'  => 'Datos',
                'link'   => 'administrador/datos',
                'icon'   => 'wrench'
            ),
            'eventos' => array(
                'id'     => 'eventos',
                'title'  => 'Eventos',
                'link'   => 'administrador/eventos',
                'icon'   => 'calendar'
            ),
            'programas' => array(
                'id'     => 'programas',
                'title'  => 'Programas',
                'link'   => 'administrador/programas',
                'icon'   => 'file'
            ),
            'galerias' => array(
                'id'     => 'galerias',
                'title'  => 'Galerias',
                'link'   => 'administrador/galerias',
                'icon'   => 'picture'
            ),
            'noticias' => array(
                'id'     => 'noticias',
                'title'  => 'Noticias',
                'link'   => 'administrador/noticias',
                'icon'   => 'list-alt'
            ),
            'staff' => array(
                'id'     => 'staff',
                'title'  => 'Staff',
                'link'   => 'administrador/staff',
                'icon'   => 'user'
            ),
            'contactos' => array(
                'id'     => 'contactos',
                'title'  => 'Contactos',
                'link'   => 'administrador/contactos',
                'icon'   => 'bookmark'
            ),
            'newsletter' => array(
                'id'     => 'newsletter',
                'title'  => 'Newsletter',
                'link'   => 'administrador/newsletter',
                'icon'   => 'th-list'
            ),
            'logout' => array(
                'id'     => 'logout',
                'title'  => 'Cerrar Sesión',
                'link'   => 'auth/logout',
                'icon'   => 'off'
            )
        );
$config['navigation_template'] = array(
                'inicio' => array(
                'id'     => 'inicio',
                'title'  => 'Inicio',
                'link'   => 'inicio',
            ),
            'eventos' => array(
                'id'     => 'fudacion',
                'title'  => 'Quienes Somos',
                'link'   => 'fundacion',
            ),
            'programas' => array(
                'id'     => 'programas',
                'title'  => 'Programas',
                'link'   => 'programas',
            ),
            'noticias' => array(
                'id'     => 'noticias',
                'title'  => 'Noticias',
                'link'   => 'noticias',
            ),
            'galerias' => array(
                'id'     => 'galerias',
                'title'  => 'Galeria',
                'link'   => 'galerias',
            ),
            'contacto' => array(
                'id'     => 'contacto',
                'title'  => 'Contacto',
                'link'   => 'contacto',
            ),
        );
/* End of file navigation.php */
/* Location: ./application/config/navigation.php */