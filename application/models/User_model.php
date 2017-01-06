<?php
    class User_model Extends CI_Model {
        private $id;
        private $user;
        private $pass;
        private $md5_pass;
        private $role;
        private $table;

        function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        private function add() {

        }

        private function delete() {

        }

        private function make_query_array() {
            return array('login' => $this->login, 'pass' => $this->pass);
        }

        public function set_query_variables() {
            $this->user = $this->input->post('login');
            $this->pass = $this->input->post('pass');
        }

        public function check() {
            $this->md5_pass = md5($this->input->post('pass'));
            $query = $this->db->query("SELECT * FROM users WHERE name='".$this->user."' AND role=1 AND pass=password('".$this->md5_pass."');");
            if ($query->num_rows() == 0)
                return false;
            $this->session->set_userdata($query->row_array());
            return true;
        }
    }