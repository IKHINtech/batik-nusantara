<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('userlogin');
        $this->load->library('form_validation');

    }
	public function index()
    {
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['row'] = $this->userlogin->get();
        $this->template->load('template','user/user_view', $data); 
    }
    public function add()
    {
        $this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('username','User Name','required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('password1','Password Confirmation','required|matches[password]',
            array('matches' => '%s password Confirmation not matches' )
        );
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
        if ($this->form_validation->run()==FALSE) {
            $this->template->load('template','user/user_form_add');
        }
        else {
            $post = $this->input->post(null,TRUE);
            $this->userlogin->add($post);
            if ($this->db->affected_rows()>0) {
                $this->session->set_flashdata('success','Data Berhasil Disimpan');
            }
            redirect('user');
        }
        
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('username','User Name','required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password','Password','min_length[5]');
            $this->form_validation->set_rules('password1','Password Confirmation','matches[password]',
            array('matches' => '%s password Confirmation not matches' )
        );
        }
        if ($this->input->post('password1')) {
            $this->form_validation->set_rules('password1','Password Confirmation','matches[password]',
            array('matches' => '%s password Confirmation not matches' )
        );
        }   
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
        if ($this->form_validation->run()==FALSE) {
            $query = $this->userlogin->get($id);
            if ($query->num_rows()>0) {
                $data['row'] = $query->row();
                $this->template->load('template','user/user_form_edit',$data);
            }else{
                $this->session->set_flashdata('tidakketemu','Data Tidak Ditemukan');
                redirect('user');
            }
            
        }
        else {
            $post = $this->input->post(null,TRUE);
            $this->userlogin->edit($post);
            if ($this->db->affected_rows()>0) {
                $this->session->set_flashdata('updatesukses','Data Berhasil Diupdate');
                
            }
            redirect('user');
            }
        }


    function username_check()
    {
        $post = $this->input->post(null,TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows()>0) {
            $this->form_validation->set_message('username_check','{field} ini sudah terpakai, silahkan ganti');
            return FALSE;
        }else{
            return TRUE;
        }
    } 
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->userlogin->del($id);
        if ($this->db->affected_rows()>0) {
            $this->session->set_flashdata('delete','Data Berhasil Dihapus');
        }
        redirect('user');
    }
    
}
