<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$data['data'] = $this->db->query('select * from tbl_admin');
		$data['header'] = 'master/header';
		$data['sidebar'] = 'master/aside';
		$data['footer']= 'master/footer';
		$data['content']= 'admin/akun_admin';
		$this->load->view('master/data_master',$data);
	}
}
