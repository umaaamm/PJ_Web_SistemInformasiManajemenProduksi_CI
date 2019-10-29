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

    public function simpan(){
        $data['nama']=$this->input->post("nama");
        $data['username']=$this->input->post("username");
        $data['password']=$this->input->post("password");
        $data['alamat']=$this->input->post("alamat");
        $data['email']=$this->input->post("email");
        $data['level']='user';
            // print_r($data);die;
        $this->RsModel->TambahData("tbl_user",$data);
        $this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil melakukan Register, Silahkan lakukan login menggunakan akun anda.</div>");
        header('location:'.base_url().'LoginUser');
    }

}
