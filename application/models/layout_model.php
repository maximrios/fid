<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layout_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function datos() {
        $sql = 'SELECT * FROM hits_clientes WHERE idCliente = 1;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    /**
     * Newsletter
     */
    public function suscripcion($aParms) {
        $sql = 'INSERT INTO hits_personas
                (nombrePersona
                , apellidoPersona
                , emailPersona
                , newsletterPersona) 
                VALUES
                (?
                , ?
                , ?
                , 1);';
        $result = $this->db->query($sql , $aParms);
        return $this->db->insert_id();
    }
    /**
     * Eventos
     */
    public function obtenerEventos() {
        $sql = 'SELECT * FROM hits_eventos
        ORDER BY fechaDesdeEvento DESC';
        return $this->db->query($sql)->result_array();
    }
    public function obtenerEventosUno($id) {
        $sql = 'SELECT * FROM hits_eventos WHERE idEvento = ?;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    /**
     * Programas
     */
    public function obtenerProgramas() {
        $sql = 'SELECT * FROM hits_programas 
        WHERE estadoPrograma = 1';
        return $this->db->query($sql)->result_array();
    }
    public function obtenerProgramasUno($id) {
        $sql = 'SELECT * FROM hits_programas WHERE idPrograma = ?;';
        return array_shift($this->db->query($sql, array($id))->result_array());
    }
    /**
     * Noticias
     */
    public function obtenerNoticias($limit = 0, $offset = 9999999) {
        $sql = 'SELECT n.*, ni.idNoticiaImagen, ni.pathNoticiaImagen, ni.thumbNoticiaImagen, ni.checkNoticiaImagen
            FROM hits_noticias n
            INNER JOIN hits_noticias_imagenes ni ON n.idNoticia = ni.idNoticia
            WHERE estadoNoticia = 1 AND checkNoticiaImagen = 1
            ORDER BY fechaDesdeNoticia DESC  
            limit ? offset ? ;';
        return $this->db->query($sql, array((int) $offset, (int) $limit))->result_array();
    }
    public function numRegsNoticias() {
        $sql = 'SELECT count(idNoticia) AS inCant FROM hits_noticias WHERE estadoNoticia = 1';
        $result = $this->db->query($sql)->result_array();
        return $result[0]['inCant'];
    }
    public function obtenerNoticiaId($idNoticia) {
        $sql = 'SELECT * 
        FROM hits_noticias
        WHERE idNoticia = ?;';
        return array_shift($this->db->query($sql, array($idNoticia))->result_array());
    }
    public function obtenerImagenesNoticia($idNoticia) {
        $sql = 'SELECT *
            FROM hits_noticias_imagenes
            WHERE idNoticia = ?
            ORDER BY checkNoticiaImagen DESC;';
        return $this->db->query($sql, array((int) $idNoticia))->result_array();
    }
    /**
     * Galerias
     */
    public function obtenerGalerias($limit = 0, $offset = 9999999) {
        $sql = 'SELECT *
            FROM hits_galerias g
            INNER JOIN hits_galerias_media m on g.idGaleria = m.idGaleria
            WHERE m.checkGaleriaMedia = 1
            ORDER BY nombreGaleria DESC  
            limit ? offset ? ;';
        return $this->db->query($sql, array((int) $offset, (int) $limit))->result_array();
    }
    public function obtenerGaleriaUno($idGaleria) {
        $sql = 'SELECT *
            FROM hits_galerias g
            WHERE idGaleria = ?;';
        return array_shift($this->db->query($sql, array($idGaleria))->result_array());
    }
    public function obtenerGaleriaMedia($idGaleria) {
        $sql = 'SELECT *
            FROM hits_galerias_media m
            WHERE idGaleria = ?;';
        return $this->db->query($sql, array($idGaleria))->result_array();
    }
    /**
     * Personas
     */
    public function obtenerPersonaMail($mail) {
        $sql = 'SELECT * FROM hits_personas WHERE emailPersona = ?;';
        return array_shift($this->db->query($sql, array($mail))->result_array());
    }
    public function guardarPersona($aParms) {
        if($aParms[0] == 'NULL' || $aParms[0] == 0) {
            $sql = 'INSERT INTO hits_personas
                    (nombrePersona
                    , telefonoPersona
                    , celularPersona
                    , emailPersona
                    , domicilioPersona
                    , ciudadPersona) 
                    VALUES
                    ("'.$aParms[1].'"
                    , '.$aParms[2].'
                    , '.$aParms[3].'
                    , "'.$aParms[4].'"
                    , "'.$aParms[5].'"
                    , "'.$aParms[6].'");';
        }
        else {
            $sql = 'UPDATE hits_personas SET 
                    nombrePersona = "'.$aParms[1].'"
                    , telefonoPersona = '.$aParms[2].'
                    , celularPersona = '.$aParms[3].'
                    , domicilioPersona = "'.$aParms[5].'"
                    , ciudadPersona = "'.$aParms[6].'"
                    WHERE emailPersona = "'.$aParms[4].'";';
        }
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }

    public function guardarContacto($aParms) {
        if($aParms[0] == 'NULL' || $aParms[0] == 0) {
            $sql = 'INSERT INTO hits_contactos
                    (nombreContacto
                    , telefonoContacto
                    , emailContacto
                    , mensajeContacto
                    , fechaContacto
                    , estadoContacto) 
                    VALUES
                    ("'.$aParms[1].'"
                    , '.$aParms[2].'
                    , "'.$aParms[3].'"
                    , "'.$aParms[4].'"
                    , NOW()
                    , 1);';
            $type = 1;
        }
        else {
            $sql = 'UPDATE sabandijas_contactos SET 
                    nombreContacto = "'.$aParms[1].'"
                    , telefonoContacto = '.$aParms[2].'
                    , emailContacto = "'.$aParms[3].'"
                    , mensajeContacto = "'.$aParms[4].'"
                    , fechaContacto = NOW()
                    WHERE idContacto = '.$aParms[0].';';
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
}