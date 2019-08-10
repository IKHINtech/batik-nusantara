<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller { 

	function __construct()
    { 
        parent::__construct();
        // check_not_login();
        $this->load->model('produk_m');
    }
	public function index()
	{
		$data['row'] = $this->produk_m->get();
		$this->template->load('admin/template','admin/penomoran/product_view', $data);
	}

	public function add()
        { 
            $produk = new stdClass();
            $produk->id_produk = null;
            $produk->nama_produk = null;
            $produk->harga_produk = null;
            $produk->stock_produk = null;
            $produk->deskripsi = null;

            $this->load->model('kategori_m');
            $query_kategori = $this->kategori_m->get();
            $kategori[null] = '-Pilih-';
            foreach ($query_kategori->result() as $ktg) {
                $kategori[$ktg->id_kategori]= $ktg->kategori_produk;
            }
            $this->load->model('brand_m');
            $query_brand = $this->brand_m->get();
            $brand[null] = '-Pilih-';
            foreach ($query_brand->result() as $mrk) {
                $brand[$mrk->id_brand]= $mrk->brand_produk;
            }
            $data = array(
                'page'=> 'add',
                'row'=> $produk,
                'kategori'=>$kategori,'selectedkategori'=>null,
                'brand'=>$brand, 'selectedbrand'=>null,
            );
            $this->template->load('admin/template','admin/penomoran/product_form',$data);
		}
		
        public function edit($id)
        {
            $query = $this->produk_m->get($id);
            if ($query->num_rows()>0) {
                $produk = $query->row();
                $this->load->model('kategori_m');
                $query_kategori = $this->kategori_m->get();
                $kategori[null] = '-Pilih-';
                foreach ($query_kategori->result() as $ktg) {
                    $kategori[$ktg->id_kategori]= $ktg->kategori_produk; 
                }
                $this->load->model('brand_m');
                $query_brand = $this->brand_m->get();
                $brand[null] = '-Pilih-';
                foreach ($query_brand->result() as $mrk) {
                    $brand[$mrk->id_brand]= $mrk->brand_produk;
                }
                $data = array(
                    'page'=> 'edit',
                    'row'=> $produk,
                    'kategori'=>$kategori,'selectedkategori'=>$produk->id_kategori,
                    'brand'=>$brand, 'selectedbrand'=>$produk->id_merek,
                );
                $this->template->load('admin/template','admin/penomoran/product_form',$data);
            }else {
                echo"<script>
                alert('Data Tidak Ditemukan');";
                redirect('product');
            }
        }

	public function proses()
	{
        $config['upload_path']          = './upload/produk/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; 
        $config['max_size']             = 2048;
        $config['file_name']            = 'item-'.date('ymd');
        $this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
           
            if(@$_FILES['image']['name'] != null){
                if ($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->produk_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success','data berhasil disimpan');
                    }
                    redirect('product');
                } else {
                    $error = $this->upload->display_error();
                    $this->session->set_flashdata('error',$error);
                    redirect('product/add');
                    }
                        
                } else {
                    $post['image'] = null;
                    $this->produk_m->add($post);
                    if ($this->db->affected_rows()>0) {
                    $this->session->set_flashdata('success','data berhasil disimpan');
                    }
                    redirect('product');
                }
            }else if(isset($_POST['edit'])){
                if(@$_FILES['image']['name'] != null){
                    if ($this->upload->do_upload('image')) {

                         $product = $this->produk_m->get($post['id'])->row();
                         if($product->image != null){
                             $target_file ='./upload/produk/'.$product->image;
                             unlink($target_file);
                         }
                        $post['image'] = $this->upload->data('file_name');
                        $this->produk_m->edit($post);
                        if ($this->db->affected_rows()>0) {
                            $this->session->set_flashdata('success','data berhasil disimpan');
                        }
                        redirect('product');
                    } else {
                        $error = $this->upload->display_error();
                        $this->session->set_flashdata('error',$error);
                        redirect('product/add');
                        }
                            
                    } else {
                        $post['image'] = null;
                        $this->produk_m->edit($post);
                        if ($this->db->affected_rows()>0) {
                        $this->session->set_flashdata('success','data berhasil disimpan');
                        }
                        redirect('product');
                    }
                $this->produk_m->edit($post);
            }
            if ($this->db->affected_rows()>0) {
                $this->session->set_flashdata('success','data berhasil diedit');
            }
            redirect('product');
	}
	public function del($id)
	{
	$this->produk_m->del($id);
	if ($this->db->affected_rows()>0) {
		$this->session->set_flashdata('success','data berhasil di hapus');
	}
	redirect('product');
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
                $this->template->load('admin/template','admin/detail_view',$data);
            }else {
                echo"<script>
                alert('Data Tidak Ditemukan');";
                redirect('product');
            }
	}
	

}
