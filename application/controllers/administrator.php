<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->ceklogin();
	}

	private function ceklogin()
	{
		$id_user = $this->session->userdata('userid');
		$status = $this->session->userdata('status');
		if ($id_user == null OR $status != 'ok') {
			redirect("auth");
		}
	}

	public function index()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data User',
			'title_level2'=>'',
			'datauser'=>$this->model->getusers(),
			'konten'=>'administrator/users/v_users',

			);
		$this->load->view('administrator/template',$data);
	}

		public function tambah()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data User',
			'title_level2'=>'Tambah User',
			'konten'=>'administrator/users/v_tambah',

		);
		$this->load->view('administrator/template',$data);
	}

	public function tabelbuku()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Tabel Buku',
			'title_level2'=>'',
			'datauser'=>$this->model->gettabel_buku(),
			'konten'=>'administrator/users/tabelbuku',

			);
		$this->load->view('administrator/template',$data);
	}

	public function tambahtabelbuku()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data Tabel',
			'title_level2'=>'Tambah Tabel',
			'konten'=>'administrator/users/tambahtabelbuku',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpantabelbuku()
	{
		$kodebuku = $this->input->post('kodebuku');
		$judulbuku = $this->input->post('judulbuku');
		$kodejenis = $this->input->post('kodejenis');
		$pengarang = $this->input->post('pengarang');
		$data = array(
			'kodebuku'=>$kodebuku,
			'judulbuku'=>$judulbuku,
			'kodejenis'=>$kodejenis,
			'pengarang'=>$pengarang 
			);
		$result = $this->model->simpan('tabel_buku',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->tabelbuku();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tabelbuku();
		}
	}

	public function hapustabelbuku($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->index();
		}
		
		$result = $this->model->hapus('tabel_buku', array('kodebuku'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->tabelbuku();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->tabelbuku();
		}
	}

	public function tabeldistributor()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Tabel Distributor',
			'title_level2'=>'',
			'datauser'=>$this->model->gettabel_distributor(),
			'konten'=>'administrator/users/tabeldistributor',

			);
		$this->load->view('administrator/template',$data);
	}

	public function tambahtabeldistributor()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data Tabel',
			'title_level2'=>'Tambah Tabel',
			'konten'=>'administrator/users/tambahtabeldistributor',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpantabeldistributor()
	{
		$idtoko = $this->input->post('idtoko');
		$namatoko = $this->input->post('namatoko');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$data = array(
			'idtoko'=>$idtoko,
			'namatoko'=>$namatoko,
			'alamat'=>$alamat,
			'hp'=>$hp 
			);
		$result = $this->model->simpan('tabel_distributor',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->tabeldistributor();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tabeldistributor();
		}
	}

	public function hapustabeldistributor($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->index();
		}
		
		$result = $this->model->hapus('tabel_distributor', array('idtoko'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->tabeldistributor();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->tabeldistributor();
		}
	}

	public function tabelkaryawan()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Tabel Karyawan',
			'title_level2'=>'',
			'datauser'=>$this->model->gettabel_karyawan(),
			'konten'=>'administrator/users/tabelkaryawan',

			);
		$this->load->view('administrator/template',$data);
	}

	public function tambahtabelkaryawan()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data Tabel',
			'title_level2'=>'Tambah Tabel',
			'konten'=>'administrator/users/tambahtabelkaryawan',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpantabelkaryawan()
	{
		$kodekaryawan = $this->input->post('kodekaryawan');
		$namakaryawan = $this->input->post('namakaryawan');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$data = array(
			'kodekaryawan'=>$kodekaryawan,
			'namakaryawan'=>$namakaryawan,
			'jeniskelamin'=>$jeniskelamin,
			'alamat'=>$alamat,
			'hp'=>$hp 
			);
		$result = $this->model->simpan('tabel_karyawan',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->tabelkaryawan();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tabelkaryawan();
		}
	}

	public function hapustabelkaryawan($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->index();
		}
		
		$result = $this->model->hapus('tabel_karyawan', array('kodekaryawan'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->tabelkaryawan();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->tabelkaryawan();
		}
	}

	public function tabelpenyewa()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Tabel Penyewa',
			'title_level2'=>'',
			'datauser'=>$this->model->gettabel_penyewa(),
			'konten'=>'administrator/users/tabelpenyewa',

			);
		$this->load->view('administrator/template',$data);
	}

	public function tambahtabelpenyewa()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data Tabel',
			'title_level2'=>'Tambah Tabel',
			'konten'=>'administrator/users/tambahtabelpenyewa',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpantabelpenyewa()
	{
		$kodepenyewa = $this->input->post('kodepenyewa');
		$namapenyewa = $this->input->post('namapenyewa');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$data = array(
			'kodepenyewa'=>$kodepenyewa,
			'namapenyewa'=>$namapenyewa,
			'alamat'=>$alamat,
			'hp'=>$hp 
			);
		$result = $this->model->simpan('tabel_penyewa',$data);
		if ($result == 1) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->tabelpenyewa();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tabelpenyewa();
		}
	}

	public function hapustabelpenyewa($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->index();
		}
		
		$result = $this->model->hapus('tabel_penyewa', array('kodepenyewa'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->tabelpenyewa();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->tabelpenyewa();
		}
	}

	public function tabeljenis()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Tabel Penyewa',
			'title_level2'=>'',
			'datauser'=>$this->model->gettabel_jenis(),
			'konten'=>'administrator/users/tabeljenis',

			);
		$this->load->view('administrator/template',$data);
	}

	public function tambahtabeljenis()
	{
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data Tabel',
			'title_level2'=>'Tambah Tabel',
			'konten'=>'administrator/users/tambahtabeljenis',

		);
		$this->load->view('administrator/template',$data);
	}

	public function simpantabeljenis()
	{
		$kodejenis = $this->input->post('kodejenis');
		$namajenis = $this->input->post('namajenis');
		$data = array(
			'kodejenis'=>$kodejenis,
			'namajenis'=>$namajenis 
			);
		$result = $this->model->simpan('tabel_jenis',$data);
		if ($result == 2) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->tabeljenis();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tabeljenis();
		}
	}

	public function hapustabeljenis($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->tabeljenis();
		}
		
		$result = $this->model->hapus('tabel_jenis', array('kodejenis'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->tabeljenis();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->tabeljenis();
		}
	}

	public function simpan()
	{
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'fullname'=>$fullname,
			'username'=>$username,
			'password'=>md5($password)
			);
		$result = $this->model->simpan('users',$data);
		if ($result == 3) {
			echo "<script>alert('Data Berhasil disimpan')</script>";
			$this->index();

		}else{
			echo "<script>alert('Data Gagal disimpan')</script>";
			$this->tambah();
		}
	}

	public function edit($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu belum memlih yg di edit')</script>";
			$this->index();
		}
		$users = $this->model->getUsers(" WHERE id_user='$kode'")->row_array();
		$data = array(
			'title'=>'User',
			'title_level1'=>'Data User',
			'title_level2'=>'Edit User',
			'id'=>$users['id_user'],
			'fullname'=>$users['fullname'],
			'username'=>$users['username'],
			'konten'=>'administrator/users/v_edit',

		);
		$this->load->view('administrator/template',$data);
	}

	public function update()
	{
		if (!$_POST['update']) {
			redirect('administrator');
		}
		$id = $this->input->post('id_user');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$data = array(
			'fullname'=>$fullname,
			'username'=>$username
			);
		$result = $this->model->update('users',$data, array('id_user'=>$id));
		if ($result == 1){
			echo "<script>alert('Data Berhasil diupdate')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data Gagal diupdate')</script>";
			$this->edit();
		}
	}

		public function hapus($kode=0)
	{
		if ($this->uri->segment(3)==null) {
			echo "<script>alert('kamu memilih data yang ingin dihapus')</script>";
			$this->index();
		}
		
		$result = $this->model->hapus('users', array('id_user'=>$kode));

		if ($result ==1) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			$this->index();
		}else{
			echo "<script>alert('Data gagal dihapus')</script>";
			$this->index();
		}
	}
}
?>