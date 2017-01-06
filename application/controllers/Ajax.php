<?php
    class Ajax Extends CI_Controller {
        function __construct() {
            parent::__construct();
            //if (!($this->input->is_ajax_request())) {
            //    exit('No direct script access allowed');
            //}
        }

        public function get_more() {
			$this->load->model('works_model');
            $this->load->helper('color');
            $this->load->helper('href');
            $this->load->helper('debug');
            $data = array();
		 
            if ($this->input->post('filters') =='') {
                $data = $this->works_model->get($this->input->post('start'));
            }
            else {
                $data = $this->works_model->get_with_filters($this->input->post('filters'), $this->input->post('start'));
            }
            $this->load->view('site/works_ajax',$data);
        }

        public function get_total() {
            $this->load->model('works_model');
            $data = $this->works_model->get_with_filters($this->input->post('filters'), $this->input->post('start'), $total = 1);
            echo $data;
            exit();
        }

        public function save_order() {
            if (!($order = $this->input->post('work')))
                exit();
            $this->load->model('works_model');
            $this->works_model->set_order($order);
            exit();
        }
    }