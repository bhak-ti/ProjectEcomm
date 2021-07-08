<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1')
        {
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/auth/login');
        }
    }
    public function Data_Barang()
    { 
      
        $this->load->view('admin/fpdf1/lat1211450');
       
    }
    
    
    public function index()
    { 
        $data['produk']=$this->model_produk->tampil_produk()->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/data_produk',$data);
        $this->load->view('admin/template_admin/footer');
    }
    
    public function tambah_aksi()
    {
        $id          = $this->input->post('id');
        $nama_produk = $this->input->post('nm_brg');
        $merk        = $this->input->post('merk');
        $stok        = $this->input->post('stok');
        $harga       = $this->input->post('harga');
        $gambar      = $_FILES['gambar']['name'];
        if($gambar=''){} else
        {
            $config ['upload_path']='./gambar';
            $config ['allowed_types']='jpg|jpeg|png|gif|jfif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar'))
            {
                echo "gambar gagal Di upload!";
            }
            else
            {
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array(
            'id_brg'    => $id,
            'nm_brg'    => $nama_produk,
            'merk'      => $merk,
            'stok'      => $stok,
            'harga'     => $harga,
            'gambar'    => $gambar

        );

        $this->model_produk->tambah_produk($data,'tb_brg');
        redirect('admin/data_produk/index');
    }

    public function edit($id)
    {
        $where = array('id_brg'=>$id);
        $data['produk'] = $this->model_produk->edit_produk($where, 'tb_brg')->result();
        $this->load->view('admin/template_admin/header');
        $this->load->view('admin/template_admin/sidebar');
        $this->load->view('admin/edit_produk',$data);
        $this->load->view('admin/template_admin/footer');
    }

    public function update()
    {
        $id                  = $this->input->post('id');
        $nama_produk         = $this->input->post('nm_brg');
        $merk                = $this->input->post('merk');
        $stok                = $this->input->post('stok');
        $harga               = $this->input->post('harga');
        $gambar              = $_FILES['gambar']['name'];

        if($gambar=''){} else
        {
            $config ['upload_path']='./gambar';
            $config ['allowed_types']='jpg|jpeg|png|gif|jfif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar'))
            {
                echo "gambar gagal Di upload!";
            }
            else
            {
                $gambar=$this->upload->data('file_name');
            }
        } 



        $data = array(
            'id_brg'    => $id,
            'nm_brg'    => $nama_produk,
            'merk'      => $merk,
            'stok'      => $stok,
            'harga'     => $harga,
            'gambar'    => $gambar
         

        );

        $where= array(
            'id_brg' => $id
        );

        $this->model_produk->update_data($where,$data,'tb_brg');
        redirect('admin/data_produk/index');
    }

    public function hapus($id)
    {
        $where= array(
            'id_brg'=>$id
        );
        $this->model_produk->hapus_data($where,'tb_brg');
        redirect('admin/data_produk/index');
    }

}


