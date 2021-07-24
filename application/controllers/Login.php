<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_users');
    }

    function index(){
        $this->load->view('path/v_login');
    }

    function proses_login(){
        $username= $this->input->post('username');
        $password = $this->input->post('password');

        if($this->M_users->Login($username, $password)){
            $this->session->set_flashdata('Berhasil Login','Proses Login User Berhasil');
            redirect('/');
        }else {
            $this->session->set_flashdata('error', 'username & password salah');
            redirect('login');
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('is_login', FALSE);
        redirect('/');
    }
    
}