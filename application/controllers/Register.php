<?php

    class Register extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('M_users');
        }

        function index(){
            $this->load->view('path/v_register');
        }

        function proses_register(){
            $this->form_validation->set_rules(
                'username',
                'username',
                'required|min_length[1]'  
            );

            $this->form_validation->set_rules(
                'email',
                'email',
                'required|min_length[1]'  
            );

            $this->form_validation->set_rules(
                'password',
                'password',
                'required|min_length[1]'  
            );

            if($this->form_validation->run() == TRUE){
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->M_users->register($username, $email, $password);
                $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
                redirect('login');
            }else {
                $this->session->set_flashdata('error', validation_errors());
                redirect('register');
            }
        }
    }