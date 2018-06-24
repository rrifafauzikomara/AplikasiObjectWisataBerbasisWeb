<?php

class message_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function updateDatab($table,$data,$id)
    {
        $this->db->where('id_cf',$id)->update($table,$data);
    }
    function deleteData($table,$id)
    {
        $this->db->delete($table,$id);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
     function getDataLokasiEdit($id){
        return $this->db->query("SELECT * from contact_form where id_cf = '$id' ")->result();
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    public function getAllDatacf()
    {
        $this->db->order_by('id_cf', 'asc');
        $query = $this->db->get('contact_form');
        return $query->result();
    }
    function getDatacfEdit($id){
        return $this->db->query("SELECT * from contact_form where id_cf = '$id' ")->result();
    }
}