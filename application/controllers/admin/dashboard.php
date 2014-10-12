<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Dashboard extends Admin_Controller {
    public $data = array();
    
    public function __construct() {
        parent::__construct();
        
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
        $this->data ['meta_title'] = "PMK LP3I Makassar";
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');

        /*// Cek Login
        $exceptions_uris = array(
            'admin/user/login',
            'admin/user/logout'
        );
        if (in_array(uri_string(), $exceptions_uris) == FALSE) {
            if ($this->user_model->loggedin() == FALSE) {
                redirect('admin/user/login');
            }
        }*/
    }

    public function index() {
        $this->data['subview'] = 'admin/dashboard/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

}
