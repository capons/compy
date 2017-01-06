<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class GalleryItem extends  BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('galleryItem_model');
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

    public function addAlbum()
    {
        $album = $_POST;

        // Каталог, в который мы будем принимать файл:
        $uploaddir = './img_db/albumLogo/';
        $generatingName = $this->session->userdata('id').'-'.rand(0,1000).'-'.rand(0,1000).'-'.rand(0,1000).'-'.rand(0,1000).'-'.$_FILES['albumLogo']['name'];
        $uploadfile = $uploaddir.basename($generatingName);

// Копируем файл из каталога для временного хранения файлов:
        copy($_FILES['albumLogo']['tmp_name'], $uploadfile);

        $album['path'] = $uploadfile;


        $return = $this->galleryItem_model->addAlbumDb($album,$this->session->userdata('id'));

    }





}