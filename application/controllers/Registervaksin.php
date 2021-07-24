<?php

class Registervaksin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_vaksin');
    }

    function index(){
        $this->load->view('vaksin/v_registervaksin');
    }

    function proses_register(){
        $this->form_validation->set_rules(
            'ktp',
            'ktp',
            'required|min_length[1]'  
        );

        $this->form_validation->set_rules(
            'kk',
            'kk',
            'required|min_length[1]'  
        );

        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[1]'  
        );

        $this->form_validation->set_rules(
            'usia',
            'usia',
            'required|min_length[1]'  
        );

        $this->form_validation->set_rules(
            'rumahsakit',
            'rumahsakit',
            'required|min_length[1]'  
        );

        if($this->form_validation->run() == TRUE){
            $ktp = $this->input->post('ktp');
            $kk = $this->input->post('kk');
            $nama = $this->input->post('nama');
            $usia = $this->input->post('usia');
            $rumahsakit = $this->input->post('rumahsakit');
            $this->M_vaksin->register($ktp, $kk, $nama, $usia, $rumahsakit);
            $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
            redirect('datavaksin');
        }else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('registervaksin');
        }
    }
}