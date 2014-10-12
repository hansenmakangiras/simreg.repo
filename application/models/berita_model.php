<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */
class Berita extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_berita($no=20,$mulai=0){
        //$sql="SELECT * FROM berita where aktif=1 ORDER BY tgl_isi DESC LIMIT 0,20;";
        $this->db->select()->from('berita')->where('aktif',1)->order_by('tgl_isi','desc')->limit($no,$mulai);
        $query=$this->db->get();
        return $query->result_array();
    }
    
}

