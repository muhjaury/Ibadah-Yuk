<?php

class reminder_model extends CI_Model{

  public function getData(){

    $this->load->database();

    $sql = "SELECT * FROM jenispengingat WHERE jp_idagama = '1' ;";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }
}


?>