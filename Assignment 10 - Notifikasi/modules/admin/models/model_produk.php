<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_produk extends CI_Model {
public function tampil_produk()
{
    return $this->db->get('tb_brg');
}

public function tambah_produk($data,$table)
{
    $this->db->insert($table,$data);
}

public function edit_produk($where,$table)
{
   return $this->db->get_where($table,$where);
}

public function update_data($where,$data,$table)
{
    $this->db->where($where);
    $this->db->update($table,$data);
}
public function hapus_data($where,$table)
{
    $this->db->where($where);
    $this->db->delete($table);
}
public function find($id)
{
    $result=$this->db->where('id_brg',$id)
                     ->limit('1')
                     ->get('tb_brg');
    if($result->num_rows() > 0)
    {
        return $result->row();
    } else
    {
        return array();
    }
}

public function detail_prd($id_brg)
{
    $result=$this->db->where('id_brg',$id_brg)->get('tb_brg');
    if($result->num_rows() > 0)
    {
        return $result->result();
    } else
    {
        return false;
    }
}
}