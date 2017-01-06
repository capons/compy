<?php
    class Citizen_view Extends CI_Controller {

        public function index() {
            $this->load->helper('href');
            $this->output->cache(10080);
            $this->load->view('site/citizen-view');
        }
    }