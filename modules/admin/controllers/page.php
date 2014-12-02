<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends MX_Controller {

    public $data = array();
    public $pagination_config = array();

    public function __construct() {
        parent :: __construct();
        no_cache();
        if (!$this->session->userdata('is_admin_login'))
            redirect(base_url() . 'admin/login');
        $this->load->model('mdl_page', 'page');
        $this->load->model('mdl_admin', 'admin');
        $this->data['module'] = 'admin';
        $this->data['title'] = 'CMS Page';
        $this->data['nav'] = '4';
        $this->data['inner_nav'] = '1';
        $this->pagination_config['uri_segment'] = '4';
        $this->pagination_config['per_page'] = PER_PAGE;
    }
    
    public function index() {
        $this->pagination_config['base_url'] = base_url('admin/page/index');
        $this->pagination_config['total_rows'] = $this->page->count();
        $this->pagination->initialize($this->pagination_config);
        $this->data['details'] = $this->page->get();
        $this->data['view_file'] = 'page/index';
        echo Modules::run('theme/admin', $this->data);
    }

    public function add() {
        $this->form_validation->set_rules('title', '', 'required');
        $this->form_validation->set_rules('description', '', 'required');
        if ($this->form_validation->run() == TRUE):
            $this->page->save();
            $this->session->set_flashdata('success', 'Page is inserted into records!');
            redirect('admin/page');
        endif;
        $this->data['view_file'] = 'page/add';
        echo Modules::run('theme/admin', $this->data);
    }

    public function edit($rid = 0) {
        $this->data['id'] = $this->decode_id($rid);
        $this->form_validation->set_rules('title', '', 'required');
        $this->form_validation->set_rules('description', '', 'required');
        if ($this->form_validation->run() == TRUE):
            $this->page->update($this->data['id']);
            $this->session->set_flashdata('success', 'Page is Updated!');
            redirect('admin/page');
        endif;

        $this->data['details'] = $this->page->get(1, $this->data['id']);
        $this->data['view_file'] = 'page/edit';
        echo Modules::run('theme/admin', $this->data);
    }

    public function delete($rid = 0) {
        $this->data['id'] = $this->decode_id($rid);
        $this->page->delete($this->data['id']);
        $this->session->set_flashdata('success', 'Page has been deleted!');
        redirect('admin/page');
    }

    public function decode_id($rid, $function) {
        $encoded = base64_decode($rid);
        @list($code, $id) = @explode('.', $encoded);
        if (!$id)
            redirect('admin/' . underscore(__CLASS__) . '/' . $function);
        return $id;
    }

}

?>
