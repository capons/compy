<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class Registration extends  BaseController {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->data['content'] = 'registration';
        $this->data['title'] = 'registration';

        $this->load->view('template',$this->data);
    }

    public function register(){

        $jsonPost = json_decode($this->input->post('json'), true);
        $user['email'] = strip_tags($jsonPost['email']);
        $user['password'] = strip_tags($jsonPost['password']);
        $this->data['message'] = strip_tags($jsonPost['message']);

        if( $this->data['message'] == '') {

            $user['id'] = $this->user_model->addUser($user);

        }

        echo  $this->data['message'];
    }

    public function checkEmail() {

        $getEmail = json_decode($this->input->post('json'),true);

        if($this->user_model->checkDuplicateEmail($getEmail) == 1) {
            echo "true";
        }

    }
}
