<?php

class DataVaksin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_vaksin');
    }
    
    function index(){
        $data = $this->M_vaksin->ambil_data_vaksin();
	
        $this->load->view('vaksin/v_listdata', array('vaksin'=>$data->result()));
    }

    function proses_hapusdata($id){
        $this->M_vaksin->hapus_data($id);
		$this->session->set_flashdata('hapus_sukses','Data mahasiswa berhasil di hapus');
		redirect('datavaksin');
    }
}