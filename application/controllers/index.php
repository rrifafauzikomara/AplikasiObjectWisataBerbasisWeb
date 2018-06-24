<?php
class index extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('message_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Komentar',
            'komen' =>$this->message_model->getAllDatacf(),
            
        );
        $this->load->view('/index',$data);
    }

    function tambah(){

        $data=array(
            //'id_cf'=>$this->session->userdata('id_cf'),
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'ket'=>$this->input->post('ket'),
        );
        $this->message_model->insertData('contact_form',$data);
        redirect("index ");
    }
}