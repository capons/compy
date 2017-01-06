<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class Authorization extends  BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

    public function index()
    {

        $this->data['content'] = 'authorization';
        $this->data['title'] = 'authorization';

        $this->load->view('template', $this->data);
    }


    public function signIn()
    {

        $message = "";
        $flag = false;

        $jsonPost = json_decode($this->input->post('json'), true);
        $user['email'] = strip_tags($jsonPost['email']);
        $user['password'] = strip_tags($jsonPost['password']);

        $getUserByEmail = $this->user_model->getUserByEmail($user['email']);

       if (empty($getUserByEmail) ==  TRUE || $user['password'] != $getUserByEmail['password']) {
           $message = "Неправильный E-mail или пароль";
       }
       else if ($flag == false) {

            $this->session->set_userdata($getUserByEmail);

        }
        echo $message;
    }

}