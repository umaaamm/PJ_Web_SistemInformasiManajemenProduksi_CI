<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('customer/header');
		$this->load->view('customer/aside');
		$this->load->view('customer/pesanan');
		$this->load->view('footer');
	}
}
