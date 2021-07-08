<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_merk extends CI_Model {
    public function sepeda(){
        return $this->db->get_where('tb_brg',array('merk'=>'SEPEDA'));
    }
    public function aksesoris(){
        return $this->db->get_where('tb_brg',array('merk'=>'AKSESORIS'));
    }

    public function cari($kunci){
        $this->db->select('*');
        $this->db->from('tb_brg');
        $this->db->like('nm_brg',$kunci);
        $this->db->or_like('harga',$kunci);
        return $this->db->get()->result();
    }
}