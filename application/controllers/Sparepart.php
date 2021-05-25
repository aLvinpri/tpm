<?php

class Sparepart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->database();
    }
	public function index()
	{
        $data['judul'] = 'TPM - Sparepart';
        $this->load->view('vtemplate/header', $data);
		$this->load->view('vhome/index');
        $this->load->view('vtemplate/footer');
	}

}