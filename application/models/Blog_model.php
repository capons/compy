<?php
    class Blog_model Extends CI_Model {
        private $table = 'posts';
        private $tags = 'posts_tags';
        private $themes = 'posts_themes';

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function get_related_posts($posts) {
            $id = $posts[0]['id'];
            $this->db->select('post_themes.id, post_themes.name');
            $this->db->from('posts_themes');
            $this->db->join('post_themes','post_themes.id=posts_themes.theme','left');
            $this->db->where('posts_themes.post='.$id);
            $this->db->group_by('theme');
            $themes = $this->db->get()->result_array();
            $th = array();
            foreach($themes as $theme) {
                $th[]  = 'posts_themes.theme='.$theme['id'];
            }
            $where = implode(' OR ', $th);
            if (empty($where))
                return array();
            $query = $this->db->query("SELECT * FROM posts LEFT JOIN posts_themes ON posts_themes.post=posts.id WHERE $where
                            GROUP BY posts.id ORDER BY views DESC LIMIT 0,4;");
            return $query->result_array();
        }

        public function add() {
            $config['upload_path'] = './templates/site/img/blog';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload',$config);
            if (!($this->upload->do_upload('preview'))) {
                echo $this->upload->display_errors();
                die();
            }
            else
                $preview = $this->upload->data()['file_name'];
            $date = date('Y-m-d H:i:s');
            if (empty($this->input->post('author')))
                $author = NULL;
            else
                $author = $this->input->post('author');
            $post_date = date('Y-m-d',strtotime($this->input->post('post_date')));
            $alias = build_alias($this->input->post('title'));
            $this->db->from('posts');
            $this->db->where(array('alias' => $alias));
            if ($this->db->get()->num_rows() > 0)
                $alias_check = 1;
            else
                $alias_check = 0;
            $data = array(
                            'title' => $this->input->post('title'),
                            'preview' => $preview,
                            'create_date' => $date,
                            'update_date' => $date,
                            'author' => $author,
                            'content' => $this->input->post('content'),
                            'short_description' => $this->input->post('short_description'),
                            'post_date' => $post_date
            );
            $this->db->insert($this->table,$data);
            $id = $this->db->insert_id();

            if ($alias_check == 1)
                $alias = build_alias($this->input->post('title')).'-'.$id;
            else
                $alias = build_alias($this->input->post('title'));

            $this->db->where(array('id' => $id));
            $this->db->update('posts',array('alias' => $alias));
            //TAGS
            foreach($_POST as $key=>$value) {
                if (strpos($key,'tag_') !== false) {
                    $tag = substr($key,4);
                    $this->db->insert('posts_tags', array('post' => $id,'tag' => $tag));
                }
            }
            //THEMES
            foreach($_POST as $key=>$value) {
                if (strpos($key,'theme_') !== false) {
                    $tag = substr($key,6);
                    $this->db->insert('posts_themes', array('post' => $id,'theme' => $tag));
                }
            }
        }

        public function get($id=0, $mode = 'default', $category = '', $tag = '',$author_check = 1, $alias='',$pagination=0,$page=0)
        {
            if ($pagination == 1)
                $this->load->library('pagination');
            if (($alias != '') || ($id != 0)) {
                if ($alias != '') {
                    $this->db->query("UPDATE posts SET views=views+1 WHERE alias='$alias';");
                } else {
                    $this->db->query("UPDATE posts SET views=views+1 WHERE id=$id;");
                }
            }
            if (($id == 0) && ($alias == '')) {
                if ($mode == 'default') {
                    $this->db->order_by('post_date DESC, create_date DESC');
                } elseif ($mode == 'top') {
                    $this->db->order_by('views DESC');
                    $this->db->limit(3,0);
                } else if ($mode == 'latest') {
                    $this->db->order_by('post_date DESC, create_date DESC');
                    $this->db->limit(3,0);
                }
                if ($category != '') {
                    $this->db->from($this->themes);
                    $this->db->join($this->table,'posts_themes.post=posts.id','left');
                    $this->db->join('post_themes', 'posts_themes.theme=post_themes.id','left');
                    $this->db->like('post_themes.name',$category);
                    //$this->db->where(array('post_themes.name' => $category));
                    $this->db->group_by('post');
                } elseif ($tag != ''){
                    $this->db->from($this->tags);
                    $this->db->join($this->table,'posts.id=posts_tags.post','left');
                    $this->db->join('tags','posts_tags.tag=tags.id','left');
                    $this->db->like('tags.name',$tag);
                    //$this->db->where(array('posts_tags.tag' => $tag));
                    $this->db->group_by('post');
                } else {
                    $this->db->from($this->table);
                }
            } else if ($alias != '') {
                $this->db->where('posts.alias',$alias);
                $this->db->from($this->table);
            } else {
                $this->db->where(array('posts.id' => $id));
                $this->db->from($this->table);
            }
            if ($author_check == 1)
                $this->db->where('author IS NOT NULL');

            $this->db->join('authors','posts.author=authors.id','left');
            $this->db->select('
                                posts.id as id,
                                authors.id as author_id,
                                authors.name as author_name,
                                authors.photo as author_photo,
                                posts.title,
                                posts.create_date,
                                posts.content,
                                posts.post_date,
                                posts.preview,
                                posts.short_description,
                                posts.update_date,
                                posts.views,
                                posts.alias
                              ');
            if ($pagination == 1) {
                $total = $this->db->get()->num_rows();
                $query = $this->db->query($this->db->last_query()." LIMIT $page,8;");
                $result = $query->result_array();
            } else
                $result = $this->db->get()->result_array();
            if ($pagination == 1) {
                $config['base_url'] = '/cp/blog';
                $config['total_rows'] = $total;
                $config['per_page'] = 8;
                $this->pagination->initialize($config);
            }

            if ((($id != 0) || ($alias != '')) && (count($result) == 0))
                return false;

            if ($pagination == 1)
                return array('blog'=>$this->get_post_themes($this->get_post_tags($result)),'pagination'=>$this->pagination->create_links());
            if (($id != 0 ) || ($alias != ''))
                return $this->get_post_themes($this->get_post_tags($result));
            return $this->get_post_themes($this->get_post_tags($result));
        }

        public function get_used_themes() {
            $this->db->select('
                                post_themes.id,
                                post_themes.name
                            ');
            $this->db->from('post_themes');
            $this->db->join('posts_themes','posts_themes.theme=post_themes.id');
            $this->db->group_by('theme');
            $this->db->order_by('name');
            return $this->db->get()->result_array();
        }

        public function change() {
            $this->db->where(array('id' => $this->input->post('id')));
            $data = array();
            $config['upload_path'] = './templates/site/img/blog';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload',$config);
            if (!empty($_FILES['preview']['name'])) {
                if (!($this->upload->do_upload('preview'))) {
                    echo $this->upload->display_errors();
                    die();
                }
                else
                    $data['preview'] = $content = $this->upload->data()['file_name'];
            }
            $date = date('Y-m-d H:i:s');
            if (empty($this->input->post('author'))) {
                $author = NULL;
            } else {
                $author = $this->input->post('author');
            }
            $data['update_date'] = $date;
            $data['title'] = $this->input->post('title');
            $data['post_date'] = $this->input->post('post_date');
            $data['author'] = $author;
            $data['short_description'] = $this->input->post('short_description');
            $data['content'] = $this->input->post('content');
            $this->db->update($this->table, $data);

            //TAGS
            $this->db->where(array('post' => $this->input->post('id')));
            $this->db->delete($this->tags);
            foreach($_POST as $key=>$value) {
                if (strpos($key,'tag_') !== false) {
                    $tag = substr($key,4);
                    $this->db->insert('posts_tags', array('post' => $this->input->post('id'),'tag' => $tag));
                }
            }
            //THEMES
            $this->db->where(array('post' => $this->input->post('id')));
            //$this->db->like('',);
            $this->db->delete($this->themes);
            foreach($_POST as $key=>$value) {
                if (strpos($key,'theme_') !== false) {
                    $tag = substr($key,6);
                    $this->db->insert('posts_themes', array('post' => $this->input->post('id'),'theme' => $tag));
                }
            }
        }

        public function delete($id) {
            $this->db->where(array('id' => $id));
            $this->db->delete($this->table);
        }

        public function posts_by_author($author) {
            $this->db->where(array('author' => $author));
            $posts = $this->db->get('posts')->result_array();
            return $this->get_post_themes($this->get_post_tags($posts));
        }

        private function get_post_themes($posts) {
            foreach($posts as $key=>$work) {
                $posts["$key"]['themes'] = array();
                $query = $this->db->query("SELECT
                                          post_themes.id,
                                          post_themes.name,
                                          posts_themes.id AS con_id
                                  FROM post_themes LEFT JOIN posts_themes ON posts_themes.theme=post_themes.id
                                  WHERE post=".$work['id'].";");
                foreach($query->result_array() as $row) {
                    $posts["$key"]['themes'][] = $row;
                }
            }
            return $posts;
        }

        private function get_post_tags($posts) {
            foreach($posts as $key=>$work) {
                $posts["$key"]['tags'] = array();
                $query = $this->db->query("SELECT
                                          tags.id,
                                          tags.name,
                                          posts_tags.id AS con_id
                                  FROM tags LEFT JOIN posts_tags ON posts_tags.tag=tags.id
                                  WHERE post=".$work['id'].";");
                foreach($query->result_array() as $row) {
                    $posts["$key"]['tags'][] = $row;
                }
            }
            return $posts;
        }


    }