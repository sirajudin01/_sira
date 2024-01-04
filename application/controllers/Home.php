<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('konten');
        $this->load->view('footer');
    }
}

/* End of file Controllername.php */
