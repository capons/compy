<?php
    class Easy_to_gift Extends CI_Controller {

        public function index() {
            $this->load->helper('href');
            $this->output->cache(10080);
            $this->load->view('site/easy-to-gift');
        }
    }