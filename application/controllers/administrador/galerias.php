<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galerias extends Ext_crud_Controller {
	function __construct() {
		parent::__construct();
        $this->load->library('hits/gridview');
		$this->load->model('admin/galerias_model', 'galerias');
		$this->_aReglas = array(
			array(
	            'field'   => 'idEvento',
	            'label'   => 'Codigo de Evento',
	            'rules'   => 'trim|max_length[80]|xss_clean'
	        )
	        ,array(
	            'field'   => 'nombreEvento',
	            'label'   => 'Nombre de evento',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'descripcionEvento',
	            'label'   => 'Descripcion del evento',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'fechaDesdeEvento',
	            'label'   => 'Fecha de inicio',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'fechaHastaEvento',
	            'label'   => 'Fecha de fin',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'domicilioEvento',
	            'label'   => 'Domicilio de evento',
	            'rules'   => 'trim|xss_clean'
	        )
	        ,array(
	            'field'   => 'telefonoEvento',
	            'label'   => 'Telefono de evento',
	            'rules'   => 'trim|xss_clean'
	        )
	        ,array(
	            'field'   => 'emailEvento',
	            'label'   => 'Correo electronico de evento',
	            'rules'   => 'trim|xss_clean'
	        )
		);
	}
	protected function _inicReg($boIsPostBack=false) {
        $this->_reg = array(
            'idEvento' => null
            , 'nombreEvento' => null
            , 'fechaDesdeEvento' => ''
            , 'fechaHastaEvento' => ''
            , 'descripcionEvento' => null
            , 'domicilioEvento' => ''
            , 'telefonoEvento' => null
            , 'emailEvento' => null
        );
        $inId = ($this->input->post('idEvento') !== false) ? $this->input->post('idEvento') : 0;
        if ($inId != 0 && !$boIsPostBack) {
            $this->_reg = $this->noticias->obtenerUno($inId);
        } 
        else {
            $this->_reg = array(
                'idEvento' => $inId
                , 'nombreEvento' => $this->input->post('nombreEvento')
                , 'fechaDesdeEvento' => set_value('fechaDesdeEvento')
                , 'fechaHastaEvento' => set_value('fechaHastaEvento')
                , 'descripcionEvento' => set_value('descripcionEvento')
                , 'domicilioEvento' => set_value('domicilioEvento')
                , 'telefonoEvento' => set_value('telefonoEvento')
                , 'emailEvento' => set_value('emailEvento')
            );
        }
        return $this->_reg;
    }
	protected function _inicReglas() {
        $val = $this->form_validation->set_rules($this->_aReglas);
    }
	function index() {
		$aData = array();
		$this->_content = $this->load->view('admin/galerias/principal', $aData, true);
		$this->_menu = menu_ul('galerias');
		parent::index();
	}
	public function listado() {
        $vcBuscar = ($this->input->post('vcBuscar') === FALSE) ? '' : $this->input->post('vcBuscar');
        $this->gridview->initialize(
                array(
                    'sResponseUrl' => 'administrator/galerias/listado'
                    , 'iTotalRegs' => $this->galerias->numRegs($vcBuscar)
                    , 'iPerPage' => ($this->input->post('per_page')==FALSE)? 10: $this->input->post('per_page')
                    , 'border' => FALSE
                    , 'sFootProperties' => 'class="paginador"'
                    , 'titulo' => 'Listado de Mensajes'
                    , 'identificador' => 'idGaleria'
                )
        );
        $this->gridview->addColumn('idGaleria', '#', 'int');
        $this->gridview->addColumn('nombreGaleria', 'Nombre', 'text');
        $this->gridview->addParm('vcBuscar', $this->input->post('vcBuscar'));
        $ver = '<a href="#" ic-post-to="contactos/formulario/{idGaleria}" title="Ver mensaje de {nombreGaleria}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;</a>';
        $eliminar = '<a href="#" ic-post-to="contactos/eliminar/{idGaleria}" title="Eliminar mensaje de {nombreGaleria}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-trash"></span>&nbsp;</a>';
        $controles = $ver.$eliminar;
        $this->gridview->addControl('inIdFaqCtrl', array('face' => $controles, 'class' => 'acciones'));
        $this->_rsRegs = $this->galerias->obtener($vcBuscar, $this->gridview->getLimit1(), $this->gridview->getLimit2());
        $this->load->view('admin/galerias/listado'
            , array(
                'vcGridView' => $this->gridview->doXHtml($this->_rsRegs)
                , 'vcMsjSrv' => $this->_aEstadoOper['message']
                , 'txtvcBuscar' => $vcBuscar
            )
        );
    }
	function formulario() {
		$aData['formAction'] = 'eventos/guardar';
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $aData['video_icon'] = 'ok';
        $aData['video_legend'] = 'Check video';
        $this->load->view('admin/galerias/formulario', $aData);
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
	public function eliminar() {
		antibotCompararLlave($this->input->post('vcForm'));
    	$this->_aEstadoOper['status'] = $this->contactos->eliminar($this->input->post('idContacto'));
	   	if($this->_aEstadoOper['status'] > 0) {
			$this->_aEstadoOper['message'] = 'El registro fue eliminado con exito.';
	   	} 
	   	else {
			$this->_aEstadoOper['message'] = $this->_obtenerMensajeErrorDB($this->_aEstadoOper['status']);
	   	}
		$this->_aEstadoOper['message'] = $this->messages->do_message(array('message'=>$this->_aEstadoOper['message'],'type'=> ($this->_aEstadoOper['status'] > 0)?'success':'alert'));		
       	$this->listado();
	}
    public function check_youtube() {
        echo "aca estamos";
        die();
    }
    public function upload() {
        print_r($_POST);
    }
}