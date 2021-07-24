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

    function hapus_data($id){
        $this->db->delete('vaksin', ['id' => $id]);
    }
}