<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends MX_Controller {

    public $data = array();

    function __construct() {

        parent::__construct();
        no_cache();
        $this->load->model('mdl_login', 'login');
        $this->data['module'] = 'admin';
    }

    public function index() {
        if ($this->session->userdata('is_admin_login'))
            redirect(base_url() . 'admin');
        $this->data['view_file'] = 'login';
        echo Modules::run('theme/adminLogin', $this->data);
    }

    public function auth() {

        $result = $this->login->auth();
        if (!$result):
            $this->session->set_flashdata('error', 'Wrong Userid or Password!');
            redirect('admin/login');
        else:
            redirect('admin');
        endif;
    }

    public function check_user() {

        $this->login->auth_user();
        redirect('admin');
    }

    public function logout() {
        $array_items = array('full_name' => '', 'email' => '', 'is_login' => 0, 'is_admin_login' => 1, 'is_supper_login' => 0);
        $this->session->unset_userdata($array_items);
        redirect('admin/login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */