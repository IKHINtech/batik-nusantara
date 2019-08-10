<?php

class Fungsi
{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('userlogin');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->userlogin->get($user_id)->row();
        return $user_data;
    }
}
