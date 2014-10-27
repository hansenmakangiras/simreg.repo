<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 * Website : www.hansenmoko.web.id
 */

class Divisi extends Frontend_Controller
{
    public $data = array();   
        
    public function __construct() {
        parent::__construct();
        $this->data['errors'] = array();
        
        $this->data['site_title'] = config_item('site_title');
        $this->data['deskripsi'] = config_item('deskripsi');
        $this->data ['meta_title'] = "PMK LP3I Makassar";
        
    }
    
    public function index()
    {
        $this->data['content'] = 'frontend/pages/divisi';
        $this->load->view('frontend/_layout_frontend', $this->data);
    }
    
    
    
}

