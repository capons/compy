<?php
    class Dictionary_model Extends CI_Model {
        private $technologies = 'technologies';
	private $mailByTechnology = 'mailByTechnology';
        private $themes = 'themes';
        private $types = 'work_types';
        private $post_themes = 'post_themes';
        private $colors = 'colors';

        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        public function get_technologies() {
            return $this->db->get($this->technologies)->result_array();
        }

	public function get_emailByTechnology() {
            return $this->db->get($this->mailByTechnology)->result_array();
        }

        public function get_themes() {
            return $this->db->get($this->themes)->result_array();
        }

        public function get_types() {
            return $this->db->get($this->types)->result_array();
        }

        public function get_post_themes() {
            return $this->db->get($this->post_themes)->result_array();
        }

        public function add($table, $name) {
            $this->db->insert($table, array(
                                            'name' => $name
                                            )
                            );
        }

        public function edit($table, $name, $id) {
            $this->db->where(array('id'=>$id));
            $this->db->update($table, array(
                    'name' => $name
                )
            );
        }

        public function delete($table, $id) {
            $this->db->where(array('id' => $id));
            $this->db->delete($table);
        }

        public function get_colors() {
            return $this->db->get($this->colors)->result_array();
        }

        public function add_color() {
            $this->db->insert($this->colors, array('name' => $this->input->post('name')));
        }

        public function change_color($id) {
            $this->db->where(array('id' => $id));
            $this->db->update($this->colors, array('name' => $this->input->post('name')));
        }

        public function delete_color($id) {
            $this->db->where(array('id' => $id));
            $this->db->delete($this->colors);
        }

    }