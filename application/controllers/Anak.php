<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        // check_not_login();
        // check_admin();
        $this->load->model('userlogin');
        $this->load->model('anak_m');
        $this->load->model('wishlist_m');
        $this->load->library('form_validation');

    }
	public function index()
	{
        $data['title'] = 'Toko Batik Nusantara | Anak-Anak';
        $data['kategori'] = 'Anak-anak';
        $data['beranda'] = 'Beranda';
        $data['row'] = $this->userlogin->get();
        $data['produk'] = $this->anak_m->get();
        $data['wishlist'] = $this->wishlist_m->get();
        $this->load->view('user/templates/header',$data);
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/anak/anak_view');
        $this->load->view('user/templates/footer');
    }
}