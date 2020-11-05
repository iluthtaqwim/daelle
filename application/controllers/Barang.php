<?php

class Barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Barang_model', 'barang');
    }

    public function index()
    {
        $size = $this->db->query('SELECT * FROM size')->result();
        $data = array(
            'size' => $size,
        );

        $this->template->load('layout/template', 'page/data_barang', $data);
    }

    function get_data()
    {
        $data = $this->barang->get_all();
        echo json_encode($data);
    }

    function tambah_Produk()
    {
        $upload_path = './uploads/';

        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['overwrite']            = TRUE;
        $config['max_size']             = '1000';
        $config["file_name"]            = $this->input->post('kode_produk');
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $fileijazah = '';

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            echo '<script>alert("Gagal")</script>';
            redirect(site_url('barang'));
            exit();
        } else {
            $data['gambar'] = array('upload_data' => $this->upload->data());
            $fileijazah = $data['gambar']['upload_data']['file_name'];
            $check1 = $this->input->post('size');
            $ukuran = implode(",", $check1);
            $checkboxes = $this->input->post('warna');
            $warna = implode(",", $checkboxes);
            $data = array(
                'kode_produk' => $this->input->post('kode_produk'),
                'nama_produk' => $this->input->post('nama_produk'),
                'size'     => $ukuran,
                'warna'       => $warna,
                'gambar'      => $fileijazah,

            );
            $this->barang->insert_data($data);
            redirect(site_url('barang'));
        }
    }

    public function ajax_edit_produk($id)
    {
        $data = $this->barang->get_by_id_produk($id);

        echo json_encode($data);
    }

    function edit_produk()
    {
        if (!empty($_FILES['foto']['name'])) {
            $upload_path = "./uploads/";
            $config = array(
                'upload_path' => $upload_path,
                'allowed_types' => 'jpg|png|jpeg',
                'file_name' => $this->input->post('kode_produk'),
            );
            $this->load->library('upload', $config);
            $img = $this->input->post('foto-lama');
            $path = "./uploads/" . $img;
            unlink($path);
            if (!$this->upload->do_upload('foto')) {

                echo 'GAGAL';
                // redirect(site_url('barang'));
                exit();
            } else {

                $data['gambar'] = array('upload_data' => $this->upload->data());
                $foto = $data['gambar']['upload_data']['file_name'];
                $check1 = $this->input->post('size');
                $ukuran = implode(",", $check1);
                $checkboxes = $this->input->post('warna');
                $warna = implode(",", $checkboxes);
                $data = array(
                    'kode_produk' => $this->input->post('kode_produk'),
                    'nama_produk' => $this->input->post('nama_produk'),
                    'size'        => $ukuran,
                    'warna'       => $warna,
                    'gambar'      => $foto
                );
                $this->barang->update_produk(array('id_produk' => $this->input->post('id_produk')), $data);
                redirect(site_url('barang'));
            }
        } else {
            $check1 = $this->input->post('size');
            $ukuran = implode(",", $check1);
            $checkboxes = $this->input->post('warna');
            $warna = implode(",", $checkboxes);
            $data = array(
                'kode_produk' => $this->input->post('kode_produk'),
                'nama_produk' => $this->input->post('nama_produk'),
                'size'        => $ukuran,
                'warna'       => $warna,
            );
            print_r($data);

            $this->barang->update_produk(array('id_produk' => $this->input->post('id_produk')), $data);
            redirect(site_url('barang'));
        }
    }

    function hapus_produk($id)
    {
        $cek_flag = $this->db->query("SELECT data_delete, id_produk FROM produk WHERE id_produk = '" . $id . "'")->row();

        if ($cek_flag->data_delete == 'N') {
            $su = "Y";
        } else {
            $su = "N";
        }

        $data = array(
            'data_delete' => $su
        );

        $this->barang->update_produk(array('id_produk' => $id), $data);
        echo json_encode(array("status" => TRUE));
    }
}
