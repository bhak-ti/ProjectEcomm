<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model("Barang_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["barang"] = $this->Barang_model->getAll();
        $this->load->view("barang/barang", $data);
    }
    public function add()
    {
        $barang = $this->Barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("barang/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('barang');

        $barang = $this->Barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["barang"] = $barang->getById($id);
        if (!$data["barang"]) show_404();

        $this->load->view("barang/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Barang_model->delete($id)) {
            redirect(base_url('admin/Barang'));
        }
    }
}
