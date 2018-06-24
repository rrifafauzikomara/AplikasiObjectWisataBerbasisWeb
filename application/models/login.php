<?php
class login extends CI_Model {
    
    function __contsruct(){
        parent::Model();
    }
    
    function cek_login($where){
        $data = "";
        $this->db->select("*");
        $this->db->from("admin");
        $this->db->where($where);
        $this->db->limit(1);
        $Q = $this->db->get();
        if ($Q->num_rows() > 0) {
            $data = $Q->row();
            $this->set_session($data);
            return true;
        }
        return false;
    }
    
    function set_session(&$data){
        $session = array(
                    'username'    => $data->username,
                    'password'    => $data->password,
                    'logged_in'     => TRUE
                    );
        $this->session->set_userdata($session);
    }

}
