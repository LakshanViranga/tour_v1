<?php


class Register_Model extends CI_Model
{

    function insert_data()
    {
         $data = array(
             'user_name' => $this-> input->post('user'),
             'email' => $this-> input->post('email'),
             'password' => sha1($this-> input->post('password'))
         );
         $this->db->insert('user_details',$data);

    }
}