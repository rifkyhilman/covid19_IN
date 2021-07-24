<?php

class M_users extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function register($username, $email, $password){
        $dataUser = array(
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );

        $this->db->insert('users', $dataUser);
    }

    function login($username, $password){
        $query = $this->db->get_where('users', array('username'=>$username));

        if($query->num_rows() > 0){
            $data = $query->row();
            if(password_verify($password, $data->password)){
                $this->session->set_userdata('username', $username);
				$this->session->set_userdata('is_login', TRUE);
                return TRUE;
            }else{
                return FALSE;
            }
        }else {
            return FALSE;
        }
    }
}