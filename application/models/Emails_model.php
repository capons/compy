<?php  

    class Emails_model Extends CI_Model {
        private $table = 'emails';

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        /* method for adding email to db */
        
        public function saveEmail($email) {
            if(isset($email)){
                $this->db->insert($this->table, array('email' => $email));
            }
        }
    }