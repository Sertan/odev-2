<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IzinModel extends CI_Model {

    public function ekle($data){
        return $this->db->insert('izinler', $data);
    }

    public function tum_izinler(){
        return $this->db->get('izinler')->result();
    }

    public function onayla($id){
        $this->db->where('id', $id);
        return $this->db->update('izinler', ['durum' => 'Onaylandı']);
    }

    public function reddet($id, $sebep){
        $this->db->where('id', $id);
        return $this->db->update('izinler', [
            'durum' => 'Reddedildi',
            'red_sebep' => $sebep
        ]);
    }

    public function sil($id){
        $this->db->where('id', $id);
        $this->db->delete('izinler');
    }
}



