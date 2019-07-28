<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        // Load database
        // $this->load->model('m_login');
        $this->load->helper('url');
    }

    public function admin()
    {
        $this->load->view('login/admin');
    }

    public function customer()
    {
        $this->load->view('login/customer');
    }
}
