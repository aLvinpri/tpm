<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }
    public function invoice()
    {
        $data['judul'] = 'TPM - Invoice';
        $data['activelink'] = 'Invoice';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/invoice');
        $this->load->view('vtemplate/footer');
    }
    public function userguidence()
    {
        $data['judul'] = 'TPM - User Guidence';
        $data['activelink'] = 'User Guidence';
        $this->load->helper('download');
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vhome/userguidence');
        $this->load->view('vtemplate/footer');
    }
    public function inputwo()
    {
        $data['judul'] = 'TPM - Input WO';
        $data['activelink'] = 'Input Work Order';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/userguidence');
        $this->load->view('vtemplate/footer');
    }
    public function fixedfooter()
    {
        $data['judul'] = 'TPM - Fixed Footer';
        $data['activelink'] = 'Fixed Footer';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vpages/fixed-footer.html');
        $this->load->view('vtemplate/footer');
    }
}
