<?php

    class Cp Extends CI_Controller {

        public function __construct() {

            parent::__construct();

            $this->load->library('session');

            $this->load->helper('url');

            $this->load->helper('href');

        }



        private function _check_logged() {

            if (!($this->session->has_userdata('id')))

                redirect('cp/login');

        }





        public function index() {

            $this->_check_logged();

            $this->load->view('cp/header');

            $this->load->view('cp/main');

            $this->load->view('cp/footer');

        }



        public function login() {

            if (empty($_POST)) {

                $this->load->view('cp/header');

                $this->load->view('cp/login');

                $this->load->view('cp/footer');

            } else {

                if ((empty($this->input->post('login'))) || (empty($this->input->post('pass'))))

                    redirect('cp/login?error=1');

                $this->load->model('user_model');

                $this->user_model->set_query_variables();

                if (!$this->user_model->check())

                    redirect('cp/login?error=2');

                redirect('cp');

            }

        }



        //jobs

        public function jobvacancy($page=0) {

            $this->load->helper('color');

            $this->_check_logged();

            $this->load->model('vacancies_model');

            $this->load->view('cp/header');

            $data = array();



            $result = $this->vacancies_model->get('all',0);

            $data['pagination'] = '';



            //UNCOMMENT FOR PAGINATION

            //$result = $this->works_model->get('all',1,$page);

            //$data['pagination'] = $result['pagination'];



            $data['vacancies'] = $result['vacanciesList'];



            $this->load->view('cp/jobvacancy', $data);

            $this->load->view('cp/footer');

        }



       public function add_job() {

            $this->_check_logged();

            if (empty($_POST)) {

                $this->load->helper('color');

                $this->load->view('cp/header');

                $this->load->model('vacancies_model');
                $this->load->model('dictionary_model');
                $data = array();
                $data['mailByTechnology'] = $this->dictionary_model->get_emailByTechnology();
                $this->load->view('cp/add_job',$data);

                $this->load->view('cp/footer');

            } else {

                if ((empty($this->input->post('title'))) ||

                    (empty($this->input->post('youAre'))) ||

                    (empty($this->input->post('alias'))) ||

                    (empty($this->input->post('benefits'))) ||

                    (empty($this->input->post('toApply')))) {

                    redirect('cp/add_job?error=1');

                }

                $this->load->model('vacancies_model');

                $this->vacancies_model->add();

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                redirect('cp/add_job');

            }

        }



        public function edit_job($id) {

            $this->_check_logged();

            $this->load->model('vacancies_model');

            if (empty($_POST)) {

                $data = array();
                $this->load->model('dictionary_model');
                $data['mailByTechnology'] = $this->dictionary_model->get_emailByTechnology();
                $data['vacancy'] = $this->vacancies_model->get_by_id($id)[0];

                $this->load->model('vacancies_model');

                $this->load->view('cp/header');

                $this->load->view('cp/edit_job',$data);

                $this->load->view('cp/footer');



            } else {

                $this->vacancies_model->set();

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                redirect('cp/jobvacancy');

            }

        }


        public function delete_job($id) {

            $this->_check_logged();

            $this->load->model('vacancies_model');

            $this->vacancies_model->delete($id);

            $this->load->library('cache_lib');

            $this->cache_lib->clear();

            redirect('cp/jobvacancy');

        }



        //WORKS

        public function works($page=0) {

            $this->load->helper('debug');

            $this->load->helper('color');

            $this->_check_logged();

            $this->load->model('works_model');

            $this->load->view('cp/header');

            $data = array();

            $result = $this->works_model->get('all',1,$page);

            $data['works'] = $result['works'];

            $data['pagination'] = $result['pagination'];

//            var_dump($data['works']);

//            die();

            $this->load->view('cp/works',$data);

            $this->load->view('cp/footer');

        }



        public function add_work() {

            $this->_check_logged();

            if (empty($_POST)) {

                $this->load->helper('color');

                $this->load->view('cp/header');

                $this->load->model('dictionary_model');

                $data = array();

                $data['technologies'] = $this->dictionary_model->get_technologies();

                $data['themes'] = $this->dictionary_model->get_themes();

                $data['types'] = $this->dictionary_model->get_types();

                $data['colors'] = $this->dictionary_model->get_colors();

                $this->load->view('cp/add_work',$data);

                $this->load->view('cp/footer');

            } else {

                if ((empty($this->input->post('title'))) ||

                    (empty($this->input->post('short_description'))) ||

                    (empty($this->input->post('title'))) ||

                    (empty($this->input->post('title'))) ||

                    (empty($this->input->post('title')))) {

                    redirect('cp/add_work?error=1');

                }

                $this->load->model('works_model');

                $this->works_model->add();

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                redirect('cp/works');

            }

        }



        public function delete_work($id) {

            $this->_check_logged();

            $this->load->model('works_model');

            $this->works_model->delete($id);

            $this->load->library('cache_lib');

            $this->cache_lib->clear();

            redirect('cp/works');

        }



        public function edit_work($id) {

            $this->_check_logged();

            $this->load->model('works_model');

            if (empty($_POST)) {

                $data = array();

                $this->load->helper('color');

                $data['work'] = $this->works_model->get_by_id($id)[0];

                $this->load->model('dictionary_model');

                $data['technologies'] = $this->dictionary_model->get_technologies();

                $data['themes'] = $this->dictionary_model->get_themes();

                $data['types'] = $this->dictionary_model->get_types();

                $data['colors'] = $this->dictionary_model->get_colors();



                $this->load->view('cp/header');

                $this->load->view('cp/edit_work',$data);

                $this->load->view('cp/footer');



            } else {

                $this->works_model->set();

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                redirect('cp/works');

            }

        }





        //DICTIONARIES

        public function work_types() {

            $this->_check_logged();

            $this->load->model('dictionary_model');

            if (empty($_POST)) {

                $this->load->model('dictionary_model');

                $data['title'] = 'work types';

                $data['d_title'] = 'work_types';

                $data['content'] = $this->dictionary_model->get_types();

                $this->load->view('cp/header');

                $this->load->view('cp/dictionary',$data);

                $this->load->view('cp/footer');

            } else if ($_POST['type'] == 'add') {

                $this->dictionary_model->add($this->input->post('d_title'), $this->input->post('name'));

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                redirect('cp/'.$this->input->post('d_title'));

            } else {

                $this->dictionary_model->edit($this->input->post('d_title'), $this->input->post('name'),$this->input->post('id'));

                $this->cache_lib->clear();

                redirect('cp/'.$this->input->post('d_title'));

            }

        }



        public function technologies() {

            $this->_check_logged();

            $this->load->model('dictionary_model');

            if (empty($_POST)) {

                $data['title'] = 'technologies';

                $data['d_title'] = 'technologies';

                $data['content'] = $this->dictionary_model->get_technologies();

                $this->load->view('cp/header');

                $this->load->view('cp/dictionary',$data);

                $this->load->view('cp/footer');

            } else if ($_POST['type'] == 'add') {

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                $this->dictionary_model->add($this->input->post('d_title'), $this->input->post('name'));

                redirect('cp/'.$this->input->post('d_title'));

            }

        }



        public function themes() {

            $this->_check_logged();

            $this->load->model('dictionary_model');

            if (empty($_POST)) {

                $data['title'] = 'Industries';

                $data['d_title'] = 'themes';

                $data['content'] = $this->dictionary_model->get_themes();

                $this->load->view('cp/header');

                $this->load->view('cp/dictionary',$data);

                $this->load->view('cp/footer');

            } else if ($this->input->post('type') == 'add') {

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                $this->dictionary_model->add($this->input->post('d_title'), $this->input->post('name'));

                redirect('cp/'.$this->input->post('d_title'));

            } else if ($this->input->post('type') == 'edit') {

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                $this->dictionary_model->edit($this->input->post('d_title'), $this->input->post('name'), $this->input->post('id'));

                redirect('cp/'.$this->input->post('d_title'));

            }

        }



        public function post_themes() {

            $this->_check_logged();

            $this->load->model('dictionary_model');

            if (empty($_POST)) {

                $data['title'] = 'post themes';

                $data['d_title'] = 'post_themes';

                $data['content'] = $this->dictionary_model->get_post_themes();

                $this->load->view('cp/header');

                $this->load->view('cp/dictionary',$data);

                $this->load->view('cp/footer');

            } else if ($this->input->post('type') == 'add') {

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                $this->dictionary_model->add($this->input->post('d_title'), $this->input->post('name'));

                redirect('cp/'.$this->input->post('d_title'));

            } else if ($this->input->post('type') == 'edit') {

                $this->load->library('cache_lib');

                $this->cache_lib->clear();

                $this->dictionary_model->edit($this->input->post('d_title'), $this->input->post('name'), $this->input->post('id'));

                redirect('cp/'.$this->input->post('d_title'));

            }

        }



        public function delete_dictionary($table,$id) {

            $this->_check_logged();

            $this->load->model('dictionary_model');

            $this->dictionary_model->delete($table,$id);

            $this->load->library('cache_lib');

            $this->cache_lib->clear();

            redirect('cp/'.$table);

        }



        //AUTHORS

//        public function authors($id = 0) {

//            $this->load->helper('debug');

//            $this->_check_logged();

//            $this->load->model('authors_model');

//            $data = array();

//            if ($id == 0) {

//                $data['authors'] = $this->authors_model->get();

//            } else {

//                $data['author'] = $this->authors_model->get($id);

//            }

//            $this->load->view('cp/header');

//            $this->load->view('cp/authors',$data);

//            $this->load->view('cp/footer');

//        }

//

//        public function add_author() {

//            $this->_check_logged();

//            if (empty($_POST)) {

//                $this->load->view('cp/header');

//                $this->load->view('cp/add_author');

//                $this->load->view('cp/footer');

//            } else {

//                $this->load->model('authors_model');

//                $this->authors_model->add();

//                $this->load->library('cache_lib');

//                $this->cache_lib->clear();

//                redirect('cp/authors');

//            }

//        }

//

//        public function edit_author($id) {

//            $this->_check_logged();

//            $this->load->model('authors_model');

//            if (empty($_POST)) {

//                $this->load->view('cp/header');

//                $data = array();

//                $data['author'] = $this->authors_model->get($id);

//                $this->load->view('cp/edit_author', $data);

//            } else {

//                $this->authors_model->change();

//                $this->load->library('cache_lib');

//                $this->cache_lib->clear();

//                redirect('cp/authors');

//            }

//        }

//

//        public function delete_author($id) {

//            $this->_check_logged();

//            $this->load->model('authors_model');

//            $this->authors_model->delete($id);

//            $this->load->library('cache_lib');

//            $this->cache_lib->clear();

//            redirect('cp/authors');

//        }

//

//        public function delete_author_from_post($post) {

//            $this->load->model('authors_model');

//            $this->authors_model->delete_from_post($post);

//            $this->load->library('cache_lib');

//            $this->cache_lib->clear();

//            redirect('cp/authors');

//        }

//

//        //BLOG

//        public function blog($page=0) {

//            $this->_check_logged();

//            $this->load->helper('href');

//            $this->load->model('blog_model');

//            $data = array();

//            $result = $this->blog_model->get(0,'default','','',0,'',1,$page);

//            $data['posts'] = $result['blog'];

//            $data['pagination'] = $result['pagination'];

//            $this->load->view('cp/header');

//            $this->load->view('cp/blog', $data);

//            $this->load->view('cp/footer');

//        }

//

//        public function add_post() {

//            $this->_check_logged();

//            if (empty($_POST)) {

//                $this->load->model('authors_model');

//                $this->load->model('dictionary_model');

//                $data = array();

//                $data['themes'] = $this->dictionary_model->get_post_themes();

//                $data['tags'] = $this->dictionary_model->get_tags();

//                $data['authors'] = $this->authors_model->get();

//                $this->load->view('cp/header');

//                $this->load->view('cp/add_post', $data);

//                $this->load->view('cp/footer');

//            } else {

//                $this->load->helper('alias');

//                $this->load->model('blog_model');

//                $this->blog_model->add();

//                $this->load->library('cache_lib');

//                $this->cache_lib->clear();

//                redirect('cp/blog');

//            }

//        }

//

//        public function edit_post($id) {

//            $this->_check_logged();

//            $this->load->model('blog_model');

//            if (empty($_POST)) {

//                $this->load->model('authors_model');

//                $this->load->model('dictionary_model');

//                $data = array();

//                $data['themes'] = $this->dictionary_model->get_post_themes();

//                $data['tags'] = $this->dictionary_model->get_tags();

//                $data['authors'] = $this->authors_model->get();

//                $data['post'] = $this->blog_model->get($id,'default','','',0)[0];

//                $this->load->view('cp/header');

//                $this->load->view('cp/edit_post', $data);

//                $this->load->view('cp/footer');

//            } else {

//                $this->load->model('blog_model');

//                $this->blog_model->change();

//                $this->load->library('cache_lib');

//                $this->cache_lib->clear();

//                redirect('cp/blog');

//            }

//        }

//

//        public function delete_post($id) {

//            $this->_check_logged();

//            $this->load->model('blog_model');

//            $this->blog_model->delete($id);

//            $this->load->library('cache_lib');

//            $this->cache_lib->clear();

//            redirect('cp/blog');

//        }



        //COLORS

        public function colors() {

            $this->load->model('dictionary_model');

            $data = array();

            $data['colors'] = $this->dictionary_model->get_colors();

            $this->load->view('cp/header');

            $this->load->view('cp/colors', $data);

            $this->load->view('cp/footer');

        }



        public function add_color() {

            $this->load->helper('url');

            if (empty($_POST['name']))

                redirect('cp/colors');

            $this->load->model('dictionary_model');

            $this->dictionary_model->add_color();

            redirect('cp/colors');

        }



        public function edit_color($id) {

            $this->load->helper('url');

            if (empty($_POST['name']))

                redirect('cp/colors');

            $this->load->model('dictionary_model');

            $this->dictionary_model->change_color($id);

            redirect('cp/colors');

        }



        public function delete_color($id) {

            $this->load->helper('url');

            $this->load->model('dictionary_model');

            $this->dictionary_model->delete_color($id);

            redirect('cp/colors');

        }

    }