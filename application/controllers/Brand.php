<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	function __construct()
    { 
        parent::__construct();
        // check_not_login();
        $this->load->model('brand_m');
    }
	public function index()
	{
		$data['row'] = $this->brand_m->get();
		$this->template->load('admin/template','admin/brand/brand_view', $data);
	}

	public function add()
        {
            $brand = new stdClass();
            $brand->id_brand = null;
            $brand->brand_produk = null;
            $data = array(
                'page'=> 'add',
                'row'=> $brand
            );
            $this->template->load('admin/template','admin/brand/brand_input',$data);
		}
		
    public function edit($id)
    {
        $query = $this->brand_m->get($id);
            if ($query->num_rows()>0) {
                $brand = $query->row();
            $data = array(
                'page'=> 'edit',
                'row'=> $brand
            );
            $this->template->load('admin/template','admin/brand/brand_input',$data);
        }else {
            $this->session->set_flashdata('tidakketemu','Data Tidak Ditemukan');
            redirect('brand');
        }
    }

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->brand_m->add($post);
		}else if (isset($_POST['edit'])) {
			$this->brand_m->edit($post); 
		}

		if ($this->db->affected_rows()>0) {
			$this->session->set_flashdata('updatesukses','Data Berhasil Diupdate');
                
		}
		redirect('brand');
	}
	public function del($id)
	{
	$this->brand_m->del($id);
	if ($this->db->affected_rows()>0) {
		$this->session->set_flashdata('delete','Data berhasil dihapus');
	}
	redirect('brand');
    }

}
