<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    check_not_login();
    check_admin();
    $this->load->model('inventory_model');
    $this->load->library('form_validation');
  }
  public function index()
    {
      // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
      $data['row'] = $this->inventory_model->get();
      $this->template->load('template','inventory/inventory_view', $data); 
    }
}