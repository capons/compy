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
        ///////////////////////////
        $this->db->query('
            CREATE TABLE album (
            id int auto_increment primary key,
            idAuthor int (10) NOT NULL,
            nameAlbum varchar(20) NOT NULL,
            dateCreation date NOT NULL
            )
        ');

        $this->db->query('
            CREATE TABLE galleryItem (
            id int auto_increment primary key,
            idAuthor int (10) NOT NULL,
            idAlbum int (10) NOT NULL,
            typeItem varchar(15) NOT NULL,
            pathItem varchar(40) NOT NULL,
            nameItem varchar(30) NOT NULL,
            dateUploaded date NOT NULL
            )
        ');

        $this->db->query('
            CREATE TABLE comment (
            id int auto_increment primary key,
            idAuthor int (10) NOT NULL,
            nameComment varchar(30) NOT NULL,
            textComment varchar(90) NOT NULL
            )
        ');

        echo('OK');
    }
}