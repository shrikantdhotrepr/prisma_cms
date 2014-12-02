<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Theme extends MX_Controller {

    public $data = array();

    function __construct() {

        parent::__construct();
        no_cache();
    }

    public function admin($data) {
            $data['asset_path'] = 'backend/';
            $this->load->view( 'dashboard' , $data );
    }
    public function adminLogin($data) {
            $data['asset_path'] = 'backend/';
            $this->load->view( 'adminLogin' , $data );
    }

}

?>