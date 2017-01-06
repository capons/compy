<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class PersonalPage extends  BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $blogList = $this->user_model->getBlogById($this->session->userdata('id'));
        $this->data['blogList'] = $blogList;
        $placeHolder = $this->user_model->getUserByEmail($this->session->userdata('email'));
        $this->data['placeHolder'] = $placeHolder;
        $this->data['content'] = 'personalPage';
        $this->data['title'] = 'personalPage';
        $this->data['type_of_work'] = $placeHolder['type_of_work'];

        $this->load->view('template',  $this->data);
    }

}