<?php

class Custome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_data($table, $data)
    {
        $resp = $this->db->insert($table, $data);
        return $resp;  
    }

    public function select_data($table_name)
    {
    //    $resp =  $this->db->select(['id', 'name', 'email', 'phone'])->from($table_name)->get()->result_array();
          $resp =  $this->db->select(['*'])->from($table_name)->get()->result_array();
       return $resp;
    }

    public function get_data($table_name, $warr)
    {
        $this->db->where($warr);
        $d = $this->db->select('*')->from($table_name)->get()->result_array();
        return $d;
    }

    public function delete_operation($table_name, $warr)
    {
        $this->db->where($warr);
        $this->db->delete($table_name);
    }

    public function update_operation($table_name, $warr)
    {
        $this->db->where($warr);
        $this->db->update($table_name);
    }

    public function get_single_record($table_name, $warr)
    {
        $this->db->where($warr);
        $resp = $this->db->select('*')->from($table_name)->get()->row();
        return $resp;
    }

    public function update_data($table_name, $data, $warr)
    {
        $this->db->where($warr);
       $data = $this->db->update($table_name, $data);
        return $data;
    }

    


}


?>
