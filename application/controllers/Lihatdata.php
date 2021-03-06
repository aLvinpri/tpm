<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lihatdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //aturan dari codeigniter jia ingin me load construct
        $this->load->model('Lihatdata_model');
        $this->load->library('form_validation');
    }

    public function Mesin()
    {
        $data['judul'] = 'TPM - Lihat Data Mesin';
        $data['activelink'] = 'Lihat Data Mesin';
        $data['pilihmesin'] = $this->Lihatdata_model->getSparepart();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/lihat_mesin', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_lihat-mesin', 'WO Telah Di input');
            $this->Lihatdata_model->inputDataWo();
            redirect('lihat/input');
        }
    }

    public function Sparepart()
    {
        header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate'); //clear cache chrome

        $data['judul'] = 'TPM - Lihat Data Spare Part';
        $data['activelink'] = 'Lihat Data Spare Part';
        $data['sparepart'] = $this->Lihatdata_model->getSparepart();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/lihat_sparepart', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_lihat-mesin', 'WO Telah Di input');
            $this->Lihatdata_model->inputDataWo();
            redirect('lihat/input');
        }
    }

    public function detailSparepart($id)
    {

        $data['judul'] = 'TPM - Detail Spare Part';
        $data['activelink'] = 'Detail Spare Part';
        $data['detailsparepart'] = $this->Lihatdata_model->getDetailSparepart($id);

        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/lihat_detailsparepart', $data);
        $this->load->view('vtemplate/footer');
    }

    public function Pegawai()
    {
        $data['judul'] = 'TPM - Lihat Data Pegawai';
        $data['activelink'] = 'Lihat Data Pegawai';
        $data['pilihmesin'] = $this->Lihatdata_model->getPilihMesin();

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');

        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/lihat_pegawai', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->session->set_flashdata('flash_lihat-mesin', 'WO Telah Di input');
            $this->Lihatdata_model->inputDataWo();
            redirect('lihat/input');
        }
    }
}
