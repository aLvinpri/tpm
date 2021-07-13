<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['judul'] = 'TPM - Home';
		$data['activelink'] = 'Dashboard';
		$this->load->view('vtemplate/header', $data);
		$this->load->view('vtemplate/navbar');
		$this->load->view('vtemplate/sidebar', $data);
		$this->load->view('vhome/index');
		$this->load->view('vtemplate/footer');
	}

	public function coba()
	{
		$this->load->library('ciqrcode');
		header("Content-Type: image/png");
		$params['data'] = 'ID=
		$id_part' . PHP_EOL . PHP_EOL .
			'Sparepart= $nm_part' . PHP_EOL . PHP_EOL .
			'URL= http://tpm-dummy.pthsi.co.id/spare_part_detail.php?id=' . PHP_EOL . PHP_EOL .
			'Deskripsi= ' . PHP_EOL . PHP_EOL .
			'Stok= ';
		echo $this->ciqrcode->generate($params);
	}
}
