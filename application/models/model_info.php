<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_info extends CI_Model {

    public function GetInfo()
    	{
    	
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('info');
        return $query->result();
    	}
    	public function GetInfodetail($id)
    	{
    	$this->db->where('id', $id);
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('info');
        return $query->result();
    	}
    }