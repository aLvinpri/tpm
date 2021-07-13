<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //aturan dari codeigniter jia ingin me load construct
        $this->load->model('Editdata_model');
        $this->load->library('form_validation');
    }

    public function Mesin()
    {
        $data['judul'] = 'TPM - Edit Data Mesin';
        $data['activelink'] = 'Edit Data Mesin';
        $data['pilihmesin'] = $this->Editdata_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/edit_mesin', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_edit-mesin', 'WO Telah Di input');
            $this->Editdata_model->inputDataWo();
            redirect('edit/input');
        }
    }

    public function Sparepart()
    {
        $data['judul'] = 'TPM - Edit Data Spare Part';
        $data['activelink'] = 'Edit Data Spare Part';
        $data['pilihmesin'] = $this->Editdata_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/edit_sparepart', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_edit-mesin', 'WO Telah Di input');
            $this->Editdata_model->inputDataWo();
            redirect('edit/input');
        }
    }
}
