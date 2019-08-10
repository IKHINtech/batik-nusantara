<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_m extends CI_Model {
    public function get($id = null )
    {
        $this->db->from('brand');
        if($id != null){
            $this->db->where('id_brand', $id);
        }
        $query = $this->db->get();
        return $query;
    } 
    public function add($post)
    {
        $param = [
            'brand_produk'=> $post['brand_produk'],
        ];
        $this->db->insert('brand', $param);
    }
    
    public function edit($post)
    {
        $param = [
            'id_brand'=> $post['id'],
            'brand_produk'=> $post['brand_produk'],
        ];
        $this->db->where('id_brand',$post['id']);
        $this->db->update('brand', $param);
    }
    public function del($id)
    {
        $this->db->where('id_brand',$id);
        $this->db->delete('brand');
    }


}