<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class Personal extends  BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->data['content'] = 'personal';
        $this->data['title'] = 'personal';

        $this->load->view('template',$this->data);
    }







}