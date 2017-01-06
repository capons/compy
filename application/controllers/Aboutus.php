<?php

require_once(APPPATH.'libraries/mailchimp/Config.php');

require_once(APPPATH.'controllers/Custom.php');
//load composer autoload file
require FCPATH.'/vendor/autoload.php';


    class Aboutus Extends Custom {

        //retrieve Intercom user data
        private $intercom_data = '';

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('cookie');
            //retrieve Intercom user data
            $this->intercom_data = $this->IntercomStart();
        }

        public function index() {
            $this->load->helper('href');
            $this->output->cache(10080);
            $this->load->view('site/aboutus',array('current_user' => $this->intercom_data));
        }
    }