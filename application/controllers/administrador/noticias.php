<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Noticias extends Ext_crud_controller {
    function __construct() {
        parent::__construct();
        $this->load->library('hits/gridview');
        $this->load->model('admin/noticias_model', 'noticias');
        $this->_aReglas = array(
            array(
                'field' => 'idNoticia',
                'label' => 'Noticia',
                'rules' => 'trim|xss_clean'
            ),
            array(
                'field' => 'tituloNoticia',
                'label' => 'Título',
                'rules' => 'trim|required|min_length[5]|max_length[300]|xss_clean'
            ),
            array(
                'field' => 'epigrafeNoticia',
                'label' => 'Epígrafe',
                'rules' => 'trim|required|min_length[5]|max_length[100]|xss_clean'
            ),
            array(
                'field' => 'descripcionNoticia',
                'label' => 'Descripción',
                'rules' => 'trim|required|min_length[5]|max_length[5000]|xss_clean'
            ),
            array(
                'field' => 'fechaDesdeNoticia',
                'label' => 'Fecha de Inicio',
                'rules' => 'trim|xss_clean|required'
            ),
        );
    }
    protected function _inicReg($boIsPostBack=false) {
        $this->_reg = array(
            'idNoticia' => null
            , 'fechaDesdeNoticia' => null
            , 'tituloNoticia' => null
            , 'epigrafeNoticia' => null
            , 'descripcionNoticia' => ''
            , 'estadoNoticia' => null
        );
        $inId = ($this->input->post('idNoticia') !== false) ? $this->input->post('idNoticia') : 0;
        if ($inId != 0 && !$boIsPostBack) {
            $this->_reg = $this->noticias->obtenerUno($inId);
        } else {
            $this->_reg = array(
                'idNoticia' => $inId
                , 'fechaDesdeNoticia' => set_value('fechaDesdeNoticia')
                , 'tituloNoticia' => set_value('tituloNoticia')
                , 'epigrafeNoticia' => set_value('epigrafeNoticia')
                , 'descripcionNoticia' => set_value('descripcionNoticia')
                , 'estadoNoticia' => ((bool)(set_value('estadoNoticia')))
            );
        }
        return $this->_reg;
    }
    protected function _inicReglas() {
        $val = $this->form_validation->set_rules($this->_aReglas);
    }
    public function index() {
        $this->_content = $this->load->view('admin/noticias/principal', array(), true);
        $this->_menu = menu_ul('noticias');
        parent::index();
    }
    public function listado() {
        $vcBuscar = ($this->input->post('vcBuscar') === FALSE) ? '' : $this->input->post('vcBuscar');
        $this->gridview->initialize(
                array(
                    'sResponseUrl' => 'administrator/noticias/listado'
                    , 'iTotalRegs' => $this->noticias->numRegs($vcBuscar)
                    , 'iPerPage' => ($this->input->post('per_page')==FALSE)? 10: $this->input->post('per_page')
                    , 'border' => FALSE
                    , 'sFootProperties' => 'class="paginador"'
                    , 'titulo' => 'Listado de Noticias'
                    , 'identificador' => 'idNoticia'
                )
        );
        $this->gridview->addColumn('idNoticia', '#', 'int');
        $this->gridview->addColumn('tituloNoticia', 'Título', 'text');
        $this->gridview->addColumn('epigrafeNoticia', 'Epígrafe', 'tinyText');
        $this->gridview->addColumn('fechaDesdeNoticia', 'Publicación', 'date');
        $this->gridview->addColumn('estadoNoticia', 'Estado', 'text');
        $this->gridview->addParm('vcBuscar', $this->input->post('vcBuscar'));
        $publicar = '<a href="#" name="pedon" value="12" ic-post-to="noticias/publicacion/{idNoticia}" title="Cambiar estado de {tituloNoticia}" ic-target="#main_content" rel="{\'idNoticia\': {idNoticia}}">&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;</a>';
        $editar = '<a href="#" name="pen" ic-attr-src="rel" ic-post-to="noticias/formulario/{idNoticia}" title="Modificar la noticia {tituloNoticia}"  ic-target="#main_content" rel="main:2">&nbsp;<span class="glyphicon glyphicon-pencil"></span>&nbsp;</a>';
        $eliminar = '<a href="#" ic-post-to="noticias/eliminar/{idNoticia}" title="Eliminar noticia {tituloNoticia}" ic-target="#main_content" rel="{\'idNoticia\': {idNoticia}}">&nbsp;<span class="glyphicon glyphicon-trash"></span>&nbsp;</a>';
        $controles = $publicar.$editar.$eliminar;
        $this->gridview->addControl('inIdFaqCtrl', array('face' => $controles, 'class' => 'acciones'));
        $this->_rsRegs = $this->noticias->obtener($vcBuscar, $this->gridview->getLimit1(), $this->gridview->getLimit2());
        $this->load->view('admin/noticias/listado'
            , array(
                'vcGridView' => $this->gridview->doXHtml($this->_rsRegs)
                , 'vcMsjSrv' => $this->_aEstadoOper['message']
                , 'txtvcBuscar' => $vcBuscar
            )
        );
    }
    public function formulario($noticia=FALSE) {
        if($noticia) {
            $aData['Reg'] = $this->noticias->obtenerUno($noticia);
        }
        else {
            $aData['Reg'] = $this->_inicReg($this->input->post('vcForm'));    
        }
        $aData['formAction'] = 'noticias/guardar';
        //$aData['mensajeServer'] = $this->_aEstadoOper['message'];
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $this->load->view('admin/noticias/formulario', $aData);
    }
    public function consulta() {
        $this->load->view('lib_autenticacion/frm-faq-borrar'
                , array(
            'Reg' => $this->_inicReg($this->input->post('vcForm'))
            , 'vcFrmAction' => 'autenticacion/faq/eliminar'
            , 'vcMsjSrv' => $this->_aEstadoOper['message']
            , 'vcAccion' => ($this->_reg['inIdFaq'] > 0) ? 'Eliminar' : ''
                )
        );
    }
    function ver($noticia) {
        $aData['noticia'] = $this->noticia->obtenerUno($noticia);
        if($aData['noticia']) {
            $this->_SiteInfo['title'] .= ' - '.$aData['noticia']['tituloNoticia'];
            $aData['comentarios'] = $this->noticia->obtenerComentarios($aData['noticia']['idNoticia']);
            $this->_vcContentPlaceHolder = $this->load->view('administrator/hits/noticias/ver', $aData, true);
            parent::index();
        }
        else {
        }
    }
    public function guardar() {
        antibotCompararLlave($this->input->post('vcForm'));
        $this->_inicReglas();
        if ($this->_validarReglas()) {
            $this->_inicReg((bool) $this->input->post('vcForm'));
            $this->_aEstadoOper['status'] = $this->noticias->guardar(
                array(
                    $this->_reg['idNoticia']
                    , $this->_reg['tituloNoticia']
                    , $this->_reg['epigrafeNoticia']
                    , $this->_reg['descripcionNoticia']
                    , GetDateTimeFromFrenchToISO($this->_reg['fechaDesdeNoticia'])
                    , url_title(strtolower($this->_reg['tituloNoticia']))
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
    public function publicacion($noticia) {
        $noticia = $this->noticias->obtenerUno($noticia);
        ($noticia['estadoNoticia'] == 0)? $estado=1 : $estado=0;
        $this->_aEstadoOper['status'] = $this->noticias->cambiarEstado(
            array(
                $estado
                , $noticia['idNoticia']
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
    public function eliminar($noticia) {
        $noticia = $this->noticias->obtenerUno($noticia);
        if($noticia) {
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
        die();
        $this->_aEstadoOper['status'] = $this->noticias->cambiarEstado(
            array(
                $estado
                , $noticia['idNoticia']
            )
        );
        

        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'alert'));

        if ($this->_aEstadoOper['status'] > 0) {
            $this->listado();
        } else {
            $this->formulario();
        }
    }
}


    

?>