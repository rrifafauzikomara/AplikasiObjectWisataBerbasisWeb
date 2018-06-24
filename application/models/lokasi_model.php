<?php

class lokasi_model extends CI_Model{
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
        $this->db->where('id_lokasi',$id)->update($table,$data);
    }
    function deleteData($table,$id)
    {
        $this->db->delete($table,$id);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    public function getAllDataLokasi()
    {
        $this->db->order_by('id_lokasi', 'desc');
        $query = $this->db->get('lokasi');
        return $query->result();
    }
    function getDataLokasiEdit($id){
        return $this->db->query("SELECT * from lokasi where id_lokasi = '$id' ")->result();
    }
    function getLokasi(){
        $this->db->select("informasi");
        $this->db->get();
        return $query->result();
    }
    }
    
    
    ?>