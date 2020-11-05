<?php

class Barang_model extends CI_Model
{

    public function get_all()
    {
        $q = $this->db->query("SELECT * FROM produk WHERE data_delete = 'N'");
        return $q->result();
    }

    function get_by_id_produk($id)
    {

        $q = $this->db->query("SELECT * FROM produk WHERE id_produk = '$id'");

        return $q->row();
    }

    function insert_data($data)
    {

        $q = $this->db->insert('produk', $data);
        return $this->db->insert_id();
    }

    function update_produk($where, $data)
    {

        $this->db->update('produk', $data, $where);
        return $this->db->affected_rows();
    }
}
