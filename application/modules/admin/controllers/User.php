<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["users"] = $this->User_model->getAll();
        $this->load->view("user/user", $data);
    }
    public function add()
    {
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("user/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('user');

        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();

        $this->load->view("user/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->User_model->delete($id)) {
            redirect(base_url('admin/User'));
        }
    }
}
