<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends  CI_Controller
{
    protected $isLogin;
    protected $data;
    function __construct()
    {
        parent::__construct();
        $this->data = array();
        $this->load->library('session');
        $this->isLogin = $this->session->userdata('email') != false;
        $this->data['isLogin'] = $this->isLogin;
    }

}