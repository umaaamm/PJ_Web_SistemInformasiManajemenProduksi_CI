<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerDataBarang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$data['data'] = $this->db->query('select * from tbl_databarang');
		$data['data_supplier'] = $this->db->query('select * from tbl_supplier');

		$data['header'] = 'master/header';
		$data['sidebar'] = 'master/aside';
		$data['footer']= 'master/footer';
		$data['content']= 'admin/data_barang';


		$this->load->view('master/data_master',$data);
	}

	public function simpan(){
		$data['nama_barang']=$this->input->post("barang");
		$data['jenis_barang']=$this->input->post("jenis");
		$data['harga_barang']=$this->input->post("harga");
		$data['id_supplier']=$this->input->post("id_supplier");
		//print_r($data);die;
		$this->RsModel->TambahData("tbl_databarang",$data);
		$this->session->set_flashdata("notif","<div class='alert alert-success'><i class='fa fa-check'></i> Data berhasil ditambah</div>");
		header('location:'.base_url().'Admin/DataBarang');
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$where=array('id_barang'=>$id);
		$this->RsModel->HapusData('tbl_databarang',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-danger'><i class='fa fa-trash'></i> Data berhasil dihapus</div>");
		header('location:'.base_url().'Admin/DataBarang');
	}

	public function edit(){
		$where['id_admin']=$this->input->post('id');
		$data['username']=$this->input->post("user");
		$data['password']=$this->input->post("pass");
		$data['nama']=$this->input->post("nama");
		$data['email']=$this->input->post("email");
		$data['bagian']=$this->input->post("bagian");
		$data['level']=$this->input->post("level");
		//print_r($where);die;
		$this->RsModel->EditData("tbl_admin",$data,$where);
		$this->session->set_flashdata("notif","<div class='alert alert-warning'><i class='fa fa-pencil'></i> Data berhasil diedit</div>");
		header('location:'.base_url().'Admin/KelolaAdmin');

	}

}
