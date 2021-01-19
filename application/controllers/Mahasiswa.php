<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$data['data_tabel'] = $this->m_mahasiswa->getAll(); 
		$this->load->view('mahasiswa_index', $data);
		
	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}
	
	public function simpan_data()
	{
		$data = array(
			'nim' => $this->input->post('nim') ,
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat') 
		);

		$this->m_mahasiswa->store($data);
		redirect('mahasiswa/index','refresh');

	}
	public function hapus($nim = '')
	{
		$this->m_mahasiswa->hapusdata($nim);
		return redirect('mahasiswa/index');
	}


//mengambil satudata
	public function edit($nim = '')
	{
		$data['data_tabel'] = $this->m_mahasiswa->satuData($nim);
		$this->load->view('v_edit', $data);
	}

	public function proses_edit()
	{
		$input_id = $this->input->post('nim');
		$data = array(
			'nim' => $this->input->post('nim') ,
			'nama' => $this->input->post('nama'), 
			'alamat' => $this->input->post('alamat') 
		);

		$this->m_mahasiswa->simpanEdit($input_id, $data);
		redirect('mahasiswa/index');
	}



}
