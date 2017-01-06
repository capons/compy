<?php

require_once(APPPATH.'libraries/mailchimp/Config.php');
require_once(APPPATH.'controllers/Custom.php');

// Extends CI_Controller {
class Case_studies Extends Custom {

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
        $this->load->view('site/case-studies',array('current_user' => $this->intercom_data));
    }
    public function cpp($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_cpp',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function csharp($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_csharp',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function java($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_java',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function php($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_php',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function android_ios($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_android_ios',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function wordpress($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_wordpress',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function magento($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_magento',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }
    public function nodejs($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_nodejs',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }

    public function angularjs($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_angularjs',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }

    public function aspnet($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_aspnet',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/projects/'.$projectName,array('current_user' => $this->intercom_data));
        }
    }

    public function uidesign($projectName=''){
        $this->load->helper('href');
        $this->output->cache(10080);
        if(empty($projectName)){
            $this->load->view('site/case_studies_ui_design',array('current_user' => $this->intercom_data));
        }
        else{
            $this->load->view('site/behance_page',array('current_user' => $this->intercom_data));
        }
    }

}