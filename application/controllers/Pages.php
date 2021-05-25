<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }
	public function invoice()
	{
        $data['judul'] = 'TPM - Pages';
        $data['activelink'] = 'invoice';
        $this->load->view('vtemplate/header', $data);
		$this->load->view('vtemplate/navbar');
		$this->load->view('vtemplate/sidebar', $data);
		$this->load->view('vpages/invoice');
        $this->load->view('vtemplate/footer');
	}
    public function userguidence()
	{
        $data['judul'] = 'TPM - User Guidence';
        $data['activelink'] = 'userguidence';
        $this->load->view('vtemplate/header', $data);
		$this->load->view('vtemplate/navbar');
		$this->load->view('vtemplate/sidebar', $data);
		$this->load->view('vhome/userguidence');
        $this->load->view('vtemplate/footer');
	}
    public function inputwo()
	{
        $data['judul'] = 'TPM - Input WO';
        $data['activelink'] = 'inputwo';
        $this->load->view('vtemplate/header', $data);
		$this->load->view('vtemplate/navbar');
		$this->load->view('vtemplate/sidebar', $data);
		$this->load->view('vpages/userguidence');
        $this->load->view('vtemplate/footer');
	}
}