<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model extends CI_Model
{
	
	public function simpan($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}

	public function hapus($tabel, $where)
	{
		return $this->db->delete($tabel, $where);
	}

	public function update($tabel, $data, $where)
	{
		return $this->db->update($tabel, $data, $where);
	}

	public function getusers($where ='')
	{
		return $this->db->query("SELECT * FROM users".$where);
	}

	public function gettabel_buku($where ='')
	{
		return $this->db->query("SELECT * FROM tabel_buku".$where);
	}

	public function gettabel_distributor($where ='')
	{
		return $this->db->query("SELECT * FROM tabel_distributor".$where);
	}

	public function gettabel_karyawan($where ='')
	{
		return $this->db->query("SELECT * FROM tabel_karyawan".$where);
	}

	public function gettabel_penyewa($where ='')
	{
		return $this->db->query("SELECT * FROM tabel_penyewa".$where);
	}

	public function gettabel_jenis($where ='')
	{
		return $this->db->query("SELECT * FROM tabel_jenis".$where);
	}


	public function getlogin($username, $password)
	{
		return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'");
	}
}
?>