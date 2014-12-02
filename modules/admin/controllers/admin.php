<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
    public $data = array();
    function __construct() {   
        parent::__construct();
        if(!$this->session->userdata('is_admin_login'))redirect(base_url().'admin/login');
        no_cache();
        $this->data['module'] = 'admin';
        $this->data['nav'] = 1;
    }
    public function index( $data = '' )
    {   
        $this->data['view_file'] = 'dashboard';
        echo Modules::run('theme/admin', $this->data);
    }
}
?>