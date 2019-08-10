<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_m extends CI_Model {
    public function get($id = null ) 
    {
        $this->db->select('wishlist.*,produk.nama_produk, produk.harga_produk, produk.deskripsi, produk.image');
        $this->db->from('wishlist');
        $this->db->join('produk','produk.id_produk = wishlist.id_produk');
        if($id != null){
            $this->db->where('id_wishlist', $id);
        }
        $total['jumlah'] = 
        $query = $this->db->get();
        return $query;
    }
    public function add($id)
    {
        $param = [
            'id_produk'=> $id,
            'quantity'=>'1',
        ];
        $this->db->insert('wishlist', $param);
    }
    public function del($id)
    {
        $this->db->where('id_wishlist',$id);
        $this->db->delete('wishlist');
    }
}