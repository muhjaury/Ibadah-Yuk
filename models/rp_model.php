<?php

class rp_model extends CI_Model{

  public function regUser(){

    $this->load->helper('form');
    $this->load->database();

    //tangkap data
    $nama = $this->input->post('namereg');
    $email = $this->input->post('emailreg');
    $agama = $this->input->post('agamareg');
    $pass = $this->input->post('passreg');

    //gambar
    $config['upload_path']          = './images/';
    $config['allowed_types']        = 'gif|jpg|png';

     //load library upload
    $this->load->library('upload', $config);

    //eksekusi upload
    $this->upload->do_upload('fotomhs');

    //ambil nama foto
    $foto = $_FILES['fotomhs']['name'];

    //query
    $sql = "INSERT INTO user (nama_user, email, password, foto, u_agama) VALUES ('$nama', '$email', '$pass', '$foto', '$agama')";

    //eksekusi query
    $this->db->query($sql);

    return;
  }
}


?>