<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Media extends MX_Controller {

    public $data = array();

    public function __construct() {
        parent :: __construct();
        if (!$this->session->userdata('is_admin_login'))
            redirect(base_url() . 'admin/login');
        $this->load->model('mdl_media', 'media');
        $this->load->library('upload');
        $this->load->helper('directory');
        no_cache();
        $this->data['nav'] = 3;
        $this->data['inner_nav'] = 1;
        $this->data['module'] = 'admin';
    }

    public function index() {
        $this->data['view_file'] = 'media/index';
        echo Modules::run('theme/admin', $this->data);
        
    }

    public function upload_files() {
       $this->load->view( 'media/upload');
    }
    
    public function image($rname)
    {
        $data['name'] = base64_decode($rname);
        $this->load->view( 'media/image' , $data);
    }
    public function delete()
    {
        $file = $this->input->post('filename');
        unlink(FCPATH."assets\uploads\general\\$file" );
        unlink(FCPATH."assets\uploads\general\\thumbs\\$file" );
    }
    public function img_delete($rfile)
    {
        $file = base64_decode($rfile);
        unlink(FCPATH."assets\uploads\general\\$file" );
        unlink(FCPATH."assets\uploads\general\\thumbs\\$file" );
        redirect('admin/media');
    }

    public function upload() {
        
        $config['upload_path'] = './assets/uploads/general/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '5000';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('files')) :
            $data = $this->upload->data();
            $config2 = array(
                'source_image' => $data['full_path'],
                'new_image' => './assets/uploads/general/thumbs/',
                'maintain_ratio' => true,
                'width' => 200,
                'height' => 200
            );
            $this->load->library('image_lib', $config2);
            if (!$this->image_lib->resize()) {
                return '';
            }
            echo json_encode($data);
        else :
            return '';
        endif;
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

