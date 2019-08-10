<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wanita_m extends CI_Model {
    public function get($id = null )
    {
        $this->db->select('produk.*,kategori.kategori_produk,brand.brand_produk');
        $this->db->from('produk');
        $this->db->where('produk.id_kategori','2');
        $this->db->join('kategori','kategori.id_kategori = produk.id_kategori');
        $this->db->join('brand','brand.id_brand = produk.id_merek');
        if($id != null){
            $this->db->where('id_produk', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}