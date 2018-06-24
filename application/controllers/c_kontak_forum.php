<?php

class c_kontak_forum extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('message_model');
		$this->load->helper(array('form','url'));
		$this->load->library('session');
	}


	function index(){
            $data=array(
            'title'=>'Data cf',
            'data_cf' =>$this->message_model->getAllDatacf(),
            );
            $this->load->view('haladmin/v_kontak_forum', $data);
	}

     function editforum(){
        $data["dt_lokasi"]=$this->message_model->getDataLokasiEdit($_POST['lokasi_id']);
        echo $this->load->view('haladmin/editforum',$data,true);
    } 

    function simpankomentar(){
    $id_cf = $this->input->post('id_cf'); // I can echo this here. It works
    $komentar = $this->input->post('komentar'); // I can echo this here. It works

    $sql = "INSERT INTO balas(id_cf,komentarb) " .
        "VALUES (" .
        $this->db->escape($id_cf) .
        "," .
        $this->db->escape($komentar) .
        ")";
    $this->db->query($sql);
    redirect("c_kontak_forum");
    }



	function tambah(){

        $data=array(
            //'id_cf'=>$this->session->userdata('id_cf'),
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'ket'=>$this->input->post('ket'),
        );
        $this->message_model->insertData('contact_form',$data);
        redirect("c_kontak_forum");

    }

    function edit(){

        $data=array(
            //'id_cf'=>$this->session->userdata('id_cf'),
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'ket'=>$this->input->post('ket'),
        );
        $this->message_model->insertData('contact_form',$data);
        redirect("c_kontak_forum");

    }
}

