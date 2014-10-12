<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class User extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        //$this->load->model('backend_model');
        //$this->load->model('user_model');
    }

    public function index() {
        //Mengambil semua user
        $this->data['users'] = $this->user_model->get();
        $this->data['levels'] = $this->user_model->get_level();
        
        //Menampilkan user
        $this->data['subview'] = 'admin/user/index';
        $this->load->view('admin/_layout_main', $this->data);
    }
    
    public function edit($id = NULL) {
        // Mengambil satu user atau mengeset satu jika tidak ada
        if ($id) {
            $this->data['user'] = $this->user_model->get($id);
            count($this->data['user']) || $this->data['errors'][] = 'User tidak dapat ditemukan';
        } else {
            $this->data['user'] = $this->user_model->get_new();
        }

        // Setting validasi login form user
        $rules = $this->user_model->rules_admin;
        $id || $rules['password'] = '|required';
        $this->form_validation->set_rules($rules);

        // Proses validasi login form
        If ($this->form_validation->run() == TRUE) {
            $data = $this->user_model->array_from_post(array('nama', 'email', 'password','levelakses'));
            $data['password'] = $this->user_model->hash($data['password']);
            $this->user_model->save($data, $id);
            redirect('admin/user');
        }

        // Mengisi atau menampilkan data 
        $this->data['subview'] = 'admin/user/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id) {
        $this->user_m->delete($id);
        redirect('admin/user');
    }

    public function login() {
        // Redirect user bila sudah berhasil login
        $dashboard = 'admin/backend';
        
        $this->user_model->loggedin() == FALSE || redirect($dashboard);
        
        // Setting validasi login form
        $rules = $this->user_model->rules;
        $this->form_validation->set_rules($rules);
        
        // Proses validasi login
        If ($this->form_validation->run() == TRUE) {
            
            // Jika user berhasil login redirect ke halaman dashboard admin
            if ($this->user_model->login() == TRUE) {
                // Cek Level akses user 
                $this->user_model->get_level();
                redirect($dashboard);
            } else {
                $this->session->set_flashdata('Error', 'Kombinasi Email / Pass anda tidak tersedia');
                redirect('admin/user/login', 'refresh');
            }
        }   

        // Menampilkan halaman login
        
        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/user/login', $this->data);
    }
    
    public function logout() {

        $this->user_model->logout();
        redirect('admin/user/login');
    }

    public function _unique_email($str) {
        // Jangan memvalidasi jika alamat email sudah ada
        // kecuali email tersebut adalah email user yang login saat itu
        $id = $this->uri->segment(4);
        $this->db->where('email', $this->input->post('email'));
        !$id || $this->db->where('id !=', $id);
        $user = $this->user_model->get();

        if (count($user)) {
            $this->form_validation->set_message('_unique_email', '%s harus unik');
            return FALSE;
        }
        return TRUE;
    }
    
}
