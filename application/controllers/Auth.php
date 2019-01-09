<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function reg_action()
	{
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		

		if ($password != $repassword) {
			echo "password tidak sama";
		}else{

		$data = array(
			'fullname'=>$fullname,
			'username'=>$username,
			'password'=>md5($password));
		$result=$this->model->simpan('users',$data);
			if ($result > 0) {
				echo "Data users berhasil disimpan";
			}else{
				echo "Data users gagal disimpan";
			}
		
		}

	}

	public function login_action()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_login_r=$this->model->getlogin($username,$password)->num_rows();

		if ($check_login_r > 0){
			$datauser = $this->model->getlogin($username,$password)->row_array();
			$sessions = array(
				'userid'=>$datauser['id_user'],
				'nameuser'=>$datauser['username'],
				'namefull'=>$datauser['fullname'],
				'status'=>'ok'
			);
			$this->session->set_userdata($sessions);
			redirect("administrator");
		}else{
			echo "<script>alert('login gagal')</script>";
			$this->index();
		}
	}
	public function logout_action()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

?>