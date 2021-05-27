<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Workorder extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //aturan dari codeigniter jia ingin me load construct
        $this->load->model('Workorder_model');
        $this->load->library('form_validation');
    }
    public function input()
    {
        $data['judul'] = 'TPM - Input WO';
        $data['activelink'] = 'Input Work Order';
        $data['pilihmesin'] = $this->Workorder_model->getPilihMesin();
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/wo_input', $data);
        $this->load->view('vtemplate/footer');
    }
    public function pengerjaan()
    {
        $data['judul'] = 'TPM - Input Pengerjaan WO';
        $data['activelink'] = 'Input Pengerjaan Work Order';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/wo_pengerjaan');
        $this->load->view('vtemplate/footer');
    }
}
