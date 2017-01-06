<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class Welcome extends BaseController {


    function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
     //   $session_email = $this->session->userdata('email');

        $this->data['content'] = 'mainPage';
        $this->data['title'] = 'Welcome to PhotoBnB';
        $this->load->view('template',  $this->data);
	}

    public function endSession()
    {
        $this->session->sess_destroy();
        header('location: /welcome');
    }
}