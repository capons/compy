<?php
    class Works_model Extends CI_Model {
        private $table = 'works';


        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function set_order($sort) {
            foreach($sort as $order=>$id) {
                $this->db->where('id',$id);
                $this->db->update($this->table, array('works.order' => $order));
            }

        }

        private function make_query_array() {
            return array(
                            'title' => $this->title,
                            'short_description' => $this->short_description,
                            'create_date' => $this->create_date
            );
        }

        public function add() {
            $this->load->helper('alias');
            $config['upload_path'] = './templates/site/img/works';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload',$config);

            if (!($this->upload->do_upload('preview'))) {
                echo $this->upload->display_errors();
                die();
            }
            else
                $preview = $this->upload->data()['file_name'];

            $config['upload_path'] = './templates/site/img/works/fullworks';
            $this->upload->initialize($config);
            if (!($this->upload->do_upload('content'))) {
                echo $this->upload->display_errors();
                die();
            }
            else
                $content = $this->upload->data()['file_name'];
            $title = $this->input->post('title');
            $short_description = $this->input->post('short_description');
            $date = date('Y-m-d H:i:s');
            $alias = build_alias($title);
            $this->db->from($this->table);
            $this->db->where('alias',$alias);
            if (count($this->db->get()->result_array()) != 0)
                $check = 1;
            else
                $check = 0;
            $this->db->insert($this->table, array(
                                                    'title' => $title,
                                                    'create_date' => $date,
                                                    'update_date' => $date,
                                                    'short_description' => $short_description,
                                                    'preview' => $preview,
                                                    'content' => $content,
                                                    'alias' => $alias,
                                                    'content_html' => $this->input->post('content_html'),
                                                    'color' => $this->input->post('color')
                                                )
                            );
            $id = $this->db->insert_id();
            if ($check == 1) {
                $this->db->where('id', $id);
                $this->db->update($this->table, array('alias' => $alias . '-' . $id));
            }
            //technologies
            foreach($_POST as $key=>$value) {
                if (strpos($key,'technology_') !== false) {
                    $technology = substr($key,11);
                    $this->db->insert('works_technologies', array('work' => $id,'technology' => $technology));
                }
            }

            //THEMES
            foreach($_POST as $key=>$value) {
                if (strpos($key,'theme_') !== false) {
                    $theme = substr($key,6);
                    $this->db->insert('work_themes', array('work' => $id,'theme' => $theme));
                }
            }

            //TYPES
            foreach($_POST as $key=>$value) {
                if (strpos($key,'type_') !== false) {
                    $work_type = substr($key,5);
                    $this->db->insert('works_work_types', array('work' => $id,'work_type' => $work_type));
                }
            }
        }

        public function set() {
            $this->load->helper('alias');
            $this->load->library('upload');
            $config['allowed_types'] = 'gif|jpg|png';
            $data = array();
            if (!empty($_FILES['content']['name'])) {
                $config['upload_path'] = './templates/site/img/works/fullworks';
                $this->upload->initialize($config);
                if (!($this->upload->do_upload('content'))) {
                    echo $this->upload->display_errors();
                    die();
                }
                else
                    $data['content'] = $content = $this->upload->data()['file_name'];
            }

            if (!empty($_FILES['preview']['name'])) {
                $config['upload_path'] = './templates/site/img/works';
                $this->upload->initialize($config);
                if (!($this->upload->do_upload('preview'))) {
                    echo $this->upload->display_errors();
                    die();
                }
                else
                    $data['preview'] = $content = $this->upload->data()['file_name'];
            }
            $data['title'] = $this->input->post('title');
            $data['short_description'] = $this->input->post('short_description');
            $data['update_date'] = date('Y-m-d H:i:s');
            $data['content_html'] = $this->input->post('content_html');
            $data['color'] = $this->input->post('color');
            $alias = build_alias($data['title']);
            $this->db->from($this->table);
            $this->db->where('alias',$alias);
            if (count($this->db->get()->result_array()) != 0)
                $data['alias'] = $alias.'-'.$this->input->post('id');
            else
                $data['alias'] = $alias;
            $this->db->where('id',$this->input->post('id'));
            $this->db->update($this->table, $data);

            //TECHNOLOGIES
            $this->db->where('work',$this->input->post('id'));
            $this->db->delete('works_technologies');
            foreach($_POST as $key=>$value) {
                if (strpos($key,'technology_') !== false) {
                    $technology = substr($key,11);
                    $this->db->insert('works_technologies', array('work' => $this->input->post('id'),'technology' => $technology));
                }
            }

            //THEMES
            $this->db->where('work',$this->input->post('id'));
            $this->db->delete('work_themes');
            foreach($_POST as $key=>$value) {
                if (strpos($key,'theme_') !== false) {
                    $theme = substr($key,6);
                    $this->db->insert('work_themes', array('work' => $this->input->post('id'),'theme' => $theme));
                }
            }

            //TYPES
            $this->db->where('work',$this->input->post('id'));
            $this->db->delete('works_work_types');
            foreach($_POST as $key=>$value) {
                if (strpos($key,'type_') !== false) {
                    $work_type = substr($key,5);
                    $this->db->insert('works_work_types', array('work' => $this->input->post('id'),'work_type' => $work_type));
                }
            }
        }

        public function delete($id) {
            $this->db->where('id',$id);
            $this->db->delete($this->table);
        }

        private function get_work_types($works) {
            foreach($works as $key=>$work) {
                $works["$key"]['types'] = array();
                $query = $this->db->query("SELECT
                                          work_types.id,
                                          work_types.name,
                                          works_work_types.id AS con_id
                                  FROM works_work_types LEFT JOIN work_types ON works_work_types.work_type=work_types.id
                                  WHERE work=".$work['id'].";");
                foreach($query->result_array() as $row) {
                    $works["$key"]['types'][] = $row;
                }
            }
            return $works;
        }

        private function get_themes($works) {
            foreach($works as $key=>$work) {
                $works["$key"]['themes'] = array();
                $query = $this->db->query("SELECT
                                          themes.id,
                                          themes.name,
                                          work_themes.id AS con_id
                                  FROM work_themes LEFT JOIN themes ON work_themes.theme=themes.id
                                  WHERE work=".$work['id'].";");
                foreach($query->result_array() as $row) {
                    $works["$key"]['themes'][] = $row;
                }
            }
            return $works;
        }

        private function get_technologies($works) {
            foreach($works as $key=>$work) {
                $works["$key"]['technologies'] = array();
                $query = $this->db->query("SELECT
                                          technologies.id,
                                          technologies.name,
                                          works_technologies.id AS con_id
                                  FROM works_technologies LEFT JOIN technologies ON works_technologies.technology=technologies.id
                                  WHERE work=".$work['id'].";");
                foreach($query->result_array() as $row) {
                    $works["$key"]['technologies'][] = $row;
                }
            }
            return $works;
        }

        private function get_all_types() {
            $this->db->select('
                                  work_types.id,
                                  work_types.name
                            ');
            $this->db->from('works_work_types');
            $this->db->join('work_types','works_work_types.work_type=work_types.id','left');
            $this->db->group_by('work_types.id');
            $this->db->order_by('name','ASC');
            return $this->db->get()->result_array();
        }

        private function get_all_themes() {
            $this->db->select('
                                    themes.id,
                                    themes.name
                             ');
            $this->db->from('work_themes');
            $this->db->join('themes','themes.id=work_themes.theme','left');
            $this->db->group_by('id');
            $this->db->order_by('name','ASC');
            return $this->db->get()->result_array();
        }


        public function get_with_filters($filters, $start=0, $total=0) {
            $type_pos = strpos($filters, 'type-');
            $theme_pos = strpos($filters, 'theme-');
            $name_pos = strpos($filters, 'name-');

            //TYPES
            if ($type_pos !== false) {
                if ($theme_pos !== false) {
                    $end = $theme_pos;
                    $types = substr($filters, 5, $end - 6);
                } elseif ($name_pos !== false) {
                    $end = $name_pos;
                    $types = substr($filters, 5, $end - 6);
                } else {
                    $types = substr($filters, 5);
                }
            } else
                $types = '';
            $types = urldecode($types);

            //THEMES
            if ($theme_pos !== false) {
                if ($name_pos !== false) {
                    $end = $name_pos;
                    $themes = substr($filters, $theme_pos + 6, $end - $theme_pos - 7);
                } else
                    $themes = substr($filters, $theme_pos + 6);
            } else
                $themes = '';
            $themes = urldecode($themes);

            //NAMES
            if ($name_pos !== false) {
                $name = substr($filters, $name_pos + 5);
            } else
                $name = '';
            $name = urldecode($name);

//            if (strpos($filters,'type-') !== false) {
//                if (strpos($filters, 'theme-') !== false) {
//                    $themes_pos = strpos($filters,'theme-');
//                    $types = substr($filters, 5, $themes_pos);
//                    $themes = substr($filters, $themes_pos+6);
//                } else {
//                    $types = substr($filters,5);
//                    $themes = '';
//                }
//            } else {
//                $types = '';
//                if (strpos($filters, 'theme-') !== false) {
//                    $themes = substr($filters, 6);
//                }
//            }
            $data = array();
            $types_ = explode('-', $types);
            $themes_ = explode('-', $themes);
            $data['filters']['types'] = $types_;
            $data['filters']['themes'] = $themes_;
            $joins = '';
            if (count($types_) != 0)
                $joins .= "LEFT JOIN works_work_types ON works.id = works_work_types.work
                            LEFT JOIN work_types ON works_work_types.work_type = work_types.id";
            if (count($themes_) != 0)
                $joins .= " LEFT JOIN work_themes ON work_themes.work = works.id
                            LEFT JOIN themes ON themes.id=work_themes.theme";
            foreach($types_ as $key=>$value) {
                if (empty($value)) {
                    unset($types_["$key"]);
                    continue;
                }
                $types_["$key"] = "work_types.name = '".str_replace('-', '', $value)."'";
            }
            foreach($themes_ as $key=>$value) {
                if (empty($value)) {
                    unset($themes_["$key"]);
                    continue;
                }
                $themes_["$key"] = "themes.name = '".str_replace('-', '', $value)."'";
            }
            $filters_ = array();
            if (!empty($themes_))
                $filters_[] = '('.implode(' OR ', $themes_).')';
            if (!empty($types_))
                $filters_[] = '('.implode(' OR ', $types_).')';
            if (!(empty($name)))
                $filters_[] = "(works.title LIKE '%$name%')";
            if (!empty($filters_))
                $where = "WHERE ".implode(' AND ',$filters_);
            else
                $where = '';

            $data['filters']['name'] = $name;
            $query_ = $this->db->query("SELECT
                                              works.id
                              FROM works
                              $joins
                              $where
                              GROUP BY works.id;");
            if ($total == 1)
                return $query_->num_rows();
            $data['total'] = $query_->num_rows();
            $joins .= " LEFT JOIN colors ON works.color=colors.id";
            $query = $this->db->query("SELECT
                                              works.id,
                                              works.title,
                                              works.short_description,
                                              works.create_date,
                                              works.update_date,
                                              works.content,
                                              works.preview,
                                              works.views,
                                              works.alias,
                                              works.content_html,
                                              colors.name AS color
                              FROM works
                              $joins
                              $where
                              GROUP BY works.id
                              ORDER BY works.order
                              LIMIT $start,8
                            ");
            $result = $query->result_array();
            $data['start'] = $start;
            $data['current'] = $query->num_rows();
            $works = $this->get_work_types($this->get_themes($this->get_technologies($result)));
            $data['works'] = $works;
            $data['types'] = $this->get_all_types();
            $data['themes'] = $this->get_all_themes();
            return $data;
        }

        public function get($start = 0,$pagination = 0,$page=1) {
            if ($pagination == 1)
                $this->load->library('pagination');
            $where = array();
            $joins = '';
            $theme_check = 0;
            $type_check = 0;
            $themes_filter = array();
            $types_filter = array();
//            foreach($_GET as $key=>$value) {
//                if (strpos($key,'theme_') !== false) {
//                    $id = substr($key,6);
//                    $theme_check = 1;
//                    $themes_filter[] = 'work_themes.theme='.$id;
//                }
//            }
//
//            foreach($_GET as $key=>$value) {
//                if (strpos($key,'type_') !== false) {
//                    $id = substr($key,5);
//                    $type_check = 1;
//                    $types_filter[] = 'works_work_types.work_type='.$id;
//                }
//            }

            if ($theme_check == 1) {
                $joins .= " LEFT JOIN work_themes ON work_themes.work=works.id ";
                $where[] = '('.implode(' OR ',$themes_filter).')';
            }
            if ($type_check == 1) {
                $joins .= " LEFT JOIN works_work_types ON works.id = works_work_types.work ";
                $where[] = '(' . implode(' OR ', $types_filter) . ')';
            }
            if (!empty($_GET['search']))
                $where[] = "(works.title LIKE '%".$this->input->get('search')."%')";

            $where_str = implode(' AND ', $where);
            if (!empty($where_str))
                $where_str = "WHERE ".$where_str;
            $query = $this->db->query("SELECT
                                              works.id
                                        FROM works $joins $where_str
                                        GROUP BY id;");
            $data['total'] = $query->num_rows();
            $temp = $query->result_array();
            if ((string) $start != 'all')
                $limit = "LIMIT $start, 8";
            else if ($pagination == 1)
                $limit = "LIMIT $page, 8";
            else
                $limit = '';
            $joins .= " LEFT JOIN colors ON works.color=colors.id";
            $query_ = $this->db->query("SELECT
                                              works.id,
                                              works.title,
                                              works.short_description,
                                              works.create_date,
                                              works.update_date,
                                              works.content,
                                              works.preview,
                                              works.views,
                                              works.alias,
                                              works.content_html,
                                              colors.name AS color
                                        FROM works $joins $where_str
                                        GROUP BY id
                                        ORDER BY works.order
                                        $limit;");
            $data['start'] = $start;
            $data['current'] = $query_->num_rows();
            $result = $query_->result_array();
            $works = $this->get_work_types($this->get_themes($this->get_technologies($result)));
            $data['works'] = $works;
            $data['types'] = $this->get_all_types();
            $data['themes'] = $this->get_all_themes();
            if ($pagination == 1) {
                $config['base_url'] = '/cp/works';
                $config['total_rows'] = $data['total'];
                $config['per_page'] = 8;
                $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
            }

            return $data;
        }

        public function get_by_id($id=0)
        {
            if ($id == '') {
                $this->db->from($this->table);
            } else {
                $this->db->where(array('works.id' => $id));
                //$this->db->like('alias',$id);
                $this->db->from($this->table);
                $this->db->join('colors','colors.id=works.color', 'left');
                $this->db->select('works.id,
                                              works.title,
                                              works.short_description,
                                              works.create_date,
                                              works.update_date,
                                              works.content,
                                              works.preview,
                                              works.views,
                                              works.alias,
                                              works.content_html,
                                              colors.name AS color');
            }
            $result = $this->db->get()->result_array();
            if ((count($result) == 0) && ($id != 0))
                return false;
            $works = $this->get_work_types($this->get_technologies($this->get_themes($result)));
            return $works;
        }

        public function get_by_alias($alias='')
        {
            if ($alias == '') {
                $this->db->from($this->table);
            } else {
                //$this->db->where(array('id' => $id));
                $this->db->like('alias',$alias);
                $this->db->from($this->table);
            }
            $result = $this->db->get()->result_array();
            if ((count($result) == 0) || ($alias == ''))
                return false;
            $works = $this->get_work_types($this->get_technologies($this->get_themes($result)));
            $this->db->where(array('id' => $works[0]['id']));
            $this->db->update('works', array('views' => $works[0]['views'] + 1));
            return $works;
        }
    }