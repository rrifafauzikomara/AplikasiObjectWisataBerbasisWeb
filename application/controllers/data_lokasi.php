<?php
class data_lokasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        $this->load->model('lokasi_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('upload');
    }

    function index(){
            $data=array(
            'title'=>'Data Lokasi',
            'data_lokasi' =>$this->lokasi_model->getAllDataLokasi(),
            
        );
        $this->load->view('haladmin/lokasi',$data);
    }

    function editlokasi(){
        $data["dt_lokasi"]=$this->lokasi_model->getDataLokasiEdit($_POST['lokasi_id']);
        echo $this->load->view('haladmin/editlokasi',$data,true);
    } 



//    ===================== INSERT =====================
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

        $data=array(
            'nama_lokasi'=>$this->input->post('nama_lokasi'),
            'garis_lintang'=>$this->input->post('garis_lintang'),
            'garis_bujur'=>$this->input->post('garis_bujur'),
            'informasi'=>$this->input->post('informasi'),
            'gambar'=>$gambar,
        );
        $this->lokasi_model->insertData('lokasi',$data);
        $this->session->set_flashdata('notif','Tambah Lokasi Berhasil');
        redirect("data_lokasi");
    }

    function simpanlokasi(){
          $id=$this->input->post('id_lokasi');
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

        $data=array(
            'nama_lokasi'=>$this->input->post('nama_lokasi'),
            'garis_lintang'=>$this->input->post('garis_lintang'),
            'garis_bujur'=>$this->input->post('garis_bujur'),
            'informasi'=>$this->input->post('informasi'),
            'gambar'=>$gambar,
        );
        $this->lokasi_model->updateDatab('lokasi',$data, $id);
        $this->session->set_flashdata('notif','Edit lokasi Berhasil');
        redirect("data_lokasi");
    }

//  **  ========================== Edit =======================
    function edit(){
        $id=$this->input->post('id_lokasi');
        $data=array(
            'nama_lokasi'=>$this->input->post('nama_lokasi'),
            'garis_lintang'=>$this->input->post('garis_lintang'),
            'garis_bujur'=>$this->input->post('garis_bujur'),
            'informasi'=>$this->input->post('informasi'),
        );

        $this->lokasi_model->updateData('lokasi',$data,$id);
        redirect("data_lokasi");
    }




//    ========================== DELETE =======================
    function hapus(){
        $id['id_lokasi'] = $this->uri->segment(3);
        $this->lokasi_model->deleteData('lokasi',$id);

        $this->session->set_flashdata('notif','Hapus Lokasi Berhasil');
        redirect("data_lokasi");
    }
}