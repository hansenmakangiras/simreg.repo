<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class User_Model extends MY_Model {

    protected $_nama_tabel = 'sys_users';
    protected $_order_by ='nama';
    //protected $level = FALSE;

    public function __construct() {
        parent::__construct();
        
    }

    public $rules = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'),
        'levelakses' => array(
            'field' => 'level_akses',
            'label' => 'Level',
            'rules' => 'trim|required'),
    );
    
    public $rules_admin = array(
        'nama' => array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required|xss_clean'),
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback__unique_email|xss_clean'),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|matches[password_confirm]'),
         'levelakses' => array(
            'field' => 'level_akses',
            'label' => 'level',
            'rules' => 'trim|required'),
    );

    public function login() {
        $user = $this->get_by(array(
            'email' => $this->input->post('email'),
            'password' => $this->hash($this->input->post('password')),
            'levelakses' => $this->input->post('level_akses'),
                ), TRUE);

        if (count($user)) {
            //log in user
            $data = array(
                'levelakses' => $user->levelakses,
                'nama' => $user->nama,
                'email' => $user->email,
                'id' => $user->id,
                'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
        }
    }
        
    public function get_level()
    {  
       
       $query = $this->db->get('ref_level');       
       foreach ($query->result() as $levels){
           if(count($levels)){
               $levels = array('level' => $levels->level_id);
           }else{
               echo 'Data tidak ditemukan';
           }
           //dump($levels);
           $this->session->set_userdata($levels);
       }
    }

    public function logout() {
        $this->session->sess_destroy();
    }

    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }

    public function get_new() {
        $user = new stdClass();
        $user->nama = '';
        $user->email = '';
        $user->pasword = '';
        $user->levelakses = '';
        return $user;
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

}
