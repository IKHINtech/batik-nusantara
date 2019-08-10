<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		check_already_login();
		$this->load->view('auth');
	}
	public function login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('userlogin');
			$query = $this->userlogin->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				// echo $row->username;

				$params = array(
					'userid'=> $row->user_id, 
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo"<script>
				alert('Selamat, login berhasil');
				window.location='".base_url('dashboard')."'</script>";

			}else{
				echo"<script>
				alert('Login gagal, username / password salah !');
				window.location='".base_url('auth')."'</script>";
			}
		}
	}
	public function logout()
	{
		$params = array('userid','level' );
		$this->session->unset_userdata($params);
		redirect('auth');
	}
}
