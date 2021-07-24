<?php 

class M_vaksin extends CI_Model{
    function register($ktp, $kk, $nama, $usia, $rumahsakit){
        $dataP = array(
            'ktp'=>$ktp,
            'kk'=>$kk,
            'nama'=>$nama,
            'usia'=>$usia,
            'rumahsakit'=>$rumahsakit
        );

        $this->db->insert('vaksin', $dataP);
    }
    
    function ambil_data_vaksin(){
        return $this->db->get('vaksin');
    }

    function edit_data($id){
        $query = $this->db->get_where('vaksin', ['id' => $id]);
		return $query->row();
    }

    function update_data(){
        $kondisi = ['id' => $this->input->post('id')];
		
		$datanew = [
					'ktp' => $this->input->post('ktp'),
					'kk' => $this->input->post('kk'),
					'nama' => $this->input->post('nama'),
					'usia' => $this->input->post('usia'),
					'rumahsakit' => $this->input->post('rumahsakit'),
                ];

		$this->db->update('vaksin', $datanew, $kondisi);
    }

    function hapus_data($id){
        $this->db->delete('vaksin', ['id' => $id]);
    }
}