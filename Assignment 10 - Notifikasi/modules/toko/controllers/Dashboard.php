<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    //fungsi untuk menampilkan halaman toko
    public function index()
    { 
        $data['produk']=$this->model_produk->tampil_produk()->result();
        $this->load->view('toko/template/header');//menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('toko/template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('toko/dashboard',$data); //menampilkan halaman dashboard (dashboard.php)  di folder view dan menginclude $data pada dashboard.php
        $this->load->view('toko/template/footer');//menampilkan halaman footer (footer.php) pada folder template di folder view
    }

    //fungsi untuk tambah item ke keranjang saat mengklik tombol tambah ke keranjang pada produk
    public function tambah_keranjang($id)
    {
        $produk = $this->model_produk->find($id); //meload fungsi find pada model model_produk.php

        $data = array(
                'id'      => $produk->id_brg,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->nm_brg,
                //'options' => array('Size' => 'L', 'Color' => 'Red')
        );
    
    $this->cart->insert($data); //memasukkan data ke dalam cart
    redirect('toko/dashboard'); //redirect dashboard.php
    }

  
    public function tambah_keranjang_sepeda($id)
    {
        $produk = $this->model_produk->find($id); //meload fungsi find pada model model_produk.php

        $data = array(
                'id'      => $produk->id_brg,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->nm_brg,
                //'options' => array('Size' => 'L', 'Color' => 'Red')
        );
    
    $this->cart->insert($data); //memasukkan data ke dalam cart
    redirect('toko/merk/merk_sepeda'); //redirect dashboard.php
    }

    public function tambah_keranjang_aksesoris($id)
    {
        $produk = $this->model_produk->find($id); //meload fungsi find pada model model_produk.php

        $data = array(
                'id'      => $produk->id_brg,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->nm_brg,
                //'options' => array('Size' => 'L', 'Color' => 'Red')
        );
    
    $this->cart->insert($data); //memasukkan data ke dalam cart
    redirect('toko/merk/merk_aksesoris'); //redirect dashboard.php
    }


    
    //fungsi untuk mengetahui detail item yang dimasukan ke keranjang
    public function detail_keranjang()
    {
        $this->load->view('toko/template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('toko/template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('toko/keranjang'); //menampilkan halaman keranjang (keranjang.php)  di folder view 
        $this->load->view('toko/template/footer'); //menampilkan halaman footer (footer.php) pada folder template di folder view
    }
    
    //fungsi untuk hapus keranjang
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('toko/dashboard/index'); //redirect fungsi index pada  dashboard.php 
    }

    //fungsi pembayaran
    public function pembayaran()
    {
        $this->load->view('toko/template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('toko/template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('toko/pembayaran'); //menampilkan halaman pembayaran (pembayaran.php)  di folder view 
        $this->load->view('toko/template/footer');  //menampilkan halaman footer (footer.php) pada folder template di folder view
    } 

    //fungsi untuk proses pesanan
    public function proses_pesanan()
    {
        $proses = $this->model_jual->index(); //jika mengklik tombol bayar maka data pesanan dan data pelanggan akan masuk ke fungsi index() pada model_jual
        if($proses) 
        {
            $this->cart->destroy(); //jika pembayaran berhasil maka keranjang dikosongkan
            $this->load->view('toko/template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
            $this->load->view('toko/template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
            $this->load->view('toko/proses_pesanan');  //menampilkan halaman proses_pesanan (proses_pesanan .php)  di folder view 
            $this->load->view('toko/template/footer'); //menampilkan halaman footer (footer.php) pada folder template di folder view
        }
        else
        {
            echo "Maaf Pesanan Anda gagal Diproses";
        }
       
    }
    
    //fungsi untuk menampilkan detail produk saat mengklik tombol detail pada produk
    public function detail($id_brg)
    { 
        $data['produk']=$this->model_produk->detail_prd($id_brg);  //meload fungsi detail_prd() pada model model_produk.php
        $this->load->view('toko/template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
        $this->load->view('toko/template/sidebar'); //menampilkan halaman sidebar(sidebar.php) pada folder template di folder view
        $this->load->view('toko/detail_barang',$data); //menampilkan halaman detail barang (detail_barang .php)  di folder view 
        $this->load->view('toko/template/footer');  //menampilkan halaman footer (footer.php) pada folder template di folder view
    }


}