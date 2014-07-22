<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contactos extends Ext_crud_Controller {
	function __construct() {
		parent::__construct();
        $this->load->library('hits/gridview');
		$this->load->model('admin/contactos_model', 'contactos');
		$this->_aReglas = array(
			array(
	            'field'   => 'idContacto',
	            'label'   => 'Codigo de Contacto',
	            'rules'   => 'trim|max_length[80]|xss_clean'
	        )
	        ,array(
	            'field'   => 'nombreContacto',
	            'label'   => 'Nombre de evento',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'telefonoContacto',
	            'label'   => 'Teléfono de contacto',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'emailContacto',
	            'label'   => 'Email de contacto',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'mensajeContacto',
	            'label'   => 'Mensaje de contacto',
	            'rules'   => 'trim|xss_clean'
	        )
		);
	}
	protected function _inicReg($boIsPostBack=false) {
        $this->_reg = array(
            'idContacto' => null
            , 'nombreContacto' => null
            , 'telefonoContacto' => ''
            , 'emailContacto' => ''
            , 'mensajeContacto' => null
            , 'fechaContacto' => ''
            , 'estadoContacto' => null
        );
        $inId = ($this->input->post('idContacto') !== false) ? $this->input->post('idContacto') : 0;
        if ($inId != 0 && !$boIsPostBack) {
            $this->_reg = $this->noticias->obtenerUno($inId);
        } 
        else {
            $this->_reg = array(
                'idContacto' => $inId
                , 'nombreContacto' => $this->input->post('nombreContacto')
                , 'telefonoContacto' => set_value('telefonoContacto')
                , 'emailContacto' => set_value('emailContacto')
                , 'mensajeContacto' => set_value('mensajeContacto')
                , 'fechaContacto' => set_value('fechaContacto')
                , 'estadoContacto' => set_value('estadoContacto')
            );
        }
        return $this->_reg;
    }
	protected function _inicReglas() {
        $val = $this->form_validation->set_rules($this->_aReglas);
    }
	function index() {
		$aData = array();
		$this->_content = $this->load->view('admin/contactos/principal', $aData, true);
		$this->_menu = menu_ul('contactos');
		parent::index();
	}
	public function listado() {
        $vcBuscar = ($this->input->post('vcBuscar') === FALSE) ? '' : $this->input->post('vcBuscar');
        $this->gridview->initialize(
                array(
                    'sResponseUrl' => 'administrator/contactos/listado'
                    , 'iTotalRegs' => $this->contactos->numRegs($vcBuscar)
                    , 'iPerPage' => ($this->input->post('per_page')==FALSE)? 10: $this->input->post('per_page')
                    , 'border' => FALSE
                    , 'sFootProperties' => 'class="paginador"'
                    , 'titulo' => 'Listado de Mensajes'
                    , 'identificador' => 'idContacto'
                )
        );
        $this->gridview->addColumn('idContacto', '#', 'int');
        $this->gridview->addColumn('nombreContacto', 'Nombre', 'text');
        $this->gridview->addColumn('emailContacto', 'Email', 'text');
        $this->gridview->addColumn('telefonoContacto', 'Teléfono', 'int');
        $this->gridview->addColumn('fechaContacto', 'Fecha', 'datetime');
        $this->gridview->addParm('vcBuscar', $this->input->post('vcBuscar'));
        $ver = '<a href="#" ic-post-to="contactos/formulario/{idContacto}" title="Ver mensaje de {nombreContacto}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;</a>';
        $eliminar = '<a href="#" ic-post-to="contactos/eliminar/{idContacto}" title="Eliminar mensaje de {nombreContacto}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-trash"></span>&nbsp;</a>';
        $controles = $ver.$eliminar;
        $this->gridview->addControl('inIdFaqCtrl', array('face' => $controles, 'class' => 'acciones'));
        $this->_rsRegs = $this->contactos->obtener($vcBuscar, $this->gridview->getLimit1(), $this->gridview->getLimit2());
        $this->load->view('admin/contactos/listado'
            , array(
                'vcGridView' => $this->gridview->doXHtml($this->_rsRegs)
                , 'vcMsjSrv' => $this->_aEstadoOper['message']
                , 'txtvcBuscar' => $vcBuscar
            )
        );
    }
	function formulario($contacto=FALSE) {
        if($contacto) {
            $aData['Reg'] = $this->contactos->obtenerUno($contacto);
            $aData['Reg']['fechaContacto'] = GetDateTimeFromISO($aData['Reg']['fechaContacto']);
        }
        else {
            $aData['Reg'] = $this->_inicReg($this->input->post('vcForm'));    
        }
        $aData['formAction'] = 'contactos/guardar';
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $this->load->view('admin/contactos/formulario', $aData);
	}
	function guardar() {
		antibotCompararLlave($this->input->post('vcForm'));
        $this->_inicReglas();
        if ($this->_validarReglas()) {
        	$this->_inicReg((bool) $this->input->post('vcForm'));
            $this->_aEstadoOper['status'] = $this->eventos->guardar(
                array(
                    $this->_reg['idEvento']
                    , $this->_reg['nombreEvento']
                    , $this->_reg['descripcionEvento']
                    , GetDateTimeFromFrenchToISO($this->_reg['fechaDesdeEvento'])
                    , GetDateTimeFromFrenchToISO($this->_reg['fechaHastaEvento'])
                    , $this->_reg['domicilioEvento']
                    , $this->_reg['telefonoEvento']
                    , $this->_reg['emailEvento']
                    , url_title(strtolower($this->_reg['nombreEvento']))
                )
            );
        }
        else {
        	$this->_aEstadoOper['status'] = 0;
            $this->_aEstadoOper['message'] = validation_errors();
        }
        if ($this->_aEstadoOper['status'] > 0) {
            $this->listado();
        }
        else {
            $this->formulario();
        }
	}
	public function eliminar($mensaje) {
        $mensaje = $this->contactos->obtenerUno($mensaje);
        if($mensaje) {
            $this->_aEstadoOper['status'] = $this->contactos->eliminar($mensaje['idContacto']);
            if ($this->_aEstadoOper['status'] > 0) {
                $this->_aEstadoOper['message'] = 'Se eliminó el mensaje correctamente.';
            } 
            else {
                $this->_aEstadoOper['message'] = $this->_obtenerMensajeErrorDB($this->_aEstadoOper['status']);
            }
        }
        else {
            $this->_aEstadoOper['message'] = 'Ocurrió un error al eliminar el mensaje. Consulte con el administrador del sistema.';
        }
        $this->_aEstadoOper['message'] = $this->messages->do_message(array('message' => $this->_aEstadoOper['message'], 'type' => ($this->_aEstadoOper['status'] > 0) ? 'success' : 'danger'));
        $this->listado();
    }
}