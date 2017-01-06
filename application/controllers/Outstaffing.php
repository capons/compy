<?php
    class Outstaffing Extends CI_Controller {

        public function index() {
            $this->load->helper('href');
            $this->output->cache(10080);
            $this->load->view('site/outstaffing');
        }
    }