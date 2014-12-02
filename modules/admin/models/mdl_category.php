<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Admin Model
 */

class Mdl_category extends CI_Model {

    public $sub_table;
    public $table;

    function __construct() {

        parent::__construct();

        $this->table = 'category';
        $this->sub_table = 'sub_category';
        $this->create();
    }

    public function create() {
        if (!$this->db->table_exists($this->table) || !$this->db->table_exists($this->sub_table)):
            $this->load->dbforge();
            $fields = array(
                $this->table . '_id' => array('type' => 'INT', 'constraint' => '11', 'auto_increment' => TRUE),
                'name' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'created_at' => array('type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP')
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key($this->table . '_id', TRUE);
            $this->dbforge->create_table($this->table, TRUE);

            $fields = array(
                $this->sub_table . '_id' => array('type' => 'INT', 'constraint' => '11', 'auto_increment' => TRUE),
                $this->table . '_id' => array('type' => 'INT', 'constraint' => '11'),
                'name' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'created_at' => array('type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP')
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key($this->sub_table . '_id', TRUE);
            $this->dbforge->create_table($this->sub_table, TRUE);
        endif;
    }

    public function get($cond = 'All', $id = 1) {
        
        switch ($cond):
            case 1 :
                return
                                $this->db->where($this->table . "_id", $id)
                                ->from($this->table)
                                ->get()
                                ->first_row();
            case 'All' :
                return
                                $this->db->from($this->table)
                                ->order_by($this->table . "_id", 'DESC')
                                ->limit(PER_PAGE, $this->uri->segment(4))
                                ->get()->result();
        endswitch;
    }

    public function sub_get($cond = 'All', $cat_id = 1 , $id = 1) {
        switch ($cond):
            case 1 :
                return
                                $this->db->where($this->sub_table . "_id", $id)
                                ->from($this->sub_table)
                                ->get()
                                ->first_row();
            case 'All' :
                return
                                $this->db->where($this->table . "_id", $id)
                                ->where($this->table . "_id", $cat_id)
                                ->order_by($this->sub_table . "_id", 'DESC')
                                ->limit(PER_PAGE, $this->uri->segment(4))
                                ->get( $this->sub_table )->result();
        endswitch;
    }

    public function count() {
        return $this->db->get($this->table)->num_rows();
    }

    public function sub_count( $cat_id = 0 ) {
        return $this->db->where($this->table . "_id", $cat_id)->get($this->sub_table)->num_rows();
    }
    public function save() {
        $data = array();
        if ($this->input->post('name'))
            $data['name'] = $this->input->post('name');

        $this->db->insert($this->table, $data);
    }

    public function update($id) {
        $data = array();
        if ($this->input->post('name'))
            $data['name'] = $this->input->post('name');

        $this->db->where($this->table . '_id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where($this->table . '_id', $id)->delete($this->table);
    }

}

?>
