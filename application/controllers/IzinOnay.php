<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IzinOnay extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('IzinModel');
    }

public function index(){
    $data['izinler'] = $this->IzinModel->tum_izinler();
    $this->load->view('IzinOnay', $data);
}
    public function onayla($id){
        $this->IzinModel->durum_guncelle($id, "Onaylandı");
        redirect(base_url('IzinOnay'));
    }

    public function reddet($id){
        $this->IzinModel->durum_guncelle($id, "Reddedildi");
        redirect(base_url('IzinOnay'));
    }
}
