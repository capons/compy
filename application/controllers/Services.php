<?php
class Services Extends CI_Controller {

    function index() {
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/services');
}
}