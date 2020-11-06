<?php

class Landing_model extends CI_Model
{

    public function get_all()
    {
        $q = $this->db->query('SELECT * FROM produk')->result();
        return $q;
    }

    public function get_by_id($id)
    {
        $q = $this->db->query('SELECT * FROM produk WHERE id_produk = ' . $id);
        return $q->row_array();
    }
}
