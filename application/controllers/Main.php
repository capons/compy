<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/mailchimp/Config.php');
require_once(APPPATH.'libraries/mailchimp/Mailchimp.php');
require_once(APPPATH.'controllers/Custom.php');
//load composer autoload file
require FCPATH.'/vendor/autoload.php';

//use Intercom\IntercomClient;
//use Nubs\RandomNameGenerator\Alliteration;
// CI_Controller
    class Main Extends Custom {

        //retrieve Intercom user data
        private $intercom_data = '';




        public function index() {


            $this->output->cache(10080);
            $this->load->helper('href');
            $this->load->helper('url');
            if(!empty($_POST)){
              
                header('Location: http://computoolsglobal.com/#modal-one');
                
            }
            //nickname generator
          //  $generator = new Alliteration();



            //send Intercom user data (Need for Intercom chat)
            $this->load->view('site/index', array('current_user' => $this->intercom_data));
        }
    }