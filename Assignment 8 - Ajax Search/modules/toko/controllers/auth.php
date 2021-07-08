<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    //Fungsi Login
    public function login()
    {   //rules untuk form validasi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()==FALSE) //jika validasi salah maka kembali ke halaman form login
        { 
            $this->load->view('toko/template/header'); //menampilkan halaman header (header.php) pada folder template di folder view
            $this->load->view('toko/form_login'); //menampilkan halaman form_login (form_login.php)  di folder view
            $this->load->view('toko/template/footer');  //menampilkan halaman footer (footer.php) pada folder template di folder view

        }
        //jika benar maka mengecek username dan password
        else 
        {
            $auth = $this->model_auth->cek_login();
                   
            if($auth == FALSE)  //jika username atau passwrod salah maka menampilkan pesan dan kembali ke controller auth fungsi login yang menampilkan halaman login
            {
                $this->session->set_flashdata('pesan',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Username atau Password Anda Salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>') ;
                redirect('toko/auth/login');
            }

            else //jika username atau passwrod benar dan role_id pada username=1 maka redirect ke halaman admin(admin/dashboard_admin.php)
            //jika username atau passwrod benar dan role_id pada username=2 maka redirect ke halaman awal toko(dashboard.php)
            {
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);
                switch($auth->role_id)
                {
                    case 1  : redirect('admin/dashboard_admin');
                break;
                case 2      : redirect('toko/dashboard');
                break;
                default     : break;
                }
            }
        }
    }
    
    //fungsi untuk logout
    public function logout(){

        $this->session->sess_destroy();
        redirect('toko/auth/login');
    }
}