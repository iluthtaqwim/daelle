<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
    }

    public function index()
    {

        $this->load->view('login');
    }

    function login_act()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password),
        );

        $cek = $this->login->cek_login('users', $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("home"));
        } else {
            echo '<script> alert("username atau password salah!")</script>';

            redirect('login');
        };
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
