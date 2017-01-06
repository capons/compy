<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GalleryItem_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
////////////////////////////////////
   /* public function addUser($user)
    {
        $this->db->insert('users', $user);
        return $this->db->insert_id();
    }

    public function getUserByEmail($email){
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    public function checkDuplicateEmail($email){
        return (count($this->getUserByEmail($email)) > 0);
    }

    public function checkUserPassword($user, $password){
        return ($user['password'] == $password);
    }
    public function recordInformation($type,$email,$record) {
        $this->db->where('email', $email);
        $this->db->update('users', array($type => $record));
        return $record;

    }*/
//////////////////////////////////


    /*======Add=====*/
    //Создать фотоальбом
    public function addAlbumDb($album,$userId)
    {

        $album = array(
            'name' => $album['name'],
            'descr' => $album['descr'],
            'logo_path' => $album['path'],
            'user_id' => $userId
        );
        $this->db->insert('album', $album);
        return "ok";
    }
    //Добавить фотографии
    public function addPhoto($photo)
    {
        $where = "typeItem = photo'";
        $this->db->insert('galleryItem', $photo, $where);
        return $this->db->insert_id();
    }
    //Добавить видео
    public function addVideo($video)
    {
        $this->db->insert('galleryItem', $video, array('typeItem','video'));
        return $this->db->insert_id();
    }
    /*======Select=====*/
    //альбомы (альбомы по дате создания)
    public function allAlbum($user){
        return $this->db->query('SELECT * FROM `album` where user_id = '.$user.'')->result_array();

    }
    //фотографии (все фотографии по дате загрузки)
    public function allPhoto(){
        return $this->db->query('SELECT * FROM `galleryItem` WHERE `typeItem`=`photo`  Order by `dateUploaded`');
    }
    //
    public function allVideo(){
        return $this->db->query('SELECT * FROM `galleryItem` WHERE `typeItem`=`video`  Order by `dateUploaded`');
    }



    /*======Delete=====*/
    //Удаление фото: выборочно, одиночное
    public function deletePhoto($nameItem){
        $where = "`typeItem`='photo' AND `nameItem`='.$nameItem.'";
        return $this->db->delete('galleryItem', $where);
    }

    public function deleteAlbum($id){
    }



    /*======Update=====*/
    //При выборе фотографии/альбома доступны: Редактирование
    public function photoEditing($id, $idAlbum, $pathItem, $nameItem, $dateUploaded){
        $data = array(
            'idAlbum' => $idAlbum,
            'pathItem' => $pathItem,
            'nameItem' => $nameItem
            //'dateUploaded' => $dateUploaded
        );
        $where = "`typeItem`='photo' AND `id`='.$id.'";
        return $this->db->update('galleryItem', $data, $where);
    }

    public function albumEditing($id, $nameAlbum){
        $data = array(
            'nameAlbum' => $nameAlbum
            //'dateUploaded' => $dateUploaded
        );
        return $this->db->update('album', $data, array('id' => $id));
    }



}
