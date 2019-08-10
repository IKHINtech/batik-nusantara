<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_user extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // check_not_login();
        // check_admin();
        $this->load->model('userlogin');
        $this->load->model('produk_m');
        $this->load->model('wishlist_m');
        $this->load->library('form_validation');

    }
	public function index()
	{
        $data['title'] = 'Toko Batik Nusantara';
        $data['row'] = $this->userlogin->get();
        $data['produk'] = $this->produk_m->get();
        $data['wishlist'] = $this->wishlist_m->get();
        $this->load->view('user/templates/header',$data);
        $this->load->view('user/home/home');
        $this->load->view('user/templates/footer');
    }
    public function add()
    {
        $user = new stdClass();
        $user->username = null;
        $user->name = null;
        $user->password = null;
        $data = array(
            'page'=> 'add',
            'row'=> $user
        );
        $this->load->view('user/templates/header',$data);
        $this->load->view('user/home/home');
        $this->load->view('user/templates/footer');
        // $this->template->load('template','penomoran/penomoran_form',$data);
    }
    public function proses()
        {
            $post = $this->input->post(null, TRUE);
            if (isset($_POST['add'])) {
                $this->userlogin->add($post);
            }else if (isset($_POST['edit'])) {
                $this->userlogin->edit($post);
            }

            if ($this->db->affected_rows()>0) {
                echo"<script>
                alert('Data berhasil diupdate');</script>";
            }
            echo"<script>
            window.location='".site_url('penomoran')."';</script>";
        }
}
