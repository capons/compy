<?php
class Desktop Extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function index() {
        $this->load->helper('href');
        $this->output->cache(10080);
        redirect('software');
    }

}