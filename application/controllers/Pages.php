<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function userguidence()
    {
        $data['judul'] = 'TPM - User Guidence';
        $data['activelink'] = 'User Guidence';
        $data['ebookname'] = '';
        $this->load->view('vtemplate/header', $data);
        $this->load->view('vtemplate/navbar');
        $this->load->view('vtemplate/sidebar', $data);
        $this->load->view('vhome/userguidence');
        $this->load->view('vtemplate/footer');
    }
    public function download()
    {
        $this->load->helper('download');
        $ebookname = $this->uri->segment(3);

        force_download('assets/pdf/' . $ebookname, NULL);
    }
}
