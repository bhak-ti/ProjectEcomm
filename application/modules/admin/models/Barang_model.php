<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "tbl_produk";

    public $id_produk;
    public $nama_produk;
    public $deskripsi;
    public $harga;
    public $gambar = "default.jpg";
    public $kategori;

    public function rules()
    {
        return [
            [
                'field' => 'id_produk',
                'label' => 'Id',
                'rules' => 'numeric'
            ],

            [
                'field' => 'nama_produk',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'required'
            ],

            [
                'field' => 'harga',
                'label' => 'harga',
                'rules' => 'required'
            ],

            [
                'field' => 'kategori',
                'label' => 'kategori',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_produk;
        $this->nama_produk = $post["nama_produk"];
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        $this->gambar = $this->_uploadImage();
        $this->kategori = $post["kategori"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id"];
        $this->nama_produk = $post["nama_produk"];
        $this->deskripsi = $post["deskripsi"];
        $this->harga = $post["harga"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->kategori = $post["kategori"];
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 10240; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
