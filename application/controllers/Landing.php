<?php

class Landing extends CI_Controller
{

    function index()
    {

        $this->load->view('landing-page');
    }

    function detail(){
        $this->load->view('page/detail');
    }
}
