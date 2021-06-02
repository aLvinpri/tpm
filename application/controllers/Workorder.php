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

        $this->form_validation->set_rules('idmesin', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtbag', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtlok', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('no', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('tgl_input', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtdibuat', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('status', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('rd_diterima', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('txtditerima', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtpelaksana', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtpermasalahan', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('txtpenyebab', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('txttindakan', '', 'required', array('required' => 'Belum di isi'));
        $this->form_validation->set_rules('tgl_dikerjakan', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtdiserahkan', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('tgl_diserahkan', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtlosstime', '', 'required', array('required' => 'Belum di pilih'));
        $this->form_validation->set_rules('txtditerima', '', 'required', array('required' => 'Belum di isi'));

        $data['idmesin'] = $this->input->post('idmesin');
        $data['txtbag'] = $this->input->post('txtbag');
        $data['txtlok'] = $this->input->post('txtlok');
        $data['no'] = $this->input->post('no');
        $data['tgl_input'] = $this->input->post('tgl_input');
        $data['txtdibuat'] = $this->input->post('txtdibuat');
        $data['txtjenis_pekerjaan'] = $this->input->post('txtjenis_pekerjaan');
        $data['status'] = $this->input->post('status');
        $data['rd_diterima'] = $this->input->post('rd_diterima');
        $data['txtditerima'] = $this->input->post('txtditerima');
        $data['txtpelaksana'] = $this->input->post('txtpelaksana');
        $data['txtpermasalahan'] = $this->input->post('txtpermasalahan');
        $data['txtpenyebab'] = $this->input->post('txtpenyebab');
        $data['txttindakan'] = $this->input->post('txttindakan');
        $data['tgl_dikerjakan'] = $this->input->post('tgl_dikerjakan');
        $data['txtdiserahkan'] = $this->input->post('txtdiserahkan');
        $data['tgl_diserahkan'] = $this->input->post('tgl_diserahkan');
        $data['txtlosstime'] = $this->input->post('txtlosstime');
        $data['txtditerima'] = $this->input->post('txtditerima');


        if ($this->form_validation->run() == false) {
            $this->load->view('vtemplate/header', $data);
            $this->load->view('vtemplate/navbar');
            $this->load->view('vtemplate/sidebar', $data);
            $this->load->view('vpages/wo_input', $data);
            $this->load->view('vtemplate/footer');
        } else {
            $this->Workorder_model->inputDataWo();
            //$this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('home');
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
