<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class destinasi extends CI_Controller {
    function __construct(){
        parent::__construct();
        
        $this->load->model('lokasi_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }


	public function index()
	{
	$this->load->library('googlemaps');
	$this->load->database();
	$config['center'] = '-5.4329, 120.2051';
	$config['zoom'] = '10';
	//$config['apikey'] = 'AIzaSyA_NhtcfKRvldMkxAMNRGCahX0C_OUpj7Y';
	$this->googlemaps->initialize($config);

	
	$query = $this->db->get("lokasi");
	
	foreach ($query->result() as $row)
	{
		$marker = array();
    	$marker['position']=$row->garis_lintang.",".$row->garis_bujur;
    	$marker['infowindow_content']=$row->nama_lokasi;

    	$this->googlemaps->add_marker($marker);
	}
	$data['map'] = $this->googlemaps->create_map();
	$data1['lokasi']=$query->result();
	$this->load->view('destinasi', array_merge($data,$data1));
	
	}
}

