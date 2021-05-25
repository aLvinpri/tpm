<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'TPM - Home';
        $data['activelink'] = 'home';
        $this->load->view('vtemplate/header', $data);
		$this->load->view('vtemplate/navbar');
		$this->load->view('vtemplate/sidebar', $data);
		$this->load->view('vhome/index');
        $this->load->view('vtemplate/footer');
	}

}
