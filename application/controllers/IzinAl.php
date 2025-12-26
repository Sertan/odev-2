<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IzinAl extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('IzinModel');
    }

    public function index(){
        $this->load->view('IzinForm');
    }

    public function kaydet(){
        $data = [
            "adsoyad"   => $this->input->post('ogrenci_adi'),
            "baslangic" => $this->input->post('baslangic'),
            "bitis"     => $this->input->post('bitis'),
            "sebep"     => $this->input->post('sebep'),
            "durum"     => "Bekliyor"
        ];

        $this->IzinModel->ekle($data);

        redirect(base_url('IzinOnay'));
    }
}

