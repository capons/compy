<?php
class Vacancy Extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('href');
        $this->load->helper('url');
        $this->load->model('vacancies_model');
    }

    function view($alias) {
        $this->load->helper('href');

        $data['vacancy'] = $this->vacancies_model->get_by_alias($alias)[0];
        $this->load->model('vacancies_model');

        $this->output->cache(10080);
        $this->load->view('site/vacancy', $data);
    }
}