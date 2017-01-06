<?php

class Vacancies_model Extends CI_Model {

    private $table = 'vacancies';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function set_order($sort) {
        foreach($sort as $order=>$id) {
            $this->db->where('id',$id);
            $this->db->update($this->table, array('vacancies.order' => $order));
        }
    }

    private function make_query_array() {
        return array(
            'title' => $this->title,
            'short_description' => $this->description,
            'create_date' => $this->create_date
        );
    }

    public function add() {
	    $this->load->helper('alias');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $youAre = $this->input->post('youAre');
        $pluses = $this->input->post('pluses');
        $benefits = $this->input->post('benefits');
	    $toApply = $this->input->post('toApply');
        $mailByTechnologyId = $this->input->post('mailByTechnologyId');
        $date = date('Y-m-d H:i:s');

        $alias = build_alias($this->input->post('alias'));

	    $this->db->from($this->table);
        $this->db->where('alias',$alias);
        if (count($this->db->get()->result_array()) != 0)
            $check = 1;
        else
            $check = 0;

        $this->db->insert($this->table, array(
                'description' => $description,
                'title' => $title,
                'create_date' => $date,
                'update_date' => $date,
                'requirements' =>$youAre,
                'requirements_plus' => $pluses,
                'benefits' => $benefits,
		        'to_apply' => $toApply,
                'alias' => $alias,
                'technologyMailId' => $mailByTechnologyId
            )
        );

        $id = $this->db->insert_id();
	if ($check == 1) {
            $this->db->where('id', $id);
            $this->db->update($this->table, array('alias' => $alias . '-' . $id));
        }
    }

    public function set() {
        $this->load->library('upload');
        $data = array();
        $data['description'] = $this->input->post('description');
        $data['title'] = $this->input->post('title');
        $data['update_date'] = date('Y-m-d H:i:s');
        $data['requirements'] = $this->input->post('requirements');
        $data['requirements_plus'] = $this->input->post('requirements_plus');
        $data['benefits'] = $this->input->post('benefits');
        $data['benefits'] = $this->input->post('benefits');
        $data['to_apply'] = $this->input->post('to_apply');
        $data['alias'] = $this->input->post('alias');
        $data['technologyMailId'] = $this->input->post('mailByTechnologyId');

        $this->db->from($this->table);
        $this->db->where('id',$this->input->post('id'));
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }

    public function get($start = 0,$pagination = 0,$page=1) {
        if ($pagination == 1)
            $this->load->library('pagination');

        $query = $this->db->query("SELECT vacancies.id,
                                          vacancies.title,
                                          vacancies.description,
                                          vacancies.requirements,
                                          vacancies.requirements_plus,
                                          vacancies.create_date,
                                          vacancies.update_date,
                                          vacancies.benefits,
                                          vacancies.to_apply,
                                          vacancies.alias
                                   FROM vacancies;");

        $temp = $query->result_array();
        $data['vacanciesList'] = $temp;
        return $data;
    }

    public function get_by_id($id=0)
    {
        if ($id == '') {
            $this->db->from($this->table);
        } else {
            $this->db->where(array('vacancies.id' => $id));
            $this->db->from($this->table);

            $this->db->select
            ('vacancies.id,
              vacancies.description,
              vacancies.title,
              vacancies.create_date,
              vacancies.update_date,
              vacancies.requirements,
              vacancies.requirements_plus,
              vacancies.to_apply,
              vacancies.benefits,
              vacancies.alias,
              vacancies.technologyMailId,
              mailByTechnology.mail');

            $this->db->join
            ('mailByTechnology',
                'vacancies.technologyMailId = mailByTechnology.id',
                'left');
        }

        $result = $this->db->get()->result_array();

        if ((count($result) == 0) && ($id != 0))
            return false;

        return $result;
    }

    public function get_by_alias($alias)
    {
        if ($alias == '') {
            $this->db->from($this->table);
        } else {
            $this->db->where(array('vacancies.alias' => $alias));
            $this->db->from($this->table);
            $this->db->select
            ('vacancies.id,
              vacancies.description,
              vacancies.title,
              vacancies.create_date,
              vacancies.update_date,
              vacancies.requirements,
              vacancies.requirements_plus,
              vacancies.to_apply,
              vacancies.benefits,
              vacancies.alias,
              vacancies.technologyMailId,
              mailByTechnology.mail');

            $this->db->join
            ('mailByTechnology',
                'vacancies.technologyMailId = mailByTechnology.id',
                'left');
        }

        $result = $this->db->get()->result_array();
        if ((count($result) == 0) && ($alias != ''))
            return false;

        return $result;
    }
}