<?php
class Data extends CI_Model{
    function scrubbing($data){
        foreach ($data as $k => $v) {
            $data[$k] = htmlspecialchars($v);
        }
        return $data;
    }
    function insert($table, $data){
        $this->db->insert($table, $data);
    }

    function get_last_id($table,$data){
        $this->db->insert($table, $data);
        $insertId = $this->db->insert_id();
        return  $insertId;
    }

    function update($table,$data,$w){
        foreach ($w as $k => $val) {
            $this->db->where($k, $val);
        }
         $this->db->update($table,$data);
    }

    function getdata($table, $where = null, $limit = null){
        $this->db->select('*')->from($table);
        if (is_array($where) && $where != null) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if ($limit != null)
            $this->db->limit($limit);
        return $this->db->get()->result_array();
    }

    public function delete($table,$where)
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->delete($table);
    }

    public function myquery($q){
        $x = $this->db->query($q);
        return (method_exists($x, "result_array")) ? $x->result_array() : "";
    }

    public function join($col = '*', $from, $join, $to_join, $type)
    {
        $this->db->select($col);
        $this->db->from($from);
        $this->db->join($join, $to_join, $type);
        return $this->db->get()->result_array();
    }
    function fetchJoin($table, $column = "*", $join = null, $where = null, $joinType = null)
    {
        $this->db->select($column)->from($table);
        if (is_array($join) && $join != null) {
            foreach ($join as $key => $value) {
                $this->db->join($key, $value, $joinType);
            }
        }
        if (is_array($where) && $where != null) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        } elseif ($where != null AND !is_array($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }
}
