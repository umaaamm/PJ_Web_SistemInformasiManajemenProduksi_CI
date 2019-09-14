<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$data['data'] = $this->db->query('select * from tbl_supplier');
		$data['header'] = 'master/header';
		$data['sidebar'] = 'master/customer_aside';
		$data['footer']= 'master/footer';
		$data['content']= 'customer/pesanan';
		$this->load->view('master/data_master',$data);
	}
}
