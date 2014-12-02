<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends MX_Controller {

    public $data = array();
    public $pagination_config = array();

    public function __construct() {
        parent :: __construct();
        no_cache();
        if (!$this->session->userdata('is_admin_login'))
            redirect(base_url() . 'admin/login');

        $this->load->model('mdl_category', 'category');
        $this->data['module'] = 'admin';
        $this->data['title'] = 'Category';
        $this->data['nav'] = '5';
        $this->data['inner_nav'] = '1';
        $this->pagination_config['uri_segment'] = '4';
        $this->pagination_config['per_page'] = PER_PAGE;
    }

    public function index() {

        $this->pagination_config['base_url'] = base_url('admin/category/index');
        $this->pagination_config['total_rows'] = $this->category->count();
        $this->pagination->initialize($this->pagination_config);
        $this->data['details'] = $this->category->get();
        $this->data['view_file'] = 'category/index';
        echo Modules::run('theme/admin', $this->data);
    }

    public function add() {
        $this->form_validation->set_rules('name', '', 'required');
        if ($this->form_validation->run() == TRUE):
            $this->category->save();
            $this->session->set_flashdata('success', 'Category is inserted into records!');
            redirect('admin/category');
        endif;
        $this->data['view_file'] = 'category/add';
        echo Modules::run('theme/admin', $this->data);
    }

    public function edit($rid = 0) {
        $this->data['id'] = $this->decode_id($rid);
        $this->form_validation->set_rules('name', '', 'required');
        if ($this->form_validation->run() == TRUE):
            $this->category->update($this->data['id']);
            $this->session->set_flashdata('success', 'Category is Updated!');
            redirect('admin/category');
        endif;

        $this->data['details'] = $this->category->get(1, $this->data['id']);
        $this->data['view_file'] = 'category/edit';
        echo Modules::run('theme/admin', $this->data);
    }

    public function delete($rid = 0) {
        $this->data['id'] = $this->decode_id($rid, 'page');
        $this->category->delete($this->data['id']);
        $this->session->set_flashdata('success', 'Category has been deleted!');
        redirect('admin/page');
    }

    public function sub( $rcat = '' ) {
        $this->data['cat_id'] = $this->decode_id($rcat);
        $this->data['cat_rid'] = $rcat;
        $this->pagination_config['base_url'] = base_url('admin/category/sub_index');
        $this->pagination_config['total_rows'] = $this->category->sub_count( $this->data['cat_id'] );
        $this->pagination->initialize($this->pagination_config);
        $this->data['details'] = $this->category->sub_get( 'All' , $this->data['cat_id']);
        $this->load->view( 'category/sub_index' , $this->data);
    }
    
    public function sub_add( $rcat = '' ) {
        $this->data['cat_id'] = $this->decode_id($rcat);
        $this->data['cat_rid'] = $rcat;
        $this->form_validation->set_rules('name', '', 'required');
        if ($this->form_validation->run() == TRUE):
            $this->category->save();
            $this->session->set_flashdata('success', 'Category is inserted into records!');
            redirect('admin/category');
        endif;
        $this->load->view( 'category/sub_add' , $this->data);
    }

    public function decode_id($rid, $function = '') {
        $encoded = base64_decode($rid);
        @list($code, $id) = @explode('.', $encoded);
        if (!$id)
            redirect('admin/' . underscore(__CLASS__) . '/' . $function);
        return $id;
    }

}

?>
