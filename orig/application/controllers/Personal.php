<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once 'base.php';
class Personal extends  BaseController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('galleryItem_model');
    }

    public function index()
    {
        $blogList = $this->user_model->getBlogById($this->session->userdata('id'));
        $this->data['blogList'] = $blogList;
        $placeHolder = $this->user_model->getUserByEmail($this->session->userdata('email'));
        $this->data['placeHolder'] = $placeHolder;
        $this->data['content'] = 'personal';
        $this->data['title'] = 'Personal';
        $this->data['type_of_work'] = $placeHolder['type_of_work'];

        $this->data['albums'] = $this->galleryItem_model->allAlbum($this->session->userdata('id'));

        $this->load->view('template',  $this->data);

    }

    public function changeInformation()
    {
        $getInformation = json_decode($this->input->post('json'), true);
        $email = $this->session->userdata('email');

            $return = $this->user_model->recordInformation($email,$getInformation);

        echo $return;

    }

    public function uploadImage () {
        $uploaddir = 'C:\OpenServer\domains\photobnb\css\img\upload/';
// это папка, в которую будет загружаться картинка
        $apend=date('YmdHis').rand(100,1000).'.jpg';
// это имя, которое будет присвоенно изображению
        $uploadfile = "$uploaddir$apend";
//в переменную $uploadfile будет входить папка и имя изображения

        if($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)
        {
// Указываем максимальный вес загружаемого файла. Сейчас 500 Кб
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
            {
                //Здесь идет процесс загрузки изображения
                $size = getimagesize($uploadfile);
                // с помощью этой функции мы можем получить размер пикселей изображения
                if ($size[0] < 501 && $size[1]<1501)
                {
                    // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте
                    $email = $this->session->userdata('email');
                    $return = $this->user_model->recordInformation('avatar',$email,$uploadfile);
                    header("Location: /personal");
                } else {
                    echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)";
                    unlink($uploadfile);
                    // удаление файла
                }
            } else {
                echo "Файл не загружен, вернитеcь и попробуйте еще раз";
            }
        } else {
            echo "Размер файла не должен превышать 500Кб";
        }
    }

    public function saveBlog () {
        $getRecord = json_decode($this->input->post('json'), true);
        $userId = $this->session->userdata('id');
        $return = $this->user_model->recordBlog($userId,$getRecord);
        echo ($return);

    }



}