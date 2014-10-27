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
        
        $this->data['site_title'] = config_item('site_title');
        $this->data['deskripsi'] = config_item('deskripsi');
        $this->data ['meta_title'] = "PMK LP3I Makassar";
        
    }
    
    public function index()
    {
        $this->data['content'] = 'public/partial/main_info';
        $this->load->view('public/_layout_public', $this->data);
    }
    public function tentang_kami(){
        $data['content'] = 'public/pages/tentang-kami';
        $this->load->view('public/_layout_public', $data);
    }
    public function blog(){
        $data['content'] = 'public/pages/blog';
        $this->load->view('public/_layout_public', $data);
    }
    public function gallery(){
        $data['content'] = 'public/pages/gallery';
        $this->load->view('public/_layout_public', $data);
    }
    public function contact(){
        $data['content'] = 'public/pages/contact';
        $this->load->view('public/_layout_public', $data);
    }
    
}

