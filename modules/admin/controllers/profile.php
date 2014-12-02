<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MX_Controller {
    
    public $data                =   array();
        
    public function __construct()
	{
            parent :: __construct();
            if(!$this->session->userdata('is_admin_login')) redirect(base_url().'admin/login');
            $this->load->model('mdl_profile' , 'profile');
            $this->load->model('mdl_admin' , 'admin');
            no_cache();
            $this->data['nav']          =   2;
            $this->data['inner_nav']    =   1;
            $this->data['module']  = 'admin';
	}
   
    public function index()
    {
            $this->form_validation->set_rules( 'full_name', 'Full Name', 'trim|required' );
            $this->form_validation->set_rules( 'user_name', 'User Id', 'trim|required');
            $this->form_validation->set_rules( 'email', 'Email', 'trim|valid_email|required');
            if ($this->form_validation->run() == TRUE):
                $this->admin->update(1);
                $this->session->set_flashdata('success', 'Your Profile details are updated!');  
                redirect('admin/profile');
            endif;
            $this->data['details']      =   $this->admin->get( 1 , 1);
            $this->data['title']        =   'Admin Profile';
            
            $this->data['view_file']    = 'profile/index';
            echo Modules::run( 'theme/admin' , $this->data);
    }

    public function changepassword()
    {
            
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('new_password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[new_password]');
            
            if ($this->form_validation->run() == TRUE):
                $result     =   $this->admin->update(1);
                if($result):
                    $this->session->set_flashdata('success', 'Your Admin Password is updated!');
                else:
                    $this->session->set_flashdata('error'  , 'Your Old Admin Password is wrong!');
                endif;
                
                redirect('admin/profile/changepassword');
            endif;
            
            $this->data['inner_nav']    =   2;
            $this->data['title']        =   'Admin Profile';
            $this->data['view_file']    = 'profile/password';
            echo Modules::run( 'theme/admin' , $this->data);
    }

    public function setting()
    {
        
            $this->form_validation->set_rules('email_from', 'Email From', 'trim|valid_email|required');
            $this->form_validation->set_rules('contact_email', 'Contact Email', 'trim|valid_email|required');
            $this->form_validation->set_rules('from_name', 'Sender Full Name', 'trim|required');
            $this->form_validation->set_rules('site_title', 'Site Title', 'trim|required');
            
            if ($this->form_validation->run() == TRUE):
                    $this->profile->update(1);
                    $this->session->set_flashdata('success', 'Your Profile details are updated!');  
                    redirect('admin/profile/setting');
            endif;
            $this->data['inner_nav']    =   3;
            $this->data['details']      =   $this->profile->get(1);
            $this->data['title']        =   'Admin Profile';
            $this->data['view_file']    = 'profile/setting';
            echo Modules::run( 'theme/admin' , $this->data);
    }

    public function decode_id($rid, $function) {
        $encoded = base64_decode($rid);
        @list($code, $id) = @explode('.', $encoded);
        if (!$id)
            redirect('admin/' . underscore(__CLASS__) . '/' . $function);
        return $id;
    }

}