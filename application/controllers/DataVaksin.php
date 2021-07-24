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
}