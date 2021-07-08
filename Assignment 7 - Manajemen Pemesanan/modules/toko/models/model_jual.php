<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_jual extends CI_Model {
//fungsi memasukan data pelanggan ke tabel jual dan memasukkan data item yang dipesan ke tabel tb_pesanan
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama   =$this->input->post('nama');
        $alamat   =$this->input->post('alamat');

        $jual = array(
            'nama'          =>  $nama,
            'alamat'        =>  $alamat,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime(date('H'),
                            date('i'),date('s'),date('m'),date('d') + 1,date('Y'))
                        )
                    );
        $this->db->insert('tb_jual',$jual);
        $id_jual = $this->db->insert_id();
                    
        foreach($this->cart->contents() as $item)
        {
            $data = array(
                'id_jual'  =>  $id_jual,
                'id_brg'   =>  $item['id'],
                'nm_brg'   =>  $item['name'],
                'jumlah'   =>  $item['qty'],
                'harga'    =>  $item['price']
            );
            $this->db->insert('tb_pesanan',$data);
        } 
        return TRUE;
    }

    public function tampil_data(){
        $result=$this->db->get('tb_jual');
        if($result->num_rows() > 0)
        {
            return $result->result();
        }else
        {
            return false;
        }
    }

    public function ambil_idjual($id_jual){
        $result=$this->db->where('id', $id_jual)->limit(1)->get('tb_jual');

        if($result->num_rows() > 0)
        {
            return $result->row();
        }else
        {
            return false;
        }
    }

    public function ambil_idpesanan($id_jual){
        $result=$this->db->where('id_jual', $id_jual)->get('tb_pesanan');

        if($result->num_rows() > 0)
        {
            return $result->result();
        }else
        {
            return false;
        }
    }
}