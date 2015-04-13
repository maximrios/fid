<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Programas extends Ext_crud_controller {
    function __construct() {
        parent::__construct();
        $this->load->library('hits/gridview');
        $this->load->model('admin/programas_model', 'programas');

        $this->_aReglas = array(
            array(
                'field' => 'idPrograma',
                'label' => 'Programa',
                'rules' => 'trim|xss_clean'
            ),
            array(
                'field' => 'nombrePrograma',
                'label' => 'Nombre',
                'rules' => 'trim|required|min_length[5]|max_length[300]|xss_clean'
            ),
            array(
                'field' => 'descripcionPrograma',
                'label' => 'Contenido',
                'rules' => 'trim|required|min_length[5]|xss_clean'
            ),
        );
    }
    protected function _inicReg($boIsPostBack=false) {
        $this->_reg = array(
            'idPrograma' => null
            , 'nombrePrograma' => null
            , 'descripcionPrograma' => null
        );
        $inId = ($this->input->post('idPrograma') !== false) ? $this->input->post('idPrograma') : 0;
        if ($inId != 0 && !$boIsPostBack) {
            $this->_reg = $this->noticias->obtenerUno($inId);
        } else {
            $this->_reg = array(
                'idPrograma' => $inId
                , 'nombrePrograma' => set_value('nombrePrograma')
                , 'descripcionPrograma' => set_value('descripcionPrograma')
            );
        }
        return $this->_reg;
    }
    protected function _inicReglas() {
        $val = $this->form_validation->set_rules($this->_aReglas);
    }
    public function index() {
        $this->_content = $this->load->view('admin/programas/principal', array(), true);
        $this->_menu = menu_ul('programas');
        parent::index();
    }
    public function listado() {
        $vcBuscar = ($this->input->post('buscarGridview') === FALSE) ? '' : $this->input->post('buscarGridview');
        $this->gridview->initialize(
                array(
                    'sResponseUrl' => 'administrator/programas/listado'
                    , 'iTotalRegs' => $this->programas->numRegs($vcBuscar)
                    , 'iPerPage' => ($this->input->post('per_page')==FALSE)? 10: $this->input->post('per_page')
                    , 'border' => FALSE
                    , 'sFootProperties' => 'class="paginador"'
                    , 'titulo' => 'Listado de Programas'
                    , 'identificador' => 'idPrograma'
                )
        );
        $this->gridview->addColumn('idPrograma', '#', 'int');
        $this->gridview->addColumn('nombrePrograma', 'Título', 'text');
        $this->gridview->addColumn('estadoPrograma', 'Estado', 'text');
        $this->gridview->addParm('vcBuscar', $this->input->post('vcBuscar'));
        $publicar = '<a href="#" ic-post-to="programas/publicacion/{idPrograma}" title="Cambiar estado de {nombrePrograma}" ic-target="#main_content" rel="{\'idPrograma\': {idPrograma}}">&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;</a>';
        $imagenes = '<a href="#" name="pen" ic-attr-src="rel" ic-post-to="programas/imagenes/{idPrograma}" title="Administrar imagenes para el programa {nombrePrograma}"  ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-picture"></span>&nbsp;</a>';
        $editar = '<a href="#" ic-post-to="programas/formulario/{idPrograma}" title="Modificar el programa {nombrePrograma}"  ic-target="#main_content" rel="main:2">&nbsp;<span class="glyphicon glyphicon-pencil"></span>&nbsp;</a>';
        $controles = $publicar.$editar.$imagenes;
        $this->gridview->addControl('inIdFaqCtrl', array('face' => $controles, 'class' => 'acciones', 'style' => 'width:96px;'));
        $this->_rsRegs = $this->programas->obtener($vcBuscar, $this->gridview->getLimit1(), $this->gridview->getLimit2());
        $this->load->view('admin/programas/listado'
            , array(
                'vcGridView' => $this->gridview->doXHtml($this->_rsRegs)
                , 'vcMsjSrv' => $this->_aEstadoOper['message']
                , 'txtvcBuscar' => $vcBuscar
            )
        );
    }
    public function formulario($noticia=FALSE) {
        $this->load->library('hits/ckeditor', array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/themes/base/ckeditor/", 'outPut' => true));
        if($noticia) {
            $aData['Reg'] = $this->programas->obtenerUno($noticia);
        }
        else {
            $aData['Reg'] = $this->_inicReg($this->input->post('vcForm'));    
        }
        $aData['formAction'] = 'programas/guardar';
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $this->load->view('admin/programas/formulario', $aData);
    }
    public function imagenes($programa=FALSE) {
        if($programa) {
            $aData['Reg'] = $this->programas->obtenerUno($programa);
        }
        else {
            $aData['Reg'] = $this->_inicReg($this->input->post('vcForm'));
        }
        $aData['formAction'] = 'programas/guardar';
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $this->load->view('admin/programas/imagenes', $aData);
    }
    public function guardar() {
        antibotCompararLlave($this->input->post('vcForm'));
        $this->_inicReglas();
        if ($this->_validarReglas()) {
            $this->_inicReg((bool) $this->input->post('vcForm'));
            $this->_aEstadoOper['status'] = $this->programas->guardar(
                array(
                    $this->_reg['idPrograma']
                    , $this->_reg['nombrePrograma']
                    , $this->_reg['descripcionPrograma']
                    , url_title(strtolower($this->_reg['nombrePrograma']))
                    , 1
                )
            );
            if ($this->_aEstadoOper['status'] > 0) {
                $this->_aEstadoOper['message'] = 'El registro fue guardado correctamente.';
            } 
            else {
                $this->_aEstadoOper['message'] = $this->_obtenerMensajeErrorDB($this->_aEstadoOper['status']);
            }
        } 
        else {
            $this->_aEstadoOper['status'] = 0;
            $this->_aEstadoOper['message'] = validation_errors();
        }
        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'danger'));
        if ($this->_aEstadoOper['status'] > 0) {
            $this->listado();
        } 
        else {
            $this->formulario();
        }
    }
    public function publicacion($programa) {
        $programa = $this->programas->obtenerUno($programa);
        ($programa['estadoPrograma'] == 0)? $estado=1 : $estado=0;
        $this->_aEstadoOper['status'] = $this->programas->cambiarEstado(
            array(
                $estado
                , $programa['idPrograma']
            )
        );
        if ($this->_aEstadoOper['status'] > 0) {
            $this->_aEstadoOper['message'] = 'Se modificó el estado correctamente.';
        } else {
            $this->_aEstadoOper['message'] = $this->_obtenerMensajeErrorDB($this->_aEstadoOper['status']);
        }

        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'alert'));

        if ($this->_aEstadoOper['status'] > 0) {
            $this->listado();
        } else {
            $this->formulario();
        }
    }
    public function eliminar($noticia=FALSE) {
        $noticia = $this->noticias->obtenerUno($noticia);
        if($noticia) {
            $this->_aEstadoOper['status'] = $this->noticias->eliminar($noticia['idNoticia']);
            if ($this->_aEstadoOper['status'] > 0) {
                $this->_aEstadoOper['message'] = 'Se eliminó la noticia correctamente.';
            } 
            else {
                $this->_aEstadoOper['message'] = $this->_obtenerMensajeErrorDB($this->_aEstadoOper['status']);
            }
        }
        else {
            $this->_aEstadoOper['message'] = 'Ocurrió un error al eliminar la noticia. Consulte con el administrador del sistema.';
        }
        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'danger'));
        $this->listado();
    }
    public function upload() {
        $programa = $this->programas->obtenerUno($this->input->post('idPrograma'));
        if($programa) {
            $path = 'assets/images/programas/';
            $config = array(
                'cantidad_imagenes' => 1
                , 'upload_path' => $path
                , 'allowed_types' => 'jpg|png'
                , 'max_size' => 5000
                , 'create_thumb' => true
                , 'thumbs' => array(
                    array('thumb_marker' => '_thumb', 'width' => 215)
                    , array('thumb_marker' => '_thumb_detalle', 'width' => 596)
                )
            );
            $this->load->library('hits/uploads', array(), 'uploads');
            $data = $this->uploads->do_upload($config);
            if($data) {
                $this->programas->guardarImagen(
                    array(
                        $programa['idPrograma']
                        , $data[0]['pathCompleto']
                        , $data[0]['thumbnails'][0]['pathThumbnail']
                        , $data[0]['thumbnails'][1]['pathThumbnail']
                    )
                );
                $this->_aEstadoOper['status'] = TRUE;    
                $this->_aEstadoOper['message'] = 'Se subio la imagen correctamente.';
                $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'danger'));
            }
        }
        else {
            echo "no entro";
        }
    }
    public function succesUpload($noticia) {
        $this->_aEstadoOper['status'] = 1;
        $this->_aEstadoOper['message'] = 'Se subió el archivo correctamente.';
        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'danger'));
        $this->imagenes($noticia);
    }
}


    

?>