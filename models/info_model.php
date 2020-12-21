<?php

class info_model extends CI_Model{

  public function getUser(){

    $this->load->database();
    $email = $this->session->userdata('email');

    $sql = "SELECT * FROM user WHERE email = '$email';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }
}


?>