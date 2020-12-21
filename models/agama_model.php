<?php

class agama_model extends CI_Model{

  public function getAgama(){

    $this->load->database();
    $email = $this->session->userdata('email');

    $sql = "SELECT u_agama FROM user WHERE email = '$email';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

}


?>