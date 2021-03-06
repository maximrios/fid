<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Noticias_model extends CI_Model {
    function __constructor() {
    }
    public function obtener($vcBuscar = '', $limit = 0, $offset = 9999999) {
        $sql = 'SELECT *, IF(estadoNoticia=1,"Publicado","Sin Publicar") as estadoNoticia
            FROM hits_noticias
            WHERE tituloNoticia LIKE ? 
            ORDER BY fechaDesdeNoticia DESC  
            limit ? offset ? ;';
        return $this->db->query($sql, array('%' . strtolower((string) $vcBuscar) . '%', (double) $offset, (double) $limit))->result_array();
    }
    public function obtenerNoticias($limit = 0, $offset = 9999999) {
        $sql = 'SELECT *
            FROM hits_noticias
            WHERE estadoNoticia = 1
            ORDER BY fechaDesdeNoticia DESC  
            limit ? offset ? ;';
        return $this->db->query($sql, array((double) $offset, (double) $limit))->result_array();
    }
    public function numRegs($vcBuscar) {
        $sql = 'SELECT count(idNoticia) AS inCant FROM hits_noticias WHERE lower(CONCAT_WS(" ", tituloNoticia, descripcionNoticia)) LIKE ? ;';
        $result = $this->db->query($sql, array(strtolower('%' . strtolower($vcBuscar) . '%')))->result_array();
        return $result[0]['inCant'];
    }
    public function obtenerUno($id) {
        $sql = 'SELECT * FROM hits_noticias WHERE idNoticia = ?;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    public function guardar($aParms) {
        if($aParms[0] == 'NULL' || $aParms[0] == 0) {
            $sql = 'INSERT INTO hits_noticias
                    (tituloNoticia
                    , epigrafeNoticia
                    , descripcionNoticia
                    , fechaDesdeNoticia
                    , uriNoticia
                    , estadoNoticia) 
                    VALUES
                    ("'.$aParms[1].'"
                    , "'.$aParms[2].'"
                    , "'.$aParms[3].'"
                    , "'.$aParms[4].'"
                    , "'.$aParms[5].'"
                    , '.$aParms[6].');';
            $type = 1;
        }
        else {
            $sql = 'UPDATE hits_noticias SET 
                    tituloNoticia = "'.$aParms[1].'"
                    , epigrafeNoticia = "'.$aParms[2].'"
                    , descripcionNoticia = "'.$aParms[3].'"
                    , fechaDesdeNoticia = "'.$aParms[4].'"
                    , uriNoticia = "'.$aParms[5].'"
                    , estadoNoticia = '.$aParms[6].'
                    WHERE idNoticia = '.$aParms[0].';';
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
    public function obtenerImagenes($idNoticia) {
        $sql = 'SELECT *
            FROM hits_noticias_imagenes
            WHERE idNoticia = ?;';
        return $this->db->query($sql, array((int) $idNoticia))->result_array();
    }
    public function obtenerUnoImagen($id) {
        $sql = 'SELECT * FROM hits_noticias_imagenes WHERE idNoticiaImagen = ?;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    public function guardarImagen($aParms) {
        $sql = 'INSERT INTO hits_noticias_imagenes
            (pathNoticiaImagen
            , thumbNoticiaImagen
            , idNoticia) 
            VALUES
            ("'.$aParms[0].'"
            , "'.$aParms[1].'"
            , "'.$aParms[2].'");';
        $result = $this->db->query($sql, $aParms);
        return $this->db->insert_id();
    }
    public function checkImagen($idNoticia, $idNoticiaImagen) {
        $sql = 'UPDATE hits_noticias_imagenes SET checkNoticiaImagen = 0 WHERE idNoticia = ?;';
        $result = $this->db->query($sql, (int) $idNoticia);
        $sql2 = 'UPDATE hits_noticias_imagenes SET checkNoticiaImagen = 1 WHERE idNoticiaImagen = ?;';
        $result2 = $this->db->query($sql2, (int) $idNoticiaImagen);
        return TRUE;   
    }
    public function eliminarImagen($idNoticiaImagen) {
        $sql = 'DELETE FROM hits_noticias_imagenes
            WHERE idNoticiaImagen = ?;';
        $result = $this->db->query($sql, $idNoticiaImagen);
        return TRUE;
    }

    public function cambiarEstado($aParms) {
        $sql = 'UPDATE hits_noticias SET estadoNoticia = ? WHERE idNoticia = ?;';
        $result = $this->db->query($sql, $aParms);
        return TRUE;   
    }

    public function eliminar($id) {
        $sql = 'DELETE FROM hits_noticias WHERE idNoticia = ?;';
        $result = $this->db->query($sql, array($id));
        return TRUE;
    }

    public function dropdownNoticiasTipos() {
        $sql = 'SELECT * FROM hits_tipo_noticias';
        $query = $this->db->query($sql)->result();
        $subgrupos[0] = 'Seleccione un item ...';
        foreach($query as $row) {
            $subgrupos[$row->idTipoNoticia] = $row->nombreTipoNoticia; 
        }
        return $subgrupos;
    }

    /*
     * Comentarios
     */
    public function obtenerComentario($comentario) {
        $sql = "SELECT * FROM hits_view_noticias_comentarios 
        WHERE idNoticiaComentario = ?";
        return array_shift($this->db->query($sql, array($comentario))->result_array());
    }
    public function obtenerComentarios($noticia) {
        $sql = "SELECT * FROM hits_view_noticias_comentarios 
        WHERE idNoticia = ?
        ORDER BY fechaNoticiaComentario DESC
        LIMIT 0, 5";
        return $this->db->query($sql, $noticia)->result_array();
    }
    public function guardarComentario($aParams) {
        $sql = 'SELECT hits_sp_noticia_comentario_guardar(?, ?, ?, ?) AS result;';
        $result = $this->db->query($sql, $aParams)->result_array();
        return $result[0]['result'];
    }
}

// EOF noticias_model.php