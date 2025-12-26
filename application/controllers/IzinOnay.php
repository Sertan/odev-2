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
        $this->IzinModel->onayla($id);
        redirect(base_url('IzinOnay'));
    }

    public function reddet_formu($id){
        $data['id'] = $id;
        $this->load->view('ReddetForm', $data);
    }

    public function reddet(){
        $id = $this->input->post('id');
        $sebep = $this->input->post('red_sebep');
        $this->IzinModel->reddet($id, $sebep);
        redirect(base_url('IzinOnay'));
    }

    public function sil($id){
        $this->IzinModel->sil($id);
        redirect(base_url('IzinOnay'));
    }
}

