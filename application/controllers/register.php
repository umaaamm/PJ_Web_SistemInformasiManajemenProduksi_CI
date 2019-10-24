<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        // Load database
        // $this->load->model('m_login');
        $this->load->helper('url');
    }

    public function customer()
    {
        $this->load->view('register/customer');
    }
}
