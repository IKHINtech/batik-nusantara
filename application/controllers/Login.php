
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{ 
		// check_already_login();
		// $this->load->view('login');
	}
	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('userlogin');
			$ceklogin = $this->userlogin->login($post);
			if($ceklogin){
				foreach ($ceklogin as $row); 
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('level',$row->level);
				if ($this->session->userdata('level')=="1") {
					redirect('dashboard_admin');
				}elseif ($this->session->userdata('level')=="2") {
					redirect('home_user');
				}
			}else{
				echo"<script>
				alert('Login gagal, username / password salah !');
				window.location='".base_url('home_user')."'</script>";
			}
		}
	}
	public function logout()
	{
		$params = array('userid','level' );
		$this->session->unset_userdata($params);
		redirect('home_user');
	}
}
