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
    public function recordInformation($email,$record)
    {
        $this->db->where('email', $email);
        $this->db->update('users', $record);

        return true;

    }
    public function recordBlog($userId,$BlogRecord) {
        $this->db->insert('blogs',array(
            'user_id' => $userId,
            'blog_name' => $BlogRecord['name'],
            'blog_hash' => $BlogRecord['hash'],
            'blog_text' => $BlogRecord['text']
        ));
        return 'ok';
    }
    public function getBlogById($id){
        return $this->db->get_where('blogs', array('user_id' => $id))->result_array();
    }
}

