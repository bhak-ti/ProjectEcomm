<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Merk extends CI_Controller {

   public function merk_sepeda(){
    $data['sepeda']=$this->model_merk->sepeda()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('merk/sepeda',$data);
    $this->load->view('template/footer');
   }

   public function merk_aksesoris(){
    $data['aksesoris']=$this->model_merk->aksesoris()->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('merk/aksesoris',$data);
    $this->load->view('template/footer');
   }

   public function cari(){
   $kunci    = $this->input->post('cari');
   $data['find']=$this->model_merk->cari($kunci);
   $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('merk/ketemu',$data);
    $this->load->view('template/footer');

     }
  
}