<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registrasi extends CI_Controller {

    //fungsi untuk menampilkan halaman registrasi 
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        if($this->form_validation->run()==FALSE) //jika form salah atau belum diisi maka menampilkan halaman registrasi
        {
            $this->load->view('template/header'); //menampilkan halaman header(header.php) pada folder template di folder view
            $this->load->view('registrasi'); //menampilkan halaman registrasi (registrasi .php)  di folder view 
            $this->load->view('template/footer'); //menampilkan halaman footer(footer.php) pada folder template di folder view

        }else{
            $data = array(
                'id'            => '' ,
                'nama'          => $this->input->post('nama'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password_1'),
                'role_id'       => 2,
            );
            $this->db->insert('tb_user',$data); //memasukan data ke tabel user
            redirect('auth/login'); //setelah registrasi berhasil kembali ke halaman login untuk login
           
        }
    }
}