<?php

require_once(APPPATH.'controllers/Custom.php');
//load composer autoload file
require FCPATH.'/vendor/autoload.php';

class Careers Extends Custom {

    //retrieve Intercom user data
    private $intercom_data = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        //retrieve Intercom user data
        $this->intercom_data = $this->IntercomStart();
    }

    function index() {
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/careers', array('current_user' => $this->intercom_data));
    }

    public function php_teamlead(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/php-teamlead', array('current_user' => $this->intercom_data));
    }

    public function java_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/java-developer', array('current_user' => $this->intercom_data));
    }

    public function aspnet_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/aspnet-developer', array('current_user' => $this->intercom_data));
    }

    public function ios_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/ios-developer', array('current_user' => $this->intercom_data));
    }

    public function copywriter(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/copywriter', array('current_user' => $this->intercom_data));
    }

    public function qa_engineer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/qa-engineer', array('current_user' => $this->intercom_data));
    }

    public function xamarin_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/xamarin-developer', array('current_user' => $this->intercom_data));
    }

    public function cpp_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/cpp-developer', array('current_user' => $this->intercom_data));
    }

    public function angularjs_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/angularjs-developer', array('current_user' => $this->intercom_data));
    }

    public function nodejs_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/nodejs-developer', array('current_user' => $this->intercom_data));
    }
    public function objective_c_swift_developer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/objective-c-swift-developer', array('current_user' => $this->intercom_data));
    }
    public function designer(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/designer', array('current_user' => $this->intercom_data));
    }
    public function java_team_lead(){
        $this->load->helper('href');
        $this->output->cache(10080);
        $this->load->view('site/java-team-lead', array('current_user' => $this->intercom_data));
    }
}