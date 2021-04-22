<?php
public function detail_keranjang()
    {
        $this->load->view('template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('keranjang'); //menampilkan halaman keranjang (keranjang.php)  di folder view 
        $this->load->view('template/footer'); //menampilkan halaman footer (footer.php) pada folder template di folder view
    }
    
    //fungsi untuk hapus keranjang
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index'); //redirect fungsi index pada  dashboard.php 
    }

    //fungsi pembayaran
    public function pembayaran()
    {
        $this->load->view('template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('pembayaran'); //menampilkan halaman pembayaran (pembayaran.php)  di folder view 
        $this->load->view('template/footer');  //menampilkan halaman footer (footer.php) pada folder template di folder view
    } 