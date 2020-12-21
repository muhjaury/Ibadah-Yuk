<?php

class delete_model extends CI_Model{

  public function getUser(){

    $this->load->database();
    $email = $this->session->userdata('email');

    $sql = "SELECT * FROM user WHERE email = '$email';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  public function getPengingat(){

    $this->load->database();
    $email = $this->session->userdata('email');

    $result = $this->db->query("SELECT * FROM pengingat WHERE p_euser = '$email' ORDER BY tanggal;");

    $data = $result->result_array();

    return $data;
  }

  public function deletePengingat(){

    $this->load->helper('form');
    $this->load->database();
    $email = $this->session->userdata('email');
    $pengingat = $this->input->post('pengingat');

    //query
    $sql = "DELETE FROM pengingat where p_euser = '$email' AND nama_pengingat = '$pengingat'";

    //eksekusi query
    $this->db->query($sql);

    return;
  }

}


?>