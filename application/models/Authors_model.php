<?php
    class Authors_model Extends CI_Model {
        private $table = 'authors';

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        private function get_author_posts($authors) {
            foreach($authors as $key => $author) {
                $this->db->where(
                                        array(
                                            'author' => $author['id']
                                        )
                                );
                $this->db->from('posts');
                $authors["$key"]['posts'] = $this->db->get()->result_array();
            }
            return $authors;
        }

        public function delete_from_post($post) {
            $this->db->where(array('id' => $post));
            $this->db->update('posts', array('author' => NULL));
        }

        public function add() {
            $this->load->helper('alias');
            $config['upload_path'] = './templates/site/img/authors';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload',$config);
            if (!($this->upload->do_upload('photo'))) {
                echo $this->upload->display_errors();
                die();
            }
            else
                $photo = $this->upload->data()['file_name'];
            $alias = build_alias($this->input->post('name'));
            $this->db->insert($this->table, array(
                                                        'name' => $this->input->post('name'),
                                                        'alias' => $alias,
                                                        'photo' => $photo
                                                    )
                            );
        }

        public function delete($id) {
            if (empty($id))
                return false;
            $this->db->where(array('id' => $id));
            $this->db->delete($this->table);
        }



        public function change() {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './templates/site/img/authors';
            $this->load->library('upload', $config);
            $this->load->helper('alias');
            $data = array();
            if (!empty($_FILES['photo']['name'])) {
                if (!($this->upload->do_upload('photo'))) {
                    echo $this->upload->display_errors();
                    die();
                }
                else
                    $data['photo'] = $content = $this->upload->data()['file_name'];
            }
            $data['name'] = $this->input->post('name');
            $data['alias'] = build_alias($data['name']);
            $this->db->where(array('id' => $this->input->post('id')));
            $this->db->update($this->table, $data);
        }

        public function get($id = 0) {
            if ($id != 0)
                $this->db->where(array('id' => $id));
            $this->db->from($this->table);
            if ($id == 0)
                return $this->get_author_posts($this->db->get()->result_array());
            else
                return $this->get_author_posts($this->db->get()->result_array()[0]);
        }
    }