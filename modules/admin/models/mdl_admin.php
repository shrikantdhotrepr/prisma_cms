<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Admin Model
 */

class Mdl_admin extends CI_Model {

    public $table;

    function __construct() {

        parent::__construct();

        $this->table = 'admin';
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

    public function password($password) {

        return
                        $this->db->where($this->table . "_id", 1)
                        ->where("password", $password)
                        ->from($this->table)
                        ->get()
                        ->num_rows();
    }

    public function count() {
        return $this->db->get($this->table)->num_rows();
    }

    public function update($id) {
        $data = array();
        if ($this->input->post('full_name'))
            $data['full_name'] = $this->input->post('full_name');

        if ($this->input->post('userid'))
            $data['userid'] = $this->input->post('userid');

        if ($this->input->post('email'))
            $data['email'] = $this->input->post('email');

        if ($this->input->post('new_password')):
            if ($this->password(md5($this->input->post('password')))):
                $data = array('password' => md5($this->input->post('new_password')));
                $this->db->where($this->table . '_id', $id);
                $this->db->update($this->table, $data);
                return TRUE;
            else:
                return FALSE;
            endif;
        else:
            $this->db->where($this->table . '_id', $id);
            $this->db->update($this->table, $data);
        endif;
    }

}

?>
