<?php

class UpdateDataVaksin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_vaksin');
    }
    
    function form_edit($id){
		$data2['db'] = $this->M_vaksin->edit_data($id);

		$this->load->view('vaksin/v_editdata', $data2);
    }

    function updatedata(){
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

        if($this->form_validation->run() === FALSE){
			
			redirect('UpdateDataVaksin/form_edit/', $id);

		}else {
			$this->M_vaksin->update_data();
			$this->session->set_flashdata('update_sukses', 'Data vaksin berhasil diperbaharui');
			redirect('datavaksin');
		}
    }
}