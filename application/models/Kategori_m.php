<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {
    public function get($id = null )
    {
        $this->db->from('kategori');
        if($id != null){
            $this->db->where('id_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post) 
    {
        $param = [
            'kategori_produk'=> $post['kategori_produk'],
        ];
        $this->db->insert('kategori', $param);
    }
    
    public function edit($post)
    {
        $param = [
            'kategori_produk'=> $post['kategori_produk'],
        ];
        $this->db->where('id_kategori',$post['id']);
        $this->db->update('kategori', $param);
    }
    public function del($id)
    {
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }


}