<?php

class profile_model extends CI_Model{

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

    $sql = "SELECT * FROM pengingat WHERE p_euser = '$email';";

    $result = $this->db->query($sql);

    $data = $result->result_array();

    return $data;
  }

  public function getTipePengingat(){

    $this->load->database();
    $agama = $this->session->userdata('agama');

    $result = $this->db->query("SELECT nama_tipe FROM jenispengingat WHERE jp_agama = '$agama' ORDER BY waktu;");

    $data = $result->result_array();

    return $data;
  }

  public function addPengingat(){

    $this->load->helper('form');
    $this->load->database();

    //tangkap data
    $nama = $this->input->post('namapengingat');
    $tanggal = $this->input->post('tanggal');
    $email = $this->session->userdata('email');
    $pengingat = $this->input->post('pengingat');

    //query
    $sql = "INSERT INTO pengingat (nama_pengingat, tanggal, p_euser, p_njenispengingat) VALUES ('$nama', '$tanggal', '$email', '$pengingat')";

    //eksekusi query
    $this->db->query($sql);

    return;
  }

}


?>