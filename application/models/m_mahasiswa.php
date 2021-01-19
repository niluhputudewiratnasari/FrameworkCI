<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
//UNTUK MENAMPILKAN SELURUH DATA PADA TABEL
	public function getAll()
	{
	//select * from mahasiswa
		return $this->db->get('mahasiswa')->result();
	}	

	public function store($object)
	{
	//insert into mahasiswa values ("","","")
		return $this->db->insert('mahasiswa', $object);
	}
	public function hapusdata($id)
	{
		//delete from mahasiswa where nim = $id
		$this->db->where('nim', $id);
		return $this->db->delete('mahasiswa');

	}

	public function satuData($id)
	{
		return $this->db->where(['nim' => $id])->get('mahasiswa')->row_object();
	}
	public function simpanEdit($input_id, $data)
	{
		$this->db->where(['nim' => $input_id])->update('mahasiswa', $data);
	}

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */