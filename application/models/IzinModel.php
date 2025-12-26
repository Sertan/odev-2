<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IzinModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function ekle($data){
        return $this->db->insert('izinler', $data);
    }

    public function tum_izinler(){
        return $this->db->get('izinler')->result();
    }

    public function durum_guncelle($id, $d){
        $this->db->where('id', $id);
        return $this->db->update('izinler', ["durum"=>$d]);
    }

}


