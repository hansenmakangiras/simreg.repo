<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Berita extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
    }
    
    public function index(){
        //dump($data);
        $data['berita'] = $this->post->get_berita();
        echo "<pre>"; print_r($data['berita']);echo "</pre>";
        
        //$this->load->view('admin/berita/index', $this->data);
    }
    
}

