<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller { 

	function __construct()
    { 
        parent::__construct();
        // check_not_login();
        $this->load->model('userlogin');
        $this->load->model('produk_m');
        $this->load->model('wishlist_m');
        // $this->load->library('form_validation');
    }
	public function index()
	{
        $data['title'] = 'Toko Batik Nusantara';
        $data['row'] = $this->userlogin->get();
        $data['produk'] = $this->produk_m->get();
        $data['wishlist'] = $this->wishlist_m->get();
        $this->load->view('user/templates/header',$data);
        $this->load->view('user/home/cart_view');
        $this->load->view('user/templates/footer');
		// $data['row'] = $this->wishlist_m->get();
        // $this->template->load('template_pembayaran','pembayaran/wishlist_view', $data);
        // 
	}

	public function add($id)
        {
            // check_not_login();
            $produk = new stdClass();
            $produk->id_produk = null;
            $this->wishlist_m->add($id);
            $this->session->set_flashdata('success','Data Berhasil ditambah');
            redirect('pria');
		}
		
        public function edit($id)
        {
            $this->merek_m->edit($id);
        }

	public function proses()
	{
		
	}
	public function del($id)
	{
	$this->wishlist_m->del($id);
	if ($this->db->affected_rows()>0) {
		$this->session->set_flashdata('success','data berhasil di hapus');
	}
	redirect('cart');
    }
    public function detail($id)
	{
        $query = $this->produk_m->get($id);
            if ($query->num_rows()>0) {
                $produk = $query->row();
                $data = array(
                    'page'=> 'add',
                    'row'=> $produk,
                );
                $this->template->load('template_produk','product/product_detail',$data);
            }else {
                echo"<script>
                alert('Data Tidak Ditemukan');";
                redirect('product');
            }
	}
	

}
