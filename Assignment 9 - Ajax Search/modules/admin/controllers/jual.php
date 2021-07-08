<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jual extends CI_Controller {
//fungsi untuk menampilkan isi halaman jual
    public function index()
    {   
        $data['jual'] = $this->model_jual->tampil_data();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/jual',$data);
        $this->load->view('admin/template_admin/footer');
    }

//fungsi untuk menampilkan detail jual
    public function detail($id_jual)
    {
       $data['jual'] = $this->model_jual->ambil_idjual($id_jual);
        $data['pesanan'] = $this->model_jual->ambil_idpesanan($id_jual);
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/detail_jual',$data);
        $this->load->view('admin/template_admin/footer');
    }
    public function Data_Jual()
    { 
      
        $this->load->view('admin/fpdf1/lat1411450');
       
    }

    public function Data_Pesanan($id_jual)
    { 
        $data['jual'] = $this->model_jual->ambil_idjual($id_jual);
       
        $this->load->view('admin/fpdf1/lat1311450',$data);
       
    }
}