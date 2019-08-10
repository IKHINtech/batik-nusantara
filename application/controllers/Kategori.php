<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
    { 
        parent::__construct();
        // check_not_login();
        $this->load->model('kategori_m'); 
    }
	public function index()
	{
		$data['row'] = $this->kategori_m->get();
		$this->template->load('admin/template','admin/kategori/kategori_view', $data);
	}

	public function add()
        {
            $kategori = new stdClass();
            $kategori->id_kategori = null;
            $kategori->kategori_produk = null;
            $data = array(
                'page'=> 'add', 
                'row'=> $kategori
            );
            $this->template->load('admin/template','admin/kategori/kategori_input',$data);
		}
		
        public function edit($id)
        {
            $query = $this->kategori_m->get($id);
            if ($query->num_rows()>0) {
                $kategori = $query->row();
                $data = array(
                    'page'=> 'edit',
                    'row'=> $kategori
                );
                $this->template->load('admin/template','admin/kategori/kategori_input',$data);
            }else {
				$this->session->set_flashdata('tidakketemu','Data Tidak Ditemukan');
                redirect('kategori');
            }
        }

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->kategori_m->add($post);
		}else if (isset($_POST['edit'])) {
			$this->kategori_m->edit($post);
		}

		if ($this->db->affected_rows()>0) {
			$this->session->set_flashdata('updatesukses','Data berhasil diupdate');
		}
		redirect('kategori');
	}
	public function del($id)
	{
	$this->kategori_m->del($id);
	if ($this->db->affected_rows()>0) {
		$this->session->set_flashdata('delete','Data berhasil dihapus');
	}
	redirect('kategori');
    }

}
