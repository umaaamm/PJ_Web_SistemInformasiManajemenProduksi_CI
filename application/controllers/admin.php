<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->helper('url');
	}

	public function index()
	{
		// $this->load->view('admin/header');
		// $this->load->view('admin/aside');
		// $this->load->view('admin/data_pemesan');
		// $this->load->view('footer');

		$data['data'] = $this->db->query('select * from tbl_supplier');
		$data['header'] = 'master/header';
		$data['sidebar'] = 'master/aside';
		$data['footer']= 'master/footer';
		$data['content']= 'admin/data_suplier';
		$this->load->view('master/data_master',$data);
	}

	public function pembelian()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/pembelian');
		$this->load->view('footer');
	}

	public function data_admin()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/data_admin');
		$this->load->view('footer');
	}

	public function data_customer()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/data_customer');
		$this->load->view('footer');
	}

	public function data_barang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/data_barang');
		$this->load->view('footer');
	}

	public function data_suplier()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/data_suplier');
		$this->load->view('footer');
	}

	public function jenis_cetak()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/aside');
		$this->load->view('admin/jenis_cetak');
		$this->load->view('footer');
	}
}
