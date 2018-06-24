<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rute extends CI_Controller {    
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
	
	$id=$this->input->get('id');
	$this->db->where('id_lokasi', $id);
	$query = $this->db->get("lokasi");
	$data['lokasi'] = null;
	if ($query) {
		$data['lokasi'] = $query;
	}
	$data=$query->result_array();

	$config['center'] = '-5.4329, 120.2051';
	$config['zoom'] = '8';
	$config['directions'] = TRUE;
	$config['directionsStart'] = '-5.077747,119.5494844';
	$config['directionsEnd'] = $data[0]["garis_lintang"].",".$data[0]["garis_bujur"];
	$config['directionsDivID'] = 'directionsDiv';
	//$config['apikey'] = 'AIzaSyA_NhtcfKRvldMkxAMNRGCahX0C_OUpj7Y';
	$this->googlemaps->initialize($config);
	$data['map'] = $this->googlemaps->create_map();
	$data1['lokasi']=$query->result();
	$this->load->view('rute', array_merge($data,$data1));	
	}

}

