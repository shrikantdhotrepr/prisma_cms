<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Admin Login Model
 */

class Mdl_login extends CI_Model {

    public $table;

    function __construct() {

        parent::__construct();

        $this->table = 'admin';
        $this->create();
    }

    public function create() {
        if (!$this->db->table_exists($this->table)):
            
            $this->load->dbforge();
            $fields = array(
                $this->table . '_id' => array('type' => 'INT', 'constraint' => '11', 'auto_increment' => TRUE),
                'full_name' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'user_name' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'email' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'password' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'password' => array('type' => 'VARCHAR', 'constraint' => '255', 'null' => TRUE),
                'created_at' => array('type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP')
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key($this->table . '_id', TRUE);
            $this->dbforge->create_table($this->table, TRUE);
            $data = array('full_name' => 'Prismic Reflections', 'user_name' => 'admin', 'email' => 'info@prismicareflections.com', 'password' => md5('admin'));
            $this->db->insert($this->table, $data);
            
        endif;
    }

    public function auth() {
        $userid = $this->input->post('userid');
        $password = md5($this->input->post('password'));
        $data = $this->db->select("full_name, email ")
                        ->where('user_name', $userid)
                        ->where('password', $password)
                        ->get($this->table)->first_row();
        if (count($data)):
            $session_data = array(
                'full_name' => $data->full_name,
                'email' => $data->email,
                'is_admin_login' => 1,
                'is_login' => 0,
                'is_supper_login' => 0
            );
            $this->session->set_userdata($session_data);
            return TRUE;
        else:

            return FALSE;
        endif;
    }

    public function auth_user() {
        $data = $this->db->select("full_name , email ")->get($this->table)->first_row();
        if (count($data)):
            $session_data = array(
                'full_name' => $data->full_name,
                'email' => $data->email,
                'is_admin_login' => 1,
                'is_login' => 0,
                'is_supper_login' => 0
            );
            $this->session->set_userdata($session_data);
            return TRUE;
        else:

            return FALSE;
        endif;
    }

}

?>
