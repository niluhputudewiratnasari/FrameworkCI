<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "Dewi Ratnasari";
		$data['nim'] = "1810330015";

		$mahasiswa[0] = array(
			'nim' => 1810530118,
			'nama' => "Ratnasari");
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
		
	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}


}
