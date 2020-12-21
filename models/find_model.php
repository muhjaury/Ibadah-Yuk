<?php

class find_model extends CI_Model{

  public function getUser(){

    $this->load->database();
    $email = $this->session->userdata('email');

    $sql = "SELECT * FROM user WHERE email = '$email';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  public function getData(){

    $this->load->database();
    $agama = $this->session->userdata('agama');

    $sql = "SELECT * FROM tempatibadah WHERE ti_agama = '$agama';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  public function getLocation(){

    $this->load->database();

    //tangkap data
    $agama = $this->input->post('agama');

    $sql = "SELECT * FROM tempatibadah WHERE ti_agama = '$agama';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }
}


?>