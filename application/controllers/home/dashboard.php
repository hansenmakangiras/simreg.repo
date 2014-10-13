<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 * Website : www.hansenmoko.web.id
 */

class Dashboard extends Frontend_Controller
{
    public $data = array();   
        
    public function __construct() {
        parent::__construct();
        $this->data['errors'] = array();
        //$this->data['site_name'] = config_item('site_name');
        $this->data ['meta_title'] = "PMK LP3I Makassar";
    }
    
    public function index()
    {
        $this->load->view('frontend/beranda', $this->data);
    }
    
    
    
}

