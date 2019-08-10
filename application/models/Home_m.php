<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {
    public function get($id = null ) 
    {
        $this->db->select('produk.*,kategori.kategori_produk,merek.merek_produk');
        $this->db->from('produk');
        $this->db->join('kategori','kategori.id_kategori = produk.id_kategori');
        $this->db->join('merek','merek.id_merek = produk.id_merek');
        if($id != null){
            $this->db->where('id_produk', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}