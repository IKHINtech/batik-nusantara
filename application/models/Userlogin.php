<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Model { 
    
    public function login($post)
    {
        // $this->db->select('*')->from('user');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password',sha1($post['password']));
        $this->db->limit(1);
        
        $query = $this->db->get();

        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;

        }
        
    }

    public function get($id = null )
    {
        $this->db->from('user');
        if($id != null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $param['name']= $post['fullname'];
        $param['username']= $post['username'];
        $param['password']= sha1($post['password']);
        // $param['address']= $post['address']!="" ? $post['address'] : null;
        // $param['level']= $post['level'];
        $this->db->insert('user',$param);
    }

    public function del($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('user');
    }
    public function edit($post)
    {
        $param['name']= $post['fullname'];
        $param['username']= $post['username'];
        if (!empty($post['password'])) {
            $param['password']= sha1($post['password']);
        }
        $param['address']= $post['address']!="" ? $post['address'] : null;
        $param['level']= $post['level'];
        $this->db->where('user_id',$post['user_id']);
        $this->db->update('user',$param);
    }
}
