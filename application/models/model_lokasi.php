<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_lokasi extends CI_Model {

    public function create(){
        $data = array('id_lokasi' => $this->input->post('id_lokasi'),
            'nama_lokasi'=>$this->input->post('nama lokasi'),
            'garis_lintang'=>$this->input->post('garis lintang'),
            'garis_bujur'=>$this->input->post('garis bujur'),
            'informasi'=>$this->input->post('informasi'),
            'gambar'=>$this->input->post('gambar'));
        $query = $this->db->insert('lokasi', $data);
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('lokasi');
        return $query;
    }
    public function getbylokasi($id){
        $this->db->where('id_lokasi', $id);
        $query = $this->db->get('lokasi');
        return $query;
    }
    public function read($id){
        $this->db->where('id_lokasi', $id);
        $query = $this->db->get('lokasi');
        return $query;
    }
    public function update(){
        $data = array('id_lokasi'=>$this->input->post('id_lokasi'),
            'nama_lokasi'=>$this->input->post('nama lokasi'),
            'garis_lintang'=>$this->input->post('garis lintang'),
            'garis_bujur'=>$this->input->post('garis bujur'),
            'informasi'=>$this->input->post('informasi'),
            'gambar'=>$this->input->post('gambar'));
        $this->db->where('id_lokasi', $this->input->post('id_lokasi'));
        $query = $this->db->update('lokasi', $data);
        return $query;
    }
    public function delete(){
        $this->db->where('id_lokasi', $this->input->post('id_lokasi'));
        $query = $this->db->delete('lokasi');
        return $query;
    }
    public function deletebyidlokasi($id){
        $this->db->where('id_lokais', $id);
        $query = $this->db->delete('lokasi');
        return $query;
    }

}
