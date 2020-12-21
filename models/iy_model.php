<?php

class iy_model extends CI_Model{

  public function getData(){

    $this->load->database();

    $sql = "SELECT * FROM tempatibadah;";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  
}


?>