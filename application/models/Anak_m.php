<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_m extends CI_Model {
    public function get($id = null )
    {
        $this->db->select('produk.*,kategori.kategori_produk,brand.brand_produk');
        $this->db->from('produk');
        $this->db->where('produk.id_kategori','5');
        $this->db->join('kategori','kategori.id_kategori = produk.id_kategori');
        $this->db->join('brand','brand.id_brand = produk.id_merek');
        if($id != null){
            $this->db->where('id_produk', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)  
    {
        $param = [
            'nama_produk'=> $post['nama_produk'],
            'id_kategori'=> $post['kategori'],
            'harga_produk'=> $post['harga'],
            'id_merek'=> $post['merek'],
            'stock_produk'=> $post['stock'],
            'deskripsi'=> $post['deskripsi'],
            'image'=> $post['image'],
            
        ];
        $this ->db->insert('produk', $param);
    }
    public function edit($post) 
    {
        $params = [
            'nama_produk'=> $post['nama_produk'],
            'id_kategori'=> $post['kategori'],
            'harga_produk'=> $post['harga'],
            'id_merek'=> $post['merek'],
            'stock_produk'=> $post['stock'],
            'deskripsi'=> $post['deskripsi'],
        ];

        if($post['image'] != null) {
            $params ['image'] = $post['image'];
        }
        $this->db->where('id_produk',$post['id']);
        $this->db->update('produk', $params);
    }
    public function del($id)
    {
        $this->db->where('id_produk',$id);
        $this->db->delete('produk');
    }
}