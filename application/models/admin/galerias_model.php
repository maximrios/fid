<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galerias_model extends CI_Model {
    function __constructor() {
    }
    public function obtener($vcBuscar = '', $limit = 0, $offset = 9999999) {
        $sql = 'SELECT *
            FROM hits_galerias
            WHERE nombreGaleria LIKE ? 
            ORDER BY nombreGaleria DESC  
            limit ? offset ? ;';
        return $this->db->query($sql, array('%' . strtolower((string) $vcBuscar) . '%', (double) $offset, (double) $limit))->result_array();
    }
    public function numRegs($vcBuscar) {
        $sql = 'SELECT count(idGaleria) AS inCant FROM hits_galerias WHERE lower(CONCAT_WS(" ", nombreGaleria)) LIKE ? ;';
        $result = $this->db->query($sql, array(strtolower('%' . strtolower($vcBuscar) . '%')))->result_array();
        return $result[0]['inCant'];
    }
    public function obtenerUno($id) {
        $sql = 'SELECT * FROM hits_galerias WHERE idGaleria = ?;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    public function guardar($aParms) {
        if($aParms[0] == 'NULL' || $aParms[0] == 0) {
            $sql = 'INSERT INTO hits_galerias
                    (nombreGaleria
                    , uriGaleria) 
                    VALUES
                    ("'.$aParms[1].'"
                    , "'.$aParms[2].'");';
            $type = 1;
        }
        else {
            $sql = 'UPDATE hits_galerias SET 
                    nombreGaleria = "'.$aParms[1].'"
                    , uriGaleria = "'.$aParms[2].'"
                    WHERE idGaleria = '.$aParms[0].';';
            $type = 2;
        }
        $result = $this->db->query($sql);
        if($type==1){
            return $this->db->insert_id();
        }
        else {
            return true;
        }
    }
    public function guardarImagen($aParms) {
        $sql = 'UPDATE hits_noticias SET 
            thumbImagenNoticia = "'.$aParms[1].'"
            , detailImagenNoticia = "'.$aParms[2].'"
            WHERE idNoticia = '.$aParms[0].';';
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }

    public function cambiarEstado($aParms) {
        $sql = 'UPDATE hits_noticias SET publicadoNoticia = ? WHERE idNoticia = ?;';
        $result = $this->db->query($sql, $aParms);
        return TRUE;   
    }

    public function eliminar($id) {
        $sql = 'DELETE FROM hits_eventos WHERE idEvento = ?;';
        $result = $this->db->query($sql, array($id));
        return TRUE;
    }

}

// EOF noticias_model.php