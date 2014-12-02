<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Admin Model
 */

class Mdl_profile extends CI_Model {

    public $table;

    function __construct() {

        parent::__construct();

        $this->table = 'settings';
        $this->create();
    }

    public function create() {
        if (!$this->db->table_exists($this->table)):
            
            $this->load->dbforge();
            $fields = array(
                $this->table . '_id' => array('type' => 'INT', 'constraint' => '11', 'auto_increment' => TRUE),
                'email_from' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'from_name' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'site_title' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'contact_email' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'created_at' => array('type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP')
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key($this->table . '_id', TRUE);
            $this->dbforge->create_table($this->table, TRUE);
            $data = array( 'email_from' => 'sender@domain.com',  'from_name' => 'Site Admin',  'site_title' => 'Prismic Reflections', 'contact_email' => 'contact@domain.com');
            $this->db->insert($this->table, $data);

        endif;
    }

    public function get($id = 1) {

        return
                        $this->db->where($this->table . "_id", $id)
                        ->from($this->table)
                        ->get()
                        ->first_row();
    }

    public function update($id) {
        $data = array();
        if ($this->input->post('email_from'))
            $data['email_from'] = $this->input->post('email_from');

        if ($this->input->post('from_name'))
            $data['from_name'] = $this->input->post('from_name');

        if ($this->input->post('site_title'))
            $data['site_title'] = $this->input->post('site_title');

        if ($this->input->post('contact_email'))
            $data['contact_email'] = $this->input->post('contact_email');

        $this->db->where($this->table . '_id', $id);
        $this->db->update($this->table, $data);
    }

}

?>
