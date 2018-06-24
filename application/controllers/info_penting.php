
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info_penting extends CI_Controller {

	function __construct(){
		parent:: __construct(); 
	$this->load->model('model_info');
	}

	public function index()
	{
		$data['info'] = $this->model_info->GetInfo();
		$this->load->view('info_penting', $data);
	
	}

function tambah(){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']   = '10000';
        $config['max_width']  = '20000';
        $config['max_height']  = '20000';
                
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
                $gambar="";
        }else{
                $gambar=$this->upload->file_name;
        }
        } 


	public function detail()
	{
		$id=$this->input->get('id');
		$data['info'] = $this->model_info->GetInfodetail($id);
		$this->load->view('detail_info', $data);
	
	}
}

