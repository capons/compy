<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Database_controller extends CI_Controller{
    public function index(){
        $this->load->database();

//      USER TABLE
        $this->db->query('drop table if exists users');
        $this->db->query('
            CREATE TABLE users (
            id int auto_increment primary key,
            email varchar(50) unique,
            password text
            )
        ');

        echo('OK');
    }
}