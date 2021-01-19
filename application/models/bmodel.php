<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bmodel extends CI_Model {

//UNTUK MENAMPILKAN SELURUH DATA PADA TABEL
	public function getAll()
	{
		return $this->db->get('tabel_b')->result();
	}	

	public function store($object)
	{
		return $this->db->insert('tabel_b', $object);
	}
	public function hapusdata($id)
	{
		//delete from mahasiswa where nim = $id
		$this->db->where('id_015', $id);
		return $this->db->delete('tabel_b');

	}

	public function satuData($id)
	{
		return $this->db->where(['id_015' => $id])->get('tabel_b')->row_object();
	}
	public function simpanEdit($input_id, $data)
	{
		$this->db->where(['id_015' => $input_id])->update('tabel_b', $data);
	}
}

/* End of file bmodel.php */
/* Location: ./application/models/bmodel.php */