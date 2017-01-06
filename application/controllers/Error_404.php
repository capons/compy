<?php
    class Error_404 extends CI_Controller {
        function __construct()
        {
            parent::__construct();
        }

        function index() {
            //$this->output->cache(10080);
            $this->output->set_status_header('404');
            $this->load->helper('href');
            include __DIR__.'/../views/site/404.php';
        }
    }