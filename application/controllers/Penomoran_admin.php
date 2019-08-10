<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penomoran extends CI_Controller {

    function __construct()
    { 
        parent::__construct();
        check_not_login();
        $this->load->model('penomoran_model');
    }
    public function index()
    {
        $data['row'] = $this->penomoran_model->get();
        $this->template->load('template','penomoran/penomoran_view',$data);
    }

    public function add()
        {
            $penomoran = new stdClass();
            $penomoran->penomoran_id = null;
            $penomoran->no_doc = null;
            $penomoran->system_name = null;
            $penomoran->serial_number = null;
            $penomoran->version = null;
            $penomoran->dept = null;
            $penomoran->valid_date = null;
            $data = array(
                'page'=> 'add',
                'row'=> $penomoran
            );
            $this->template->load('template','penomoran/penomoran_form',$data);
        }
        public function edit($id)
        {
            $query = $this->penomoran_model->get($id);
            if ($query->num_rows()>0) {
                $penomoran = $query->row();
                $data = array(
                    'page'=> 'edit',
                    'row'=> $penomoran
                );
                $this->template->load('template','penomoran/penomoran_form',$data);
            }else {
                echo"<script>
                alert('Data Tidak Ditemukan');";
                echo"window.location='".site_url('penomoran')."';</script>";
            }
        }

        public function proses()
        {
            $post = $this->input->post(null, TRUE);
            if (isset($_POST['add'])) {
                $this->penomoran_model->add($post);
            }else if (isset($_POST['edit'])) {
                $this->penomoran_model->edit($post);
            }

            if ($this->db->affected_rows()>0) {
                echo"<script>
                alert('Data berhasil diupdate');</script>";
            }
            echo"<script>
            window.location='".site_url('penomoran')."';</script>";
        }
    
    public function del($id)
    {
        $this->penomoran_model->del($id);
        if ($this->db->affected_rows()>0) {
            echo"<script>
            alert('Data berhasil dihapus');</script>";
        }
        echo"<script>
        window.location='".site_url('penomoran')."';</script>";
    }
    // function tanggal_valid()
    // {
    //     $post = $this->input->post(null,TRUE);
    //     $query = $this->db->query("SELECT DATE_FORMAT(valid_date,'d F Y') FROM penomoran WHERE penomoran_id = '$post[]'");
    //     if ($query->num_rows()>0) {
    //         $this->form_validation->set_message('username_check','{field} ini sudah terpakai, silahkan ganti');
    //         return FALSE;
    //     }else{
    //         return TRUE;
    //     }
    // } 
}