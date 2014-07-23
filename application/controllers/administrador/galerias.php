<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galerias extends Ext_crud_Controller {
	function __construct() {
		parent::__construct();
        $this->load->library('hits/gridview');
		$this->load->model('admin/galerias_model', 'galerias');
		$this->_aReglas = array(
			array(
	            'field'   => 'idGaleria',
	            'label'   => 'Codigo de Galeria',
	            'rules'   => 'trim|max_length[80]|xss_clean'
	        )
	        ,array(
	            'field'   => 'nombreGaleria',
	            'label'   => 'Nombre de la galeria',
	            'rules'   => 'trim|xss_clean|required'
	        )
	        ,array(
	            'field'   => 'uriGaleria',
	            'label'   => 'Uri galeria',
	            'rules'   => 'trim|xss_clean'
	        )
		);
	}
	protected function _inicReg($boIsPostBack=false) {
        $this->_reg = array(
            'idGaleria' => null
            , 'nombreGaleria' => null
            , 'uriGaleria' => ''
        );
        $inId = ($this->input->post('idGaleria') !== false) ? $this->input->post('idGaleria') : 0;
        if ($inId != 0 && !$boIsPostBack) {
            $this->_reg = $this->noticias->obtenerUno($inId);
        } 
        else {
            $this->_reg = array(
                'idGaleria' => $inId
                , 'nombreGaleria' => $this->input->post('nombreGaleria')
                , 'uriGaleria' => set_value('uriGaleria')
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
                    , 'titulo' => 'Listado de Galerias'
                    , 'identificador' => 'idGaleria'
                )
        );
        $this->gridview->addColumn('idGaleria', '#', 'int');
        $this->gridview->addColumn('nombreGaleria', 'Nombre', 'text');
        $this->gridview->addParm('vcBuscar', $this->input->post('vcBuscar'));
        $ver = '<a href="#" ic-post-to="galerias/ver/{idGaleria}" title="Ver imagenes | videos de {nombreGaleria}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-picture"></span>&nbsp;</a>';
        $editar = '<a href="#" ic-post-to="galerias/formulario/{idGaleria}" title="Editar galeria {nombreGaleria}" ic-target="#main_content">&nbsp;<span class="glyphicon glyphicon-pencil"></span>&nbsp;</a>';
        $controles = $editar.$ver;
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
	function formulario($galeria=FALSE) {
        if($galeria) {
            $aData['Reg'] = $this->galerias->obtenerUno($galeria);
        }
        else {
            $aData['Reg'] = $this->_inicReg($this->input->post('vcForm'));    
        }
        $aData['formAction'] = 'galerias/guardar';
        $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
        $this->load->view('admin/galerias/formulario', $aData);
	}
    function ver($galeria=FALSE) {
        $galeria = $this->galerias->obtenerUno($galeria);
        if($galeria) {
            $aData['galeria'] = $galeria;
            $aData['formAction'] = 'galerias/upload';
            $aData['vcMsjSrv'] = $this->_aEstadoOper['message'];
            $this->load->view('admin/galerias/media', $aData);
        }
        else {
            $this->listado();
        }
    }
	function guardar() {
		antibotCompararLlave($this->input->post('vcForm'));
        $this->_inicReglas();
        if ($this->_validarReglas()) {
        	$this->_inicReg((bool) $this->input->post('vcForm'));
            $this->_aEstadoOper['status'] = $this->galerias->guardar(
                array(
                    $this->_reg['idGaleria']
                    , $this->_reg['nombreGaleria']
                    , url_title(strtolower($this->_reg['uriGaleria']))
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