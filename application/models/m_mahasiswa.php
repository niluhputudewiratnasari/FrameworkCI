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

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */