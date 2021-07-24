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
}