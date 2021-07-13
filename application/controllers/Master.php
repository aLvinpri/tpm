<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //aturan dari codeigniter jia ingin me load construct
        $this->load->model('Master_model');
        $this->load->library('form_validation');
    }

    public function inputMesin()
    {
        $data['judul'] = 'TPM - Input Mesin';
        $data['activelink'] = 'Input Mesin';
        $data['pilihmesin'] = $this->Master_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/master_inputMesin', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_master-mesin', 'WO Telah Di input');
            $this->Master_model->inputDataWo();
            redirect('master/input');
        }
    }

    public function inputSparepart()
    {
        $data['judul'] = 'TPM - Input Spare Part';
        $data['activelink'] = 'Input Spare Part';
        $data['pilihmesin'] = $this->Master_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/master_inputSparepart', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_master-mesin', 'WO Telah Di input');
            $this->Master_model->inputDataWo();
            redirect('master/input');
        }
    }
}
