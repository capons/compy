<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function addUser($user)
    {
        $this->db->insert('users', $user);
        return $this->db->insert_id();
    }

    public function getUserByEmail($email){
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    public function checkDuplicateEmail($email){
        return (count($this->getUserByEmail($email)) > 0);
    }

    public function checkUserPassword($user, $password){
        return ($user['password'] == $password);
    }
}