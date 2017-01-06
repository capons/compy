<?php

	class Work Extends CI_Controller {

		function __construct() {

			parent::__construct();

			$this->load->helper('href');

			$this->load->helper('url');

			$this->load->model('works_model');

		}



		public function index() {

			$data = array();

			$this->load->helper('color');

			$result = $this->works_model->get();

			$data['works'] = $result['works'];

			$data['themes'] = $result['themes'];

			$data['types'] = $result['types'];

			$data['total'] = $result['total'];

			$data['current'] = $result['current'];
			/*$data['title'] = $result['title'];*/

			$this->load->view('site/works', $data);

		}



		public function view($alias='') {

			$data = array();

			if ($data['work'] = $this->works_model->get_by_alias($alias)[0]) {
				$this->output->cache(10080);
				$this->load->view('site/work', $data);

			}

			else {

				$this->load->helper('404');

				set_404();

			}

		}

        public function wordpress($projectName='') {
            $this->load->view('site/projects/'.$projectName);
        }
        public function php($projectName='') {
            $this->load->view('site/projects/'.$projectName);
        }
        public function aspnet($projectName='') {
            $this->load->view('site/projects/'.$projectName);
        }
        public function cpp($projectName='') {
            $this->load->view('site/projects/'.$projectName);
        }

		public function filters($filters = '') {

			$data = array();

			$this->load->helper('color');

			if (empty($filters))

				$result = $this->works_model->get();

			else

				$result = $this->works_model->get_with_filters($filters);

			$data['works'] = $result['works'];

			$data['themes'] = $result['themes'];

			$data['types'] = $result['types'];

			$data['total'] = $result['total'];

			$data['current'] = $result['current'];
			$data['title'] = $result['title'];

            if (isset($result['filters']))

			    $data['filters'] = $result['filters'];

			$this->load->view('site/works', $data);

		}

	}