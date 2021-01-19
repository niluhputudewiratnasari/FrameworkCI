<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bmodel');
	}

	public function index()
	{
		$data['data_tabel'] = $this->bmodel->getAll(); 
		$this->load->view('tabelb_index', $data);
		
	}
	public function tambah()
	{
		$this->load->view('tabelb_tambah');
	}
	
	public function simpan_data()
	{
		$data = array(
			'kolom_jurusan' => $this->input->post('kolom_jurusan'), 
			'kolom_kelas' => $this->input->post('kolom_kelas'), 
			'kolom_isi' => $this->input->post('kolom_isi') 
		);
		//print_r($data);

		$this->bmodel->store($data);
		redirect('bcontroller/index','refresh');

	}
	public function hapus($id_015 = '')
	{
		$this->bmodel->hapusdata($id_015);
		return redirect('bcontroller/index');
	}


//mengambil satudata
	public function edit($id_015 = '')
	{
		$data['data_tabel'] = $this->bmodel->satuData($id_015);
		$this->load->view('tabelb_edit', $data);
	}

	public function proses_edit()
	{
		$input_id = $this->input->post('id_015');
		$data = array(
			'id_015' => $this->input->post('id_015') ,
			'kolom_jurusan' => $this->input->post('kolom_jurusan'), 
			'kolom_kelas' => $this->input->post('kolom_kelas'), 
			'kolom_isi' => $this->input->post('kolom_isi') 
		);

		$this->bmodel->simpanEdit($input_id, $data);
		redirect('bcontroller/index');
	}
}
