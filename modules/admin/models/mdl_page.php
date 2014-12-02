<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Admin Model
 */

class Mdl_page extends CI_Model {

    public $table;

    function __construct() {

        parent::__construct();
        
        $this->table = 'page';
        $this->create();
    }

    public function create() {
        if (!$this->db->table_exists($this->table)):
            $this->load->dbforge();
            $fields = array(
                $this->table . '_id' => array('type' => 'INT', 'constraint' => '11', 'auto_increment' => TRUE),
                'title' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'meta_keywords' => array('type' => 'TEXT', 'null' => TRUE),
                'meta_description' => array('type' => 'TEXT', 'null' => TRUE),
                'description' => array('type' => 'TEXT', 'null' => TRUE),
                'created_at' => array('type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP')
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key($this->table . '_id', TRUE);
            $this->dbforge->create_table($this->table, TRUE);
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

    public function count() {
        return $this->db->get($this->table)->num_rows();
    }

    public function save()
    {
        $data = array();
        if( $this->input->post('title') )
            $data['title']  =  $this->input->post('title');
        
        if( $this->input->post('meta_keywords') )
            $data['meta_keywords']  =  $this->input->post('meta_keywords');

        if( $this->input->post('meta_description') )
            $data['meta_description']  =  $this->input->post('meta_description');
        
        if( $this->input->post('description') )
            $data['description']  =  $this->input->post('description');
        
        $this->db->insert( $this->table , $data);
        
    }

    public function update( $id )
    {
        $data = array();
        if( $this->input->post('title') )
            $data['title']  =  $this->input->post('title');
        
        if( $this->input->post('meta_keywords') )
            $data['meta_keywords']  =  $this->input->post('meta_keywords');

        if( $this->input->post('meta_description') )
            $data['meta_description']  =  $this->input->post('meta_description');
        
        if( $this->input->post('description') )
            $data['description']  =  $this->input->post('description');
        
        $this->db->where( $this->table . '_id', $id );
        $this->db->update(  $this->table , $data);
        
    }
    
    public function delete( $id )
    {
        $this->db->where( $this->table . '_id', $id )->delete( $this->table );
    }
}

?>
