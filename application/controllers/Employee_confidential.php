<?php
    class Employee_confidential Extends CI_Controller {

        public function index() {
            $this->load->helper('href');
            $this->output->cache(10080);
            $this->load->view('site/projects/employee-confidential');
        }
    }