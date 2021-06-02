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
        $data['pilihmaintenance'] = $this->Workorder_model->getPilihMaintenance();
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/wo_input', $data);
        $this->load->view('vtemplate/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama Harus di isi'));
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function pengerjaan()
    {
        $data['judul'] = 'TPM - Input Pengerjaan WO';
        $data['activelink'] = 'Input Pengerjaan Work Order';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/wo_pengerjaan', $data);
        $this->load->view('vtemplate/footer');
    }
}
