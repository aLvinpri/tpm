<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Importdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //aturan dari codeigniter jia ingin me load construct
        $this->load->model('Importdata_model');
        $this->load->library('form_validation');
    }

    public function Mesin()
    {
        $data['judul'] = 'TPM - Import Data Mesin';
        $data['activelink'] = 'Import Data Mesin';
        $data['pilihmesin'] = $this->Importdata_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/import_mesin', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_import-mesin', 'WO Telah Di input');
            $this->Importdata_model->inputDataWo();
            redirect('import/input');
        }
    }

    public function Sparepart()
    {
        $data['judul'] = 'TPM - Import Data Spare Part';
        $data['activelink'] = 'Import Data Spare Part';
        $data['pilihmesin'] = $this->Importdata_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/import_sparepart', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_import-mesin', 'WO Telah Di input');
            $this->Importdata_model->inputDataWo();
            redirect('import/input');
        }
    }
}
