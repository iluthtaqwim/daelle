<?php

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Landing_model', 'landing');
    }

    function index()
    {
        $data['get_all'] = $this->landing->get_all();
        $this->load->view('landing-page', $data);
    }

    function detail($id)
    {
        $get_id['details'] = $this->landing->get_by_id($id);
        $this->load->view('page/detail', $get_id);
    }

    function terms()
    {
        $this->load->view('page/terms');
    }
}
