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

    public function aksi_login_consumen(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => $password
            );
        //$cek = $this->RsModel->cek_login("tbl_admin",$where)->num_rows();
        $cek = $this->db->query("SELECT * FROM tbl_user WHERE email='$email' AND password='$password' ");
        // $cek1 = $this->db->query("SELECT * FROM tbl_bagian WHERE username='$username' AND password='$password' ");
        if($cek->num_rows() > 0){
                foreach($cek->result() as $key){
                $lvl = $key->level;
                $nama = $key->nama;
                $username = $key->username;
            }
            if($lvl=='user'){
                $data_session = array(
                'username' => $username,
                'nama' => $nama,
                'level'=> $lvl,
                'status' => "login"
                );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
                redirect('HalamanUtama');
            }else{
                $this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Email anda Salah</div>");
                redirect('LoginUser');
            }

        }else{
            $this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Email anda Salah</div>");
            redirect('LoginUser');
        }
    }
 
   public function logout_consumen(){
        $this->session->sess_destroy();
        redirect(base_url().'LoginUser');
    
    }

    //admin
   public function aksi_login_admin(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => $password
            );
        //$cek = $this->RsModel->cek_login("tbl_admin",$where)->num_rows();
        $cek = $this->db->query("SELECT * FROM tbl_admin WHERE email='$email' AND password='$password' ");
        // $cek1 = $this->db->query("SELECT * FROM tbl_bagian WHERE username='$username' AND password='$password' ");
        if($cek->num_rows() > 0){
                foreach($cek->result() as $key){
                $lvl = $key->level;
                $nama = $key->nama;
                $username = $key->username;
            }
            if($lvl=='admin'){
                $data_session = array(
                'username' => $username,
                'nama' => $nama,
                'level'=> $lvl,
                'status' => "login"
                );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
                redirect('HalamanUtama');
            }else{
                $this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Email anda Salah</div>");
                redirect('LoginAdmin');
            }

        }else{
            $this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Email anda Salah</div>");
            redirect('LoginAdmin');
        }
    }
 
  public  function logout_admin(){
        $this->session->sess_destroy();
        redirect(base_url().'LoginAdmin');
    
    }
}
