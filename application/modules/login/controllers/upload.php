<?php
class upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('v_upload', array('error' => ' '));
    }
    public function aksi_upload()
    {
        $config['upload_path'] = 'gambar/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload/v_upload', $error);
        } else {
            $data['nama_file'] = $this->upload->data("file_name");
            $data['tipe_file'] = $this->upload->data('file_ext');
            $data['ukuran_file'] = $this->upload->data('file_size');
            $this->db->insert('tb_file', $data);

            $data = array('upload_data' => $this->upload->data());
            $data['berkas'] = $this->db->get('tb_file');
            $this->load->view('upload/v_upload_sukses', $data);
        }
    }
}
