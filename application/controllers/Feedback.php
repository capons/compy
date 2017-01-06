<?php
class Feedback Extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('href');
        $this->load->helper('url');
    }

    function index() {
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/feedback');
    }

}