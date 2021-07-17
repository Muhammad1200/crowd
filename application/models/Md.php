<?php

class Md extends CI_Model{

    public function getdata($table,$where = null){
       $this->db->select();
        $this->db->from($table);
        if(!empty($where)){
           foreach($where as $k=>$v){
               $this->db->where($k,$v);
           }
        }
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function searchdata($table,$title,$match){
        $this->db->select();
        $this->db->from($table);
        $this->db->like($title,$match);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function postdata($table,$data){
        $this->db->insert($table,$data);
    }
    public function delete($table,$id){
        $this->db->where('id',$id);
        $this->db->delete($table);
    }
    public function edit($table,$data,$id){
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }

}

?>