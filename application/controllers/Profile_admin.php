<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
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
        // $data['params'] = $this->db->get_where('user', ['name' => $this->session->userdata('userid')])->row_array();
        $data['row'] = $this->userlogin->get();
        $this->template->load('template','profile/user_profile', $data);
        
    }
    function get_user(){
        $user_id = $this->session->userdata('userid');
        $user_data = $this->userlogin->get($user_id)->row();
        return $user_data;
    }
    
}

